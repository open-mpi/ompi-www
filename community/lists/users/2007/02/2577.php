<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  1 14:06:21 2007" -->
<!-- isoreceived="20070201190621" -->
<!-- sent="Thu, 1 Feb 2007 14:06:16 -0500" -->
<!-- isosent="20070201190616" -->
<!-- name="Alex Tumanov" -->
<!-- email="atumanov_at_[hidden]" -->
<!-- subject="[OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails" -->
<!-- id="2453e2900702011106gc8abc2ew37b556e0f1b9374e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Alex Tumanov (<em>atumanov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-01 14:06:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2578.php">Jeff Squyres: "Re: [OMPI users] no MPI_2COMPLEX and MPI_2DOUBLE_COMPLEX"</a>
<li><strong>Previous message:</strong> <a href="2576.php">Michael Alexander: "[OMPI users] CfP Workshops on Virtualization/XEN in HPC Cluster and Grid Computing (Deadline Extended)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2580.php">Alex Tumanov: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<li><strong>Reply:</strong> <a href="2580.php">Alex Tumanov: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I have tried a very basic test on a 2 node &quot;cluster&quot; consisting of 2
<br>
dell boxes. One of them is dual CPU Intel(R) Xeon(TM) CPU 2.80GHz with
<br>
1GB of RAM and the slave node is quad-CPU Intel(R) Xeon(TM) CPU
<br>
3.40GHz with 2GB of RAM. Both have Infiniband cards and Gig-E. The
<br>
slave node is connected directly to the headnode.
<br>
<p>OpenMPI version 1.1.4 was compiled with support for the following
<br>
btl's: openib,mx,gm, and mvapi. I got it to work over openib, but,
<br>
ironically, the same trivial hello world job fails over tcp (please
<br>
see the log below). I found that the same problem was already
<br>
discussed on this list here:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2006/06/1347.php">http://www.open-mpi.org/community/lists/users/2006/06/1347.php</a>
<br>
The discussion mentioned that there could be something wrong with the
<br>
TCP setup of the nodes. Unfortunately it was taken offline. Could
<br>
someone help me with this?
<br>
<p>Thanks,
<br>
Alex.
<br>
<p># mpirun -hostfile ~/testdir/hosts --mca btl tcp,self ~/testdir/hello
<br>
Hello from Alex' MPI test program
<br>
Process 0 on headnode out of 2
<br>
Hello from Alex' MPI test program
<br>
Process 1 on compute-0-0.local out of 2
<br>
Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:0xdebdf8
<br>
[0] func:/opt/openmpi/1.1.4/lib/libopal.so.0 [0x2a9587e0e5]
<br>
[1] func:/lib64/tls/libpthread.so.0 [0x3d1a00c430]
<br>
[2] func:/opt/openmpi/1.1.4/lib/libopal.so.0 [0x2a95880729]
<br>
[3] func:/opt/openmpi/1.1.4/lib/libopal.so.0(_int_free+0x24a) [0x2a95880d7a]
<br>
[4] func:/opt/openmpi/1.1.4/lib/libopal.so.0(free+0xbf) [0x2a9588303f]
<br>
[5] func:/opt/openmpi/1.1.4/lib/libmpi.so.0 [0x2a955949ca]
<br>
[6] func:/opt/openmpi/1.1.4/lib/openmpi/mca_btl_tcp.so(mca_btl_tcp_component_close+0x34f)
<br>
[0x2a988ee8ef]
<br>
[7] func:/opt/openmpi/1.1.4/lib/libopal.so.0(mca_base_components_close+0xde)
<br>
[0x2a95872e1e]
<br>
[8] func:/opt/openmpi/1.1.4/lib/libmpi.so.0(mca_btl_base_close+0xe9)
<br>
[0x2a955e5159]
<br>
[9] func:/opt/openmpi/1.1.4/lib/libmpi.so.0(mca_bml_base_close+0x9)
<br>
[0x2a955e5029]
<br>
[10] func:/opt/openmpi/1.1.4/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_component_close+0x25)
<br>
[0x2a97f4dc55]
<br>
[11] func:/opt/openmpi/1.1.4/lib/libopal.so.0(mca_base_components_close+0xde)
<br>
[0x2a95872e1e]
<br>
[12] func:/opt/openmpi/1.1.4/lib/libmpi.so.0(mca_pml_base_close+0x69)
<br>
[0x2a955ea3e9]
<br>
[13] func:/opt/openmpi/1.1.4/lib/libmpi.so.0(ompi_mpi_finalize+0xfe)
<br>
[0x2a955ab57e]
<br>
[14] func:/root/testdir/hello(main+0x7b) [0x4009d3]
<br>
[15] func:/lib64/tls/libc.so.6(__libc_start_main+0xdb) [0x3d1951c3fb]
<br>
[16] func:/root/testdir/hello [0x4008ca]
<br>
*** End of error message ***
<br>
mpirun noticed that job rank 0 with PID 15573 on node &quot;dr11.local&quot;
<br>
exited on signal 11.
<br>
2 additional processes aborted (not shown)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2578.php">Jeff Squyres: "Re: [OMPI users] no MPI_2COMPLEX and MPI_2DOUBLE_COMPLEX"</a>
<li><strong>Previous message:</strong> <a href="2576.php">Michael Alexander: "[OMPI users] CfP Workshops on Virtualization/XEN in HPC Cluster and Grid Computing (Deadline Extended)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2580.php">Alex Tumanov: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<li><strong>Reply:</strong> <a href="2580.php">Alex Tumanov: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
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
