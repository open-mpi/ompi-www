<?
$subject_val = "Re: [OMPI devel] making Fortran MPI_Status components public";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 27 16:31:03 2012" -->
<!-- isoreceived="20120927203103" -->
<!-- sent="27 Sep 2012 21:30:58 +0100" -->
<!-- isosent="20120927203058" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] making Fortran MPI_Status components public" -->
<!-- id="Prayer.1.3.5.1209272130580.5287_at_hermes-1.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5064A305.90200_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] making Fortran MPI_Status components public<br>
<strong>From:</strong> N.M. Maclaren (<em>nmm1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-27 16:30:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/10/11538.php">Jeff Squyres: "[OMPI devel] git tree mirror: I give up :-("</a>
<li><strong>Previous message:</strong> <a href="11536.php">Eugene Loh: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<li><strong>In reply to:</strong> <a href="11536.php">Eugene Loh: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 27 2012, Eugene Loh wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Good discussion, but as far as my specific issue goes, it looks like 
</span><br>
<span class="quotelev1">&gt;it's some peculiar interaction between different compiler versions.  I'm 
</span><br>
<span class="quotelev1">&gt;asking some experts.
</span><br>
<p>Module incompatibility is a common problem, and the solution is NOT to
<br>
put a hack into the configuration.  All that does is to create problems
<br>
for the future.
<br>
<p><span class="quotelev1">&gt;(In any case, PRIVATE appears to be doing its job.  The problem is not 
</span><br>
<span class="quotelev1">&gt;seeing something that's supposed to be PUBLIC.)
</span><br>
<p>Well, that's not doing its job.  PUBLIC/PRIVATE is a single mechanism.
<br>
<p>Regards,
<br>
Nick Maclaren.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/10/11538.php">Jeff Squyres: "[OMPI devel] git tree mirror: I give up :-("</a>
<li><strong>Previous message:</strong> <a href="11536.php">Eugene Loh: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<li><strong>In reply to:</strong> <a href="11536.php">Eugene Loh: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
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
