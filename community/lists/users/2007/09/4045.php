<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 19 20:56:50 2007" -->
<!-- isoreceived="20070920005650" -->
<!-- sent="Wed, 19 Sep 2007 20:54:51 -0400" -->
<!-- isosent="20070920005451" -->
<!-- name="Jelena Pjesivac-Grbovic" -->
<!-- email="pjesa_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SKaMPI hangs on collectives and onesided" -->
<!-- id="46F1C4DB.9030506_at_eecs.utk.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20070919201526.GF5094_at_minantech.com" -->
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
<strong>From:</strong> Jelena Pjesivac-Grbovic (<em>pjesa_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-19 20:54:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4046.php">Gleb Natapov: "Re: [OMPI users] SKaMPI hangs on collectives and onesided"</a>
<li><strong>Previous message:</strong> <a href="4044.php">Daniel Rozenbaum: "Re: [OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv"</a>
<li><strong>In reply to:</strong> <a href="4043.php">Gleb Natapov: "Re: [OMPI users] SKaMPI hangs on collectives and onesided"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4046.php">Gleb Natapov: "Re: [OMPI users] SKaMPI hangs on collectives and onesided"</a>
<li><strong>Reply:</strong> <a href="4046.php">Gleb Natapov: "Re: [OMPI users] SKaMPI hangs on collectives and onesided"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The suggestion will probably work, but it is not a solution.
<br>
&quot;choosing barrier synchronization&quot; is not recommended by SKaMPI team and 
<br>
that it reduces accuracy of the benchmark.
<br>
The problem is either at  pml ob1 level or in btl ib level - and it has 
<br>
to do with many messages being sent at the same time.  You can reproduce 
<br>
this type of problem at 4 - 5 nodes over IB (on odin) using bcast or 
<br>
reduce using small segment sizes (1KB, less than eager size for ib). (I 
<br>
do not think I saw it on 2 nodes).  I haven't tried it on onesided 
<br>
operations, but if it happens there too - I am even more likely to 
<br>
believe in my theory :)
<br>
<p>Thanks,
<br>
Jelena
<br>
<p>Gleb Natapov wrote:
<br>
<span class="quotelev1">&gt; On Wed, Sep 19, 2007 at 01:58:35PM -0600, Edmund Sumbar wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to run skampi-5.0.1-r0191 under PBS
</span><br>
<span class="quotelev2">&gt;&gt; over IB with the command line
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    mpirun -np 2 ./skampi -i coll.ski -o coll_ib.sko
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; Can you add 
</span><br>
<span class="quotelev1">&gt; choose_barrier_synchronization()
</span><br>
<span class="quotelev1">&gt; to coll.ski and try again? It looks like this one:
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/1015">https://svn.open-mpi.org/trac/ompi/ticket/1015</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; The pt2pt and mmisc tests run to completion.
</span><br>
<span class="quotelev2">&gt;&gt; The coll and onesided tests, on the other hand,
</span><br>
<span class="quotelev2">&gt;&gt; start to produce output but then seem to hang.
</span><br>
<span class="quotelev2">&gt;&gt; Actually, the cpus appear to be busy doing
</span><br>
<span class="quotelev2">&gt;&gt; something (I don't know what), but output stops.
</span><br>
<span class="quotelev2">&gt;&gt; The tests should only last the order of minutes
</span><br>
<span class="quotelev2">&gt;&gt; but I end up deleting the job after about 15 min.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; All test run to completion with --mca btl tcp,self
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any suggestions as to how to diagnose this problem?
</span><br>
<span class="quotelev2">&gt;&gt; Are there any known issues with OpenMPI/IB and the
</span><br>
<span class="quotelev2">&gt;&gt; SKaMPI benchmark?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (BTW, skampi works with mvapich2)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; System details follow...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Ed[mund [Sumbar]]
</span><br>
<span class="quotelev2">&gt;&gt; AICT Research Support, Univ of Alberta
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ uname -a
</span><br>
<span class="quotelev2">&gt;&gt; Linux opteron-cluster.nic.ualberta.ca 2.6.21-smp #1 SMP Tue Aug 7 12:45:20 MDT 2007 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ ./configure --prefix=/usr/local/openmpi-1.2.3 --with-tm=/opt/torque --with-openib=/usr/lib --with-libnuma=/usr/lib64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ ompi_info
</span><br>
<span class="quotelev2">&gt;&gt;                  Open MPI: 1.2.3
</span><br>
<span class="quotelev2">&gt;&gt;     Open MPI SVN revision: r15136
</span><br>
<span class="quotelev2">&gt;&gt;                  Open RTE: 1.2.3
</span><br>
<span class="quotelev2">&gt;&gt;     Open RTE SVN revision: r15136
</span><br>
<span class="quotelev2">&gt;&gt;                      OPAL: 1.2.3
</span><br>
<span class="quotelev2">&gt;&gt;         OPAL SVN revision: r15136
</span><br>
<span class="quotelev2">&gt;&gt;                    Prefix: /usr/local/openmpi-1.2.3
</span><br>
<span class="quotelev2">&gt;&gt;   Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev2">&gt;&gt;             Configured by: esumbar
</span><br>
<span class="quotelev2">&gt;&gt;             Configured on: Mon Sep 17 10:00:35 MDT 2007
</span><br>
<span class="quotelev2">&gt;&gt;            Configure host: opteron-cluster.nic.ualberta.ca
</span><br>
<span class="quotelev2">&gt;&gt;                  Built by: esumbar
</span><br>
<span class="quotelev2">&gt;&gt;                  Built on: Mon Sep 17 10:05:09 MDT 2007
</span><br>
<span class="quotelev2">&gt;&gt;                Built host: opteron-cluster.nic.ualberta.ca
</span><br>
<span class="quotelev2">&gt;&gt;                C bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;              C++ bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;        Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev2">&gt;&gt;        Fortran90 bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;   Fortran90 bindings size: small
</span><br>
<span class="quotelev2">&gt;&gt;                C compiler: gcc
</span><br>
<span class="quotelev2">&gt;&gt;       C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt;              C++ compiler: g++
</span><br>
<span class="quotelev2">&gt;&gt;     C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev2">&gt;&gt;        Fortran77 compiler: gfortran
</span><br>
<span class="quotelev2">&gt;&gt;    Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev2">&gt;&gt;        Fortran90 compiler: gfortran
</span><br>
<span class="quotelev2">&gt;&gt;    Fortran90 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev2">&gt;&gt;               C profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;             C++ profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran77 profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran90 profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;            C++ exceptions: no
</span><br>
<span class="quotelev2">&gt;&gt;            Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev2">&gt;&gt;    Internal debug support: no
</span><br>
<span class="quotelev2">&gt;&gt;       MPI parameter check: runtime
</span><br>
<span class="quotelev2">&gt;&gt; Memory profiling support: no
</span><br>
<span class="quotelev2">&gt;&gt; Memory debugging support: no
</span><br>
<span class="quotelev2">&gt;&gt;           libltdl support: yes
</span><br>
<span class="quotelev2">&gt;&gt;     Heterogeneous support: yes
</span><br>
<span class="quotelev2">&gt;&gt;   mpirun default --prefix: no
</span><br>
<span class="quotelev2">&gt;&gt;             MCA backtrace: execinfo (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA maffinity: libnuma (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA timer: linux (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;           MCA installdirs: env (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;           MCA installdirs: config (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA coll: basic (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA coll: self (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                    MCA io: romio (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA mpool: rdma (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: openib (MCA v1.0, API v1.0.1, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: self (MCA v1.0, API v1.0.1, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA topo: unity (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA gpr: null (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA gpr: replica (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                    MCA ns: proxy (MCA v1.0, API v2.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                    MCA ns: replica (MCA v1.0, API v2.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ras: dash_host (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ras: gridengine (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ras: localhost (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ras: slurm (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ras: tm (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA rds: hostfile (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA rds: resfile (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rmaps: round_robin (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pls: gridengine (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pls: slurm (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pls: tm (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA sds: env (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA sds: seed (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA sds: singleton (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA sds: slurm (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 			Gleb.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p><!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4046.php">Gleb Natapov: "Re: [OMPI users] SKaMPI hangs on collectives and onesided"</a>
<li><strong>Previous message:</strong> <a href="4044.php">Daniel Rozenbaum: "Re: [OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv"</a>
<li><strong>In reply to:</strong> <a href="4043.php">Gleb Natapov: "Re: [OMPI users] SKaMPI hangs on collectives and onesided"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4046.php">Gleb Natapov: "Re: [OMPI users] SKaMPI hangs on collectives and onesided"</a>
<li><strong>Reply:</strong> <a href="4046.php">Gleb Natapov: "Re: [OMPI users] SKaMPI hangs on collectives and onesided"</a>
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
