<?
$subject_val = "Re: [OMPI users] Problem runing MPI on cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 25 17:08:14 2012" -->
<!-- isoreceived="20120925210814" -->
<!-- sent="Tue, 25 Sep 2012 17:08:09 -0400" -->
<!-- isosent="20120925210809" -->
<!-- name="Mariana Vargas Magana" -->
<!-- email="mmarianav_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem runing MPI on cluster" -->
<!-- id="51213613-7F3D-42FD-912B-77EDE6897558_at_yahoo.com.mx" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="6717F490-488F-4946-8E7E-505489A33F64_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem runing MPI on cluster<br>
<strong>From:</strong> Mariana Vargas Magana (<em>mmarianav_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-25 17:08:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20319.php">Ralph Castain: "Re: [OMPI users] Problem runing MPI on cluster"</a>
<li><strong>Previous message:</strong> <a href="20317.php">Jeremiah Willcock: "Re: [OMPI users] Memchecker failure with empty struct type"</a>
<li><strong>In reply to:</strong> <a href="20315.php">Ralph Castain: "Re: [OMPI users] Problem runing MPI on cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20319.php">Ralph Castain: "Re: [OMPI users] Problem runing MPI on cluster"</a>
<li><strong>Reply:</strong> <a href="20319.php">Ralph Castain: "Re: [OMPI users] Problem runing MPI on cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
I think I'am not understanding what you said , here is the hello.py and next the command mpirun&#133;
<br>
<p>Thanks!
<br>
<p>#!/usr/bin/env python
<br>
&quot;&quot;&quot;
<br>
Parallel Hello World
<br>
&quot;&quot;&quot;
<br>
<p>from mpi4py import MPI
<br>
import sys
<br>
<p>size = MPI.COMM_WORLD.Get_size()
<br>
rank = MPI.COMM_WORLD.Get_rank()
<br>
name = MPI.Get_processor_name()
<br>
<p>sys.stdout.write(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&quot;Hello, World! I am process %d of %d on %s.\n&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;% (rank, size, name))
<br>
<p>&nbsp;~/bin/mpirun -np 70 python2.7 helloworld.py 
<br>
Hello, World! I am process 0 of 1 on ferrari.
<br>
Hello, World! I am process 0 of 1 on ferrari.
<br>
Hello, World! I am process 0 of 1 on ferrari.
<br>
Hello, World! I am process 0 of 1 on ferrari.
<br>
Hello, World! I am process 0 of 1 on ferrari.
<br>
Hello, World! I am process 0 of 1 on ferrari.
<br>
Hello, World! I am process 0 of 1 on ferrari.
<br>
Hello, World! I am process 0 of 1 on ferrari.
<br>
Hello, World! I am process 0 of 1 on ferrari.
<br>
Hello, World! I am process 0 of 1 on ferrari.
<br>
Hello, World! I am process 0 of 1 on ferrari.
<br>
Hello, World! I am process 0 of 1 on ferrari.
<br>
Hello, World! I am process 0 of 1 on ferrari.
<br>
<p>On Sep 25, 2012, at 4:46 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The usual reason for this is that you aren't launching these processes correctly. How are you starting your job? Are you using mpirun?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 25, 2012, at 1:43 PM, mariana Vargas &lt;mmarianav_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I fact I found what is the origin of this problem and it is because all processes have rank 0, so I tested and in effect even when I send the clasical Hello.py give the same, how can I solved this?? Do I  re installed every again???
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Help please...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Mariana
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 24, 2012, at 9:13 PM, Mariana Vargas Magana wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes you are right this is what it says but if fact the weird thing is that not all times the error message appears&#133;.I send to 20 nodes and only one gives this message, is this normal&#133;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 24, 2012, at 8:00 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Well, as it says, your processes called MPI_Init, but at least one of them exited without calling MPI_Finalize. That violates the MPI rules and we therefore terminate the remaining processes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Check your code and see how/why you are doing that - you probably have a code path whereby a process exits without calling finalize.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sep 24, 2012, at 4:37 PM, mariana Vargas &lt;mmarianav_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi all
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I get this error when I run a paralelized python code in a cluster, could anyone give me an idea of what is happening? I'am new in this Thanks...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun has exited due to process rank 2 with PID 10259 on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; node f01 exiting improperly. There are two reasons this could occur:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks!!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Dr. Mariana Vargas Magana
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Astroparticule et Cosmologie - Bureau 409B
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PHD student- Universit&#233; Denis Diderot-Paris 7
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 10, rue Alice Domon et L&#233;onie Duquet
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 75205 Paris Cedex - France
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Tel. +33 (0)1 57 27 70 32
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Fax. +33 (0)1 57 27 60 71
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mariana_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20318/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20319.php">Ralph Castain: "Re: [OMPI users] Problem runing MPI on cluster"</a>
<li><strong>Previous message:</strong> <a href="20317.php">Jeremiah Willcock: "Re: [OMPI users] Memchecker failure with empty struct type"</a>
<li><strong>In reply to:</strong> <a href="20315.php">Ralph Castain: "Re: [OMPI users] Problem runing MPI on cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20319.php">Ralph Castain: "Re: [OMPI users] Problem runing MPI on cluster"</a>
<li><strong>Reply:</strong> <a href="20319.php">Ralph Castain: "Re: [OMPI users] Problem runing MPI on cluster"</a>
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
