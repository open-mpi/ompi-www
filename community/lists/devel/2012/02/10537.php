<?
$subject_val = "Re: [OMPI devel] non-portable code in examples/Makefile";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 21 07:57:55 2012" -->
<!-- isoreceived="20120221125755" -->
<!-- sent="Tue, 21 Feb 2012 04:57:40 -0800" -->
<!-- isosent="20120221125740" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] non-portable code in examples/Makefile" -->
<!-- id="4F4394C4.7020201_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="73E46233-2DB4-4519-AEDE-C41C98C7233D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] non-portable code in examples/Makefile<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-21 07:57:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10538.php">Jeffrey Squyres: "Re: [OMPI devel] non-portable code in examples/Makefile"</a>
<li><strong>Previous message:</strong> <a href="10536.php">Jeffrey Squyres: "Re: [OMPI devel] non-portable code in examples/Makefile"</a>
<li><strong>In reply to:</strong> <a href="10534.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] non-portable code in examples/Makefile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10538.php">Jeffrey Squyres: "Re: [OMPI devel] non-portable code in examples/Makefile"</a>
<li><strong>Reply:</strong> <a href="10538.php">Jeffrey Squyres: "Re: [OMPI devel] non-portable code in examples/Makefile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/21/2012 2:55 AM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; That is truly bizarre &quot;make&quot; behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Heads up that in the upcoming fortran revamp, we *only* use FC. I.E., 
</span><br>
<span class="quotelev1">&gt; there's only mpifort wrapper compiler (mpif77 and mpif90 still exist, 
</span><br>
<span class="quotelev1">&gt; but only as sym links to mpifort, signifying that mpifort is the way 
</span><br>
<span class="quotelev1">&gt; of the future).
</span><br>
<p><p>But 12 hours ago with the current setup of distinct mpif77 and mpif90, 
<br>
combined with the crazy setting-FC-also-sets-F77 behavior on make, here 
<br>
is what I would see on a Solaris build w/ f77 bindings, but not f90:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ make hello_f77
</span><br>
<span class="quotelev1">&gt; mpif90 -g  -o hello_f77
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Unfortunately, this installation of Open MPI was not compiled with
</span><br>
<span class="quotelev1">&gt; Fortran 90 support.  As such, the mpif90 compiler is non-functional.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10538.php">Jeffrey Squyres: "Re: [OMPI devel] non-portable code in examples/Makefile"</a>
<li><strong>Previous message:</strong> <a href="10536.php">Jeffrey Squyres: "Re: [OMPI devel] non-portable code in examples/Makefile"</a>
<li><strong>In reply to:</strong> <a href="10534.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] non-portable code in examples/Makefile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10538.php">Jeffrey Squyres: "Re: [OMPI devel] non-portable code in examples/Makefile"</a>
<li><strong>Reply:</strong> <a href="10538.php">Jeffrey Squyres: "Re: [OMPI devel] non-portable code in examples/Makefile"</a>
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
