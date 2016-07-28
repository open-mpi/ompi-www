<?
$subject_val = "[OMPI users] using MPI_Recv in two different threads.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 11 07:19:25 2012" -->
<!-- isoreceived="20120111121925" -->
<!-- sent="Wed, 11 Jan 2012 04:19:16 -0800 (PST)" -->
<!-- isosent="20120111121916" -->
<!-- name="Hamilton Fischer" -->
<!-- email="fischerhamilton_at_[hidden]" -->
<!-- subject="[OMPI users] using MPI_Recv in two different threads." -->
<!-- id="1326284356.19452.YahooMailNeo_at_web113102.mail.gq1.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] using MPI_Recv in two different threads.<br>
<strong>From:</strong> Hamilton Fischer (<em>fischerhamilton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-11 07:19:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18134.php">Jeff Squyres: "Re: [OMPI users] Status of SLURM integration"</a>
<li><strong>Previous message:</strong> <a href="18132.php">Reuti: "Re: [OMPI users] Passwordless ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18135.php">TERRY DONTJE: "Re: [OMPI users] using MPI_Recv in two different threads."</a>
<li><strong>Reply:</strong> <a href="18135.php">TERRY DONTJE: "Re: [OMPI users] using MPI_Recv in two different threads."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, I'm actually using mpi4py but my question should be similar to normal MPI in spirit.
<br>
<p>Simply, I want to do a MPMD application with a dedicated thread for each node (I have a small network). I was wondering if it was okay to do a blocking recv in each independent thread. Of course, since each thread has one node, there is no problem with wrong recv's being picked up by other threads.
<br>
<p><p>Thanks.
<br>
<p>noobermin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18134.php">Jeff Squyres: "Re: [OMPI users] Status of SLURM integration"</a>
<li><strong>Previous message:</strong> <a href="18132.php">Reuti: "Re: [OMPI users] Passwordless ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18135.php">TERRY DONTJE: "Re: [OMPI users] using MPI_Recv in two different threads."</a>
<li><strong>Reply:</strong> <a href="18135.php">TERRY DONTJE: "Re: [OMPI users] using MPI_Recv in two different threads."</a>
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
