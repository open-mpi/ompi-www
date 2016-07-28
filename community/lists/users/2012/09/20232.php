<?
$subject_val = "Re: [OMPI users] Newbie question?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 16 05:06:45 2012" -->
<!-- isoreceived="20120916090645" -->
<!-- sent="Sun, 16 Sep 2012 05:06:39 -0400" -->
<!-- isosent="20120916090639" -->
<!-- name="John Chludzinski" -->
<!-- email="john.chludzinski_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Newbie question?" -->
<!-- id="CABftzegjJY_a9cJ3EB93r0v2GbDqM3VxSiOrBWDOvHMRm2a81A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="10BAD9D9-065A-4C71-80C2-EB4DFEBCECC4_at_gmail.com" -->
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
<strong>Date:</strong> 2012-09-16 05:06:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20233.php">Jingcha Joba: "Re: [OMPI users] Newbie question?"</a>
<li><strong>Previous message:</strong> <a href="20231.php">John Chludzinski: "Re: [OMPI users] Newbie question?"</a>
<li><strong>In reply to:</strong> <a href="20230.php">Jingcha Joba: "Re: [OMPI users] Newbie question?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20233.php">Jingcha Joba: "Re: [OMPI users] Newbie question?"</a>
<li><strong>Reply:</strong> <a href="20233.php">Jingcha Joba: "Re: [OMPI users] Newbie question?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On a side note, do you have an RDMA supporting device (
</span><br>
Infiniband/RoCE/iWarp) ?
<br>
<p>I'm just an engineer trying to get something to work on an AMD dual core
<br>
notebook for the powers-that-be at a small engineering concern (all MEs) in
<br>
Huntsville, AL - i.e., NASA work.
<br>
<p>---John
<br>
<p>On Sun, Sep 16, 2012 at 3:21 AM, Jingcha Joba &lt;pukkimonkey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; John,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTL refers to Byte Transfer Layer, a framework to send/receive point to
</span><br>
<span class="quotelev1">&gt; point messages on different network. It has several components
</span><br>
<span class="quotelev1">&gt; (implementations) like openib, tcp, mx, shared mem, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ^openib means &quot;not&quot; to use openib component for p2p messages.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On a side note, do you have an RDMA supporting device (
</span><br>
<span class="quotelev1">&gt; Infiniband/RoCE/iWarp) ? If so, is OFED installed correctly and is running?
</span><br>
<span class="quotelev1">&gt; If you do not have, is the OFED running, which it should not, otherwise ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The message that you are getting could be because of this. As a
</span><br>
<span class="quotelev1">&gt; consequence, if you have a RDMA supported device, you might be getting poor
</span><br>
<span class="quotelev1">&gt; performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A wealth of information is available in the FAQ section regarding these
</span><br>
<span class="quotelev1">&gt; things.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Sent from my iPhone
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 15, 2012, at 9:49 PM, John Chludzinski &lt;john.chludzinski_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW, I looked up the -mca option:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  -mca |--mca &lt;arg0&gt; &lt;arg1&gt;
</span><br>
<span class="quotelev1">&gt;               Pass context-specific MCA parameters; they are
</span><br>
<span class="quotelev1">&gt;               considered global if --gmca is not used and only
</span><br>
<span class="quotelev1">&gt;               one context is specified (arg0 is the parameter
</span><br>
<span class="quotelev1">&gt;               name; arg1 is the parameter value)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you explain the args: btl and ^openib ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---John
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Sep 16, 2012 at 12:26 AM, John Chludzinski &lt;
</span><br>
<span class="quotelev1">&gt; john.chludzinski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; BINGO!  That did it.  Thanks.  ---John
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sat, Sep 15, 2012 at 9:32 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No - the mca param has to be specified *before* your executable
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec -mca btl ^openib -n 4 ./a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also, note the space between &quot;btl&quot; and &quot;^openib&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 15, 2012, at 5:45 PM, John Chludzinski &lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; john.chludzinski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is this what you intended(?):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *$ mpiexec -n 4 ./a.out -mca btl^openib
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; librdmacm: assuming: 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CMA: unable to get RDMA device list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[5991,1],0]: A high-performance Open MPI point-to-point messaging module
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was unable to find any relevant network interfaces:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Module: OpenFabrics (openib)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Host: elzbieta
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lower performance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; librdmacm: assuming: 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CMA: unable to get RDMA device list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; librdmacm: assuming: 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CMA: unable to get RDMA device list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; librdmacm: assuming: 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CMA: unable to get RDMA device list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  rank=            1  Results:    5.0000000       6.0000000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 7.0000000       8.0000000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  rank=            0  Results:    1.0000000       2.0000000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3.0000000       4.0000000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  rank=            2  Results:    9.0000000       10.000000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 11.000000       12.000000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  rank=            3  Results:    13.000000       14.000000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 15.000000       16.000000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [elzbieta:02374] 3 more processes have sent help message
</span><br>
<span class="quotelev3">&gt;&gt;&gt; help-mpi-btl-base.txt / btl:no-nics
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [elzbieta:02374] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; see all help / error messages
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sat, Sep 15, 2012 at 8:22 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Try adding &quot;-mca btl ^openib&quot; to your cmd line and see if that cleans
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it up.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sep 15, 2012, at 12:44 PM, John Chludzinski &lt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; john.chludzinski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There was a bug in the code.  So now I get this, which is correct but
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; how do I get rid of all these ABI, CMA, etc. messages?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ mpiexec -n 4 ./a.out
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; librdmacm: assuming: 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CMA: unable to get RDMA device list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; librdmacm: assuming: 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CMA: unable to get RDMA device list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CMA: unable to get RDMA device list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; librdmacm: assuming: 4
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
<span class="quotelev4">&gt;&gt;&gt;&gt; [[6110,1],1]: A high-performance Open MPI point-to-point messaging
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
<span class="quotelev4">&gt;&gt;&gt;&gt;  rank=            1  Results:    5.0000000       6.0000000
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 7.0000000       8.0000000
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  rank=            2  Results:    9.0000000       10.000000
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 11.000000       12.000000
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  rank=            0  Results:    1.0000000       2.0000000
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3.0000000       4.0000000
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  rank=            3  Results:    13.000000       14.000000
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 15.000000       16.000000
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [elzbieta:02559] 3 more processes have sent help message
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; help-mpi-btl-base.txt / btl:no-nics
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [elzbieta:02559] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; see all help / error messages
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sat, Sep 15, 2012 at 3:34 PM, John Chludzinski &lt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; john.chludzinski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; BTW, here the example code:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; program scatter
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; include 'mpif.h'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; integer, parameter :: SIZE=4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; integer :: numtasks, rank, sendcount, recvcount, source, ierr
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; real :: sendbuf(SIZE,SIZE), recvbuf(SIZE)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; !  Fortran stores this array in column major order, so the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; !  scatter will actually scatter columns, not rows.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; data sendbuf /1.0, 2.0, 3.0, 4.0, &amp;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 5.0, 6.0, 7.0, 8.0, &amp;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 9.0, 10.0, 11.0, 12.0, &amp;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 13.0, 14.0, 15.0, 16.0 /
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; call MPI_INIT(ierr)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierr)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; call MPI_COMM_SIZE(MPI_COMM_WORLD, numtasks, ierr)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; if (numtasks .eq. SIZE) then
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   source = 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   sendcount = SIZE
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   recvcount = SIZE
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   call MPI_SCATTER(sendbuf, sendcount, MPI_REAL, recvbuf, &amp;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    recvcount, MPI_REAL, source, MPI_COMM_WORLD, ierr)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   print *, 'rank= ',rank,' Results: ',recvbuf
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; else
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    print *, 'Must specify',SIZE,' processors.  Terminating.'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; endif
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; call MPI_FINALIZE(ierr)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; end program
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Sat, Sep 15, 2012 at 3:02 PM, John Chludzinski &lt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; john.chludzinski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # export LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # mpiexec -n 1 printenv | grep PATH
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; LD_LIBRARY_PATH=/usr/lib/openmpi/lib/
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PATH=/usr/lib/openmpi/bin/:/usr/lib/ccache:/usr/local/bin:/usr/bin:/bin:/usr/local/sbin:/usr/sbin:/sbin:/home/jski/.local/bin:/home/jski/bin
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MODULEPATH=/usr/share/Modules/modulefiles:/etc/modulefiles
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; WINDOWPATH=1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # mpiexec -n 4 ./a.out
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; librdmacm: assuming: 4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; CMA: unable to get RDMA device list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [[3598,1],0]: A high-performance Open MPI point-to-point messaging
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; module
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; was unable to find any relevant network interfaces:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Module: OpenFabrics (openib)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   Host: elzbieta
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; lower performance.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; librdmacm: assuming: 4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; CMA: unable to get RDMA device list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; librdmacm: assuming: 4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; CMA: unable to get RDMA device list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; librdmacm: assuming: 4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; CMA: unable to get RDMA device list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [elzbieta:4145] *** An error occurred in MPI_Scatter
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [elzbieta:4145] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [elzbieta:4145] *** MPI_ERR_TYPE: invalid datatype
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [elzbieta:4145] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpiexec has exited due to process rank 1 with PID 4145 on
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; node elzbieta exiting improperly. There are two reasons this could
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; occur:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; for all processes to call &quot;init&quot;. By rule, if one process calls
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;init&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; terminated by signals sent by mpiexec (as reported here).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Sat, Sep 15, 2012 at 2:24 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ah - note that there is no LD_LIBRARY_PATH in the environment.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; That's the problem
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Sep 15, 2012, at 11:19 AM, John Chludzinski &lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; john.chludzinski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ which mpiexec
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/lib/openmpi/bin/mpiexec
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; # mpiexec -n 1 printenv | grep PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; PATH=/usr/lib/openmpi/bin/:/usr/lib/ccache:/usr/local/bin:/usr/bin:/bin:/usr/local/sbin:/usr/sbin:/sbin:/home/jski/.local/bin:/home/jski/bin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; MODULEPATH=/usr/share/Modules/modulefiles:/etc/modulefiles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; WINDOWPATH=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Sat, Sep 15, 2012 at 1:11 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Couple of things worth checking:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1. verify that you executed the &quot;mpiexec&quot; you think you did - a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; simple &quot;which mpiexec&quot; should suffice
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2. verify that your environment is correct by &quot;mpiexec -n 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; printenv | grep PATH&quot;. Sometimes the ld_library_path doesn't carry over
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; like you think it should
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  On Sep 15, 2012, at 10:00 AM, John Chludzinski &lt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; john.chludzinski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I installed OpenMPI (I have a simple dual core AMD notebook with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Fedora 16) via:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; # yum install openmpi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; # yum install openmpi-devel
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; # mpirun --version
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun (Open MPI) 1.5.4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I added:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ PATH=PATH=/usr/lib/openmpi/bin/:$PATH
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ LD_LIBRARY_PATH=/usr/lib/openmpi/lib/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Then:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ mpif90 ex1.f95
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ mpiexec -n 4 ./a.out
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ./a.out: error while loading shared libraries: libmpi_f90.so.1:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ./a.out: error while loading shared libraries: libmpi_f90.so.1:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ./a.out: error while loading shared libraries: libmpi_f90.so.1:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ./a.out: error while loading shared libraries: libmpi_f90.so.1:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpiexec noticed that the job aborted, but has no info as to the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; process
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ls -l /usr/lib/openmpi/lib/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; total 6788
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      25 Sep 15 12:25 libmca_common_sm.so -&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libmca_common_sm.so.2.0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      25 Sep 14 16:14 libmca_common_sm.so.2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -&gt; libmca_common_sm.so.2.0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x. 1 root root    8492 Jan 20  2012
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libmca_common_sm.so.2.0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      19 Sep 15 12:25 libmpi_cxx.so -&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libmpi_cxx.so.1.0.1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      19 Sep 14 16:14 libmpi_cxx.so.1 -&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libmpi_cxx.so.1.0.1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x. 1 root root   87604 Jan 20  2012 libmpi_cxx.so.1.0.1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      19 Sep 15 12:25 libmpi_f77.so -&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libmpi_f77.so.1.0.2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      19 Sep 14 16:14 libmpi_f77.so.1 -&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libmpi_f77.so.1.0.2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x. 1 root root  179912 Jan 20  2012 libmpi_f77.so.1.0.2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      19 Sep 15 12:25 libmpi_f90.so -&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libmpi_f90.so.1.1.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      19 Sep 14 16:14 libmpi_f90.so.1 -&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libmpi_f90.so.1.1.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x. 1 root root   10364 Jan 20  2012 libmpi_f90.so.1.1.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      15 Sep 15 12:25 libmpi.so -&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libmpi.so.1.0.2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      15 Sep 14 16:14 libmpi.so.1 -&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libmpi.so.1.0.2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x. 1 root root 1383444 Jan 20  2012 libmpi.so.1.0.2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      21 Sep 15 12:25 libompitrace.so -&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libompitrace.so.0.0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      21 Sep 14 16:14 libompitrace.so.0 -&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libompitrace.so.0.0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x. 1 root root   13572 Jan 20  2012 libompitrace.so.0.0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      20 Sep 15 12:25 libopen-pal.so -&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libopen-pal.so.3.0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      20 Sep 14 16:14 libopen-pal.so.3 -&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libopen-pal.so.3.0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x. 1 root root  386324 Jan 20  2012 libopen-pal.so.3.0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      20 Sep 15 12:25 libopen-rte.so -&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libopen-rte.so.3.0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      20 Sep 14 16:14 libopen-rte.so.3 -&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libopen-rte.so.3.0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x. 1 root root  790052 Jan 20  2012 libopen-rte.so.3.0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -rw-r--r--. 1 root root  301520 Jan 20  2012 libotf.a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      15 Sep 15 12:25 libotf.so -&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libotf.so.0.0.1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      15 Sep 14 16:14 libotf.so.0 -&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libotf.so.0.0.1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x. 1 root root  206384 Jan 20  2012 libotf.so.0.0.1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -rw-r--r--. 1 root root  337970 Jan 20  2012 libvt.a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -rw-r--r--. 1 root root  591070 Jan 20  2012 libvt-hyb.a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      18 Sep 15 12:25 libvt-hyb.so -&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libvt-hyb.so.0.0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      18 Sep 14 16:14 libvt-hyb.so.0 -&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libvt-hyb.so.0.0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x. 1 root root  428844 Jan 20  2012 libvt-hyb.so.0.0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -rw-r--r--. 1 root root  541004 Jan 20  2012 libvt-mpi.a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      18 Sep 15 12:25 libvt-mpi.so -&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libvt-mpi.so.0.0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      18 Sep 14 16:14 libvt-mpi.so.0 -&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libvt-mpi.so.0.0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x. 1 root root  396352 Jan 20  2012 libvt-mpi.so.0.0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -rw-r--r--. 1 root root  372352 Jan 20  2012 libvt-mt.a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      17 Sep 15 12:25 libvt-mt.so -&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libvt-mt.so.0.0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      17 Sep 14 16:14 libvt-mt.so.0 -&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libvt-mt.so.0.0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x. 1 root root  266104 Jan 20  2012 libvt-mt.so.0.0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -rw-r--r--. 1 root root   60390 Jan 20  2012 libvt-pomp.a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      14 Sep 15 12:25 libvt.so -&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libvt.so.0.0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx. 1 root root      14 Sep 14 16:14 libvt.so.0 -&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libvt.so.0.0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x. 1 root root  242604 Jan 20  2012 libvt.so.0.0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x. 1 root root  303591 Jan 20  2012 mpi.mod
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; drwxr-xr-x. 2 root root    4096 Sep 14 16:14 openmpi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The file (actually, a link) it claims it can't find:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libmpi_f90.so.1, is clearly there. And
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; LD_LIBRARY_PATH=/usr/lib/openmpi/lib/.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; What's the problem?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ---John
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20232/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20233.php">Jingcha Joba: "Re: [OMPI users] Newbie question?"</a>
<li><strong>Previous message:</strong> <a href="20231.php">John Chludzinski: "Re: [OMPI users] Newbie question?"</a>
<li><strong>In reply to:</strong> <a href="20230.php">Jingcha Joba: "Re: [OMPI users] Newbie question?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20233.php">Jingcha Joba: "Re: [OMPI users] Newbie question?"</a>
<li><strong>Reply:</strong> <a href="20233.php">Jingcha Joba: "Re: [OMPI users] Newbie question?"</a>
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
