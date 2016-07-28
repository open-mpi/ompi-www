<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 17 11:28:51 2007" -->
<!-- isoreceived="20070917152851" -->
<!-- sent="Mon, 17 Sep 2007 11:26:28 -0400" -->
<!-- isosent="20070917152628" -->
<!-- name="Daniel Rozenbaum" -->
<!-- email="drozenbaum_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv" -->
<!-- id="46EE9CA4.2040406_at_yahoo.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E0FE510F-9FF1-44B2-96EA-21A5EC85B1C1_at_cisco.com" -->
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
<strong>From:</strong> Daniel Rozenbaum (<em>drozenbaum_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-17 11:26:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4029.php">Andrus, Mr. Brian (Contractor): "[OMPI users] mpi_file_set_view"</a>
<li><strong>Previous message:</strong> <a href="4027.php">Brian Barrett: "Re: [OMPI users] another mpirun + xgrid question"</a>
<li><strong>In reply to:</strong> <a href="4024.php">Jeff Squyres: "Re: [OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4039.php">Jeff Squyres: "Re: [OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv"</a>
<li><strong>Reply:</strong> <a href="4039.php">Jeff Squyres: "Re: [OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff, thanks a lot for taking the time,
<br>
<p>I looked into this some more and this could very well be a side effect 
<br>
of a problem in my code, maybe a memory violation that messes things up; 
<br>
I'm going to valgrind this thing and see what comes up. Most of the time 
<br>
the app runs just fine, so I'm not sure if it could also be a problem in 
<br>
the MPI messages logic in my code; could be though.
<br>
<p>What seems to be happening is this: the code of the server is written in 
<br>
such a manner that the server knows how many &quot;responses&quot; it's supposed 
<br>
to receive from all the clients, so when all the calculation tasks have 
<br>
been distributed, the server enters a loop inside which it calls 
<br>
MPI_Waitany on an array of handles until it receives all the results it 
<br>
expects. However, from my debug prints it looks like all the clients 
<br>
think they've sent all the results they could, and they're now all 
<br>
sitting in MPI_Probe, waiting for the server to send out the next 
<br>
instruction (which is supposed to contain a message indicating the end 
<br>
of the run). So, the server is stuck in MPI_Waitany() while all the 
<br>
clients are stuck in MPI_Probe().
<br>
<p><p>I was wondering if you could comment on the &quot;readv failed&quot; messages I'm 
<br>
seeing in the server's stderr:
<br>
<p>[host1][0,1,0][btl_tcp_frag.c:202:mca_btl_tcp_frag_recv] 
<br>
mca_btl_tcp_frag_recv: readv failed with errno=110
<br>
<p>I'm seeing a few of these along the server's run, with errno=110 
<br>
(&quot;Connection timed out&quot; according to the &quot;perl -e 'die$!=errno'&quot; method 
<br>
I found in OpenMPI FAQs), and I've also seen errno=113 (&quot;No route to 
<br>
host&quot;). Could this mean there's an occasional infrastructure problem? It 
<br>
would be strange, as it would then seem that this particular run somehow 
<br>
triggers it?.. Could these messages also mean that some messages got 
<br>
lost due to these errors, and that's why the server thinks it still has 
<br>
some results to receive while the clients think they've sent everything out?
<br>
<p>Many thanks,
<br>
Daniel
<br>
<p><p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; It sounds like we have a missed corner case of the OMPI run-time not  
</span><br>
<span class="quotelev1">&gt; cleaning properly.  I know one case like this came up recently (if an  
</span><br>
<span class="quotelev1">&gt; app calls exit() without calling MPI_FINALIZE, OMPI v1.2.x hangs) and  
</span><br>
<span class="quotelev1">&gt; Ralph is working on it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This could well be what is happening here...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you know how your process is exiting?  If a process dies via  
</span><br>
<span class="quotelev1">&gt; signal, OMPI *should* be seeing that and cleaning up the whole job  
</span><br>
<span class="quotelev1">&gt; properly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 12, 2007, at 10:50 PM, Daniel Rozenbaum wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm working on an MPI application for which I recently started  
</span><br>
<span class="quotelev2">&gt;&gt; using Open MPI instead of LAM/MPI. Both with Open MPI and LAM/MPI  
</span><br>
<span class="quotelev2">&gt;&gt; it mostly runs ok, but there're a number of cases under which the  
</span><br>
<span class="quotelev2">&gt;&gt; application terminates abnormally when using LAM/MPI, and hangs  
</span><br>
<span class="quotelev2">&gt;&gt; when using Open MPI. I haven't been able to reduce the example  
</span><br>
<span class="quotelev2">&gt;&gt; reproducing the problem, so every time it takes about an hour of  
</span><br>
<span class="quotelev2">&gt;&gt; running time before the application hangs. It hangs right before  
</span><br>
<span class="quotelev2">&gt;&gt; it's supposed to end properly. The master and all the slave  
</span><br>
<span class="quotelev2">&gt;&gt; processes are showing in &quot;top&quot; consuming 100% CPU. The application  
</span><br>
<span class="quotelev2">&gt;&gt; just hangs there like that until I interrupt it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's the command line:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; orterun --prefix /path/to/openmpi -mca btl tcp,self -x PATH -x  
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH --hostfile hostfile1 /path/to/app_executable &lt;app  
</span><br>
<span class="quotelev2">&gt;&gt; params&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hostfile1:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; host1 slots=3
</span><br>
<span class="quotelev2">&gt;&gt; host2 slots=4
</span><br>
<span class="quotelev2">&gt;&gt; host3 slots=4
</span><br>
<span class="quotelev2">&gt;&gt; host4 slots=4
</span><br>
<span class="quotelev2">&gt;&gt; host5 slots=4
</span><br>
<span class="quotelev2">&gt;&gt; host6 slots=4
</span><br>
<span class="quotelev2">&gt;&gt; host7 slots=4
</span><br>
<span class="quotelev2">&gt;&gt; host8 slots=4
</span><br>
<span class="quotelev2">&gt;&gt; host9 slots=4
</span><br>
<span class="quotelev2">&gt;&gt; host10 slots=4
</span><br>
<span class="quotelev2">&gt;&gt; host11 slots=4
</span><br>
<span class="quotelev2">&gt;&gt; host12 slots=4
</span><br>
<span class="quotelev2">&gt;&gt; host13 slots=4
</span><br>
<span class="quotelev2">&gt;&gt; host14 slots=4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Each host is a dual-CPU dual-core Intel box running Red Hat  
</span><br>
<span class="quotelev2">&gt;&gt; Enterprise Server 4.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I caught the following error messages on app's stderr during the run:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [host1][0,1,0][btl_tcp_frag.c:202:mca_btl_tcp_frag_recv]  
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_tcp_frag_recv: readv failed with errno=110
</span><br>
<span class="quotelev2">&gt;&gt; [host8][0,1,29][btl_tcp_frag.c:202:mca_btl_tcp_frag_recv]  
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_tcp_frag_recv: readv failed with errno=113
</span><br>
<span class="quotelev2">&gt;&gt; &lt;later&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [host1][0,1,0][btl_tcp_frag.c:202:mca_btl_tcp_frag_recv]  
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_tcp_frag_recv: readv failed with errno=110
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Excerpts from strace output, and ompi_info are attached below.
</span><br>
<span class="quotelev2">&gt;&gt; Any advice would be greatly appreciated!
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev2">&gt;&gt; Daniel
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info --all:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 Open MPI: 1.2.3
</span><br>
<span class="quotelev2">&gt;&gt;    Open MPI SVN revision: r15136
</span><br>
<span class="quotelev2">&gt;&gt;                 Open RTE: 1.2.3
</span><br>
<span class="quotelev2">&gt;&gt;    Open RTE SVN revision: r15136
</span><br>
<span class="quotelev2">&gt;&gt;                     OPAL: 1.2.3
</span><br>
<span class="quotelev2">&gt;&gt;        OPAL SVN revision: r15136
</span><br>
<span class="quotelev2">&gt;&gt;            MCA backtrace: execinfo (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA maffinity: libnuma (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA timer: linux (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;          MCA installdirs: env (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;          MCA installdirs: config (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: basic (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: self (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA io: romio (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA mpool: rdma (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: self (MCA v1.0, API v1.0.1, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA topo: unity (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA gpr: null (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA gpr: replica (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ns: proxy (MCA v1.0, API v2.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ns: replica (MCA v1.0, API v2.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: dash_host (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: gridengine (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: localhost (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: slurm (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rds: hostfile (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rds: resfile (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmaps: round_robin (MCA v1.0, API v1.3,  
</span><br>
<span class="quotelev2">&gt;&gt; Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: gridengine (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: slurm (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: env (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: singleton (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: slurm (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev2">&gt;&gt;                   Prefix: /path/to/openmpi
</span><br>
<span class="quotelev2">&gt;&gt;                   Bindir: /path/to/openmpi/bin
</span><br>
<span class="quotelev2">&gt;&gt;                   Libdir: /path/to/openmpi/lib
</span><br>
<span class="quotelev2">&gt;&gt;                   Incdir: /path/to/openmpi/include
</span><br>
<span class="quotelev2">&gt;&gt;                Pkglibdir: /path/to/openmpi/lib/openmpi
</span><br>
<span class="quotelev2">&gt;&gt;               Sysconfdir: /path/to/openmpi/etc
</span><br>
<span class="quotelev2">&gt;&gt;  Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev2">&gt;&gt;            Configured by: user1
</span><br>
<span class="quotelev2">&gt;&gt;            Configured on: Tue Sep 11 15:57:23 EDT 2007
</span><br>
<span class="quotelev2">&gt;&gt;           Configure host: host1.domain.com
</span><br>
<span class="quotelev2">&gt;&gt;                 Built by: user1
</span><br>
<span class="quotelev2">&gt;&gt;                 Built on: Tue Sep 11 16:09:44 EDT 2007
</span><br>
<span class="quotelev2">&gt;&gt;               Built host: host1.domain.com
</span><br>
<span class="quotelev2">&gt;&gt;               C bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;             C++ bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran90 bindings: no
</span><br>
<span class="quotelev2">&gt;&gt;  Fortran90 bindings size: na
</span><br>
<span class="quotelev2">&gt;&gt;               C compiler: gcc
</span><br>
<span class="quotelev2">&gt;&gt;      C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt;              C char size: 1
</span><br>
<span class="quotelev2">&gt;&gt;              C bool size: 1
</span><br>
<span class="quotelev2">&gt;&gt;             C short size: 2
</span><br>
<span class="quotelev2">&gt;&gt;               C int size: 4
</span><br>
<span class="quotelev2">&gt;&gt;              C long size: 8
</span><br>
<span class="quotelev2">&gt;&gt;             C float size: 4
</span><br>
<span class="quotelev2">&gt;&gt;            C double size: 8
</span><br>
<span class="quotelev2">&gt;&gt;           C pointer size: 8
</span><br>
<span class="quotelev2">&gt;&gt;             C char align: 1
</span><br>
<span class="quotelev2">&gt;&gt;             C bool align: 1
</span><br>
<span class="quotelev2">&gt;&gt;              C int align: 4
</span><br>
<span class="quotelev2">&gt;&gt;            C float align: 4
</span><br>
<span class="quotelev2">&gt;&gt;           C double align: 8
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
<span class="quotelev2">&gt;&gt;        Fort integer size: 4
</span><br>
<span class="quotelev2">&gt;&gt;        Fort logical size: 4
</span><br>
<span class="quotelev2">&gt;&gt;  Fort logical value true: 1
</span><br>
<span class="quotelev2">&gt;&gt;       Fort have integer1: yes
</span><br>
<span class="quotelev2">&gt;&gt;       Fort have integer2: yes
</span><br>
<span class="quotelev2">&gt;&gt;       Fort have integer4: yes
</span><br>
<span class="quotelev2">&gt;&gt;       Fort have integer8: yes
</span><br>
<span class="quotelev2">&gt;&gt;      Fort have integer16: no
</span><br>
<span class="quotelev2">&gt;&gt;          Fort have real4: yes
</span><br>
<span class="quotelev2">&gt;&gt;          Fort have real8: yes
</span><br>
<span class="quotelev2">&gt;&gt;         Fort have real16: no
</span><br>
<span class="quotelev2">&gt;&gt;       Fort have complex8: yes
</span><br>
<span class="quotelev2">&gt;&gt;      Fort have complex16: yes
</span><br>
<span class="quotelev2">&gt;&gt;      Fort have complex32: no
</span><br>
<span class="quotelev2">&gt;&gt;       Fort integer1 size: 1
</span><br>
<span class="quotelev2">&gt;&gt;       Fort integer2 size: 2
</span><br>
<span class="quotelev2">&gt;&gt;       Fort integer4 size: 4
</span><br>
<span class="quotelev2">&gt;&gt;       Fort integer8 size: 8
</span><br>
<span class="quotelev2">&gt;&gt;      Fort integer16 size: -1
</span><br>
<span class="quotelev2">&gt;&gt;           Fort real size: 4
</span><br>
<span class="quotelev2">&gt;&gt;          Fort real4 size: 4
</span><br>
<span class="quotelev2">&gt;&gt;          Fort real8 size: 8
</span><br>
<span class="quotelev2">&gt;&gt;         Fort real16 size: -1
</span><br>
<span class="quotelev2">&gt;&gt;       Fort dbl prec size: 4
</span><br>
<span class="quotelev2">&gt;&gt;           Fort cplx size: 4
</span><br>
<span class="quotelev2">&gt;&gt;       Fort dbl cplx size: 4
</span><br>
<span class="quotelev2">&gt;&gt;          Fort cplx8 size: 8
</span><br>
<span class="quotelev2">&gt;&gt;         Fort cplx16 size: 16
</span><br>
<span class="quotelev2">&gt;&gt;         Fort cplx32 size: -1
</span><br>
<span class="quotelev2">&gt;&gt;       Fort integer align: 4
</span><br>
<span class="quotelev2">&gt;&gt;      Fort integer1 align: 1
</span><br>
<span class="quotelev2">&gt;&gt;      Fort integer2 align: 2
</span><br>
<span class="quotelev2">&gt;&gt;      Fort integer4 align: 4
</span><br>
<span class="quotelev2">&gt;&gt;      Fort integer8 align: 8
</span><br>
<span class="quotelev2">&gt;&gt;     Fort integer16 align: -1
</span><br>
<span class="quotelev2">&gt;&gt;          Fort real align: 4
</span><br>
<span class="quotelev2">&gt;&gt;         Fort real4 align: 4
</span><br>
<span class="quotelev2">&gt;&gt;         Fort real8 align: 8
</span><br>
<span class="quotelev2">&gt;&gt;        Fort real16 align: -1
</span><br>
<span class="quotelev2">&gt;&gt;      Fort dbl prec align: 4
</span><br>
<span class="quotelev2">&gt;&gt;          Fort cplx align: 4
</span><br>
<span class="quotelev2">&gt;&gt;      Fort dbl cplx align: 4
</span><br>
<span class="quotelev2">&gt;&gt;         Fort cplx8 align: 4
</span><br>
<span class="quotelev2">&gt;&gt;        Fort cplx16 align: 8
</span><br>
<span class="quotelev2">&gt;&gt;        Fort cplx32 align: -1
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
<span class="quotelev2">&gt;&gt;             Build CFLAGS: -O3 -DNDEBUG -finline-functions -fno- 
</span><br>
<span class="quotelev2">&gt;&gt; strict-aliasing -pthread
</span><br>
<span class="quotelev2">&gt;&gt;           Build CXXFLAGS: -O3 -DNDEBUG -finline-functions -pthread
</span><br>
<span class="quotelev2">&gt;&gt;             Build FFLAGS:
</span><br>
<span class="quotelev2">&gt;&gt;            Build FCFLAGS:
</span><br>
<span class="quotelev2">&gt;&gt;            Build LDFLAGS: -export-dynamic
</span><br>
<span class="quotelev2">&gt;&gt;               Build LIBS: -lnsl -lutil  -lm
</span><br>
<span class="quotelev2">&gt;&gt;     Wrapper extra CFLAGS: -pthread
</span><br>
<span class="quotelev2">&gt;&gt;   Wrapper extra CXXFLAGS: -pthread
</span><br>
<span class="quotelev2">&gt;&gt;     Wrapper extra FFLAGS: -pthread
</span><br>
<span class="quotelev2">&gt;&gt;    Wrapper extra FCFLAGS: -pthread
</span><br>
<span class="quotelev2">&gt;&gt;    Wrapper extra LDFLAGS:
</span><br>
<span class="quotelev2">&gt;&gt;       Wrapper extra LIBS:   -ldl   -Wl,--export-dynamic -lnsl - 
</span><br>
<span class="quotelev2">&gt;&gt; lutil -lm -ldl
</span><br>
<span class="quotelev2">&gt;&gt;   Internal debug support: no
</span><br>
<span class="quotelev2">&gt;&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev2">&gt;&gt; Memory profiling support: no
</span><br>
<span class="quotelev2">&gt;&gt; Memory debugging support: no
</span><br>
<span class="quotelev2">&gt;&gt;          libltdl support: yes
</span><br>
<span class="quotelev2">&gt;&gt;    Heterogeneous support: yes
</span><br>
<span class="quotelev2">&gt;&gt;  mpirun default --prefix: no
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mca: parameter &quot;mca_param_files&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;/home/user1/.openmpi/mca-params.conf:/path/to/openmpi/etc/ 
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-mca-params.conf&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Path for MCA configuration files  
</span><br>
<span class="quotelev2">&gt;&gt; containing default parameter values
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mca: parameter &quot;mca_component_path&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;/path/to/openmpi/lib/openmpi:/home/user1/.openmpi/components&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Path where to look for Open MPI and ORTE  
</span><br>
<span class="quotelev2">&gt;&gt; components
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mca: parameter &quot;mca_verbose&quot; (current value:  
</span><br>
<span class="quotelev2">&gt;&gt; &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Top-level verbosity parameter
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mca: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mca_component_show_load_errors&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Whether to show errors for components  
</span><br>
<span class="quotelev2">&gt;&gt; that failed to load or not
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mca: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mca_component_disable_dlopen&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Whether to attempt to disable opening  
</span><br>
<span class="quotelev2">&gt;&gt; dynamic components or not
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mpi: parameter &quot;mpi_param_check&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Whether you want MPI API parameters  
</span><br>
<span class="quotelev2">&gt;&gt; checked at run-time or not.  Possible values are 0 (no checking)  
</span><br>
<span class="quotelev2">&gt;&gt; and 1 (perform checking at run-time)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mpi: parameter &quot;mpi_yield_when_idle&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Yield the processor when waiting for MPI  
</span><br>
<span class="quotelev2">&gt;&gt; communication (for MPI processes, will default to 1 when  
</span><br>
<span class="quotelev2">&gt;&gt; oversubscribing nodes)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mpi: parameter &quot;mpi_event_tick_rate&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           How often to progress TCP communications  
</span><br>
<span class="quotelev2">&gt;&gt; (0 = never, otherwise specified in microseconds)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mpi: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpi_show_handle_leaks&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Whether MPI_FINALIZE shows all MPI  
</span><br>
<span class="quotelev2">&gt;&gt; handles that were not freed or not
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mpi: parameter &quot;mpi_no_free_handles&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Whether to actually free MPI objects when  
</span><br>
<span class="quotelev2">&gt;&gt; their handles are freed
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mpi: parameter &quot;mpi_show_mca_params&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Whether to show all MCA parameter value  
</span><br>
<span class="quotelev2">&gt;&gt; during MPI_INIT or not (good for reproducability of MPI jobs)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mpi: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpi_show_mca_params_file&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           If mpi_show_mca_params is true, setting  
</span><br>
<span class="quotelev2">&gt;&gt; this string to a valid filename tells Open MPI to dump all the MCA  
</span><br>
<span class="quotelev2">&gt;&gt; parameter values into a file suitable for reading via the  
</span><br>
<span class="quotelev2">&gt;&gt; mca_param_files parameter (good for reproducability of MPI jobs)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mpi: parameter &quot;mpi_paffinity_alone&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           If nonzero, assume that this job is the  
</span><br>
<span class="quotelev2">&gt;&gt; only (set of) process(es) running on each node and bind processes  
</span><br>
<span class="quotelev2">&gt;&gt; to processors, starting with processor ID 0
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mpi: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpi_keep_peer_hostnames&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           If nonzero, save the string hostnames of  
</span><br>
<span class="quotelev2">&gt;&gt; all MPI peer processes (mostly for error / debugging output  
</span><br>
<span class="quotelev2">&gt;&gt; messages).  This can add quite a bit of memory usage to each MPI  
</span><br>
<span class="quotelev2">&gt;&gt; process.
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mpi: parameter &quot;mpi_abort_delay&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           If nonzero, print out an identifying  
</span><br>
<span class="quotelev2">&gt;&gt; message when MPI_ABORT is invoked (hostname, PID of the process  
</span><br>
<span class="quotelev2">&gt;&gt; that called MPI_ABORT) and delay for that many seconds before  
</span><br>
<span class="quotelev2">&gt;&gt; exiting (a negative delay value means to never abort).  This allows  
</span><br>
<span class="quotelev2">&gt;&gt; attaching of a debugger before quitting the job.
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mpi: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpi_abort_print_stack&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           If nonzero, print out a stack trace when  
</span><br>
<span class="quotelev2">&gt;&gt; MPI_ABORT is invoked
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mpi: parameter &quot;mpi_preconnect_all&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Whether to force MPI processes to create  
</span><br>
<span class="quotelev2">&gt;&gt; connections / warmup with *all* peers during MPI_INIT (vs. making  
</span><br>
<span class="quotelev2">&gt;&gt; connections lazily -- upon the first MPI traffic between each  
</span><br>
<span class="quotelev2">&gt;&gt; process peer pair)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mpi: parameter &quot;mpi_preconnect_oob&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Whether to force MPI processes to fully  
</span><br>
<span class="quotelev2">&gt;&gt; wire-up the OOB system between MPI processes.
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mpi: parameter &quot;mpi_leave_pinned&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Whether to use the &quot;leave pinned&quot;  
</span><br>
<span class="quotelev2">&gt;&gt; protocol or not.  Enabling this setting can help bandwidth  
</span><br>
<span class="quotelev2">&gt;&gt; performance when repeatedly sending and receiving large messages  
</span><br>
<span class="quotelev2">&gt;&gt; with the same buffers over RDMA-based networks.
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mpi: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpi_leave_pinned_pipeline&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Whether to use the &quot;leave pinned  
</span><br>
<span class="quotelev2">&gt;&gt; pipeline&quot; protocol or not.
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA orte: parameter &quot;orte_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Top-level ORTE debug switch
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA orte: parameter &quot;orte_no_daemonize&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Whether to properly daemonize the ORTE  
</span><br>
<span class="quotelev2">&gt;&gt; daemons or not
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA orte: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;orte_base_user_debugger&quot; (current value: &quot;totalview @mpirun@ -a  
</span><br>
<span class="quotelev2">&gt;&gt; @mpirun_args@ : fxp @mpirun@ -a @mpirun_args@&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Sequence of user-level debuggers to  
</span><br>
<span class="quotelev2">&gt;&gt; search for in orterun
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA orte: parameter &quot;orte_abort_timeout&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;10&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Time to wait [in seconds] before giving  
</span><br>
<span class="quotelev2">&gt;&gt; up on aborting an ORTE operation
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA orte: parameter &quot;orte_timing&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Request that critical timing loops be  
</span><br>
<span class="quotelev2">&gt;&gt; measured
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA opal: parameter &quot;opal_signal&quot; (current value:  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;6,7,8,11&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           If a signal is received, display the  
</span><br>
<span class="quotelev2">&gt;&gt; stack trace frame
</span><br>
<span class="quotelev2">&gt;&gt;            MCA backtrace: parameter &quot;backtrace&quot; (current value:  
</span><br>
<span class="quotelev2">&gt;&gt; &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the backtrace framework (&lt;none&gt; means &quot;use all components that can  
</span><br>
<span class="quotelev2">&gt;&gt; be found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA backtrace: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;backtrace_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Verbosity level for the backtrace  
</span><br>
<span class="quotelev2">&gt;&gt; framework (0 = no verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA backtrace: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;backtrace_execinfo_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA memory: parameter &quot;memory&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the memory framework (&lt;none&gt; means &quot;use all components that can be  
</span><br>
<span class="quotelev2">&gt;&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA memory: parameter &quot;memory_base_verbose&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Verbosity level for the memory framework  
</span><br>
<span class="quotelev2">&gt;&gt; (0 = no verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA memory: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;memory_ptmalloc2_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA paffinity: parameter &quot;paffinity&quot; (current value:  
</span><br>
<span class="quotelev2">&gt;&gt; &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the paffinity framework (&lt;none&gt; means &quot;use all components that can  
</span><br>
<span class="quotelev2">&gt;&gt; be found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA paffinity: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;paffinity_linux_priority&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Priority of the linux paffinity component
</span><br>
<span class="quotelev2">&gt;&gt;            MCA paffinity: information  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;paffinity_linux_have_cpu_set_t&quot; (value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Whether this component was compiled on a  
</span><br>
<span class="quotelev2">&gt;&gt; system with the type cpu_set_t or not (1 = yes, 0 = no)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA paffinity: information  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;paffinity_linux_CPU_ZERO_ok&quot; (value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Whether this component was compiled on a  
</span><br>
<span class="quotelev2">&gt;&gt; system where CPU_ZERO() is functional or broken (1 = functional, 0  
</span><br>
<span class="quotelev2">&gt;&gt; = broken/not available)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA paffinity: information  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;paffinity_linux_sched_setaffinity_num_params&quot; (value: &quot;3&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           The number of parameters that  
</span><br>
<span class="quotelev2">&gt;&gt; sched_set_affinity() takes on the machine where this component was  
</span><br>
<span class="quotelev2">&gt;&gt; compiled
</span><br>
<span class="quotelev2">&gt;&gt;            MCA maffinity: parameter &quot;maffinity&quot; (current value:  
</span><br>
<span class="quotelev2">&gt;&gt; &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the maffinity framework (&lt;none&gt; means &quot;use all components that can  
</span><br>
<span class="quotelev2">&gt;&gt; be found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA maffinity: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;maffinity_first_use_priority&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Priority of the first_use maffinity  
</span><br>
<span class="quotelev2">&gt;&gt; component
</span><br>
<span class="quotelev2">&gt;&gt;            MCA maffinity: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;maffinity_libnuma_priority&quot; (current value: &quot;25&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Priority of the libnuma maffinity component
</span><br>
<span class="quotelev2">&gt;&gt;                MCA timer: parameter &quot;timer&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the timer framework (&lt;none&gt; means &quot;use all components that can be  
</span><br>
<span class="quotelev2">&gt;&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA timer: parameter &quot;timer_base_verbose&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Verbosity level for the timer framework  
</span><br>
<span class="quotelev2">&gt;&gt; (0 = no verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA timer: parameter &quot;timer_linux_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA allocator: parameter &quot;allocator&quot; (current value:  
</span><br>
<span class="quotelev2">&gt;&gt; &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the allocator framework (&lt;none&gt; means &quot;use all components that can  
</span><br>
<span class="quotelev2">&gt;&gt; be found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA allocator: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;allocator_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Verbosity level for the allocator  
</span><br>
<span class="quotelev2">&gt;&gt; framework (0 = no verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA allocator: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;allocator_basic_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA allocator: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;allocator_bucket_num_buckets&quot; (current value: &quot;30&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA allocator: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;allocator_bucket_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter &quot;coll&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the coll framework (&lt;none&gt; means &quot;use all components that can be  
</span><br>
<span class="quotelev2">&gt;&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter &quot;coll_base_verbose&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Verbosity level for the coll framework (0  
</span><br>
<span class="quotelev2">&gt;&gt; = no verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter &quot;coll_basic_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;10&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Priority of the basic coll component
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter &quot;coll_basic_crossover&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;4&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Minimum number of processes in a  
</span><br>
<span class="quotelev2">&gt;&gt; communicator before using the logarithmic algorithms
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter &quot;coll_self_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;75&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter &quot;coll_sm_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Priority of the sm coll component
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter &quot;coll_sm_control_size&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;4096&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Length of the control data -- should  
</span><br>
<span class="quotelev2">&gt;&gt; usually be either the length of a cache line on most SMPs, or the  
</span><br>
<span class="quotelev2">&gt;&gt; size of a page on machines that support direct memory affinity page  
</span><br>
<span class="quotelev2">&gt;&gt; placement (in bytes)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;coll_sm_bootstrap_filename&quot; (current value:  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;shared_mem_sm_bootstrap&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Filename (in the Open MPI session  
</span><br>
<span class="quotelev2">&gt;&gt; directory) of the coll sm component bootstrap rendezvous mmap file
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;coll_sm_bootstrap_num_segments&quot; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Number of segments in the bootstrap file
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;coll_sm_fragment_size&quot; (current value: &quot;8192&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Fragment size (in bytes) used for passing  
</span><br>
<span class="quotelev2">&gt;&gt; data through shared memory (will be rounded up to the nearest  
</span><br>
<span class="quotelev2">&gt;&gt; control_size size)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter &quot;coll_sm_mpool&quot; (current value:  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;sm&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Name of the mpool component to use
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;coll_sm_comm_in_use_flags&quot; (current value: &quot;2&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Number of &quot;in use&quot; flags, used to mark a  
</span><br>
<span class="quotelev2">&gt;&gt; message passing area segment as currently being used or not (must  
</span><br>
<span class="quotelev2">&gt;&gt; be &gt;= 2 and &lt;= comm_num_segments)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;coll_sm_comm_num_segments&quot; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Number of segments in each communicator's  
</span><br>
<span class="quotelev2">&gt;&gt; shared memory message passing area (must be &gt;= 2, and must be a  
</span><br>
<span class="quotelev2">&gt;&gt; multiple of comm_in_use_flags)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter &quot;coll_sm_tree_degree&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;4&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Degree of the tree for tree-based  
</span><br>
<span class="quotelev2">&gt;&gt; operations (must be =&gt; 1 and &lt;= min(control_size, 255))
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: information  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;coll_sm_shared_mem_used_bootstrap&quot; (value: &quot;216&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Amount of shared memory used in the  
</span><br>
<span class="quotelev2">&gt;&gt; shared memory bootstrap area (in bytes)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;coll_sm_info_num_procs&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Number of processes to use for the  
</span><br>
<span class="quotelev2">&gt;&gt; calculation of the shared_mem_size MCA information parameter (must  
</span><br>
<span class="quotelev2">&gt;&gt; be =&gt; 2)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: information  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;coll_sm_shared_mem_used_data&quot; (value: &quot;548864&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Amount of shared memory used in the  
</span><br>
<span class="quotelev2">&gt;&gt; shared memory data area for info_num_procs processes (in bytes)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter &quot;coll_tuned_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;30&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Priority of the tuned coll component
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;coll_tuned_pre_allocate_memory_comm_size_limit&quot; (current value:  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;32768&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Size of communicator were we stop pre- 
</span><br>
<span class="quotelev2">&gt;&gt; allocating memory for the fixed internal buffer used for message  
</span><br>
<span class="quotelev2">&gt;&gt; requests etc that is hung off the communicator data segment. I.e.  
</span><br>
<span class="quotelev2">&gt;&gt; if you have a 100'000 nodes you might not want to pre-allocate  
</span><br>
<span class="quotelev2">&gt;&gt; 200'000 request handle slots per communicator instance!
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;coll_tuned_init_tree_fanout&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Inital fanout used in the tree topologies  
</span><br>
<span class="quotelev2">&gt;&gt; for each communicator. This is only an initial guess, if a tuned  
</span><br>
<span class="quotelev2">&gt;&gt; collective needs a different fanout for an operation, it build it  
</span><br>
<span class="quotelev2">&gt;&gt; dynamically. This parameter is only for the first guess and might  
</span><br>
<span class="quotelev2">&gt;&gt; save a little time
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;coll_tuned_init_chain_fanout&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Inital fanout used in the chain (fanout  
</span><br>
<span class="quotelev2">&gt;&gt; followed by pipeline) topologies for each communicator. This is  
</span><br>
<span class="quotelev2">&gt;&gt; only an initial guess, if a tuned collective needs a different  
</span><br>
<span class="quotelev2">&gt;&gt; fanout for an operation, it build it dynamically. This parameter is  
</span><br>
<span class="quotelev2">&gt;&gt; only for the first guess and might save a little time
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;coll_tuned_use_dynamic_rules&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Switch used to decide if we use static  
</span><br>
<span class="quotelev2">&gt;&gt; (compiled/if statements) or dynamic (built at runtime) decision  
</span><br>
<span class="quotelev2">&gt;&gt; function rules
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA io: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;io_base_freelist_initial_size&quot; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Initial MPI-2 IO request freelist size
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA io: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;io_base_freelist_max_size&quot; (current value: &quot;64&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Max size of the MPI-2 IO request freelist
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA io: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;io_base_freelist_increment&quot; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Increment size of the MPI-2 IO request  
</span><br>
<span class="quotelev2">&gt;&gt; freelist
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA io: parameter &quot;io&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the io framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA io: parameter &quot;io_base_verbose&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Verbosity level for the io framework (0 =  
</span><br>
<span class="quotelev2">&gt;&gt; no verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA io: parameter &quot;io_romio_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;10&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Priority of the io romio component
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA io: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;io_romio_delete_priority&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Delete priority of the io romio component
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA io: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;io_romio_enable_parallel_optimizations&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Enable set of Open MPI-added options to  
</span><br>
<span class="quotelev2">&gt;&gt; improve collective file i/o performance
</span><br>
<span class="quotelev2">&gt;&gt;                MCA mpool: parameter &quot;mpool&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the mpool framework (&lt;none&gt; means &quot;use all components that can be  
</span><br>
<span class="quotelev2">&gt;&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA mpool: parameter &quot;mpool_base_verbose&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Verbosity level for the mpool framework  
</span><br>
<span class="quotelev2">&gt;&gt; (0 = no verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA mpool: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpool_rdma_rcache_name&quot; (current value: &quot;vma&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           The name of the registration cache the  
</span><br>
<span class="quotelev2">&gt;&gt; mpool should use
</span><br>
<span class="quotelev2">&gt;&gt;                MCA mpool: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpool_rdma_rcache_size_limit&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           the maximum size of registration cache in  
</span><br>
<span class="quotelev2">&gt;&gt; bytes. 0 is unlimited (default 0)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA mpool: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpool_rdma_print_stats&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           print pool usage statistics at the end of  
</span><br>
<span class="quotelev2">&gt;&gt; the run
</span><br>
<span class="quotelev2">&gt;&gt;                MCA mpool: parameter &quot;mpool_rdma_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA mpool: parameter &quot;mpool_sm_allocator&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;bucket&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Name of allocator component to use with  
</span><br>
<span class="quotelev2">&gt;&gt; sm mpool
</span><br>
<span class="quotelev2">&gt;&gt;                MCA mpool: parameter &quot;mpool_sm_max_size&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;536870912&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Maximum size of the sm mpool shared  
</span><br>
<span class="quotelev2">&gt;&gt; memory file
</span><br>
<span class="quotelev2">&gt;&gt;                MCA mpool: parameter &quot;mpool_sm_min_size&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;134217728&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Minimum size of the sm mpool shared  
</span><br>
<span class="quotelev2">&gt;&gt; memory file
</span><br>
<span class="quotelev2">&gt;&gt;                MCA mpool: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpool_sm_per_peer_size&quot; (current value: &quot;33554432&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Size (in bytes) to allocate per local  
</span><br>
<span class="quotelev2">&gt;&gt; peer in the sm mpool shared memory file, bounded by min_size and  
</span><br>
<span class="quotelev2">&gt;&gt; max_size
</span><br>
<span class="quotelev2">&gt;&gt;                MCA mpool: parameter &quot;mpool_sm_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA mpool: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpool_base_use_mem_hooks&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           use memory hooks for deregistering freed  
</span><br>
<span class="quotelev2">&gt;&gt; memory
</span><br>
<span class="quotelev2">&gt;&gt;                MCA mpool: parameter &quot;mpool_use_mem_hooks&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           (deprecated, use mpool_base_use_mem_hooks)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA mpool: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpool_base_disable_sbrk&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           use mallopt to override calling sbrk  
</span><br>
<span class="quotelev2">&gt;&gt; (doesn't return memory to OS!)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA mpool: parameter &quot;mpool_disable_sbrk&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           (deprecated, use  
</span><br>
<span class="quotelev2">&gt;&gt; mca_mpool_base_disable_sbrk)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: parameter &quot;pml&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the pml framework (&lt;none&gt; means &quot;use all components that can be  
</span><br>
<span class="quotelev2">&gt;&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: parameter &quot;pml_base_verbose&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Verbosity level for the pml framework (0  
</span><br>
<span class="quotelev2">&gt;&gt; = no verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: parameter &quot;pml_cm_free_list_num&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;4&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Initial size of request free lists
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: parameter &quot;pml_cm_free_list_max&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Maximum size of request free lists
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: parameter &quot;pml_cm_free_list_inc&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;64&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Number of elements to add when growing  
</span><br>
<span class="quotelev2">&gt;&gt; request free lists
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: parameter &quot;pml_cm_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;30&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           CM PML selection priority
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;pml_ob1_free_list_num&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;pml_ob1_free_list_max&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;pml_ob1_free_list_inc&quot; (current value: &quot;64&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: parameter &quot;pml_ob1_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;20&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: parameter &quot;pml_ob1_eager_limit&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;131072&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;pml_ob1_send_pipeline_depth&quot; (current value: &quot;3&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;pml_ob1_recv_pipeline_depth&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA bml: parameter &quot;bml&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the bml framework (&lt;none&gt; means &quot;use all components that can be  
</span><br>
<span class="quotelev2">&gt;&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA bml: parameter &quot;bml_base_verbose&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Verbosity level for the bml framework (0  
</span><br>
<span class="quotelev2">&gt;&gt; = no verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA bml: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;bml_r2_show_unreach_errors&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Show error message when procs are  
</span><br>
<span class="quotelev2">&gt;&gt; unreachable
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA bml: parameter &quot;bml_r2_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA rcache: parameter &quot;rcache&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the rcache framework (&lt;none&gt; means &quot;use all components that can be  
</span><br>
<span class="quotelev2">&gt;&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA rcache: parameter &quot;rcache_base_verbose&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Verbosity level for the rcache framework  
</span><br>
<span class="quotelev2">&gt;&gt; (0 = no verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA rcache: parameter &quot;rcache_vma_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_base_debug&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           If btl_base_debug is 1 standard debug is  
</span><br>
<span class="quotelev2">&gt;&gt; output, if &gt; 1 verbose debug is output
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the btl framework (&lt;none&gt; means &quot;use all components that can be  
</span><br>
<span class="quotelev2">&gt;&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_base_verbose&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Verbosity level for the btl framework (0  
</span><br>
<span class="quotelev2">&gt;&gt; = no verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl_self_free_list_num&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Number of fragments by default
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl_self_free_list_max&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Maximum number of fragments
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl_self_free_list_inc&quot; (current value: &quot;32&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Increment by this number of fragments
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_self_eager_limit&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;131072&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Eager size fragmeng (before the rendez- 
</span><br>
<span class="quotelev2">&gt;&gt; vous ptotocol)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl_self_min_send_size&quot; (current value: &quot;262144&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Minimum fragment size after the rendez-vous
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl_self_max_send_size&quot; (current value: &quot;262144&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Maximum fragment size after the rendez-vous
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl_self_min_rdma_size&quot; (current value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Maximum fragment size for the RDMA transfer
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl_self_max_rdma_size&quot; (current value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Maximum fragment size for the RDMA transfer
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_self_exclusivity&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;65536&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Device exclusivity
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_self_flags&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;10&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Active behavior flags
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_self_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_sm_free_list_num&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;8&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_sm_free_list_max&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_sm_free_list_inc&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;64&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_sm_exclusivity&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;65535&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_sm_latency&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;100&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_sm_max_procs&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl_sm_sm_extra_procs&quot; (current value: &quot;2&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_sm_mpool&quot; (current value:  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;sm&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_sm_eager_limit&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;4096&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_sm_max_frag_size&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;32768&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl_sm_size_of_cb_queue&quot; (current value: &quot;128&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl_sm_cb_lazy_free_freq&quot; (current value: &quot;120&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_sm_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_if_include&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_if_exclude&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;lo&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl_tcp_free_list_num&quot; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl_tcp_free_list_max&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl_tcp_free_list_inc&quot; (current value: &quot;32&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_sndbuf&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;131072&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_rcvbuf&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;131072&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl_tcp_endpoint_cache&quot; (current value: &quot;30720&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_exclusivity&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_eager_limit&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;65536&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl_tcp_min_send_size&quot; (current value: &quot;65536&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl_tcp_max_send_size&quot; (current value: &quot;131072&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl_tcp_min_rdma_size&quot; (current value: &quot;131072&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl_tcp_max_rdma_size&quot; (current value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_flags&quot; (current value:  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;122&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_base_include&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_base_exclude&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl_base_warn_component_unused&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           This parameter is used to turn on warning  
</span><br>
<span class="quotelev2">&gt;&gt; messages when certain NICs are not used
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mtl: parameter &quot;mtl&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the mtl framework (&lt;none&gt; means &quot;use all components that can be  
</span><br>
<span class="quotelev2">&gt;&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mtl: parameter &quot;mtl_base_verbose&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Verbosity level for the mtl framework (0  
</span><br>
<span class="quotelev2">&gt;&gt; = no verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA topo: parameter &quot;topo&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the topo framework (&lt;none&gt; means &quot;use all components that can be  
</span><br>
<span class="quotelev2">&gt;&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA topo: parameter &quot;topo_base_verbose&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Verbosity level for the topo framework (0  
</span><br>
<span class="quotelev2">&gt;&gt; = no verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA osc: parameter &quot;osc&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the osc framework (&lt;none&gt; means &quot;use all components that can be  
</span><br>
<span class="quotelev2">&gt;&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA osc: parameter &quot;osc_base_verbose&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Verbosity level for the osc framework (0  
</span><br>
<span class="quotelev2">&gt;&gt; = no verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA osc: parameter &quot;osc_pt2pt_no_locks&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Enable optimizations available only if  
</span><br>
<span class="quotelev2">&gt;&gt; MPI_LOCK is not used.
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA osc: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;osc_pt2pt_eager_limit&quot; (current value: &quot;16384&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Max size of eagerly sent data
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA osc: parameter &quot;osc_pt2pt_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA errmgr: parameter &quot;errmgr&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the errmgr framework (&lt;none&gt; means &quot;use all components that can be  
</span><br>
<span class="quotelev2">&gt;&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA errmgr: parameter &quot;errmgr_hnp_debug&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA errmgr: parameter &quot;errmgr_hnp_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA errmgr: parameter &quot;errmgr_orted_debug&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA errmgr: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;errmgr_orted_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA errmgr: parameter &quot;errmgr_proxy_debug&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA errmgr: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;errmgr_proxy_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA gpr: parameter &quot;gpr_base_maxsize&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA gpr: parameter &quot;gpr_base_blocksize&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;512&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA gpr: parameter &quot;gpr&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the gpr framework (&lt;none&gt; means &quot;use all components that can be  
</span><br>
<span class="quotelev2">&gt;&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA gpr: parameter &quot;gpr_null_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA gpr: parameter &quot;gpr_proxy_debug&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA gpr: parameter &quot;gpr_proxy_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA gpr: parameter &quot;gpr_replica_debug&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA gpr: parameter &quot;gpr_replica_isolate&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA gpr: parameter &quot;gpr_replica_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA iof: parameter &quot;iof_base_window_size&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;4096&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA iof: parameter &quot;iof_base_service&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0.0.0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA iof: parameter &quot;iof&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the iof framework (&lt;none&gt; means &quot;use all components that can be  
</span><br>
<span class="quotelev2">&gt;&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA iof: parameter &quot;iof_proxy_debug&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA iof: parameter &quot;iof_proxy_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA iof: parameter &quot;iof_svc_debug&quot; (current value:  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA iof: parameter &quot;iof_svc_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ns: parameter &quot;ns&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the ns framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ns: parameter &quot;ns_proxy_debug&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ns: parameter &quot;ns_proxy_maxsize&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ns: parameter &quot;ns_proxy_blocksize&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;512&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ns: parameter &quot;ns_proxy_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ns: parameter &quot;ns_replica_debug&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ns: parameter &quot;ns_replica_isolate&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ns: parameter &quot;ns_replica_maxsize&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ns: parameter &quot;ns_replica_blocksize&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;512&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ns: parameter &quot;ns_replica_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA oob: parameter &quot;oob&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the oob framework (&lt;none&gt; means &quot;use all components that can be  
</span><br>
<span class="quotelev2">&gt;&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA oob: parameter &quot;oob_base_verbose&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Verbosity level for the oob framework (0  
</span><br>
<span class="quotelev2">&gt;&gt; = no verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA oob: parameter &quot;oob_tcp_peer_limit&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA oob: parameter &quot;oob_tcp_peer_retries&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;60&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA oob: parameter &quot;oob_tcp_debug&quot; (current value:  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA oob: parameter &quot;oob_tcp_sndbuf&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;131072&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA oob: parameter &quot;oob_tcp_rcvbuf&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;131072&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA oob: parameter &quot;oob_tcp_if_include&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Comma-delimited list of TCP interfaces to  
</span><br>
<span class="quotelev2">&gt;&gt; use
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA oob: parameter &quot;oob_tcp_if_exclude&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Comma-delimited list of TCP interfaces to  
</span><br>
<span class="quotelev2">&gt;&gt; exclude
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA oob: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;oob_tcp_connect_sleep&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Enable (1) / disable (0) random sleep for  
</span><br>
<span class="quotelev2">&gt;&gt; connection wireup
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA oob: parameter &quot;oob_tcp_listen_mode&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;event&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Mode for HNP to accept incoming  
</span><br>
<span class="quotelev2">&gt;&gt; connections: event, listen_thread
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA oob: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;oob_tcp_listen_thread_max_queue&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           High water mark for queued accepted  
</span><br>
<span class="quotelev2">&gt;&gt; socket list size
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA oob: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;oob_tcp_listen_thread_max_time&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Maximum amount of time (in milliseconds)  
</span><br>
<span class="quotelev2">&gt;&gt; to wait between processing accepted socket list
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA oob: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;oob_tcp_accept_spin_count&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Number of times to let accept return  
</span><br>
<span class="quotelev2">&gt;&gt; EWOULDBLOCK before updating accepted socket list
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA oob: parameter &quot;oob_tcp_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: parameter &quot;ras&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;ras_dash_host_priority&quot; (current value: &quot;5&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Selection priority for the dash_host RAS  
</span><br>
<span class="quotelev2">&gt;&gt; component
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: parameter &quot;ras_gridengine_debug&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Enable debugging output for the  
</span><br>
<span class="quotelev2">&gt;&gt; gridengine ras component
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;ras_gridengine_priority&quot; (current value: &quot;100&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Priority of the gridengine ras component
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;ras_gridengine_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Enable verbose output for the gridengine  
</span><br>
<span class="quotelev2">&gt;&gt; ras component
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;ras_gridengine_show_jobid&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Show the JOB_ID of the Grid Engine job
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;ras_localhost_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Selection priority for the localhost RAS  
</span><br>
<span class="quotelev2">&gt;&gt; component
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: parameter &quot;ras_slurm_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;75&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Priority of the slurm ras component
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rds: parameter &quot;rds&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rds: parameter &quot;rds_hostfile_debug&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Toggle debug output for hostfile RDS  
</span><br>
<span class="quotelev2">&gt;&gt; component
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rds: parameter &quot;rds_hostfile_path&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;/path/to/openmpi/etc/openmpi-default-hostfile&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           ORTE Host filename
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rds: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;rds_hostfile_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rds: parameter &quot;rds_proxy_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rds: parameter &quot;rds_resfile_debug&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Toggle debug output for resfile RDS  
</span><br>
<span class="quotelev2">&gt;&gt; component
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rds: parameter &quot;rds_resfile_name&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           ORTE Resource filename
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rds: parameter &quot;rds_resfile_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmaps: parameter &quot;rmaps_base_verbose&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Verbosity level for the rmaps framework
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmaps: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;rmaps_base_schedule_policy&quot; (current value: &quot;unspec&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Scheduling Policy for RMAPS. [slot | node]
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmaps: parameter &quot;rmaps_base_pernode&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Launch one ppn as directed
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmaps: parameter &quot;rmaps_base_n_pernode&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Launch n procs/node
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmaps: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;rmaps_base_no_schedule_local&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           If false, allow scheduling MPI  
</span><br>
<span class="quotelev2">&gt;&gt; applications on the same node as mpirun (default).  If true, do not  
</span><br>
<span class="quotelev2">&gt;&gt; schedule any MPI applications on the same node as mpirun
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmaps: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;rmaps_base_no_oversubscribe&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           If true, then do not allow  
</span><br>
<span class="quotelev2">&gt;&gt; oversubscription of nodes - mpirun will return an error if there  
</span><br>
<span class="quotelev2">&gt;&gt; aren't enough nodes to launch all processes without oversubscribing
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmaps: parameter &quot;rmaps&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the rmaps framework (&lt;none&gt; means &quot;use all components that can be  
</span><br>
<span class="quotelev2">&gt;&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmaps: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;rmaps_round_robin_debug&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Toggle debug output for Round Robin RMAPS  
</span><br>
<span class="quotelev2">&gt;&gt; component
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmaps: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;rmaps_round_robin_priority&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Selection priority for Round Robin RMAPS  
</span><br>
<span class="quotelev2">&gt;&gt; component
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rmgr: parameter &quot;rmgr&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the rmgr framework (&lt;none&gt; means &quot;use all components that can be  
</span><br>
<span class="quotelev2">&gt;&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rmgr: parameter &quot;rmgr_proxy_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rmgr: parameter &quot;rmgr_urm_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rml: parameter &quot;rml&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the rml framework (&lt;none&gt; means &quot;use all components that can be  
</span><br>
<span class="quotelev2">&gt;&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rml: parameter &quot;rml_base_verbose&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Verbosity level for the rml framework (0  
</span><br>
<span class="quotelev2">&gt;&gt; = no verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rml: parameter &quot;rml_oob_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;pls_base_reuse_daemons&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           If nonzero, reuse daemons to launch  
</span><br>
<span class="quotelev2">&gt;&gt; dynamically spawned processes.  If zero, do not reuse daemons  
</span><br>
<span class="quotelev2">&gt;&gt; (default)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: parameter &quot;pls&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the pls framework (&lt;none&gt; means &quot;use all components that can be  
</span><br>
<span class="quotelev2">&gt;&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: parameter &quot;pls_base_verbose&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Verbosity level for the pls framework (0  
</span><br>
<span class="quotelev2">&gt;&gt; = no verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: parameter &quot;pls_gridengine_debug&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Enable debugging of gridengine pls component
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;pls_gridengine_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Enable verbose output of the gridengine  
</span><br>
<span class="quotelev2">&gt;&gt; qrsh -inherit command
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;pls_gridengine_priority&quot; (current value: &quot;100&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Priority of the gridengine pls component
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: parameter &quot;pls_gridengine_orted&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;orted&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           The command name that the gridengine pls  
</span><br>
<span class="quotelev2">&gt;&gt; component will invoke for the ORTE daemon
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: parameter &quot;pls_proxy_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: parameter &quot;pls_rsh_debug&quot; (current value:  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Whether or not to enable debugging output  
</span><br>
<span class="quotelev2">&gt;&gt; for the rsh pls component (0 or 1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;pls_rsh_num_concurrent&quot; (current value: &quot;128&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           How many pls_rsh_agent instances to  
</span><br>
<span class="quotelev2">&gt;&gt; invoke concurrently (must be &gt; 0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: parameter &quot;pls_rsh_force_rsh&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Force the launcher to always use rsh,  
</span><br>
<span class="quotelev2">&gt;&gt; even for local daemons
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: parameter &quot;pls_rsh_orted&quot; (current value:  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;orted&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           The command name that the rsh pls  
</span><br>
<span class="quotelev2">&gt;&gt; component will invoke for the ORTE daemon
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: parameter &quot;pls_rsh_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;10&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Priority of the rsh pls component
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: parameter &quot;pls_rsh_delay&quot; (current value:  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Delay (in seconds) between invocations of  
</span><br>
<span class="quotelev2">&gt;&gt; the remote agent, but only used when the &quot;debug&quot; MCA parameter is  
</span><br>
<span class="quotelev2">&gt;&gt; true, or the top-level MCA debugging is enabled (otherwise this  
</span><br>
<span class="quotelev2">&gt;&gt; value is ignored)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: parameter &quot;pls_rsh_reap&quot; (current value:  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           If set to 1, wait for all the processes  
</span><br>
<span class="quotelev2">&gt;&gt; to complete before exiting.  Otherwise, quit immediately -- without  
</span><br>
<span class="quotelev2">&gt;&gt; waiting for confirmation that all other processes in the job have  
</span><br>
<span class="quotelev2">&gt;&gt; completed.
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;pls_rsh_assume_same_shell&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           If set to 1, assume that the shell on the  
</span><br>
<span class="quotelev2">&gt;&gt; remote node is the same as the shell on the local node.  Otherwise,  
</span><br>
<span class="quotelev2">&gt;&gt; probe for what the remote shell.
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: parameter &quot;pls_rsh_agent&quot; (current value:  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;ssh : rsh&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           The command used to launch executables on  
</span><br>
<span class="quotelev2">&gt;&gt; remote nodes (typically either &quot;ssh&quot; or &quot;rsh&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: parameter &quot;pls_slurm_debug&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Enable debugging of slurm pls
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: parameter &quot;pls_slurm_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;75&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection priority
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: parameter &quot;pls_slurm_orted&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;orted&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Command to use to start proxy orted
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: parameter &quot;pls_slurm_args&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Custom arguments to srun
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: parameter &quot;sds&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev2">&gt;&gt; the sds framework (&lt;none&gt; means &quot;use all components that can be  
</span><br>
<span class="quotelev2">&gt;&gt; found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: parameter &quot;sds_base_verbose&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Verbosity level for the sds framework (0  
</span><br>
<span class="quotelev2">&gt;&gt; = no verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: parameter &quot;sds_env_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: parameter &quot;sds_pipe_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: parameter &quot;sds_seed_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: parameter  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;sds_singleton_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: parameter &quot;sds_slurm_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4029.php">Andrus, Mr. Brian (Contractor): "[OMPI users] mpi_file_set_view"</a>
<li><strong>Previous message:</strong> <a href="4027.php">Brian Barrett: "Re: [OMPI users] another mpirun + xgrid question"</a>
<li><strong>In reply to:</strong> <a href="4024.php">Jeff Squyres: "Re: [OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4039.php">Jeff Squyres: "Re: [OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv"</a>
<li><strong>Reply:</strong> <a href="4039.php">Jeff Squyres: "Re: [OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv"</a>
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
