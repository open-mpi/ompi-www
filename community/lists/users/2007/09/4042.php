<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 19 16:01:17 2007" -->
<!-- isoreceived="20070919200117" -->
<!-- sent="Wed, 19 Sep 2007 13:58:35 -0600" -->
<!-- isosent="20070919195835" -->
<!-- name="Edmund Sumbar" -->
<!-- email="esumbar_at_[hidden]" -->
<!-- subject="[OMPI users] SKaMPI hangs on collectives and onesided" -->
<!-- id="46F17F6B.7020707_at_ualberta.ca" -->
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
<strong>From:</strong> Edmund Sumbar (<em>esumbar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-19 15:58:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4043.php">Gleb Natapov: "Re: [OMPI users] SKaMPI hangs on collectives and onesided"</a>
<li><strong>Previous message:</strong> <a href="4041.php">Tobias Burnus: "[OMPI users] &quot;OpenIB unable to find any HCAs&quot;: Why is this shown on a single SMP machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4043.php">Gleb Natapov: "Re: [OMPI users] SKaMPI hangs on collectives and onesided"</a>
<li><strong>Reply:</strong> <a href="4043.php">Gleb Natapov: "Re: [OMPI users] SKaMPI hangs on collectives and onesided"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to run skampi-5.0.1-r0191 under PBS
<br>
over IB with the command line
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun -np 2 ./skampi -i coll.ski -o coll_ib.sko
<br>
<p>The pt2pt and mmisc tests run to completion.
<br>
The coll and onesided tests, on the other hand,
<br>
start to produce output but then seem to hang.
<br>
Actually, the cpus appear to be busy doing
<br>
something (I don't know what), but output stops.
<br>
The tests should only last the order of minutes
<br>
but I end up deleting the job after about 15 min.
<br>
<p>All test run to completion with --mca btl tcp,self
<br>
<p>Any suggestions as to how to diagnose this problem?
<br>
Are there any known issues with OpenMPI/IB and the
<br>
SKaMPI benchmark?
<br>
<p>(BTW, skampi works with mvapich2)
<br>
<p>System details follow...
<br>
<p><pre>
-- 
Ed[mund [Sumbar]]
AICT Research Support, Univ of Alberta
$ uname -a
Linux opteron-cluster.nic.ualberta.ca 2.6.21-smp #1 SMP Tue Aug 7 12:45:20 MDT 2007 x86_64 x86_64 x86_64 GNU/Linux
$ ./configure --prefix=/usr/local/openmpi-1.2.3 --with-tm=/opt/torque --with-openib=/usr/lib --with-libnuma=/usr/lib64
$ ompi_info
                 Open MPI: 1.2.3
    Open MPI SVN revision: r15136
                 Open RTE: 1.2.3
    Open RTE SVN revision: r15136
                     OPAL: 1.2.3
        OPAL SVN revision: r15136
                   Prefix: /usr/local/openmpi-1.2.3
  Configured architecture: x86_64-unknown-linux-gnu
            Configured by: esumbar
            Configured on: Mon Sep 17 10:00:35 MDT 2007
           Configure host: opteron-cluster.nic.ualberta.ca
                 Built by: esumbar
                 Built on: Mon Sep 17 10:05:09 MDT 2007
               Built host: opteron-cluster.nic.ualberta.ca
               C bindings: yes
             C++ bindings: yes
       Fortran77 bindings: yes (all)
       Fortran90 bindings: yes
  Fortran90 bindings size: small
               C compiler: gcc
      C compiler absolute: /usr/bin/gcc
             C++ compiler: g++
    C++ compiler absolute: /usr/bin/g++
       Fortran77 compiler: gfortran
   Fortran77 compiler abs: /usr/bin/gfortran
       Fortran90 compiler: gfortran
   Fortran90 compiler abs: /usr/bin/gfortran
              C profiling: yes
            C++ profiling: yes
      Fortran77 profiling: yes
      Fortran90 profiling: yes
           C++ exceptions: no
           Thread support: posix (mpi: no, progress: no)
   Internal debug support: no
      MPI parameter check: runtime
Memory profiling support: no
Memory debugging support: no
          libltdl support: yes
    Heterogeneous support: yes
  mpirun default --prefix: no
            MCA backtrace: execinfo (MCA v1.0, API v1.0, Component v1.2.3)
               MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component v1.2.3)
            MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.2.3)
            MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.2.3)
            MCA maffinity: libnuma (MCA v1.0, API v1.0, Component v1.2.3)
                MCA timer: linux (MCA v1.0, API v1.0, Component v1.2.3)
          MCA installdirs: env (MCA v1.0, API v1.0, Component v1.2.3)
          MCA installdirs: config (MCA v1.0, API v1.0, Component v1.2.3)
            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
            MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
                 MCA coll: basic (MCA v1.0, API v1.0, Component v1.2.3)
                 MCA coll: self (MCA v1.0, API v1.0, Component v1.2.3)
                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.3)
                 MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2.3)
                   MCA io: romio (MCA v1.0, API v1.0, Component v1.2.3)
                MCA mpool: rdma (MCA v1.0, API v1.0, Component v1.2.3)
                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.3)
                  MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.3)
                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.3)
                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.3)
               MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.3)
                  MCA btl: openib (MCA v1.0, API v1.0.1, Component v1.2.3)
                  MCA btl: self (MCA v1.0, API v1.0.1, Component v1.2.3)
                  MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2.3)
                  MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
                 MCA topo: unity (MCA v1.0, API v1.0, Component v1.2.3)
                  MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2.3)
               MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.3)
               MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2.3)
               MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2.3)
                  MCA gpr: null (MCA v1.0, API v1.0, Component v1.2.3)
                  MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2.3)
                  MCA gpr: replica (MCA v1.0, API v1.0, Component v1.2.3)
                  MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2.3)
                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.3)
                   MCA ns: proxy (MCA v1.0, API v2.0, Component v1.2.3)
                   MCA ns: replica (MCA v1.0, API v2.0, Component v1.2.3)
                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
                  MCA ras: dash_host (MCA v1.0, API v1.3, Component v1.2.3)
                  MCA ras: gridengine (MCA v1.0, API v1.3, Component v1.2.3)
                  MCA ras: localhost (MCA v1.0, API v1.3, Component v1.2.3)
                  MCA ras: slurm (MCA v1.0, API v1.3, Component v1.2.3)
                  MCA ras: tm (MCA v1.0, API v1.3, Component v1.2.3)
                  MCA rds: hostfile (MCA v1.0, API v1.3, Component v1.2.3)
                  MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2.3)
                  MCA rds: resfile (MCA v1.0, API v1.3, Component v1.2.3)
                MCA rmaps: round_robin (MCA v1.0, API v1.3, Component v1.2.3)
                 MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2.3)
                 MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.3)
                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.3)
                  MCA pls: gridengine (MCA v1.0, API v1.3, Component v1.2.3)
                  MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2.3)
                  MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.3)
                  MCA pls: slurm (MCA v1.0, API v1.3, Component v1.2.3)
                  MCA pls: tm (MCA v1.0, API v1.3, Component v1.2.3)
                  MCA sds: env (MCA v1.0, API v1.0, Component v1.2.3)
                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2.3)
                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.2.3)
                  MCA sds: singleton (MCA v1.0, API v1.0, Component v1.2.3)
                  MCA sds: slurm (MCA v1.0, API v1.0, Component v1.2.3)
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4043.php">Gleb Natapov: "Re: [OMPI users] SKaMPI hangs on collectives and onesided"</a>
<li><strong>Previous message:</strong> <a href="4041.php">Tobias Burnus: "[OMPI users] &quot;OpenIB unable to find any HCAs&quot;: Why is this shown on a single SMP machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4043.php">Gleb Natapov: "Re: [OMPI users] SKaMPI hangs on collectives and onesided"</a>
<li><strong>Reply:</strong> <a href="4043.php">Gleb Natapov: "Re: [OMPI users] SKaMPI hangs on collectives and onesided"</a>
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
