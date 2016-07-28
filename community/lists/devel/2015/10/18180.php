<?
$subject_val = "Re: [OMPI devel] orte-dvm / orte-submit race condition";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 15 11:25:44 2015" -->
<!-- isoreceived="20151015152544" -->
<!-- sent="Thu, 15 Oct 2015 08:25:39 -0700" -->
<!-- isosent="20151015152539" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orte-dvm / orte-submit race condition" -->
<!-- id="CAMD57od40UAB1Er_FWGbVi5xtECXhWhgX=KYC6iCmve2a=cXPQ_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F2720C81-C401-4D72-8967-72C0B7662597_at_rutgers.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] orte-dvm / orte-submit race condition<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-15 11:25:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18181.php">Justin Cinkelj: "[OMPI devel] how to run OpenMPI in OSv container"</a>
<li><strong>Previous message:</strong> <a href="18179.php">Paul Kapinos: "Re: [OMPI devel] Bad performance (20% bandwidth loss) when compiling with GCC 5.2 instead of 4.x"</a>
<li><strong>In reply to:</strong> <a href="18178.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18182.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Reply:</strong> <a href="18182.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Interesting - I see why. Please try this version.
<br>
<p>Ralph
<br>
<p><p>On Thu, Oct 15, 2015 at 4:05 AM, Mark Santcroos &lt;mark.santcroos_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 15 Oct 2015, at 4:38 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Okay, please try the attached patch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *scratch*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Although I reported results with the patch earlier, I can't reproduce it
</span><br>
<span class="quotelev1">&gt; anymore.
</span><br>
<span class="quotelev1">&gt; Now orte-dvm shuts down after the first orte-submit completes with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [netbook:72038] [[9827,0],0] orted:comm:process_commands() Processing
</span><br>
<span class="quotelev1">&gt; Command: ORTE_DAEMON_SPAWN_JOB_CMD
</span><br>
<span class="quotelev1">&gt; [netbook:72038] [[9827,0],0] orted:comm:process_commands() Processing
</span><br>
<span class="quotelev1">&gt; Command: ORTE_DAEMON_ADD_LOCAL_PROCS
</span><br>
<span class="quotelev1">&gt; [netbook:72038] [[9827,0],0] Releasing job data for [INVALID]
</span><br>
<span class="quotelev1">&gt; [netbook:72038] sess_dir_finalize: proc session dir does not exist
</span><br>
<span class="quotelev1">&gt; [netbook:72038] [[9827,0],0] JOB [9827,1] HAS TERMINATED
</span><br>
<span class="quotelev1">&gt; [netbook:72038] [[9827,0],0] NOTIFYING [[9826,0],0] OF JOB [9827,1]
</span><br>
<span class="quotelev1">&gt; COMPLETION
</span><br>
<span class="quotelev1">&gt; [netbook:72038] [[9827,0],0] JOB [9827,1] HAS TERMINATED
</span><br>
<span class="quotelev1">&gt; [netbook:72038] [[9827,0],0] orted:comm:process_commands() Processing
</span><br>
<span class="quotelev1">&gt; Command: ORTE_DAEMON_EXIT_CMD
</span><br>
<span class="quotelev1">&gt; [netbook:72038] sess_dir_finalize: proc session dir does not exist
</span><br>
<span class="quotelev1">&gt; [netbook:72038] sess_dir_cleanup: job session dir does not exist
</span><br>
<span class="quotelev1">&gt; exiting with status 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (Earlier I maybe had an unpatched instance of orte-dvm still running and
</span><br>
<span class="quotelev1">&gt; either the installation or some dynamic linking got messed up?!?!)
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18178.php">http://www.open-mpi.org/community/lists/devel/2015/10/18178.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18180/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18180/mark.diff">mark.diff</a>
</ul>
<!-- attachment="mark.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18181.php">Justin Cinkelj: "[OMPI devel] how to run OpenMPI in OSv container"</a>
<li><strong>Previous message:</strong> <a href="18179.php">Paul Kapinos: "Re: [OMPI devel] Bad performance (20% bandwidth loss) when compiling with GCC 5.2 instead of 4.x"</a>
<li><strong>In reply to:</strong> <a href="18178.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18182.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Reply:</strong> <a href="18182.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
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
