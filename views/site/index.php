<?php include ROOT . '/views/layouts/header.php'; ?>

    <?php if (User::isUserRole() == 'admin'): ?>
        <script type="text/javascript">
            window.location = "admin"
        </script>
    <?php elseif (User::isUserRole() == 'architect'): ?> 
        <script type="text/javascript">
            window.location = "architect"
        </script>
    <?php elseif ((User::isUserRole() == 'player')): ?>
        <script type="text/javascript">
            window.location = "player"
        </script>
    <?php endif; ?>
