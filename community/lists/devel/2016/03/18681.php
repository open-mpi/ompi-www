<?
$subject_val = "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  3 22:08:32 2016" -->
<!-- isoreceived="20160304030832" -->
<!-- sent="Fri, 4 Mar 2016 14:09:12 +1100" -->
<!-- isosent="20160304030912" -->
<!-- name="Michael Rezny" -->
<!-- email="michael.rezny_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran" -->
<!-- id="68F50026-66C6-418F-9707-9D825918A119_at_monash.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="56D8F606.6000009_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran<br>
<strong>From:</strong> Michael Rezny (<em>michael.rezny_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-03 22:09:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18682.php">Dave Turner: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>Previous message:</strong> <a href="18680.php">Larry Baker: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>In reply to:</strong> <a href="18679.php">Christopher Samuel: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Dave,
<br>
.mod files are compiler dependent, so if a library is built with say gfortran,
<br>
you will get a compiler error in code compiled with a different compiler
<br>
if you use a &quot;use&quot; statement
<br>
<p>However, you may still be able to specify a different compiler on OpenMPI with the OPMI_FC
<br>
if you use the F77 mode &quot;include mpif.h&quot; instead of the F90 mode &quot;use mpi&quot;
<br>
and compile, build, and run without errors.
<br>
<p>kindest regards
<br>
Mike
<br>
<p>On 04/03/2016, at 1:42 PM, Christopher Samuel wrote:
<br>
<p><span class="quotelev1">&gt; Hi Gilles,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 04/03/16 13:33, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; there is clearly no hope when you use mpi.mod and mpi_f08.mod
</span><br>
<span class="quotelev2">&gt;&gt; my point was, it is not even possible to expect &quot;legacy&quot; mpif.h work
</span><br>
<span class="quotelev2">&gt;&gt; with different compilers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry, my knowledge of FORTRAN is limited to trying to debug why their
</span><br>
<span class="quotelev1">&gt; code wouldn't compile. :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Apologies for the noise.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All the best,
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Christopher Samuel        Senior Systems Administrator
</span><br>
<span class="quotelev1">&gt; VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev1">&gt; Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev1">&gt; <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18679.php">http://www.open-mpi.org/community/lists/devel/2016/03/18679.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18682.php">Dave Turner: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>Previous message:</strong> <a href="18680.php">Larry Baker: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>In reply to:</strong> <a href="18679.php">Christopher Samuel: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
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
