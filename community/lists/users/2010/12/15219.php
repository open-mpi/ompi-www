<?
$subject_val = "Re: [OMPI users] Call to MPI_Test has large time-jitter";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 23 07:17:54 2010" -->
<!-- isoreceived="20101223121754" -->
<!-- sent="Thu, 23 Dec 2010 06:17:48 -0600" -->
<!-- isosent="20101223121748" -->
<!-- name="Yiannis Papadopoulos" -->
<!-- email="giannis.papadopoulos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Call to MPI_Test has large time-jitter" -->
<!-- id="AANLkTi=1cfqC66MSkYGWy1p6qcaT0maLdNLX=wF0jk1F_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="134954.257.qm_at_web32903.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Call to MPI_Test has large time-jitter<br>
<strong>From:</strong> Yiannis Papadopoulos (<em>giannis.papadopoulos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-23 07:17:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15220.php">Michael Di Domenico: "[OMPI users] srun and openmpi"</a>
<li><strong>Previous message:</strong> <a href="15218.php">&#195;&#207;&#207;&#220;&#190;&#252;: "Re: [OMPI users] Openmpi Checkpoint/Restart failed"</a>
<li><strong>In reply to:</strong> <a href="15195.php">Sashi Balasingam: "[OMPI users] Call to MPI_Test has large time-jitter"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Dec 17, 2010 at 5:43 PM, Sashi Balasingam &lt;sashibala2_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I recently started on an MPI-based, 'real-time', pipelined-processing
</span><br>
<span class="quotelev1">&gt; application, and the application fails due to large time-jitter in sending
</span><br>
<span class="quotelev1">&gt; and receiving messages. Here are related info -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) Platform:
</span><br>
<span class="quotelev1">&gt; a) Intel Box: Two Hex-core, Intel Xeon, 2.668 GHz (...total of 12 cores),
</span><br>
<span class="quotelev1">&gt; b) OS: SUSE Linux Enterprise Server 11 (x86_64) - Kernel \r (\l)
</span><br>
<span class="quotelev1">&gt; c) MPI Rev: (OpenRTE) 1.4, (...Installed OFED package)
</span><br>
<span class="quotelev1">&gt; d) HCA: InfiniBand: Mellanox Technologies MT26428 [ConnectX IB QDR, PCIe
</span><br>
<span class="quotelev1">&gt; 2.0 5GT/s] (rev a0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) Application detail
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a) Launching 7 processes, for pipelined processing, where each process
</span><br>
<span class="quotelev1">&gt; waits for a message (sizes vary between 1 KBytes to 26 KBytes),
</span><br>
<span class="quotelev1">&gt; then process the data, and outputs a message (sizes vary between 1 KBytes
</span><br>
<span class="quotelev1">&gt; to 26 KBytes), to next process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; b) MPI transport functions used : &quot;MPI_Isend&quot;, MPI_Irecv, MPI_Test.
</span><br>
<span class="quotelev1">&gt;    i) For Receiving messages, I first make an MPI_Irecv call, followed by a
</span><br>
<span class="quotelev1">&gt; busy-loop on MPI_Test, waiting for message
</span><br>
<span class="quotelev1">&gt;    ii) For Sending message, there is a busy-loop on MPI_Test to ensure
</span><br>
<span class="quotelev1">&gt; prior buffer was sent, then use MPI_Isend.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; c) When the job starts, all these 7 process are put in High priority mode (
</span><br>
<span class="quotelev1">&gt; SCHED_FIFO policy, with priority setting of 99).
</span><br>
<span class="quotelev1">&gt; The Job entails an input data packet stream (and a series of MPI messages),
</span><br>
<span class="quotelev1">&gt; continually at 40 micro-sec rate, for a few minutes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3) The Problem:
</span><br>
<span class="quotelev1">&gt; Most calls to MPI_Test (...which is non-blocking) takes a few micro-sec,
</span><br>
<span class="quotelev1">&gt; but around 10% of the job, it has a large jitter, that vary from 1 to 100
</span><br>
<span class="quotelev1">&gt; odd millisec. This causes
</span><br>
<span class="quotelev1">&gt; some of the application input queues to fill-up  and cause a failure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestions to look at on the MPI settings or OS config/issues will be
</span><br>
<span class="quotelev1">&gt; much appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt; Sanji
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
<p>I had a similar issue, a work-around is to avoid polling too much by placing
<br>
some kind of a timer in your code before the MPI_Test call.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15219/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15220.php">Michael Di Domenico: "[OMPI users] srun and openmpi"</a>
<li><strong>Previous message:</strong> <a href="15218.php">&#195;&#207;&#207;&#220;&#190;&#252;: "Re: [OMPI users] Openmpi Checkpoint/Restart failed"</a>
<li><strong>In reply to:</strong> <a href="15195.php">Sashi Balasingam: "[OMPI users] Call to MPI_Test has large time-jitter"</a>
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
