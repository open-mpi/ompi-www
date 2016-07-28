<?
$subject_val = "Re: [OMPI devel] race condition in grpcomm/rcd";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 11 10:48:44 2014" -->
<!-- isoreceived="20140911144844" -->
<!-- sent="Thu, 11 Sep 2014 07:47:58 -0700" -->
<!-- isosent="20140911144758" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] race condition in grpcomm/rcd" -->
<!-- id="C76AD2A7-6CD9-43E2-8652-F8E1D772867B_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5411815D.4080806_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] race condition in grpcomm/rcd<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-11 10:47:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15811.php">Thomas Naughton: "Re: [OMPI devel] Need to know your Github ID"</a>
<li><strong>Previous message:</strong> <a href="15809.php">Ralph Castain: "Re: [OMPI devel] clang alignment warnings"</a>
<li><strong>In reply to:</strong> <a href="15805.php">Gilles Gouaillardet: "Re: [OMPI devel] race condition in grpcomm/rcd"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15814.php">Gilles Gouaillardet: "Re: [OMPI devel] race condition in grpcomm/rcd"</a>
<li><strong>Reply:</strong> <a href="15814.php">Gilles Gouaillardet: "Re: [OMPI devel] race condition in grpcomm/rcd"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, that's not the right fix, I'm afraid. I've made the direct component the default again until I have time to dig into this deeper.
<br>
<p>On Sep 11, 2014, at 4:02 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the root cause is when the second orted/mpirun runs rcd_finalize_coll,
</span><br>
<span class="quotelev1">&gt; it does not invoke pmix_server_release
</span><br>
<span class="quotelev1">&gt; because allgather_stub was not previously invoked since the the fence
</span><br>
<span class="quotelev1">&gt; was not yet entered.
</span><br>
<span class="quotelev1">&gt; /* in rcd_finalize_coll, coll-&gt;cbfunc is NULL */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the attached patch is likely not the right fix, it was very lightly
</span><br>
<span class="quotelev1">&gt; tested, but so far, it works for me ...
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
<span class="quotelev1">&gt; On 2014/09/11 16:11, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; things got worst indeed :-(
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; now a simple hello world involving two hosts hang in mpi_init.
</span><br>
<span class="quotelev2">&gt;&gt; there is still a race condition : if a tasks a call fence long after task b,
</span><br>
<span class="quotelev2">&gt;&gt; then task b will never leave the fence
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; i ll try to debug this ...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 2014/09/11 2:36, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think I now have this fixed - let me know what you see.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 9, 2014, at 6:15 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yeah, that's not the correct fix. The right way to fix it is for all three components to have their own RML tag, and for each of them to establish a persistent receive. They then can use the signature to tell which collective the incoming message belongs to.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'll fix it, but it won't be until tomorrow I'm afraid as today is shot.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sep 9, 2014, at 3:10 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Folks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Since r32672 (trunk), grpcomm/rcd is the default module.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the attached spawn.c test program is a trimmed version of the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; spawn_with_env_vars.c test case
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; from the ibm test suite.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; when invoked on two nodes :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - the program hangs with -np 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - the program can crash with np &gt; 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; error message is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [node0:30701] [[42913,0],0] TWO RECEIVES WITH SAME PEER [[42913,0],1]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; AND TAG -33 - ABORTING
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; here is my full command line (from node0) :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun -host node0,node1 -np 2 --oversubscribe --mca btl tcp,self --mca
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; coll ^ml ./spawn
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a simple workaround is to add the following extra parameter to the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun command line :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --mca grpcomm_rcd_priority 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; my understanding it that the race condition occurs when all the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; processes call MPI_Finalize()
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; internally, the pmix module will have mpirun/orted issue two ALLGATHER
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; involving mpirun and orted
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (one job 1 aka the parent, and one for job 2 aka the spawned tasks)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the error message is very explicit : this is not (currently) supported
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; i wrote the attached rml.patch which is really a workaround and not a fix :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in this case, each job will invoke an ALLGATHER but with a different tag
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /* that works for a limited number of jobs only */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; i did not commit this patch since this is not a fix, could someone
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (Ralph ?) please review the issue and comment ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;spawn.c&gt;&lt;rml.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15780.php">http://www.open-mpi.org/community/lists/devel/2014/09/15780.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15794.php">http://www.open-mpi.org/community/lists/devel/2014/09/15794.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15804.php">http://www.open-mpi.org/community/lists/devel/2014/09/15804.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;rml2.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15805.php">http://www.open-mpi.org/community/lists/devel/2014/09/15805.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15811.php">Thomas Naughton: "Re: [OMPI devel] Need to know your Github ID"</a>
<li><strong>Previous message:</strong> <a href="15809.php">Ralph Castain: "Re: [OMPI devel] clang alignment warnings"</a>
<li><strong>In reply to:</strong> <a href="15805.php">Gilles Gouaillardet: "Re: [OMPI devel] race condition in grpcomm/rcd"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15814.php">Gilles Gouaillardet: "Re: [OMPI devel] race condition in grpcomm/rcd"</a>
<li><strong>Reply:</strong> <a href="15814.php">Gilles Gouaillardet: "Re: [OMPI devel] race condition in grpcomm/rcd"</a>
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
