<?
$subject_val = "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 29 10:46:32 2010" -->
<!-- isoreceived="20100729144632" -->
<!-- sent="Thu, 29 Jul 2010 08:46:23 -0600" -->
<!-- isosent="20100729144623" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core" -->
<!-- id="DF44D846-678F-4092-AF3A-E63600158D69_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTin9oG43hvuRmgWVU+EXMf7GDb9oM0DfPWctqy6C_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-07-29 10:46:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13870.php">Terry Dontje: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<li><strong>Previous message:</strong> <a href="13868.php">David Akin: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<li><strong>In reply to:</strong> <a href="13868.php">David Akin: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13870.php">Terry Dontje: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you check, I expect you will find that your threads and processes are not bound to a core, but are now constrained to stay within a socket.
<br>
<p>This means that if you run more threads than cores in a socket, you will see threads idled due to contention.
<br>
<p><p>On Jul 29, 2010, at 8:29 AM, David Akin wrote:
<br>
<p><span class="quotelev1">&gt; Adding -bysocket -bind-to-socket worked! Now to figure out why that
</span><br>
<span class="quotelev1">&gt; is? I also assumed it was my code. You can try my simple example code
</span><br>
<span class="quotelev1">&gt; below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Jul 29, 2010 at 8:49 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 29, 2010, at 5:09 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; How are you running it when the threads are all on one core?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you are specifying --bind-to-core, then of course all the threads will be
</span><br>
<span class="quotelev2">&gt;&gt; on one core since we bind the process (not the thread). If you are
</span><br>
<span class="quotelev2">&gt;&gt; specifying -mca mpi_paffinity_alone 1, then the same behavior results.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Generally, if you want to bind threads, the only way to do it is with a rank
</span><br>
<span class="quotelev2">&gt;&gt; file. We -might- figure out a way to provide an interface for thread-level
</span><br>
<span class="quotelev2">&gt;&gt; binding, but I'm not sure about that right now. As things stand, OMPI has no
</span><br>
<span class="quotelev2">&gt;&gt; visibility into the fact that your app spawned threads.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Huh???  That's not completely correct.  If you have a multiple socket
</span><br>
<span class="quotelev2">&gt;&gt; machine you could to -bind-to-socket -bysocket and spread the processes that
</span><br>
<span class="quotelev2">&gt;&gt; way.  Also couldn't you use the -cpus-per-proc with -bind-to-core to get a
</span><br>
<span class="quotelev2">&gt;&gt; process to bind to a non-socket amount of cpus?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes, you could do bind-to-socket, though that still constrains the threads
</span><br>
<span class="quotelev2">&gt;&gt; to only that one socket. What was asked about here was the ability to
</span><br>
<span class="quotelev2">&gt;&gt; bind-to-core at the thread level, and that is something OMPI doesn't
</span><br>
<span class="quotelev2">&gt;&gt; support.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is all documented in the mpirun manpage.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That being said, I also am confused, like Ralph, as to why no options is
</span><br>
<span class="quotelev2">&gt;&gt; causing your code bind.  Maybe add a --report-bindings to your mpirun line
</span><br>
<span class="quotelev2">&gt;&gt; to see what OMPI thinks it is doing in this regard?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is a good suggestion - I'm beginning to believe that the binding is
</span><br>
<span class="quotelev2">&gt;&gt; happening in the user's app and not OMPI.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 28, 2010, at 5:47 PM, David Akin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; All,
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to get the OpenMP portion of the code below to run
</span><br>
<span class="quotelev2">&gt;&gt; multicore on a couple of 8 core nodes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Good news: multiple threads are being spawned on each node in the run.
</span><br>
<span class="quotelev2">&gt;&gt; Bad news: each of the threads only runs on a single core, leaving 7
</span><br>
<span class="quotelev2">&gt;&gt; cores basically idle.
</span><br>
<span class="quotelev2">&gt;&gt; Sorta good news: if I provide a rank file I get the threads running on
</span><br>
<span class="quotelev2">&gt;&gt; different cores within each node (PITA.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here's the first lines of output.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/mpi/gcc/openmpi-1.4-qlc/bin/mpirun -host c005,c006 -np 2 -rf
</span><br>
<span class="quotelev2">&gt;&gt; rank.file -x OMP_NUM_THREADS=4 hybrid4.gcc
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello from thread 2 out of 4 from process 1 out of 2 on c006.local
</span><br>
<span class="quotelev2">&gt;&gt; another parallel region:       name:c006.local MPI_RANK_ID=1 OMP_THREAD_ID=2
</span><br>
<span class="quotelev2">&gt;&gt; Hello from thread 3 out of 4 from process 1 out of 2 on c006.local
</span><br>
<span class="quotelev2">&gt;&gt; another parallel region:       name:c006.local MPI_RANK_ID=1 OMP_THREAD_ID=3
</span><br>
<span class="quotelev2">&gt;&gt; Hello from thread 1 out of 4 from process 1 out of 2 on c006.local
</span><br>
<span class="quotelev2">&gt;&gt; another parallel region:       name:c006.local MPI_RANK_ID=1 OMP_THREAD_ID=1
</span><br>
<span class="quotelev2">&gt;&gt; Hello from thread 1 out of 4 from process 0 out of 2 on c005.local
</span><br>
<span class="quotelev2">&gt;&gt; another parallel region:       name:c005.local MPI_RANK_ID=0 OMP_THREAD_ID=1
</span><br>
<span class="quotelev2">&gt;&gt; Hello from thread 3 out of 4 from process 0 out of 2 on c005.local
</span><br>
<span class="quotelev2">&gt;&gt; Hello from thread 2 out of 4 from process 0 out of 2 on c005.local
</span><br>
<span class="quotelev2">&gt;&gt; another parallel region:       name:c005.local MPI_RANK_ID=0 OMP_THREAD_ID=3
</span><br>
<span class="quotelev2">&gt;&gt; another parallel region:       name:c005.local MPI_RANK_ID=0 OMP_THREAD_ID=2
</span><br>
<span class="quotelev2">&gt;&gt; Hello from thread 0 out of 4 from process 0 out of 2 on c005.local
</span><br>
<span class="quotelev2">&gt;&gt; another parallel region:       name:c005.local MPI_RANK_ID=0 OMP_THREAD_ID=0
</span><br>
<span class="quotelev2">&gt;&gt; Hello from thread 0 out of 4 from process 1 out of 2 on c006.local
</span><br>
<span class="quotelev2">&gt;&gt; another parallel region:       name:c006.local MPI_RANK_ID=1 OMP_THREAD_ID=0
</span><br>
<span class="quotelev2">&gt;&gt; another parallel region:       name:c005.local MPI_RANK_ID=0 OMP_THREAD_ID=3
</span><br>
<span class="quotelev2">&gt;&gt; another parallel region:       name:c005.local MPI_RANK_ID=0 OMP_THREAD_ID=2
</span><br>
<span class="quotelev2">&gt;&gt; another parallel region:       name:c005.local MPI_RANK_ID=0 OMP_THREAD_ID=0
</span><br>
<span class="quotelev2">&gt;&gt; another parallel region:       name:c006.local MPI_RANK_ID=1 OMP_THREAD_ID=3
</span><br>
<span class="quotelev2">&gt;&gt; another parallel region:       name:c005.local MPI_RANK_ID=0 OMP_THREAD_ID=3
</span><br>
<span class="quotelev2">&gt;&gt; another parallel region:       name:c005.local MPI_RANK_ID=0 OMP_THREAD_ID=2
</span><br>
<span class="quotelev2">&gt;&gt; another parallel region:       name:c006.local MPI_RANK_ID=1 OMP_THREAD_ID=0
</span><br>
<span class="quotelev2">&gt;&gt; another parallel region:       name:c006.local MPI_RANK_ID=1 OMP_THREAD_ID=1
</span><br>
<span class="quotelev2">&gt;&gt; .
</span><br>
<span class="quotelev2">&gt;&gt; .
</span><br>
<span class="quotelev2">&gt;&gt; .
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here's the simple code:
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;omp.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char *argv[]) {
</span><br>
<span class="quotelev2">&gt;&gt; int numprocs, rank, namelen;
</span><br>
<span class="quotelev2">&gt;&gt; char processor_name[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev2">&gt;&gt; int iam = 0, np = 1;
</span><br>
<span class="quotelev2">&gt;&gt; char name[MPI_MAX_PROCESSOR_NAME];   /* MPI_MAX_PROCESSOR_NAME ==
</span><br>
<span class="quotelev2">&gt;&gt; 128         */
</span><br>
<span class="quotelev2">&gt;&gt; int O_ID;                            /* OpenMP thread ID
</span><br>
<span class="quotelev2">&gt;&gt;        */
</span><br>
<span class="quotelev2">&gt;&gt; int M_ID;                            /* MPI rank ID
</span><br>
<span class="quotelev2">&gt;&gt;        */
</span><br>
<span class="quotelev2">&gt;&gt; int rtn_val;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_size(MPI_COMM_WORLD, &amp;numprocs);
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Get_processor_name(processor_name, &amp;namelen);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #pragma omp parallel default(shared) private(iam, np,O_ID)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;   np = omp_get_num_threads();
</span><br>
<span class="quotelev2">&gt;&gt;   iam = omp_get_thread_num();
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot;Hello from thread %d out of %d from process %d out of %d on
</span><br>
<span class="quotelev2">&gt;&gt; %s\n&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;          iam, np, rank, numprocs, processor_name);
</span><br>
<span class="quotelev2">&gt;&gt;   int i=0;
</span><br>
<span class="quotelev2">&gt;&gt;   int j=0;
</span><br>
<span class="quotelev2">&gt;&gt;   double counter=0;
</span><br>
<span class="quotelev2">&gt;&gt;   for(i =0;i&lt;99999999;i++)
</span><br>
<span class="quotelev2">&gt;&gt;           {
</span><br>
<span class="quotelev2">&gt;&gt;            O_ID = omp_get_thread_num();          /* get OpenMP
</span><br>
<span class="quotelev2">&gt;&gt; thread ID                 */
</span><br>
<span class="quotelev2">&gt;&gt;            MPI_Get_processor_name(name,&amp;namelen);
</span><br>
<span class="quotelev2">&gt;&gt;            rtn_val = MPI_Comm_rank(MPI_COMM_WORLD,&amp;M_ID);
</span><br>
<span class="quotelev2">&gt;&gt;            printf(&quot;another parallel region:       name:%s
</span><br>
<span class="quotelev2">&gt;&gt; MPI_RANK_ID=%d OMP_THREAD_ID=%d\n&quot;, name,M_ID,O_ID);
</span><br>
<span class="quotelev2">&gt;&gt;            for(j = 0;j&lt;999999999;j++)
</span><br>
<span class="quotelev2">&gt;&gt;             {
</span><br>
<span class="quotelev2">&gt;&gt;              counter=counter+i;
</span><br>
<span class="quotelev2">&gt;&gt;             }
</span><br>
<span class="quotelev2">&gt;&gt;           }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; }
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
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; &lt;Mail Attachment.gif&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev2">&gt;&gt; Developer Tools Engineering | +1.650.633.7054
</span><br>
<span class="quotelev2">&gt;&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev2">&gt;&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev2">&gt;&gt; Email terry.dontje_at_[hidden]
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
<li><strong>Next message:</strong> <a href="13870.php">Terry Dontje: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<li><strong>Previous message:</strong> <a href="13868.php">David Akin: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<li><strong>In reply to:</strong> <a href="13868.php">David Akin: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13870.php">Terry Dontje: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
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
