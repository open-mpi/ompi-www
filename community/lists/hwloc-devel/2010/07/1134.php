<?
$subject_val = "Re: [hwloc-devel] How to get information about hwloc objects?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  7 05:22:59 2010" -->
<!-- isoreceived="20100707092259" -->
<!-- sent="Wed, 07 Jul 2010 11:21:06 +0200" -->
<!-- isosent="20100707092106" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] How to get information about hwloc objects?" -->
<!-- id="4C344702.3000902_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201007071115.19347.jhladky_at_redhat.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] How to get information about hwloc objects?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-07 05:21:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1135.php">Jirka Hladky: "Re: [hwloc-devel] hwloc-distrib: how to start at lower hiearchy level?"</a>
<li><strong>Previous message:</strong> <a href="1133.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>In reply to:</strong> <a href="1133.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1136.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Reply:</strong> <a href="1136.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Reply:</strong> <a href="1138.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Reply:</strong> <a href="1139.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 07/07/2010 11:15, Jirka Hladky a &#233;crit :
<br>
<span class="quotelev1">&gt; I have also seen you recent change:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==========================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --list &lt;type|depth&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and replaces
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --nodelist with --list numanode (still supported but undocumented)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It should work for core and socket as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==========================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have downloaded hwloc-1.1a1r2290.tar.bz2
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.open-mpi.org/software/hwloc/nightly/trunk/hwloc-1.1a1r2290.tar.bz2">http://www.open-mpi.org/software/hwloc/nightly/trunk/hwloc-1.1a1r2290.tar.bz2</a>&gt;but
</span><br>
<span class="quotelev1">&gt; apparently the modification is not there yet. If I get right you have
</span><br>
<span class="quotelev1">&gt; implemented following, right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I didn't commit this change yet, I was waiting for some feedback first
<br>
(not sure if --list and --objects are good names for these options). You
<br>
should apply the patch that I sent in my previous mail.
<br>
<p><span class="quotelev1">&gt; I have few suggestions regarding error handling in hwloc-calc 1.0.1:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =====================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc-calc --nodelist --physical proc:0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =&gt; gives nothing back on systems without NUMA. I would expect some
</span><br>
<span class="quotelev1">&gt; sort of error message on stderr.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc-calc --nodelist --physical proc:120
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =&gt;gives nothing back. On that system, there is NUMA but only 64
</span><br>
<span class="quotelev1">&gt; processors. I would expect error message &quot;proc:120 does not exist&quot;
</span><br>
<span class="quotelev1">&gt; reported on stderr.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Those errors are only reported when -v is given (as well as other
<br>
verbose messages). You're right, we should always show them.
<br>
<p>Brice
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1134/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1135.php">Jirka Hladky: "Re: [hwloc-devel] hwloc-distrib: how to start at lower hiearchy level?"</a>
<li><strong>Previous message:</strong> <a href="1133.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>In reply to:</strong> <a href="1133.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1136.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Reply:</strong> <a href="1136.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Reply:</strong> <a href="1138.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Reply:</strong> <a href="1139.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
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
