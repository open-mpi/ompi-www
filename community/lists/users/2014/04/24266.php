<?
$subject_val = "Re: [OMPI users] Deadlocks and warnings from libevent when using	MPI_THREAD_MULTIPLE";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 28 12:24:13 2014" -->
<!-- isoreceived="20140428162413" -->
<!-- sent="Mon, 28 Apr 2014 09:23:45 -0700" -->
<!-- isosent="20140428162345" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Deadlocks and warnings from libevent when using	MPI_THREAD_MULTIPLE" -->
<!-- id="E4E8CA12-D484-4ABB-B1F9-A667D258420B_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="OF8E4CB806.EE9A26B0-ON85257CC8.005299C4-85257CC8.0052BA3A_at_notes.aero.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Deadlocks and warnings from libevent when using	MPI_THREAD_MULTIPLE<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-28 12:23:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24267.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Connection timed out on TCP"</a>
<li><strong>Previous message:</strong> <a href="24265.php">Vince Grimes: "Re: [OMPI users] Connection timed out on TCP"</a>
<li><strong>In reply to:</strong> <a href="24264.php">Jeffrey A Cummings: "Re: [OMPI users] Deadlocks and warnings from libevent when using	MPI_THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It isn't that simple. In some cases, THREAD_MULTIPLE works just fine. In some, it doesn't. Trying to devise logic that accurately detects when it does and doesn't work would be extremely difficult, and in many cases application-dependent. If we disable it for everyone, then those who can make it work get upset.
<br>
<p>We don't like the situation either :-(
<br>
<p>On Apr 28, 2014, at 8:03 AM, Jeffrey A Cummings &lt;Jeffrey.A.Cummings_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Wouldn't you save yourself work and your users confusion if you disabled options that don't currently work? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeffrey A. Cummings
</span><br>
<span class="quotelev1">&gt; Engineering Specialist
</span><br>
<span class="quotelev1">&gt; Performance Modeling and Analysis Department
</span><br>
<span class="quotelev1">&gt; Systems Analysis and Simulation Subdivision
</span><br>
<span class="quotelev1">&gt; Systems Engineering Division
</span><br>
<span class="quotelev1">&gt; Engineering and Technology Group
</span><br>
<span class="quotelev1">&gt; The Aerospace Corporation
</span><br>
<span class="quotelev1">&gt; 571-307-4220
</span><br>
<span class="quotelev1">&gt; jeffrey.a.cummings_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From:        Ralph Castain &lt;rhc_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; To:        Open MPI Users &lt;users_at_[hidden]&gt;, 
</span><br>
<span class="quotelev1">&gt; Date:        04/25/2014 05:40 PM 
</span><br>
<span class="quotelev1">&gt; Subject:        Re: [OMPI users] Deadlocks and warnings from libevent when using        MPI_THREAD_MULTIPLE 
</span><br>
<span class="quotelev1">&gt; Sent by:        &quot;users&quot; &lt;users-bounces_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We don't fully support THREAD_MULTIPLE, and most definitely not when using IB. We are planning on extending that coverage in the 1.9 series
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 25, 2014, at 2:22 PM, Markus Wittmann &lt;markus.wittmann_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi everyone,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm using the current Open MPI 1.8.1 release and observe
</span><br>
<span class="quotelev2">&gt; &gt; non-deterministic deadlocks and warnings from libevent when using
</span><br>
<span class="quotelev2">&gt; &gt; MPI_THREAD_MULTIPLE. Open MPI has been configured with
</span><br>
<span class="quotelev2">&gt; &gt; --enable-mpi-thread-multiple --with-tm --with-verbs (see attached
</span><br>
<span class="quotelev2">&gt; &gt; config.log)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Attached is a sample application that spawns a thread for each process
</span><br>
<span class="quotelev2">&gt; &gt; after MPI_Init_thread has been called. The thread then calls MPI_Recv
</span><br>
<span class="quotelev2">&gt; &gt; which blocks until the matching MPI_Send is called just before
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Finalize is called in the main thread. (AFAIK MPICH uses such kind
</span><br>
<span class="quotelev2">&gt; &gt; of facility to implement a progress thread) Meanwhile the main thread
</span><br>
<span class="quotelev2">&gt; &gt; exchanges data with its right/left neighbor via ISend/IRecv.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I only see this, when the MPI processes run on separate nodes like in
</span><br>
<span class="quotelev2">&gt; &gt; the following:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; $ mpiexec -n 2 -map-by node ./test
</span><br>
<span class="quotelev2">&gt; &gt; [0] isend/irecv.
</span><br>
<span class="quotelev2">&gt; &gt; [0] progress thread...
</span><br>
<span class="quotelev2">&gt; &gt; [0] waitall.
</span><br>
<span class="quotelev2">&gt; &gt; [warn] opal_libevent2021_event_base_loop: reentrant invocation. Only one event_base_loop can run on each event_base at once.
</span><br>
<span class="quotelev2">&gt; &gt; [1] isend/irecv.
</span><br>
<span class="quotelev2">&gt; &gt; [1] progress thread...
</span><br>
<span class="quotelev2">&gt; &gt; [1] waitall.
</span><br>
<span class="quotelev2">&gt; &gt; [warn] opal_libevent2021_event_base_loop: reentrant invocation. Only one event_base_loop can run on each event_base at once.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &lt;no further output...&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Can anybody confirm this?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Best regards,
</span><br>
<span class="quotelev2">&gt; &gt; Markus
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Markus Wittmann, HPC Services
</span><br>
<span class="quotelev2">&gt; &gt; Friedrich-Alexander-Universit&#228;t Erlangen-N&#252;rnberg
</span><br>
<span class="quotelev2">&gt; &gt; Regionales Rechenzentrum Erlangen (RRZE)
</span><br>
<span class="quotelev2">&gt; &gt; Martensstrasse 1, 91058 Erlangen, Germany
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.rrze.fau.de/hpc/">http://www.rrze.fau.de/hpc/</a>
</span><br>
<span class="quotelev2">&gt; &gt; &lt;info.tar.bz2&gt;&lt;test.c&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24266/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24267.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Connection timed out on TCP"</a>
<li><strong>Previous message:</strong> <a href="24265.php">Vince Grimes: "Re: [OMPI users] Connection timed out on TCP"</a>
<li><strong>In reply to:</strong> <a href="24264.php">Jeffrey A Cummings: "Re: [OMPI users] Deadlocks and warnings from libevent when using	MPI_THREAD_MULTIPLE"</a>
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
