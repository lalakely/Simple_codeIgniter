<?php

namespace App\Controllers;

use App\Models\Personne;

class Home extends BaseController
{
    private $model ;

    public function __construct(){
        $this->model = new Personne();
    }

    public function home(): string 
    {
        $data = $this->model->findAll();
        return view('home' , ["personnes" => $data]);
    }

    public function ajout(): string
    {
        return view('ajout');
    }

    public function aajout() {
        $nom = $this->request->getVar('nom');
        $prenom = $this->request->getVar('prenom');
        $age = $this->request->getVar('age');

        $data = [
            "nom" => $nom,
            "prenom" => $prenom,
            "age" => $age
        ];

        $this->model->insert($data);
        return redirect()->to(base_url('/'));
    }

    public function suppression()
    {
        $id = $this->request->getVar('id');
        $data = $this->model->delete($id);
        return redirect()->to(base_url('/'));
    }

    public function modification (): string {
        $nom = $this->request->getVar('nom');
        $prenom = $this->request->getVar('prenom');
        $age = $this->request->getVar('age');
        $id = $this->request->getVar('id');

        $data["personne"] = [
            "nom" => $nom,
            "prenom" => $prenom,
            "age" => $age,
            "id" => $id
        ];
        return view('modifier' , $data);
    }

    public function modifier(){
        $nom = $this->request->getVar('nom');
        $prenom = $this->request->getVar('prenom');
        $age = $this->request->getVar('age');
        $id = $this->request->getVar('id');

        $data = [
            "nom" => $nom,
            "prenom" => $prenom,
            "age" => $age,
        ];

        $this->model->update($id, $data);
        return redirect()->to(base_url('/'));
    }

    public function search(): string
    {   
        $search = $this->request->getVar('search');
        $filter = $this->request->getVar('filter');
        $data = $this->model->like($filter , $search,'after')->findAll();
        return view('home' , ["personnes" => $data]); 
    }
}
