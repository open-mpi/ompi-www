<?
$subject_val = "Re: [OMPI devel] trac ticket 1944 and pending sends";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 24 11:10:15 2009" -->
<!-- isoreceived="20090624151015" -->
<!-- sent="Wed, 24 Jun 2009 11:10:11 -0400 (EDT)" -->
<!-- isosent="20090624151011" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trac ticket 1944 and pending sends" -->
<!-- id="alpine.DEB.1.10.0906241055120.1803_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A423A6B.3050009_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trac ticket 1944 and pending sends<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-24 11:10:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6328.php">Eugene Loh: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>Previous message:</strong> <a href="6326.php">Ralph Castain: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>In reply to:</strong> <a href="6325.php">Eugene Loh: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6328.php">Eugene Loh: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 24 Jun 2009, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Or go to what I proposed and USE A LINKED LIST!  (as I said before,  not an 
</span><br>
<span class="quotelev2">&gt;&gt; original idea, but one I think has merit)  Then you don't have  to size the 
</span><br>
<span class="quotelev2">&gt;&gt; fifo, because there isn't a fifo.  Limit the number of  send fragments any 
</span><br>
<span class="quotelev2">&gt;&gt; one proc can allocate and the only place memory can  grow without bound is 
</span><br>
<span class="quotelev2">&gt;&gt; the OB1 unexpected list.  Then use SEND_COMPLETE  instead of SEND_NORMAL in 
</span><br>
<span class="quotelev2">&gt;&gt; the collectives without barrier semantics  (bcast, reduce, gather, scatter) 
</span><br>
<span class="quotelev2">&gt;&gt; and you effectively limit how far  ahead any one proc can get to something 
</span><br>
<span class="quotelev2">&gt;&gt; that we can handle, with no  performance hit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm still digesting George's mail and trac comments and responses thereto. 
</span><br>
<span class="quotelev1">&gt; Meanwhile, a couple of questions here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First, I think it'd be helpful if you said a few words about how you think a 
</span><br>
<span class="quotelev1">&gt; linked list should be used here.  I can think of a couple of different ways, 
</span><br>
<span class="quotelev1">&gt; and I have questions about each way.  Instead of my enumerating these ways 
</span><br>
<span class="quotelev1">&gt; and those questions, how about you just be more specific?  (We used to grow 
</span><br>
<span class="quotelev1">&gt; the FIFOs, so sizing them didn't used to be an issue.)
</span><br>
<p>My thought is to essentially implement a good chunk of the Nemesis design 
<br>
from MPICH, so reading that paper might give background on where I'm 
<br>
coming from.  But if it were me....
<br>
<p>1) Always limit the number of send fragments that can be allocated to 
<br>
something small.  This gives us a concrete upper bound on the size of the 
<br>
shared memory region we need to allocate.
<br>
<p>2) Rather than a FIFO in which we put offset pointers, which requires a 
<br>
large amount of memory (p * num_frags), a linked list option offsets that 
<br>
into the size of the fragment - it's two fields in there, plus some 
<br>
constant overhead for the LL structure.
<br>
<p>3) On insert, either acquire the lock for the LL and insert at the tail of 
<br>
the list or use atomic ops to update the tail of the list (the nemesis 
<br>
paper talks about the atomic sequence).  Because there's no FIFO to fill 
<br>
up, there's no deadlock issues.
<br>
<p>4) If, on send, you don't have any send fragments available, as they're a 
<br>
constrainted resource, drain your incoming queue to collect acks - if you 
<br>
don't get any fragments, return failure to the upper layer and let it try 
<br>
again.
<br>
<p>5) I can see how #4 might cause issues, as the draining of the queue might 
<br>
actually result in more send requests.  In this case, I'd be tempted to 
<br>
have two linked lists (they're small, after all), one for incoming 
<br>
fragments and one for acks.  This wasn't an option with the fifos, due to 
<br>
their large size.
<br>
<p><span class="quotelev1">&gt; Second, I'm curious how elaborate of a fix I should be trying for here.  Are 
</span><br>
<span class="quotelev1">&gt; we looking for something to fix the problems at hand, or are we opening the 
</span><br>
<span class="quotelev1">&gt; door to rearchitecting a big part of the sm BTL?
</span><br>
<p>Well, like Ralph said, I worry about whether we can strap another bandaid 
<br>
on and keep it working.  If we can, great.  But George's proposal seems 
<br>
like it undoes all the memory savings work you did, and that worries me.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6328.php">Eugene Loh: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>Previous message:</strong> <a href="6326.php">Ralph Castain: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>In reply to:</strong> <a href="6325.php">Eugene Loh: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6328.php">Eugene Loh: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
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
