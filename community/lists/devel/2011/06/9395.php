<?
$subject_val = "[OMPI devel] Compiling problem in trunk?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 23 07:23:38 2011" -->
<!-- isoreceived="20110623112338" -->
<!-- sent="Thu, 23 Jun 2011 13:23:53 +0200" -->
<!-- isosent="20110623112353" -->
<!-- name="Xin He" -->
<!-- email="xin.i.he_at_[hidden]" -->
<!-- subject="[OMPI devel] Compiling problem in trunk?" -->
<!-- id="4E032249.2030801_at_ericsson.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Compiling problem in trunk?<br>
<strong>From:</strong> Xin He (<em>xin.i.he_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-23 07:23:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9396.php">Jeff Squyres: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<li><strong>Previous message:</strong> <a href="9394.php">Jeff Squyres (jsquyres): "[OMPI devel] Fwd: === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9396.php">Jeff Squyres: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<li><strong>Reply:</strong> <a href="9396.php">Jeff Squyres: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<li><strong>Reply:</strong> <a href="9408.php">Ralf Wildenhues: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>as I compiled the sources from &quot;trunk&quot;. I got these error messages when 
<br>
doing make:
<br>
<p>[blablabla...]
<br>
make  all-am
<br>
make[3]: Entering directory `/home/ehhexxn/git/ompi/ompi/include'
<br>
&nbsp;&nbsp;&nbsp;FC     mpif90-ext.lo
<br>
libtool: compile: unrecognized option `-c'
<br>
libtool: compile: Try `libtool --help' for more information.
<br>
make[3]: *** [mpif90-ext.lo] Error 1
<br>
make[3]: Leaving directory `/home/ehhexxn/git/ompi/ompi/include'
<br>
make[2]: *** [all] Error 2
<br>
make[2]: Leaving directory `/home/ehhexxn/git/ompi/ompi/include'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/home/ehhexxn/git/ompi/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>I was able to compile an earlier version of trunk.
<br>
<p>Best regards,
<br>
Xin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9396.php">Jeff Squyres: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<li><strong>Previous message:</strong> <a href="9394.php">Jeff Squyres (jsquyres): "[OMPI devel] Fwd: === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9396.php">Jeff Squyres: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<li><strong>Reply:</strong> <a href="9396.php">Jeff Squyres: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<li><strong>Reply:</strong> <a href="9408.php">Ralf Wildenhues: "Re: [OMPI devel] Compiling problem in trunk?"</a>
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
