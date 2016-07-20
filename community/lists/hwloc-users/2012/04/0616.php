<?
$subject_val = "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 21 17:26:30 2012" -->
<!-- isoreceived="20120421212630" -->
<!-- sent="Sat, 21 Apr 2012 23:26:07 +0200" -->
<!-- isosent="20120421212607" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux" -->
<!-- id="4F9325EF.7040508_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="18CA9B93-9B52-494C-8331-87147816C21A_at_demoninsight.com" -->
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
<strong>Date:</strong> 2012-04-21 17:26:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0617.php">Vlad: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<li><strong>Previous message:</strong> <a href="0615.php">Vlad: "[hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<li><strong>In reply to:</strong> <a href="0615.php">Vlad: "[hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0617.php">Vlad: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<li><strong>Reply:</strong> <a href="0617.php">Vlad: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 21/04/2012 23:08, Vlad wrote:
<br>
<span class="quotelev1">&gt; Greetings,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I use hwloc-1.4.1 stable on Red Hat 5 and am seeing a possible 
</span><br>
<span class="quotelev1">&gt; concurrency issue not covered by the &quot;Thread Safety&quot; guidelines:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - I start a small number (4) of threads,  each of which does some work 
</span><br>
<span class="quotelev1">&gt; and periodically executes hwloc_get_last_cpu_location() with 
</span><br>
<span class="quotelev1">&gt; HWLOC_CPUBIND_PROCESS
</span><br>
<span class="quotelev1">&gt; - occasionally, one or two of those threads will see the call fail 
</span><br>
<span class="quotelev1">&gt; with ENOSYS (even though the same call has already executed 
</span><br>
<span class="quotelev1">&gt; successfully a number of times)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These errors are transient and seem to occur only when some of the 
</span><br>
<span class="quotelev1">&gt; threads in the group are terminating. I've skimmed through the 
</span><br>
<span class="quotelev1">&gt; implementation in topology-linux.c and it seems plausible to me that 
</span><br>
<span class="quotelev1">&gt; the errors could be caused by failure to read /proc state &quot;atomically&quot; 
</span><br>
<span class="quotelev1">&gt; in the presence of concurrent thread starts/exits.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Of course, the latter is hard (impossible ?) to do because the state 
</span><br>
<span class="quotelev1">&gt; always changes and a snapshot can only be obtained with a single 
</span><br>
<span class="quotelev1">&gt; read() (which in turn would require knowing how many thread entries to 
</span><br>
<span class="quotelev1">&gt; expect in advance). However, returning ENOSYS in such cases does not 
</span><br>
<span class="quotelev1">&gt; seems intended but rather a flaw in retry logic. Similar issues may be 
</span><br>
<span class="quotelev1">&gt; present with other API methods that rely on 
</span><br>
<span class="quotelev1">&gt; hwloc_linux_foreach_proc_tid() orhwloc_linux_get_proc_tids().
</span><br>
<p>Can you try the attached patch? It doesn't abort the loop immediately on 
<br>
per-tid errors anymore. This may work better when threads disappear. I 
<br>
don't remember if the retry logic was written while thinking about 
<br>
adding threads only or about adding and removing threads.
<br>
<p>If the patch doesn't help, can you send your code to help debug things?
<br>
<p><span class="quotelev1">&gt; An alternative explanation could be that the retry logic is correct 
</span><br>
<span class="quotelev1">&gt; but the implementation relies on readdir(), which is documented to not 
</span><br>
<span class="quotelev1">&gt; be thread-safe: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.gnu.org/software/libc/manual/html_node/Reading_002fClosing-Directory.html">http://www.gnu.org/software/libc/manual/html_node/Reading_002fClosing-Directory.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I don't this can happen. Your threads should not be accessing the same 
<br>
DIR stream here.
<br>
<p>Thanks
<br>
Brice
<br>
<p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0616/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0616/fix_tids.patch">fix_tids.patch</a>
</ul>
<!-- attachment="fix_tids.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0617.php">Vlad: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<li><strong>Previous message:</strong> <a href="0615.php">Vlad: "[hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<li><strong>In reply to:</strong> <a href="0615.php">Vlad: "[hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0617.php">Vlad: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<li><strong>Reply:</strong> <a href="0617.php">Vlad: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
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
