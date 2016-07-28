<?
$subject_val = "[hwloc-devel] hwloc on PPC64";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 11 13:48:38 2010" -->
<!-- isoreceived="20100711174838" -->
<!-- sent="Sun, 11 Jul 2010 19:48:29 +0200" -->
<!-- isosent="20100711174829" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc on PPC64" -->
<!-- id="201007111948.30293.jhladky_at_redhat.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc on PPC64<br>
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-11 13:48:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1149.php">Brice Goglin: "Re: [hwloc-devel] hwloc on PPC64"</a>
<li><strong>Previous message:</strong> <a href="1147.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2301)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1149.php">Brice Goglin: "Re: [hwloc-devel] hwloc on PPC64"</a>
<li><strong>Reply:</strong> <a href="1149.php">Brice Goglin: "Re: [hwloc-devel] hwloc on PPC64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I have run into two bugs on PPC64 on 2.6.32 kernel.
<br>
<p>Version:
<br>
lt-lstopo 1.0.1
<br>
<p>BUG #1: No Socket information in lstopo output:
<br>
<p>./lstopo
<br>
Machine (3654MB) + L2 #0 (4096KB)
<br>
&nbsp;&nbsp;L1 #0 (64KB) + Core #0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #0 (phys=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #1 (phys=1)
<br>
&nbsp;&nbsp;L1 #1 (64KB) + Core #1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #2 (phys=2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #3 (phys=3)
<br>
<p>Fixed in the latest version (tried hwloc-1.1a1r2301.tar.gz)
<br>
lt-lstopo 1.1a1
<br>
./lstopo
<br>
Machine (3654MB) + Socket #0 + L2 #0 (4096KB)
<br>
&nbsp;&nbsp;L1 #0 (64KB) + Core #0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #0 (phys=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #1 (phys=1)
<br>
&nbsp;&nbsp;L1 #1 (64KB) + Core #1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #2 (phys=2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #3 (phys=3)
<br>
<p>I have attached /proc/cpuinfo (&quot;bug_1-ppc64-cpuinfo&quot;)
<br>
<p>BUG #2
<br>
On some PPC64, kernel 2.6.32 I have crash when running 
<br>
$ lstopo a.txt
<br>
Segmentation fault (core dumped)
<br>
$ gdb /usr/local/bin/lstopo core.8771
<br>
Program terminated with signal 11, Segmentation fault.
<br>
#0  0x00000000100060b4 in .merge ()
<br>
<p>It appears only on some PPC64 boxes.
<br>
<p>This issue is also gone with in the latest version (tried 
<br>
hwloc-1.1a1r2301.tar.gz)
<br>
<p>I wonder if you are aware of these problems. let me know if you need more 
<br>
details.
<br>
<p>Thanks
<br>
Jirka
<br>
<p><p><p>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1148/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1148/bug_1-ppc64-cpuinfo">bug_1-ppc64-cpuinfo</a>
</ul>
<!-- attachment="bug_1-ppc64-cpuinfo" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1148/bug2-cpuinfo">bug2-cpuinfo</a>
</ul>
<!-- attachment="bug2-cpuinfo" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1149.php">Brice Goglin: "Re: [hwloc-devel] hwloc on PPC64"</a>
<li><strong>Previous message:</strong> <a href="1147.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2301)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1149.php">Brice Goglin: "Re: [hwloc-devel] hwloc on PPC64"</a>
<li><strong>Reply:</strong> <a href="1149.php">Brice Goglin: "Re: [hwloc-devel] hwloc on PPC64"</a>
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
