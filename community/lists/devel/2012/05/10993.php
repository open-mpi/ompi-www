<?
$subject_val = "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 10 08:57:41 2012" -->
<!-- isoreceived="20120510125741" -->
<!-- sent="Thu, 10 May 2012 15:57:33 +0300" -->
<!-- isosent="20120510125733" -->
<!-- name="Yevgeny Kliteynik" -->
<!-- email="kliteyn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)" -->
<!-- id="4FABBB3D.7050509_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4FABB7BC.3010706_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)<br>
<strong>From:</strong> Yevgeny Kliteynik (<em>kliteyn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-10 08:57:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10994.php">Jeff Squyres: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<li><strong>Previous message:</strong> <a href="10992.php">Yevgeny Kliteynik: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<li><strong>In reply to:</strong> <a href="10992.php">Yevgeny Kliteynik: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10994.php">Jeff Squyres: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<li><strong>Reply:</strong> <a href="10994.php">Jeff Squyres: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10-May-12 3:42 PM, Yevgeny Kliteynik wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here are the ActiveSpeed values:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   1: SDR   - 2.5 Gb/s * (8/10 coding)
</span><br>
<span class="quotelev1">&gt;   2: DDR   - 5   Gb/s * (8/10 coding)
</span><br>
<span class="quotelev1">&gt;   4: QDR   - 10  Gb/s * (8/10 coding)
</span><br>
<span class="quotelev1">&gt;   8: FDR10 - 10  Gb/s * (64/66 coding)
</span><br>
<span class="quotelev1">&gt; 16: FDR   - 14  Gbps * (64/66 coding)
</span><br>
<span class="quotelev1">&gt; 32: EDR   - 25  Gbs  * (64/66 coding)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; EDR is not out yet, so we can ignore it for the sake of this patch.
</span><br>
<span class="quotelev1">&gt; It is also true that *most* of IB cables are 4x.
</span><br>
<span class="quotelev1">&gt; There are 12x clusters out there (like TACC's Ranger), and sometimes
</span><br>
<span class="quotelev1">&gt; there are 1x links (mostly because the cable is not perfect or too long).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So cases of 4 and 8 are not the same for us, because MPI needs actual
</span><br>
<span class="quotelev1">&gt; *data* rate instead of *bit* rate, which is different in these cases.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll send a patch for review in a minute...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>How about this patch? If it looks OK, I'll commit to trunk and open CMR.
<br>
<p>ndex: btl_openib_component.c
<br>
===================================================================
<br>
--- btl_openib_component.c      (revision 26420)
<br>
+++ btl_openib_component.c      (working copy)
<br>
@@ -810,8 +810,10 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;we have to look up the values corresponding to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port-&gt;active_speed and port-&gt;active_width.  These
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;are enums corresponding to the IB spec.  Overall
<br>
-                   forumula is 80% of the reported speed (to get the
<br>
-                   true link speed) times the number of links. */
<br>
+                   forumula to get the true link speed is 8/10 or
<br>
+                   64/66 of the reported speed (depends on the coding
<br>
+                   that is being used for the particular speed) times
<br>
+                   the number of links. */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;switch (ib_port_attr-&gt;active_speed) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case 1:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* 2.5Gbps * 0.8, in megabits */
<br>
@@ -826,9 +828,13 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;openib_btl-&gt;super.btl_bandwidth = 8000;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case 8:
<br>
-                    /* 40.0Gbps * 0.8, in megabits */
<br>
-                    openib_btl-&gt;super.btl_bandwidth = 32000;
<br>
+                    /* FDR10: 10.0Gbps * 64/66, in megabits */
<br>
+                    openib_btl-&gt;super.btl_bandwidth = 9700;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
+                case 16:
<br>
+                    /* FDR: 14.0Gbps * 64/66, in megabits */
<br>
+                    openib_btl-&gt;super.btl_bandwidth = 13600;
<br>
+                    break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Who knows?  Declare this port unreachable (do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*not* return ERR_VALUE_OF_OUT_OF_BOUNDS; that
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10994.php">Jeff Squyres: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<li><strong>Previous message:</strong> <a href="10992.php">Yevgeny Kliteynik: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<li><strong>In reply to:</strong> <a href="10992.php">Yevgeny Kliteynik: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10994.php">Jeff Squyres: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<li><strong>Reply:</strong> <a href="10994.php">Jeff Squyres: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
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
