<?
$subject_val = "Re: [hwloc-devel] hwloc 1.0-rc5 cannot recreate hwloc.7 after make distclean";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  6 16:29:52 2010" -->
<!-- isoreceived="20100506202952" -->
<!-- sent="Thu, 6 May 2010 16:29:47 -0400" -->
<!-- isosent="20100506202947" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc 1.0-rc5 cannot recreate hwloc.7 after make distclean" -->
<!-- id="23DF85B7-7D44-4D3B-8772-98B6F23C1BD2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D45958078CD65C429557B4C5F492B6A60770E4EC_at_IS-EX-BEV3.unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc 1.0-rc5 cannot recreate hwloc.7 after make distclean<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-06 16:29:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0972.php">Brice Goglin: "Re: [hwloc-devel] Requirements for building hwloc with XML support ?"</a>
<li><strong>Previous message:</strong> <a href="0970.php">Christopher Samuel: "[hwloc-devel] Requirements for building hwloc with XML support ?"</a>
<li><strong>In reply to:</strong> <a href="0969.php">Christopher Samuel: "[hwloc-devel] hwloc 1.0-rc5 cannot recreate hwloc.7 after make distclean"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0976.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.0-rc5 cannot recreate hwloc.7 after make distclean"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed -- <a href="https://svn.open-mpi.org/trac/hwloc/changeset/2077">https://svn.open-mpi.org/trac/hwloc/changeset/2077</a>.
<br>
<p>Thanks!
<br>
<p><p>On May 6, 2010, at 2:45 PM, Christopher Samuel wrote:
<br>
<p><span class="quotelev1">&gt; This bug seems easy to reproduce:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../configure
</span><br>
<span class="quotelev1">&gt; make
</span><br>
<span class="quotelev1">&gt; make distclean
</span><br>
<span class="quotelev1">&gt; ../configure
</span><br>
<span class="quotelev1">&gt; make
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; make[1]: *** No rule to make target `hwloc.7', needed by `all-am'.  Stop.
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/samuel/Downloads/HWLOC/hwloc-1.0rc5/utils'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;   Christopher Samuel - Senior Systems Administrator
</span><br>
<span class="quotelev1">&gt;   VLSCI - Victorian Life Sciences Computational Initiative
</span><br>
<span class="quotelev1">&gt;   Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev1">&gt;           <a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
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
<li><strong>Next message:</strong> <a href="0972.php">Brice Goglin: "Re: [hwloc-devel] Requirements for building hwloc with XML support ?"</a>
<li><strong>Previous message:</strong> <a href="0970.php">Christopher Samuel: "[hwloc-devel] Requirements for building hwloc with XML support ?"</a>
<li><strong>In reply to:</strong> <a href="0969.php">Christopher Samuel: "[hwloc-devel] hwloc 1.0-rc5 cannot recreate hwloc.7 after make distclean"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0976.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.0-rc5 cannot recreate hwloc.7 after make distclean"</a>
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
