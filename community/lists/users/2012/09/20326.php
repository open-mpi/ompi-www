<?
$subject_val = "Re: [OMPI users] Problem runing MPI on cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 26 00:19:01 2012" -->
<!-- isoreceived="20120926041901" -->
<!-- sent="Tue, 25 Sep 2012 21:18:55 -0700" -->
<!-- isosent="20120926041855" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem runing MPI on cluster" -->
<!-- id="CAMD57oc4NK2+DXRF9AkpBbGTMAjJq8heBq22Xe6X+xYsGOBL+A_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="A295EFAB-EC5F-467D-ACFC-569DE41699DE_at_yahoo.com.mx" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-26 00:18:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20327.php">Jeff Squyres: "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<li><strong>Previous message:</strong> <a href="20325.php">Rajesh J: "[OMPI users] error from MPI_Allgather"</a>
<li><strong>In reply to:</strong> <a href="20324.php">Mariana Vargas Magana: "Re: [OMPI users] Problem runing MPI on cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20328.php">Jeff Squyres: "Re: [OMPI users] Problem runing MPI on cluster (mpi4py)"</a>
<li><strong>Reply:</strong> <a href="20328.php">Jeff Squyres: "Re: [OMPI users] Problem runing MPI on cluster (mpi4py)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, not sure what I can advise. Check to ensure that your LD_LIBRARY_PATH
<br>
is pointing to the same installation where your mpirun is located. For
<br>
whatever reason, the processes think they are singletons - i.e., that they
<br>
were not actually started by mpirun.
<br>
<p>You might also want to ask the mpi4py folks - we aren't very familiar with
<br>
that package over here. It could be that you need to configure it for
<br>
OpenMPI as opposed to mpich.
<br>
<p><p>On Tue, Sep 25, 2012 at 7:08 PM, Mariana Vargas Magana &lt;
<br>
mmarianav_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes I am sure I read from a mpi4py guide I already check the examples if
</span><br>
<span class="quotelev1">&gt; fact this an example extracted from a guide&#133;!! Evenmore this example if I
</span><br>
<span class="quotelev1">&gt; use with mpich2 it runs very nicely, even though for the other code I need
</span><br>
<span class="quotelev1">&gt; openmpi working =s
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mariana
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 25, 2012, at 8:00 PM, Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't think that is true, but I suggest you check the mpi4py examples. I
</span><br>
<span class="quotelev1">&gt; believe all import does is import function definitions - it doesn't execute
</span><br>
<span class="quotelev1">&gt; anything.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent from my iPad
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 25, 2012, at 2:41 PM, mariana Vargas &lt;mmarianav_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_init() is actually called when import MPI module from MPi package...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 25, 2012, at 5:17 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You forgot to call MPI_Init at the beginning of your program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 25, 2012, at 2:08 PM, Mariana Vargas Magana &lt;mmarianav_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; I think I'am not understanding what you said , here is the hello.py and
</span><br>
<span class="quotelev1">&gt; next the command mpirun&#133;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #!/usr/bin/env python
</span><br>
<span class="quotelev1">&gt; &quot;&quot;&quot;
</span><br>
<span class="quotelev1">&gt; Parallel Hello World
</span><br>
<span class="quotelev1">&gt; &quot;&quot;&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; from mpi4py import MPI
</span><br>
<span class="quotelev1">&gt; import sys
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; size = MPI.COMM_WORLD.Get_size()
</span><br>
<span class="quotelev1">&gt; rank = MPI.COMM_WORLD.Get_rank()
</span><br>
<span class="quotelev1">&gt; name = MPI.Get_processor_name()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sys.stdout.write(
</span><br>
<span class="quotelev1">&gt;     &quot;Hello, World! I am process %d of %d on %s.\n&quot;
</span><br>
<span class="quotelev1">&gt;     % (rank, size, name))
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ~/bin/mpirun -np 70 python2.7 helloworld.py
</span><br>
<span class="quotelev1">&gt; Hello, World! I am process 0 of 1 on ferrari.
</span><br>
<span class="quotelev1">&gt; Hello, World! I am process 0 of 1 on ferrari.
</span><br>
<span class="quotelev1">&gt; Hello, World! I am process 0 of 1 on ferrari.
</span><br>
<span class="quotelev1">&gt; Hello, World! I am process 0 of 1 on ferrari.
</span><br>
<span class="quotelev1">&gt; Hello, World! I am process 0 of 1 on ferrari.
</span><br>
<span class="quotelev1">&gt; Hello, World! I am process 0 of 1 on ferrari.
</span><br>
<span class="quotelev1">&gt; Hello, World! I am process 0 of 1 on ferrari.
</span><br>
<span class="quotelev1">&gt; Hello, World! I am process 0 of 1 on ferrari.
</span><br>
<span class="quotelev1">&gt; Hello, World! I am process 0 of 1 on ferrari.
</span><br>
<span class="quotelev1">&gt; Hello, World! I am process 0 of 1 on ferrari.
</span><br>
<span class="quotelev1">&gt; Hello, World! I am process 0 of 1 on ferrari.
</span><br>
<span class="quotelev1">&gt; Hello, World! I am process 0 of 1 on ferrari.
</span><br>
<span class="quotelev1">&gt; Hello, World! I am process 0 of 1 on ferrari.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 25, 2012, at 4:46 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The usual reason for this is that you aren't launching these processes
</span><br>
<span class="quotelev1">&gt; correctly. How are you starting your job? Are you using mpirun?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 25, 2012, at 1:43 PM, mariana Vargas &lt;mmarianav_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I fact I found what is the origin of this problem and it is because all
</span><br>
<span class="quotelev1">&gt; processes have rank 0, so I tested and in effect even when I send the
</span><br>
<span class="quotelev1">&gt; clasical Hello.py give the same, how can I solved this?? Do I  re installed
</span><br>
<span class="quotelev1">&gt; every again???
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Help please...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mariana
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 24, 2012, at 9:13 PM, Mariana Vargas Magana wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes you are right this is what it says but if fact the weird thing is that
</span><br>
<span class="quotelev1">&gt; not all times the error message appears&#133;.I send to 20 nodes and only one
</span><br>
<span class="quotelev1">&gt; gives this message, is this normal&#133;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 24, 2012, at 8:00 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well, as it says, your processes called MPI_Init, but at least one of them
</span><br>
<span class="quotelev1">&gt; exited without calling MPI_Finalize. That violates the MPI rules and we
</span><br>
<span class="quotelev1">&gt; therefore terminate the remaining processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Check your code and see how/why you are doing that - you probably have a
</span><br>
<span class="quotelev1">&gt; code path whereby a process exits without calling finalize.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 24, 2012, at 4:37 PM, mariana Vargas &lt;mmarianav_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get this error when I run a paralelized python code in a cluster, could
</span><br>
<span class="quotelev1">&gt; anyone give me an idea of what is happening? I'am new in this Thanks...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 2 with PID 10259 on
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; node f01 exiting improperly. There are two reasons this could occur:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!!
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
<span class="quotelev1">&gt; Dr. Mariana Vargas Magana
</span><br>
<span class="quotelev1">&gt; Astroparticule et Cosmologie - Bureau 409B
</span><br>
<span class="quotelev1">&gt; PHD student- Universit&#233; Denis Diderot-Paris 7
</span><br>
<span class="quotelev1">&gt; 10, rue Alice Domon et L&#233;onie Duquet
</span><br>
<span class="quotelev1">&gt; 75205 Paris Cedex - France
</span><br>
<span class="quotelev1">&gt; Tel. +33 (0)1 57 27 70 32
</span><br>
<span class="quotelev1">&gt; Fax. +33 (0)1 57 27 60 71
</span><br>
<span class="quotelev1">&gt; mariana_at_[hidden]
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20326/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20327.php">Jeff Squyres: "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<li><strong>Previous message:</strong> <a href="20325.php">Rajesh J: "[OMPI users] error from MPI_Allgather"</a>
<li><strong>In reply to:</strong> <a href="20324.php">Mariana Vargas Magana: "Re: [OMPI users] Problem runing MPI on cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20328.php">Jeff Squyres: "Re: [OMPI users] Problem runing MPI on cluster (mpi4py)"</a>
<li><strong>Reply:</strong> <a href="20328.php">Jeff Squyres: "Re: [OMPI users] Problem runing MPI on cluster (mpi4py)"</a>
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
