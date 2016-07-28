<?
$subject_val = "[OMPI devel] Missing MPI 3 definitions";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 27 15:18:48 2014" -->
<!-- isoreceived="20140327191848" -->
<!-- sent="Thu, 27 Mar 2014 22:18:16 +0300" -->
<!-- isosent="20140327191816" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] Missing MPI 3 definitions" -->
<!-- id="CAEcYPwCUGNC0yBu0qEsQoiVYJfF1Tzg+-+2NfwKJ7r1rRbVFuA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Missing MPI 3 definitions<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-27 15:18:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14411.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Missing MPI 3 definitions"</a>
<li><strong>Previous message:</strong> <a href="14409.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] &#180;&#240;&#184;&#180;: &#180;&#240;&#184;&#180;: doubt on latency result with OpenMPI library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14411.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Missing MPI 3 definitions"</a>
<li><strong>Reply:</strong> <a href="14411.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Missing MPI 3 definitions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In 1.7.5, you guys bumped MPI_VERSION to 3 but forgot to add
<br>
definitions for the following constants:
<br>
<p>MPI_ERR_RMA_SHARED
<br>
MPI_WEIGHTS_EMPTY
<br>
<p>Also, the following two functions are missing:
<br>
<p>MPI_Comm_set_info()
<br>
MPI_Comm_get_info()
<br>
<p>PS: The two missing functions are trivial to provide, the first could
<br>
simply ignore the info handle, and the second could just return a
<br>
brand new empty info handle (well, unless you implemented
<br>
MPI_Comm_dup_with_info() to actually use the info hints).
<br>
<p><p><pre>
-- 
Lisandro Dalcin
---------------
CIMEC (UNL/CONICET)
Predio CONICET-Santa Fe
Colectora RN 168 Km 472, Paraje El Pozo
3000 Santa Fe, Argentina
Tel: +54-342-4511594 (ext 1016)
Tel/Fax: +54-342-4511169
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14411.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Missing MPI 3 definitions"</a>
<li><strong>Previous message:</strong> <a href="14409.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] &#180;&#240;&#184;&#180;: &#180;&#240;&#184;&#180;: doubt on latency result with OpenMPI library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14411.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Missing MPI 3 definitions"</a>
<li><strong>Reply:</strong> <a href="14411.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Missing MPI 3 definitions"</a>
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
