<html>
<head>
<title>Webshop login </title>

{include file="../templates/header.tpl" title="werknemers"  username='gast'}
</head>
    <body>
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
        
        <form method="post" action="index.php?action=login">
            <fieldset class="panel-heading">
            <input type="text" class="form-control" name="username" required="yes" placeholder="username">
            <input type="password" class="form-control" name="password" required="yes" placeholder="wachtwoord">
            <input type="submit" class="form-control" name="submit" value="voerin">
            </fieldset>
        </form>

        <p>{$tekst|default:""}<p>
        </div>
      </div>
    </div>
  </div>

 
    </body>
    {include file="../templates/footer.tpl"}
</html>
