<?
$subject_val = "Re: [hwloc-devel] hwloc-1.3.1rc1: odd &quot;make check&quot; failure on Solaris 11";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 04:00:11 2011" -->
<!-- isoreceived="20111214090011" -->
<!-- sent="Wed, 14 Dec 2011 10:00:06 +0100" -->
<!-- isosent="20111214090006" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.3.1rc1: odd &amp;quot;make check&amp;quot; failure on Solaris 11" -->
<!-- id="4EE86596.70606_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20111214085305.GH4197_at_type.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.3.1rc1: odd &quot;make check&quot; failure on Solaris 11<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 04:00:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2630.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1rc1: odd &quot;make check&quot; failure on Solaris 11"</a>
<li><strong>Previous message:</strong> <a href="2628.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1rc1: odd &quot;make check&quot; failure on Solaris 11"</a>
<li><strong>In reply to:</strong> <a href="2628.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1rc1: odd &quot;make check&quot; failure on Solaris 11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2630.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1rc1: odd &quot;make check&quot; failure on Solaris 11"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 14/12/2011 09:53, Samuel Thibault a &#233;crit :
<br>
<span class="quotelev1">&gt; Paul H. Hargrove, le Wed 14 Dec 2011 09:50:23 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; It appears that something has passed bogus arguments to hwloc-calc.
</span><br>
<span class="quotelev2">&gt;&gt; Adding &quot;set -x&quot; in test-hwloc-calc.sh.in I can find the failure is from:
</span><br>
<span class="quotelev2">&gt;&gt;      ./hwloc-calc --if synthetic --input &quot;node:4 core:4 pu:4&quot; pu:22-47
</span><br>
<span class="quotelev2">&gt;&gt; --largest --sep &quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; Which I can confirm fails when run by hand on this platform, but works fine
</span><br>
<span class="quotelev2">&gt;&gt; elsewhere.
</span><br>
<span class="quotelev1">&gt; IIRC, the libtool-generated hwloc-calc shell script has issues with
</span><br>
<span class="quotelev1">&gt; empty parameters, such as &quot;&quot; above...
</span><br>
<p>I guess I should just change this &quot;&quot; into something else, I am just
<br>
testing --sep here, not --sep with a specific string.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2630.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1rc1: odd &quot;make check&quot; failure on Solaris 11"</a>
<li><strong>Previous message:</strong> <a href="2628.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1rc1: odd &quot;make check&quot; failure on Solaris 11"</a>
<li><strong>In reply to:</strong> <a href="2628.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1rc1: odd &quot;make check&quot; failure on Solaris 11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2630.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1rc1: odd &quot;make check&quot; failure on Solaris 11"</a>
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
