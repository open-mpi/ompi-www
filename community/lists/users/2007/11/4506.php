<?
$subject_val = "Re: [OMPI users] OpenIB problems";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 21 15:40:00 2007" -->
<!-- isoreceived="20071121204000" -->
<!-- sent="Wed, 21 Nov 2007 12:39:54 -0800" -->
<!-- isosent="20071121203954" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenIB problems" -->
<!-- id="4744979A.6050201_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="474493C1.2070709_at_yale.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenIB problems<br>
<strong>From:</strong> Andrew Friedley (<em>afriedle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-21 15:39:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4507.php">Brock Palen: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Previous message:</strong> <a href="4505.php">Brian Dobbins: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>In reply to:</strong> <a href="4505.php">Brian Dobbins: "Re: [OMPI users] OpenIB problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4508.php">Brock Palen: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Reply:</strong> <a href="4508.php">Brock Palen: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Reply:</strong> <a href="4509.php">Brian Dobbins: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Reply:</strong> <a href="4521.php">Brock Palen: "Re: [OMPI users] OpenIB problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If this is what I think it is, try using this MCA parameter:
<br>
<p>-mca btl_openib_ib_timeout 20
<br>
<p>If this fixes it -- I don't fully understand what's going on, but it's 
<br>
an issue in the IB fabrics itself.  Someone else might be able to 
<br>
explain in more detail..
<br>
<p>Andrew
<br>
<p><p>Brian Dobbins wrote:
<br>
<span class="quotelev1">&gt; Hi Brock
</span><br>
<span class="quotelev2">&gt;&gt; We have a user whos code keep failing at a similar point in the  
</span><br>
<span class="quotelev2">&gt;&gt; code.  The errors (below) would make me think its a fabric problem,  
</span><br>
<span class="quotelev2">&gt;&gt; but ibcheckerrors is not returning any issues.  He is using  
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.2.0  With OFED on RHEL4,
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev1">&gt;   Strangely enough, I hit this exact problem about half an hour ago... 
</span><br>
<span class="quotelev1">&gt; what compilers is he using for the code / OpenMPI?  I haven't narrowed 
</span><br>
<span class="quotelev1">&gt; down the cause yet because the system I'm on is a tad, uh, disheveled, 
</span><br>
<span class="quotelev1">&gt; but it'd be good to find any commonality.  I'm using PGI-7.1-2 
</span><br>
<span class="quotelev1">&gt; (pgf77/pgf90) with OpenMPI-1.2.4.  The system also happens to be RHEL 4 
</span><br>
<span class="quotelev1">&gt; (Update 3).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   .. Also, the code I'm running is CCSM, and it gave an error message 
</span><br>
<span class="quotelev1">&gt; about being unable to read a file correctly right before my 
</span><br>
<span class="quotelev1">&gt; synchronization.  This code has worked on other systems in the past 
</span><br>
<span class="quotelev1">&gt; (non-IB, non-IBRIX), but something as basic as a file write shouldn't be 
</span><br>
<span class="quotelev1">&gt; adversely affected by such things, hence I'm going to try backing the 
</span><br>
<span class="quotelev1">&gt; compiler down to a 'known-good' one first., since perhaps that's my 
</span><br>
<span class="quotelev1">&gt; problem.  I don't suppose you saw any messages of that sort?   I did 
</span><br>
<span class="quotelev1">&gt; already try setting the retry count parameter up to 20 (from 7), but 
</span><br>
<span class="quotelev1">&gt; that didn't fix it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Cheers,
</span><br>
<span class="quotelev1">&gt;   - Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian Dobbins
</span><br>
<span class="quotelev1">&gt; Yale University HPC
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="4507.php">Brock Palen: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Previous message:</strong> <a href="4505.php">Brian Dobbins: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>In reply to:</strong> <a href="4505.php">Brian Dobbins: "Re: [OMPI users] OpenIB problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4508.php">Brock Palen: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Reply:</strong> <a href="4508.php">Brock Palen: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Reply:</strong> <a href="4509.php">Brian Dobbins: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Reply:</strong> <a href="4521.php">Brock Palen: "Re: [OMPI users] OpenIB problems"</a>
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
