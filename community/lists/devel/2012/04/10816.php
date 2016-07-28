<?
$subject_val = "Re: [OMPI devel] Set alignment for openib internal buffers";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  4 05:56:56 2012" -->
<!-- isoreceived="20120404095656" -->
<!-- sent="Wed, 4 Apr 2012 05:56:53 -0400" -->
<!-- isosent="20120404095653" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Set alignment for openib internal buffers" -->
<!-- id="6F3C638F-49BE-42F1-BBD7-BBCEE7256C3E_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="OFEA7E75F6.79103883-ONC12579D5.0055EBDB-C12579D6.002DC233_at_bull.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Set alignment for openib internal buffers<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-04 05:56:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10817.php">Josh Hursey: "Re: [OMPI devel] [EXTERNAL] Re: Developers Meeting"</a>
<li><strong>Previous message:</strong> <a href="10815.php">Ludovic.Hablot_at_[hidden]: "[OMPI devel] Set alignment for openib internal buffers"</a>
<li><strong>In reply to:</strong> <a href="10815.php">Ludovic.Hablot_at_[hidden]: "[OMPI devel] Set alignment for openib internal buffers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10857.php">Yevgeny Kliteynik: "Re: [OMPI devel] Set alignment for openib internal buffers"</a>
<li><strong>Reply:</strong> <a href="10857.php">Yevgeny Kliteynik: "Re: [OMPI devel] Set alignment for openib internal buffers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mellanox is re-working the patch; the original commit violated several abstractions.  I hope they'll have a new patch soon, but I don't know the exact timeframe.
<br>
<p>On Apr 4, 2012, at 4:19 AM, Ludovic.Hablot_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Hi everybody,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've seen that some changes have been committed for buffer alignment in openib. But that changeset have been revert.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does somebody know if/when it will be added in the trunk ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ludovic
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; changeset:   20220:ddbb0f344524
</span><br>
<span class="quotelev1">&gt; user:        miked
</span><br>
<span class="quotelev1">&gt; date:        Thu Mar 29 14:07:13 2012 +0000
</span><br>
<span class="quotelev1">&gt; summary:     revert previous commit
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; changeset:   20219:a5f81a77acc2
</span><br>
<span class="quotelev1">&gt; parent:      20217:8dea4399f751
</span><br>
<span class="quotelev1">&gt; user:        miked
</span><br>
<span class="quotelev1">&gt; date:        Thu Mar 29 14:00:08 2012 +0000
</span><br>
<span class="quotelev1">&gt; summary:     performance fix: set alignment for openib internal buffers
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="10817.php">Josh Hursey: "Re: [OMPI devel] [EXTERNAL] Re: Developers Meeting"</a>
<li><strong>Previous message:</strong> <a href="10815.php">Ludovic.Hablot_at_[hidden]: "[OMPI devel] Set alignment for openib internal buffers"</a>
<li><strong>In reply to:</strong> <a href="10815.php">Ludovic.Hablot_at_[hidden]: "[OMPI devel] Set alignment for openib internal buffers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10857.php">Yevgeny Kliteynik: "Re: [OMPI devel] Set alignment for openib internal buffers"</a>
<li><strong>Reply:</strong> <a href="10857.php">Yevgeny Kliteynik: "Re: [OMPI devel] Set alignment for openib internal buffers"</a>
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
