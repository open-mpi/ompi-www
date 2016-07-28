<?
$subject_val = "Re: [OMPI users] Very high latency with openib btl";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 15 15:28:17 2013" -->
<!-- isoreceived="20130215202817" -->
<!-- sent="Fri, 15 Feb 2013 15:28:15 -0500" -->
<!-- isosent="20130215202815" -->
<!-- name="Maxime Boissonneault" -->
<!-- email="maxime.boissonneault_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Very high latency with openib btl" -->
<!-- id="511E9A5F.4080706_at_calculquebec.ca" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="511E8CAC.70103_at_calculquebec.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Very high latency with openib btl<br>
<strong>From:</strong> Maxime Boissonneault (<em>maxime.boissonneault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-15 15:28:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21416.php">Erik Nelson: "Re: [OMPI users] qsub error"</a>
<li><strong>Previous message:</strong> <a href="21414.php">Ralph Castain: "Re: [OMPI users] Core ids not coming properly"</a>
<li><strong>In reply to:</strong> <a href="21412.php">Maxime Boissonneault: "Re: [OMPI users] Very high latency with openib btl"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi again,
<br>
I managed to reproduce the &quot;bug&quot; with a simple case (see the cpp file 
<br>
attached).
<br>
<p>I am running this on 2 nodes with 8 cores each. If I run with
<br>
mpiexec ./test-mpi-latency.out
<br>
<p>then the MPI_Ssend operations take about ~1e-5 second for intra-node 
<br>
ranks, and ~11 seconds for inter-node ranks. Note that 11 seconds is 
<br>
roughly the time required to execute the loop that is after the 
<br>
MPI_Recv. The average time required for the MPI_Ssend to return is 5.1 
<br>
seconds.
<br>
<p>If I run with :
<br>
mpiexec --mca btl ^openib ./test-mpi-latency.out
<br>
<p>then intra-node communications take ~0.5-1e-5 seconds, while internode 
<br>
communications take ~1e-6 seconds, for an average of ~5e-5 seconds.
<br>
<p>I compiled this with gcc 4.7.2 + openmpi 1.6.3, as well as gcc 4.6.1 + 
<br>
openmpi 1.4.5. Both show the same behavior.
<br>
<p>However, on the same machine, with gcc 4.6.1 + mvapich2/1.8, the latency 
<br>
is always quite low.
<br>
<p>The fact that mvapich2 does not show this behavior points out to a 
<br>
problem with the openib btl within openmpi, and not with our setup.
<br>
<p>Can anyone try to reproduce this on a different machine ?
<br>
<p>Thanks,
<br>
<p>Maxime Boissonneault
<br>
<p>Le 2013-02-15 14:29, Maxime Boissonneault a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi again,
</span><br>
<span class="quotelev1">&gt; I found out that if I add an
</span><br>
<span class="quotelev1">&gt; MPI_Barrier after the MPI_Recv part, then there is no minute-long 
</span><br>
<span class="quotelev1">&gt; latency.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it possible that even if MPI_Recv returns, the openib btl does not 
</span><br>
<span class="quotelev1">&gt; guarantee that the acknowledgement is sent promptly ? In other words, 
</span><br>
<span class="quotelev1">&gt; is it possible that the computation following the MPI_Recv delays the 
</span><br>
<span class="quotelev1">&gt; acknowledgement ? If so, is it supposed to be this way, or is it 
</span><br>
<span class="quotelev1">&gt; normal, and why isn't the same behavior observed with the tcp btl ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maxime Boissonneault
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 2013-02-14 11:50, Maxime Boissonneault a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; I have a strange case here. The application is &quot;plink&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; (<a href="http://pngu.mgh.harvard.edu/~purcell/plink/download.shtml">http://pngu.mgh.harvard.edu/~purcell/plink/download.shtml</a>). The 
</span><br>
<span class="quotelev2">&gt;&gt; computation/communication pattern of the application is the following :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1- MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; 2- Some single rank computation
</span><br>
<span class="quotelev2">&gt;&gt; 3- MPI_Bcast
</span><br>
<span class="quotelev2">&gt;&gt; 4- Some single rank computation
</span><br>
<span class="quotelev2">&gt;&gt; 5- MPI_Barrier
</span><br>
<span class="quotelev2">&gt;&gt; 6- rank 0 sends data to each other rank with MPI_Ssend, one rank at a 
</span><br>
<span class="quotelev2">&gt;&gt; time.
</span><br>
<span class="quotelev2">&gt;&gt; 6- other ranks use MPI_Recv
</span><br>
<span class="quotelev2">&gt;&gt; 7- Some single rank computation
</span><br>
<span class="quotelev2">&gt;&gt; 8- other ranks send result to rank 0 with MPI_Ssend
</span><br>
<span class="quotelev2">&gt;&gt; 8- rank 0 receives data with MPI_Recv
</span><br>
<span class="quotelev2">&gt;&gt; 9- rank 0 analyses result
</span><br>
<span class="quotelev2">&gt;&gt; 10- MPI_Finalize
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The amount of data being sent is of the order of the kilobytes, and 
</span><br>
<span class="quotelev2">&gt;&gt; we have IB.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem we observe is in step 6. I've output dates before and 
</span><br>
<span class="quotelev2">&gt;&gt; after each MPI operation. With the openib btl, the behavior I observe 
</span><br>
<span class="quotelev2">&gt;&gt; is that :
</span><br>
<span class="quotelev2">&gt;&gt; - rank 0 starts sending
</span><br>
<span class="quotelev2">&gt;&gt; - rank n receives almost instantly, and MPI_Recv returns.
</span><br>
<span class="quotelev2">&gt;&gt; - rank 0's MPI_Ssend often returns _minutes_.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like the acknowledgement from rank n takes minutes to reach 
</span><br>
<span class="quotelev2">&gt;&gt; rank 0.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now, the tricky part is that if I disable the openib btl to use 
</span><br>
<span class="quotelev2">&gt;&gt; instead tcp over IB, there is no such latency and the acknowledgement 
</span><br>
<span class="quotelev2">&gt;&gt; comes back within a fraction of a second. Also, if rank 0 and rank n 
</span><br>
<span class="quotelev2">&gt;&gt; are on the same node, the acknowledgement is also quasi-instantaneous 
</span><br>
<span class="quotelev2">&gt;&gt; (I guess it goes through the SM btl instead of openib).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried to reproduce this in a simple case, but I observed no such 
</span><br>
<span class="quotelev2">&gt;&gt; latency. The duration that I got for the whole communication is of 
</span><br>
<span class="quotelev2">&gt;&gt; the order of milliseconds.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does anyone have an idea of what could cause such very high latencies 
</span><br>
<span class="quotelev2">&gt;&gt; when using the OpenIB BTL ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, I tried replacing step 6 by explicitly sending a confirmation :
</span><br>
<span class="quotelev2">&gt;&gt; - rank 0 does MPI_Isend to rank n followed by MPI_Recv from rank n
</span><br>
<span class="quotelev2">&gt;&gt; - rank n does MPI_Recv from rank 0 followed by MPI_Isend to rank 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In this case also, rank n's MPI_Isend executes quasi-instantaneously, 
</span><br>
<span class="quotelev2">&gt;&gt; and rank 0's MPI_Recv only returns a few minutes later.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Maxime Boissonneault
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
---------------------------------
Maxime Boissonneault
Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
Ph. D. en physique

</pre>
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21415/test-mpi-latency.cpp">test-mpi-latency.cpp</a>
</ul>
<!-- attachment="test-mpi-latency.cpp" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21416.php">Erik Nelson: "Re: [OMPI users] qsub error"</a>
<li><strong>Previous message:</strong> <a href="21414.php">Ralph Castain: "Re: [OMPI users] Core ids not coming properly"</a>
<li><strong>In reply to:</strong> <a href="21412.php">Maxime Boissonneault: "Re: [OMPI users] Very high latency with openib btl"</a>
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
