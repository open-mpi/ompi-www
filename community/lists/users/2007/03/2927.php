<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar 27 08:39:39 2007" -->
<!-- isoreceived="20070327123939" -->
<!-- sent="Tue, 27 Mar 2007 08:38:58 -0400" -->
<!-- isosent="20070327123858" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] very long linking time with mixed-language libraries" -->
<!-- id="92367675-4D19-48FA-BE20-6D8EA418D6C7_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D2D7D9FE2492524A925313E2D82E1B5304D88966_at_ORNLEXCHANGE.ornl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-27 08:38:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2928.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>Previous message:</strong> <a href="2926.php">Bas van der Vlies: "Re: [OMPI users] Memory leak in openmpi-1.2?"</a>
<li><strong>In reply to:</strong> <a href="2924.php">de Almeida, Valmor F.: "[OMPI users] very long linking time with mixed-language libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2929.php">de Almeida, Valmor F.: "Re: [OMPI users] very long linking time with mixed-language libraries"</a>
<li><strong>Reply:</strong> <a href="2929.php">de Almeida, Valmor F.: "Re: [OMPI users] very long linking time with mixed-language libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I notice that you are using the &quot;medium&quot; sized F90 bindings.  Do  
<br>
these FAQ entries help?
<br>
<p><a href="http://www.open-mpi.org/faq/?category=mpi-apps#f90-mpi-slow-compiles">http://www.open-mpi.org/faq/?category=mpi-apps#f90-mpi-slow-compiles</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=building#f90-bindings-slow-compile">http://www.open-mpi.org/faq/?category=building#f90-bindings-slow-compile</a>
<br>
<p><p>On Mar 27, 2007, at 2:21 AM, de Almeida, Valmor F. wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using mpic++ to create a program that combines c++ and f90
</span><br>
<span class="quotelev1">&gt; libraries. The libraries are created with mpic++ and mpif90.  
</span><br>
<span class="quotelev1">&gt; OpenMPI-1.2
</span><br>
<span class="quotelev1">&gt; was built using gcc-4.1.1. (below follows the output of ompi_info. The
</span><br>
<span class="quotelev1">&gt; final linking stage takes quite a long time compared to the  
</span><br>
<span class="quotelev1">&gt; creation of
</span><br>
<span class="quotelev1">&gt; the libraries; I am wondering why and whether there is a way to speed
</span><br>
<span class="quotelev1">&gt; up.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for any inputs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Valmor
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -&gt;./ompi_info
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.2
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r14027
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.2
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r14027
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.2
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r14027
</span><br>
<span class="quotelev1">&gt;                   Prefix: /usr/local/openmpi-1.2
</span><br>
<span class="quotelev1">&gt;  Configured architecture: i686-pc-linux-gnu
</span><br>
<span class="quotelev1">&gt;            Configured by: root
</span><br>
<span class="quotelev1">&gt;            Configured on: Sun Mar 18 23:47:21 EDT 2007
</span><br>
<span class="quotelev1">&gt;           Configure host: xeon0
</span><br>
<span class="quotelev1">&gt;                 Built by: root
</span><br>
<span class="quotelev1">&gt;                 Built on: Sun Mar 18 23:57:41 EDT 2007
</span><br>
<span class="quotelev1">&gt;               Built host: xeon0
</span><br>
<span class="quotelev1">&gt;               C bindings: yes
</span><br>
<span class="quotelev1">&gt;             C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt;  Fortran90 bindings size: medium
</span><br>
<span class="quotelev1">&gt;               C compiler: cc
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /usr/bin/cc
</span><br>
<span class="quotelev1">&gt;             C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: /usr/i686-pc-linux-gnu/gcc-bin/4.1.1/ 
</span><br>
<span class="quotelev1">&gt; gfortran
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: /usr/i686-pc-linux-gnu/gcc-bin/4.1.1/ 
</span><br>
<span class="quotelev1">&gt; gfortran
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
<span class="quotelev1">&gt;   Internal debug support: no
</span><br>
<span class="quotelev1">&gt;      MPI parameter check: always
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
<span class="quotelev1">&gt;            MCA backtrace: execinfo (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2)
</span><br>
<span class="quotelev1">&gt;               MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2)
</span><br>
<span class="quotelev1">&gt;                MCA timer: linux (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: basic (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: self (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA io: romio (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: cm (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: rb (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: self (MCA v1.0, API v1.0.1, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: unity (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2928.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>Previous message:</strong> <a href="2926.php">Bas van der Vlies: "Re: [OMPI users] Memory leak in openmpi-1.2?"</a>
<li><strong>In reply to:</strong> <a href="2924.php">de Almeida, Valmor F.: "[OMPI users] very long linking time with mixed-language libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2929.php">de Almeida, Valmor F.: "Re: [OMPI users] very long linking time with mixed-language libraries"</a>
<li><strong>Reply:</strong> <a href="2929.php">de Almeida, Valmor F.: "Re: [OMPI users] very long linking time with mixed-language libraries"</a>
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
