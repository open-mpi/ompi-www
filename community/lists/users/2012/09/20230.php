<?
$subject_val = "Re: [OMPI users] Newbie question?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 16 03:19:13 2012" -->
<!-- isoreceived="20120916071913" -->
<!-- sent="Sun, 16 Sep 2012 00:21:40 -0700" -->
<!-- isosent="20120916072140" -->
<!-- name="Jingcha Joba" -->
<!-- email="pukkimonkey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Newbie question?" -->
<!-- id="10BAD9D9-065A-4C71-80C2-EB4DFEBCECC4_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CABftzeim1c4MoxbaXJ2P7DLefb-fKuepA5XSrHoHypN3N38tWw_at_mail.gmail.com" -->
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
<strong>From:</strong> Jingcha Joba (<em>pukkimonkey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-16 03:21:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20231.php">John Chludzinski: "Re: [OMPI users] Newbie question?"</a>
<li><strong>Previous message:</strong> <a href="20229.php">John Chludzinski: "Re: [OMPI users] Newbie question?"</a>
<li><strong>In reply to:</strong> <a href="20229.php">John Chludzinski: "Re: [OMPI users] Newbie question?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20231.php">John Chludzinski: "Re: [OMPI users] Newbie question?"</a>
<li><strong>Reply:</strong> <a href="20231.php">John Chludzinski: "Re: [OMPI users] Newbie question?"</a>
<li><strong>Reply:</strong> <a href="20232.php">John Chludzinski: "Re: [OMPI users] Newbie question?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
John,
<br>
<p>BTL refers to Byte Transfer Layer, a framework to send/receive point to point messages on different network. It has several components (implementations) like openib, tcp, mx, shared mem, etc.
<br>
<p>^openib means &quot;not&quot; to use openib component for p2p messages.
<br>
<p>On a side note, do you have an RDMA supporting device ( Infiniband/RoCE/iWarp) ? If so, is OFED installed correctly and is running?
<br>
If you do not have, is the OFED running, which it should not, otherwise ?
<br>
<p>The message that you are getting could be because of this. As a consequence, if you have a RDMA supported device, you might be getting poor performance.
<br>
&nbsp;
<br>
A wealth of information is available in the FAQ section regarding these things.
<br>
<p><pre>
--
Sent from my iPhone
On Sep 15, 2012, at 9:49 PM, John Chludzinski &lt;john.chludzinski_at_[hidden]&gt; wrote:
&gt; BTW, I looked up the -mca option:
&gt; 
&gt;  -mca |--mca &lt;arg0&gt; &lt;arg1&gt;  
&gt;               Pass context-specific MCA parameters; they are
&gt;               considered global if --gmca is not used and only
&gt;               one context is specified (arg0 is the parameter
&gt;               name; arg1 is the parameter value)
&gt; 
&gt; Could you explain the args: btl and ^openib ?
&gt; 
&gt; ---John
&gt; 
&gt; 
&gt; On Sun, Sep 16, 2012 at 12:26 AM, John Chludzinski &lt;john.chludzinski_at_[hidden]&gt; wrote:
&gt; BINGO!  That did it.  Thanks.  ---John
&gt; 
&gt; 
&gt; On Sat, Sep 15, 2012 at 9:32 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
&gt; No - the mca param has to be specified *before* your executable
&gt; 
&gt; mpiexec -mca btl ^openib -n 4 ./a.out
&gt; 
&gt; Also, note the space between &quot;btl&quot; and &quot;^openib&quot;
&gt; 
&gt; 
&gt; On Sep 15, 2012, at 5:45 PM, John Chludzinski &lt;john.chludzinski_at_[hidden]&gt; wrote:
&gt; 
&gt;&gt; Is this what you intended(?):
&gt;&gt; 
&gt;&gt; $ mpiexec -n 4 ./a.out -mca btl^openib
&gt;&gt; 
&gt;&gt; librdmacm: couldn't read ABI version.
&gt;&gt; librdmacm: assuming: 4
&gt;&gt; CMA: unable to get RDMA device list
&gt;&gt; --------------------------------------------------------------------------
&gt;&gt; [[5991,1],0]: A high-performance Open MPI point-to-point messaging module
&gt;&gt; was unable to find any relevant network interfaces:
&gt;&gt; 
&gt;&gt; Module: OpenFabrics (openib)
&gt;&gt;   Host: elzbieta
&gt;&gt; 
&gt;&gt; Another transport will be used instead, although this may result in
&gt;&gt; lower performance.
&gt;&gt; --------------------------------------------------------------------------
&gt;&gt; librdmacm: couldn't read ABI version.
&gt;&gt; librdmacm: assuming: 4
&gt;&gt; CMA: unable to get RDMA device list
&gt;&gt; librdmacm: couldn't read ABI version.
&gt;&gt; librdmacm: assuming: 4
&gt;&gt; CMA: unable to get RDMA device list
&gt;&gt; librdmacm: couldn't read ABI version.
&gt;&gt; librdmacm: assuming: 4
&gt;&gt; CMA: unable to get RDMA device list
&gt;&gt;  rank=            1  Results:    5.0000000       6.0000000       7.0000000       8.0000000    
&gt;&gt;  rank=            0  Results:    1.0000000       2.0000000       3.0000000       4.0000000    
&gt;&gt;  rank=            2  Results:    9.0000000       10.000000       11.000000       12.000000    
&gt;&gt;  rank=            3  Results:    13.000000       14.000000       15.000000       16.000000    
&gt;&gt; [elzbieta:02374] 3 more processes have sent help message help-mpi-btl-base.txt / btl:no-nics
&gt;&gt; [elzbieta:02374] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
&gt;&gt; 
&gt;&gt; 
&gt;&gt; On Sat, Sep 15, 2012 at 8:22 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
&gt;&gt; Try adding &quot;-mca btl ^openib&quot; to your cmd line and see if that cleans it up.
&gt;&gt; 
&gt;&gt; 
&gt;&gt; On Sep 15, 2012, at 12:44 PM, John Chludzinski &lt;john.chludzinski_at_[hidden]&gt; wrote:
&gt;&gt; 
&gt;&gt;&gt; There was a bug in the code.  So now I get this, which is correct but how do I get rid of all these ABI, CMA, etc. messages?
&gt;&gt;&gt; 
&gt;&gt;&gt; $ mpiexec -n 4 ./a.out 
&gt;&gt;&gt; librdmacm: couldn't read ABI version.
&gt;&gt;&gt; librdmacm: couldn't read ABI version.
&gt;&gt;&gt; librdmacm: assuming: 4
&gt;&gt;&gt; CMA: unable to get RDMA device list
&gt;&gt;&gt; librdmacm: assuming: 4
&gt;&gt;&gt; CMA: unable to get RDMA device list
&gt;&gt;&gt; CMA: unable to get RDMA device list
&gt;&gt;&gt; librdmacm: couldn't read ABI version.
&gt;&gt;&gt; librdmacm: assuming: 4
&gt;&gt;&gt; librdmacm: couldn't read ABI version.
&gt;&gt;&gt; librdmacm: assuming: 4
&gt;&gt;&gt; CMA: unable to get RDMA device list
&gt;&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&gt; [[6110,1],1]: A high-performance Open MPI point-to-point messaging module
&gt;&gt;&gt; was unable to find any relevant network interfaces:
&gt;&gt;&gt; 
&gt;&gt;&gt; Module: OpenFabrics (openib)
&gt;&gt;&gt;   Host: elzbieta
&gt;&gt;&gt; 
&gt;&gt;&gt; Another transport will be used instead, although this may result in
&gt;&gt;&gt; lower performance.
&gt;&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&gt;  rank=            1  Results:    5.0000000       6.0000000       7.0000000       8.0000000    
&gt;&gt;&gt;  rank=            2  Results:    9.0000000       10.000000       11.000000       12.000000    
&gt;&gt;&gt;  rank=            0  Results:    1.0000000       2.0000000       3.0000000       4.0000000    
&gt;&gt;&gt;  rank=            3  Results:    13.000000       14.000000       15.000000       16.000000    
&gt;&gt;&gt; [elzbieta:02559] 3 more processes have sent help message help-mpi-btl-base.txt / btl:no-nics
&gt;&gt;&gt; [elzbieta:02559] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; On Sat, Sep 15, 2012 at 3:34 PM, John Chludzinski &lt;john.chludzinski_at_[hidden]&gt; wrote:
&gt;&gt;&gt; BTW, here the example code:
&gt;&gt;&gt; 
&gt;&gt;&gt; program scatter
&gt;&gt;&gt; include 'mpif.h'
&gt;&gt;&gt; 
&gt;&gt;&gt; integer, parameter :: SIZE=4
&gt;&gt;&gt; integer :: numtasks, rank, sendcount, recvcount, source, ierr
&gt;&gt;&gt; real :: sendbuf(SIZE,SIZE), recvbuf(SIZE)
&gt;&gt;&gt; 
&gt;&gt;&gt; !  Fortran stores this array in column major order, so the 
&gt;&gt;&gt; !  scatter will actually scatter columns, not rows.
&gt;&gt;&gt; data sendbuf /1.0, 2.0, 3.0, 4.0, &amp;
&gt;&gt;&gt; 5.0, 6.0, 7.0, 8.0, &amp;
&gt;&gt;&gt; 9.0, 10.0, 11.0, 12.0, &amp;
&gt;&gt;&gt; 13.0, 14.0, 15.0, 16.0 /
&gt;&gt;&gt; 
&gt;&gt;&gt; call MPI_INIT(ierr)
&gt;&gt;&gt; call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierr)
&gt;&gt;&gt; call MPI_COMM_SIZE(MPI_COMM_WORLD, numtasks, ierr)
&gt;&gt;&gt; 
&gt;&gt;&gt; if (numtasks .eq. SIZE) then
&gt;&gt;&gt;   source = 1
&gt;&gt;&gt;   sendcount = SIZE
&gt;&gt;&gt;   recvcount = SIZE
&gt;&gt;&gt;   call MPI_SCATTER(sendbuf, sendcount, MPI_REAL, recvbuf, &amp;
&gt;&gt;&gt;                    recvcount, MPI_REAL, source, MPI_COMM_WORLD, ierr)
&gt;&gt;&gt;   print *, 'rank= ',rank,' Results: ',recvbuf 
&gt;&gt;&gt; else
&gt;&gt;&gt;    print *, 'Must specify',SIZE,' processors.  Terminating.' 
&gt;&gt;&gt; endif
&gt;&gt;&gt; 
&gt;&gt;&gt; call MPI_FINALIZE(ierr)
&gt;&gt;&gt; 
&gt;&gt;&gt; end program
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; On Sat, Sep 15, 2012 at 3:02 PM, John Chludzinski &lt;john.chludzinski_at_[hidden]&gt; wrote:
&gt;&gt;&gt; # export LD_LIBRARY_PATH
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; # mpiexec -n 1 printenv | grep PATH
&gt;&gt;&gt; LD_LIBRARY_PATH=/usr/lib/openmpi/lib/
&gt;&gt;&gt; 
&gt;&gt;&gt; PATH=/usr/lib/openmpi/bin/:/usr/lib/ccache:/usr/local/bin:/usr/bin:/bin:/usr/local/sbin:/usr/sbin:/sbin:/home/jski/.local/bin:/home/jski/bin
&gt;&gt;&gt; MODULEPATH=/usr/share/Modules/modulefiles:/etc/modulefiles
&gt;&gt;&gt; WINDOWPATH=1
&gt;&gt;&gt; 
&gt;&gt;&gt; # mpiexec -n 4 ./a.out 
&gt;&gt;&gt; librdmacm: couldn't read ABI version.
&gt;&gt;&gt; librdmacm: assuming: 4
&gt;&gt;&gt; CMA: unable to get RDMA device list
&gt;&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&gt; [[3598,1],0]: A high-performance Open MPI point-to-point messaging module
&gt;&gt;&gt; was unable to find any relevant network interfaces:
&gt;&gt;&gt; 
&gt;&gt;&gt; Module: OpenFabrics (openib)
&gt;&gt;&gt;   Host: elzbieta
&gt;&gt;&gt; 
&gt;&gt;&gt; Another transport will be used instead, although this may result in
&gt;&gt;&gt; lower performance.
&gt;&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&gt; librdmacm: couldn't read ABI version.
&gt;&gt;&gt; librdmacm: assuming: 4
&gt;&gt;&gt; librdmacm: couldn't read ABI version.
&gt;&gt;&gt; CMA: unable to get RDMA device list
&gt;&gt;&gt; librdmacm: assuming: 4
&gt;&gt;&gt; CMA: unable to get RDMA device list
&gt;&gt;&gt; librdmacm: couldn't read ABI version.
&gt;&gt;&gt; librdmacm: assuming: 4
&gt;&gt;&gt; CMA: unable to get RDMA device list
&gt;&gt;&gt; [elzbieta:4145] *** An error occurred in MPI_Scatter
&gt;&gt;&gt; [elzbieta:4145] *** on communicator MPI_COMM_WORLD
&gt;&gt;&gt; [elzbieta:4145] *** MPI_ERR_TYPE: invalid datatype
&gt;&gt;&gt; [elzbieta:4145] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
&gt;&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&gt; mpiexec has exited due to process rank 1 with PID 4145 on
&gt;&gt;&gt; node elzbieta exiting improperly. There are two reasons this could occur:
&gt;&gt;&gt; 
&gt;&gt;&gt; 1. this process did not call &quot;init&quot; before exiting, but others in
&gt;&gt;&gt; the job did. This can cause a job to hang indefinitely while it waits
&gt;&gt;&gt; for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
&gt;&gt;&gt; then ALL processes must call &quot;init&quot; prior to termination.
&gt;&gt;&gt; 
&gt;&gt;&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
&gt;&gt;&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
&gt;&gt;&gt; exiting or it will be considered an &quot;abnormal termination&quot;
&gt;&gt;&gt; 
&gt;&gt;&gt; This may have caused other processes in the application to be
&gt;&gt;&gt; terminated by signals sent by mpiexec (as reported here).
&gt;&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; On Sat, Sep 15, 2012 at 2:24 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
&gt;&gt;&gt; Ah - note that there is no LD_LIBRARY_PATH in the environment. That's the problem
&gt;&gt;&gt; 
&gt;&gt;&gt; On Sep 15, 2012, at 11:19 AM, John Chludzinski &lt;john.chludzinski_at_[hidden]&gt; wrote:
&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; $ which mpiexec
&gt;&gt;&gt;&gt; /usr/lib/openmpi/bin/mpiexec
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; # mpiexec -n 1 printenv | grep PATH
&gt;&gt;&gt;&gt; PATH=/usr/lib/openmpi/bin/:/usr/lib/ccache:/usr/local/bin:/usr/bin:/bin:/usr/local/sbin:/usr/sbin:/sbin:/home/jski/.local/bin:/home/jski/bin
&gt;&gt;&gt;&gt; MODULEPATH=/usr/share/Modules/modulefiles:/etc/modulefiles
&gt;&gt;&gt;&gt; WINDOWPATH=1
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; On Sat, Sep 15, 2012 at 1:11 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
&gt;&gt;&gt;&gt; Couple of things worth checking:
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; 1. verify that you executed the &quot;mpiexec&quot; you think you did - a simple &quot;which mpiexec&quot; should suffice
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; 2. verify that your environment is correct by &quot;mpiexec -n 1 printenv | grep PATH&quot;. Sometimes the ld_library_path doesn't carry over like you think it should
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; On Sep 15, 2012, at 10:00 AM, John Chludzinski &lt;john.chludzinski_at_[hidden]&gt; wrote:
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; I installed OpenMPI (I have a simple dual core AMD notebook with Fedora 16) via:
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; # yum install openmpi
&gt;&gt;&gt;&gt;&gt; # yum install openmpi-devel
&gt;&gt;&gt;&gt;&gt; # mpirun --version
&gt;&gt;&gt;&gt;&gt; mpirun (Open MPI) 1.5.4
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; I added: 
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; $ PATH=PATH=/usr/lib/openmpi/bin/:$PATH
&gt;&gt;&gt;&gt;&gt; $ LD_LIBRARY_PATH=/usr/lib/openmpi/lib/
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; Then:
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; $ mpif90 ex1.f95
&gt;&gt;&gt;&gt;&gt; $ mpiexec -n 4 ./a.out 
&gt;&gt;&gt;&gt;&gt; ./a.out: error while loading shared libraries: libmpi_f90.so.1: cannot open shared object file: No such file or directory
&gt;&gt;&gt;&gt;&gt; ./a.out: error while loading shared libraries: libmpi_f90.so.1: cannot open shared object file: No such file or directory
&gt;&gt;&gt;&gt;&gt; ./a.out: error while loading shared libraries: libmpi_f90.so.1: cannot open shared object file: No such file or directory
&gt;&gt;&gt;&gt;&gt; ./a.out: error while loading shared libraries: libmpi_f90.so.1: cannot open shared object file: No such file or directory
&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&gt;&gt;&gt; mpiexec noticed that the job aborted, but has no info as to the process
&gt;&gt;&gt;&gt;&gt; that caused that situation.
&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; ls -l /usr/lib/openmpi/lib/
&gt;&gt;&gt;&gt;&gt; total 6788
&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      25 Sep 15 12:25 libmca_common_sm.so -&gt; libmca_common_sm.so.2.0.0
&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      25 Sep 14 16:14 libmca_common_sm.so.2 -&gt; libmca_common_sm.so.2.0.0
&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x. 1 root root    8492 Jan 20  2012 libmca_common_sm.so.2.0.0
&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      19 Sep 15 12:25 libmpi_cxx.so -&gt; libmpi_cxx.so.1.0.1
&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      19 Sep 14 16:14 libmpi_cxx.so.1 -&gt; libmpi_cxx.so.1.0.1
&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x. 1 root root   87604 Jan 20  2012 libmpi_cxx.so.1.0.1
&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      19 Sep 15 12:25 libmpi_f77.so -&gt; libmpi_f77.so.1.0.2
&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      19 Sep 14 16:14 libmpi_f77.so.1 -&gt; libmpi_f77.so.1.0.2
&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x. 1 root root  179912 Jan 20  2012 libmpi_f77.so.1.0.2
&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      19 Sep 15 12:25 libmpi_f90.so -&gt; libmpi_f90.so.1.1.0
&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      19 Sep 14 16:14 libmpi_f90.so.1 -&gt; libmpi_f90.so.1.1.0
&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x. 1 root root   10364 Jan 20  2012 libmpi_f90.so.1.1.0
&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      15 Sep 15 12:25 libmpi.so -&gt; libmpi.so.1.0.2
&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      15 Sep 14 16:14 libmpi.so.1 -&gt; libmpi.so.1.0.2
&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x. 1 root root 1383444 Jan 20  2012 libmpi.so.1.0.2
&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      21 Sep 15 12:25 libompitrace.so -&gt; libompitrace.so.0.0.0
&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      21 Sep 14 16:14 libompitrace.so.0 -&gt; libompitrace.so.0.0.0
&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x. 1 root root   13572 Jan 20  2012 libompitrace.so.0.0.0
&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      20 Sep 15 12:25 libopen-pal.so -&gt; libopen-pal.so.3.0.0
&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      20 Sep 14 16:14 libopen-pal.so.3 -&gt; libopen-pal.so.3.0.0
&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x. 1 root root  386324 Jan 20  2012 libopen-pal.so.3.0.0
&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      20 Sep 15 12:25 libopen-rte.so -&gt; libopen-rte.so.3.0.0
&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      20 Sep 14 16:14 libopen-rte.so.3 -&gt; libopen-rte.so.3.0.0
&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x. 1 root root  790052 Jan 20  2012 libopen-rte.so.3.0.0
&gt;&gt;&gt;&gt;&gt; -rw-r--r--. 1 root root  301520 Jan 20  2012 libotf.a
&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      15 Sep 15 12:25 libotf.so -&gt; libotf.so.0.0.1
&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      15 Sep 14 16:14 libotf.so.0 -&gt; libotf.so.0.0.1
&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x. 1 root root  206384 Jan 20  2012 libotf.so.0.0.1
&gt;&gt;&gt;&gt;&gt; -rw-r--r--. 1 root root  337970 Jan 20  2012 libvt.a
&gt;&gt;&gt;&gt;&gt; -rw-r--r--. 1 root root  591070 Jan 20  2012 libvt-hyb.a
&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      18 Sep 15 12:25 libvt-hyb.so -&gt; libvt-hyb.so.0.0.0
&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      18 Sep 14 16:14 libvt-hyb.so.0 -&gt; libvt-hyb.so.0.0.0
&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x. 1 root root  428844 Jan 20  2012 libvt-hyb.so.0.0.0
&gt;&gt;&gt;&gt;&gt; -rw-r--r--. 1 root root  541004 Jan 20  2012 libvt-mpi.a
&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      18 Sep 15 12:25 libvt-mpi.so -&gt; libvt-mpi.so.0.0.0
&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      18 Sep 14 16:14 libvt-mpi.so.0 -&gt; libvt-mpi.so.0.0.0
&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x. 1 root root  396352 Jan 20  2012 libvt-mpi.so.0.0.0
&gt;&gt;&gt;&gt;&gt; -rw-r--r--. 1 root root  372352 Jan 20  2012 libvt-mt.a
&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      17 Sep 15 12:25 libvt-mt.so -&gt; libvt-mt.so.0.0.0
&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      17 Sep 14 16:14 libvt-mt.so.0 -&gt; libvt-mt.so.0.0.0
&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x. 1 root root  266104 Jan 20  2012 libvt-mt.so.0.0.0
&gt;&gt;&gt;&gt;&gt; -rw-r--r--. 1 root root   60390 Jan 20  2012 libvt-pomp.a
&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      14 Sep 15 12:25 libvt.so -&gt; libvt.so.0.0.0
&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      14 Sep 14 16:14 libvt.so.0 -&gt; libvt.so.0.0.0
&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x. 1 root root  242604 Jan 20  2012 libvt.so.0.0.0
&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x. 1 root root  303591 Jan 20  2012 mpi.mod
&gt;&gt;&gt;&gt;&gt; drwxr-xr-x. 2 root root    4096 Sep 14 16:14 openmpi
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; The file (actually, a link) it claims it can't find: libmpi_f90.so.1, is clearly there. And LD_LIBRARY_PATH=/usr/lib/openmpi/lib/.
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; What's the problem?
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; ---John
&gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt;&gt; users mailing list
&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt; users mailing list
&gt;&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt; users mailing list
&gt;&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; 
&gt;&gt; 
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; 
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20230/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20231.php">John Chludzinski: "Re: [OMPI users] Newbie question?"</a>
<li><strong>Previous message:</strong> <a href="20229.php">John Chludzinski: "Re: [OMPI users] Newbie question?"</a>
<li><strong>In reply to:</strong> <a href="20229.php">John Chludzinski: "Re: [OMPI users] Newbie question?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20231.php">John Chludzinski: "Re: [OMPI users] Newbie question?"</a>
<li><strong>Reply:</strong> <a href="20231.php">John Chludzinski: "Re: [OMPI users] Newbie question?"</a>
<li><strong>Reply:</strong> <a href="20232.php">John Chludzinski: "Re: [OMPI users] Newbie question?"</a>
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
