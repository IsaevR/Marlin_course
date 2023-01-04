<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <?php
                            $users = [
                                [
                                    "image" => "img/demo/authors/sunny.png",
                                    "username" => "Sunny A.",
                                    "job" => "(UI/UX Expert)",
                                    "role" => "Lead Author",
                                    "twitter_href" => "https://twitter.com/@myplaneticket",
                                    "twitter_account" => "@myplaneticket",
                                    "email" => "https://wrapbootstrap.com/user/myorange" 
                                ],
                                [
                                    "image" => "img/demo/authors/josh.png",
                                    "username" => "Jos K.",
                                    "job" => "(ASP.NET Developer)",
                                    "role" => "Partner &amp; Contributor",
                                    "twitter_href" => "https://twitter.com/@atlantez",
                                    "twitter_account" => "@lodev09",
                                    "email" => "https://wrapbootstrap.com/user/Walapa" 
                                ],
                                [
                                    "image" => "img/demo/authors/jovanni.png",
                                    "username" => "Jovanni L.",
                                    "job" => "(PHP Developer)",
                                    "role" => "Partner &amp; Contributor",
                                    "twitter_href" => "https://twitter.com/@lodev09",
                                    "twitter_account" => "@lodev09",
                                    "email" => "https://wrapbootstrap.com/user/lodev09" 
                                ],
                                [
                                    "image" => "img/demo/authors/roberto.png",
                                    "username" => "Roberto R.",
                                    "job" => "(Rails Developer)",
                                    "role" => "Partner &amp; Contributor",
                                    "twitter_href" => "https://twitter.com/@sildur",
                                    "twitter_account" => "@sildur",
                                    "email" => "https://wrapbootstrap.com/user/sildur" 
                                ]                                                                      
                            ];
                                                       
                                          
                                           
                 
                        ?>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                           <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
                            
                            <?php
                                foreach ($users as  $user){
                                    echo "<div class='rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0'>";                                    
                                    echo "<img src=".$user['image']." alt=".$user['username']." class='img-thumbnail img-responsive rounded-circle' style='width:5rem; height: 5rem;'>";                                    
                                    echo "<div class='ml-2 mr-3'>";
                                    echo "<h5 class='m-0'>";                                   
                                    echo $user['username']." ".$user['job'];                                   
                                    echo "<small class='m-0 fw-300'>";                                    
                                    echo $user['role'];                                    
                                    echo "</small>";                                   
                                    echo "</h5>";                                    
                                    echo "<a href=".$user['twitter_href']." class='text-info fs-sm' target='_blank'>".$user['twitter_account']."</a>";
                                    echo " - ";
                                    echo "<a href=".$user['email']." class='text-info fs-sm' target='_blank' title='Contact Sunny'><i class='fal fa-envelope'></i></a>";
                                    echo "</div>";
                                    echo "</div>";
                                    echo "<br>";
                                }
                            ?>
                                    
                                
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
