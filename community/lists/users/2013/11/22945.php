<?
$subject_val = "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 12 04:42:46 2013" -->
<!-- isoreceived="20131112094246" -->
<!-- sent="Tue, 12 Nov 2013 10:42:46 +0100" -->
<!-- isosent="20131112094246" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing" -->
<!-- id="798D3376-0A3A-44A6-AAA1-ED71F94F0352_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="05CA88E3-B338-4659-B6D4-50812E6C298E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-12 04:42:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22946.php">Tang, Yu-Hang: "[OMPI users] Segmentation fault in MPI_Init when passing pointers allocated in main()"</a>
<li><strong>Previous message:</strong> <a href="22944.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<li><strong>In reply to:</strong> <a href="22944.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22958.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<li><strong>Reply:</strong> <a href="22958.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/12/23183.php">Jim Parker: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 12, 2013, at 00:38 , Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 2. In the 64 bit case, you'll have a difficult time extracting the MPI status values from the 8-byte INTEGERs in the status array in Fortran (because the first 2 of 3 each really be 2 4-byte integers).
</span><br>
<p>My understanding is that in Fortran explicitly types variables will retain their expected size. Thus, instead of declaring
<br>
<p>INTEGER :: status[MPI_STATUS_SIZE]
<br>
<p>one should go for
<br>
<p>INTEGER*4 :: status[MPI_STATUS_SIZE]
<br>
<p>This should make it work right now. However, it is a non-standard solution, and we should fix the status handling internally in Open MPI.
<br>
<p>Looking at the code I think that correctly detecting the type of our ompi_fortran_integer_t during configure (which should be a breeze if the correct flags are passed) should solve all issues here as we are protecting the status conversion between C and Fortran.
<br>
<p>Jim, can you go in the include directory on your Open MPI installation and grep for the definition of ompi_fortran_integer_t please.
<br>
<p>&nbsp;&nbsp;George.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22946.php">Tang, Yu-Hang: "[OMPI users] Segmentation fault in MPI_Init when passing pointers allocated in main()"</a>
<li><strong>Previous message:</strong> <a href="22944.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<li><strong>In reply to:</strong> <a href="22944.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22958.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<li><strong>Reply:</strong> <a href="22958.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/12/23183.php">Jim Parker: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
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
