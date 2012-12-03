<?
class QuestionsController extends AppController {
    public $helpers = array('Html', 'Form');
    
     public function () {
        $this->set('posts', $this->Post->find('all'));
    }
    
    
}
?>
