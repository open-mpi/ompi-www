<?
$subject_val = "Re: [hwloc-devel] hwloc-1.3.1rc1: odd &quot;make check&quot; failure on Solaris 11";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 03:53:10 2011" -->
<!-- isoreceived="20111214085310" -->
<!-- sent="Wed, 14 Dec 2011 09:53:05 +0100" -->
<!-- isosent="20111214085305" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.3.1rc1: odd &amp;quot;make check&amp;quot; failure on Solaris 11" -->
<!-- id="20111214085305.GH4197_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1887050025.1977.1323852623075.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 03:53:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2629.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1rc1: odd &quot;make check&quot; failure on Solaris 11"</a>
<li><strong>Previous message:</strong> <a href="2627.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1rc1: odd &quot;make check&quot; failure on Solaris 11"</a>
<li><strong>Maybe in reply to:</strong> <a href="2627.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1rc1: odd &quot;make check&quot; failure on Solaris 11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2629.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1rc1: odd &quot;make check&quot; failure on Solaris 11"</a>
<li><strong>Reply:</strong> <a href="2629.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1rc1: odd &quot;make check&quot; failure on Solaris 11"</a>
<li><strong>Reply:</strong> <a href="2630.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1rc1: odd &quot;make check&quot; failure on Solaris 11"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul H. Hargrove, le Wed 14 Dec 2011 09:50:23 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; It appears that something has passed bogus arguments to hwloc-calc.
</span><br>
<span class="quotelev1">&gt; Adding &quot;set -x&quot; in test-hwloc-calc.sh.in I can find the failure is from:
</span><br>
<span class="quotelev1">&gt;      ./hwloc-calc --if synthetic --input &quot;node:4 core:4 pu:4&quot; pu:22-47
</span><br>
<span class="quotelev1">&gt; --largest --sep &quot;&quot;
</span><br>
<span class="quotelev1">&gt; Which I can confirm fails when run by hand on this platform, but works fine
</span><br>
<span class="quotelev1">&gt; elsewhere.
</span><br>
<p>IIRC, the libtool-generated hwloc-calc shell script has issues with
<br>
empty parameters, such as &quot;&quot; above...
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2629.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1rc1: odd &quot;make check&quot; failure on Solaris 11"</a>
<li><strong>Previous message:</strong> <a href="2627.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1rc1: odd &quot;make check&quot; failure on Solaris 11"</a>
<li><strong>Maybe in reply to:</strong> <a href="2627.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1rc1: odd &quot;make check&quot; failure on Solaris 11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2629.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1rc1: odd &quot;make check&quot; failure on Solaris 11"</a>
<li><strong>Reply:</strong> <a href="2629.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1rc1: odd &quot;make check&quot; failure on Solaris 11"</a>
<li><strong>Reply:</strong> <a href="2630.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1rc1: odd &quot;make check&quot; failure on Solaris 11"</a>
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
