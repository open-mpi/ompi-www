<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Feb 13 16:16:48 2006" -->
<!-- isoreceived="20060213211648" -->
<!-- sent="Mon, 13 Feb 2006 14:16:42 -0700" -->
<!-- isosent="20060213211642" -->
<!-- name="Ralph H. Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel]  Alpha 4 and job state transitions" -->
<!-- id="7.0.0.16.2.20060213141303.02543a70_at_lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="43EBB4D1.7090708_at_lanl.gov" -->
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
<strong>Date:</strong> 2006-02-13 16:16:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0736.php">Greg Watson: "Re: [OMPI devel]  Alpha 4 and job state transitions"</a>
<li><strong>Previous message:</strong> <a href="0734.php">Nathan DeBardeleben: "Re:  Alpha 4 and job state transitions"</a>
<li><strong>In reply to:</strong> <a href="0734.php">Nathan DeBardeleben: "Re:  Alpha 4 and job state transitions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0736.php">Greg Watson: "Re: [OMPI devel]  Alpha 4 and job state transitions"</a>
<li><strong>Reply:</strong> <a href="0736.php">Greg Watson: "Re: [OMPI devel]  Alpha 4 and job state transitions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmmm....I wonder if this is going to create a problem?
<br>
<p>Tim/Brian/you io forwarding folks: This poses an interesting 
<br>
question. We automatically wire up i/o forwarding in our spawn 
<br>
routine. What happens when someone sets up their own i/o forwarding 
<br>
callback and subsequently wires up stdio themselves? Does this 
<br>
overwrite what we did, do processes receive duplicate copies, does it 
<br>
generate an error, ...?
<br>
<p>I gather this is working for Nathan, and I don't claim to fully 
<br>
understand what he is doing, but I'm curious as to what might happen 
<br>
since I don't see anything in the system to prevent someone doing 
<br>
this (not sure we could anyway).
<br>
<p>Ralph
<br>
<p><p>At 02:32 PM 2/9/2006, you wrote:
<br>
<span class="quotelev1">&gt;I've coded a hacky workaround in our code to get past this.  Basically,
</span><br>
<span class="quotelev1">&gt;I capture all of the state transitions and the first one fired for a job
</span><br>
<span class="quotelev1">&gt;I fire the 'init' state internally in our tool.  Generally this occurs
</span><br>
<span class="quotelev1">&gt;for one of the gate transitions, G1 or something.  It'll work this way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Furthermore, we're telling our users to get your 1.0.2a4 (or whatever
</span><br>
<span class="quotelev1">&gt;1.0.2 is available at the time).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The way I coded it when you guys put this into the main branch and the
</span><br>
<span class="quotelev1">&gt;INIT state resumes firing then my code will start working that much
</span><br>
<span class="quotelev1">&gt;better.  I really only brought it up because I felt it was a bug you
</span><br>
<span class="quotelev1">&gt;might not have been aware of.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- Nathan
</span><br>
<span class="quotelev1">&gt;Correspondence
</span><br>
<span class="quotelev1">&gt;---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;Nathan DeBardeleben, Ph.D.
</span><br>
<span class="quotelev1">&gt;Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt;Parallel Tools Team
</span><br>
<span class="quotelev1">&gt;High Performance Computing Environments
</span><br>
<span class="quotelev1">&gt;phone: 505-667-3428
</span><br>
<span class="quotelev1">&gt;email: ndebard_at_[hidden]
</span><br>
<span class="quotelev1">&gt;---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Nathan --
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ralph and I talked about this and decided not to bring it over to the
</span><br>
<span class="quotelev2">&gt; &gt; 1.0 branch -- the fix uses new functionality that exists on the trunk
</span><br>
<span class="quotelev2">&gt; &gt; and not in the 1.0 branch.  The fix could be re-crafted to use
</span><br>
<span class="quotelev2">&gt; &gt; existing functionality on the 1.0 branch (we're really trying to only
</span><br>
<span class="quotelev2">&gt; &gt; put bug fixes on the 1.0 branch -- not any new functionality) -- but
</span><br>
<span class="quotelev2">&gt; &gt; we didn't know if you cared.  :-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Do you mind if this fix stays on the trunk, or do you need it in the
</span><br>
<span class="quotelev2">&gt; &gt; v1.0 branch?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 8, 2006, at 4:36 PM, Nathan DeBardeleben wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks Ralph.
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
<span class="quotelev3">&gt; &gt;&gt; Ralph H. Castain wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Nathan
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; This should now be fixed on the trunk. Once it is checked out more
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; thoroughly, I'll ask that it be moved to the 1.0 branch. For now, you
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; might want to check out the trunk and verify it meets your needs.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; At 03:05 PM 2/1/2006, you wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; This was happening on Alpha 1 as well but I upgraded today to
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Alpha 4 to
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; see if it's gone away - it has not.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I register a callback on a spawn() inside ORTE.  That callback
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; includes
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; the current state and should be called as the job goes through
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; those states.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I am now noticing that jobs never go through the INIT state.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; They may
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; also not go through others but definitely not ORTE_PROC_STATE_INIT.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I was registering the IOForwarding callback during the INIT phase
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; so,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; consequentially, I now do not have IOF.  There are other side
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; effects
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; such as jobs that I start I think are perpetually in the 'starting'
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; state and then, suddenly, they're done.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Can someone look into / comment on this please?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -- Nathan
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Correspondence
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -
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
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
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
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<li><strong>Next message:</strong> <a href="0736.php">Greg Watson: "Re: [OMPI devel]  Alpha 4 and job state transitions"</a>
<li><strong>Previous message:</strong> <a href="0734.php">Nathan DeBardeleben: "Re:  Alpha 4 and job state transitions"</a>
<li><strong>In reply to:</strong> <a href="0734.php">Nathan DeBardeleben: "Re:  Alpha 4 and job state transitions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0736.php">Greg Watson: "Re: [OMPI devel]  Alpha 4 and job state transitions"</a>
<li><strong>Reply:</strong> <a href="0736.php">Greg Watson: "Re: [OMPI devel]  Alpha 4 and job state transitions"</a>
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
