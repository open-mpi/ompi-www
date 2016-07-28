<?
$subject_val = "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 14:19:09 2008" -->
<!-- isoreceived="20080729181909" -->
<!-- sent="Tue, 29 Jul 2008 14:19:14 -0400" -->
<!-- isosent="20080729181914" -->
<!-- name="Alexander Shabarshin" -->
<!-- email="ashabarshin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Communitcation between OpenMPI and ClusterTools" -->
<!-- id="00b701c8f1a7$9c24f7c0$c8afcea7_at_Shabarshin" -->
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
<strong>Date:</strong> 2008-07-29 14:19:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6198.php">Adam C Powell IV: "Re: [OMPI users] MPI_Init segfault on Ubuntu 8.04 version 1.2.7~rc2"</a>
<li><strong>Previous message:</strong> <a href="6196.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="6190.php">Terry Dontje: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6199.php">Terry Dontje: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p><span class="quotelev4">&gt;&gt;&gt; &gt; One idea comes to mind is whether the two nodes are on the same 
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; subnet? If they are not on the same subnet I think there is a bug in 
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; which the TCP BTL will recuse itself from communications between the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; two nodes.
</span><br>
<p><span class="quotelev2">&gt;&gt; you are right - subnets are different, but routes set up correctly and 
</span><br>
<span class="quotelev2">&gt;&gt; everything like ping, ssh etc. are working OK between them
</span><br>
<p><span class="quotelev1">&gt; But it isn't a routing problem but how the tcp btl in Open MPI decides 
</span><br>
<span class="quotelev1">&gt; which interface the nodes can communicate with (completely out of the 
</span><br>
<span class="quotelev1">&gt; hands of the TCP stack and lower).
</span><br>
<p>Do you know when it can be fixed in official OpenMPI?
<br>
Is patch available or something?
<br>
Thanks!
<br>
<p>Alexander Shabarshin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6198.php">Adam C Powell IV: "Re: [OMPI users] MPI_Init segfault on Ubuntu 8.04 version 1.2.7~rc2"</a>
<li><strong>Previous message:</strong> <a href="6196.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="6190.php">Terry Dontje: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6199.php">Terry Dontje: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
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
