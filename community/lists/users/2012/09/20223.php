<?
$subject_val = "Re: [OMPI users] Newbie question?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 15 15:34:53 2012" -->
<!-- isoreceived="20120915193453" -->
<!-- sent="Sat, 15 Sep 2012 15:34:47 -0400" -->
<!-- isosent="20120915193447" -->
<!-- name="John Chludzinski" -->
<!-- email="john.chludzinski_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Newbie question?" -->
<!-- id="CABftzejZafr-GhC9QULu-6A1AvFwBaw8LLsdJGh7vx2QBXO95w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CABftzehbg5pUMRwJEpQh9uHnn9=42FCKNgkx8XDyGp3tr6D1Cg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-09-15 15:34:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20224.php">John Chludzinski: "Re: [OMPI users] Newbie question?"</a>
<li><strong>Previous message:</strong> <a href="20222.php">John Chludzinski: "Re: [OMPI users] Newbie question?"</a>
<li><strong>In reply to:</strong> <a href="20222.php">John Chludzinski: "Re: [OMPI users] Newbie question?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20224.php">John Chludzinski: "Re: [OMPI users] Newbie question?"</a>
<li><strong>Reply:</strong> <a href="20224.php">John Chludzinski: "Re: [OMPI users] Newbie question?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
BTW, here the example code:
<br>
<p>program scatter
<br>
include 'mpif.h'
<br>
<p>integer, parameter :: SIZE=4
<br>
integer :: numtasks, rank, sendcount, recvcount, source, ierr
<br>
real :: sendbuf(SIZE,SIZE), recvbuf(SIZE)
<br>
<p>!  Fortran stores this array in column major order, so the
<br>
!  scatter will actually scatter columns, not rows.
<br>
data sendbuf /1.0, 2.0, 3.0, 4.0, &amp;
<br>
5.0, 6.0, 7.0, 8.0, &amp;
<br>
9.0, 10.0, 11.0, 12.0, &amp;
<br>
13.0, 14.0, 15.0, 16.0 /
<br>
<p>call MPI_INIT(ierr)
<br>
call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierr)
<br>
call MPI_COMM_SIZE(MPI_COMM_WORLD, numtasks, ierr)
<br>
<p>if (numtasks .eq. SIZE) then
<br>
&nbsp;&nbsp;source = 1
<br>
&nbsp;&nbsp;sendcount = SIZE
<br>
&nbsp;&nbsp;recvcount = SIZE
<br>
&nbsp;&nbsp;call MPI_SCATTER(sendbuf, sendcount, MPI_REAL, recvbuf, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;recvcount, MPI_REAL, source, MPI_COMM_WORLD, ierr)
<br>
&nbsp;&nbsp;print *, 'rank= ',rank,' Results: ',recvbuf
<br>
else
<br>
&nbsp;&nbsp;&nbsp;print *, 'Must specify',SIZE,' processors.  Terminating.'
<br>
endif
<br>
<p>call MPI_FINALIZE(ierr)
<br>
<p>end program
<br>
<p><p>On Sat, Sep 15, 2012 at 3:02 PM, John Chludzinski &lt;
<br>
john.chludzinski_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; # export LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # mpiexec -n 1 printenv | grep PATH
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/usr/lib/openmpi/lib/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PATH=/usr/lib/openmpi/bin/:/usr/lib/ccache:/usr/local/bin:/usr/bin:/bin:/usr/local/sbin:/usr/sbin:/sbin:/home/jski/.local/bin:/home/jski/bin
</span><br>
<span class="quotelev1">&gt; MODULEPATH=/usr/share/Modules/modulefiles:/etc/modulefiles
</span><br>
<span class="quotelev1">&gt; WINDOWPATH=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # mpiexec -n 4 ./a.out
</span><br>
<span class="quotelev1">&gt; librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev1">&gt; librdmacm: assuming: 4
</span><br>
<span class="quotelev1">&gt; CMA: unable to get RDMA device list
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [[3598,1],0]: A high-performance Open MPI point-to-point messaging module
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
<span class="quotelev1">&gt; librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev1">&gt; CMA: unable to get RDMA device list
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
<span class="quotelev1">&gt; [elzbieta:4145] *** An error occurred in MPI_Scatter
</span><br>
<span class="quotelev1">&gt; [elzbieta:4145] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [elzbieta:4145] *** MPI_ERR_TYPE: invalid datatype
</span><br>
<span class="quotelev1">&gt; [elzbieta:4145] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec has exited due to process rank 1 with PID 4145 on
</span><br>
<span class="quotelev1">&gt; node elzbieta exiting improperly. There are two reasons this could occur:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev1">&gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev1">&gt; for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev1">&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev1">&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev1">&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpiexec (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, Sep 15, 2012 at 2:24 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ah - note that there is no LD_LIBRARY_PATH in the environment. That's the
</span><br>
<span class="quotelev2">&gt;&gt; problem
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 15, 2012, at 11:19 AM, John Chludzinski &lt;
</span><br>
<span class="quotelev2">&gt;&gt; john.chludzinski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ which mpiexec
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/openmpi/bin/mpiexec
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # mpiexec -n 1 printenv | grep PATH
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PATH=/usr/lib/openmpi/bin/:/usr/lib/ccache:/usr/local/bin:/usr/bin:/bin:/usr/local/sbin:/usr/sbin:/sbin:/home/jski/.local/bin:/home/jski/bin
</span><br>
<span class="quotelev2">&gt;&gt; MODULEPATH=/usr/share/Modules/modulefiles:/etc/modulefiles
</span><br>
<span class="quotelev2">&gt;&gt; WINDOWPATH=1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sat, Sep 15, 2012 at 1:11 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Couple of things worth checking:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. verify that you executed the &quot;mpiexec&quot; you think you did - a simple
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;which mpiexec&quot; should suffice
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. verify that your environment is correct by &quot;mpiexec -n 1 printenv |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; grep PATH&quot;. Sometimes the ld_library_path doesn't carry over like you think
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it should
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  On Sep 15, 2012, at 10:00 AM, John Chludzinski &lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; john.chludzinski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I installed OpenMPI (I have a simple dual core AMD notebook with Fedora
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 16) via:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # yum install openmpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # yum install openmpi-devel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # mpirun --version
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun (Open MPI) 1.5.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I added:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ PATH=PATH=/usr/lib/openmpi/bin/:$PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ LD_LIBRARY_PATH=/usr/lib/openmpi/lib/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Then:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpif90 ex1.f95
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpiexec -n 4 ./a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./a.out: error while loading shared libraries: libmpi_f90.so.1: cannot
</span><br>
<span class="quotelev3">&gt;&gt;&gt; open shared object file: No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./a.out: error while loading shared libraries: libmpi_f90.so.1: cannot
</span><br>
<span class="quotelev3">&gt;&gt;&gt; open shared object file: No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./a.out: error while loading shared libraries: libmpi_f90.so.1: cannot
</span><br>
<span class="quotelev3">&gt;&gt;&gt; open shared object file: No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./a.out: error while loading shared libraries: libmpi_f90.so.1: cannot
</span><br>
<span class="quotelev3">&gt;&gt;&gt; open shared object file: No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ls -l /usr/lib/openmpi/lib/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; total 6788
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lrwxrwxrwx. 1 root root      25 Sep 15 12:25 libmca_common_sm.so -&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libmca_common_sm.so.2.0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lrwxrwxrwx. 1 root root      25 Sep 14 16:14 libmca_common_sm.so.2 -&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libmca_common_sm.so.2.0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rwxr-xr-x. 1 root root    8492 Jan 20  2012 libmca_common_sm.so.2.0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lrwxrwxrwx. 1 root root      19 Sep 15 12:25 libmpi_cxx.so -&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libmpi_cxx.so.1.0.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lrwxrwxrwx. 1 root root      19 Sep 14 16:14 libmpi_cxx.so.1 -&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libmpi_cxx.so.1.0.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rwxr-xr-x. 1 root root   87604 Jan 20  2012 libmpi_cxx.so.1.0.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lrwxrwxrwx. 1 root root      19 Sep 15 12:25 libmpi_f77.so -&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libmpi_f77.so.1.0.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lrwxrwxrwx. 1 root root      19 Sep 14 16:14 libmpi_f77.so.1 -&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libmpi_f77.so.1.0.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rwxr-xr-x. 1 root root  179912 Jan 20  2012 libmpi_f77.so.1.0.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lrwxrwxrwx. 1 root root      19 Sep 15 12:25 libmpi_f90.so -&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libmpi_f90.so.1.1.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lrwxrwxrwx. 1 root root      19 Sep 14 16:14 libmpi_f90.so.1 -&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libmpi_f90.so.1.1.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rwxr-xr-x. 1 root root   10364 Jan 20  2012 libmpi_f90.so.1.1.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lrwxrwxrwx. 1 root root      15 Sep 15 12:25 libmpi.so -&gt; libmpi.so.1.0.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lrwxrwxrwx. 1 root root      15 Sep 14 16:14 libmpi.so.1 -&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libmpi.so.1.0.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rwxr-xr-x. 1 root root 1383444 Jan 20  2012 libmpi.so.1.0.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lrwxrwxrwx. 1 root root      21 Sep 15 12:25 libompitrace.so -&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libompitrace.so.0.0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lrwxrwxrwx. 1 root root      21 Sep 14 16:14 libompitrace.so.0 -&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libompitrace.so.0.0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rwxr-xr-x. 1 root root   13572 Jan 20  2012 libompitrace.so.0.0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lrwxrwxrwx. 1 root root      20 Sep 15 12:25 libopen-pal.so -&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libopen-pal.so.3.0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lrwxrwxrwx. 1 root root      20 Sep 14 16:14 libopen-pal.so.3 -&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libopen-pal.so.3.0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rwxr-xr-x. 1 root root  386324 Jan 20  2012 libopen-pal.so.3.0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lrwxrwxrwx. 1 root root      20 Sep 15 12:25 libopen-rte.so -&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libopen-rte.so.3.0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lrwxrwxrwx. 1 root root      20 Sep 14 16:14 libopen-rte.so.3 -&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libopen-rte.so.3.0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rwxr-xr-x. 1 root root  790052 Jan 20  2012 libopen-rte.so.3.0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rw-r--r--. 1 root root  301520 Jan 20  2012 libotf.a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lrwxrwxrwx. 1 root root      15 Sep 15 12:25 libotf.so -&gt; libotf.so.0.0.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lrwxrwxrwx. 1 root root      15 Sep 14 16:14 libotf.so.0 -&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libotf.so.0.0.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rwxr-xr-x. 1 root root  206384 Jan 20  2012 libotf.so.0.0.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rw-r--r--. 1 root root  337970 Jan 20  2012 libvt.a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rw-r--r--. 1 root root  591070 Jan 20  2012 libvt-hyb.a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lrwxrwxrwx. 1 root root      18 Sep 15 12:25 libvt-hyb.so -&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libvt-hyb.so.0.0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lrwxrwxrwx. 1 root root      18 Sep 14 16:14 libvt-hyb.so.0 -&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libvt-hyb.so.0.0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rwxr-xr-x. 1 root root  428844 Jan 20  2012 libvt-hyb.so.0.0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rw-r--r--. 1 root root  541004 Jan 20  2012 libvt-mpi.a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lrwxrwxrwx. 1 root root      18 Sep 15 12:25 libvt-mpi.so -&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libvt-mpi.so.0.0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lrwxrwxrwx. 1 root root      18 Sep 14 16:14 libvt-mpi.so.0 -&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libvt-mpi.so.0.0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rwxr-xr-x. 1 root root  396352 Jan 20  2012 libvt-mpi.so.0.0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rw-r--r--. 1 root root  372352 Jan 20  2012 libvt-mt.a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lrwxrwxrwx. 1 root root      17 Sep 15 12:25 libvt-mt.so -&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libvt-mt.so.0.0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lrwxrwxrwx. 1 root root      17 Sep 14 16:14 libvt-mt.so.0 -&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libvt-mt.so.0.0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rwxr-xr-x. 1 root root  266104 Jan 20  2012 libvt-mt.so.0.0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rw-r--r--. 1 root root   60390 Jan 20  2012 libvt-pomp.a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lrwxrwxrwx. 1 root root      14 Sep 15 12:25 libvt.so -&gt; libvt.so.0.0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lrwxrwxrwx. 1 root root      14 Sep 14 16:14 libvt.so.0 -&gt; libvt.so.0.0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rwxr-xr-x. 1 root root  242604 Jan 20  2012 libvt.so.0.0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rwxr-xr-x. 1 root root  303591 Jan 20  2012 mpi.mod
</span><br>
<span class="quotelev3">&gt;&gt;&gt; drwxr-xr-x. 2 root root    4096 Sep 14 16:14 openmpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The file (actually, a link) it claims it can't find: libmpi_f90.so.1, is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; clearly there. And LD_LIBRARY_PATH=/usr/lib/openmpi/lib/.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What's the problem?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---John
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20223/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20224.php">John Chludzinski: "Re: [OMPI users] Newbie question?"</a>
<li><strong>Previous message:</strong> <a href="20222.php">John Chludzinski: "Re: [OMPI users] Newbie question?"</a>
<li><strong>In reply to:</strong> <a href="20222.php">John Chludzinski: "Re: [OMPI users] Newbie question?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20224.php">John Chludzinski: "Re: [OMPI users] Newbie question?"</a>
<li><strong>Reply:</strong> <a href="20224.php">John Chludzinski: "Re: [OMPI users] Newbie question?"</a>
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
