<?php
return [
    'test' => \test_router\IndexController::class,
    'test/(\d+)' => \test_router\IndexController::class."@test2#$1",
    'test/view' => \test_router\IndexController::class."@test_view",
];
