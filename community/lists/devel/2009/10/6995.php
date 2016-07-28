<?
$subject_val = "Re: [OMPI devel] 0.9.1rc2 is available";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 19:37:45 2009" -->
<!-- isoreceived="20091021233745" -->
<!-- sent="Thu, 22 Oct 2009 10:37:34 +1100 (EST)" -->
<!-- isosent="20091021233734" -->
<!-- name="Chris Samuel" -->
<!-- email="csamuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 0.9.1rc2 is available" -->
<!-- id="405459152.4931111256168254407.JavaMail.root_at_mail.vpac.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1297887994.4931051256167776886.JavaMail.root_at_mail.vpac.org" -->
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
<strong>From:</strong> Chris Samuel (<em>csamuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-21 19:37:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6996.php">Jeff Squyres: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>Previous message:</strong> <a href="6994.php">Chris Samuel: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>In reply to:</strong> <a href="6994.php">Chris Samuel: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6996.php">Jeff Squyres: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>Reply:</strong> <a href="6996.php">Jeff Squyres: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>Reply:</strong> <a href="7001.php">Ashley Pittman: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
----- &quot;Chris Samuel&quot; &lt;csamuel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Some sample results below for configs not represented
</span><br>
<span class="quotelev1">&gt; on the current website.
</span><br>
<p>A final example of a more convoluted configuration with
<br>
a Torque job requesting 5 CPUs on a dual Shanghai node
<br>
and has been given a non-contiguous configuration.
<br>
<p>[csamuel_at_tango069 ~]$ cat /dev/cpuset/`cat /proc/$$/cpuset`/cpus
<br>
0,4-7
<br>
<p>[csamuel_at_tango069 ~]$ ~/local/hwloc/0.9.1rc2/bin/lstopo
<br>
System(31GB)
<br>
&nbsp;&nbsp;Node#0(15GB) + Socket#0 + L3(6144KB) + L2(512KB) + L1(64KB) + Core#0 + P#0
<br>
&nbsp;&nbsp;Node#1(16GB) + Socket#1 + L3(6144KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2(512KB) + L1(64KB) + Core#0 + P#4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2(512KB) + L1(64KB) + Core#1 + P#5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2(512KB) + L1(64KB) + Core#2 + P#6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2(512KB) + L1(64KB) + Core#3 + P#7
<br>
<p><pre>
-- 
Christopher Samuel - (03) 9925 4751 - Systems Manager
 The Victorian Partnership for Advanced Computing
 P.O. Box 201, Carlton South, VIC 3053, Australia
VPAC is a not-for-profit Registered Research Agency
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6996.php">Jeff Squyres: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>Previous message:</strong> <a href="6994.php">Chris Samuel: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>In reply to:</strong> <a href="6994.php">Chris Samuel: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6996.php">Jeff Squyres: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>Reply:</strong> <a href="6996.php">Jeff Squyres: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>Reply:</strong> <a href="7001.php">Ashley Pittman: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
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
