<?
$subject_val = "Re: [OMPI users] [btl_tcp_frag.c:216:mca_btl_tcp_frag_recv]	mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 23 22:01:32 2010" -->
<!-- isoreceived="20100224030132" -->
<!-- sent="Wed, 24 Feb 2010 14:01:20 +1100" -->
<!-- isosent="20100224030120" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [btl_tcp_frag.c:216:mca_btl_tcp_frag_recv]	mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)" -->
<!-- id="1266980480.5836.36.camel_at_rscpc28.anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] [btl_tcp_frag.c:216:mca_btl_tcp_frag_recv]	mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-23 22:01:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12123.php">w k: "[OMPI users] problems on parallel writing"</a>
<li><strong>Previous message:</strong> <a href="12121.php">Thomas Sadowski: "[OMPI users] [btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)"</a>
<li><strong>In reply to:</strong> <a href="12121.php">Thomas Sadowski: "[OMPI users] [btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12146.php">Jeff Squyres: "Re: [OMPI users] [btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Vasp can be temperamental.  For example, I have a largish system (384
<br>
atoms) for which Vasp hangs if I request more than 120 MD steps at a
<br>
time.  I am not convinced that this is OPMI's problem.  However, your
<br>
case looks much more diagnosable than my silent spinning hang.
<br>
<p>On Tue, 2010-02-23 at 16:00 -0500, Thomas Sadowski wrote:
<br>
<span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am currently attempting to use OpenMPI as my MPI for my VASP
</span><br>
<span class="quotelev1">&gt; calculations. VASP is an ab initio DFT code. Anyhow, I was able to
</span><br>
<span class="quotelev1">&gt; compile and build OpenMPI v. 1.4.1 (i thought) correctly using the
</span><br>
<span class="quotelev1">&gt; following command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/home/tes98002 F77=ifort FC=ifort
</span><br>
<span class="quotelev1">&gt; --with-tm=/usr/local
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that I am compiling OpenMPI for use with Torque/PBS which was
</span><br>
<span class="quotelev1">&gt; compiled using Intel v 10 Fortran compilers and gcc for C\C++. After
</span><br>
<span class="quotelev1">&gt; building OpenMPI, I successfully used it to compile VASP using Intel
</span><br>
<span class="quotelev1">&gt; MKL v. 10.2. I am running OpenMPI in heterogeneous cluster
</span><br>
<span class="quotelev1">&gt; configuration, and I used an NFS mount so that all the compute nodes
</span><br>
<span class="quotelev1">&gt; could access the executable. Our hardware configuration is as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 7 nodes: 2 single-core AMD Opteron processors, 2GB of RAM (henceforth
</span><br>
<span class="quotelev1">&gt; called old nodes)
</span><br>
<span class="quotelev1">&gt; 4 nodes: 2 duo-core AMD Opteron processors, 2GB of RAM (henceforth
</span><br>
<span class="quotelev1">&gt; called new nodes)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We are currently running SUSE v. 8.x. No we have problems when we
</span><br>
<span class="quotelev1">&gt; attempt to run VASP on multiple nodes. A small system (~10 atoms) runs
</span><br>
<span class="quotelev1">&gt; perfectly well with Torque and OpenMPI in all instances: running using
</span><br>
<span class="quotelev1">&gt; single old node, a single new node, or across multiple old and new
</span><br>
<span class="quotelev1">&gt; nodes. Larger systems (&gt;24 atoms) are able to run to completion if
</span><br>
<span class="quotelev1">&gt; they are kept within a single old or new node. However, if I try to
</span><br>
<span class="quotelev1">&gt; run a job on multiple old or new nodes I receive a segfault. In
</span><br>
<span class="quotelev1">&gt; particular the error is as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [node12][[7759,1],2][btl_tcp_frag.c:216:mca_btl_tcp_frag_recv]
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp_frag_recv: readv failed: Connection reset by peer
</span><br>
<span class="quotelev1">&gt; (104)[node12][[7759,1],1][btl_tcp_frag.c:216:mca_btl_tcp_frag_recv]
</span><br>
<span class="quotelev1">&gt; [node12][[7759,1],3][btl_tcp_frag.c:216:mca_btl_tcp_frag_recv]
</span><br>
<span class="quotelev1">&gt; [node12][[7759,1],0][btl_tcp_frag.c:216:mca_btl_tcp_frag_recv]
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; [node12][[7759,1],1][btl_tcp_frag.c:216:mca_btl_tcp_frag_recv]
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; [node12][[7759,1],3][btl_tcp_frag.c:216:mca_btl_tcp_frag_recv]
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; [node12][[7759,1],0][btl_tcp_frag.c:216:mca_btl_tcp_frag_recv]
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; [node12][[7759,1],2][btl_tcp_frag.c:216:mca_btl_tcp_frag_recv]
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 6 with PID 11985 on node node11
</span><br>
<span class="quotelev1">&gt; exited on signal 11 (Segmentation fault).
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
<span class="quotelev1">&gt; It seems to me that this is a memory issue, however I may be mistaken.
</span><br>
<span class="quotelev1">&gt; I have searched the archive and have as yet seen an adequate treatment
</span><br>
<span class="quotelev1">&gt; of the problem. I have also tried other versions of OpenMPI. Does
</span><br>
<span class="quotelev1">&gt; anyone have any insight into our issues
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ______________________________________________________________________
</span><br>
<span class="quotelev1">&gt; Hotmail: Trusted email with powerful SPAM protection. Sign up now.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12123.php">w k: "[OMPI users] problems on parallel writing"</a>
<li><strong>Previous message:</strong> <a href="12121.php">Thomas Sadowski: "[OMPI users] [btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)"</a>
<li><strong>In reply to:</strong> <a href="12121.php">Thomas Sadowski: "[OMPI users] [btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12146.php">Jeff Squyres: "Re: [OMPI users] [btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)"</a>
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
