
    <?php
   
    if (count($faculties) > 0) :
        foreach ($faculties as $faculty) : ?>
            <tr>
                <td><?php echo $faculty['id_faculty']; ?></td>
                <td><?php echo $faculty['name_faculty']; ?></td>
                <td><?php echo $faculty['description_fac']; ?></td>
                <td><?php echo $faculty['time_create']; ?></td>
                <td>
                    <a href="?controller=student&action=index&id_faculty=<?php echo $faculty['id_faculty'] ?>">
                        <button type="button" class="btn btn-primary">
                            Xem chi tiết
                        </button>
                    </a>
                </td>
            </tr>
    <?php
        endforeach;
    else:?>
        <td>0 result</td>
    <?php endif;


    ?>
