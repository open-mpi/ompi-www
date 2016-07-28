<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 20 16:44:26 2006" -->
<!-- isoreceived="20061020204426" -->
<!-- sent="Fri, 20 Oct 2006 16:44:18 -0400" -->
<!-- isosent="20061020204418" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with PGI 6.1 and OpenMPI-1.1.1" -->
<!-- id="5720C848-D61E-4FCB-AB36-564CDCFE4181_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4537D2A2.3020703_at_charter.net" -->
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
<strong>Date:</strong> 2006-10-20 16:44:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2024.php">Jeffrey B. Layton: "Re: [OMPI users] Problem with PGI 6.1 and OpenMPI-1.1.1"</a>
<li><strong>Previous message:</strong> <a href="2022.php">Jeff Squyres: "Re: [OMPI users] OMPI launching problem using TM and openib on 1920 nodes"</a>
<li><strong>In reply to:</strong> <a href="2015.php">Jeffrey B. Layton: "Re: [OMPI users] Problem with PGI 6.1 and OpenMPI-1.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2024.php">Jeffrey B. Layton: "Re: [OMPI users] Problem with PGI 6.1 and OpenMPI-1.1.1"</a>
<li><strong>Reply:</strong> <a href="2024.php">Jeffrey B. Layton: "Re: [OMPI users] Problem with PGI 6.1 and OpenMPI-1.1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Two questions:
<br>
<p>1. Have you tried the just-released 1.1.2?
<br>
2. Are you closing stdin/out/err?
<br>
<p><p>On Oct 19, 2006, at 3:31 PM, Jeffrey B. Layton wrote:
<br>
<p><span class="quotelev1">&gt; A small update. I was looking through the error file a bit more
</span><br>
<span class="quotelev1">&gt; (it was 159MB). I found the following error message sequence:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; o1:22805] mca_oob_tcp_accept: accept() failed with errno 9.
</span><br>
<span class="quotelev1">&gt; [o4:11242] [0,1,4]-[0,0,0] mca_oob_tcp_peer_recv_blocking: recv()  
</span><br>
<span class="quotelev1">&gt; failed
</span><br>
<span class="quotelev1">&gt; with errno=104
</span><br>
<span class="quotelev1">&gt; [o1:22805] mca_oob_tcp_accept: accept() failed with errno 9.
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; [o1:22805] mca_oob_tcp_accept: accept() failed with errno 9.
</span><br>
<span class="quotelev1">&gt; [o3:32205] [0,1,2]-[0,0,0] mca_oob_tcp_peer_complete_connect:  
</span><br>
<span class="quotelev1">&gt; connection
</span><br>
<span class="quotelev1">&gt; failed (errno=111) - retrying (pid=32205)
</span><br>
<span class="quotelev1">&gt; [o1:22805] mca_oob_tcp_accept: accept() failed with errno 9.
</span><br>
<span class="quotelev1">&gt; [o3:32206] [0,1,3]-[0,0,0] mca_oob_tcp_peer_complete_connect:  
</span><br>
<span class="quotelev1">&gt; connection
</span><br>
<span class="quotelev1">&gt; failed (errno=111) - retrying (pid=32206)
</span><br>
<span class="quotelev1">&gt; [o1:22805] mca_oob_tcp_accept: accept() failed with errno 9.
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know if this changes things (my google attempts didn't
</span><br>
<span class="quotelev1">&gt; really give me much information).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Good afternoon,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    I really hate to post asking for help with a problem, but
</span><br>
<span class="quotelev2">&gt;&gt; my own efforts have not worked out well (probably operator
</span><br>
<span class="quotelev2">&gt;&gt; error).
</span><br>
<span class="quotelev2">&gt;&gt;    Anyway, I'm trying to run a code that was built with PGI 6.1
</span><br>
<span class="quotelev2">&gt;&gt; and OpenMPI-1.1.1. The mpirun command looks like:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --hostfile machines.${PBS_JOBID} --np ${NP} -mca btl  
</span><br>
<span class="quotelev2">&gt;&gt; self,sm,tcp
</span><br>
<span class="quotelev2">&gt;&gt; ./${EXE} ${CASEPROJ} &gt;&gt; OUTPUT
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I get the following error in the PBS error file:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [o1:22559] mca_oob_tcp_accept: accept() failed with errno 9.
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and keeps repeating (for a long time).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info gives the following output:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_info
</span><br>
<span class="quotelev2">&gt;&gt;                 Open MPI: 1.1.1
</span><br>
<span class="quotelev2">&gt;&gt;    Open MPI SVN revision: r11473
</span><br>
<span class="quotelev2">&gt;&gt;                 Open RTE: 1.1.1
</span><br>
<span class="quotelev2">&gt;&gt;    Open RTE SVN revision: r11473
</span><br>
<span class="quotelev2">&gt;&gt;                     OPAL: 1.1.1
</span><br>
<span class="quotelev2">&gt;&gt;        OPAL SVN revision: r11473
</span><br>
<span class="quotelev2">&gt;&gt;                   Prefix: /usr/x86_64-pgi-6.1/openmpi-1.1.1
</span><br>
<span class="quotelev2">&gt;&gt;  Configured architecture: x86_64-suse-linux-gnu
</span><br>
<span class="quotelev2">&gt;&gt;            Configured by: root
</span><br>
<span class="quotelev2">&gt;&gt;            Configured on: Mon Oct 16 20:51:34 MDT 2006
</span><br>
<span class="quotelev2">&gt;&gt;           Configure host: lo248
</span><br>
<span class="quotelev2">&gt;&gt;                 Built by: root
</span><br>
<span class="quotelev2">&gt;&gt;                 Built on: Mon Oct 16 21:02:00 MDT 2006
</span><br>
<span class="quotelev2">&gt;&gt;               Built host: lo248
</span><br>
<span class="quotelev2">&gt;&gt;               C bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;             C++ bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;  Fortran90 bindings size: small
</span><br>
<span class="quotelev2">&gt;&gt;               C compiler: pgcc
</span><br>
<span class="quotelev2">&gt;&gt;      C compiler absolute: /opt/pgi/linux86-64/6.1/bin/pgcc
</span><br>
<span class="quotelev2">&gt;&gt;             C++ compiler: pgCC
</span><br>
<span class="quotelev2">&gt;&gt;    C++ compiler absolute: /opt/pgi/linux86-64/6.1/bin/pgCC
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran77 compiler: pgf77
</span><br>
<span class="quotelev2">&gt;&gt;   Fortran77 compiler abs: /opt/pgi/linux86-64/6.1/bin/pgf77
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran90 compiler: pgf90
</span><br>
<span class="quotelev2">&gt;&gt;   Fortran90 compiler abs: /opt/pgi/linux86-64/6.1/bin/pgf90
</span><br>
<span class="quotelev2">&gt;&gt;              C profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;            C++ profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;           C++ exceptions: yes
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
<span class="quotelev2">&gt;&gt;          libltdl support: yes
</span><br>
<span class="quotelev2">&gt;&gt;               MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA paffinity: linux (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA maffinity: libnuma (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA timer: linux (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: basic (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: hierarch (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: self (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: tuned (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA io: romio (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA mpool: gm (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA rcache: rb (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: gm (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: self (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: sm (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA topo: unity (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA gpr: null (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA gpr: proxy (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA gpr: replica (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA iof: proxy (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ns: proxy (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ns: replica (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: dash_host (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: hostfile (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: localhost (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rds: hostfile (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rds: resfile (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmaps: round_robin (MCA v1.0, API v1.0,  
</span><br>
<span class="quotelev2">&gt;&gt; Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rmgr: proxy (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rmgr: urm (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: fork (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: rsh (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: env (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: singleton (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt; v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I found this link via google:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2006/06/1486.php">http://www.open-mpi.org/community/lists/users/2006/06/1486.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But to be honest I'm not sure how to apply this to fix my problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2024.php">Jeffrey B. Layton: "Re: [OMPI users] Problem with PGI 6.1 and OpenMPI-1.1.1"</a>
<li><strong>Previous message:</strong> <a href="2022.php">Jeff Squyres: "Re: [OMPI users] OMPI launching problem using TM and openib on 1920 nodes"</a>
<li><strong>In reply to:</strong> <a href="2015.php">Jeffrey B. Layton: "Re: [OMPI users] Problem with PGI 6.1 and OpenMPI-1.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2024.php">Jeffrey B. Layton: "Re: [OMPI users] Problem with PGI 6.1 and OpenMPI-1.1.1"</a>
<li><strong>Reply:</strong> <a href="2024.php">Jeffrey B. Layton: "Re: [OMPI users] Problem with PGI 6.1 and OpenMPI-1.1.1"</a>
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
