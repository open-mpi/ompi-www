<?
$subject_val = "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 15:13:59 2008" -->
<!-- isoreceived="20080729191359" -->
<!-- sent="Tue, 29 Jul 2008 15:13:54 -0400" -->
<!-- isosent="20080729191354" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Communitcation between OpenMPI and ClusterTools" -->
<!-- id="488F6BF2.6080205_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] Communitcation between OpenMPI and ClusterTools" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-29 15:13:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6200.php">Terry Dontje: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<li><strong>Previous message:</strong> <a href="6198.php">Adam C Powell IV: "Re: [OMPI users] MPI_Init segfault on Ubuntu 8.04 version 1.2.7~rc2"</a>
<li><strong>Maybe in reply to:</strong> <a href="6169.php">Alexander Shabarshin: "[OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6200.php">Terry Dontje: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<li><strong>Reply:</strong> <a href="6200.php">Terry Dontje: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Date: Tue, 29 Jul 2008 14:19:14 -0400
</span><br>
<span class="quotelev1">&gt; From: &quot;Alexander Shabarshin&quot; &lt;ashabarshin_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Communitcation between OpenMPI and
</span><br>
<span class="quotelev1">&gt; 	ClusterTools
</span><br>
<span class="quotelev1">&gt; To: &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;00b701c8f1a7$9c24f7c0$c8afcea7_at_Shabarshin&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; format=flowed; charset=&quot;iso-8859-1&quot;;
</span><br>
<span class="quotelev1">&gt; 	reply-type=response
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt; One idea comes to mind is whether the two nodes are on the same 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt; subnet? If they are not on the same subnet I think there is a bug in 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt; which the TCP BTL will recuse itself from communications between the 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt; two nodes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; you are right - subnets are different, but routes set up correctly and 
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; everything like ping, ssh etc. are working OK between them
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev3">&gt;&gt; &gt; But it isn't a routing problem but how the tcp btl in Open MPI decides 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; which interface the nodes can communicate with (completely out of the 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; hands of the TCP stack and lower).
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you know when it can be fixed in official OpenMPI?
</span><br>
<span class="quotelev1">&gt; Is patch available or something?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Well this problem is captured in ticket 972 
<br>
(<a href="https://svn.open-mpi.org/trac/ompi/ticket/972">https://svn.open-mpi.org/trac/ompi/ticket/972</a>).  There is a question as 
<br>
to whether this ticket has been fixed or not (that is was code actually 
<br>
putback).  Sun's experience with the Trunk, 1.3 branch and CT8 EA2 
<br>
release seems to be that you now can run jobs across subnets but we 
<br>
(Sun) are not completely
<br>
<p>FWIW, it looks like that code has had a lot of changes in it between 1.2 
<br>
and 1.3.
<br>
<p>--td
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6200.php">Terry Dontje: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<li><strong>Previous message:</strong> <a href="6198.php">Adam C Powell IV: "Re: [OMPI users] MPI_Init segfault on Ubuntu 8.04 version 1.2.7~rc2"</a>
<li><strong>Maybe in reply to:</strong> <a href="6169.php">Alexander Shabarshin: "[OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6200.php">Terry Dontje: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<li><strong>Reply:</strong> <a href="6200.php">Terry Dontje: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
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
