<?
$subject_val = "[OMPI users] Deadlock question";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 24 13:42:59 2010" -->
<!-- isoreceived="20100524174259" -->
<!-- sent="Mon, 24 May 2010 19:42:52 +0200" -->
<!-- isosent="20100524174252" -->
<!-- name="Gijsbert Wiesenekker" -->
<!-- email="gijsbert.wiesenekker_at_[hidden]" -->
<!-- subject="[OMPI users] Deadlock question" -->
<!-- id="5A68689B-5BC1-4D0A-9C61-8C9872F10AAC_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Deadlock question<br>
<strong>From:</strong> Gijsbert Wiesenekker (<em>gijsbert.wiesenekker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-24 13:42:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13148.php">Eugene Loh: "Re: [OMPI users] Deadlock question"</a>
<li><strong>Previous message:</strong> <a href="13146.php">Jeff Squyres: "Re: [OMPI users] Building 1.4.x on mac snow leopard with intel compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13148.php">Eugene Loh: "Re: [OMPI users] Deadlock question"</a>
<li><strong>Reply:</strong> <a href="13148.php">Eugene Loh: "Re: [OMPI users] Deadlock question"</a>
<li><strong>Reply:</strong> <a href="13168.php">Gijsbert Wiesenekker: "Re: [OMPI users] Deadlock question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My MPI program consists of a number of processes that send 0 or more messages (using MPI_Isend) to 0 or more other processes. The processes check periodically if messages are available to be processed. It was running fine until I increased the message size, and I got deadlock problems. Googling learned I was running into a classic deadlock problem if (see for example <a href="http://www.cs.ucsb.edu/~hnielsen/cs140/mpi-deadlocks.html">http://www.cs.ucsb.edu/~hnielsen/cs140/mpi-deadlocks.html</a>). The workarounds suggested like changing the order of MPI_Send and MPI_Recv do not work in my case, as it could be that one processor does not send any message at all to the other processes, so MPI_Recv would wait indefinitely.
<br>
Any suggestions on how to avoid deadlock in this case?
<br>
<p>Thanks,
<br>
Gijsbert
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13148.php">Eugene Loh: "Re: [OMPI users] Deadlock question"</a>
<li><strong>Previous message:</strong> <a href="13146.php">Jeff Squyres: "Re: [OMPI users] Building 1.4.x on mac snow leopard with intel compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13148.php">Eugene Loh: "Re: [OMPI users] Deadlock question"</a>
<li><strong>Reply:</strong> <a href="13148.php">Eugene Loh: "Re: [OMPI users] Deadlock question"</a>
<li><strong>Reply:</strong> <a href="13168.php">Gijsbert Wiesenekker: "Re: [OMPI users] Deadlock question"</a>
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
