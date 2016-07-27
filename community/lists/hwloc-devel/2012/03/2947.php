<?
$subject_val = "Re: [hwloc-devel] PCI device name question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 20 10:53:48 2012" -->
<!-- isoreceived="20120320145348" -->
<!-- sent="Tue, 20 Mar 2012 10:53:42 -0400" -->
<!-- isosent="20120320145342" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] PCI device name question" -->
<!-- id="EA3900F1-9E70-49BA-AE12-79710FFF31E2_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4F68985F.8070503_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] PCI device name question<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-20 10:53:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2948.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>Previous message:</strong> <a href="2946.php">Jeffrey Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4409"</a>
<li><strong>In reply to:</strong> <a href="2945.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2948.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>Reply:</strong> <a href="2948.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 20, 2012, at 10:46 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Is there a way in the hwloc topology data to tell which port eth0 and eth1 correspond to?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You should have a &quot;Address&quot; info attribute in each eth object containing
</span><br>
<span class="quotelev1">&gt; something like 80:34:00:48:fe:80:00:00:00:00:00:01:00:02:c9:03:00:0b:53:49
</span><br>
<span class="quotelev1">&gt; Is this useful?
</span><br>
<p>I looked at that.  It's not immediately clear to me how to map that to &quot;ib0&quot; and &quot;ib1&quot;, for example.
<br>
<p><span class="quotelev1">&gt; Otherwise, I don't see any way to link IB ports with net interfaces in
</span><br>
<span class="quotelev1">&gt; sysfs:
</span><br>
<span class="quotelev1">&gt; * My /sys/class/infiniband/mlx4_0 contains a &quot;ports&quot; directory with &quot;1&quot;
</span><br>
<span class="quotelev1">&gt; and &quot;2&quot; in there, but I can't find anything related to my &quot;ib0&quot; and
</span><br>
<span class="quotelev1">&gt; &quot;ib1&quot; interface in there.
</span><br>
<span class="quotelev1">&gt; * /sys/class/net/ib0 doesn't seem to contain anything about IB ports either.
</span><br>
<p><p>Bummer.
<br>
<p>So much for that OMPI feature, then...  (per user request, I was going to allow mca_btl_openif_if_include/exclude to be specified by ethernet devices, not verbs devices)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2948.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>Previous message:</strong> <a href="2946.php">Jeffrey Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4409"</a>
<li><strong>In reply to:</strong> <a href="2945.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2948.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>Reply:</strong> <a href="2948.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
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
