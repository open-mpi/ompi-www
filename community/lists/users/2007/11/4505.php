<?
$subject_val = "Re: [OMPI users] OpenIB problems";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 21 15:31:23 2007" -->
<!-- isoreceived="20071121203123" -->
<!-- sent="Wed, 21 Nov 2007 15:23:29 -0500" -->
<!-- isosent="20071121202329" -->
<!-- name="Brian Dobbins" -->
<!-- email="brian.dobbins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenIB problems" -->
<!-- id="474493C1.2070709_at_yale.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FC2C3DF1-A4BE-498A-B7E7-3A206B64F18C_at_umich.edu" -->
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
<strong>From:</strong> Brian Dobbins (<em>brian.dobbins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-21 15:23:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4506.php">Andrew Friedley: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Previous message:</strong> <a href="4504.php">Mark Dobossy: "Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler 10.1.006 on Leopard"</a>
<li><strong>In reply to:</strong> <a href="4503.php">Brock Palen: "[OMPI users] OpenIB problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4506.php">Andrew Friedley: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Reply:</strong> <a href="4506.php">Andrew Friedley: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Reply:</strong> <a href="4507.php">Brock Palen: "Re: [OMPI users] OpenIB problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brock
<br>
<span class="quotelev1">&gt; We have a user whos code keep failing at a similar point in the  
</span><br>
<span class="quotelev1">&gt; code.  The errors (below) would make me think its a fabric problem,  
</span><br>
<span class="quotelev1">&gt; but ibcheckerrors is not returning any issues.  He is using  
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.0  With OFED on RHEL4,
</span><br>
<span class="quotelev1">&gt;   
</span><br>
&nbsp;&nbsp;Strangely enough, I hit this exact problem about half an hour ago... 
<br>
what compilers is he using for the code / OpenMPI?  I haven't narrowed 
<br>
down the cause yet because the system I'm on is a tad, uh, disheveled, 
<br>
but it'd be good to find any commonality.  I'm using PGI-7.1-2 
<br>
(pgf77/pgf90) with OpenMPI-1.2.4.  The system also happens to be RHEL 4 
<br>
(Update 3).
<br>
<p>&nbsp;&nbsp;.. Also, the code I'm running is CCSM, and it gave an error message 
<br>
about being unable to read a file correctly right before my 
<br>
synchronization.  This code has worked on other systems in the past 
<br>
(non-IB, non-IBRIX), but something as basic as a file write shouldn't be 
<br>
adversely affected by such things, hence I'm going to try backing the 
<br>
compiler down to a 'known-good' one first., since perhaps that's my 
<br>
problem.  I don't suppose you saw any messages of that sort?   I did 
<br>
already try setting the retry count parameter up to 20 (from 7), but 
<br>
that didn't fix it.
<br>
<p>&nbsp;&nbsp;Cheers,
<br>
&nbsp;&nbsp;- Brian
<br>
<p><p>Brian Dobbins
<br>
Yale University HPC
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4506.php">Andrew Friedley: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Previous message:</strong> <a href="4504.php">Mark Dobossy: "Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler 10.1.006 on Leopard"</a>
<li><strong>In reply to:</strong> <a href="4503.php">Brock Palen: "[OMPI users] OpenIB problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4506.php">Andrew Friedley: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Reply:</strong> <a href="4506.php">Andrew Friedley: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Reply:</strong> <a href="4507.php">Brock Palen: "Re: [OMPI users] OpenIB problems"</a>
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
