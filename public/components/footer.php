        <script>
            // Проверка браузера на поддержку service worker
            if('serviceWorker' in navigator) {
                // Подключаем sw
                navigator.serviceWorker.register('/sw.js').then(function() {
                    console.log("Service Worker Registered");
                });
            }

            // Выбор активного элемента меню
            let url = window.location.href;
            let elements = "a[href='"+url+"']";
            // Определенние активного элемента меню
            if(document.querySelector(elements)) {
                document.querySelector(elements).classList.add('activeMenu');
            }
        </script>
        <script src="/public/js/main.js" type="module"></script>
    </body>
</html>