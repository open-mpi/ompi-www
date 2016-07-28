<?
$subject_val = "Re: [OMPI devel] trac ticket 1944 and pending sends";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 24 10:38:28 2009" -->
<!-- isoreceived="20090624143828" -->
<!-- sent="Wed, 24 Jun 2009 07:38:35 -0700" -->
<!-- isosent="20090624143835" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trac ticket 1944 and pending sends" -->
<!-- id="4A423A6B.3050009_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="511EF2B1-753F-4183-A00E-25BEC73D896A_at_open-mpi.org" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-24 10:38:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6326.php">Ralph Castain: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>Previous message:</strong> <a href="6324.php">Bryan Lally: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>In reply to:</strong> <a href="6322.php">Brian Barrett: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6326.php">Ralph Castain: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>Reply:</strong> <a href="6326.php">Ralph Castain: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>Reply:</strong> <a href="6327.php">Brian W. Barrett: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; Or go to what I proposed and USE A LINKED LIST!  (as I said before,  
</span><br>
<span class="quotelev1">&gt; not an original idea, but one I think has merit)  Then you don't have  
</span><br>
<span class="quotelev1">&gt; to size the fifo, because there isn't a fifo.  Limit the number of  
</span><br>
<span class="quotelev1">&gt; send fragments any one proc can allocate and the only place memory 
</span><br>
<span class="quotelev1">&gt; can  grow without bound is the OB1 unexpected list.  Then use 
</span><br>
<span class="quotelev1">&gt; SEND_COMPLETE  instead of SEND_NORMAL in the collectives without 
</span><br>
<span class="quotelev1">&gt; barrier semantics  (bcast, reduce, gather, scatter) and you 
</span><br>
<span class="quotelev1">&gt; effectively limit how far  ahead any one proc can get to something 
</span><br>
<span class="quotelev1">&gt; that we can handle, with no  performance hit.
</span><br>
<p>I'm still digesting George's mail and trac comments and responses 
<br>
thereto.  Meanwhile, a couple of questions here.
<br>
<p>First, I think it'd be helpful if you said a few words about how you 
<br>
think a linked list should be used here.  I can think of a couple of 
<br>
different ways, and I have questions about each way.  Instead of my 
<br>
enumerating these ways and those questions, how about you just be more 
<br>
specific?  (We used to grow the FIFOs, so sizing them didn't used to be 
<br>
an issue.)
<br>
<p>Second, I'm curious how elaborate of a fix I should be trying for here.  
<br>
Are we looking for something to fix the problems at hand, or are we 
<br>
opening the door to rearchitecting a big part of the sm BTL?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6326.php">Ralph Castain: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>Previous message:</strong> <a href="6324.php">Bryan Lally: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>In reply to:</strong> <a href="6322.php">Brian Barrett: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6326.php">Ralph Castain: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>Reply:</strong> <a href="6326.php">Ralph Castain: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>Reply:</strong> <a href="6327.php">Brian W. Barrett: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
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
