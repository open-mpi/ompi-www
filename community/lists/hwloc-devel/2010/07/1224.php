<?
$subject_val = "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 28 12:58:49 2010" -->
<!-- isoreceived="20100728165849" -->
<!-- sent="Wed, 28 Jul 2010 18:58:42 +0200" -->
<!-- isosent="20100728165842" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet" -->
<!-- id="20100728165842.GR5759_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-15" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-28 12:58:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1225.php">Brice Goglin: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<li><strong>Previous message:</strong> <a href="1223.php">Brice Goglin: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<li><strong>Maybe in reply to:</strong> <a href="1221.php">Bernd Kallies: "[hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bernd Kallies, le Wed 28 Jul 2010 18:09:28 +0200, a &#233;crit :
<br>
<span class="quotelev3">&gt; &gt; &gt; topology is understandeable. I'm wondering about &quot;Group4&quot;, which
</span><br>
<span class="quotelev3">&gt; &gt; &gt; contains the three &quot;Group3&quot; objects. lstopo should print &quot;1534GB&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; instead of &quot;1022GB&quot;. There is only one &quot;Group4&quot; object, and there are no
</span><br>
<span class="quotelev3">&gt; &gt; &gt; other direct children of the root object.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Indeed, there's something wrong.
</span><br>
<span class="quotelev2">&gt; &gt; Can you send the output of tests/linux/gather_topology.sh so that I try
</span><br>
<span class="quotelev2">&gt; &gt; to debug this from here?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is attached.
</span><br>
<p>Actually the Group4 object doesn't contain the three Group3 objects:
<br>
<p>&#164; grep 'Group[34]' gather-topology-uv.tar.gz.output  
<br>
&nbsp;&nbsp;Group4 #0 (total=1071374336KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Group3 #0 (total=534634496KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Group3 #1 (total=536739840KB)
<br>
&nbsp;&nbsp;Group3 #2 (total=536739840KB)
<br>
<p>You can also see it using
<br>
lstopo --gridsize 2 --fontsize 5 
<br>
for instance.
<br>
<p>So it seems all good to me.
<br>
<p><span class="quotelev1">&gt; We have one UV rack, which is filled with 3/4 of the max. number of
</span><br>
<span class="quotelev1">&gt; blades. According to the specs, two NUMA nodes form one &quot;blade&quot;. This
</span><br>
<span class="quotelev1">&gt; level corresponds to &quot;Group0&quot; in the hwloc topology. Two blades are
</span><br>
<span class="quotelev1">&gt; cross-linked via the NUMAlink, forming &quot;paired nodes&quot; = &quot;Group1&quot;. What
</span><br>
<span class="quotelev1">&gt; &quot;Group2&quot; might correspond to - I don't know. &quot;Group3&quot; corresponds to one
</span><br>
<span class="quotelev1">&gt; &quot;chassis&quot; or IRU. &quot;Group4&quot; may be an &quot;enclosure&quot;, and &quot;Machine&quot; is the
</span><br>
<span class="quotelev1">&gt; &quot;rack&quot;.
</span><br>
<p>Wow, it's impressive that hwloc actually finds out all this just from
<br>
the distance matrix :)
<br>
<p><span class="quotelev1">&gt; From my opinion the hwloc topology for our machine should contain 2x
</span><br>
<span class="quotelev1">&gt; Group4.
</span><br>
<p>hwloc can not find Group4: it finds out groups from the distance matrix.
<br>
Since there are no two Group3 objects to group, it doesn't know some
<br>
notion of Group4 exists there.
<br>
<p><span class="quotelev1">&gt; However, when walking the topology tree via the API, then it seems to
</span><br>
<span class="quotelev1">&gt; contain correct details.
</span><br>
<p>Yep :)
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1225.php">Brice Goglin: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<li><strong>Previous message:</strong> <a href="1223.php">Brice Goglin: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<li><strong>Maybe in reply to:</strong> <a href="1221.php">Bernd Kallies: "[hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
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
