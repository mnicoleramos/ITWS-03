<?php

/*
Get the path
@param string $path
@return string
*/
function basePath($path = "")
{
    return __DIR__ . "/" . $path;
}

/*
Load view
@param string $name
@return void
*/
function loadView($name, array $data = [])
{
    extract($data, EXTR_SKIP);
    $viewPath = basePath("views/{$name}.view.php");

    // Ensures that the path exist before loading
    if (file_exists($viewPath)) {
        require $viewPath;
    } else {
        echo "View not found: {$name}";
    }
}

/*
Load partial
@param string $name
@return void
*/
function loadPartial($name, array $data = [])
{
    extract($data, EXTR_SKIP);
    $partialPath = basePath("views/partials/{$name}.php");

    // Ensures that the path exist before loading
    if (file_exists($partialPath)) {
        require $partialPath;
    } else {
        echo "Partial not found: {$name}";
    }
}
