<?
$subject_val = "[hwloc-announce] Hardware Locality (hwloc) v1.5.2rc1, v1.4.3rc1, v1.3.3rc1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 25 04:09:14 2013" -->
<!-- isoreceived="20130225090914" -->
<!-- sent="Mon, 25 Feb 2013 10:09:09 +0100" -->
<!-- isosent="20130225090909" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-announce] Hardware Locality (hwloc) v1.5.2rc1, v1.4.3rc1, v1.3.3rc1 released" -->
<!-- id="512B2A35.8050907_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-announce] Hardware Locality (hwloc) v1.5.2rc1, v1.4.3rc1, v1.3.3rc1 released<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-25 04:09:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2013/03/0055.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.5.2, v1.4.3, v1.3.3 released"</a>
<li><strong>Previous message:</strong> <a href="0053.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.6.2 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2013/03/0055.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.5.2, v1.4.3, v1.3.3 released"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2013/03/0055.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.5.2, v1.4.3, v1.3.3 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Hardware Locality (hwloc) team is pleased to announce the first
<br>
release candidates of v1.5.2, v1.4.3 and v1.3.3:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
<br>
<p>The main reason for these releases is to fix a license issue. The GPL
<br>
license of libpci/pciutils taints hwloc whenever you link with it
<br>
(making hwloc *not BSD* anymore).
<br>
We now use libpciaccess (from X.org) by default instead of libpci.
<br>
See the Installation section in the documentation for details.
<br>
<p>People are encouraged to upgrade to hwloc v1.6.2 as soon as possible.
<br>
If upgrading is not possible at the moment, these new releases will
<br>
fix the above license issue in the meantime.
<br>
<p><p>Note that v1.3.3rc1 and v1.4.3rc1 *do not fix all known bugs* in their
<br>
branch. Aside from including libpciaccess for the above issue, they
<br>
only bring some minor changes that were already queued. Also we won't
<br>
release the corresponding &gt;indows builds because pciutils could not be
<br>
used under Windows anyway.
<br>
<p><p>v1.5.2rc1 does fix all known bugs in the v1.5 series (and this one
<br>
comes with a Windows build). The following is a summary of the changes
<br>
since v1.5.1:
<br>
* Use libpciaccess instead of pciutils/libpci by default for I/O discovery.
<br>
&nbsp;&nbsp;pciutils/libpci is only used if --enable-libpci is given to configure
<br>
&nbsp;&nbsp;because its GPL license may taint hwloc. See the Installation section
<br>
&nbsp;&nbsp;in the documentation for details.
<br>
* Fix get_cpubind on Solaris when bound to a single PU with
<br>
&nbsp;&nbsp;processor_bind(). Thanks to Eugene Loh for reporting the problem
<br>
&nbsp;&nbsp;and providing a patch.
<br>
* Fix some DIR descriptor leaks on Linux.
<br>
* Fix I/O device lists when some were filtered out after a XML import.
<br>
* Add missing Backend string info on Solaris in most cases.
<br>
* Fix the removal of I/O objects when importing a I/O-enabled XML topology
<br>
&nbsp;&nbsp;without any I/O topology flag.
<br>
* Fix the output of hwloc-calc -H --hierarchical when using logical
<br>
&nbsp;&nbsp;indexes in the output.
<br>
* Fix the pkg-config output with --libs --static.
<br>
&nbsp;&nbsp;Thanks to Erik Schnetter for reporting one of the problems.
<br>
<p><pre>
--
Brice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2013/03/0055.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.5.2, v1.4.3, v1.3.3 released"</a>
<li><strong>Previous message:</strong> <a href="0053.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.6.2 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2013/03/0055.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.5.2, v1.4.3, v1.3.3 released"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2013/03/0055.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.5.2, v1.4.3, v1.3.3 released"</a>
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
