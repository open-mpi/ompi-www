<?
$subject_val = "Re: [OMPI users] SM btl slows down bandwidth?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 13 11:58:53 2008" -->
<!-- isoreceived="20080813155853" -->
<!-- sent="Wed, 13 Aug 2008 09:46:34 -0600" -->
<!-- isosent="20080813154634" -->
<!-- name="Ron Brightwell" -->
<!-- email="rbbrigh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SM btl slows down bandwidth?" -->
<!-- id="20080813154634.GA13932_at_ratbert.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="b5f16768-ebba-4b1c-baec-b1b17f73f76c_at_Cas2.srn.sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] SM btl slows down bandwidth?<br>
<strong>From:</strong> Ron Brightwell (<em>rbbrigh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-13 11:46:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6336.php">Yvan Fournier: "[OMPI users] bug in MPI_File_get_position_shared ?"</a>
<li><strong>Previous message:</strong> <a href="6334.php">Tom Riddle: "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath"</a>
<li><strong>Maybe in reply to:</strong> <a href="6321.php">Dani&#235;l Mantione: "[OMPI users] SM btl slows down bandwidth?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6340.php">Jeff Squyres: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>Reply:</strong> <a href="6340.php">Jeff Squyres: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPICH2 manages to get about 5GB/s in shared memory performance on the
</span><br>
<span class="quotelev1">&gt; Xeon 5420 system.
</span><br>
<p>Does the sm btl use a memcpy with non-temporal stores like MPICH2?
<br>
This can be a big win for bandwidth benchmarks that don't actually
<br>
touch their receive buffers at all...
<br>
<p>-Ron
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6336.php">Yvan Fournier: "[OMPI users] bug in MPI_File_get_position_shared ?"</a>
<li><strong>Previous message:</strong> <a href="6334.php">Tom Riddle: "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath"</a>
<li><strong>Maybe in reply to:</strong> <a href="6321.php">Dani&#235;l Mantione: "[OMPI users] SM btl slows down bandwidth?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6340.php">Jeff Squyres: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>Reply:</strong> <a href="6340.php">Jeff Squyres: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
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
