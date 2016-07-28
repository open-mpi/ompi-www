<?
$subject_val = "Re: [OMPI users] Open MPI process cannot do send-receive message correctly on a distributed memory cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 30 11:33:22 2011" -->
<!-- isoreceived="20110930153322" -->
<!-- sent="Fri, 30 Sep 2011 11:33:16 -0400" -->
<!-- isosent="20110930153316" -->
<!-- name="Rayson Ho" -->
<!-- email="raysonlogin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI process cannot do send-receive message correctly on a distributed memory cluster" -->
<!-- id="CAHwLALNY6b0fo4NABvLg9=w47Gd8tDTF7EBYBp9Rb8xC6QNajg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="SNT134-W5357EADB2E90E5983A4DDDCBF70_at_phx.gbl" -->
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
<strong>From:</strong> Rayson Ho (<em>raysonlogin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-30 11:33:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17484.php">Jack Bryan: "Re: [OMPI users] Open MPI process cannot do send-receive message correctly on a distributed memory cluster"</a>
<li><strong>Previous message:</strong> <a href="17482.php">Jack Bryan: "[OMPI users] Open MPI process cannot do send-receive message correctly on a distributed memory cluster"</a>
<li><strong>In reply to:</strong> <a href="17482.php">Jack Bryan: "[OMPI users] Open MPI process cannot do send-receive message correctly on a distributed memory cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17484.php">Jack Bryan: "Re: [OMPI users] Open MPI process cannot do send-receive message correctly on a distributed memory cluster"</a>
<li><strong>Reply:</strong> <a href="17484.php">Jack Bryan: "Re: [OMPI users] Open MPI process cannot do send-receive message correctly on a distributed memory cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can use a debugger (just gdb will do, no TotalView needed) to find
<br>
out which MPI send &amp; receive calls are hanging the code on the
<br>
distributed cluster, and see if the send &amp; receive pair is due to a
<br>
problem described at:
<br>
<p>Deadlock avoidance in your MPI programs:
<br>
<a href="http://www.cs.ucsb.edu/~hnielsen/cs140/mpi-deadlocks.html">http://www.cs.ucsb.edu/~hnielsen/cs140/mpi-deadlocks.html</a>
<br>
<p>Rayson
<br>
<p>=================================
<br>
Grid Engine / Open Grid Scheduler
<br>
<a href="http://gridscheduler.sourceforge.net">http://gridscheduler.sourceforge.net</a>
<br>
<p>Wikipedia Commons
<br>
<a href="http://commons.wikimedia.org/wiki/User:Raysonho">http://commons.wikimedia.org/wiki/User:Raysonho</a>
<br>
<p><p>On Fri, Sep 30, 2011 at 11:06 AM, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a Open MPI program, which works well on a Linux shared memory
</span><br>
<span class="quotelev1">&gt; multicore (2 x 6 cores) machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But, it does not work well on a distributed cluster with Linux Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I found that the the process sends out some messages to other processes,
</span><br>
<span class="quotelev1">&gt; which can not receive them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is the possible reason ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do not change anything of the program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help is really appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
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
<p>==================================================
<br>
Open Grid Scheduler - The Official Open Source Grid Engine
<br>
<a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17484.php">Jack Bryan: "Re: [OMPI users] Open MPI process cannot do send-receive message correctly on a distributed memory cluster"</a>
<li><strong>Previous message:</strong> <a href="17482.php">Jack Bryan: "[OMPI users] Open MPI process cannot do send-receive message correctly on a distributed memory cluster"</a>
<li><strong>In reply to:</strong> <a href="17482.php">Jack Bryan: "[OMPI users] Open MPI process cannot do send-receive message correctly on a distributed memory cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17484.php">Jack Bryan: "Re: [OMPI users] Open MPI process cannot do send-receive message correctly on a distributed memory cluster"</a>
<li><strong>Reply:</strong> <a href="17484.php">Jack Bryan: "Re: [OMPI users] Open MPI process cannot do send-receive message correctly on a distributed memory cluster"</a>
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
