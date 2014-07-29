<?php
return array(
        'admin' => array('/admin(/<controller>(/<action>(/<id>)))', array(
                                        'namespace' => 'App\Admin\\',
                                        'controller' => 'Admin',
                                        'action' => 'index'
                                         )
                         ),
        'default' => array('(/<controller>(/<action>(/<id>)))', array(
                                        'controller' => 'Hello',
                                        'action' => 'index'
                                         )
                         ),

);