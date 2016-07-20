<?
$subject_val = "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 23 10:23:37 2012" -->
<!-- isoreceived="20120423142337" -->
<!-- sent="Mon, 23 Apr 2012 16:23:21 +0200" -->
<!-- isosent="20120423142321" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux" -->
<!-- id="4F9565D9.2020703_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="951A4FC2-0F40-4F82-B8DE-A83FBC818661_at_demoninsight.com" -->
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
<strong>Date:</strong> 2012-04-23 10:23:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2012/05/0624.php">Jeff Hammond: "[hwloc-users] Blue Gene/Q support"</a>
<li><strong>Previous message:</strong> <a href="0622.php">Vlad: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<li><strong>In reply to:</strong> <a href="0622.php">Vlad: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0619.php">Samuel Thibault: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 23/04/2012 16:13, Vlad wrote:
<br>
<span class="quotelev1">&gt; This one seems fine, too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that it should always be possible to read at least the current 
</span><br>
<span class="quotelev1">&gt; thread's /proc data.
</span><br>
<p>This code also works when the task reading the cpubinding/location is 
<br>
not part of the process it looks at.
<br>
<p>Brice
<br>
<p><span class="quotelev1">&gt; In my workaround, should I run out of retries I default to 
</span><br>
<span class="quotelev1">&gt; hwloc_get_last_cpu_location(... HWLOC_CPUBIND_THREAD) -- since 
</span><br>
<span class="quotelev1">&gt; presumably that can't fail and the result is technically valid given 
</span><br>
<span class="quotelev1">&gt; hwloc_get_last_cpu_location() semantics (it reads state that's 
</span><br>
<span class="quotelev1">&gt; inherently transient).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 23, 2012, at 7:53 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 21/04/2012 23:36, Vlad wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 21, 2012, at 5:26 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 21/04/2012 23:08, Vlad wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Greetings,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I use hwloc-1.4.1 stable on Red Hat 5 and am seeing a possible 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; concurrency issue not covered by the &quot;Thread Safety&quot; guidelines:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - I start a small number (4) of threads,  each of which does some 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; work and periodically executes hwloc_get_last_cpu_location() with 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; HWLOC_CPUBIND_PROCESS
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - occasionally, one or two of those threads will see the call fail 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with ENOSYS (even though the same call has already executed 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; successfully a number of times)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; These errors are transient and seem to occur only when some of the 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; threads in the group are terminating. I've skimmed through the 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; implementation in topology-linux.c and it seems plausible to me 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that the errors could be caused by failure to read /proc state 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;atomically&quot; in the presence of concurrent thread starts/exits.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Of course, the latter is hard (impossible ?) to do because the 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; state always changes and a snapshot can only be obtained with a 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; single read() (which in turn would require knowing how many thread 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; entries to expect in advance). However, returning ENOSYS in such 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cases does not seems intended but rather a flaw in retry logic. 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Similar issues may be present with other API methods that rely on 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hwloc_linux_foreach_proc_tid() orhwloc_linux_get_proc_tids().
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can you try the attached patch? It doesn't abort the loop 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; immediately on per-tid errors anymore. This may work better when 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; threads disappear. I don't remember if the retry logic was written 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; while thinking about adding threads only or about adding and 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; removing threads.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If the patch doesn't help, can you send your code to help debug things?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Will try this within a day or two. At the moment I am simply using a 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; retry loop on ENOSYS and usually no more than one retry is needed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's a possibly better patch. It lets the retry logic happen before 
</span><br>
<span class="quotelev2">&gt;&gt; checking whether we should return ENOSYS and friends.
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0623/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2012/05/0624.php">Jeff Hammond: "[hwloc-users] Blue Gene/Q support"</a>
<li><strong>Previous message:</strong> <a href="0622.php">Vlad: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<li><strong>In reply to:</strong> <a href="0622.php">Vlad: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0619.php">Samuel Thibault: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
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
