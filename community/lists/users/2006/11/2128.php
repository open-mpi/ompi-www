<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov  2 23:00:43 2006" -->
<!-- isoreceived="20061103040043" -->
<!-- sent="Thu, 2 Nov 2006 23:00:33 -0500" -->
<!-- isosent="20061103040033" -->
<!-- name="Tony Ladd" -->
<!-- email="ladd_at_[hidden]" -->
<!-- subject="[OMPI users] OMPI collectives" -->
<!-- id="060e01c6fefc$9c2c9920$ca79e30a_at_ladd02" -->
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
<strong>From:</strong> Tony Ladd (<em>ladd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-02 23:00:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2129.php">calin pal: "[OMPI users] openmpi problem"</a>
<li><strong>Previous message:</strong> <a href="2127.php">Brian Budge: "Re: [OMPI users] dma using infiniband protocol"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2133.php">George Bosilca: "Re: [OMPI users] OMPI collectives"</a>
<li><strong>Reply:</strong> <a href="2133.php">George Bosilca: "Re: [OMPI users] OMPI collectives"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George
<br>
<p>I found the info I think you were referring to. Thanks. I then experimented
<br>
essentially randomly with different algorithms for all reduce. But the issue
<br>
with really bad performance for certain message sizes persisted with v1.1.
<br>
The good news is that the upgrade to 1.2 fixed my worst problem. Now the
<br>
performance is reasonable for all message sizes. I will test the tuned
<br>
algorithms again asap.
<br>
<p>I had a couple of questions
<br>
<p>1) Ompi_info lists only 3 or 4 algorithms for allreduce and reduce and about
<br>
5 for b'cast. But you can use higher numbers as well. Are these additional
<br>
undocmented algorithms (you mentioned a number like 15) or is it ignoring
<br>
out of range parameters?
<br>
2) It seems for allreduce you can select a tuned reduce and tuned bcast
<br>
instead of the binary tree. But there is a faster allreduce which is order
<br>
2N rather than 4N for Reduce + Bcast (N is msg size). It segments the vector
<br>
and distributes the root among the nodes; in an allreduce there is no need
<br>
to gather the root vector to one processor and then scatter it again. I
<br>
wrote a simple version for powers of 2 (MPI_SUM)-any chance of it being
<br>
implemented in OMPI. 
<br>
<p>Tony
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2129.php">calin pal: "[OMPI users] openmpi problem"</a>
<li><strong>Previous message:</strong> <a href="2127.php">Brian Budge: "Re: [OMPI users] dma using infiniband protocol"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2133.php">George Bosilca: "Re: [OMPI users] OMPI collectives"</a>
<li><strong>Reply:</strong> <a href="2133.php">George Bosilca: "Re: [OMPI users] OMPI collectives"</a>
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
