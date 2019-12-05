<?php

use Illuminate\Database\Seeder;

class portofoliosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
                'content'=> 'Computer vision, image segmentation is the process of partitioning a 
                digital image into multiple segments. The goal of segmentation is to simplify and/or change the representation of
                 an image into something that is more meaningful and easier to analyze.',
                    ]);
    }
}
