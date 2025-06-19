<!-- upcoming-tasks.php -->
<div class="upcoming-tasks">
  <div class="div-4">
    <div class="title-5">Upcoming Task</div>
    <div class="prev-next">
      <img class="img" src="https://c.animaapp.com/mc1j2x16oqgCfG/img/arrow-left.svg" />
      <img class="img" src="https://c.animaapp.com/mc1j2x16oqgCfG/img/arrow-right.svg" />
    </div>
  </div>
  <div class="div-5">
    <?php
    $upcomingTasks = [
      [
        "img" => "image.png",
        "title" => "Creating Mobile App Design",
        "role" => "UI UX Design",
        "progress" => 75,
        "deadline" => "3 Days Left",
        "photos" => ["photo-1-3.png", "photo-2-2.png", "photo-3-2.png", "photo-4-2.png", "photo-5-2.png"],
      ],
      [
        "img" => "image-1.png",
        "title" => "Creating Perfect Website",
        "role" => "Web Developer",
        "progress" => 85,
        "deadline" => "4 Days Left",
        "photos" => ["photo-3-2.png", "photo-1-3.png", "photo-5-2.png", "photo-2-2.png", "photo-4-2.png"],
      ],
    ];

    foreach ($upcomingTasks as $task):
    ?>
    <div class="task-2">
      <img class="image-2" src="https://c.animaapp.com/mc1j2x16oqgCfG/img/<?php echo $task['img']; ?>" />
      <div class="name-4">
        <div class="title-8"><?php echo $task['title']; ?></div>
        <div class="your-job-as-a-UX-des"><?php echo $task['role']; ?></div>
      </div>
      <div class="progress-3">
        <div class="progress-4">
          <div class="text-wrapper-14">Progress</div>
          <div class="text-wrapper-15"><?php echo $task['progress']; ?>%</div>
        </div>
        <div class="progress-5">
          <div class="overlap-group-3">
            <div class="line-6"></div>
            <div class="line-8"></div>
            <div class="mark-3"></div>
          </div>
        </div>
      </div>
      <div class="deadline-2">
        <img class="img" src="https://c.animaapp.com/mc1j2x16oqgCfG/img/iconly-light-time-circle.svg" />
        <div class="text-wrapper-16"><?php echo $task['deadline']; ?></div>
      </div>
      <div class="student-2">
        <?php foreach ($task['photos'] as $photo): ?>
          <img class="photo-2" src="https://c.animaapp.com/mc1j2x16oqgCfG/img/<?php echo $photo; ?>" />
        <?php endforeach; ?>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</div>
