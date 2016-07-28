<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 21 16:13:25 2006" -->
<!-- isoreceived="20060221211325" -->
<!-- sent="Tue, 21 Feb 2006 16:11:36 -0500" -->
<!-- isosent="20060221211136" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Connection reset by peer" -->
<!-- id="8CB19FA5-A49F-465C-9DF6-19568A4E270F_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="093B2271-F44F-403D-98E3-9E2673FBA04E_at_zymeworks.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-21 16:11:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0685.php">Cezary Sliwa: "[OMPI users] MPI_SEND blocks when crossing node boundary"</a>
<li><strong>Previous message:</strong> <a href="0683.php">Luke Cyca: "[OMPI users] Connection reset by peer"</a>
<li><strong>In reply to:</strong> <a href="0683.php">Luke Cyca: "[OMPI users] Connection reset by peer"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The stack trace is reported by one of our internal tools. The last 2  
<br>
entries belong to the Open MPI project and correspond the the signal  
<br>
handler. When you look at the stack you should ignore the last 2  
<br>
entries (number [0] and [1]).
<br>
<p>The frag_recv is the place where we detect that one of the remote  
<br>
node failed. Once one of the node segfault, the other will abort the  
<br>
MPI jobs, as by default we follow the MPI specifications.
<br>
<p>It's very difficult to say what's wrong with such little information.  
<br>
If you can create a non NDA test that fails for you, you will make  
<br>
our life easier.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Feb 21, 2006, at 3:12 PM, Luke Cyca wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm experiencing seemingly random crashes when running my program
</span><br>
<span class="quotelev1">&gt; with OpenMPI version 1.0.2a7r9094.  My simulation runs fine through
</span><br>
<span class="quotelev1">&gt; lots of iterations, sometimes for several hours, and then quits with
</span><br>
<span class="quotelev1">&gt; the following output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev2">&gt;&gt; Failing at addr:0x37e3200
</span><br>
<span class="quotelev2">&gt;&gt; [0] func:/usr/lib/libopal.so.0 [0x2aaaac0ab2da]
</span><br>
<span class="quotelev2">&gt;&gt; [1] func:/lib/libpthread.so.0 [0x2aaaaacd04d0]
</span><br>
<span class="quotelev2">&gt;&gt; [2] &lt;My program's stack trace removed for NDA paranoia&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; [maltose:09314] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev1">&gt; Sometimes the error gets reported by frag_recv instead:
</span><br>
<span class="quotelev2">&gt;&gt; [glucose:09277] mca_btl_tcp_frag_recv: writev failed with errno=104
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Error 104 corresponds to ECONNRESET &quot;Connection reset by peer&quot;.  In
</span><br>
<span class="quotelev1">&gt; all other situations though, my network seems to be operating well.
</span><br>
<span class="quotelev1">&gt; Running `ifconfig eth0` on any of the nodes reports no errors or
</span><br>
<span class="quotelev1">&gt; dropped packets.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I had the same behavior when using the 1.0.1r8453 release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm unsure how to troubleshoot this further.  Any help or suggestions
</span><br>
<span class="quotelev1">&gt; would be greatly appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's my ompi_info output:
</span><br>
<span class="quotelev2">&gt;&gt;                 Open MPI: 1.0.2a7r9094
</span><br>
<span class="quotelev2">&gt;&gt;    Open MPI SVN revision: r9094
</span><br>
<span class="quotelev2">&gt;&gt;                 Open RTE: 1.0.2a7r9094
</span><br>
<span class="quotelev2">&gt;&gt;    Open RTE SVN revision: r9094
</span><br>
<span class="quotelev2">&gt;&gt;                     OPAL: 1.0.2a7r9094
</span><br>
<span class="quotelev2">&gt;&gt;        OPAL SVN revision: r9094
</span><br>
<span class="quotelev2">&gt;&gt;                   Prefix: /usr/local
</span><br>
<span class="quotelev2">&gt;&gt; Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev2">&gt;&gt;            Configured by: zymo
</span><br>
<span class="quotelev2">&gt;&gt;            Configured on: Mon Feb 20 15:56:27 PST 2006
</span><br>
<span class="quotelev2">&gt;&gt;           Configure host: idose
</span><br>
<span class="quotelev2">&gt;&gt;                 Built by: zymo
</span><br>
<span class="quotelev2">&gt;&gt;                 Built on: Mon Feb 20 16:14:53 PST 2006
</span><br>
<span class="quotelev2">&gt;&gt;               Built host: idose
</span><br>
<span class="quotelev2">&gt;&gt;               C bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;             C++ bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran90 bindings: no
</span><br>
<span class="quotelev2">&gt;&gt;               C compiler: gcc
</span><br>
<span class="quotelev2">&gt;&gt;      C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt;             C++ compiler: g++
</span><br>
<span class="quotelev2">&gt;&gt;    C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran77 compiler: g77
</span><br>
<span class="quotelev2">&gt;&gt;   Fortran77 compiler abs: /usr/bin/g77
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran90 compiler: none
</span><br>
<span class="quotelev2">&gt;&gt;   Fortran90 compiler abs: none
</span><br>
<span class="quotelev2">&gt;&gt;              C profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;            C++ profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;      Fortran90 profiling: no
</span><br>
<span class="quotelev2">&gt;&gt;           C++ exceptions: no
</span><br>
<span class="quotelev2">&gt;&gt;           Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev2">&gt;&gt;   Internal debug support: no
</span><br>
<span class="quotelev2">&gt;&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev2">&gt;&gt; Memory profiling support: no
</span><br>
<span class="quotelev2">&gt;&gt; Memory debugging support: no
</span><br>
<span class="quotelev2">&gt;&gt;          libltdl support: 1
</span><br>
<span class="quotelev2">&gt;&gt;               MCA memory: malloc_hooks (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev2">&gt;&gt; Component v1.0.2)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA paffinity: linux (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.0.2)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.0.2)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA timer: linux (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.0.2)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: basic (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.0.2)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: self (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA io: romio (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.0.2)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: teg (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ptl: self (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ptl: sm (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ptl: tcp (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: self (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: sm (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA topo: unity (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.0.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA gpr: null (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA gpr: proxy (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.0.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA gpr: replica (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.0.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA iof: proxy (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.0.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ns: proxy (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.0.2)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ns: replica (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.0.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: dash_host (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.0.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: hostfile (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.0.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: localhost (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.0.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: slurm (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.0.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rds: hostfile (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.0.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rds: resfile (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.0.2)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmaps: round_robin (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev2">&gt;&gt; Component v1.0.2)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rmgr: proxy (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.0.2)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rmgr: urm (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: daemon (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: fork (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: proxy (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.0.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: rsh (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: slurm (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.0.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: env (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.0.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: singleton (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.0.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: slurm (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.0.2)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ____________
</span><br>
<span class="quotelev1">&gt; Luke Cyca
</span><br>
<span class="quotelev1">&gt; (604) 678-1388 ext. 32
</span><br>
<span class="quotelev1">&gt; luke_at_[hidden]
</span><br>
<span class="quotelev1">&gt; www.zymeworks.com
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
<p>&quot;Half of what I say is meaningless; but I say it so that the other  
<br>
half may reach you&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kahlil Gibran
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0685.php">Cezary Sliwa: "[OMPI users] MPI_SEND blocks when crossing node boundary"</a>
<li><strong>Previous message:</strong> <a href="0683.php">Luke Cyca: "[OMPI users] Connection reset by peer"</a>
<li><strong>In reply to:</strong> <a href="0683.php">Luke Cyca: "[OMPI users] Connection reset by peer"</a>
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
