<?
$subject_val = "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 29 09:49:35 2010" -->
<!-- isoreceived="20100729134935" -->
<!-- sent="Thu, 29 Jul 2010 07:49:24 -0600" -->
<!-- isosent="20100729134924" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core" -->
<!-- id="CEE37043-A6F9-48AE-8B5D-4B68E7276058_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C516155.1000207_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-29 09:49:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13868.php">David Akin: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<li><strong>Previous message:</strong> <a href="13866.php">Terry Dontje: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<li><strong>In reply to:</strong> <a href="13866.php">Terry Dontje: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13868.php">David Akin: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<li><strong>Reply:</strong> <a href="13868.php">David Akin: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<li><strong>Reply:</strong> <a href="13870.php">Terry Dontje: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 29, 2010, at 5:09 AM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; How are you running it when the threads are all on one core?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you are specifying --bind-to-core, then of course all the threads will be on one core since we bind the process (not the thread). If you are specifying -mca mpi_paffinity_alone 1, then the same behavior results.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Generally, if you want to bind threads, the only way to do it is with a rank file. We -might- figure out a way to provide an interface for thread-level binding, but I'm not sure about that right now. As things stand, OMPI has no visibility into the fact that your app spawned threads.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev1">&gt; Huh???  That's not completely correct.  If you have a multiple socket machine you could to -bind-to-socket -bysocket and spread the processes that way.  Also couldn't you use the -cpus-per-proc with -bind-to-core to get a process to bind to a non-socket amount of cpus?
</span><br>
<p>Yes, you could do bind-to-socket, though that still constrains the threads to only that one socket. What was asked about here was the ability to bind-to-core at the thread level, and that is something OMPI doesn't support.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is all documented in the mpirun manpage.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That being said, I also am confused, like Ralph, as to why no options is causing your code bind.  Maybe add a --report-bindings to your mpirun line to see what OMPI thinks it is doing in this regard?
</span><br>
<p>This is a good suggestion - I'm beginning to believe that the binding is happening in the user's app and not OMPI.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 28, 2010, at 5:47 PM, David Akin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm trying to get the OpenMP portion of the code below to run
</span><br>
<span class="quotelev3">&gt;&gt;&gt; multicore on a couple of 8 core nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Good news: multiple threads are being spawned on each node in the run.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bad news: each of the threads only runs on a single core, leaving 7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cores basically idle.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorta good news: if I provide a rank file I get the threads running on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different cores within each node (PITA.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here's the first lines of output.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/mpi/gcc/openmpi-1.4-qlc/bin/mpirun -host c005,c006 -np 2 -rf
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank.file -x OMP_NUM_THREADS=4 hybrid4.gcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello from thread 2 out of 4 from process 1 out of 2 on c006.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt; another parallel region:       name:c006.local MPI_RANK_ID=1 OMP_THREAD_ID=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello from thread 3 out of 4 from process 1 out of 2 on c006.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt; another parallel region:       name:c006.local MPI_RANK_ID=1 OMP_THREAD_ID=3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello from thread 1 out of 4 from process 1 out of 2 on c006.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt; another parallel region:       name:c006.local MPI_RANK_ID=1 OMP_THREAD_ID=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello from thread 1 out of 4 from process 0 out of 2 on c005.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt; another parallel region:       name:c005.local MPI_RANK_ID=0 OMP_THREAD_ID=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello from thread 3 out of 4 from process 0 out of 2 on c005.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello from thread 2 out of 4 from process 0 out of 2 on c005.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt; another parallel region:       name:c005.local MPI_RANK_ID=0 OMP_THREAD_ID=3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; another parallel region:       name:c005.local MPI_RANK_ID=0 OMP_THREAD_ID=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello from thread 0 out of 4 from process 0 out of 2 on c005.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt; another parallel region:       name:c005.local MPI_RANK_ID=0 OMP_THREAD_ID=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello from thread 0 out of 4 from process 1 out of 2 on c006.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt; another parallel region:       name:c006.local MPI_RANK_ID=1 OMP_THREAD_ID=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; another parallel region:       name:c005.local MPI_RANK_ID=0 OMP_THREAD_ID=3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; another parallel region:       name:c005.local MPI_RANK_ID=0 OMP_THREAD_ID=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; another parallel region:       name:c005.local MPI_RANK_ID=0 OMP_THREAD_ID=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; another parallel region:       name:c006.local MPI_RANK_ID=1 OMP_THREAD_ID=3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; another parallel region:       name:c005.local MPI_RANK_ID=0 OMP_THREAD_ID=3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; another parallel region:       name:c005.local MPI_RANK_ID=0 OMP_THREAD_ID=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; another parallel region:       name:c006.local MPI_RANK_ID=1 OMP_THREAD_ID=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; another parallel region:       name:c006.local MPI_RANK_ID=1 OMP_THREAD_ID=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here's the simple code:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;omp.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int main(int argc, char *argv[]) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  int numprocs, rank, namelen;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  char processor_name[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  int iam = 0, np = 1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  char name[MPI_MAX_PROCESSOR_NAME];   /* MPI_MAX_PROCESSOR_NAME ==
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 128         */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  int O_ID;                            /* OpenMP thread ID
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  int M_ID;                            /* MPI rank ID
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  int rtn_val;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Comm_size(MPI_COMM_WORLD, &amp;numprocs);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Get_processor_name(processor_name, &amp;namelen);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #pragma omp parallel default(shared) private(iam, np,O_ID)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    np = omp_get_num_threads();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    iam = omp_get_thread_num();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    printf(&quot;Hello from thread %d out of %d from process %d out of %d on %s\n&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           iam, np, rank, numprocs, processor_name);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    int i=0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    int j=0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    double counter=0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    for(i =0;i&lt;99999999;i++)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             O_ID = omp_get_thread_num();          /* get OpenMP
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thread ID                 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MPI_Get_processor_name(name,&amp;namelen);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             rtn_val = MPI_Comm_rank(MPI_COMM_WORLD,&amp;M_ID);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             printf(&quot;another parallel region:       name:%s
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_RANK_ID=%d OMP_THREAD_ID=%d\n&quot;, name,M_ID,O_ID);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             for(j = 0;j&lt;999999999;j++)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               counter=counter+i;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; &lt;Mail Attachment.gif&gt;
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.650.633.7054
</span><br>
<span class="quotelev1">&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden]
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13867/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13868.php">David Akin: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<li><strong>Previous message:</strong> <a href="13866.php">Terry Dontje: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<li><strong>In reply to:</strong> <a href="13866.php">Terry Dontje: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13868.php">David Akin: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<li><strong>Reply:</strong> <a href="13868.php">David Akin: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<li><strong>Reply:</strong> <a href="13870.php">Terry Dontje: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
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
