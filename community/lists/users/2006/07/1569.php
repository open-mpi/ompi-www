<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul  6 11:33:15 2006" -->
<!-- isoreceived="20060706153315" -->
<!-- sent="Thu, 6 Jul 2006 11:33:12 -0400" -->
<!-- isosent="20060706153312" -->
<!-- name="Justin Bronder" -->
<!-- email="jsbronder_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with Openmpi 1.1" -->
<!-- id="8d39cca0607060833j23fd33b6v37daba1eab30d164_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="99A5C8DE-D77D-4664-A28F-440E18076417_at_lanl.gov" -->
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
<strong>From:</strong> Justin Bronder (<em>jsbronder_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-06 11:33:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1570.php">Justin Bronder: "Re: [OMPI users] Problem with Openmpi 1.1"</a>
<li><strong>Previous message:</strong> <a href="1568.php">Galen M. Shipman: "Re: [OMPI users] Problem with Openmpi 1.1"</a>
<li><strong>In reply to:</strong> <a href="1568.php">Galen M. Shipman: "Re: [OMPI users] Problem with Openmpi 1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1570.php">Justin Bronder: "Re: [OMPI users] Problem with Openmpi 1.1"</a>
<li><strong>Reply:</strong> <a href="1570.php">Justin Bronder: "Re: [OMPI users] Problem with Openmpi 1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For OS X:
<br>
/usr/local/ompi-xl/bin/mpirun -mca btl gm -np 4 ./xhpl
<br>
<p>For Linux:
<br>
ARCH=ompi-gnu-1.1.1a
<br>
/usr/local/$ARCH/bin/mpiexec -mca btl gm -np 2 -path /usr/local/$ARCH/bin
<br>
./xhpl
<br>
<p>Thanks for the speedy response,
<br>
Justin.
<br>
<p>On 7/6/06, Galen M. Shipman &lt;gshipman_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hey Justin,
</span><br>
<span class="quotelev1">&gt; Please provide us your mca parameters (if any), these could be in a config
</span><br>
<span class="quotelev1">&gt; file, environment variables or on the command line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Galen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 6, 2006, at 9:22 AM, Justin Bronder wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As far as the nightly builds go, I'm still seeing what I believe to be
</span><br>
<span class="quotelev1">&gt; this problem in both r10670 and r10652.  This is happening with
</span><br>
<span class="quotelev1">&gt; both Linux and OS X.  Below are the systems and ompi_info for the
</span><br>
<span class="quotelev1">&gt; newest revision 10670.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As an example of the error, when running HPL with Myrinet I get the
</span><br>
<span class="quotelev1">&gt; following error.  Using tcp everything is fine and I see the results I'd
</span><br>
<span class="quotelev1">&gt; expect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ||Ax-b||_oo / ( eps * ||A||_1  * N        ) =
</span><br>
<span class="quotelev1">&gt; 42820214496954887558164928727596662784.0000000 ...... FAILED
</span><br>
<span class="quotelev1">&gt; ||Ax-b||_oo / ( eps * ||A||_1  * ||x||_1  ) = 156556068835.2711182 ......
</span><br>
<span class="quotelev1">&gt; FAILED
</span><br>
<span class="quotelev1">&gt; ||Ax-b||_oo / ( eps * ||A||_oo * ||x||_oo ) = 1156439380.5172558 ......
</span><br>
<span class="quotelev1">&gt; FAILED
</span><br>
<span class="quotelev1">&gt; ||Ax-b||_oo  . . . . . . . . . . . . . . . . . =
</span><br>
<span class="quotelev1">&gt; 272683853978565028754868928512.000000
</span><br>
<span class="quotelev1">&gt; ||A||_oo . . . . . . . . . . . . . . . . . . . =        3822.884181
</span><br>
<span class="quotelev1">&gt; ||A||_1  . . . . . . . . . . . . . . . . . . . =        3823.922627
</span><br>
<span class="quotelev1">&gt; ||x||_oo . . . . . . . . . . . . . . . . . . . =
</span><br>
<span class="quotelev1">&gt; 37037692483529688659798261760.000000
</span><br>
<span class="quotelev1">&gt; ||x||_1  . . . . . . . . . . . . . . . . . . . =
</span><br>
<span class="quotelev1">&gt; 4102704048669982798475494948864.000000
</span><br>
<span class="quotelev1">&gt; ===================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Finished      1 tests with the following results:
</span><br>
<span class="quotelev1">&gt;               0 tests completed and passed residual checks,
</span><br>
<span class="quotelev1">&gt;               1 tests completed and failed residual checks,
</span><br>
<span class="quotelev1">&gt;               0 tests skipped because of illegal input values.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Linux node41 2.6.16.19 #1 SMP Wed Jun 21 17:22:01 EDT 2006 ppc64 PPC970FX,
</span><br>
<span class="quotelev1">&gt; altivec supported GNU/Linux
</span><br>
<span class="quotelev1">&gt; jbronder_at_node41 ~ $ /usr/local/ompi-gnu-1.1.1a/bin/ompi_info
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.1.1a1r10670
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r10670
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.1.1a1r10670
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r10670
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.1.1a1r10670
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r10670
</span><br>
<span class="quotelev1">&gt;                   Prefix: /usr/local/ompi-gnu-1.1.1a
</span><br>
<span class="quotelev1">&gt;  Configured architecture: powerpc64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;            Configured by: root
</span><br>
<span class="quotelev1">&gt;            Configured on: Thu Jul  6 10:15:37 EDT 2006
</span><br>
<span class="quotelev1">&gt;           Configure host: node41
</span><br>
<span class="quotelev1">&gt;                 Built by: root
</span><br>
<span class="quotelev1">&gt;                 Built on: Thu Jul  6 10:28:14 EDT 2006
</span><br>
<span class="quotelev1">&gt;               Built host: node41
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
<span class="quotelev1">&gt;   Fortran77 compiler abs:
</span><br>
<span class="quotelev1">&gt; /usr/powerpc64-unknown-linux-gnu/gcc-bin/4.1.0/gfortran
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs:
</span><br>
<span class="quotelev1">&gt; /usr/powerpc64-unknown-linux-gnu/gcc-bin/4.1.0/gfortran
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
<span class="quotelev1">&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;          libltdl support: yes
</span><br>
<span class="quotelev1">&gt;               MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                MCA timer: linux (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: basic (MCA v1.0, API v1.0, Componentv1.1.1)
</span><br>
<span class="quotelev1">&gt;            MCA coll: hierarch (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: self (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: tuned (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                   MCA io: romio (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: gm (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: rb (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: gm (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: self (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: sm (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: unity (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: null (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: replica (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: proxy (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: proxy (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: replica (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: dash_host (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: hostfile (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: localhost (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: tm (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: hostfile (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA rds: resfile (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: round_robin (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev1">&gt; v1.1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: proxy (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: urm (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: fork (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: rsh (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: tm (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: env (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: singleton (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt; Configured as:
</span><br>
<span class="quotelev1">&gt; ./configure \
</span><br>
<span class="quotelev1">&gt;     --prefix=$PREFIX \
</span><br>
<span class="quotelev1">&gt;     --enable-mpi-f77 \
</span><br>
<span class="quotelev1">&gt;     --enable-mpi-f90 \
</span><br>
<span class="quotelev1">&gt;     --enable-mpi-profile \
</span><br>
<span class="quotelev1">&gt;     --enable-mpi-cxx \
</span><br>
<span class="quotelev1">&gt;     --enable-pty-support \
</span><br>
<span class="quotelev1">&gt;     --enable-shared \
</span><br>
<span class="quotelev1">&gt;     --enable-smp-locks \
</span><br>
<span class="quotelev1">&gt;     --enable-io-romio \
</span><br>
<span class="quotelev1">&gt;     --with-tm=/usr/local/pbs \
</span><br>
<span class="quotelev1">&gt;     --without-xgrid \
</span><br>
<span class="quotelev1">&gt;     --without-slurm \
</span><br>
<span class="quotelev1">&gt;     --with-gm=/opt/gm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Darwin node90.meldrew.clusters.umaine.edu 8.6.0 Darwin Kernel Version
</span><br>
<span class="quotelev1">&gt; 8.6.0: Tue Mar  7 16:58:48 PST 2006; root:xnu-792.6.70.obj~1/RELEASE_PPCPower Macintosh powerpc
</span><br>
<span class="quotelev1">&gt; node90:~/src/hpl jbronder$ /usr/local/ompi-xl/bin/ompi_info
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.1.1a1r10670
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r10670
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.1.1a1r10670
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r10670
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.1.1a1r10670
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r10670
</span><br>
<span class="quotelev1">&gt;                   Prefix: /usr/local/ompi-xl
</span><br>
<span class="quotelev1">&gt;  Configured architecture: powerpc-apple-darwin8.6.0
</span><br>
<span class="quotelev1">&gt;            Configured by:
</span><br>
<span class="quotelev1">&gt;            Configured on: Thu Jul  6 10:05:20 EDT 2006
</span><br>
<span class="quotelev1">&gt;           Configure host: node90.meldrew.clusters.umaine.edu
</span><br>
<span class="quotelev1">&gt;                 Built by: root
</span><br>
<span class="quotelev1">&gt;                 Built on: Thu Jul  6 10:37:40 EDT 2006
</span><br>
<span class="quotelev1">&gt;               Built host: node90.meldrew.clusters.umaine.edu
</span><br>
<span class="quotelev1">&gt;               C bindings: yes
</span><br>
<span class="quotelev1">&gt;             C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;       Fortran77 bindings: yes (lower case)
</span><br>
<span class="quotelev1">&gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt;  Fortran90 bindings size: small
</span><br>
<span class="quotelev1">&gt;               C compiler: /opt/ibmcmp/vac/6.0/bin/xlc
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /opt/ibmcmp/vac/6.0/bin/xlc
</span><br>
<span class="quotelev1">&gt;             C++ compiler: /opt/ibmcmp/vacpp/6.0/bin/xlc++
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /opt/ibmcmp/vacpp/6.0/bin/xlc++
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: /opt/ibmcmp/xlf/8.1/bin/xlf_r
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: /opt/ibmcmp/xlf/8.1/bin/xlf_r
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: /opt/ibmcmp/xlf/8.1/bin/xlf90_r
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: /opt/ibmcmp/xlf/8.1/bin/xlf90_r
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
<span class="quotelev1">&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;          libltdl support: yes
</span><br>
<span class="quotelev1">&gt;               MCA memory: darwin (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                MCA timer: darwin (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;           MCA coll: basic (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: hierarch (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: self (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: tuned (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                   MCA io: romio (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: gm (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: rb (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: self (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: sm (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: gm (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: unity (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: null (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: replica (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: proxy (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: proxy (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: replica (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: dash_host (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: hostfile (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: localhost (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: tm (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                MCA rds: hostfile (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: resfile (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: round_robin (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev1">&gt; v1.1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: proxy (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: urm (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: fork (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: rsh (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: tm (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: env (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: singleton (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt; Configured as:
</span><br>
<span class="quotelev1">&gt; ./configure \
</span><br>
<span class="quotelev1">&gt;     --prefix=$PREFIX \
</span><br>
<span class="quotelev1">&gt;     --with-tm=/usr/local/pbs/ \
</span><br>
<span class="quotelev1">&gt;     --with-gm=/opt/gm \
</span><br>
<span class="quotelev1">&gt;     --enable-static \
</span><br>
<span class="quotelev1">&gt;     --disable-cxx
</span><br>
<span class="quotelev1">&gt; On 7/3/06, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Bernard,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; A bug in the Open MPI GM driver was discovered after the 1.1 release.
</span><br>
<span class="quotelev2">&gt; &gt; A patch for the 1.1 is on the way. However, I don't know if it will
</span><br>
<span class="quotelev2">&gt; &gt; be available before the 1.1.1. Meanwhile, you can use the nightly
</span><br>
<span class="quotelev2">&gt; &gt; build version or a fresh check-out from the SVN repository. Both of
</span><br>
<span class="quotelev2">&gt; &gt; them have the GM bug corrected.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Sorry for the troubles,
</span><br>
<span class="quotelev2">&gt; &gt;      george.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jul 3, 2006, at 12:58 PM, Borenstein, Bernard S wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I've built and sucessfully run the Nasa Overflow 2.0aa program with
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Openmpi 1.0.2.  I'm running on an opteron linux cluster running SLES 9
</span><br>
<span class="quotelev3">&gt; &gt; &gt; and GM 2.0.24. I built Openmpi 1.1 with the intel 9 compilers and
</span><br>
<span class="quotelev3">&gt; &gt; &gt; try to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; run Overflow 2.0aa with myrinet, it get what looks like a data
</span><br>
<span class="quotelev3">&gt; &gt; &gt; corruption error and the program dies quickly.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; There are no mpi errors at all.If I run using GIGE (--mca btl
</span><br>
<span class="quotelev3">&gt; &gt; &gt; self,tcp),
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the program runs to competion correctly.  Here is my ompi_info
</span><br>
<span class="quotelev3">&gt; &gt; &gt; output :
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; bsb3227_at_mahler:~/openmpi_1.1/bin&gt; ./ompi_info
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                 Open MPI: 1.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    Open MPI SVN revision: r10477
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                 Open RTE: 1.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    Open RTE SVN revision: r10477
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                     OPAL: 1.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        OPAL SVN revision: r10477
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                   Prefix: /home/bsb3227/openmpi_1.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev3">&gt; &gt; &gt;            Configured by: bsb3227
</span><br>
<span class="quotelev3">&gt; &gt; &gt;            Configured on: Fri Jun 30 07:08:54 PDT 2006
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           Configure host: mahler
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                 Built by: bsb3227
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                 Built on: Fri Jun 30 07:54:46 PDT 2006
</span><br>
<span class="quotelev3">&gt; &gt; &gt;               Built host: mahler
</span><br>
<span class="quotelev3">&gt; &gt; &gt;               C bindings: yes
</span><br>
<span class="quotelev3">&gt; &gt; &gt;             C++ bindings: yes
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  Fortran90 bindings size: small
</span><br>
<span class="quotelev3">&gt; &gt; &gt;               C compiler: icc
</span><br>
<span class="quotelev3">&gt; &gt; &gt;      C compiler absolute: /opt/intel/cce/9.0.25/bin/icc
</span><br>
<span class="quotelev3">&gt; &gt; &gt;             C++ compiler: icpc
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    C++ compiler absolute: /opt/intel/cce/9.0.25/bin/icpc
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       Fortran77 compiler: ifort
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   Fortran77 compiler abs: /opt/intel/fce/9.0.25/bin/ifort
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       Fortran90 compiler: /opt/intel/fce/9.0.25/bin/ifort
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   Fortran90 compiler abs: /opt/intel/fce/9.0.25/bin/ifort
</span><br>
<span class="quotelev3">&gt; &gt; &gt;              C profiling: yes
</span><br>
<span class="quotelev3">&gt; &gt; &gt;            C++ profiling: yes
</span><br>
<span class="quotelev3">&gt; &gt; &gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev3">&gt; &gt; &gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           C++ exceptions: no
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   Internal debug support: no
</span><br>
<span class="quotelev3">&gt; &gt; &gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Memory profiling support: no
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Memory debugging support: no
</span><br>
<span class="quotelev3">&gt; &gt; &gt;          libltdl support: yes
</span><br>
<span class="quotelev3">&gt; &gt; &gt;               MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev3">&gt; &gt; &gt; v1.1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;            MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev3">&gt; &gt; &gt; v1.1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;            MCA maffinity: libnuma (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                MCA timer: linux (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;            MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                 MCA coll: basic (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                 MCA coll: hierarch (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev3">&gt; &gt; &gt; v1.1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                 MCA coll: self (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                 MCA coll: tuned (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                   MCA io: romio (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                MCA mpool: gm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;               MCA rcache: rb (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                  MCA btl: self (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                  MCA btl: sm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                  MCA btl: gm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                  MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                 MCA topo: unity (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                  MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                  MCA gpr: null (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                  MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                  MCA gpr: replica (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                  MCA iof: proxy (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                   MCA ns: proxy (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                   MCA ns: replica (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                  MCA ras: dash_host (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev3">&gt; &gt; &gt; v1.1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                  MCA ras: hostfile (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev3">&gt; &gt; &gt; v1.1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                  MCA ras: localhost (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev3">&gt; &gt; &gt; v1.1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                  MCA ras: slurm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                  MCA ras: tm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                  MCA rds: hostfile (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev3">&gt; &gt; &gt; v1.1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                  MCA rds: resfile (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                MCA rmaps: round_robin (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev3">&gt; &gt; &gt; v1.1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                 MCA rmgr: proxy (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                 MCA rmgr: urm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                  MCA pls: fork (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                  MCA pls: rsh (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                  MCA pls: slurm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                  MCA pls: tm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                  MCA sds: env (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                  MCA sds: seed (MCA v1.0, APIv1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                  MCA sds: singleton (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev3">&gt; &gt; &gt; v1.1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                  MCA sds: slurm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Here is the ifconfig for one of the nodes :
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; bsb3227_at_m045:~&gt; /sbin/ifconfig
</span><br>
<span class="quotelev3">&gt; &gt; &gt; eth0      Link encap:Ethernet  HWaddr 00:50:45:5D:CD:FE
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           inet addr:10.241.194.45  Bcast:10.241.195.255
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Mask:255.255.254.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           inet6 addr: fe80::250:45ff:fe5d:cdfe/64 Scope:Link
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           UP BROADCAST NOTRAILERS RUNNING MULTICAST  MTU:1500
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Metric:1
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           RX packets:39913407 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           TX packets:48794587 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           RX bytes:31847343907 (30371.9 Mb)  TX bytes:48231713866
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (45997.3 Mb)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           Interrupt:19
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; eth1      Link encap:Ethernet  HWaddr 00:50:45:5D:CD:FF
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           inet6 addr: fe80::250:45ff:fe5d:cdff/64 Scope:Link
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           UP BROADCAST MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           RX packets:0 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           RX bytes:0 (0.0 b)  TX bytes:0 (0.0 b)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           Interrupt:19
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           inet addr:127.0.0.1  Mask: 255.0.0.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           RX packets:23141 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           TX packets:23141 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           RX bytes:20145689 (19.2 Mb)  TX bytes:20145689 (19.2 Mb)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I hope someone can give me some guidance on how to debug this problem.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanx in advance for any help
</span><br>
<span class="quotelev3">&gt; &gt; &gt; that can be provided.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Bernie Borenstein
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The Boeing Company
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &lt;config.log.gz&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &quot;Half of what I say is meaningless; but I say it so that the other
</span><br>
<span class="quotelev2">&gt; &gt; half may reach you&quot;
</span><br>
<span class="quotelev2">&gt; &gt;                                    Kahlil Gibran
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1569/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1570.php">Justin Bronder: "Re: [OMPI users] Problem with Openmpi 1.1"</a>
<li><strong>Previous message:</strong> <a href="1568.php">Galen M. Shipman: "Re: [OMPI users] Problem with Openmpi 1.1"</a>
<li><strong>In reply to:</strong> <a href="1568.php">Galen M. Shipman: "Re: [OMPI users] Problem with Openmpi 1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1570.php">Justin Bronder: "Re: [OMPI users] Problem with Openmpi 1.1"</a>
<li><strong>Reply:</strong> <a href="1570.php">Justin Bronder: "Re: [OMPI users] Problem with Openmpi 1.1"</a>
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
