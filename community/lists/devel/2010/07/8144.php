<?
$subject_val = "Re: [OMPI devel] v1.5: thumbs up or down?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  6 10:34:19 2010" -->
<!-- isoreceived="20100706143419" -->
<!-- sent="Tue, 6 Jul 2010 10:34:29 -0400" -->
<!-- isosent="20100706143429" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.5: thumbs up or down?" -->
<!-- id="29232DD0-90EC-431B-9787-2F27D8FEC5C1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="f149c9ae6914c7ef970dc85477694e05.squirrel_at_mail.ecs.vuw.ac.nz" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.5: thumbs up or down?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-06 10:34:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8145.php">Jeff Squyres: "Re: [OMPI devel] v1.5: thumbs up or down? - Thumbs Down"</a>
<li><strong>Previous message:</strong> <a href="8143.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] v1.5: thumbs up or down? - Thumbs Down"</a>
<li><strong>In reply to:</strong> <a href="8139.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] v1.5: thumbs up or down?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8142.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] v1.5: thumbs up or down? - Thumbs Down"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 5, 2010, at 10:33 PM, &lt;Kevin.Buckley_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; But here's a patch:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- opal/include/opal/sys/cache.h.orig  2010-07-06 14:29:44.000000000 +1200
</span><br>
<span class="quotelev1">&gt; +++ opal/include/opal/sys/cache.h       2010-07-06 14:32:34.000000000 +1200
</span><br>
<span class="quotelev1">&gt; @@ -30,7 +30,9 @@
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt;   * For now hardwire this to a reasonable value, and automate later - RLG
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt; +#ifndef CACHE_LINE_SIZE
</span><br>
<span class="quotelev1">&gt;  #define CACHE_LINE_SIZE 128
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<p>I did a little better than that.  Given that we'll soon be moving to using hwloc information (does hwloc work on NetBSD and FreeBSD, btw?), I converted OMPI's use of CACHE_LINE_SIZE to opal_cache_line_size -- an int, rather than a #define -- and removed this opal/include/opal/sys/cache.h file altogether.
<br>
<p>(a header file for a single #define?  What were we thinking?)
<br>
<p>See the trunk commit here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/changeset/23349">https://svn.open-mpi.org/trac/ompi/changeset/23349</a>
<br>
<p>If that works for you, I'll move it over to v1.5.
<br>
<p>Do you need a corresponding change in v1.4?
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
<li><strong>Next message:</strong> <a href="8145.php">Jeff Squyres: "Re: [OMPI devel] v1.5: thumbs up or down? - Thumbs Down"</a>
<li><strong>Previous message:</strong> <a href="8143.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] v1.5: thumbs up or down? - Thumbs Down"</a>
<li><strong>In reply to:</strong> <a href="8139.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] v1.5: thumbs up or down?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8142.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] v1.5: thumbs up or down? - Thumbs Down"</a>
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
