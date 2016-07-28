<?
$subject_val = "Re: [OMPI users] What's the status of OpenMPI and thread safety?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 19 07:34:17 2013" -->
<!-- isoreceived="20131219123417" -->
<!-- sent="Thu, 19 Dec 2013 13:34:14 +0100" -->
<!-- isosent="20131219123414" -->
<!-- name="Pablo Barrio" -->
<!-- email="pbarrio_at_[hidden]" -->
<!-- subject="Re: [OMPI users] What's the status of OpenMPI and thread safety?" -->
<!-- id="52B2E7C6.7050201_at_die.upm.es" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> Re: [OMPI users] What's the status of OpenMPI and thread safety?<br>
<strong>From:</strong> Pablo Barrio (<em>pbarrio_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-19 07:34:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23253.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Previous message:</strong> <a href="23251.php">Dave Love: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>In reply to:</strong> <a href="23237.php">Ralph Castain: "Re: [OMPI users] What's the status of OpenMPI and thread safety?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23254.php">Ralph Castain: "Re: [OMPI users] What's the status of OpenMPI and thread safety?"</a>
<li><strong>Reply:</strong> <a href="23254.php">Ralph Castain: "Re: [OMPI users] What's the status of OpenMPI and thread safety?"</a>
<li><strong>Reply:</strong> <a href="23255.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: What's the status of OpenMPI and thread safety?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all, this is the first time I post to the list (although I have read 
<br>
it for a while now). I hope this helps.
<br>
<p>I'm heavily using MPI_THREAD_MULTIPLE on multicores (sm BTL) and my 
<br>
programs work fine from a CORRECTNESS point of view. I use OpenMPI 1.6 
<br>
(SVN rev. 26429) and pthreads on Linux.
<br>
<p>This said, the performance is still very poor. Some of my programs 
<br>
become a thousand times slower. After some profiling/tracing, I found 
<br>
out that the Linux scheduler gave CPU time to threads stuck in blocking 
<br>
calls (Ssend, Recv, Wait, etcetera). It seems to me that the MPI 
<br>
implementation can be improved to avoid spending CPU time in threads 
<br>
waiting for messages.
<br>
<p>In short, my experience is that the implementation is correct but not 
<br>
very efficient so far.
<br>
<p>I have a few questions:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. My OpenMPI version is more than a year old. Have these 
<br>
performance issues been fixed in the latest versions?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. If not, perhaps I could contribute to OpenMPI multithreading 
<br>
support. Who takes care of this? How can I help?
<br>
<p>Thanks ahead.
<br>
<p><pre>
-- 
Pablo Barrio
Dpt. Electrical Engineering - Technical University of Madrid
Office C-203
Avda. Complutense s/n, 28040 Madrid
Tel. (+34) 915495700 ext. 4234
@: pbarrio_at_[hidden]
On 19/12/13 01:49, Ralph Castain wrote:
&gt; This was, in fact, a primary point of discussion at last week's OMPI 
&gt; developer's conference. Bottom line is that we are only a little 
&gt; further along than we used to be, but are focusing on improving it. 
&gt; You'll find good thread support for some transports (some of the MTLs 
&gt; and at least the TCP BTL), not so good for others (e.g., openib is 
&gt; flat-out not thread safe).
&gt;
&gt;
&gt; On Dec 18, 2013, at 3:57 PM, Blosch, Edwin L &lt;edwin.l.blosch_at_[hidden] 
&gt; &lt;mailto:edwin.l.blosch_at_[hidden]&gt;&gt; wrote:
&gt;
&gt;&gt; I was wondering if the FAQ entry below is considered current opinion 
&gt;&gt; or perhaps a little stale.  Is multi-threading still considered to be 
&gt;&gt; 'lightly tested'?  Are there known open bugs?
&gt;&gt; Thank you,
&gt;&gt; Ed
&gt;&gt; 7. Is Open MPI thread safe?
&gt;&gt; Support for MPI_THREAD_MULTIPLE (i.e., multiple threads executing 
&gt;&gt; within the MPI library) and asynchronous message passing progress 
&gt;&gt; (i.e., continuing message passing operations even while no user 
&gt;&gt; threads are in the MPI library) has been designed into Open MPI from 
&gt;&gt; its first planning meetings.
&gt;&gt; Support for MPI_THREAD_MULTIPLE is included in the first version of 
&gt;&gt; Open MPI, but it is only lightly tested and likely still has some 
&gt;&gt; bugs. Support for asynchronous progress is included in the TCP 
&gt;&gt; point-to-point device, but it, too, has only had light testing and 
&gt;&gt; likely still has bugs.
&gt;&gt; Completing the testing for full support of MPI_THREAD_MULTIPLE and 
&gt;&gt; asynchronous progress is planned in the near future.
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23252/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23253.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Previous message:</strong> <a href="23251.php">Dave Love: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>In reply to:</strong> <a href="23237.php">Ralph Castain: "Re: [OMPI users] What's the status of OpenMPI and thread safety?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23254.php">Ralph Castain: "Re: [OMPI users] What's the status of OpenMPI and thread safety?"</a>
<li><strong>Reply:</strong> <a href="23254.php">Ralph Castain: "Re: [OMPI users] What's the status of OpenMPI and thread safety?"</a>
<li><strong>Reply:</strong> <a href="23255.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: What's the status of OpenMPI and thread safety?"</a>
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
