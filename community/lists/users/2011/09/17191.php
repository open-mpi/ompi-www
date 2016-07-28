<?
$subject_val = "Re: [OMPI users] Problem with MPI_BARRIER";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  8 10:01:49 2011" -->
<!-- isoreceived="20110908140149" -->
<!-- sent="Thu, 8 Sep 2011 15:01:37 +0100" -->
<!-- isosent="20110908140137" -->
<!-- name="Rolf Riesen" -->
<!-- email="rolf.riesen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_BARRIER" -->
<!-- id="20110908140137.GA12559_at_midnight" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B85E6C2C-B428-4ABA-86A2-AB40E2788104_at_coria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with MPI_BARRIER<br>
<strong>From:</strong> Rolf Riesen (<em>rolf.riesen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-08 10:01:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17192.php">Teng Ma: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<li><strong>Previous message:</strong> <a href="17190.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?"</a>
<li><strong>In reply to:</strong> <a href="17189.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17192.php">Teng Ma: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu Sep  8, 2011 15:41:57, Ghislain Lartigue wrote:
<br>
<span class="quotelev1">  &gt; Ghislain   These &quot;times&quot; have no units, it's just an example...
</span><br>
<span class="quotelev1">  &gt; Ghislain   Whatever units are used, at least one process should spend a very small of time in the barrier (compared to the other processes) and this is not what I see in my code.
</span><br>
<p>You seem to assume the last process to enter the barrier will be the
<br>
first process to leave the barrier. That may or may not be the case,
<br>
depending on the barrier algorithm in use.
<br>
<p>Rolf
<br>
<p><p><p>+++-+--+----+-------+------------+--------------------+------------------------
<br>
Rolf Riesen, Ph.D.                                Email: rolf.riesen_at_[hidden]
<br>
Senior Research Scientist                         Phone: +353 1 826-9161
<br>
IBM Research, Ireland                             WWW:   <a href="http://bit.ly/rolfIBM">http://bit.ly/rolfIBM</a>
<br>
Mulhuddart, Dublin 15
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17192.php">Teng Ma: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<li><strong>Previous message:</strong> <a href="17190.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?"</a>
<li><strong>In reply to:</strong> <a href="17189.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17192.php">Teng Ma: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
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
