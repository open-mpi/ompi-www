<?
$subject_val = "Re: [OMPI devel] v1.5: thumbs up or down?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  5 22:33:45 2010" -->
<!-- isoreceived="20100706023345" -->
<!-- sent="Tue, 6 Jul 2010 14:33:31 +1200" -->
<!-- isosent="20100706023331" -->
<!-- name="Kevin.Buckley_at_[hidden]" -->
<!-- email="Kevin.Buckley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.5: thumbs up or down?" -->
<!-- id="f149c9ae6914c7ef970dc85477694e05.squirrel_at_mail.ecs.vuw.ac.nz" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="03b3bc1843b788109d2bed2a4134ab27.squirrel_at_mail.ecs.vuw.ac.nz" -->
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
<strong>From:</strong> <a href="mailto:Kevin.Buckley_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20v1.5:%20thumbs%20up%20or%20down?"><em>Kevin.Buckley_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-07-05 22:33:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8140.php">Nysal Jan: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Previous message:</strong> <a href="8138.php">&#213;&#197;&#190;&#167;: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>In reply to:</strong> <a href="8137.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] v1.5: thumbs up or down?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8144.php">Jeff Squyres: "Re: [OMPI devel] v1.5: thumbs up or down?"</a>
<li><strong>Reply:</strong> <a href="8144.php">Jeff Squyres: "Re: [OMPI devel] v1.5: thumbs up or down?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; 4) The other thing that comes to mind are the mountain of WARNINGs
</span><br>
<span class="quotelev1">&gt; because of the &quot;redefinition&quot; of
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define CACHE_LINE_SIZE 128
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; opal/include/opal/sys/cache.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; although it's a bit &quot;chicken and egg&quot; because NetBSD's definition,
</span><br>
<span class="quotelev1">&gt; in:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/include/sys/param.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; obviously allows one to redefine it, vis:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #ifndef CACHE_LINE_SIZE
</span><br>
<span class="quotelev1">&gt; #define CACHE_LINE_SIZE         64
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; so that's probably not an issue but at least you know about it.
</span><br>
<p><p>But here's a patch:
<br>
<p>--- opal/include/opal/sys/cache.h.orig  2010-07-06 14:29:44.000000000 +1200
<br>
+++ opal/include/opal/sys/cache.h       2010-07-06 14:32:34.000000000 +1200
<br>
@@ -30,7 +30,9 @@
<br>
&nbsp;&nbsp;*
<br>
&nbsp;&nbsp;* For now hardwire this to a reasonable value, and automate later - RLG
<br>
&nbsp;&nbsp;*/
<br>
+#ifndef CACHE_LINE_SIZE
<br>
&nbsp;#define CACHE_LINE_SIZE 128
<br>
+#endif
<br>
<p><p>&nbsp;#endif /* OPAL_SYS_CACHE_H */
<br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="8140.php">Nysal Jan: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Previous message:</strong> <a href="8138.php">&#213;&#197;&#190;&#167;: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>In reply to:</strong> <a href="8137.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] v1.5: thumbs up or down?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8144.php">Jeff Squyres: "Re: [OMPI devel] v1.5: thumbs up or down?"</a>
<li><strong>Reply:</strong> <a href="8144.php">Jeff Squyres: "Re: [OMPI devel] v1.5: thumbs up or down?"</a>
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
