<?
$subject_val = "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 28 08:30:32 2014" -->
<!-- isoreceived="20140528123032" -->
<!-- sent="Wed, 28 May 2014 05:30:29 -0700" -->
<!-- isosent="20140528123029" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite" -->
<!-- id="54073029-799B-43AE-810C-3B1E24473D3E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5tJ2Tp+trDwmDcLk4C2HLZ5vsYSjyEB5X1CVwK3KCQzNw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-28 08:30:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14886.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Previous message:</strong> <a href="14884.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>In reply to:</strong> <a href="14881.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14883.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can adjust the number of iterations so the parent reaches the end - in my case, I run it in a non-managed environment, and so there is no timeout. If you run it that way, you'll see the end result when the parent attempts to finalize.
<br>
<p>On May 27, 2014, at 11:18 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i could not find anything wrong with loop_spawn and unless i am missing something obvious :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; from mtt <a href="http://mtt.open-mpi.org/index.php?do_redir=2196">http://mtt.open-mpi.org/index.php?do_redir=2196</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; all tests ran this month (both trunk and v1.8) failed (timeout) and there was no error message such as
</span><br>
<span class="quotelev1">&gt; dpm_base_disconnect_init: error -12 in isend to process 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; loop_spawn tries to spawn 2000 tasks in 10 minutes.
</span><br>
<span class="quotelev1">&gt; my system is not fast enough to achieve this so the iteration count is bumped
</span><br>
<span class="quotelev1">&gt; /* if time exceeded, then bump iteration count to the end */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the test would success in 10 minutes and a few seconds ( required to complete the last spawn and MPI_Finalize())
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the slurm timeout is set to 10 minutes exactly, so the job is aborted before it has time to finish (and i believe it would have finished successfully)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; you can either increase the slurm timeout (10min30s looks good to me), 
</span><br>
<span class="quotelev1">&gt; decrease nseconds (570 looks good to me) in loop_spawn.c or run
</span><br>
<span class="quotelev1">&gt; mpirun ... dynamic/loop_spawn &lt;nseconds&gt;
</span><br>
<span class="quotelev1">&gt; where nseconds is &quot;a bit less&quot; than 600 seconds (once again, 570 looks good to me)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; did i miss something ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, May 28, 2014 at 12:53 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2014/05/28 12:10, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt; my understanding is that there are two ways of seeing things :
</span><br>
<span class="quotelev2">&gt; &gt; a) the &quot;R-way&quot; : the problem is the parent should not try to communicate to already exited processes
</span><br>
<span class="quotelev2">&gt; &gt; b) the &quot;J-way&quot; : the problem is the children should have waited either in MPI_Comm_free() or MPI_Finalize()
</span><br>
<span class="quotelev2">&gt; &gt; I don't think you can use option (b) - we can't have the children lingering around for the parent to call finalize, if I'm understanding you correctly.
</span><br>
<span class="quotelev1">&gt; you understood me correctly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; once again, i did not start investigating loop_spawn.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; in the case of intercomm_create, we would not run into this if the
</span><br>
<span class="quotelev1">&gt; application had explicitly called MPI_Comm_free in the parent.
</span><br>
<span class="quotelev1">&gt; so in this case *only*, and as explained by Jeff, b) could be an option
</span><br>
<span class="quotelev1">&gt; to make OpenMPI happy.
</span><br>
<span class="quotelev1">&gt; (to be blunt : if the user is not happy with children lingering around,
</span><br>
<span class="quotelev1">&gt; he can explicitly call MPI_Comm_free before calling MPI_Comm_disconnect)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i will start investigating loop_spawn from now
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14879.php">http://www.open-mpi.org/community/lists/devel/2014/05/14879.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14881.php">http://www.open-mpi.org/community/lists/devel/2014/05/14881.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14885/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14886.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Previous message:</strong> <a href="14884.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>In reply to:</strong> <a href="14881.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14883.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
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
