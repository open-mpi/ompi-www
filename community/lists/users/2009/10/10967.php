<?
$subject_val = "Re: [OMPI users] compiling openmpi with mixed CISCO infiniband. cardand Mellanox infiniband cards.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 26 15:27:09 2009" -->
<!-- isoreceived="20091026192709" -->
<!-- sent="Mon, 26 Oct 2009 15:27:05 -0400" -->
<!-- isosent="20091026192705" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compiling openmpi with mixed CISCO infiniband. cardand Mellanox infiniband cards." -->
<!-- id="F97D2A3F-92BF-45B5-96F6-61B1F0278342_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="c2994f0f0910161055m5f61764fhfc7d31f0ad525d00_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] compiling openmpi with mixed CISCO infiniband. cardand Mellanox infiniband cards.<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-26 15:27:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10968.php">Jeff Squyres: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>Previous message:</strong> <a href="10966.php">Brock Palen: "[OMPI users] memchecker overhead?"</a>
<li><strong>In reply to:</strong> <a href="10920.php">nam kim: "[OMPI users] compiling openmpi with mixed CISCO infiniband. card and Mellanox infiniband cards."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10983.php">nam kim: "Re: [OMPI users] compiling openmpi with mixed CISCO infiniband. cardand Mellanox infiniband cards."</a>
<li><strong>Reply:</strong> <a href="10983.php">nam kim: "Re: [OMPI users] compiling openmpi with mixed CISCO infiniband. cardand Mellanox infiniband cards."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 16, 2009, at 1:55 PM, nam kim wrote:
<br>
<p><span class="quotelev1">&gt; Our school has a cluster running over CISCO based Infiniband cards  
</span><br>
<span class="quotelev1">&gt; and switch.
</span><br>
<span class="quotelev1">&gt; Recently, we purchased more computing nods with Mellanox card since
</span><br>
<span class="quotelev1">&gt; CISCO stops making IB card anymore.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Sorry for the delay in replying; my INBOX has grown totally out of  
<br>
hand recently.  :-(
<br>
<p>FWIW, Cisco never made IB HCAs; we simply resold Mellanox HCAs.
<br>
<p><span class="quotelev1">&gt; Currently, I use openmpi 1.2.8 compiled with CISCO IB card (SFS- 
</span><br>
<span class="quotelev1">&gt; HCA-320-A1) with topspin driver. My questions are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Is it possible to compile 1.3 version with mixed cisco IB and  
</span><br>
<span class="quotelev1">&gt; mellanox IB (MHRH19-XTC) with open infiniband libries?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Do you mean: is it possible to use Open MPI 1.3.x with a recent OFED  
<br>
distribution across multiple nodes, some of which include Cisco- 
<br>
branded HCAs and some of which include Mellanox HCAs?
<br>
<p>The answer is: most likely, yes.  Open MPI doesn't fully support  
<br>
&quot;heterogeneous&quot; HCAs (e.g., HCAs that would require different MTUs).   
<br>
But I suspect that your HCAs are all &quot;close enough&quot; that it won't  
<br>
matter.  FWIW, on my 64-node MPI testing cluster at Cisco, I do  
<br>
similar things -- I have various Cisco and Mellanox HCAs of different  
<br>
generations and specific capabilities, and Open MPI runs fine.
<br>
<p><span class="quotelev1">&gt; 2. Is is possible to compile 1.2.8 with mixed cisco IB and mellanox  
</span><br>
<span class="quotelev1">&gt; IB, then how?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>If you can, I'd highly suggest upgrading to the Open MPI v1.3 series.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10968.php">Jeff Squyres: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>Previous message:</strong> <a href="10966.php">Brock Palen: "[OMPI users] memchecker overhead?"</a>
<li><strong>In reply to:</strong> <a href="10920.php">nam kim: "[OMPI users] compiling openmpi with mixed CISCO infiniband. card and Mellanox infiniband cards."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10983.php">nam kim: "Re: [OMPI users] compiling openmpi with mixed CISCO infiniband. cardand Mellanox infiniband cards."</a>
<li><strong>Reply:</strong> <a href="10983.php">nam kim: "Re: [OMPI users] compiling openmpi with mixed CISCO infiniband. cardand Mellanox infiniband cards."</a>
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
