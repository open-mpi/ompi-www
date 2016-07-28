<?
$subject_val = "Re: [OMPI devel] GCC atomic intrinsics";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 20 12:06:18 2010" -->
<!-- isoreceived="20100720160618" -->
<!-- sent="Tue, 20 Jul 2010 09:05:54 -0700" -->
<!-- isosent="20100720160554" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] GCC atomic intrinsics" -->
<!-- id="4C45C962.2090900_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8309BB1A-1841-49FC-A607-0CEA841DA839_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] GCC atomic intrinsics<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-20 12:05:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8200.php">Barrett, Brian W: "Re: [OMPI devel] GCC atomic intrinsics"</a>
<li><strong>Previous message:</strong> <a href="8198.php">Jeff Squyres: "[OMPI devel] GCC atomic intrinsics"</a>
<li><strong>In reply to:</strong> <a href="8198.php">Jeff Squyres: "[OMPI devel] GCC atomic intrinsics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8200.php">Barrett, Brian W: "Re: [OMPI devel] GCC atomic intrinsics"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
One thing to note is that the GCC atomic intrinsics are not always 
<br>
implemented either.  Use of an intrinsic that is unimplemented in a 
<br>
given GCC version for a given platform will result in an link failure 
<br>
(trying to call an &quot;external&quot; implementation that probably does not 
<br>
exist).  So, even if this leads to support for MORE platforms, it is not 
<br>
certain to magically produce support for ALL platforms on which GCC is 
<br>
available.
<br>
<p>In addition of the OpenPA project, there are also atomics for a wide 
<br>
variety of platforms (including the explicitly mentioned MIPS and ARM) 
<br>
in GASNet Tools.
<br>
<p>-Paul
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; *** This mail mainly targeted at Brian and George ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Debian maintainer Manuel Prinz raised an idea to me this morning:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Debian community compiles and tests Debian on a huge range of hardware platforms.  It's been a long-standing issue that Open MPI doesn't support all of them (e.g., MIPS, ARM, ...).  Specifically, we don't have assembly to support all of those platforms.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Debian community asks: if building with a recent GCC on one of these platforms where OMPI doesn't have native assembly, can we fall back to the GCC intrinsic atomics?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="https://svn.open-mpi.org/trac/ompi/ticket/2495">https://svn.open-mpi.org/trac/ompi/ticket/2495</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Additionally, there's then OpenPA project from Argonne that supports a bunch of atomics on a bunch of platforms.  George told me at one point that he didn't think it was sufficient for Open MPI's needs.  Do we know if that's still true?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
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
<li><strong>Next message:</strong> <a href="8200.php">Barrett, Brian W: "Re: [OMPI devel] GCC atomic intrinsics"</a>
<li><strong>Previous message:</strong> <a href="8198.php">Jeff Squyres: "[OMPI devel] GCC atomic intrinsics"</a>
<li><strong>In reply to:</strong> <a href="8198.php">Jeff Squyres: "[OMPI devel] GCC atomic intrinsics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8200.php">Barrett, Brian W: "Re: [OMPI devel] GCC atomic intrinsics"</a>
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
