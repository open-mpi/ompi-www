<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 30 08:33:24 2006" -->
<!-- isoreceived="20060630123324" -->
<!-- sent="Fri, 30 Jun 2006 08:35:58 -0400" -->
<!-- isosent="20060630123558" -->
<!-- name="Tony Ladd" -->
<!-- email="ladd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mca_btl_tcp_frag_send: writev failed with errno=110" -->
<!-- id="004001c69c41$bd5d1840$ca79e30a_at_ladd02" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] mca_btl_tcp_frag_send: writev failed with errno=110" -->
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
<strong>From:</strong> Tony Ladd (<em>ladd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-30 08:35:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1516.php">Justin Bronder: "Re: [OMPI users] OpenMpi 1.1 and Torque 2.1.1"</a>
<li><strong>Previous message:</strong> <a href="1514.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMpi 1.1 and Torque 2.1.1"</a>
<li><strong>Maybe in reply to:</strong> <a href="1443.php">Tony Ladd: "[OMPI users] mca_btl_tcp_frag_send: writev failed with errno=110"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1690.php">Jeff Squyres: "Re: [OMPI users] mca_btl_tcp_frag_send: writev failed with errno=110"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1690.php">Jeff Squyres: "Re: [OMPI users] mca_btl_tcp_frag_send: writev failed with errno=110"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff
<br>
<p>Thanks for the reply; I realize you guys must be really busy with the recent
<br>
release of openmpi. I tried 1.1 and I don't get error messages any more. But
<br>
the code now hangs; no error or exit. So I am not sure if this is the same
<br>
issue or something else. I am enclosing my source code. I compiled with icc
<br>
and linked against an icc compiled version of openmpi-1.1.
<br>
<p>My program is a set of network benchmarks (a crude kind of netpipe) that
<br>
checks typical message passing patterns in my application codes. 
<br>
Typical output is:
<br>
<p>&nbsp;32 CPU's: sync call time = 1003.0        time
<br>
rate (Mbytes/s)                     bandwidth (MBits/s)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;loop   buffers  size     XC       XE       GS       MS         XC
<br>
XE       GS       MS         XC       XE       GS       MS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1       64    16384  2.48e-02 1.99e-02 1.21e+00 3.88e-02   4.23e+01
<br>
5.28e+01 8.65e-01 2.70e+01   1.08e+04 1.35e+04 4.43e+02 1.38e+04
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2       64    16384  2.17e-02 2.09e-02 1.21e+00 4.10e-02   4.82e+01
<br>
5.02e+01 8.65e-01 2.56e+01   1.23e+04 1.29e+04 4.43e+02 1.31e+04
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3       64    16384  2.20e-02 1.99e-02 1.01e+00 3.95e-02   4.77e+01
<br>
5.27e+01 1.04e+00 2.65e+01   1.22e+04 1.35e+04 5.33e+02 1.36e+04
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4       64    16384  2.16e-02 1.96e-02 1.25e+00 4.00e-02   4.85e+01
<br>
5.36e+01 8.37e-01 2.62e+01   1.24e+04 1.37e+04 4.28e+02 1.34e+04
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5       64    16384  2.25e-02 2.00e-02 1.25e+00 4.07e-02   4.66e+01
<br>
5.24e+01 8.39e-01 2.57e+01   1.19e+04 1.34e+04 4.30e+02 1.32e+04
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6       64    16384  2.19e-02 1.99e-02 1.29e+00 4.05e-02   4.79e+01
<br>
5.28e+01 8.14e-01 2.59e+01   1.23e+04 1.35e+04 4.17e+02 1.33e+04
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7       64    16384  2.19e-02 2.06e-02 1.25e+00 4.03e-02   4.79e+01
<br>
5.09e+01 8.38e-01 2.60e+01   1.23e+04 1.30e+04 4.29e+02 1.33e+04
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8       64    16384  2.24e-02 2.06e-02 1.25e+00 4.01e-02   4.69e+01
<br>
5.09e+01 8.39e-01 2.62e+01   1.20e+04 1.30e+04 4.30e+02 1.34e+04
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9       64    16384  4.29e-01 2.01e-02 6.35e-01 3.98e-02   2.45e+00
<br>
5.22e+01 1.65e+00 2.64e+01   6.26e+02 1.34e+04 8.46e+02 1.35e+04
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10       64    16384  2.16e-02 2.06e-02 8.87e-01 4.00e-02   4.85e+01
<br>
5.09e+01 1.18e+00 2.62e+01   1.24e+04 1.30e+04 6.05e+02 1.34e+04
<br>
<p>Time is total for all 64 buffers. Rate is one way across one link (# of
<br>
bytes/time).
<br>
1) XC is a bidirectional ring exchange. Each processor sends to the right
<br>
and receives from the left
<br>
2) XE is an edge exchange. Pairs of nodes exchange data, with each one
<br>
sending and receiving
<br>
3) GS is the MPI_AllReduce
<br>
4) MS is my version of MPI_AllReduce. It splits the vector into Np blocks
<br>
(Np is # of processors); each processor then acts as a head node for one
<br>
block. This uses the full bandwidth all the time, unlike AllReduce which
<br>
thins out as it gets to the top of the binary tree. On a 64 node Infiniband
<br>
system MS is about 5X faster than GS-in theory it would be 6X; ie log_2(64).
<br>
Here it is 25X-not sure why so much. But MS seems to be the cause of the
<br>
hangups with messages &gt; 64K. I can run the other benchmarks OK,but this one
<br>
seems to hang for large messages. I think the problem is at least partly due
<br>
to the switch. All MS is doing is point to point communications, but
<br>
unfortunately it sometimes requires a high bandwidth between ASIC's. It
<br>
first it exchanges data between near neighbors in MPI_COMM_WORLD, but it
<br>
must progressively span wider gaps between nodes as it goes up the various
<br>
binary trees. After a while this requires extensive traffic between ASICS.
<br>
This seems to be a problem on both my HP 2724 and the Extreme Networks
<br>
Summit400t-48. I am currently working with Extreme to try to resolve the
<br>
switch issue. As I say; the code ran great on Infiniband, but I think those
<br>
switches have hardware flow control. Finally I checked the code again under
<br>
LAM and it ran OK. Slow, but no hangs.
<br>
<p>To run the code compile and type:
<br>
mpirun -np 32 -machinefile hosts src/netbench 8
<br>
The 8 means 2^8 bytes (ie 256K). This was enough to hang every time on my
<br>
boxes.
<br>
<p>You can also edit the header file (header.h). MAX_LOOPS is how many times it
<br>
runs each test (currently 10); NUM_BUF is the number of buffers in each test
<br>
(must be more than number of processors), SYNC defines the global sync
<br>
frequency-every SYNC buffers. NUM_SYNC is the number of sequential barrier
<br>
calls it uses to determine the mean barrier call time. You can also switch
<br>
the verious tests on and off, which can be useful for debugging
<br>
<p>Tony
<br>
<p>-------------------------------
<br>
Tony Ladd
<br>
Professor, Chemical Engineering
<br>
University of Florida
<br>
PO Box 116005
<br>
Gainesville, FL 32611-6005
<br>
<p>Tel: 352-392-6509
<br>
FAX: 352-392-9513
<br>
Email: tladd_at_[hidden]
<br>
Web: <a href="http://ladd.che.ufl.edu">http://ladd.che.ufl.edu</a> 
<br>
<p>
<br><p>
<p><hr>
<ul>
<li>application/x-compressed attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1515/src.tgz">src.tgz</a>
</ul>
<!-- attachment="src.tgz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1516.php">Justin Bronder: "Re: [OMPI users] OpenMpi 1.1 and Torque 2.1.1"</a>
<li><strong>Previous message:</strong> <a href="1514.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMpi 1.1 and Torque 2.1.1"</a>
<li><strong>Maybe in reply to:</strong> <a href="1443.php">Tony Ladd: "[OMPI users] mca_btl_tcp_frag_send: writev failed with errno=110"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1690.php">Jeff Squyres: "Re: [OMPI users] mca_btl_tcp_frag_send: writev failed with errno=110"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1690.php">Jeff Squyres: "Re: [OMPI users] mca_btl_tcp_frag_send: writev failed with errno=110"</a>
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
