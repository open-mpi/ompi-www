<?
$subject_val = "Re: [OMPI users] Newbie question?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 16 00:26:20 2012" -->
<!-- isoreceived="20120916042620" -->
<!-- sent="Sun, 16 Sep 2012 00:26:13 -0400" -->
<!-- isosent="20120916042613" -->
<!-- name="John Chludzinski" -->
<!-- email="john.chludzinski_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Newbie question?" -->
<!-- id="CABftzegM_w0JhF+1EH88=1BxjtAunga4eTpB2ZbBwD584ZEjZA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="59D0F764-1A01-4776-8AC6-036A49B5D8B2_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Newbie question?<br>
<strong>From:</strong> John Chludzinski (<em>john.chludzinski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-16 00:26:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20229.php">John Chludzinski: "Re: [OMPI users] Newbie question?"</a>
<li><strong>Previous message:</strong> <a href="20227.php">Ralph Castain: "Re: [OMPI users] Newbie question?"</a>
<li><strong>In reply to:</strong> <a href="20227.php">Ralph Castain: "Re: [OMPI users] Newbie question?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20229.php">John Chludzinski: "Re: [OMPI users] Newbie question?"</a>
<li><strong>Reply:</strong> <a href="20229.php">John Chludzinski: "Re: [OMPI users] Newbie question?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
BINGO!  That did it.  Thanks.  ---John
<br>
<p>On Sat, Sep 15, 2012 at 9:32 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; No - the mca param has to be specified *before* your executable
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpiexec -mca btl ^openib -n 4 ./a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, note the space between &quot;btl&quot; and &quot;^openib&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 15, 2012, at 5:45 PM, John Chludzinski &lt;john.chludzinski_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this what you intended(?):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *$ mpiexec -n 4 ./a.out -mca btl^openib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev1">&gt; librdmacm: assuming: 4
</span><br>
<span class="quotelev1">&gt; CMA: unable to get RDMA device list
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [[5991,1],0]: A high-performance Open MPI point-to-point messaging module
</span><br>
<span class="quotelev1">&gt; was unable to find any relevant network interfaces:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Module: OpenFabrics (openib)
</span><br>
<span class="quotelev1">&gt;   Host: elzbieta
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev1">&gt; librdmacm: assuming: 4
</span><br>
<span class="quotelev1">&gt; CMA: unable to get RDMA device list
</span><br>
<span class="quotelev1">&gt; librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev1">&gt; librdmacm: assuming: 4
</span><br>
<span class="quotelev1">&gt; CMA: unable to get RDMA device list
</span><br>
<span class="quotelev1">&gt; librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev1">&gt; librdmacm: assuming: 4
</span><br>
<span class="quotelev1">&gt; CMA: unable to get RDMA device list
</span><br>
<span class="quotelev1">&gt;  rank=            1  Results:    5.0000000       6.0000000
</span><br>
<span class="quotelev1">&gt; 7.0000000       8.0000000
</span><br>
<span class="quotelev1">&gt;  rank=            0  Results:    1.0000000       2.0000000
</span><br>
<span class="quotelev1">&gt; 3.0000000       4.0000000
</span><br>
<span class="quotelev1">&gt;  rank=            2  Results:    9.0000000       10.000000
</span><br>
<span class="quotelev1">&gt; 11.000000       12.000000
</span><br>
<span class="quotelev1">&gt;  rank=            3  Results:    13.000000       14.000000
</span><br>
<span class="quotelev1">&gt; 15.000000       16.000000
</span><br>
<span class="quotelev1">&gt; [elzbieta:02374] 3 more processes have sent help message
</span><br>
<span class="quotelev1">&gt; help-mpi-btl-base.txt / btl:no-nics
</span><br>
<span class="quotelev1">&gt; [elzbieta:02374] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see
</span><br>
<span class="quotelev1">&gt; all help / error messages
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, Sep 15, 2012 at 8:22 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Try adding &quot;-mca btl ^openib&quot; to your cmd line and see if that cleans it
</span><br>
<span class="quotelev2">&gt;&gt; up.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 15, 2012, at 12:44 PM, John Chludzinski &lt;
</span><br>
<span class="quotelev2">&gt;&gt; john.chludzinski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There was a bug in the code.  So now I get this, which is correct but how
</span><br>
<span class="quotelev2">&gt;&gt; do I get rid of all these ABI, CMA, etc. messages?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpiexec -n 4 ./a.out
</span><br>
<span class="quotelev2">&gt;&gt; librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev2">&gt;&gt; librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev2">&gt;&gt; librdmacm: assuming: 4
</span><br>
<span class="quotelev2">&gt;&gt; CMA: unable to get RDMA device list
</span><br>
<span class="quotelev2">&gt;&gt; librdmacm: assuming: 4
</span><br>
<span class="quotelev2">&gt;&gt; CMA: unable to get RDMA device list
</span><br>
<span class="quotelev2">&gt;&gt; CMA: unable to get RDMA device list
</span><br>
<span class="quotelev2">&gt;&gt; librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev2">&gt;&gt; librdmacm: assuming: 4
</span><br>
<span class="quotelev2">&gt;&gt; librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev2">&gt;&gt; librdmacm: assuming: 4
</span><br>
<span class="quotelev2">&gt;&gt; CMA: unable to get RDMA device list
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [[6110,1],1]: A high-performance Open MPI point-to-point messaging module
</span><br>
<span class="quotelev2">&gt;&gt; was unable to find any relevant network interfaces:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Module: OpenFabrics (openib)
</span><br>
<span class="quotelev2">&gt;&gt;   Host: elzbieta
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev2">&gt;&gt; lower performance.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;  rank=            1  Results:    5.0000000       6.0000000
</span><br>
<span class="quotelev2">&gt;&gt; 7.0000000       8.0000000
</span><br>
<span class="quotelev2">&gt;&gt;  rank=            2  Results:    9.0000000       10.000000
</span><br>
<span class="quotelev2">&gt;&gt; 11.000000       12.000000
</span><br>
<span class="quotelev2">&gt;&gt;  rank=            0  Results:    1.0000000       2.0000000
</span><br>
<span class="quotelev2">&gt;&gt; 3.0000000       4.0000000
</span><br>
<span class="quotelev2">&gt;&gt;  rank=            3  Results:    13.000000       14.000000
</span><br>
<span class="quotelev2">&gt;&gt; 15.000000       16.000000
</span><br>
<span class="quotelev2">&gt;&gt; [elzbieta:02559] 3 more processes have sent help message
</span><br>
<span class="quotelev2">&gt;&gt; help-mpi-btl-base.txt / btl:no-nics
</span><br>
<span class="quotelev2">&gt;&gt; [elzbieta:02559] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see
</span><br>
<span class="quotelev2">&gt;&gt; all help / error messages
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sat, Sep 15, 2012 at 3:34 PM, John Chludzinski &lt;
</span><br>
<span class="quotelev2">&gt;&gt; john.chludzinski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BTW, here the example code:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; program scatter
</span><br>
<span class="quotelev3">&gt;&gt;&gt; include 'mpif.h'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; integer, parameter :: SIZE=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; integer :: numtasks, rank, sendcount, recvcount, source, ierr
</span><br>
<span class="quotelev3">&gt;&gt;&gt; real :: sendbuf(SIZE,SIZE), recvbuf(SIZE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; !  Fortran stores this array in column major order, so the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; !  scatter will actually scatter columns, not rows.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; data sendbuf /1.0, 2.0, 3.0, 4.0, &amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 5.0, 6.0, 7.0, 8.0, &amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 9.0, 10.0, 11.0, 12.0, &amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 13.0, 14.0, 15.0, 16.0 /
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; call MPI_INIT(ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; call MPI_COMM_SIZE(MPI_COMM_WORLD, numtasks, ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if (numtasks .eq. SIZE) then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   source = 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   sendcount = SIZE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   recvcount = SIZE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   call MPI_SCATTER(sendbuf, sendcount, MPI_REAL, recvbuf, &amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    recvcount, MPI_REAL, source, MPI_COMM_WORLD, ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   print *, 'rank= ',rank,' Results: ',recvbuf
</span><br>
<span class="quotelev3">&gt;&gt;&gt; else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    print *, 'Must specify',SIZE,' processors.  Terminating.'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; call MPI_FINALIZE(ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; end program
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sat, Sep 15, 2012 at 3:02 PM, John Chludzinski &lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; john.chludzinski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # export LD_LIBRARY_PATH
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # mpiexec -n 1 printenv | grep PATH
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; LD_LIBRARY_PATH=/usr/lib/openmpi/lib/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PATH=/usr/lib/openmpi/bin/:/usr/lib/ccache:/usr/local/bin:/usr/bin:/bin:/usr/local/sbin:/usr/sbin:/sbin:/home/jski/.local/bin:/home/jski/bin
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MODULEPATH=/usr/share/Modules/modulefiles:/etc/modulefiles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WINDOWPATH=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # mpiexec -n 4 ./a.out
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; librdmacm: assuming: 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CMA: unable to get RDMA device list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [[3598,1],0]: A high-performance Open MPI point-to-point messaging
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; module
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; was unable to find any relevant network interfaces:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Module: OpenFabrics (openib)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Host: elzbieta
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; lower performance.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; librdmacm: assuming: 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CMA: unable to get RDMA device list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; librdmacm: assuming: 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CMA: unable to get RDMA device list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; librdmacm: assuming: 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CMA: unable to get RDMA device list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [elzbieta:4145] *** An error occurred in MPI_Scatter
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [elzbieta:4145] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [elzbieta:4145] *** MPI_ERR_TYPE: invalid datatype
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [elzbieta:4145] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpiexec has exited due to process rank 1 with PID 4145 on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node elzbieta exiting improperly. There are two reasons this could
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; occur:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; terminated by signals sent by mpiexec (as reported here).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sat, Sep 15, 2012 at 2:24 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ah - note that there is no LD_LIBRARY_PATH in the environment. That's
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the problem
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Sep 15, 2012, at 11:19 AM, John Chludzinski &lt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; john.chludzinski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ which mpiexec
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/lib/openmpi/bin/mpiexec
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # mpiexec -n 1 printenv | grep PATH
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; PATH=/usr/lib/openmpi/bin/:/usr/lib/ccache:/usr/local/bin:/usr/bin:/bin:/usr/local/sbin:/usr/sbin:/sbin:/home/jski/.local/bin:/home/jski/bin
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MODULEPATH=/usr/share/Modules/modulefiles:/etc/modulefiles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; WINDOWPATH=1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Sat, Sep 15, 2012 at 1:11 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Couple of things worth checking:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 1. verify that you executed the &quot;mpiexec&quot; you think you did - a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; simple &quot;which mpiexec&quot; should suffice
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 2. verify that your environment is correct by &quot;mpiexec -n 1 printenv
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; | grep PATH&quot;. Sometimes the ld_library_path doesn't carry over like you
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; think it should
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  On Sep 15, 2012, at 10:00 AM, John Chludzinski &lt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; john.chludzinski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I installed OpenMPI (I have a simple dual core AMD notebook with
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Fedora 16) via:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # yum install openmpi
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # yum install openmpi-devel
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # mpirun --version
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpirun (Open MPI) 1.5.4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I added:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; $ PATH=PATH=/usr/lib/openmpi/bin/:$PATH
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; $ LD_LIBRARY_PATH=/usr/lib/openmpi/lib/
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Then:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; $ mpif90 ex1.f95
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; $ mpiexec -n 4 ./a.out
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ./a.out: error while loading shared libraries: libmpi_f90.so.1:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ./a.out: error while loading shared libraries: libmpi_f90.so.1:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ./a.out: error while loading shared libraries: libmpi_f90.so.1:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ./a.out: error while loading shared libraries: libmpi_f90.so.1:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpiexec noticed that the job aborted, but has no info as to the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; process
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ls -l /usr/lib/openmpi/lib/
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; total 6788
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      25 Sep 15 12:25 libmca_common_sm.so -&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; libmca_common_sm.so.2.0.0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      25 Sep 14 16:14 libmca_common_sm.so.2 -&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; libmca_common_sm.so.2.0.0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x. 1 root root    8492 Jan 20  2012 libmca_common_sm.so.2.0.0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      19 Sep 15 12:25 libmpi_cxx.so -&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; libmpi_cxx.so.1.0.1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      19 Sep 14 16:14 libmpi_cxx.so.1 -&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; libmpi_cxx.so.1.0.1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x. 1 root root   87604 Jan 20  2012 libmpi_cxx.so.1.0.1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      19 Sep 15 12:25 libmpi_f77.so -&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; libmpi_f77.so.1.0.2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      19 Sep 14 16:14 libmpi_f77.so.1 -&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; libmpi_f77.so.1.0.2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x. 1 root root  179912 Jan 20  2012 libmpi_f77.so.1.0.2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      19 Sep 15 12:25 libmpi_f90.so -&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; libmpi_f90.so.1.1.0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      19 Sep 14 16:14 libmpi_f90.so.1 -&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; libmpi_f90.so.1.1.0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x. 1 root root   10364 Jan 20  2012 libmpi_f90.so.1.1.0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      15 Sep 15 12:25 libmpi.so -&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; libmpi.so.1.0.2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      15 Sep 14 16:14 libmpi.so.1 -&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; libmpi.so.1.0.2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x. 1 root root 1383444 Jan 20  2012 libmpi.so.1.0.2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      21 Sep 15 12:25 libompitrace.so -&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; libompitrace.so.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      21 Sep 14 16:14 libompitrace.so.0 -&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; libompitrace.so.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x. 1 root root   13572 Jan 20  2012 libompitrace.so.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      20 Sep 15 12:25 libopen-pal.so -&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; libopen-pal.so.3.0.0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      20 Sep 14 16:14 libopen-pal.so.3 -&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; libopen-pal.so.3.0.0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x. 1 root root  386324 Jan 20  2012 libopen-pal.so.3.0.0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      20 Sep 15 12:25 libopen-rte.so -&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; libopen-rte.so.3.0.0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      20 Sep 14 16:14 libopen-rte.so.3 -&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; libopen-rte.so.3.0.0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x. 1 root root  790052 Jan 20  2012 libopen-rte.so.3.0.0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -rw-r--r--. 1 root root  301520 Jan 20  2012 libotf.a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      15 Sep 15 12:25 libotf.so -&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; libotf.so.0.0.1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      15 Sep 14 16:14 libotf.so.0 -&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; libotf.so.0.0.1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x. 1 root root  206384 Jan 20  2012 libotf.so.0.0.1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -rw-r--r--. 1 root root  337970 Jan 20  2012 libvt.a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -rw-r--r--. 1 root root  591070 Jan 20  2012 libvt-hyb.a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      18 Sep 15 12:25 libvt-hyb.so -&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; libvt-hyb.so.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      18 Sep 14 16:14 libvt-hyb.so.0 -&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; libvt-hyb.so.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x. 1 root root  428844 Jan 20  2012 libvt-hyb.so.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -rw-r--r--. 1 root root  541004 Jan 20  2012 libvt-mpi.a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      18 Sep 15 12:25 libvt-mpi.so -&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; libvt-mpi.so.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      18 Sep 14 16:14 libvt-mpi.so.0 -&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; libvt-mpi.so.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x. 1 root root  396352 Jan 20  2012 libvt-mpi.so.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -rw-r--r--. 1 root root  372352 Jan 20  2012 libvt-mt.a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      17 Sep 15 12:25 libvt-mt.so -&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; libvt-mt.so.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      17 Sep 14 16:14 libvt-mt.so.0 -&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; libvt-mt.so.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x. 1 root root  266104 Jan 20  2012 libvt-mt.so.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -rw-r--r--. 1 root root   60390 Jan 20  2012 libvt-pomp.a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      14 Sep 15 12:25 libvt.so -&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; libvt.so.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      14 Sep 14 16:14 libvt.so.0 -&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; libvt.so.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x. 1 root root  242604 Jan 20  2012 libvt.so.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x. 1 root root  303591 Jan 20  2012 mpi.mod
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; drwxr-xr-x. 2 root root    4096 Sep 14 16:14 openmpi
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The file (actually, a link) it claims it can't find: libmpi_f90.so.1,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; is clearly there. And LD_LIBRARY_PATH=/usr/lib/openmpi/lib/.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; What's the problem?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ---John
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20228/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20229.php">John Chludzinski: "Re: [OMPI users] Newbie question?"</a>
<li><strong>Previous message:</strong> <a href="20227.php">Ralph Castain: "Re: [OMPI users] Newbie question?"</a>
<li><strong>In reply to:</strong> <a href="20227.php">Ralph Castain: "Re: [OMPI users] Newbie question?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20229.php">John Chludzinski: "Re: [OMPI users] Newbie question?"</a>
<li><strong>Reply:</strong> <a href="20229.php">John Chludzinski: "Re: [OMPI users] Newbie question?"</a>
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
