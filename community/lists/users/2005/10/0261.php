<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 31 14:03:10 2005" -->
<!-- isoreceived="20051031190310" -->
<!-- sent="Mon, 31 Oct 2005 11:00:20 -0800" -->
<!-- isosent="20051031190020" -->
<!-- name="Mike Houston" -->
<!-- email="mhouston_at_[hidden]" -->
<!-- subject="[O-MPI users] TCP problems" -->
<!-- id="436669C4.6010100_at_graphics.stanford.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Mike Houston (<em>mhouston_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-31 14:00:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0262.php">Tim S. Woodall: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
<li><strong>Previous message:</strong> <a href="0260.php">Mike Houston: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/11/0275.php">Jeff Squyres: "Re: [O-MPI users] TCP problems"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/11/0275.php">Jeff Squyres: "Re: [O-MPI users] TCP problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have things working now.  I needed to limit OpenMPI to actual working 
<br>
interfaces (thanks for the tip).  It still seems that should be figured 
<br>
out correctly...  Now I've moved onto stress testing with the bandwidth 
<br>
testing app I posted earlier in the Infiniband thread:
<br>
<p>mpirun -mca btl_tcp_if_include eth0 -mca btl tcp -np 2 -hostfile 
<br>
/u/mhouston/mpihosts mpi_bandwidth 3750 262144
<br>
<p>262144  109.697279 (MillionBytes/sec)   104.615478(MegaBytes/sec)
<br>
<p>mpirun -mca btl_tcp_if_include eth0 -mca btl tcp -np 2 -hostfile 
<br>
/u/mhouston/mpihosts mpi_bandwidth 4000 262144
<br>
[spire-2.Stanford.EDU:06645] mca_btl_tcp_frag_send: writev failed with 
<br>
errno=104mpirun noticed that job rank 1 with PID 21281 on node 
<br>
&quot;spire-3.stanford.edu&quot; exited on signal 11.
<br>
<p>Cranking up the number of messages in flight makes things really 
<br>
unhappy.  I haven't seen this behavior with LAM or MPICH so I thought 
<br>
I'd mention it.
<br>
<p>Thanks!
<br>
<p>-Mike
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0262.php">Tim S. Woodall: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
<li><strong>Previous message:</strong> <a href="0260.php">Mike Houston: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/11/0275.php">Jeff Squyres: "Re: [O-MPI users] TCP problems"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/11/0275.php">Jeff Squyres: "Re: [O-MPI users] TCP problems"</a>
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
