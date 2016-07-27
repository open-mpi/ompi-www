<?
$subject_val = "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 28 15:13:22 2010" -->
<!-- isoreceived="20100728191322" -->
<!-- sent="Wed, 28 Jul 2010 21:13:05 +0200" -->
<!-- isosent="20100728191305" -->
<!-- name="Bernd Kallies" -->
<!-- email="kallies_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet" -->
<!-- id="1280344385.2300.235.camel_at_kallies.zib.de" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="4C507892.3000101_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet<br>
<strong>From:</strong> Bernd Kallies (<em>kallies_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-28 15:13:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1228.php">Brice Goglin: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<li><strong>Previous message:</strong> <a href="1226.php">Bernd Kallies: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<li><strong>In reply to:</strong> <a href="1225.php">Brice Goglin: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1231.php">Bernd Kallies: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2010-07-28 at 20:36 +0200, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 28/07/2010 18:53, Brice Goglin a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Distance matrix between Group0 objects:
</span><br>
<span class="quotelev2">&gt; &gt; 13 22 24 26 28 30 32 34 36 38 40 42 44 46 48 50 52 54 56 58 60 62 64 66
</span><br>
<span class="quotelev2">&gt; &gt; 22 13 22 24 26 28 30 32 34 36 38 40 42 44 46 48 50 52 54 56 58 60 62 64
</span><br>
<span class="quotelev2">&gt; &gt; 24 22 13 22 24 26 28 30 32 34 36 38 40 42 44 46 48 50 52 54 56 58 60 62
</span><br>
<span class="quotelev2">&gt; &gt; 26 24 22 13 22 24 26 28 30 32 34 36 38 40 42 44 46 48 50 52 54 56 58 60
</span><br>
<span class="quotelev2">&gt; &gt; 28 26 24 22 13 22 24 26 28 30 32 34 36 38 40 42 44 46 48 50 52 54 56 58
</span><br>
<span class="quotelev2">&gt; &gt; 30 28 26 24 22 13 22 24 26 28 30 32 34 36 38 40 42 44 46 48 50 52 54 56
</span><br>
<span class="quotelev2">&gt; &gt; 32 30 28 26 24 22 13 22 24 26 28 30 32 34 36 38 40 42 44 46 48 50 52 54
</span><br>
<span class="quotelev2">&gt; &gt; 34 32 30 28 26 24 22 13 22 24 26 28 30 32 34 36 38 40 42 44 46 48 50 52
</span><br>
<span class="quotelev2">&gt; &gt; 36 34 32 30 28 26 24 22 13 22 24 26 28 30 32 34 36 38 40 42 44 46 48 50
</span><br>
<span class="quotelev2">&gt; &gt; 38 36 34 32 30 28 26 24 22 13 22 24 26 28 30 32 34 36 38 40 42 44 46 48
</span><br>
<span class="quotelev2">&gt; &gt; 40 38 36 34 32 30 28 26 24 22 13 22 24 26 28 30 32 34 36 38 40 42 44 46
</span><br>
<span class="quotelev2">&gt; &gt; 42 40 38 36 34 32 30 28 26 24 22 13 22 24 26 28 30 32 34 36 38 40 42 44
</span><br>
<span class="quotelev2">&gt; &gt; 44 42 40 38 36 34 32 30 28 26 24 22 13 22 24 26 28 30 32 34 36 38 40 42
</span><br>
<span class="quotelev2">&gt; &gt; 46 44 42 40 38 36 34 32 30 28 26 24 22 13 22 24 26 28 30 32 34 36 38 40
</span><br>
<span class="quotelev2">&gt; &gt; 48 46 44 42 40 38 36 34 32 30 28 26 24 22 13 22 24 26 28 30 32 34 36 38
</span><br>
<span class="quotelev2">&gt; &gt; 50 48 46 44 42 40 38 36 34 32 30 28 26 24 22 13 22 24 26 28 30 32 34 36
</span><br>
<span class="quotelev2">&gt; &gt; 52 50 48 46 44 42 40 38 36 34 32 30 28 26 24 22 13 22 24 26 28 30 32 34
</span><br>
<span class="quotelev2">&gt; &gt; 54 52 50 48 46 44 42 40 38 36 34 32 30 28 26 24 22 13 22 24 26 28 30 32
</span><br>
<span class="quotelev2">&gt; &gt; 56 54 52 50 48 46 44 42 40 38 36 34 32 30 28 26 24 22 13 22 24 26 28 30
</span><br>
<span class="quotelev2">&gt; &gt; 58 56 54 52 50 48 46 44 42 40 38 36 34 32 30 28 26 24 22 13 22 24 26 28
</span><br>
<span class="quotelev2">&gt; &gt; 60 58 56 54 52 50 48 46 44 42 40 38 36 34 32 30 28 26 24 22 13 22 24 26
</span><br>
<span class="quotelev2">&gt; &gt; 62 60 58 56 54 52 50 48 46 44 42 40 38 36 34 32 30 28 26 24 22 13 22 24
</span><br>
<span class="quotelev2">&gt; &gt; 64 62 60 58 56 54 52 50 48 46 44 42 40 38 36 34 32 30 28 26 24 22 13 22
</span><br>
<span class="quotelev2">&gt; &gt; 66 64 62 60 58 56 54 52 50 48 46 44 42 40 38 36 34 32 30 28 26 24 22 13
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Between Group1:
</span><br>
<span class="quotelev2">&gt; &gt; 17 24 28 32 36 40 44 48 52 56 60 64
</span><br>
<span class="quotelev2">&gt; &gt; 24 17 24 28 32 36 40 44 48 52 56 60
</span><br>
<span class="quotelev2">&gt; &gt; 28 24 17 24 28 32 36 40 44 48 52 56
</span><br>
<span class="quotelev2">&gt; &gt; 32 28 24 17 24 28 32 36 40 44 48 52
</span><br>
<span class="quotelev2">&gt; &gt; 36 32 28 24 17 24 28 32 36 40 44 48
</span><br>
<span class="quotelev2">&gt; &gt; 40 36 32 28 24 17 24 28 32 36 40 44
</span><br>
<span class="quotelev2">&gt; &gt; 44 40 36 32 28 24 17 24 28 32 36 40
</span><br>
<span class="quotelev2">&gt; &gt; 48 44 40 36 32 28 24 17 24 28 32 36
</span><br>
<span class="quotelev2">&gt; &gt; 52 48 44 40 36 32 28 24 17 24 28 32
</span><br>
<span class="quotelev2">&gt; &gt; 56 52 48 44 40 36 32 28 24 17 24 28
</span><br>
<span class="quotelev2">&gt; &gt; 60 56 52 48 44 40 36 32 28 24 17 24
</span><br>
<span class="quotelev2">&gt; &gt; 64 60 56 52 48 44 40 36 32 28 24 17
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Group2:
</span><br>
<span class="quotelev2">&gt; &gt; 20 28 36 44 52 60
</span><br>
<span class="quotelev2">&gt; &gt; 28 20 28 36 44 52
</span><br>
<span class="quotelev2">&gt; &gt; 36 28 20 28 36 44
</span><br>
<span class="quotelev2">&gt; &gt; 44 36 28 20 28 36
</span><br>
<span class="quotelev2">&gt; &gt; 52 44 36 28 20 28
</span><br>
<span class="quotelev2">&gt; &gt; 60 52 44 36 28 20
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Group3:
</span><br>
<span class="quotelev2">&gt; &gt; 24 36 52
</span><br>
<span class="quotelev2">&gt; &gt; 36 24 36
</span><br>
<span class="quotelev2">&gt; &gt; 52 36 24
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Actually, all these distance matrices (except the NUMA nodes' one, the
</span><br>
<span class="quotelev1">&gt; one not included above) show a ring topology without the link between
</span><br>
<span class="quotelev1">&gt; the first and the last object. So grouping makes no sense there. hwloc
</span><br>
<span class="quotelev1">&gt; 1.0.x groups object #2N with object #2N+1 because its grouping algorithm
</span><br>
<span class="quotelev1">&gt; isn't very clever. It could also link #2N-1 with #2N, it wouldn't be
</span><br>
<span class="quotelev1">&gt; worse. The grouping algorithm is more clever in svn trunk. It detects
</span><br>
<span class="quotelev1">&gt; this ring properly and does not group anything (except pairs of NUMA node).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's actually surprising that this machine doesn't show a better
</span><br>
<span class="quotelev1">&gt; distance matrix. I guess SGI still has a hypercube or whatever nice
</span><br>
<span class="quotelev1">&gt; topology interconnected IRUs and blades. Older Altix machines had very
</span><br>
<span class="quotelev1">&gt; nice distance matrices were we would detect multiple levels of groups
</span><br>
<span class="quotelev1">&gt; that really showed the physical hierarchy of blades/IRUs/... I wonder if
</span><br>
<span class="quotelev1">&gt; your SGI BIOS is buggy :)
</span><br>
<p>It would not be the first case of a buggy BIOS. I'll forward our
<br>
discussion to our SGI representatives and Alexis Cousein and R&#252;diger
<br>
Wolff from SGI (M. Raymond may know him). Let's see what they say. We
<br>
are one of the early UltraViolet customers.
<br>
<p><span class="quotelev1">&gt;From my point of view, having the groupings beyond the blade level in
</span><br>
the hwloc topology is good for our purposes. We want to use the hwloc
<br>
topology to calculate pinning maps for MPI applications. Currently we
<br>
use the distance map got via hwloc to scatter tasks according to a
<br>
maximum-distance approach between HWLOC_OBJ_PU objects. I also gave our
<br>
current algorithm to the MVAPICH2 dev team, which wants to put it into
<br>
the next 1.5.x release.
<br>
With the example UV topology we discuss here, our pinning map starts
<br>
with PU objects os_index 0,256,128,320,... that means 1st task on 1st
<br>
CPU of 1st Group3, 2nd task on 1st CPU of 3rd Group3 (which is the
<br>
lonely one), 3rd task on 1st CPU of 2nd Group3. Having in mind that an
<br>
MPI application that got all CPUs of this topology may start only 3
<br>
tasks and each task allocates a lot of memory far beyond than what a
<br>
single NUMA node has directly attached, then reducing the topology to
<br>
the NUMA-node or blade level would be a bad idea, because then our
<br>
pinning map would start with 0,16,32,48,... (when having only the Group0
<br>
level but not the higher groupings).
<br>
<p>Comments appreciated !!!
<br>
<p><span class="quotelev1">&gt; Michael Raymond, anything to say about this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Dr. Bernd Kallies
Konrad-Zuse-Zentrum f&#252;r Informationstechnik Berlin
Takustr. 7
14195 Berlin
Tel: +49-30-84185-270
Fax: +49-30-84185-311
e-mail: kallies_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1228.php">Brice Goglin: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<li><strong>Previous message:</strong> <a href="1226.php">Bernd Kallies: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<li><strong>In reply to:</strong> <a href="1225.php">Brice Goglin: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1231.php">Bernd Kallies: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
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
