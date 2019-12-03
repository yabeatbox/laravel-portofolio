<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Portofolios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_portofolios', function (Blueprint $table){
          $table->bigIncrements('id');
          $table->string('icon');
          $table->string('title');
          $table->text('content');

          $table->timestamps();
        });

        DB::table('tb_portofolios')->insert([
        'icon' => 'fa fa-video-camera',
        'title' => 'Computer Vision Development',
        'content'=> 'It could refer to either the software developers who create vision algorithms for recognizing patterns in images, 
        or engineers who use that software in their applications (in automated manufacturing, quality control, 
        part handling, etc',
        ]);

        DB::table('tb_portofolios')->insert([
            'icon' => 'fa fa-video-camera',
            'title' => 'Computer Vision Analyzer',
            'content'=> 'Computer vision tasks include methods for acquiring, processing, 
            analyzing and understanding digital images, and extraction of high-dimensional data 
            from the real world in order to produce numerical or symbolic information, 
            e.g. in the forms of decisions.',
            ]);
        
        DB::table('tb_portofolios')->insert([
            'icon' => 'fa fa-video-camera',
            'title' => 'Landmark & Image Segmentation',
            'content'=> 'n computer vision, image segmentation is the process of partitioning a 
            digital image into multiple segments. The goal of segmentation is to simplify and/or change the representation of
             an image into something that is more meaningful and easier to analyze.',
                ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExist('tb_portofolios');
    }
}
