<?php


namespace App\classes;


class Data
{
    public $projects;
 public function __construct()
 {
     $this->projects=[
        0=>[
            'id'=>1,
            'categoryId'=>1,
            'categoryName'=>'',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled',
            'image'=>'day-to-routine.png',
            'liveSite'=>'',
            'clientSite'=>'',
            'serverSide'=>'',
            'projectName'=>'Project-1'

        ],
        1=>[
            'id'=>2,
            'categoryId'=>2,
            'categoryName'=>'',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled',
            'image'=>'a9-quiz.png',
            'liveSite'=>'',
            'clientSite'=>'',
            'serverSide'=>'',
            'projectName'=>'Project-1'

        ],
        2=>[
            'id'=>3,
            'categoryId'=>3,
            'categoryName'=>'',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled',
            'image'=>'donate-today-moc.png',
            'liveSite'=>'',
            'clientSite'=>'',
            'serverSide'=>'',
            'projectName'=>'Project-1'

        ],
        3=>[
            'id'=>4,
            'categoryId'=>4,
            'categoryName'=>'',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled',
            'image'=>'e-tech-learn-with-sourav.png',
            'liveSite'=>'',
            'clientSite'=>'',
            'serverSide'=>'',
            'projectName'=>'Project-1'

        ],
        4=>[
            'id'=>5,
            'categoryId'=>5,
            'categoryName'=>'',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled',
            'image'=>'news-portal.png',
            'liveSite'=>'',
            'clientSite'=>'',
            'serverSide'=>'',
            'projectName'=>'Project-1'

        ],
        5=>[
            'id'=>6,
            'categoryId'=>6,
            'categoryName'=>'',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled',
            'image'=>'responsive-world-cup.png',
            'liveSite'=>'',
            'clientSite'=>'',
            'serverSide'=>'',
            'projectName'=>'Project-1'

        ],
        6=>[
            'id'=>7,
            'categoryId'=>7,
            'categoryName'=>'',
            'description'=>'',
            'image'=>'select-best-five.png',
            'liveSite'=>'',
            'clientSite'=>'',
            'serverSide'=>'',
            'projectName'=>'Project-1'

        ],
     ];
 }

 public function getAllProjects(){
     return $this->projects;
 }


    public function getSingleProjectsById($id){
        foreach($this->projects as $item){
            if($item['id']==$id){
                return $item;
            }
        }
    }

}