<?php

header("Access-Control-Allow-Origin: *");

$classes = [];

$classes[] = ['className' => 'painting-drawing', 'classDescription' => 'Painting and Drawing', 
              'sessions' => [
                                'Register for all 10 sessions ($200)',
                                'Mar 4, 2018 ($25)',
                                'Mar 14, 2018 ($25)',
                                'Mar 18, 2018 ($25)',
                                'Mar 25, 2018 ($25)',
                                'Apr 1, 2018 ($25)',
                                'Apr 8, 2018 ($25)',
                                'Apr 15, 2018 ($25)',
                                'Apr 22, 2018 ($25)',
                                'Apr 29, 2018 ($25)',
                                'May 6, 2018 ($25)'
                            ],
               'price' => 25,
               'total' => 200
                ];

$classes[] = ['className' => 'chess', 'classDescription' => 'Chess', 
              'sessions' => [
                                'Register for all 10 sessions ($100)',
                                'Mar 3, 2018 ($15)',
                                'Mar 10, 2018 ($15)',
                                'Mar 17, 2018 ($15)',
                                'Mar 24, 2018 ($15)',
                                'Mar 31, 2018 ($15)',
                                'Apr 7, 2018 ($15)',
                                'Apr 14, 2018 ($15)',
                                'Apr 21, 2018 ($15)',
                                'Apr 28, 2018 ($15)',
                                'May 12, 2018 ($15)'
                            ],
               'price' => 15,
               'total' => 100
                ];

$classes[] = ['className' => 'film', 'classDescription' => 'Film Making', 
              'sessions' => [
                                'Register for all 5 sessions ($275)',
                                'Mar 10, 2018 ($65)',
                                'Mar 31, 2018 ($65)',
                                'Apr 14, 2018 ($65)',
                                'Apr 28, 2018 ($65)',
                                'May 12, 2018 ($65)'
                            ],
               'price' => 65,
               'total' => 275
                ];

$classes[] = ['className' => 'fashion', 'classDescription' => 'Fashion Drawing', 
              'sessions' => [
                                'Register for all 5 sessions ($319)',
                                'Mar 10, 2018 ($75)',
                                'Mar 31, 2018 ($75)',
                                'Apr 14, 2018 ($75)',
                                'Apr 28, 2018 ($75)',
                                'May 12, 2018 ($75)'
                            ],
               'price' => 75,
               'total' => 319
                ];

$classes[] = ['className' => 'yoga', 'classDescription' => 'Yoga', 
              'sessions' => [
                                'Register for all 10 sessions ($150)',
                                'Mar 3, 2018 ($20)',
                                'Mar 10, 2018 ($20)',
                                'Mar 17, 2018 ($20)',
                                'Mar 24, 2018 ($20)',
                                'Mar 31, 2018 ($20)',
                                'Apr 7, 2018 ($20)',
                                'Apr 14, 2018 ($20)',
                                'Apr 21, 2018 ($20)',
                                'Apr 28, 2018 ($20)',
                                'May 12, 2018 ($20)'
                            ],
               'price' => 20,
               'total' => 150
                ];

$classes[] = ['className' => 'table-tennis', 'classDescription' => 'Table Tennis', 
              'sessions' => [
                                'Register for all 20 sessions ($150)',
                                'Mar 3, 2018 ($10)',
                                'Mar 4, 2018 ($10)',
                                'Mar 10, 2018 ($10)',
                                'Mar 11, 2018 ($10)',
                                'Mar 17, 2018 ($10)',
                                'Mar 18, 2018 ($10)',
                                'Mar 24, 2018 ($10)',
                                'Mar 25, 2018 ($10)',
                                'Mar 31, 2018 ($10)',
                                'Apr 1, 2018 ($10)',
                                'Apr 7, 2018 ($10)',
                                'Apr 8, 2018 ($10)',
                                'Apr 14, 2018 ($10)',
                                'Apr 15, 2018 ($10)',
                                'Apr 21, 2018 ($10)',
                                'Apr 22, 2018 ($10)',
                                'Apr 28, 2018 ($10)',
                                'Apr 29, 2018 ($10)',
                                'May 5, 2018 ($10)',
                                'May 6, 2018 ($10)'
                            ],
               'price' => 10,
               'total' => 150
                ];

$classes[] = ['className' => 'gardening', 'classDescription' => 'Gardening', 
              'sessions' => [
                                'Register for all 20 sessions ($150)',
                                'Mar 3, 2018 ($10)',
                                'Mar 4, 2018 ($10)',
                                'Mar 10, 2018 ($10)',
                                'Mar 11, 2018 ($10)',
                                'Mar 17, 2018 ($10)',
                                'Mar 18, 2018 ($10)',
                                'Mar 24, 2018 ($10)',
                                'Mar 25, 2018 ($10)',
                                'Mar 31, 2018 ($10)',
                                'Apr 1, 2018 ($10)',
                                'Apr 7, 2018 ($10)',
                                'Apr 8, 2018 ($10)',
                                'Apr 14, 2018 ($10)',
                                'Apr 15, 2018 ($10)',
                                'Apr 21, 2018 ($10)',
                                'Apr 22, 2018 ($10)',
                                'Apr 28, 2018 ($10)',
                                'Apr 29, 2018 ($10)',
                                'May 5, 2018 ($10)',
                                'May 6, 2018 ($10)'
                            ],
               'price' => 10,
               'total' => 150
                ];

$classes[] = ['className' => 'reading-club', 'classDescription' => 'Reading Club', 
              'sessions' => [
                                'Register for all 20 sessions ($150)',
                                'Mar 3, 2018 ($10)',
                                'Mar 4, 2018 ($10)',
                                'Mar 10, 2018 ($10)',
                                'Mar 11, 2018 ($10)',
                                'Mar 17, 2018 ($10)',
                                'Mar 18, 2018 ($10)',
                                'Mar 24, 2018 ($10)',
                                'Mar 25, 2018 ($10)',
                                'Mar 31, 2018 ($10)',
                                'Apr 1, 2018 ($10)',
                                'Apr 7, 2018 ($10)',
                                'Apr 8, 2018 ($10)',
                                'Apr 14, 2018 ($10)',
                                'Apr 15, 2018 ($10)',
                                'Apr 21, 2018 ($10)',
                                'Apr 22, 2018 ($10)',
                                'Apr 28, 2018 ($10)',
                                'Apr 29, 2018 ($10)',
                                'May 5, 2018 ($10)',
                                'May 6, 2018 ($10)'
                            ],
               'price' => 10,
               'total' => 150
                ];


$result = json_encode($classes);

echo $result;

