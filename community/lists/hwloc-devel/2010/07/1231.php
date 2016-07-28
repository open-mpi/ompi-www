<?
$subject_val = "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 29 06:52:31 2010" -->
<!-- isoreceived="20100729105231" -->
<!-- sent="Thu, 29 Jul 2010 12:51:59 +0200" -->
<!-- isosent="20100729105159" -->
<!-- name="Bernd Kallies" -->
<!-- email="kallies_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet" -->
<!-- id="1280400719.2300.322.camel_at_kallies.zib.de" -->
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
<strong>Date:</strong> 2010-07-29 06:51:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1232.php">Brice Goglin: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<li><strong>Previous message:</strong> <a href="1230.php">Brice Goglin: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<li><strong>In reply to:</strong> <a href="1225.php">Brice Goglin: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1232.php">Brice Goglin: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<li><strong>Reply:</strong> <a href="1232.php">Brice Goglin: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2010-07-28 at 20:36 +0200, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Actually, all these distance matrices (except the NUMA nodes' one, the
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Michael Raymond, anything to say about this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Here is the answer from Alexis Cousein from SGI regarding UV topology:
<br>
<p><span class="quotelev1">&gt; THe first UV flavour indeed uses a routerless topology, not a fat
</span><br>
<span class="quotelev1">&gt; tree one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Basically, the system has paired nodes with dual NUMALink5 connectors
</span><br>
<span class="quotelev1">&gt; between them, on the signal backplane.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; then on each pair the even node is used to make &quot;horizontal&quot; rings
</span><br>
<span class="quotelev1">&gt; (across the four pairs in an IRU half, possibly extending to IRU
</span><br>
<span class="quotelev1">&gt; halves at the same height on other racks) and the odd node is used
</span><br>
<span class="quotelev1">&gt; to make &quot;vertical&quot; rings (connecting all the odd nodes together that
</span><br>
<span class="quotelev1">&gt; are at the same left-right position, on the four IRU halves in
</span><br>
<span class="quotelev1">&gt; a rack, possibly extending to a rack that's a lot further if e.g.
</span><br>
<span class="quotelev1">&gt; the H-V ring structure is 8-8).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All these rings, though, should actually be closed, or you have
</span><br>
<span class="quotelev1">&gt; missing cables or nodes. The machines are designed to still
</span><br>
<span class="quotelev1">&gt; work with those rings broken (if e.g. you pull a blade out) but
</span><br>
<span class="quotelev1">&gt; most of these breakages have large performance implications for
</span><br>
<span class="quotelev1">&gt; some remote memory accesses that would use the broken
</span><br>
<span class="quotelev1">&gt; links on a completely cabled system.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are other open rings that are normal, though (if e.g.
</span><br>
<span class="quotelev1">&gt; you go from even to odd, vertical to another odd and then back to
</span><br>
<span class="quotelev1">&gt; even again, you have a ring that is not closed because the even
</span><br>
<span class="quotelev1">&gt; nodes have no vertical connections corresponding to that of the
</span><br>
<span class="quotelev1">&gt; odd nodes).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is actually another topology possible that looks much more
</span><br>
<span class="quotelev1">&gt; like Altix4700, but that will use routers that will only become
</span><br>
<span class="quotelev1">&gt; available at the end of the year (and, of course, there is quite some
</span><br>
<span class="quotelev1">&gt; extra cost associated with them).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When we use a batch scheduler, for one rack systems, the node sets
</span><br>
<span class="quotelev1">&gt; we tend to use are:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -memory (half a blade)
</span><br>
<span class="quotelev1">&gt; -blade
</span><br>
<span class="quotelev1">&gt; -bladepair ( blades N and N+1 for N even)
</span><br>
<span class="quotelev1">&gt; -IRU quadrant
</span><br>
<span class="quotelev1">&gt; -IRU half (upper or lower)
</span><br>
<span class="quotelev1">&gt; -IRU
</span><br>
<span class="quotelev1">&gt; -rack
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; although you could build some extra ones that also make sense.
</span><br>
<p>He basically explains the &quot;network&quot; topology, which, however is similar
<br>
to the grouping of NUMA nodes on this SMP machine.
<br>
<p>To my opinion, the job hwloc does in forming &quot;groups&quot; is basically OK.
<br>
Also the group content makes sense.
<br>
<p>The only &quot;strange&quot; thing is, that the grouping code becomes disturbed on
<br>
this special machine, which only contains 3/4 of the NUMA nodes that are
<br>
found in a fully equipped rack. Physically, the 2nd enclosure is only
<br>
half filled. I'm wondering what would happen in a fully equipped rack.
<br>
<p>Will there be 4xGroup3, or 2xGroup4 with 2xGroup3 each? From my feeling
<br>
the latter should be happen. This also means, that the current machine
<br>
should have 2xGroup4, where the 1st one has 2xGroup3, and the 2nd has
<br>
1xGroup3.
<br>
<p>Sincerely BK
<br>
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
<li><strong>Next message:</strong> <a href="1232.php">Brice Goglin: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<li><strong>Previous message:</strong> <a href="1230.php">Brice Goglin: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<li><strong>In reply to:</strong> <a href="1225.php">Brice Goglin: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1232.php">Brice Goglin: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<li><strong>Reply:</strong> <a href="1232.php">Brice Goglin: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
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
