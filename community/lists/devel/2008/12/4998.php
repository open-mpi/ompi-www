<?
$subject_val = "Re: [OMPI devel] Preparations for moving the btl's";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  4 15:02:01 2008" -->
<!-- isoreceived="20081204200201" -->
<!-- sent="Thu, 04 Dec 2008 15:01:04 -0500" -->
<!-- isosent="20081204200104" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Preparations for moving the btl's" -->
<!-- id="C55DA130.2BEE6%rlgraham_at_ornl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="10FA5035-B7C2-42D2-A5E1-BA2EF039E986_at_lanl.gov" -->
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
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-04 15:01:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4999.php">Eugene Loh: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>Previous message:</strong> <a href="4997.php">Ralph Castain: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>In reply to:</strong> <a href="4997.php">Ralph Castain: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4990.php">Jeff Squyres: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/4/08 2:28 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I guess you lost me on this one. How are the btl's going to push an error &quot;up&quot;
</span><br>
<span class="quotelev1">&gt; to a higher layer? The errors could contain an arbitrary amount of information
</span><br>
<span class="quotelev1">&gt; in them. Since the btl API's currently only return ints, are you proposing
</span><br>
<span class="quotelev1">&gt; that we change all the btl APIs to include a new error structure so we can
</span><br>
<span class="quotelev1">&gt; pass detailed error information back to the caller?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; yes, this is what I am proposing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then the MPI layer would have to call the orte_notifier with the appropriate
</span><br>
<span class="quotelev1">&gt; info, since the MPI layer doesn't have the necessary communications
</span><br>
<span class="quotelev1">&gt; infrastructure itself to perform the required functions. This would mean that
</span><br>
<span class="quotelev1">&gt; every place that calls the BTL's would have to deal with the new API and
</span><br>
<span class="quotelev1">&gt; returned error structure, and call orte_notifier if an error was reported.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; no more than adding it to the btl layer.  I think the btl should remain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as simple as possible.  There is actually
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; precedent for this in other contexts.  Since the notifier is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; componentized, I am assuming it is not exposing the
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; communication details to the calling layer.  Also, &#179;every place we call
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the btl&#178; is not a large number, and is
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; confined to a small number of components.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Seems like this would proliferate quickly, while having the error reporting
</span><br>
<span class="quotelev1">&gt; mechanism right where the error occurs represents the minimal impact and
</span><br>
<span class="quotelev1">&gt; maximum flexibility.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; more flexibility is obtained if the data is passed up the call stack, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; handled by the layer that wants to.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rich
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 4, 2008, at 12:07 PM, Richard Graham wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  Not exactly, it depends on what you push up the stack. If you push just an
</span><br>
<span class="quotelev2">&gt;&gt; error code, than you are right, there is very little value.  However, if you
</span><br>
<span class="quotelev2">&gt;&gt; push up the error strings (or something like that), and have an upper layer
</span><br>
<span class="quotelev2">&gt;&gt; interact with SLURM or Moab&#185;s error reporting system, the btl&#185;s don&#185;t need to
</span><br>
<span class="quotelev2">&gt;&gt; learn about and depend on a new interface.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  Rich
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  On 12/4/08 12:47 PM, &quot;Brian W. Barrett&quot; &lt;brbarret_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That was my thought exactly.  And since the point of the notifier
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  component is to return a *useful* description of what failure the BTL had
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  (like IB ran out of resource X again), that will be lost if we just push
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  that up to the next layer.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Just my $0.02, of course.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  On Thu, 4 Dec 2008, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt; Hmmm...only problem with that idea is that the entity being communicated
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt; to (e.g., SLURM, Moab) have no concept of MPI nor any way to communicate
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt; via that system. They do, however, have APIs that notifier can call, and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt; know how to speak TCP via their own agreed-upon protocols. And many
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; large
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt; systems turn off the TCP btl (all of ours, for example) because it isn't
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt; needed and opens additional unnecessary ports.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt; So calling APIs and/or sending messages across the OOB are pretty
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt; straight forward. Teaching Moab to understand btl/datatype engine
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt; messages (flowing across who knows what transport) is an unlikely thing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt; to happen.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt; Besides, one of the primary reasons for needing to call notifier is a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt; failure in the btl - so relying on the btl to send the message is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt; self-defeating.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt; On Dec 4, 2008, at 10:37 AM, Richard Graham wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;       Here is where I think we should reconsider accessing the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;       notifier component in the btl.  It creates dependencies in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;       the btl that are not needed.  The idea of a notifier
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;       component is a good one, but I would defer using it to upper
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;       layers, rather than embedding it in the guts of the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;       communication system.  I would be in favor of an approach
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;       that sends the information up the call stack.  The btl?s should
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;       not depend on other communication primitives, as they are the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;       communication primitive.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;       Rich
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;       On 12/4/08 9:04 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             Yes, FTB utilizes the notifier framework. In
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             addition, we have three
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             other components getting ready to be added to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             that framework that will
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             provide interfaces to Moab, SLURM, and a DOE
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             monitoring program. The
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             first two will require messaging capabilities to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             tell the schedulers
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             about problem nodes/routes. The latter will also
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             use a messaging
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             protocol, but is mostly aimed at alerting
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             operators to a problem and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             creating a historical archive.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;               That said, we can expect the use of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             orte_notifier to spread across
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             the BTL's pretty aggressively in the next few
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             months, and for the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             notifier API to change/expand as we address these
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             needs.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             On Dec 4, 2008, at 6:13 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;  &gt;             &gt; I think you got it right.  And I think we're
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             pretty good in terms of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;  &gt;             &gt; BTL usage of ORTE and OPAL (to include the new
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             &quot;notifier&quot; service
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;  &gt;             &gt; that Ralph put in recently -- what the FTB will
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             likely eventually
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;  &gt;             &gt; use, I think...?); those interfaces and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             abstraction barriers are
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;  &gt;             &gt; technologically enforced.  If you break the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             abstractions, the linker
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;  &gt;             &gt; will swiftly and unmercifully punish you.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;              (this was exactly [one
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;  &gt;             &gt; of] the rationale that we used for splitting
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             the code base into
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;  &gt;             &gt; OPAL, ORTE, and OMPI several years ago)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;  &gt;             &gt; Greg has already noted on the wiki a few
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             constants used in the BTL's
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;  &gt;             &gt; that have an OMPI_ prefix that aren't really
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             OMPI values (e.g.,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;  &gt;             &gt; OMPI_ENABLE_HETEROGENEOUS_SUPPORT).  These come
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             from configure
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;  &gt;             &gt; (i.e., opal/include/opal_config.h) and were not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             renamed back when we
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;  &gt;             &gt; split the code base into OPAL, ORTE, and OMPI.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;              I don't think we had
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;  &gt;             &gt; a strong reason for not renaming them -- most
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             could probably be
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;  &gt;             &gt; renamed to OPAL_* -- we just didn't do it then.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;              Perhaps they can be
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;  &gt;             &gt; changed during the BTL extraction process (I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             noted this on the wiki).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;  &gt;             &gt; On Dec 3, 2008, at 9:43 PM, Richard Graham
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt; BTW,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;  I was guessing FTB is Fault Tolerant
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             Backbone, but if not, can
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt; someone tell me what it is ?  If it is not the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             later, what I just
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt; wrote about it makes no sense.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt; Rich
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt; On 12/3/08 9:34 PM, &quot;Richard Graham&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             &lt;rlgraham_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt; The goal is to use the btl?s outside of the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             context of MPI, which
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt; was what was in mind from the day the ompi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             work started over five
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt; years ago, but with no other use at the time,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             things grew up
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt; intermingled ? no surprise at all.  What we are
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             attempting to do
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt; is to untangle the existing dependencies, and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             make a much cleaner
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt; distinction between how/what data is passed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             between layers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt; I expect this will involve some sort of well
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             defined interface
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt; between the btl?s and orte, and I don?t know if
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             this will also
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt; require something like this between the btl?s
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             and the pml ? I
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt; think that interface is rigidly enforced, but
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             am not sure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt; I expect that explicit calls to FTB in the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             btl layer would have to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt; be componentized, especially in the context
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             of what is developing
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt; in the FT working group of the MPI Forum.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;              Not that FTB is bad in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt; any way, just that it is one of many
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             monitors.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt; We will need to talk about this on a case by
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             case basis, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt; decide how to proceed.  If anyone wants to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             help, please do.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt; Rich
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt; On 12/3/08 3:02 PM, &quot;Ralph Castain&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; I managed to execute the modex-less changes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             pretty much without
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; introducing additional ORTE dependencies
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             into the BTL's, though
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; there
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; may be some additions as we look a the other
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             BTLs that I didn't
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; address. So hopefully that won't contribute
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             too much to the issue
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; here.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; At the moment, I don't think it matters
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             where notifier sits - it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; might
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; be able to move to OPAL. Only catch will be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             if some notifier
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; component
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; requires communications. I'm thinking of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             FTB, for example, and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; our own
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; local monitoring program that may require
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             TCP messaging. We don't
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; currently have anything in OPAL that would
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             support an OPAL level
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; messaging system, though perhaps that could
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             be resolved.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; We also have dependencies where the BTL's
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             will call orte_ess to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; find
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; out what node another proc is on, the node
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             local rank of that proc,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; etc. Those dependencies are likely to grow
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             after the Dec meeting
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; (see
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; wiki for that agenda item), and definitely
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             cannot be moved to OPAL.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; However, note that Rich stated the BTL's
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             were -not- moving to OPAL.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; This begs the question: where -are- they
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             going? Into their own
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; layer?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; Will that layer be somewhere in-between OMPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             and ORTE (in which
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; case,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; the ORTE dependencies are moot)?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; I note that the wiki page doesn't address
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             any of these questions,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; which is understandable if things are just
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             getting underway. But it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; does sound like this is going to take some
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             thought to ensure we
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; don't
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; paint ourselves into a corner.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; On Dec 3, 2008, at 12:10 PM, Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt; FWIW, I see lots of notifier calls being
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             added to the BTLs (and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt; elsewhere throughout the OMPI code base)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             over time...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt; On Dec 3, 2008, at 2:07 PM, Tim Mattox
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt; The BTLs might have added calls to the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             notifier framework in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; their
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt; error paths.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt; The notifier framework is currently in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             the ORTE layer... not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; sure
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt; if we could
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt; move it down to OPAL.  Ralph, any
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             thoughts on that?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt; On Wed, Dec 3, 2008 at 11:56 AM, Richard
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             Graham &lt;rlgraham_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt; George told me about what he is doing,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             so no changes would be
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt; committed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt; until George has his changes in.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt; Are there other changes to the btl's
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             that we should be aware
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; of ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt; Rich
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt; On 12/3/08 11:47 AM, &quot;George Bosilca&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; Terry,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; I'm involved [at some degree] in both
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             efforts and I can
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; confirm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; these
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; two efforts will not affect each other
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             in any bad way.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;  george.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; On Dec 3, 2008, at 11:42 , Terry Dontje
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; I don't have any *strong* objections.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             However, I know that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; Eugene
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; and George B have been working on some
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             Fastpath code changes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; that we
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; should make sure neither project
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             obliterates the other.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; --td
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; Richard Graham wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; Now that 1.3 will be released, we
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             would like to go ahead
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; with the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; plan to move the btl?s out of the MPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             layer. Greg Koenig
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; who is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; doing most of the work has started a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             wiki page with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; details on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; plans. Right now details are sketchy,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             as Greg is digging
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; through
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; the code, and has only hand written
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             notes on data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; structures that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; need to be moved, include files that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             are not needed, etc.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; The
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; page
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; is at:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             _<a href="https://svn.open-mpi.org/trac/ompi/wiki/BTLExtraction">https://svn.open-mpi.org/trac/ompi/wiki/BTLExtraction</a>_
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; The first three steps basically only
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             involve code motion,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; moving
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; items such as ompi_list, and renaming
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             them, moving where
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; the code
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; is actually located in the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             repository, and the like. For
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; these we
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; do not plan to put out a formal RFC,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             but comments are very
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; welcome,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; and any hands that are willing to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             help with this are even
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; more
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; welcome.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; The last phase where the btl?s are
</span><br>
made
<br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             dependent on OPAL,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; supporting libraries such as mpools I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             expect will be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; disruptive,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; and will definitely require an RFC,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             and will also be a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; longer
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; process.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; Please send comments,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; Rich
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;            
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt; Tim Mattox, Ph.D. -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt; tmattox_at_[hidden] ||
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             timattox_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;   I'm a bright...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;  &gt;             &gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;  &gt;             &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;  &gt;             &gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;  &gt;             &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;  &gt;             &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;  &gt;             &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;  &gt;             &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;   _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4998/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4999.php">Eugene Loh: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>Previous message:</strong> <a href="4997.php">Ralph Castain: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>In reply to:</strong> <a href="4997.php">Ralph Castain: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4990.php">Jeff Squyres: "Re: [OMPI devel] Preparations for moving the btl's"</a>
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
