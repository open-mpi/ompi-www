<?
$subject_val = "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 29 13:25:06 2010" -->
<!-- isoreceived="20100729172506" -->
<!-- sent="Thu, 29 Jul 2010 12:24:40 -0500" -->
<!-- isosent="20100729172440" -->
<!-- name="David Akin" -->
<!-- email="nospamou_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core" -->
<!-- id="AANLkTinQMK=cg=K6WRW+UC3CyR2TGu-OKNiSDROO4kA8_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="89696E12-073A-42CD-9400-28CA4FCE14D0_at_open-mpi.org" -->
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
<strong>From:</strong> David Akin (<em>nospamou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-29 13:24:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13875.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<li><strong>Previous message:</strong> <a href="13873.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<li><strong>In reply to:</strong> <a href="13873.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13875.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<li><strong>Reply:</strong> <a href="13875.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I use the taskset command, or just use 'top' and watch the performance.
<br>
<p>On Thu, Jul 29, 2010 at 12:02 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I don't see anything in your code that would bind, but I also don't see
</span><br>
<span class="quotelev1">&gt; anything that actually tells you whether or not your are bound. It appears
</span><br>
<span class="quotelev1">&gt; that MPI_Get_processor_name is simply returning the name of the node as
</span><br>
<span class="quotelev1">&gt; opposed to the name/id of any specific core. How do you know what core the
</span><br>
<span class="quotelev1">&gt; thread is actually executing on?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This would tell you if your code was bouncing between cores.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 29, 2010, at 10:43 AM, David Akin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for the confusion. What I need is for all OpenMP threads to *not*
</span><br>
<span class="quotelev1">&gt; stay on one core. I *would* rather each OpenMP thread to run on a separate
</span><br>
<span class="quotelev1">&gt; core. Is it my example code? My gut reaction is no because I can manipulate
</span><br>
<span class="quotelev1">&gt; (somewhat) the cores the threads are assigned by adding -bysocket
</span><br>
<span class="quotelev1">&gt; -bind-to-socket to mpirun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jul 29, 2010 at 10:08 AM, Terry Dontje &lt;terry.dontje_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  On Jul 29, 2010, at 5:09 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Ralph Castain wrote:
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Huh???  That's not completely correct.  If you have a multiple socket
</span><br>
<span class="quotelev2">&gt;&gt; machine you could to -bind-to-socket -bysocket and spread the processes that
</span><br>
<span class="quotelev2">&gt;&gt; way.  Also couldn't you use the -cpus-per-proc with -bind-to-core to get a
</span><br>
<span class="quotelev2">&gt;&gt; process to bind to a non-socket amount of cpus?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Yes, you could do bind-to-socket, though that still constrains the
</span><br>
<span class="quotelev2">&gt;&gt; threads to only that one socket. What was asked about here was the ability
</span><br>
<span class="quotelev2">&gt;&gt; to bind-to-core at the thread level, and that is something OMPI doesn't
</span><br>
<span class="quotelev2">&gt;&gt; support.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Sorry I did not get that constraint.  So to be clear what is being asked
</span><br>
<span class="quotelev2">&gt;&gt; is to have the ability to bind a processes threads to specific cores.  If so
</span><br>
<span class="quotelev2">&gt;&gt; then to the letter of what that means I agree you cannot do that.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, what may be the next best thing is to specify binding of a
</span><br>
<span class="quotelev2">&gt;&gt; process to a group of resources.  That's essentially what my suggestion
</span><br>
<span class="quotelev2">&gt;&gt; above is doing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I do agree with Ralph that once you start overloading the socket with more
</span><br>
<span class="quotelev2">&gt;&gt; threads then it can handle problems will ensue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  This is a good suggestion - I'm beginning to believe that the binding is
</span><br>
<span class="quotelev2">&gt;&gt; happening in the user's app and not OMPI.
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;  All,
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
<span class="quotelev2">&gt;&gt;  int numprocs, rank, namelen;
</span><br>
<span class="quotelev2">&gt;&gt;  char processor_name[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev2">&gt;&gt;  int iam = 0, np = 1;
</span><br>
<span class="quotelev2">&gt;&gt;  char name[MPI_MAX_PROCESSOR_NAME];   /* MPI_MAX_PROCESSOR_NAME ==
</span><br>
<span class="quotelev2">&gt;&gt; 128         */
</span><br>
<span class="quotelev2">&gt;&gt;  int O_ID;                            /* OpenMP thread ID
</span><br>
<span class="quotelev2">&gt;&gt;         */
</span><br>
<span class="quotelev2">&gt;&gt;  int M_ID;                            /* MPI rank ID
</span><br>
<span class="quotelev2">&gt;&gt;         */
</span><br>
<span class="quotelev2">&gt;&gt;  int rtn_val;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Comm_size(MPI_COMM_WORLD, &amp;numprocs);
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Get_processor_name(processor_name, &amp;namelen);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  #pragma omp parallel default(shared) private(iam, np,O_ID)
</span><br>
<span class="quotelev2">&gt;&gt;  {
</span><br>
<span class="quotelev2">&gt;&gt;    np = omp_get_num_threads();
</span><br>
<span class="quotelev2">&gt;&gt;    iam = omp_get_thread_num();
</span><br>
<span class="quotelev2">&gt;&gt;    printf(&quot;Hello from thread %d out of %d from process %d out of %d on %s\n&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;           iam, np, rank, numprocs, processor_name);
</span><br>
<span class="quotelev2">&gt;&gt;    int i=0;
</span><br>
<span class="quotelev2">&gt;&gt;    int j=0;
</span><br>
<span class="quotelev2">&gt;&gt;    double counter=0;
</span><br>
<span class="quotelev2">&gt;&gt;    for(i =0;i&lt;99999999;i++)
</span><br>
<span class="quotelev2">&gt;&gt;            {
</span><br>
<span class="quotelev2">&gt;&gt;             O_ID = omp_get_thread_num();          /* get OpenMP
</span><br>
<span class="quotelev2">&gt;&gt; thread ID                 */
</span><br>
<span class="quotelev2">&gt;&gt;             MPI_Get_processor_name(name,&amp;namelen);
</span><br>
<span class="quotelev2">&gt;&gt;             rtn_val = MPI_Comm_rank(MPI_COMM_WORLD,&amp;M_ID);
</span><br>
<span class="quotelev2">&gt;&gt;             printf(&quot;another parallel region:       name:%s
</span><br>
<span class="quotelev2">&gt;&gt; MPI_RANK_ID=%d OMP_THREAD_ID=%d\n&quot;, name,M_ID,O_ID);
</span><br>
<span class="quotelev2">&gt;&gt;             for(j = 0;j&lt;999999999;j++)
</span><br>
<span class="quotelev2">&gt;&gt;              {
</span><br>
<span class="quotelev2">&gt;&gt;               counter=counter+i;
</span><br>
<span class="quotelev2">&gt;&gt;              }
</span><br>
<span class="quotelev2">&gt;&gt;            }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing listusers_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing listusers_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; &lt;Mail Attachment.gif&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev2">&gt;&gt; Developer Tools Engineering | +1.650.633.7054
</span><br>
<span class="quotelev2">&gt;&gt;  Oracle * - Performance Technologies*
</span><br>
<span class="quotelev2">&gt;&gt;  95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev2">&gt;&gt; Email terry.dontje_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
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
<span class="quotelev2">&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing listusers_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; [image: Oracle]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev2">&gt;&gt; Developer Tools Engineering | +1.650.633.7054
</span><br>
<span class="quotelev2">&gt;&gt;  Oracle * - Performance Technologies*
</span><br>
<span class="quotelev2">&gt;&gt;  95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev2">&gt;&gt; Email terry.dontje_at_[hidden]
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
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
<p><p><p><pre>
-- 
David Akin, RHCE
Sr. Systems Analyst and HPC Roadie
OU Supercomputing Center for Education &amp; Research (OSCER)
University of Oklahoma Information Technology
david.akin_at_[hidden]
405-598-7685
Don't forget - Aug 8-14 @ OU: Intermediate Parallel Programming &amp; Cluster
Computing Free Workshop
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13874/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13875.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<li><strong>Previous message:</strong> <a href="13873.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<li><strong>In reply to:</strong> <a href="13873.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13875.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<li><strong>Reply:</strong> <a href="13875.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
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
