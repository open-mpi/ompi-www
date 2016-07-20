<?
$subject_val = "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 23 07:53:06 2012" -->
<!-- isoreceived="20120423115306" -->
<!-- sent="Mon, 23 Apr 2012 13:53:00 +0200" -->
<!-- isosent="20120423115300" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux" -->
<!-- id="4F95429C.3000008_at_inria.fr" -->
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
<strong>Date:</strong> 2012-04-23 07:53:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0621.php">Vlad: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<li><strong>Previous message:</strong> <a href="0619.php">Samuel Thibault: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<li><strong>In reply to:</strong> <a href="0617.php">Vlad: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0621.php">Vlad: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<li><strong>Reply:</strong> <a href="0621.php">Vlad: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<li><strong>Reply:</strong> <a href="0622.php">Vlad: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 21/04/2012 23:36, Vlad wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 21, 2012, at 5:26 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 21/04/2012 23:08, Vlad wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Greetings,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I use hwloc-1.4.1 stable on Red Hat 5 and am seeing a possible 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; concurrency issue not covered by the &quot;Thread Safety&quot; guidelines:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - I start a small number (4) of threads,  each of which does some 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; work and periodically executes hwloc_get_last_cpu_location() with 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HWLOC_CPUBIND_PROCESS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - occasionally, one or two of those threads will see the call fail 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with ENOSYS (even though the same call has already executed 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; successfully a number of times)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; These errors are transient and seem to occur only when some of the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; threads in the group are terminating. I've skimmed through the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; implementation in topology-linux.c and it seems plausible to me that 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the errors could be caused by failure to read /proc state 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;atomically&quot; in the presence of concurrent thread starts/exits.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Of course, the latter is hard (impossible ?) to do because the state 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; always changes and a snapshot can only be obtained with a single 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; read() (which in turn would require knowing how many thread entries 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to expect in advance). However, returning ENOSYS in such cases does 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not seems intended but rather a flaw in retry logic. Similar issues 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; may be present with other API methods that rely on 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc_linux_foreach_proc_tid() orhwloc_linux_get_proc_tids().
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you try the attached patch? It doesn't abort the loop immediately 
</span><br>
<span class="quotelev2">&gt;&gt; on per-tid errors anymore. This may work better when threads 
</span><br>
<span class="quotelev2">&gt;&gt; disappear. I don't remember if the retry logic was written while 
</span><br>
<span class="quotelev2">&gt;&gt; thinking about adding threads only or about adding and removing threads.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If the patch doesn't help, can you send your code to help debug things?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Will try this within a day or two. At the moment I am simply using a 
</span><br>
<span class="quotelev1">&gt; retry loop on ENOSYS and usually no more than one retry is needed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Here's a possibly better patch. It lets the retry logic happen before 
<br>
checking whether we should return ENOSYS and friends.
<br>
<p>Brice
<br>
<p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0620/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0620/fix_tids.patch">fix_tids.patch</a>
</ul>
<!-- attachment="fix_tids.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0621.php">Vlad: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<li><strong>Previous message:</strong> <a href="0619.php">Samuel Thibault: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<li><strong>In reply to:</strong> <a href="0617.php">Vlad: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0621.php">Vlad: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<li><strong>Reply:</strong> <a href="0621.php">Vlad: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<li><strong>Reply:</strong> <a href="0622.php">Vlad: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
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
