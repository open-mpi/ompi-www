<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 17 09:45:38 2006" -->
<!-- isoreceived="20060717134538" -->
<!-- sent="Mon, 17 Jul 2006 09:45:34 -0400" -->
<!-- isosent="20060717134534" -->
<!-- name="Ethan Mallove" -->
<!-- email="Ethan.Mallove_at_[hidden]" -->
<!-- subject="[MTT users] adding LWP::UserAgent to MTT repository" -->
<!-- id="44BB947E.3090802_at_Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>From:</strong> Ethan Mallove (<em>Ethan.Mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-17 09:45:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0040.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] adding LWP::UserAgent to MTT repository"</a>
<li><strong>Previous message:</strong> <a href="0038.php">Ethan Mallove: "Re: [MTT users] [MTT svn] svn:mtt r196 - in trunk: lib/MTT lib/MTT/Reporter server"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0040.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] adding LWP::UserAgent to MTT repository"</a>
<li><strong>Maybe reply:</strong> <a href="0040.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] adding LWP::UserAgent to MTT repository"</a>
<li><strong>Maybe reply:</strong> <a href="0042.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] adding LWP::UserAgent to MTT repository"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I thought it would be nice to not require users to have LWP::UserAgent installed
<br>
&nbsp;(like we don't require them to have Config::IniFiles - it's part of the MTT
<br>
repository), since LWP::UserAgent isn't listed as a standard module
<br>
(<a href="https://www.linuxnotes.net/perlcd/prog/ch32_01.htm">https://www.linuxnotes.net/perlcd/prog/ch32_01.htm</a>). However, LWP::UserAgent
<br>
uses a platform dependent binary called Parser.so which makes the addition of
<br>
LWP::UserAgent to the repos slightly more involved. E.g., putting Parser.so in
<br>
sparc, i386, etc. directories and getting UserAgent to look for them in the
<br>
right place. For now, LWP::UserAgent can be put in a centralized location that
<br>
the PERLLIB env var can point to.
<br>
<p>-Ethan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0040.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] adding LWP::UserAgent to MTT repository"</a>
<li><strong>Previous message:</strong> <a href="0038.php">Ethan Mallove: "Re: [MTT users] [MTT svn] svn:mtt r196 - in trunk: lib/MTT lib/MTT/Reporter server"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0040.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] adding LWP::UserAgent to MTT repository"</a>
<li><strong>Maybe reply:</strong> <a href="0040.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] adding LWP::UserAgent to MTT repository"</a>
<li><strong>Maybe reply:</strong> <a href="0042.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] adding LWP::UserAgent to MTT repository"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
