<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 20 02:53:40 2007" -->
<!-- isoreceived="20070920065340" -->
<!-- sent="Thu, 20 Sep 2007 08:53:33 +0200" -->
<!-- isosent="20070920065333" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SKaMPI hangs on collectives and onesided" -->
<!-- id="20070920065333.GI10571_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="46F1C4DB.9030506_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2007-09-20 02:53:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4047.php">Bertrand P. S. Russell: "[OMPI users] C and Fortran 77 compilers are not link compatible. Can not continue."</a>
<li><strong>Previous message:</strong> <a href="4045.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] SKaMPI hangs on collectives and onesided"</a>
<li><strong>In reply to:</strong> <a href="4045.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] SKaMPI hangs on collectives and onesided"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Sep 19, 2007 at 08:54:51PM -0400, Jelena Pjesivac-Grbovic wrote:
<br>
<span class="quotelev1">&gt; The suggestion will probably work, but it is not a solution.
</span><br>
<span class="quotelev1">&gt; &quot;choosing barrier synchronization&quot; is not recommended by SKaMPI team and 
</span><br>
<span class="quotelev1">&gt; that it reduces accuracy of the benchmark.
</span><br>
I know. I just want to be sure that this is the same problem as in
<br>
ticket #1015.
<br>
<p><span class="quotelev1">&gt; The problem is either at  pml ob1 level or in btl ib level - and it has to 
</span><br>
<span class="quotelev1">&gt; do with many messages being sent at the same time.  You can reproduce this 
</span><br>
<span class="quotelev1">&gt; type of problem at 4 - 5 nodes over IB (on odin) using bcast or reduce 
</span><br>
<span class="quotelev1">&gt; using small segment sizes (1KB, less than eager size for ib). (I do not 
</span><br>
<span class="quotelev1">&gt; think I saw it on 2 nodes).  I haven't tried it on onesided operations, but 
</span><br>
<span class="quotelev1">&gt; if it happens there too - I am even more likely to believe in my theory :)
</span><br>
The problem is that short request may be completed on MPI level event
<br>
before data is put on the wire. Later application has to enter MPI
<br>
library to progress the request, but funky SKaMPI synchronisation doesn't
<br>
do it. If this behaviour is correct in regards to MPI spec then Open MPI
<br>
has to be fixed. We don't see this problem more often because usually
<br>
applications call MPI_Finalize at some point in time and we have a
<br>
barrier there so all outstanding request are progressed.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Jelena
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gleb Natapov wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Sep 19, 2007 at 01:58:35PM -0600, Edmund Sumbar wrote:
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm trying to run skampi-5.0.1-r0191 under PBS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; over IB with the command line
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    mpirun -np 2 ./skampi -i coll.ski -o coll_ib.sko
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt; Can you add choose_barrier_synchronization()
</span><br>
<span class="quotelev2">&gt;&gt; to coll.ski and try again? It looks like this one:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/1015">https://svn.open-mpi.org/trac/ompi/ticket/1015</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The pt2pt and mmisc tests run to completion.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The coll and onesided tests, on the other hand,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; start to produce output but then seem to hang.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Actually, the cpus appear to be busy doing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; something (I don't know what), but output stops.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The tests should only last the order of minutes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but I end up deleting the job after about 15 min.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All test run to completion with --mca btl tcp,self
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any suggestions as to how to diagnose this problem?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Are there any known issues with OpenMPI/IB and the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SKaMPI benchmark?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (BTW, skampi works with mvapich2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; System details follow...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ed[mund [Sumbar]]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AICT Research Support, Univ of Alberta
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ uname -a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Linux opteron-cluster.nic.ualberta.ca 2.6.21-smp #1 SMP Tue Aug 7 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 12:45:20 MDT 2007 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ ./configure --prefix=/usr/local/openmpi-1.2.3 --with-tm=/opt/torque 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-openib=/usr/lib --with-libnuma=/usr/lib64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ ompi_info
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  Open MPI: 1.2.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Open MPI SVN revision: r15136
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  Open RTE: 1.2.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Open RTE SVN revision: r15136
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      OPAL: 1.2.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         OPAL SVN revision: r15136
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    Prefix: /usr/local/openmpi-1.2.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Configured by: esumbar
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Configured on: Mon Sep 17 10:00:35 MDT 2007
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Configure host: opteron-cluster.nic.ualberta.ca
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  Built by: esumbar
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  Built on: Mon Sep 17 10:05:09 MDT 2007
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                Built host: opteron-cluster.nic.ualberta.ca
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                C bindings: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              C++ bindings: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Fortran90 bindings: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Fortran90 bindings size: small
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                C compiler: gcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              C++ compiler: g++
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Fortran77 compiler: gfortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Fortran90 compiler: gfortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Fortran90 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               C profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             C++ profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Fortran77 profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Fortran90 profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            C++ exceptions: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Internal debug support: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       MPI parameter check: runtime
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Memory profiling support: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Memory debugging support: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           libltdl support: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Heterogeneous support: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   mpirun default --prefix: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA backtrace: execinfo (MCA v1.0, API v1.0, Component 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA maffinity: first_use (MCA v1.0, API v1.0, Component 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA maffinity: libnuma (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA timer: linux (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           MCA installdirs: env (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           MCA installdirs: config (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA coll: basic (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA coll: self (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    MCA io: romio (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA mpool: rdma (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA btl: openib (MCA v1.0, API v1.0.1, Component 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA btl: self (MCA v1.0, API v1.0.1, Component v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA topo: unity (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA gpr: null (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA gpr: replica (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    MCA ns: proxy (MCA v1.0, API v2.0, Component v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    MCA ns: replica (MCA v1.0, API v2.0, Component v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA ras: dash_host (MCA v1.0, API v1.3, Component 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA ras: gridengine (MCA v1.0, API v1.3, Component 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA ras: localhost (MCA v1.0, API v1.3, Component 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA ras: slurm (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA ras: tm (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA rds: hostfile (MCA v1.0, API v1.3, Component 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA rds: resfile (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA rmaps: round_robin (MCA v1.0, API v1.3, Component 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA pls: gridengine (MCA v1.0, API v1.3, Component 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA pls: slurm (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA pls: tm (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA sds: env (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA sds: seed (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA sds: singleton (MCA v1.0, API v1.0, Component 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA sds: slurm (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; 			Gleb.
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
<p><span class="quotelev1">&gt; begin:vcard
</span><br>
<span class="quotelev1">&gt; fn:Jelena Pjesivac-Grbovic
</span><br>
<span class="quotelev1">&gt; n:Pjesivac-Grbovic;Jelena
</span><br>
<span class="quotelev1">&gt; org:Innovative Computing Laboratory;Computer Science
</span><br>
<span class="quotelev1">&gt; adr:Claxton 413;;1122 Volunteer Blvd.;Knoxville;TN;37996;US
</span><br>
<span class="quotelev1">&gt; email;internet:jelenapg_at_[hidden]
</span><br>
<span class="quotelev1">&gt; title:Graduate Research Assistant
</span><br>
<span class="quotelev1">&gt; tel;work:865 974-6722
</span><br>
<span class="quotelev1">&gt; tel;home:865 946-5234
</span><br>
<span class="quotelev1">&gt; tel;cell:865 548-5975
</span><br>
<span class="quotelev1">&gt; x-mozilla-html:FALSE
</span><br>
<span class="quotelev1">&gt; url:<a href="http://www.cs.utk.edu/~pjesa">http://www.cs.utk.edu/~pjesa</a>
</span><br>
<span class="quotelev1">&gt; version:2.1
</span><br>
<span class="quotelev1">&gt; end:vcard
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="4047.php">Bertrand P. S. Russell: "[OMPI users] C and Fortran 77 compilers are not link compatible. Can not continue."</a>
<li><strong>Previous message:</strong> <a href="4045.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] SKaMPI hangs on collectives and onesided"</a>
<li><strong>In reply to:</strong> <a href="4045.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] SKaMPI hangs on collectives and onesided"</a>
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
