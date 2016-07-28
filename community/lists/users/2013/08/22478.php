<?
$subject_val = "Re: [OMPI users] Fault Tolerant Features in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 11 14:12:38 2013" -->
<!-- isoreceived="20130811181238" -->
<!-- sent="Sun, 11 Aug 2013 11:12:34 -0700" -->
<!-- isosent="20130811181234" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fault Tolerant Features in OpenMPI" -->
<!-- id="C7D1C850-0910-4665-A70A-18BDE964E7B6_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4221f938887ba4d662763f0a0882e099.squirrel_at_webmail.inf.ufpr.br" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fault Tolerant Features in OpenMPI<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-11 14:12:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22479.php">George Bosilca: "Re: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="22477.php">Edson Tavares de Camargo: "Re: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="22477.php">Edson Tavares de Camargo: "Re: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22479.php">George Bosilca: "Re: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 11, 2013, at 6:33 AM, Edson Tavares de Camargo &lt;etcamargo_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks a lot for your reply, Ralph!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you tell me in what situation the error handler would be called in
</span><br>
<span class="quotelev1">&gt; the 1.6.5 version?
</span><br>
<p>Only when an error is detected in the MPI layer
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I had thought that a failure in a process would be catched by the error
</span><br>
<span class="quotelev1">&gt; handler. Kill, or abort, the process wouldn't the same behaviour?
</span><br>
<p>Not currently - those are not MPI errors, but rather failures detected by the RTE.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the 1.7.4 release if a process was killed the error handler will be
</span><br>
<span class="quotelev1">&gt; catched?
</span><br>
<p>You'll be able to register an errhandler, which will be called if an error such as a process failure is detected.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Edson
</span><br>
<span class="quotelev1">&gt; ---------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The error handler wouldn't be called in that situation - we simply abort
</span><br>
<span class="quotelev2">&gt;&gt; the job. We expect to provide that integration in something like the 1.7.4
</span><br>
<span class="quotelev2">&gt;&gt; release milestone.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 10, 2013, at 11:07 AM, Edson Tavares de Camargo
</span><br>
<span class="quotelev2">&gt;&gt; &lt;etcamargo_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi All,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I was looking for posts about fault tolerant in MPI and I found the post
</span><br>
<span class="quotelev3">&gt;&gt;&gt; below:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2012/06/19658.php">http://www.open-mpi.org/community/lists/users/2012/06/19658.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am trying to understand  all work about failures detection present in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; open-mpi. So, I began with a simple application, a ring application
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (ring.c) , to understand errors handlers. But, it seems me that didn't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; work, why not? (the code is below)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The application (the process) was running in the same machine with the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; following code line:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpiexec -n 4 ring
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; While the  ring application was running, one of the process was killed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, the entire application stopped (ok until here), but didn't show me
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error message. The line if(error != MPI_SUCCESS) should not worked?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am using the mpiexec (OpenRTE) 1.6.5.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Edson
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;time.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int main( int argc, char *argv[] )
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   int rank, size;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   int n = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   int tag = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   int error;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   int root = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   int next, previous;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   double start = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   double finish = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_Status status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_Init( &amp;argc, &amp;argv );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   // error handler
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_Comm_set_errhandler(MPI_COMM_WORLD, MPI_ERRORS_RETURN);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   do {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       next = (rank + 1) % (size);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       n++;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       if(rank != 0){
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           previous = (rank - 1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       }else{
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           previous = size - 1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       if (rank =
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
<li><strong>Next message:</strong> <a href="22479.php">George Bosilca: "Re: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="22477.php">Edson Tavares de Camargo: "Re: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="22477.php">Edson Tavares de Camargo: "Re: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22479.php">George Bosilca: "Re: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
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
