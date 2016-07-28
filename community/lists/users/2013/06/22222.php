<?
$subject_val = "Re: [OMPI users] Application hangs on mpi_waitall";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 27 09:01:19 2013" -->
<!-- isoreceived="20130627130119" -->
<!-- sent="Thu, 27 Jun 2013 08:01:09 -0500" -->
<!-- isosent="20130627130109" -->
<!-- name="Ed Blosch" -->
<!-- email="eblosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Application hangs on mpi_waitall" -->
<!-- id="k0ku89mffej5atnxlqmjx6tw.1372338069472_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] Application hangs on mpi_waitall" -->
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
<strong>From:</strong> Ed Blosch (<em>eblosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-27 09:01:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22223.php">Rolf vandeVaart: "Re: [OMPI users] Application hangs on mpi_waitall"</a>
<li><strong>Previous message:</strong> <a href="22221.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error: unknown type name 'ompi_jobid_t'"</a>
<li><strong>Maybe in reply to:</strong> <a href="22127.php">Blosch, Edwin L: "[OMPI users] Application hangs on mpi_waitall"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22223.php">Rolf vandeVaart: "Re: [OMPI users] Application hangs on mpi_waitall"</a>
<li><strong>Reply:</strong> <a href="22223.php">Rolf vandeVaart: "Re: [OMPI users] Application hangs on mpi_waitall"</a>
<li><strong>Reply:</strong> <a href="22224.php">George Bosilca: "Re: [OMPI users] Application hangs on mpi_waitall"</a>
<li><strong>Reply:</strong> <a href="22226.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Application hangs on mpi_waitall"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It ran a bit longer but still deadlocked. &#194;&#160;All matching sends are posted 1:1with posted recvs so it is a delivery issue of some kind. &#194;&#160;I'm running a debug compiled version tonight to see what that might turn up. &#194;&#160;I may try to rewrite with blocking sends and see if that works. &#194;&#160;I can also try adding a barrier (irecvs, barrier, isends, waitall) to make sure sends are not buffering waiting for recvs to be posted.
<br>
<p><p>Sent via the Samsung Galaxy S&#226;&#132;&#162; III, an AT&amp;T 4G LTE smartphone
<br>
<p>-------- Original message --------
<br>
From: George Bosilca &lt;bosilca_at_[hidden]&gt; 
<br>
Date:  
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt; 
<br>
Subject: Re: [OMPI users] Application hangs on mpi_waitall 
<br>
&nbsp;
<br>
Ed,
<br>
<p>Im not sure but there might be a case where the BTL is getting overwhelmed by the nob-blocking operations while trying to setup the connection. There is a simple test for this. Add an MPI_Alltoall with a reasonable size (100k) before you start posting the non-blocking receives, and let's see if this solves your issue.
<br>
<p>&#194;&#160; George.
<br>
<p><p>On Jun 26, 2013, at 04:02 , eblosch_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; An update: I recoded the mpi_waitall as a loop over the requests with
</span><br>
<span class="quotelev1">&gt; mpi_test and a 30 second timeout.&#194;&#160; The timeout happens unpredictably,
</span><br>
<span class="quotelev1">&gt; sometimes after 10 minutes of run time, other times after 15 minutes, for
</span><br>
<span class="quotelev1">&gt; the exact same case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After 30 seconds, I print out the status of all outstanding receive
</span><br>
<span class="quotelev1">&gt; requests.&#194;&#160; The message tags that are outstanding have definitely been
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
<span class="quotelev2">&gt;&gt; returns.&#194;&#160; The case runs fine with MVAPICH.&#194;&#160; The logic associated with the
</span><br>
<span class="quotelev2">&gt;&gt; communications has been extensively debugged in the past; we don't think
</span><br>
<span class="quotelev2">&gt;&gt; it has errors.&#194;&#160;&#194;&#160; Each process posts non-blocking receives, non-blocking
</span><br>
<span class="quotelev2">&gt;&gt; sends, and then does waitall on all the outstanding requests.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The work is broken down into 960 chunks. If I run with 960 processes (60
</span><br>
<span class="quotelev2">&gt;&gt; nodes of 16 cores each), things seem to work.&#194;&#160; If I use 160 processes
</span><br>
<span class="quotelev2">&gt;&gt; (each process handling 6 chunks of work), then each process is handling 6
</span><br>
<span class="quotelev2">&gt;&gt; times as much communication, and that is the case that hangs with OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; 1.6.4; again, seems to work with MVAPICH.&#194;&#160; Is there an obvious place to
</span><br>
<span class="quotelev2">&gt;&gt; start, diagnostically?&#194;&#160; We're using the openib btl.
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
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22222/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22223.php">Rolf vandeVaart: "Re: [OMPI users] Application hangs on mpi_waitall"</a>
<li><strong>Previous message:</strong> <a href="22221.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error: unknown type name 'ompi_jobid_t'"</a>
<li><strong>Maybe in reply to:</strong> <a href="22127.php">Blosch, Edwin L: "[OMPI users] Application hangs on mpi_waitall"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22223.php">Rolf vandeVaart: "Re: [OMPI users] Application hangs on mpi_waitall"</a>
<li><strong>Reply:</strong> <a href="22223.php">Rolf vandeVaart: "Re: [OMPI users] Application hangs on mpi_waitall"</a>
<li><strong>Reply:</strong> <a href="22224.php">George Bosilca: "Re: [OMPI users] Application hangs on mpi_waitall"</a>
<li><strong>Reply:</strong> <a href="22226.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Application hangs on mpi_waitall"</a>
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
