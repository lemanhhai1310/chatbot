<form name="frm" method="POST">
    <div class="comment">
        <div class="uk-position-relative box1">
            <textarea class="uk-textarea" rows="1" name="dd_fc_comment" onkeyup="return displayWordCounter();" placeholder="Nói gì đó... (Chế độ chậm 5s)"></textarea>
            <a href="#" class="uk-position-center-right emoji"><img src="imgs/emoji.png" alt=""></a>
        </div>
        <div class="uk-padding-small uk-padding-remove-left uk-padding-remove-right uk-text-right box2 uk-flex uk-flex-middle uk-flex-right">
            <span class="uk-margin-right"><input class="show_count" name="totalWordLimit" size="4" readonly="" value="0" type="text" disabled>/200</span>
            <button class="btn-send" type="button"><img src="imgs/send-btn.png" alt=""></button>
        </div>
    </div>
</form>
<script>
    var setTotalNumberOfWordCounter = "200";
    function displayWordCounter(){
        var getTextValue = document.frm.dd_fc_comment.value;
        var getTextLength = getTextValue.length;
        if(getTextLength > setTotalNumberOfWordCounter){
            getTextValue = getTextValue.substring(0,setTotalNumberOfWordCounter);
            document.frm.dd_fc_comment.value =getTextValue;
            return false;
        }
        document.frm.totalWordLimit.value = (getTextLength);

    }
</script>