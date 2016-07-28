<?
$subject_val = "[OMPI devel] Misleading error messages?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 14 23:38:53 2016" -->
<!-- isoreceived="20160515033853" -->
<!-- sent="Sat, 14 May 2016 23:38:51 -0400" -->
<!-- isosent="20160515033851" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="[OMPI devel] Misleading error messages?" -->
<!-- id="CAHXxYDiDF+ZY5E2ZmJLPZN5VPudV4CkoOpwsviVhAkn1cDcepA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] Misleading error messages?<br>
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-14 23:38:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18975.php">Gilles Gouaillardet: "Re: [OMPI devel] Process connectivity map"</a>
<li><strong>Previous message:</strong> <a href="18973.php">dpchoudh .: "[OMPI devel] Process connectivity map"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18985.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Misleading error messages?"</a>
<li><strong>Reply:</strong> <a href="18985.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Misleading error messages?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In the file ompi/mca.bml/r2/bml_r2.c, it seems like the function name is
<br>
incorrect in some error messages (seems like a case of unchecked copy-paste
<br>
issue) in:
<br>
<p>1. Function mca_bml_r2_allocate_endpoint() line 154
<br>
2. Function mca_bml_r2_endpoint_add_btl() line 200, 206
<br>
<p>This is on master branch.
<br>
<p>Thanks
<br>
Durga
<br>
<p>The surgeon general advises you to eat right, exercise regularly and quit
<br>
ageing.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18974/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18975.php">Gilles Gouaillardet: "Re: [OMPI devel] Process connectivity map"</a>
<li><strong>Previous message:</strong> <a href="18973.php">dpchoudh .: "[OMPI devel] Process connectivity map"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18985.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Misleading error messages?"</a>
<li><strong>Reply:</strong> <a href="18985.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Misleading error messages?"</a>
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
