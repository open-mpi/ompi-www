<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Feb 25 00:41:11 2006" -->
<!-- isoreceived="20060225054111" -->
<!-- sent="Sat, 25 Feb 2006 00:41:02 -0500" -->
<!-- isosent="20060225054102" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Ethernet bonding and Open MPI" -->
<!-- id="6245C318-8B07-4CCB-B86D-3D46E7775A73_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="43FFCACB.7050500_at_sympatico.ca" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-25 00:41:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0712.php">Jeff Squyres: "Re: [OMPI users] MPI_SEND blocks when crossing node boundary"</a>
<li><strong>Previous message:</strong> <a href="0710.php">Brian Barrett: "Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
<li><strong>In reply to:</strong> <a href="0709.php">Allan Menezes: "[OMPI users] Ethernet bonding and Open MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 24, 2006, at 10:11 PM, Allan Menezes wrote:
<br>
<p><span class="quotelev1">&gt;   I have a 16 node AMD/P4 machine cluster running Oscar 4.2.1 Beta and
</span><br>
<span class="quotelev1">&gt; FC4. Each machine has two Gigabit network cards. One being realtek8169
</span><br>
<span class="quotelev1">&gt; all connected to a netgear GS116 gigabit switch with max MTU =1500 and
</span><br>
<span class="quotelev1">&gt; the other NIC being aDlink Syskonnect chipset gigabit card  
</span><br>
<span class="quotelev1">&gt; connected to
</span><br>
<span class="quotelev1">&gt; a managed NetgearGS724T Gigabit switch with Jumbo MTU enabled on the
</span><br>
<span class="quotelev1">&gt; switch and each Dlink card's MTU set at 9000 from the ifcfg-eth1  
</span><br>
<span class="quotelev1">&gt; file. I
</span><br>
<span class="quotelev1">&gt; want to know how I can use open mpi (any version &gt;=1.01) to use  
</span><br>
<span class="quotelev1">&gt; ethernet
</span><br>
<span class="quotelev1">&gt; bonding to get 2 gig eth cards to boost performance. I have 512MB  
</span><br>
<span class="quotelev1">&gt; memory
</span><br>
<span class="quotelev1">&gt; on each machine for a total of 8 GigBytes Memory and a hard disk on  
</span><br>
<span class="quotelev1">&gt; each
</span><br>
<span class="quotelev1">&gt; node.. I use HPL/Linpack to run benchmarks and get 28.36GFlops with  
</span><br>
<span class="quotelev1">&gt; open
</span><br>
<span class="quotelev1">&gt; mpi 1.1a1br9098 and with mpich2 1.03 i get 28.7Gflops using only one
</span><br>
<span class="quotelev1">&gt; ethernet (GIg Dlink) with jumbo frames on both benchmarks at  
</span><br>
<span class="quotelev1">&gt; MTU=9000. I
</span><br>
<span class="quotelev1">&gt; use -mca btl tcp on openmpi. The N = 26760 and NB= 120 for HPL.dat at
</span><br>
<span class="quotelev1">&gt; P=4 Q=4 for 16 processors for both benchmarks using openmpi and  
</span><br>
<span class="quotelev1">&gt; mpich2.
</span><br>
<span class="quotelev1">&gt; Can any one tell me if I will get a performance increasse &gt; 29GFlops
</span><br>
<span class="quotelev1">&gt; using the two Switches and 2 GigEth Nic cards per node if I use  
</span><br>
<span class="quotelev1">&gt; Ethernet
</span><br>
<span class="quotelev1">&gt; Channel Boning in FC4?
</span><br>
<p>It is highly unlikely that channel bonding will increase your  
<br>
performance.  Given the unbalanced nature of your TCP stack, it is  
<br>
likely to actually hurt performance more than it helps.  Channel  
<br>
bonding is really only a win for bandwidth.  In most cases, it does  
<br>
not improve (and sometimes even hurts) latency.  HPL doesn't really  
<br>
strain a network, and it's doubtful that the extra 10% (best case)  
<br>
bandwith is going to help that much (especially considering the fact  
<br>
that it can adversely effect latency).
<br>
<p>Open MPI will try to use all available TCP links between hosts, so it  
<br>
was already striping messages across both your NICs (assuming they  
<br>
were configured at the time) round-robin short messages where  
<br>
appropriate.  The algorithm is fairly simplistic at this point and  
<br>
assumes that all network links are created equal.
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0712.php">Jeff Squyres: "Re: [OMPI users] MPI_SEND blocks when crossing node boundary"</a>
<li><strong>Previous message:</strong> <a href="0710.php">Brian Barrett: "Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
<li><strong>In reply to:</strong> <a href="0709.php">Allan Menezes: "[OMPI users] Ethernet bonding and Open MPI"</a>
<!-- nextthread="start" -->
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
