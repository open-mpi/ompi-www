<?
$subject_val = "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 28 14:59:38 2010" -->
<!-- isoreceived="20100728185938" -->
<!-- sent="Wed, 28 Jul 2010 20:59:19 +0200" -->
<!-- isosent="20100728185919" -->
<!-- name="Bernd Kallies" -->
<!-- email="kallies_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet" -->
<!-- id="1280343559.2300.221.camel_at_kallies.zib.de" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="4C50609C.7080905_at_inria.fr" -->
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
<strong>Date:</strong> 2010-07-28 14:59:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1227.php">Bernd Kallies: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<li><strong>Previous message:</strong> <a href="1225.php">Brice Goglin: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<li><strong>In reply to:</strong> <a href="1223.php">Brice Goglin: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1228.php">Brice Goglin: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<li><strong>Reply:</strong> <a href="1228.php">Brice Goglin: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2010-07-28 at 18:53 +0200, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 28/07/2010 18:09, Bernd Kallies a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Is attached. I also checked for cpusets. I ran lstopo and
</span><br>
<span class="quotelev2">&gt; &gt; gather_topology from the root cpuset, which is the only cpuset and
</span><br>
<span class="quotelev2">&gt; &gt; contains cpus 0-767 and mems 0-47, that is - the whole machine.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Background info: The UltraViolet architecture is new. There exists a
</span><br>
<span class="quotelev2">&gt; &gt; white paper about this at <a href="http://www.sgi.com/pdfs/4192.pdf">http://www.sgi.com/pdfs/4192.pdf</a>
</span><br>
<span class="quotelev2">&gt; &gt; We have one UV rack, which is filled with 3/4 of the max. number of
</span><br>
<span class="quotelev2">&gt; &gt; blades. According to the specs, two NUMA nodes form one &quot;blade&quot;. This
</span><br>
<span class="quotelev2">&gt; &gt; level corresponds to &quot;Group0&quot; in the hwloc topology. Two blades are
</span><br>
<span class="quotelev2">&gt; &gt; cross-linked via the NUMAlink, forming &quot;paired nodes&quot; = &quot;Group1&quot;. What
</span><br>
<span class="quotelev2">&gt; &gt; &quot;Group2&quot; might correspond to - I don't know.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We group by distance, so it's look like there's something tagging these
</span><br>
<span class="quotelev1">&gt; nodes as closer, and hwloc makes them a new group level
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  &quot;Group3&quot; corresponds to one
</span><br>
<span class="quotelev2">&gt; &gt; &quot;chassis&quot; or IRU. &quot;Group4&quot; may be an &quot;enclosure&quot;, and &quot;Machine&quot; is the
</span><br>
<span class="quotelev2">&gt; &gt; &quot;rack&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; From my opinion the hwloc topology for our machine should contain 2x
</span><br>
<span class="quotelev2">&gt; &gt; Group4. The 1st should contain 2x Group3, the 2nd one 1x Group3. lstopo
</span><br>
<span class="quotelev2">&gt; &gt; shows 1x Group4 containing 3x Group3, instead.
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Actually no, but it's very hard to see :)
</span><br>
<span class="quotelev1">&gt;   lstopo - | egrep &quot;(NUMA|Group)&quot;
</span><br>
<span class="quotelev1">&gt; shows that Group4#0 only contains Group3#0 and #1.
</span><br>
<span class="quotelev1">&gt; Group3#2 is directly a child of the machine (the indentation is smaller).
</span><br>
<p>Ah, I see.
<br>
<p><span class="quotelev1">&gt; Open a *big* terminal window and look at the distance matrix:
</span><br>
<span class="quotelev1">&gt; $ cat /sys/devices/system/node/node{?,??}/distance
</span><br>
<span class="quotelev1">&gt; (I am not copy/pasting it here, it's too big :))
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hwloc groups objects that have smaller distances and then compute
</span><br>
<span class="quotelev1">&gt; distances between groups (average between distances of objects in each
</span><br>
<span class="quotelev1">&gt; group). We get:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Distance matrix between Group0 objects:
</span><br>
<span class="quotelev1">&gt; 13 22 24 26 28 30 32 34 36 38 40 42 44 46 48 50 52 54 56 58 60 62 64 66
</span><br>
<span class="quotelev1">&gt; 22 13 22 24 26 28 30 32 34 36 38 40 42 44 46 48 50 52 54 56 58 60 62 64
</span><br>
<span class="quotelev1">&gt; 24 22 13 22 24 26 28 30 32 34 36 38 40 42 44 46 48 50 52 54 56 58 60 62
</span><br>
<span class="quotelev1">&gt; 26 24 22 13 22 24 26 28 30 32 34 36 38 40 42 44 46 48 50 52 54 56 58 60
</span><br>
<span class="quotelev1">&gt; 28 26 24 22 13 22 24 26 28 30 32 34 36 38 40 42 44 46 48 50 52 54 56 58
</span><br>
<span class="quotelev1">&gt; 30 28 26 24 22 13 22 24 26 28 30 32 34 36 38 40 42 44 46 48 50 52 54 56
</span><br>
<span class="quotelev1">&gt; 32 30 28 26 24 22 13 22 24 26 28 30 32 34 36 38 40 42 44 46 48 50 52 54
</span><br>
<span class="quotelev1">&gt; 34 32 30 28 26 24 22 13 22 24 26 28 30 32 34 36 38 40 42 44 46 48 50 52
</span><br>
<span class="quotelev1">&gt; 36 34 32 30 28 26 24 22 13 22 24 26 28 30 32 34 36 38 40 42 44 46 48 50
</span><br>
<span class="quotelev1">&gt; 38 36 34 32 30 28 26 24 22 13 22 24 26 28 30 32 34 36 38 40 42 44 46 48
</span><br>
<span class="quotelev1">&gt; 40 38 36 34 32 30 28 26 24 22 13 22 24 26 28 30 32 34 36 38 40 42 44 46
</span><br>
<span class="quotelev1">&gt; 42 40 38 36 34 32 30 28 26 24 22 13 22 24 26 28 30 32 34 36 38 40 42 44
</span><br>
<span class="quotelev1">&gt; 44 42 40 38 36 34 32 30 28 26 24 22 13 22 24 26 28 30 32 34 36 38 40 42
</span><br>
<span class="quotelev1">&gt; 46 44 42 40 38 36 34 32 30 28 26 24 22 13 22 24 26 28 30 32 34 36 38 40
</span><br>
<span class="quotelev1">&gt; 48 46 44 42 40 38 36 34 32 30 28 26 24 22 13 22 24 26 28 30 32 34 36 38
</span><br>
<span class="quotelev1">&gt; 50 48 46 44 42 40 38 36 34 32 30 28 26 24 22 13 22 24 26 28 30 32 34 36
</span><br>
<span class="quotelev1">&gt; 52 50 48 46 44 42 40 38 36 34 32 30 28 26 24 22 13 22 24 26 28 30 32 34
</span><br>
<span class="quotelev1">&gt; 54 52 50 48 46 44 42 40 38 36 34 32 30 28 26 24 22 13 22 24 26 28 30 32
</span><br>
<span class="quotelev1">&gt; 56 54 52 50 48 46 44 42 40 38 36 34 32 30 28 26 24 22 13 22 24 26 28 30
</span><br>
<span class="quotelev1">&gt; 58 56 54 52 50 48 46 44 42 40 38 36 34 32 30 28 26 24 22 13 22 24 26 28
</span><br>
<span class="quotelev1">&gt; 60 58 56 54 52 50 48 46 44 42 40 38 36 34 32 30 28 26 24 22 13 22 24 26
</span><br>
<span class="quotelev1">&gt; 62 60 58 56 54 52 50 48 46 44 42 40 38 36 34 32 30 28 26 24 22 13 22 24
</span><br>
<span class="quotelev1">&gt; 64 62 60 58 56 54 52 50 48 46 44 42 40 38 36 34 32 30 28 26 24 22 13 22
</span><br>
<span class="quotelev1">&gt; 66 64 62 60 58 56 54 52 50 48 46 44 42 40 38 36 34 32 30 28 26 24 22 13
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Between Group1:
</span><br>
<span class="quotelev1">&gt; 17 24 28 32 36 40 44 48 52 56 60 64
</span><br>
<span class="quotelev1">&gt; 24 17 24 28 32 36 40 44 48 52 56 60
</span><br>
<span class="quotelev1">&gt; 28 24 17 24 28 32 36 40 44 48 52 56
</span><br>
<span class="quotelev1">&gt; 32 28 24 17 24 28 32 36 40 44 48 52
</span><br>
<span class="quotelev1">&gt; 36 32 28 24 17 24 28 32 36 40 44 48
</span><br>
<span class="quotelev1">&gt; 40 36 32 28 24 17 24 28 32 36 40 44
</span><br>
<span class="quotelev1">&gt; 44 40 36 32 28 24 17 24 28 32 36 40
</span><br>
<span class="quotelev1">&gt; 48 44 40 36 32 28 24 17 24 28 32 36
</span><br>
<span class="quotelev1">&gt; 52 48 44 40 36 32 28 24 17 24 28 32
</span><br>
<span class="quotelev1">&gt; 56 52 48 44 40 36 32 28 24 17 24 28
</span><br>
<span class="quotelev1">&gt; 60 56 52 48 44 40 36 32 28 24 17 24
</span><br>
<span class="quotelev1">&gt; 64 60 56 52 48 44 40 36 32 28 24 17
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Group2:
</span><br>
<span class="quotelev1">&gt; 20 28 36 44 52 60
</span><br>
<span class="quotelev1">&gt; 28 20 28 36 44 52
</span><br>
<span class="quotelev1">&gt; 36 28 20 28 36 44
</span><br>
<span class="quotelev1">&gt; 44 36 28 20 28 36
</span><br>
<span class="quotelev1">&gt; 52 44 36 28 20 28
</span><br>
<span class="quotelev1">&gt; 60 52 44 36 28 20
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Group3:
</span><br>
<span class="quotelev1">&gt; 24 36 52
</span><br>
<span class="quotelev1">&gt; 36 24 36
</span><br>
<span class="quotelev1">&gt; 52 36 24
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The way I am reading this is:
</span><br>
<span class="quotelev1">&gt; IRU#1 is close to IRU#0 and #2, but #0 and #2 are far away for each other.
</span><br>
<span class="quotelev1">&gt; Then I don't think we can group 2 IRU and keep a third one on the side
</span><br>
<span class="quotelev1">&gt; as you said.
</span><br>
<span class="quotelev1">&gt; How would you group these?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That said, something is going wrong with the grouping code. Right now,
</span><br>
<span class="quotelev1">&gt; it should keep 3 Group3 under the machine. I am looking at it.
</span><br>
<p>So it seems to me that you basically get a distance matrix of PU objects
<br>
from the system (the machine vendor), and probably you do agglomerative
<br>
average linkage cluster analysis on it to determine the number and
<br>
hierarchy of HWLOC_OBJ_GROUP objects (beyond what can be named by some
<br>
hardware building block like core or cache etc). Is this right?
<br>
I'm wondering if this is the right approach. Did you try other distance
<br>
functions (e.g. single linkage)?
<br>
<p>Besides that, and from the viewpoint of a tree representation of the
<br>
result of clustering, I would expect that every pair of two objects of
<br>
same type have common anchestors of the same type. For the given UV
<br>
topology I would not expect that there are two Group3 that have a Group4
<br>
ancestor, while the 3rd Group3 is direct child of Machine. I would
<br>
expect EITHER that the 3rd Group3 is also child of a Group4 (maybe a
<br>
second one), OR that there is no Group4.
<br>
<p>Sincerely BK
<br>
<p><span class="quotelev1">&gt; Brice
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
<li><strong>Next message:</strong> <a href="1227.php">Bernd Kallies: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<li><strong>Previous message:</strong> <a href="1225.php">Brice Goglin: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<li><strong>In reply to:</strong> <a href="1223.php">Brice Goglin: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1228.php">Brice Goglin: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<li><strong>Reply:</strong> <a href="1228.php">Brice Goglin: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
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
