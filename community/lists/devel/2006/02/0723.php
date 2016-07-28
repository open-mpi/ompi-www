<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb  8 16:36:59 2006" -->
<!-- isoreceived="20060208213659" -->
<!-- sent="Wed, 08 Feb 2006 14:36:56 -0700" -->
<!-- isosent="20060208213656" -->
<!-- name="Nathan DeBardeleben" -->
<!-- email="ndebard_at_[hidden]" -->
<!-- subject="Re:  Alpha 4 and job state transitions" -->
<!-- id="43EA6478.5080404_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7.0.0.16.2.20060208104644.024ac728_at_lanl.gov" -->
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
<strong>Date:</strong> 2006-02-08 16:36:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0724.php">George Bosilca: "Re:  [OMPI svn] svn:open-mpi r8940"</a>
<li><strong>Previous message:</strong> <a href="0722.php">Ralph H. Castain: "Modification to triggers"</a>
<li><strong>In reply to:</strong> <a href="0721.php">Ralph H. Castain: "Re:  Alpha 4 and job state transitions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0733.php">Jeff Squyres: "Re:  Alpha 4 and job state transitions"</a>
<li><strong>Reply:</strong> <a href="0733.php">Jeff Squyres: "Re:  Alpha 4 and job state transitions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralph.
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
<p><p><p>Ralph H. Castain wrote:
<br>
<span class="quotelev1">&gt; Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This should now be fixed on the trunk. Once it is checked out more 
</span><br>
<span class="quotelev1">&gt; thoroughly, I'll ask that it be moved to the 1.0 branch. For now, you 
</span><br>
<span class="quotelev1">&gt; might want to check out the trunk and verify it meets your needs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At 03:05 PM 2/1/2006, you wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; This was happening on Alpha 1 as well but I upgraded today to Alpha 4 to
</span><br>
<span class="quotelev2">&gt;&gt; see if it's gone away - it has not.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I register a callback on a spawn() inside ORTE.  That callback includes
</span><br>
<span class="quotelev2">&gt;&gt; the current state and should be called as the job goes through those states.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am now noticing that jobs never go through the INIT state.  They may
</span><br>
<span class="quotelev2">&gt;&gt; also not go through others but definitely not ORTE_PROC_STATE_INIT.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was registering the IOForwarding callback during the INIT phase so,
</span><br>
<span class="quotelev2">&gt;&gt; consequentially, I now do not have IOF.  There are other side effects
</span><br>
<span class="quotelev2">&gt;&gt; such as jobs that I start I think are perpetually in the 'starting'
</span><br>
<span class="quotelev2">&gt;&gt; state and then, suddenly, they're done.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can someone look into / comment on this please?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0724.php">George Bosilca: "Re:  [OMPI svn] svn:open-mpi r8940"</a>
<li><strong>Previous message:</strong> <a href="0722.php">Ralph H. Castain: "Modification to triggers"</a>
<li><strong>In reply to:</strong> <a href="0721.php">Ralph H. Castain: "Re:  Alpha 4 and job state transitions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0733.php">Jeff Squyres: "Re:  Alpha 4 and job state transitions"</a>
<li><strong>Reply:</strong> <a href="0733.php">Jeff Squyres: "Re:  Alpha 4 and job state transitions"</a>
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
