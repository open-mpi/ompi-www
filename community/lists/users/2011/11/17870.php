<?
$subject_val = "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 30 15:03:18 2011" -->
<!-- isoreceived="20111130200318" -->
<!-- sent="Wed, 30 Nov 2011 20:02:58 +0000 (UTC)" -->
<!-- isosent="20111130200258" -->
<!-- name="Jaison Paul" -->
<!-- email="jmulerik_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh" -->
<!-- id="loom.20111130T210008-96_at_post.gmane.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="66F88C02-48BB-4F65-B33E-146AC76130BB_at_cisco.com" -->
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
<strong>From:</strong> Jaison Paul (<em>jmulerik_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-30 15:02:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17871.php">Jaison Paul: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>Previous message:</strong> <a href="17869.php">Ralph Castain: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
<li><strong>In reply to:</strong> <a href="17865.php">Jeff Squyres: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17873.php">Jeff Squyres: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>Reply:</strong> <a href="17873.php">Jeff Squyres: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres &lt;jsquyres &lt;at&gt; cisco.com&gt; writes:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 30, 2011, at 6:03 AM, Jaison Paul wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Yes, we have set up .ssh file on remote EC2 hosts. Is there anything else
</span><br>
that we should be taking care of when
<br>
<span class="quotelev1">&gt; dealing with EC2?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have heard that Open MPI's TCP latency on EC2 is horrid.  I actually talked
</span><br>
with some Amazon / EC2 folks about
<br>
<span class="quotelev1">&gt; it at SC'11 a few weeks ago; we set a date to dive into it a bit deeper in
</span><br>
December.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No promises on when/if the TCP latency will improve, but it's definitely
</span><br>
something that we're looking at. 
<br>
<span class="quotelev1">&gt; My first *guess* is that it might have something to do with specifying
</span><br>
btl_tcp_if_include /
<br>
<span class="quotelev1">&gt; oob_tcp_if_include improperly (or not at all) -- but that's a SWAG.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p>Yes Jeff,
<br>
<p>We are not setting up --mca btl_tcp_if_include / --mca oob_tcp_if_include at all
<br>
at the moment. What will be the best setup to access EC2 hosts over internet for
<br>
--mca btl_tcp_if_include / --mca oob_tcp_if_include? I dont understand --mca
<br>
very well.
<br>
<p>Thanks, Jaison
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17871.php">Jaison Paul: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>Previous message:</strong> <a href="17869.php">Ralph Castain: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
<li><strong>In reply to:</strong> <a href="17865.php">Jeff Squyres: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17873.php">Jeff Squyres: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>Reply:</strong> <a href="17873.php">Jeff Squyres: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
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
