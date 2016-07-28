<?
$subject_val = "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  7 12:23:11 2009" -->
<!-- isoreceived="20090207172311" -->
<!-- sent="Sat, 7 Feb 2009 12:23:07 -0500 (EST)" -->
<!-- isosent="20090207172307" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV" -->
<!-- id="alpine.DEB.1.10.0902071219170.5259_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="442B7F6C-9E67-45F5-8B4E-60D50FE5BEDB_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-07 12:23:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5387.php">Jeff Squyres: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
<li><strong>Previous message:</strong> <a href="5385.php">Jeff Squyres: "[OMPI devel] meeting @Cisco on Wednesday"</a>
<li><strong>In reply to:</strong> <a href="5384.php">Jeff Squyres: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5387.php">Jeff Squyres: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
<li><strong>Reply:</strong> <a href="5387.php">Jeff Squyres: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, 7 Feb 2009, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; End result: I guess I'm a little surprised that the difference is that clear 
</span><br>
<span class="quotelev1">&gt; -- does a function call really take 10ns?  I'm also surprised that the 
</span><br>
<span class="quotelev1">&gt; layered C version has significantly more jitter than the non-layered version; 
</span><br>
<span class="quotelev1">&gt; I can't really explain that.  I'd welcome anyone else replicating experiment 
</span><br>
<span class="quotelev1">&gt; and/or eyeballing my code to make sure I didn't bork something up.
</span><br>
<p>That is significantly higher than I would have expected for a single 
<br>
function call.  When I did all the component tests a couple years ago, a 
<br>
function call into a shared library was about 5ns on an Intel Xeon 
<br>
(pre-Core 2 design) and about 2.5 on an AMD Opteron.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5387.php">Jeff Squyres: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
<li><strong>Previous message:</strong> <a href="5385.php">Jeff Squyres: "[OMPI devel] meeting @Cisco on Wednesday"</a>
<li><strong>In reply to:</strong> <a href="5384.php">Jeff Squyres: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5387.php">Jeff Squyres: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
<li><strong>Reply:</strong> <a href="5387.php">Jeff Squyres: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
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
