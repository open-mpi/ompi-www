<?
$subject_val = "Re: [hwloc-devel] get cpu where a process/thread is executing";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 12 17:42:36 2011" -->
<!-- isoreceived="20110212224236" -->
<!-- sent="Sat, 12 Feb 2011 23:41:51 +0100" -->
<!-- isosent="20110212224151" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] get cpu where a process/thread is executing" -->
<!-- id="20110212224151.GN5131_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="93013848.39223.1297549455835.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] get cpu where a process/thread is executing<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-12 17:41:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1925.php">LdK: "[hwloc-devel] CMake instead of m4"</a>
<li><strong>Previous message:</strong> <a href="1923.php">Samuel Thibault: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>Maybe in reply to:</strong> <a href="1915.php">Brice Goglin: "[hwloc-devel] get cpu where a process/thread is executing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1936.php">Samuel Thibault: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Samuel Thibault, le Sat 12 Feb 2011 23:24:15 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; For the windows case, could you just put a &quot;TODO: use
</span><br>
<span class="quotelev1">&gt; GetCurrentProcessorNumber&quot; comment?
</span><br>
<p>For the AIX case, please put a &quot;TODO: use mycpu()&quot; comment.
<br>
For the freebsd case, please put a &quot;TODO: find out ki_lastcpu&quot; comment.
<br>
<p>That makes me thing that maybe get_lastcpuexec might be better at
<br>
expressing that the value is potentially out of date as soon as it
<br>
returns.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1925.php">LdK: "[hwloc-devel] CMake instead of m4"</a>
<li><strong>Previous message:</strong> <a href="1923.php">Samuel Thibault: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>Maybe in reply to:</strong> <a href="1915.php">Brice Goglin: "[hwloc-devel] get cpu where a process/thread is executing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1936.php">Samuel Thibault: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
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
