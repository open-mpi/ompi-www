<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar 27 02:22:26 2007" -->
<!-- isoreceived="20070327062226" -->
<!-- sent="Tue, 27 Mar 2007 02:21:39 -0400" -->
<!-- isosent="20070327062139" -->
<!-- name="de Almeida, Valmor F." -->
<!-- email="dealmeidav_at_[hidden]" -->
<!-- subject="[OMPI users] very long linking time with mixed-language libraries" -->
<!-- id="D2D7D9FE2492524A925313E2D82E1B5304D88966_at_ORNLEXCHANGE.ornl.gov" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> de Almeida, Valmor F. (<em>dealmeidav_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-27 02:21:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2925.php">Bas van der Vlies: "[OMPI users] Memory leak in openmpi-1.2?"</a>
<li><strong>Previous message:</strong> <a href="2923.php">Daniele Avitabile: "Re: [OMPI users] Installation fails on Mac Os"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2927.php">Jeff Squyres: "Re: [OMPI users] very long linking time with mixed-language libraries"</a>
<li><strong>Reply:</strong> <a href="2927.php">Jeff Squyres: "Re: [OMPI users] very long linking time with mixed-language libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am using mpic++ to create a program that combines c++ and f90
<br>
libraries. The libraries are created with mpic++ and mpif90. OpenMPI-1.2
<br>
was built using gcc-4.1.1. (below follows the output of ompi_info. The
<br>
final linking stage takes quite a long time compared to the creation of
<br>
the libraries; I am wondering why and whether there is a way to speed
<br>
up.
<br>
<p>Thanks for any inputs.
<br>
<p><pre>
--
Valmor
-&gt;./ompi_info 
                Open MPI: 1.2
   Open MPI SVN revision: r14027
                Open RTE: 1.2
   Open RTE SVN revision: r14027
                    OPAL: 1.2
       OPAL SVN revision: r14027
                  Prefix: /usr/local/openmpi-1.2
 Configured architecture: i686-pc-linux-gnu
           Configured by: root
           Configured on: Sun Mar 18 23:47:21 EDT 2007
          Configure host: xeon0
                Built by: root
                Built on: Sun Mar 18 23:57:41 EDT 2007
              Built host: xeon0
              C bindings: yes
            C++ bindings: yes
      Fortran77 bindings: yes (all)
      Fortran90 bindings: yes
 Fortran90 bindings size: medium
              C compiler: cc
     C compiler absolute: /usr/bin/cc
            C++ compiler: g++
   C++ compiler absolute: /usr/bin/g++
      Fortran77 compiler: gfortran
  Fortran77 compiler abs: /usr/i686-pc-linux-gnu/gcc-bin/4.1.1/gfortran
      Fortran90 compiler: gfortran
  Fortran90 compiler abs: /usr/i686-pc-linux-gnu/gcc-bin/4.1.1/gfortran
             C profiling: yes
           C++ profiling: yes
     Fortran77 profiling: yes
     Fortran90 profiling: yes
          C++ exceptions: no
          Thread support: posix (mpi: no, progress: no)
  Internal debug support: no
     MPI parameter check: always
Memory profiling support: no
Memory debugging support: no
         libltdl support: yes
   Heterogeneous support: yes
 mpirun default --prefix: no
           MCA backtrace: execinfo (MCA v1.0, API v1.0, Component v1.2)
              MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component v1.2)
           MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.2)
           MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.2)
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
                 MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2)
                 MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2)
              MCA rcache: rb (MCA v1.0, API v1.0, Component v1.2)
              MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2)
                 MCA btl: self (MCA v1.0, API v1.0.1, Component v1.2)
                 MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2)
                 MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
                MCA topo: unity (MCA v1.0, API v1.0, Component v1.2)
                 MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2)
              MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2)
              MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2)
              MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2)
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2925.php">Bas van der Vlies: "[OMPI users] Memory leak in openmpi-1.2?"</a>
<li><strong>Previous message:</strong> <a href="2923.php">Daniele Avitabile: "Re: [OMPI users] Installation fails on Mac Os"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2927.php">Jeff Squyres: "Re: [OMPI users] very long linking time with mixed-language libraries"</a>
<li><strong>Reply:</strong> <a href="2927.php">Jeff Squyres: "Re: [OMPI users] very long linking time with mixed-language libraries"</a>
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
