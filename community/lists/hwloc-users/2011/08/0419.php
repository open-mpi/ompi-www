<?
$subject_val = "Re: [hwloc-users] Re :  lstopo on multiple machines";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 17 02:27:00 2011" -->
<!-- isoreceived="20110817062700" -->
<!-- sent="Wed, 17 Aug 2011 08:26:54 +0200" -->
<!-- isosent="20110817062654" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Re :  lstopo on multiple machines" -->
<!-- id="4E4B5F2E.8060304_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E4B5996.9050505_at_unimelb.edu.au" -->
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
<strong>Date:</strong> 2011-08-17 02:26:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0420.php">Jeff Squyres: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
<li><strong>Previous message:</strong> <a href="0418.php">Christopher Samuel: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
<li><strong>In reply to:</strong> <a href="0418.php">Christopher Samuel: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0420.php">Jeff Squyres: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
<li><strong>Reply:</strong> <a href="0420.php">Jeff Squyres: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 17/08/2011 08:03, Christopher Samuel a &#233;crit :
<br>
<span class="quotelev1">&gt; On 17/08/11 00:07, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; That being said, having better support for being able
</span><br>
<span class="quotelev2">&gt; &gt; to aggregate data from multiple hwloc instances
</span><br>
<span class="quotelev2">&gt; &gt; (e.g., lstopo) on multiple machines into a single,
</span><br>
<span class="quotelev2">&gt; &gt; cohesive map, would be great (waving hands here; I have
</span><br>
<span class="quotelev2">&gt; &gt; no specific suggestions).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What about an MPI version of lstopo ?
</span><br>
<p>If you want to see the entire MPI job topology within a single topology,
<br>
doing it inside hwloc would likely require to check for mpirun/mpiexec
<br>
parameters and so on at configure... big mess. Something like below with
<br>
the previously proposed API/utility may be enough:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpirun lstopo &lt;hostname&gt;.xml
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_xml_agregate cluster.xml *.xml
<br>
&nbsp;&nbsp;&nbsp;&nbsp;export HWLOC_XMLFILE=cluster.xml
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0420.php">Jeff Squyres: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
<li><strong>Previous message:</strong> <a href="0418.php">Christopher Samuel: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
<li><strong>In reply to:</strong> <a href="0418.php">Christopher Samuel: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0420.php">Jeff Squyres: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
<li><strong>Reply:</strong> <a href="0420.php">Jeff Squyres: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
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
