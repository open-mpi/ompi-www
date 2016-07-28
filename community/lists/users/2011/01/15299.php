<?
$subject_val = "Re: [OMPI users] Duplicate independent processes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  6 18:43:30 2011" -->
<!-- isoreceived="20110106234330" -->
<!-- sent="Thu, 6 Jan 2011 16:43:20 -0700" -->
<!-- isosent="20110106234320" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Duplicate independent processes" -->
<!-- id="121B0911-C0FA-4215-992F-DA3F12149324_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="000801cbadf5$e1fae4a0$a5f0ade0$_at_carleton.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Duplicate independent processes<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-06 18:43:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15300.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>Previous message:</strong> <a href="15298.php">Ralph Castain: "Re: [OMPI users] mpirun --nice 10 prog ??"</a>
<li><strong>In reply to:</strong> <a href="15297.php">Kristian Medri: "Re: [OMPI users] Duplicate independent processes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sounds to me like you are getting a heavy dose of version contamination. I can't see any way for a single instance of mpirun to launch two procs given an input line of 
<br>
<p>mpirun -np 1 my_prog
<br>
<p><p>There isn't any way OMPI can (or would) uninstall a prior installation of MPICH2, or any other MPI for that matter. Many users maintain both on their systems without problem by simply installing them to different locations and letting $PATH and friends keep things separated.
<br>
<p><p>On Jan 6, 2011, at 4:03 PM, Kristian Medri wrote:
<br>
<p><span class="quotelev1">&gt; It appears to be due to not being able to fully remove MPICH2 on machines
</span><br>
<span class="quotelev1">&gt; that have and aged install. Then Open MPI will not overwrite the remaining
</span><br>
<span class="quotelev1">&gt; crumbs and is not automagically well configured. I tested this hypothesis on
</span><br>
<span class="quotelev1">&gt; an additional pair of recent/aged MPICH2 install machines. Currently
</span><br>
<span class="quotelev1">&gt; reinstalling CentOS 5 on the aged MPICH2 install machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is that the same command on the same hardware running the same
</span><br>
<span class="quotelev1">&gt; code results in 2 communicating processes on the recent MPICH2 install
</span><br>
<span class="quotelev1">&gt; machine that now has Open MPI on it and 2 individual processes on the aged
</span><br>
<span class="quotelev1">&gt; MPICH2 install machine that now had Open MPI on it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: January 5, 2011 8:09 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Duplicate independent processes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm afraid I don't understand your example - are you saying you provide &quot;-np
</span><br>
<span class="quotelev1">&gt; 1&quot; and get two processes instead of 1?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If so, would you please provide info on the type of system where this
</span><br>
<span class="quotelev1">&gt; happens? I've never seen it with mpich or ompi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 5, 2011, at 4:57 PM, Kristian Medri wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any hints on what to look for to get the second machine to behave without
</span><br>
<span class="quotelev2">&gt;&gt; duplicate independent processes?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpirun -np 2 ...&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Provides as expected:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Using MPI version 2.1, 2 processes
</span><br>
<span class="quotelev2">&gt;&gt; .1.
</span><br>
<span class="quotelev2">&gt;&gt; .2.&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; While on another similar machine:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Using MPI version 2.2, 1 processes
</span><br>
<span class="quotelev2">&gt;&gt; .1.
</span><br>
<span class="quotelev2">&gt;&gt; Using MPI version 2.2, 1 processes
</span><br>
<span class="quotelev2">&gt;&gt; .1.
</span><br>
<span class="quotelev2">&gt;&gt; .2.
</span><br>
<span class="quotelev2">&gt;&gt; .2.&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On both:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/openmpi/1.4-gcc/bin/mpirun --version
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Returns:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun (Open MPI) 1.4
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I looked in the FAQ and searched the list but did not find it yet. When I
</span><br>
<span class="quotelev2">&gt;&gt; worked with MPICH2 I also had this happen from time to time. I can provide
</span><br>
<span class="quotelev2">&gt;&gt; additional information should it not be as common here.
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15300.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>Previous message:</strong> <a href="15298.php">Ralph Castain: "Re: [OMPI users] mpirun --nice 10 prog ??"</a>
<li><strong>In reply to:</strong> <a href="15297.php">Kristian Medri: "Re: [OMPI users] Duplicate independent processes"</a>
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
