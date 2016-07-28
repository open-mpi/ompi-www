<?
$subject_val = "Re: [OMPI devel] RDMA with ob1 and openib";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 27 11:39:04 2010" -->
<!-- isoreceived="20100427153904" -->
<!-- sent="Tue, 27 Apr 2010 11:38:55 -0400" -->
<!-- isosent="20100427153855" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RDMA with ob1 and openib" -->
<!-- id="D8239694-A28C-49B7-BFD8-E273560DFF3A_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.DEB.2.00.1004271554510.3643_at_jeaugeys.frec.bull.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RDMA with ob1 and openib<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-27 11:38:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7822.php">Ralph Castain: "Re: [OMPI devel] r23023 change to trunk causes problems with exit value"</a>
<li><strong>Previous message:</strong> <a href="7820.php">Rolf vandeVaart: "Re: [OMPI devel] r23023 change to trunk causes problems with exit value"</a>
<li><strong>In reply to:</strong> <a href="7819.php">Sylvain Jeaugey: "[OMPI devel] RDMA with ob1 and openib"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 27, 2010, at 10:20 , Sylvain Jeaugey wrote:
<br>
<p><span class="quotelev1">&gt; Hi list,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm currently working on IB bandwidth improvements and maybe some of you may help me understanding some things. I'm trying to align every IB RDMA operation to 64 bytes, because having it unaligned can hurt your performance from lightly to very badly, depending on your architecture.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, I'm trying to understand the RDMA protocol (PUT and GET), and here is what I understood :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * if we have one btl, RDMA is performed with only one GET operation, otherwise, we use multiple PUT operations. I can understand that the GET operation improves asynchronous aspects. So, why not always use GET operations ?
</span><br>
<p>Because nobody had the time to implement the pipelined GET protocol.
<br>
<p><span class="quotelev1">&gt; * if mpi_leave_pinned is 0, this is becoming more strange. We start a rendez-vous (not RDMA) with a size equal to the eager limit, then we switch to RDMA because the remote peer asks for RDMA PUTs (even if btl_openib_flags does not have the PUT operation btw). Why this corner case ? Why not starting a normal RDMA (especially since we switch back to RDMA afterwards) ?
</span><br>
<p>I guess you just found a bug. In fact the protocol is a little bit more complex: eager, RDMA and send/recv. There is a small amount of data sent over the copy in/copy out at the end of the buffer. Originally this was done on the data right after the eager, but for some &quot;well known&quot; issues on IB (something related to fork, Jeff can give you more details here) we move it at the end.
<br>
<p><span class="quotelev1">&gt; * the openib btl has a &quot;buffer alignment&quot; parameter. Fantastic, just what I needed. Unfortunately, I can't see where it is used (and indeed performance is bad if my buffers are not aligned to 64 bytes). Am I missing something ?
</span><br>
<p>No comments ...
<br>
<p><span class="quotelev1">&gt; * I did a prototype to split GET operations in openib into two operations : a small one to correct buffer alignment and a big aligned one. It would certainly be better to perform the first one with a normal send/recv, but for the prototype, doing it inside the openib GET was simpler. Performance on unaligned buffers is much better (but this is just a prototype). Is there anyone working on this right now or should I pursue my effort to make it clean and stable ?
</span><br>
<p>This can be easily done internally in the IB BTL, without any support from the upper layer. What I would like to have, is a more generic solution, as I think that all BTL are impacted by the unaligned buffers for RDMA operations. My idea is to modify the way we deal with the eager fragment, and be able to recompute the eager size based on the alignment we want for the next RMA operation. For IB it might be 64 bytes, but for SM it is 4K...
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance for any feedback,
</span><br>
<span class="quotelev1">&gt; Sylvain
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7822.php">Ralph Castain: "Re: [OMPI devel] r23023 change to trunk causes problems with exit value"</a>
<li><strong>Previous message:</strong> <a href="7820.php">Rolf vandeVaart: "Re: [OMPI devel] r23023 change to trunk causes problems with exit value"</a>
<li><strong>In reply to:</strong> <a href="7819.php">Sylvain Jeaugey: "[OMPI devel] RDMA with ob1 and openib"</a>
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
