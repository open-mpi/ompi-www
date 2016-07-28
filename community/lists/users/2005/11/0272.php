<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov  1 14:17:37 2005" -->
<!-- isoreceived="20051101191737" -->
<!-- sent="Tue, 1 Nov 2005 14:17:25 -0500" -->
<!-- isosent="20051101191725" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] can't get openmpi to run across two multi-NIC machines" -->
<!-- id="010a9f3d227816833d08aaeda7c2ed90_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="02fc01c5df06$086a28e0$aa01a8c0_at_Roger2" -->
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
<strong>Date:</strong> 2005-11-01 14:17:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0273.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
<li><strong>Previous message:</strong> <a href="0271.php">Marty Humphrey: "[O-MPI users] can't get openmpi to run across two multi-NIC machines"</a>
<li><strong>In reply to:</strong> <a href="0271.php">Marty Humphrey: "[O-MPI users] can't get openmpi to run across two multi-NIC machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0292.php">Marty Humphrey: "Re: [O-MPI users] can't get openmpi to run across two multi-NICmachines"</a>
<li><strong>Reply:</strong> <a href="0292.php">Marty Humphrey: "Re: [O-MPI users] can't get openmpi to run across two multi-NICmachines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 1, 2005, at 12:02 PM, Marty Humphrey wrote:
<br>
<p><span class="quotelev1">&gt; wukong: eth0 (152.48.249.102, no MPI traffic), eth1 (128.109.34.20,yes 
</span><br>
<span class="quotelev1">&gt; MPI
</span><br>
<span class="quotelev1">&gt; traffic)
</span><br>
<span class="quotelev1">&gt; zelda01: eth0 (130.207.252.131, yes MPI traffic), eth2 (10.0.0.12, no 
</span><br>
<span class="quotelev1">&gt; MPI
</span><br>
<span class="quotelev1">&gt; traffic)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; on wukong, I have :
</span><br>
<span class="quotelev1">&gt; [humphrey_at_wukong ~]$ more ~/.openmpi/mca-params.conf
</span><br>
<span class="quotelev1">&gt; btl_tcp_if_include=eth1
</span><br>
<span class="quotelev1">&gt; on zelda01, I have :
</span><br>
<span class="quotelev1">&gt; [humphrey_at_zelda01 humphrey]$ more ~/.openmpi/mca-params.conf
</span><br>
<span class="quotelev1">&gt; btl_tcp_if_include=eth0
</span><br>
<p>Just to make sure I'm reading this right -- 128.109.34.20 is supposed 
<br>
to be routable to 130.207.252.131, right?  Can you ssh directly from 
<br>
one machine to the other?  (I'm guessing that you can because OMPI was 
<br>
able to start processes)  Can you ping one machine from the other?
<br>
<p>Most importantly -- can you open arbitrary TCP ports between the two 
<br>
machines?  (i.e., not just well-known ports like 22 [ssh], etc.)
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0273.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
<li><strong>Previous message:</strong> <a href="0271.php">Marty Humphrey: "[O-MPI users] can't get openmpi to run across two multi-NIC machines"</a>
<li><strong>In reply to:</strong> <a href="0271.php">Marty Humphrey: "[O-MPI users] can't get openmpi to run across two multi-NIC machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0292.php">Marty Humphrey: "Re: [O-MPI users] can't get openmpi to run across two multi-NICmachines"</a>
<li><strong>Reply:</strong> <a href="0292.php">Marty Humphrey: "Re: [O-MPI users] can't get openmpi to run across two multi-NICmachines"</a>
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
