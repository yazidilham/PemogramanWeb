<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Example</title>
    <style>
        ul {
            list-style-type: none; /* Remove default bullets */
            padding-left: 20px; /* Indent nested lists */
        }
        li {
            position: relative; /* For custom bullets */
            padding-left: 20px; /* Space for custom bullets */
        }
        li::before {
            content: '·'; /* Custom bullet for main items */
            position: absolute;
            left: 0;
            color: black; /* Color of main bullets */
        }
        ul ul li::before {
            content: 'o'; /* Custom bullet for sub-items */
            left: -10px; /* Adjust position for sub-items */
            color: gray; /* Color of sub bullets */
        }
    </style>
</head>
<body>

<?php
$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    [
                        "nama" => "Pantai"
                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]
            ],
            [
                "nama" => "Kuliner"
            ],
            [
                "nama" => "Hiburan"
            ]
        ]
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ],
];

// Function to display menu recursively
function tampilkanMenuBertingkat(array $menu) {
    echo "<ul>";
    foreach ($menu as $item) {
        echo "<li>{$item['nama']}</li>";
        
        // Check if the item has a 'subMenu' attribute
        if (isset($item['subMenu']) && is_array($item['subMenu'])) {
            // Call the function recursively to display the subMenu
            tampilkanMenuBertingkat($item['subMenu']);
        }
    }
    echo "</ul>";
}

// Call the function to display the menu
tampilkanMenuBertingkat($menu);
?>

</body>
</html>
