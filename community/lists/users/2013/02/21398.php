<?
$subject_val = "[OMPI users] Very high latency with openib btl";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 14 11:50:37 2013" -->
<!-- isoreceived="20130214165037" -->
<!-- sent="Thu, 14 Feb 2013 11:50:31 -0500" -->
<!-- isosent="20130214165031" -->
<!-- name="Maxime Boissonneault" -->
<!-- email="maxime.boissonneault_at_[hidden]" -->
<!-- subject="[OMPI users] Very high latency with openib btl" -->
<!-- id="511D15D7.5070807_at_calculquebec.ca" -->
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
<strong>Subject:</strong> [OMPI users] Very high latency with openib btl<br>
<strong>From:</strong> Maxime Boissonneault (<em>maxime.boissonneault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-14 11:50:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21399.php">Oliver Weihe: "[OMPI users] process binding to NUMA node on Opteron 6xxx series CPUs?"</a>
<li><strong>Previous message:</strong> <a href="21397.php">Bharath Ramesh: "Re: [OMPI users] OpenMPI job launch failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21412.php">Maxime Boissonneault: "Re: [OMPI users] Very high latency with openib btl"</a>
<li><strong>Reply:</strong> <a href="21412.php">Maxime Boissonneault: "Re: [OMPI users] Very high latency with openib btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I have a strange case here. The application is &quot;plink&quot; 
<br>
(<a href="http://pngu.mgh.harvard.edu/~purcell/plink/download.shtml">http://pngu.mgh.harvard.edu/~purcell/plink/download.shtml</a>). The 
<br>
computation/communication pattern of the application is the following :
<br>
<p>1- MPI_Init
<br>
2- Some single rank computation
<br>
3- MPI_Bcast
<br>
4- Some single rank computation
<br>
5- MPI_Barrier
<br>
6- rank 0 sends data to each other rank with MPI_Ssend, one rank at a time.
<br>
6- other ranks use MPI_Recv
<br>
7- Some single rank computation
<br>
8- other ranks send result to rank 0 with MPI_Ssend
<br>
8- rank 0 receives data with MPI_Recv
<br>
9- rank 0 analyses result
<br>
10- MPI_Finalize
<br>
<p>The amount of data being sent is of the order of the kilobytes, and we 
<br>
have IB.
<br>
<p>The problem we observe is in step 6. I've output dates before and after 
<br>
each MPI operation. With the openib btl, the behavior I observe is that :
<br>
- rank 0 starts sending
<br>
- rank n receives almost instantly, and MPI_Recv returns.
<br>
- rank 0's MPI_Ssend often returns _minutes_.
<br>
<p>It looks like the acknowledgement from rank n takes minutes to reach 
<br>
rank 0.
<br>
<p>Now, the tricky part is that if I disable the openib btl to use instead 
<br>
tcp over IB, there is no such latency and the acknowledgement comes back 
<br>
within a fraction of a second. Also, if rank 0 and rank n are on the 
<br>
same node, the acknowledgement is also quasi-instantaneous (I guess it 
<br>
goes through the SM btl instead of openib).
<br>
<p>I tried to reproduce this in a simple case, but I observed no such 
<br>
latency. The duration that I got for the whole communication is of the 
<br>
order of milliseconds.
<br>
<p>Does anyone have an idea of what could cause such very high latencies 
<br>
when using the OpenIB BTL ?
<br>
<p>Also, I tried replacing step 6 by explicitly sending a confirmation :
<br>
- rank 0 does MPI_Isend to rank n followed by MPI_Recv from rank n
<br>
- rank n does MPI_Recv from rank 0 followed by MPI_Isend to rank 0
<br>
<p>In this case also, rank n's MPI_Isend executes quasi-instantaneously, 
<br>
and rank 0's MPI_Recv only returns a few minutes later.
<br>
<p>Thanks,
<br>
<p>Maxime Boissonneault
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21399.php">Oliver Weihe: "[OMPI users] process binding to NUMA node on Opteron 6xxx series CPUs?"</a>
<li><strong>Previous message:</strong> <a href="21397.php">Bharath Ramesh: "Re: [OMPI users] OpenMPI job launch failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21412.php">Maxime Boissonneault: "Re: [OMPI users] Very high latency with openib btl"</a>
<li><strong>Reply:</strong> <a href="21412.php">Maxime Boissonneault: "Re: [OMPI users] Very high latency with openib btl"</a>
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
