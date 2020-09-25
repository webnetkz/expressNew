<script>
          // Проверка браузера на поддержку service worker
         if('serviceWorker' in navigator) {
             // Подключаем sw
             navigator.serviceWorker.register('/sw.js').then(function() {
                 console.log("Service Worker Registered");
             });
         }
      </script>
      <script src="public/js/main.js" type="module"></script>
    </body>
</html>