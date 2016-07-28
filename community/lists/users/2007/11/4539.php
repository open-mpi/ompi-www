<?
$subject_val = "Re: [OMPI users] [openMPI-infiniband] openMPI in IB network when openSM with LASH is running";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 28 11:29:13 2007" -->
<!-- isoreceived="20071128162913" -->
<!-- sent="Wed, 28 Nov 2007 11:28:04 -0500" -->
<!-- isosent="20071128162804" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [openMPI-infiniband] openMPI in IB network when openSM with LASH is running" -->
<!-- id="F1BEA757-917A-4B3E-A92E-E4F0B7800D77_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="829ded920711280237n6bc78128rd90e1f81ac7dbc91_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [openMPI-infiniband] openMPI in IB network when openSM with LASH is running<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-28 11:28:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4540.php">Jeff Squyres: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Previous message:</strong> <a href="4538.php">Jeff Squyres: "Re: [OMPI users] Newbie: Using hostfile"</a>
<li><strong>In reply to:</strong> <a href="4534.php">Keshetti Mahesh: "[OMPI users] [openMPI-infiniband] openMPI in IB network when openSM with LASH is running"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4553.php">Keshetti Mahesh: "Re: [OMPI users] [openMPI-infiniband] openMPI in IB network when openSM with LASH is running"</a>
<li><strong>Reply:</strong> <a href="4553.php">Keshetti Mahesh: "Re: [OMPI users] [openMPI-infiniband] openMPI in IB network when openSM with LASH is running"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is work starting literally right about now to allow Open MPI to  
<br>
use the RDMA CM and/or the IBCM for creating OpenFabrics connections  
<br>
(IB or iWARP).
<br>
<p><p>On Nov 28, 2007, at 4:37 AM, Keshetti Mahesh wrote:
<br>
<p><span class="quotelev1">&gt; Has anyone in the list ever tested openMPI in infiniband network
</span><br>
<span class="quotelev1">&gt; in which openSM is running with LASH routing algorithm enabled?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I haven't tested the above case but i could foresee a problem
</span><br>
<span class="quotelev1">&gt; because LASH routing algorithm in openSM uses virtual
</span><br>
<span class="quotelev1">&gt; lanes (VL) which are directly mapped with service levels (SL).
</span><br>
<span class="quotelev1">&gt; And LASH routing algorithm assigns different VLs (SLs) to different
</span><br>
<span class="quotelev1">&gt; paths in the network. This SL &lt;-&gt; path association is available only
</span><br>
<span class="quotelev1">&gt; through the subnet manager (openSM) during connection establishment.
</span><br>
<span class="quotelev1">&gt; But AFAIK, openMPI don't use the services of subnet manager for
</span><br>
<span class="quotelev1">&gt; connection establishment between nodes. So I want to know whether  
</span><br>
<span class="quotelev1">&gt; anyone
</span><br>
<span class="quotelev1">&gt; thought about it and working on it or not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; regards,
</span><br>
<span class="quotelev1">&gt; Mahesh
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4540.php">Jeff Squyres: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Previous message:</strong> <a href="4538.php">Jeff Squyres: "Re: [OMPI users] Newbie: Using hostfile"</a>
<li><strong>In reply to:</strong> <a href="4534.php">Keshetti Mahesh: "[OMPI users] [openMPI-infiniband] openMPI in IB network when openSM with LASH is running"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4553.php">Keshetti Mahesh: "Re: [OMPI users] [openMPI-infiniband] openMPI in IB network when openSM with LASH is running"</a>
<li><strong>Reply:</strong> <a href="4553.php">Keshetti Mahesh: "Re: [OMPI users] [openMPI-infiniband] openMPI in IB network when openSM with LASH is running"</a>
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
