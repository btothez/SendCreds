<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
    <link rel="stylesheet" href="/css/app.css"></link>
    <link rel="stylesheet" type="text/css" href="/css/sweetalert.css">
    <script src="/js/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>

<main>
    <div class="how-does-this-work">
        <button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#HowDoesThisWorkModal">How does this work?</button>
    </div>
    <nav class="container header">
        <div class="row">
            <div class="col-xs-6">
                <div class="navbar-brand"><a href="/"><img src="/images/logo.svg" alt="SendCreds Logo"></a></div>
            </div>
            <div class="col-xs-6">
                <div class="slogan">Never send plain text passwords again.</div>
            </div>
        </div>
    </nav>
    @yield('body')

</main>

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-7 left-then-center">Made by the folks at <a target="_new" href="http://earlybird.co">Earlybird</a>.</div>
            <div class="col-sm-5 right-then-center">&copy; 2017 SendCreds</div>
        </div>
    </div>
</div>

<!-- Contact Modal -->
<div class="modal fade" id="HowDoesThisWorkModal" tabindex="-1" role="dialog" aria-labelledby="HowDoesThisWorkModal" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h1>How Does This Work?</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <p>SendCreds is a straightforward and secure way to send someone passwords or any other plain text
                    content. No account. Never send a plain text password again.</p>
                <h2>Step by Step</h2>
                <ol class="list-unstyled">
                    <li>1. Input content and receiver’s info and click “Send Securely.”</li>
                    <li>2. Receiver gets and email with a link to content.</li>
                    <li>3. Receiver goes to URL and inputs SMS code to unlock content.</li>
                    <li>4. Content is automatically deleted after 1 hour.</li>
                </ol>
                <h2>Who Made This?</h2>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="media">
                            <div class="media-left">
                                <a href="#"><img class="media-object img-circle" src="/images/avatar-boaz@2x.jpg" alt="Photo of Boaz Reisman"></a>
                            </div>
                            <div class="media-body">
                            <h6 class="media-heading">Boaz Reisman</h4>
                            Developer
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="media">
                            <div class="media-left">
                                <a href="#"><img class="media-object img-circle" src="/images/avatar-brad@2x.jpg" alt="Photo of Brad Siefert"></a>
                            </div>
                            <div class="media-body">
                            <h6 class="media-heading">Brad Siefert</h4>
                            Designer
                            </div>
                        </div>
                    </div>
                </div>
                <p>We made SendCreds because we recognize that digital security is critically important. Hopefully this
                    helps to make the internet just a little bit safer for everyone.</p>
                <button class="btn btn-primary btn-sm buy-coffee">Buy us a coffee</button>
            </div>
        </div>
    </div>
</div>
<!-- Contact Modal End -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="/bootstrap-sass/assets/javascripts/bootstrap.min.js"></script>
<script type="text/javascript">
$(function () {
  $('[data-toggle="tooltip"]').tooltip({
      trigger: 'click',
      placement: 'left'
  });
})
</script>
<script type="text/javascript" src="/js/sendcreds.js"></script>
</body>
</html>
