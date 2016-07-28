<?
$subject_val = "[OMPI devel] Deadlock on openib when using hindexed types";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 04:42:27 2009" -->
<!-- isoreceived="20090904084227" -->
<!-- sent="Fri, 4 Sep 2009 10:40:01 +0200 (CEST)" -->
<!-- isosent="20090904084001" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="[OMPI devel] Deadlock on openib when using hindexed types" -->
<!-- id="alpine.DEB.2.00.0909031636530.31624_at_jeaugeys.frec.bull.fr" -->
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
<strong>Subject:</strong> [OMPI devel] Deadlock on openib when using hindexed types<br>
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-04 04:40:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6762.php">Nadia Derbey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Previous message:</strong> <a href="6760.php">Jeff Squyres: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6765.php">Rolf Vandevaart: "Re: [OMPI devel] Deadlock on openib when using hindexed types"</a>
<li><strong>Reply:</strong> <a href="6765.php">Rolf Vandevaart: "Re: [OMPI devel] Deadlock on openib when using hindexed types"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>We're currently working with romio and we hit a problem when exchanging 
<br>
data with hindexed types with the openib btl.
<br>
<p>The attached reproducer (adapted from romio) is working fine on tcp, 
<br>
blocks on openib when using 1 port but works if we use 2 ports (!). I 
<br>
tested it against the trunk and the 1.3.3 release with the same 
<br>
conclusions.
<br>
<p>The basic idea is : processes 0..3 send contiguous data to process 0. 0 
<br>
receives these buffers with an hindexed datatype which scatters data at 
<br>
different offsets.
<br>
<p>Receiving in a contiguous manner works, but receiving with an hindexed 
<br>
datatype makes the remote sends block. Yes, the remote send, not the 
<br>
receive. The receive is working fine and data is correctly scattered on 
<br>
the buffer, but the senders on the other node are stuck in the Wait().
<br>
<p>I tried not using MPI_BOTTOM, which changed nothing. It seems that the 
<br>
problem only occurs when STRIPE*NB (the size of the send) is higher than 
<br>
12k -namely the RDMA threshold- but I didn't manage to remove the 
<br>
deadlock by increasing the RDMA threshold.
<br>
<p>I've tried to do some debugging, but I'm a bit lost on where the 
<br>
non-contiguous types are handled and how they affect btl communication.
<br>
<p>So, if anyone has a clue on where I should look at, I'm interested !
<br>
<p>Thanks,
<br>
Sylvain
<br>

<br><hr>
<ul>
<li>TEXT/X-CSRC attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6761/hindexed_openib.c">hindexed_openib.c</a>
</ul>
<!-- attachment="hindexed_openib.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6762.php">Nadia Derbey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Previous message:</strong> <a href="6760.php">Jeff Squyres: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6765.php">Rolf Vandevaart: "Re: [OMPI devel] Deadlock on openib when using hindexed types"</a>
<li><strong>Reply:</strong> <a href="6765.php">Rolf Vandevaart: "Re: [OMPI devel] Deadlock on openib when using hindexed types"</a>
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
