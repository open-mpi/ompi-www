<?
$subject_val = "Re: [OMPI users] Cluster with IB hosts and Ethernet hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 23 07:11:31 2009" -->
<!-- isoreceived="20090123121131" -->
<!-- sent="Fri, 23 Jan 2009 07:11:21 -0500" -->
<!-- isosent="20090123121121" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cluster with IB hosts and Ethernet hosts" -->
<!-- id="1019692B-5EAF-4A52-A1C2-918ADAF236E9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="cb60cbc40901222026r5ee0e203u5359f271e6628abb_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Cluster with IB hosts and Ethernet hosts<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-23 07:11:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7785.php">Andrea Iob: "Re: [OMPI users] Error compiling v1.3 with icc 10.1.021: PATH_MAX not defined"</a>
<li><strong>Previous message:</strong> <a href="7783.php">Ashley Pittman: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>In reply to:</strong> <a href="7770.php">Sangamesh B: "[OMPI users] Cluster with IB hosts and Ethernet hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7796.php">Sangamesh B: "Re: [OMPI users] Cluster with IB hosts and Ethernet hosts"</a>
<li><strong>Reply:</strong> <a href="7796.php">Sangamesh B: "Re: [OMPI users] Cluster with IB hosts and Ethernet hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 22, 2009, at 11:26 PM, Sangamesh B wrote:
<br>
<p><span class="quotelev1">&gt;    We''ve a cluster with 23 nodes connected to IB switch and 8 nodes
</span><br>
<span class="quotelev1">&gt; have connected to ethernet switch. Master node is also connected to IB
</span><br>
<span class="quotelev1">&gt; switch. SGE(with tight integration, -pe orte)  is used for
</span><br>
<span class="quotelev1">&gt; parallel/serial job submission.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI-1.3 is installed on master node with IB support
</span><br>
<span class="quotelev1">&gt; (--with-openib=/usr). The same folder is copied to the remaining 23 IB
</span><br>
<span class="quotelev1">&gt; nodes.
</span><br>
<p>Sounds good.
<br>
<p><span class="quotelev1">&gt; Now what shall I do for remaining 8 ethernet nodes:
</span><br>
<span class="quotelev1">&gt; (1) Copy the same folder(IB) to these nodes
</span><br>
<span class="quotelev1">&gt; (2) Install Open MPI on one of the 8 eight ethernet nodes. Copy the
</span><br>
<span class="quotelev1">&gt; same to 7 nodes.
</span><br>
<span class="quotelev1">&gt; (3) Install an ethernet version of Open MPI on master node and copy  
</span><br>
<span class="quotelev1">&gt; to 8 nodes.
</span><br>
<p>Either 1 or 2 is your best bet.
<br>
<p>Do you have OFED installed on all nodes (either explicitly, or  
<br>
included in your Linux distro)?
<br>
<p>If so, I believe that at least some users with configurations like  
<br>
this install OMPI with OFED support (--with-openib=/usr, as you  
<br>
mentioned above) on all nodes.  OMPI will notice that there is no  
<br>
OpenFabrics-capable hardware on the ethernet-only nodes and will  
<br>
simply not use the openib BTL plugin.
<br>
<p>Note that OMPI v1.3 got better about being silent about the lack of  
<br>
OpenFabrics devices when the openib BTL is present (OMPI v1.2 issued a  
<br>
warning about this).
<br>
<p>How you intend to use this setup is up to you; you may want to  
<br>
restrict jobs to 100% IB or 100% ethernet via SGE, or you may want to  
<br>
let them mix, realizing that the overall parallel job may be slowed  
<br>
down to the speed of the slowest network (e.g., ethernet).
<br>
<p>Make sense?
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
<li><strong>Next message:</strong> <a href="7785.php">Andrea Iob: "Re: [OMPI users] Error compiling v1.3 with icc 10.1.021: PATH_MAX not defined"</a>
<li><strong>Previous message:</strong> <a href="7783.php">Ashley Pittman: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>In reply to:</strong> <a href="7770.php">Sangamesh B: "[OMPI users] Cluster with IB hosts and Ethernet hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7796.php">Sangamesh B: "Re: [OMPI users] Cluster with IB hosts and Ethernet hosts"</a>
<li><strong>Reply:</strong> <a href="7796.php">Sangamesh B: "Re: [OMPI users] Cluster with IB hosts and Ethernet hosts"</a>
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
