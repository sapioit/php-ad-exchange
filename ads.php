<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="menu">
            <a href="proiect-servlets/home">home</a>
            <a href="proiect-servlets/controlpanel">controlpanel</a>
            <a href="proiect-servlets/ads">ads</a>
            <a href="proiect-servlets/logout">logout</a>
            <a href="proiect-servlets/debug">debug</a>
        </div>
        <h3>Add AD</h3>
        <form class="form add" action="ads" method="GET">
            <input type="text" name="campaign" placeholder="campaign" required />
            <input type="text" name="type" placeholder="type" required />
            <input type="text" name="width" placeholder="width" required />
            <input type="text" name="height" placeholder="height" required />
            <br/>
            <input type="text" name="link" placeholder="link" required />
            <input type="text" name="show" placeholder="show" required /> <br/>
            <input type="submit"  name="save" value="Save" />
            <input type="submit"  name="delete" value="Delete" />
        </form>
        <h3>See/Edit ADS</h3>
        <div class="ads">
            <form class="ad form" action="ads" method="GET">
                <input type="text" name="id" value="1" placeholder="id" required />
                <input type="text" name="campaign" value="a23" placeholder="campaign" required />
                <input type="text" name="link" value="http://placekitten.com/468/60" placeholder="link" required />
                <input type="text" name="show" value="http://placekitten.com/468/60" placeholder="show" required /> <br/>
                <input type="text" name="width" value="468" placeholder="width" required />
                <input type="text" name="height" value="60" placeholder="height" required />
                <input type="text" name="type" value="image" placeholder="type" required />
                <input type="submit"  name="save" value="Save" />
                <input type="submit"  name="delete" value="Delete" />
            </form>
            <form class="ad form" action="ads" method="GET">
                <input type="text" name="id" value="1" placeholder="id" required />
                <input type="text" name="campaign" value="a23" placeholder="campaign" required />
                <input type="text" name="link" value="http://placekitten.com/468/60" placeholder="link" required />
                <input type="text" name="show" value="http://placekitten.com/468/60" placeholder="show" required /> <br/>
                <input type="text" name="width" value="468" placeholder="width" required />
                <input type="text" name="height" value="60" placeholder="height" required />
                <input type="text" name="type" value="image" placeholder="type" required />
                <input type="submit"  name="save" value="Save" />
                <input type="submit"  name="delete" value="Delete" />
            </form>
            <form class="ad form" action="ads" method="GET">
                <input type="text" name="id" value="1" placeholder="id" required />
                <input type="text" name="campaign" value="a23" placeholder="campaign" required />
                <input type="text" name="link" value="http://placekitten.com/468/60" placeholder="link" required />
                <input type="text" name="show" value="http://placekitten.com/468/60" placeholder="show" required /> <br/>
                <input type="text" name="width" value="468" placeholder="width" required />
                <input type="text" name="height" value="60" placeholder="height" required />
                <input type="text" name="type" value="image" placeholder="type" required />
                <input type="submit"  name="save" value="Save" />
                <input type="submit"  name="delete" value="Delete" />
            </form>
            <form class="ad form" action="ads" method="GET">
                <input type="text" name="id" value="1" placeholder="id" required />
                <input type="text" name="campaign" value="a23" placeholder="campaign" required />
                <input type="text" name="link" value="http://placekitten.com/468/60" placeholder="link" required />
                <input type="text" name="show" value="http://placekitten.com/468/60" placeholder="show" required /> <br/>
                <input type="text" name="width" value="468" placeholder="width" required />
                <input type="text" name="height" value="60" placeholder="height" required />
                <input type="text" name="type" value="image" placeholder="type" required />
                <input type="submit"  name="save" value="Save" />
                <input type="submit"  name="delete" value="Delete" />
            </form>
            
            <!--
            <form class="ad form" action="ads" method="GET">
                <input type="text" name="id" value="1" placeholder="id" required />
                <input type="text" name="campaign" value="a23" placeholder="campaign" required />
                <input type="text" name="link" value="http://placekitten.com/468/60" placeholder="link" required />
                <input type="text" name="show" value="http://placekitten.com/468/60" placeholder="show" required /> <br/>
                <input type="text" name="width" value="468" placeholder="width" required />
                <input type="text" name="height" value="60" placeholder="height" required />
                <input type="text" name="type" value="image" placeholder="type" required />
                <input type="submit"  name="save" value="Save" />
                <input type="submit"  name="delete" value="Delete" />
            </form>
            -->
        </div>
        <br/>
    </body>
</html>
