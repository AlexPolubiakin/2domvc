<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card card-body bg-light mt-5">
            <div class="card">
                <div class="card-header">
                    <h3>Список желаний</h3>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Some Text Here
                            <span class="float-right item-list-prop">
                            <a href="#"><i class="far fa-check-square"></i></a>
                            <a href="#" ><i class="far fa-times-circle"></i></a>
                            </span>
                        </li>

                        <li class="list-group-item">Some Text Here
                            <span class="float-right item-list-prop">
                            <a href="#"><i class="far fa-check-square"></i></a>
                            <a href="#" ><i class="far fa-times-circle"></i></a>
                            </span>
                        </li>

                        <li class="list-group-item">Some Text Here
                            <span class="float-right item-list-prop">
                            <a href="/show/check"><i class="far fa-check-square"></i></a>
                            <a href="/show/del" ><i class="far fa-times-circle"></i></a>
                            </span>
                        </li>
                    </ul>
                    <form method="post" action="/lists/add">
                        <div class="form-row mt-3">
                            <div class="col">
                            <input type="text" name="list_item" class="form-control" placeholder="Введите текст" required>
                            </div>
                            <div class="col">
                            <input type="submit" class="btn btn-primary" value="Add item">
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>

<?php require APPROOT . '/views/inc/footer.php'; ?>