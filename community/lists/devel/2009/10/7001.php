<?
$subject_val = "Re: [OMPI devel] 0.9.1rc2 is available";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 22 04:53:29 2009" -->
<!-- isoreceived="20091022085329" -->
<!-- sent="Thu, 22 Oct 2009 09:53:41 +0100" -->
<!-- isosent="20091022085341" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 0.9.1rc2 is available" -->
<!-- id="1256201622.3392.6.camel_at_alpha" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="405459152.4931111256168254407.JavaMail.root_at_mail.vpac.org" -->
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
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-22 04:53:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7002.php">Brice Goglin: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>Previous message:</strong> <a href="7000.php">Chris Samuel: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>In reply to:</strong> <a href="6995.php">Chris Samuel: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7002.php">Brice Goglin: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>Reply:</strong> <a href="7002.php">Brice Goglin: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>Reply:</strong> <a href="7011.php">Chris Samuel: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2009-10-22 at 10:37 +1100, Chris Samuel wrote:
<br>
<span class="quotelev1">&gt; ----- &quot;Chris Samuel&quot; &lt;csamuel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Some sample results below for configs not represented
</span><br>
<span class="quotelev2">&gt; &gt; on the current website.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A final example of a more convoluted configuration with
</span><br>
<span class="quotelev1">&gt; a Torque job requesting 5 CPUs on a dual Shanghai node
</span><br>
<span class="quotelev1">&gt; and has been given a non-contiguous configuration.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [csamuel_at_tango069 ~]$ cat /dev/cpuset/`cat /proc/$$/cpuset`/cpus
</span><br>
<span class="quotelev1">&gt; 0,4-7
</span><br>
<p>You can better write this as
<br>
<p>$ grep Cpus_allowed_list /proc/$$/status
<br>
<p>Of course the best way to show it for all processes in a job is (run
<br>
this from outside your job)
<br>
<p>$ padb -a --proc-summary
<br>
--proc-format=vp=rank,pid,hostname=host,Cpus_allowed_list=cpuset
<br>
<p><span class="quotelev1">&gt; [csamuel_at_tango069 ~]$ ~/local/hwloc/0.9.1rc2/bin/lstopo
</span><br>
<span class="quotelev1">&gt; System(31GB)
</span><br>
<span class="quotelev1">&gt;   Node#0(15GB) + Socket#0 + L3(6144KB) + L2(512KB) + L1(64KB) + Core#0 + P#0
</span><br>
<span class="quotelev1">&gt;   Node#1(16GB) + Socket#1 + L3(6144KB)
</span><br>
<span class="quotelev1">&gt;     L2(512KB) + L1(64KB) + Core#0 + P#4
</span><br>
<span class="quotelev1">&gt;     L2(512KB) + L1(64KB) + Core#1 + P#5
</span><br>
<span class="quotelev1">&gt;     L2(512KB) + L1(64KB) + Core#2 + P#6
</span><br>
<span class="quotelev1">&gt;     L2(512KB) + L1(64KB) + Core#3 + P#7
</span><br>
<p>Does this imply the default is to report on processes in the current
<br>
cpuset rather than the entire system?  Does anyone else feel that
<br>
violates the principal of least surprise?
<br>
<p>Ashley,
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7002.php">Brice Goglin: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>Previous message:</strong> <a href="7000.php">Chris Samuel: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>In reply to:</strong> <a href="6995.php">Chris Samuel: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7002.php">Brice Goglin: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>Reply:</strong> <a href="7002.php">Brice Goglin: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>Reply:</strong> <a href="7011.php">Chris Samuel: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
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
