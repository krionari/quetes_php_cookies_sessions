<?php
session_start();
require 'inc/head.php';

if (empty($_SESSION['panier']) && !isset($_SESSION['panier'])){
header('Location: login.php');
}?>


            <table class="table table-striped table-dark">
                <thead>
                <tr>
                    <th scope="col" class ="titleCart">Cookie</th>
                    <th scope="col" class ="titleCart">amount</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $total = 0;
                foreach ($_SESSION['panier'] as $cookie => $quantite)
                { if ($_SESSION['panier'][$cookie]['quantité'] > 0){?>
                    <tr>
                        <th scope="row"><?php echo $cookie ?></th>
                        <td><?php echo $_SESSION['panier'][$cookie]['quantité']; ?></td>
                        <?php $total += $_SESSION['panier'][$cookie]['quantité']; ?>
                    </tr>
                <?php }} ?>
                <tr>
                    <th scope="row" class="total">Total</th>
                    <td class="total"><?php echo $total; ?></td>
                </tr>

                </tbody>
            </table>


<?php require 'inc/foot.php'; ?>
