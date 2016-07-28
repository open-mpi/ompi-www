<?
$subject_val = "Re: [OMPI devel] collectives / #1944 progress";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  2 08:06:36 2009" -->
<!-- isoreceived="20090702120636" -->
<!-- sent="Thu, 2 Jul 2009 08:06:31 -0400" -->
<!-- isosent="20090702120631" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] collectives / #1944 progress" -->
<!-- id="BE8B2FB7-9155-4C2D-AAB5-E1407916B8A3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A4C1A37.9020500_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] collectives / #1944 progress<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-02 08:06:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6377.php">Jeff Squyres: "Re: [OMPI devel] collectives / #1944 progress"</a>
<li><strong>Previous message:</strong> <a href="6375.php">Eugene Loh: "Re: [OMPI devel] collectives / #1944 progress"</a>
<li><strong>In reply to:</strong> <a href="6375.php">Eugene Loh: "Re: [OMPI devel] collectives / #1944 progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6377.php">Jeff Squyres: "Re: [OMPI devel] collectives / #1944 progress"</a>
<li><strong>Reply:</strong> <a href="6377.php">Jeff Squyres: "Re: [OMPI devel] collectives / #1944 progress"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 1, 2009, at 10:23 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev2">&gt; &gt; For the future, we have a two pronged plan:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suspect the standard procedure is that we all look quickly at this
</span><br>
<span class="quotelev1">&gt; e-mail message, file appropriately, and then resume our normal lives.
</span><br>
<span class="quotelev1">&gt; Yes?  Or, is such a plan put somehow into place?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I have time to allocate to this starting next week, but I then take a  
<br>
week of vacation the week after.
<br>
<p><span class="quotelev2">&gt; &gt; 1. Clean up the sm btl:
</span><br>
<span class="quotelev2">&gt; &gt;    1a. Remove all dead code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What do you mean here?  (Possibly you mean getting rid of sm pending
</span><br>
<span class="quotelev1">&gt; sends if we implement 1b properly, but I'm not sure.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>You mentioned to Brian and me that there was a lot of &quot;dead  
<br>
code&quot; (#if'ed out or otherwise will-never-be-used).  If that's  
<br>
incorrect, then forget this item.
<br>
<p><span class="quotelev2">&gt; &gt;    1b. Resize free_list_max and fifo_size MCA params to effect good
</span><br>
<span class="quotelev2">&gt; &gt; enough flow control.
</span><br>
<span class="quotelev2">&gt; &gt;    1c. Possibly: convert from FIFO's to linked lists (for future
</span><br>
<span class="quotelev2">&gt; &gt; maintenance purposes, not necessarily to fix problems).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another idea is to have two kinds of FIFOs.  One is just for returning
</span><br>
<span class="quotelev1">&gt; fragments.  The other is for in-coming message fragments.  It would  
</span><br>
<span class="quotelev1">&gt; even
</span><br>
<span class="quotelev1">&gt; seem as though one would no longer need &quot;free lists&quot;, but just use the
</span><br>
<span class="quotelev1">&gt; ack FIFO to manage fragments.  (ALL of this is complicated by the fact
</span><br>
<span class="quotelev1">&gt; that we have two kinds of fragments, eager and max, but fortunately
</span><br>
<span class="quotelev1">&gt; those details can be pushed onto the sorry fool who'll be implementing
</span><br>
<span class="quotelev1">&gt; all this.  I wonder who that'll be.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Likely me and/or Brian.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6377.php">Jeff Squyres: "Re: [OMPI devel] collectives / #1944 progress"</a>
<li><strong>Previous message:</strong> <a href="6375.php">Eugene Loh: "Re: [OMPI devel] collectives / #1944 progress"</a>
<li><strong>In reply to:</strong> <a href="6375.php">Eugene Loh: "Re: [OMPI devel] collectives / #1944 progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6377.php">Jeff Squyres: "Re: [OMPI devel] collectives / #1944 progress"</a>
<li><strong>Reply:</strong> <a href="6377.php">Jeff Squyres: "Re: [OMPI devel] collectives / #1944 progress"</a>
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
