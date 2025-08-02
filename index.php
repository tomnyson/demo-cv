<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Hồ sơ cá nhân - Mẫu Bootstrap" />
    <meta name="author" content="Start Bootstrap Theme" />
    <title>Hồ sơ cá nhân - SƠN LÊ</title>
    <link rel="icon" type="image/x-xicon" href="assets/img/favicon.ico" />
    <script
      src="https://use.fontawesome.com/releases/v6.3.0/js/all.js"
      crossorigin="anonymous"
    ></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&family=Open+Sans:wght@400;600&display=swap"
      rel="stylesheet"
      type="text/css"
    />
    <style>
      :root {
        --bs-primary: #2c3e50;
        --bs-secondary: #3498db;
        --bs-accent: #e74c3c;
        --bs-light: #ecf0f1;
        --bs-dark: #2c3e50;
        --bs-gray: #7f8c8d;
        --bs-font-sans-serif: 'Open Sans', -apple-system, BlinkMacSystemFont,
          'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
        --bs-font-heading: 'Roboto Slab', serif;
      }
      *,
      *::before,
      *::after {
        box-sizing: border-box;
      }
      @media (prefers-reduced-motion: no-preference) {
        :root {
          scroll-behavior: smooth;
        }
      }
      body {
        margin: 0;
        font-family: var(--bs-font-sans-serif);
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.6;
        color: #34495e;
        background-color: var(--bs-light);
        -webkit-text-size-adjust: 100%;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
      }
      hr {
        margin: 2rem 0;
        border: 0;
        border-top: 2px solid rgba(0, 0, 0, 0.1);
        opacity: 1;
      }
      h1, h2, h3, h4, h5, h6 {
        margin-top: 0;
        margin-bottom: 0.75rem;
        font-family: var(--bs-font-heading);
        font-weight: 700;
        line-height: 1.2;
        color: var(--bs-primary);
      }
      h1 {
        font-size: calc(1.5rem + 2vw);
        letter-spacing: 0.02em;
      }
      @media (min-width: 1200px) {
        h1 {
          font-size: 3.75rem;
        }
      }
      h2 {
        font-size: calc(1.325rem + 1vw);
      }
      @media (min-width: 1200px) {
        h2 {
          font-size: 2.5rem;
        }
      }
      h3 {
        font-size: calc(1.2rem + 0.6vw);
      }
      @media (min-width: 1200px) {
        h3 {
          font-size: 1.75rem;
        }
      }
      .lead {
        font-size: 1.1rem;
        font-weight: 400;
        color: var(--bs-gray);
      }
      p {
        margin-top: 0;
        margin-bottom: 1.25rem;
      }
      a {
        color: var(--bs-secondary);
        text-decoration: none;
        transition: color 0.3s ease;
      }
      a:hover {
        color: #2980b9;
      }
      img {
        vertical-align: middle;
      }
      .rounded-circle {
        border-radius: 50% !important;
      }
      .container-fluid {
        width: 100%;
        padding-right: 1rem;
        padding-left: 1rem;
        margin-right: auto;
        margin-left: auto;
      }
      .d-none {
        display: none !important;
      }
      .d-lg-block {
        display: block !important;
      }
      .d-lg-none {
        display: none !important;
      }
      .d-flex {
        display: flex !important;
      }
      .flex-grow-1 {
        flex-grow: 1 !important;
      }
      .flex-shrink-0 {
        flex-shrink: 0 !important;
      }
      .flex-column {
        flex-direction: column !important;
      }
      .flex-md-row {
        flex-direction: row !important;
      }
      .justify-content-between {
        justify-content: space-between !important;
      }
      .align-items-center {
        align-items: center !important;
      }
      .mx-auto {
        margin-right: auto !important;
        margin-left: auto !important;
      }
      .mb-2 {
        margin-bottom: 0.5rem !important;
      }
      .mb-3 {
        margin-bottom: 1rem !important;
      }
      .mb-5 {
        margin-bottom: 3rem !important;
      }
      .p-0 {
        padding: 0 !important;
      }
      .text-primary {
        color: var(--bs-primary) !important;
      }
      .text-accent {
        color: var(--bs-accent) !important;
      }
      .bg-primary {
        background-color: var(--bs-primary) !important;
      }
      .navbar {
        padding: 1rem;
        background-color: var(--bs-primary);
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      }
      .navbar-brand {
        font-size: 1.5rem;
        font-weight: 600;
        color: #fff;
      }
      .navbar-toggler {
        padding: 0.25rem 0.75rem;
        font-size: 1.25rem;
        border: none;
      }
      .navbar-toggler:hover {
        opacity: 0.8;
      }
      .navbar-dark .navbar-brand {
        color: #fff;
      }
      .navbar-dark .navbar-brand:hover,
      .navbar-dark .navbar-brand:focus {
        color: #ecf0f1;
      }
      .navbar-dark .navbar-nav .nav-link {
        color: rgba(255, 255, 255, 0.9);
        font-size: 1.1rem;
        padding: 0.75rem 1rem;
        transition: all 0.3s ease;
      }
      .navbar-dark .navbar-nav .nav-link:hover,
      .navbar-dark .navbar-nav .nav-link:focus {
        color: var(--bs-secondary);
        transform: translateY(-2px);
      }
      .navbar-dark .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.9%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
      }
      .collapse:not(.show) {
        display: none;
      }
      #sideNav {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        background-color: var(--bs-primary);
        transition: all 0.3s ease;
      }
      #sideNav .navbar-brand {
        margin-right: auto;
        margin-left: auto;
        padding: 1rem;
      }
      
      /* --- START: PHẦN CSS ĐÃ CHỈNH SỬA --- */
      #sideNav .navbar-nav .nav-item .nav-link {
        font-weight: 600;
        letter-spacing: 0.05rem;
        text-transform: uppercase;
        /* Thêm đường viền trong suốt để giữ chỗ và tạo hiệu ứng */
        border-left: 4px solid transparent;
        /* Hiệu ứng chuyển động mượt mà */
        transition: color 0.3s ease, background-color 0.3s ease, border-left-color 0.4s ease;
      }
      #sideNav .navbar-nav .nav-item .nav-link:hover {
        color: var(--bs-secondary);
        background-color: rgba(255, 255, 255, 0.1);
      }
      /* Kiểu cho mục đang active (khi cuộn tới) */
      #sideNav .navbar-nav .nav-item .nav-link.active {
        color: var(--bs-secondary); /* Thay đổi màu chữ */
        background-color: rgba(255, 255, 255, 0.05); /* Thêm nền mờ */
        border-left-color: var(--bs-secondary); /* Hiện đường viền bên trái */
      }
      /* --- END: PHẦN CSS ĐÃ CHỈNH SỬA --- */

      .img-profile {
        max-width: 12rem;
        max-height: 12rem;
        border: 0.5rem solid rgba(255, 255, 255, 0.3);
        transition: transform 0.3s ease;
      }
      .img-profile:hover {
        transform: scale(1.05);
      }
      .resume-section {
        padding: 4rem 2rem !important;
        max-width: 75rem;
        margin: 0 auto;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        margin-bottom: 2rem;
      }
      .resume-section-content {
        width: 100%;
      }
      .social-icons .social-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        height: 3rem;
        width: 3rem;
        background-color: var(--bs-gray);
        color: #fff;
        border-radius: 50%;
        font-size: 1.25rem;
        margin-right: 0.75rem;
        transition: all 0.3s ease;
      }
      .social-icons .social-icon:hover {
        background-color: var(--bs-secondary);
        transform: translateY(-3px);
      }
      .dev-icons {
        font-size: 2.5rem;
      }
      .dev-icons .list-inline-item i {
        transition: all 0.3s ease;
      }
      .dev-icons .list-inline-item i:hover {
        color: var(--bs-secondary);
        transform: scale(1.15);
      }
      .list-inline {
        padding-left: 0;
        list-style: none;
      }
      .list-inline-item {
        display: inline-block;
      }
      .list-inline-item:not(:last-child) {
        margin-right: 0.75rem;
      }
      .fa-ul {
        padding-left: 0;
        list-style: none;
        margin-left: 2.5em;
      }
      .fa-ul > li {
        position: relative;
        margin-bottom: 0.5rem;
      }
      .fa-li {
        position: absolute;
        left: -2.5em;
        width: 2em;
        text-align: center;
        color: var(--bs-secondary);
      }
      @media (min-width: 992px) {
        #sideNav {
          position: fixed !important;
          top: 0;
          left: 0;
          width: 18rem;
          height: 100vh;
        }
        #sideNav .navbar-brand {
          margin: 2rem auto 1rem;
          padding: 0.5rem;
        }
        #sideNav .navbar-brand .img-profile {
          max-width: 12rem;
          max-height: 12rem;
        }
        #sideNav .navbar-collapse {
          display: flex !important;
          flex-direction: column;
          align-items: flex-start;
          flex-grow: 0;
          width: 100%;
          margin-bottom: auto;
        }
        #sideNav .navbar-collapse .navbar-nav {
          flex-direction: column !important;
          width: 100%;
        }
        #sideNav .navbar-collapse .navbar-nav .nav-item {
          display: block;
          width: 100%;
        }
        #sideNav .navbar-collapse .navbar-nav .nav-item .nav-link {
          /* Điều chỉnh padding để bù lại cho border */
          padding: 1rem 1rem 1rem calc(1rem - 4px);
        }
        .resume-section {
          min-height: 100vh;
        }
        .container-fluid {
          padding-left: 20rem;
        }
      }
      @media (max-width: 991.98px) {
        #sideNav.navbar {
          flex-direction: row;
          justify-content: space-between;
          align-items: center;
        }
        #sideNav .navbar-brand {
          margin-right: 0;
          margin-left: 0;
          flex-grow: 1;
          text-align: left;
          padding-left: 1rem;
        }
        #sideNav .navbar-toggler {
          margin-left: auto;
          margin-right: 1rem;
        }
        #sideNav .d-block.d-lg-none {
          display: block !important;
          margin-right: auto;
        }
      }
    </style>
  </head>
  <body>
    <?php
    // --- DỮ LIỆU CÁ NHÂN ---
    $profile = [
        'firstName' => 'SƠN',
        'lastName' => 'LÊ',
        'title' => 'Full Stack Developer',
        'phone' => '0349528472',
        'email' => 'tabletkindfire@gmail.com',
        'linkedin' => 'https://www.linkedin.com/in/tomnyson',
        'bio' => 'Là một nhà phát triển Node.js với 8 năm kinh nghiệm trong việc thiết kế, phát triển và bảo trì các ứng dụng web. Thành thạo trong việc tạo và triển khai các ứng dụng có khả năng mở rộng cao, an toàn và hiệu suất tốt. Đam mê học hỏi các công nghệ và kỹ thuật mới để luôn cập nhật các xu hướng phát triển web mới nhất.',
        'social' => [
            ['icon' => 'fab fa-linkedin-in', 'link' => 'https://www.linkedin.com/in/tomnyson'],
            ['icon' => 'fab fa-github', 'link' => '#!'], // Thêm link GitHub của bạn nếu có
            ['icon' => 'fab fa-twitter', 'link' => '#!'], // Thêm link Twitter của bạn nếu có
            ['icon' => 'fab fa-facebook-f', 'link' => '#!'], // Thêm link Facebook của bạn nếu có
        ]
    ];

    // --- DỮ LIỆU KINH NGHIỆM ---
    $experiences = [
        [
            'title' => 'Nhà phát triển Fullstack',
            'company' => 'Tasselsoftware',
            'description' => 'Thiết kế và phát triển các ứng dụng web có khả năng mở rộng, hiệu quả và dễ bảo trì bằng cách sử dụng React.js và Node.js. Hợp tác với nhóm để xác định và giải quyết các vấn đề kỹ thuật, đồng thời triển khai các giải pháp để cải thiện hiệu suất hệ thống. Phát triển các API RESTful bằng Node.js và Express.js để tương tác với cơ sở dữ liệu và các dịch vụ web khác. Làm việc với nhóm DevOps để triển khai ứng dụng lên các nền tảng đám mây AWS và Azure bằng Docker.',
            'dates' => 'Tháng 5 năm 2019 – Tháng 4 năm 2023'
        ],
        [
            'title' => 'Nhà phát triển Blockchain',
            'company' => 'Bacoor Vietnam',
            'description' => 'Thành thạo Solidity để phát triển hợp đồng thông minh. Kinh nghiệm với Node.js và JavaScript/TypeScript cho phát triển backend. Am hiểu hệ điều hành Linux. Kiến thức về các kỹ thuật mật mã học mới nhất để giao tiếp an toàn.',
            'dates' => 'Tháng 8 năm 2018 – Tháng 10 năm 2019'
        ],
        [
            'title' => 'Nhà phát triển PHP',
            'company' => 'Vmax',
            'description' => 'Kinh nghiệm phát triển các giải pháp thương mại điện tử Magento và CMS theo vòng đời phát triển phần mềm. Khả năng tùy chỉnh và triển khai các tiện ích mở rộng và giao diện Magento. Kiến thức về các phiên bản và cập nhật Magento mới nhất. Kinh nghiệm cố vấn cho các thành viên khác trong nhóm.',
            'dates' => 'Tháng 4 năm 2017 – Tháng 6 năm 2018'
        ],
        [
            'title' => 'Nhà phát triển PHP',
            'company' => 'goodland',
            'description' => 'Viết chương trình phần mềm từ các đặc tả thiết kế. Tuân thủ các tiêu chuẩn chất lượng mã hóa. Đánh giá và tái cấu trúc mã. Sẵn sàng học hỏi các công nghệ mới.',
            'dates' => 'Tháng 3 năm 2016 – Tháng 11 năm 2016'
        ]
    ];

    // --- DỮ LIỆU HỌC VẤN ---
    $education = [
        [
            'school' => 'Đại học Khoa học Tự nhiên - ĐHQG TP.HCM',
            'degree' => 'Cử nhân Công nghệ thông tin',
            'dates' => '2011 - 2018',
            'description' => 'Trong thời gian học đại học, tôi đã tham gia các hoạt động như bơi lội, đọc sách và nâng cao trình độ tiếng Anh. Tôi cũng theo học các khóa lập trình và workshop, nơi tôi có được các kỹ năng về Python và Java, học các phương pháp phát triển phần mềm và thực hành tạo sơ đồ. Tôi đã tham gia hackathon và các thử thách lập trình, giúp tôi phát triển kỹ năng giải quyết vấn đề và làm việc nhóm.'
        ]
    ];

    // --- DỮ LIỆU KỸ NĂNG ---
    $skills = [
        'languagesTools' => [
            ['icon' => 'js-square', 'name' => 'JavaScript'],
        _   ['icon' => 'node-js', 'name' => 'Node.js'],
            ['icon' => 'microsoft', 'name' => 'TypeScript'], // Sử dụng icon Microsoft tạm thời cho TypeScript nếu không có icon riêng
            ['icon' => 'php', 'name' => 'PHP'],
            ['icon' => 'java', 'name' => 'Java'],
            ['icon' => 'microsoft', 'name' => 'C#'], // Sử dụng icon Microsoft tạm thời cho C#
            ['icon' => 'python', 'name' => 'Python'],
            ['icon' => 'react', 'name' => 'React.js'],
            ['icon' => 'reacteurope', 'name' => 'React-Native'], // Sử dụng icon ReactEurope tạm thời cho React-Native
            // Frameworks
            ['icon' => 'dev', 'name' => 'Express.js'], // Sử dụng icon generic dev
            ['icon' => 'dev', 'name' => 'Nest.js'],
            ['icon' => 'laravel', 'name' => 'Laravel'],
            ['icon' => 'wordpress', 'name' => 'Wordpress'],
            ['icon' => 'python', 'name' => 'Flask'], // Flask icon
            // Databases
            ['icon' => 'database', 'name' => 'MongoDB'],
            ['icon' => 'database', 'name' => 'MySQL'],
            ['icon' => 'database', 'name' => 'PostgreSQL'],
            ['icon' => 'aws', 'name' => 'DynamoDB'], // AWS for DynamoDB
            // Cache
            ['icon' => 'cloud', 'name' => 'Redis'], // Generic cloud icon for cache
            // Search
            ['icon' => 'search', 'name' => 'Elasticsearch'], // Generic search icon
            // Tools
            ['icon' => 'git-alt', 'name' => 'Git'],
            ['icon' => 'code', 'name' => 'VS Code'],
            ['icon' => 'terminal', 'name' => 'Postman'], // Generic terminal for tools
            ['icon' => 'docker', 'name' => 'Docker'],
            // Cloud Platforms
            ['icon' => 'aws', 'name' => 'AWS'],
        ],
        'softSkills' => [
            'Thái độ tích cực',
            'Khả năng thích nghi',
            'Quản lý thời gian',
            'Làm việc nhóm',
            'Giải quyết vấn đề',
            'Tư duy phản biện'
        ]
    ];

    // --- DỮ LIỆU SỞ THÍCH ---
    $interests = [
        'main' => 'Tôi là người học hỏi suốt đời với niềm đam mê mở rộng kiến thức trong các lĩnh vực mới. Tôi thích tham dự các hội nghị và workshop công nghệ để tìm hiểu về các xu hướng và kỹ thuật mới nhất trong ngành. Tôi là thành viên tích cực của một nhóm gặp gỡ công nghệ địa phương, nơi tôi kết nối với các chuyên gia cùng chí hướng và kết bạn mới.'
    ];

    // --- DỮ LIỆU DỰ ÁN ---
    $projects = [
        ['name' => 'Nagemon', 'link' => 'https://www.nagemon.com'],
        ['name' => 'HB-Wallet', 'link' => 'https://www.hb-wallet.com'],
        ['name' => 'Vmax', 'link' => 'https://vmax.vn'],
        ['name' => 'Tasselup (Dev)', 'link' => 'https://dev.tasselup.com']
    ];

    // --- DỮ LIỆU THAM CHIẾU ---
    $references = 'Thông tin tham chiếu sẽ được cung cấp khi có yêu cầu.';
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none me-auto"><?= htmlspecialchars($profile['firstName']) ?> <?= htmlspecialchars($profile['lastName']) ?></span>
        <span class="d-none d-lg-block">
          <img
            class="img-fluid img-profile rounded-circle mx-auto mb-2"
            src="https://avatars.githubusercontent.com/u/10257765?v=4"
            alt="Ảnh đại diện"
          />
        </span>
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarResponsive"
        aria-controls="navbarResponsive"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Thông tin chung</a></li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#experience">Kinh nghiệm</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#education">Học vấn</a>
          </li>
          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Kỹ năng</a></li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#interests">Đóng góp & Sở thích</a>
          </li>
          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#projects">Dự án</a></li>
          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#references">Tham chiếu</a></li>
        </ul>
      </div>
    </nav>
    <div class="container-fluid">
      <section class="resume-section" id="about">
        <div class="resume-section-content">
          <h1 class="mb-0">
            <?= htmlspecialchars($profile['firstName']) ?>
            <span class="text-accent"><?= htmlspecialchars($profile['lastName']) ?></span>
          </h1>
          <div class="subheading mb-5">
            <?= htmlspecialchars($profile['title']) ?> · <?= htmlspecialchars($profile['phone']) ?> ·
            <a href="mailto:<?= htmlspecialchars($profile['email']) ?>"><?= htmlspecialchars($profile['email']) ?></a> ·
            <a href="<?= htmlspecialchars($profile['linkedin']) ?>" target="_blank" rel="noopener noreferrer">LinkedIn</a>
          </div>
          <p class="lead mb-5">
            <?= htmlspecialchars($profile['bio']) ?>
          </p>
          <div class="social-icons">
            <?php foreach ($profile['social'] as $socialIcon): ?>
                <a class="social-icon" href="<?= htmlspecialchars($socialIcon['link']) ?>" target="_blank" rel="noopener noreferrer"><i class="<?= htmlspecialchars($socialIcon['icon']) ?>"></i></a>
            <?php endforeach; ?>
          </div>
        </div>
      </section>
      <hr class="m-0" />
      <section class="resume-section" id="experience">
        <div class="resume-section-content">
          <h2 class="mb-5">Kinh nghiệm chuyên môn</h2>
          <?php foreach ($experiences as $experience): ?>
          <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
            <div class="flex-grow-1">
              <h3 class="mb-0"><?= htmlspecialchars($experience['title']) ?></h3>
              <div class="subheading mb-3"><?= htmlspecialchars($experience['company']) ?></div>
              <p>
                <?= htmlspecialchars($experience['description']) ?>
              </p>
            </div>
            <div class="flex-shrink-0"><span class="text-accent"><?= htmlspecialchars($experience['dates']) ?></span></div>
          </div>
          <?php endforeach; ?>
        </div>
      </section>
      <hr class="m-0" />
      <section class="resume-section" id="education">
        <div class="resume-section-content">
          <h2 class="mb-5">Học vấn</h2>
          <?php foreach ($education as $edu): ?>
          <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
            <div class="flex-grow-1">
              <h3 class="mb-0"><?= htmlspecialchars($edu['school']) ?></h3>
              <div class="subheading mb-3"><?= htmlspecialchars($edu['degree']) ?></div>
              <p><?= htmlspecialchars($edu['description']) ?></p>
            </div>
            <div class="flex-shrink-0">
              <span class="text-accent"><?= htmlspecialchars($edu['dates']) ?></span>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </section>
      <hr class="m-0" />
      <section class="resume-section" id="skills">
        <div class="resume-section-content">
          <h2 class="mb-5">Kỹ năng</h2>
          <div class="subheading mb-3">Ngôn ngữ lập trình & Công cụ</div>
          <ul class="list-inline dev-icons">
            <?php foreach ($skills['languagesTools'] as $skillItem): ?>
              <li class="list-inline-item" title="<?= htmlspecialchars($skillItem['name']) ?>"><i class="fab fa-<?= htmlspecialchars($skillItem['icon']) ?>"></i></li>
            <?php endforeach; ?>
          </ul>
          <div class="subheading mb-3">Kỹ năng mềm</div>
          <ul class="fa-ul mb-0">
            <?php foreach ($skills['softSkills'] as $softSkill): ?>
              <li>
                <span class="fa-li"><i class="fas fa-check"></i></span>
                <?= htmlspecialchars($softSkill) ?>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </section>
      <hr class="m-0" />
      <section class="resume-section" id="interests">
        <div class="resume-section-content">
          <h2 class="mb-5">Đóng góp & Sở thích</h2>
          <p class="mb-0">
            <?= htmlspecialchars($interests['main']) ?>
          </p>
        </div>
      </section>
      <hr class="m-0" />
      <section class="resume-section" id="projects">
        <div class="resume-section-content">
          <h2 class="mb-5">Dự án</h2>
          <ul class="fa-ul mb-0">
            <?php foreach ($projects as $project): ?>
            <li>
              <span class="fa-li"><i class="fas fa-code text-accent"></i></span>
        _     <a href="<?= htmlspecialchars($project['link']) ?>" target="_blank" rel="noopener noreferrer"><?= htmlspecialchars($project['name']) ?></a>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </section>
      <hr class="m-0" />
      <section class="resume-section" id="references">
        <div class="resume-section-content">
          <h2 class="mb-5">Tham chiếu</h2>
          <p class="lead mb-0">
            <?= htmlspecialchars($references) ?>
          </p>
        </div>
      </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // JavaScript cho hiệu ứng cuộn mượt
        document.querySelectorAll('a.js-scroll-trigger').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });

                // Đóng navbar sau khi click vào mục menu trên mobile
                const navbarCollapse = document.getElementById('navbarResponsive');
                const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
                if (bsCollapse && navbarCollapse.classList.contains('show')) {
                    bsCollapse.hide();
                } else if (!bsCollapse) {
                    new bootstrap.Collapse(navbarCollapse, { toggle: false }).hide();
                }
            });
        });

        // Kích hoạt Bootstrap Scrollspy trên phần tử điều hướng chính
        window.addEventListener('DOMContentLoaded', event => {
            const sideNav = document.body.querySelector('#sideNav');
            if (sideNav) {
                new bootstrap.ScrollSpy(document.body, {
                    target: '#sideNav',
                    rootMargin: '0px 0px -40%',
                });
            };
        });
    </script>
  </body>
</html>