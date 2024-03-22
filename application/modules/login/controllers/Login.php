<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends MY_Controller
{

    public function index()
    {
        $data['page_title'] = "Login";
        $data['tab_title'] = "Login";

        $this->load_login_page('login', $data);
    }

    public function user_login()
    {
        $response['success'] = false;
        $response['message'] = "Unknown error. Please try again later!";
        $post = $this->input->post();
        $username = $this->input->post('Username');
        $password = $this->input->post('Password');
        if (!empty($post)) {
            $option['select'] = '';
            $option['where'] = array(
                'username' => $username
            );
            $option['join'] = array(
                'user_info as info' => 'info.user_info_id = user.user_info_id'
            );

            $user = getrow('user', $option);
            if ($user) {
                if (password_verify($password, $user[0]['password'])) {
                    $response['success'] = true;
                    $response['message'] = "Welcome Back!";
                    $this->session->set_userdata('user_id', $user[0]['user_id']);
                } else {
                    $response['message'] = "Password Incorrect!";
                }
            }
        }
        json($response);
    }
}
