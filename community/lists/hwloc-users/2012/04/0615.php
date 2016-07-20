<?
$subject_val = "[hwloc-users] possible concurrency issue with reading /proc data on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 21 17:08:51 2012" -->
<!-- isoreceived="20120421210851" -->
<!-- sent="Sat, 21 Apr 2012 17:08:44 -0400" -->
<!-- isosent="20120421210844" -->
<!-- name="Vlad" -->
<!-- email="vlad_at_[hidden]" -->
<!-- subject="[hwloc-users] possible concurrency issue with reading /proc data on Linux" -->
<!-- id="18CA9B93-9B52-494C-8331-87147816C21A_at_demoninsight.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0BD30543-4088-43A1-94CD-BA81F6E39128_at_gmail.com" -->
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
<strong>Subject:</strong> [hwloc-users] possible concurrency issue with reading /proc data on Linux<br>
<strong>From:</strong> Vlad (<em>vlad_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-21 17:08:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0616.php">Brice Goglin: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<li><strong>Previous message:</strong> <a href="0614.php">Jeffrey Squyres: "Re: [hwloc-users] Using distances"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0616.php">Brice Goglin: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<li><strong>Reply:</strong> <a href="0616.php">Brice Goglin: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<li><strong>Maybe reply:</strong> <a href="0619.php">Samuel Thibault: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I use hwloc-1.4.1 stable on Red Hat 5 and am seeing a possible concurrency issue not covered by the &quot;Thread Safety&quot; guidelines:
<br>
<p>- I start a small number (4) of threads,  each of which does some work and periodically executes hwloc_get_last_cpu_location() with HWLOC_CPUBIND_PROCESS
<br>
- occasionally, one or two of those threads will see the call fail with ENOSYS (even though the same call has already executed successfully a number of times)
<br>
<p>These errors are transient and seem to occur only when some of the threads in the group are terminating. I've skimmed through the implementation in topology-linux.c and it seems plausible to me that the errors could be caused by failure to read /proc state &quot;atomically&quot; in the presence of concurrent thread starts/exits.
<br>
<p>Of course, the latter is hard (impossible ?) to do because the state always changes and a snapshot can only be obtained with a single read() (which in turn would require knowing how many thread entries to expect in advance). However, returning ENOSYS in such cases does not seems intended but rather a flaw in retry logic. Similar issues may be present with other API methods that rely on hwloc_linux_foreach_proc_tid() or hwloc_linux_get_proc_tids().
<br>
<p>An alternative explanation could be that the retry logic is correct but the implementation relies on readdir(), which is documented to not be thread-safe: <a href="http://www.gnu.org/software/libc/manual/html_node/Reading_002fClosing-Directory.html">http://www.gnu.org/software/libc/manual/html_node/Reading_002fClosing-Directory.html</a>
<br>
<p>Regards,
<br>
Vlad
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0615/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0616.php">Brice Goglin: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<li><strong>Previous message:</strong> <a href="0614.php">Jeffrey Squyres: "Re: [hwloc-users] Using distances"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0616.php">Brice Goglin: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<li><strong>Reply:</strong> <a href="0616.php">Brice Goglin: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
<li><strong>Maybe reply:</strong> <a href="0619.php">Samuel Thibault: "Re: [hwloc-users] possible concurrency issue with reading /proc data on Linux"</a>
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
