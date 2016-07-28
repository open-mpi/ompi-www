<?
$subject_val = "Re: [OMPI users] Open MPI process cannot do send-receive message correctly on a distributed memory cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 30 11:49:44 2011" -->
<!-- isoreceived="20110930154944" -->
<!-- sent="Fri, 30 Sep 2011 09:49:39 -0600" -->
<!-- isosent="20110930154939" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI process cannot do send-receive message correctly on a distributed memory cluster" -->
<!-- id="SNT134-W21F50400972DEB5A6473FCBF70_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAHwLALNY6b0fo4NABvLg9=w47Gd8tDTF7EBYBp9Rb8xC6QNajg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI process cannot do send-receive message correctly on a distributed memory cluster<br>
<strong>From:</strong> Jack Bryan (<em>dtustudy68_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-30 11:49:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17485.php">Konz, Jeffrey (SSA Solution Centers): "[OMPI users] problem running with RoCE over 10GbE"</a>
<li><strong>Previous message:</strong> <a href="17483.php">Rayson Ho: "Re: [OMPI users] Open MPI process cannot do send-receive message correctly on a distributed memory cluster"</a>
<li><strong>In reply to:</strong> <a href="17483.php">Rayson Ho: "Re: [OMPI users] Open MPI process cannot do send-receive message correctly on a distributed memory cluster"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, 
<br>
<p>I am using non-blocking MPI_Isend to send out message and using blocking MPI_Recv to get the message. 
<br>
<p>Each MPI_Isend use a distinct buffer to hold the message, which is not changed until the message is received. 
<br>
<p>Then, the sender process waits for the MPI_Isend to be finished. 
<br>
<p><p>Before this message is sent out, a heading message (about how many data and what data will be sent out in the following MPI_Isend) 
<br>
is sent out in the same way, they can be received well. 
<br>
<p>Why the following message (which has larger size) cannot be received ? 
<br>
<p>Any help is really appreciated. 
<br>
<p><span class="quotelev1">&gt; Date: Fri, 30 Sep 2011 11:33:16 -0400
</span><br>
<span class="quotelev1">&gt; From: raysonlogin_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Open MPI process cannot do send-receive message correctly on a distributed memory cluster
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can use a debugger (just gdb will do, no TotalView needed) to find
</span><br>
<span class="quotelev1">&gt; out which MPI send &amp; receive calls are hanging the code on the
</span><br>
<span class="quotelev1">&gt; distributed cluster, and see if the send &amp; receive pair is due to a
</span><br>
<span class="quotelev1">&gt; problem described at:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Deadlock avoidance in your MPI programs:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cs.ucsb.edu/~hnielsen/cs140/mpi-deadlocks.html">http://www.cs.ucsb.edu/~hnielsen/cs140/mpi-deadlocks.html</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rayson
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =================================
</span><br>
<span class="quotelev1">&gt; Grid Engine / Open Grid Scheduler
</span><br>
<span class="quotelev1">&gt; <a href="http://gridscheduler.sourceforge.net">http://gridscheduler.sourceforge.net</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Wikipedia Commons
</span><br>
<span class="quotelev1">&gt; <a href="http://commons.wikimedia.org/wiki/User:Raysonho">http://commons.wikimedia.org/wiki/User:Raysonho</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Sep 30, 2011 at 11:06 AM, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have a Open MPI program, which works well on a Linux shared memory
</span><br>
<span class="quotelev2">&gt; &gt; multicore (2 x 6 cores) machine.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But, it does not work well on a distributed cluster with Linux Open MPI.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I found that the the process sends out some messages to other processes,
</span><br>
<span class="quotelev2">&gt; &gt; which can not receive them.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What is the possible reason ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I do not change anything of the program.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any help is really appreciated.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==================================================
</span><br>
<span class="quotelev1">&gt; Open Grid Scheduler - The Official Open Source Grid Engine
</span><br>
<span class="quotelev1">&gt; <a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17484/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17485.php">Konz, Jeffrey (SSA Solution Centers): "[OMPI users] problem running with RoCE over 10GbE"</a>
<li><strong>Previous message:</strong> <a href="17483.php">Rayson Ho: "Re: [OMPI users] Open MPI process cannot do send-receive message correctly on a distributed memory cluster"</a>
<li><strong>In reply to:</strong> <a href="17483.php">Rayson Ho: "Re: [OMPI users] Open MPI process cannot do send-receive message correctly on a distributed memory cluster"</a>
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
