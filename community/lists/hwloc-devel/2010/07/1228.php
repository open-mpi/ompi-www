<?
$subject_val = "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 28 15:17:04 2010" -->
<!-- isoreceived="20100728191704" -->
<!-- sent="Wed, 28 Jul 2010 21:14:07 +0200" -->
<!-- isosent="20100728191407" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet" -->
<!-- id="4C50817F.4080805_at_inria.fr" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="1280343559.2300.221.camel_at_kallies.zib.de" -->
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
<strong>Date:</strong> 2010-07-28 15:14:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1229.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2369)"</a>
<li><strong>Previous message:</strong> <a href="1227.php">Bernd Kallies: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<li><strong>In reply to:</strong> <a href="1226.php">Bernd Kallies: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1230.php">Brice Goglin: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 28/07/2010 20:59, Bernd Kallies a &#233;crit :
<br>
<span class="quotelev1">&gt; So it seems to me that you basically get a distance matrix of PU objects
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>NUMA node objects actually. That's what Linux and Solaris report.
<br>
<p><span class="quotelev1">&gt; from the system (the machine vendor), and probably you do agglomerative
</span><br>
<span class="quotelev1">&gt; average linkage cluster analysis on it to determine the number and
</span><br>
<span class="quotelev1">&gt; hierarchy of HWLOC_OBJ_GROUP objects (beyond what can be named by some
</span><br>
<span class="quotelev1">&gt; hardware building block like core or cache etc). Is this right?
</span><br>
<span class="quotelev1">&gt; I'm wondering if this is the right approach. Did you try other distance
</span><br>
<span class="quotelev1">&gt; functions (e.g. single linkage)?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>In 1.0.x we look at &quot;complete graphs with minimal distances&quot; and then at
<br>
&quot;transitive graphs with minimal distances&quot;. One problem with this old
<br>
code is:
<br>
if finds that Group0#0 and #1 have minimal distance between them (22)
<br>
but it ignores the fact that Group0#2 is also at the same distance from
<br>
#1. And so on.
<br>
<p>This code actually gives completely invalid groups on some strange HP
<br>
machines. In trunk, the code was reworked/cleaned to only look for
<br>
transitive graphs. Given your distance matrix, everybody is transitively
<br>
connected to everybody through one or several minimal distance links, so
<br>
everybody is grouped together in the end.
<br>
<p><span class="quotelev1">&gt; Besides that, and from the viewpoint of a tree representation of the
</span><br>
<span class="quotelev1">&gt; result of clustering, I would expect that every pair of two objects of
</span><br>
<span class="quotelev1">&gt; same type have common anchestors of the same type. For the given UV
</span><br>
<span class="quotelev1">&gt; topology I would not expect that there are two Group3 that have a Group4
</span><br>
<span class="quotelev1">&gt; ancestor, while the 3rd Group3 is direct child of Machine. I would
</span><br>
<span class="quotelev1">&gt; expect EITHER that the 3rd Group3 is also child of a Group4 (maybe a
</span><br>
<span class="quotelev1">&gt; second one), OR that there is no Group4.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Right, I'll see if I can fix this without changing to many things in the
<br>
1.0 branch.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1229.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2369)"</a>
<li><strong>Previous message:</strong> <a href="1227.php">Bernd Kallies: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<li><strong>In reply to:</strong> <a href="1226.php">Bernd Kallies: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1230.php">Brice Goglin: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
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
