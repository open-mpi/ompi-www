<?
$subject_val = "Re: [OMPI users] OpenMPI - compilation";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 15 01:31:16 2007" -->
<!-- isoreceived="20071115063116" -->
<!-- sent="Wed, 14 Nov 2007 22:31:10 -0800" -->
<!-- isosent="20071115063110" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI - compilation" -->
<!-- id="EF5B4763-5DF3-4BE2-903F-B557ABD2C3EC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="941193370711142220h3314abe6pf464a3d18e0e5a3c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI - compilation<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-15 01:31:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4473.php">Sajjad: "[OMPI users] OpenMPI - compilation"</a>
<li><strong>Previous message:</strong> <a href="4471.php">Sajjad: "[OMPI users] OpenMPI - compilation"</a>
<li><strong>In reply to:</strong> <a href="4471.php">Sajjad: "[OMPI users] OpenMPI - compilation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You didn't answer my question as to whether the &quot;mpitest1&quot; executable  
<br>
was available on all nodes or not.  :-)  That is the real problem here.
<br>
<p>But unrelated to that, you are running an ancient version of Open MPI  
<br>
(v1.1).  Is there any chance that you can upgrade to the latest stable  
<br>
release (v1.2.4)?
<br>
<p><p><p>On Nov 14, 2007, at 10:20 PM, Sajjad wrote:
<br>
<p><span class="quotelev1">&gt; Hello Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I thought that the following information will be helpful to track   
</span><br>
<span class="quotelev1">&gt; the issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ***********************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sajjad_at_sajjad:~$ ompi_info
</span><br>
<span class="quotelev1">&gt;                Open MPI: 1.1
</span><br>
<span class="quotelev1">&gt;   Open MPI SVN revision: r10477
</span><br>
<span class="quotelev1">&gt;                Open RTE: 1.1
</span><br>
<span class="quotelev1">&gt;   Open RTE SVN revision: r10477
</span><br>
<span class="quotelev1">&gt;                    OPAL: 1.1
</span><br>
<span class="quotelev1">&gt;       OPAL SVN revision: r10477
</span><br>
<span class="quotelev1">&gt;                  Prefix: /usr
</span><br>
<span class="quotelev1">&gt; Configured architecture: x86_64-pc-linux-gnu
</span><br>
<span class="quotelev1">&gt;           Configured by: buildd
</span><br>
<span class="quotelev1">&gt;           Configured on: Tue May  1 15:04:40 GMT 2007
</span><br>
<span class="quotelev1">&gt;          Configure host: yellow
</span><br>
<span class="quotelev1">&gt;                Built by: buildd
</span><br>
<span class="quotelev1">&gt;                Built on: Tue May  1 15:19:17 GMT 2007
</span><br>
<span class="quotelev1">&gt;              Built host: yellow
</span><br>
<span class="quotelev1">&gt;              C bindings: yes
</span><br>
<span class="quotelev1">&gt;            C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 bindings: yes (single underscore)
</span><br>
<span class="quotelev1">&gt;      Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt; Fortran90 bindings size: small
</span><br>
<span class="quotelev1">&gt;              C compiler: gcc
</span><br>
<span class="quotelev1">&gt;     C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;            C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;   C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;      Fortran77 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;  Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;      Fortran90 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;  Fortran90 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;             C profiling: yes
</span><br>
<span class="quotelev1">&gt;           C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;     Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;     Fortran90 profiling: yes
</span><br>
<span class="quotelev1">&gt;          C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;          Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev1">&gt;  Internal debug support: no
</span><br>
<span class="quotelev1">&gt;     MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;         libltdl support: yes
</span><br>
<span class="quotelev1">&gt;              MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.1)
</span><br>
<span class="quotelev1">&gt;           MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;           MCA maffinity: first_use (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.1)
</span><br>
<span class="quotelev1">&gt;               MCA timer: linux (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;           MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;           MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                MCA coll: basic (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                MCA coll: hierarch (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                MCA coll: self (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                MCA coll: sm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                MCA coll: tuned (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA io: romio (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;               MCA mpool: openib (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;               MCA mpool: sm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA bml: r2 (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;              MCA rcache: rb (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: openib (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: self (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: sm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                MCA topo: unity (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA gpr: null (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA gpr: replica (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: proxy (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: svc (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ns: proxy (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ns: replica (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA ras: dash_host (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA ras: hostfile (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA ras: localhost (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA ras: slurm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA rds: hostfile (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA rds: resfile (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: round_robin (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.1)
</span><br>
<span class="quotelev1">&gt;                MCA rmgr: proxy (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                MCA rmgr: urm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA rml: oob (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA pls: fork (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA pls: rsh (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA pls: slurm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA sds: env (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA sds: pipe (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA sds: seed (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA sds: singleton (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA sds: slurm (MCA v1.0, API v1.0, Component v1.1)
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
<li><strong>Next message:</strong> <a href="4473.php">Sajjad: "[OMPI users] OpenMPI - compilation"</a>
<li><strong>Previous message:</strong> <a href="4471.php">Sajjad: "[OMPI users] OpenMPI - compilation"</a>
<li><strong>In reply to:</strong> <a href="4471.php">Sajjad: "[OMPI users] OpenMPI - compilation"</a>
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
