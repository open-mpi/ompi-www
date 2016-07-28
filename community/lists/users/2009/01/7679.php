<?
$subject_val = "Re: [OMPI users] Problem with openmpi and infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 12 12:48:47 2009" -->
<!-- isoreceived="20090112174847" -->
<!-- sent="Mon, 12 Jan 2009 12:48:41 -0500" -->
<!-- isosent="20090112174841" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with openmpi and infiniband" -->
<!-- id="64E87DCD-C3DF-403C-97DD-358C132EAFD2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49653AB4.9070806_at_swansea.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with openmpi and infiniband<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-12 12:48:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7680.php">Jeff Squyres: "Re: [OMPI users] slow MPI_BCast for messages size from 24K bytes to 800K bytes."</a>
<li><strong>Previous message:</strong> <a href="7678.php">Justin: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>In reply to:</strong> <a href="7662.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7713.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Reply:</strong> <a href="7713.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 7, 2009, at 6:28 PM, Biagio Lucini wrote:
<br>
<p><span class="quotelev1">&gt; [[5963,1],13][btl_openib_component.c:2893:handle_wc] from node24 to:  
</span><br>
<span class="quotelev1">&gt; node11 error polling LP CQ with status RECEIVER NOT READY RETRY  
</span><br>
<span class="quotelev1">&gt; EXCEEDED ERROR status number 13 for wr_id 37779456 opcode 0 qp_idx 0
</span><br>
<p>Ah!  If we're dealing a RNR retry exceeded, this is *usually* a  
<br>
physical layer problem on the IB fabric.
<br>
<p>Have you run a complete layer 0 / physical set of diagnostics on the  
<br>
fabric to know that it is completely working properly?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7680.php">Jeff Squyres: "Re: [OMPI users] slow MPI_BCast for messages size from 24K bytes to 800K bytes."</a>
<li><strong>Previous message:</strong> <a href="7678.php">Justin: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>In reply to:</strong> <a href="7662.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7713.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Reply:</strong> <a href="7713.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
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
