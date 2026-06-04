<footer class="lp-footer">
  <div class="inner">
    <div>
      <a class="brand-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php bloginfo( 'name' ); ?>">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/rj-lockup.png" alt="<?php bloginfo( 'name' ); ?>" />
      </a>
      <div class="tag">Est. 1986 &middot; Somerville, NJ</div>
    </div>
    <address>
      50 Division Street, Suite 300<br />
      Somerville, NJ 08876<br />
      <a href="tel:1-908-722-5757">(908) 722-5757</a><br />
      <a href="mailto:info@randjsc.com">info@randjsc.com</a>
    </address>
    <div class="legal">
      <span>&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?></span>
      <span>Forty years &middot; 1986 &mdash; 2026</span>
    </div>
  </div>
</footer>

<script>
  /* Tagline write-in animation */
  (function () {
    var tag = document.querySelector('.logo-tagline');
    if (!tag) return;

    tag.style.setProperty('--rev', '0deg');

    var FULL = 150;
    var STEPS = 27;
    var STEP_MS = 95;
    var timer = null;

    function play() {
      if (timer) clearInterval(timer);
      var s = 0;
      tag.style.setProperty('--rev', '0deg');
      timer = setInterval(function () {
        s++;
        tag.style.setProperty('--rev', (FULL * s / STEPS) + 'deg');
        if (s >= STEPS) {
          clearInterval(timer);
          timer = null;
          tag.style.setProperty('--rev', FULL + 'deg');
        }
      }, STEP_MS);
    }

    if ('IntersectionObserver' in window) {
      var io = new IntersectionObserver(function (entries) {
        entries.forEach(function (e) { if (e.isIntersecting) setTimeout(play, 400); });
      }, { threshold: 0.5 });
      io.observe(tag);
    } else {
      setTimeout(play, 400);
    }
  })();
</script>

<script>
  /* Immersive era scroll — reveals, active-rail tracking, click-to-jump */
  (function () {
    var section = document.querySelector('.era-scroll');
    if (!section) return;
    var panels = [].slice.call(section.querySelectorAll('.era-panel'));
    var rail   = section.querySelector('.era-rail');
    var btns   = rail ? [].slice.call(rail.querySelectorAll('button')) : [];

    if (!('IntersectionObserver' in window)) {
      panels.forEach(function (p) { p.classList.add('in'); });
      return;
    }

    /* Fade-in reveal when panel enters viewport */
    var revealIO = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) { if (e.isIntersecting) e.target.classList.add('in'); });
    }, { threshold: 0.32 });
    panels.forEach(function (p) { revealIO.observe(p); });

    /* Track active panel for the rail */
    var activeIO = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) {
          var i = panels.indexOf(e.target);
          btns.forEach(function (b, bi) { b.classList.toggle('active', bi === i); });
        }
      });
    }, { threshold: 0.5 });
    panels.forEach(function (p) { activeIO.observe(p); });

    /* Show/hide the rail based on whether the scroll section is in view */
    var sectionIO = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (rail) rail.classList.toggle('show', e.isIntersecting && e.intersectionRatio > 0.04);
      });
    }, { threshold: [0, 0.04, 0.1] });
    sectionIO.observe(section);

    /* Click-to-jump */
    btns.forEach(function (b, i) {
      b.addEventListener('click', function () {
        var p = panels[i];
        if (!p) return;
        var y = p.getBoundingClientRect().top + window.pageYOffset;
        window.scrollTo({ top: y, behavior: 'smooth' });
      });
    });
  })();
</script>

<?php wp_footer(); ?>
</body>
</html>
