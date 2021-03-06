<?php
App::uses('AppController', 'Controller');
/**
 * Periods Controller
 *
 * @property Period $Period
 */
class PeriodsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Period->recursive = 0;
		$this->set('periods', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Period->id = $id;
		if (!$this->Period->exists()) {
			throw new NotFoundException(__('Invalid period'));
		}
		$this->set('period', $this->Period->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Period->create();
			if ($this->Period->save($this->request->data)) {
				$this->Session->setFlash(__('The period has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The period could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Period->id = $id;
		if (!$this->Period->exists()) {
			throw new NotFoundException(__('Invalid period'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Period->save($this->request->data)) {
				$this->Session->setFlash(__('The period has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The period could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Period->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Period->id = $id;
		if (!$this->Period->exists()) {
			throw new NotFoundException(__('Invalid period'));
		}
		if ($this->Period->delete()) {
			$this->Session->setFlash(__('Period deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Period was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
