<?php
// index.php - Modular Dashboard with includes
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/globals.css" />
    <link rel="stylesheet" href="css/styleguide.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Dashboard | Nuegas</title>
  </head>
  <body>
    <?php
      // Example dynamic content
      $user = "Skylar Dias";
      $month = "July 2024";
      $runningTasks = '';
      $taskProgress = 90;
    ?>
    <div class="web-dashboard">
      <div class="div">
        <?php include 'components/sidebar.php'; ?>

        <div class="hi">
          <div class="text-wrapper-7">Hi, <?php echo $user; ?></div>
          <p class="let-s-finish-your">Let's finish your task today!</p>
        </div>

        <?php include 'components/calendar-tasks.php'; ?>
        <?php include 'components/user-action.php'; ?>

        <?php include 'components/running-task.php'; ?>
        <?php include 'components/activity.php'; ?>
        <?php include 'components/monthly-mentors.php'; ?>
        <?php include 'components/upcoming-tasks.php'; ?>
      </div>
    </div>
    <script>
  const items = document.querySelectorAll(".menu-item");

  items.forEach(item => {
    item.addEventListener("click", () => {
      items.forEach(i => i.classList.remove("active")); // remove from all
      item.classList.add("active"); // add to clicked
    });
  });
</script>

  </body>
</html>
