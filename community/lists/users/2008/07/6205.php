<?
$subject_val = "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 07:15:09 2008" -->
<!-- isoreceived="20080730111509" -->
<!-- sent="Wed, 30 Jul 2008 07:15:04 -0400" -->
<!-- isosent="20080730111504" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Communitcation between OpenMPI and ClusterTools" -->
<!-- id="48904D38.5070003_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="488F6E20.3010708_at_sun.com" -->
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
<strong>Date:</strong> 2008-07-30 07:15:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6206.php">Andy Georgi: "Re: [OMPI users] TCP Latency"</a>
<li><strong>Previous message:</strong> <a href="6204.php">James Philbin: "[OMPI users] Segmentation fault: Address not mapped"</a>
<li><strong>In reply to:</strong> <a href="6200.php">Terry Dontje: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6214.php">Alexander Shabarshin: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<li><strong>Reply:</strong> <a href="6214.php">Alexander Shabarshin: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
One last note to close this out.  After some discussion on the 
<br>
developers list it was pointed out that this problem was fixed with new 
<br>
code in the trunk and 1.3 branch.   So my statement below of the trunk, 
<br>
1.3 and CT8 EA2 supporting nodes on different subnets can be made 
<br>
stronger that we really do expect this to work.
<br>
<p>--td
<br>
Terry Dontje wrote:
<br>
<span class="quotelev1">&gt; Terry Dontje wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Tue, 29 Jul 2008 14:19:14 -0400
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: &quot;Alexander Shabarshin&quot; &lt;ashabarshin_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] Communitcation between OpenMPI and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     ClusterTools
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message-ID: &lt;00b701c8f1a7$9c24f7c0$c8afcea7_at_Shabarshin&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Content-Type: text/plain; format=flowed; charset=&quot;iso-8859-1&quot;;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     reply-type=response
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt; One idea comes to mind is whether the two nodes are on the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; same &gt;&gt;&gt; &gt; subnet? If they are not on the same subnet I think 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; there is a bug in &gt;&gt;&gt; &gt; which the TCP BTL will recuse itself 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; from communications between the &gt;&gt;&gt; &gt; two nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt;&gt; you are right - subnets are different, but routes set up 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; correctly and &gt;&gt; everything like ping, ssh etc. are working OK 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; between them
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; But it isn't a routing problem but how the tcp btl in Open MPI 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; decides &gt; which interface the nodes can communicate with 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (completely out of the &gt; hands of the TCP stack and lower).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you know when it can be fixed in official OpenMPI?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is patch available or something?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Well this problem is captured in ticket 972 
</span><br>
<span class="quotelev2">&gt;&gt; (<a href="https://svn.open-mpi.org/trac/ompi/ticket/972">https://svn.open-mpi.org/trac/ompi/ticket/972</a>).  There is a question 
</span><br>
<span class="quotelev2">&gt;&gt; as to whether this ticket has been fixed or not (that is was code 
</span><br>
<span class="quotelev2">&gt;&gt; actually putback).  Sun's experience with the Trunk, 1.3 branch and 
</span><br>
<span class="quotelev2">&gt;&gt; CT8 EA2 release seems to be that you now can run jobs across subnets 
</span><br>
<span class="quotelev2">&gt;&gt; but we (Sun) are not completely
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; I guess I should have ended with &quot;mumble..mumble&quot; :-)
</span><br>
<span class="quotelev1">&gt; Now for the rest of the sentence:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ... sure whether the support is truly in there or we just got lucky in 
</span><br>
<span class="quotelev1">&gt; how our setup was configured.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt; FWIW, it looks like that code has had a lot of changes in it between 
</span><br>
<span class="quotelev2">&gt;&gt; 1.2 and 1.3.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6206.php">Andy Georgi: "Re: [OMPI users] TCP Latency"</a>
<li><strong>Previous message:</strong> <a href="6204.php">James Philbin: "[OMPI users] Segmentation fault: Address not mapped"</a>
<li><strong>In reply to:</strong> <a href="6200.php">Terry Dontje: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6214.php">Alexander Shabarshin: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<li><strong>Reply:</strong> <a href="6214.php">Alexander Shabarshin: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
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
