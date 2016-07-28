<?
$subject_val = "[OMPI devel] GCC atomic intrinsics";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 20 11:48:35 2010" -->
<!-- isoreceived="20100720154835" -->
<!-- sent="Tue, 20 Jul 2010 11:49:10 -0400" -->
<!-- isosent="20100720154910" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] GCC atomic intrinsics" -->
<!-- id="8309BB1A-1841-49FC-A607-0CEA841DA839_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] GCC atomic intrinsics<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-20 11:49:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8199.php">Paul H. Hargrove: "Re: [OMPI devel] GCC atomic intrinsics"</a>
<li><strong>Previous message:</strong> <a href="8197.php">N.M. Maclaren: "Re: [OMPI devel] IB warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8199.php">Paul H. Hargrove: "Re: [OMPI devel] GCC atomic intrinsics"</a>
<li><strong>Reply:</strong> <a href="8199.php">Paul H. Hargrove: "Re: [OMPI devel] GCC atomic intrinsics"</a>
<li><strong>Reply:</strong> <a href="8200.php">Barrett, Brian W: "Re: [OMPI devel] GCC atomic intrinsics"</a>
<li><strong>Maybe reply:</strong> <a href="8206.php">Jeff Squyres: "Re: [OMPI devel] GCC atomic intrinsics"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
*** This mail mainly targeted at Brian and George ***
<br>
<p>Debian maintainer Manuel Prinz raised an idea to me this morning:
<br>
<p>The Debian community compiles and tests Debian on a huge range of hardware platforms.  It's been a long-standing issue that Open MPI doesn't support all of them (e.g., MIPS, ARM, ...).  Specifically, we don't have assembly to support all of those platforms.
<br>
<p>The Debian community asks: if building with a recent GCC on one of these platforms where OMPI doesn't have native assembly, can we fall back to the GCC intrinsic atomics?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2495">https://svn.open-mpi.org/trac/ompi/ticket/2495</a>
<br>
<p>Additionally, there's then OpenPA project from Argonne that supports a bunch of atomics on a bunch of platforms.  George told me at one point that he didn't think it was sufficient for Open MPI's needs.  Do we know if that's still true?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8199.php">Paul H. Hargrove: "Re: [OMPI devel] GCC atomic intrinsics"</a>
<li><strong>Previous message:</strong> <a href="8197.php">N.M. Maclaren: "Re: [OMPI devel] IB warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8199.php">Paul H. Hargrove: "Re: [OMPI devel] GCC atomic intrinsics"</a>
<li><strong>Reply:</strong> <a href="8199.php">Paul H. Hargrove: "Re: [OMPI devel] GCC atomic intrinsics"</a>
<li><strong>Reply:</strong> <a href="8200.php">Barrett, Brian W: "Re: [OMPI devel] GCC atomic intrinsics"</a>
<li><strong>Maybe reply:</strong> <a href="8206.php">Jeff Squyres: "Re: [OMPI devel] GCC atomic intrinsics"</a>
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
