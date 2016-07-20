<?
$subject_val = "[hwloc-announce] Hardware locality (hwloc) v1.10rc1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 24 11:20:45 2014" -->
<!-- isoreceived="20140924152045" -->
<!-- sent="Wed, 24 Sep 2014 17:20:42 +0200" -->
<!-- isosent="20140924152042" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-announce] Hardware locality (hwloc) v1.10rc1 released" -->
<!-- id="5422E14A.5010106_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-announce] Hardware locality (hwloc) v1.10rc1 released<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-24 11:20:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2014/10/0072.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.10.0 release"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2014/08/0070.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.9.1 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Hardware Locality (hwloc) team is pleased to announce the first
<br>
release candidate for v1.10:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
<br>
<p>v1.10rc1 is the first milestone of a major feature release.
<br>
There is no new major feature in this release, just improvements
<br>
everywhere.
<br>
If you are buying new Intel Xeon E5 with 10 cores or more, this
<br>
release is required for proper Socket/NUMA detection until the
<br>
kernel gets fixed.
<br>
<p>* API
<br>
&nbsp;&nbsp;+ Add hwloc_topology_export_synthetic() to export a topology to a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;synthetic string without using lstopo. See the Synthetic topologies
<br>
&nbsp;&nbsp;&nbsp;&nbsp;section in the documentation.
<br>
&nbsp;&nbsp;+ Add hwloc_topology_set/get_userdata() to let the application save
<br>
&nbsp;&nbsp;&nbsp;&nbsp;a private pointer in the topology whenever it needs a way to find
<br>
&nbsp;&nbsp;&nbsp;&nbsp;its own object corresponding to a topology.
<br>
&nbsp;&nbsp;+ Add hwloc_get_numanode_obj_by_os_index() and document that this function
<br>
&nbsp;&nbsp;&nbsp;&nbsp;as well as hwloc_get_pu_obj_by_os_index() are good at converting
<br>
&nbsp;&nbsp;&nbsp;&nbsp;nodesets and cpusets into objects.
<br>
&nbsp;&nbsp;+ hwloc_distrib() does not ignore any objects anymore when there are
<br>
&nbsp;&nbsp;&nbsp;&nbsp;too many of them. They get merged with others instead.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Thanks to Tim Creech for reporting the issue.
<br>
* Tools
<br>
&nbsp;&nbsp;+ hwloc-bind --get &lt;command-line&gt; now executes the command after displaying
<br>
&nbsp;&nbsp;&nbsp;&nbsp;the binding instead of ignoring the command entirely.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Thanks to John Donners for the suggestion.
<br>
&nbsp;&nbsp;+ Clarify that memory sizes shown in lstopo are local by default
<br>
&nbsp;&nbsp;&nbsp;&nbsp;unless specified (total memory added in the root object).
<br>
* Synthetic topologies
<br>
&nbsp;&nbsp;+ Synthetic topology descriptions may now specify attributes such as
<br>
&nbsp;&nbsp;&nbsp;&nbsp;memory sizes and OS indexes. See the Synthetic topologies section
<br>
&nbsp;&nbsp;&nbsp;&nbsp;in the documentation.
<br>
&nbsp;&nbsp;+ lstopo now exports in this fully-detailed format by default.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;The new option --export-synthetic-flags may be used to revert
<br>
&nbsp;&nbsp;&nbsp;&nbsp;back the old format.
<br>
* Documentation
<br>
&nbsp;&nbsp;+ Add the doc/examples/ subdirectory with several real-life examples,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;including the already existing hwloc-hello.C for basics.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Thanks to Rob Aulwes for the suggestion.
<br>
&nbsp;&nbsp;+ Improve the documentation of CPU and memory binding in the API.
<br>
&nbsp;&nbsp;+ Add a FAQ entry about operating system errors, especially on AMD
<br>
&nbsp;&nbsp;&nbsp;&nbsp;platforms with buggy cache information.
<br>
&nbsp;&nbsp;+ Add a FAQ entry about loading many topologies in a single program.
<br>
* Misc
<br>
&nbsp;&nbsp;+ Work around buggy Linux kernels reporting 2 sockets instead
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1 socket with 2 NUMA nodes for each Xeon E5 v3 (Haswell) processor.
<br>
&nbsp;&nbsp;+ pciutils/libpci support is now removed since libpciaccess works
<br>
&nbsp;&nbsp;&nbsp;&nbsp;well and there's also a Linux-specific PCI backend. For the record,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;pciutils was GPL and therefore disabled by default since v1.6.2.
<br>
&nbsp;&nbsp;+ Add --disable-cpuid configure flag to work around buggy processor
<br>
&nbsp;&nbsp;&nbsp;&nbsp;simulators reporting invalid CPUID information.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Thanks for Andrew Friedley for reporting the issue.
<br>
&nbsp;&nbsp;+ Fix a racy use of libltdl when manipulating multiple topologies in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;different threads.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Thanks to Andra Hugo for reporting the issue and testing patches.
<br>
&nbsp;&nbsp;+ The plugin ABI has changed, this release will not load plugins
<br>
&nbsp;&nbsp;&nbsp;&nbsp;built against previous hwloc releases.
<br>
<p>v1.10rc1 also contains some bug fixes that are waiting for a v1.9.2 stable
<br>
release that may or may not ever happen:
<br>
<p>* Fix some build failures in private/misc.h.
<br>
&nbsp;&nbsp;Thanks to Pavan Balaji and Ralph Castain for the reports.
<br>
* Fix failures to detect X11/Xutil.h on some Solaris platforms.
<br>
&nbsp;&nbsp;Thanks to Siegmar Gross for reporting the failure.
<br>
<p><pre>
--
Brice
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-announce/att-0071/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2014/10/0072.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.10.0 release"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2014/08/0070.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.9.1 released"</a>
<!-- nextthread="start" -->
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
