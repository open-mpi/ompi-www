<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: What's the status of OpenMPI and thread safety?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 19 10:24:09 2013" -->
<!-- isoreceived="20131219152409" -->
<!-- sent="Thu, 19 Dec 2013 15:23:29 +0000" -->
<!-- isosent="20131219152329" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: What's the status of OpenMPI and thread safety?" -->
<!-- id="25AE6277FDC12F408393C11ACE6C400F0CB04AC1_at_HDXDSP53.us.lmco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7E8FF62E-2F49-406C-992A-9D565F5ED66E_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: What's the status of OpenMPI and thread safety?<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-19 10:23:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23257.php">Ralph Castain: "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="23255.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: What's the status of OpenMPI and thread safety?"</a>
<li><strong>In reply to:</strong> <a href="23237.php">Ralph Castain: "Re: [OMPI users] What's the status of OpenMPI and thread safety?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23273.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: What's the status of OpenMPI and thread safety?"</a>
<li><strong>Reply:</strong> <a href="23273.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: What's the status of OpenMPI and thread safety?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralph,
<br>
<p>We are attempting to use 1.6.4 with an application that requires multi-threading, and it is hanging most of the time; it is using openib.  They steered us to try Intel MPI for now.  If you lack drivers/testers for improved thread safety on openib, let me know and I'll encourage the developers of the application to support you.
<br>
<p>Ed
<br>
<p>From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Wednesday, December 18, 2013 6:50 PM
<br>
To: Open MPI Users
<br>
Subject: EXTERNAL: Re: [OMPI users] What's the status of OpenMPI and thread safety?
<br>
<p>This was, in fact, a primary point of discussion at last week's OMPI developer's conference. Bottom line is that we are only a little further along than we used to be, but are focusing on improving it. You'll find good thread support for some transports (some of the MTLs and at least the TCP BTL), not so good for others (e.g., openib is flat-out not thread safe).
<br>
<p><p>On Dec 18, 2013, at 3:57 PM, Blosch, Edwin L &lt;edwin.l.blosch_at_[hidden]&lt;mailto:edwin.l.blosch_at_[hidden]&gt;&gt; wrote:
<br>
<p><p>I was wondering if the FAQ entry below is considered current opinion or perhaps a little stale.  Is multi-threading still considered to be 'lightly tested'?  Are there known open bugs?
<br>
<p>Thank you,
<br>
<p>Ed
<br>
<p><p>7. Is Open MPI thread safe?
<br>
<p>Support for MPI_THREAD_MULTIPLE (i.e., multiple threads executing within the MPI library) and asynchronous message passing progress (i.e., continuing message passing operations even while no user threads are in the MPI library) has been designed into Open MPI from its first planning meetings.
<br>
<p>Support for MPI_THREAD_MULTIPLE is included in the first version of Open MPI, but it is only lightly tested and likely still has some bugs. Support for asynchronous progress is included in the TCP point-to-point device, but it, too, has only had light testing and likely still has bugs.
<br>
<p>Completing the testing for full support of MPI_THREAD_MULTIPLE and asynchronous progress is planned in the near future.
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23256/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23257.php">Ralph Castain: "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="23255.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: What's the status of OpenMPI and thread safety?"</a>
<li><strong>In reply to:</strong> <a href="23237.php">Ralph Castain: "Re: [OMPI users] What's the status of OpenMPI and thread safety?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23273.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: What's the status of OpenMPI and thread safety?"</a>
<li><strong>Reply:</strong> <a href="23273.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: What's the status of OpenMPI and thread safety?"</a>
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
