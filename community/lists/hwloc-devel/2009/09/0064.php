<?
$subject_val = "Re: [hwloc-devel] last API possible changes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 21 12:31:47 2009" -->
<!-- isoreceived="20090921163147" -->
<!-- sent="Mon, 21 Sep 2009 12:31:41 -0400" -->
<!-- isosent="20090921163141" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] last API possible changes" -->
<!-- id="0C5F3586-C02A-42F1-B693-337562126C43_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20090921144204.GT5753_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] last API possible changes<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-21 12:31:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0065.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Previous message:</strong> <a href="0063.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>In reply to:</strong> <a href="0063.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0065.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Reply:</strong> <a href="0065.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 21, 2009, at 10:42 AM, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; It's part of the language starting from C99 only. An application could
</span><br>
<span class="quotelev1">&gt; enable non-C99 mode where it becomes undefined, you can never know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>That is a decade old, no?  ;-)
<br>
<p><span class="quotelev2">&gt; &gt; Alternatively, this whole block in cpuset-bits.h could be wrapped in
</span><br>
<span class="quotelev2">&gt; &gt; an &quot;#ifndef restrict&quot;, right?:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That will work only if libraries possibly defining restrict and  
</span><br>
<span class="quotelev1">&gt; included
</span><br>
<span class="quotelev1">&gt; after hwloc do the same.  You may argue that then it's their matter.
</span><br>
<span class="quotelev1">&gt; The only library I see defining restrict in my /usr/include does it
</span><br>
<span class="quotelev1">&gt; without #ifndef restrict, I'm not sure we want to fight this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Ok, fair enough.
<br>
<p>(Sorry -- I wasn't trying to be a jerk; just trying to be thorough...)
<br>
<p><span class="quotelev1">&gt; You may not be able to resolve the difference: depending on the kind  
</span><br>
<span class="quotelev1">&gt; of
</span><br>
<span class="quotelev1">&gt; detection of the compiler etc. etc. you may end up with restrict  
</span><br>
<span class="quotelev1">&gt; defined
</span><br>
<span class="quotelev1">&gt; to __restrict or to something else.  And as soon as one improves its
</span><br>
<span class="quotelev1">&gt; detection of the compiler, the other(s!) will have to harmonize, etc.
</span><br>
<span class="quotelev1">&gt; Not really sustainable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Also fair enough.  Is it possible that our use of restrict in cpuset- 
<br>
bits.h could come to a conclusion that is different than the  
<br>
underlying compiler (e.g., the underlying compiler needs __restrict)?   
<br>
I'm somewhat dubious of that this could happen, though -- don't all  
<br>
modern compilers support &quot;restrict&quot;?  (I have not looked into this  
<br>
recently myself; all that data has been swapped out of my brain...)
<br>
<p>Alternatively, is the restrict optimization really worth it here?  If  
<br>
there are potential incompatibilities, perhaps the easiest answer is  
<br>
just to remove its use...?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0065.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Previous message:</strong> <a href="0063.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>In reply to:</strong> <a href="0063.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0065.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Reply:</strong> <a href="0065.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
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
