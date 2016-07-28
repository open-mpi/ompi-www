<?
$subject_val = "Re: [OMPI users] Very high latency with openib btl";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 15 14:29:51 2013" -->
<!-- isoreceived="20130215192951" -->
<!-- sent="Fri, 15 Feb 2013 14:29:48 -0500" -->
<!-- isosent="20130215192948" -->
<!-- name="Maxime Boissonneault" -->
<!-- email="maxime.boissonneault_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Very high latency with openib btl" -->
<!-- id="511E8CAC.70103_at_calculquebec.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="511D15D7.5070807_at_calculquebec.ca" -->
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
<strong>Date:</strong> 2013-02-15 14:29:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21413.php">Kranthi Kumar: "Re: [OMPI users] Core ids not coming properly"</a>
<li><strong>Previous message:</strong> <a href="21411.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Core ids not coming properly"</a>
<li><strong>In reply to:</strong> <a href="21398.php">Maxime Boissonneault: "[OMPI users] Very high latency with openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21415.php">Maxime Boissonneault: "Re: [OMPI users] Very high latency with openib btl"</a>
<li><strong>Reply:</strong> <a href="21415.php">Maxime Boissonneault: "Re: [OMPI users] Very high latency with openib btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi again,
<br>
I found out that if I add an
<br>
MPI_Barrier after the MPI_Recv part, then there is no minute-long latency.
<br>
<p>Is it possible that even if MPI_Recv returns, the openib btl does not 
<br>
guarantee that the acknowledgement is sent promptly ? In other words, is 
<br>
it possible that the computation following the MPI_Recv delays the 
<br>
acknowledgement ? If so, is it supposed to be this way, or is it normal, 
<br>
and why isn't the same behavior observed with the tcp btl ?
<br>
<p>Maxime Boissonneault
<br>
<p><p>Le 2013-02-14 11:50, Maxime Boissonneault a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I have a strange case here. The application is &quot;plink&quot; 
</span><br>
<span class="quotelev1">&gt; (<a href="http://pngu.mgh.harvard.edu/~purcell/plink/download.shtml">http://pngu.mgh.harvard.edu/~purcell/plink/download.shtml</a>). The 
</span><br>
<span class="quotelev1">&gt; computation/communication pattern of the application is the following :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1- MPI_Init
</span><br>
<span class="quotelev1">&gt; 2- Some single rank computation
</span><br>
<span class="quotelev1">&gt; 3- MPI_Bcast
</span><br>
<span class="quotelev1">&gt; 4- Some single rank computation
</span><br>
<span class="quotelev1">&gt; 5- MPI_Barrier
</span><br>
<span class="quotelev1">&gt; 6- rank 0 sends data to each other rank with MPI_Ssend, one rank at a 
</span><br>
<span class="quotelev1">&gt; time.
</span><br>
<span class="quotelev1">&gt; 6- other ranks use MPI_Recv
</span><br>
<span class="quotelev1">&gt; 7- Some single rank computation
</span><br>
<span class="quotelev1">&gt; 8- other ranks send result to rank 0 with MPI_Ssend
</span><br>
<span class="quotelev1">&gt; 8- rank 0 receives data with MPI_Recv
</span><br>
<span class="quotelev1">&gt; 9- rank 0 analyses result
</span><br>
<span class="quotelev1">&gt; 10- MPI_Finalize
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The amount of data being sent is of the order of the kilobytes, and we 
</span><br>
<span class="quotelev1">&gt; have IB.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem we observe is in step 6. I've output dates before and 
</span><br>
<span class="quotelev1">&gt; after each MPI operation. With the openib btl, the behavior I observe 
</span><br>
<span class="quotelev1">&gt; is that :
</span><br>
<span class="quotelev1">&gt; - rank 0 starts sending
</span><br>
<span class="quotelev1">&gt; - rank n receives almost instantly, and MPI_Recv returns.
</span><br>
<span class="quotelev1">&gt; - rank 0's MPI_Ssend often returns _minutes_.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like the acknowledgement from rank n takes minutes to reach 
</span><br>
<span class="quotelev1">&gt; rank 0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, the tricky part is that if I disable the openib btl to use 
</span><br>
<span class="quotelev1">&gt; instead tcp over IB, there is no such latency and the acknowledgement 
</span><br>
<span class="quotelev1">&gt; comes back within a fraction of a second. Also, if rank 0 and rank n 
</span><br>
<span class="quotelev1">&gt; are on the same node, the acknowledgement is also quasi-instantaneous 
</span><br>
<span class="quotelev1">&gt; (I guess it goes through the SM btl instead of openib).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried to reproduce this in a simple case, but I observed no such 
</span><br>
<span class="quotelev1">&gt; latency. The duration that I got for the whole communication is of the 
</span><br>
<span class="quotelev1">&gt; order of milliseconds.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone have an idea of what could cause such very high latencies 
</span><br>
<span class="quotelev1">&gt; when using the OpenIB BTL ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, I tried replacing step 6 by explicitly sending a confirmation :
</span><br>
<span class="quotelev1">&gt; - rank 0 does MPI_Isend to rank n followed by MPI_Recv from rank n
</span><br>
<span class="quotelev1">&gt; - rank n does MPI_Recv from rank 0 followed by MPI_Isend to rank 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In this case also, rank n's MPI_Isend executes quasi-instantaneously, 
</span><br>
<span class="quotelev1">&gt; and rank 0's MPI_Recv only returns a few minutes later.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maxime Boissonneault
</span><br>
<p><p><pre>
-- 
---------------------------------
Maxime Boissonneault
Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
Ph. D. en physique
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21413.php">Kranthi Kumar: "Re: [OMPI users] Core ids not coming properly"</a>
<li><strong>Previous message:</strong> <a href="21411.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Core ids not coming properly"</a>
<li><strong>In reply to:</strong> <a href="21398.php">Maxime Boissonneault: "[OMPI users] Very high latency with openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21415.php">Maxime Boissonneault: "Re: [OMPI users] Very high latency with openib btl"</a>
<li><strong>Reply:</strong> <a href="21415.php">Maxime Boissonneault: "Re: [OMPI users] Very high latency with openib btl"</a>
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
