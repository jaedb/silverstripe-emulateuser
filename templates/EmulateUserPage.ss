<!DOCTYPE HTML>
<!--[if lt IE 7 ]> <html class="ie ie7-below ie8-below ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7-below ie8-below ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8-below ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class=""> <!--<![endif]-->

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scaleable=no" name="viewport">
	
	<title>Emulate User</title>
	
	<% base_tag %>

</head>

<body>
	<div class="emulate-user">
		
		<h1 class="title">Emulate user</h2>
		
		<div class="intro">Please select the user that you wish to emulate. Once finished emulating a user, you need to log out, and then log back in as an Administrator.</div>
		
		<div class="table">
			
			<div class="headings">
				<div class="id">ID</div>
				<div class="name">Name</div>
				<div class="email">Email</div>
				<br style="clear: both;" />
			</div>
			
			<div class="users">
				<% loop Users %>
					<a href="{$Top.Link}emulateuser/{$ID}" class="user">
						<div class="id">$ID</div>
						<div class="name">$Name</div>
						<div class="email">$Email</div>
						<br style="clear: both;" />
					</a>
				<% end_loop %>
			</div>
		</div>
		
	</div>
</body>
</html>