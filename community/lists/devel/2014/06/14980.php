<?
$subject_val = "Re: [OMPI devel] MPI_Comm_spawn affinity and coll/ml";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  5 10:12:22 2014" -->
<!-- isoreceived="20140605141222" -->
<!-- sent="Thu, 5 Jun 2014 14:12:21 +0000" -->
<!-- isosent="20140605141221" -->
<!-- name="Hjelm, Nathan T" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Comm_spawn affinity and coll/ml" -->
<!-- id="AE45F2F55FE69B4F99BB3455E821D7153A8CDF16_at_ECS-EXG-P-MB07.win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5vejrcCW9yKSVQspsDuT1mb-42NMHTPXg=E_on+-i3pMw_at_mail.gmail.com" -->
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
<strong>From:</strong> Hjelm, Nathan T (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-05 10:12:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14981.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Previous message:</strong> <a href="14979.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>In reply to:</strong> <a href="14975.php">Gilles Gouaillardet: "[OMPI devel] MPI_Comm_spawn affinity and coll/ml"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14986.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn affinity and coll/ml"</a>
<li><strong>Reply:</strong> <a href="14986.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn affinity and coll/ml"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Coll/ml does disqualify itself if processes are not bound. The problem here is there is an inconsistency between the two sides of the intercommunicator. I can write a quick fix for 1.8.2.
<br>
<p>-Nathan
<br>
________________________________________
<br>
From: devel [devel-bounces_at_[hidden]] on behalf of Gilles Gouaillardet [gilles.gouaillardet_at_[hidden]]
<br>
Sent: Thursday, June 05, 2014 1:20 AM
<br>
To: Open MPI Developers
<br>
Subject: [OMPI devel] MPI_Comm_spawn affinity and coll/ml
<br>
<p>Folks,
<br>
<p>on my single socket four cores VM (no batch manager), i am running the intercomm_create test from the ibm test suite.
<br>
<p>mpirun -np 1 ./intercomm_create
<br>
=&gt; OK
<br>
<p>mpirun -np 2 ./intercomm_create
<br>
=&gt; HANG :-(
<br>
<p>mpirun -np 2 --mca coll ^ml  ./intercomm_create
<br>
=&gt; OK
<br>
<p>basically, this first two tasks will call twice MPI_Comm_spawn(2 tasks) followed by MPI_Intercomm_merge
<br>
and the 4 spawned tasks will call MPI_Intercomm_merge followed by MPI_Intercomm_create
<br>
<p>i digged a bit into that issue and found two distinct issues :
<br>
<p>1) binding :
<br>
tasks [0-1] (launched with mpirun) are bound on cores [0-1] =&gt; OK
<br>
tasks[2-3] (first spawn) are bound on cores [0-1] =&gt; ODD, i would have expected [2-3]
<br>
tasks[4-5] (second spawn) are not bound at all =&gt; ODD again, could have made sense if tasks[2-3] were bound on cores [2-3]
<br>
i observe the same behaviour  with the --oversubscribe mpirun parameter
<br>
<p>2) coll/ml
<br>
coll/ml hangs when -np 2 (total 6 tasks, including 2 unbound tasks)
<br>
i suspect coll/ml is unable to handle unbound tasks.
<br>
if i am correct, should coll/ml detect this and simply automatically disqualify itself ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14981.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Previous message:</strong> <a href="14979.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>In reply to:</strong> <a href="14975.php">Gilles Gouaillardet: "[OMPI devel] MPI_Comm_spawn affinity and coll/ml"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14986.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn affinity and coll/ml"</a>
<li><strong>Reply:</strong> <a href="14986.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn affinity and coll/ml"</a>
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
