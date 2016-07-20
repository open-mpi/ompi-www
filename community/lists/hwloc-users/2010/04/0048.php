<?
$subject_val = "Re: [hwloc-users] howloc with scalemp";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  7 16:47:00 2010" -->
<!-- isoreceived="20100407204700" -->
<!-- sent="Wed, 7 Apr 2010 16:46:53 -0400" -->
<!-- isosent="20100407204653" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] howloc with scalemp" -->
<!-- id="4E7C3B0D-CA77-47AD-97F2-319DAB36C406_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4BBCE7CF.7030604_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] howloc with scalemp<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-07 16:46:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0049.php">Brice Goglin: "Re: [hwloc-users] howloc with scalemp"</a>
<li><strong>Previous message:</strong> <a href="0047.php">Brice Goglin: "Re: [hwloc-users] howloc with scalemp"</a>
<li><strong>In reply to:</strong> <a href="0047.php">Brice Goglin: "Re: [hwloc-users] howloc with scalemp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0049.php">Brice Goglin: "Re: [hwloc-users] howloc with scalemp"</a>
<li><strong>Reply:</strong> <a href="0049.php">Brice Goglin: "Re: [hwloc-users] howloc with scalemp"</a>
<li><strong>Reply:</strong> <a href="0051.php">Samuel Thibault: "Re: [hwloc-users] howloc with scalemp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Brock Palen wrote:
</span><br>
<span class="quotelev2">&gt;&gt; has anyone done work with hwloc on scalemp systems?  They provide
</span><br>
<span class="quotelev2">&gt;&gt; their own tool numabind, but we are looking for a more generic
</span><br>
<span class="quotelev2">&gt;&gt; solution to process placement and control that works well inside our
</span><br>
<span class="quotelev2">&gt;&gt; MPI library (openMPI in most cases).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any input on this would be great!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello Brock,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From what I remember, ScaleMP uses an hypervisor on each node that
</span><br>
<span class="quotelev1">&gt; virtually merges all of them into a fake big shared-memory machine.  
</span><br>
<span class="quotelev1">&gt; Then
</span><br>
<span class="quotelev1">&gt; a vanilla Linux kernel runs on top of it. So hwloc should just see
</span><br>
<span class="quotelev1">&gt; regular cores and NUMA node information, assuming the virtual &quot;merged&quot;
</span><br>
<span class="quotelev1">&gt; hardware reports all necessary information to the OS.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>running lstopo 0.9.3  it appears that howloc does see the extra layer  
<br>
of complexity:
<br>
<p>[brockp_at_nyx0809 INTEL]$ lstopo -
<br>
System(79GB)
<br>
&nbsp;&nbsp;&nbsp;Misc0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Node#0(10GB) + Socket#1 + L3(8192KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2(256KB) + L1(32KB) + Core#0 + P#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2(256KB) + L1(32KB) + Core#1 + P#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2(256KB) + L1(32KB) + Core#2 + P#2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2(256KB) + L1(32KB) + Core#3 + P#3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Node#1(10GB) + Socket#0 + L3(8192KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2(256KB) + L1(32KB) + Core#0 + P#4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2(256KB) + L1(32KB) + Core#1 + P#5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2(256KB) + L1(32KB) + Core#2 + P#6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2(256KB) + L1(32KB) + Core#3 + P#7
<br>
&nbsp;&nbsp;&nbsp;Misc0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Node#2(10GB) + Socket#3 + L3(8192KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2(256KB) + L1(32KB) + Core#0 + P#8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2(256KB) + L1(32KB) + Core#1 + P#9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2(256KB) + L1(32KB) + Core#2 + P#10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2(256KB) + L1(32KB) + Core#3 + P#11
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Node#3(10GB) + Socket#2 + L3(8192KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2(256KB) + L1(32KB) + Core#0 + P#12
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2(256KB) + L1(32KB) + Core#1 + P#13
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2(256KB) + L1(32KB) + Core#2 + P#14
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2(256KB) + L1(32KB) + Core#3 + P#15
<br>
&nbsp;&nbsp;&nbsp;Misc0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Node#4(10GB) + Socket#5 + L3(8192KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2(256KB) + L1(32KB) + Core#0 + P#16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2(256KB) + L1(32KB) + Core#1 + P#17
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2(256KB) + L1(32KB) + Core#2 + P#18
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2(256KB) + L1(32KB) + Core#3 + P#19
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Node#5(10GB) + Socket#4 + L3(8192KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2(256KB) + L1(32KB) + Core#0 + P#20
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2(256KB) + L1(32KB) + Core#1 + P#21
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2(256KB) + L1(32KB) + Core#2 + P#22
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2(256KB) + L1(32KB) + Core#3 + P#23
<br>
&nbsp;&nbsp;&nbsp;Misc0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Node#6(10GB) + Socket#7 + L3(8192KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2(256KB) + L1(32KB) + Core#0 + P#24
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2(256KB) + L1(32KB) + Core#1 + P#25
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2(256KB) + L1(32KB) + Core#2 + P#26
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2(256KB) + L1(32KB) + Core#3 + P#27
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Node#7(10GB) + Socket#6 + L3(8192KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2(256KB) + L1(32KB) + Core#0 + P#28
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2(256KB) + L1(32KB) + Core#1 + P#29
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2(256KB) + L1(32KB) + Core#2 + P#30
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2(256KB) + L1(32KB) + Core#3 + P#31
<br>
<p>I don't know why they are all labeled Misc0  but it does see the extra  
<br>
layer.
<br>
<p>If you want other information let me know.
<br>
<p><span class="quotelev1">&gt; There's a bit of ScaleMP code in the Linux kernel, but it does pretty
</span><br>
<span class="quotelev1">&gt; much nothing, it does not seem to add anything to /proc or /sys for
</span><br>
<span class="quotelev1">&gt; instance. So I am not sure hwloc could get some specialized  
</span><br>
<span class="quotelev1">&gt; knowledge of
</span><br>
<span class="quotelev1">&gt; ScaleMP machines. Maybe their custom numabind tool knows that ScaleMP
</span><br>
<span class="quotelev1">&gt; machines only works on machines with some well-defined
</span><br>
<span class="quotelev1">&gt; types/counts/numbering of processors and NUMA nodes, and thus uses  
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev1">&gt; information to group sockets/NUMA-nodes depending on their physical
</span><br>
<span class="quotelev1">&gt; distance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0049.php">Brice Goglin: "Re: [hwloc-users] howloc with scalemp"</a>
<li><strong>Previous message:</strong> <a href="0047.php">Brice Goglin: "Re: [hwloc-users] howloc with scalemp"</a>
<li><strong>In reply to:</strong> <a href="0047.php">Brice Goglin: "Re: [hwloc-users] howloc with scalemp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0049.php">Brice Goglin: "Re: [hwloc-users] howloc with scalemp"</a>
<li><strong>Reply:</strong> <a href="0049.php">Brice Goglin: "Re: [hwloc-users] howloc with scalemp"</a>
<li><strong>Reply:</strong> <a href="0051.php">Samuel Thibault: "Re: [hwloc-users] howloc with scalemp"</a>
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
