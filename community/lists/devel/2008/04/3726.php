<?
$subject_val = "[OMPI devel] Memchecker: breaks trunk again";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 21 09:28:37 2008" -->
<!-- isoreceived="20080421132837" -->
<!-- sent="Mon, 21 Apr 2008 07:28:24 -0600" -->
<!-- isosent="20080421132824" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Memchecker: breaks trunk again" -->
<!-- id="C431F298.D29C%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Memchecker: breaks trunk again<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-21 09:28:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3727.php">Ralph H Castain: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
<li><strong>Previous message:</strong> <a href="3725.php">Adrian Knoth: "Re: [OMPI devel] Change in btl/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3727.php">Ralph H Castain: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
<li><strong>Reply:</strong> <a href="3727.php">Ralph H Castain: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am finding that the memchecker code is again breaking the trunk,
<br>
specifically on any machine that does not have valgrind installed.
<br>
Apparently, memchecker now forces a requirement for valgrind?
<br>
<p>Here is what I get:
<br>
<p>--- MCA component memchecker:valgrind (m4 configuration macro)
<br>
checking for MCA component memchecker:valgrind compile mode... static
<br>
checking checking for the valgrind include directory ... none needed
<br>
checking valgrind/valgrind.h usability... no
<br>
checking valgrind/valgrind.h presence... no
<br>
checking for valgrind/valgrind.h... no
<br>
configure: WARNING: *** Could not find valgrind header files, as valgrind
<br>
support was requested
<br>
configure: error: *** Cannot continue
<br>
<p><p>Could somebody please fix this? I thought we had decided many moons ago that
<br>
we would not require specific debuggers in default build configurations - I
<br>
am somewhat surprised, therefore, to find that memchecker is &quot;on&quot; by
<br>
default, and now requires valgrind!
<br>
<p>I have tried --disable-memchecker, but nothing will allow me to get past
<br>
this error.
<br>
<p>Thanks
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3727.php">Ralph H Castain: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
<li><strong>Previous message:</strong> <a href="3725.php">Adrian Knoth: "Re: [OMPI devel] Change in btl/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3727.php">Ralph H Castain: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
<li><strong>Reply:</strong> <a href="3727.php">Ralph H Castain: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
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
