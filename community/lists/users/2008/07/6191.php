<?
$subject_val = "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 13:09:11 2008" -->
<!-- isoreceived="20080729170911" -->
<!-- sent="Tue, 29 Jul 2008 13:09:13 -0400" -->
<!-- isosent="20080729170913" -->
<!-- name="Alexander Shabarshin" -->
<!-- email="ashabarshin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Communitcation between OpenMPI and ClusterTools" -->
<!-- id="003e01c8f19d$d4417c00$c8afcea7_at_Shabarshin" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="488F40CB.4050506_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Communitcation between OpenMPI and ClusterTools<br>
<strong>From:</strong> Alexander Shabarshin (<em>ashabarshin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-29 13:09:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6192.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="6190.php">Terry Dontje: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<li><strong>In reply to:</strong> <a href="6190.php">Terry Dontje: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6193.php">Alexander Shabarshin: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<li><strong>Reply:</strong> <a href="6193.php">Alexander Shabarshin: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p><span class="quotelev2">&gt;&gt; Yes, you are right - subnets are different, but routes set up correctly 
</span><br>
<span class="quotelev2">&gt;&gt; and everything like ping, ssh etc. are working OK between them
</span><br>
<span class="quotelev1">&gt; But it isn't a routing problem but how the tcp btl in Open MPI decides 
</span><br>
<span class="quotelev1">&gt; which interface the nodes can communicate with (completely out of the 
</span><br>
<span class="quotelev1">&gt; hands of the TCP stack and lower).
</span><br>
<p>Ok, I see.
<br>
<p><span class="quotelev2">&gt;&gt; Alexander Shabarshin P.S. Between Linuxes I even tried different versions 
</span><br>
<span class="quotelev2">&gt;&gt; of OpenMPI 1.2.4 and 1.2.5 - these versions work together correctly, but 
</span><br>
<span class="quotelev2">&gt;&gt; not with ClusterTools...
</span><br>
<span class="quotelev1">&gt; Are the linuxes boxes on the same subnet?
</span><br>
<p>It's correct. The same subnet...
<br>
<p>So now we will try to put Linux machine and SunFires to the same subnet and 
<br>
test again
<br>
<p>Alexander Shabarshin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6192.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="6190.php">Terry Dontje: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<li><strong>In reply to:</strong> <a href="6190.php">Terry Dontje: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6193.php">Alexander Shabarshin: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<li><strong>Reply:</strong> <a href="6193.php">Alexander Shabarshin: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
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
