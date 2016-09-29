<?php
include './includes/top.inc.html';
include './includes/menu.inc.html';
?>
<div class="intro-text">
    <p>Hønsegården arbejder i alle former for løsninger.
        <br><br>
        Vi kan være dét ekstra krydderi til din julefrokost.<br>
        Som en hemmelig overraskelse kan du invitere <span style="font-family: 'Alegreya SC';">Hønsegården</span> til at battle med en fødselar.<br>
        Har du mere lyst til at se <span style="font-family: 'Alegreya SC';">Hønsegården</span> i et normalt show så laver vi også dette.<br>
        Har du altid drømt om en impro worksop?<br>
        Kort sagt: alt er muligt !<br>
        Forvent altid at vi indrager dit selskab i meget af det der foregår.
        <br><br>
        Send en mail til Anne Merete Olsen på booking@honsegarden.dk for at høre nærmere om priser og muligheder</p>
</div>
<form class="contactform" method="post" action="http://www.honsegarden.dk/cgi-bin/FormMail.pl" 
      accept-charset="ISO-8859-1" onsubmit="var originalCharset = document.charset;
              document.charset = 'ISO-8859-1';
              window.onbeforeunload = function () {
                  document.charset = originalCharset;
              };">
    <div class="section group">
        <div class="col span_1_of_2">
            <div class="form-group">
                <input class="form-control" type="text" name="realname" placeholder="Navn">
            </div>
            <div class="form-group">
                <input class="form-control" type="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="subject" placeholder="Vedrørende">
            </div>
        </div>
        <div class="col span_1_of_2">
            <div class="form-group">
                <textarea class="form-control" rows="6" name="Message" placeholder="Din besked"></textarea>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-danger">Send email</button>
    <input type="hidden" name="recipient" value="booking@honsegarden.dk" />
    <input type="hidden" name="redirect" 
           value="../booking.php?success" />
    <input type="hidden" name="missing_fields_redirect" 
           value="../booking.php?error" />
    <input type="hidden" name="required" value="realname,email,Message" />
</form>
<?php
if (isset($_GET["success"])) {
    ?>
    <div class="container" align="center">
        <span class="help-block text-success">Din email blev sendt. Tak.</span>
    </div>
    <?php
}
if (isset($_GET["error"])) {
    ?>
    <div class="container" align="center">
        <span class="help-block text-danger">Det mislykkedes at sende din email. Prøv venligst senere eller kontakt Annette Sund på email: Silqe@hotmail.com.<br><?php echo $_GET["error"] ?></span>
    </div>
    <?php
}
?>
<?php
include './includes/footer.inc.html';
?>