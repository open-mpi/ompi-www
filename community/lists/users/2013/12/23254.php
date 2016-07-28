<?
$subject_val = "Re: [OMPI users] What's the status of OpenMPI and thread safety?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 19 09:29:18 2013" -->
<!-- isoreceived="20131219142918" -->
<!-- sent="Thu, 19 Dec 2013 06:29:02 -0800" -->
<!-- isosent="20131219142902" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] What's the status of OpenMPI and thread safety?" -->
<!-- id="887E15A2-D783-4CF2-8501-7E702E5EF97B_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="52B2E7C6.7050201_at_die.upm.es" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-19 09:29:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23255.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: What's the status of OpenMPI and thread safety?"</a>
<li><strong>Previous message:</strong> <a href="23253.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>In reply to:</strong> <a href="23252.php">Pablo Barrio: "Re: [OMPI users] What's the status of OpenMPI and thread safety?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23255.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: What's the status of OpenMPI and thread safety?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just answered a similar question yesterday:
<br>
<p>This was, in fact, a primary point of discussion at last week's OMPI developer's conference. Bottom line is that we are only a little further along than we used to be, but are focusing on improving it. You'll find good thread support for some transports (some of the MTLs and at least the TCP BTL), not so good for others (e.g., openib is flat-out not thread safe).
<br>
<p>We welcome contributors! I'd suggest inquiring on the devel mailing list, though, as discussion of what needs to be done can get rather detailed.
<br>
<p>Ralph
<br>
<p><p>On Dec 19, 2013, at 4:34 AM, Pablo Barrio &lt;pbarrio_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all, this is the first time I post to the list (although I have read it for a while now). I hope this helps.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm heavily using MPI_THREAD_MULTIPLE on multicores (sm BTL) and my programs work fine from a CORRECTNESS point of view. I use OpenMPI 1.6 (SVN rev. 26429) and pthreads on Linux.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This said, the performance is still very poor. Some of my programs become a thousand times slower. After some profiling/tracing, I found out that the Linux scheduler gave CPU time to threads stuck in blocking calls (Ssend, Recv, Wait, etcetera). It seems to me that the MPI implementation can be improved to avoid spending CPU time in threads waiting for messages.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In short, my experience is that the implementation is correct but not very efficient so far.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a few questions:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     1. My OpenMPI version is more than a year old. Have these performance issues been fixed in the latest versions?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     2. If not, perhaps I could contribute to OpenMPI multithreading support. Who takes care of this? How can I help?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks ahead.
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Pablo Barrio
</span><br>
<span class="quotelev1">&gt; Dpt. Electrical Engineering - Technical University of Madrid
</span><br>
<span class="quotelev1">&gt; Office C-203
</span><br>
<span class="quotelev1">&gt; Avda. Complutense s/n, 28040 Madrid
</span><br>
<span class="quotelev1">&gt; Tel. (+34) 915495700 ext. 4234
</span><br>
<span class="quotelev1">&gt; @: pbarrio_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 19/12/13 01:49, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; This was, in fact, a primary point of discussion at last week's OMPI developer's conference. Bottom line is that we are only a little further along than we used to be, but are focusing on improving it. You'll find good thread support for some transports (some of the MTLs and at least the TCP BTL), not so good for others (e.g., openib is flat-out not thread safe).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 18, 2013, at 3:57 PM, Blosch, Edwin L &lt;edwin.l.blosch_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I was wondering if the FAQ entry below is considered current opinion or perhaps a little stale.  Is multi-threading still considered to be &#145;lightly tested&#146;?  Are there known open bugs?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 7. Is Open MPI thread safe?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Support for MPI_THREAD_MULTIPLE (i.e., multiple threads executing within the MPI library) and asynchronous message passing progress (i.e., continuing message passing operations even while no user threads are in the MPI library) has been designed into Open MPI from its first planning meetings.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Support for MPI_THREAD_MULTIPLE is included in the first version of Open MPI, but it is only lightly tested and likely still has some bugs. Support for asynchronous progress is included in the TCP point-to-point device, but it, too, has only had light testing and likely still has bugs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Completing the testing for full support of MPI_THREAD_MULTIPLE and asynchronous progress is planned in the near future.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23254/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23255.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: What's the status of OpenMPI and thread safety?"</a>
<li><strong>Previous message:</strong> <a href="23253.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>In reply to:</strong> <a href="23252.php">Pablo Barrio: "Re: [OMPI users] What's the status of OpenMPI and thread safety?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23255.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: What's the status of OpenMPI and thread safety?"</a>
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
