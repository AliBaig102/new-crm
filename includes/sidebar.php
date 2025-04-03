<?php
$navigation = [
    [
        "title" => "Main",
        "items" => [
            [
                "name" => "Dashboard",
                "icon" => "ri-dashboard-3-line",
                "url" => "dashboard.php",
                "submenu" => []
            ],
            [
                "name" => "Booker",
                "icon" => "ri-pages-line",
                "url" => "#",
                "submenu_id" => "BookerPages",
                "submenu" => [
                    [
                        "name" => "Add Booker",
                        "url" => "add-booker.php",
                    ],
                    [
                        "name" => "All Booker",
                        "url" => "all-booker.php",
                    ]
                ]
            ],
            [
                "name" => "Books",
                "icon" => "ri-pages-line",
                "url" => "#",
                "submenu_id" => "BooksPages",
                "submenu" => [
                    [
                        "name" => "Add Book",
                        "url" => "add-books.php",
                    ],
                    [
                        "name" => "All Book",
                        "url" => "all-books.php",
                    ]
                ]
            ]
        ]
    ]
];
?>

<!-- ========== Left Sidebar Start ========== -->
<div class="leftside-menu">
    <!-- Brand Logo Light -->
    <a href="dashboard.php" class="logo logo-light">
        <span class="logo-lg">
            <img src="assets/images/logo.png" alt="logo">
        </span>
        <span class="logo-sm">
            <img src="assets/images/logo-sm.png" alt="small logo">
        </span>
    </a>

    <!-- Brand Logo Dark -->
    <a href="dashboard.php" class="logo logo-dark">
        <span class="logo-lg">
            <img src="assets/images/logo-dark.png" alt="dark logo">
        </span>
        <span class="logo-sm">
            <img src="assets/images/logo-sm.png" alt="small logo">
        </span>
    </a>

    <!-- Sidebar -left -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <!--- Sidemenu -->
        <ul class="side-nav">
            <?php foreach ($navigation as $section): ?>
                <li class="side-nav-title"><?= $section['title']; ?></li>

                <?php foreach ($section['items'] as $item): ?>
                    <li class="side-nav-item">
                        <a
                                href="<?= empty($item['submenu']) ? $item['url'] : '#' . $item['submenu_id']; ?>"
                                class="side-nav-link"
                            <?= !empty($item['submenu']) ? 'data-bs-toggle="collapse" aria-expanded="false" aria-controls="' . $item['submenu_id'] . '"' : ''; ?>
                        >
                            <i class="<?= $item['icon']; ?>"></i>
                            <span> <?= $item['name']; ?> </span>
                            <?php if (!empty($item['submenu'])): ?>
                                <span class="menu-arrow"></span>
                            <?php endif; ?>
                        </a>

                        <?php if (!empty($item['submenu'])): ?>
                            <div class="collapse" id="<?= $item['submenu_id']; ?>">
                                <ul class="side-nav-second-level">
                                    <?php foreach ($item['submenu'] as $subItem): ?>
                                        <li>
                                            <a href="<?= $subItem['url']; ?>"><?= $subItem['name']; ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </ul>
        <!--- End Sidemenu -->

        <div class="clearfix"></div>
    </div>
</div>
<!-- ========== Left Sidebar End ========== -->
