<?
$subject_val = "Re: [OMPI devel] collectives / #1944 progress";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  2 11:07:24 2009" -->
<!-- isoreceived="20090702150724" -->
<!-- sent="Thu, 02 Jul 2009 08:07:32 -0700" -->
<!-- isosent="20090702150732" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] collectives / #1944 progress" -->
<!-- id="4A4CCD34.70301_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="DA71425E-73F7-4132-80A7-3EC78E3A5DFF_at_cisco.com" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-02 11:07:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6379.php">Ralph Castain: "[OMPI devel] Known problems in 1.3.2 and trunk"</a>
<li><strong>Previous message:</strong> <a href="6377.php">Jeff Squyres: "Re: [OMPI devel] collectives / #1944 progress"</a>
<li><strong>In reply to:</strong> <a href="6377.php">Jeff Squyres: "Re: [OMPI devel] collectives / #1944 progress"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Eugene --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you CMR over anything that still needs to go to v1.3 for the sm  
</span><br>
<span class="quotelev1">&gt; fixes?
</span><br>
<p>#1962
<br>
<p><span class="quotelev1">&gt; I'll be filing a CMR to activate coll_sync later today.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (I admit I didn't pay close attention to see if everything is already  
</span><br>
<span class="quotelev1">&gt; over there)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 2, 2009, at 8:06 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 1, 2009, at 10:23 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; For the future, we have a two pronged plan:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I suspect the standard procedure is that we all look quickly at this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; e-mail message, file appropriately, and then resume our normal lives.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes?  Or, is such a plan put somehow into place?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have time to allocate to this starting next week, but I then take  
</span><br>
<span class="quotelev2">&gt;&gt; a week of vacation the week after.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; 1. Clean up the sm btl:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    1a. Remove all dead code.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What do you mean here?  (Possibly you mean getting rid of sm pending
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sends if we implement 1b properly, but I'm not sure.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You mentioned to Brian and me that there was a lot of &quot;dead  code&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; (#if'ed out or otherwise will-never-be-used).  If that's  incorrect, 
</span><br>
<span class="quotelev2">&gt;&gt; then forget this item.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    1b. Resize free_list_max and fifo_size MCA params to effect good
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; enough flow control.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    1c. Possibly: convert from FIFO's to linked lists (for future
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; maintenance purposes, not necessarily to fix problems).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Another idea is to have two kinds of FIFOs.  One is just for  returning
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fragments.  The other is for in-coming message fragments.  It would  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; even
</span><br>
<span class="quotelev3">&gt;&gt;&gt; seem as though one would no longer need &quot;free lists&quot;, but just use  the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ack FIFO to manage fragments.  (ALL of this is complicated by the  fact
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that we have two kinds of fragments, eager and max, but fortunately
</span><br>
<span class="quotelev3">&gt;&gt;&gt; those details can be pushed onto the sorry fool who'll be  implementing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all this.  I wonder who that'll be.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Likely me and/or Brian.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6379.php">Ralph Castain: "[OMPI devel] Known problems in 1.3.2 and trunk"</a>
<li><strong>Previous message:</strong> <a href="6377.php">Jeff Squyres: "Re: [OMPI devel] collectives / #1944 progress"</a>
<li><strong>In reply to:</strong> <a href="6377.php">Jeff Squyres: "Re: [OMPI devel] collectives / #1944 progress"</a>
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
