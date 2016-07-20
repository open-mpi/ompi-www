<?
$subject_val = "Re: [hwloc-users] Re :  lstopo on multiple machines";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 17 05:58:34 2011" -->
<!-- isoreceived="20110817095834" -->
<!-- sent="Wed, 17 Aug 2011 05:58:09 -0400" -->
<!-- isosent="20110817095809" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Re :  lstopo on multiple machines" -->
<!-- id="3914E717-D081-4556-A571-9B8FA25ECEB8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E4B5F2E.8060304_at_inria.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-17 05:58:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0421.php">PULVERAIL Sébastien: "[hwloc-users] Bind current thread to a specific cpu"</a>
<li><strong>Previous message:</strong> <a href="0419.php">Brice Goglin: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
<li><strong>In reply to:</strong> <a href="0419.php">Brice Goglin: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0410.php">Samuel Thibault: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 17, 2011, at 2:26 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev2">&gt;&gt; What about an MPI version of lstopo ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you want to see the entire MPI job topology within a single topology,
</span><br>
<span class="quotelev1">&gt; doing it inside hwloc would likely require to check for mpirun/mpiexec
</span><br>
<span class="quotelev1">&gt; parameters and so on at configure... big mess. Something like below with
</span><br>
<span class="quotelev1">&gt; the previously proposed API/utility may be enough:
</span><br>
<span class="quotelev1">&gt;    mpirun lstopo &lt;hostname&gt;.xml
</span><br>
<span class="quotelev1">&gt;    hwloc_xml_agregate cluster.xml *.xml
</span><br>
<span class="quotelev1">&gt;    export HWLOC_XMLFILE=cluster.xml
</span><br>
<p>Much as an MPI version sounds interesting (even potentially as a 3rd-party tool), I have to agree that a shell script similar to what Brice typed might be much easier.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0421.php">PULVERAIL Sébastien: "[hwloc-users] Bind current thread to a specific cpu"</a>
<li><strong>Previous message:</strong> <a href="0419.php">Brice Goglin: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
<li><strong>In reply to:</strong> <a href="0419.php">Brice Goglin: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0410.php">Samuel Thibault: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
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
