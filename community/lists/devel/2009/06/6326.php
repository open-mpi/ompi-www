<?
$subject_val = "Re: [OMPI devel] trac ticket 1944 and pending sends";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 24 10:46:11 2009" -->
<!-- isoreceived="20090624144611" -->
<!-- sent="Wed, 24 Jun 2009 08:46:05 -0600" -->
<!-- isosent="20090624144605" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trac ticket 1944 and pending sends" -->
<!-- id="71d2d8cc0906240746u3574a82wce8a6dd4c413d53f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-24 10:46:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6327.php">Brian W. Barrett: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>Previous message:</strong> <a href="6325.php">Eugene Loh: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>In reply to:</strong> <a href="6325.php">Eugene Loh: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6327.php">Brian W. Barrett: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not sure the two questions in your second item are separable, Eugene. I
<br>
fear that the only real solution will be to rearch the sm BTL, which was
<br>
originally a flawed design. I think you did a great job of building on it,
<br>
but we are now finding that the foundation is just too shaky, so no matter
<br>
what we do to patch it, it will still fail.
<br>
<p>Not putting words in Brian's mouth, but I believe this is what he is trying
<br>
to gently communicate.
<br>
<p><p>On Wed, Jun 24, 2009 at 8:38 AM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Or go to what I proposed and USE A LINKED LIST!  (as I said before,  not
</span><br>
<span class="quotelev2">&gt;&gt; an original idea, but one I think has merit)  Then you don't have  to size
</span><br>
<span class="quotelev2">&gt;&gt; the fifo, because there isn't a fifo.  Limit the number of  send fragments
</span><br>
<span class="quotelev2">&gt;&gt; any one proc can allocate and the only place memory can  grow without bound
</span><br>
<span class="quotelev2">&gt;&gt; is the OB1 unexpected list.  Then use SEND_COMPLETE  instead of SEND_NORMAL
</span><br>
<span class="quotelev2">&gt;&gt; in the collectives without barrier semantics  (bcast, reduce, gather,
</span><br>
<span class="quotelev2">&gt;&gt; scatter) and you effectively limit how far  ahead any one proc can get to
</span><br>
<span class="quotelev2">&gt;&gt; something that we can handle, with no  performance hit.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm still digesting George's mail and trac comments and responses thereto.
</span><br>
<span class="quotelev1">&gt;  Meanwhile, a couple of questions here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First, I think it'd be helpful if you said a few words about how you think
</span><br>
<span class="quotelev1">&gt; a linked list should be used here.  I can think of a couple of different
</span><br>
<span class="quotelev1">&gt; ways, and I have questions about each way.  Instead of my enumerating these
</span><br>
<span class="quotelev1">&gt; ways and those questions, how about you just be more specific?  (We used to
</span><br>
<span class="quotelev1">&gt; grow the FIFOs, so sizing them didn't used to be an issue.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Second, I'm curious how elaborate of a fix I should be trying for here.
</span><br>
<span class="quotelev1">&gt;  Are we looking for something to fix the problems at hand, or are we opening
</span><br>
<span class="quotelev1">&gt; the door to rearchitecting a big part of the sm BTL?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6326/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6327.php">Brian W. Barrett: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>Previous message:</strong> <a href="6325.php">Eugene Loh: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>In reply to:</strong> <a href="6325.php">Eugene Loh: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6327.php">Brian W. Barrett: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
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
