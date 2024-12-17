<?php
  $nav = 'cb';
  if((session()->get('system') === $nav) || (session()->get('system') === "full")):
?>
<li class="pc-item pc-caption">
  <?php
    foreach (array_filter($systems, fn($item) => $item->system_name_short === $nav) as $system):
      $system_name_full = json_decode($system->system_name_full);
      $system_name = $system_name_full->$lang->name ?? $system_name_full->th->name;
  ?>
  <label><?=$nav?> : <?= $system_name; ?></label>
  <?php endforeach; ?>
</li>
<li class="pc-item">
  <a href="<?php echo site_url($nav); ?>" class="pc-link">
    <span class="pc-micon">
      <svg class="pc-icon">
        <use xlink:href="#custom-status-up"></use>
      </svg>
    </span>
    <span class="pc-mtext"><?= lang($lang.'.menus.default.dashboard') ?></span>
  </a>
</li>

<li class="pc-item pc-caption">
  <label><?= lang($lang.'.menus.cb.teaching_management_work') ?></label>
  <svg class="pc-icon">
    <use xlink:href="#custom-layer"></use>
  </svg>
</li>
<li class="pc-item">
  <a href="#!" class="pc-link">
    <span class="pc-micon">
      <svg class="pc-icon">
        <use xlink:href="#custom-layer"></use>
      </svg>
    </span>
    <span class="pc-mtext"><?= lang($lang.'.menus.cb.study_plan') ?></span>
  </a>
</li>
<li class="pc-item pc-caption">
  <label><?= lang($lang.'.menus.cb.data_work') ?></label>
  <svg class="pc-icon">
    <use xlink:href="#custom-folder-open"></use>
  </svg>
</li>
<li class="pc-item pc-hasmenu">
  <a href="#!" class="pc-link">
    <span class="pc-micon">
      <svg class="pc-icon">
        <use xlink:href="#custom-folder-open"></use>
      </svg>
    </span>
    <span class="pc-mtext"><?= lang($lang.'.menus.cb.course') ?></span>
    <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
  </a>
  <ul class="pc-submenu">
    <li class="pc-item"><a class="pc-link" href="#!"><?= lang($lang.'.menus.cb.course_info') ?></a></li>
    <li class="pc-item"><a class="pc-link" href="#!"><?= lang($lang.'.menus.cb.subject_info') ?></a></li>
    <li class="pc-item pc-hasmenu">
      <a href="#!" class="pc-link"><?= lang($lang.'.static.setting') ?><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
      <ul class="pc-submenu">
        <li class="pc-item"><a class="pc-link" href="#!"><?= lang($lang.'.menus.cb.course_type') ?></a></li>
        <li class="pc-item"><a class="pc-link" href="#!"><?= lang($lang.'.menus.cb.subject_type') ?></a></li>
      </ul>
    </li>
  </ul>
</li>
<li class="pc-item pc-hasmenu">
  <a href="#!" class="pc-link">
    <span class="pc-micon">
      <svg class="pc-icon">
        <use xlink:href="#custom-folder-open"></use>
      </svg>
    </span>
    <span class="pc-mtext"><?= lang($lang.'.menus.cb.learners') ?></span>
    <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
  </a>
  <ul class="pc-submenu">
    <li class="pc-item"><a class="pc-link" href="#!"><?= lang($lang.'.menus.cb.learner_info') ?></a></li>
    <li class="pc-item"><a class="pc-link" href="#!"><?= lang($lang.'.menus.cb.learning_group') ?></a></li>
  </ul>
</li>
<li class="pc-item pc-hasmenu">
  <a href="#!" class="pc-link">
    <span class="pc-micon">
      <svg class="pc-icon">
        <use xlink:href="#custom-folder-open"></use>
      </svg>
    </span>
    <span class="pc-mtext"><?= lang($lang.'.menus.cb.instructors') ?></span>
    <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
  </a>
  <ul class="pc-submenu">
    <li class="pc-item"><a class="pc-link" href="#!"><?= lang($lang.'.menus.cb.instructor_info') ?></a></li>
  </ul>
</li>
<li class="pc-item pc-hasmenu">
  <a href="#!" class="pc-link">
    <span class="pc-micon">
      <svg class="pc-icon">
        <use xlink:href="#custom-folder-open"></use>
      </svg>
    </span>
    <span class="pc-mtext"><?= lang($lang.'.menus.cb.agencies') ?></span>
    <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
  </a>
  <ul class="pc-submenu">
    <li class="pc-item"><a class="pc-link" href="#!"><?= lang($lang.'.menus.cb.agency_info') ?></a></li>
    <li class="pc-item"><a class="pc-link" href="#!"><?= lang($lang.'.menus.cb.agency_type') ?></a></li>
  </ul>
</li>

<li class="pc-item pc-caption">
  <label><?= lang($lang.'.menus.cb.registration_work') ?></label>
  <svg class="pc-icon">
    <use xlink:href="#custom-note-1"></use>
  </svg>
</li>
<li class="pc-item">
  <a href="#!" class="pc-link">
    <span class="pc-micon">
      <svg class="pc-icon">
        <use xlink:href="#custom-layer"></use>
      </svg>
    </span>
    <span class="pc-mtext"><?= lang($lang.'.menus.cb.open_registration') ?></span>
  </a>
</li>
<li class="pc-item">
  <a href="#!" class="pc-link">
    <span class="pc-micon">
      <svg class="pc-icon">
        <use xlink:href="#custom-document-text"></use>
      </svg>
    </span>
    <span class="pc-mtext"><?= lang($lang.'.menus.cb.check_applicant_data') ?></span>
  </a>
</li>
<li class="pc-item">
  <a href="#!" class="pc-link">
    <span class="pc-micon">
      <svg class="pc-icon">
        <use xlink:href="#custom-refresh-2"></use>
      </svg>
    </span>
    <span class="pc-mtext"><?= lang($lang.'.menus.cb.import_learner_data') ?></span>
  </a>
</li>
<li class="pc-item pc-hasmenu">
  <a href="#!" class="pc-link">
    <span class="pc-micon">
      <svg class="pc-icon">
        <use xlink:href="#custom-setting-2"></use>
      </svg>
    </span>
    <span class="pc-mtext"><?= lang($lang.'.static.setting') ?></span>
    <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
  </a>
  <ul class="pc-submenu">
    <li class="pc-item"><a class="pc-link" href="#!"><?= lang($lang.'.menus.cb.document_checker') ?></a></li>
    <li class="pc-item"><a class="pc-link" href="#!"><?= lang($lang.'.menus.cb.supporting_documents') ?></a></li>
    <li class="pc-item"><a class="pc-link" href="#!"><?= lang($lang.'.static.notification') ?></a></li>
    <li class="pc-item"><a class="pc-link" href="#!"><?= lang($lang.'.menus.cb.payment_methods') ?></a></li>
    <li class="pc-item"><a class="pc-link" href="#!"><?= lang($lang.'.menus.cb.approval_results') ?></a></li>
  </ul>
</li>

<li class="pc-item pc-caption">
  <label><?= lang($lang.'.menus.cb.assessment_work') ?></label>
  <svg class="pc-icon">
    <use xlink:href="#custom-mouse-circle"></use>
  </svg>
</li>
<li class="pc-item">
  <a href="#!" class="pc-link">
    <span class="pc-micon">
      <svg class="pc-icon">
        <use xlink:href="#custom-mouse-circle"></use>
      </svg>
    </span>
    <span class="pc-mtext"><?= lang($lang.'.menus.cb.evaluation_forms') ?></span>
  </a>
</li>
<li class="pc-item pc-hasmenu">
  <a href="#!" class="pc-link">
    <span class="pc-micon">
      <svg class="pc-icon">
        <use xlink:href="#custom-story"></use>
      </svg>
    </span>
    <span class="pc-mtext"><?= lang($lang.'.menus.cb.learning_results') ?></span>
    <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
  </a>
  <ul class="pc-submenu">
    <li class="pc-item"><a class="pc-link" href="#!"><?= lang($lang.'.menus.cb.submission_deadline') ?>/<?= lang($lang.'.menus.cb.verify') ?></a></li>
    <li class="pc-item"><a class="pc-link" href="#!"><?= lang($lang.'.menus.cb.evaluation_criteria') ?></a></li>
  </ul>
</li>

<li class="pc-item pc-caption">
  <label><?= lang($lang.'.menus.cb.correspondence_work') ?></label>
  <svg class="pc-icon">
    <use xlink:href="#custom-document-text"></use>
  </svg>
</li>
<li class="pc-item">
  <a href="#!" class="pc-link">
    <span class="pc-micon">
      <svg class="pc-icon">
        <use xlink:href="#custom-document-text"></use>
      </svg>
    </span>
    <span class="pc-mtext"><?= lang($lang.'.menus.cb.incoming_documents') ?></span>
  </a>
</li>
<li class="pc-item pc-hasmenu">
  <a href="#!" class="pc-link">
    <span class="pc-micon">
      <svg class="pc-icon">
        <use xlink:href="#custom-setting-2"></use>
      </svg>
    </span>
    <span class="pc-mtext"><?= lang($lang.'.static.setting') ?></span>
    <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
  </a>
  <ul class="pc-submenu">
    <li class="pc-item"><a class="pc-link" href="#!"><?= lang($lang.'.menus.cb.signatory_list') ?></a></li>
    <li class="pc-item"><a class="pc-link" href="#!"><?= lang($lang.'.menus.cb.administrative_staff_list') ?></a></li>
    <li class="pc-item"><a class="pc-link" href="#!"><?= lang($lang.'.menus.cb.document_status') ?></a></li>
  </ul>
</li>

<li class="pc-item pc-caption">
  <label><?= lang($lang.'.menus.cb.general') ?></label>
  <svg class="pc-icon">
    <use xlink:href="#custom-document"></use>
  </svg>
</li>
<li class="pc-item">
  <a href="#!" class="pc-link">
    <span class="pc-micon">
      <svg class="pc-icon">
        <use xlink:href="#custom-document"></use>
      </svg>
    </span>
    <span class="pc-mtext"><?= lang($lang.'.menus.cb.announcement') ?>/<?= lang($lang.'.menus.cb.regulations') ?></span>
  </a>
</li>
<li class="pc-item">
  <a href="#!" class="pc-link">
    <span class="pc-micon">
      <svg class="pc-icon">
        <use xlink:href="#custom-document"></use>
      </svg>
    </span>
    <span class="pc-mtext"><?= lang($lang.'.menus.cb.news') ?></span>
  </a>
</li>
<li class="pc-item">
  <a href="#!" class="pc-link">
    <span class="pc-micon">
      <svg class="pc-icon">
        <use xlink:href="#custom-document"></use>
      </svg>
    </span>
    <span class="pc-mtext"><?= lang($lang.'.menus.cb.download') ?></span>
  </a>
</li>
<li class="pc-item pc-hasmenu">
  <a href="#!" class="pc-link">
    <span class="pc-micon">
      <svg class="pc-icon">
        <use xlink:href="#custom-document"></use>
      </svg>
    </span>
    <span class="pc-mtext"><?= lang($lang.'.menus.cb.faq') ?></span>
    <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
  </a>
  <ul class="pc-submenu">
    <li class="pc-item"><a class="pc-link" href="#!"><?= lang($lang.'.menus.cb.list') ?></a></li>
    <li class="pc-item"><a class="pc-link" href="#!"><?= lang($lang.'.menus.cb.category') ?></a></li>
  </ul>
</li>
<li class="pc-item pc-hasmenu">
  <a href="#!" class="pc-link">
    <span class="pc-micon">
      <svg class="pc-icon">
        <use xlink:href="#custom-document"></use>
      </svg>
    </span>
    <span class="pc-mtext"><?= lang($lang.'.menus.cb.user_manual') ?></span>
    <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
  </a>
  <ul class="pc-submenu">
    <li class="pc-item"><a class="pc-link" href="#!"><?= lang($lang.'.menus.cb.list') ?></a></li>
    <li class="pc-item"><a class="pc-link" href="#!"><?= lang($lang.'.menus.cb.access_rights') ?></a></li>
  </ul>
</li>
<li class="pc-item pc-hasmenu">
  <a href="#!" class="pc-link">
    <span class="pc-micon">
      <svg class="pc-icon">
        <use xlink:href="#custom-setting-outline"></use>
      </svg>
    </span>
    <span class="pc-mtext"><?= lang($lang.'.menus.cb.website_settings') ?></span>
    <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
  </a>
  <ul class="pc-submenu">
    <li class="pc-item"><a class="pc-link" href="#!"><?= lang($lang.'.menus.cb.popup') ?></a></li>
    <li class="pc-item"><a class="pc-link" href="#!"><?= lang($lang.'.menus.cb.website_toggle') ?></a></li>
    <li class="pc-item"><a class="pc-link" href="#!"><?= lang($lang.'.menus.cb.formatting') ?></a></li>
    <li class="pc-item"><a class="pc-link" href="#!"><?= lang($lang.'.menus.cb.website_info') ?></a></li>
  </ul>
</li>
<?php endif;?>