<?
$subject_val = "Re: [hwloc-devel] 1.0-rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 26 09:50:26 2010" -->
<!-- isoreceived="20100226145026" -->
<!-- sent="Fri, 26 Feb 2010 09:50:20 -0500" -->
<!-- isosent="20100226145020" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.0-rc1" -->
<!-- id="45753D7E-955E-46B9-BACE-136B72CEC1D7_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B87DB68.2020002_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] 1.0-rc1<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-26 09:50:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0688.php">Samuel Thibault: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Previous message:</strong> <a href="0686.php">Brice Goglin: "[hwloc-devel] 1.0-rc1"</a>
<li><strong>In reply to:</strong> <a href="0686.php">Brice Goglin: "[hwloc-devel] 1.0-rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0688.php">Samuel Thibault: "Re: [hwloc-devel] 1.0-rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I fixed up the embedding code and docs; it's looking in good shape.
<br>
<p>I see this in topology-linux.c:1335:
<br>
<p>&nbsp;&nbsp;unsigned long processor = -1;
<br>
<p>Which seems to be a contradiction in terms.  :-)  There's a similar warning on 1426.
<br>
<p><p>On Feb 26, 2010, at 9:32 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Are we doing a 1.0-rc1 soon ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The only things I see in my TODOlist are:
</span><br>
<span class="quotelev1">&gt; * cleanup allowed_nodeset on Linux so that it only contains existing
</span><br>
<span class="quotelev1">&gt; nodes (it's a *full* cpuset right now, which looks ugly in XML exports :))
</span><br>
<span class="quotelev1">&gt; * ticket #12 &quot;support user-defined processor restriction&quot; might wait for
</span><br>
<span class="quotelev1">&gt; 1.1 or later unless Ashley needs it now
</span><br>
<span class="quotelev1">&gt; * are there actually some important warnings to fix ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="0688.php">Samuel Thibault: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Previous message:</strong> <a href="0686.php">Brice Goglin: "[hwloc-devel] 1.0-rc1"</a>
<li><strong>In reply to:</strong> <a href="0686.php">Brice Goglin: "[hwloc-devel] 1.0-rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0688.php">Samuel Thibault: "Re: [hwloc-devel] 1.0-rc1"</a>
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
