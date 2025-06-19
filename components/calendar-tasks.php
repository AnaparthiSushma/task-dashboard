<div class="overlap-3">
  <div class="calender">
    <div class="month">
      <img class="img-2" src="https://c.animaapp.com/mc1j2x16oqgCfG/img/arrow-left-1.svg" />
      <div class="text-wrapper-8"><?php echo $month; ?></div>
      <img class="img-2" src="https://c.animaapp.com/mc1j2x16oqgCfG/img/arrow-right-1.svg" />
    </div>
    <div class="overlap-4">
      <div class="BG"></div>
      <div class="date">
        <?php
$days = ['S','M','T','W','T','F','S'];
$startOfWeek = strtotime('sunday this week'); // ← key fix here
$today = date('j');
$todayW = date('w'); // 0-6

for ($i = 0; $i < 7; $i++) {
    $currentDate = strtotime("+$i day", $startOfWeek);
    $dayLetter = $days[$i];
    $dayNumber = date('j', $currentDate);
    $isToday = ($dayNumber == $today && date('w', $currentDate) == $todayW);

    echo "<div class='date-2'>
            <div class='text-wrapper-9'>{$dayLetter}</div>
            <div class='no'>
              <div class='text-wrapper-10" . ($isToday ? " today" : "") . "'>{$dayNumber}</div>
            </div>
          </div>";
}
?>


      </div>
    </div>
  </div>

  <div class="task-today">
    <div class="task-today-2">
      <div class="text-wrapper-13">Task Today</div>
      <img class="img-2" src="https://c.animaapp.com/mc1j2x16oqgCfG/img/vuesax-linear-more.svg" />
    </div>
    <img class="image" src="https://c.animaapp.com/mc1j2x16oqgCfG/img/image-2.png" />
    <div class="name">
      <div class="title">Creating Awesome Mobile Apps</div>
      <div class="your-job-as-a-UX-des">UI /UX Designer</div>
    </div>
    <div class="name-2">
      <div class="title-2">Detail Task</div>
      <div class="your-job-as-a-UX-des-2">UI / UX Designer</div>
    </div>
    <div class="progress">
      <div class="progress-2">
        <div class="text-wrapper-14">Progress</div>
        <div class="text-wrapper-15"><?php echo $taskProgress; ?>%</div>
      </div>
      <div class="overlap-group-wrapper">
        <div class="overlap-group-3">
          <div class="line-2"></div>
          <div class="line-3"></div>
          <div class="mark"></div>
        </div>
      </div>
    </div>
    <img class="line-4" src="https://c.animaapp.com/mc1j2x16oqgCfG/img/line-8.svg" />
    <div class="deadline">
      <img class="img" src="https://c.animaapp.com/mc1j2x16oqgCfG/img/iconly-light-time-circle.svg" />
      <div class="text-wrapper-16">1 Hour</div>
    </div>
    <div class="student">
      <img class="photo" src="https://c.animaapp.com/mc1j2x16oqgCfG/img/photo-4-2.png" />
      <img class="photo-2" src="https://c.animaapp.com/mc1j2x16oqgCfG/img/photo-2-2.png" />
      <img class="photo-2" src="https://c.animaapp.com/mc1j2x16oqgCfG/img/photo-1-3.png" />
      <img class="photo-2" src="https://c.animaapp.com/mc1j2x16oqgCfG/img/photo-5-2.png" />
      <img class="photo-2" src="https://c.animaapp.com/mc1j2x16oqgCfG/img/photo-3-2.png" />
    </div>
    <div class="button-detail"><div class="text-wrapper-17">Go To Detail</div></div>
    <div class="home-page">
      <div class="no-3"><div class="text-wrapper-18">1</div></div>
      <div class="home-page-2"><p class="p">Understanding the tools in Figma</p></div>
    </div>
    <div class="detail-page">
      <div class="no-3"><div class="text-wrapper-18">2</div></div>
      <div class="div-wrapper-2"><p class="p">Understand the basics of making designs</p></div>
    </div>
    <div class="payment">
      <div class="no-3"><div class="text-wrapper-18">3</div></div>
      <div class="div-wrapper-2"><p class="p">Design a mobile application with figma</p></div>
    </div>
  </div>
</div>
