<?
$subject_val = "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 23 09:56:54 2012" -->
<!-- isoreceived="20120423135654" -->
<!-- sent="Mon, 23 Apr 2012 09:56:42 -0400" -->
<!-- isosent="20120423135642" -->
<!-- name="Vlad" -->
<!-- email="vlad_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux" -->
<!-- id="0C610314-C384-466F-9EA1-9F9759914120_at_demoninsight.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F95429C.3000008_at_inria.fr" -->
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
<strong>From:</strong> Vlad (<em>vlad_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-23 09:56:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0622.php">Vlad: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<li><strong>Previous message:</strong> <a href="0620.php">Brice Goglin: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<li><strong>In reply to:</strong> <a href="0620.php">Brice Goglin: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0622.php">Vlad: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah. I've just tested the first patch. It worked.
<br>
<p><p>On Apr 23, 2012, at 7:53 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; On 21/04/2012 23:36, Vlad wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 21, 2012, at 5:26 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 21/04/2012 23:08, Vlad wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Greetings,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  I use hwloc-1.4.1 stable on Red Hat 5 and am seeing a possible concurrency issue not covered by the &quot;Thread Safety&quot; guidelines:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - I start a small number (4) of threads,  each of which does some work and periodically executes hwloc_get_last_cpu_location() with HWLOC_CPUBIND_PROCESS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - occasionally, one or two of those threads will see the call fail with ENOSYS (even though the same call has already executed successfully a number of times)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; These errors are transient and seem to occur only when some of the threads in the group are terminating. I've skimmed through the implementation in topology-linux.c and it seems plausible to me that the errors could be caused by failure to read /proc state &quot;atomically&quot; in the presence of concurrent thread starts/exits.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Of course, the latter is hard (impossible ?) to do because the state always changes and a snapshot can only be obtained with a single read() (which in turn would require knowing how many thread entries to expect in advance). However, returning ENOSYS in such cases does not seems intended but rather a flaw in retry logic. Similar issues may be present with other API methods that rely on hwloc_linux_foreach_proc_tid() or hwloc_linux_get_proc_tids().
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you try the attached patch? It doesn't abort the loop immediately on per-tid errors anymore. This may work better when threads disappear. I don't remember if the retry logic was written while thinking about adding threads only or about adding and removing threads.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If the patch doesn't help, can you send your code to help debug things?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Will try this within a day or two. At the moment I am simply using a retry loop on ENOSYS and usually no more than one retry is needed.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's a possibly better patch. It lets the retry logic happen before checking whether we should return ENOSYS and friends.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;fix_tids.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0621/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0622.php">Vlad: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<li><strong>Previous message:</strong> <a href="0620.php">Brice Goglin: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<li><strong>In reply to:</strong> <a href="0620.php">Brice Goglin: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0622.php">Vlad: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
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
