<?php
session_start();

// flash message   helper
// EXAMPLE- flash('register_success', 'You are registered', 'alert alert danger');This overrides alert success.
// DISPLAY IN THE VIEW - echo flash('register_success');
function flash($name = '', $message = '', $class = 'alert alert-success'){
 if(!empty($name)){
    if(!empty($message) && empty($_SESSION[$name])){
        // checking if its not empty then it should unset it first
        if(!empty($_SESSION[$name])){
            unset($_SESSION[$name]);
        }
        if(!empty($_SESSION[$name. '_class'])){
            unset($_SESSION[$name. '_class']);
        }

        // we are setting the session name and class after unsetting it
         $_SESSION[$name] = $message;
         $_SESSION[$name. '_class'] = $class;
    } elseif(empty($message) && !empty($_SESSION[$name])){
       $class = !empty($_SESSION[$name. '_class']) ? $_SESSION[$name. '_class']: '';
       echo '<div class="'.$class.'" id="msg-flash">'.$_SESSION[$name].'</div>';
       unset($_SESSION[$name]);
       unset($_SESSION[$name. '_class']);
    }
 }

 
}

function isLoggedIn(){
    if(isset($_SESSION['user_id'])){
        return true;
    }else{
        return false;
    }
}