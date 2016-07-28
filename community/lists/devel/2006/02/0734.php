<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  9 16:32:04 2006" -->
<!-- isoreceived="20060209213204" -->
<!-- sent="Thu, 09 Feb 2006 14:32:01 -0700" -->
<!-- isosent="20060209213201" -->
<!-- name="Nathan DeBardeleben" -->
<!-- email="ndebard_at_[hidden]" -->
<!-- subject="Re:  Alpha 4 and job state transitions" -->
<!-- id="43EBB4D1.7090708_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6BE772DF-CB22-4CD2-9272-6221136D5377_at_open-mpi.org" -->
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
<strong>From:</strong> Nathan DeBardeleben (<em>ndebard_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-09 16:32:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0735.php">Ralph H. Castain: "Re: [OMPI devel]  Alpha 4 and job state transitions"</a>
<li><strong>Previous message:</strong> <a href="0733.php">Jeff Squyres: "Re:  Alpha 4 and job state transitions"</a>
<li><strong>In reply to:</strong> <a href="0733.php">Jeff Squyres: "Re:  Alpha 4 and job state transitions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0735.php">Ralph H. Castain: "Re: [OMPI devel]  Alpha 4 and job state transitions"</a>
<li><strong>Reply:</strong> <a href="0735.php">Ralph H. Castain: "Re: [OMPI devel]  Alpha 4 and job state transitions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've coded a hacky workaround in our code to get past this.  Basically, 
<br>
I capture all of the state transitions and the first one fired for a job 
<br>
I fire the 'init' state internally in our tool.  Generally this occurs 
<br>
for one of the gate transitions, G1 or something.  It'll work this way.
<br>
<p>Furthermore, we're telling our users to get your 1.0.2a4 (or whatever 
<br>
1.0.2 is available at the time).
<br>
<p>The way I coded it when you guys put this into the main branch and the 
<br>
INIT state resumes firing then my code will start working that much 
<br>
better.  I really only brought it up because I felt it was a bug you 
<br>
might not have been aware of.
<br>
<p>Thanks all.
<br>
<p>-- Nathan
<br>
Correspondence
<br>
---------------------------------------------------------------------
<br>
Nathan DeBardeleben, Ph.D.
<br>
Los Alamos National Laboratory
<br>
Parallel Tools Team
<br>
High Performance Computing Environments
<br>
phone: 505-667-3428
<br>
email: ndebard_at_[hidden]
<br>
---------------------------------------------------------------------
<br>
<p><p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Nathan --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph and I talked about this and decided not to bring it over to the  
</span><br>
<span class="quotelev1">&gt; 1.0 branch -- the fix uses new functionality that exists on the trunk  
</span><br>
<span class="quotelev1">&gt; and not in the 1.0 branch.  The fix could be re-crafted to use  
</span><br>
<span class="quotelev1">&gt; existing functionality on the 1.0 branch (we're really trying to only  
</span><br>
<span class="quotelev1">&gt; put bug fixes on the 1.0 branch -- not any new functionality) -- but  
</span><br>
<span class="quotelev1">&gt; we didn't know if you cared.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you mind if this fix stays on the trunk, or do you need it in the  
</span><br>
<span class="quotelev1">&gt; v1.0 branch?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 8, 2006, at 4:36 PM, Nathan DeBardeleben wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Thanks Ralph.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Nathan
</span><br>
<span class="quotelev2">&gt;&gt; Correspondence
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Nathan DeBardeleben, Ph.D.
</span><br>
<span class="quotelev2">&gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; Parallel Tools Team
</span><br>
<span class="quotelev2">&gt;&gt; High Performance Computing Environments
</span><br>
<span class="quotelev2">&gt;&gt; phone: 505-667-3428
</span><br>
<span class="quotelev2">&gt;&gt; email: ndebard_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph H. Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nathan
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This should now be fixed on the trunk. Once it is checked out more
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thoroughly, I'll ask that it be moved to the 1.0 branch. For now, you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; might want to check out the trunk and verify it meets your needs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; At 03:05 PM 2/1/2006, you wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This was happening on Alpha 1 as well but I upgraded today to  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Alpha 4 to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; see if it's gone away - it has not.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I register a callback on a spawn() inside ORTE.  That callback  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; includes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the current state and should be called as the job goes through  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; those states.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am now noticing that jobs never go through the INIT state.   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; They may
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; also not go through others but definitely not ORTE_PROC_STATE_INIT.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I was registering the IOForwarding callback during the INIT phase  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; so,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; consequentially, I now do not have IOF.  There are other side  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; effects
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; such as jobs that I start I think are perpetually in the 'starting'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; state and then, suddenly, they're done.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can someone look into / comment on this please?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- Nathan
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Correspondence
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Nathan DeBardeleben, Ph.D.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Parallel Tools Team
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; High Performance Computing Environments
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; phone: 505-667-3428
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; email: ndebard_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
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
<li><strong>Next message:</strong> <a href="0735.php">Ralph H. Castain: "Re: [OMPI devel]  Alpha 4 and job state transitions"</a>
<li><strong>Previous message:</strong> <a href="0733.php">Jeff Squyres: "Re:  Alpha 4 and job state transitions"</a>
<li><strong>In reply to:</strong> <a href="0733.php">Jeff Squyres: "Re:  Alpha 4 and job state transitions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0735.php">Ralph H. Castain: "Re: [OMPI devel]  Alpha 4 and job state transitions"</a>
<li><strong>Reply:</strong> <a href="0735.php">Ralph H. Castain: "Re: [OMPI devel]  Alpha 4 and job state transitions"</a>
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
