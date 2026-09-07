<?php
declare(strict_types=1);

namespace App\Controller;

class ArtistsController extends AppController
{
    public function index(): void{
        $artists = $this->paginate($this->Artists);
        $this->set(compact('artists'));
    }
}