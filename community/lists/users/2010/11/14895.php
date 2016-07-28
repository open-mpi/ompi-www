<?
$subject_val = "Re: [OMPI users] ABOUT ERROR WITH MPIRUN";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 29 10:48:38 2010" -->
<!-- isoreceived="20101129154838" -->
<!-- sent="Mon, 29 Nov 2010 10:48:33 -0500" -->
<!-- isosent="20101129154833" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ABOUT ERROR WITH MPIRUN" -->
<!-- id="82F1EC67-4966-44B8-BFF3-B57011A98442_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTikpRVbgpRLew2hpt+rGSwZ8P0rGFLMHfj+ssrfD_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] ABOUT ERROR WITH MPIRUN<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-29 10:48:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14896.php">Jeff Squyres: "Re: [OMPI users] PROBLEM WITH MPIRUN"</a>
<li><strong>Previous message:</strong> <a href="14894.php">Mark Dixon: "[OMPI users] MPI-IO Lustre driver update?"</a>
<li><strong>In reply to:</strong> <a href="14855.php">Tushar Andriyas: "[OMPI users] ABOUT ERROR WITH MPIRUN"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay in replying; many of us were at SC10 and then most of us were off for the US Thanksgiving holiday last week.
<br>
<p>This error means that your application called MPI_ABORT -- meaning that your application intentionally chose to quit.  You might need to look through the source code to figure out why it's doing that, and/or look at any messages above this one to figure out why it's choosing to abort like this.
<br>
<p><p><p>On Nov 21, 2010, at 8:01 PM, Tushar Andriyas wrote:
<br>
<p><span class="quotelev1">&gt; Hi there,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I had a few suggestions in the previous few threads and I have been trying a lot of things to coax mpirun to work. But it does not want to. I am pasting an error file and ompi_info 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ERROR FILE:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [uinta-0027:03360] MPI_ABORT invoked on rank 0 in communicator MPI_COMM_WORLD w\
</span><br>
<span class="quotelev1">&gt; ith errorcode 4776233
</span><br>
<span class="quotelev1">&gt; [uinta-0027:03357] [0,0,0]-[0,1,4] mca_oob_tcp_msg_recv: readv failed: Connecti\
</span><br>
<span class="quotelev1">&gt; on reset by peer (104)
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 1 with PID 3361 on node uinta-0027 exited on signa\
</span><br>
<span class="quotelev1">&gt; l 15 (Terminated).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi_info:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Open MPI: 1.2.7
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r19401
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.2.7
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r19401
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.2.7
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r19401
</span><br>
<span class="quotelev1">&gt;                   Prefix: /opt/libraries/openmpi/openmpi-1.2.7-pgi
</span><br>
<span class="quotelev1">&gt;  Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;            Configured by: A00017402
</span><br>
<span class="quotelev1">&gt;            Configured on: Thu Sep 18 15:00:05 MDT 2008
</span><br>
<span class="quotelev1">&gt;           Configure host: volvox.hpc.usu.edu
</span><br>
<span class="quotelev1">&gt;                 Built by: A00017402
</span><br>
<span class="quotelev1">&gt;                 Built on: Thu Sep 18 15:20:06 MDT 2008
</span><br>
<span class="quotelev1">&gt;               Built host: volvox.hpc.usu.edu
</span><br>
<span class="quotelev1">&gt;               C bindings: yes
</span><br>
<span class="quotelev1">&gt;             C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt;  Fortran90 bindings size: large
</span><br>
<span class="quotelev1">&gt;               C compiler: pgcc
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /opt/apps/pgi/linux86-64/7.2/bin/pgcc
</span><br>
<span class="quotelev1">&gt;             C++ compiler: pgCC
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /opt/apps/pgi/linux86-64/7.2/bin/pgCC
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: pgf77
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: /opt/apps/pgi/linux86-64/7.2/bin/pgf77
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: pgf90
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: /opt/apps/pgi/linux86-64/7.2/bin/pgf90
</span><br>
<span class="quotelev1">&gt;              C profiling: yes
</span><br>
<span class="quotelev1">&gt;            C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev1">&gt;           C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;           Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev1">&gt;   Internal debug support: no
</span><br>
<span class="quotelev1">&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;          libltdl support: yes
</span><br>
<span class="quotelev1">&gt;    Heterogeneous support: yes
</span><br>
<span class="quotelev1">&gt;  mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: execinfo (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;               MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: libnuma (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;                MCA timer: linux (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: env (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: config (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: basic (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: self (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;                   MCA io: romio (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: rdma (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: gm (MCA v1.0, API v1.0.1, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: self (MCA v1.0, API v1.0.1, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: unity (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: null (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: replica (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: proxy (MCA v1.0, API v2.0, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: replica (MCA v1.0, API v2.0, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: dash_host (MCA v1.0, API v1.3, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: gridengine (MCA v1.0, API v1.3, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: localhost (MCA v1.0, API v1.3, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: slurm (MCA v1.0, API v1.3, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: tm (MCA v1.0, API v1.3, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: hostfile (MCA v1.0, API v1.3, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: resfile (MCA v1.0, API v1.3, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: round_robin (MCA v1.0, API v1.3, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: gridengine (MCA v1.0, API v1.3, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: slurm (MCA v1.0, API v1.3, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: tm (MCA v1.0, API v1.3, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: env (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: singleton (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: slurm (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can anyone please look at the files and tell me what to do?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tushar
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
<li><strong>Next message:</strong> <a href="14896.php">Jeff Squyres: "Re: [OMPI users] PROBLEM WITH MPIRUN"</a>
<li><strong>Previous message:</strong> <a href="14894.php">Mark Dixon: "[OMPI users] MPI-IO Lustre driver update?"</a>
<li><strong>In reply to:</strong> <a href="14855.php">Tushar Andriyas: "[OMPI users] ABOUT ERROR WITH MPIRUN"</a>
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
