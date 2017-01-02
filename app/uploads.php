<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class uploads extends Model
{
    move_uploaded_file($_FILES['webcam']['tmp_name'], 'uploads/webcam'.md5(time()).rand(383,1000).'.jpg'); 
}
