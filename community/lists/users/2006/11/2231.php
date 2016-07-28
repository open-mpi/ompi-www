<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Nov 26 12:23:42 2006" -->
<!-- isoreceived="20061126172342" -->
<!-- sent="Sun, 26 Nov 2006 17:23:13 +0000 (GMT)" -->
<!-- isosent="20061126172313" -->
<!-- name="Lydia Heck" -->
<!-- email="lydia.heck_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 443, Issue 1" -->
<!-- id="Pine.GSO.4.53.0611261713270.28835_at_duss0-ast.phyast.dur.ac.uk" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.36451.1164557428.28407.users_at_open-mpi.org" -->
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
<strong>From:</strong> Lydia Heck (<em>lydia.heck_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-26 12:23:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2232.php">Brock Palen: "Re: [OMPI users] myirnet problems on OSX"</a>
<li><strong>Previous message:</strong> <a href="2230.php">Galen Shipman: "Re: [OMPI users] myirnet problems on OSX"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You have to make sure that the path to the gm libraries is fully
<br>
set at runtime of your code:
<br>
<p>LD_LIBRARY_PATH=&quot;$PATH&quot;:/xx/gm/lib
<br>
<p>and of course xx stands for the location of your path to the where the gm
<br>
directory is located.
<br>
<p>Also for better performance you might want to use the sun compilers for
<br>
f77 as well.
<br>
<p><p>export F77=/opt/SUNWspro/bin/f95
<br>
export FC=/opt/SUNWspro/bin/f95
<br>
<p>Lydia
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 3
</span><br>
<span class="quotelev1">&gt; Date: Sat, 25 Nov 2006 22:15:07 -0400
</span><br>
<span class="quotelev1">&gt; From: bremner_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Myrinet/GM can't find any NICs
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;0tk61juf6c.wl%bremner_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=US-ASCII
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear experts;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I built openmpi-1.2b1 on solaris x86, enabling GM. Test jobs seem to
</span><br>
<span class="quotelev1">&gt; run OK, but I assume it is falling back on TCP over ethernet.
</span><br>
<span class="quotelev1">&gt; On of the following messages for each node.
</span><br>
<span class="quotelev1">&gt; (The output from ompi_info follows; config.log and the full output can
</span><br>
<span class="quotelev1">&gt; be found at <a href="http://www.cs.unb.ca/~bremner/openmpi">http://www.cs.unb.ca/~bremner/openmpi</a>)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [cl023:14729] [0,1,1] gm_port 0828CBA8, board 0, global 3712481415 node 1 port 4
</span><br>
<span class="quotelev1">&gt; [cl023:14729] [mpool_gm_module.c:100] error(32) registering gm memory
</span><br>
<span class="quotelev1">&gt; [cl023:14729] [mpool_gm_module.c:100] error(32) registering gm memory
</span><br>
<span class="quotelev1">&gt; [cl023:14729] [mpool_gm_module.c:100] error(32) registering gm memory
</span><br>
<span class="quotelev1">&gt; [cl023:14729] [btl_gm_component.c:409] unable to initialze gm port
</span><br>
<span class="quotelev1">&gt; [cl023:14727] [0,1,0] gm_port 0828CBA8, board 0, global 3712481415 node 1 port 5
</span><br>
<span class="quotelev1">&gt; [cl023:14727] [mpool_gm_module.c:100] error(32) registering gm memory
</span><br>
<span class="quotelev1">&gt; [cl023:14727] [mpool_gm_module.c:100] error(32) registering gm memory
</span><br>
<span class="quotelev1">&gt; [cl023:14727] [mpool_gm_module.c:100] error(32) registering gm memory
</span><br>
<span class="quotelev1">&gt; [cl023:14727] [btl_gm_component.c:409] unable to initialze gm port
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [0,1,0]: Myrinet/GM on host cl023 was unable to find any NICs.
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.2b1
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r12562
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.2b1
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r12562
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.2b1
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r12562
</span><br>
<span class="quotelev1">&gt;                   Prefix: /home/dbremner/pkg/openmpi-1.2b1-gm
</span><br>
<span class="quotelev1">&gt;  Configured architecture: i386-pc-solaris2.10
</span><br>
<span class="quotelev1">&gt;            Configured by:
</span><br>
<span class="quotelev1">&gt;            Configured on: Sat Nov 25 16:56:01 AST 2006
</span><br>
<span class="quotelev1">&gt;           Configure host: clhead
</span><br>
<span class="quotelev1">&gt;                 Built by: dbremner
</span><br>
<span class="quotelev1">&gt;                 Built on: Saturday November 25 17:16:33 AST 2006
</span><br>
<span class="quotelev1">&gt;               Built host: clhead
</span><br>
<span class="quotelev1">&gt;               C bindings: yes
</span><br>
<span class="quotelev1">&gt;             C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;       Fortran90 bindings: no
</span><br>
<span class="quotelev1">&gt;  Fortran90 bindings size: na
</span><br>
<span class="quotelev1">&gt;               C compiler: gcc
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /home/dbremner/bin/gcc
</span><br>
<span class="quotelev1">&gt;             C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /home/dbremner/bin/g++
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: g77
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: /opt/sfw/gcc-2/bin/g77
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: f95
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: /opt/SUNWspro/bin/f95
</span><br>
<span class="quotelev1">&gt;              C profiling: yes
</span><br>
<span class="quotelev1">&gt;            C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran90 profiling: no
</span><br>
<span class="quotelev1">&gt;           C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;           Thread support: solaris (mpi: no, progress: no)
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
<span class="quotelev1">&gt;  mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: printstack (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: solaris (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                MCA timer: solaris (MCA v1.0, API v1.0, Component v1.2)
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
<span class="quotelev1">&gt;                MCA mpool: gm (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: udapl (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: cm (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: dr (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: rb (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: gm (MCA v1.0, API v1.0.1, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: self (MCA v1.0, API v1.0.1, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: udapl (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: unity (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: rdma (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: null (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: replica (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: proxy (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: replica (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: dash_host (MCA v1.0, API v1.3, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: gridengine (MCA v1.0, API v1.3, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: localhost (MCA v1.0, API v1.3, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: hostfile (MCA v1.0, API v1.3, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: resfile (MCA v1.0, API v1.3, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: proxy (MCA v1.0, API v1.3, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: round_robin (MCA v1.0, API v1.3, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: gridengine (MCA v1.0, API v1.3, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: env (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: singleton (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2232.php">Brock Palen: "Re: [OMPI users] myirnet problems on OSX"</a>
<li><strong>Previous message:</strong> <a href="2230.php">Galen Shipman: "Re: [OMPI users] myirnet problems on OSX"</a>
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
