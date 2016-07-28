<?
$subject_val = "[hwloc-announce] Hardware Locality (hwloc) v1.5.2, v1.4.3, v1.3.3 released";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  4 02:07:29 2013" -->
<!-- isoreceived="20130304070729" -->
<!-- sent="Mon, 04 Mar 2013 08:07:22 +0100" -->
<!-- isosent="20130304070722" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-announce] Hardware Locality (hwloc) v1.5.2, v1.4.3, v1.3.3 released" -->
<!-- id="5134482A.1010800_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="512B2A35.8050907_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-announce] Hardware Locality (hwloc) v1.5.2, v1.4.3, v1.3.3 released<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-04 02:07:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0056.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.7rc1 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2013/02/0054.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.5.2rc1, v1.4.3rc1, v1.3.3rc1 released"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2013/02/0054.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.5.2rc1, v1.4.3rc1, v1.3.3rc1 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All these rc1 became the final v1.5.2, v1.4.3 and v1.3.3 releases
<br>
without any change.
<br>
<p>Brice
<br>
<p><p><p><p><p>Le 25/02/2013 10:09, Brice Goglin a &#233;crit :
<br>
<span class="quotelev1">&gt; The Hardware Locality (hwloc) team is pleased to announce the first
</span><br>
<span class="quotelev1">&gt; release candidates of v1.5.2, v1.4.3 and v1.3.3:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The main reason for these releases is to fix a license issue. The GPL
</span><br>
<span class="quotelev1">&gt; license of libpci/pciutils taints hwloc whenever you link with it
</span><br>
<span class="quotelev1">&gt; (making hwloc *not BSD* anymore).
</span><br>
<span class="quotelev1">&gt; We now use libpciaccess (from X.org) by default instead of libpci.
</span><br>
<span class="quotelev1">&gt; See the Installation section in the documentation for details.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; People are encouraged to upgrade to hwloc v1.6.2 as soon as possible.
</span><br>
<span class="quotelev1">&gt; If upgrading is not possible at the moment, these new releases will
</span><br>
<span class="quotelev1">&gt; fix the above license issue in the meantime.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that v1.3.3rc1 and v1.4.3rc1 *do not fix all known bugs* in their
</span><br>
<span class="quotelev1">&gt; branch. Aside from including libpciaccess for the above issue, they
</span><br>
<span class="quotelev1">&gt; only bring some minor changes that were already queued. Also we won't
</span><br>
<span class="quotelev1">&gt; release the corresponding &gt;indows builds because pciutils could not be
</span><br>
<span class="quotelev1">&gt; used under Windows anyway.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; v1.5.2rc1 does fix all known bugs in the v1.5 series (and this one
</span><br>
<span class="quotelev1">&gt; comes with a Windows build). The following is a summary of the changes
</span><br>
<span class="quotelev1">&gt; since v1.5.1:
</span><br>
<span class="quotelev1">&gt; * Use libpciaccess instead of pciutils/libpci by default for I/O discovery.
</span><br>
<span class="quotelev1">&gt;   pciutils/libpci is only used if --enable-libpci is given to configure
</span><br>
<span class="quotelev1">&gt;   because its GPL license may taint hwloc. See the Installation section
</span><br>
<span class="quotelev1">&gt;   in the documentation for details.
</span><br>
<span class="quotelev1">&gt; * Fix get_cpubind on Solaris when bound to a single PU with
</span><br>
<span class="quotelev1">&gt;   processor_bind(). Thanks to Eugene Loh for reporting the problem
</span><br>
<span class="quotelev1">&gt;   and providing a patch.
</span><br>
<span class="quotelev1">&gt; * Fix some DIR descriptor leaks on Linux.
</span><br>
<span class="quotelev1">&gt; * Fix I/O device lists when some were filtered out after a XML import.
</span><br>
<span class="quotelev1">&gt; * Add missing Backend string info on Solaris in most cases.
</span><br>
<span class="quotelev1">&gt; * Fix the removal of I/O objects when importing a I/O-enabled XML topology
</span><br>
<span class="quotelev1">&gt;   without any I/O topology flag.
</span><br>
<span class="quotelev1">&gt; * Fix the output of hwloc-calc -H --hierarchical when using logical
</span><br>
<span class="quotelev1">&gt;   indexes in the output.
</span><br>
<span class="quotelev1">&gt; * Fix the pkg-config output with --libs --static.
</span><br>
<span class="quotelev1">&gt;   Thanks to Erik Schnetter for reporting one of the problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0056.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.7rc1 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2013/02/0054.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.5.2rc1, v1.4.3rc1, v1.3.3rc1 released"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2013/02/0054.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.5.2rc1, v1.4.3rc1, v1.3.3rc1 released"</a>
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
