<?
$subject_val = "Re: [hwloc-users] Re :  lstopo on multiple machines";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 16 13:59:53 2011" -->
<!-- isoreceived="20110816175953" -->
<!-- sent="Tue, 16 Aug 2011 19:59:46 +0200" -->
<!-- isosent="20110816175946" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Re :  lstopo on multiple machines" -->
<!-- id="4E4AB012.10103_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20110816142738.GA2486_at_mhost" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Re :  lstopo on multiple machines<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-16 13:59:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0416.php">Samuel Thibault: "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.2.1rc3 released"</a>
<li><strong>Previous message:</strong> <a href="0414.php">Samuel Thibault: "Re: [hwloc-users] Magny Cours L3 cache issue"</a>
<li><strong>In reply to:</strong> <a href="0411.php">Marcelo Alaniz: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0417.php">Marcelo Alaniz: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
<li><strong>Reply:</strong> <a href="0417.php">Marcelo Alaniz: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Marcelo,
<br>
<p>Could you describe a bit more what you would like to see? What we're
<br>
thinking of doing is having something like:
<br>
<p>System #0
<br>
&nbsp;&nbsp;Machine #0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Socket #0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;Machine #1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
<p><p>If people discover the network topology too (for instance the hierarchy
<br>
of switches), we could even have
<br>
<p>System #0
<br>
&nbsp;&nbsp;Group0 #0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Group1 #0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Machine #0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Machine #4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Group1 #1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Machine #1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Machine #3
<br>
&nbsp;&nbsp;Group0 #1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Group1 #2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Machine #2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Machine #7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Group1 #3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Machine #5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Machine #6
<br>
<p><p>Second question. How would like this topology to be built? We could have
<br>
something like this in the API:
<br>
<p>/* create a topology with only a System object root */
<br>
hwloc_topology_create_empty()
<br>
<p>/* load a XML topology and insert it below a given object */
<br>
hwloc_topology_insert_xml_by_parent()
<br>
<p>A new utility would use these to agregate multiple XML topologies. You
<br>
would have to run lstopo foo.xml on each node and run this new utility
<br>
to create the global XML topology. Finally, you can run hwloc with the
<br>
new global topology and do whatever you want.
<br>
<p>Brice
<br>
<p><p><p>Le 16/08/2011 16:27, Marcelo Alaniz a &#233;crit :
<br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev1">&gt; Hash: SHA1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Brice, 
</span><br>
<span class="quotelev1">&gt; I'm a PhD Student in Argentina (SouthAmerica). Now, i'm focus on
</span><br>
<span class="quotelev1">&gt; hybrid computing and mapping technics for clusters multicore.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i'm using hwloc to discover the nodes architecture ... the multinode
</span><br>
<span class="quotelev1">&gt; topology detection will be great for me! because i will try to make
</span><br>
<span class="quotelev1">&gt; that in the nearless future.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers!
</span><br>
<span class="quotelev1">&gt; Marcelo
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0416.php">Samuel Thibault: "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.2.1rc3 released"</a>
<li><strong>Previous message:</strong> <a href="0414.php">Samuel Thibault: "Re: [hwloc-users] Magny Cours L3 cache issue"</a>
<li><strong>In reply to:</strong> <a href="0411.php">Marcelo Alaniz: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0417.php">Marcelo Alaniz: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
<li><strong>Reply:</strong> <a href="0417.php">Marcelo Alaniz: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
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
