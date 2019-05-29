<form name="frm" method="POST">
    <div class="comment">
        <div class="uk-position-relative box1">
            <textarea class="uk-textarea" rows="1" name="dd_fc_comment" onkeyup="return displayWordCounter();" placeholder="Nói gì đó... (Chế độ chậm 5s)"></textarea>
            <button class="btn-send uk-position-center-right emoji uk-padding-remove" type="button"><img src="imgs/send-btn.png" alt=""></button>
        </div>
        <div class="uk-padding-small mb uk-padding-remove-left uk-padding-remove-right uk-text-right box2 uk-flex uk-flex-middle uk-flex-right">
            <span><input class="show_count" name="totalWordLimit" size="4" readonly="" value="0" type="text" disabled>/200</span>
        </div>
    </div>
</form>