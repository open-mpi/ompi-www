<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  9 16:07:19 2006" -->
<!-- isoreceived="20060209210719" -->
<!-- sent="Thu, 9 Feb 2006 16:07:07 -0500" -->
<!-- isosent="20060209210707" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  Alpha 4 and job state transitions" -->
<!-- id="6BE772DF-CB22-4CD2-9272-6221136D5377_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="43EA6478.5080404_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-09 16:07:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0734.php">Nathan DeBardeleben: "Re:  Alpha 4 and job state transitions"</a>
<li><strong>Previous message:</strong> <a href="0732.php">Brian Barrett: "Re:  Modification to triggers"</a>
<li><strong>In reply to:</strong> <a href="0723.php">Nathan DeBardeleben: "Re:  Alpha 4 and job state transitions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0734.php">Nathan DeBardeleben: "Re:  Alpha 4 and job state transitions"</a>
<li><strong>Reply:</strong> <a href="0734.php">Nathan DeBardeleben: "Re:  Alpha 4 and job state transitions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan --
<br>
<p>Ralph and I talked about this and decided not to bring it over to the  
<br>
1.0 branch -- the fix uses new functionality that exists on the trunk  
<br>
and not in the 1.0 branch.  The fix could be re-crafted to use  
<br>
existing functionality on the 1.0 branch (we're really trying to only  
<br>
put bug fixes on the 1.0 branch -- not any new functionality) -- but  
<br>
we didn't know if you cared.  :-)
<br>
<p>Do you mind if this fix stays on the trunk, or do you need it in the  
<br>
v1.0 branch?
<br>
<p><p><p>On Feb 8, 2006, at 4:36 PM, Nathan DeBardeleben wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Ralph.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Nathan
</span><br>
<span class="quotelev1">&gt; Correspondence
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Nathan DeBardeleben, Ph.D.
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt; Parallel Tools Team
</span><br>
<span class="quotelev1">&gt; High Performance Computing Environments
</span><br>
<span class="quotelev1">&gt; phone: 505-667-3428
</span><br>
<span class="quotelev1">&gt; email: ndebard_at_[hidden]
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph H. Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Nathan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This should now be fixed on the trunk. Once it is checked out more
</span><br>
<span class="quotelev2">&gt;&gt; thoroughly, I'll ask that it be moved to the 1.0 branch. For now, you
</span><br>
<span class="quotelev2">&gt;&gt; might want to check out the trunk and verify it meets your needs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At 03:05 PM 2/1/2006, you wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This was happening on Alpha 1 as well but I upgraded today to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Alpha 4 to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; see if it's gone away - it has not.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I register a callback on a spawn() inside ORTE.  That callback  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; includes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the current state and should be called as the job goes through  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; those states.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am now noticing that jobs never go through the INIT state.   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; They may
</span><br>
<span class="quotelev3">&gt;&gt;&gt; also not go through others but definitely not ORTE_PROC_STATE_INIT.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I was registering the IOForwarding callback during the INIT phase  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; consequentially, I now do not have IOF.  There are other side  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; effects
</span><br>
<span class="quotelev3">&gt;&gt;&gt; such as jobs that I start I think are perpetually in the 'starting'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; state and then, suddenly, they're done.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can someone look into / comment on this please?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Nathan
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Correspondence
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nathan DeBardeleben, Ph.D.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Parallel Tools Team
</span><br>
<span class="quotelev3">&gt;&gt;&gt; High Performance Computing Environments
</span><br>
<span class="quotelev3">&gt;&gt;&gt; phone: 505-667-3428
</span><br>
<span class="quotelev3">&gt;&gt;&gt; email: ndebard_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
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
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0734.php">Nathan DeBardeleben: "Re:  Alpha 4 and job state transitions"</a>
<li><strong>Previous message:</strong> <a href="0732.php">Brian Barrett: "Re:  Modification to triggers"</a>
<li><strong>In reply to:</strong> <a href="0723.php">Nathan DeBardeleben: "Re:  Alpha 4 and job state transitions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0734.php">Nathan DeBardeleben: "Re:  Alpha 4 and job state transitions"</a>
<li><strong>Reply:</strong> <a href="0734.php">Nathan DeBardeleben: "Re:  Alpha 4 and job state transitions"</a>
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
