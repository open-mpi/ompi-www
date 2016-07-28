<?
$subject_val = "[hwloc-devel] get cpu where a process/thread is executing";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  8 11:31:03 2011" -->
<!-- isoreceived="20110208163103" -->
<!-- sent="Tue, 08 Feb 2011 17:30:54 +0100" -->
<!-- isosent="20110208163054" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] get cpu where a process/thread is executing" -->
<!-- id="4D516FBE.80704_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-devel] get cpu where a process/thread is executing<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-08 11:30:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1916.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3168"</a>
<li><strong>Previous message:</strong> <a href="1914.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1.2a1r3165)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1923.php">Samuel Thibault: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>Maybe reply:</strong> <a href="1923.php">Samuel Thibault: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>Maybe reply:</strong> <a href="1924.php">Samuel Thibault: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>Maybe reply:</strong> <a href="1936.php">Samuel Thibault: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>Maybe reply:</strong> <a href="1940.php">Samuel Thibault: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here's a draft of patch to add the ability to know where a thread/proc
<br>
is currently running [39]
<br>
<p>If we only support single threads, we can return a single CPU number. If
<br>
we support multithreaded processes, we must return multiple numbers. So
<br>
I am returning a cpuset here.
<br>
<p>The API (get_cpuexec and get_proc_cpuexec) is similar to get_cpubind
<br>
(for current thread or process) and get_proc_cpubind (for a random PID)
<br>
and the implementation would use similar backend methods (I only
<br>
implemented get_proc_cpubind, in the monothreaded case for now).
<br>
<p>Two questions:
<br>
* I am not such a big fan of get_cpuexec and get_proc_cpuexec names, any
<br>
better names?
<br>
* Do we want something to retrieve the current location of pages in
<br>
memory too? Linux can do this on a page per page basis with the
<br>
move_pages syscall
<br>
<p>Brice
<br>
<p>[39] <a href="https://svn.open-mpi.org/trac/hwloc/ticket/39">https://svn.open-mpi.org/trac/hwloc/ticket/39</a>
<br>
<p><p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1915/cpuexec.patch">cpuexec.patch</a>
</ul>
<!-- attachment="cpuexec.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1916.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3168"</a>
<li><strong>Previous message:</strong> <a href="1914.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1.2a1r3165)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1923.php">Samuel Thibault: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>Maybe reply:</strong> <a href="1923.php">Samuel Thibault: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>Maybe reply:</strong> <a href="1924.php">Samuel Thibault: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>Maybe reply:</strong> <a href="1936.php">Samuel Thibault: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>Maybe reply:</strong> <a href="1940.php">Samuel Thibault: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
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
