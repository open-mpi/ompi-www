<?
$subject_val = "[OMPI users] Help understanding build option and warning messages, OMPI 1.2.4";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 27 11:43:01 2008" -->
<!-- isoreceived="20080227164301" -->
<!-- sent="Wed, 27 Feb 2008 09:42:48 -0700" -->
<!-- isosent="20080227164248" -->
<!-- name="David Gunter" -->
<!-- email="dog_at_[hidden]" -->
<!-- subject="[OMPI users] Help understanding build option and warning messages, OMPI 1.2.4" -->
<!-- id="411593EC-DF0C-46FF-BB6A-29E67B66CE01_at_lanl.gov" -->
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
<strong>Subject:</strong> [OMPI users] Help understanding build option and warning messages, OMPI 1.2.4<br>
<strong>From:</strong> David Gunter (<em>dog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-27 11:42:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5085.php">George Bosilca: "Re: [OMPI users] Help understanding build option and warning messages, OMPI 1.2.4"</a>
<li><strong>Previous message:</strong> <a href="5083.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with MPI_Reduce and MPI_Gather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5085.php">George Bosilca: "Re: [OMPI users] Help understanding build option and warning messages, OMPI 1.2.4"</a>
<li><strong>Reply:</strong> <a href="5085.php">George Bosilca: "Re: [OMPI users] Help understanding build option and warning messages, OMPI 1.2.4"</a>
<li><strong>Reply:</strong> <a href="5089.php">Rainer Keller: "Re: [OMPI users] Help understanding build option and warning messages, OMPI 1.2.4"</a>
<li><strong>Reply:</strong> <a href="5091.php">Brian W. Barrett: "Re: [OMPI users] Help understanding build option and warning messages, OMPI 1.2.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We are trying to build OMPI-1.2.4 for a BProc/Ethernet-based cluster.   
<br>
Here are the configure options:
<br>
<p>./configure --prefix=${PREFIX} \
<br>
&nbsp;&nbsp;&nbsp;--libdir=${LIBDIR} \
<br>
&nbsp;&nbsp;&nbsp;--enable-shared \
<br>
&nbsp;&nbsp;&nbsp;--with-bproc \
<br>
&nbsp;&nbsp;&nbsp;--with-tm=/opt/PBS \
<br>
&nbsp;&nbsp;&nbsp;--with-io_romio_flags=--with-file-system=ufs+nfs \
<br>
&nbsp;&nbsp;&nbsp;--disable-pty_support \
<br>
&nbsp;&nbsp;&nbsp;--enable-mca-no-build=&quot;ras_tm,pls_tm&quot;
<br>
<p>Everything builds and installs normally.  However, any subsequent  
<br>
mpirun for even the simplest &quot;hello world&quot; application leads to the  
<br>
following warning messages upon job startup:
<br>
<p>[n51:21574] mca: base: component_find: unable to open ras tm: file not  
<br>
found (ignored)
<br>
[n50:21577] mca: base: component_find: unable to open ras tm: file not  
<br>
found (ignored)
<br>
...
<br>
<p>The number of such lines changing with the number of nodes used in the  
<br>
job run.
<br>
<p>Isn't the --enable-mca-no-build=&quot;ras_tm,pls_tm&quot; option supposed to  
<br>
remove these warnings?
<br>
<p>Here is some info about the build:
<br>
<p>I issued a &quot;make distclean&quot; prior to running the configure/make/make  
<br>
install steps and the final install directory was completely erased  
<br>
beforehand.  The output from ompi_info is appended below.
<br>
<p>-david
<br>
<pre>
--
David Gunter
HPC-3: Parallel Tools Team
Los Alamos National Laboratory
ompi_info output:
                 Open MPI: 1.2.4
    Open MPI SVN revision: r16187
                 Open RTE: 1.2.4
    Open RTE SVN revision: r16187
                     OPAL: 1.2.4
        OPAL SVN revision: r16187
                   Prefix: /usr/projects/hpctools/packages/acme/ 
OpenMPI/openmpi-1.2.4-gcc/eth
  Configured architecture: x86_64-unknown-linux-gnu
            Configured by: dog
            Configured on: Wed Feb 27 09:02:34 MST 2008
           Configure host: acme-fe.lanl.gov
                 Built by: dog
                 Built on: Wed Feb 27 09:09:07 MST 2008
               Built host: acme-fe.lanl.gov
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
            MCA backtrace: execinfo (MCA v1.0, API v1.0, Component  
v1.2.4)
               MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component  
v1.2.4)
            MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.2.4)
            MCA maffinity: first_use (MCA v1.0, API v1.0, Component  
v1.2.4)
                MCA timer: linux (MCA v1.0, API v1.0, Component v1.2.4)
          MCA installdirs: env (MCA v1.0, API v1.0, Component v1.2.4)
          MCA installdirs: config (MCA v1.0, API v1.0, Component v1.2.4)
            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
            MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
                 MCA coll: basic (MCA v1.0, API v1.0, Component v1.2.4)
                 MCA coll: self (MCA v1.0, API v1.0, Component v1.2.4)
                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.4)
                 MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2.4)
                   MCA io: romio (MCA v1.0, API v1.0, Component v1.2.4)
                MCA mpool: rdma (MCA v1.0, API v1.0, Component v1.2.4)
                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.4)
                  MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.4)
                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.4)
                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.4)
               MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.4)
                  MCA btl: self (MCA v1.0, API v1.0.1, Component v1.2.4)
                  MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2.4)
                  MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
                 MCA topo: unity (MCA v1.0, API v1.0, Component v1.2.4)
                  MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2.4)
               MCA errmgr: bproc (MCA v1.0, API v1.3, Component v1.2.4)
               MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.4)
               MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2.4)
               MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2.4)
                  MCA gpr: null (MCA v1.0, API v1.0, Component v1.2.4)
                  MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2.4)
                  MCA gpr: replica (MCA v1.0, API v1.0, Component  
v1.2.4)
                  MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2.4)
                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.4)
                   MCA ns: proxy (MCA v1.0, API v2.0, Component v1.2.4)
                   MCA ns: replica (MCA v1.0, API v2.0, Component  
v1.2.4)
                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
                  MCA ras: bjs (MCA v1.0, API v1.3, Component v1.2.4)
                  MCA ras: dash_host (MCA v1.0, API v1.3, Component  
v1.2.4)
                  MCA ras: gridengine (MCA v1.0, API v1.3, Component  
v1.2.4)
                  MCA ras: localhost (MCA v1.0, API v1.3, Component  
v1.2.4)
                  MCA ras: lsf_bproc (MCA v1.0, API v1.3, Component  
v1.2.4)
                  MCA ras: slurm (MCA v1.0, API v1.3, Component v1.2.4)
                  MCA ras: tm (MCA v1.0, API v1.3, Component v1.2.4)
                  MCA rds: hostfile (MCA v1.0, API v1.3, Component  
v1.2.4)
                  MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2.4)
                  MCA rds: resfile (MCA v1.0, API v1.3, Component  
v1.2.4)
                MCA rmaps: round_robin (MCA v1.0, API v1.3, Component  
v1.2.4)
                 MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2.4)
                 MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.4)
                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.4)
                  MCA pls: bproc (MCA v1.0, API v1.3, Component v1.2.4)
                  MCA pls: gridengine (MCA v1.0, API v1.3, Component  
v1.2.4)
                  MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2.4)
                  MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.4)
                  MCA pls: slurm (MCA v1.0, API v1.3, Component v1.2.4)
                  MCA pls: tm (MCA v1.0, API v1.3, Component v1.2.4)
                  MCA sds: bproc (MCA v1.0, API v1.0, Component v1.2.4)
                  MCA sds: env (MCA v1.0, API v1.0, Component v1.2.4)
                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2.4)
                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.2.4)
                  MCA sds: singleton (MCA v1.0, API v1.0, Component  
v1.2.4)
                  MCA sds: slurm (MCA v1.0, API v1.0, Component v1.2.4)
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5085.php">George Bosilca: "Re: [OMPI users] Help understanding build option and warning messages, OMPI 1.2.4"</a>
<li><strong>Previous message:</strong> <a href="5083.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with MPI_Reduce and MPI_Gather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5085.php">George Bosilca: "Re: [OMPI users] Help understanding build option and warning messages, OMPI 1.2.4"</a>
<li><strong>Reply:</strong> <a href="5085.php">George Bosilca: "Re: [OMPI users] Help understanding build option and warning messages, OMPI 1.2.4"</a>
<li><strong>Reply:</strong> <a href="5089.php">Rainer Keller: "Re: [OMPI users] Help understanding build option and warning messages, OMPI 1.2.4"</a>
<li><strong>Reply:</strong> <a href="5091.php">Brian W. Barrett: "Re: [OMPI users] Help understanding build option and warning messages, OMPI 1.2.4"</a>
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
