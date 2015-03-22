<html>
<head>
</head>
<body>
    <h1> Welcome to Smarty</h1>
    {foreach from=$users item=user}
        Usuarios:
        {foreach from=$user item=values}
            {$values}
        {/foreach}
        <br/>
    {/foreach}
</body>
</html>