<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 14 04:04:17 2006" -->
<!-- isoreceived="20060814080417" -->
<!-- sent="Mon, 14 Aug 2006 09:58:40 +0200" -->
<!-- isosent="20060814075840" -->
<!-- name="Sven Stork" -->
<!-- email="stork_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] fortran application hanging when compiled with -g" -->
<!-- id="200608140958.41022.stork_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C101EB25.22BB9%jsquyres_at_cisco.com" -->
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
<strong>Date:</strong> 2006-08-14 03:58:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0991.php">Sven Stork: "Re: [OMPI devel] fortran application hanging when compiled with -g"</a>
<li><strong>Previous message:</strong> <a href="0989.php">Jeff Squyres: "Re: [OMPI devel] fortran application hanging when compiled with -g"</a>
<li><strong>In reply to:</strong> <a href="0989.php">Jeff Squyres: "Re: [OMPI devel] fortran application hanging when compiled with -g"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0991.php">Sven Stork: "Re: [OMPI devel] fortran application hanging when compiled with -g"</a>
<li><strong>Reply:</strong> <a href="0991.php">Sven Stork: "Re: [OMPI devel] fortran application hanging when compiled with -g"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The problem is that after the MPI_Recv call the loop 
<br>
variable is set to 0, and therefore the loop doesn't stop 
<br>
as supposed to be for 2 processes.
<br>
<p>If you use another temp. varaible as parameter the program 
<br>
works. The strange thing is that temp. variable wont be changed and still 
<br>
contains the origin value while the loop variable still gets changed (this 
<br>
time to a value higher than 0).
<br>
<p>On Friday 11 August 2006 17:07, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I'm not quite sure I understand -- does the application hang in an MPI call?
</span><br>
<span class="quotelev1">&gt; Or is there some compiler error that is causing it to execute a DO loop
</span><br>
<span class="quotelev1">&gt; incorrectly?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 8/11/06 6:25 AM, &quot;Sven Stork&quot; &lt;stork_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The real problem is not the -g it is the -O0 option which will be
</span><br>
<span class="quotelev2">&gt; &gt; automatically added by -g. If you compile with &quot;-g -ON&quot; for 0 &lt; N 
</span><br>
everythings
<br>
<span class="quotelev2">&gt; &gt; works as expected.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Sven
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Friday 11 August 2006 11:54, Bettina Krammer wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; when I use the attached hello.f with Open MPI 1.1.0 and underlying Intel
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 9.0 or 9.1 compiler on our Xeon cluster, it is deadlocking when compiled
</span><br>
<span class="quotelev3">&gt; &gt;&gt; with -g option but works without -g:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ===================
</span><br>
<span class="quotelev3">&gt; &gt;&gt; output with -g:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; $mpirun -np 2 ./hello-g
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; My rank is            0 !
</span><br>
<span class="quotelev3">&gt; &gt;&gt; waiting for message from            1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; My rank is            1 !
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Greetings from process            1 !
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sending message from            1 !
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Message recieved: HelloFromMexxxxxxxxx!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; waiting for message from            1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       [...deadlock...]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ===================
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  output without -g:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; $mpirun -np 2 ./hello-no-g
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; My rank is            0 !
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  waiting for message from            1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  My rank is            1 !
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Greetings from process            1 !
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Sending message from            1 !
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Message recieved: HelloFromMexxxxxxxxx!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  All done...           0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  All done...           1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ===================
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks, Bettina Krammer
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (The example is taken from the distribution of DDT, to be found in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ddt/examples. The problem is reproducible with the simplified
</span><br>
<span class="quotelev3">&gt; &gt;&gt; hello-simple.f. The deadlock occurs in the DO source... MPI_Recv(...)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; .... loop)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ===================
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The config.log is not available to me.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; hpc43203 cacau1 219$ompi_info
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 Open MPI: 1.1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    Open MPI SVN revision: r10477
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 Open RTE: 1.1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    Open RTE SVN revision: r10477
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                     OPAL: 1.1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        OPAL SVN revision: r10477
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                   Prefix: /opt/OpenMPI/1.1.0/
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            Configured by: hpcraink
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            Configured on: Mon Jul 31 12:55:30 CEST 2006
</span><br>
<span class="quotelev3">&gt; &gt;&gt;           Configure host: cacau1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 Built by: hpcraink
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 Built on: Mon Jul 31 13:16:04 CEST 2006
</span><br>
<span class="quotelev3">&gt; &gt;&gt;               Built host: cacau1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;               C bindings: yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             C++ bindings: yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Fortran90 bindings size: small
</span><br>
<span class="quotelev3">&gt; &gt;&gt;               C compiler: icc
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      C compiler absolute: /opt/intel/compiler/9.1/cce/bin/icc
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             C++ compiler: icpc
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    C++ compiler absolute: /opt/intel/compiler/9.1/cce/bin/icpc
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       Fortran77 compiler: ifc
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Fortran77 compiler abs: /opt/intel/compiler/9.1/fce/bin/ifc
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       Fortran90 compiler: ifc
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Fortran90 compiler abs: /opt/intel/compiler/9.1/fce/bin/ifc
</span><br>
<span class="quotelev3">&gt; &gt;&gt;              C profiling: yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            C++ profiling: yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;           C++ exceptions: no
</span><br>
<span class="quotelev3">&gt; &gt;&gt;           Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Internal debug support: no
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Memory profiling support: no
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Memory debugging support: no
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          libltdl support: yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;               MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            MCA maffinity: libnuma (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA timer: linux (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA coll: basic (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA coll: hierarch (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA coll: self (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA coll: tuned (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                   MCA io: romio (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA mpool: mvapi (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;               MCA rcache: rb (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA btl: self (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA btl: sm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA btl: mvapi (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA topo: unity (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA gpr: null (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA gpr: replica (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA iof: proxy (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                   MCA ns: proxy (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                   MCA ns: replica (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA ras: dash_host (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA ras: hostfile (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA ras: localhost (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA ras: slurm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA ras: tm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA rds: hostfile (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA rds: resfile (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MCA rmaps: round_robin (MCA v1.0, API v1.0, Component 
</span><br>
v1.1)
<br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA rmgr: proxy (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 MCA rmgr: urm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA pls: fork (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA pls: rsh (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA pls: slurm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA pls: tm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA sds: env (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA sds: singleton (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA sds: slurm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ---------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; * NEW PHONE AND FAX-NUMBERS *
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ---------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Dipl.-Math. Bettina Krammer
</span><br>
<span class="quotelev3">&gt; &gt;&gt; High Performance Computing Center (HLRS)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; University of Stuttgart
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Nobelstrasse 19
</span><br>
<span class="quotelev3">&gt; &gt;&gt; D-70569 Stuttgart
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Phone: ++49 (0)711-685-65890
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Fax: ++49 (0)711-685-65832
</span><br>
<span class="quotelev3">&gt; &gt;&gt; email: krammer_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; URL: <a href="http://www.hlrs.de">http://www.hlrs.de</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ---------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0991.php">Sven Stork: "Re: [OMPI devel] fortran application hanging when compiled with -g"</a>
<li><strong>Previous message:</strong> <a href="0989.php">Jeff Squyres: "Re: [OMPI devel] fortran application hanging when compiled with -g"</a>
<li><strong>In reply to:</strong> <a href="0989.php">Jeff Squyres: "Re: [OMPI devel] fortran application hanging when compiled with -g"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0991.php">Sven Stork: "Re: [OMPI devel] fortran application hanging when compiled with -g"</a>
<li><strong>Reply:</strong> <a href="0991.php">Sven Stork: "Re: [OMPI devel] fortran application hanging when compiled with -g"</a>
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
