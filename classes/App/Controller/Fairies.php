namespace App\Controller;
class Fairies extends Page{
    public function action_index(){
 
        //Only allow users with the 'pixie' role.
        if(!$this->logged_in('pixie'))
            return;
 
        $this->view->fairy = $this->pixie->auth->user();
 
        //Include 'hello.php' subview
        $this->view->subview = 'hello';
 
    }
 
    public function action_login() {
        if($this->request->method == 'POST'){
            $login = $this->request->post('username');
            $password = $this->request->post('password');
 
            //Attempt to login the user using his
            //username and password
            $logged = $this->pixie->auth
                    ->provider('password')
                    ->login($login, $password);
 
            //On successful login redirect the user to
            //our protected page
            if ($logged)
                return $this->redirect('/fairies');
        }
        //Include 'login.php' subview
        $this->view->subview = 'login';
    }
 
    public function action_logout() {
        $this->pixie->auth->logout();
        $this->redirect('/fairies/login');
    }
}