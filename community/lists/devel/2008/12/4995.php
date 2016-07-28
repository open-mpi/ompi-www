<?
$subject_val = "Re: [OMPI devel] Preparations for moving the btl's";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  4 12:47:42 2008" -->
<!-- isoreceived="20081204174742" -->
<!-- sent="Thu, 4 Dec 2008 12:47:37 -0500 (EST)" -->
<!-- isosent="20081204174737" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Preparations for moving the btl's" -->
<!-- id="alpine.DEB.1.10.0812041246410.23704_at_marvin.we-be-smart.org" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="2ABBE9A9-34C9-4267-BFD5-F512F4702A63_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Preparations for moving the btl's<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-04 12:47:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4996.php">Richard Graham: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>Previous message:</strong> <a href="4994.php">Ralph Castain: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>In reply to:</strong> <a href="4994.php">Ralph Castain: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4996.php">Richard Graham: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>Reply:</strong> <a href="4996.php">Richard Graham: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That was my thought exactly.  And since the point of the notifier 
<br>
component is to return a *useful* description of what failure the BTL had 
<br>
(like IB ran out of resource X again), that will be lost if we just push 
<br>
that up to the next layer.
<br>
<p>Just my $0.02, of course.
<br>
<p>Brian
<br>
<p>On Thu, 4 Dec 2008, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Hmmm...only problem with that idea is that the entity being communicated
</span><br>
<span class="quotelev1">&gt; to (e.g., SLURM, Moab) have no concept of MPI nor any way to communicate
</span><br>
<span class="quotelev1">&gt; via that system. They do, however, have APIs that notifier can call, and
</span><br>
<span class="quotelev1">&gt; know how to speak TCP via their own agreed-upon protocols. And many large
</span><br>
<span class="quotelev1">&gt; systems turn off the TCP btl (all of ours, for example) because it isn't
</span><br>
<span class="quotelev1">&gt; needed and opens additional unnecessary ports.
</span><br>
<span class="quotelev1">&gt; So calling APIs and/or sending messages across the OOB are pretty
</span><br>
<span class="quotelev1">&gt; straight forward. Teaching Moab to understand btl/datatype engine
</span><br>
<span class="quotelev1">&gt; messages (flowing across who knows what transport) is an unlikely thing
</span><br>
<span class="quotelev1">&gt; to happen.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Besides, one of the primary reasons for needing to call notifier is a
</span><br>
<span class="quotelev1">&gt; failure in the btl - so relying on the btl to send the message is
</span><br>
<span class="quotelev1">&gt; self-defeating.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 4, 2008, at 10:37 AM, Richard Graham wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Here is where I think we should reconsider accessing the
</span><br>
<span class="quotelev1">&gt;       notifier component in the btl. &#160;It creates dependencies in
</span><br>
<span class="quotelev1">&gt;       the btl that are not needed. &#160;The idea of a notifier
</span><br>
<span class="quotelev1">&gt;       component is a good one, but I would defer using it to upper
</span><br>
<span class="quotelev1">&gt;       layers, rather than embedding it in the guts of the
</span><br>
<span class="quotelev1">&gt;       communication system. &#160;I would be in favor of an approach
</span><br>
<span class="quotelev1">&gt;       that sends the information up the call stack. &#160;The btl?s should
</span><br>
<span class="quotelev1">&gt;       not depend on other communication primitives, as they are the
</span><br>
<span class="quotelev1">&gt;       communication primitive.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Rich
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       On 12/4/08 9:04 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Yes, FTB utilizes the notifier framework. In
</span><br>
<span class="quotelev1">&gt;             addition, we have three
</span><br>
<span class="quotelev1">&gt;             other components getting ready to be added to
</span><br>
<span class="quotelev1">&gt;             that framework that will
</span><br>
<span class="quotelev1">&gt;             provide interfaces to Moab, SLURM, and a DOE
</span><br>
<span class="quotelev1">&gt;             monitoring program. The
</span><br>
<span class="quotelev1">&gt;             first two will require messaging capabilities to
</span><br>
<span class="quotelev1">&gt;             tell the schedulers
</span><br>
<span class="quotelev1">&gt;             about problem nodes/routes. The latter will also
</span><br>
<span class="quotelev1">&gt;             use a messaging
</span><br>
<span class="quotelev1">&gt;             protocol, but is mostly aimed at alerting
</span><br>
<span class="quotelev1">&gt;             operators to a problem and
</span><br>
<span class="quotelev1">&gt;             creating a historical archive.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;That said, we can expect the use of
</span><br>
<span class="quotelev1">&gt;             orte_notifier to spread across
</span><br>
<span class="quotelev1">&gt;             the BTL's pretty aggressively in the next few
</span><br>
<span class="quotelev1">&gt;             months, and for the
</span><br>
<span class="quotelev1">&gt;             notifier API to change/expand as we address these
</span><br>
<span class="quotelev1">&gt;             needs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             On Dec 4, 2008, at 6:13 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;             &gt; I think you got it right. &#160;And I think we're
</span><br>
<span class="quotelev1">&gt;             pretty good in terms of
</span><br>
<span class="quotelev2">&gt;             &gt; BTL usage of ORTE and OPAL (to include the new
</span><br>
<span class="quotelev1">&gt;             &quot;notifier&quot; service
</span><br>
<span class="quotelev2">&gt;             &gt; that Ralph put in recently -- what the FTB will
</span><br>
<span class="quotelev1">&gt;             likely eventually
</span><br>
<span class="quotelev2">&gt;             &gt; use, I think...?); those interfaces and
</span><br>
<span class="quotelev1">&gt;             abstraction barriers are
</span><br>
<span class="quotelev2">&gt;             &gt; technologically enforced. &#160;If you break the
</span><br>
<span class="quotelev1">&gt;             abstractions, the linker
</span><br>
<span class="quotelev2">&gt;             &gt; will swiftly and unmercifully punish you.
</span><br>
<span class="quotelev1">&gt;             &#160;(this was exactly [one
</span><br>
<span class="quotelev2">&gt;             &gt; of] the rationale that we used for splitting
</span><br>
<span class="quotelev1">&gt;             the code base into
</span><br>
<span class="quotelev2">&gt;             &gt; OPAL, ORTE, and OMPI several years ago)
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev2">&gt;             &gt; Greg has already noted on the wiki a few
</span><br>
<span class="quotelev1">&gt;             constants used in the BTL's
</span><br>
<span class="quotelev2">&gt;             &gt; that have an OMPI_ prefix that aren't really
</span><br>
<span class="quotelev1">&gt;             OMPI values (e.g.,
</span><br>
<span class="quotelev2">&gt;             &gt; OMPI_ENABLE_HETEROGENEOUS_SUPPORT). &#160;These come
</span><br>
<span class="quotelev1">&gt;             from configure
</span><br>
<span class="quotelev2">&gt;             &gt; (i.e., opal/include/opal_config.h) and were not
</span><br>
<span class="quotelev1">&gt;             renamed back when we
</span><br>
<span class="quotelev2">&gt;             &gt; split the code base into OPAL, ORTE, and OMPI.
</span><br>
<span class="quotelev1">&gt;             &#160;I don't think we had
</span><br>
<span class="quotelev2">&gt;             &gt; a strong reason for not renaming them -- most
</span><br>
<span class="quotelev1">&gt;             could probably be
</span><br>
<span class="quotelev2">&gt;             &gt; renamed to OPAL_* -- we just didn't do it then.
</span><br>
<span class="quotelev1">&gt;             &#160;Perhaps they can be
</span><br>
<span class="quotelev2">&gt;             &gt; changed during the BTL extraction process (I
</span><br>
<span class="quotelev1">&gt;             noted this on the wiki).
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev2">&gt;             &gt; On Dec 3, 2008, at 9:43 PM, Richard Graham
</span><br>
<span class="quotelev1">&gt;             wrote:
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev3">&gt;             &gt;&gt; BTW,
</span><br>
<span class="quotelev3">&gt;             &gt;&gt; &#160;I was guessing FTB is Fault Tolerant
</span><br>
<span class="quotelev1">&gt;             Backbone, but if not, can
</span><br>
<span class="quotelev3">&gt;             &gt;&gt; someone tell me what it is ? &#160;If it is not the
</span><br>
<span class="quotelev1">&gt;             later, what I just
</span><br>
<span class="quotelev3">&gt;             &gt;&gt; wrote about it makes no sense.
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;
</span><br>
<span class="quotelev3">&gt;             &gt;&gt; Rich
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;
</span><br>
<span class="quotelev3">&gt;             &gt;&gt; On 12/3/08 9:34 PM, &quot;Richard Graham&quot;
</span><br>
<span class="quotelev1">&gt;             &lt;rlgraham_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt; The goal is to use the btl?s outside of the
</span><br>
<span class="quotelev1">&gt;             context of MPI, which
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt; was what was in mind from the day the ompi
</span><br>
<span class="quotelev1">&gt;             work started over five
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt; years ago, but with no other use at the time,
</span><br>
<span class="quotelev1">&gt;             things grew up
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt; intermingled ? no surprise at all. &#160;What we are
</span><br>
<span class="quotelev1">&gt;             attempting to do
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt; is to untangle the existing dependencies, and
</span><br>
<span class="quotelev1">&gt;             make a much cleaner
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt; distinction between how/what data is passed
</span><br>
<span class="quotelev1">&gt;             between layers.
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt; I expect this will involve some sort of well
</span><br>
<span class="quotelev1">&gt;             defined interface
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt; between the btl?s and orte, and I don?t know if
</span><br>
<span class="quotelev1">&gt;             this will also
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt; require something like this between the btl?s
</span><br>
<span class="quotelev1">&gt;             and the pml ? I
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt; think that interface is rigidly enforced, but
</span><br>
<span class="quotelev1">&gt;             am not sure.
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt; I expect that explicit calls to FTB in the
</span><br>
<span class="quotelev1">&gt;             btl layer would have to
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt; be componentized, especially in the context
</span><br>
<span class="quotelev1">&gt;             of what is developing
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt; in the FT working group of the MPI Forum.
</span><br>
<span class="quotelev1">&gt;             &#160;Not that FTB is bad in
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt; any way, just that it is one of many
</span><br>
<span class="quotelev1">&gt;             monitors.
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt; We will need to talk about this on a case by
</span><br>
<span class="quotelev1">&gt;             case basis, and
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt; decide how to proceed. &#160;If anyone wants to
</span><br>
<span class="quotelev1">&gt;             help, please do.
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt; Rich
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt; On 12/3/08 3:02 PM, &quot;Ralph Castain&quot;
</span><br>
<span class="quotelev1">&gt;             &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; I managed to execute the modex-less changes
</span><br>
<span class="quotelev1">&gt;             pretty much without
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; introducing additional ORTE dependencies
</span><br>
<span class="quotelev1">&gt;             into the BTL's, though
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; there
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; may be some additions as we look a the other
</span><br>
<span class="quotelev1">&gt;             BTLs that I didn't
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; address. So hopefully that won't contribute
</span><br>
<span class="quotelev1">&gt;             too much to the issue
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; here.
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; At the moment, I don't think it matters
</span><br>
<span class="quotelev1">&gt;             where notifier sits - it
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; might
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; be able to move to OPAL. Only catch will be
</span><br>
<span class="quotelev1">&gt;             if some notifier
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; component
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; requires communications. I'm thinking of
</span><br>
<span class="quotelev1">&gt;             FTB, for example, and
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; our own
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; local monitoring program that may require
</span><br>
<span class="quotelev1">&gt;             TCP messaging. We don't
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; currently have anything in OPAL that would
</span><br>
<span class="quotelev1">&gt;             support an OPAL level
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; messaging system, though perhaps that could
</span><br>
<span class="quotelev1">&gt;             be resolved.
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; We also have dependencies where the BTL's
</span><br>
<span class="quotelev1">&gt;             will call orte_ess to
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; find
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; out what node another proc is on, the node
</span><br>
<span class="quotelev1">&gt;             local rank of that proc,
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; etc. Those dependencies are likely to grow
</span><br>
<span class="quotelev1">&gt;             after the Dec meeting
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; (see
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; wiki for that agenda item), and definitely
</span><br>
<span class="quotelev1">&gt;             cannot be moved to OPAL.
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; However, note that Rich stated the BTL's
</span><br>
<span class="quotelev1">&gt;             were -not- moving to OPAL.
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; This begs the question: where -are- they
</span><br>
<span class="quotelev1">&gt;             going? Into their own
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; layer?
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; Will that layer be somewhere in-between OMPI
</span><br>
<span class="quotelev1">&gt;             and ORTE (in which
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; case,
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; the ORTE dependencies are moot)?
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; I note that the wiki page doesn't address
</span><br>
<span class="quotelev1">&gt;             any of these questions,
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; which is understandable if things are just
</span><br>
<span class="quotelev1">&gt;             getting underway. But it
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; does sound like this is going to take some
</span><br>
<span class="quotelev1">&gt;             thought to ensure we
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; don't
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; paint ourselves into a corner.
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; On Dec 3, 2008, at 12:10 PM, Jeff Squyres
</span><br>
<span class="quotelev1">&gt;             wrote:
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;             &gt;&gt;&gt;&gt; &gt; FWIW, I see lots of notifier calls being
</span><br>
<span class="quotelev1">&gt;             added to the BTLs (and
</span><br>
<span class="quotelev2">&gt;             &gt;&gt;&gt;&gt; &gt; elsewhere throughout the OMPI code base)
</span><br>
<span class="quotelev1">&gt;             over time...
</span><br>
<span class="quotelev2">&gt;             &gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;             &gt;&gt;&gt;&gt; &gt; On Dec 3, 2008, at 2:07 PM, Tim Mattox
</span><br>
<span class="quotelev1">&gt;             wrote:
</span><br>
<span class="quotelev2">&gt;             &gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt; The BTLs might have added calls to the
</span><br>
<span class="quotelev1">&gt;             notifier framework in
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; their
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt; error paths.
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt; The notifier framework is currently in
</span><br>
<span class="quotelev1">&gt;             the ORTE layer... not
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; sure
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt; if we could
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt; move it down to OPAL. &#160;Ralph, any
</span><br>
<span class="quotelev1">&gt;             thoughts on that?
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt; On Wed, Dec 3, 2008 at 11:56 AM, Richard
</span><br>
<span class="quotelev1">&gt;             Graham &lt;rlgraham_at_[hidden]
</span><br>
<span class="quotelev2">&gt;             &gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt; George told me about what he is doing,
</span><br>
<span class="quotelev1">&gt;             so no changes would be
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt; committed
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt; until George has his changes in.
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt; Are there other changes to the btl's
</span><br>
<span class="quotelev1">&gt;             that we should be aware
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; of ?
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt; Rich
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt; On 12/3/08 11:47 AM, &quot;George Bosilca&quot;
</span><br>
<span class="quotelev1">&gt;             &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; Terry,
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; I'm involved [at some degree] in both
</span><br>
<span class="quotelev1">&gt;             efforts and I can
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; confirm
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; these
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; two efforts will not affect each other
</span><br>
<span class="quotelev1">&gt;             in any bad way.
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; &#160;george.
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; On Dec 3, 2008, at 11:42 , Terry Dontje
</span><br>
<span class="quotelev1">&gt;             wrote:
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; I don't have any *strong* objections.
</span><br>
<span class="quotelev1">&gt;             However, I know that
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; Eugene
</span><br>
<span class="quotelev2">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; and George B have been working on some
</span><br>
<span class="quotelev1">&gt;             Fastpath code changes
</span><br>
<span class="quotelev2">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; that we
</span><br>
<span class="quotelev2">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; should make sure neither project
</span><br>
<span class="quotelev1">&gt;             obliterates the other.
</span><br>
<span class="quotelev2">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; Richard Graham wrote:
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; Now that 1.3 will be released, we
</span><br>
<span class="quotelev1">&gt;             would like to go ahead
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; with the
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; plan to move the btl?s out of the MPI
</span><br>
<span class="quotelev1">&gt;             layer. Greg Koenig
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; who is
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; doing most of the work has started a
</span><br>
<span class="quotelev1">&gt;             wiki page with
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; details on
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; plans. Right now details are sketchy,
</span><br>
<span class="quotelev1">&gt;             as Greg is digging
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; through
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; the code, and has only hand written
</span><br>
<span class="quotelev1">&gt;             notes on data
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; structures that
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; need to be moved, include files that
</span><br>
<span class="quotelev1">&gt;             are not needed, etc.
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; The
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; page
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; is at:
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;             _<a href="https://svn.open-mpi.org/trac/ompi/wiki/BTLExtraction">https://svn.open-mpi.org/trac/ompi/wiki/BTLExtraction</a>_
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; The first three steps basically only
</span><br>
<span class="quotelev1">&gt;             involve code motion,
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; moving
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; items such as ompi_list, and renaming
</span><br>
<span class="quotelev1">&gt;             them, moving where
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; the code
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; is actually located in the
</span><br>
<span class="quotelev1">&gt;             repository, and the like. For
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; these we
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; do not plan to put out a formal RFC,
</span><br>
<span class="quotelev1">&gt;             but comments are very
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; welcome,
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; and any hands that are willing to
</span><br>
<span class="quotelev1">&gt;             help with this are even
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; more
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; welcome.
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; The last phase where the btl?s are made
</span><br>
<span class="quotelev1">&gt;             dependent on OPAL,
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; supporting libraries such as mpools I
</span><br>
<span class="quotelev1">&gt;             expect will be
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; disruptive,
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; and will definitely require an RFC,
</span><br>
<span class="quotelev1">&gt;             and will also be a
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; longer
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; process.
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; Please send comments,
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; Rich
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;             ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;             _______________________________________________
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;             _______________________________________________
</span><br>
<span class="quotelev2">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;             _______________________________________________
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;             _______________________________________________
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt; Tim Mattox, Ph.D. -
</span><br>
<span class="quotelev1">&gt;             <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt; tmattox_at_[hidden] ||
</span><br>
<span class="quotelev1">&gt;             timattox_at_[hidden]
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt; &#160;&#160;I'm a bright...
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;             _______________________________________________
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;             &gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;             &gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;             &gt;&gt;&gt;&gt; &gt; --
</span><br>
<span class="quotelev2">&gt;             &gt;&gt;&gt;&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;             &gt;&gt;&gt;&gt; &gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;             &gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;             &gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;             &gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;             _______________________________________________
</span><br>
<span class="quotelev2">&gt;             &gt;&gt;&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;             &gt;&gt;&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;             &gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;             _______________________________________________
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;             &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;             _______________________________________________
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;             &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;
</span><br>
<span class="quotelev1">&gt;             _______________________________________________
</span><br>
<span class="quotelev3">&gt;             &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;             &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;             &gt;&gt;
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev2">&gt;             &gt; --
</span><br>
<span class="quotelev2">&gt;             &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;             &gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev2">&gt;             &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;             &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;             &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             _______________________________________________
</span><br>
<span class="quotelev1">&gt;             devel mailing list
</span><br>
<span class="quotelev1">&gt;             devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4996.php">Richard Graham: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>Previous message:</strong> <a href="4994.php">Ralph Castain: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>In reply to:</strong> <a href="4994.php">Ralph Castain: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4996.php">Richard Graham: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>Reply:</strong> <a href="4996.php">Richard Graham: "Re: [OMPI devel] Preparations for moving the btl's"</a>
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
