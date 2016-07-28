<?
$subject_val = "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 30 01:50:21 2011" -->
<!-- isoreceived="20110630055021" -->
<!-- sent="Thu, 30 Jun 2011 07:50:14 +0200" -->
<!-- isosent="20110630055014" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp;amp; RHEL 5.6" -->
<!-- id="4E0C0E96.5050001_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E0B0A13.1040203_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-30 01:50:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/07/2225.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3a1r3525)"</a>
<li><strong>Previous message:</strong> <a href="2223.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3a1r3524)"</a>
<li><strong>In reply to:</strong> <a href="2222.php">Brice Goglin: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/07/2234.php">Brice Goglin: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/07/2234.php">Brice Goglin: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 29/06/2011 13:18, Brice Goglin a &#233;crit :
<br>
<span class="quotelev1">&gt; I don't think we finally fixed this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IIRC, we need either a way to bypass the cache, or always add -lresolv
</span><br>
<span class="quotelev1">&gt; even if it's useless (or find another way to detect if lresolv is needed).
</span><br>
<p>Redefining our own HWLOC_AC_CHECK_LIB_NO_CACHE looks possible.
<br>
<p>Otherwise, we could use something different from AC_CHECK_LIB for the
<br>
second check (AC_SEARCH_LIBS uses a different cache name).
<br>
Or even use AC_LINK_IFELSE/AC_TRY_LINK which never cache anything.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/07/2225.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3a1r3525)"</a>
<li><strong>Previous message:</strong> <a href="2223.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3a1r3524)"</a>
<li><strong>In reply to:</strong> <a href="2222.php">Brice Goglin: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/07/2234.php">Brice Goglin: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/07/2234.php">Brice Goglin: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
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
