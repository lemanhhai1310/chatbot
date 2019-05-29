</section>
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
</body>
</html>