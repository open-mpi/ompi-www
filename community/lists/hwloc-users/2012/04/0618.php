<?
$subject_val = "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 21 17:44:58 2012" -->
<!-- isoreceived="20120421214458" -->
<!-- sent="Sat, 21 Apr 2012 23:44:50 +0200" -->
<!-- isosent="20120421214450" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux" -->
<!-- id="4F932A52.5000604_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="31C8565E-206F-4C52-B865-8BFC9F9F9F1E_at_demoninsight.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-21 17:44:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0619.php">Samuel Thibault: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<li><strong>Previous message:</strong> <a href="0617.php">Vlad: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<li><strong>In reply to:</strong> <a href="0617.php">Vlad: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0620.php">Brice Goglin: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 21/04/2012 23:36, Vlad wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Will try this within a day or two. At the moment I am simply using a 
</span><br>
<span class="quotelev1">&gt; retry loop on ENOSYS and usually no more than one retry is needed.
</span><br>
<p>Ok thanks.
<br>
<p><span class="quotelev1">&gt; You are probably correct. I was thinking of this code from 
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/hwloc/browser/trunk/src/topology-linux.c">https://svn.open-mpi.org/trac/hwloc/browser/trunk/src/topology-linux.c</a>:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 445 while ((dirent = readdir(taskdir)) != NULL) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;taskdir&quot; here is /proc/&lt;pid&gt;/task, correct? In which case the threads 
</span><br>
<span class="quotelev1">&gt; will be doing readdir() on the same DIR stream...
</span><br>
<p>taskdir is a different DIR* for each thread here: each thread does its 
<br>
own get_last_cpu_location() which calls its own instance of opendir(). 
<br>
Even if the directory behind these DIR* descriptors are the same, it 
<br>
should be fine, there's no concurrency on the same DIR* descriptor in 
<br>
readdir.
<br>
<p>Brice
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;fix_tids.patch&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users_at_[hidden] &lt;mailto:hwloc-users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt; If the patch doesn't help, can you send your code to help debug things?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0618/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0619.php">Samuel Thibault: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<li><strong>Previous message:</strong> <a href="0617.php">Vlad: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<li><strong>In reply to:</strong> <a href="0617.php">Vlad: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0620.php">Brice Goglin: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
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
