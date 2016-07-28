<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun  7 08:21:23 2007" -->
<!-- isoreceived="20070607122123" -->
<!-- sent="Thu, 7 Jun 2007 08:21:08 -0400" -->
<!-- isosent="20070607122108" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI with multiple threads (MPI_THREAD_MULTIPLE)" -->
<!-- id="80C58790-0E01-417C-9777-24124D5F0789_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1181083967.4665e93f0e99e_at_webmail.ksu.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-07 08:21:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3396.php">Charles Williams: "[OMPI users] Problems configuring petsc-dev with openmpi-1.2.3a0r14886"</a>
<li><strong>Previous message:</strong> <a href="3394.php">Jeff Squyres: "Re: [OMPI users] open-mpi with ifort in debug..trouble"</a>
<li><strong>In reply to:</strong> <a href="3379.php">smairal_at_[hidden]: "[OMPI users] OpenMPI with multiple threads (MPI_THREAD_MULTIPLE)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This issue was just recently discussed on this list -- check out the  
<br>
thread here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/users/2007/05/3323.php">http://www.open-mpi.org/community/lists/users/2007/05/3323.php</a>
<br>
<p><p>On Jun 5, 2007, at 6:52 PM, smairal_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I am trying a program in which I have 2 MPI nodes and each MPI node  
</span><br>
<span class="quotelev1">&gt; has
</span><br>
<span class="quotelev1">&gt; 2 threads:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Main node-thread                         Receive Thread
</span><br>
<span class="quotelev1">&gt; -----------------                       ----------------
</span><br>
<span class="quotelev1">&gt; MPI_Init_Thread(MPI_THREAD_MULTIPLE);
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; LOOP:                                  LOOP:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     THREAD-BARRIER                           THREAD-BARRIER
</span><br>
<span class="quotelev1">&gt;     MPI_Send();                              MPI_Recv();
</span><br>
<span class="quotelev1">&gt;     goto LOOP;                               goto LOOP;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The thread-barrier ensures that the 2 threads complete the previous
</span><br>
<span class="quotelev1">&gt; iteration before moving ahead with this one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get the following error SOMETIMES (while sometimes the program runs
</span><br>
<span class="quotelev1">&gt; properly):
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Recv
</span><br>
<span class="quotelev1">&gt; *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; *** MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Somewhere I read that MPI_THREAD_MULTIPLE is not properly tested with
</span><br>
<span class="quotelev1">&gt; OpenMPI. Can someone tell me whether I am making some mistake or is
</span><br>
<span class="quotelev1">&gt; there any bug with MPI_THREAD_MULTIPLE?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Thanks and Regards,
</span><br>
<span class="quotelev1">&gt; Sarang.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3396.php">Charles Williams: "[OMPI users] Problems configuring petsc-dev with openmpi-1.2.3a0r14886"</a>
<li><strong>Previous message:</strong> <a href="3394.php">Jeff Squyres: "Re: [OMPI users] open-mpi with ifort in debug..trouble"</a>
<li><strong>In reply to:</strong> <a href="3379.php">smairal_at_[hidden]: "[OMPI users] OpenMPI with multiple threads (MPI_THREAD_MULTIPLE)"</a>
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
