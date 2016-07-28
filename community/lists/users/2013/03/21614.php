<?
$subject_val = "[OMPI users] Persistent Communication using MPI_SEND_INIT, MPI_RECV_INIT etc.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 25 22:21:55 2013" -->
<!-- isoreceived="20130326022155" -->
<!-- sent="Mon, 25 Mar 2013 22:21:49 -0400" -->
<!-- isosent="20130326022149" -->
<!-- name="Timothy Stitt" -->
<!-- email="Timothy.Stitt.9_at_[hidden]" -->
<!-- subject="[OMPI users] Persistent Communication using MPI_SEND_INIT, MPI_RECV_INIT etc." -->
<!-- id="356F4C6F-9365-4CA3-9BC5-609397BCCDD8_at_nd.edu" -->
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
<strong>Subject:</strong> [OMPI users] Persistent Communication using MPI_SEND_INIT, MPI_RECV_INIT etc.<br>
<strong>From:</strong> Timothy Stitt (<em>Timothy.Stitt.9_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-25 22:21:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21615.php">Syed Ahsan Ali: "Re: [OMPI users] Running openmpi jobs on two system-librdmacm: couldn't read ABI version"</a>
<li><strong>Previous message:</strong> <a href="21613.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun trouble through ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21623.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Persistent Communication using MPI_SEND_INIT, MPI_RECV_INIT etc."</a>
<li><strong>Reply:</strong> <a href="21623.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Persistent Communication using MPI_SEND_INIT, MPI_RECV_INIT etc."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I've inherited a MPI code that was written ~8-10 years ago and it predominately uses MPI persistent communication routines for data transfers e.g. MPI_SEND_INIT, MPI_RECV_INIT, MPI_START etc.  I was just wondering if using persistent communication calls is still the most efficient/scalable way to perform communication when the communication pattern is known and fixed amongst neighborhood processes? We regularly run the code across an IB network so would there be a benefit to rewrite the code using another approach (e.g. MPI one-sided communication)?
<br>
<p>Thanks in advance for any advice.
<br>
<p>Tim.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21615.php">Syed Ahsan Ali: "Re: [OMPI users] Running openmpi jobs on two system-librdmacm: couldn't read ABI version"</a>
<li><strong>Previous message:</strong> <a href="21613.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun trouble through ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21623.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Persistent Communication using MPI_SEND_INIT, MPI_RECV_INIT etc."</a>
<li><strong>Reply:</strong> <a href="21623.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Persistent Communication using MPI_SEND_INIT, MPI_RECV_INIT etc."</a>
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
