<?
$subject_val = "Re: [OMPI devel] ORTE process name,, nodeid..";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 22 14:33:27 2007" -->
<!-- isoreceived="20071122193327" -->
<!-- sent="Thu, 22 Nov 2007 14:11:35 -0500" -->
<!-- isosent="20071122191135" -->
<!-- name="Shipman, Galen M." -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ORTE process name,, nodeid.." -->
<!-- id="C36B3E97.1BD7%gshipman_at_ornl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C367A34E.3F8D%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ORTE process name,, nodeid..<br>
<strong>From:</strong> Shipman, Galen M. (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-22 14:11:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2663.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] Memory manager"</a>
<li><strong>Previous message:</strong> <a href="2661.php">Jeff Squyres: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>In reply to:</strong> <a href="2649.php">Ralph Castain: "Re: [OMPI devel] ORTE process name,, nodeid.."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I really don't have the background to discuss ORTE architectural decisions I
<br>
will leave this to others.
<br>
<p>What I need is the following:
<br>
<p>The ability to support Shared Memory on CNL. This requires knowing if a proc
<br>
is local and a mechanism to solve the SM init race condition. Here are the
<br>
constraints as I see them:
<br>
<p>- Don't want to #if the code
<br>
- Need to support this in 1.3 and probably 1.2 depending on release of 1.3
<br>
- This shouldn't be a &quot;hack&quot; in 1.3
<br>
- 1.2 may be a bit more of a hack as we are talking a back port with a much
<br>
shorter maintenance time-frame than 1.3
<br>
<p><p><p>Looks to me like we need a conference call to discuss this. Would sometime
<br>
next week work? 
<br>
<p>Happy Thanksgiving all! I'm off to eat entirely too much..
<br>
<p>- Galen 
<br>
<p><p>On 11/19/07 10:32 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 11/19/07 6:20 PM, &quot;Tim Prins&quot; &lt;tprins_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Monday 19 November 2007 09:42:21 am Ralph H Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; &lt;snip&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; An alternative solution might be to incorporate the modex in the new OMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; framework I was about to create anyway. This framework was intended to deal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with publish/lookup of OMPI data to support a variety of methods.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Originally, we had intended only to include support there for things
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specifically related to MPI_Publish etc., but there is no reason we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; couldn't generalize it to support the general exchange of process &quot;how to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connect to me&quot; info and include a modex API in it. I was figuring we would
</span><br>
<span class="quotelev3">&gt;&gt;&gt; need two immediate components in it anyway: an ORTE one for when we have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; full ORTE support in the system, and a CNOS one that would...well, I guess
</span><br>
<span class="quotelev3">&gt;&gt;&gt; just bark and say &quot;you can't do publish/lookup on a Cray&quot;. It would be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; simple to add the modex stuff there, and makes some logical sense as well.
</span><br>
<span class="quotelev2">&gt;&gt; I think this approach is fundamentally flawed. Our frameworks are designed to
</span><br>
<span class="quotelev2">&gt;&gt; abstract out something, to allow for multiple implementations. However, doing
</span><br>
<span class="quotelev2">&gt;&gt; this would put two completely different things (the modex and the MPI
</span><br>
<span class="quotelev2">&gt;&gt; pub/sub) together in one framework. While this may be convenient for the
</span><br>
<span class="quotelev2">&gt;&gt; cray, it would be very inconvenient for someone who wanted to do the MPI
</span><br>
<span class="quotelev2">&gt;&gt; pub/sub via a ldap server (as has been discussed). The key here is that MPI
</span><br>
<span class="quotelev2">&gt;&gt; pub/sub is for very small amounts of data, accessed infrequently and in a
</span><br>
<span class="quotelev2">&gt;&gt; non-performance-critical manner, whereas the modex is for rather large
</span><br>
<span class="quotelev2">&gt;&gt; amounts of information (on big jobs) that has to be exchanged efficiently.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Actually, several people talked about this before we proposed it and came to
</span><br>
<span class="quotelev1">&gt; a different conclusion. The modex is in essence a &quot;here's how to talk to me&quot;
</span><br>
<span class="quotelev1">&gt; communication, which is the same intent of publish/lookup. I agree that the
</span><br>
<span class="quotelev1">&gt; volume of data involved is different. However, we are -not- proposing to use
</span><br>
<span class="quotelev1">&gt; the same mechanism for the two (modex vs. pub/lookup).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The proposal was based on the fact that the publish/lookup and modex
</span><br>
<span class="quotelev1">&gt; effectively use similar mechanisms - i.e., the orte component would use the
</span><br>
<span class="quotelev1">&gt; RML as the underlying communication mechanism. In contrast, the cray
</span><br>
<span class="quotelev1">&gt; component has alternative non-RML based mechanisms for both systems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Things like the LDAP server pose an interesting challenge. In that case, the
</span><br>
<span class="quotelev1">&gt; publish/lookup cannot use the RML as LDAP has no understanding of that comm
</span><br>
<span class="quotelev1">&gt; mode. The modex, however, might - and might not - use that mechanism.
</span><br>
<span class="quotelev1">&gt; Accordingly, the plan was to provide base functions that use RML for any
</span><br>
<span class="quotelev1">&gt; component that can and wants to do so. This is identical to the approach we
</span><br>
<span class="quotelev1">&gt; use throughout the code base.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, we do need the modex in a framework somewhere as we will need to
</span><br>
<span class="quotelev1">&gt; modify it to support tight integration with various environments. I cannot
</span><br>
<span class="quotelev1">&gt; see doing every tight integration with yet another RSL component as the code
</span><br>
<span class="quotelev1">&gt; duplication gets absurd - there isn't enough difference to support it. I
</span><br>
<span class="quotelev1">&gt; also, though, don't want to be forced to use the same modex in every case if
</span><br>
<span class="quotelev1">&gt; the native environment can provide an alternative method - having the modex
</span><br>
<span class="quotelev1">&gt; in the framework solves that problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I guess I don't grok the issue here - what is wrong with having a modex
</span><br>
<span class="quotelev1">&gt; API in the pub/sub framework??? Other than causing you some additional merge
</span><br>
<span class="quotelev1">&gt; issues within RSL, I fail to understand why this is a problem.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Before anyone misunderstands, I am *not* proposing that we add a modex
</span><br>
<span class="quotelev2">&gt;&gt; framework to ompi. Rather, I think this is a case where the RSL could make
</span><br>
<span class="quotelev2">&gt;&gt; things really easy.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The RSL defines a process attribute system. One of the original ideas (later
</span><br>
<span class="quotelev2">&gt;&gt; retracted, but now that I think about it I may re-add it) was to have some
</span><br>
<span class="quotelev2">&gt;&gt; predefined attribute keys, that the runtime would set so we could look up
</span><br>
<span class="quotelev2">&gt;&gt; information about any process.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So in the case of the cray, the rsl_init function would query to get all the
</span><br>
<span class="quotelev2">&gt;&gt; info it wants, and then populate the info into its (local) process attribute
</span><br>
<span class="quotelev2">&gt;&gt; data store.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In other systems each process would set the information in rsl_init and it
</span><br>
<span class="quotelev2">&gt;&gt; would be exchanged in the normal modex method.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Then, the information would be looked up (locally) using the 'get' function
</span><br>
<span class="quotelev2">&gt;&gt; on
</span><br>
<span class="quotelev2">&gt;&gt; both platforms.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Simple, eh?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe - and maybe not. The devil is always in the details. My concerns with
</span><br>
<span class="quotelev1">&gt; the RSL have been documented and wildly misunderstood. I still fail to see
</span><br>
<span class="quotelev1">&gt; the overall advantage as it seems we get different explanations every time
</span><br>
<span class="quotelev1">&gt; we ask. But I'll set that aside here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW: The publish/lookup interface was specifically required to support both
</span><br>
<span class="quotelev1">&gt; local and remote data storage operations, though that doesn't really apply
</span><br>
<span class="quotelev1">&gt; to the modex.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As an alternative to this, I think we could apply these same ideas into a
</span><br>
<span class="quotelev2">&gt;&gt; specialized ORTE system, but it would not be as clean, and would tie our
</span><br>
<span class="quotelev2">&gt;&gt; system closer to ORTE. I am not going to argue whether this is good or bad,
</span><br>
<span class="quotelev2">&gt;&gt; but I am just mentioning it as a consequence.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My concern right now is that doing it in RSL means (as we chatted about
</span><br>
<span class="quotelev1">&gt; offline) integrating RSL into the OMPI trunk NOW - either directly or as
</span><br>
<span class="quotelev1">&gt; part of the orte revision branch. This will certainly delay getting the ORTE
</span><br>
<span class="quotelev1">&gt; revision done, maybe by as much as 3 months or more (IMHO). I will contact
</span><br>
<span class="quotelev1">&gt; LANL management to seek their input on this matter, but I doubt they will be
</span><br>
<span class="quotelev1">&gt; supportive as such a delay will cause LANL to miss several critical
</span><br>
<span class="quotelev1">&gt; RoadRunner milestones - which would almost certainly negatively impact our
</span><br>
<span class="quotelev1">&gt; RoadRunner commercial partners as well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Alternatively, I suppose we could just fork the code base at this time, and
</span><br>
<span class="quotelev1">&gt; I'll complete the orte revisions on a LANL server. I hate to do this,
</span><br>
<span class="quotelev1">&gt; though, as it means someone (LANL, IBM, Voltaire, some combination, or
</span><br>
<span class="quotelev1">&gt; whomever) will be left with the problem of dealing with either re-merging
</span><br>
<span class="quotelev1">&gt; the branches or supporting a split code. I only offer it as an option we
</span><br>
<span class="quotelev1">&gt; could consider, if necessary.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Given those potential consequences, it would really help to have some
</span><br>
<span class="quotelev1">&gt; substantive reason -why- the framework is unacceptable. I grok that you feel
</span><br>
<span class="quotelev1">&gt; the RSL offers a possibly better alternative, but why does that mean we
</span><br>
<span class="quotelev1">&gt; shouldn't do the framework now and worry about that if/when the RSL is
</span><br>
<span class="quotelev1">&gt; proposed for production?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Tim
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If that makes sense, we can implement the latter approach on the branch
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where we are doing the next major ORTE revision - that's where I was going
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to create the new framework anyway.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 11/16/07 10:24 PM, &quot;Shipman, Galen M.&quot; &lt;gshipman_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am doing some work on Cray's CNL to support shared memory. To support
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shared memory I need to know if processes are local or remote. For other
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; systems we simply use the modex in ompi_proc_get_info to get the proc's
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nodeid. When using CNOS I don't need the modex to get a remote processes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nodeid. In fact, I can obtain every processes pid and nodeid (nid/pid)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; via a single CNOS call.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have explored a couple of ways to populate the proc structures on the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CRAY. One involves using #if's to do special things in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi_proc_get_info. I don't like this. The second method involves adding
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a CNOS nameserver and modifying the orte_process_name_t to include the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte_nodeid_t so that the nameserver can populate all the info if it can.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Prior to this change, the orte_nodeid_t was in ompi_proc_t, which doesn't
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make any sense to me, it is an orte level concept and it is only
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; accessible in the ompi side. I also don't like adding orte_nodeid_t to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte_process_name_t as it really doesn't have anything to do with the a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; name.. I think it makes more sense to have an orte_proc_t.. Something
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; like the following structure:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; struct orte_process_name_t {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     orte_jobid_t jobid;     /**&lt; Job number */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     orte_vpid_t vpid;       /**&lt; Process number */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     /** &quot;nodeid&quot; on which the proc resides */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; };
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Struct orte_proc_t {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     opal_list_item_t super;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     orte_process_name_t proc_name;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     orte_nodeid_t nid;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; };
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; struct ompi_proc_t {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     orte_proc_t base;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     ..... Etc .....
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; };
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I know there is some talk about removing the process names,,, not sure
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; how that fits in here but this is what makes sense to me given the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; current architecture. Any thoughts here?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - Galen
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2663.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] Memory manager"</a>
<li><strong>Previous message:</strong> <a href="2661.php">Jeff Squyres: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>In reply to:</strong> <a href="2649.php">Ralph Castain: "Re: [OMPI devel] ORTE process name,, nodeid.."</a>
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
