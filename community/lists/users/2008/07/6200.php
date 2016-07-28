<?
$subject_val = "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 15:23:27 2008" -->
<!-- isoreceived="20080729192327" -->
<!-- sent="Tue, 29 Jul 2008 15:23:12 -0400" -->
<!-- isosent="20080729192312" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Communitcation between OpenMPI and ClusterTools" -->
<!-- id="488F6E20.3010708_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="488F6BF2.6080205_at_sun.com" -->
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
<strong>Date:</strong> 2008-07-29 15:23:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6201.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="6199.php">Terry Dontje: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<li><strong>In reply to:</strong> <a href="6199.php">Terry Dontje: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6205.php">Terry Dontje: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<li><strong>Reply:</strong> <a href="6205.php">Terry Dontje: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Terry Dontje wrote:
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Tue, 29 Jul 2008 14:19:14 -0400
</span><br>
<span class="quotelev2">&gt;&gt; From: &quot;Alexander Shabarshin&quot; &lt;ashabarshin_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Communitcation between OpenMPI and
</span><br>
<span class="quotelev2">&gt;&gt;     ClusterTools
</span><br>
<span class="quotelev2">&gt;&gt; To: &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;00b701c8f1a7$9c24f7c0$c8afcea7_at_Shabarshin&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; format=flowed; charset=&quot;iso-8859-1&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;     reply-type=response
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt; One idea comes to mind is whether the two nodes are on the 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; same &gt;&gt;&gt; &gt; subnet? If they are not on the same subnet I think 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; there is a bug in &gt;&gt;&gt; &gt; which the TCP BTL will recuse itself from 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; communications between the &gt;&gt;&gt; &gt; two nodes.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; you are right - subnets are different, but routes set up 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; correctly and &gt;&gt; everything like ping, ssh etc. are working OK 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; between them
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; But it isn't a routing problem but how the tcp btl in Open MPI 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; decides &gt; which interface the nodes can communicate with (completely 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; out of the &gt; hands of the TCP stack and lower).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do you know when it can be fixed in official OpenMPI?
</span><br>
<span class="quotelev2">&gt;&gt; Is patch available or something?
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev1">&gt; Well this problem is captured in ticket 972 
</span><br>
<span class="quotelev1">&gt; (<a href="https://svn.open-mpi.org/trac/ompi/ticket/972">https://svn.open-mpi.org/trac/ompi/ticket/972</a>).  There is a question 
</span><br>
<span class="quotelev1">&gt; as to whether this ticket has been fixed or not (that is was code 
</span><br>
<span class="quotelev1">&gt; actually putback).  Sun's experience with the Trunk, 1.3 branch and 
</span><br>
<span class="quotelev1">&gt; CT8 EA2 release seems to be that you now can run jobs across subnets 
</span><br>
<span class="quotelev1">&gt; but we (Sun) are not completely
</span><br>
<span class="quotelev1">&gt;
</span><br>
I guess I should have ended with &quot;mumble..mumble&quot; :-)
<br>
Now for the rest of the sentence:
<br>
<p>... sure whether the support is truly in there or we just got lucky in 
<br>
how our setup was configured.
<br>
<p>--td
<br>
<span class="quotelev1">&gt; FWIW, it looks like that code has had a lot of changes in it between 
</span><br>
<span class="quotelev1">&gt; 1.2 and 1.3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6201.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="6199.php">Terry Dontje: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<li><strong>In reply to:</strong> <a href="6199.php">Terry Dontje: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6205.php">Terry Dontje: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<li><strong>Reply:</strong> <a href="6205.php">Terry Dontje: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
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
