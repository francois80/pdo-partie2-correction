<?php
require_once 'includes/header.php';
?>
<div class="container">
    <div class="row">
        <div class="card col-sm-12 bg-light">
            <div class="card-header font-bold bg-info"><h1>Clinique Montaigu</h1></div>
            <h2>Liste des rendez-vous</h2>
            <table class="table table-bordered">
            <thead>
                    <tr>
                    <th>0</th>
                    <th>Nom</th>
                    <th>Date de rendez-vous</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                if (count($appointmentsList) > 0) {
                foreach ($appointmentsList AS $key => $appointment_info){
                ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td><a href="../Controllers/update-appointmentController.php?idPatient=<?= $appointment_info->ownerId ?>&AMP;datehour=<?= $appointment_info->dateHour ?>"><?= $appointment_info->ownerLastname. ' '. $appointment_info->ownerFirstname ?></a></td>
                    <td><?= $appointment_info->dateHour ?></td>
                </tr>
                <?php
                }
            }
                ?>
            </tbody>
                </table>
            </table>
            <div class="btn  btn-warning col-sm-5"><a href="add-appointmentController.php" title="Ajouter un rendez-vous">Ajouter un rendez-vous</a></div>
            <div class="btn  btn-black col-sm-5"><a href="index.php" title="Accueil">Accueil</a></div>
        </div>
    </div>
</div>
<?php
include 'includes/footer.php';