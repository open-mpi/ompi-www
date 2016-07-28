<?
$subject_val = "[OMPI users] MPI_Cart_rank: Out-of-range coordinates are erroneous for non-periodic dimensions";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  7 03:08:51 2009" -->
<!-- isoreceived="20090107080851" -->
<!-- sent="Wed, 07 Jan 2009 09:08:43 +0100" -->
<!-- isosent="20090107080843" -->
<!-- name="Atle Rudshaug" -->
<!-- email="atle_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Cart_rank: Out-of-range coordinates are erroneous for non-periodic dimensions" -->
<!-- id="4964630B.2070302_at_numericalrocks.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Cart_rank: Out-of-range coordinates are erroneous for non-periodic dimensions<br>
<strong>From:</strong> Atle Rudshaug (<em>atle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-07 03:08:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7654.php">Jeff Squyres: "Re: [OMPI users] MPI_Cart_rank: Out-of-range coordinates are erroneous for non-periodic dimensions"</a>
<li><strong>Previous message:</strong> <a href="7652.php">jody: "Re: [OMPI users] Open MPI and mpi-defaults"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7654.php">Jeff Squyres: "Re: [OMPI users] MPI_Cart_rank: Out-of-range coordinates are erroneous for non-periodic dimensions"</a>
<li><strong>Reply:</strong> <a href="7654.php">Jeff Squyres: "Re: [OMPI users] MPI_Cart_rank: Out-of-range coordinates are erroneous for non-periodic dimensions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>I am trying to find the neighbor ranks in a 3D cartesian communicator. I 
<br>
use MPI_Cart_shift for 6 of them, but for the 12 diagonals I tried to 
<br>
use MPI_Cart_rank. However, only x-direction is periodic and my program 
<br>
crashed because of out-of-range coordinates. Then I found something 
<br>
strange in some MPICH documentation:
<br>
<p>&quot;Out-of-range coordinates are erroneous for non-periodic dimensions . 
<br>
Versions of MPICH before 1.2.2 returned MPI_PROC_NULL for the rank in 
<br>
this case.&quot;
<br>
<p>Why doesn't it anymore? Is this the same for OpenMPI? I expected it to 
<br>
return MPI_PROC_NULL which would make things much easier.
<br>
<p>- Atle
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7654.php">Jeff Squyres: "Re: [OMPI users] MPI_Cart_rank: Out-of-range coordinates are erroneous for non-periodic dimensions"</a>
<li><strong>Previous message:</strong> <a href="7652.php">jody: "Re: [OMPI users] Open MPI and mpi-defaults"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7654.php">Jeff Squyres: "Re: [OMPI users] MPI_Cart_rank: Out-of-range coordinates are erroneous for non-periodic dimensions"</a>
<li><strong>Reply:</strong> <a href="7654.php">Jeff Squyres: "Re: [OMPI users] MPI_Cart_rank: Out-of-range coordinates are erroneous for non-periodic dimensions"</a>
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
