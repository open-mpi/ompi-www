<?
$subject_val = "[OMPI users] Accessing to the send buffer";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  2 01:05:25 2010" -->
<!-- isoreceived="20100802050525" -->
<!-- sent="Mon, 02 Aug 2010 01:05:23 -0400" -->
<!-- isosent="20100802050523" -->
<!-- name="Alberto Canestrelli" -->
<!-- email="canestrelli_at_[hidden]" -->
<!-- subject="[OMPI users] Accessing to the send buffer" -->
<!-- id="4C565213.80607_at_idra.unipd.it" -->
<!-- charset="ISO-8859-15" -->
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
<strong>Subject:</strong> [OMPI users] Accessing to the send buffer<br>
<strong>From:</strong> Alberto Canestrelli (<em>canestrelli_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-02 01:05:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13888.php">Terry Dontje: "Re: [OMPI users] OpenIB Error in ibv_create_srq"</a>
<li><strong>Previous message:</strong> <a href="13886.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] OpenMPI providing rank?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13889.php">Terry Dontje: "Re: [OMPI users] Accessing to the send buffer"</a>
<li><strong>Reply:</strong> <a href="13889.php">Terry Dontje: "Re: [OMPI users] Accessing to the send buffer"</a>
<li><strong>Maybe reply:</strong> <a href="13890.php">Alberto Canestrelli: "Re: [OMPI users] Accessing to the send buffer"</a>
<li><strong>Maybe reply:</strong> <a href="13892.php">Alberto Canestrelli: "Re: [OMPI users] Accessing to the send buffer"</a>
<li><strong>Maybe reply:</strong> <a href="14069.php">Alberto Canestrelli: "Re: [OMPI users] Accessing to the send buffer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I have a problem with a fortran code that I have parallelized with MPI. 
<br>
I state in advance that I read the whole ebook &quot;Mit Press - Mpi - The 
<br>
Complete Reference, Volume 1&quot; and I took different MPI classes, so I 
<br>
have a discrete MPI knowledge. I was able to solve by myself all the 
<br>
errors I bumped into but now I am not able to find the bug of my code 
<br>
that provides erroneous results. Without entering in the details of my 
<br>
code, I think that the cause of the problem could be reletad to the 
<br>
following aspect highlighted in the above ebook (in the follow I copy 
<br>
and paste from the e-book):
<br>
<p>A nonblocking post-send call indicates that the system may start copying 
<br>
data
<br>
out of the send buffer. The sender must not access any part of the send 
<br>
buffer
<br>
(neither for loads nor for STORES) after a nonblocking send operation is 
<br>
posted until
<br>
the complete send returns.
<br>
A nonblocking post-receive indicates that the system may start writing 
<br>
data into
<br>
the receive buffer. The receiver must not access any part of the receive 
<br>
buffer after
<br>
a nonblocking receive operation is posted, until the complete-receive 
<br>
returns.
<br>
Rationale. We prohibit read accesses to a send buffer while it is being 
<br>
used, even
<br>
though the send operation is not supposed to alter the content of this 
<br>
buffer. This
<br>
may seem more stringent than necessary, but the additional restriction 
<br>
causes little
<br>
loss of functionality and allows better performance on some systems- 
<br>
consider
<br>
the case where data transfer is done by a DMA engine that is not 
<br>
cache-coherent
<br>
with the main processor.End of rationale.
<br>
<p>I use plenty of nonblocking post-send in my code. Is it really true that 
<br>
the sender must not access any part of the send buffer not even for 
<br>
STORES?  Or was it a MPI 1.0 issue?
<br>
Thanks.
<br>
alberto
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13888.php">Terry Dontje: "Re: [OMPI users] OpenIB Error in ibv_create_srq"</a>
<li><strong>Previous message:</strong> <a href="13886.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] OpenMPI providing rank?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13889.php">Terry Dontje: "Re: [OMPI users] Accessing to the send buffer"</a>
<li><strong>Reply:</strong> <a href="13889.php">Terry Dontje: "Re: [OMPI users] Accessing to the send buffer"</a>
<li><strong>Maybe reply:</strong> <a href="13890.php">Alberto Canestrelli: "Re: [OMPI users] Accessing to the send buffer"</a>
<li><strong>Maybe reply:</strong> <a href="13892.php">Alberto Canestrelli: "Re: [OMPI users] Accessing to the send buffer"</a>
<li><strong>Maybe reply:</strong> <a href="14069.php">Alberto Canestrelli: "Re: [OMPI users] Accessing to the send buffer"</a>
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
