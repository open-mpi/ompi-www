<?
$subject_val = "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  9 17:41:02 2012" -->
<!-- isoreceived="20120509214102" -->
<!-- sent="Wed, 9 May 2012 17:40:58 -0400" -->
<!-- isosent="20120509214058" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [PATCH] Use plain &amp;quot;inline&amp;quot; in C++" -->
<!-- id="3EB387B4-A8DC-4577-8066-D3664F8E6DC4_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20120509213229.GV4738_at_type.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-09 17:40:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3076.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
<li><strong>Previous message:</strong> <a href="3074.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
<li><strong>In reply to:</strong> <a href="3074.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3077.php">Christopher Samuel: "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
<li><strong>Reply:</strong> <a href="3077.php">Christopher Samuel: "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 9, 2012, at 5:32 PM, Samuel Thibault wrote:
<br>
<p><span class="quotelev2">&gt;&gt; +/* Note that if we're compiling C++, then just use the &quot;inline&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +   keyword, since it's part of C++ */
</span><br>
<span class="quotelev2">&gt;&gt; +#if defined(c_plusplus) || defined(__cplusplus)
</span><br>
<span class="quotelev2">&gt;&gt; +#  define __hwloc_inline inline
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, I don't know which version of the C++ standard includes the inline
</span><br>
<span class="quotelev1">&gt; keyword.
</span><br>
<p>Huh -- really?  I always thought that the C++ language itself included the keyword &quot;inline&quot;.
<br>
<p>Just to be 100% totally clear: you're saying that's not the case?  Because if so, we probably need a better solution than what I sent.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3076.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
<li><strong>Previous message:</strong> <a href="3074.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
<li><strong>In reply to:</strong> <a href="3074.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3077.php">Christopher Samuel: "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
<li><strong>Reply:</strong> <a href="3077.php">Christopher Samuel: "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
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
