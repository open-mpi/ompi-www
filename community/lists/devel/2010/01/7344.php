<?
$subject_val = "Re: [OMPI devel] HOSTNAME environment variable";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 22 10:28:47 2010" -->
<!-- isoreceived="20100122152847" -->
<!-- sent="22 Jan 2010 15:28:43 +0000" -->
<!-- isosent="20100122152843" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] HOSTNAME environment variable" -->
<!-- id="Prayer.1.3.2.1001221528430.22692_at_hermes-2.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B7DC7078-76BA-4735-873F-731FDE33FC7F_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] HOSTNAME environment variable<br>
<strong>From:</strong> N.M. Maclaren (<em>nmm1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-22 10:28:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7345.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] flex.exe"</a>
<li><strong>Previous message:</strong> <a href="7343.php">Nadia Derbey: "Re: [OMPI devel] HOSTNAME environment variable"</a>
<li><strong>In reply to:</strong> <a href="7341.php">Ralph Castain: "Re: [OMPI devel] HOSTNAME environment variable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7340.php">Ralph Castain: "Re: [OMPI devel] HOSTNAME environment variable"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 22 2010, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; For SLURM, there is a config file where you can specify what gets 
</span><br>
<span class="quotelev1">&gt; propagated. It is clearly an error to include hostname as it messes many 
</span><br>
<span class="quotelev1">&gt; things up, not just OMPI. Frankly, I've never seen someone do that on 
</span><br>
<span class="quotelev1">&gt; SLURM.
</span><br>
<p>Well, it's USUALLY an error ....  That's clearly a good solution.
<br>
<p><span class="quotelev1">&gt; I believe in this case OMPI is likely incorrectly picking up the 
</span><br>
<span class="quotelev1">&gt; environment and propagating it. We know this is incorrectly happening on 
</span><br>
<span class="quotelev1">&gt; Torque, and it appears to also be happening on SLURM. This is a bug that 
</span><br>
<span class="quotelev1">&gt; I will be fixing on Torque - and as soon as Nadia confirms, on SLURM as 
</span><br>
<span class="quotelev1">&gt; well.
</span><br>
<p>I should have run a cross-check!  It doesn't happen on my bare OpenMPI
<br>
installation.
<br>
<p>Regards,
<br>
Nick Maclaren.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7345.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] flex.exe"</a>
<li><strong>Previous message:</strong> <a href="7343.php">Nadia Derbey: "Re: [OMPI devel] HOSTNAME environment variable"</a>
<li><strong>In reply to:</strong> <a href="7341.php">Ralph Castain: "Re: [OMPI devel] HOSTNAME environment variable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7340.php">Ralph Castain: "Re: [OMPI devel] HOSTNAME environment variable"</a>
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
