<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 17 03:12:58 2007" -->
<!-- isoreceived="20070717071258" -->
<!-- sent="Tue, 17 Jul 2007 10:14:44 +0300" -->
<!-- isosent="20070717071444" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] InfiniBand timeout errors" -->
<!-- id="469C6C64.4040709_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20070716185125.468b3007.nludban_at_osc.edu" -->
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
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-17 03:14:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1909.php">Jeff Squyres: "Re: [OMPI devel] devel Digest, Vol 801, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="1907.php">Neil Ludban: "[OMPI devel] InfiniBand timeout errors"</a>
<li><strong>In reply to:</strong> <a href="1907.php">Neil Ludban: "[OMPI devel] InfiniBand timeout errors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
Try to increase the IB time out parameter: --mca btl_mvapi_ib_timeout 14
<br>
If the 14 will not work , try to increase little bit more (16)
<br>
<p>Thanks,
<br>
Pasha
<br>
<p>Neil Ludban wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm getting the errors below when calling MPI_Alltoallv() as part of
</span><br>
<span class="quotelev1">&gt; a matrix transpose operation.  It's 100% repeatable when testing with
</span><br>
<span class="quotelev1">&gt; 16M matrix elements divided between 64 processes on 32 dual core nodes.
</span><br>
<span class="quotelev1">&gt; There are never any errors with fewer processes or elements, including
</span><br>
<span class="quotelev1">&gt; the same 32 nodes with only one process per node.  If anyone wants
</span><br>
<span class="quotelev1">&gt; any additional information or has suggestions to try, please let me
</span><br>
<span class="quotelev1">&gt; know.  Otherwise, I'll have the system rebooted and hope the problem
</span><br>
<span class="quotelev1">&gt; goes away.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Neil
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [0,1,7][btl_mvapi_component.c:854:mca_btl_mvapi_component_progress]
</span><br>
<span class="quotelev1">&gt; 	from c065 to: c077 [0,1,3][btl_mvapi_component.c:854:
</span><br>
<span class="quotelev1">&gt; 	mca_btl_mvapi_component_progress] from c069 error polling HP
</span><br>
<span class="quotelev1">&gt; 	CQ with status VAPI_RETRY_EXC_ERR status number 12 for Frag :
</span><br>
<span class="quotelev1">&gt; 	0x2ab6590200 to: c078 error polling HP CQ with status
</span><br>
<span class="quotelev1">&gt; 	VAPI_RETRY_EXC_ERR status number 12 for Frag : 0x2ab61f6380
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; The retry count is a down counter initialized on creation of the QP. Retry
</span><br>
<span class="quotelev1">&gt; count is defined in the InfiniBand Spec 1.2 (12.7.38): 
</span><br>
<span class="quotelev1">&gt; The total number of times that the sender wishes the receiver to retry tim- 
</span><br>
<span class="quotelev1">&gt; eout, packet sequence, etc. errors before posting a completion error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that two mca parameters are involved here: 
</span><br>
<span class="quotelev1">&gt; btl_mvapi_ib_retry_count - The number of times the sender will attempt to
</span><br>
<span class="quotelev1">&gt; retry  (defaulted to 7, the maximum value). 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btl_mvapi_ib_timeout - The local ack timeout parameter (defaulted to 10). The
</span><br>
<span class="quotelev1">&gt; actual timeout value used is calculated as: 
</span><br>
<span class="quotelev1">&gt; (4.096 micro-seconds * 2^btl_mvapi_ib_timeout). 
</span><br>
<span class="quotelev1">&gt; See InfiniBand Spec 1.2 (12.7.34) for more details.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What to do next: 
</span><br>
<span class="quotelev1">&gt; One item to note is the hosts on which this error has occured, it has been
</span><br>
<span class="quotelev1">&gt; observed that rebooting or removing a particular host from the job can resolve
</span><br>
<span class="quotelev1">&gt; this issue. Should you be able to identify a specific cause or additional
</span><br>
<span class="quotelev1">&gt; trouble shooting information please report  this to devel_at_open-mpi.org.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % ompi_info 
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.2.3
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r15136
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.2.3
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r15136
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.2.3
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r15136
</span><br>
<span class="quotelev1">&gt;                   Prefix: /home/nludban/ParaM-kodos-openmpi-ib-openmpi123
</span><br>
<span class="quotelev1">&gt;  Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;            Configured by: nludban
</span><br>
<span class="quotelev1">&gt;            Configured on: Mon Jul 16 11:18:27 EDT 2007
</span><br>
<span class="quotelev1">&gt;           Configure host: kodos
</span><br>
<span class="quotelev1">&gt;                 Built by: nludban
</span><br>
<span class="quotelev1">&gt;                 Built on: Mon Jul 16 11:27:04 EDT 2007
</span><br>
<span class="quotelev1">&gt;               Built host: kodos
</span><br>
<span class="quotelev1">&gt;               C bindings: yes
</span><br>
<span class="quotelev1">&gt;             C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt;  Fortran90 bindings size: small
</span><br>
<span class="quotelev1">&gt;               C compiler: gcc
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;             C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: /usr/bin/gfortran
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
<span class="quotelev1">&gt;   Internal debug support: yes
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
<span class="quotelev1">&gt;            MCA backtrace: execinfo (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;               MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: libnuma (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                MCA timer: linux (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: env (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: config (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: basic (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: self (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: rdma (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: mvapi (MCA v1.0, API v1.0.1, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: self (MCA v1.0, API v1.0.1, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: unity (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: null (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: replica (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: proxy (MCA v1.0, API v2.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: replica (MCA v1.0, API v2.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: dash_host (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: gridengine (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: localhost (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: slurm (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: tm (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: hostfile (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: resfile (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: round_robin (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: gridengine (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: slurm (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: tm (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: env (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: singleton (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: slurm (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1909.php">Jeff Squyres: "Re: [OMPI devel] devel Digest, Vol 801, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="1907.php">Neil Ludban: "[OMPI devel] InfiniBand timeout errors"</a>
<li><strong>In reply to:</strong> <a href="1907.php">Neil Ludban: "[OMPI devel] InfiniBand timeout errors"</a>
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
