<?
$subject_val = "Re: [hwloc-devel] How to get information about hwloc objects?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  7 07:49:00 2010" -->
<!-- isoreceived="20100707114900" -->
<!-- sent="Wed, 7 Jul 2010 13:48:51 +0200" -->
<!-- isosent="20100707114851" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] How to get information about hwloc objects?" -->
<!-- id="201007071348.52279.jhladky_at_redhat.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4C344702.3000902_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] How to get information about hwloc objects?<br>
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-07 07:48:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1139.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Previous message:</strong> <a href="1137.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>In reply to:</strong> <a href="1134.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1142.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Reply:</strong> <a href="1142.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
<p>I have one question regarding thread id:
<br>
=======================================
<br>
./hwloc-calc --physical --list core proc:60
<br>
11
<br>
is matching with 
<br>
core id         : 11 from /proc/cpuinfo
<br>
<p>./hwloc-calc --physical --list socket proc:60
<br>
0
<br>
is matching with
<br>
physical id     : 0 from /proc/cpuinfo
<br>
<p>and obviously --physical proc:60 corresponds to 
<br>
processor       : 60 from /proc/cpuinfo
<br>
<p>On Itanium there is also 
<br>
thread id : 0
<br>
line in /proc/cpuinfo
<br>
===================================================
<br>
<p>In our current code (based solely on /proc/cpuinfo, we are moving it to use 
<br>
hwloc instead) we are using &quot;thread id&quot;. Currently, on boxes with hyper 
<br>
threading enabled I parse lstopo output and map &quot;physical thread id&quot; following 
<br>
way:
<br>
<p>&nbsp;&nbsp;NUMANode #2 (phys=3 2048MB) + Socket #3 + L3 #3 (24MB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 #24 (256KB) + L1 #24 (32KB) + Core #24
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #48 (phys=3)  =&gt; thread id 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #49 (phys=35) =&gt; thread id 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 #25 (256KB) + L1 #25 (32KB) + Core #25
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #50 (phys=7) =&gt; thread id 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #51 (phys=39) =&gt; thread id 1
<br>
<p>(You can think of it as doing logical_CPU modulo &lt;number of HW threads on 
<br>
given Core&gt;)
<br>
<p>I know that such mapping is artificial. However, it enables me to see that 
<br>
hyper threading is enabled. I use it in my reports only.
<br>
<p>I wonder if some similar concept exists in hwloc. To be honest, I don't know 
<br>
what the future of &quot;thread id&quot; in /proc/cpuinfo file is. It seems to be only in 
<br>
/proc/cpuinfo for ia64.
<br>
<p>Thanks for your opinion!
<br>
Jirka
<br>
<p>PS: I have included /proc/cpuinfo from IA64 box.
<br>
<p><p><p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1138/cpuinfo">cpuinfo</a>
</ul>
<!-- attachment="cpuinfo" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1139.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Previous message:</strong> <a href="1137.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>In reply to:</strong> <a href="1134.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1142.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Reply:</strong> <a href="1142.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
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
