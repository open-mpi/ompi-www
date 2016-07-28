<?
$subject_val = "Re: [OMPI users] Infinite loop when tcp free list max reached";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  4 13:18:46 2008" -->
<!-- isoreceived="20080604171846" -->
<!-- sent="Wed, 4 Jun 2008 13:18:35 -0400" -->
<!-- isosent="20080604171835" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Infinite loop when tcp free list max reached" -->
<!-- id="ED1DD5EF-0883-49DA-A2B7-D9424CAC1F6D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="d105ee120805261417i1170085g97e6f19dbe91ac37_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Infinite loop when tcp free list max reached<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-04 13:18:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5804.php">Patrick Geoffray: "Re: [OMPI users] tg3 module"</a>
<li><strong>Previous message:</strong> <a href="5802.php">Jeff Squyres: "Re: [OMPI users] --bynode vs --byslot"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/05/5733.php">Matt Hughes: "[OMPI users] Infinite loop when tcp free list max reached"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 26, 2008, at 5:17 PM, Matt Hughes wrote:
<br>
<p><span class="quotelev1">&gt; With the TCP btl, when free list items are exhausted, OMPI 1.2.6 falls
</span><br>
<span class="quotelev1">&gt; into an infinite loop:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #3981 0x0000002a98b4e23f in opal_condition_wait (c=0x2a98c541d0,
</span><br>
<span class="quotelev1">&gt;    m=0x2a98c54180) at ../../../../opal/threads/condition.h:81
</span><br>
<p>[snip]
<br>
<p>Yoinks.
<br>
<p><span class="quotelev1">&gt; The call used to get a free list item is OMPI_FREE_LIST_WAIT(), which
</span><br>
<span class="quotelev1">&gt; is supposed to block until an item is available.  However, it calls
</span><br>
<span class="quotelev1">&gt; opal_condition_wait(), which in turn calls opal_process(), which then
</span><br>
<span class="quotelev1">&gt; waits for a free list item.....  It seems strange to me that
</span><br>
<span class="quotelev1">&gt; opal_condition_wait() calls opal_progress(), but I'm not that familiar
</span><br>
<span class="quotelev1">&gt; with the code.
</span><br>
<p>We do that because OMPI is single-threaded.  Otherwise, there's no  
<br>
other way to make progress while waiting for the conditional variable  
<br>
to become true.
<br>
<p><span class="quotelev1">&gt; Is it possible that this has been fixed in 1.3?
</span><br>
<p>It is possible -- there were some changes with regards to how free  
<br>
list waiting was done, etc.  Would it be possible to try your test  
<br>
with a trunk nightly tarball?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>
<br>
<p><span class="quotelev1">&gt; I haven't tried 1.3 yet because I will have to file a truckload of
</span><br>
<span class="quotelev1">&gt; bugs against 1.3 first.
</span><br>
<p>Do you have a truckload of bugs to file for v1.3?  If so, now is the  
<br>
time to do so -- we're gearing up for the v1.3 release...
<br>
<p><span class="quotelev1">&gt; Should I be posting this stuff to the devel list?
</span><br>
<p><p>If your questions go beyond the naieve-user-level questions, you might  
<br>
get a quicker response on the devel list.
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
<li><strong>Next message:</strong> <a href="5804.php">Patrick Geoffray: "Re: [OMPI users] tg3 module"</a>
<li><strong>Previous message:</strong> <a href="5802.php">Jeff Squyres: "Re: [OMPI users] --bynode vs --byslot"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/05/5733.php">Matt Hughes: "[OMPI users] Infinite loop when tcp free list max reached"</a>
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
