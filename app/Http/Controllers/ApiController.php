<?php

namespace App\Http\Controllers;

use App\Models\Catigory;
use App\Providers\ChescService;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    private $config;

    public function __construct(protected ChescService $post){
        // USER

        $this->config = [
            'list' => [
                'columns' => ['id','name','email','password','created_at','updated_at'],
                'relations' => ['profile','level','grup','location','comment','video']
            ]
        ];

        // PROFIL

        // $this->config = [
        //     'list' => [
        //         'columns' => ['id','user_id','instagram','githup','wep'],
        //         'relations' => ['user']
        //     ]
        // ];

        // LEVEL

        // $this->config = [
        //     'list' => [
        //         'columns' => ['id','name'],
        //         'relations' => ['user']
        //     ]
        // ];
     
        // GRPUP

        // $this->config = [
        //         'list' => [
        //             'columns' => ['id','user_id','name'],
        //             'relations' => ['user']
        //         ]
        //     ];

        // COMMENTYPE

        // $this->config = [
        //         'list' => [
        //             'columns' => ['id','user_id','body','commentable_type'],
        //             'relations' => ['user']
        //         ]
        //     ];

             // CATIGORY

        // $this->config = [
        //         'list' => [
        //             'columns' => ['id','user_id'],
        //             'relations' => ['post','user']
        //         ]
        //     ];

        // POSTS

        // $this->config = [
        //         'list' => [
        //             'columns' => ['id','catigory_id','user_id'],
        //             'relations' => ['catigory','user']
        //         ]
        //     ];

        // VIDEOS

        // $this->config = [
        //         'list' => [
        //             'columns' => ['id','catigory_id','user_id'],
        //             'relations' => ['catigory','user']
        //         ]
        //     ];
    }
 
    public function index()
    {
        $client = $this->post->getList($this->config['list']);
        return response()->json(["items"=>$client]);
  
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
