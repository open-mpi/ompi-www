<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  9 13:45:13 2006" -->
<!-- isoreceived="20060209184513" -->
<!-- sent="Thu, 9 Feb 2006 13:45:11 -0500" -->
<!-- isosent="20060209184511" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  Modification to triggers" -->
<!-- id="0B779B20-2E52-47CE-ACC6-080745ED1CFA_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7.0.0.16.2.20060209083923.0248df18_at_lanl.gov" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-09 13:45:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0733.php">Jeff Squyres: "Re:  Alpha 4 and job state transitions"</a>
<li><strong>Previous message:</strong> <a href="0731.php">Jeff Squyres: "Re:  required automake version..."</a>
<li><strong>In reply to:</strong> <a href="0730.php">Ralph H. Castain: "Re:  Modification to triggers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That did the trick for me.  Thanks!
<br>
<p>Brian
<br>
<p>On Feb 9, 2006, at 10:40 AM, Ralph H. Castain wrote:
<br>
<p><span class="quotelev1">&gt; Okay, it turned out that the counters were not being adjusted as
</span><br>
<span class="quotelev1">&gt; processes hit the INIT and LAUNCHED stages - just a case where that
</span><br>
<span class="quotelev1">&gt; hadn't been implemented yet. I've fixed that now (it was easier to
</span><br>
<span class="quotelev1">&gt; fix than go back) and the wireup_stdin function is now being called.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian: can you verify that things are working correctly now?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At 07:40 AM 2/9/2006, you wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hmmm....yuck! I'll take a look - will set it back to what it was
</span><br>
<span class="quotelev2">&gt;&gt; before in the interim.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At 07:05 AM 2/9/2006, you wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 8, 2006, at 12:46 PM, Ralph H. Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In addition, I took advantage of the change to fix something Brian
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; had flagged in the orte/mca/rmgr/urm/rmgr_urm.c file where he noted
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that the wireup of stdin for io forwarding should occur at the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; LAUNCH
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; stage (as opposed to the STG1 stage gate where it was occurring).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Given the availability of the new triggers, I changed that to  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; conform
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to his noted request.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brian: please check that code to ensure I did this correctly.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can't figure out exactly what is going on, but it looks like this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; change broke standard input forwarding.  I currently have it traced
</span><br>
<span class="quotelev3">&gt;&gt;&gt; back (via printf debugging) to the fact that the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_rmgr_urm_wireup_callback() callback never gets triggered in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun, so the wireup_stdin() function is never called and we never
</span><br>
<span class="quotelev3">&gt;&gt;&gt; start pushing mpirun's standard input into the iof system.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; At that point, we fall into parts of the code with which I'm not too
</span><br>
<span class="quotelev3">&gt;&gt;&gt; familiar, so I have to hand this one back to you ;).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Brian Barrett
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Open MPI developer
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<li><strong>Next message:</strong> <a href="0733.php">Jeff Squyres: "Re:  Alpha 4 and job state transitions"</a>
<li><strong>Previous message:</strong> <a href="0731.php">Jeff Squyres: "Re:  required automake version..."</a>
<li><strong>In reply to:</strong> <a href="0730.php">Ralph H. Castain: "Re:  Modification to triggers"</a>
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
