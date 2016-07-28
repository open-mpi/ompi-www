<?
$subject_val = "Re: [OMPI users] program stalls in __write_nocancel()";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  6 08:53:57 2008" -->
<!-- isoreceived="20081106135357" -->
<!-- sent="Thu, 6 Nov 2008 06:53:50 -0700" -->
<!-- isosent="20081106135350" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] program stalls in __write_nocancel()" -->
<!-- id="3BB8AB5C-45B3-41FD-A8B6-47D5EA950324_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="45477979-388A-48ED-B9C6-C4F7CC328F24_at_fsu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] program stalls in __write_nocancel()<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-06 08:53:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7220.php">Jeff Squyres: "Re: [OMPI users] Compiling on different servers"</a>
<li><strong>Previous message:</strong> <a href="7218.php">Raymond Wan: "[OMPI users] Open MPI programs with autoconf/automake?"</a>
<li><strong>In reply to:</strong> <a href="7216.php">Peter Beerli: "[OMPI users] program stalls in __write_nocancel()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Peter
<br>
<p>Given how long it takes to hit the problem, have you checked your file  
<br>
and disk quotas? Could be that the file is simply getting too big.
<br>
<p>I'm also a tad curious how you got valgrind to work on OSX - I was  
<br>
unaware it supported that environment?
<br>
<p>If all that looks okay, then the next thing would be to put some kind  
<br>
of check in handle_message to see what message you are actually  
<br>
attempting to output when it hangs. See if there is something that  
<br>
would cause fputs to have a heart attack - perhaps you have a message  
<br>
counter that rolls over (e.g., a 16-bit counter that rolls after you  
<br>
get too many messages).
<br>
<p>Ralph
<br>
<p><p>On Nov 5, 2008, at 8:12 PM, Peter Beerli wrote:
<br>
<p><span class="quotelev1">&gt; On some of my larger problems ,
</span><br>
<span class="quotelev1">&gt; my program stalls and does not continue
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (50 or more nodes, 'long' runs &gt;5 hours). My program is set up as a  
</span><br>
<span class="quotelev1">&gt; master-worker
</span><br>
<span class="quotelev1">&gt; and it seems that the master gets stuck in a write to stdout see gdb  
</span><br>
<span class="quotelev1">&gt; backtrace below (It took all day
</span><br>
<span class="quotelev1">&gt; to get there on 50 nodes). the function handle_message is simply  
</span><br>
<span class="quotelev1">&gt; printing to the stdout in this case.
</span><br>
<span class="quotelev1">&gt; Of course the workers keep sending stuff to the master, but the  
</span><br>
<span class="quotelev1">&gt; master is stuck
</span><br>
<span class="quotelev1">&gt; writing that does not finish. Any idea where to look next?
</span><br>
<span class="quotelev1">&gt; [smaller runs look fine, valgrind did not find problems in my code  
</span><br>
<span class="quotelev1">&gt; (complaining a lot about openmpi so)
</span><br>
<span class="quotelev1">&gt; I attach also the ompi_info to show versions (OS is macos 10.5.5)
</span><br>
<span class="quotelev1">&gt; any idea what is going on? [any hint is welcome!]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; Peter
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00000037528c0e50 in __write_nocancel () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00000037528694b3 in _IO_new_file_write () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #2  0x00000037528693c6 in _IO_new_do_write () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #3  0x000000375286a822 in _IO_new_file_xsputn () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #4  0x000000375285f4f8 in fputs () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #5  0x000000000045e9de in handle_message (
</span><br>
<span class="quotelev1">&gt;   rawmessage=0x4bb8830 &quot;M0:[ 12] Swapping between 4 temperatures. 
</span><br>
<span class="quotelev1">&gt; \n&quot;, ' ' &lt;repeats 11 times&gt;, &quot;Temperature | Accepted |  Swaps  
</span><br>
<span class="quotelev1">&gt; between temperatures\n&quot;, ' ' &lt;repeats 16 times&gt;, &quot;1e+06  |   0.00    
</span><br>
<span class="quotelev1">&gt; |          |\n&quot;, ' ' &lt;repeats 15 times&gt;, &quot;3.0000  |   0.08    
</span><br>
<span class="quotelev1">&gt; |        1 ||&quot;..., sender=12, world=0x448d8b0)
</span><br>
<span class="quotelev1">&gt;   at migrate_mpi.c:3663
</span><br>
<span class="quotelev1">&gt; #6  0x000000000045362a in mpi_runloci_master (loci=1, who=0x4541fc0,
</span><br>
<span class="quotelev1">&gt;   world=0x448d8b0, options_readsum=0, menu=0) at migrate_mpi.c:228
</span><br>
<span class="quotelev1">&gt; #7  0x000000000044ed86 in run_sampler (options=0x448dc20,  
</span><br>
<span class="quotelev1">&gt; data=0x4465a10,
</span><br>
<span class="quotelev1">&gt;   universe=0x42b90c0, usize=4, outfilepos=0x7fff0ff98ee0,
</span><br>
<span class="quotelev1">&gt;   Gmax=0x7fff0ff98ee8) at main.c:885
</span><br>
<span class="quotelev1">&gt; #8  0x000000000044dff2 in main (argc=3, argv=0x7fff0ff99008) at  
</span><br>
<span class="quotelev1">&gt; main.c:422
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; petal:~&gt;ompi_info
</span><br>
<span class="quotelev1">&gt;               Open MPI: 1.2.8
</span><br>
<span class="quotelev1">&gt;  Open MPI SVN revision: r19718
</span><br>
<span class="quotelev1">&gt;               Open RTE: 1.2.8
</span><br>
<span class="quotelev1">&gt;  Open RTE SVN revision: r19718
</span><br>
<span class="quotelev1">&gt;                   OPAL: 1.2.8
</span><br>
<span class="quotelev1">&gt;      OPAL SVN revision: r19718
</span><br>
<span class="quotelev1">&gt;                 Prefix: /home/beerli/openmpi
</span><br>
<span class="quotelev1">&gt; Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;          Configured by: beerli
</span><br>
<span class="quotelev1">&gt;          Configured on: Mon Nov  3 15:00:02 EST 2008
</span><br>
<span class="quotelev1">&gt;         Configure host: petal
</span><br>
<span class="quotelev1">&gt;               Built by: beerli
</span><br>
<span class="quotelev1">&gt;               Built on: Mon Nov  3 15:08:02 EST 2008
</span><br>
<span class="quotelev1">&gt;             Built host: petal
</span><br>
<span class="quotelev1">&gt;             C bindings: yes
</span><br>
<span class="quotelev1">&gt;           C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;     Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;     Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt; Fortran90 bindings size: small
</span><br>
<span class="quotelev1">&gt;             C compiler: gcc
</span><br>
<span class="quotelev1">&gt;    C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;           C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;  C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;     Fortran77 compiler: gfortran
</span><br>
<span class="quotelev1">&gt; Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;     Fortran90 compiler: gfortran
</span><br>
<span class="quotelev1">&gt; Fortran90 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;            C profiling: yes
</span><br>
<span class="quotelev1">&gt;          C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;    Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;    Fortran90 profiling: yes
</span><br>
<span class="quotelev1">&gt;         C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;         Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev1">&gt; Internal debug support: no
</span><br>
<span class="quotelev1">&gt;    MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;        libltdl support: yes
</span><br>
<span class="quotelev1">&gt;  Heterogeneous support: yes
</span><br>
<span class="quotelev1">&gt; mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt;          MCA backtrace: execinfo (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.8)
</span><br>
<span class="quotelev1">&gt;             MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.8)
</span><br>
<span class="quotelev1">&gt;          MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;          MCA maffinity: first_use (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.8)
</span><br>
<span class="quotelev1">&gt;              MCA timer: linux (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;        MCA installdirs: env (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;        MCA installdirs: config (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;          MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;          MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;               MCA coll: basic (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;               MCA coll: self (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;               MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;               MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                 MCA io: romio (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;              MCA mpool: rdma (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;              MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;             MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                MCA btl: self (MCA v1.0, API v1.0.1, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
</span><br>
<span class="quotelev1">&gt;               MCA topo: unity (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;             MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;             MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;             MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                MCA gpr: null (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                MCA gpr: replica (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                 MCA ns: proxy (MCA v1.0, API v2.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                 MCA ns: replica (MCA v1.0, API v2.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                MCA ras: dash_host (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.8)
</span><br>
<span class="quotelev1">&gt;                MCA ras: gridengine (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.8)
</span><br>
<span class="quotelev1">&gt;                MCA ras: localhost (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.8)
</span><br>
<span class="quotelev1">&gt;                MCA ras: slurm (MCA v1.0, API v1.3, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                MCA rds: hostfile (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.8)
</span><br>
<span class="quotelev1">&gt;                MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                MCA rds: resfile (MCA v1.0, API v1.3, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;              MCA rmaps: round_robin (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.8)
</span><br>
<span class="quotelev1">&gt;               MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;               MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                MCA pls: gridengine (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.8)
</span><br>
<span class="quotelev1">&gt;                MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                MCA pls: slurm (MCA v1.0, API v1.3, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                MCA sds: env (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                MCA sds: seed (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                MCA sds: singleton (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.8)
</span><br>
<span class="quotelev1">&gt;                MCA sds: slurm (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7220.php">Jeff Squyres: "Re: [OMPI users] Compiling on different servers"</a>
<li><strong>Previous message:</strong> <a href="7218.php">Raymond Wan: "[OMPI users] Open MPI programs with autoconf/automake?"</a>
<li><strong>In reply to:</strong> <a href="7216.php">Peter Beerli: "[OMPI users] program stalls in __write_nocancel()"</a>
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
