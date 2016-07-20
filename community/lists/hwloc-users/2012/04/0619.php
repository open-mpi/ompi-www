<?
$subject_val = "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 21 17:46:37 2012" -->
<!-- isoreceived="20120421214637" -->
<!-- sent="Sat, 21 Apr 2012 23:46:29 +0200" -->
<!-- isosent="20120421214629" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux" -->
<!-- id="20120421214629.GA4269_at_type.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1700476032.80855.1335044231974.JavaMail.root_at_zmbs5.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-21 17:46:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0620.php">Brice Goglin: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<li><strong>Previous message:</strong> <a href="0618.php">Brice Goglin: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<li><strong>Maybe in reply to:</strong> <a href="0615.php">Vlad: "[hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Vlad, le Sat 21 Apr 2012 23:37:11 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; 433  /* take the number of links as a good estimate for the number of tids */
</span><br>
<span class="quotelev1">&gt; 434  if (fstat(dirfd(taskdir), &amp;sb) == 0)
</span><br>
<span class="quotelev1">&gt; 435    max_tids = sb.st_nlink;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;taskdir&quot; here is /proc/&lt;pid&gt;/task, correct? In which case the threads will be
</span><br>
<span class="quotelev1">&gt; doing readdir() on the same DIR stream...
</span><br>
<p>No, each thread opens its own DIR in hwloc_linux_foreach_proc_tid.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0620.php">Brice Goglin: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<li><strong>Previous message:</strong> <a href="0618.php">Brice Goglin: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<li><strong>Maybe in reply to:</strong> <a href="0615.php">Vlad: "[hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
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
