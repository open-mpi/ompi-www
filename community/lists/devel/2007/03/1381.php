<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 22 14:46:51 2007" -->
<!-- isoreceived="20070322184651" -->
<!-- sent="Thu, 22 Mar 2007 14:46:36 -0400" -->
<!-- isosent="20070322184636" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RH Enterprise Linux issue" -->
<!-- id="E1228E75-52D3-41D1-914F-86B6589DBD62_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="FB99FC53-425B-450B-B6E1-A8AD1C56764C_at_computer.org" -->
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
<strong>Date:</strong> 2007-03-22 14:46:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1382.php">Greg Watson: "Re: [OMPI devel] RH Enterprise Linux issue"</a>
<li><strong>Previous message:</strong> <a href="1380.php">Greg Watson: "Re: [OMPI devel] RH Enterprise Linux issue"</a>
<li><strong>In reply to:</strong> <a href="1380.php">Greg Watson: "Re: [OMPI devel] RH Enterprise Linux issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1382.php">Greg Watson: "Re: [OMPI devel] RH Enterprise Linux issue"</a>
<li><strong>Reply:</strong> <a href="1382.php">Greg Watson: "Re: [OMPI devel] RH Enterprise Linux issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, if you could recompile with debugging, that would be great.
<br>
<p>What launcher are you trying to use?
<br>
<p><p>On Mar 22, 2007, at 2:35 PM, Greg Watson wrote:
<br>
<p><span class="quotelev1">&gt; gdb says this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #0  0x2e342e33 in ?? ()
</span><br>
<span class="quotelev1">&gt; #1  0xb7fe1d31 in orte_pls_base_select () from /usr/local/lib/libopen-
</span><br>
<span class="quotelev1">&gt; rte.so.0
</span><br>
<span class="quotelev1">&gt; #2  0xb7fc50cb in orte_init_stage1 () from /usr/local/lib/libopen-
</span><br>
<span class="quotelev1">&gt; rte.so.0
</span><br>
<span class="quotelev1">&gt; #3  0xb7fc84be in orte_system_init () from /usr/local/lib/libopen-
</span><br>
<span class="quotelev1">&gt; rte.so.0
</span><br>
<span class="quotelev1">&gt; #4  0xb7fc4cee in orte_init () from /usr/local/lib/libopen-rte.so.0
</span><br>
<span class="quotelev1">&gt; #5  0x08049ecb in orterun (argc=4, argv=0xbffff9f4) at orterun.c:369
</span><br>
<span class="quotelev1">&gt; #6  0x08049d7a in main (argc=4, argv=0xbffff9f4) at main.c:13
</span><br>
<span class="quotelev1">&gt; (gdb) The program is running.  Exit anyway? (y or n) y
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can recompile with debugging if that would be useful. Let me know
</span><br>
<span class="quotelev1">&gt; if there's anything else I can do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's ompi_info in case it helps:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  Open MPI: 1.2
</span><br>
<span class="quotelev1">&gt;     Open MPI SVN revision: r14027
</span><br>
<span class="quotelev1">&gt;                  Open RTE: 1.2
</span><br>
<span class="quotelev1">&gt;     Open RTE SVN revision: r14027
</span><br>
<span class="quotelev1">&gt;                      OPAL: 1.2
</span><br>
<span class="quotelev1">&gt;         OPAL SVN revision: r14027
</span><br>
<span class="quotelev1">&gt;                    Prefix: /usr/local
</span><br>
<span class="quotelev1">&gt; Configured architecture: i686-pc-linux-gnu
</span><br>
<span class="quotelev1">&gt;             Configured on: Thu Mar 22 13:39:30 EDT 2007
</span><br>
<span class="quotelev1">&gt;                  Built on: Thu Mar 22 13:55:38 EDT 2007
</span><br>
<span class="quotelev1">&gt;                C bindings: yes
</span><br>
<span class="quotelev1">&gt;              C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;        Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;        Fortran90 bindings: no
</span><br>
<span class="quotelev1">&gt; Fortran90 bindings size: na
</span><br>
<span class="quotelev1">&gt;                C compiler: gcc
</span><br>
<span class="quotelev1">&gt;       C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;              C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;     C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;        Fortran77 compiler: g77
</span><br>
<span class="quotelev1">&gt;    Fortran77 compiler abs: /usr/bin/g77
</span><br>
<span class="quotelev1">&gt;        Fortran90 compiler: none
</span><br>
<span class="quotelev1">&gt;    Fortran90 compiler abs: none
</span><br>
<span class="quotelev1">&gt;               C profiling: yes
</span><br>
<span class="quotelev1">&gt;             C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;       Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;       Fortran90 profiling: no
</span><br>
<span class="quotelev1">&gt;            C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;            Thread support: no
</span><br>
<span class="quotelev1">&gt;    Internal debug support: no
</span><br>
<span class="quotelev1">&gt;       MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;           libltdl support: yes
</span><br>
<span class="quotelev1">&gt;     Heterogeneous support: yes
</span><br>
<span class="quotelev1">&gt; mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt; mca: base: component_find: unable to open pml teg: file not found
</span><br>
<span class="quotelev1">&gt; (ignored)
</span><br>
<span class="quotelev1">&gt;             MCA backtrace: execinfo (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2)
</span><br>
<span class="quotelev1">&gt;                MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev1">&gt; v1.2)
</span><br>
<span class="quotelev1">&gt;             MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;             MCA maffinity: first_use (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev1">&gt; v1.2)
</span><br>
<span class="quotelev1">&gt;                 MCA timer: linux (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;             MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;             MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: basic (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: self (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: sm (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                    MCA io: romio (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: cm (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                MCA rcache: rb (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: self (MCA v1.0, API v1.0.1, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA topo: unity (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA gpr: null (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA gpr: replica (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA iof: svc (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                    MCA ns: proxy (MCA v1.0, API v2.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                    MCA ns: replica (MCA v1.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: dash_host (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev1">&gt; v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: gridengine (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev1">&gt; v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: hostfile (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev1">&gt; v1.0.2)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: localhost (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev1">&gt; v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: slurm (MCA v1.0, API v1.3, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA rds: hostfile (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA rds: resfile (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2)
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: round_robin (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev1">&gt; v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA rml: oob (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: daemon (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.0.2)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: fork (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: gridengine (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev1">&gt; v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: slurm (MCA v1.0, API v1.3, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: env (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: seed (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: singleton (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev1">&gt; v1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: slurm (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 22, 2007, at 12:29 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No, not a known problem -- my cluster is RHEL4U4 -- I use it for many
</span><br>
<span class="quotelev2">&gt;&gt; thousands of runs of the OMPI v1.2 branch every day...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you see where it's dying in orte_init_stage1?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 22, 2007, at 2:17 PM, Greg Watson wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is this a known problem? Building ompi 1.2 on RHEL4:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --with-devel-headers --without-threads
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (actually tried without '--without-threads' too, but no change)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpirun -np 2 test
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [beth:06029] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [beth:06029] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [beth:06029] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [beth:06029] Failing at address: 0x2e342e33
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [beth:06029] [ 0] /lib/tls/libc.so.6 [0x21b890]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [beth:06029] [ 1] /usr/local/lib/libopen-rte.so.0(orte_init_stage1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +0x293) [0xb7fc50cb]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [beth:06029] [ 2] /usr/local/lib/libopen-rte.so.0(orte_system_init
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +0x1e) [0xb7fc84be]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [beth:06029] [ 3] /usr/local/lib/libopen-rte.so.0(orte_init+0x6a)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0xb7fc4cee]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [beth:06029] [ 4] mpirun(orterun+0x14b) [0x8049ecb]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [beth:06029] [ 5] mpirun(main+0x2a) [0x8049d7a]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [beth:06029] [ 6] /lib/tls/libc.so.6(__libc_start_main+0xd3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x208de3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [beth:06029] [ 7] mpirun [0x8049cc9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [beth:06029] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Segmentation fault
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="1382.php">Greg Watson: "Re: [OMPI devel] RH Enterprise Linux issue"</a>
<li><strong>Previous message:</strong> <a href="1380.php">Greg Watson: "Re: [OMPI devel] RH Enterprise Linux issue"</a>
<li><strong>In reply to:</strong> <a href="1380.php">Greg Watson: "Re: [OMPI devel] RH Enterprise Linux issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1382.php">Greg Watson: "Re: [OMPI devel] RH Enterprise Linux issue"</a>
<li><strong>Reply:</strong> <a href="1382.php">Greg Watson: "Re: [OMPI devel] RH Enterprise Linux issue"</a>
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
