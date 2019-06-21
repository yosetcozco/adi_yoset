<?php

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
// use Cake\I18n\I18n;
class AppController extends Controller
{


    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
       $this->loadComponent('Flash');
    $this->loadComponent('Auth', [
        // Added this line
        'authorize'=> 'Controller',
        'authenticate' => [
            'Form' => [
                'fields' => [
                    'username' => 'email',
                    'password' => 'password'
                ]
            ]
        ],
        'loginAction' => [
            'controller' => 'Users',
            'action' => 'login'
        ],
         // If unauthorized, return them to page they were just on
        'unauthorizedRedirect' => $this->referer()
    ]);

    // Allow the display action so our pages controller
    // continues to work. Also enable the read only actions.
    $this->Auth->allow(['display','view', 'index','login','logout']);
        
    }
    public function isAuthorized($user){
        /*    if(isset($user['status']) and $user['status'] === '1')
        {
            return true;
        }*/
    return false;
    }
    
    //    public function beforeDelete($event, $entity, $options)
    // {
    //     if ($entity->role == '1')
    //     {
    //         return false;
    //     }
    //     return true;
    // }
    
}
