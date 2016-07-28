<?
$subject_val = "Re: [OMPI users] Application hangs on mpi_waitall";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 26 07:02:23 2013" -->
<!-- isoreceived="20130626110223" -->
<!-- sent="Wed, 26 Jun 2013 13:02:17 +0200" -->
<!-- isosent="20130626110217" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Application hangs on mpi_waitall" -->
<!-- id="671E7E80-0E36-4EA8-A99A-CD90842EA8B8_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="b7f82e60caa54c3ce2de29f386fb9a75.squirrel_at_mailfe1.america.net" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-26 07:02:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22218.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Previous message:</strong> <a href="22216.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>In reply to:</strong> <a href="22213.php">eblosch_at_[hidden]: "Re: [OMPI users] Application hangs on mpi_waitall"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22222.php">Ed Blosch: "Re: [OMPI users] Application hangs on mpi_waitall"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ed,
<br>
<p>Im not sure but there might be a case where the BTL is getting overwhelmed by the nob-blocking operations while trying to setup the connection. There is a simple test for this. Add an MPI_Alltoall with a reasonable size (100k) before you start posting the non-blocking receives, and let's see if this solves your issue.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Jun 26, 2013, at 04:02 , eblosch_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; An update: I recoded the mpi_waitall as a loop over the requests with
</span><br>
<span class="quotelev1">&gt; mpi_test and a 30 second timeout.  The timeout happens unpredictably,
</span><br>
<span class="quotelev1">&gt; sometimes after 10 minutes of run time, other times after 15 minutes, for
</span><br>
<span class="quotelev1">&gt; the exact same case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After 30 seconds, I print out the status of all outstanding receive
</span><br>
<span class="quotelev1">&gt; requests.  The message tags that are outstanding have definitely been
</span><br>
<span class="quotelev1">&gt; sent, so I am wondering why they are not getting received?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As I said before, everybody posts non-blocking standard receives, then
</span><br>
<span class="quotelev1">&gt; non-blocking standard sends, then calls mpi_waitall. Each process is
</span><br>
<span class="quotelev1">&gt; typically waiting on 200 to 300 requests. Is deadlock possible via this
</span><br>
<span class="quotelev1">&gt; implementation approach under some kind of unusual conditions?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks again,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm running OpenMPI 1.6.4 and seeing a problem where mpi_waitall never
</span><br>
<span class="quotelev2">&gt;&gt; returns.  The case runs fine with MVAPICH.  The logic associated with the
</span><br>
<span class="quotelev2">&gt;&gt; communications has been extensively debugged in the past; we don't think
</span><br>
<span class="quotelev2">&gt;&gt; it has errors.   Each process posts non-blocking receives, non-blocking
</span><br>
<span class="quotelev2">&gt;&gt; sends, and then does waitall on all the outstanding requests.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The work is broken down into 960 chunks. If I run with 960 processes (60
</span><br>
<span class="quotelev2">&gt;&gt; nodes of 16 cores each), things seem to work.  If I use 160 processes
</span><br>
<span class="quotelev2">&gt;&gt; (each process handling 6 chunks of work), then each process is handling 6
</span><br>
<span class="quotelev2">&gt;&gt; times as much communication, and that is the case that hangs with OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; 1.6.4; again, seems to work with MVAPICH.  Is there an obvious place to
</span><br>
<span class="quotelev2">&gt;&gt; start, diagnostically?  We're using the openib btl.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ed
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22218.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Previous message:</strong> <a href="22216.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>In reply to:</strong> <a href="22213.php">eblosch_at_[hidden]: "Re: [OMPI users] Application hangs on mpi_waitall"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22222.php">Ed Blosch: "Re: [OMPI users] Application hangs on mpi_waitall"</a>
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
