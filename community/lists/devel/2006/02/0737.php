<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 14 10:08:34 2006" -->
<!-- isoreceived="20060214150834" -->
<!-- sent="Tue, 14 Feb 2006 08:08:29 -0700" -->
<!-- isosent="20060214150829" -->
<!-- name="Ralph H. Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel]  Alpha 4 and job state  transitions" -->
<!-- id="7.0.0.16.2.20060214080316.024f00f8_at_lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4681AA96-0754-48D4-A9B1-556947949FE1_at_lanl.gov" -->
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
<strong>From:</strong> Ralph H. Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-14 10:08:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0738.php">Tim S. Woodall: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r9118"</a>
<li><strong>Previous message:</strong> <a href="0736.php">Greg Watson: "Re: [OMPI devel]  Alpha 4 and job state transitions"</a>
<li><strong>In reply to:</strong> <a href="0736.php">Greg Watson: "Re: [OMPI devel]  Alpha 4 and job state transitions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Greg
<br>
<p>I believe you may have been wiring it up originally because we didn't 
<br>
have that service implemented at that time. We do have it all wired 
<br>
up now - in fact, Brian has done some fairly important cleanup to the 
<br>
system recently.
<br>
<p>Since we complete the wiring upon notification of the INIT trigger, I 
<br>
would not advise attaching yourself to that trigger - it could create 
<br>
a race condition as to which of you (your callback or ours) got 
<br>
called first. Instead, I would suggest attaching to the LAUNCHED 
<br>
trigger, which occurs next in the sequence. This fires when the procs 
<br>
actually are all launched, but before they initialize themselves 
<br>
through mpi_init (assuming they do so).
<br>
<p>If that doesn't work for you, I could create a subscription flag to 
<br>
NOTIFY_ME_LAST that would ensure your callback occurred after any 
<br>
others. This would resolve the race condition and allow you to use 
<br>
the INIT trigger, but would take a little work on my part to 
<br>
implement before you could use it.
<br>
<p>Ralph
<br>
<p><p>At 03:21 PM 2/13/2006, you wrote:
<br>
<span class="quotelev1">&gt;I thought we were wiring up stdio ourselves because it wasn't being
</span><br>
<span class="quotelev1">&gt;done in the spawn? If it's now being done by spawn then that's fine,
</span><br>
<span class="quotelev1">&gt;but we need to be able to get called back when the I/O becomes
</span><br>
<span class="quotelev1">&gt;available. How does this work?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Greg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Feb 13, 2006, at 2:16 PM, Ralph H. Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hmmmm....I wonder if this is going to create a problem?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Tim/Brian/you io forwarding folks: This poses an interesting
</span><br>
<span class="quotelev2">&gt; &gt; question. We automatically wire up i/o forwarding in our spawn
</span><br>
<span class="quotelev2">&gt; &gt; routine. What happens when someone sets up their own i/o forwarding
</span><br>
<span class="quotelev2">&gt; &gt; callback and subsequently wires up stdio themselves? Does this
</span><br>
<span class="quotelev2">&gt; &gt; overwrite what we did, do processes receive duplicate copies, does it
</span><br>
<span class="quotelev2">&gt; &gt; generate an error, ...?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I gather this is working for Nathan, and I don't claim to fully
</span><br>
<span class="quotelev2">&gt; &gt; understand what he is doing, but I'm curious as to what might happen
</span><br>
<span class="quotelev2">&gt; &gt; since I don't see anything in the system to prevent someone doing
</span><br>
<span class="quotelev2">&gt; &gt; this (not sure we could anyway).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ralph
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; At 02:32 PM 2/9/2006, you wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I've coded a hacky workaround in our code to get past this.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Basically,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I capture all of the state transitions and the first one fired for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; a job
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I fire the 'init' state internally in our tool.  Generally this
</span><br>
<span class="quotelev3">&gt; &gt;&gt; occurs
</span><br>
<span class="quotelev3">&gt; &gt;&gt; for one of the gate transitions, G1 or something.  It'll work this
</span><br>
<span class="quotelev3">&gt; &gt;&gt; way.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Furthermore, we're telling our users to get your 1.0.2a4 (or whatever
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1.0.2 is available at the time).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The way I coded it when you guys put this into the main branch and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; INIT state resumes firing then my code will start working that much
</span><br>
<span class="quotelev3">&gt; &gt;&gt; better.  I really only brought it up because I felt it was a bug you
</span><br>
<span class="quotelev3">&gt; &gt;&gt; might not have been aware of.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks all.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -- Nathan
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Correspondence
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Nathan DeBardeleben, Ph.D.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Parallel Tools Team
</span><br>
<span class="quotelev3">&gt; &gt;&gt; High Performance Computing Environments
</span><br>
<span class="quotelev3">&gt; &gt;&gt; phone: 505-667-3428
</span><br>
<span class="quotelev3">&gt; &gt;&gt; email: ndebard_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Nathan --
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Ralph and I talked about this and decided not to bring it over to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 1.0 branch -- the fix uses new functionality that exists on the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; trunk
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; and not in the 1.0 branch.  The fix could be re-crafted to use
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; existing functionality on the 1.0 branch (we're really trying to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; only
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; put bug fixes on the 1.0 branch -- not any new functionality) -- but
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; we didn't know if you cared.  :-)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Do you mind if this fix stays on the trunk, or do you need it in the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; v1.0 branch?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Feb 8, 2006, at 4:36 PM, Nathan DeBardeleben wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Thanks Ralph.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -- Nathan
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Correspondence
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Nathan DeBardeleben, Ph.D.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Parallel Tools Team
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; High Performance Computing Environments
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; phone: 505-667-3428
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; email: ndebard_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Ralph H. Castain wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Nathan
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; This should now be fixed on the trunk. Once it is checked out more
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; thoroughly, I'll ask that it be moved to the 1.0 branch. For
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; now, you
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; might want to check out the trunk and verify it meets your needs.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; At 03:05 PM 2/1/2006, you wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; This was happening on Alpha 1 as well but I upgraded today to
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Alpha 4 to
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; see if it's gone away - it has not.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; I register a callback on a spawn() inside ORTE.  That callback
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; includes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; the current state and should be called as the job goes through
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; those states.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; I am now noticing that jobs never go through the INIT state.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; They may
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; also not go through others but definitely not
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; ORTE_PROC_STATE_INIT.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; I was registering the IOForwarding callback during the INIT phase
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; so,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; consequentially, I now do not have IOF.  There are other side
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; effects
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; such as jobs that I start I think are perpetually in the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; 'starting'
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; state and then, suddenly, they're done.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Can someone look into / comment on this please?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; -- Nathan
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Correspondence
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; -----------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; ---
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Nathan DeBardeleben, Ph.D.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Parallel Tools Team
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; High Performance Computing Environments
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; phone: 505-667-3428
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; email: ndebard_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; -----------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; ---
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0738.php">Tim S. Woodall: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r9118"</a>
<li><strong>Previous message:</strong> <a href="0736.php">Greg Watson: "Re: [OMPI devel]  Alpha 4 and job state transitions"</a>
<li><strong>In reply to:</strong> <a href="0736.php">Greg Watson: "Re: [OMPI devel]  Alpha 4 and job state transitions"</a>
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
