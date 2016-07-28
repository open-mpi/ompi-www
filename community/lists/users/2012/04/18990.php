<?
$subject_val = "Re: [OMPI users] wrong core binding by openmpi-1.5.5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 11 03:49:11 2012" -->
<!-- isoreceived="20120411074911" -->
<!-- sent="Wed, 11 Apr 2012 09:49:07 +0200" -->
<!-- isosent="20120411074907" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] wrong core binding by openmpi-1.5.5" -->
<!-- id="4F853773.2090109_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="OF3872A861.29DD419D-ON492579DD.00269A0D-492579DD.00272077_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] wrong core binding by openmpi-1.5.5<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-11 03:49:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18991.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<li><strong>Previous message:</strong> <a href="18989.php">tmishima_at_[hidden]: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<li><strong>In reply to:</strong> <a href="18989.php">tmishima_at_[hidden]: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18991.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<li><strong>Reply:</strong> <a href="18991.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 11/04/2012 09:06, tmishima_at_[hidden] a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi, Brice.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I installed the latest hwloc-1.4.1.
</span><br>
<span class="quotelev1">&gt; Here is the output of lstopo -p.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_node03 bin]# ./lstopo -p
</span><br>
<span class="quotelev1">&gt; Machine (126GB)
</span><br>
<span class="quotelev1">&gt;   Socket P#0 (32GB)
</span><br>
<span class="quotelev1">&gt;     NUMANode P#0 (16GB) + L3 (5118KB)
</span><br>
<span class="quotelev1">&gt;       L2 (512KB) + L1 (64KB) + Core P#0 + PU P#0
</span><br>
<span class="quotelev1">&gt;       L2 (512KB) + L1 (64KB) + Core P#1 + PU P#4
</span><br>
<span class="quotelev1">&gt;       L2 (512KB) + L1 (64KB) + Core P#2 + PU P#8
</span><br>
<span class="quotelev1">&gt;       L2 (512KB) + L1 (64KB) + Core P#3 + PU P#12
</span><br>
<p>Ok then the cpuset of this numanode is 1111.
<br>
<p><span class="quotelev2">&gt;&gt; [node03.cluster:21706] [[55518,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev2">&gt;&gt; [[55518,1],0] to cpus 1111
</span><br>
<p>So openmpi 1.5.4 is correct.
<br>
<p><span class="quotelev2">&gt;&gt; [node03.cluster:04706] [[40566,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev2">&gt;&gt; [[40566,1],0] to cpus 000f
</span><br>
And openmpi 1.5.5 is indeed wrong.
<br>
<p>Random guess: 000f is the bitmask made of hwloc *logical* indexes. hwloc
<br>
cpusets (used for binding) are internally made of hwloc *physical*
<br>
indexes (1111 here).
<br>
<p>Jeff, Ralph:
<br>
How does OMPI 1.5.5 build hwloc cpusets for binding? Are you doing
<br>
bitmap operations on hwloc object cpusets?
<br>
If yes, I don't know what's going wrong here.
<br>
If no, are you building hwloc cpusets manually by setting individual
<br>
bits from object indexes? If yes, you must use *physical* indexes to do so.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18991.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<li><strong>Previous message:</strong> <a href="18989.php">tmishima_at_[hidden]: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<li><strong>In reply to:</strong> <a href="18989.php">tmishima_at_[hidden]: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18991.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<li><strong>Reply:</strong> <a href="18991.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
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
