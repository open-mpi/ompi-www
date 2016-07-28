<?
$subject_val = "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 10 09:02:02 2012" -->
<!-- isoreceived="20120510130202" -->
<!-- sent="Thu, 10 May 2012 09:01:57 -0400" -->
<!-- isosent="20120510130157" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)" -->
<!-- id="E6A179A8-E7A5-46BF-B026-307AE55A7C31_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4FABBB3D.7050509_at_dev.mellanox.co.il" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-10 09:01:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10995.php">Yevgeny Kliteynik: "Re: [OMPI devel] FDR: bad patch?"</a>
<li><strong>Previous message:</strong> <a href="10993.php">Yevgeny Kliteynik: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<li><strong>In reply to:</strong> <a href="10993.php">Yevgeny Kliteynik: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10995.php">Yevgeny Kliteynik: "Re: [OMPI devel] FDR: bad patch?"</a>
<li><strong>Reply:</strong> <a href="10995.php">Yevgeny Kliteynik: "Re: [OMPI devel] FDR: bad patch?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks ok to me.
<br>
<p>FWIW, I'd put EDR in, if you know the values (even though there won't be any hardware for a while).  That'll just give this code a longer shelf life / future-proof-ness...
<br>
<p><p>On May 10, 2012, at 8:57 AM, Yevgeny Kliteynik wrote:
<br>
<p><span class="quotelev1">&gt; On 10-May-12 3:42 PM, Yevgeny Kliteynik wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here are the ActiveSpeed values:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  1: SDR   - 2.5 Gb/s * (8/10 coding)
</span><br>
<span class="quotelev2">&gt;&gt;  2: DDR   - 5   Gb/s * (8/10 coding)
</span><br>
<span class="quotelev2">&gt;&gt;  4: QDR   - 10  Gb/s * (8/10 coding)
</span><br>
<span class="quotelev2">&gt;&gt;  8: FDR10 - 10  Gb/s * (64/66 coding)
</span><br>
<span class="quotelev2">&gt;&gt; 16: FDR   - 14  Gbps * (64/66 coding)
</span><br>
<span class="quotelev2">&gt;&gt; 32: EDR   - 25  Gbs  * (64/66 coding)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; EDR is not out yet, so we can ignore it for the sake of this patch.
</span><br>
<span class="quotelev2">&gt;&gt; It is also true that *most* of IB cables are 4x.
</span><br>
<span class="quotelev2">&gt;&gt; There are 12x clusters out there (like TACC's Ranger), and sometimes
</span><br>
<span class="quotelev2">&gt;&gt; there are 1x links (mostly because the cable is not perfect or too long).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So cases of 4 and 8 are not the same for us, because MPI needs actual
</span><br>
<span class="quotelev2">&gt;&gt; *data* rate instead of *bit* rate, which is different in these cases.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'll send a patch for review in a minute...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How about this patch? If it looks OK, I'll commit to trunk and open CMR.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ndex: btl_openib_component.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- btl_openib_component.c      (revision 26420)
</span><br>
<span class="quotelev1">&gt; +++ btl_openib_component.c      (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -810,8 +810,10 @@
</span><br>
<span class="quotelev1">&gt;                    we have to look up the values corresponding to
</span><br>
<span class="quotelev1">&gt;                    port-&gt;active_speed and port-&gt;active_width.  These
</span><br>
<span class="quotelev1">&gt;                    are enums corresponding to the IB spec.  Overall
</span><br>
<span class="quotelev1">&gt; -                   forumula is 80% of the reported speed (to get the
</span><br>
<span class="quotelev1">&gt; -                   true link speed) times the number of links. */
</span><br>
<span class="quotelev1">&gt; +                   forumula to get the true link speed is 8/10 or
</span><br>
<span class="quotelev1">&gt; +                   64/66 of the reported speed (depends on the coding
</span><br>
<span class="quotelev1">&gt; +                   that is being used for the particular speed) times
</span><br>
<span class="quotelev1">&gt; +                   the number of links. */
</span><br>
<span class="quotelev1">&gt;                 switch (ib_port_attr-&gt;active_speed) {
</span><br>
<span class="quotelev1">&gt;                 case 1:
</span><br>
<span class="quotelev1">&gt;                     /* 2.5Gbps * 0.8, in megabits */
</span><br>
<span class="quotelev1">&gt; @@ -826,9 +828,13 @@
</span><br>
<span class="quotelev1">&gt;                     openib_btl-&gt;super.btl_bandwidth = 8000;
</span><br>
<span class="quotelev1">&gt;                     break;
</span><br>
<span class="quotelev1">&gt;                 case 8:
</span><br>
<span class="quotelev1">&gt; -                    /* 40.0Gbps * 0.8, in megabits */
</span><br>
<span class="quotelev1">&gt; -                    openib_btl-&gt;super.btl_bandwidth = 32000;
</span><br>
<span class="quotelev1">&gt; +                    /* FDR10: 10.0Gbps * 64/66, in megabits */
</span><br>
<span class="quotelev1">&gt; +                    openib_btl-&gt;super.btl_bandwidth = 9700;
</span><br>
<span class="quotelev1">&gt;                     break;
</span><br>
<span class="quotelev1">&gt; +                case 16:
</span><br>
<span class="quotelev1">&gt; +                    /* FDR: 14.0Gbps * 64/66, in megabits */
</span><br>
<span class="quotelev1">&gt; +                    openib_btl-&gt;super.btl_bandwidth = 13600;
</span><br>
<span class="quotelev1">&gt; +                    break;
</span><br>
<span class="quotelev1">&gt;                 default:
</span><br>
<span class="quotelev1">&gt;                     /* Who knows?  Declare this port unreachable (do
</span><br>
<span class="quotelev1">&gt;                        *not* return ERR_VALUE_OF_OUT_OF_BOUNDS; that
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
<li><strong>Next message:</strong> <a href="10995.php">Yevgeny Kliteynik: "Re: [OMPI devel] FDR: bad patch?"</a>
<li><strong>Previous message:</strong> <a href="10993.php">Yevgeny Kliteynik: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<li><strong>In reply to:</strong> <a href="10993.php">Yevgeny Kliteynik: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10995.php">Yevgeny Kliteynik: "Re: [OMPI devel] FDR: bad patch?"</a>
<li><strong>Reply:</strong> <a href="10995.php">Yevgeny Kliteynik: "Re: [OMPI devel] FDR: bad patch?"</a>
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
