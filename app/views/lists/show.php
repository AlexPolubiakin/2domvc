<?php require APPROOT . '/views/inc/header.php'; ?>
<?php print_r($data['list']); ?>
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card card-body bg-light mt-5">
            <div class="card">
                <div class="card-header">
                    <h3>Список </h3> 
                </div>
                
                <div class="card-body">
                    <h5 class="card-title"><?php echo $data['list'][0]->author_name; ?></h5>
                    <p class="card-text"><?php echo $data['list'][0]->list_desc; ?></p>
                </div>
                <div class="card-body">
                    
                    <?php foreach($data['list'] as $list) : ?>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo $list->item; ?>
                            <span class="float-right item-list-prop">
                            <a href="<?php echo URLROOT;?>/lists/checkitem/<?php echo $list->itemId ?>"><i class="far fa-check-square"></i></a>
                            <a href="<?php echo URLROOT;?>/lists/delitem/<?php echo $list->itemId ?>" ><i class="far fa-times-circle"></i></a>
                            </span>
                        </li>
                    </ul>
                    <?php endforeach; ?>

                    <form method="post">
                        <div class="form-row mt-3">
                            <div class="col form-group">
                            <input type="text" class="form-control <?php echo (!empty($data['item_err'])) ? 'is-invalid' : ''; ?>" name="item" placeholder="Введите название" value="<?php echo $data['item'];?>">
                            <span class="invalid-feedback"><?php echo $data['item_err']; ?></span>
                            </div>

                            <div class="col">
                            <input type="submit" class="btn btn-primary" value="Add item">
                            </div>
                        </div>
                    </form>
                    <a href="<?php echo URLROOT?>/lists" class="btn btn-primary float-right">Назад</a> 
                </div>
                
            </div>

<?php require APPROOT . '/views/inc/footer.php'; ?>