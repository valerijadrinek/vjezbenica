<?php

namespace App\Service;

class Service 
{
      public static function arrayData()
       {
        $arrayData = [
            ['distance' => 'long', 'time' => '1:14:06', 'ageCategory' =>'M18-25'],
            ['distance' => 'long', 'time' => '7:14:06', 'ageCategory' =>'M18-25'],
            ['distance' => 'long', 'time' => '3:14:06', 'ageCategory' =>'M25-36'],
            ['distance' => 'long', 'time' => '4:14:06', 'ageCategory' =>'M18-25'],
            ['distance' => 'medium', 'time' => '5:14:06', 'ageCategory' =>'M18-25'],
            ['distance' => 'long', 'time' => '9:14:06', 'ageCategory' =>'F18-25'],
            ['distance' => 'long', 'time' => '2:14:06', 'ageCategory' =>'M25-36'],
            ['distance' => 'long', 'time' => '0:14:06', 'ageCategory' =>'F18-25'],
            ['distance' => 'long', 'time' => '15:14:06', 'ageCategory' =>'F35-40']
        ];

        return $arrayData;
       }  
       
       public function testingArrayData()
       {

        ['F18-25' => 2, 'F35-40' => 1, 'M18-25' => 4, 'M25-36' => 2];
   
        $array1 = ['one'=>'apple', 'two'=>'orange','tree'=>'banana'];
        $array2 = ['one'=>'carrot','two'=>'lettuce','tree'=>'broccoli'];

        $arrayR = [$array1,$array2];

        print_r($arrayR);

       }
       
       public function averageRacePlacement()
       {
        $arrayData = $this->arrayData();

        $unique = array_unique(array_column($arrayData, 'ageCategory'));
        uasort($arrayData, function($a, $b) {
                     return strtotime($a['time']) - strtotime($b['time']); });
               
        usort($arrayData, function($x, $y) {
            return strcasecmp($x['ageCategory'] , $y['ageCategory']);
         });

        $countDataValues = array_count_values(array_column($arrayData, 'ageCategory'));

        
        foreach($arrayData as $data){
            foreach ($countDataValues as $key => $value) {
                if($key == $data['ageCategory']){   
                        for ($i = 0; $i < $value; ++$i){
                               $data['ageCategoryPlacement'] = $i;
                }
            }
            }
            }

            print_r($arrayData);
        
      

       }

        function calculateAveragePlacement($arrayData)
        {
            $result = [];
            // unique values
            $unique = array_unique(array_column($arrayData, 'ageCategory'));
            
            //sorting to get right order
            uasort($arrayData, function($a, $b) {
                return strtotime($a['time']) - strtotime($b['time']); });
        
            usort($arrayData, function($x, $y) {
                return strcasecmp($x['ageCategory'] , $y['ageCategory']);
            });

            //counting repetiting values in ageCategory column
            $countDataValues = array_count_values(array_column($arrayData, 'ageCategory'));


            //matching & inserting age-category_placement 
            for($i = 0; $i < count($arrayData); ++$i) {
                $racerData =[ 
                    'fullName' => $arrayData[$i]['fullName'],
                    'distance' => $arrayData[$i]['distance'],
                    'time' => $arrayData[$i]['time'],
                    'ageCategory' => $arrayData[$i]['ageCategory'],
                    'overall_placement'=>$arrayData['overall_placement'],
                    'age_category_placement' =>$i
                ];
            }

            
        }
    

        // $newkey='myNewKey';
        // $newval='myNewValue';
        // foreach($results as &$row){ //use reference variable 
        //     for($i = 1; $i < count($unique); ++$i)
        //        $row['ageCategoryPlacement'] = $i;
        // }

        // //ili
        // foreach($results as $key=>$row){ //use key now 
        //     $results[$key][$newkey] = $newval;// remove the second  foreach if not necessary
        //     //if second foreach is necessary then add it no problem
          //}
        //for dump&die

//     function dd($data)
// {
// 	echo '<pre>';
// 	var_dump($data);
// 	echo '</pre>';
// 	die();
// }

// $message = 'Dump and die example';

// dd($message);



        // $racersData = [];
        
        
               
        //     //sorting
        //    
        //     //initialiying new array
        //     $racerData = [];
     
            // iterate the field and access the same indexes from the other fields
            // for($i = 1; $i < count($arrayData); $i++) {
            //     $racerData =[ 
            //         'fullName' => $arrayData[$i]['fullName'],
            //         'distance' => $arrayData[$i]['distance'],
            //         'time' => $arrayData[$i]['time'],
            //         'ageCategory' => $arrayData[$i]['ageCategory'],
            //         'overall_placement'=>$arrayData['overall_placement'],
            //         'age_category_placement' =>$i
            //     ];
            // }

            
        //      }

        //      return $racerData;
          //  };
           
        
        //calculatePlacement($arrayData);
}
      
        
      
        
        
   

            


