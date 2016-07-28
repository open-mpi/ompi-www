<?
$subject_val = "[hwloc-announce] Hardware locality (hwloc) v1.6rc1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 13 07:44:13 2012" -->
<!-- isoreceived="20121113124413" -->
<!-- sent="Tue, 13 Nov 2012 05:44:02 -0700" -->
<!-- isosent="20121113124402" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-announce] Hardware locality (hwloc) v1.6rc1 released" -->
<!-- id="50A24092.1040803_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-announce] Hardware locality (hwloc) v1.6rc1 released<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-13 07:44:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0047.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.6rc2 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2012/10/0045.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.5.1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0047.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.6rc2 released"</a>
<li><strong>Reply:</strong> <a href="0047.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.6rc2 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Hardware Locality (hwloc) team is pleased to announce the first
<br>
release candidate for v1.6:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
<br>
<p>v1.6rc1 is the first milestone of a major feature release. It brings
<br>
a significant rework of the core which eases the combining of multiple
<br>
topology discovery sources, and future additions of new sources.
<br>
Some components may also now be built and loaded as separate plugins,
<br>
which should make distribution packagers' life easier.
<br>
<p>Aside of this core rework, we have the usual set of small API additions
<br>
(one may now export/import its own custom private data to XML), new
<br>
command-line tools (hwloc-annotate), new command-line options, some
<br>
small discovery improvements.
<br>
<p>They are also a couple bug fixes that were waiting for a v1.5.2 release,
<br>
that may or may not ever exist.
<br>
<p>Please test it, and feel free to pass by the Inria booth at SC12
<br>
(#1209) to discuss all this and/or report problems.
<br>
<p><pre>
--
Brice
Version 1.6.0
-------------
* Major changes
  + Reorganize the backend infrastructure to support dynamic selection
    of components and dynamic loading of plugins. For details, see the
    new documentation section Components and plugins.
    - The HWLOC_COMPONENTS variable lets one replace the default discovery
      components.
    - Dynamic loading of plugins may be enabled with --enable-plugins
      (except on AIX and Windows). It will build libxml2 and libpci
      support as separated modules. This helps reducing the dependencies
      of the core hwloc library when distributed as a binary package.
* Backends
  + Add CPUModel detection on Darwin and x86/FreeBSD.
    Thanks to Robin Scher for providing ways to implement this.
  + The x86 backend now adds CPUModel info attributes to socket objects
    created by other backends that do not natively support this attribute.
  + Fix detection on FreeBSD in case of cpuset restriction. Thanks to
    Sebastian Kuzminsky for reporting the problem.
* XML
  + Add hwloc_topology_set_userdata_import/export_callback(),
    hwloc_export_obj_userdata() and _userdata_base64() to let
    applications specify how to save/restore the custom data they placed
    in the userdata private pointer field of hwloc objects.
* Tools
  + Add hwloc-annotate program to add string info attributes to XML
    topologies.
  + Add --pid-cmd to hwloc-ps to append the output of a command to each
    PID line. May be used for showing Open MPI process ranks, see the
    hwloc-ps(1) manpage for details.
  + hwloc-bind now exits with an error if binding fails; the executable
    is not launched unless binding suceeeded or --force was given.
  + Add --quiet to hwloc-calc and hwloc-bind to hide non-fatal error
    messages.
  + Fix command-line pid support in windows tools.
  + All programs accept --verbose as a synonym to -v.
* Misc
  + Fix some DIR descriptor leaks on Linux.
  + Fix I/O device lists when some were filtered out after a XML import.
  + Add missing Backend string info on Solaris in most cases.
  + When merging objects with HWLOC_IGNORE_TYPE_KEEP_STRUCTURE or
    lstopo --merge, compare object types before deciding which one of two
    identical object to remove (e.g. keep sockets in favor of caches).
  + Add some GUID- and LID-related info attributes to OpenFabrics
    OS devices.
  + Only add CPUType socket attributes on Solaris/Sparc. Other cases
    don't report reliable information (Solaris/x86), and a replacement
    is available as the Architecture string info in the Machine object.
  + Document object attributes and string infos in a new Attributes
    section in the documentation.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0047.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.6rc2 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2012/10/0045.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.5.1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0047.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.6rc2 released"</a>
<li><strong>Reply:</strong> <a href="0047.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.6rc2 released"</a>
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
