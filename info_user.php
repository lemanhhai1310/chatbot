<div class="user_info uk-box-shadow-small" uk-dropdown="mode: click">
    <div class="uk-grid-small" uk-grid>
        <div class="uk-width-auto">
            <div class="uk-cover-container">
                <img src="<?= $value['avarta'] ?>" alt="" uk-cover>
                <canvas width="68" height="68"></canvas>
            </div>
        </div>
        <div class="uk-width-expand">
            <h3 class="title2"><?= $value['name'] ?></h3>
            <div class="box4">
                <span class="uk-text-middle" style="color: #ffffff">Thành viên</span>
                <img src="imgs/huyc.png" alt="">
                <span class="uk-text-middle" style="color: #ffcf35">Top Donator</span>
            </div>
            <div class="box4">
                <span>Ngày tham gia: 02-05-2018</span>
            </div>
            <div class="box4">
                <span class="uk-text-middle">Đội bóng yêu thích:</span>
                <?php if (isset($value['doibong'])) { ?>
                    <?php foreach ($value['doibong'] as $k => $v) { ?>
                        <img class="doibong" src="<?= $v ?>" alt="">
                    <?php } ?>
                <?php } ?>
                <button type="button" class="uk-button uk-button-default btn-select">Chọn lại</button>
            </div>
        </div>
    </div>
</div>