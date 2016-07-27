<?
$subject_val = "Re: [hwloc-devel] last API possible changes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 21 09:28:09 2009" -->
<!-- isoreceived="20090921132809" -->
<!-- sent="Mon, 21 Sep 2009 09:28:04 -0400" -->
<!-- isosent="20090921132804" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] last API possible changes" -->
<!-- id="52EB7385-2B1D-46DA-B577-42A717295C6B_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="20090921131506.GN5753_at_const.bordeaux.inria.fr" -->
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
<strong>Date:</strong> 2009-09-21 09:28:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0059.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Previous message:</strong> <a href="0057.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>In reply to:</strong> <a href="0057.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0059.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Reply:</strong> <a href="0059.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 21, 2009, at 9:15 AM, Samuel Thibault wrote:
<br>
<p><span class="quotelev3">&gt; &gt; &gt;Our __hwloc_restrict macro is actually a copy/paste of  
</span><br>
<span class="quotelev1">&gt; AC_C_RESTRICT's
</span><br>
<span class="quotelev3">&gt; &gt; &gt;tinkering.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah, wait, no, I'm mistaking with something else in another project.
</span><br>
<span class="quotelev1">&gt; Looking closer, this definition is mine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Whew!  :-)
<br>
<p><span class="quotelev1">&gt; Note btw that the autoconf license makes an exception for code output
</span><br>
<span class="quotelev1">&gt; from autoconf scripts, the GPL doesn't apply to them, there is
</span><br>
<span class="quotelev1">&gt; &#147;unlimited permission to copy, distribute, and modify&#148; it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yes, but that doesn't include the raw m4 that is included in the AC  
<br>
source.  IANAL, but my understanding is that if you copy the raw m4,  
<br>
that's taint.  If you copied the raw output (e.g., copied the relevant  
<br>
sh script portions from a generated &quot;configure&quot; script), then you'd be  
<br>
ok.  But that doesn't seem like a safe thing to do, given that various  
<br>
m4 definitions that are contained in that &quot;configure&quot; script may or  
<br>
may not remain compatible with future versions of the autotools (e.g.,  
<br>
mixing that sh code with sh code generated from future versions of the  
<br>
autotools may or may not work).
<br>
<p>But thankfully, this issue is moot.  :-)
<br>
<p><span class="quotelev2">&gt; &gt; Would it ever be sane to use one value of restrict in hwloc and a
</span><br>
<span class="quotelev2">&gt; &gt; different value in an upper-level application?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's not a problem since it's just an optimization &amp; validity  
</span><br>
<span class="quotelev1">&gt; checking
</span><br>
<span class="quotelev1">&gt; qualifier.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>So it should be ok to use AC_C_RESTRICT then, right?
<br>
<p>FWIW, no compiler that I've ever tested complains about the following:
<br>
<p>#define foo bar
<br>
#define foo bar
<br>
<p>Some (all?) compilers *will* warn if the subsequent definitions are  
<br>
different, like this:
<br>
<p>#define foo bar
<br>
#define foo barbar
<br>
<p>So I'd call it a &quot;feature&quot; if hwloc defines &quot;restrict&quot; to one thing  
<br>
and then some other header file defines it to another.  :-)
<br>
<p>But then again, Autoconf has a *very strict* policy that generated  
<br>
config.h files are supposed to be private to the application that it  
<br>
is building.  OMPI, for example, does *not* have mpi.h include our  
<br>
generated config.h.  Instead, our mpi.h has a small number of things  
<br>
set from configure that are required (e.g., size of bool, etc.).
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
<li><strong>Next message:</strong> <a href="0059.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Previous message:</strong> <a href="0057.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>In reply to:</strong> <a href="0057.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0059.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Reply:</strong> <a href="0059.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
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
