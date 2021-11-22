<?php
    require_once APPROOT . '/views/includes/head.php';
?>
    <table>
        <tr>
            <td>ID</td>
            <td>Username</td>
            <td>Email</td>
        </tr>
        <?php foreach($data['users'] as $user) : ?>
            <tr>
                <td><?php echo $user->user_id; ?></td>
                <td><?php echo $user->user_name; ?></td>
                <td><?php echo $user->user_email; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php
    require_once APPROOT . '/views/includes/foot.php';
?>