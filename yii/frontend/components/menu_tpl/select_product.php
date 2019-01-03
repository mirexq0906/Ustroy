<option value="<?= $category['id']?>"
    <?php if($category['id'] == $this->model->services_id) echo 'selected'?>
>
    <?= $category['name']?></option>

<?php if( isset($category['childs']) ): ?>
    <ul>
        <?=$this->getMenuHtml($category['childs']) ?>
    </ul>
<?php endif; ?>