<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="menu">
            <a href="proiect-servlets/index">home</a>
            <a href="proiect-servlets/controlpanel">controlpanel</a>
            <a href="proiect-servlets/ads">ads</a>
            <a href="proiect-servlets/logout">logout</a>
            <a href="proiect-servlets/debug">debug</a>
        </div>
        <br/>
        <form class="form ads" action="login" method="GET">
            <br/><input type="text" name="username" placeholder="username" required />
            <input type="password" name="password" placeholder="password" required />
            <input type="submit"  name="save" value="Save" />
        </form>
    </body>
</html>
