<?
$subject_val = "Re: [OMPI users] Fault Tolerant Features in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 11 09:31:02 2013" -->
<!-- isoreceived="20130811133102" -->
<!-- sent="Sun, 11 Aug 2013 10:33:29 -0300" -->
<!-- isosent="20130811133329" -->
<!-- name="Edson Tavares de Camargo" -->
<!-- email="etcamargo_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fault Tolerant Features in OpenMPI" -->
<!-- id="4221f938887ba4d662763f0a0882e099.squirrel_at_webmail.inf.ufpr.br" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C9E22714-BE92-43F9-A051-0A6D56F85FFF_at_open-mpi.org" -->
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
<strong>From:</strong> Edson Tavares de Camargo (<em>etcamargo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-11 09:33:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22478.php">Ralph Castain: "Re: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="22476.php">Ralph Castain: "Re: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="22476.php">Ralph Castain: "Re: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22478.php">Ralph Castain: "Re: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="22478.php">Ralph Castain: "Re: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="22479.php">George Bosilca: "Re: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks a lot for your reply, Ralph!
<br>
<p>Could you tell me in what situation the error handler would be called in
<br>
the 1.6.5 version?
<br>
<p>I had thought that a failure in a process would be catched by the error
<br>
handler. Kill, or abort, the process wouldn't the same behaviour?
<br>
<p>In the 1.7.4 release if a process was killed the error handler will be
<br>
catched?
<br>
<p>Thanks,
<br>
<p>Edson
<br>
---------------------
<br>
<p><span class="quotelev1">&gt; The error handler wouldn't be called in that situation - we simply abort
</span><br>
<span class="quotelev1">&gt; the job. We expect to provide that integration in something like the 1.7.4
</span><br>
<span class="quotelev1">&gt; release milestone.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 10, 2013, at 11:07 AM, Edson Tavares de Camargo
</span><br>
<span class="quotelev1">&gt; &lt;etcamargo_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi All,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was looking for posts about fault tolerant in MPI and I found the post
</span><br>
<span class="quotelev2">&gt;&gt; below:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2012/06/19658.php">http://www.open-mpi.org/community/lists/users/2012/06/19658.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to understand  all work about failures detection present in
</span><br>
<span class="quotelev2">&gt;&gt; open-mpi. So, I began with a simple application, a ring application
</span><br>
<span class="quotelev2">&gt;&gt; (ring.c) , to understand errors handlers. But, it seems me that didn't
</span><br>
<span class="quotelev2">&gt;&gt; work, why not? (the code is below)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The application (the process) was running in the same machine with the
</span><br>
<span class="quotelev2">&gt;&gt; following code line:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpiexec -n 4 ring
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; While the  ring application was running, one of the process was killed.
</span><br>
<span class="quotelev2">&gt;&gt; So, the entire application stopped (ok until here), but didn't show me
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; error message. The line if(error != MPI_SUCCESS) should not worked?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am using the mpiexec (OpenRTE) 1.6.5.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Edson
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;time.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main( int argc, char *argv[] )
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    int rank, size;
</span><br>
<span class="quotelev2">&gt;&gt;    int n = 0;
</span><br>
<span class="quotelev2">&gt;&gt;    int tag = 0;
</span><br>
<span class="quotelev2">&gt;&gt;    int error;
</span><br>
<span class="quotelev2">&gt;&gt;    int root = 0;
</span><br>
<span class="quotelev2">&gt;&gt;    int next, previous;
</span><br>
<span class="quotelev2">&gt;&gt;    double start = 0;
</span><br>
<span class="quotelev2">&gt;&gt;    double finish = 0;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Status status;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Init( &amp;argc, &amp;argv );
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    // error handler
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Comm_set_errhandler(MPI_COMM_WORLD, MPI_ERRORS_RETURN);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    do {
</span><br>
<span class="quotelev2">&gt;&gt;        next = (rank + 1) % (size);
</span><br>
<span class="quotelev2">&gt;&gt;        n++;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        if(rank != 0){
</span><br>
<span class="quotelev2">&gt;&gt;            previous = (rank - 1);
</span><br>
<span class="quotelev2">&gt;&gt;        }else{
</span><br>
<span class="quotelev2">&gt;&gt;            previous = size - 1;
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        if (rank =
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22478.php">Ralph Castain: "Re: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="22476.php">Ralph Castain: "Re: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="22476.php">Ralph Castain: "Re: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22478.php">Ralph Castain: "Re: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="22478.php">Ralph Castain: "Re: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="22479.php">George Bosilca: "Re: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
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
