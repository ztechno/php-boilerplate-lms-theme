<nav class="navbar navbar-expand-lg navbar-dark navbar-default px-3">
    <div class="top-content-container d-flex flex-grow-1">
        <div class="mb-3 pt-2">
            <h2 class="d-block mb-0"><?php get_title() ?></h2>
            <?php if(get_breadcrumbs()): ?>
            <ol class="lms-breadcrumb">
                <?php foreach(get_breadcrumbs() as $breadcrumb): ?>
                <li>
                    <a href="<?=isset($breadcrumb['url']) ? $breadcrumb['url'] : 'javascript:void(0)'?>"><?=$breadcrumb['title']?></a>
                </li>
                <?php endforeach ?>
            </ol>
            <?php endif ?>
        </div>

        <div class="ms-auto d-flex gap-2">
            <div class="dropdown d-flex">
                <a href="#" role="button" class="btn d-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-bell"></i>
                </a>
                <div class="dropdown-menu notifications p-2" style="right:0;left:inherit">
                    <label for="" class="text-center d-block">Notifications</label>
                    <div class="notifications-container">
                        <div class="notifications-item">
                            <img src="https://i.imgur.com/uIgDDDd.jpg" alt="img">
                            <div class="text">
                                <h4>Samso aliao</h4>
                                <p>Samso Nagaro Like your home work</p>
                            </div>
                        </div>
                        <div class="notifications-item">
                            <img src="https://i.imgur.com/uIgDDDd.jpg" alt="img">
                            <div class="text">
                                <h4>Samso aliao</h4>
                                <p>Samso Nagaro Like your home work</p>
                            </div>
                        </div>
                        <div class="notifications-item">
                            <img src="https://i.imgur.com/uIgDDDd.jpg" alt="img">
                            <div class="text">
                                <h4>Samso aliao</h4>
                                <p>Samso Nagaro Like your home work</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-default toggle-sidebar p-0" type="button" aria-expanded="false" aria-label="Toggle navigation" aria-controls="defaultSidebar">
                <i class="fa-solid fa-bars fa-2x"></i>
            </button>
        </div>

    </div>
</nav>