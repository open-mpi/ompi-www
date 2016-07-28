<?
$subject_val = "[hwloc-devel] hwloc powerpc rhel5 and power7 patch";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 16 00:10:16 2010" -->
<!-- isoreceived="20100916041016" -->
<!-- sent="Thu, 16 Sep 2010 14:10:08 +1000" -->
<!-- isosent="20100916041008" -->
<!-- name="Alexey Kardashevskiy" -->
<!-- email="aik_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc powerpc rhel5 and power7 patch" -->
<!-- id="4C9198A0.90309_at_au1.ibm.com" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc powerpc rhel5 and power7 patch<br>
<strong>From:</strong> Alexey Kardashevskiy (<em>aik_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-16 00:10:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1290.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Previous message:</strong> <a href="1288.php">Brice Goglin: "Re: [hwloc-devel] Ordering of cache and cpu objects"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1290.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Reply:</strong> <a href="1290.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Reply:</strong> <a href="1291.php">Brice Goglin: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Maybe reply:</strong> <a href="1301.php">Brice Goglin: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Reply:</strong> <a href="1322.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Maybe reply:</strong> <a href="1326.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Maybe reply:</strong> <a href="1330.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>There are 2 problems with the current HWLOC code. The questions are at 
<br>
the bottom.
<br>
<p>1. Old kernels (RHEL5.*) do expose some numa nodes via sysfs but there 
<br>
is no information regarting cache (L1/L2/L3) and CPU threads. RHEL6 does 
<br>
that. The proposed patch parses PowerPC's /proc/device-tree and add 
<br>
necessary information into the topology.
<br>
<p>2. The HWLOC expects numa nodes to be numbered consecutively, like 
<br>
1-2-3-4-5.... However this is not necessary true for PowerPC with LPARs 
<br>
or on systems with numa hotswap (do they exist? don't know). This was 
<br>
before the patch:
<br>
<p>=========================
<br>
os node 0 has cpuset 0xffffffff
<br>
os node 1 has cpuset 0xffffffff,0x0
<br>
os node 4 has cpuset 0xffffffff,,0x0
<br>
os node 5 has cpuset 0xffffffff,,,0x0
<br>
os node 8 has cpuset 0xffffffff,,,,0x0
<br>
os node 9 has cpuset 0xffffffff,,,,,0x0
<br>
os node 12 has cpuset 0xffffffff,,,,,,0x0
<br>
os node 13 has cpuset 0xffffffff,,,,,,,0x0
<br>
node distance matrix:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0   1   2   3   4   5   6   7   8   9  10  11  12  13
<br>
&nbsp;&nbsp;&nbsp;0  10  20  40  40  40  40  40  40   0   1 128 3596701896   0   1
<br>
&nbsp;&nbsp;&nbsp;1  20  10  40  40  40  40  40  40 4095 3642405872 4095 3642406288   0 
<br>
65536
<br>
&nbsp;&nbsp;&nbsp;2 128 3596490848 4095 3642406160 4095 3642406048   0   0 128 
<br>
3597792932   0   0   0   0
<br>
&nbsp;&nbsp;&nbsp;3 128 3598856792   0   0   0   0   0   1   0 218840   0   1   0   0
<br>
&nbsp;&nbsp;&nbsp;4  40  40  10  20  40  40  40  40 128 3596902928 128 3596700232 4095 
<br>
3642406320
<br>
&nbsp;&nbsp;&nbsp;5  40  40  20  10  40  40  40  40   0   5 4095 3642406432   0   0
<br>
&nbsp;&nbsp;&nbsp;6 4095 3642406256   0   0 128 3596923832 256 276108416 4095 
<br>
3642406272   0   0   0   0
<br>
&nbsp;&nbsp;&nbsp;7   0   0   0   0 256 276173984 128 3598846040   0 191376 128 
<br>
3598846016 256 276108400
<br>
&nbsp;&nbsp;&nbsp;8  40  40  40  40  10  20  40  40 4095 2587230208 4095 2587260160   0   0
<br>
&nbsp;&nbsp;&nbsp;9  40  40  40  40  20  10  40  40 4095 3642406320 4095 3642406464   0   0
<br>
&nbsp;&nbsp;10   0   0   0   0   0   0   0   0   0   0   0   0   0   0
<br>
&nbsp;&nbsp;11   0   0   0   0   0   0   0   0 128 3596680064 128 3596687552 128 
<br>
3596679872
<br>
&nbsp;&nbsp;12  40  40  40  40  40  40  10  20 128 3597793376 128 3598856792 128 
<br>
3597315568
<br>
&nbsp;&nbsp;13  40  40  40  40  40  40  20  10   0   0 128 3598779600 429496729 
<br>
2576980377
<br>
distance matrix asymmetric ([0,2]=40 != [2,0]=128), aborting
<br>
=========================
<br>
<p>This is how it is supposed to look like:
<br>
=========================
<br>
node distance matrix:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0   1   4   5   8   9  12  13
<br>
&nbsp;&nbsp;&nbsp;0  10  20  40  40  40  40  40  40
<br>
&nbsp;&nbsp;&nbsp;1  20  10  40  40  40  40  40  40
<br>
&nbsp;&nbsp;&nbsp;4  40  40  10  20  40  40  40  40
<br>
&nbsp;&nbsp;&nbsp;5  40  40  20  10  40  40  40  40
<br>
&nbsp;&nbsp;&nbsp;8  40  40  40  40  10  20  40  40
<br>
&nbsp;&nbsp;&nbsp;9  40  40  40  40  20  10  40  40
<br>
&nbsp;&nbsp;12  40  40  40  40  40  40  10  20
<br>
&nbsp;&nbsp;13  40  40  40  40  40  40  20  10
<br>
trying to group NUMANode objects into misc objects according to physical 
<br>
distances
<br>
found minimal distance 20 between objects
<br>
object 1 is minimally connected to 0
<br>
found transitive graph with 2 objects with minimal distance 20
<br>
object 3 is minimally connected to 2
<br>
found transitive graph with 2 objects with minimal distance 20
<br>
object 5 is minimally connected to 4
<br>
found transitive graph with 2 objects with minimal distance 20
<br>
object 7 is minimally connected to 6
<br>
found transitive graph with 2 objects with minimal distance 20
<br>
adding misc object with 2 objects and cpuset 0xffffffff,0xffffffff
<br>
adding misc object with 2 objects and cpuset 0xffffffff,0xffffffff,,0x0
<br>
adding misc object with 2 objects and cpuset 0xffffffff,0xffffffff,,,,0x0
<br>
adding misc object with 2 objects and cpuset 0xffffffff,0xffffffff,,,,,,0x0
<br>
group distances:
<br>
15 40 40 40
<br>
40 15 40 40
<br>
40 40 15 40
<br>
40 40 40 15
<br>
trying to group Group objects into misc objects according to physical 
<br>
distances
<br>
found minimal distance 40 between objects
<br>
object 1 is minimally connected to 0
<br>
object 2 is minimally connected to 0
<br>
object 3 is minimally connected to 0
<br>
found transitive graph with 4 objects with minimal distance 40
<br>
=========================
<br>
<p><p>The questions are:
<br>
1. What should I change in my patch to have it committed into the svn? 
<br>
Specifically:
<br>
- where do I put IBM-specific code?
<br>
- may be there is a better way to detect that no cache info was fetched 
<br>
from sysfs
<br>
- is the coding style ok? :-)
<br>
<p>2. Do not I miss something in my patch in order to solve the problems 
<br>
mentioned in the beginning of this mail?
<br>
<p>Thank you.
<br>
<p><p><p><p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1289/hwloc.device-tree.5.patch">hwloc.device-tree.5.patch</a>
</ul>
<!-- attachment="hwloc.device-tree.5.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1290.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Previous message:</strong> <a href="1288.php">Brice Goglin: "Re: [hwloc-devel] Ordering of cache and cpu objects"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1290.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Reply:</strong> <a href="1290.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Reply:</strong> <a href="1291.php">Brice Goglin: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Maybe reply:</strong> <a href="1301.php">Brice Goglin: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Reply:</strong> <a href="1322.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Maybe reply:</strong> <a href="1326.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Maybe reply:</strong> <a href="1330.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
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
