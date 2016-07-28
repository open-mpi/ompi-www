<?
$subject_val = "Re: [OMPI users] Application hangs on mpi_waitall";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 27 14:02:23 2013" -->
<!-- isoreceived="20130627180223" -->
<!-- sent="Thu, 27 Jun 2013 18:01:39 +0000" -->
<!-- isosent="20130627180139" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Application hangs on mpi_waitall" -->
<!-- id="25AE6277FDC12F408393C11ACE6C400F0CA369F4_at_HDXDSP53.us.lmco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="25AE6277FDC12F408393C11ACE6C400F0CA369CC_at_HDXDSP53.us.lmco.com" -->
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
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-27 14:01:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22228.php">rmjuberias: "[OMPI users] problem compiling openmpi"</a>
<li><strong>Previous message:</strong> <a href="22226.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Application hangs on mpi_waitall"</a>
<li><strong>In reply to:</strong> <a href="22225.php">Blosch, Edwin L: "Re: [OMPI users] Application hangs on mpi_waitall"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22224.php">George Bosilca: "Re: [OMPI users] Application hangs on mpi_waitall"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Also, just to be clear, that attached listing is ordered by data in the first column and doesn&#226;&#128;&#153;t reflect the call sequence.  In actual implementation, all the messages labeled &#226;&#128;&#156;mpi-recv&#226;&#128;&#157; are mpi_irecv and are all posted before any of the mpi_isends are posted.
<br>

<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Blosch, Edwin L
<br>
Sent: Thursday, June 27, 2013 12:48 PM
<br>
To: Open MPI Users
<br>
Subject: EXTERNAL: Re: [OMPI users] Application hangs on mpi_waitall
<br>

<br>
Attached is the message list for rank 0 for the communication step that is failing.  There are about 160 isends and irecvs.  The &#226;&#128;&#152;message size&#226;&#128;&#153; is actually a number of cells.  On some steps only one 8-byte word per cell is communicated, at another step we exchange 7 words, and another step we exchange 21 words.  You can see the smallest is 10 cells, the largest around 1000 cells.
<br>

<br>
Thus for the 7-word communication step, the smallest messages are 560 bytes, the largest are 56000 bytes, and there is a distribution of sizes.  For the single-word communication step, the size distribution would be from 80 bytes to 8000 and for the 21-word step it would be from 1680 to 168000 bytes.
<br>

<br>
From: users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Rolf vandeVaart
<br>
Sent: Thursday, June 27, 2013 9:02 AM
<br>
To: Open MPI Users
<br>
Subject: EXTERNAL: Re: [OMPI users] Application hangs on mpi_waitall
<br>

<br>
Ed, how large are the messages that you are sending and receiving?
<br>
Rolf
<br>

<br>
From: users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Ed Blosch
<br>
Sent: Thursday, June 27, 2013 9:01 AM
<br>
To: users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Application hangs on mpi_waitall
<br>

<br>
It ran a bit longer but still deadlocked.  All matching sends are posted 1:1with posted recvs so it is a delivery issue of some kind.  I'm running a debug compiled version tonight to see what that might turn up.  I may try to rewrite with blocking sends and see if that works.  I can also try adding a barrier (irecvs, barrier, isends, waitall) to make sure sends are not buffering waiting for recvs to be posted.
<br>

<br>

<br>
Sent via the Samsung Galaxy S&#226;&#132;&#162; III, an AT&amp;T 4G LTE smartphone
<br>

<br>

<br>

<br>
-------- Original message --------
<br>
From: George Bosilca &lt;bosilca_at_[hidden]&lt;mailto:bosilca_at_[hidden]&gt;&gt;
<br>
Date:
<br>
To: Open MPI Users &lt;users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
<br>
Subject: Re: [OMPI users] Application hangs on mpi_waitall
<br>

<br>

<br>
Ed,
<br>

<br>
Im not sure but there might be a case where the BTL is getting overwhelmed by the nob-blocking operations while trying to setup the connection. There is a simple test for this. Add an MPI_Alltoall with a reasonable size (100k) before you start posting the non-blocking receives, and let's see if this solves your issue.
<br>

<br>
&nbsp;&nbsp;George.
<br>

<br>

<br>
On Jun 26, 2013, at 04:02 , eblosch_at_[hidden]&lt;mailto:eblosch_at_[hidden]&gt; wrote:
<br>

<br>
<span class="quotelev1">&gt; An update: I recoded the mpi_waitall as a loop over the requests with
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
<span class="quotelev2">&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>

<br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
________________________________
<br>
This email message is for the sole use of the intended recipient(s) and may contain confidential information.  Any unauthorized review, use, disclosure or distribution is prohibited.  If you are not the intended recipient, please contact the sender by reply email and destroy all copies of the original message.
<br>
________________________________
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22227/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22228.php">rmjuberias: "[OMPI users] problem compiling openmpi"</a>
<li><strong>Previous message:</strong> <a href="22226.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Application hangs on mpi_waitall"</a>
<li><strong>In reply to:</strong> <a href="22225.php">Blosch, Edwin L: "Re: [OMPI users] Application hangs on mpi_waitall"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22224.php">George Bosilca: "Re: [OMPI users] Application hangs on mpi_waitall"</a>
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
