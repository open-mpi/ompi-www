<?
$subject_val = "Re: [OMPI users] wrong core binding by openmpi-1.5.5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 11 04:36:54 2012" -->
<!-- isoreceived="20120411083654" -->
<!-- sent="Wed, 11 Apr 2012 10:36:49 +0200" -->
<!-- isosent="20120411083649" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] wrong core binding by openmpi-1.5.5" -->
<!-- id="4F8542A1.4080101_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F853773.2090109_at_inria.fr" -->
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
<strong>Date:</strong> 2012-04-11 04:36:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18992.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<li><strong>Previous message:</strong> <a href="18990.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<li><strong>In reply to:</strong> <a href="18990.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18992.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<li><strong>Reply:</strong> <a href="18992.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<li><strong>Reply:</strong> <a href="18993.php">Ralph Castain: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A quick look at the code seems to confirm my feeling. get/set_module()
<br>
callbacks manipulate arrays of logical indexes, and they do not convert
<br>
them back to physical indexes before binding.
<br>
<p>Here's a quick patch that may help. Only compile tested...
<br>
<p>Brice
<br>
<p><p><p>Le 11/04/2012 09:49, Brice Goglin a &#233;crit :
<br>
<span class="quotelev1">&gt; Le 11/04/2012 09:06, tmishima_at_[hidden] a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Hi, Brice.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I installed the latest hwloc-1.4.1.
</span><br>
<span class="quotelev2">&gt;&gt; Here is the output of lstopo -p.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_node03 bin]# ./lstopo -p
</span><br>
<span class="quotelev2">&gt;&gt; Machine (126GB)
</span><br>
<span class="quotelev2">&gt;&gt;   Socket P#0 (32GB)
</span><br>
<span class="quotelev2">&gt;&gt;     NUMANode P#0 (16GB) + L3 (5118KB)
</span><br>
<span class="quotelev2">&gt;&gt;       L2 (512KB) + L1 (64KB) + Core P#0 + PU P#0
</span><br>
<span class="quotelev2">&gt;&gt;       L2 (512KB) + L1 (64KB) + Core P#1 + PU P#4
</span><br>
<span class="quotelev2">&gt;&gt;       L2 (512KB) + L1 (64KB) + Core P#2 + PU P#8
</span><br>
<span class="quotelev2">&gt;&gt;       L2 (512KB) + L1 (64KB) + Core P#3 + PU P#12
</span><br>
<span class="quotelev1">&gt; Ok then the cpuset of this numanode is 1111.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node03.cluster:21706] [[55518,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[55518,1],0] to cpus 1111
</span><br>
<span class="quotelev1">&gt; So openmpi 1.5.4 is correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node03.cluster:04706] [[40566,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[40566,1],0] to cpus 000f
</span><br>
<span class="quotelev1">&gt; And openmpi 1.5.5 is indeed wrong.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Random guess: 000f is the bitmask made of hwloc *logical* indexes. hwloc
</span><br>
<span class="quotelev1">&gt; cpusets (used for binding) are internally made of hwloc *physical*
</span><br>
<span class="quotelev1">&gt; indexes (1111 here).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff, Ralph:
</span><br>
<span class="quotelev1">&gt; How does OMPI 1.5.5 build hwloc cpusets for binding? Are you doing
</span><br>
<span class="quotelev1">&gt; bitmap operations on hwloc object cpusets?
</span><br>
<span class="quotelev1">&gt; If yes, I don't know what's going wrong here.
</span><br>
<span class="quotelev1">&gt; If no, are you building hwloc cpusets manually by setting individual
</span><br>
<span class="quotelev1">&gt; bits from object indexes? If yes, you must use *physical* indexes to do so.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18991/try.patch">try.patch</a>
</ul>
<!-- attachment="try.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18992.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<li><strong>Previous message:</strong> <a href="18990.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<li><strong>In reply to:</strong> <a href="18990.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18992.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<li><strong>Reply:</strong> <a href="18992.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<li><strong>Reply:</strong> <a href="18993.php">Ralph Castain: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
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
