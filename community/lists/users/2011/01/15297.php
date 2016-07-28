<?
$subject_val = "Re: [OMPI users] Duplicate independent processes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  6 18:03:11 2011" -->
<!-- isoreceived="20110106230311" -->
<!-- sent="Thu, 6 Jan 2011 18:03:07 -0500" -->
<!-- isosent="20110106230307" -->
<!-- name="Kristian Medri" -->
<!-- email="kmedri_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Duplicate independent processes" -->
<!-- id="000801cbadf5$e1fae4a0$a5f0ade0$_at_carleton.ca" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="FC74A1AA-B246-4FDD-B2B2-A56B00AB67CE_at_open-mpi.org" -->
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
<strong>From:</strong> Kristian Medri (<em>kmedri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-06 18:03:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15298.php">Ralph Castain: "Re: [OMPI users] mpirun --nice 10 prog ??"</a>
<li><strong>Previous message:</strong> <a href="15296.php">David Mathog: "[OMPI users] mpirun --nice 10 prog ??"</a>
<li><strong>In reply to:</strong> <a href="15276.php">Ralph Castain: "Re: [OMPI users] Duplicate independent processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15299.php">Ralph Castain: "Re: [OMPI users] Duplicate independent processes"</a>
<li><strong>Reply:</strong> <a href="15299.php">Ralph Castain: "Re: [OMPI users] Duplicate independent processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It appears to be due to not being able to fully remove MPICH2 on machines
<br>
that have and aged install. Then Open MPI will not overwrite the remaining
<br>
crumbs and is not automagically well configured. I tested this hypothesis on
<br>
an additional pair of recent/aged MPICH2 install machines. Currently
<br>
reinstalling CentOS 5 on the aged MPICH2 install machine.
<br>
<p>The problem is that the same command on the same hardware running the same
<br>
code results in 2 communicating processes on the recent MPICH2 install
<br>
machine that now has Open MPI on it and 2 individual processes on the aged
<br>
MPICH2 install machine that now had Open MPI on it.
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Ralph Castain
<br>
Sent: January 5, 2011 8:09 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Duplicate independent processes
<br>
<p>I'm afraid I don't understand your example - are you saying you provide &quot;-np
<br>
1&quot; and get two processes instead of 1?
<br>
<p>If so, would you please provide info on the type of system where this
<br>
happens? I've never seen it with mpich or ompi
<br>
<p><p>On Jan 5, 2011, at 4:57 PM, Kristian Medri wrote:
<br>
<p><span class="quotelev1">&gt; Any hints on what to look for to get the second machine to behave without
</span><br>
<span class="quotelev1">&gt; duplicate independent processes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;mpirun -np 2 ...&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Provides as expected:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;Using MPI version 2.1, 2 processes
</span><br>
<span class="quotelev1">&gt; .1.
</span><br>
<span class="quotelev1">&gt; .2.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; While on another similar machine:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;Using MPI version 2.2, 1 processes
</span><br>
<span class="quotelev1">&gt; .1.
</span><br>
<span class="quotelev1">&gt; Using MPI version 2.2, 1 processes
</span><br>
<span class="quotelev1">&gt; .1.
</span><br>
<span class="quotelev1">&gt; .2.
</span><br>
<span class="quotelev1">&gt; .2.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On both:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/lib64/openmpi/1.4-gcc/bin/mpirun --version
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Returns:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I looked in the FAQ and searched the list but did not find it yet. When I
</span><br>
<span class="quotelev1">&gt; worked with MPICH2 I also had this happen from time to time. I can provide
</span><br>
<span class="quotelev1">&gt; additional information should it not be as common here.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15298.php">Ralph Castain: "Re: [OMPI users] mpirun --nice 10 prog ??"</a>
<li><strong>Previous message:</strong> <a href="15296.php">David Mathog: "[OMPI users] mpirun --nice 10 prog ??"</a>
<li><strong>In reply to:</strong> <a href="15276.php">Ralph Castain: "Re: [OMPI users] Duplicate independent processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15299.php">Ralph Castain: "Re: [OMPI users] Duplicate independent processes"</a>
<li><strong>Reply:</strong> <a href="15299.php">Ralph Castain: "Re: [OMPI users] Duplicate independent processes"</a>
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
