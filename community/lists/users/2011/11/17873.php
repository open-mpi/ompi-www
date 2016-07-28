<?
$subject_val = "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 30 15:36:24 2011" -->
<!-- isoreceived="20111130203624" -->
<!-- sent="Wed, 30 Nov 2011 15:36:18 -0500" -->
<!-- isosent="20111130203618" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh" -->
<!-- id="A8F1332F-BB82-4B6B-A402-4ABC3E4FE3D5_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="loom.20111130T210008-96_at_post.gmane.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-30 15:36:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17874.php">Tom Rosmond: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
<li><strong>Previous message:</strong> <a href="17872.php">Jeff Squyres: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
<li><strong>In reply to:</strong> <a href="17870.php">Jaison Paul: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17876.php">Jaison Paul: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 30, 2011, at 3:02 PM, Jaison Paul wrote:
<br>
<p><span class="quotelev1">&gt; We are not setting up --mca btl_tcp_if_include / --mca oob_tcp_if_include at all
</span><br>
<span class="quotelev1">&gt; at the moment. What will be the best setup to access EC2 hosts over internet for
</span><br>
<span class="quotelev1">&gt; --mca btl_tcp_if_include / --mca oob_tcp_if_include? I dont understand --mca
</span><br>
<span class="quotelev1">&gt; very well.
</span><br>
<p>I don't know; I've never run on EC2 before.  My meeting with the EC2 folks is next week, so that's the earliest possibility of me gaining a little knowledge into what the Right way is to run with OMPI on EC2 (where &quot;Right&quot; = &quot;run without horrid latency&quot;).  It may take a bit longer than that, though, depending on my time availability.
<br>
<p>The two parameters I'm referring to simply limit the Ethernet interfaces that are used for Open MPI's MPI messaging and out-of-band messaging.  For example, on a commodity linux system, you could run with:
<br>
<p>mpirun --mca oob_tcp_if_include eth0 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--mca btl_tcp_if_include eth1  ...
<br>
<p>Where eth0 will be used for OMPI's control traffic (e.g., perhaps it's a commodity 1GB network) and eth1 will be used for OMPI's MPI traffic (e.g., perhaps it's a 10GB network).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17874.php">Tom Rosmond: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
<li><strong>Previous message:</strong> <a href="17872.php">Jeff Squyres: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
<li><strong>In reply to:</strong> <a href="17870.php">Jaison Paul: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17876.php">Jaison Paul: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
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
