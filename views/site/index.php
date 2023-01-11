<div id="online" style="background-color: green;">
    đang online
</div>
<div id="offline" style="background-color: red;">
    đang offline
</div>

<script>
    window.addEventListener('offline', function() {
        console.log(1);
        $('#online').hide();
        $('#offline').show();
    });
    window.addEventListener('online', function() {
        console.log(2);
        $('#offline').hide();
        $('#online').show();
    });
</script>