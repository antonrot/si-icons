<?php

class ProjectsApi{

    public $data;

    public function __construct()
    {
        add_action('rest_api_init', [$this, 'init']);
        $this->data = [
            ['id' => 1, 'name' => 'pr-1'],
            ['id' => 2, 'name' => 'pr-2'],
            ['id' => 3, 'name' => 'pr-3'],
            ['id' => 4, 'name' => 'pr-4'],
        ];
    }

    public function init(){
        $this->routes();
    }

    private function routes() {
        register_rest_route('proj/v1', '/projects', [
            'methods' => 'GET',
            'callback' => [ $this, 'get_all' ],
            //'permission_callback' => array( $this, 'data_permissions_check' ),
        ]);
    }

    public function data_permissions_check( $request ) {
        if ( ! current_user_can( 'read' ) ) {
            return new WP_Error( 'rest_forbidden', esc_html__( 'You cannot view the post resource.' ), array( 'status code' => 403 ) );
        }
        return true;
    }

    public function get_all() {
        return $this->data;
    }
}
new ProjectsApi();