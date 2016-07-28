<?
$subject_val = "Re: [OMPI devel] RTE Issue II: Interaction between the ROUTED and GRPCOMM frameworks";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  5 15:00:31 2007" -->
<!-- isoreceived="20071205200031" -->
<!-- sent="Wed, 05 Dec 2007 13:00:04 -0700" -->
<!-- isosent="20071205200004" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RTE Issue II: Interaction between the ROUTED and GRPCOMM frameworks" -->
<!-- id="C37C5154.B7EF%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.64.0712051025180.8890_at_marvin.we-be-smart.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RTE Issue II: Interaction between the ROUTED and GRPCOMM frameworks<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-05 15:00:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2734.php">Tim Prins: "[OMPI devel] opal_condition"</a>
<li><strong>Previous message:</strong> <a href="2732.php">Tim Mattox: "[OMPI devel] 32-bit openib is broken on the trunk as of Nov 27th, r16799"</a>
<li><strong>In reply to:</strong> <a href="2726.php">Brian W. Barrett: "Re: [OMPI devel] RTE Issue II: Interaction between the ROUTED and GRPCOMM frameworks"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not sure I would call (a) &quot;dumb&quot;, but I would agree it isn't a desirable
<br>
option. ;-)
<br>
<p>The issue isn't with the current two routed components. The issue arose
<br>
because additional routed components are about to be committed to the
<br>
system. None of those added components are fully connected - i.e., each
<br>
daemon only has sparse connections to its peers. Hence, the current grpcomm
<br>
collectives will cause performance issues.
<br>
<p>Re-writing those collectives to be independent of sparse vs. fully connected
<br>
schemes is a non-trivial exercise. Do I hear a volunteer out there? ;-)
<br>
<p>I could have just left this issue off-the-list, of course, and let the
<br>
authors of the new routed components figure out what was wrong and deal with
<br>
it. But I thought it would be more friendly to raise the point and see if
<br>
people had any suggestions on how to resolve the issue -before- it rears its
<br>
head.
<br>
<p>So, having done so, perhaps the best solution is option (c) - and let anyone
<br>
who brings a new routing scheme into the system deal with the collective
<br>
mis-match problem.
<br>
<p>As for the relaying operations in the orted noted by Tim: including the
<br>
relay operation in the grpcomm framework would be extremely difficult,
<br>
although I won't immediately rule it out as &quot;impossible&quot;. The problem is
<br>
that the orted has to actually process the message - it doesn't just route
<br>
it on to some other destination like the RML does with a message. Thus, the
<br>
orted_comm code contains a &quot;relay&quot; function that receives the message,
<br>
processes it, and then sends it along according to whatever xmission
<br>
protocol was specified by the sender.
<br>
<p>To move that code into grpcomm would require that the collectives put a flag
<br>
in the message indicating &quot;intermediaries who are routing this message need
<br>
to process it first&quot;. Grpcomm would then have to include some mechanism for
<br>
me to indicate &quot;if you are told to process a message first, then here is the
<br>
function you need to call&quot;. We would then have to add a mechanism in the RML
<br>
routing system that looks at the message for this flag and calls the
<br>
&quot;process it&quot; function before continuing the route.
<br>
<p>I had considered the alternative of calling the routed component to get the
<br>
next recipient for the message (instead of computing it myself), which would
<br>
at least remove the computation of the next recipients from the orted. I
<br>
would think that would be a more feasible next step, though it would take
<br>
development of another routed component to support things like the binomial
<br>
xcast algorithm, and possibly a change to the routed framework API (since
<br>
algo's like binomial might have to return more than one &quot;next recipient&quot;).
<br>
It also could get a little tricky as the routed component might have to
<br>
include logic to deal with some of the special use-cases currently handled
<br>
in grpcomm.
<br>
<p>All of this is non-trivial, which is why nobody tried to do it! If you want
<br>
to tackle that area of the code, we would welcome the volunteer - all I ask
<br>
is that you do it in a tmp branch somewhere first so we can test it.
<br>
<p>Ralph
<br>
<p>On 12/5/07 9:29 AM, &quot;Brian W. Barrett&quot; &lt;brbarret_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; To me, (a) is dumb and (c) isn't a non-starter.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The whole point of the component system is to seperate concerns.  Routing
</span><br>
<span class="quotelev1">&gt; topology and collectives operations are two difference concerns.  While
</span><br>
<span class="quotelev1">&gt; there's some overlap (a topology-aware collective doesn't make sense when
</span><br>
<span class="quotelev1">&gt; using the unity routing structure), it's not overlap in the one implies
</span><br>
<span class="quotelev1">&gt; you need the other.  I can think of a couple of different ways of
</span><br>
<span class="quotelev1">&gt; implementing the group communication framework, all of which are totally
</span><br>
<span class="quotelev1">&gt; independent of the particulars of how routing is tracked.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (b) has a very reasonable track record of working well on the OMPI side
</span><br>
<span class="quotelev1">&gt; (the mpool / btl thing figures itself out fairly well).  Bringing such a
</span><br>
<span class="quotelev1">&gt; setup over to ORTE wouldn't be bad, but a bit hackish.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Of course, there's at most two routed components built at any time, and
</span><br>
<span class="quotelev1">&gt; the defaults are all most non-debugging people will ever need, so I guess
</span><br>
<span class="quotelev1">&gt; I&quot;m not convinced (c) isn't a non-starter.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, 5 Dec 2007, Tim Prins wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; To me, (c) is a non-starter. I think whenever possible we should be
</span><br>
<span class="quotelev2">&gt;&gt; automatically doing the right thing. The user should not need to have
</span><br>
<span class="quotelev2">&gt;&gt; any idea how things work inside the library.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Between options (a) and (b), I don't really care.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (b) would be great if we had a mca component dependency system which has
</span><br>
<span class="quotelev2">&gt;&gt; been much talked about. But without such a system it gets messy.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (a) has the advantage of making sure there is no problems and allowing
</span><br>
<span class="quotelev2">&gt;&gt; the 2 systems to interact very nicely together, but it also might add a
</span><br>
<span class="quotelev2">&gt;&gt; large burden to a component writer.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On a related, but slightly different topic, one thing that has always
</span><br>
<span class="quotelev2">&gt;&gt; bothered me about the grpcomm/routed implementation is that it is not
</span><br>
<span class="quotelev2">&gt;&gt; self contained. There is logic for routing algorithms outside of the
</span><br>
<span class="quotelev2">&gt;&gt; components (for example, in orte/orted/orted_comm.c). So, if there are
</span><br>
<span class="quotelev2">&gt;&gt; any overhauls planned I definitely think this needs to be cleaned up.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Tim
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph H Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; II. Interaction between the ROUTED and GRPCOMM frameworks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When we initially developed these two frameworks within the RTE, we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; envisioned them to operate totally independently of each other. Thus, the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; grpcomm collectives provide algorithms such as a binomial &quot;xcast&quot; that uses
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the daemons to scalably send messages across the system.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, we recently realized that the efficacy of the current grpcomm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; algorithms directly hinge on the daemons being fully connected - which we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; were recently told may not be the case as other people introduce different
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ROUTED components. For example, using the binomial algorithm in grpcomm's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xcast while having a ring topology selected in ROUTED would likely result in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; terrible performance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This raises the following questions:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (a) should the GRPCOMM and ROUTED frameworks be consolidated to ensure that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the group collectives algorithms properly &quot;match&quot; the communication
</span><br>
<span class="quotelev3">&gt;&gt;&gt; topology?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (b) should we automatically select the grpcomm/routed pairings based on some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; internal logic?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (c) should we leave this &quot;as-is&quot; and the user is responsible for making
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intelligent choices (and for detecting when the performance is bad due to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this mismatch)?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (d) other suggestions?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2734.php">Tim Prins: "[OMPI devel] opal_condition"</a>
<li><strong>Previous message:</strong> <a href="2732.php">Tim Mattox: "[OMPI devel] 32-bit openib is broken on the trunk as of Nov 27th, r16799"</a>
<li><strong>In reply to:</strong> <a href="2726.php">Brian W. Barrett: "Re: [OMPI devel] RTE Issue II: Interaction between the ROUTED and GRPCOMM frameworks"</a>
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
