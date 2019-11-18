<!-- This file is used to markup the public-facing widget. -->

<?php if(strlen(trim( $monday_friday ))> 0): ?>
    <p>
        <span class="days-of-week">Monday-Friday:</span> <?php echo $monday_friday; ?>
    </p>
<?php endif; ?>



<?php if(strlen(trim( $saturday ))> 0): ?>
    <p>
        <span class="days-of-week">Saturday:</span> <?php echo $saturday; ?>
    </p>
<?php endif; ?>


<?php if(strlen(trim( $sunday ))> 0): ?>
    <p>
        <span class="days-of-week">Sunday:</span> <?php echo $sunday; ?>
    </p>
<?php endif; ?>