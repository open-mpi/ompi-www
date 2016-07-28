<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 19 15:30:06 2006" -->
<!-- isoreceived="20061019193006" -->
<!-- sent="Thu, 19 Oct 2006 15:31:46 -0400" -->
<!-- isosent="20061019193146" -->
<!-- name="Jeffrey B. Layton" -->
<!-- email="laytonjb_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with PGI 6.1 and OpenMPI-1.1.1" -->
<!-- id="4537D2A2.3020703_at_charter.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4537CCC2.4020104_at_charter.net" -->
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
<strong>From:</strong> Jeffrey B. Layton (<em>laytonjb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-19 15:31:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2016.php">Tim Prins: "Re: [OMPI users] configure script not hapy with OpenPBS"</a>
<li><strong>Previous message:</strong> <a href="2014.php">Jeffrey B. Layton: "[OMPI users] Problem with PGI 6.1 and OpenMPI-1.1.1"</a>
<li><strong>In reply to:</strong> <a href="2014.php">Jeffrey B. Layton: "[OMPI users] Problem with PGI 6.1 and OpenMPI-1.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2023.php">Jeff Squyres: "Re: [OMPI users] Problem with PGI 6.1 and OpenMPI-1.1.1"</a>
<li><strong>Reply:</strong> <a href="2023.php">Jeff Squyres: "Re: [OMPI users] Problem with PGI 6.1 and OpenMPI-1.1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A small update. I was looking through the error file a bit more
<br>
(it was 159MB). I found the following error message sequence:
<br>
<p>o1:22805] mca_oob_tcp_accept: accept() failed with errno 9.
<br>
[o4:11242] [0,1,4]-[0,0,0] mca_oob_tcp_peer_recv_blocking: recv() failed 
<br>
with errno=104
<br>
[o1:22805] mca_oob_tcp_accept: accept() failed with errno 9.
<br>
...
<br>
[o1:22805] mca_oob_tcp_accept: accept() failed with errno 9.
<br>
[o3:32205] [0,1,2]-[0,0,0] mca_oob_tcp_peer_complete_connect: connection 
<br>
failed (errno=111) - retrying (pid=32205)
<br>
[o1:22805] mca_oob_tcp_accept: accept() failed with errno 9.
<br>
[o3:32206] [0,1,3]-[0,0,0] mca_oob_tcp_peer_complete_connect: connection 
<br>
failed (errno=111) - retrying (pid=32206)
<br>
[o1:22805] mca_oob_tcp_accept: accept() failed with errno 9.
<br>
...
<br>
<p>I don't know if this changes things (my google attempts didn't
<br>
really give me much information).
<br>
<p>Jeff
<br>
<p><p><span class="quotelev1">&gt; Good afternoon,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    I really hate to post asking for help with a problem, but
</span><br>
<span class="quotelev1">&gt; my own efforts have not worked out well (probably operator
</span><br>
<span class="quotelev1">&gt; error).
</span><br>
<span class="quotelev1">&gt;    Anyway, I'm trying to run a code that was built with PGI 6.1
</span><br>
<span class="quotelev1">&gt; and OpenMPI-1.1.1. The mpirun command looks like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --hostfile machines.${PBS_JOBID} --np ${NP} -mca btl self,sm,tcp 
</span><br>
<span class="quotelev1">&gt; ./${EXE} ${CASEPROJ} &gt;&gt; OUTPUT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get the following error in the PBS error file:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [o1:22559] mca_oob_tcp_accept: accept() failed with errno 9.
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and keeps repeating (for a long time).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_info gives the following output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;  &gt; ompi_info
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.1.1
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r11473
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.1.1
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r11473
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.1.1
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r11473
</span><br>
<span class="quotelev1">&gt;                   Prefix: /usr/x86_64-pgi-6.1/openmpi-1.1.1
</span><br>
<span class="quotelev1">&gt;  Configured architecture: x86_64-suse-linux-gnu
</span><br>
<span class="quotelev1">&gt;            Configured by: root
</span><br>
<span class="quotelev1">&gt;            Configured on: Mon Oct 16 20:51:34 MDT 2006
</span><br>
<span class="quotelev1">&gt;           Configure host: lo248
</span><br>
<span class="quotelev1">&gt;                 Built by: root
</span><br>
<span class="quotelev1">&gt;                 Built on: Mon Oct 16 21:02:00 MDT 2006
</span><br>
<span class="quotelev1">&gt;               Built host: lo248
</span><br>
<span class="quotelev1">&gt;               C bindings: yes
</span><br>
<span class="quotelev1">&gt;             C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt;  Fortran90 bindings size: small
</span><br>
<span class="quotelev1">&gt;               C compiler: pgcc
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /opt/pgi/linux86-64/6.1/bin/pgcc
</span><br>
<span class="quotelev1">&gt;             C++ compiler: pgCC
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /opt/pgi/linux86-64/6.1/bin/pgCC
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: pgf77
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: /opt/pgi/linux86-64/6.1/bin/pgf77
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: pgf90
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: /opt/pgi/linux86-64/6.1/bin/pgf90
</span><br>
<span class="quotelev1">&gt;              C profiling: yes
</span><br>
<span class="quotelev1">&gt;            C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev1">&gt;           C++ exceptions: yes
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
<span class="quotelev1">&gt;          libltdl support: yes
</span><br>
<span class="quotelev1">&gt;               MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: libnuma (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                MCA timer: linux (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: basic (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: hierarch (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: self (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: tuned (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                   MCA io: romio (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: gm (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: rb (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: gm (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: self (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: sm (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: unity (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: null (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: replica (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: proxy (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: proxy (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: replica (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: dash_host (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: hostfile (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: localhost (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: hostfile (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: resfile (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: round_robin (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: proxy (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: urm (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: fork (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: rsh (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: env (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: singleton (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I found this link via google:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2006/06/1486.php">http://www.open-mpi.org/community/lists/users/2006/06/1486.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But to be honest I'm not sure how to apply this to fix my problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2016.php">Tim Prins: "Re: [OMPI users] configure script not hapy with OpenPBS"</a>
<li><strong>Previous message:</strong> <a href="2014.php">Jeffrey B. Layton: "[OMPI users] Problem with PGI 6.1 and OpenMPI-1.1.1"</a>
<li><strong>In reply to:</strong> <a href="2014.php">Jeffrey B. Layton: "[OMPI users] Problem with PGI 6.1 and OpenMPI-1.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2023.php">Jeff Squyres: "Re: [OMPI users] Problem with PGI 6.1 and OpenMPI-1.1.1"</a>
<li><strong>Reply:</strong> <a href="2023.php">Jeff Squyres: "Re: [OMPI users] Problem with PGI 6.1 and OpenMPI-1.1.1"</a>
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
