<?
$subject_val = "Re: [hwloc-devel] get cpu where a process/thread is executing";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 14 08:23:22 2011" -->
<!-- isoreceived="20110214132322" -->
<!-- sent="Mon, 14 Feb 2011 14:23:14 +0100" -->
<!-- isosent="20110214132314" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] get cpu where a process/thread is executing" -->
<!-- id="20110214132314.GK8120_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="2057842716.53050.1297689562439.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Date:</strong> 2011-02-14 08:23:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1937.php">Samuel Thibault: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
<li><strong>Previous message:</strong> <a href="1935.php">Samuel Thibault: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
<li><strong>Maybe in reply to:</strong> <a href="1915.php">Brice Goglin: "[hwloc-devel] get cpu where a process/thread is executing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1938.php">Jeff Squyres: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>Reply:</strong> <a href="1938.php">Jeff Squyres: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Mon 14 Feb 2011 14:19:22 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; On Feb 12, 2011, at 5:23 PM, Samuel Thibault wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; * I am not such a big fan of get_cpuexec and get_proc_cpuexec names, any
</span><br>
<span class="quotelev3">&gt; &gt;&gt; better names?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I've often seen things like get_currentcpu
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let's not use &quot;cpu&quot; -- how about get_current_cpubind?  (vs. get_cpubind)
</span><br>
<p>The point is precisely that it's not the cpu binding, but where the
<br>
thread is actually _running_ precisely.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1937.php">Samuel Thibault: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
<li><strong>Previous message:</strong> <a href="1935.php">Samuel Thibault: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
<li><strong>Maybe in reply to:</strong> <a href="1915.php">Brice Goglin: "[hwloc-devel] get cpu where a process/thread is executing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1938.php">Jeff Squyres: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>Reply:</strong> <a href="1938.php">Jeff Squyres: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
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
