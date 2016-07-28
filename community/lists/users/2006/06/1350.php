<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun  1 17:19:18 2006" -->
<!-- isoreceived="20060601211918" -->
<!-- sent="Thu, 01 Jun 2006 17:18:57 -0400" -->
<!-- isosent="20060601211857" -->
<!-- name="Jonathan Blocksom" -->
<!-- email="JONATHAN.T.BLOCKSOM_at_[hidden]" -->
<!-- subject="[OMPI users] mkfifo failure in mca_btl_sm_component_init" -->
<!-- id="447F59C1.8040402_at_gsti3d.com" -->
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
<strong>From:</strong> Jonathan Blocksom (<em>JONATHAN.T.BLOCKSOM_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-01 17:18:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1351.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] openmpi-1.1a9r10157 Fails to build with Nag f95Compiler"</a>
<li><strong>Previous message:</strong> <a href="1349.php">Doug Roberts: "[OMPI users] openmpi-1.1a9r10157 Fails to build with Nag f95 Compiler"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, my program is giving me this error on one particular machine:
<br>
[localhost.localdomain:04889] mca_btl_sm_component_init: mkfifo failed 
<br>
with errno=17
<br>
<p>Errno 17 appears to be File exists.  Any ideas why this might be 
<br>
happening?  My program is spawing another module, is there some reason 
<br>
it would be trying to open this file as well?
<br>
<p>I'm running on a 32 bit CentOS 3 machine w/ 1.0.2 installed from source. 
<br>
&nbsp;&nbsp;I configured it using both threading options.  Below is the output of 
<br>
ompi_info on the machine that's failing.  It runs fine on a different 
<br>
machine running a 64 bit Fedora Core 4 install.
<br>
<p>Thanks,
<br>
Jonathan
<br>
<p><pre>
--
                 Open MPI: 1.0.2
    Open MPI SVN revision: r9571
                 Open RTE: 1.0.2
    Open RTE SVN revision: r9571
                     OPAL: 1.0.2
        OPAL SVN revision: r9571
                   Prefix: /usr/local
  Configured architecture: i686-pc-linux-gnu
            Configured by: root
            Configured on: Tue May 30 10:30:35 EDT 2006
           Configure host: localhost.localdomain
                 Built by: threedf
                 Built on: Tue May 30 11:11:54 EDT 2006
               Built host: localhost.localdomain
               C bindings: yes
             C++ bindings: yes
       Fortran77 bindings: yes (all)
       Fortran90 bindings: yes
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
           Thread support: posix (mpi: yes, progress: yes)
   Internal debug support: no
      MPI parameter check: runtime
Memory profiling support: no
Memory debugging support: no
          libltdl support: 1
               MCA memory: malloc_interpose (MCA v1.0, API v1.0, 
Component v1.0.2)
            MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.0.2)
            MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.0.2)
            MCA maffinity: libnuma (MCA v1.0, API v1.0, Component v1.0.2)
                MCA timer: linux (MCA v1.0, API v1.0, Component v1.0.2)
            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
            MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
                 MCA coll: basic (MCA v1.0, API v1.0, Component v1.0.2)
                 MCA coll: self (MCA v1.0, API v1.0, Component v1.0.2)
                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.0.2)
                   MCA io: romio (MCA v1.0, API v1.0, Component v1.0.2)
                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.0.2)
                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.0.2)
                  MCA pml: teg (MCA v1.0, API v1.0, Component v1.0.2)
                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.0.2)
                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.0.2)
                  MCA ptl: self (MCA v1.0, API v1.0, Component v1.0.2)
                  MCA ptl: sm (MCA v1.0, API v1.0, Component v1.0.2)
                  MCA ptl: tcp (MCA v1.0, API v1.0, Component v1.0.2)
                  MCA btl: self (MCA v1.0, API v1.0, Component v1.0.2)
                  MCA btl: sm (MCA v1.0, API v1.0, Component v1.0.2)
                  MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
                 MCA topo: unity (MCA v1.0, API v1.0, Component v1.0.2)
                  MCA gpr: null (MCA v1.0, API v1.0, Component v1.0.2)
                  MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.0.2)
                  MCA gpr: replica (MCA v1.0, API v1.0, Component v1.0.2)
                  MCA iof: proxy (MCA v1.0, API v1.0, Component v1.0.2)
                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.0.2)
                   MCA ns: proxy (MCA v1.0, API v1.0, Component v1.0.2)
                   MCA ns: replica (MCA v1.0, API v1.0, Component v1.0.2)
                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
                  MCA ras: dash_host (MCA v1.0, API v1.0, Component v1.0.2)
                  MCA ras: hostfile (MCA v1.0, API v1.0, Component v1.0.2)
                  MCA ras: localhost (MCA v1.0, API v1.0, Component v1.0.2)
                  MCA ras: slurm (MCA v1.0, API v1.0, Component v1.0.2)
                  MCA rds: hostfile (MCA v1.0, API v1.0, Component v1.0.2)
                  MCA rds: resfile (MCA v1.0, API v1.0, Component v1.0.2)
                MCA rmaps: round_robin (MCA v1.0, API v1.0, Component 
v1.0.2)
                 MCA rmgr: proxy (MCA v1.0, API v1.0, Component v1.0.2)
                 MCA rmgr: urm (MCA v1.0, API v1.0, Component v1.0.2)
                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.0.2)
                  MCA pls: daemon (MCA v1.0, API v1.0, Component v1.0.2)
                  MCA pls: fork (MCA v1.0, API v1.0, Component v1.0.2)
                  MCA pls: proxy (MCA v1.0, API v1.0, Component v1.0.2)
                  MCA pls: rsh (MCA v1.0, API v1.0, Component v1.0.2)
                  MCA pls: slurm (MCA v1.0, API v1.0, Component v1.0.2)
                  MCA sds: env (MCA v1.0, API v1.0, Component v1.0.2)
                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.0.2)
                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.0.2)
                  MCA sds: singleton (MCA v1.0, API v1.0, Component v1.0.2)
                  MCA sds: slurm (MCA v1.0, API v1.0, Component v1.0.2)
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1351.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] openmpi-1.1a9r10157 Fails to build with Nag f95Compiler"</a>
<li><strong>Previous message:</strong> <a href="1349.php">Doug Roberts: "[OMPI users] openmpi-1.1a9r10157 Fails to build with Nag f95 Compiler"</a>
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
