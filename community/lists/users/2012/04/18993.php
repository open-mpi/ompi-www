<?
$subject_val = "Re: [OMPI users] wrong core binding by openmpi-1.5.5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 11 05:19:23 2012" -->
<!-- isoreceived="20120411091923" -->
<!-- sent="Wed, 11 Apr 2012 03:19:15 -0600" -->
<!-- isosent="20120411091915" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] wrong core binding by openmpi-1.5.5" -->
<!-- id="33D0DA70-03FE-4CEF-9976-FC3010C6FBCC_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4F8542A1.4080101_at_inria.fr" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-11 05:19:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18994.php">Ralph Castain: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<li><strong>Previous message:</strong> <a href="18992.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<li><strong>In reply to:</strong> <a href="18991.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Interesting. Jeff and I had discussed that very problem not that long ago, and I could swear he fixed it - but I don't see the CMR for that code. He's on vacation this week, so I'll wait for his return to look at it.
<br>
<p>Thanks!
<br>
Ralph
<br>
<p>On Apr 11, 2012, at 2:36 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; A quick look at the code seems to confirm my feeling. get/set_module()
</span><br>
<span class="quotelev1">&gt; callbacks manipulate arrays of logical indexes, and they do not convert
</span><br>
<span class="quotelev1">&gt; them back to physical indexes before binding.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's a quick patch that may help. Only compile tested...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 11/04/2012 09:49, Brice Goglin a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Le 11/04/2012 09:06, tmishima_at_[hidden] a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi, Brice.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I installed the latest hwloc-1.4.1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is the output of lstopo -p.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [root_at_node03 bin]# ./lstopo -p
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Machine (126GB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Socket P#0 (32GB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    NUMANode P#0 (16GB) + L3 (5118KB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      L2 (512KB) + L1 (64KB) + Core P#0 + PU P#0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      L2 (512KB) + L1 (64KB) + Core P#1 + PU P#4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      L2 (512KB) + L1 (64KB) + Core P#2 + PU P#8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      L2 (512KB) + L1 (64KB) + Core P#3 + PU P#12
</span><br>
<span class="quotelev2">&gt;&gt; Ok then the cpuset of this numanode is 1111.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node03.cluster:21706] [[55518,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [[55518,1],0] to cpus 1111
</span><br>
<span class="quotelev2">&gt;&gt; So openmpi 1.5.4 is correct.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node03.cluster:04706] [[40566,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [[40566,1],0] to cpus 000f
</span><br>
<span class="quotelev2">&gt;&gt; And openmpi 1.5.5 is indeed wrong.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Random guess: 000f is the bitmask made of hwloc *logical* indexes. hwloc
</span><br>
<span class="quotelev2">&gt;&gt; cpusets (used for binding) are internally made of hwloc *physical*
</span><br>
<span class="quotelev2">&gt;&gt; indexes (1111 here).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff, Ralph:
</span><br>
<span class="quotelev2">&gt;&gt; How does OMPI 1.5.5 build hwloc cpusets for binding? Are you doing
</span><br>
<span class="quotelev2">&gt;&gt; bitmap operations on hwloc object cpusets?
</span><br>
<span class="quotelev2">&gt;&gt; If yes, I don't know what's going wrong here.
</span><br>
<span class="quotelev2">&gt;&gt; If no, are you building hwloc cpusets manually by setting individual
</span><br>
<span class="quotelev2">&gt;&gt; bits from object indexes? If yes, you must use *physical* indexes to do so.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;try.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18994.php">Ralph Castain: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<li><strong>Previous message:</strong> <a href="18992.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<li><strong>In reply to:</strong> <a href="18991.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
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
