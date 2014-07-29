return array(
    'default' => array(
        'model' => 'fairy',
 
        //Login providers
        'login' => array(
            'password' => array(
                'login_field' => 'username',
 
                //Make sure that the corresponding field in the database
                //is at least 50 characters long
                'password_field' => 'password'
            ),
            'facebook' => array(
 
                //Facebook App ID and Secret
                'app_id' => '138626646318836',
                'app_secret' => '49451a54b61464645321d9fbcb70000',
 
                //Permissions to request from the user
                'permissions'  => array('user_about_me'),
 
             
    'fbid_field' => 'fb_id',
 
                //Redirect user here after he logs in
                'return_url' => '/fairies'
            )
        ),
 
        //Role driver configuration
        'roles' => array(
            'driver' => 'relation',
            'type' => 'has_many',
 
            //Field in the roles table
            //that holds the models name
            'name_field' => 'name',
            'relation' => 'roles'
        )
    )
);