<div class="select1" uk-dropdown="mode: click; pos: right-top;">
    <h3 class="title3">Chọn đội bóng yêu thích của bạn</h3>
    <ul class="uk-subnav uk-subnav-pill tab2" uk-switcher>
        <?php
        $item = array
        (
            'NHA',
            'Laliga',
            'Seri A',
            'Bundesliga',
            'Quốc gia',
        );
        foreach ($item as $k1 => $v1) { ?>
            <li><a href="#"><?= $v1 ?></a></li>
        <?php } ?>
    </ul>

    <ul class="uk-switcher">
        <li>
            <div class="grid-container uk-child-width-auto uk-grid-collapse" uk-grid>
                <?php
                $item = array
                (
                    'imgs/barca.png',
                    'imgs/doibong1.png',
                    'imgs/doibong2.png',
                    'imgs/doibong3.png',
                    'imgs/mu.png',
                    'imgs/barca.png',
                    'imgs/doibong1.png',
                    'imgs/doibong2.png',
                    'imgs/doibong3.png',
                    'imgs/mu.png',
                    'imgs/mu.png',
                    'imgs/barca.png',
                    'imgs/doibong1.png',
                    'imgs/doibong2.png',
                    'imgs/doibong3.png',
                    'imgs/mu.png',
                );
                foreach ($item as $k1 => $v1) { ?>
                <label class="label1">
                    <input class="uk-checkbox" type="checkbox">
                    <div class="uk-height-1-1">
                        <img src="<?= $v1 ?>" alt="">
                    </div>
                </label>
                <?php } ?>
            </div>
        </li>
        <li>Hello again!</li>
        <li>Bazinga!</li>
    </ul>
</div>