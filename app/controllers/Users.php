<?php
class Users extends Controller
{
    private $userModel;
    public function __construct()
    {
        $this->userModel = $this->model('User');
    }

    public function register()
    {
        // check for post
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'password' => trim(md5($_POST['password'])),
                'confirm_password' => trim(md5($_POST['confirm_password'])),
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
            ];

            // Validate Email
            if (empty($data['email'])) {
                $data['email_err'] = 'Please enter email';
            } else {
                // check if email exists
                if ($this->userModel->findUserByEmail($data['email'])) {
                    $data['email_err'] = 'Email is already taken';
                }
            }

            //  Validate name
            if (empty($data['name'])) {
                $data['name_err'] = 'Please enter name';
            }
            // Validate password
            if (empty($_POST['password'])) {
                $data['password_err'] = 'Please enter password';
            } else {
                $password = trim($_POST['password']);
                $hashed_password = trim(md5($password)); // Hash the password
                if (strlen($password) < 8) {
                    $data['password_err'] = 'Password must be at least 8 characters';
                } else {
                    $data['password'] = $hashed_password;
                }
            }


            // Validate confirm password
            if (empty($_POST['confirm_password'])) {
                $data['confirm_password_err'] = 'Please confirm password';
            } else {
                $confirm_password = trim($_POST['confirm_password']);
                $hashed_confirm_password = trim(md5($confirm_password)); // Hash the confirm password
                if ($data['password'] != $hashed_confirm_password) {
                    $data['confirm_password_err'] = 'Passwords do not match';
                } else {
                    $data['confirm_password'] = $hashed_confirm_password;
                }
            }


            // If the form is submitted with errors, reset password and confirm password fields
            if (!empty($data['password_err']) || !empty($data['confirm_password_err'])) {
                $data['password'] = '';
                $data['confirm_password'] = '';
            } elseif
            // make sure errors are empty
            (empty($data['email_err']) && empty($data['name_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])) {
                //   register user
                if ($this->userModel->register($data)) {
                    flash('register_success', 'You are registered, you can login ');
                    redirect('users/login');
                } else {
                    flash('register_failed', 'Registration failed', 'alert alert danger');
                    die('Something went wrong');
                }

            } else {
                // load with errors
                $this->view('users/register', $data);
            }
        } else {
            $data = [
                'name' => '',
                'email' => '',
                'password' => '',
                'confirm_password' => '',
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
            ];
            $this->view('users/register', $data);


        }
    }

    public function login()
    {
        // check for post
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'email' => trim($_POST['email']),
                'password' => trim(md5($_POST['password'])),
                'email_err' => '',
                'password_err' => '',

            ];
            //  Validate Email
            if (empty($data['email'])) {
                $data['email_err'] = 'Please enter email';
            }

            // Validate password
            if (empty($_POST['password'])) {
                $data['password_err'] = 'Please enter password';
            }
            
            // check for user/email
            if($this->userModel->findUserByEmail($data['email'])){
                // user found
            }else{
                // user not found
                $data['email_err']= 'No user found';
            }

            if (!empty($data['password_err'])) {
                $data['password'] = '';
            } elseif
            // make sure errors are empty
            (empty($data['email_err']) && empty($data['password_err'])) {
            //    validated, check and set logged in user
            $loggedInUser = $this->userModel->login($data['email'], $data['password']);
            if($loggedInUser){
                //create user session
                $this->createUserSession($loggedInUser);
            }else{
                $data['password_err'] = 'Password incorrect';
                $this->view('users/login', $data);
            }
            } else {
            $this->view('users/login', $data);
               
            }
        } else {
            $data = [
                'email' => '',
                'password' => '',
                'email_err' => '',
                'password_err' => ''
            ];
            $this->view('users/login', $data);


        }
    }

    public function createUserSession($user){
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_email'] = $user->email;
        $_SESSION['user_name'] = $user->name;
        redirect('posts');
    }

    public function logout(){
        unset($_SESSION['user_id']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_name']);
        session_destroy();
        redirect('users/login');
    }

   
}