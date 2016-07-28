<?
$subject_val = "Re: [hwloc-devel] last API possible changes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 21 09:40:33 2009" -->
<!-- isoreceived="20090921134033" -->
<!-- sent="Mon, 21 Sep 2009 15:40:28 +0200" -->
<!-- isosent="20090921134028" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] last API possible changes" -->
<!-- id="20090921134028.GO5753_at_const.bordeaux.inria.fr" -->
<!-- charset="utf-8" -->
<!-- inreplyto="52EB7385-2B1D-46DA-B577-42A717295C6B_at_cisco.com" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-21 09:40:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0060.php">Jeff Squyres: "[hwloc-devel] doxygen, help2man"</a>
<li><strong>Previous message:</strong> <a href="0058.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>In reply to:</strong> <a href="0058.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0062.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Reply:</strong> <a href="0062.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Mon 21 Sep 2009 09:28:04 -0400, a &#195;&#169;crit :
<br>
<span class="quotelev2">&gt; &gt;Note btw that the autoconf license makes an exception for code output
</span><br>
<span class="quotelev2">&gt; &gt;from autoconf scripts, the GPL doesn't apply to them, there is
</span><br>
<span class="quotelev2">&gt; &gt;&#226;&#128;&#156;unlimited permission to copy, distribute, and modify&#226;&#128;&#157; it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, but that doesn't include the raw m4 that is included in the AC  
</span><br>
<span class="quotelev1">&gt; source. IANAL, but my understanding is that if you copy the raw m4,  
</span><br>
<span class="quotelev1">&gt; that's taint.  If you copied the raw output (e.g., copied the relevant  
</span><br>
<span class="quotelev1">&gt; sh script portions from a generated &quot;configure&quot; script), then you'd be  
</span><br>
<span class="quotelev1">&gt; ok.
</span><br>
<p>That's what I meant.
<br>
<p><span class="quotelev1">&gt; But that doesn't seem like a safe thing to do, given that various  
</span><br>
<span class="quotelev1">&gt; m4 definitions that are contained in that &quot;configure&quot; script may or  
</span><br>
<span class="quotelev1">&gt; may not remain compatible with future versions of the autotools
</span><br>
<p>I wouldn't have copied something that isn't self-contained.
<br>
<p><span class="quotelev3">&gt; &gt;&gt; Would it ever be sane to use one value of restrict in hwloc and a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; different value in an upper-level application?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;That's not a problem since it's just an optimization &amp; validity  
</span><br>
<span class="quotelev2">&gt; &gt;checking
</span><br>
<span class="quotelev2">&gt; &gt;qualifier.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So it should be ok to use AC_C_RESTRICT then, right?
</span><br>
<p>But then we can't expose restrict in installed headers since we don't
<br>
know _whether_ and how it is defined.
<br>
<p><span class="quotelev1">&gt; FWIW, no compiler that I've ever tested complains about the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define foo bar
</span><br>
<span class="quotelev1">&gt; #define foo bar
</span><br>
<p>Yes.
<br>
<p><span class="quotelev1">&gt; Some (all?) compilers *will* warn if the subsequent definitions are  
</span><br>
<span class="quotelev1">&gt; different, like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define foo bar
</span><br>
<span class="quotelev1">&gt; #define foo barbar
</span><br>
<p>Yes.
<br>
<p><span class="quotelev1">&gt; So I'd call it a &quot;feature&quot; if hwloc defines &quot;restrict&quot; to one thing  
</span><br>
<span class="quotelev1">&gt; and then some other header file defines it to another.  :-)
</span><br>
<p>?
<br>
That would make applications get a warning just because they are for
<br>
instance using at the same time two libraries which both define restrict
<br>
to different things.
<br>
<p><span class="quotelev1">&gt; But then again, Autoconf has a *very strict* policy that generated  
</span><br>
<span class="quotelev1">&gt; config.h files are supposed to be private to the application that it  
</span><br>
<span class="quotelev1">&gt; is building.  OMPI, for example, does *not* have mpi.h include our  
</span><br>
<span class="quotelev1">&gt; generated config.h.  Instead, our mpi.h has a small number of things  
</span><br>
<span class="quotelev1">&gt; set from configure that are required (e.g., size of bool, etc.).
</span><br>
<p>That's why we have both autoheader-generated
<br>
hwloc/include/private/config.h.in and manually-written
<br>
hwloc/include/hwloc/config.h.in
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0060.php">Jeff Squyres: "[hwloc-devel] doxygen, help2man"</a>
<li><strong>Previous message:</strong> <a href="0058.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>In reply to:</strong> <a href="0058.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0062.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Reply:</strong> <a href="0062.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
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
