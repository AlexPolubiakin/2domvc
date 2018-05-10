<?php require APPROOT . '/views/inc/header.php'; ?>


<div class="row">
    <div class="col-md-6 mx-auto">
        
        
        <div class="card text-center">
            <div class="card-header">
                <a class="navbar-brand text-dark float-left" href="#">Мои списки:</a>
                <ul class="nav nav-pills card-header-pills float-right">
                    <li class="nav-item mx-2">
                    <a href="<?php echo URLROOT?>/lists/add" class="btn btn-primary btn-sm">Новый список/Редактировать</a>
                    </li>
                </ul>
            </div>
        </div>

        
        <div class="card card-body bg-light mt-3">
            <div class="card">
                <div class="card-header">
                    <h5>Название wish list'а</h5>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Имя автора</h5>
                    <p class="card-text">Краткое описание</p>
                    <a href="<?php echo URLROOT?>/lists/show" class="btn btn-primary float-right">Подробнее</a>
                </div>
            </div>
        </div>

                <div class="card card-body bg-light mt-3">
                    <div class="card">
                        <div class="card-header">
                            <h5>Нзавание wish list</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Краткое описание</p>
                            <a href="#" class="btn btn-primary float-right">Подробнее</a>
                        </div>
                    </div>
                </div>

                <div class="card card-body bg-light mt-3">
                    <div class="card">
                        <div class="card-header">
                            <h5>Нзавание wish list</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Краткое описание</p>
                            <a href="#" class="btn btn-primary float-right">Подробнее</a>
                        </div>
                    </div>
                </div>

  
    </div>
</div>







<?php require APPROOT . '/views/inc/footer.php'; ?>