<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 19 15:04:55 2006" -->
<!-- isoreceived="20061019190455" -->
<!-- sent="Thu, 19 Oct 2006 15:06:42 -0400" -->
<!-- isosent="20061019190642" -->
<!-- name="Jeffrey B. Layton" -->
<!-- email="laytonjb_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with PGI 6.1 and OpenMPI-1.1.1" -->
<!-- id="4537CCC2.4020104_at_charter.net" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Date:</strong> 2006-10-19 15:06:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2015.php">Jeffrey B. Layton: "Re: [OMPI users] Problem with PGI 6.1 and OpenMPI-1.1.1"</a>
<li><strong>Previous message:</strong> <a href="2013.php">Audet, Martin: "[OMPI users] configure script not hapy with OpenPBS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2015.php">Jeffrey B. Layton: "Re: [OMPI users] Problem with PGI 6.1 and OpenMPI-1.1.1"</a>
<li><strong>Reply:</strong> <a href="2015.php">Jeffrey B. Layton: "Re: [OMPI users] Problem with PGI 6.1 and OpenMPI-1.1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good afternoon,
<br>
<p>&nbsp;&nbsp;&nbsp;I really hate to post asking for help with a problem, but
<br>
my own efforts have not worked out well (probably operator
<br>
error).
<br>
&nbsp;&nbsp;&nbsp;Anyway, I'm trying to run a code that was built with PGI 6.1
<br>
and OpenMPI-1.1.1. The mpirun command looks like:
<br>
<p>mpirun --hostfile machines.${PBS_JOBID} --np ${NP} -mca btl self,sm,tcp 
<br>
./${EXE} ${CASEPROJ} &gt;&gt; OUTPUT
<br>
<p>I get the following error in the PBS error file:
<br>
<p>[o1:22559] mca_oob_tcp_accept: accept() failed with errno 9.
<br>
...
<br>
<p>and keeps repeating (for a long time).
<br>
<p>ompi_info gives the following output:
<br>
<p><span class="quotelev1"> &gt; ompi_info
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.1.1
<br>
&nbsp;&nbsp;&nbsp;Open MPI SVN revision: r11473
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.1.1
<br>
&nbsp;&nbsp;&nbsp;Open RTE SVN revision: r11473
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.1.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: r11473
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix: /usr/x86_64-pgi-6.1/openmpi-1.1.1
<br>
&nbsp;Configured architecture: x86_64-suse-linux-gnu
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured by: root
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured on: Mon Oct 16 20:51:34 MDT 2006
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: lo248
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built by: root
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built on: Mon Oct 16 21:02:00 MDT 2006
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built host: lo248
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 bindings: yes (all)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 bindings: yes
<br>
&nbsp;Fortran90 bindings size: small
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: pgcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /opt/pgi/linux86-64/6.1/bin/pgcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler: pgCC
<br>
&nbsp;&nbsp;&nbsp;C++ compiler absolute: /opt/pgi/linux86-64/6.1/bin/pgCC
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 compiler: pgf77
<br>
&nbsp;&nbsp;Fortran77 compiler abs: /opt/pgi/linux86-64/6.1/bin/pgf77
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 compiler: pgf90
<br>
&nbsp;&nbsp;Fortran90 compiler abs: /opt/pgi/linux86-64/6.1/bin/pgf90
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ exceptions: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thread support: posix (mpi: no, progress: no)
<br>
&nbsp;&nbsp;Internal debug support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI parameter check: runtime
<br>
Memory profiling support: no
<br>
Memory debugging support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libltdl support: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component v1.1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: libnuma (MCA v1.0, API v1.0, Component v1.1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA timer: linux (MCA v1.0, API v1.0, Component v1.1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: basic (MCA v1.0, API v1.0, Component v1.1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: hierarch (MCA v1.0, API v1.0, Component v1.1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: self (MCA v1.0, API v1.0, Component v1.1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: sm (MCA v1.0, API v1.0, Component v1.1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: tuned (MCA v1.0, API v1.0, Component v1.1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA io: romio (MCA v1.0, API v1.0, Component v1.1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: gm (MCA v1.0, API v1.0, Component v1.1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: sm (MCA v1.0, API v1.0, Component v1.1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA bml: r2 (MCA v1.0, API v1.0, Component v1.1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rcache: rb (MCA v1.0, API v1.0, Component v1.1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: gm (MCA v1.0, API v1.0, Component v1.1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: self (MCA v1.0, API v1.0, Component v1.1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: sm (MCA v1.0, API v1.0, Component v1.1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA topo: unity (MCA v1.0, API v1.0, Component v1.1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA gpr: null (MCA v1.0, API v1.0, Component v1.1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA gpr: replica (MCA v1.0, API v1.0, Component v1.1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: proxy (MCA v1.0, API v1.0, Component v1.1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: svc (MCA v1.0, API v1.0, Component v1.1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ns: proxy (MCA v1.0, API v1.0, Component v1.1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ns: replica (MCA v1.0, API v1.0, Component v1.1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: dash_host (MCA v1.0, API v1.0, Component v1.1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: hostfile (MCA v1.0, API v1.0, Component v1.1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: localhost (MCA v1.0, API v1.0, Component v1.1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rds: hostfile (MCA v1.0, API v1.0, Component v1.1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rds: resfile (MCA v1.0, API v1.0, Component v1.1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: round_robin (MCA v1.0, API v1.0, Component v1.1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmgr: proxy (MCA v1.0, API v1.0, Component v1.1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmgr: urm (MCA v1.0, API v1.0, Component v1.1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rml: oob (MCA v1.0, API v1.0, Component v1.1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: fork (MCA v1.0, API v1.0, Component v1.1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: rsh (MCA v1.0, API v1.0, Component v1.1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: env (MCA v1.0, API v1.0, Component v1.1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: pipe (MCA v1.0, API v1.0, Component v1.1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: seed (MCA v1.0, API v1.0, Component v1.1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: singleton (MCA v1.0, API v1.0, Component v1.1.1)
<br>
<p><p><p>I found this link via google:
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2006/06/1486.php">http://www.open-mpi.org/community/lists/users/2006/06/1486.php</a>
<br>
<p>But to be honest I'm not sure how to apply this to fix my problem.
<br>
<p>Thanks!
<br>
<p>Jeff
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2015.php">Jeffrey B. Layton: "Re: [OMPI users] Problem with PGI 6.1 and OpenMPI-1.1.1"</a>
<li><strong>Previous message:</strong> <a href="2013.php">Audet, Martin: "[OMPI users] configure script not hapy with OpenPBS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2015.php">Jeffrey B. Layton: "Re: [OMPI users] Problem with PGI 6.1 and OpenMPI-1.1.1"</a>
<li><strong>Reply:</strong> <a href="2015.php">Jeffrey B. Layton: "Re: [OMPI users] Problem with PGI 6.1 and OpenMPI-1.1.1"</a>
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
