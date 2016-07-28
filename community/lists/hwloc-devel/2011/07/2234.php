<?
$subject_val = "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  4 05:18:45 2011" -->
<!-- isoreceived="20110704091845" -->
<!-- sent="Mon, 04 Jul 2011 11:18:37 +0200" -->
<!-- isosent="20110704091837" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp;amp; RHEL 5.6" -->
<!-- id="4E11856D.8020100_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E0C0E96.5050001_at_inria.fr" -->
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
<strong>Date:</strong> 2011-07-04 05:18:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2235.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3a1r3537)"</a>
<li><strong>Previous message:</strong> <a href="2233.php">Brice Goglin: "Re: [hwloc-devel] hwloc_distances as utility?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/06/2224.php">Brice Goglin: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2237.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>Reply:</strong> <a href="2237.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All this should be fixed now, and the configure output is now clear (it
<br>
doesn't change its mind about pci_init/cleanup or pci_lookup_name
<br>
without any obvious reason anymore).
<br>
<p>FC7:
<br>
checking for pci/pci.h... yes
<br>
checking for pci_init in -lpci... no
<br>
checking for pci_init in -lpci with -lz... yes
<br>
checking for pci_lookup_name in -lpci... no
<br>
checking for inet_ntoa in -lresolv... yes
<br>
checking for pci_lookup_name in -lpci with -lresolv... yes
<br>
<p>RHEL5.6:
<br>
checking for pci/pci.h... yes
<br>
checking for pci_init in -lpci... yes
<br>
checking for pci_lookup_name in -lpci... no
<br>
checking for inet_ntoa in -lresolv... yes
<br>
checking for pci_lookup_name in -lpci with -lresolv... yes
<br>
<p>RHEL5.3:
<br>
checking for pci/pci.h... yes
<br>
checking for pci_init in -lpci... yes
<br>
checking for pci_lookup_name in -lpci... yes
<br>
<p>Christopher, it should work starting with trunk r3535.
<br>
<p>Brice
<br>
<p><p><p><p>Le 30/06/2011 07:50, Brice Goglin a &#233;crit :
<br>
<span class="quotelev1">&gt; Le 29/06/2011 13:18, Brice Goglin a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; I don't think we finally fixed this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; IIRC, we need either a way to bypass the cache, or always add -lresolv
</span><br>
<span class="quotelev2">&gt;&gt; even if it's useless (or find another way to detect if lresolv is needed).
</span><br>
<span class="quotelev1">&gt; Redefining our own HWLOC_AC_CHECK_LIB_NO_CACHE looks possible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Otherwise, we could use something different from AC_CHECK_LIB for the
</span><br>
<span class="quotelev1">&gt; second check (AC_SEARCH_LIBS uses a different cache name).
</span><br>
<span class="quotelev1">&gt; Or even use AC_LINK_IFELSE/AC_TRY_LINK which never cache anything.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2235.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3a1r3537)"</a>
<li><strong>Previous message:</strong> <a href="2233.php">Brice Goglin: "Re: [hwloc-devel] hwloc_distances as utility?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/06/2224.php">Brice Goglin: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2237.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>Reply:</strong> <a href="2237.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
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
