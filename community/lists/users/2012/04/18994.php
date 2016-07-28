<?
$subject_val = "Re: [OMPI users] wrong core binding by openmpi-1.5.5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 11 07:55:48 2012" -->
<!-- isoreceived="20120411115548" -->
<!-- sent="Wed, 11 Apr 2012 05:55:40 -0600" -->
<!-- isosent="20120411115540" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] wrong core binding by openmpi-1.5.5" -->
<!-- id="B50F57F9-1C18-4B4E-97FD-60B1A26C0034_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4F854BA0.8020808_at_inria.fr" -->
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
<strong>Date:</strong> 2012-04-11 07:55:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18995.php">Reuti: "Re: [OMPI users] sge tight integration leads to bad allocation"</a>
<li><strong>Previous message:</strong> <a href="18993.php">Ralph Castain: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<li><strong>In reply to:</strong> <a href="18992.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19000.php">tmishima_at_[hidden]: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ouch - finally figured out what happened. Jeff and I did indeed address this problem a few weeks ago. There were some changes required in a couple of places to make it all work, so we did the work in a Mercurial branch Jeff set up.
<br>
<p>Unfortunately, I think he got distracted by the MPI Forum shortly thereafter, and then got engulfed by other things. The work appears complete, but I can't find a record of it actually being committed to the 1.5 branch. Could be he intended it for 1.6.
<br>
<p>I'll have to bug him when he gets back next week and see what happened, and his plans. Sorry for the mixup.
<br>
Ralph
<br>
<p>On Apr 11, 2012, at 3:15 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Here's a better patch. Still only compile tested :)
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 11/04/2012 10:36, Brice Goglin a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; A quick look at the code seems to confirm my feeling. get/set_module()
</span><br>
<span class="quotelev2">&gt;&gt; callbacks manipulate arrays of logical indexes, and they do not convert
</span><br>
<span class="quotelev2">&gt;&gt; them back to physical indexes before binding.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here's a quick patch that may help. Only compile tested...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Le 11/04/2012 09:49, Brice Goglin a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 11/04/2012 09:06, tmishima_at_[hidden] a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi, Brice.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I installed the latest hwloc-1.4.1.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here is the output of lstopo -p.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [root_at_node03 bin]# ./lstopo -p
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Machine (126GB)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Socket P#0 (32GB)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     NUMANode P#0 (16GB) + L3 (5118KB)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       L2 (512KB) + L1 (64KB) + Core P#0 + PU P#0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       L2 (512KB) + L1 (64KB) + Core P#1 + PU P#4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       L2 (512KB) + L1 (64KB) + Core P#2 + PU P#8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       L2 (512KB) + L1 (64KB) + Core P#3 + PU P#12
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ok then the cpuset of this numanode is 1111.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [node03.cluster:21706] [[55518,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [[55518,1],0] to cpus 1111
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So openmpi 1.5.4 is correct.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [node03.cluster:04706] [[40566,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [[40566,1],0] to cpus 000f
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And openmpi 1.5.5 is indeed wrong.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Random guess: 000f is the bitmask made of hwloc *logical* indexes. hwloc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpusets (used for binding) are internally made of hwloc *physical*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; indexes (1111 here).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff, Ralph:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How does OMPI 1.5.5 build hwloc cpusets for binding? Are you doing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bitmap operations on hwloc object cpusets?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If yes, I don't know what's going wrong here.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If no, are you building hwloc cpusets manually by setting individual
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bits from object indexes? If yes, you must use *physical* indexes to do so.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; &lt;try2.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18994/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18995.php">Reuti: "Re: [OMPI users] sge tight integration leads to bad allocation"</a>
<li><strong>Previous message:</strong> <a href="18993.php">Ralph Castain: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<li><strong>In reply to:</strong> <a href="18992.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19000.php">tmishima_at_[hidden]: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
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
