Got <?php echo $count; ?> data.
<hr>
<table>
        <tr>
            <td>id</td>
            <td>temperature</td>
            <td>PM 2.5</td>
            <td>Time</td>
        </tr>
<?php
    foreach ($detail as $each) {
?>
        <tr>
            <td><?php echo $each->id; ?></td>
            <td><?php echo $each->temperature; ?></td>
            <td><?php echo $each->pm25; ?></td>
            <td><?php echo $each->timestamp; ?></td>
        </tr>
<?php
    }
?>
</table>