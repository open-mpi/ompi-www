<?
$subject_val = "[hwloc-announce] Hardware locality (hwloc) v1.6 released";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  3 10:00:21 2012" -->
<!-- isoreceived="20121203150021" -->
<!-- sent="Mon, 03 Dec 2012 07:00:15 -0800" -->
<!-- isosent="20121203150015" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-announce] Hardware locality (hwloc) v1.6 released" -->
<!-- id="50BCBE7F.5020203_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-announce] Hardware locality (hwloc) v1.6 released<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-03 10:00:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2013/01/0049.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.6.1rc1 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2012/11/0047.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.6rc2 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Hardware Locality (hwloc) team is pleased to announce the release
<br>
of v1.6:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
<br>
<p>v1.6 is a major new release series.  It includes many new features and
<br>
changes over the v1.5.x series.  It brings a significant rework of the
<br>
core which eases the combining of multiple topology discovery sources,
<br>
and future additions of new sources. Some components may also now be
<br>
built and loaded as separate plugins, which should make distribution
<br>
packagers' life easier.
<br>
<p>Aside of this core rework, we have the usual set of small API additions
<br>
(one may now export/import its own custom private data to XML), new
<br>
command-line tools (hwloc-annotate), new command-line options, some
<br>
small discovery improvements.
<br>
<p><p>Version 1.6.0
<br>
-------------
<br>
* Major changes
<br>
&nbsp;&nbsp;+ Reorganize the backend infrastructure to support dynamic selection
<br>
&nbsp;&nbsp;&nbsp;&nbsp;of components and dynamic loading of plugins. For details, see the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;new documentation section Components and plugins.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- The HWLOC_COMPONENTS variable lets one replace the default discovery
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;components.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Dynamic loading of plugins may be enabled with --enable-plugins
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(except on AIX and Windows). It will build libxml2 and libpci
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;support as separated modules. This helps reducing the dependencies
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;of the core hwloc library when distributed as a binary package.
<br>
* Backends
<br>
&nbsp;&nbsp;+ Add CPUModel detection on Darwin and x86/FreeBSD.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Thanks to Robin Scher for providing ways to implement this.
<br>
&nbsp;&nbsp;+ The x86 backend now adds CPUModel info attributes to socket objects
<br>
&nbsp;&nbsp;&nbsp;&nbsp;created by other backends that do not natively support this attribute.
<br>
&nbsp;&nbsp;+ Fix detection on FreeBSD in case of cpuset restriction. Thanks to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Sebastian Kuzminsky for reporting the problem.
<br>
* XML
<br>
&nbsp;&nbsp;+ Add hwloc_topology_set_userdata_import/export_callback(),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_export_obj_userdata() and _userdata_base64() to let
<br>
&nbsp;&nbsp;&nbsp;&nbsp;applications specify how to save/restore the custom data they placed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;in the userdata private pointer field of hwloc objects.
<br>
* Tools
<br>
&nbsp;&nbsp;+ Add hwloc-annotate program to add string info attributes to XML
<br>
&nbsp;&nbsp;&nbsp;&nbsp;topologies.
<br>
&nbsp;&nbsp;+ Add --pid-cmd to hwloc-ps to append the output of a command to each
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PID line. May be used for showing Open MPI process ranks, see the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc-ps(1) manpage for details.
<br>
&nbsp;&nbsp;+ hwloc-bind now exits with an error if binding fails; the executable
<br>
&nbsp;&nbsp;&nbsp;&nbsp;is not launched unless binding suceeeded or --force was given.
<br>
&nbsp;&nbsp;+ Add --quiet to hwloc-calc and hwloc-bind to hide non-fatal error
<br>
&nbsp;&nbsp;&nbsp;&nbsp;messages.
<br>
&nbsp;&nbsp;+ Fix command-line pid support in windows tools.
<br>
&nbsp;&nbsp;+ All programs accept --verbose as a synonym to -v.
<br>
* Misc
<br>
&nbsp;&nbsp;+ Fix some DIR descriptor leaks on Linux.
<br>
&nbsp;&nbsp;+ Fix I/O device lists when some were filtered out after a XML import.
<br>
&nbsp;&nbsp;+ Fix the removal of I/O objects when importing a I/O-enabled XML topology
<br>
&nbsp;&nbsp;&nbsp;&nbsp;without any I/O topology flag.
<br>
&nbsp;&nbsp;+ When merging objects with HWLOC_IGNORE_TYPE_KEEP_STRUCTURE or
<br>
&nbsp;&nbsp;&nbsp;&nbsp;lstopo --merge, compare object types before deciding which one of two
<br>
&nbsp;&nbsp;&nbsp;&nbsp;identical object to remove (e.g. keep sockets in favor of caches).
<br>
&nbsp;&nbsp;+ Add some GUID- and LID-related info attributes to OpenFabrics
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OS devices.
<br>
&nbsp;&nbsp;+ Only add CPUType socket attributes on Solaris/Sparc. Other cases
<br>
&nbsp;&nbsp;&nbsp;&nbsp;don't report reliable information (Solaris/x86), and a replacement
<br>
&nbsp;&nbsp;&nbsp;&nbsp;is available as the Architecture string info in the Machine object.
<br>
&nbsp;&nbsp;+ Add missing Backend string info on Solaris in most cases.
<br>
&nbsp;&nbsp;+ Document object attributes and string infos in a new Attributes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;section in the documentation.
<br>
&nbsp;&nbsp;+ Add a section about Synthetic topologies in the documentation.
<br>
<p><p><pre>
--
Brice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2013/01/0049.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.6.1rc1 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2012/11/0047.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.6rc2 released"</a>
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
