<?php

namespace App\Models;
use CodeIgniter\Model;
class Personne extends Model {
    protected $table = 'personne';
    protected $allowedFields = ["id",
                                "nom",
                                "prenom",
                                "age"
                            ];
}