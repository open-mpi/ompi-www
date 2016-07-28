<?
$subject_val = "Re: [OMPI devel] #327";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 11 19:30:57 2015" -->
<!-- isoreceived="20150112003057" -->
<!-- sent="Sun, 11 Jan 2015 17:30:55 -0700" -->
<!-- isosent="20150112003055" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] #327" -->
<!-- id="CAF1Cqj5UzmRoE0knKeQQ98+KSgBG2JZ2rxTeKukm+fFVJkcQkQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMJJpkXyJHJ=dqLC+JSwyynEiP0YnV-bweSAe80bFjBiq0znaA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] #327<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-11 19:30:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16779.php">Mark Kettenis: "[OMPI devel] oob_tcp_if_include with subnet is broken"</a>
<li><strong>Previous message:</strong> <a href="16777.php">Howard Pritchard: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<li><strong>In reply to:</strong> <a href="16774.php">George Bosilca: "[OMPI devel] #327"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HI George,
<br>
<p>Thanks for the feedback.
<br>
<p>This PR was only to address one piece ( a first step) for ways to handle
<br>
thread based progression
<br>
for RDMA capable nics within OMPI.  It by no means represents a complete
<br>
solution.  That more complete
<br>
solution was what I understood we were interested in in the long term, the
<br>
one that would certainly
<br>
need an RFC for, since it could involve things like extending the PML
<br>
interface, and using
<br>
these extensions in parts of libnbc, etc.
<br>
<p>I would have liked to use the priority flag except that its use is
<br>
different from what we would
<br>
want for only generating IRQs for the rendezvous control messages, namely
<br>
this part:
<br>
<p>/* try to get a small message out on to the wire quickly */
<br>
<p>static inline int mca_pml_ob1_send_inline (void *buf, size_t count,
<br>
<p>so this would be doing exactly what we want to avoid, namely generating
<br>
interrupts for
<br>
small eager messages, at least for the typical case.
<br>
<p>Its somewhat unfortunate the way the PML/BML/BTL is currently designed,
<br>
that the PML is
<br>
in charge of how rendezvous messages are transferred for RDMA capable
<br>
devices.  If
<br>
the approach were more like that taken in the MPICH nemesis ch3 device,
<br>
wherein a Nemesis netmod is fully responsible for sending the data using
<br>
its own algorithms,
<br>
with the option to leverage the LMT framework Darius Buntinas designed,
<br>
less &quot;knowledge&quot; of
<br>
how a given RDMA device works would have to have been incorporated into the
<br>
PML.
<br>
With the Nemesis design, I was able to hide a lot about the Cray XE/XC
<br>
network from
<br>
Nemesis - including the thread based progression part,  the particulars of
<br>
memory registration
<br>
for the Cray network, etc.  With the Nemesis design, there
<br>
was also no need for the base_descriptor back/forth between a Nemesis netmod
<br>
and the CH3 device layers that occurs in the PML/BML/BTL design for
<br>
send/recv
<br>
style data transfers.
<br>
<p>Nathan and I are planning to use the SIGNAL flag, as well as some
<br>
additional glue,
<br>
to add an option for thread based progression in the vader BTL,  but other
<br>
projects
<br>
have higher priority at the moment.
<br>
<p>We can reuse the SIGNAL DES FLAG if we find that extending the PML
<br>
interface to
<br>
include something with a signal concept is appropriate.  The one area I
<br>
know that
<br>
might benefit from such a concept is in non-blocking collectives.  But it
<br>
may turn
<br>
out to be easier just to reuse the libnbc in another coll component which
<br>
would be
<br>
aware of particular RDMA networks' capabilities, and avoid having to extend
<br>
the PML
<br>
interface with unnecessary methods.
<br>
<p>Hope this helps,
<br>
<p>Howard
<br>
<p><p><p>2015-01-09 15:30 GMT-07:00 George Bosilca &lt;bosilca_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; I have some comments about this ticket and the corresponding patch.
</span><br>
<span class="quotelev1">&gt; Honestly, the patch lacks most of the things we have talked about during
</span><br>
<span class="quotelev1">&gt; our last developers meeting. However, my main concern in this particular
</span><br>
<span class="quotelev1">&gt; email is about the SIGNAL flag.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. The fact that currently there is little difference between this flag
</span><br>
<span class="quotelev1">&gt; and PRIORITY is a fact that I would like to hear a justification for.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Moreover, right now SIGNAL is a purely PML decision. Again, we talked
</span><br>
<span class="quotelev1">&gt; about this and decided that the upper layer (this meant whoever is using
</span><br>
<span class="quotelev1">&gt; the PML) was to define this policy. We specifically said that this should
</span><br>
<span class="quotelev1">&gt; not be a PML level decision, because the PML lacks the means to take the
</span><br>
<span class="quotelev1">&gt; right decision about what should be signaled and what not. The current code
</span><br>
<span class="quotelev1">&gt; signals most of the PML control logic, including some of the matching logic
</span><br>
<span class="quotelev1">&gt; (but not all for some obscure reason). Based on my understanding of the
</span><br>
<span class="quotelev1">&gt; code, one didn't need to pollute the PML code for this, it could have just
</span><br>
<span class="quotelev1">&gt; used the PRIORITY flag instead.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Additionally, if my memory is good we decided that this should be
</span><br>
<span class="quotelev1">&gt; thoughtfully evaluated before pushing it into the trunk. And here
</span><br>
<span class="quotelev1">&gt; thoughtfully meant over multiple BTL and so on. Obviously, I missed the
</span><br>
<span class="quotelev1">&gt; email thread about the evaluation of this flag on UGNI. I guess I might not
</span><br>
<span class="quotelev1">&gt; be the only one, so I would really appreciate if someone can repost it
</span><br>
<span class="quotelev1">&gt; again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16774.php">http://www.open-mpi.org/community/lists/devel/2015/01/16774.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16778/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16779.php">Mark Kettenis: "[OMPI devel] oob_tcp_if_include with subnet is broken"</a>
<li><strong>Previous message:</strong> <a href="16777.php">Howard Pritchard: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<li><strong>In reply to:</strong> <a href="16774.php">George Bosilca: "[OMPI devel] #327"</a>
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
