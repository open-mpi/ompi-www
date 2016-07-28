<?
$subject_val = "[OMPI devel] RDMA with ob1 and openib";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 27 10:15:44 2010" -->
<!-- isoreceived="20100427141544" -->
<!-- sent="Tue, 27 Apr 2010 16:20:25 +0200 (CEST)" -->
<!-- isosent="20100427142025" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="[OMPI devel] RDMA with ob1 and openib" -->
<!-- id="alpine.DEB.2.00.1004271554510.3643_at_jeaugeys.frec.bull.fr" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] RDMA with ob1 and openib<br>
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-27 10:20:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7820.php">Rolf vandeVaart: "Re: [OMPI devel] r23023 change to trunk causes problems with exit value"</a>
<li><strong>Previous message:</strong> <a href="7818.php">Jeff Squyres: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7821.php">George Bosilca: "Re: [OMPI devel] RDMA with ob1 and openib"</a>
<li><strong>Reply:</strong> <a href="7821.php">George Bosilca: "Re: [OMPI devel] RDMA with ob1 and openib"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi list,
<br>
<p>I'm currently working on IB bandwidth improvements and maybe some of you 
<br>
may help me understanding some things. I'm trying to align every IB RDMA 
<br>
operation to 64 bytes, because having it unaligned can hurt your 
<br>
performance from lightly to very badly, depending on your architecture.
<br>
<p>So, I'm trying to understand the RDMA protocol (PUT and GET), and here is 
<br>
what I understood :
<br>
<p>* if we have one btl, RDMA is performed with only one GET operation, 
<br>
otherwise, we use multiple PUT operations. I can understand that the GET 
<br>
operation improves asynchronous aspects. So, why not always use GET 
<br>
operations ?
<br>
<p>* if mpi_leave_pinned is 0, this is becoming more strange. We start a 
<br>
rendez-vous (not RDMA) with a size equal to the eager limit, then we 
<br>
switch to RDMA because the remote peer asks for RDMA PUTs (even if 
<br>
btl_openib_flags does not have the PUT operation btw). Why this corner 
<br>
case ? Why not starting a normal RDMA (especially since we switch back to 
<br>
RDMA afterwards) ?
<br>
<p>* the openib btl has a &quot;buffer alignment&quot; parameter. Fantastic, just what 
<br>
I needed. Unfortunately, I can't see where it is used (and indeed 
<br>
performance is bad if my buffers are not aligned to 64 bytes). Am I 
<br>
missing something ?
<br>
<p>* I did a prototype to split GET operations in openib into two operations 
<br>
: a small one to correct buffer alignment and a big aligned one. It would 
<br>
certainly be better to perform the first one with a normal send/recv, but 
<br>
for the prototype, doing it inside the openib GET was simpler. Performance 
<br>
on unaligned buffers is much better (but this is just a prototype). Is 
<br>
there anyone working on this right now or should I pursue my effort to 
<br>
make it clean and stable ?
<br>
<p>Thanks in advance for any feedback,
<br>
Sylvain
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7820.php">Rolf vandeVaart: "Re: [OMPI devel] r23023 change to trunk causes problems with exit value"</a>
<li><strong>Previous message:</strong> <a href="7818.php">Jeff Squyres: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7821.php">George Bosilca: "Re: [OMPI devel] RDMA with ob1 and openib"</a>
<li><strong>Reply:</strong> <a href="7821.php">George Bosilca: "Re: [OMPI devel] RDMA with ob1 and openib"</a>
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
