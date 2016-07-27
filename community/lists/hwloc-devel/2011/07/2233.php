<?
$subject_val = "Re: [hwloc-devel] hwloc_distances as utility?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  4 01:13:27 2011" -->
<!-- isoreceived="20110704051327" -->
<!-- sent="Mon, 04 Jul 2011 07:13:16 +0200" -->
<!-- isosent="20110704051316" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc_distances as utility?" -->
<!-- id="4E114BEC.7060905_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CALT_uBRfbcrqy-gsQ1BGsfYuS1gzxxsQGdirp726=k3gbQhZ3Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc_distances as utility?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-04 01:13:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2234.php">Brice Goglin: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>Previous message:</strong> <a href="2232.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2.1rc1r3531)"</a>
<li><strong>In reply to:</strong> <a href="2228.php">Jiri Hladky: "[hwloc-devel] hwloc_distances as utility?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2238.php">Jiri Hladky: "Re: [hwloc-devel] hwloc_distances as utility?"</a>
<li><strong>Reply:</strong> <a href="2238.php">Jiri Hladky: "Re: [hwloc-devel] hwloc_distances as utility?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 03/07/2011 23:55, Jiri Hladky a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have come across tests/hwloc_distances test and I believe that it
</span><br>
<span class="quotelev1">&gt; would be great to convert this into the utility
</span><br>
<span class="quotelev1">&gt; &quot;hwloc-report-instances&quot; published under utils/ directory. Please let
</span><br>
<span class="quotelev1">&gt; me know what you think about it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It would take the same input as hwloc-info (read topology from
</span><br>
<span class="quotelev1">&gt; different formats instead of discovering the topology on the local
</span><br>
<span class="quotelev1">&gt; machine), support both logical and physical indexes (-l and -p) switch.
</span><br>
<p>By the way, lstopo shows distance information, but it does not change it
<br>
depending on -l/-p. We may want to fix this.
<br>
<p><span class="quotelev1">&gt; I have used stream memory bandwidth benchmark
</span><br>
<span class="quotelev1">&gt; (<a href="http://www.cs.virginia.edu/stream/">http://www.cs.virginia.edu/stream/</a>) in the past to produce the
</span><br>
<span class="quotelev1">&gt; similar output as tests/hwloc_distances. It was interesting to see
</span><br>
<span class="quotelev1">&gt; that numactl and kernel scheduler are both using number of hopes
</span><br>
<span class="quotelev1">&gt; instead of memory bandwidth.
</span><br>
<p>Actually, Linux only uses the number of hops on one specific MIPS
<br>
architecture (SGI IP27 Origin 200/2000). In other cases, it uses the
<br>
cpu-to-memory latency (usually reported by ACPI or so).
<br>
<p><span class="quotelev1">&gt; On some systems number of hops does not represent memory bandwidth. I
</span><br>
<span class="quotelev1">&gt; have reported this in BZ 655041
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://bugzilla.redhat.com/show_bug.cgi?id=655041">https://bugzilla.redhat.com/show_bug.cgi?id=655041</a>
</span><br>
<p>This bug is private unfortunately.
<br>
<p><span class="quotelev1">&gt; In any case I believe that hwloc-report-instances would be useful
</span><br>
<span class="quotelev1">&gt; utility. Please let me know your opinion.
</span><br>
<p>Agreed.
<br>
<p>There are still several things to improve regarding distances.
<br>
Everything should be in <a href="https://svn.open-mpi.org/trac/hwloc/ticket/43">https://svn.open-mpi.org/trac/hwloc/ticket/43</a>
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2234.php">Brice Goglin: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>Previous message:</strong> <a href="2232.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2.1rc1r3531)"</a>
<li><strong>In reply to:</strong> <a href="2228.php">Jiri Hladky: "[hwloc-devel] hwloc_distances as utility?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2238.php">Jiri Hladky: "Re: [hwloc-devel] hwloc_distances as utility?"</a>
<li><strong>Reply:</strong> <a href="2238.php">Jiri Hladky: "Re: [hwloc-devel] hwloc_distances as utility?"</a>
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
