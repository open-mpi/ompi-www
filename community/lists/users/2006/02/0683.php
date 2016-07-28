<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 21 15:12:23 2006" -->
<!-- isoreceived="20060221201223" -->
<!-- sent="Tue, 21 Feb 2006 12:12:07 -0800" -->
<!-- isosent="20060221201207" -->
<!-- name="Luke Cyca" -->
<!-- email="luke_at_[hidden]" -->
<!-- subject="[OMPI users] Connection reset by peer" -->
<!-- id="093B2271-F44F-403D-98E3-9E2673FBA04E_at_zymeworks.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Luke Cyca (<em>luke_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-21 15:12:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0684.php">George Bosilca: "Re: [OMPI users] Connection reset by peer"</a>
<li><strong>Previous message:</strong> <a href="0682.php">George Bosilca: "Re: [OMPI users] couple of subversion questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0684.php">George Bosilca: "Re: [OMPI users] Connection reset by peer"</a>
<li><strong>Reply:</strong> <a href="0684.php">George Bosilca: "Re: [OMPI users] Connection reset by peer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm experiencing seemingly random crashes when running my program  
<br>
with OpenMPI version 1.0.2a7r9094.  My simulation runs fine through  
<br>
lots of iterations, sometimes for several hours, and then quits with  
<br>
the following output.
<br>
<p><span class="quotelev1">&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev1">&gt; Failing at addr:0x37e3200
</span><br>
<span class="quotelev1">&gt; [0] func:/usr/lib/libopal.so.0 [0x2aaaac0ab2da]
</span><br>
<span class="quotelev1">&gt; [1] func:/lib/libpthread.so.0 [0x2aaaaacd04d0]
</span><br>
<span class="quotelev1">&gt; [2] &lt;My program's stack trace removed for NDA paranoia&gt;
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [maltose:09314] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
Sometimes the error gets reported by frag_recv instead:
<br>
<span class="quotelev1">&gt; [glucose:09277] mca_btl_tcp_frag_recv: writev failed with errno=104
</span><br>
<p>Error 104 corresponds to ECONNRESET &quot;Connection reset by peer&quot;.  In  
<br>
all other situations though, my network seems to be operating well.   
<br>
Running `ifconfig eth0` on any of the nodes reports no errors or  
<br>
dropped packets.
<br>
<p>I had the same behavior when using the 1.0.1r8453 release.
<br>
<p>I'm unsure how to troubleshoot this further.  Any help or suggestions  
<br>
would be greatly appreciated.
<br>
<p>Here's my ompi_info output:
<br>
<span class="quotelev1">&gt;                 Open MPI: 1.0.2a7r9094
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r9094
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.0.2a7r9094
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r9094
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.0.2a7r9094
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r9094
</span><br>
<span class="quotelev1">&gt;                   Prefix: /usr/local
</span><br>
<span class="quotelev1">&gt; Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;            Configured by: zymo
</span><br>
<span class="quotelev1">&gt;            Configured on: Mon Feb 20 15:56:27 PST 2006
</span><br>
<span class="quotelev1">&gt;           Configure host: idose
</span><br>
<span class="quotelev1">&gt;                 Built by: zymo
</span><br>
<span class="quotelev1">&gt;                 Built on: Mon Feb 20 16:14:53 PST 2006
</span><br>
<span class="quotelev1">&gt;               Built host: idose
</span><br>
<span class="quotelev1">&gt;               C bindings: yes
</span><br>
<span class="quotelev1">&gt;             C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;       Fortran90 bindings: no
</span><br>
<span class="quotelev1">&gt;               C compiler: gcc
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;             C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: g77
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: /usr/bin/g77
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: none
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: none
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
<span class="quotelev1">&gt;          libltdl support: 1
</span><br>
<span class="quotelev1">&gt;               MCA memory: malloc_hooks (MCA v1.0, API v1.0,  
</span><br>
<span class="quotelev1">&gt; Component v1.0.2)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.0.2)
</span><br>
<span class="quotelev1">&gt;                MCA timer: linux (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: basic (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: self (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev1">&gt;                   MCA io: romio (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: teg (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: self (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: sm (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: tcp (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: self (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: sm (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: unity (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: null (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: replica (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.0.2)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: proxy (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: proxy (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: replica (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.0.2)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: dash_host (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.0.2)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: hostfile (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.0.2)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: localhost (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.0.2)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: slurm (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: hostfile (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.0.2)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: resfile (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.0.2)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: round_robin (MCA v1.0, API v1.0,  
</span><br>
<span class="quotelev1">&gt; Component v1.0.2)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: proxy (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: urm (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: daemon (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.0.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: fork (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: proxy (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: rsh (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: slurm (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: env (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: singleton (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.0.2)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: slurm (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<p>____________
<br>
Luke Cyca
<br>
(604) 678-1388 ext. 32
<br>
luke_at_[hidden]
<br>
www.zymeworks.com
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0684.php">George Bosilca: "Re: [OMPI users] Connection reset by peer"</a>
<li><strong>Previous message:</strong> <a href="0682.php">George Bosilca: "Re: [OMPI users] couple of subversion questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0684.php">George Bosilca: "Re: [OMPI users] Connection reset by peer"</a>
<li><strong>Reply:</strong> <a href="0684.php">George Bosilca: "Re: [OMPI users] Connection reset by peer"</a>
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
