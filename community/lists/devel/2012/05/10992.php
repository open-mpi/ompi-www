<?
$subject_val = "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 10 08:42:46 2012" -->
<!-- isoreceived="20120510124246" -->
<!-- sent="Thu, 10 May 2012 15:42:36 +0300" -->
<!-- isosent="20120510124236" -->
<!-- name="Yevgeny Kliteynik" -->
<!-- email="kliteyn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)" -->
<!-- id="4FABB7BC.3010706_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D9142D99-D1E5-4880-98FC-5B427651EF10_at_cisco.com" -->
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
<strong>Date:</strong> 2012-05-10 08:42:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10993.php">Yevgeny Kliteynik: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<li><strong>Previous message:</strong> <a href="10991.php">Jeff Squyres: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<li><strong>In reply to:</strong> <a href="10991.php">Jeff Squyres: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10993.php">Yevgeny Kliteynik: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<li><strong>Reply:</strong> <a href="10993.php">Yevgeny Kliteynik: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 09-May-12 7:26 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On May 9, 2012, at 11:33 AM,&lt;Ludovic.Hablot_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Well, looking at the libverbs sources, it seems that there is a patch for devinfo (cf below).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thus, the correct speeds, according to the libibverbs patch. And, if I understand well, they must be
</span><br>
<span class="quotelev2">&gt;&gt; multiplied by the coding ratio to get the real link speed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I joined another patch. I don't know if we should remove the case 4 and fall through case 8 or just keep it as I do.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your patch looks good to me... but what do I know?  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mellanox: please comment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ludovic
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs/fixes/add_support_for_extended_speends.patch
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [PATCH]libibverbs: Add support for extended speeds
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 8:  FDR-10 is a proprietary link speed which is 10.3125 Gbps at 64/66
</span><br>
<span class="quotelev2">&gt;&gt;      encoding rather than 8b10b encoding.
</span><br>
<span class="quotelev2">&gt;&gt; 16: FDR - 14.0625 Gbps
</span><br>
<span class="quotelev2">&gt;&gt; 32: EDR - 25.78125 Gbps
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +--- a/examples/devinfo.c
</span><br>
<span class="quotelev2">&gt;&gt; ++++ b/examples/devinfo.c
</span><br>
<span class="quotelev2">&gt;&gt; +@@ -139,7 +139,12 @@ static const char *speed_str(uint8_t speed)
</span><br>
<span class="quotelev2">&gt;&gt; + switch (speed) {
</span><br>
<span class="quotelev2">&gt;&gt; + case 1:  return &quot;2.5 Gbps&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; + case 2:  return &quot;5.0 Gbps&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; +-	case 4:  return &quot;10.0 Gbps&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; ++
</span><br>
<span class="quotelev2">&gt;&gt; ++	case 4:  /* fall through */
</span><br>
<span class="quotelev2">&gt;&gt; ++	case 8:  return &quot;10.0 Gbps&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; ++
</span><br>
<span class="quotelev2">&gt;&gt; ++	case 16: return &quot;14.0 Gbps&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; ++	case 32: return &quot;25.0 Gbps&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; + default: return &quot;invalid speed&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; + }
</span><br>
<span class="quotelev2">&gt;&gt; + }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----devel-bounces_at_[hidden] a &#233;crit : -----
</span><br>
<span class="quotelev2">&gt;&gt; A : devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; De : Peter Kjellstr&#246;m
</span><br>
<span class="quotelev2">&gt;&gt; Envoy&#233; par : devel-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Date : 09/05/2012 16:35
</span><br>
<span class="quotelev2">&gt;&gt; Objet : Re: [OMPI devel] FDR: bad patch? (was: 1.6rc3 is out)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wednesday 09 May 2012 10.20.47 Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't have any QDR or FDR equipment -- what's the typical active_width for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; QDR and FDR?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; QDR is 32000, so is that active_speed of 4 and active_width of 4? (8000 * 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 32000)?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FDR is 56000 (right?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Pretty much all IB is 4x to host.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 4x QDR is 40 Gbps at link level =&gt;  8 Gbps data per link (8/10 coding)
</span><br>
<span class="quotelev2">&gt;&gt; 4x FDR10 is 40 Gbps at link level =&gt;  ~9.7 Gbps data per link (64/66 coding)
</span><br>
<span class="quotelev2">&gt;&gt; 4x FDR is 56 Gbps at link level =&gt;  ~13.5 Gbps data per link (64/66 coding)
</span><br>
<p>Here are the ActiveSpeed values:
<br>
<p>&nbsp;1: SDR   - 2.5 Gb/s * (8/10 coding)
<br>
&nbsp;2: DDR   - 5   Gb/s * (8/10 coding)
<br>
&nbsp;4: QDR   - 10  Gb/s * (8/10 coding)
<br>
&nbsp;8: FDR10 - 10  Gb/s * (64/66 coding)
<br>
16: FDR   - 14  Gbps * (64/66 coding)
<br>
32: EDR   - 25  Gbs  * (64/66 coding)
<br>
<p>EDR is not out yet, so we can ignore it for the sake of this patch.
<br>
It is also true that *most* of IB cables are 4x.
<br>
There are 12x clusters out there (like TACC's Ranger), and sometimes
<br>
there are 1x links (mostly because the cable is not perfect or too long).
<br>
<p>So cases of 4 and 8 are not the same for us, because MPI needs actual
<br>
*data* rate instead of *bit* rate, which is different in these cases.
<br>
<p>I'll send a patch for review in a minute...
<br>
<p>-- YK
<br>
<p><p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /Peter
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I haven't kept up with IB specs since Cisco killed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IB...), so what are its active_speed and active_width values?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; -= Peter Kjellstr&#246;m
</span><br>
<span class="quotelev2">&gt;&gt; -= National Supercomputer Centre
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [pi&#232;ce jointe &quot;signature.asc&quot; supprim&#233;e par Ludovic Hablot/EXT/FR/BULL]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;OpenMPI_FDR.patch&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10993.php">Yevgeny Kliteynik: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<li><strong>Previous message:</strong> <a href="10991.php">Jeff Squyres: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<li><strong>In reply to:</strong> <a href="10991.php">Jeff Squyres: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10993.php">Yevgeny Kliteynik: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<li><strong>Reply:</strong> <a href="10993.php">Yevgeny Kliteynik: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
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
