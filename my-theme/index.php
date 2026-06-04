<?php get_header(); ?>

<main id="main">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <section class="page-hero">
    <div>
      <div class="eyebrow"><span class="dot">●</span> 1986 &mdash; 2026</div>
      <h1><?php echo esc_html( get_the_title() ); ?></h1>
      <div class="lede"><?php the_content(); ?></div>
    </div>
    <div class="logo-card">
      <div class="logo-stack">
        <img class="logo-mark" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/rj-mark.png" alt="<?php bloginfo( 'name' ); ?> 40th Anniversary — 1986–2026" />
        <img class="logo-tagline" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/rj-tagline.png" alt="years of making a difference" aria-hidden="true" />
      </div>
    </div>
  </section>

  <?php endwhile; endif; ?>

  <div class="dateline">
    <div><span class="lime"></span>Anniversary Edition &middot; Vol. 40</div>
    <div class="center"><?php bloginfo( 'name' ); ?></div>
    <div>Somerville, NJ</div>
  </div>

  <section class="s-cream">
    <div class="s-inner">
      <div class="stats-grid">
        <div class="stat-cell">
          <div class="num"><em>40</em></div>
          <div class="label">Years of growth, reinvention, and trusted communications counsel — 1986–2026.</div>
        </div>
        <div class="stat-cell">
          <div class="num"><em>3</em></div>
          <div class="label">Founders — John Lonsdorf, Bob Gagauf, Bob Wille — opened the doors in Livingston, NJ.</div>
        </div>
        <div class="stat-cell">
          <div class="num"><em>6</em></div>
          <div class="label">Distinct eras, each defined by the communications forces of its time.</div>
        </div>
        <div class="stat-cell">
          <div class="num"><em>4</em></div>
          <div class="label">Sectors served today: commercial real estate, healthcare, human services, and non-profit.</div>
        </div>
      </div>
    </div>
  </section>

  <section class="s-cream" style="padding-top: 0;">
    <div class="s-inner">
      <div class="section-head">
        <div>
          <h2>Moments That Made <em>a Difference.</em></h2>
        </div>
        <p>To mark forty years, we're walking through the six distinct eras of the agency's history — each defined by the communications forces of its time, told through the perspectives of founders, leadership, clients, and team.</p>
      </div>

      <div class="era-grid">
        <article class="era-card">
          <div class="era-num">— Era 01</div>
          <div class="era-years">1986–92</div>
          <h3>The Founders Era</h3>
          <p>Building the agency and earning trust the old-fashioned way — entrepreneurial grit, founding relationships, traditional advertising and PR built on reputation and results.</p>
        </article>
        <article class="era-card">
          <div class="era-num">— Era 02</div>
          <div class="era-years">1993–99</div>
          <h3>Expansion &amp; Specialization</h3>
          <p>Healthcare, technology, and the early internet reshape the agency. The web emerges, the healthcare practice begins, and major AOR relationships take hold.</p>
        </article>
        <article class="era-card">
          <div class="era-num">— Era 03</div>
          <div class="era-years">2000–04</div>
          <h3>Digital Disruption &amp; Reinvention</h3>
          <p>PR becomes strategic. Search, blogs, and online media change how audiences get information. R&amp;J Group emerges; the photo &amp; imaging practice expands; the business model resets.</p>
        </article>
        <article class="era-card">
          <div class="era-num">— Era 04</div>
          <div class="era-years">2005–12</div>
          <h3>The Strategic PR Era</h3>
          <p>Lonsdorf &amp; Marioni open R&amp;J Public Relations. Tiffany Miller joins in 2006. Crisis comms, healthcare advocacy, and early social media become central to the work.</p>
        </article>
        <article class="era-card">
          <div class="era-num">— Era 05</div>
          <div class="era-years">2013–19</div>
          <h3>Integrated Growth</h3>
          <p>Fifth Room Creative joins, the agency rebrands to R&amp;J Strategic Communications, RWJBH expands as a flagship client, and a new generation of leadership steps up.</p>
        </article>
        <article class="era-card">
          <div class="era-num">— Era 06</div>
          <div class="era-years">2020–26</div>
          <h3>The Modern Era</h3>
          <p>COVID, remote work, platform fragmentation, the rise of generative AI — and a leadership transition that keeps the founding mindset moving forward.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="era-scroll">
    <div class="es-intro">
      <div class="eyebrow"><span class="dot">●</span> Walk the timeline</div>
      <h2>Six eras, <em>up close.</em></h2>
      <p>Scroll through four decades — one era at a time. Each chapter reshaped how we work, and who we work for.</p>
      <div class="es-hint">Scroll to begin</div>
    </div>

    <article class="era-panel" data-era="01">
      <div class="ghost"><span>01</span></div>
      <div class="es-wrap">
        <div class="content">
          <div class="e-num reveal">Era 01</div>
          <div class="e-years reveal">1986&ndash;92</div>
          <h3 class="reveal">The Founders Era</h3>
          <p class="desc reveal">Building the agency and earning trust the old-fashioned way — entrepreneurial grit, founding relationships, traditional advertising and PR built on reputation and results.</p>
        </div>
      </div>
    </article>

    <article class="era-panel" data-era="02">
      <div class="ghost"><span>02</span></div>
      <div class="es-wrap">
        <div class="content">
          <div class="e-num reveal">Era 02</div>
          <div class="e-years reveal">1993&ndash;99</div>
          <h3 class="reveal">Expansion &amp; Specialization</h3>
          <p class="desc reveal">Healthcare, technology, and the early internet reshape the agency. The web emerges, the healthcare practice begins, and major AOR relationships take hold.</p>
        </div>
      </div>
    </article>

    <article class="era-panel" data-era="03">
      <div class="ghost"><span>03</span></div>
      <div class="es-wrap">
        <div class="content">
          <div class="e-num reveal">Era 03</div>
          <div class="e-years reveal">2000&ndash;04</div>
          <h3 class="reveal">Digital Disruption &amp; Reinvention</h3>
          <p class="desc reveal">PR becomes strategic. Search, blogs, and online media change how audiences get information. R&amp;J Group emerges; the photo &amp; imaging practice expands; the business model resets.</p>
        </div>
      </div>
    </article>

    <article class="era-panel" data-era="04">
      <div class="ghost"><span>04</span></div>
      <div class="es-wrap">
        <div class="content">
          <div class="e-num reveal">Era 04</div>
          <div class="e-years reveal">2005&ndash;12</div>
          <h3 class="reveal">The Strategic PR Era</h3>
          <p class="desc reveal">Lonsdorf &amp; Marioni open R&amp;J Public Relations. Tiffany Miller joins in 2006. Crisis comms, healthcare advocacy, and early social media become central to the work.</p>
        </div>
      </div>
    </article>

    <article class="era-panel" data-era="05">
      <div class="ghost"><span>05</span></div>
      <div class="es-wrap">
        <div class="content">
          <div class="e-num reveal">Era 05</div>
          <div class="e-years reveal">2013&ndash;19</div>
          <h3 class="reveal">Integrated Growth</h3>
          <p class="desc reveal">Fifth Room Creative joins, the agency rebrands to R&amp;J Strategic Communications, RWJBH expands as a flagship client, and a new generation of leadership steps up.</p>
        </div>
      </div>
    </article>

    <article class="era-panel" data-era="06">
      <div class="ghost"><span>06</span></div>
      <div class="es-wrap">
        <div class="content">
          <div class="e-num reveal">Era 06</div>
          <div class="e-years reveal">2020&ndash;26</div>
          <h3 class="reveal">The Modern Era</h3>
          <p class="desc reveal">COVID, remote work, platform fragmentation, the rise of generative AI — and a leadership transition that keeps the founding mindset moving forward.</p>
        </div>
      </div>
    </article>

    <nav class="era-rail" aria-label="Era navigation">
      <button type="button" data-i="0"><span class="lab">Founders</span><span class="tick"></span></button>
      <button type="button" data-i="1"><span class="lab">Expansion</span><span class="tick"></span></button>
      <button type="button" data-i="2"><span class="lab">Disruption</span><span class="tick"></span></button>
      <button type="button" data-i="3"><span class="lab">Strategic PR</span><span class="tick"></span></button>
      <button type="button" data-i="4"><span class="lab">Integrated</span><span class="tick"></span></button>
      <button type="button" data-i="5"><span class="lab">Modern</span><span class="tick"></span></button>
    </nav>
  </section>

  <section class="s-cream" style="padding-top: 0;">
    <div class="s-inner">
      <div class="section-head single">
        <h2 style="max-width: 22ch;">In their <em>own words.</em></h2>
      </div>

      <div class="founder-quote">
        <div class="who">Founder<strong>John Lonsdorf</strong></div>
        <blockquote>From the beginning, we built this agency around one idea: help clients communicate in a way that actually connects with people. The tools and platforms have changed more than we ever could have imagined in 1986, but that principle has stayed the same. What makes me most proud is not just the work we've done, but the team that has carried that mindset forward and continues to adapt as the industry evolves.</blockquote>
      </div>

      <div class="founder-quote">
        <div class="who">President &amp; Partner<strong>Scott Marioni</strong></div>
        <blockquote>Every major shift in communications has forced us to rethink how we help our clients reach and engage the audiences that matter most to them. From the rise of search and social to today's AI-driven landscape, we have made a conscious decision to evolve with purpose, not react to change. That mindset has allowed us to grow alongside our clients and position them for what's next, not just what's now.</blockquote>
      </div>

      <div class="founder-quote">
        <div class="who">EVP &amp; Partner<strong>Tiffany Miller</strong></div>
        <blockquote>Reaching this milestone is a reflection of the relationships that have shaped this organization — from our clients and partners to the team members who bring our work to life every day. We are grateful for the trust that has allowed us to grow over the past 40 years. As we look ahead, our responsibility is to build on that foundation, lead with purpose, and continue making a difference for our clients, our team, and the communities we serve.</blockquote>
      </div>
    </div>
  </section>

  <section class="cta-cream">
    <div class="inner">
      <div>
        <h2>Here's to the <em>next</em> forty.</h2>
      </div>
      <div class="actions">
        <a href="mailto:info@randjsc.com" class="btn btn-primary btn-arrow">Start a project</a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-ghost btn-arrow">See the work</a>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
