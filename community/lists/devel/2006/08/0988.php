<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 11 09:27:48 2006" -->
<!-- isoreceived="20060811132748" -->
<!-- sent="Fri, 11 Aug 2006 15:25:34 +0200" -->
<!-- isosent="20060811132534" -->
<!-- name="Sven Stork" -->
<!-- email="stork_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] fortran application hanging when compiled with -g" -->
<!-- id="200608111525.34243.stork_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="44DC53E0.2030403_at_hlrs.de" -->
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
<strong>From:</strong> Sven Stork (<em>stork_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-11 09:25:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0989.php">Jeff Squyres: "Re: [OMPI devel] fortran application hanging when compiled with -g"</a>
<li><strong>Previous message:</strong> <a href="0987.php">Bettina Krammer: "[OMPI devel] fortran application hanging when compiled with -g"</a>
<li><strong>In reply to:</strong> <a href="0987.php">Bettina Krammer: "[OMPI devel] fortran application hanging when compiled with -g"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0989.php">Jeff Squyres: "Re: [OMPI devel] fortran application hanging when compiled with -g"</a>
<li><strong>Reply:</strong> <a href="0989.php">Jeff Squyres: "Re: [OMPI devel] fortran application hanging when compiled with -g"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The real problem is not the -g it is the -O0 option which will be 
<br>
automatically added by -g. If you compile with &quot;-g -ON&quot; for 0 &lt; N everythings 
<br>
works as expected.
<br>
<p>Thanks,
<br>
Sven
<br>
<p>On Friday 11 August 2006 11:54, Bettina Krammer wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; when I use the attached hello.f with Open MPI 1.1.0 and underlying Intel 
</span><br>
<span class="quotelev1">&gt; 9.0 or 9.1 compiler on our Xeon cluster, it is deadlocking when compiled 
</span><br>
<span class="quotelev1">&gt; with -g option but works without -g:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ===================
</span><br>
<span class="quotelev1">&gt; output with -g:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $mpirun -np 2 ./hello-g
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My rank is            0 !
</span><br>
<span class="quotelev1">&gt; waiting for message from            1
</span><br>
<span class="quotelev1">&gt; My rank is            1 !
</span><br>
<span class="quotelev1">&gt; Greetings from process            1 !
</span><br>
<span class="quotelev1">&gt; Sending message from            1 !
</span><br>
<span class="quotelev1">&gt; Message recieved: HelloFromMexxxxxxxxx!
</span><br>
<span class="quotelev1">&gt; waiting for message from            1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       [...deadlock...]
</span><br>
<span class="quotelev1">&gt; ===================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  output without -g:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $mpirun -np 2 ./hello-no-g
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My rank is            0 !
</span><br>
<span class="quotelev1">&gt;  waiting for message from            1
</span><br>
<span class="quotelev1">&gt;  My rank is            1 !
</span><br>
<span class="quotelev1">&gt;  Greetings from process            1 !
</span><br>
<span class="quotelev1">&gt;  Sending message from            1 !
</span><br>
<span class="quotelev1">&gt;  Message recieved: HelloFromMexxxxxxxxx!
</span><br>
<span class="quotelev1">&gt;  All done...           0
</span><br>
<span class="quotelev1">&gt;  All done...           1
</span><br>
<span class="quotelev1">&gt; ===================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks, Bettina Krammer
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (The example is taken from the distribution of DDT, to be found in 
</span><br>
<span class="quotelev1">&gt; ddt/examples. The problem is reproducible with the simplified 
</span><br>
<span class="quotelev1">&gt; hello-simple.f. The deadlock occurs in the DO source... MPI_Recv(...) 
</span><br>
<span class="quotelev1">&gt; .... loop)
</span><br>
<span class="quotelev1">&gt; ===================
</span><br>
<span class="quotelev1">&gt; The config.log is not available to me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hpc43203 cacau1 219$ompi_info
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.1
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r10477
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.1
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r10477
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.1
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r10477
</span><br>
<span class="quotelev1">&gt;                   Prefix: /opt/OpenMPI/1.1.0/
</span><br>
<span class="quotelev1">&gt;  Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;            Configured by: hpcraink
</span><br>
<span class="quotelev1">&gt;            Configured on: Mon Jul 31 12:55:30 CEST 2006
</span><br>
<span class="quotelev1">&gt;           Configure host: cacau1
</span><br>
<span class="quotelev1">&gt;                 Built by: hpcraink
</span><br>
<span class="quotelev1">&gt;                 Built on: Mon Jul 31 13:16:04 CEST 2006
</span><br>
<span class="quotelev1">&gt;               Built host: cacau1
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
<span class="quotelev1">&gt;               C compiler: icc
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /opt/intel/compiler/9.1/cce/bin/icc
</span><br>
<span class="quotelev1">&gt;             C++ compiler: icpc
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /opt/intel/compiler/9.1/cce/bin/icpc
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: ifc
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: /opt/intel/compiler/9.1/fce/bin/ifc
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: ifc
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: /opt/intel/compiler/9.1/fce/bin/ifc
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
<span class="quotelev1">&gt;               MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: libnuma (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                MCA timer: linux (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: basic (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: hierarch (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: self (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: tuned (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                   MCA io: romio (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: mvapi (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: rb (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: self (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: sm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: mvapi (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: unity (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: null (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: replica (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: proxy (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: proxy (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: replica (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: dash_host (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: hostfile (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: localhost (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: slurm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: tm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: hostfile (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: resfile (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: round_robin (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: proxy (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: urm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: fork (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: rsh (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: slurm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: tm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: env (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: singleton (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: slurm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------
</span><br>
<span class="quotelev1">&gt; * NEW PHONE AND FAX-NUMBERS *
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------
</span><br>
<span class="quotelev1">&gt; Dipl.-Math. Bettina Krammer
</span><br>
<span class="quotelev1">&gt; High Performance Computing Center (HLRS)
</span><br>
<span class="quotelev1">&gt; University of Stuttgart
</span><br>
<span class="quotelev1">&gt; Nobelstrasse 19
</span><br>
<span class="quotelev1">&gt; D-70569 Stuttgart
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Phone: ++49 (0)711-685-65890
</span><br>
<span class="quotelev1">&gt; Fax: ++49 (0)711-685-65832
</span><br>
<span class="quotelev1">&gt; email: krammer_at_[hidden]
</span><br>
<span class="quotelev1">&gt; URL: <a href="http://www.hlrs.de">http://www.hlrs.de</a>
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0989.php">Jeff Squyres: "Re: [OMPI devel] fortran application hanging when compiled with -g"</a>
<li><strong>Previous message:</strong> <a href="0987.php">Bettina Krammer: "[OMPI devel] fortran application hanging when compiled with -g"</a>
<li><strong>In reply to:</strong> <a href="0987.php">Bettina Krammer: "[OMPI devel] fortran application hanging when compiled with -g"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0989.php">Jeff Squyres: "Re: [OMPI devel] fortran application hanging when compiled with -g"</a>
<li><strong>Reply:</strong> <a href="0989.php">Jeff Squyres: "Re: [OMPI devel] fortran application hanging when compiled with -g"</a>
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
