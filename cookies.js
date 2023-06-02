// Check if user has already given consent
if (localStorage.getItem('cookieConsent') === 'true') {
    hideCookieBanner();
  }
  
  // Function to hide the cookie consent banner
  function hideCookieBanner() {
    document.getElementById('cookie-banner').style.display = 'none';
  }
  
  // Function to handle cookie consent
  function handleCookieConsent() {
    localStorage.setItem('cookieConsent', 'true');
    hideCookieBanner();
  }
  
  // Event listener for accepting cookies
  document.getElementById('accept-cookies').addEventListener('click', handleCookieConsent);