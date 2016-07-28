<?
$subject_val = "Re: [hwloc-devel] upcoming cleaning of headers and doc sections";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 18 11:44:14 2013" -->
<!-- isoreceived="20130718154414" -->
<!-- sent="Thu, 18 Jul 2013 15:44:09 +0000" -->
<!-- isosent="20130718154409" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] upcoming cleaning of headers and doc sections" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F729958_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="51E7DB04.1000500_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] upcoming cleaning of headers and doc sections<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-18 11:44:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3839.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.8a1r5730)"</a>
<li><strong>Previous message:</strong> <a href="3837.php">Samuel Thibault: "Re: [hwloc-devel] upcoming cleaning of headers and doc sections"</a>
<li><strong>In reply to:</strong> <a href="3836.php">Brice Goglin: "[hwloc-devel] upcoming cleaning of headers and doc sections"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just to throw in a wildcard...
<br>
<p>You could also make hwloc.h be pretty minimal, and #include a bunch of others.  You could divide sub-.h files by:
<br>
<p>- types
<br>
- section / functionality
<br>
- ...?
<br>
<p><p>On Jul 18, 2013, at 8:09 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; FYI, I recently got a lot of feedback about our function lists and
</span><br>
<span class="quotelev1">&gt; documentation sections.
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/projects/hwloc/doc/v1.7.1/modules.php">http://www.open-mpi.org/projects/hwloc/doc/v1.7.1/modules.php</a>
</span><br>
<span class="quotelev1">&gt; Several of these sections have confusing names, so I am going to
</span><br>
<span class="quotelev1">&gt; reorganize all this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Non-inline functions were initially considered the main hwloc functions,
</span><br>
<span class="quotelev1">&gt; they went in hwloc.h. Others were inlines and considered less important,
</span><br>
<span class="quotelev1">&gt; they went in hwloc/helper.h. That doesn't work anymore because many
</span><br>
<span class="quotelev1">&gt; inlines should rather be documented just near their non-inline friends.
</span><br>
<span class="quotelev1">&gt; So I'll move things where they belong to create unique and consistent
</span><br>
<span class="quotelev1">&gt; sections for each topic.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem with moving many inlines into hwloc.h is that it'll make
</span><br>
<span class="quotelev1">&gt; that main header very long and less readable. Ways to improve that:
</span><br>
<span class="quotelev1">&gt; * only put the prototypes in hwloc.h and keep the inline code somewhere else
</span><br>
<span class="quotelev1">&gt; * if some sections are obviously less important, keep these out of
</span><br>
<span class="quotelev1">&gt; hwloc.h (just like the ones in hwloc/helper.h currently)
</span><br>
<span class="quotelev1">&gt; * only keep the strict minimum (types?) in hwloc.h ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
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
<li><strong>Next message:</strong> <a href="3839.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.8a1r5730)"</a>
<li><strong>Previous message:</strong> <a href="3837.php">Samuel Thibault: "Re: [hwloc-devel] upcoming cleaning of headers and doc sections"</a>
<li><strong>In reply to:</strong> <a href="3836.php">Brice Goglin: "[hwloc-devel] upcoming cleaning of headers and doc sections"</a>
<!-- nextthread="start" -->
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
