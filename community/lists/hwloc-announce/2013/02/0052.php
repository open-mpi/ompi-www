<?
$subject_val = "[hwloc-announce] Hardware locality (hwloc) v1.6.1rc2 released";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 18 05:47:48 2013" -->
<!-- isoreceived="20130218104748" -->
<!-- sent="Mon, 18 Feb 2013 11:47:43 +0100" -->
<!-- isosent="20130218104743" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-announce] Hardware locality (hwloc) v1.6.1rc2 released" -->
<!-- id="512206CF.70106_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-announce] Hardware locality (hwloc) v1.6.1rc2 released<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-18 05:47:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0053.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.6.2 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2013/01/0051.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.6.1 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Hardware Locality (hwloc) team is pleased to announce the first
<br>
release candidate of v1.6.2:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
<br>
<p>v1.6.2 is a bug fix release which addresses all known bugs in the
<br>
v1.6 serie and improves a couple minor points.
<br>
<p>The main reason for this release is to fix a license issue. The GPL
<br>
license of libpci/pciutils taints hwloc whenever you link with it
<br>
(making hwloc *not BSD* anymore).
<br>
We now use libpciaccess (from X.org) by default instead of libpci.
<br>
See the Installation section in the documentation for details.
<br>
We will also release fixed releases of previous branches later
<br>
(at least v1.5.2 and likely v1.4.3 and v1.3.3).
<br>
<p><p>The following is a summary of the changes since v1.6:
<br>
<p>* Use libpciaccess instead of pciutils/libpci by default for I/O discovery.
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
<p>This release does not change anything related to Windows, so I will
<br>
only upload the winzips of the final v1.6.2.
<br>
<p><pre>
--
Brice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0053.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.6.2 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2013/01/0051.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.6.1 released"</a>
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
