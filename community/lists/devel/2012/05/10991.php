<?
$subject_val = "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  9 12:26:57 2012" -->
<!-- isoreceived="20120509162657" -->
<!-- sent="Wed, 9 May 2012 12:26:33 -0400" -->
<!-- isosent="20120509162633" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)" -->
<!-- id="D9142D99-D1E5-4880-98FC-5B427651EF10_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="OF779D6447.0C8200F2-ONC12579F9.005570D5-C12579F9.005570DD_at_bull.net" -->
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
<strong>Date:</strong> 2012-05-09 12:26:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10992.php">Yevgeny Kliteynik: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<li><strong>Previous message:</strong> <a href="10990.php">Ludovic.Hablot_at_[hidden]: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<li><strong>In reply to:</strong> <a href="10990.php">Ludovic.Hablot_at_[hidden]: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10992.php">Yevgeny Kliteynik: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<li><strong>Reply:</strong> <a href="10992.php">Yevgeny Kliteynik: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 9, 2012, at 11:33 AM, &lt;Ludovic.Hablot_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Well, looking at the libverbs sources, it seems that there is a patch for devinfo (cf below).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thus, the correct speeds, according to the libibverbs patch. And, if I understand well, they must be 
</span><br>
<span class="quotelev1">&gt; multiplied by the coding ratio to get the real link speed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I joined another patch. I don't know if we should remove the case 4 and fall through case 8 or just keep it as I do.
</span><br>
<p>Your patch looks good to me... but what do I know?  :-)
<br>
<p>Mellanox: please comment.
<br>
<p><span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ludovic
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; libibverbs/fixes/add_support_for_extended_speends.patch
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [PATCH]libibverbs: Add support for extended speeds
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 8:  FDR-10 is a proprietary link speed which is 10.3125 Gbps at 64/66
</span><br>
<span class="quotelev1">&gt;     encoding rather than 8b10b encoding.
</span><br>
<span class="quotelev1">&gt; 16: FDR - 14.0625 Gbps
</span><br>
<span class="quotelev1">&gt; 32: EDR - 25.78125 Gbps
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +--- a/examples/devinfo.c
</span><br>
<span class="quotelev1">&gt; ++++ b/examples/devinfo.c
</span><br>
<span class="quotelev1">&gt; +@@ -139,7 +139,12 @@ static const char *speed_str(uint8_t speed)
</span><br>
<span class="quotelev1">&gt; + switch (speed) {
</span><br>
<span class="quotelev1">&gt; + case 1:  return &quot;2.5 Gbps&quot;;
</span><br>
<span class="quotelev1">&gt; + case 2:  return &quot;5.0 Gbps&quot;;
</span><br>
<span class="quotelev1">&gt; +-	case 4:  return &quot;10.0 Gbps&quot;;
</span><br>
<span class="quotelev1">&gt; ++
</span><br>
<span class="quotelev1">&gt; ++	case 4:  /* fall through */
</span><br>
<span class="quotelev1">&gt; ++	case 8:  return &quot;10.0 Gbps&quot;;
</span><br>
<span class="quotelev1">&gt; ++
</span><br>
<span class="quotelev1">&gt; ++	case 16: return &quot;14.0 Gbps&quot;;
</span><br>
<span class="quotelev1">&gt; ++	case 32: return &quot;25.0 Gbps&quot;;
</span><br>
<span class="quotelev1">&gt; + default: return &quot;invalid speed&quot;;
</span><br>
<span class="quotelev1">&gt; + }
</span><br>
<span class="quotelev1">&gt; + }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----devel-bounces_at_[hidden] a &#233;crit : -----
</span><br>
<span class="quotelev1">&gt; A : devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; De : Peter Kjellstr&#246;m 
</span><br>
<span class="quotelev1">&gt; Envoy&#233; par : devel-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date : 09/05/2012 16:35
</span><br>
<span class="quotelev1">&gt; Objet : Re: [OMPI devel] FDR: bad patch? (was: 1.6rc3 is out)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wednesday 09 May 2012 10.20.47 Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; I don't have any QDR or FDR equipment -- what's the typical active_width for
</span><br>
<span class="quotelev2">&gt; &gt; QDR and FDR?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; QDR is 32000, so is that active_speed of 4 and active_width of 4? (8000 * 4
</span><br>
<span class="quotelev2">&gt; &gt; = 32000)?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; FDR is 56000 (right?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Pretty much all IB is 4x to host.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 4x QDR is 40 Gbps at link level =&gt; 8 Gbps data per link (8/10 coding)
</span><br>
<span class="quotelev1">&gt; 4x FDR10 is 40 Gbps at link level =&gt; ~9.7 Gbps data per link (64/66 coding)
</span><br>
<span class="quotelev1">&gt; 4x FDR is 56 Gbps at link level =&gt; ~13.5 Gbps data per link (64/66 coding)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; /Peter
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev2">&gt; &gt; I haven't kept up with IB specs since Cisco killed
</span><br>
<span class="quotelev2">&gt; &gt; IB...), so what are its active_speed and active_width values?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; -= Peter Kjellstr&#246;m
</span><br>
<span class="quotelev1">&gt; -= National Supercomputer Centre
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [pi&#232;ce jointe &quot;signature.asc&quot; supprim&#233;e par Ludovic Hablot/EXT/FR/BULL]
</span><br>
<span class="quotelev1">&gt; &lt;OpenMPI_FDR.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="10992.php">Yevgeny Kliteynik: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<li><strong>Previous message:</strong> <a href="10990.php">Ludovic.Hablot_at_[hidden]: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<li><strong>In reply to:</strong> <a href="10990.php">Ludovic.Hablot_at_[hidden]: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10992.php">Yevgeny Kliteynik: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<li><strong>Reply:</strong> <a href="10992.php">Yevgeny Kliteynik: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
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
