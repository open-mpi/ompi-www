<?
$subject_val = "Re: [hwloc-devel] hwloc_distances as utility?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  5 16:04:49 2011" -->
<!-- isoreceived="20110705200449" -->
<!-- sent="Tue, 5 Jul 2011 22:04:45 +0200" -->
<!-- isosent="20110705200445" -->
<!-- name="Jiri Hladky" -->
<!-- email="hladky.jiri_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc_distances as utility?" -->
<!-- id="CALT_uBTbYFNUOTxksm37LHWdpEwEF6uF2zJQ_dT=MySTwFsV8w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4E114BEC.7060905_at_inria.fr" -->
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
<strong>From:</strong> Jiri Hladky (<em>hladky.jiri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-05 16:04:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2239.php">Brice Goglin: "Re: [hwloc-devel] hwloc_distances as utility?"</a>
<li><strong>Previous message:</strong> <a href="2237.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>In reply to:</strong> <a href="2233.php">Brice Goglin: "Re: [hwloc-devel] hwloc_distances as utility?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2239.php">Brice Goglin: "Re: [hwloc-devel] hwloc_distances as utility?"</a>
<li><strong>Reply:</strong> <a href="2239.php">Brice Goglin: "Re: [hwloc-devel] hwloc_distances as utility?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
<p><p><span class="quotelev1">&gt; By the way, lstopo shows distance information, but it does not change it
</span><br>
<span class="quotelev1">&gt; depending on -l/-p. We may want to fix this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Thanks for the hint, I din't know it.
<br>
<p><p><p><span class="quotelev1">&gt; Actually, Linux only uses the number of hops on one specific MIPS
</span><br>
<span class="quotelev1">&gt; architecture (SGI IP27 Origin 200/2000). In other cases, it uses the
</span><br>
<span class="quotelev1">&gt; cpu-to-memory latency (usually reported by ACPI or so).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Well, this is interesting. numactl --hardware shows the number of hops,
<br>
regarding to the information from that private BZ. Where does hwloc takes
<br>
the distance information? Is it stored with
<br>
<p>hwloc-gather-topology
<br>
<p>script? If yes, could me send me the output of hwloc-gather-topology for
<br>
some NUMA box? I don't have access to any NUMA running a recent version of
<br>
kernel.
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On some systems number of hops does not represent memory bandwidth. I
</span><br>
<span class="quotelev2">&gt; &gt; have reported this in BZ 655041
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="https://bugzilla.redhat.com/show_bug.cgi?id=655041">https://bugzilla.redhat.com/show_bug.cgi?id=655041</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This bug is private unfortunately.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; In any case I believe that hwloc-report-instances would be useful
</span><br>
<span class="quotelev2">&gt; &gt; utility. Please let me know your opinion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Agreed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>OK, I will try to implement it as time permits.
<br>
<p>Thanks
<br>
Jirka
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2238/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2239.php">Brice Goglin: "Re: [hwloc-devel] hwloc_distances as utility?"</a>
<li><strong>Previous message:</strong> <a href="2237.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>In reply to:</strong> <a href="2233.php">Brice Goglin: "Re: [hwloc-devel] hwloc_distances as utility?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2239.php">Brice Goglin: "Re: [hwloc-devel] hwloc_distances as utility?"</a>
<li><strong>Reply:</strong> <a href="2239.php">Brice Goglin: "Re: [hwloc-devel] hwloc_distances as utility?"</a>
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
