<?
$subject_val = "Re: [OMPI devel] orte-dvm / orte-submit race condition";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 15 07:05:26 2015" -->
<!-- isoreceived="20151015110526" -->
<!-- sent="Thu, 15 Oct 2015 13:05:20 +0200" -->
<!-- isosent="20151015110520" -->
<!-- name="Mark Santcroos" -->
<!-- email="mark.santcroos_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orte-dvm / orte-submit race condition" -->
<!-- id="F2720C81-C401-4D72-8967-72C0B7662597_at_rutgers.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMD57ofVjh9SxY861JKGgum408xUOBEizo_r9_hW1ZPxPfi8-A_at_mail.gmail.com" -->
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
<strong>From:</strong> Mark Santcroos (<em>mark.santcroos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-15 07:05:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18179.php">Paul Kapinos: "Re: [OMPI devel] Bad performance (20% bandwidth loss) when compiling with GCC 5.2 instead of 4.x"</a>
<li><strong>Previous message:</strong> <a href="18177.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>In reply to:</strong> <a href="18174.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18180.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Reply:</strong> <a href="18180.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On 15 Oct 2015, at 4:38 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Okay, please try the attached patch.
</span><br>
<p>*scratch*
<br>
<p>Although I reported results with the patch earlier, I can't reproduce it anymore.
<br>
Now orte-dvm shuts down after the first orte-submit completes with:
<br>
<p><p>[netbook:72038] [[9827,0],0] orted:comm:process_commands() Processing Command: ORTE_DAEMON_SPAWN_JOB_CMD
<br>
[netbook:72038] [[9827,0],0] orted:comm:process_commands() Processing Command: ORTE_DAEMON_ADD_LOCAL_PROCS
<br>
[netbook:72038] [[9827,0],0] Releasing job data for [INVALID]
<br>
[netbook:72038] sess_dir_finalize: proc session dir does not exist
<br>
[netbook:72038] [[9827,0],0] JOB [9827,1] HAS TERMINATED
<br>
[netbook:72038] [[9827,0],0] NOTIFYING [[9826,0],0] OF JOB [9827,1] COMPLETION
<br>
[netbook:72038] [[9827,0],0] JOB [9827,1] HAS TERMINATED
<br>
[netbook:72038] [[9827,0],0] orted:comm:process_commands() Processing Command: ORTE_DAEMON_EXIT_CMD
<br>
[netbook:72038] sess_dir_finalize: proc session dir does not exist
<br>
[netbook:72038] sess_dir_cleanup: job session dir does not exist
<br>
exiting with status 0
<br>
<p><p>(Earlier I maybe had an unpatched instance of orte-dvm still running and either the installation or some dynamic linking got messed up?!?!)<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18179.php">Paul Kapinos: "Re: [OMPI devel] Bad performance (20% bandwidth loss) when compiling with GCC 5.2 instead of 4.x"</a>
<li><strong>Previous message:</strong> <a href="18177.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>In reply to:</strong> <a href="18174.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18180.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Reply:</strong> <a href="18180.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
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
