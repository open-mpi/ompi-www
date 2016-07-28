<?
$subject_val = "Re: [OMPI users] Loopback Communication";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar  1 08:20:46 2008" -->
<!-- isoreceived="20080301132046" -->
<!-- sent="Sat, 1 Mar 2008 08:20:35 -0500" -->
<!-- isosent="20080301132035" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Loopback Communication" -->
<!-- id="4447850C-820B-4FF4-837F-7523DCC1F0D7_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47C8947E.8060305_at_umn.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-01 08:20:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5114.php">Reuti: "Re: [OMPI users] Openmpi with SGE"</a>
<li><strong>Previous message:</strong> <a href="5112.php">Giovanni Davide Vergine: "Re: [OMPI users] Loopback Communication"</a>
<li><strong>In reply to:</strong> <a href="../../2008/02/5110.php">Elvedin Trnjanin: "[OMPI users] Loopback Communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5117.php">Sacerdoti, Federico: "[OMPI users] slurm and all-srun orterun"</a>
<li><strong>Reply:</strong> <a href="5117.php">Sacerdoti, Federico: "[OMPI users] slurm and all-srun orterun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 29, 2008, at 6:25 PM, Elvedin Trnjanin wrote:
<br>
<p><span class="quotelev1">&gt; I'm using a &quot;ping pong&quot; program to approximate bandwidth and latency  
</span><br>
<span class="quotelev1">&gt; of
</span><br>
<span class="quotelev1">&gt; various messages sizes and I notice when doing various transfers (eg.
</span><br>
<span class="quotelev1">&gt; async) that the maximum bandwidth isn't the system's maximum  
</span><br>
<span class="quotelev1">&gt; bandwidth.
</span><br>
<span class="quotelev1">&gt; I've looked through the FAQ and I haven't noticed this being covered  
</span><br>
<span class="quotelev1">&gt; but
</span><br>
<span class="quotelev1">&gt; how does OpenMPI handle loopback communication? Is it still over a
</span><br>
<span class="quotelev1">&gt; network interconnect or some sort of shared memory copy?
</span><br>
<p><p>There are two kinds of loopback:
<br>
<p>1. messages exchanged between two MPI processes on the same host.   
<br>
This can be handled by most of OMPI's devices, but the best/fastest is  
<br>
usually shared memory (i.e., the &quot;sm&quot; BTL).
<br>
<p>2. messages exchanges between a single MPI process.  This is handled  
<br>
by the &quot;self&quot; OMPI device because it's just a memcpy within a single  
<br>
process.
<br>
<p>So you'd typically want to run (assuming you have an IB network):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca btl openib,self,sm ....
<br>
<p>That being said, OMPI should usually pick the relevant BTL modules for  
<br>
you (to include self and sm).
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
<li><strong>Next message:</strong> <a href="5114.php">Reuti: "Re: [OMPI users] Openmpi with SGE"</a>
<li><strong>Previous message:</strong> <a href="5112.php">Giovanni Davide Vergine: "Re: [OMPI users] Loopback Communication"</a>
<li><strong>In reply to:</strong> <a href="../../2008/02/5110.php">Elvedin Trnjanin: "[OMPI users] Loopback Communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5117.php">Sacerdoti, Federico: "[OMPI users] slurm and all-srun orterun"</a>
<li><strong>Reply:</strong> <a href="5117.php">Sacerdoti, Federico: "[OMPI users] slurm and all-srun orterun"</a>
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
