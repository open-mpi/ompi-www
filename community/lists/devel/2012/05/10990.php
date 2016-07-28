<?
$subject_val = "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  9 11:33:19 2012" -->
<!-- isoreceived="20120509153319" -->
<!-- sent="Wed, 9 May 2012 17:33:14 +0200" -->
<!-- isosent="20120509153314" -->
<!-- name="Ludovic.Hablot_at_[hidden]" -->
<!-- email="Ludovic.Hablot_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)" -->
<!-- id="OF779D6447.0C8200F2-ONC12579F9.005570D5-C12579F9.005570DD_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="16718760.ltGCgWYGck_at_yaydoe" -->
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
<strong>From:</strong> <a href="mailto:Ludovic.Hablot_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20FDR:%20bad%20patch?%20%20(was:%20%201.6rc3%20is%20out)"><em>Ludovic.Hablot_at_[hidden]</em></a><br>
<strong>Date:</strong> 2012-05-09 11:33:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10991.php">Jeff Squyres: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<li><strong>Previous message:</strong> <a href="10989.php">Peter Kjellstr&#246;m: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<li><strong>In reply to:</strong> <a href="10989.php">Peter Kjellstr&#246;m: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10991.php">Jeff Squyres: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<li><strong>Reply:</strong> <a href="10991.php">Jeff Squyres: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, looking at the libverbs sources, it seems that there is a patch for devinfo (cf below).
<br>
<p>Thus, the correct speeds, according to the libibverbs patch. And, if I understand well, they must be&#160;
<br>
multiplied by the coding ratio&#160;to get the real link speed.
<br>
<p>I joined another patch. I don't know if we should remove the case 4 and fall through case 8 or just keep it as I do.
<br>
<p>Regards,
<br>
<p>Ludovic
<br>
<p>libibverbs/fixes/add_support_for_extended_speends.patch
<br>
<p>[PATCH]libibverbs: Add support for extended speeds
<br>
<p>8: &#160;FDR-10 is a proprietary link speed which is 10.3125 Gbps at 64/66
<br>
&#160; &#160; encoding rather than 8b10b encoding.
<br>
16: FDR - 14.0625 Gbps
<br>
32: EDR - 25.78125 Gbps
<br>
<p>+--- a/examples/devinfo.c
<br>
++++ b/examples/devinfo.c
<br>
+@@ -139,7 +139,12 @@ static const char *speed_str(uint8_t speed)
<br>
+ switch (speed) {
<br>
+ case 1: &#160;return &quot;2.5 Gbps&quot;;
<br>
+ case 2: &#160;return &quot;5.0 Gbps&quot;;
<br>
+-	case 4: &#160;return &quot;10.0 Gbps&quot;;
<br>
++
<br>
++	case 4: &#160;/* fall through */
<br>
++	case 8: &#160;return &quot;10.0 Gbps&quot;;
<br>
++
<br>
++	case 16: return &quot;14.0 Gbps&quot;;
<br>
++	case 32: return &quot;25.0 Gbps&quot;;
<br>
+ default: return &quot;invalid speed&quot;;
<br>
+ }
<br>
+ }
<br>
<p><p><p>-----devel-bounces_at_[hidden] a &#233;crit : -----
<br>
A : devel_at_[hidden]
<br>
De : Peter Kjellstr&#246;m 
<br>
Envoy&#233; par : devel-bounces_at_[hidden]
<br>
Date : 09/05/2012 16:35
<br>
Objet : Re: [OMPI devel] FDR: bad patch? (was: 1.6rc3 is out)
<br>
<p>On Wednesday 09 May 2012 10.20.47 Jeff Squyres wrote:
<br>
...
<br>
<span class="quotelev1">&gt; I don't have any QDR or FDR equipment -- what's the typical active_width for
</span><br>
<span class="quotelev1">&gt; QDR and FDR?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; QDR is 32000, so is that active_speed of 4 and active_width of 4? (8000 * 4
</span><br>
<span class="quotelev1">&gt; = 32000)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FDR is 56000 (right?
</span><br>
&#160;
<br>
Pretty much all IB is 4x to host.
<br>
&#160;
<br>
4x QDR is 40 Gbps at link level =&gt; 8 Gbps data per link (8/10 coding)
<br>
4x FDR10 is 40 Gbps at link level =&gt; ~9.7 Gbps data per link (64/66 coding)
<br>
4x FDR is 56 Gbps at link level =&gt; ~13.5 Gbps data per link (64/66 coding)
<br>
&#160;
<br>
/Peter
<br>
&#160;
<br>
<span class="quotelev1">&gt; I haven't kept up with IB specs since Cisco killed
</span><br>
<span class="quotelev1">&gt; IB...), so what are its active_speed and active_width values?
</span><br>
&#160;
<br>
<pre>
--
-= Peter Kjellstr&#246;m
-= National Supercomputer Centre
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
[pi&#232;ce jointe &quot;signature.asc&quot; supprim&#233;e par Ludovic Hablot/EXT/FR/BULL]

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10990/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10990/OpenMPI_FDR.patch">OpenMPI_FDR.patch</a>
</ul>
<!-- attachment="OpenMPI_FDR.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10991.php">Jeff Squyres: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<li><strong>Previous message:</strong> <a href="10989.php">Peter Kjellstr&#246;m: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<li><strong>In reply to:</strong> <a href="10989.php">Peter Kjellstr&#246;m: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10991.php">Jeff Squyres: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<li><strong>Reply:</strong> <a href="10991.php">Jeff Squyres: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
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
