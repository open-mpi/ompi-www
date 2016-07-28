<?
$subject_val = "Re: [OMPI users] MPI_COMM_split hanging";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 12 11:56:18 2011" -->
<!-- isoreceived="20111212165618" -->
<!-- sent="Mon, 12 Dec 2011 10:56:11 -0600" -->
<!-- isosent="20111212165611" -->
<!-- name="Gary Gorbet" -->
<!-- email="gegorbet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_COMM_split hanging" -->
<!-- id="p06240804cb0be21a9e5b_at_[192.168.1.68]" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D449EF23-C2DA-48EE-BB73-577C5F5E73D9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_COMM_split hanging<br>
<strong>From:</strong> Gary Gorbet (<em>gegorbet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-12 11:56:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17936.php">Gustavo Correa: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<li><strong>Previous message:</strong> <a href="17934.php">Durga Choudhury: "Re: [OMPI users] [Beowulf] How to justify the use MPI codes on multicore systems/PCs?"</a>
<li><strong>In reply to:</strong> <a href="17931.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_split hanging"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;On Dec 12, 2011, at 9:45 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  For MPI_Comm_split, all processes in the input communicator (oldcomm
</span><br>
<span class="quotelev2">&gt;&gt;  or MPI_COMM_WORLD in your case) must call the operation since it is
</span><br>
<span class="quotelev2">&gt;&gt;  collective over the input communicator. In your program rank 0 is not
</span><br>
<span class="quotelev2">&gt;&gt;  calling the operation, so MPI_Comm_split is waiting for it to
</span><br>
<span class="quotelev2">&gt;&gt;  participate.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  If you want rank 0 to be excluded from the any of the communicators,
</span><br>
<span class="quotelev2">&gt;&gt;  you can give it a special color that is distinct from all other ranks.
</span><br>
<span class="quotelev2">&gt;&gt;  Upon return from MPI_Comm_split, rank 0 will be given a new
</span><br>
<span class="quotelev2">&gt;&gt;  communicator containing just one processes, itself. If you do not
</span><br>
<span class="quotelev2">&gt;&gt;  intend to use that communicator you can free it immediately
</span><br>
<span class="quotelev2">&gt;&gt;  afterwards.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;You can also specify MPI_UNDEFINED as your color, in which case the 
</span><br>
<span class="quotelev1">&gt;output communicator in that process will be MPI_COMM_NULL.  See 
</span><br>
<span class="quotelev1">&gt;MPI-2.2 p205.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Thank you, Josh and Jeff. That did it! I called MPI_COMM_split from 
<br>
my supervisor with color of MPI_UNDEFINED and key of 0. Then all 
<br>
_split() calls returned and I was able to do the work in my test 
<br>
program.
<br>
<p>All the best,
<br>
Gary
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17936.php">Gustavo Correa: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<li><strong>Previous message:</strong> <a href="17934.php">Durga Choudhury: "Re: [OMPI users] [Beowulf] How to justify the use MPI codes on multicore systems/PCs?"</a>
<li><strong>In reply to:</strong> <a href="17931.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_split hanging"</a>
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
