<!-- jQuery -->
    <script src="{{ asset('template/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('template/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('template/dist/js/demo.js') }}"></script>
    @yield('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toggleButton = document.getElementById("toggleDarkMode");
            const body = document.body;
            const header = document.getElementById("main-header");

            // Verifica se o modo escuro está ativado no Local Storage
            if (localStorage.getItem("darkMode") === "enabled") {
                body.classList.add("dark-mode");
                header.classList.remove("navbar-light")
                header.classList.add("navbar-dark")
            }

            toggleButton.addEventListener("click", function() {
                body.classList.toggle("dark-mode");
                header.classList.toggle("navbar-dark");
                header.classList.toggle("navbar-light");

                // Salva a escolha do usuário no Local Storage
                if (body.classList.contains("dark-mode")) {
                    localStorage.setItem("darkMode", "enabled");
                } else {
                    localStorage.setItem("darkMode", "disabled");
                }
            });
        });
    </script>