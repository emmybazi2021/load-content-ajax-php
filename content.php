<?php

$contents = [
    1=>[
        'title'=>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout",
        'image'=>"https://cdn.r24live.rw/images/medium/1669127605_perimi.jpg"
    ],
    2=>[
        'title'=>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout",
        'image'=>"https://cdn.r24live.rw/images/medium/1669133014_arton67499-c9afd.jpg"
    ],
    3=>[
        'title'=>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout",
        'image'=>"https://cdn.r24live.rw/images/medium/1669127605_perimi.jpg"
    ],
    4=>[
        'title'=>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout",
        'image'=>"https://cdn.r24live.rw/images/medium/1668844691_thumbs-b-c-98dea8ca4d06daf62d054e2d73ab4bf5.jpg"
    ],
    5=>[
        'title'=>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout",
        'image'=>"https://cdn.r24live.rw/images/medium/1668770770_arton67405-1cd42.jpg"
    ],
    6=>[
        'title'=>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout",
        'image'=>"https://cdn.r24live.rw/images/medium/1634385128_impenure-2542491596784417.jpg"
    ]
    
];

if(isset($_POST)){
    $html = '<div class="row">';
    foreach($contents as $item){
        $html.='
            <div class="col-lg-4">
                <div class="card mb-3">
                <img src="'.$item['image'].'" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">'.htmlentities($item['title']).'</h5>
                    <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
        ';
    }
    $html.='</div>';
    echo $html;
}