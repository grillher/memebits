<!DOCTYPE html>
<html>
	<head>
		<title>Memebits - Generate SapoCodebits Memes</title>
                <script type="text/javascript" src="scripts/jquery.js"></script>
                <script type="text/javascript" src="scripts/jquery-ui.js"></script>
                <link type="text/css" rel="stylesheet" href="css/south-street/jquery-ui-1.9.1.custom.min.css" />
                <script type="text/javascript">
                    $(function() {
                        $.ajax({
                            url: 'getUsers.php',
                            dataType: 'json',
                            success: function(users) {
                                var nicks = [];
                                for(var user in users) {
                                    nicks.push(users[user].nick);
                                    //$("#cmbUsers").append('<option>'+users[user].nick+'</option>');
                                }
                                $("#cmbUsers").autocomplete({
                                    source: nicks
                                });
                            }
                        });
                        
                    });
                </script>
        </head>
	<body>
            <form id="form">
                <input id="cmbUsers">
                    
                </input>
            </form>
            <div id="test"/>
	</body>
</html>