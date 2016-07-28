<?
$subject_val = "Re: [OMPI devel] 0.9.1rc2 is available";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 22 05:06:47 2009" -->
<!-- isoreceived="20091022090647" -->
<!-- sent="Thu, 22 Oct 2009 11:05:11 +0200" -->
<!-- isosent="20091022090511" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 0.9.1rc2 is available" -->
<!-- id="4AE02047.7060607_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1256201622.3392.6.camel_at_alpha" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 0.9.1rc2 is available<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-22 05:05:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7003.php">Ashley Pittman: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>Previous message:</strong> <a href="7001.php">Ashley Pittman: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>In reply to:</strong> <a href="7001.php">Ashley Pittman: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7003.php">Ashley Pittman: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>Reply:</strong> <a href="7003.php">Ashley Pittman: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ashley Pittman wrote:
<br>
<span class="quotelev2">&gt;&gt; [csamuel_at_tango069 ~]$ ~/local/hwloc/0.9.1rc2/bin/lstopo
</span><br>
<span class="quotelev2">&gt;&gt; System(31GB)
</span><br>
<span class="quotelev2">&gt;&gt;   Node#0(15GB) + Socket#0 + L3(6144KB) + L2(512KB) + L1(64KB) + Core#0 + P#0
</span><br>
<span class="quotelev2">&gt;&gt;   Node#1(16GB) + Socket#1 + L3(6144KB)
</span><br>
<span class="quotelev2">&gt;&gt;     L2(512KB) + L1(64KB) + Core#0 + P#4
</span><br>
<span class="quotelev2">&gt;&gt;     L2(512KB) + L1(64KB) + Core#1 + P#5
</span><br>
<span class="quotelev2">&gt;&gt;     L2(512KB) + L1(64KB) + Core#2 + P#6
</span><br>
<span class="quotelev2">&gt;&gt;     L2(512KB) + L1(64KB) + Core#3 + P#7
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does this imply the default is to report on processes in the current
</span><br>
<span class="quotelev1">&gt; cpuset rather than the entire system?  Does anyone else feel that
</span><br>
<span class="quotelev1">&gt; violates the principal of least surprise?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Yes, by default, it's the current cpuset. Maybe lstopo should report the
<br>
whole system (it does if you pass --whole-system), or display a clear
<br>
message saying that's it's only showing the current cpuset. Apart from
<br>
lstopo, for real applications, I feel like using the current cpuset only
<br>
is better.
<br>
<p>By the way, we'll probably add another behavior in 1.0: only report the
<br>
topology inside the current process binding mask. But for sure this
<br>
behavior won't be enabled by default.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7003.php">Ashley Pittman: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>Previous message:</strong> <a href="7001.php">Ashley Pittman: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>In reply to:</strong> <a href="7001.php">Ashley Pittman: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7003.php">Ashley Pittman: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>Reply:</strong> <a href="7003.php">Ashley Pittman: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
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
