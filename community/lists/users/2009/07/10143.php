<?
$subject_val = "Re: [OMPI users] strange IMB runs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 30 10:10:55 2009" -->
<!-- isoreceived="20090730141055" -->
<!-- sent="Thu, 30 Jul 2009 10:08:46 -0400" -->
<!-- isosent="20090730140846" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] strange IMB runs" -->
<!-- id="D76EC769-77F5-400A-9F1A-CB35B847043C_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A708D0A.3020406_at_web.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] strange IMB runs<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-30 10:08:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10144.php">Ricardo Fonseca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran withMPI_REDUCE	/ MPI_ALLREDUCE"</a>
<li><strong>Previous message:</strong> <a href="10142.php">Ralph Castain: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>In reply to:</strong> <a href="10129.php">Dorian Krause: "Re: [OMPI users] strange IMB runs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10145.php">Michael Di Domenico: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>Reply:</strong> <a href="10145.php">Michael Di Domenico: "Re: [OMPI users] strange IMB runs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The leave pinned will not help in this context. It can only help for  
<br>
devices capable of real RMA operations and that require pinned memory,  
<br>
which unfortunately is not the case for TCP. What is [really] strange  
<br>
about your results is that you get a 4 times better bandwidth over TCP  
<br>
than over shared memory. Over TCP there are 2 extra memory copies  
<br>
(compared with sm) plus a bunch of syscalls, so there is absolutely no  
<br>
reason to get better performance.
<br>
<p>The Open MPI version is something you compiled or it came installed  
<br>
with the OS? If you compiled it can you please provide us the  
<br>
configure line?
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jul 29, 2009, at 13:55 , Dorian Krause wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --mca mpi_leave_pinned 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; might help. Take a look at the FAQ for various tuning parameters.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael Di Domenico wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure I understand what's actually happened here.  I'm running
</span><br>
<span class="quotelev2">&gt;&gt; IMB on an HP superdome, just comparing the PingPong benchmark
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; HP-MPI v2.3
</span><br>
<span class="quotelev2">&gt;&gt; Max ~ 700-800MB/sec
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI v1.3
</span><br>
<span class="quotelev2">&gt;&gt; -mca btl self,sm - Max ~ 125-150MB/sec
</span><br>
<span class="quotelev2">&gt;&gt; -mca btl self,tcp - Max ~ 500-550MB/sec
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this behavior expected?  Are there any tunables to get the OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; sockets up near HP-MPI?
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="10144.php">Ricardo Fonseca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran withMPI_REDUCE	/ MPI_ALLREDUCE"</a>
<li><strong>Previous message:</strong> <a href="10142.php">Ralph Castain: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>In reply to:</strong> <a href="10129.php">Dorian Krause: "Re: [OMPI users] strange IMB runs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10145.php">Michael Di Domenico: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>Reply:</strong> <a href="10145.php">Michael Di Domenico: "Re: [OMPI users] strange IMB runs"</a>
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
