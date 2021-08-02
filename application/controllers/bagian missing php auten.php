<?php
$this->ModelUser->simpanData($data);

    }
    private function _sendEmail($token, $type){
        $config = [
            'protocol'  =>'smtp',
            'smtp_host' =>'ssl://smtp.googlemail.com',
            'smtp_user' => 'killua060701@gmail.com',
            'smtp_pass' => 'alfianw2001',
            'smtp_port' => 465,
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n"
        ];

        $this->load->library('email', $config);
        $this->email->from('killua060701@gmail.com', 'Alfian Winuarto');
        $this->email->to($this->input->post('email'));
        if($type == 'verify'){
            $this->email->subject('Account Verification');
            $this->email->message('Click this link to verify your account : <a
            href="'. base_url() . 'autentifikasi/verify?email=' . $this->input->post('email') . '&
            token=' . urlencode($token) . '">Activate</a>');
        }
        else {
            $this->email->subject('Forgot Password');
            $this->email->message('Click this if you forgot your password : <a
            href="'. base_url() . 'autentifikasi/verify?email=' . $this->input->post('email') . '&
            token=' . urlencode($token) . '">Activate</a>');
        }

        if($this->email->send()){
            return true;
        }   else  {
                echo $this->email->print_debugger();
                die;
        }
    
    }
?>