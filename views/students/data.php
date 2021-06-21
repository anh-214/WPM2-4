<!-- <tbody>
    <?php
    if (count($faculties) > 0) :
        foreach ($faculties as $faculty) : ?>
            <tr>
                <td><?php echo $faculty['id_faculty']; ?></td>
                <td><?php echo $faculty['name_faculty']; ?></td>
                <td><?php echo $faculty['description_fac']; ?></td>
                <td><?php echo $faculty['time_create']; ?></td>
                <td>
                    <button type="button" class="btn btn-primary">
                        <a href="?controller=student&action=viewfaculty&id=<?php echo $faculty['id_faculty'] ?>">Xem chi tiết</a>
                    </button>
                </td>
            </tr>
    <?php
        endforeach;
    endif;
    ?>
</tbody> -->
<?php 
die('1');
?>