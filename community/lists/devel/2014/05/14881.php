<?
$subject_val = "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 28 02:18:27 2014" -->
<!-- isoreceived="20140528061827" -->
<!-- sent="Wed, 28 May 2014 15:18:26 +0900" -->
<!-- isosent="20140528061826" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite" -->
<!-- id="CAAkFZ5tJ2Tp+trDwmDcLk4C2HLZ5vsYSjyEB5X1CVwK3KCQzNw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="53855DA0.3020302_at_iferc.org" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-28 02:18:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14882.php">Gilles Gouaillardet: "Re: [OMPI devel] some info is not pushed into the dstore"</a>
<li><strong>Previous message:</strong> <a href="14880.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk (RDMA and VT) warnings"</a>
<li><strong>In reply to:</strong> <a href="14879.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14885.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Reply:</strong> <a href="14885.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>i could not find anything wrong with loop_spawn and unless i am missing
<br>
something obvious :
<br>
<p>from mtt <a href="http://mtt.open-mpi.org/index.php?do_redir=2196">http://mtt.open-mpi.org/index.php?do_redir=2196</a>
<br>
<p>all tests ran this month (both trunk and v1.8) failed (timeout) and there
<br>
was no error message such as
<br>
dpm_base_disconnect_init: error -12 in isend to process 1
<br>
<p>loop_spawn tries to spawn 2000 tasks in 10 minutes.
<br>
my system is not fast enough to achieve this so the iteration count is
<br>
bumped
<br>
/* if time exceeded, then bump iteration count to the end */
<br>
<p>the test would success in 10 minutes and a few seconds ( required to
<br>
complete the last spawn and MPI_Finalize())
<br>
<p>the slurm timeout is set to 10 minutes exactly, so the job is aborted
<br>
before it has time to finish (and i believe it would have finished
<br>
successfully)
<br>
<p>you can either increase the slurm timeout (10min30s looks good to me),
<br>
decrease nseconds (570 looks good to me) in loop_spawn.c or run
<br>
mpirun ... dynamic/loop_spawn &lt;nseconds&gt;
<br>
where nseconds is &quot;a bit less&quot; than 600 seconds (once again, 570 looks good
<br>
to me)
<br>
<p>did i miss something ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>On Wed, May 28, 2014 at 12:53 PM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2014/05/28 12:10, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt; my understanding is that there are two ways of seeing things :
</span><br>
<span class="quotelev2">&gt; &gt; a) the &quot;R-way&quot; : the problem is the parent should not try to communicate
</span><br>
<span class="quotelev1">&gt; to already exited processes
</span><br>
<span class="quotelev2">&gt; &gt; b) the &quot;J-way&quot; : the problem is the children should have waited either
</span><br>
<span class="quotelev1">&gt; in MPI_Comm_free() or MPI_Finalize()
</span><br>
<span class="quotelev2">&gt; &gt; I don't think you can use option (b) - we can't have the children
</span><br>
<span class="quotelev1">&gt; lingering around for the parent to call finalize, if I'm understanding you
</span><br>
<span class="quotelev1">&gt; correctly.
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14879.php">http://www.open-mpi.org/community/lists/devel/2014/05/14879.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14881/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14882.php">Gilles Gouaillardet: "Re: [OMPI devel] some info is not pushed into the dstore"</a>
<li><strong>Previous message:</strong> <a href="14880.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk (RDMA and VT) warnings"</a>
<li><strong>In reply to:</strong> <a href="14879.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14885.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Reply:</strong> <a href="14885.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
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
