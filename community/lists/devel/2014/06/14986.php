<?
$subject_val = "Re: [OMPI devel] MPI_Comm_spawn affinity and coll/ml";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  6 08:37:36 2014" -->
<!-- isoreceived="20140606123736" -->
<!-- sent="Fri, 6 Jun 2014 05:37:32 -0700" -->
<!-- isosent="20140606123732" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Comm_spawn affinity and coll/ml" -->
<!-- id="54197B9B-BAEE-4032-B741-CFFFEE21E750_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AE45F2F55FE69B4F99BB3455E821D7153A8CDF16_at_ECS-EXG-P-MB07.win.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Comm_spawn affinity and coll/ml<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-06 08:37:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14987.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Previous message:</strong> <a href="14985.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>In reply to:</strong> <a href="14980.php">Hjelm, Nathan T: "Re: [OMPI devel] MPI_Comm_spawn affinity and coll/ml"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I fixed the binding algorithm so it shifts the location to be more of what you expected. However, we still won't bind the final spawn if there aren't enough free cores to support those procs.
<br>
<p><p>On Jun 5, 2014, at 7:12 AM, Hjelm, Nathan T &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Coll/ml does disqualify itself if processes are not bound. The problem here is there is an inconsistency between the two sides of the intercommunicator. I can write a quick fix for 1.8.2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: devel [devel-bounces_at_[hidden]] on behalf of Gilles Gouaillardet [gilles.gouaillardet_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, June 05, 2014 1:20 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] MPI_Comm_spawn affinity and coll/ml
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; on my single socket four cores VM (no batch manager), i am running the intercomm_create test from the ibm test suite.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 ./intercomm_create
</span><br>
<span class="quotelev1">&gt; =&gt; OK
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 ./intercomm_create
</span><br>
<span class="quotelev1">&gt; =&gt; HANG :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 --mca coll ^ml  ./intercomm_create
</span><br>
<span class="quotelev1">&gt; =&gt; OK
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; basically, this first two tasks will call twice MPI_Comm_spawn(2 tasks) followed by MPI_Intercomm_merge
</span><br>
<span class="quotelev1">&gt; and the 4 spawned tasks will call MPI_Intercomm_merge followed by MPI_Intercomm_create
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i digged a bit into that issue and found two distinct issues :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) binding :
</span><br>
<span class="quotelev1">&gt; tasks [0-1] (launched with mpirun) are bound on cores [0-1] =&gt; OK
</span><br>
<span class="quotelev1">&gt; tasks[2-3] (first spawn) are bound on cores [0-1] =&gt; ODD, i would have expected [2-3]
</span><br>
<span class="quotelev1">&gt; tasks[4-5] (second spawn) are not bound at all =&gt; ODD again, could have made sense if tasks[2-3] were bound on cores [2-3]
</span><br>
<span class="quotelev1">&gt; i observe the same behaviour  with the --oversubscribe mpirun parameter
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) coll/ml
</span><br>
<span class="quotelev1">&gt; coll/ml hangs when -np 2 (total 6 tasks, including 2 unbound tasks)
</span><br>
<span class="quotelev1">&gt; i suspect coll/ml is unable to handle unbound tasks.
</span><br>
<span class="quotelev1">&gt; if i am correct, should coll/ml detect this and simply automatically disqualify itself ?
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14980.php">http://www.open-mpi.org/community/lists/devel/2014/06/14980.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14987.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Previous message:</strong> <a href="14985.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>In reply to:</strong> <a href="14980.php">Hjelm, Nathan T: "Re: [OMPI devel] MPI_Comm_spawn affinity and coll/ml"</a>
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
