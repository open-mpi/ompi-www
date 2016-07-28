<?
$subject_val = "[OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  9 10:21:09 2012" -->
<!-- isoreceived="20120509142109" -->
<!-- sent="Wed, 9 May 2012 10:20:47 -0400" -->
<!-- isosent="20120509142047" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)" -->
<!-- id="C103F573-C989-4897-9748-BDE72AD5E3A5_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="OF4ECE5174.DE127CDC-ONC12579F9.004C2D50-C12579F9.004C2D56_at_bull.net" -->
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
<strong>Subject:</strong> [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-09 10:20:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10989.php">Peter Kjellström: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<li><strong>Previous message:</strong> <a href="10987.php">Josh Hursey: "Re: [OMPI devel] RFC: Update libevent"</a>
<li><strong>In reply to:</strong> <a href="10985.php">Ludovic.Hablot_at_[hidden]: "Re: [OMPI devel] 1.6rc3 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10989.php">Peter Kjellström: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<li><strong>Reply:</strong> <a href="10989.php">Peter Kjellström: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 9, 2012, at 9:52 AM, &lt;Ludovic.Hablot_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; About changeset 26385: ompi/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I might be wrong but I think that the speed we put in openib_btl-&gt;super.btl_bandwidth is the speed of one link. It will be multiply by the number of links (*4, ib_port_attr-&gt;active_width) to obtain the correct speed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thus, the correct speed should be 8000 and not 32000. I joined a potential patch if I'm right.
</span><br>
<p>I think you might be right, but then how is case 4 different than case 8?
<br>
<p>I don't have any QDR or FDR equipment -- what's the typical active_width for QDR and FDR?
<br>
<p>QDR is 32000, so is that active_speed of 4 and active_width of 4? (8000 * 4 = 32000)?
<br>
<p>FDR is 56000 (right?  I haven't kept up with IB specs since Cisco killed IB...), so what are its active_speed and active_width values?
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
<li><strong>Next message:</strong> <a href="10989.php">Peter Kjellström: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<li><strong>Previous message:</strong> <a href="10987.php">Josh Hursey: "Re: [OMPI devel] RFC: Update libevent"</a>
<li><strong>In reply to:</strong> <a href="10985.php">Ludovic.Hablot_at_[hidden]: "Re: [OMPI devel] 1.6rc3 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10989.php">Peter Kjellström: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<li><strong>Reply:</strong> <a href="10989.php">Peter Kjellström: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
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
