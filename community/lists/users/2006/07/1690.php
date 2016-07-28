<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 28 14:37:52 2006" -->
<!-- isoreceived="20060728183752" -->
<!-- sent="Fri, 28 Jul 2006 14:37:38 -0400" -->
<!-- isosent="20060728183738" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mca_btl_tcp_frag_send: writev failed with errno=110" -->
<!-- id="C0EFD1B2.BBD8%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="004001c69c41$bd5d1840$ca79e30a_at_ladd02" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-28 14:37:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1691.php">Dan Lipsitt: "[OMPI users] error while loading shared libraries: libmpi.so.0: cannot open shared object file"</a>
<li><strong>Previous message:</strong> <a href="1689.php">Jeff Squyres: "Re: [OMPI users] OS X, OpenMPI 1.1: An error occurred in MPI_Allreduce on, communicator MPI_COMM_WORLD (Jeff Squyres (jsquyres))"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/06/1515.php">Tony Ladd: "Re: [OMPI users] mca_btl_tcp_frag_send: writev failed with errno=110"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tony --
<br>
<p>My apologies for taking so long to answer.  :-(
<br>
<p>I was unfortunately unable to replicate your problem.  I ran your source
<br>
code across 32 machines connected by TCP with no problem:
<br>
<p>&nbsp;&nbsp;mpirun --hostfile ~/mpi/cdc -np 32 -mca btl tcp,self netbench 8
<br>
<p>I tried this on two different clusters with the same results -- it didn't
<br>
hang.  :-(
<br>
<p>Can you try again with a recent nightly tarball, or the 1.1.1 beta tarball
<br>
that has been posted?
<br>
<p>&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/ompi/v1.1/">http://www.open-mpi.org/software/ompi/v1.1/</a>
<br>
<p><p>On 6/30/06 8:35 AM, &quot;Tony Ladd&quot; &lt;ladd_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the reply; I realize you guys must be really busy with the recent
</span><br>
<span class="quotelev1">&gt; release of openmpi. I tried 1.1 and I don't get error messages any more. But
</span><br>
<span class="quotelev1">&gt; the code now hangs; no error or exit. So I am not sure if this is the same
</span><br>
<span class="quotelev1">&gt; issue or something else. I am enclosing my source code. I compiled with icc
</span><br>
<span class="quotelev1">&gt; and linked against an icc compiled version of openmpi-1.1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My program is a set of network benchmarks (a crude kind of netpipe) that
</span><br>
<span class="quotelev1">&gt; checks typical message passing patterns in my application codes.
</span><br>
<span class="quotelev1">&gt; Typical output is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  32 CPU's: sync call time = 1003.0        time
</span><br>
<span class="quotelev1">&gt; rate (Mbytes/s)                     bandwidth (MBits/s)
</span><br>
<span class="quotelev1">&gt;      loop   buffers  size     XC       XE       GS       MS         XC
</span><br>
<span class="quotelev1">&gt; XE       GS       MS         XC       XE       GS       MS
</span><br>
<span class="quotelev1">&gt;        1       64    16384  2.48e-02 1.99e-02 1.21e+00 3.88e-02   4.23e+01
</span><br>
<span class="quotelev1">&gt; 5.28e+01 8.65e-01 2.70e+01   1.08e+04 1.35e+04 4.43e+02 1.38e+04
</span><br>
<span class="quotelev1">&gt;        2       64    16384  2.17e-02 2.09e-02 1.21e+00 4.10e-02   4.82e+01
</span><br>
<span class="quotelev1">&gt; 5.02e+01 8.65e-01 2.56e+01   1.23e+04 1.29e+04 4.43e+02 1.31e+04
</span><br>
<span class="quotelev1">&gt;        3       64    16384  2.20e-02 1.99e-02 1.01e+00 3.95e-02   4.77e+01
</span><br>
<span class="quotelev1">&gt; 5.27e+01 1.04e+00 2.65e+01   1.22e+04 1.35e+04 5.33e+02 1.36e+04
</span><br>
<span class="quotelev1">&gt;        4       64    16384  2.16e-02 1.96e-02 1.25e+00 4.00e-02   4.85e+01
</span><br>
<span class="quotelev1">&gt; 5.36e+01 8.37e-01 2.62e+01   1.24e+04 1.37e+04 4.28e+02 1.34e+04
</span><br>
<span class="quotelev1">&gt;        5       64    16384  2.25e-02 2.00e-02 1.25e+00 4.07e-02   4.66e+01
</span><br>
<span class="quotelev1">&gt; 5.24e+01 8.39e-01 2.57e+01   1.19e+04 1.34e+04 4.30e+02 1.32e+04
</span><br>
<span class="quotelev1">&gt;        6       64    16384  2.19e-02 1.99e-02 1.29e+00 4.05e-02   4.79e+01
</span><br>
<span class="quotelev1">&gt; 5.28e+01 8.14e-01 2.59e+01   1.23e+04 1.35e+04 4.17e+02 1.33e+04
</span><br>
<span class="quotelev1">&gt;        7       64    16384  2.19e-02 2.06e-02 1.25e+00 4.03e-02   4.79e+01
</span><br>
<span class="quotelev1">&gt; 5.09e+01 8.38e-01 2.60e+01   1.23e+04 1.30e+04 4.29e+02 1.33e+04
</span><br>
<span class="quotelev1">&gt;        8       64    16384  2.24e-02 2.06e-02 1.25e+00 4.01e-02   4.69e+01
</span><br>
<span class="quotelev1">&gt; 5.09e+01 8.39e-01 2.62e+01   1.20e+04 1.30e+04 4.30e+02 1.34e+04
</span><br>
<span class="quotelev1">&gt;        9       64    16384  4.29e-01 2.01e-02 6.35e-01 3.98e-02   2.45e+00
</span><br>
<span class="quotelev1">&gt; 5.22e+01 1.65e+00 2.64e+01   6.26e+02 1.34e+04 8.46e+02 1.35e+04
</span><br>
<span class="quotelev1">&gt;       10       64    16384  2.16e-02 2.06e-02 8.87e-01 4.00e-02   4.85e+01
</span><br>
<span class="quotelev1">&gt; 5.09e+01 1.18e+00 2.62e+01   1.24e+04 1.30e+04 6.05e+02 1.34e+04
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Time is total for all 64 buffers. Rate is one way across one link (# of
</span><br>
<span class="quotelev1">&gt; bytes/time).
</span><br>
<span class="quotelev1">&gt; 1) XC is a bidirectional ring exchange. Each processor sends to the right
</span><br>
<span class="quotelev1">&gt; and receives from the left
</span><br>
<span class="quotelev1">&gt; 2) XE is an edge exchange. Pairs of nodes exchange data, with each one
</span><br>
<span class="quotelev1">&gt; sending and receiving
</span><br>
<span class="quotelev1">&gt; 3) GS is the MPI_AllReduce
</span><br>
<span class="quotelev1">&gt; 4) MS is my version of MPI_AllReduce. It splits the vector into Np blocks
</span><br>
<span class="quotelev1">&gt; (Np is # of processors); each processor then acts as a head node for one
</span><br>
<span class="quotelev1">&gt; block. This uses the full bandwidth all the time, unlike AllReduce which
</span><br>
<span class="quotelev1">&gt; thins out as it gets to the top of the binary tree. On a 64 node Infiniband
</span><br>
<span class="quotelev1">&gt; system MS is about 5X faster than GS-in theory it would be 6X; ie log_2(64).
</span><br>
<span class="quotelev1">&gt; Here it is 25X-not sure why so much. But MS seems to be the cause of the
</span><br>
<span class="quotelev1">&gt; hangups with messages &gt; 64K. I can run the other benchmarks OK,but this one
</span><br>
<span class="quotelev1">&gt; seems to hang for large messages. I think the problem is at least partly due
</span><br>
<span class="quotelev1">&gt; to the switch. All MS is doing is point to point communications, but
</span><br>
<span class="quotelev1">&gt; unfortunately it sometimes requires a high bandwidth between ASIC's. It
</span><br>
<span class="quotelev1">&gt; first it exchanges data between near neighbors in MPI_COMM_WORLD, but it
</span><br>
<span class="quotelev1">&gt; must progressively span wider gaps between nodes as it goes up the various
</span><br>
<span class="quotelev1">&gt; binary trees. After a while this requires extensive traffic between ASICS.
</span><br>
<span class="quotelev1">&gt; This seems to be a problem on both my HP 2724 and the Extreme Networks
</span><br>
<span class="quotelev1">&gt; Summit400t-48. I am currently working with Extreme to try to resolve the
</span><br>
<span class="quotelev1">&gt; switch issue. As I say; the code ran great on Infiniband, but I think those
</span><br>
<span class="quotelev1">&gt; switches have hardware flow control. Finally I checked the code again under
</span><br>
<span class="quotelev1">&gt; LAM and it ran OK. Slow, but no hangs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To run the code compile and type:
</span><br>
<span class="quotelev1">&gt; mpirun -np 32 -machinefile hosts src/netbench 8
</span><br>
<span class="quotelev1">&gt; The 8 means 2^8 bytes (ie 256K). This was enough to hang every time on my
</span><br>
<span class="quotelev1">&gt; boxes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can also edit the header file (header.h). MAX_LOOPS is how many times it
</span><br>
<span class="quotelev1">&gt; runs each test (currently 10); NUM_BUF is the number of buffers in each test
</span><br>
<span class="quotelev1">&gt; (must be more than number of processors), SYNC defines the global sync
</span><br>
<span class="quotelev1">&gt; frequency-every SYNC buffers. NUM_SYNC is the number of sequential barrier
</span><br>
<span class="quotelev1">&gt; calls it uses to determine the mean barrier call time. You can also switch
</span><br>
<span class="quotelev1">&gt; the verious tests on and off, which can be useful for debugging
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tony
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -------------------------------
</span><br>
<span class="quotelev1">&gt; Tony Ladd
</span><br>
<span class="quotelev1">&gt; Professor, Chemical Engineering
</span><br>
<span class="quotelev1">&gt; University of Florida
</span><br>
<span class="quotelev1">&gt; PO Box 116005
</span><br>
<span class="quotelev1">&gt; Gainesville, FL 32611-6005
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tel: 352-392-6509
</span><br>
<span class="quotelev1">&gt; FAX: 352-392-9513
</span><br>
<span class="quotelev1">&gt; Email: tladd_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Web: <a href="http://ladd.che.ufl.edu">http://ladd.che.ufl.edu</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1691.php">Dan Lipsitt: "[OMPI users] error while loading shared libraries: libmpi.so.0: cannot open shared object file"</a>
<li><strong>Previous message:</strong> <a href="1689.php">Jeff Squyres: "Re: [OMPI users] OS X, OpenMPI 1.1: An error occurred in MPI_Allreduce on, communicator MPI_COMM_WORLD (Jeff Squyres (jsquyres))"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/06/1515.php">Tony Ladd: "Re: [OMPI users] mca_btl_tcp_frag_send: writev failed with errno=110"</a>
<!-- nextthread="start" -->
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
