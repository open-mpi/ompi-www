<?
$subject_val = "Re: [OMPI users] Mixing the FORTRAN and C APIs.";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May  7 17:04:45 2011" -->
<!-- isoreceived="20110507210445" -->
<!-- sent="Sat, 7 May 2011 17:04:34 -0400" -->
<!-- isosent="20110507210434" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mixing the FORTRAN and C APIs." -->
<!-- id="A8F932B3-E8E8-456F-86FC-DADA5C42B0A5_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C3459913-DFB8-475A-8478-FC22DF2C0BA3_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mixing the FORTRAN and C APIs.<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-07 17:04:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16482.php">Dmitry N. Mikushin: "Re: [OMPI users] USE mpi"</a>
<li><strong>Previous message:</strong> <a href="16480.php">Jeff Squyres: "Re: [OMPI users] USE mpi"</a>
<li><strong>In reply to:</strong> <a href="16479.php">Jeff Squyres: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 7, 2011, at 5:01 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; example, if you have to pass an MPI datatype down to PARPACK, you'd actually need to pass MPI_Type_f2c(MPI_INTEGER), or MPI_Type_f2c(MPI_DOUBLE_PRECISION).
</span><br>
<p>Blarg -- I got these backwards.  I should have said:
<br>
<p><span class="quotelev1">&gt; MPI_Type_c2f(MPI_INTEGER), or MPI_Type_c2f(MPI_DOUBLE_PRECISION).
</span><br>
<p>Because the MPI_INTEGER and MPI_DOUBLE_PRECISION handles you're using are C handles, and you need to translate them to the equivalent Fortran handles (i.e., the integer handle values you see in mpif.h.).  Try it -- cout the return value from MPI_Type_c2f(MPI_INTEGER) and it should match the value you see in mpif.h.
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
<li><strong>Next message:</strong> <a href="16482.php">Dmitry N. Mikushin: "Re: [OMPI users] USE mpi"</a>
<li><strong>Previous message:</strong> <a href="16480.php">Jeff Squyres: "Re: [OMPI users] USE mpi"</a>
<li><strong>In reply to:</strong> <a href="16479.php">Jeff Squyres: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
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
