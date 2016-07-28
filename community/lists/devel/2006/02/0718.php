<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb  7 21:39:32 2006" -->
<!-- isoreceived="20060208023932" -->
<!-- sent="Tue, 07 Feb 2006 19:39:24 -0700" -->
<!-- isosent="20060208023924" -->
<!-- name="Ralph H. Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re:  Alpha 4 and job state transitions" -->
<!-- id="7.0.0.16.2.20060207193846.02400008_at_lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="43E13094.10509_at_lanl.gov" -->
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
<strong>Date:</strong> 2006-02-07 21:39:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0719.php">Gleb Natapov: "compilation problem"</a>
<li><strong>Previous message:</strong> <a href="0717.php">Gleb Natapov: "question about {min,max}_{send,rdma}_size"</a>
<li><strong>In reply to:</strong> <a href="0710.php">Nathan DeBardeleben: "Alpha 4 and job state transitions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0721.php">Ralph H. Castain: "Re:  Alpha 4 and job state transitions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan
<br>
<p>I have found the problem. It will take me a day to fix it - I'll let 
<br>
you know when it is done.
<br>
<p>Thanks
<br>
Ralph
<br>
<p>At 03:05 PM 2/1/2006, you wrote:
<br>
<span class="quotelev1">&gt;This was happening on Alpha 1 as well but I upgraded today to Alpha 4 to
</span><br>
<span class="quotelev1">&gt;see if it's gone away - it has not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I register a callback on a spawn() inside ORTE.  That callback includes
</span><br>
<span class="quotelev1">&gt;the current state and should be called as the job goes through those states.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I am now noticing that jobs never go through the INIT state.  They may
</span><br>
<span class="quotelev1">&gt;also not go through others but definitely not ORTE_PROC_STATE_INIT.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I was registering the IOForwarding callback during the INIT phase so,
</span><br>
<span class="quotelev1">&gt;consequentially, I now do not have IOF.  There are other side effects
</span><br>
<span class="quotelev1">&gt;such as jobs that I start I think are perpetually in the 'starting'
</span><br>
<span class="quotelev1">&gt;state and then, suddenly, they're done.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Can someone look into / comment on this please?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;--
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
<li><strong>Next message:</strong> <a href="0719.php">Gleb Natapov: "compilation problem"</a>
<li><strong>Previous message:</strong> <a href="0717.php">Gleb Natapov: "question about {min,max}_{send,rdma}_size"</a>
<li><strong>In reply to:</strong> <a href="0710.php">Nathan DeBardeleben: "Alpha 4 and job state transitions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0721.php">Ralph H. Castain: "Re:  Alpha 4 and job state transitions"</a>
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
