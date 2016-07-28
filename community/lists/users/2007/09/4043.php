<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 19 16:15:35 2007" -->
<!-- isoreceived="20070919201535" -->
<!-- sent="Wed, 19 Sep 2007 22:15:27 +0200" -->
<!-- isosent="20070919201527" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SKaMPI hangs on collectives and onesided" -->
<!-- id="20070919201526.GF5094_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="46F17F6B.7020707_at_ualberta.ca" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-19 16:15:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4044.php">Daniel Rozenbaum: "Re: [OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv"</a>
<li><strong>Previous message:</strong> <a href="4042.php">Edmund Sumbar: "[OMPI users] SKaMPI hangs on collectives and onesided"</a>
<li><strong>In reply to:</strong> <a href="4042.php">Edmund Sumbar: "[OMPI users] SKaMPI hangs on collectives and onesided"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4045.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] SKaMPI hangs on collectives and onesided"</a>
<li><strong>Reply:</strong> <a href="4045.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] SKaMPI hangs on collectives and onesided"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Sep 19, 2007 at 01:58:35PM -0600, Edmund Sumbar wrote:
<br>
<span class="quotelev1">&gt; I'm trying to run skampi-5.0.1-r0191 under PBS
</span><br>
<span class="quotelev1">&gt; over IB with the command line
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    mpirun -np 2 ./skampi -i coll.ski -o coll_ib.sko
</span><br>
Can you add 
<br>
choose_barrier_synchronization()
<br>
to coll.ski and try again? It looks like this one:
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/1015">https://svn.open-mpi.org/trac/ompi/ticket/1015</a>
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The pt2pt and mmisc tests run to completion.
</span><br>
<span class="quotelev1">&gt; The coll and onesided tests, on the other hand,
</span><br>
<span class="quotelev1">&gt; start to produce output but then seem to hang.
</span><br>
<span class="quotelev1">&gt; Actually, the cpus appear to be busy doing
</span><br>
<span class="quotelev1">&gt; something (I don't know what), but output stops.
</span><br>
<span class="quotelev1">&gt; The tests should only last the order of minutes
</span><br>
<span class="quotelev1">&gt; but I end up deleting the job after about 15 min.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All test run to completion with --mca btl tcp,self
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any suggestions as to how to diagnose this problem?
</span><br>
<span class="quotelev1">&gt; Are there any known issues with OpenMPI/IB and the
</span><br>
<span class="quotelev1">&gt; SKaMPI benchmark?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (BTW, skampi works with mvapich2)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; System details follow...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ed[mund [Sumbar]]
</span><br>
<span class="quotelev1">&gt; AICT Research Support, Univ of Alberta
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ uname -a
</span><br>
<span class="quotelev1">&gt; Linux opteron-cluster.nic.ualberta.ca 2.6.21-smp #1 SMP Tue Aug 7 12:45:20 MDT 2007 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ./configure --prefix=/usr/local/openmpi-1.2.3 --with-tm=/opt/torque --with-openib=/usr/lib --with-libnuma=/usr/lib64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ompi_info
</span><br>
<span class="quotelev1">&gt;                  Open MPI: 1.2.3
</span><br>
<span class="quotelev1">&gt;     Open MPI SVN revision: r15136
</span><br>
<span class="quotelev1">&gt;                  Open RTE: 1.2.3
</span><br>
<span class="quotelev1">&gt;     Open RTE SVN revision: r15136
</span><br>
<span class="quotelev1">&gt;                      OPAL: 1.2.3
</span><br>
<span class="quotelev1">&gt;         OPAL SVN revision: r15136
</span><br>
<span class="quotelev1">&gt;                    Prefix: /usr/local/openmpi-1.2.3
</span><br>
<span class="quotelev1">&gt;   Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;             Configured by: esumbar
</span><br>
<span class="quotelev1">&gt;             Configured on: Mon Sep 17 10:00:35 MDT 2007
</span><br>
<span class="quotelev1">&gt;            Configure host: opteron-cluster.nic.ualberta.ca
</span><br>
<span class="quotelev1">&gt;                  Built by: esumbar
</span><br>
<span class="quotelev1">&gt;                  Built on: Mon Sep 17 10:05:09 MDT 2007
</span><br>
<span class="quotelev1">&gt;                Built host: opteron-cluster.nic.ualberta.ca
</span><br>
<span class="quotelev1">&gt;                C bindings: yes
</span><br>
<span class="quotelev1">&gt;              C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;        Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;        Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt;   Fortran90 bindings size: small
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
<span class="quotelev1">&gt;   mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt;             MCA backtrace: execinfo (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;             MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;             MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;             MCA maffinity: libnuma (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                 MCA timer: linux (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;           MCA installdirs: env (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;           MCA installdirs: config (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;             MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;             MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: basic (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: self (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                    MCA io: romio (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: rdma (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                   MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: openib (MCA v1.0, API v1.0.1, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: self (MCA v1.0, API v1.0.1, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA topo: unity (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                   MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                   MCA gpr: null (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                   MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                   MCA gpr: replica (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                   MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                   MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                    MCA ns: proxy (MCA v1.0, API v2.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                    MCA ns: replica (MCA v1.0, API v2.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                   MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: dash_host (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: gridengine (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: localhost (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: slurm (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: tm (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                   MCA rds: hostfile (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                   MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                   MCA rds: resfile (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: round_robin (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                   MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: gridengine (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: slurm (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: tm (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: env (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: seed (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: singleton (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: slurm (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4044.php">Daniel Rozenbaum: "Re: [OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv"</a>
<li><strong>Previous message:</strong> <a href="4042.php">Edmund Sumbar: "[OMPI users] SKaMPI hangs on collectives and onesided"</a>
<li><strong>In reply to:</strong> <a href="4042.php">Edmund Sumbar: "[OMPI users] SKaMPI hangs on collectives and onesided"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4045.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] SKaMPI hangs on collectives and onesided"</a>
<li><strong>Reply:</strong> <a href="4045.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] SKaMPI hangs on collectives and onesided"</a>
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
