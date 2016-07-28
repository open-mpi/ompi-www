<?
$subject_val = "Re: [OMPI users] [btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 24 21:25:51 2010" -->
<!-- isoreceived="20100225022551" -->
<!-- sent="Wed, 24 Feb 2010 21:25:46 -0500" -->
<!-- isosent="20100225022546" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)" -->
<!-- id="37B7C142-33C6-4C18-890A-5EC7D746B3D3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="SNT113-W9F6F85C82B91C0C0E15739C420_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] [btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-24 21:25:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12147.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_TRUNCATE returned from MPI_Test"</a>
<li><strong>Previous message:</strong> <a href="12145.php">Damien Hocking: "Re: [OMPI users] Using dynamic process management without mpirun/mpiexec"</a>
<li><strong>In reply to:</strong> <a href="12121.php">Thomas Sadowski: "[OMPI users] [btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
*Usually*, I have see these &quot;readv failed: ...&quot; kinds of error messages as a side effect of an MPI process exiting abnormally.  The &quot;readv...&quot; messages are from the peers that are left that suddenly had sockets close unexpectedly (because of the dead peer).
<br>
<p>Check into the signal 11 message (that's a segv); that might be the real error.
<br>
<p><p>On Feb 23, 2010, at 4:00 PM, Thomas Sadowski wrote:
<br>
<p><span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am currently attempting to use OpenMPI as my MPI for my VASP calculations. VASP is an ab initio DFT code. Anyhow, I was able to compile and build OpenMPI v. 1.4.1 (i thought) correctly using the following command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/home/tes98002 F77=ifort FC=ifort --with-tm=/usr/local
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that I am compiling OpenMPI for use with Torque/PBS which was compiled using Intel v 10 Fortran compilers and gcc for C\C++. After building OpenMPI, I successfully used it to compile VASP using Intel MKL v. 10.2. I am running OpenMPI in heterogeneous cluster configuration, and I used an NFS mount so that all the compute nodes could access the executable. Our hardware configuration is as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 7 nodes: 2 single-core AMD Opteron processors, 2GB of RAM (henceforth called old nodes)
</span><br>
<span class="quotelev1">&gt; 4 nodes: 2 duo-core AMD Opteron processors, 2GB of RAM (henceforth called new nodes)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We are currently running SUSE v. 8.x. No we have problems when we attempt to run VASP on multiple nodes. A small system (~10 atoms) runs perfectly well with Torque and OpenMPI in all instances: running using single old node, a single new node, or across multiple old and new nodes. Larger systems (&gt;24 atoms) are able to run to completion if they are kept within a single old or new node. However, if I try to run a job on multiple old or new nodes I receive a segfault. In particular the error is as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [node12][[7759,1],2][btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)[node12][[7759,1],1][btl_tcp_frag.c:216:mca_btl_tcp_frag_recv]
</span><br>
<span class="quotelev1">&gt; [node12][[7759,1],3][btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] [node12][[7759,1],0][btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; [node12][[7759,1],1][btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; [node12][[7759,1],3][btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; [node12][[7759,1],0][btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; [node12][[7759,1],2][btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 6 with PID 11985 on node node11 exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; forrtl: error (78): process killed (SIGTERM)
</span><br>
<span class="quotelev1">&gt; forrtl: error (78): process killed (SIGTERM)
</span><br>
<span class="quotelev1">&gt; forrtl: error (78): process killed (SIGTERM)
</span><br>
<span class="quotelev1">&gt; forrtl: error (78): process killed (SIGTERM)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems to me that this is a memory issue, however I may be mistaken. I have searched the archive and have as yet seen an adequate treatment of the problem. I have also tried other versions of OpenMPI. Does anyone have any insight into our issues
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Tom
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hotmail: Trusted email with powerful SPAM protection. Sign up now. _______________________________________________
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12147.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_TRUNCATE returned from MPI_Test"</a>
<li><strong>Previous message:</strong> <a href="12145.php">Damien Hocking: "Re: [OMPI users] Using dynamic process management without mpirun/mpiexec"</a>
<li><strong>In reply to:</strong> <a href="12121.php">Thomas Sadowski: "[OMPI users] [btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)"</a>
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
