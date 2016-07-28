<?
$subject_val = "Re: [OMPI devel] v1.5: thumbs up or down? - Thumbs Down";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  6 01:49:20 2010" -->
<!-- isoreceived="20100706054920" -->
<!-- sent="Tue, 6 Jul 2010 17:49:05 +1200" -->
<!-- isosent="20100706054905" -->
<!-- name="Kevin.Buckley_at_[hidden]" -->
<!-- email="Kevin.Buckley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.5: thumbs up or down? - Thumbs Down" -->
<!-- id="72a007568935e112c449e8aaeaccef9f.squirrel_at_mail.ecs.vuw.ac.nz" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5ed8fb5c14460386167693f0561b2f8f.squirrel_at_mail.ecs.vuw.ac.nz" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.5: thumbs up or down? - Thumbs Down<br>
<strong>From:</strong> <a href="mailto:Kevin.Buckley_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20v1.5:%20thumbs%20up%20or%20down?%20-%20Thumbs%20Down"><em>Kevin.Buckley_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-07-06 01:49:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8144.php">Jeff Squyres: "Re: [OMPI devel] v1.5: thumbs up or down?"</a>
<li><strong>Previous message:</strong> <a href="8142.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] v1.5: thumbs up or down? - Thumbs Down"</a>
<li><strong>In reply to:</strong> <a href="8142.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] v1.5: thumbs up or down? - Thumbs Down"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8145.php">Jeff Squyres: "Re: [OMPI devel] v1.5: thumbs up or down? - Thumbs Down"</a>
<li><strong>Reply:</strong> <a href="8145.php">Jeff Squyres: "Re: [OMPI devel] v1.5: thumbs up or down? - Thumbs Down"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; That contribution needs to be
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a) brought under the control of --enable-contrib-no-build=
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; b) possibly renamed (it would seem to be an MPI specific thing)
</span><br>
<span class="quotelev1">&gt;     so maybe, libmpitrace ?
</span><br>
<p>I'd like to qualify that, in the light of some more digging,
<br>
though (b) is still an issue.
<br>
<p>It seems that the &quot;libtrace&quot; conribution IS under the control of
<br>
<p>--enable-contrib-no-build=
<br>
<p>(not that you'ld know that from configure -- help) but the NetBSD
<br>
handling of such options ended up running confgure with:
<br>
<p>&nbsp;--enable-contrib-no-build=libtrace --enable-contrib-no-build=vt
<br>
<p>and not:
<br>
<p>--enable-contrib-no-build=vt,libtrace
<br>
<p>so the configure was only honouring the last one listed.
<br>
<p><p>OK, I humbly withdraw (a) above but now, equally humbly, suggest
<br>
that instead of using a list, those things be turned into standard,
<br>
single-target, configure options, vis:
<br>
<p>--with-XXXX=
<br>
<p>--enable-XXXX=
<br>
<p>humbly yours,
<br>
Kevin
<br>
<p><pre>
-- 
Kevin M. Buckley                                  Room:  CO327
School of Engineering and                         Phone: +64 4 463 5971
 Computer Science
Victoria University of Wellington
New Zealand
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8144.php">Jeff Squyres: "Re: [OMPI devel] v1.5: thumbs up or down?"</a>
<li><strong>Previous message:</strong> <a href="8142.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] v1.5: thumbs up or down? - Thumbs Down"</a>
<li><strong>In reply to:</strong> <a href="8142.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] v1.5: thumbs up or down? - Thumbs Down"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8145.php">Jeff Squyres: "Re: [OMPI devel] v1.5: thumbs up or down? - Thumbs Down"</a>
<li><strong>Reply:</strong> <a href="8145.php">Jeff Squyres: "Re: [OMPI devel] v1.5: thumbs up or down? - Thumbs Down"</a>
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
