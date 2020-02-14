<div class="navbar-dark bg-dark footer" role="alert">
    <b>Footer - Текущая дата:</b>
    <?php
    use Carbon\Carbon;
    echo Carbon::now()->format('j F Y');
    ;?>
</div>