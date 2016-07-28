<?
$subject_val = "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 10 18:59:24 2014" -->
<!-- isoreceived="20140110235924" -->
<!-- sent="Fri, 10 Jan 2014 15:59:23 -0800" -->
<!-- isosent="20140110235923" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure" -->
<!-- id="CAAvDA14DfiZDVvLYYA4w5ZmBjOJnN23j5mLaf80taNeyHdUDfA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5776A806-0E8B-4278-BFC6-F43E26A2D4DC_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-10 18:59:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13732.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<li><strong>Previous message:</strong> <a href="13730.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<li><strong>In reply to:</strong> <a href="13730.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13732.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<li><strong>Reply:</strong> <a href="13732.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>I said earlier that PGI *12* has build mpi_f08 correctly in response to
<br>
Larry baker asking about 11 and 12.
<br>
I don't have a PGI 11 config on my list at the moment, but would be
<br>
surprised if I can't find one.
<br>
I will look for a PGI 11, but am focused on the opal_path_nfs() stuff at
<br>
the moment.
<br>
<p>-Paul
<br>
<p><p>On Fri, Jan 10, 2014 at 3:56 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; On Jan 10, 2014, at 6:45 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Keep in mind that I have no specific reason to think pgi-10 should be
</span><br>
<span class="quotelev1">&gt; accepted for building mpi_f08.
</span><br>
<span class="quotelev2">&gt; &gt; My only observation was that it seemed to be rejected w/ less configure
</span><br>
<span class="quotelev1">&gt; testing than was applied to accept 8.0 and 9.0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Got it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see the reason, and it's weird.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PGI 8 and 9 support Fortran IGNORE TKR syntax, and it looks like PGI 10
</span><br>
<span class="quotelev1">&gt; does not.  Truly odd.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have the PGI 11 compiler?  I thought someone said earlier that
</span><br>
<span class="quotelev1">&gt; mpi_f08 worked with their PGI 11 compiler (which means that ignore TKR came
</span><br>
<span class="quotelev1">&gt; back in PGI 11 -- maybe it was just a bug in your rev of PGI 10?).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13731/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13732.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<li><strong>Previous message:</strong> <a href="13730.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<li><strong>In reply to:</strong> <a href="13730.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13732.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<li><strong>Reply:</strong> <a href="13732.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
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
