<?
$subject_val = "Re: [OMPI users] OpenMPI-1.3 and XGrid";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 27 11:21:22 2009" -->
<!-- isoreceived="20090127162122" -->
<!-- sent="Tue, 27 Jan 2009 11:21:00 -0500" -->
<!-- isosent="20090127162100" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI-1.3 and XGrid" -->
<!-- id="12573727-6C1D-48C9-87CE-194CA9708DB9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="0FA04FAF-5A1D-4C7A-8D4E-4D14E6E33B76_at_fraka-mp.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI-1.3 and XGrid<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-27 11:21:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7863.php">Jeff Squyres: "Re: [OMPI users] Cannot compile on Linux Itanium system"</a>
<li><strong>Previous message:</strong> <a href="7861.php">Jeff Squyres: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<li><strong>In reply to:</strong> <a href="7809.php">Frank Kahle: "[OMPI users] OpenMPI-1.3 and XGrid"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for reporting this Frank -- looks like we borked a symbol in  
<br>
the xgrid component in 1.3.  It seems that the compiler doesn't  
<br>
complain about the missing symbol; it only shows up when you try to  
<br>
*run* with it.  Whoops!
<br>
<p>I filed ticket <a href="https://svn.open-mpi.org/trac/ompi/ticket/1777">https://svn.open-mpi.org/trac/ompi/ticket/1777</a> about  
<br>
this issue.
<br>
<p><p>On Jan 23, 2009, at 3:11 PM, Frank Kahle wrote:
<br>
<p><span class="quotelev1">&gt; I'm running OpenMPI on OS X 4.11. After upgrading to OpenMPI-1.3 I  
</span><br>
<span class="quotelev1">&gt; get the following error when submitting a job via XGrid:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; dyld: lazy symbol binding failed: Symbol not found:  
</span><br>
<span class="quotelev1">&gt; _orte_pointer_array_add
</span><br>
<span class="quotelev1">&gt;  Referenced from: /usr/local/mpi/lib/openmpi/mca_plm_xgrid.so
</span><br>
<span class="quotelev1">&gt;  Expected in: flat namespace
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here you'll find ompi_info's output:
</span><br>
<span class="quotelev1">&gt; [g5-node-1:~] motte% ompi_info
</span><br>
<span class="quotelev1">&gt;                 Package: Open MPI root_at_ibi.local Distribution
</span><br>
<span class="quotelev1">&gt;                Open MPI: 1.3
</span><br>
<span class="quotelev1">&gt;   Open MPI SVN revision: r20295
</span><br>
<span class="quotelev1">&gt;   Open MPI release date: Jan 19, 2009
</span><br>
<span class="quotelev1">&gt;                Open RTE: 1.3
</span><br>
<span class="quotelev1">&gt;   Open RTE SVN revision: r20295
</span><br>
<span class="quotelev1">&gt;   Open RTE release date: Jan 19, 2009
</span><br>
<span class="quotelev1">&gt;                    OPAL: 1.3
</span><br>
<span class="quotelev1">&gt;       OPAL SVN revision: r20295
</span><br>
<span class="quotelev1">&gt;       OPAL release date: Jan 19, 2009
</span><br>
<span class="quotelev1">&gt;            Ident string: 1.3
</span><br>
<span class="quotelev1">&gt;                  Prefix: /usr/local/mpi
</span><br>
<span class="quotelev1">&gt; Configured architecture: powerpc-apple-darwin8
</span><br>
<span class="quotelev1">&gt;          Configure host: ibi.local
</span><br>
<span class="quotelev1">&gt;           Configured by: root
</span><br>
<span class="quotelev1">&gt;           Configured on: Tue Jan 20 19:45:26 CET 2009
</span><br>
<span class="quotelev1">&gt;          Configure host: ibi.local
</span><br>
<span class="quotelev1">&gt;                Built by: root
</span><br>
<span class="quotelev1">&gt;                Built on: Tue Jan 20 20:49:48 CET 2009
</span><br>
<span class="quotelev1">&gt;              Built host: ibi.local
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
<span class="quotelev1">&gt;              C compiler: gcc-4.3
</span><br>
<span class="quotelev1">&gt;     C compiler absolute: /usr/local/bin/gcc-4.3
</span><br>
<span class="quotelev1">&gt;            C++ compiler: c++-4.3
</span><br>
<span class="quotelev1">&gt;   C++ compiler absolute: /usr/local/bin/c++-4.3
</span><br>
<span class="quotelev1">&gt;      Fortran77 compiler: gfortran-4.3
</span><br>
<span class="quotelev1">&gt;  Fortran77 compiler abs: /usr/local/bin/gfortran-4.3
</span><br>
<span class="quotelev1">&gt;      Fortran90 compiler: gfortran-4.3
</span><br>
<span class="quotelev1">&gt;  Fortran90 compiler abs: /usr/local/bin/gfortran-4.3
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
<span class="quotelev1">&gt;           Sparse Groups: no
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
<span class="quotelev1">&gt;   Heterogeneous support: no
</span><br>
<span class="quotelev1">&gt; mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt;         MPI I/O support: yes
</span><br>
<span class="quotelev1">&gt;       MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev1">&gt; Symbol visibility support: yes
</span><br>
<span class="quotelev1">&gt;   FT Checkpoint support: no  (checkpoint thread: no)
</span><br>
<span class="quotelev1">&gt;           MCA backtrace: darwin (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;           MCA paffinity: darwin (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;               MCA carto: auto_detect (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3)
</span><br>
<span class="quotelev1">&gt;               MCA carto: file (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;           MCA maffinity: first_use (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3)
</span><br>
<span class="quotelev1">&gt;               MCA timer: darwin (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;         MCA installdirs: env (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;         MCA installdirs: config (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                 MCA dpm: orte (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;              MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;           MCA allocator: basic (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;           MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                MCA coll: basic (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                MCA coll: inter (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                MCA coll: self (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                MCA coll: sm (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                MCA coll: tuned (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                  MCA io: romio (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;               MCA mpool: fake (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;               MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;               MCA mpool: sm (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: cm (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: v (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                 MCA bml: r2 (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;              MCA rcache: vma (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: self (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: sm (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: tcp (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                MCA topo: unity (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                 MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                 MCA osc: rdma (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: hnp (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: orted (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: tool (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                 MCA oob: tcp (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                MCA odls: default (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                 MCA ras: slurm (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: rank_file (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: round_robin (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                 MCA rml: oob (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;              MCA routed: binomial (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;              MCA routed: direct (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;              MCA routed: linear (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                 MCA plm: rsh (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                 MCA plm: slurm (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                 MCA plm: xgrid (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;               MCA filem: rsh (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;              MCA errmgr: default (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: env (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: hnp (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: singleton (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: slurm (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: tool (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;             MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;             MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do I have to configure OpenMPI-1.3 in a different way than  
</span><br>
<span class="quotelev1">&gt; OpenMPI-1.2.8?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards,
</span><br>
<span class="quotelev1">&gt; Frank
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
<li><strong>Next message:</strong> <a href="7863.php">Jeff Squyres: "Re: [OMPI users] Cannot compile on Linux Itanium system"</a>
<li><strong>Previous message:</strong> <a href="7861.php">Jeff Squyres: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<li><strong>In reply to:</strong> <a href="7809.php">Frank Kahle: "[OMPI users] OpenMPI-1.3 and XGrid"</a>
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
