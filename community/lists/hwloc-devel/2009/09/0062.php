<?
$subject_val = "Re: [hwloc-devel] last API possible changes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 21 10:04:26 2009" -->
<!-- isoreceived="20090921140426" -->
<!-- sent="Mon, 21 Sep 2009 10:04:21 -0400" -->
<!-- isosent="20090921140421" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] last API possible changes" -->
<!-- id="061D8B81-2F18-4935-B3C5-BA7534F6D53A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20090921134028.GO5753_at_const.bordeaux.inria.fr" -->
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
<strong>Date:</strong> 2009-09-21 10:04:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0063.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Previous message:</strong> <a href="0061.php">Brice Goglin: "Re: [hwloc-devel] doxygen, help2man"</a>
<li><strong>In reply to:</strong> <a href="0059.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0063.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Reply:</strong> <a href="0063.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 21, 2009, at 9:40 AM, Samuel Thibault wrote:
<br>
<p><span class="quotelev2">&gt; &gt; So it should be ok to use AC_C_RESTRICT then, right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But then we can't expose restrict in installed headers since we don't
</span><br>
<span class="quotelev1">&gt; know _whether_ and how it is defined.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Understood, but is that really our problem?  &quot;restrict&quot; is part of the  
<br>
C language, so portable applications should be able to handle it in  
<br>
headers that they import, right?
<br>
<p>Alternatively, this whole block in cpuset-bits.h could be wrapped in  
<br>
an &quot;#ifndef restrict&quot;, right?:
<br>
<p>#if (__GNUC__ &gt; 2 || (__GNUC__ == 2 &amp;&amp; __GNUC_MINOR__ &gt;= 95))
<br>
# define __hwloc_restrict __restrict
<br>
#else
<br>
# if defined restrict || __STDC_VERSION__ &gt;= 199901L
<br>
#  define __hwloc_restrict restrict
<br>
# else
<br>
#  define __hwloc_restrict
<br>
# endif
<br>
#endif
<br>
<p><span class="quotelev2">&gt; &gt; So I'd call it a &quot;feature&quot; if hwloc defines &quot;restrict&quot; to one thing
</span><br>
<span class="quotelev2">&gt; &gt; and then some other header file defines it to another.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ?
</span><br>
<span class="quotelev1">&gt; That would make applications get a warning just because they are for
</span><br>
<span class="quotelev1">&gt; instance using at the same time two libraries which both define  
</span><br>
<span class="quotelev1">&gt; restrict
</span><br>
<span class="quotelev1">&gt; to different things.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yes -- and that's a Bad Thing.  The differences between those two  
<br>
libraries should be resolved, lest unexpected things occur because of  
<br>
a mismatch between what the header exports (and might be redefined)  
<br>
and what the compiled back-end library expects, no?
<br>
<p><span class="quotelev2">&gt; &gt; But then again, Autoconf has a *very strict* policy that generated
</span><br>
<span class="quotelev2">&gt; &gt; config.h files are supposed to be private to the application that it
</span><br>
<span class="quotelev2">&gt; &gt; is building.  OMPI, for example, does *not* have mpi.h include our
</span><br>
<span class="quotelev2">&gt; &gt; generated config.h.  Instead, our mpi.h has a small number of things
</span><br>
<span class="quotelev2">&gt; &gt; set from configure that are required (e.g., size of bool, etc.).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's why we have both autoheader-generated
</span><br>
<span class="quotelev1">&gt; hwloc/include/private/config.h.in and manually-written
</span><br>
<span class="quotelev1">&gt; hwloc/include/hwloc/config.h.in
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Um; right.  I should have known that.  :-)
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
<li><strong>Next message:</strong> <a href="0063.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Previous message:</strong> <a href="0061.php">Brice Goglin: "Re: [hwloc-devel] doxygen, help2man"</a>
<li><strong>In reply to:</strong> <a href="0059.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0063.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Reply:</strong> <a href="0063.php">Samuel Thibault: "Re: [hwloc-devel] last API possible changes"</a>
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
