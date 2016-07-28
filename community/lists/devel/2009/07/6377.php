<?
$subject_val = "Re: [OMPI devel] collectives / #1944 progress";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  2 08:28:41 2009" -->
<!-- isoreceived="20090702122841" -->
<!-- sent="Thu, 2 Jul 2009 08:28:35 -0400" -->
<!-- isosent="20090702122835" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] collectives / #1944 progress" -->
<!-- id="DA71425E-73F7-4132-80A7-3EC78E3A5DFF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BE8B2FB7-9155-4C2D-AAB5-E1407916B8A3_at_cisco.com" -->
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
<strong>Date:</strong> 2009-07-02 08:28:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6378.php">Eugene Loh: "Re: [OMPI devel] collectives / #1944 progress"</a>
<li><strong>Previous message:</strong> <a href="6376.php">Jeff Squyres: "Re: [OMPI devel] collectives / #1944 progress"</a>
<li><strong>In reply to:</strong> <a href="6376.php">Jeff Squyres: "Re: [OMPI devel] collectives / #1944 progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6378.php">Eugene Loh: "Re: [OMPI devel] collectives / #1944 progress"</a>
<li><strong>Reply:</strong> <a href="6378.php">Eugene Loh: "Re: [OMPI devel] collectives / #1944 progress"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eugene --
<br>
<p>Can you CMR over anything that still needs to go to v1.3 for the sm  
<br>
fixes?
<br>
<p>I'll be filing a CMR to activate coll_sync later today.
<br>
<p>(I admit I didn't pay close attention to see if everything is already  
<br>
over there)
<br>
<p><p>On Jul 2, 2009, at 8:06 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 1, 2009, at 10:23 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; For the future, we have a two pronged plan:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I suspect the standard procedure is that we all look quickly at this
</span><br>
<span class="quotelev2">&gt;&gt; e-mail message, file appropriately, and then resume our normal lives.
</span><br>
<span class="quotelev2">&gt;&gt; Yes?  Or, is such a plan put somehow into place?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have time to allocate to this starting next week, but I then take  
</span><br>
<span class="quotelev1">&gt; a week of vacation the week after.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 1. Clean up the sm btl:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    1a. Remove all dead code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What do you mean here?  (Possibly you mean getting rid of sm pending
</span><br>
<span class="quotelev2">&gt;&gt; sends if we implement 1b properly, but I'm not sure.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You mentioned to Brian and me that there was a lot of &quot;dead  
</span><br>
<span class="quotelev1">&gt; code&quot; (#if'ed out or otherwise will-never-be-used).  If that's  
</span><br>
<span class="quotelev1">&gt; incorrect, then forget this item.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    1b. Resize free_list_max and fifo_size MCA params to effect good
</span><br>
<span class="quotelev3">&gt;&gt; &gt; enough flow control.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    1c. Possibly: convert from FIFO's to linked lists (for future
</span><br>
<span class="quotelev3">&gt;&gt; &gt; maintenance purposes, not necessarily to fix problems).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Another idea is to have two kinds of FIFOs.  One is just for  
</span><br>
<span class="quotelev2">&gt;&gt; returning
</span><br>
<span class="quotelev2">&gt;&gt; fragments.  The other is for in-coming message fragments.  It would  
</span><br>
<span class="quotelev2">&gt;&gt; even
</span><br>
<span class="quotelev2">&gt;&gt; seem as though one would no longer need &quot;free lists&quot;, but just use  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; ack FIFO to manage fragments.  (ALL of this is complicated by the  
</span><br>
<span class="quotelev2">&gt;&gt; fact
</span><br>
<span class="quotelev2">&gt;&gt; that we have two kinds of fragments, eager and max, but fortunately
</span><br>
<span class="quotelev2">&gt;&gt; those details can be pushed onto the sorry fool who'll be  
</span><br>
<span class="quotelev2">&gt;&gt; implementing
</span><br>
<span class="quotelev2">&gt;&gt; all this.  I wonder who that'll be.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Likely me and/or Brian.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6378.php">Eugene Loh: "Re: [OMPI devel] collectives / #1944 progress"</a>
<li><strong>Previous message:</strong> <a href="6376.php">Jeff Squyres: "Re: [OMPI devel] collectives / #1944 progress"</a>
<li><strong>In reply to:</strong> <a href="6376.php">Jeff Squyres: "Re: [OMPI devel] collectives / #1944 progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6378.php">Eugene Loh: "Re: [OMPI devel] collectives / #1944 progress"</a>
<li><strong>Reply:</strong> <a href="6378.php">Eugene Loh: "Re: [OMPI devel] collectives / #1944 progress"</a>
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
