<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jan 19 15:25:58 2007" -->
<!-- isoreceived="20070119202558" -->
<!-- sent="Fri, 19 Jan 2007 13:25:47 -0700" -->
<!-- isosent="20070119202547" -->
<!-- name="Greg Watson" -->
<!-- email="gwatson_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.2b3 fails on bluesteel" -->
<!-- id="5DD83CE7-BE1B-44A7-9966-9323F3B39185_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Greg Watson (<em>gwatson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-19 15:25:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1255.php">Li-Ta Lo: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<li><strong>Previous message:</strong> <a href="1253.php">Jeff Squyres: "Re: [OMPI devel] MPI_STARTALL commit yesterday"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1255.php">Li-Ta Lo: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<li><strong>Reply:</strong> <a href="1255.php">Li-Ta Lo: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bluesteel is a 64bit bproc machine. I configured with:
<br>
<p>./configure --with-devel-headers --disable-shared --enable-static
<br>
<p>When I attempt to run an MPI program:
<br>
<p>[bluesteel.lanl.gov:28663] [0,0,0] ORTE_ERROR_LOG: Not available in  
<br>
file ras_bjs.c at line 247
<br>
------------------------------------------------------------------------ 
<br>
<pre>
--
The bproc PLS component was not able to launch all the processes on  
the remote
nodes and therefore cannot continue.
On node 0 the process pid was -2 and errno was set to 11.
For reference, we tried to launch ./x
------------------------------------------------------------------------ 
--
[bluesteel.lanl.gov:28663] [0,0,0] ORTE_ERROR_LOG: Error in file  
pls_bproc.c at line 943
[bluesteel.lanl.gov:28663] [0,0,0] ORTE_ERROR_LOG: Error in file  
pls_bproc.c at line 1141
[bluesteel.lanl.gov:28663] [0,0,0] ORTE_ERROR_LOG: Error in file  
rmgr_urm.c at line 460
[bluesteel.lanl.gov:28663] mpirun: spawn failed with errno=-1
[n0:28664] OOB: Connection to HNP lost
Output from ompi_info:
                 Open MPI: 1.2b3
    Open MPI SVN revision: r13112
                 Open RTE: 1.2b3
    Open RTE SVN revision: r13112
                     OPAL: 1.2b3
        OPAL SVN revision: r13112
                   Prefix: /users/gwatson/ompi_1.2b3
Configured architecture: x86_64-unknown-linux-gnu
            Configured by: gwatson
            Configured on: Fri Jan 19 12:52:21 MST 2007
           Configure host: bluesteel.lanl.gov
                 Built by: gwatson
                 Built on: Fri Jan 19 13:07:21 MST 2007
               Built host: bluesteel.lanl.gov
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
            MCA backtrace: execinfo (MCA v1.0, API v1.0, Component v1.2)
               MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component  
v1.2)
            MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.2)
            MCA maffinity: first_use (MCA v1.0, API v1.0, Component  
v1.2)
                MCA timer: linux (MCA v1.0, API v1.0, Component v1.2)
            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
            MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
                 MCA coll: basic (MCA v1.0, API v1.0, Component v1.2)
                 MCA coll: self (MCA v1.0, API v1.0, Component v1.2)
                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.2)
                 MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2)
                   MCA io: romio (MCA v1.0, API v1.0, Component v1.2)
                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2)
                  MCA pml: cm (MCA v1.0, API v1.0, Component v1.2)
                  MCA pml: dr (MCA v1.0, API v1.0, Component v1.2)
                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2)
                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2)
               MCA rcache: rb (MCA v1.0, API v1.0, Component v1.2)
               MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2)
                  MCA btl: self (MCA v1.0, API v1.0.1, Component v1.2)
                  MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2)
                  MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
                 MCA topo: unity (MCA v1.0, API v1.0, Component v1.2)
                  MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2)
                  MCA osc: rdma (MCA v1.0, API v1.0, Component v1.2)
               MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2)
               MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2)
               MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2)
               MCA errmgr: bproc (MCA v1.0, API v1.3, Component v1.2)
                  MCA gpr: null (MCA v1.0, API v1.0, Component v1.2)
                  MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2)
                  MCA gpr: replica (MCA v1.0, API v1.0, Component v1.2)
                  MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2)
                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.2)
                   MCA ns: proxy (MCA v1.0, API v2.0, Component v1.2)
                   MCA ns: replica (MCA v1.0, API v2.0, Component v1.2)
                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
                  MCA ras: dash_host (MCA v1.0, API v1.3, Component  
v1.2)
                  MCA ras: localhost (MCA v1.0, API v1.3, Component  
v1.2)
                  MCA ras: bjs (MCA v1.0, API v1.3, Component v1.2)
                  MCA ras: gridengine (MCA v1.0, API v1.3, Component  
v1.2)
                  MCA ras: lsf_bproc (MCA v1.0, API v1.3, Component  
v1.2)
                  MCA ras: slurm (MCA v1.0, API v1.3, Component v1.2)
                  MCA rds: hostfile (MCA v1.0, API v1.3, Component v1.2)
                  MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2)
                  MCA rds: resfile (MCA v1.0, API v1.3, Component v1.2)
                MCA rmaps: round_robin (MCA v1.0, API v1.3, Component  
v1.2)
                 MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2)
                 MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2)
                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.2)
                  MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2)
                  MCA pls: bproc (MCA v1.0, API v1.3, Component v1.2)
                  MCA pls: gridengine (MCA v1.0, API v1.3, Component  
v1.2)
                  MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2)
                  MCA pls: slurm (MCA v1.0, API v1.3, Component v1.2)
                  MCA sds: env (MCA v1.0, API v1.0, Component v1.2)
                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.2)
                  MCA sds: singleton (MCA v1.0, API v1.0, Component  
v1.2)
                  MCA sds: bproc (MCA v1.0, API v1.0, Component v1.2)
                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2)
                  MCA sds: slurm (MCA v1.0, API v1.0, Component v1.2)
Any suggestions?
Greg
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1255.php">Li-Ta Lo: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<li><strong>Previous message:</strong> <a href="1253.php">Jeff Squyres: "Re: [OMPI devel] MPI_STARTALL commit yesterday"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1255.php">Li-Ta Lo: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<li><strong>Reply:</strong> <a href="1255.php">Li-Ta Lo: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
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
