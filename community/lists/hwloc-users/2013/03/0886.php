<?
$subject_val = "Re: [hwloc-users] Many queries creating slow performance";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  5 15:28:18 2013" -->
<!-- isoreceived="20130305202818" -->
<!-- sent="Tue, 5 Mar 2013 20:28:13 +0000" -->
<!-- isosent="20130305202813" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Many queries creating slow performance" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43F6D643_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="513654C5.8030007_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Many queries creating slow performance<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-05 15:28:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0887.php">Fabio Tordini: "Re: [hwloc-users] Trying to get last cpu location"</a>
<li><strong>Previous message:</strong> <a href="0885.php">Brice Goglin: "Re: [hwloc-users] Many queries creating slow performance"</a>
<li><strong>In reply to:</strong> <a href="0885.php">Brice Goglin: "Re: [hwloc-users] Many queries creating slow performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0889.php">Brice Goglin: "Re: [hwloc-users] Many queries creating slow performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, we do this in Open MPI: one process on each server does the lstopo (via C API, of course). That information is then exported to all other processes via XML, so that only 1 process per server walks the /sys trees, etc.
<br>
<p><p>On Mar 5, 2013, at 3:25 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello Simon,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't think anybody every benchmarked this, but people have been complaining this problem appearing on large machines at some point. I have a large SGI machine at work, I'll see if I can reproduce this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One solution is to export the topology to XML once and then have all your MPI process read from XML. Basically, do &quot;lstopo /tmp/foo.xml&quot; and then export HWLOC_XMLFILE=/tmp/foo.xml in the environment before starting your MPI job.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If the topology doesn't change (and that's likely the case), the XML file could even be stored by the administrator in a &quot;standard&quot; location (not in /tmp)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 05/03/2013 20:23, Simon Hammond a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Hi HWLOC users,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We are seeing some significant performance problems using HWLOC 1.6.2 on Intel's MIC products. In one of our configurations we create 56 MPI ranks, each rank then queries the topology of the MIC card before creating threads. We are noticing that if we run 56 MPI ranks as opposed to one the calls to query the topology in HWLOC are very slow, runtime goes from seconds to minutes (and upwards).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We guessed that this might be caused by the kernel serializing access to the /proc filesystem but this is just a hunch. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Has anyone had this problem and found an easy way to change the library / calls to HWLOC so that the slow down is not experienced? Would you describe this as a bug?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your help.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Simon Hammond
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1-(505)-845-7897 / MS-1319
</span><br>
<span class="quotelev2">&gt;&gt; Scalable Computer Architectures
</span><br>
<span class="quotelev2">&gt;&gt; Sandia National Laboratories, NM
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0887.php">Fabio Tordini: "Re: [hwloc-users] Trying to get last cpu location"</a>
<li><strong>Previous message:</strong> <a href="0885.php">Brice Goglin: "Re: [hwloc-users] Many queries creating slow performance"</a>
<li><strong>In reply to:</strong> <a href="0885.php">Brice Goglin: "Re: [hwloc-users] Many queries creating slow performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0889.php">Brice Goglin: "Re: [hwloc-users] Many queries creating slow performance"</a>
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
