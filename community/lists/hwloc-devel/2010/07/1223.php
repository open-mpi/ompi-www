<?
$subject_val = "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 28 12:56:44 2010" -->
<!-- isoreceived="20100728165644" -->
<!-- sent="Wed, 28 Jul 2010 18:53:48 +0200" -->
<!-- isosent="20100728165348" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet" -->
<!-- id="4C50609C.7080905_at_inria.fr" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="1280333368.2300.85.camel_at_kallies.zib.de" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-28 12:53:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1224.php">Samuel Thibault: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<li><strong>Previous message:</strong> <a href="1222.php">Brice Goglin: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<li><strong>Maybe in reply to:</strong> <a href="1221.php">Bernd Kallies: "[hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1225.php">Brice Goglin: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<li><strong>Reply:</strong> <a href="1225.php">Brice Goglin: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<li><strong>Reply:</strong> <a href="1226.php">Bernd Kallies: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<li><strong>Reply:</strong> <a href="1230.php">Brice Goglin: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 28/07/2010 18:09, Bernd Kallies a &#233;crit :
<br>
<span class="quotelev1">&gt; Is attached. I also checked for cpusets. I ran lstopo and
</span><br>
<span class="quotelev1">&gt; gather_topology from the root cpuset, which is the only cpuset and
</span><br>
<span class="quotelev1">&gt; contains cpus 0-767 and mems 0-47, that is - the whole machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Background info: The UltraViolet architecture is new. There exists a
</span><br>
<span class="quotelev1">&gt; white paper about this at <a href="http://www.sgi.com/pdfs/4192.pdf">http://www.sgi.com/pdfs/4192.pdf</a>
</span><br>
<span class="quotelev1">&gt; We have one UV rack, which is filled with 3/4 of the max. number of
</span><br>
<span class="quotelev1">&gt; blades. According to the specs, two NUMA nodes form one &quot;blade&quot;. This
</span><br>
<span class="quotelev1">&gt; level corresponds to &quot;Group0&quot; in the hwloc topology. Two blades are
</span><br>
<span class="quotelev1">&gt; cross-linked via the NUMAlink, forming &quot;paired nodes&quot; = &quot;Group1&quot;. What
</span><br>
<span class="quotelev1">&gt; &quot;Group2&quot; might correspond to - I don't know.
</span><br>
<p>We group by distance, so it's look like there's something tagging these
<br>
nodes as closer, and hwloc makes them a new group level
<br>
<p><span class="quotelev1">&gt;  &quot;Group3&quot; corresponds to one
</span><br>
<span class="quotelev1">&gt; &quot;chassis&quot; or IRU. &quot;Group4&quot; may be an &quot;enclosure&quot;, and &quot;Machine&quot; is the
</span><br>
<span class="quotelev1">&gt; &quot;rack&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From my opinion the hwloc topology for our machine should contain 2x
</span><br>
<span class="quotelev1">&gt; Group4. The 1st should contain 2x Group3, the 2nd one 1x Group3. lstopo
</span><br>
<span class="quotelev1">&gt; shows 1x Group4 containing 3x Group3, instead.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Actually no, but it's very hard to see :)
<br>
&nbsp;&nbsp;lstopo - | egrep &quot;(NUMA|Group)&quot;
<br>
shows that Group4#0 only contains Group3#0 and #1.
<br>
Group3#2 is directly a child of the machine (the indentation is smaller).
<br>
<p><p>Open a *big* terminal window and look at the distance matrix:
<br>
$ cat /sys/devices/system/node/node{?,??}/distance
<br>
(I am not copy/pasting it here, it's too big :))
<br>
<p>hwloc groups objects that have smaller distances and then compute
<br>
distances between groups (average between distances of objects in each
<br>
group). We get:
<br>
<p>Distance matrix between Group0 objects:
<br>
13 22 24 26 28 30 32 34 36 38 40 42 44 46 48 50 52 54 56 58 60 62 64 66
<br>
22 13 22 24 26 28 30 32 34 36 38 40 42 44 46 48 50 52 54 56 58 60 62 64
<br>
24 22 13 22 24 26 28 30 32 34 36 38 40 42 44 46 48 50 52 54 56 58 60 62
<br>
26 24 22 13 22 24 26 28 30 32 34 36 38 40 42 44 46 48 50 52 54 56 58 60
<br>
28 26 24 22 13 22 24 26 28 30 32 34 36 38 40 42 44 46 48 50 52 54 56 58
<br>
30 28 26 24 22 13 22 24 26 28 30 32 34 36 38 40 42 44 46 48 50 52 54 56
<br>
32 30 28 26 24 22 13 22 24 26 28 30 32 34 36 38 40 42 44 46 48 50 52 54
<br>
34 32 30 28 26 24 22 13 22 24 26 28 30 32 34 36 38 40 42 44 46 48 50 52
<br>
36 34 32 30 28 26 24 22 13 22 24 26 28 30 32 34 36 38 40 42 44 46 48 50
<br>
38 36 34 32 30 28 26 24 22 13 22 24 26 28 30 32 34 36 38 40 42 44 46 48
<br>
40 38 36 34 32 30 28 26 24 22 13 22 24 26 28 30 32 34 36 38 40 42 44 46
<br>
42 40 38 36 34 32 30 28 26 24 22 13 22 24 26 28 30 32 34 36 38 40 42 44
<br>
44 42 40 38 36 34 32 30 28 26 24 22 13 22 24 26 28 30 32 34 36 38 40 42
<br>
46 44 42 40 38 36 34 32 30 28 26 24 22 13 22 24 26 28 30 32 34 36 38 40
<br>
48 46 44 42 40 38 36 34 32 30 28 26 24 22 13 22 24 26 28 30 32 34 36 38
<br>
50 48 46 44 42 40 38 36 34 32 30 28 26 24 22 13 22 24 26 28 30 32 34 36
<br>
52 50 48 46 44 42 40 38 36 34 32 30 28 26 24 22 13 22 24 26 28 30 32 34
<br>
54 52 50 48 46 44 42 40 38 36 34 32 30 28 26 24 22 13 22 24 26 28 30 32
<br>
56 54 52 50 48 46 44 42 40 38 36 34 32 30 28 26 24 22 13 22 24 26 28 30
<br>
58 56 54 52 50 48 46 44 42 40 38 36 34 32 30 28 26 24 22 13 22 24 26 28
<br>
60 58 56 54 52 50 48 46 44 42 40 38 36 34 32 30 28 26 24 22 13 22 24 26
<br>
62 60 58 56 54 52 50 48 46 44 42 40 38 36 34 32 30 28 26 24 22 13 22 24
<br>
64 62 60 58 56 54 52 50 48 46 44 42 40 38 36 34 32 30 28 26 24 22 13 22
<br>
66 64 62 60 58 56 54 52 50 48 46 44 42 40 38 36 34 32 30 28 26 24 22 13
<br>
<p>Between Group1:
<br>
17 24 28 32 36 40 44 48 52 56 60 64
<br>
24 17 24 28 32 36 40 44 48 52 56 60
<br>
28 24 17 24 28 32 36 40 44 48 52 56
<br>
32 28 24 17 24 28 32 36 40 44 48 52
<br>
36 32 28 24 17 24 28 32 36 40 44 48
<br>
40 36 32 28 24 17 24 28 32 36 40 44
<br>
44 40 36 32 28 24 17 24 28 32 36 40
<br>
48 44 40 36 32 28 24 17 24 28 32 36
<br>
52 48 44 40 36 32 28 24 17 24 28 32
<br>
56 52 48 44 40 36 32 28 24 17 24 28
<br>
60 56 52 48 44 40 36 32 28 24 17 24
<br>
64 60 56 52 48 44 40 36 32 28 24 17
<br>
<p>Group2:
<br>
20 28 36 44 52 60
<br>
28 20 28 36 44 52
<br>
36 28 20 28 36 44
<br>
44 36 28 20 28 36
<br>
52 44 36 28 20 28
<br>
60 52 44 36 28 20
<br>
<p>Group3:
<br>
24 36 52
<br>
36 24 36
<br>
52 36 24
<br>
<p>The way I am reading this is:
<br>
IRU#1 is close to IRU#0 and #2, but #0 and #2 are far away for each other.
<br>
Then I don't think we can group 2 IRU and keep a third one on the side
<br>
as you said.
<br>
How would you group these?
<br>
<p>That said, something is going wrong with the grouping code. Right now,
<br>
it should keep 3 Group3 under the machine. I am looking at it.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1224.php">Samuel Thibault: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<li><strong>Previous message:</strong> <a href="1222.php">Brice Goglin: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<li><strong>Maybe in reply to:</strong> <a href="1221.php">Bernd Kallies: "[hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1225.php">Brice Goglin: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<li><strong>Reply:</strong> <a href="1225.php">Brice Goglin: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<li><strong>Reply:</strong> <a href="1226.php">Bernd Kallies: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<li><strong>Reply:</strong> <a href="1230.php">Brice Goglin: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
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
