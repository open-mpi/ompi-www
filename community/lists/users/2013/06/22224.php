<?
$subject_val = "Re: [OMPI users] Application hangs on mpi_waitall";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 27 11:38:28 2013" -->
<!-- isoreceived="20130627153828" -->
<!-- sent="Thu, 27 Jun 2013 17:38:24 +0200" -->
<!-- isosent="20130627153824" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Application hangs on mpi_waitall" -->
<!-- id="F91FFB8C-76DD-4458-BD21-8E9D05045F87_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="k0ku89mffej5atnxlqmjx6tw.1372338069472_at_email.android.com" -->
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
<strong>Date:</strong> 2013-06-27 11:38:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22225.php">Blosch, Edwin L: "Re: [OMPI users] Application hangs on mpi_waitall"</a>
<li><strong>Previous message:</strong> <a href="22223.php">Rolf vandeVaart: "Re: [OMPI users] Application hangs on mpi_waitall"</a>
<li><strong>In reply to:</strong> <a href="22222.php">Ed Blosch: "Re: [OMPI users] Application hangs on mpi_waitall"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22226.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Application hangs on mpi_waitall"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If I understand correctly the communication parroter is a one-to-all type of communication isn't it (from your server to your clients)? In this case this might be a credit management issue, where the master is running out of ack buffers and the clients can't acknowledge the retrieval of the data.
<br>
<p>Let's try to add &quot;--mca btl_openib_flags 9&quot; to the mpirun command (this disable the RMA communication and forces everything to have a pure send/recv semantics).
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Jun 27, 2013, at 15:01 , Ed Blosch &lt;eblosch_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It ran a bit longer but still deadlocked.  All matching sends are posted 1:1with posted recvs so it is a delivery issue of some kind.  I'm running a debug compiled version tonight to see what that might turn up.  I may try to rewrite with blocking sends and see if that works.  I can also try adding a barrier (irecvs, barrier, isends, waitall) to make sure sends are not buffering waiting for recvs to be posted.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sent via the Samsung Galaxy S&#153; III, an AT&amp;T 4G LTE smartphone
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -------- Original message --------
</span><br>
<span class="quotelev1">&gt; From: George Bosilca &lt;bosilca_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; Date: 
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Application hangs on mpi_waitall 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ed,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Im not sure but there might be a case where the BTL is getting overwhelmed by the nob-blocking operations while trying to setup the connection. There is a simple test for this. Add an MPI_Alltoall with a reasonable size (100k) before you start posting the non-blocking receives, and let's see if this solves your issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 26, 2013, at 04:02 , eblosch_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; An update: I recoded the mpi_waitall as a loop over the requests with
</span><br>
<span class="quotelev2">&gt; &gt; mpi_test and a 30 second timeout.  The timeout happens unpredictably,
</span><br>
<span class="quotelev2">&gt; &gt; sometimes after 10 minutes of run time, other times after 15 minutes, for
</span><br>
<span class="quotelev2">&gt; &gt; the exact same case.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; After 30 seconds, I print out the status of all outstanding receive
</span><br>
<span class="quotelev2">&gt; &gt; requests.  The message tags that are outstanding have definitely been
</span><br>
<span class="quotelev2">&gt; &gt; sent, so I am wondering why they are not getting received?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; As I said before, everybody posts non-blocking standard receives, then
</span><br>
<span class="quotelev2">&gt; &gt; non-blocking standard sends, then calls mpi_waitall. Each process is
</span><br>
<span class="quotelev2">&gt; &gt; typically waiting on 200 to 300 requests. Is deadlock possible via this
</span><br>
<span class="quotelev2">&gt; &gt; implementation approach under some kind of unusual conditions?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks again,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Ed
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm running OpenMPI 1.6.4 and seeing a problem where mpi_waitall never
</span><br>
<span class="quotelev3">&gt; &gt;&gt; returns.  The case runs fine with MVAPICH.  The logic associated with the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; communications has been extensively debugged in the past; we don't think
</span><br>
<span class="quotelev3">&gt; &gt;&gt; it has errors.   Each process posts non-blocking receives, non-blocking
</span><br>
<span class="quotelev3">&gt; &gt;&gt; sends, and then does waitall on all the outstanding requests.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The work is broken down into 960 chunks. If I run with 960 processes (60
</span><br>
<span class="quotelev3">&gt; &gt;&gt; nodes of 16 cores each), things seem to work.  If I use 160 processes
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (each process handling 6 chunks of work), then each process is handling 6
</span><br>
<span class="quotelev3">&gt; &gt;&gt; times as much communication, and that is the case that hangs with OpenMPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1.6.4; again, seems to work with MVAPICH.  Is there an obvious place to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; start, diagnostically?  We're using the openib btl.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ed
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22224/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22225.php">Blosch, Edwin L: "Re: [OMPI users] Application hangs on mpi_waitall"</a>
<li><strong>Previous message:</strong> <a href="22223.php">Rolf vandeVaart: "Re: [OMPI users] Application hangs on mpi_waitall"</a>
<li><strong>In reply to:</strong> <a href="22222.php">Ed Blosch: "Re: [OMPI users] Application hangs on mpi_waitall"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22226.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Application hangs on mpi_waitall"</a>
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
