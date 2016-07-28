<?
$subject_val = "[OMPI users] [btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 23 16:00:38 2010" -->
<!-- isoreceived="20100223210038" -->
<!-- sent="Tue, 23 Feb 2010 16:00:33 -0500" -->
<!-- isosent="20100223210033" -->
<!-- name="Thomas Sadowski" -->
<!-- email="tommy91779_at_[hidden]" -->
<!-- subject="[OMPI users] [btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)" -->
<!-- id="SNT113-W9F6F85C82B91C0C0E15739C420_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] [btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)<br>
<strong>From:</strong> Thomas Sadowski (<em>tommy91779_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-23 16:00:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12122.php">Terry Frankcombe: "Re: [OMPI users] [btl_tcp_frag.c:216:mca_btl_tcp_frag_recv]	mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)"</a>
<li><strong>Previous message:</strong> <a href="12120.php">Eugene Loh: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12122.php">Terry Frankcombe: "Re: [OMPI users] [btl_tcp_frag.c:216:mca_btl_tcp_frag_recv]	mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)"</a>
<li><strong>Reply:</strong> <a href="12122.php">Terry Frankcombe: "Re: [OMPI users] [btl_tcp_frag.c:216:mca_btl_tcp_frag_recv]	mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)"</a>
<li><strong>Reply:</strong> <a href="12146.php">Jeff Squyres: "Re: [OMPI users] [btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
<p><p>I am currently attempting to use OpenMPI as my MPI for my VASP calculations. VASP is an ab initio DFT code. Anyhow, I was able to compile and build OpenMPI v. 1.4.1 (i thought) correctly using the following command:
<br>
<p>./configure --prefix=/home/tes98002 F77=ifort FC=ifort --with-tm=/usr/local
<br>
<p><p>Note that I am compiling OpenMPI for use with Torque/PBS which was compiled using Intel v 10 Fortran compilers and gcc for C\C++. After building OpenMPI, I successfully used it to compile VASP using Intel MKL v. 10.2. I am running OpenMPI in heterogeneous cluster configuration, and I used an NFS mount so that all the compute nodes could access the executable. Our hardware configuration is as follows:
<br>
<p>7 nodes: 2 single-core AMD Opteron processors, 2GB of RAM (henceforth called old nodes)
<br>
4 nodes: 2 duo-core AMD Opteron processors, 2GB of RAM (henceforth called new nodes)
<br>
<p>We are currently running SUSE v. 8.x. No we have problems when we attempt to run VASP on multiple nodes. A small system (~10 atoms) runs perfectly well with Torque and OpenMPI in all instances: running using single old node, a single new node, or across multiple old and new nodes. Larger systems (&gt;24 atoms) are able to run to completion if they are kept within a single old or new node. However, if I try to run a job on multiple old or new nodes I receive a segfault. In particular the error is as follows:
<br>
<p><p>[node12][[7759,1],2][btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)[node12][[7759,1],1][btl_tcp_frag.c:216:mca_btl_tcp_frag_recv]
<br>
[node12][[7759,1],3][btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] [node12][[7759,1],0][btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
<br>
mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
<br>
[node12][[7759,1],1][btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
<br>
mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
<br>
[node12][[7759,1],3][btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
<br>
[node12][[7759,1],0][btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
<br>
[node12][[7759,1],2][btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 6 with PID 11985 on node node11 exited on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
forrtl: error (78): process killed (SIGTERM)
<br>
forrtl: error (78): process killed (SIGTERM)
<br>
forrtl: error (78): process killed (SIGTERM)
<br>
forrtl: error (78): process killed (SIGTERM)
<br>
<p><p><p>It seems to me that this is a memory issue, however I may be mistaken. I have searched the archive and have as yet seen an adequate treatment of the problem. I have also tried other versions of OpenMPI. Does anyone have any insight into our issues
<br>
<p><p>-Tom
<br>
&nbsp;
<br>
<p><p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
_________________________________________________________________
<br>
Hotmail: Trusted email with powerful SPAM protection.
<br>
<a href="http://clk.atdmt.com/GBL/go/201469227/direct/01/">http://clk.atdmt.com/GBL/go/201469227/direct/01/</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12121/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12122.php">Terry Frankcombe: "Re: [OMPI users] [btl_tcp_frag.c:216:mca_btl_tcp_frag_recv]	mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)"</a>
<li><strong>Previous message:</strong> <a href="12120.php">Eugene Loh: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12122.php">Terry Frankcombe: "Re: [OMPI users] [btl_tcp_frag.c:216:mca_btl_tcp_frag_recv]	mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)"</a>
<li><strong>Reply:</strong> <a href="12122.php">Terry Frankcombe: "Re: [OMPI users] [btl_tcp_frag.c:216:mca_btl_tcp_frag_recv]	mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)"</a>
<li><strong>Reply:</strong> <a href="12146.php">Jeff Squyres: "Re: [OMPI users] [btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)"</a>
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
