<?
$subject_val = "Re: [OMPI users] trouble_MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 18 17:30:00 2012" -->
<!-- isoreceived="20120918213000" -->
<!-- sent="Tue, 18 Sep 2012 14:29:49 -0700" -->
<!-- isosent="20120918212949" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] trouble_MPI" -->
<!-- id="D16833DD-F610-43DA-9F2B-F8FF8A3352C4_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAKc9zV8avSN+QK2JixofC9EYo-q+c+viuzO-xqj5Y=HDDnxXQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] trouble_MPI<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-18 17:29:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20241.php">Brian Budge: "Re: [OMPI users] trouble_MPI"</a>
<li><strong>Previous message:</strong> <a href="20239.php">Alidoust: "[OMPI users] trouble_MPI"</a>
<li><strong>In reply to:</strong> <a href="20239.php">Alidoust: "[OMPI users] trouble_MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20241.php">Brian Budge: "Re: [OMPI users] trouble_MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As the error states, your code is segfaulting - your best way to find out where might be to use a debugger (e.g., gdb) on the core dump, or use a parallel debugger if you have one.
<br>
<p><p>On Sep 18, 2012, at 2:14 PM, Alidoust &lt;phymalidoust_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dear Madam/Sir,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a serial Fortran code (f90), dealing with matrix diagonalizing subroutines, and recently got its parallel version to be faster in some unfeasible parts via the serial program. 
</span><br>
<span class="quotelev1">&gt; I have been using the following commands for initializing MPI in the code
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt;     call MPI_INIT(ierr)
</span><br>
<span class="quotelev1">&gt;     call MPI_COMM_SIZE(MPI_COMM_WORLD, p, ierr)
</span><br>
<span class="quotelev1">&gt;     call MPI_COMM_RANK(MPI_COMM_WORLD, my_rank, ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CPU requirement &gt;&gt; pmem=1500mb,nodes=5:ppn=8 &lt;&lt;
</span><br>
<span class="quotelev1">&gt; -------------------
</span><br>
<span class="quotelev1">&gt; Everything looks OK when matrix dimensions are less than 1000x1000. When I increase the matrix dimensions to some larger values the parallel code gets the following error
</span><br>
<span class="quotelev1">&gt; ------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 6 with PID 1566 on node node1082 exited on signal 11 (Segmentation fault) 
</span><br>
<span class="quotelev1">&gt; ------------------
</span><br>
<span class="quotelev1">&gt; There is no such error with the serial version even for larger matrix dimensions than 2400x2400. I then thought it might be raised by the number of nodes and memory space I'm requiring.  Then changed it as follows
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; pmem=10gb,nodes=20:ppn=2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which is more or less similar to what I'm using for serial jobs (mem=10gb,nodes=1:ppn=1). But the problem persists still. Is there any limitation on MPI subroutines for transferring data size or the issue would be raised by some cause else? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best of Regards,
</span><br>
<span class="quotelev1">&gt; Mohammad
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20240/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20241.php">Brian Budge: "Re: [OMPI users] trouble_MPI"</a>
<li><strong>Previous message:</strong> <a href="20239.php">Alidoust: "[OMPI users] trouble_MPI"</a>
<li><strong>In reply to:</strong> <a href="20239.php">Alidoust: "[OMPI users] trouble_MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20241.php">Brian Budge: "Re: [OMPI users] trouble_MPI"</a>
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
