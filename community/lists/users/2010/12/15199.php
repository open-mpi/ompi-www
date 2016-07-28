<?
$subject_val = "Re: [OMPI users] Call to MPI_Test has large time-jitter";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 18 16:59:31 2010" -->
<!-- isoreceived="20101218215931" -->
<!-- sent="Sat, 18 Dec 2010 13:59:25 -0800 (PST)" -->
<!-- isosent="20101218215925" -->
<!-- name="Sashi Balasingam" -->
<!-- email="sashibala2_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Call to MPI_Test has large time-jitter" -->
<!-- id="764084.17669.qm_at_web32903.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="mailman.11.1292691624.11775.users_at_open-mpi.org" -->
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
<strong>From:</strong> Sashi Balasingam (<em>sashibala2_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-18 16:59:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15200.php">Mathieu Gontier: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>Previous message:</strong> <a href="15198.php">Kamel Mazouzi: "[OMPI users] Random hungs of applications when using the openib BTL"</a>
<li><strong>Maybe in reply to:</strong> <a href="15195.php">Sashi Balasingam: "[OMPI users] Call to MPI_Test has large time-jitter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15219.php">Yiannis Papadopoulos: "Re: [OMPI users] Call to MPI_Test has large time-jitter"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I forgot add some other details...
<br>
&#160;
<br>
1) I am setting the affinity of each process to a specific core,&#160;explicitly in my application (...with OS system call)
<br>
&#160;
<br>
2) I enabled the 'use_eager_rdma' with the corresponding buffer limit at 32 KBytes( large enough to cover all my message sizes)
<br>
&#160;
<br>
3) I set the btl mtu be 2048 bytes.
<br>
&#160;
<br>
My first objective is to figure out if those large jitter on MPI_Test call is from the MPI library / non-optimal setting, or from OS/ related services taking CPU away.
<br>
&#160;
<br>
Thanks,
<br>
Sashi
<br>
&#160;
<br>
Sashi
<br>
<p>Date: Sat, 18 Dec 2010 07:00:36 -0500
<br>
From: Tim Prince &lt;n8tm_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Call to MPI_Test has large time-jitter
<br>
To: users_at_[hidden]
<br>
Message-ID: &lt;4D0CA264.4040305_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=&quot;iso-8859-1&quot;; Format=&quot;flowed&quot;
<br>
<p>On 12/17/2010 6:43 PM, Sashi Balasingam wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I recently started on an MPI-based, 'real-time', pipelined-processing 
</span><br>
<span class="quotelev1">&gt; application, and the application fails due to large time-jitter in 
</span><br>
<span class="quotelev1">&gt; sending and receiving messages. Here are related info -
</span><br>
<span class="quotelev1">&gt; 1) Platform:
</span><br>
<span class="quotelev1">&gt; a) Intel Box: Two Hex-core, Intel Xeon, 2.668 GHz (...total of 12 cores),
</span><br>
<span class="quotelev1">&gt; b) OS: SUSE Linux Enterprise Server 11 (x86_64) - Kernel \r (\l)
</span><br>
<span class="quotelev1">&gt; c) MPI Rev: (OpenRTE) 1.4, (...Installed OFED package)
</span><br>
<span class="quotelev1">&gt; d) HCA: InfiniBand: Mellanox Technologies MT26428 [ConnectX IB QDR, 
</span><br>
<span class="quotelev1">&gt; PCIe 2.0 5GT/s] (rev a0)
</span><br>
<span class="quotelev1">&gt; 2) Application detail
</span><br>
<span class="quotelev1">&gt; a) Launching 7 processes, for pipelined processing, where each process 
</span><br>
<span class="quotelev1">&gt; waits for a message (sizes vary between 1 KBytes to 26 KBytes),
</span><br>
<span class="quotelev1">&gt; then process the data, and outputs a message (sizes vary between 1 
</span><br>
<span class="quotelev1">&gt; KBytes to 26 KBytes), to next process.
</span><br>
<span class="quotelev1">&gt; b) MPI transport functions used : &quot;MPI_Isend&quot;, MPI_Irecv, MPI_Test.
</span><br>
<span class="quotelev1">&gt;&#160; &#160; i) For Receiving messages, I first make an MPI_Irecv call, followed 
</span><br>
<span class="quotelev1">&gt; by a busy-loop on MPI_Test, waiting for message
</span><br>
<span class="quotelev1">&gt;&#160; &#160; ii) For Sending message, there is a busy-loop on MPI_Test to ensure 
</span><br>
<span class="quotelev1">&gt; prior buffer was sent, then use MPI_Isend.
</span><br>
<span class="quotelev1">&gt; c) When the job starts, all these 7 process are put in High priority 
</span><br>
<span class="quotelev1">&gt; mode ( SCHED_FIFO policy, with priority setting of 99).
</span><br>
<span class="quotelev1">&gt; The Job entails an input data packet stream (and a series of MPI 
</span><br>
<span class="quotelev1">&gt; messages), continually at 40 micro-sec rate, for a few minutes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3) The Problem:
</span><br>
<span class="quotelev1">&gt; Most calls to MPI_Test (...which is non-blocking) takes a few 
</span><br>
<span class="quotelev1">&gt; micro-sec, but around 10% of the job, it has a large jitter, that vary 
</span><br>
<span class="quotelev1">&gt; from 1 to 100 odd millisec. This causes
</span><br>
<span class="quotelev1">&gt; some of the application input queues to fill-up&#160; and cause a failure.
</span><br>
<span class="quotelev1">&gt; Any suggestions to look at on the MPI settings or OS config/issues 
</span><br>
<span class="quotelev1">&gt; will be much appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
I didn't see anything there about your -mca affinity settings.&#160; Even if 
<br>
the defaults don't choose optimum mapping, it's way better than allowing 
<br>
them to float as you would with multiple independent jobs running.
<br>
<p><pre>
-- 
Tim Prince
-------------- next part --------------
HTML attachment scrubbed and removed
------------------------------
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
End of users Digest, Vol 1772, Issue 1
**************************************
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15199/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15200.php">Mathieu Gontier: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>Previous message:</strong> <a href="15198.php">Kamel Mazouzi: "[OMPI users] Random hungs of applications when using the openib BTL"</a>
<li><strong>Maybe in reply to:</strong> <a href="15195.php">Sashi Balasingam: "[OMPI users] Call to MPI_Test has large time-jitter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15219.php">Yiannis Papadopoulos: "Re: [OMPI users] Call to MPI_Test has large time-jitter"</a>
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
