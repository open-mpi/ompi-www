<?
$subject_val = "[OMPI users] MPI_Bcast not broadcast to all processes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  5 04:08:25 2007" -->
<!-- isoreceived="20071205090825" -->
<!-- sent="Wed, 5 Dec 2007 01:08:20 -0800 (PST)" -->
<!-- isosent="20071205090820" -->
<!-- name="alireza ghahremanian" -->
<!-- email="mat2ag_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Bcast not broadcast to all processes" -->
<!-- id="245028.53793.qm_at_web55115.mail.re4.yahoo.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Bcast not broadcast to all processes<br>
<strong>From:</strong> alireza ghahremanian (<em>mat2ag_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-05 04:08:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4596.php">Jeff Squyres: "Re: [OMPI users] MPI_Bcast not broadcast to all processes"</a>
<li><strong>Previous message:</strong> <a href="4594.php">Brian Dobbins: "Re: [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4596.php">Jeff Squyres: "Re: [OMPI users] MPI_Bcast not broadcast to all processes"</a>
<li><strong>Reply:</strong> <a href="4596.php">Jeff Squyres: "Re: [OMPI users] MPI_Bcast not broadcast to all processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Friends,
<br>
<p>I am writing a matrix multiplication program with MPI. MPI_Bcast does
<br>
not broadcast to all processes, in last iteration for block size
<br>
greater than a specific size. I test it with both MPICH and OPENMPI.I
<br>
have 12 processes which 7 of them are reached to MPI_Bcast but when
<br>
master (rank 0) send only 6 of them receive the broadcast (exactly from
<br>
rank 1 to 6) and rank 7 stays in waiting. Surprisingly this happen only
<br>
in iteration 3999 from 4000 and in the rest of cases every thing is all
<br>
right, also if I reduce the block size, which, will be sent, every
<br>
thing will be done correctly.
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;____________________________________________________________________________________
<br>
Looking for last minute shopping deals?  
<br>
Find them fast with Yahoo! Search.  <a href="http://tools.search.yahoo.com/newsearch/category.php?category=shopping">http://tools.search.yahoo.com/newsearch/category.php?category=shopping</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4596.php">Jeff Squyres: "Re: [OMPI users] MPI_Bcast not broadcast to all processes"</a>
<li><strong>Previous message:</strong> <a href="4594.php">Brian Dobbins: "Re: [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4596.php">Jeff Squyres: "Re: [OMPI users] MPI_Bcast not broadcast to all processes"</a>
<li><strong>Reply:</strong> <a href="4596.php">Jeff Squyres: "Re: [OMPI users] MPI_Bcast not broadcast to all processes"</a>
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
