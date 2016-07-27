<?
$subject_val = "[hwloc-devel] preparing v1.10";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  1 05:48:04 2014" -->
<!-- isoreceived="20140901094804" -->
<!-- sent="Mon, 01 Sep 2014 11:48:02 +0200" -->
<!-- isosent="20140901094802" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] preparing v1.10" -->
<!-- id="540440D2.6010800_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-devel] preparing v1.10<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-01 05:48:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4190.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-195-gf100263)"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/08/4188.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-193-g4f9ea6c)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
I am planning to release v1.10 soon. We don't have any new big feature,
<br>
just random improvements everywhere, see below. If there's something
<br>
important you want now, please speak up quickly.
<br>
thanks
<br>
Brice
<br>
<p><p><p>* API
<br>
&nbsp;&nbsp;+ hwloc_distrib() does not ignore any objects anymore when there are
<br>
&nbsp;&nbsp;&nbsp;&nbsp;too many of them. They get merged with others instead.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Thanks to Tim Creech for reporting the issue.
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
* Misc
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4190.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-195-gf100263)"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/08/4188.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-193-g4f9ea6c)"</a>
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
