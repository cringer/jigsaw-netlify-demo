<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
        <script src="https://identity.netlify.com/v1/netlify-identity-widget.js"></script>
    </head>
    <body>
        @yield('body')        

        <script>
        if (window.netlifyIdentity) {
            window.netlifyIdentity.on("init", user => {
            if (!user) {
                window.netlifyIdentity.on("login", () => {
                document.location.href = "/admin/";
                });
            }
            });
        }
        </script>
    </body>
</html>
