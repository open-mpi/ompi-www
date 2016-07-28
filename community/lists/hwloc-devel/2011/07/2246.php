<?
$subject_val = "Re: [hwloc-devel] hwloc_distances as utility?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 14 17:49:06 2011" -->
<!-- isoreceived="20110714214906" -->
<!-- sent="Thu, 14 Jul 2011 23:49:02 +0200" -->
<!-- isosent="20110714214902" -->
<!-- name="Jiri Hladky" -->
<!-- email="hladky.jiri_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc_distances as utility?" -->
<!-- id="CALT_uBSewpAKSeyfdmNOpLDbqPCMvgKhhYNTQd2U7URJzNUcFA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4E1373F4.109_at_inria.fr" -->
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
<strong>Date:</strong> 2011-07-14 17:49:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2247.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3a1r3552)"</a>
<li><strong>Previous message:</strong> <a href="2245.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2.1rc1r3551)"</a>
<li><strong>In reply to:</strong> <a href="2239.php">Brice Goglin: "Re: [hwloc-devel] hwloc_distances as utility?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/08/2329.php">Brice Goglin: "Re: [hwloc-devel] hwloc_distances as utility?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
<p><span class="quotelev1">&gt; Well, this is interesting. numactl --hardware shows the number of
</span><br>
<span class="quotelev2">&gt; &gt; hops, regarding to the information from that private BZ.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think this is wrong. numactl takes everything from sysfs as far as I
</span><br>
<span class="quotelev1">&gt; can tell. On x86, sysfs distances are ACPI SLIT latencies (memory
</span><br>
<span class="quotelev1">&gt; latencies that are normalized to 10 for latencies from one cpu to its
</span><br>
<span class="quotelev1">&gt; local memory). A couple months ago, I checked all Linux ports that show
</span><br>
<span class="quotelev1">&gt; distances in sysfs. All of them report memory latencies, except the SGI
</span><br>
<span class="quotelev1">&gt; IP27 as mentioned previously (this one indeed shows number of hops (0
</span><br>
<span class="quotelev1">&gt; when local) and it makes a lot of sense for this architecture).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yes, you are absolutly right. Sorry about it. It's better to check some
<br>
sources than to rely on my own memory:-)
<br>
<p><p><span class="quotelev1">&gt; One problem I see with the number of hops is that it doesn't make sense
</span><br>
<span class="quotelev1">&gt; on some machines. On some 8-socket AMD machines (such as
</span><br>
<span class="quotelev1">&gt; 8amd64-4n2c.tar.bz2 below) , the hypertransport route between some
</span><br>
<span class="quotelev1">&gt; sockets varies with the type of packet (response or request) and the
</span><br>
<span class="quotelev1">&gt; direction. So the number of hops ends up being asymmetric, depends on
</span><br>
<span class="quotelev1">&gt; read/write, and can be half of an integer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yes, this is exactly what I have seen as well. This even true for 4 socket
<br>
AMD Magny Cours system.
<br>
<p><p><p><span class="quotelev1">&gt; Look at tests/linux/ in the hwloc SVN. The following tarballs contain
</span><br>
<span class="quotelev1">&gt; NUMA architectures. Some of these were gathered while running old
</span><br>
<span class="quotelev1">&gt; kernels, but I don't think it matters because Linux/sysfs reports what
</span><br>
<span class="quotelev1">&gt; the BIOS without changing much of it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I will. The thing is that I'm pretty bu\sy right now, I need to finish a
<br>
project before going on vacation. I hope to look into in September.
<br>
<p><p>Regards
<br>
Jirka
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2246/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2247.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3a1r3552)"</a>
<li><strong>Previous message:</strong> <a href="2245.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2.1rc1r3551)"</a>
<li><strong>In reply to:</strong> <a href="2239.php">Brice Goglin: "Re: [hwloc-devel] hwloc_distances as utility?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/08/2329.php">Brice Goglin: "Re: [hwloc-devel] hwloc_distances as utility?"</a>
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
