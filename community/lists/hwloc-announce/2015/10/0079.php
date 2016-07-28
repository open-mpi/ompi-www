<?
$subject_val = "[hwloc-announce] Hardware Locality (hwloc) v1.11.1rc1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  6 17:31:52 2015" -->
<!-- isoreceived="20151006213152" -->
<!-- sent="Tue, 6 Oct 2015 23:31:47 +0200" -->
<!-- isosent="20151006213147" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-announce] Hardware Locality (hwloc) v1.11.1rc1 released" -->
<!-- id="56143DC3.6030404_at_inria.fr" -->
<!-- charset="utf-8" -->
<!-- inreplyto="56143D91.2090205_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-announce] Hardware Locality (hwloc) v1.11.1rc1 released<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-06 17:31:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0080.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.11.1 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2015/06/0078.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.11.0 release"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Hardware Locality (hwloc) team is pleased to announce the first
<br>
release candidate of v1.11.1.
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
<br>
<p>v1.11.1 will be a bug fix release which addresses all known bugs in the
<br>
v1.11 series.
<br>
<p>The following is a summary of the changes since v1.11:
<br>
<p>* Detection fixes
<br>
&nbsp;&nbsp;+ Hardwire the topology of Fujitsu K-computer, FX10, FX100 servers to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;workaround buggy Linux kernels.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Thanks to Takahiro Kawashima and Gilles Gouaillardet.
<br>
&nbsp;&nbsp;+ Fix L3 cache information on AMD Opteron 61xx Magny-Cours processors
<br>
&nbsp;&nbsp;&nbsp;&nbsp;in the x86 backend. Thanks to Guillaume Beauchamp for the patch.
<br>
&nbsp;&nbsp;+ Detect block devices directly attached to PCI without a controller,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for instance NVMe disks. Thanks to Barry M. Tannenbaum.
<br>
&nbsp;&nbsp;+ Add the PCISlot attribute to all PCI functions instead of only the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;first one.
<br>
* Miscellaneous internal fixes
<br>
&nbsp;&nbsp;+ Ignore PCI bridges that could fail assertions by reporting buggy
<br>
&nbsp;&nbsp;&nbsp;&nbsp;secondary-subordinate bus numbers
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Thanks to George Bosilca for reporting the issue.
<br>
&nbsp;&nbsp;+ Fix an overzealous assertion when inserting an intermediate Group object
<br>
&nbsp;&nbsp;&nbsp;&nbsp;while Groups are totally ignored.
<br>
&nbsp;&nbsp;+ Fix a memory leak on failure to load a xml diff file.
<br>
&nbsp;&nbsp;+ Fix some segfaults when inputting an invalid synthetic description.
<br>
* Many fixes and improvements in the Windows backend:
<br>
&nbsp;&nbsp;+ Fix the discovery of more than 32 processors and multiple processor
<br>
&nbsp;&nbsp;&nbsp;&nbsp;groups. Thanks to Barry M. Tannenbaum for the help.
<br>
&nbsp;&nbsp;+ Add thread binding set support in case of multiple process groups.
<br>
&nbsp;&nbsp;+ Add thread binding get support.
<br>
&nbsp;&nbsp;+ Add get_last_cpu_location() support for the current thread.
<br>
&nbsp;&nbsp;+ Disable the unsupported process binding in case of multiple processor
<br>
&nbsp;&nbsp;&nbsp;&nbsp;groups.
<br>
&nbsp;&nbsp;+ Fix/update the Visual Studio support under contrib/windows.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Thanks to Eloi Gaudry for the help.
<br>
* Tools fixes
<br>
&nbsp;&nbsp;+ Fix a segfault when displaying logical indexes in the graphical lstopo.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Thanks to Guillaume Mercier for reporting the issue.
<br>
&nbsp;&nbsp;+ Fix lstopo linking with X11 libraries, for instance on Mac OS X.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Thanks to Scott Atchley and Pierre Ramet for reporting the issue.
<br>
&nbsp;&nbsp;+ hwloc-annotate, hwloc-diff and hwloc-patch do not drop unavailable
<br>
&nbsp;&nbsp;&nbsp;&nbsp;resources from the output anymore and those may be annotated as well.
<br>
&nbsp;&nbsp;+ Command-line tools may now import XML from the standard input with -i -.xml
<br>
<p><pre>
--
Brice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0080.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.11.1 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2015/06/0078.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.11.0 release"</a>
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
