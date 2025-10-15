// Theme interactions: theme toggle, fade-in on scroll
(function(){
  const root = document.documentElement;
  const toggle = document.getElementById('themeToggle');

  function setTheme(theme){
    document.documentElement.setAttribute('data-theme', theme);
    try { localStorage.setItem('restaurant-theme', theme); } catch(e){}
  }

  // Initialize theme from storage or system preference
  let saved = null;
  try { saved = localStorage.getItem('restaurant-theme'); } catch(e){}
  if(saved){
    setTheme(saved);
  } else if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
    setTheme('dark');
  }

  if (toggle) {
    toggle.addEventListener('click', function(){
      const current = document.documentElement.getAttribute('data-theme') || 'light';
      setTheme(current === 'light' ? 'dark' : 'light');
    });
  }

  // IntersectionObserver for fade-ins
  const animated = document.querySelectorAll('[data-animate]');
  if('IntersectionObserver' in window && animated.length){
    const io = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if(entry.isIntersecting){
          entry.target.classList.add('visible');
          io.unobserve(entry.target);
        }
      });
    }, { rootMargin: '0px 0px -10% 0px' });
    animated.forEach(el => io.observe(el));
  } else {
    animated.forEach(el => el.classList.add('visible'));
  }
})();


