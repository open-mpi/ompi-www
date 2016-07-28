<?
$subject_val = "Re: [OMPI users] MX questions";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 25 17:34:55 2009" -->
<!-- isoreceived="20090625213455" -->
<!-- sent="Thu, 25 Jun 2009 17:34:45 -0400" -->
<!-- isosent="20090625213445" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MX questions" -->
<!-- id="38DCDEBA-86EF-4758-8F93-D6C3D63E92AC_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8AD68202-1EA2-4CD8-AACF-81D396E5B1B9_at_myri.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MX questions<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-25 17:34:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9725.php">Gus Correa: "Re: [OMPI users] Infiniband requirements"</a>
<li><strong>Previous message:</strong> <a href="9723.php">Mostyn Lewis: "Re: [OMPI users] Did you break MPI_Abort recently?"</a>
<li><strong>In reply to:</strong> <a href="9717.php">Scott Atchley: "Re: [OMPI users] MX questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9730.php">Dave Love: "Re: [OMPI users] MX questions"</a>
<li><strong>Reply:</strong> <a href="9730.php">Dave Love: "Re: [OMPI users] MX questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 25, 2009, at 13:17 , Scott Atchley wrote:
<br>
<p><span class="quotelev1">&gt; On Jun 25, 2009, at 1:02 PM, Dave Love wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, Brice Goglin, the Open-MX author had a couple of questions
</span><br>
<span class="quotelev2">&gt;&gt; concerning multi-rail MX while I'm on:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. Does the MX MTL work with multi-rail?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe the answer is yes as long as all NICs are in the same  
</span><br>
<span class="quotelev1">&gt; fabric (they usually are).
</span><br>
<p>If the multi-rail is enabled in the MX library then the MTL will use  
<br>
it. Same for the BTL.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. &quot;You may also want to ask why the MX BTL seems to be opening and
</span><br>
<span class="quotelev2">&gt;&gt;  closing an additional endpoint during initialization. It seems to
</span><br>
<span class="quotelev2">&gt;&gt;  make endpoint numbers a bit unpredictable here (causing my jobs to
</span><br>
<span class="quotelev2">&gt;&gt;  use the wrong rail&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for any info.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Without knowing the code and/or looking, I believe OMPI opens an  
</span><br>
<span class="quotelev1">&gt; endpoint to get some mapping info (to see if the NIC is in the same  
</span><br>
<span class="quotelev1">&gt; fabric).
</span><br>
<p>It is not the BTL who open the second endpoint, it is the MTL. It's a  
<br>
very long story, but unfortunately right now the two components (MTL  
<br>
and BTL) each open an endpoint. Once the upper level complete the  
<br>
selection of the component for the run, one of the endpoints will be  
<br>
closed.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scott
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9725.php">Gus Correa: "Re: [OMPI users] Infiniband requirements"</a>
<li><strong>Previous message:</strong> <a href="9723.php">Mostyn Lewis: "Re: [OMPI users] Did you break MPI_Abort recently?"</a>
<li><strong>In reply to:</strong> <a href="9717.php">Scott Atchley: "Re: [OMPI users] MX questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9730.php">Dave Love: "Re: [OMPI users] MX questions"</a>
<li><strong>Reply:</strong> <a href="9730.php">Dave Love: "Re: [OMPI users] MX questions"</a>
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
