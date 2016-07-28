<?
$subject_val = "Re: [OMPI devel] Compiling problem in trunk?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 23 15:58:26 2011" -->
<!-- isoreceived="20110623195826" -->
<!-- sent="Thu, 23 Jun 2011 21:58:14 +0200" -->
<!-- isosent="20110623195814" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compiling problem in trunk?" -->
<!-- id="20110623195813.10320_at_gmx.net" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4E032249.2030801_at_ericsson.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Compiling problem in trunk?<br>
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-23 15:58:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9409.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9407.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9395.php">Xin He: "[OMPI devel] Compiling problem in trunk?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>* Xin He wrote on Thu, Jun 23, 2011 at 01:23:53PM CEST:
<br>
<span class="quotelev1">&gt; make[3]: Entering directory `/home/ehhexxn/git/ompi/ompi/include'
</span><br>
<span class="quotelev1">&gt;   FC     mpif90-ext.lo
</span><br>
<span class="quotelev1">&gt; libtool: compile: unrecognized option `-c'
</span><br>
<span class="quotelev1">&gt; libtool: compile: Try `libtool --help' for more information.
</span><br>
<span class="quotelev1">&gt; make[3]: *** [mpif90-ext.lo] Error 1
</span><br>
<p>Do a 'make V=1' to see details.
<br>
<p>You will most likely find that configure didn't find a suitable Fortran
<br>
(FC) compiler for you to use.  Check the config.log of the enclosing
<br>
package to verify.
<br>
<p>Hope that helps.
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9409.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9407.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9395.php">Xin He: "[OMPI devel] Compiling problem in trunk?"</a>
<!-- nextthread="start" -->
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
