<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jan 19 16:17:44 2007" -->
<!-- isoreceived="20070119211744" -->
<!-- sent="Fri, 19 Jan 2007 14:17:44 -0700" -->
<!-- isosent="20070119211744" -->
<!-- name="Li-Ta Lo" -->
<!-- email="ollie_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.2b3 fails on bluesteel" -->
<!-- id="1169241464.15251.177.camel_at_exponential.lanl.gov" -->
<!-- inreplyto="5DD83CE7-BE1B-44A7-9966-9323F3B39185_at_lanl.gov" -->
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
<strong>From:</strong> Li-Ta Lo (<em>ollie_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-19 16:17:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1256.php">Greg Watson: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<li><strong>Previous message:</strong> <a href="1254.php">Greg Watson: "[OMPI devel] 1.2b3 fails on bluesteel"</a>
<li><strong>In reply to:</strong> <a href="1254.php">Greg Watson: "[OMPI devel] 1.2b3 fails on bluesteel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1256.php">Greg Watson: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<li><strong>Reply:</strong> <a href="1256.php">Greg Watson: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 2007-01-19 at 13:25 -0700, Greg Watson wrote:
<br>
<span class="quotelev1">&gt; Bluesteel is a 64bit bproc machine. I configured with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --with-devel-headers --disable-shared --enable-static
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I attempt to run an MPI program:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [bluesteel.lanl.gov:28663] [0,0,0] ORTE_ERROR_LOG: Not available in  
</span><br>
<span class="quotelev1">&gt; file ras_bjs.c at line 247
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------ 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; The bproc PLS component was not able to launch all the processes on  
</span><br>
<span class="quotelev1">&gt; the remote
</span><br>
<span class="quotelev1">&gt; nodes and therefore cannot continue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On node 0 the process pid was -2 and errno was set to 11.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Shared lib?
<br>
<p>Ollie
<br>
<p><span class="quotelev1">&gt; For reference, we tried to launch ./x
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------ 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; [bluesteel.lanl.gov:28663] [0,0,0] ORTE_ERROR_LOG: Error in file  
</span><br>
<span class="quotelev1">&gt; pls_bproc.c at line 943
</span><br>
<span class="quotelev1">&gt; [bluesteel.lanl.gov:28663] [0,0,0] ORTE_ERROR_LOG: Error in file  
</span><br>
<span class="quotelev1">&gt; pls_bproc.c at line 1141
</span><br>
<span class="quotelev1">&gt; [bluesteel.lanl.gov:28663] [0,0,0] ORTE_ERROR_LOG: Error in file  
</span><br>
<span class="quotelev1">&gt; rmgr_urm.c at line 460
</span><br>
<span class="quotelev1">&gt; [bluesteel.lanl.gov:28663] mpirun: spawn failed with errno=-1
</span><br>
<span class="quotelev1">&gt; [n0:28664] OOB: Connection to HNP lost
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Output from ompi_info:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                  Open MPI: 1.2b3
</span><br>
<span class="quotelev1">&gt;     Open MPI SVN revision: r13112
</span><br>
<span class="quotelev1">&gt;                  Open RTE: 1.2b3
</span><br>
<span class="quotelev1">&gt;     Open RTE SVN revision: r13112
</span><br>
<span class="quotelev1">&gt;                      OPAL: 1.2b3
</span><br>
<span class="quotelev1">&gt;         OPAL SVN revision: r13112
</span><br>
<span class="quotelev1">&gt;                    Prefix: /users/gwatson/ompi_1.2b3
</span><br>
<span class="quotelev1">&gt; Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;             Configured by: gwatson
</span><br>
<span class="quotelev1">&gt;             Configured on: Fri Jan 19 12:52:21 MST 2007
</span><br>
<span class="quotelev1">&gt;            Configure host: bluesteel.lanl.gov
</span><br>
<span class="quotelev1">&gt;                  Built by: gwatson
</span><br>
<span class="quotelev1">&gt;                  Built on: Fri Jan 19 13:07:21 MST 2007
</span><br>
<span class="quotelev1">&gt;                Built host: bluesteel.lanl.gov
</span><br>
<span class="quotelev1">&gt;                C bindings: yes
</span><br>
<span class="quotelev1">&gt;              C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;        Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;        Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt; Fortran90 bindings size: small
</span><br>
<span class="quotelev1">&gt;                C compiler: gcc
</span><br>
<span class="quotelev1">&gt;       C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;              C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;     C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;        Fortran77 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;    Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;        Fortran90 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;    Fortran90 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;               C profiling: yes
</span><br>
<span class="quotelev1">&gt;             C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;       Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;       Fortran90 profiling: yes
</span><br>
<span class="quotelev1">&gt;            C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;            Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev1">&gt;    Internal debug support: no
</span><br>
<span class="quotelev1">&gt;       MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;           libltdl support: yes
</span><br>
<span class="quotelev1">&gt;     Heterogeneous support: yes
</span><br>
<span class="quotelev1">&gt; mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt;             MCA backtrace: execinfo (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2)
</span><br>
<span class="quotelev1">&gt;             MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;             MCA maffinity: first_use (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2)
</span><br>
<span class="quotelev1">&gt;                 MCA timer: linux (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;             MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;             MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: basic (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: self (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: sm (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                    MCA io: romio (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: cm (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: dr (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                MCA rcache: rb (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: self (MCA v1.0, API v1.0.1, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA topo: unity (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA osc: rdma (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                MCA errmgr: bproc (MCA v1.0, API v1.3, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA gpr: null (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA gpr: replica (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA iof: svc (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                    MCA ns: proxy (MCA v1.0, API v2.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                    MCA ns: replica (MCA v1.0, API v2.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: dash_host (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: localhost (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: bjs (MCA v1.0, API v1.3, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: gridengine (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: lsf_bproc (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: slurm (MCA v1.0, API v1.3, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA rds: hostfile (MCA v1.0, API v1.3, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA rds: resfile (MCA v1.0, API v1.3, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: round_robin (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA rml: oob (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: bproc (MCA v1.0, API v1.3, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: gridengine (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: slurm (MCA v1.0, API v1.3, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: env (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: seed (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: singleton (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: bproc (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: slurm (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any suggestions?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1256.php">Greg Watson: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<li><strong>Previous message:</strong> <a href="1254.php">Greg Watson: "[OMPI devel] 1.2b3 fails on bluesteel"</a>
<li><strong>In reply to:</strong> <a href="1254.php">Greg Watson: "[OMPI devel] 1.2b3 fails on bluesteel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1256.php">Greg Watson: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<li><strong>Reply:</strong> <a href="1256.php">Greg Watson: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
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
