                      
                        <div class="span-24">
                                <div id="logo" class="span-7">
                                        <h1><?php echo $this->Html->link( $this->Html->image('logo.png', array('alt' => __('QuickTest', true), 'width' => '250', 'height' => '52')), '/', array('title' => __('ImportLatino', true), 'escape' => false) ); ?></h1>
                                </div>
                                
                                <div id="toolbar" class="span-17 last">
                                        <div class="header-links span-17 last">
                                                <ul class="basic-horizontal-list">
                                                        <li><?php echo $this->Html->link(__('Comprar', true), '#', array('title' => __('Comprar', true), 'escape' => false)); ?></li>
                                                        <li><?php echo $this->Html->link(__('Vender', true), '#', array('title' => __('Vender', true), 'escape' => false)); ?></li>
                                                        <li><?php echo $this->Html->link(__('Comunidad', true), '#', array('title' => __('Comunidad', true), 'escape' => false)); ?></li>
                                                        <li><?php echo $this->Html->link(__('Favoritos', true), '#', array('title' => __('Favoritos', true), 'escape' => false)); ?></li>
                                                        <li><?php echo $this->Html->link(__('Ayuda', true), '#', array('title' => __('Ayuda', true), 'escape' => false)); ?></li>
                                                </ul>
                                        </div>
                                        
                                        <div class="language span-8">
                                                <ul class="basic-horizontal-list">
                                                        <li class="active"><?php echo $this->Html->link( $this->Html->image('icons/flags/es.gif', array('alt' => __('Espa&ntilde;ol', true), 'width' => '16', 'height' => '11')), '/', array('title' => __('Espa&ntilde;ol', true), 'escape' => false) ); ?></li>
                                                        <li><?php echo $this->Html->link( $this->Html->image('icons/flags/us.gif', array('alt' => __('Ingl&eacute;s', true), 'width' => '16', 'height' => '11')), '/', array('title' => __('Ingl&eacute;s', true), 'escape' => false) ); ?></li>
                                                        <li><?php echo $this->Html->link( $this->Html->image('icons/flags/fr.gif', array('alt' => __('Franc&eacute;s', true), 'width' => '16', 'height' => '11')), '/', array('title' => __('Franc&eacute;s', true), 'escape' => false) ); ?></li>
                                                </ul>
                                        </div>
                                        
                                        <div class="user span-9 last">
                                                <ul class="basic-horizontal-list">
                                                        <li class="username">Bienvenido:</li>
                                                        <li class="first">
                                                                <?php
                                                                        if($this->Session->read('Auth.User.id')){
                                                                                echo $this->Session->read('Auth.User.name');
                                                                        } else{
                                                                                echo $this->Html->link(__('Iniciar Sesi&oacute;n', true), array('controller' => 'users', 'action' => 'login'), array('title' => __('Iniciar Sesi&oacute;n', true), 'escape' => false));
                                                                                
                                                                        }
                                                                                 ?>
                                                        </li>
                                                        <li>
                                                                <?php
                                                                        if($this->Session->read('Auth.User.id')){
                                                                                echo $this->Html->link(__('Salir', true), array('controller' => 'users', 'action'=>'logout'));
                                                                        } else{
                                                                        echo $this->Html->link(__('Registro', true), array('controller' => 'pages', 'action' => 'registro'), array('title' => __('Registro', true), 'escape' => false)); 
                                                                                
                                                                        }
                                                                                 ?>
                                                
                                                        </li>
                                                </ul>
                                        </div>
                                </div>
                        </div>
                        <div id="navbar" class="span-24">
                                <ul class="horizontal-navbar">
                                        <li class='home <?php if($controlador == 'products') echo "active" ?>  '><?php echo $this->Html->link(__('Productos', true), '#', array('title' => __('Productos', true), 'escape' => false)); ?></li>
                                        <li><?php echo $this->Html->link(__('Vendedores', true), '#', array('title' => __('Vendedores', true), 'escape' => false)); ?></li>
                                        <li><?php echo $this->Html->link(__('Compradores', true), '#', array('title' => __('Compradores', true), 'escape' => false)); ?></li>
                                        <li <?php  if ($accion == 'dashboard' || $accion == 'dashboard_administrator') echo " class = 'active'"?>>
                                        <?php 
                                        
                                                $action = 'dashboard';
                                                switch($this->Session->read('Auth.User.rol')){
                                                        case 'customer':
                                                                $controller = 'customers';
                                                        break;
                                                        case 'company':
                                                                $controller = 'companies';
                                                        break;
                                                        case 'admin':
                                                                $controller = 'users';
                                                                $action = 'dashboard_administrator';
                                                        break;
                                                        default:
                                                                $controller = 'users';
                                                                $action = 'login';
                                                }

                                        echo $this->Html->link(__('Panel de Control', true), array('controller' => $controller, 'action' => $action), array('title' => __('Panel de Control', true), 'escape' => false)); ?></li>
                                        <li><?php echo $this->Html->link(__('Ayuda', true), '#', array('title' => __('Ayuda', true), 'escape' => false)); ?></li>
                                </ul>
                        </div>
                        <div id="advanced-search" class="span-24">
                                
                                <form class="search" method='get' action = "<?php echo $this->Html->url(array('controller' => 'products', 'action' => 'search')) ?>">
                                        <input name = "query" type="text" class="search-input span-17" value="" title="Texto de la b&uacute;squeda" />
                                <?php /*?>
                                        <!--
                                        <select>
                                                <option selected="selected">Todas las Categor&iacute;as</option>
                                        </select>
                                        --> <?php */ ?>
                                        <input class="submit-button" type="submit" value="Buscar" />
                                        <?php echo $this->Html->link('B\FAsqueda avanzada', array('controller' => 'products', 'action' => 'advanced_search'), array('title'=>'Ir al panel de b\FAsqueda avanzada', 'escape' => false))?>
                                        <?php ?>
                                </form>
                        </div>
