<?
$subject_val = "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  9 10:34:57 2012" -->
<!-- isoreceived="20120509143457" -->
<!-- sent="Wed, 09 May 2012 16:34:43 +0200" -->
<!-- isosent="20120509143443" -->
<!-- name="Peter Kjellstr&#246;m" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)" -->
<!-- id="16718760.ltGCgWYGck_at_yaydoe" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C103F573-C989-4897-9748-BDE72AD5E3A5_at_cisco.com" -->
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
<strong>From:</strong> Peter Kjellstr&#246;m (<em>cap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-09 10:34:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10990.php">Ludovic.Hablot_at_[hidden]: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<li><strong>Previous message:</strong> <a href="10988.php">Jeff Squyres: "[OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<li><strong>In reply to:</strong> <a href="10988.php">Jeff Squyres: "[OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10990.php">Ludovic.Hablot_at_[hidden]: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<li><strong>Reply:</strong> <a href="10990.php">Ludovic.Hablot_at_[hidden]: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wednesday 09 May 2012 10.20.47 Jeff Squyres wrote:
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
<p>Pretty much all IB is 4x to host.
<br>
<p>4x QDR is 40 Gbps at link level =&gt; 8 Gbps data per link (8/10 coding)
<br>
4x FDR10 is 40 Gbps at link level =&gt; ~9.7 Gbps data per link (64/66 coding)
<br>
4x FDR is 56 Gbps at link level =&gt; ~13.5 Gbps data per link (64/66 coding)
<br>
<p>/Peter
<br>
<p><span class="quotelev1">&gt; I haven't kept up with IB specs since Cisco killed
</span><br>
<span class="quotelev1">&gt; IB...), so what are its active_speed and active_width values?
</span><br>
<p><pre>
-- 
-= Peter Kjellstr&#246;m
-= National Supercomputer Centre
</pre>
<p>
<p>
<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10989/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10989/signature.asc">This is a digitally signed message part.</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10990.php">Ludovic.Hablot_at_[hidden]: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<li><strong>Previous message:</strong> <a href="10988.php">Jeff Squyres: "[OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<li><strong>In reply to:</strong> <a href="10988.php">Jeff Squyres: "[OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10990.php">Ludovic.Hablot_at_[hidden]: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<li><strong>Reply:</strong> <a href="10990.php">Ludovic.Hablot_at_[hidden]: "Re: [OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
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
