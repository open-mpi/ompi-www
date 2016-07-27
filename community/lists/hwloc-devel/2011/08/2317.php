<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3671";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 25 02:58:49 2011" -->
<!-- isoreceived="20110825065849" -->
<!-- sent="Thu, 25 Aug 2011 08:58:43 +0200" -->
<!-- isosent="20110825065843" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3671" -->
<!-- id="4E55F2A3.90106_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20110824221957.GL4746_at_type" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3671<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-25 02:58:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2318.php">MPI Team: "[hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="2316.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3rc1r3668)"</a>
<li><strong>In reply to:</strong> <a href="2313.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3671"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 25/08/2011 00:19, Samuel Thibault a &#233;crit :
<br>
<span class="quotelev1">&gt; bgoglin_at_[hidden], le Wed 24 Aug 2011 17:27:50 +0200, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; +  HWLOC_BACKEND_CUSTOM,
</span><br>
<span class="quotelev1">&gt; Actually, maybe rather than &quot;custom&quot;, use &quot;empty&quot;?
</span><br>
<p>Could be better yes.
<br>
<p>I am also thinking of renaming the corresponding insert functions to
<br>
have a common prefix for everything that can modify custom/empty topos:
<br>
&nbsp;&nbsp;&lt;prefix&gt;_insert_topology
<br>
&nbsp;&nbsp;&lt;prefix&gt;_insert_object...
<br>
However, having &quot;empty&quot; in this prefix doesn't look so good to me.
<br>
hwloc_assembler_ ?
<br>
<p>This new insert_object would only work on empty/custom topo (while the
<br>
current insert_misc works after load in a normal topo, or before load in
<br>
a custom/empty topo). Separating these insert functions would also let
<br>
us change from Misc to something else. Misc don't go in any level,
<br>
while we'll probably want a level/depth for intermediate switches
<br>
between the root/system and the machines. So it could be
<br>
&nbsp;&nbsp;&lt;prefix&gt;_insert_group(topology, parent, groupdepth)
<br>
<p>In the end, I'd like to have a dedicated section in the header and doc
<br>
where functions only work on empty/custom topo, and explain that they
<br>
may only insert stuff below the following objects:
<br>
&nbsp;&nbsp;* the root of a custom/empty topo
<br>
&nbsp;&nbsp;* an object return by insert_misc earlier
<br>
If we keep things scattered like currently (set_custom is near
<br>
set_xml/synthetic, both insert_misc are near insert_topology), I am
<br>
afraid we're going to have people try to insert everywhere they want,
<br>
and we'd have to document which parent/sibling/child links are already
<br>
ready before load.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2318.php">MPI Team: "[hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="2316.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3rc1r3668)"</a>
<li><strong>In reply to:</strong> <a href="2313.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3671"</a>
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
