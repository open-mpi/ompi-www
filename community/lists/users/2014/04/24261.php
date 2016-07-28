<?
$subject_val = "Re: [OMPI users] Deadlocks and warnings from libevent when using MPI_THREAD_MULTIPLE";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 25 17:40:38 2014" -->
<!-- isoreceived="20140425214038" -->
<!-- sent="Fri, 25 Apr 2014 14:40:29 -0700" -->
<!-- isosent="20140425214029" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Deadlocks and warnings from libevent when using MPI_THREAD_MULTIPLE" -->
<!-- id="8FB4021E-0A90-4881-A250-AA3A2181C229_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="535AD20B.90602_at_fau.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Deadlocks and warnings from libevent when using MPI_THREAD_MULTIPLE<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-25 17:40:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24262.php">Markus Wittmann: "Re: [OMPI users] Deadlocks and warnings from libevent when using MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="24260.php">Markus Wittmann: "[OMPI users] Deadlocks and warnings from libevent when using MPI_THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="24260.php">Markus Wittmann: "[OMPI users] Deadlocks and warnings from libevent when using MPI_THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24262.php">Markus Wittmann: "Re: [OMPI users] Deadlocks and warnings from libevent when using MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="24262.php">Markus Wittmann: "Re: [OMPI users] Deadlocks and warnings from libevent when using MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="24264.php">Jeffrey A Cummings: "Re: [OMPI users] Deadlocks and warnings from libevent when using	MPI_THREAD_MULTIPLE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We don't fully support THREAD_MULTIPLE, and most definitely not when using IB. We are planning on extending that coverage in the 1.9 series
<br>
<p><p>On Apr 25, 2014, at 2:22 PM, Markus Wittmann &lt;markus.wittmann_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi everyone,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using the current Open MPI 1.8.1 release and observe
</span><br>
<span class="quotelev1">&gt; non-deterministic deadlocks and warnings from libevent when using
</span><br>
<span class="quotelev1">&gt; MPI_THREAD_MULTIPLE. Open MPI has been configured with
</span><br>
<span class="quotelev1">&gt; --enable-mpi-thread-multiple --with-tm --with-verbs (see attached
</span><br>
<span class="quotelev1">&gt; config.log)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Attached is a sample application that spawns a thread for each process
</span><br>
<span class="quotelev1">&gt; after MPI_Init_thread has been called. The thread then calls MPI_Recv
</span><br>
<span class="quotelev1">&gt; which blocks until the matching MPI_Send is called just before
</span><br>
<span class="quotelev1">&gt; MPI_Finalize is called in the main thread. (AFAIK MPICH uses such kind
</span><br>
<span class="quotelev1">&gt; of facility to implement a progress thread) Meanwhile the main thread
</span><br>
<span class="quotelev1">&gt; exchanges data with its right/left neighbor via ISend/IRecv.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I only see this, when the MPI processes run on separate nodes like in
</span><br>
<span class="quotelev1">&gt; the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpiexec -n 2 -map-by node ./test
</span><br>
<span class="quotelev1">&gt; [0] isend/irecv.
</span><br>
<span class="quotelev1">&gt; [0] progress thread...
</span><br>
<span class="quotelev1">&gt; [0] waitall.
</span><br>
<span class="quotelev1">&gt; [warn] opal_libevent2021_event_base_loop: reentrant invocation. Only one event_base_loop can run on each event_base at once.
</span><br>
<span class="quotelev1">&gt; [1] isend/irecv.
</span><br>
<span class="quotelev1">&gt; [1] progress thread...
</span><br>
<span class="quotelev1">&gt; [1] waitall.
</span><br>
<span class="quotelev1">&gt; [warn] opal_libevent2021_event_base_loop: reentrant invocation. Only one event_base_loop can run on each event_base at once.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;no further output...&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can anybody confirm this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Markus
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Markus Wittmann, HPC Services
</span><br>
<span class="quotelev1">&gt; Friedrich-Alexander-Universit&#228;t Erlangen-N&#252;rnberg
</span><br>
<span class="quotelev1">&gt; Regionales Rechenzentrum Erlangen (RRZE)
</span><br>
<span class="quotelev1">&gt; Martensstrasse 1, 91058 Erlangen, Germany
</span><br>
<span class="quotelev1">&gt; <a href="http://www.rrze.fau.de/hpc/">http://www.rrze.fau.de/hpc/</a>
</span><br>
<span class="quotelev1">&gt; &lt;info.tar.bz2&gt;&lt;test.c&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24262.php">Markus Wittmann: "Re: [OMPI users] Deadlocks and warnings from libevent when using MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="24260.php">Markus Wittmann: "[OMPI users] Deadlocks and warnings from libevent when using MPI_THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="24260.php">Markus Wittmann: "[OMPI users] Deadlocks and warnings from libevent when using MPI_THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24262.php">Markus Wittmann: "Re: [OMPI users] Deadlocks and warnings from libevent when using MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="24262.php">Markus Wittmann: "Re: [OMPI users] Deadlocks and warnings from libevent when using MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="24264.php">Jeffrey A Cummings: "Re: [OMPI users] Deadlocks and warnings from libevent when using	MPI_THREAD_MULTIPLE"</a>
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
