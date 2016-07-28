<?
$subject_val = "Re: [OMPI devel] v1.5: thumbs up or down? - Thumbs Down";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  6 11:26:36 2010" -->
<!-- isoreceived="20100706152636" -->
<!-- sent="Tue, 6 Jul 2010 11:00:17 -0400" -->
<!-- isosent="20100706150017" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.5: thumbs up or down? - Thumbs Down" -->
<!-- id="8ECD6B3B-C2FA-401A-9023-DA67D2E68FDF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="72a007568935e112c449e8aaeaccef9f.squirrel_at_mail.ecs.vuw.ac.nz" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-06 11:00:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8146.php">’≈æß: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Previous message:</strong> <a href="8144.php">Jeff Squyres: "Re: [OMPI devel] v1.5: thumbs up or down?"</a>
<li><strong>In reply to:</strong> <a href="8143.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] v1.5: thumbs up or down? - Thumbs Down"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8171.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] v1.5: thumbs up or down? - Thumbs Down"</a>
<li><strong>Reply:</strong> <a href="8171.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] v1.5: thumbs up or down? - Thumbs Down"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 6, 2010, at 1:49 AM, &lt;Kevin.Buckley_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; (not that you'ld know that from configure -- help) but the NetBSD
</span><br>
<span class="quotelev1">&gt; handling of such options ended up running confgure with:
</span><br>
<p>Ok, I fixed the help message:
<br>
<p>&nbsp;&nbsp;--enable-contrib-no-build=LIST
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Comma-separated list of contributed package NAMEs
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;that will not be built. Possible values:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libtrace, vt. Example:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;--enable-contrib-no-build=libtrace,vt&quot; will disable
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;building both the &quot;libtrace&quot; and &quot;vt&quot; contributed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;software packages.
<br>
<p><span class="quotelev1">&gt; OK, I humbly withdraw (a) above but now, equally humbly, suggest
</span><br>
<span class="quotelev1">&gt; that instead of using a list, those things be turned into standard,
</span><br>
<span class="quotelev1">&gt; single-target, configure options, vis:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --with-XXXX=
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --enable-XXXX=
</span><br>
<p>True, this would be better.  I believe that Brian didn't initially do it this way for some subtle reasons, but I confess that I don't remember exactly why.
<br>
<p>Patches would be welcome here.  :-)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8146.php">’≈æß: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Previous message:</strong> <a href="8144.php">Jeff Squyres: "Re: [OMPI devel] v1.5: thumbs up or down?"</a>
<li><strong>In reply to:</strong> <a href="8143.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] v1.5: thumbs up or down? - Thumbs Down"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8171.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] v1.5: thumbs up or down? - Thumbs Down"</a>
<li><strong>Reply:</strong> <a href="8171.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] v1.5: thumbs up or down? - Thumbs Down"</a>
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
