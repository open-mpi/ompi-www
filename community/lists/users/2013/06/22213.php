<?
$subject_val = "Re: [OMPI users] Application hangs on mpi_waitall";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 25 22:02:31 2013" -->
<!-- isoreceived="20130626020231" -->
<!-- sent="Tue, 25 Jun 2013 21:02:26 -0500 (CDT)" -->
<!-- isosent="20130626020226" -->
<!-- name="eblosch_at_[hidden]" -->
<!-- email="eblosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Application hangs on mpi_waitall" -->
<!-- id="b7f82e60caa54c3ce2de29f386fb9a75.squirrel_at_mailfe1.america.net" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="25AE6277FDC12F408393C11ACE6C400F0CA34570_at_HDXDSP53.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Application hangs on mpi_waitall<br>
<strong>From:</strong> <a href="mailto:eblosch_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Application%20hangs%20on%20mpi_waitall"><em>eblosch_at_[hidden]</em></a><br>
<strong>Date:</strong> 2013-06-25 22:02:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22214.php">Jeff Hammond: "[OMPI users] error: unknown type name 'ompi_jobid_t'"</a>
<li><strong>Previous message:</strong> <a href="22212.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>In reply to:</strong> <a href="22127.php">Blosch, Edwin L: "[OMPI users] Application hangs on mpi_waitall"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22217.php">George Bosilca: "Re: [OMPI users] Application hangs on mpi_waitall"</a>
<li><strong>Reply:</strong> <a href="22217.php">George Bosilca: "Re: [OMPI users] Application hangs on mpi_waitall"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
An update: I recoded the mpi_waitall as a loop over the requests with
<br>
mpi_test and a 30 second timeout.  The timeout happens unpredictably,
<br>
sometimes after 10 minutes of run time, other times after 15 minutes, for
<br>
the exact same case.
<br>
<p>After 30 seconds, I print out the status of all outstanding receive
<br>
requests.  The message tags that are outstanding have definitely been
<br>
sent, so I am wondering why they are not getting received?
<br>
<p>As I said before, everybody posts non-blocking standard receives, then
<br>
non-blocking standard sends, then calls mpi_waitall. Each process is
<br>
typically waiting on 200 to 300 requests. Is deadlock possible via this
<br>
implementation approach under some kind of unusual conditions?
<br>
<p>Thanks again,
<br>
<p>Ed
<br>
<p><span class="quotelev1">&gt; I'm running OpenMPI 1.6.4 and seeing a problem where mpi_waitall never
</span><br>
<span class="quotelev1">&gt; returns.  The case runs fine with MVAPICH.  The logic associated with the
</span><br>
<span class="quotelev1">&gt; communications has been extensively debugged in the past; we don't think
</span><br>
<span class="quotelev1">&gt; it has errors.   Each process posts non-blocking receives, non-blocking
</span><br>
<span class="quotelev1">&gt; sends, and then does waitall on all the outstanding requests.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The work is broken down into 960 chunks. If I run with 960 processes (60
</span><br>
<span class="quotelev1">&gt; nodes of 16 cores each), things seem to work.  If I use 160 processes
</span><br>
<span class="quotelev1">&gt; (each process handling 6 chunks of work), then each process is handling 6
</span><br>
<span class="quotelev1">&gt; times as much communication, and that is the case that hangs with OpenMPI
</span><br>
<span class="quotelev1">&gt; 1.6.4; again, seems to work with MVAPICH.  Is there an obvious place to
</span><br>
<span class="quotelev1">&gt; start, diagnostically?  We're using the openib btl.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ed
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="22214.php">Jeff Hammond: "[OMPI users] error: unknown type name 'ompi_jobid_t'"</a>
<li><strong>Previous message:</strong> <a href="22212.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>In reply to:</strong> <a href="22127.php">Blosch, Edwin L: "[OMPI users] Application hangs on mpi_waitall"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22217.php">George Bosilca: "Re: [OMPI users] Application hangs on mpi_waitall"</a>
<li><strong>Reply:</strong> <a href="22217.php">George Bosilca: "Re: [OMPI users] Application hangs on mpi_waitall"</a>
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
