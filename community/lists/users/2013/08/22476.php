<?
$subject_val = "Re: [OMPI users] Fault Tolerant Features in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 10 23:55:52 2013" -->
<!-- isoreceived="20130811035552" -->
<!-- sent="Sat, 10 Aug 2013 20:55:49 -0700" -->
<!-- isosent="20130811035549" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fault Tolerant Features in OpenMPI" -->
<!-- id="C9E22714-BE92-43F9-A051-0A6D56F85FFF_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9c13abf5b779ce3a193142274ecbccbc.squirrel_at_webmail.inf.ufpr.br" -->
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
<strong>Date:</strong> 2013-08-10 23:55:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22477.php">Edson Tavares de Camargo: "Re: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="22475.php">Lee-Ping Wang: "Re: [OMPI users] Error launching single-node tasks from multiple-node job."</a>
<li><strong>In reply to:</strong> <a href="22461.php">Edson Tavares de Camargo: "[OMPI users] Fault Tolerant Features in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22477.php">Edson Tavares de Camargo: "Re: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="22477.php">Edson Tavares de Camargo: "Re: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The error handler wouldn't be called in that situation - we simply abort the job. We expect to provide that integration in something like the 1.7.4 release milestone.
<br>
<p><p>On Aug 10, 2013, at 11:07 AM, Edson Tavares de Camargo &lt;etcamargo_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was looking for posts about fault tolerant in MPI and I found the post
</span><br>
<span class="quotelev1">&gt; below:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2012/06/19658.php">http://www.open-mpi.org/community/lists/users/2012/06/19658.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to understand  all work about failures detection present in
</span><br>
<span class="quotelev1">&gt; open-mpi. So, I began with a simple application, a ring application
</span><br>
<span class="quotelev1">&gt; (ring.c) , to understand errors handlers. But, it seems me that didn't
</span><br>
<span class="quotelev1">&gt; work, why not? (the code is below)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The application (the process) was running in the same machine with the
</span><br>
<span class="quotelev1">&gt; following code line:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpiexec -n 4 ring
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; While the  ring application was running, one of the process was killed.
</span><br>
<span class="quotelev1">&gt; So, the entire application stopped (ok until here), but didn't show me the
</span><br>
<span class="quotelev1">&gt; error message. The line if(error != MPI_SUCCESS) should not worked?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using the mpiexec (OpenRTE) 1.6.5.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Edson
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;time.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main( int argc, char *argv[] )
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    int rank, size;
</span><br>
<span class="quotelev1">&gt;    int n = 0;
</span><br>
<span class="quotelev1">&gt;    int tag = 0;
</span><br>
<span class="quotelev1">&gt;    int error;
</span><br>
<span class="quotelev1">&gt;    int root = 0;
</span><br>
<span class="quotelev1">&gt;    int next, previous;
</span><br>
<span class="quotelev1">&gt;    double start = 0;
</span><br>
<span class="quotelev1">&gt;    double finish = 0;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI_Status status;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI_Init( &amp;argc, &amp;argv );
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    // error handler
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_set_errhandler(MPI_COMM_WORLD, MPI_ERRORS_RETURN);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    do {
</span><br>
<span class="quotelev1">&gt;        next = (rank + 1) % (size);
</span><br>
<span class="quotelev1">&gt;        n++;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        if(rank != 0){
</span><br>
<span class="quotelev1">&gt;            previous = (rank - 1);
</span><br>
<span class="quotelev1">&gt;        }else{
</span><br>
<span class="quotelev1">&gt;            previous = size - 1;
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        if (rank == root) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            error = MPI_Send( &amp;n, 1, MPI_INT, next, tag, MPI_COMM_WORLD );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            //if a error happens print the message
</span><br>
<span class="quotelev1">&gt;            if(error != MPI_SUCCESS){
</span><br>
<span class="quotelev1">&gt;                printf(&quot;error&quot;);
</span><br>
<span class="quotelev1">&gt;            }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            error = MPI_Recv( &amp;n, 1, MPI_INT, previous, tag,
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD, &amp;status );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            //if a error happens print the message
</span><br>
<span class="quotelev1">&gt;            if(error != MPI_SUCCESS){
</span><br>
<span class="quotelev1">&gt;                printf(&quot;error&quot;);
</span><br>
<span class="quotelev1">&gt;            }
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;        else {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            error = MPI_Recv( &amp;n, 1, MPI_INT, previous, tag,
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD, &amp;status );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            //if a error happens print the message
</span><br>
<span class="quotelev1">&gt;            if(error != MPI_SUCCESS){
</span><br>
<span class="quotelev1">&gt;                printf(&quot;error&quot;);
</span><br>
<span class="quotelev1">&gt;            }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            error = MPI_Send( &amp;n, 1, MPI_INT, next, tag, MPI_COMM_WORLD );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            //if a error happens print the message
</span><br>
<span class="quotelev1">&gt;            if(error != MPI_SUCCESS){
</span><br>
<span class="quotelev1">&gt;                printf(&quot;error&quot;);
</span><br>
<span class="quotelev1">&gt;            }
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;        printf( &quot;Process %d got %d\n&quot;, rank, n );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        // wait a bit
</span><br>
<span class="quotelev1">&gt;        start = MPI_Wtime();
</span><br>
<span class="quotelev1">&gt;        finish = start;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        while ( (finish - start) &lt; 1 ){
</span><br>
<span class="quotelev1">&gt;            finish =  MPI_Wtime();
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    } while (n &lt; 100);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;    return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; ----------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22477.php">Edson Tavares de Camargo: "Re: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="22475.php">Lee-Ping Wang: "Re: [OMPI users] Error launching single-node tasks from multiple-node job."</a>
<li><strong>In reply to:</strong> <a href="22461.php">Edson Tavares de Camargo: "[OMPI users] Fault Tolerant Features in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22477.php">Edson Tavares de Camargo: "Re: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="22477.php">Edson Tavares de Camargo: "Re: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
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
