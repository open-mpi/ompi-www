<?
$subject_val = "Re: [hwloc-devel] last API possible changes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 21 10:42:09 2009" -->
<!-- isoreceived="20090921144209" -->
<!-- sent="Mon, 21 Sep 2009 16:42:04 +0200" -->
<!-- isosent="20090921144204" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] last API possible changes" -->
<!-- id="20090921144204.GT5753_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="061D8B81-2F18-4935-B3C5-BA7534F6D53A_at_cisco.com" -->
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
<strong>Date:</strong> 2009-09-21 10:42:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0064.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Previous message:</strong> <a href="0062.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>In reply to:</strong> <a href="0062.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0064.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Reply:</strong> <a href="0064.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Mon 21 Sep 2009 10:04:21 -0400, a &#233;crit :
<br>
<span class="quotelev1">&gt; On Sep 21, 2009, at 9:40 AM, Samuel Thibault wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; So it should be ok to use AC_C_RESTRICT then, right?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;But then we can't expose restrict in installed headers since we don't
</span><br>
<span class="quotelev2">&gt; &gt;know _whether_ and how it is defined.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Understood, but is that really our problem?  &quot;restrict&quot; is part of the  
</span><br>
<span class="quotelev1">&gt; C language, so portable applications should be able to handle it in  
</span><br>
<span class="quotelev1">&gt; headers that they import, right?
</span><br>
<p>It's part of the language starting from C99 only. An application could
<br>
enable non-C99 mode where it becomes undefined, you can never know.
<br>
<p><span class="quotelev1">&gt; Alternatively, this whole block in cpuset-bits.h could be wrapped in  
</span><br>
<span class="quotelev1">&gt; an &quot;#ifndef restrict&quot;, right?:
</span><br>
<p>That will work only if libraries possibly defining restrict and included
<br>
after hwloc do the same.  You may argue that then it's their matter.
<br>
The only library I see defining restrict in my /usr/include does it
<br>
without #ifndef restrict, I'm not sure we want to fight this.
<br>
<p>Anyway, #defining restrict in an installed header means that we'd have
<br>
to copy the autoconf stuff into it anyway as to my knowledge autoconf is
<br>
not flexible enough to only output that to some config.h.in header. That
<br>
hence doesn't buy ourself much compared to the current situation, except
<br>
that we'd have restrict instead of __hwloc_restrict.  Risking conflicts
<br>
on the definition of restrict just for that seems too much to me.
<br>
<p><span class="quotelev3">&gt; &gt;&gt; So I'd call it a &quot;feature&quot; if hwloc defines &quot;restrict&quot; to one thing
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and then some other header file defines it to another.  :-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;?
</span><br>
<span class="quotelev2">&gt; &gt;That would make applications get a warning just because they are for
</span><br>
<span class="quotelev2">&gt; &gt;instance using at the same time two libraries which both define  
</span><br>
<span class="quotelev2">&gt; &gt;restrict
</span><br>
<span class="quotelev2">&gt; &gt;to different things.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes -- and that's a Bad Thing.  The differences between those two  
</span><br>
<span class="quotelev1">&gt; libraries should be resolved, lest unexpected things occur because of  
</span><br>
<span class="quotelev1">&gt; a mismatch between what the header exports (and might be redefined)  
</span><br>
<span class="quotelev1">&gt; and what the compiled back-end library expects, no?
</span><br>
<p>You may not be able to resolve the difference: depending on the kind of
<br>
detection of the compiler etc. etc. you may end up with restrict defined
<br>
to __restrict or to something else.  And as soon as one improves its
<br>
detection of the compiler, the other(s!) will have to harmonize, etc.
<br>
Not really sustainable.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0064.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Previous message:</strong> <a href="0062.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>In reply to:</strong> <a href="0062.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0064.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Reply:</strong> <a href="0064.php">Jeff Squyres: "Re: [hwloc-devel] last API possible changes"</a>
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
