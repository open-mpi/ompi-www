<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: What's the status of OpenMPI and thread safety?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 19 09:34:50 2013" -->
<!-- isoreceived="20131219143450" -->
<!-- sent="Thu, 19 Dec 2013 14:34:31 +0000" -->
<!-- isosent="20131219143431" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: What's the status of OpenMPI and thread safety?" -->
<!-- id="CED850D4.1670A%bwbarre_at_sandia.gov" -->
<!-- charset="Windows-1252" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] Re: What's the status of OpenMPI and thread safety?<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-19 09:34:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23256.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: What's the status of OpenMPI and thread safety?"</a>
<li><strong>Previous message:</strong> <a href="23254.php">Ralph Castain: "Re: [OMPI users] What's the status of OpenMPI and thread safety?"</a>
<li><strong>In reply to:</strong> <a href="23252.php">Pablo Barrio: "Re: [OMPI users] What's the status of OpenMPI and thread safety?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23256.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: What's the status of OpenMPI and thread safety?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pablo -
<br>
<p>As Ralph mentioned, it will be different, possibly not for the better, in
<br>
1.7.  This is an area of active work, so any help would be appreciated.
<br>
<p>However, the one issue you brought up is going to be problematic, even
<br>
with threads.  Our design essentially makes it such that blocking MPI
<br>
calls never block internally (for any thread level).  It's one of the
<br>
trade-offs in our multi-device design.  Good: multi-device just works
<br>
without any complicated state sharing between devices.  Bad: it's hard for
<br>
us to block.  We've talked about making a blocking (or slow polling,
<br>
semi-blocking) option for when we can detect we only have one device, but
<br>
it hasn't been a high priority.
<br>
<p>Like Ralph said, if you're interested in working on the threading or
<br>
blocking issues, please join the devel list and let us know.  We're always
<br>
willing to take new patches.
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p>On 12/19/13 5:34 AM, &quot;Pablo Barrio&quot; &lt;pbarrio_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;Hi all, this is the first time I post to the list (although I have read
</span><br>
<span class="quotelev1">&gt;it for a while now). I hope this helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I'm heavily using MPI_THREAD_MULTIPLE on multicores (sm BTL) and my
</span><br>
<span class="quotelev1">&gt;programs work fine from a CORRECTNESS point of view. I use OpenMPI 1.6
</span><br>
<span class="quotelev1">&gt;(SVN rev. 26429) and pthreads on Linux.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This said, the performance is still very poor. Some of my programs become
</span><br>
<span class="quotelev1">&gt;a thousand times slower. After some profiling/tracing, I found out that
</span><br>
<span class="quotelev1">&gt;the Linux scheduler gave CPU time to threads stuck in blocking calls
</span><br>
<span class="quotelev1">&gt;(Ssend, Recv, Wait, etcetera). It seems to
</span><br>
<span class="quotelev1">&gt; me that the MPI implementation can be improved to avoid spending CPU
</span><br>
<span class="quotelev1">&gt;time in threads waiting for messages.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;In short, my experience is that the implementation is correct but not
</span><br>
<span class="quotelev1">&gt;very efficient so far.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I have a few questions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    1. My OpenMPI version is more than a year old. Have these performance
</span><br>
<span class="quotelev1">&gt;issues been fixed in the latest versions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    2. If not, perhaps I could contribute to OpenMPI multithreading
</span><br>
<span class="quotelev1">&gt;support. Who takes care of this? How can I help?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks ahead.
</span><br>
<span class="quotelev1">&gt;-- 
</span><br>
<span class="quotelev1">&gt;Pablo Barrio
</span><br>
<span class="quotelev1">&gt;Dpt. Electrical Engineering - Technical University of Madrid
</span><br>
<span class="quotelev1">&gt;Office C-203
</span><br>
<span class="quotelev1">&gt;Avda. Complutense s/n, 28040 Madrid
</span><br>
<span class="quotelev1">&gt;Tel. (+34) 915495700 ext. 4234
</span><br>
<span class="quotelev1">&gt;@: pbarrio_at_[hidden]
</span><br>
<span class="quotelev1">&gt;On 19/12/13 01:49, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This was, in fact, a primary point of discussion at last week's OMPI
</span><br>
<span class="quotelev1">&gt;developer's conference. Bottom line is that we are only a little further
</span><br>
<span class="quotelev1">&gt;along than we used to be, but are focusing on improving it. You'll find
</span><br>
<span class="quotelev1">&gt;good thread support for some transports (some
</span><br>
<span class="quotelev1">&gt; of the MTLs and at least the TCP BTL), not so good for others (e.g.,
</span><br>
<span class="quotelev1">&gt;openib is flat-out not thread safe).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Dec 18, 2013, at 3:57 PM, Blosch, Edwin L &lt;edwin.l.blosch_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I was wondering if the FAQ entry below is considered current opinion or
</span><br>
<span class="quotelev1">&gt;perhaps a little stale.  Is multi-threading still considered to be
</span><br>
<span class="quotelev1">&gt;&#140;lightly tested&#185;?  Are there known open bugs?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;Thank you,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;Ed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;7. Is Open MPI thread safe?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;Support for MPI_THREAD_MULTIPLE (i.e., multiple threads executing within
</span><br>
<span class="quotelev1">&gt;the MPI library) and asynchronous message passing progress (i.e.,
</span><br>
<span class="quotelev1">&gt;continuing message passing operations even while no user threads are in
</span><br>
<span class="quotelev1">&gt;the MPI library) has been designed into Open MPI
</span><br>
<span class="quotelev1">&gt; from its first planning meetings.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;Support for MPI_THREAD_MULTIPLE is included in the first version of Open
</span><br>
<span class="quotelev1">&gt;MPI, but it is only lightly tested and likely still has some bugs.
</span><br>
<span class="quotelev1">&gt;Support for asynchronous progress is included in the TCP point-to-point
</span><br>
<span class="quotelev1">&gt;device, but it, too, has only had light testing
</span><br>
<span class="quotelev1">&gt; and likely still has bugs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;Completing the testing for full support of MPI_THREAD_MULTIPLE and
</span><br>
<span class="quotelev1">&gt;asynchronous progress is planned in the near future.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23256.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: What's the status of OpenMPI and thread safety?"</a>
<li><strong>Previous message:</strong> <a href="23254.php">Ralph Castain: "Re: [OMPI users] What's the status of OpenMPI and thread safety?"</a>
<li><strong>In reply to:</strong> <a href="23252.php">Pablo Barrio: "Re: [OMPI users] What's the status of OpenMPI and thread safety?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23256.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: What's the status of OpenMPI and thread safety?"</a>
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
