<?
$subject_val = "[OMPI devel] Error Running Executable Linking C++, C, F77 and F90";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 25 16:14:06 2008" -->
<!-- isoreceived="20080225211406" -->
<!-- sent="Mon, 25 Feb 2008 21:13:55 +0000" -->
<!-- isosent="20080225211355" -->
<!-- name="Si Hammond" -->
<!-- email="simon.hammond_at_[hidden]" -->
<!-- subject="[OMPI devel] Error Running Executable Linking C++, C, F77 and F90" -->
<!-- id="47C32F93.8080204_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Error Running Executable Linking C++, C, F77 and F90<br>
<strong>From:</strong> Si Hammond (<em>simon.hammond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-25 16:13:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3302.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Setting CQ depth"</a>
<li><strong>Previous message:</strong> <a href="3300.php">Jon Mason: "[OMPI devel] Setting CQ depth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3326.php">Jeff Squyres: "Re: [OMPI devel] Error Running Executable Linking C++, C, F77 and F90"</a>
<li><strong>Reply:</strong> <a href="3326.php">Jeff Squyres: "Re: [OMPI devel] Error Running Executable Linking C++, C, F77 and F90"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Guys,
<br>
<p>We have a very large executable written in C++, C, F77 and F90 (and we
<br>
use all of these compilers!). Our code compiles and links fine but when
<br>
we run it on our cluster (under PBSPro) we get the errors at the bottom
<br>
of the email.
<br>
I wondered if you guys could shed any light on this? Seems to be an odd
<br>
error than MPI_COMM_WORLD is an invalid communicator? Do you think its a
<br>
hardware fault or a compilation issue? For reference we're using OpenMPI
<br>
1.2.5 with InfiniBand connected via a Voltaire switch. Processors are
<br>
Intel Dual Core. Compilers are GNU C (gcc), C++ (g++) and gfortran.
<br>
<p><p>[node207:12109] *** An error occurred in MPI_Allreduce
<br>
[node109:11337] *** An error occurred in MPI_Allreduce
<br>
[node109:11337] *** on communicator MPI_COMM_WORLD
<br>
[node109:11337] *** MPI_ERR_COMM: invalid communicator
<br>
[node109:11337] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node117:11236] *** An error occurred in MPI_Allreduce
<br>
[node117:11236] *** on communicator MPI_COMM_WORLD
<br>
[node117:11236] *** MPI_ERR_COMM: invalid communicator
<br>
[node117:11236] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node113:11288] *** An error occurred in MPI_Allreduce
<br>
[node113:11288] *** on communicator MPI_COMM_WORLD
<br>
[node113:11288] *** MPI_ERR_COMM: invalid communicator
<br>
[node113:11288] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node111:11295] *** An error occurred in MPI_Allreduce
<br>
[node111:11295] *** on communicator MPI_COMM_WORLD
<br>
[node111:11295] *** MPI_ERR_COMM: invalid communicator
<br>
[node111:11295] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node110:11295] *** An error occurred in MPI_Allreduce
<br>
[node110:11295] *** on communicator MPI_COMM_WORLD
<br>
[node110:11295] *** MPI_ERR_COMM: invalid communicator
<br>
[node110:11295] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node115:11496] *** An error occurred in MPI_Allreduce
<br>
[node115:11496] *** on communicator MPI_COMM_WORLD
<br>
[node115:11496] *** MPI_ERR_COMM: invalid communicator
<br>
[node115:11496] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node118:11239] *** An error occurred in MPI_Allreduce
<br>
[node118:11239] *** on communicator MPI_COMM_WORLD
<br>
[node118:11239] *** MPI_ERR_COMM: invalid communicator
<br>
[node118:11239] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node116:11249] *** An error occurred in MPI_Allreduce
<br>
[node116:11249] *** on communicator MPI_COMM_WORLD
<br>
[node116:11249] *** MPI_ERR_COMM: invalid communicator
<br>
[node116:11249] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node119:11239] *** An error occurred in MPI_Allreduce
<br>
[node119:11239] *** on communicator MPI_COMM_WORLD
<br>
[node119:11239] *** MPI_ERR_COMM: invalid communicator
<br>
[node119:11239] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node207:12109] *** on communicator MPI_COMM_WORLD
<br>
[node207:12109] *** MPI_ERR_COMM: invalid communicator
<br>
[node207:12109] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node114:11261] *** An error occurred in MPI_Allreduce
<br>
[node114:11261] *** on communicator MPI_COMM_WORLD
<br>
[node114:11261] *** MPI_ERR_COMM: invalid communicator
<br>
[node114:11261] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node206:12030] *** An error occurred in MPI_Allreduce
<br>
[node206:12030] *** on communicator MPI_COMM_WORLD
<br>
[node206:12030] *** MPI_ERR_COMM: invalid communicator
<br>
[node206:12030] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node117:11237] *** An error occurred in MPI_Allreduce
<br>
[node113:11287] *** An error occurred in MPI_Allreduce
<br>
[node111:11293] *** An error occurred in MPI_Allreduce
<br>
[node110:11293] *** An error occurred in MPI_Allreduce
<br>
[node110:11293] *** on communicator MPI_COMM_WORLD
<br>
[node110:11293] *** MPI_ERR_COMM: invalid communicator
<br>
[node110:11293] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node115:11495] *** An error occurred in MPI_Allreduce
<br>
[node118:11237] *** An error occurred in MPI_Allreduce
<br>
[node118:11237] *** on communicator MPI_COMM_WORLD
<br>
[node118:11237] *** MPI_ERR_COMM: invalid communicator
<br>
[node118:11237] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node116:11247] *** An error occurred in MPI_Allreduce
<br>
[node116:11247] *** on communicator MPI_COMM_WORLD
<br>
[node116:11247] *** MPI_ERR_COMM: invalid communicator
<br>
[node116:11247] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node119:11238] *** An error occurred in MPI_Allreduce
<br>
[node114:11262] *** An error occurred in MPI_Allreduce
<br>
[node206:12029] *** An error occurred in MPI_Allreduce
<br>
[node206:12029] *** on communicator MPI_COMM_WORLD
<br>
[node206:12029] *** MPI_ERR_COMM: invalid communicator
<br>
[node206:12029] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node117:11238] *** An error occurred in MPI_Allreduce
<br>
[node113:11289] *** An error occurred in MPI_Allreduce
<br>
[node111:11294] *** An error occurred in MPI_Allreduce
<br>
[node110:11294] *** An error occurred in MPI_Allreduce
<br>
[node110:11294] *** on communicator MPI_COMM_WORLD
<br>
[node110:11294] *** MPI_ERR_COMM: invalid communicator
<br>
[node110:11294] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node115:11497] *** An error occurred in MPI_Allreduce
<br>
[node115:11497] *** on communicator MPI_COMM_WORLD
<br>
[node118:11238] *** An error occurred in MPI_Allreduce
<br>
[node118:11238] *** on communicator MPI_COMM_WORLD
<br>
[node118:11238] *** MPI_ERR_COMM: invalid communicator
<br>
[node118:11238] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node116:11248] *** An error occurred in MPI_Allreduce
<br>
[node116:11248] *** on communicator MPI_COMM_WORLD
<br>
[node116:11248] *** MPI_ERR_COMM: invalid communicator
<br>
[node116:11248] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node119:11240] *** An error occurred in MPI_Allreduce
<br>
[node114:11263] *** An error occurred in MPI_Allreduce
<br>
[node114:11263] *** on communicator MPI_COMM_WORLD
<br>
[node114:11263] *** MPI_ERR_COMM: invalid communicator
<br>
[node114:11263] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node206:12031] *** An error occurred in MPI_Allreduce
<br>
[node206:12031] *** on communicator MPI_COMM_WORLD
<br>
[node206:12031] *** MPI_ERR_COMM: invalid communicator
<br>
[node206:12031] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node117:11237] *** on communicator MPI_COMM_WORLD
<br>
[node117:11237] *** MPI_ERR_COMM: invalid communicator
<br>
[node117:11237] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node113:11287] *** on communicator MPI_COMM_WORLD
<br>
[node113:11287] *** MPI_ERR_COMM: invalid communicator
<br>
[node113:11287] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node111:11293] *** on communicator MPI_COMM_WORLD
<br>
[node111:11293] *** MPI_ERR_COMM: invalid communicator
<br>
[node111:11293] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node115:11495] *** on communicator MPI_COMM_WORLD
<br>
[node115:11495] *** MPI_ERR_COMM: invalid communicator
<br>
[node115:11495] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node119:11238] *** on communicator MPI_COMM_WORLD
<br>
[node119:11238] *** MPI_ERR_COMM: invalid communicator
<br>
[node119:11238] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node114:11262] *** on communicator MPI_COMM_WORLD
<br>
[node114:11262] *** MPI_ERR_COMM: invalid communicator
<br>
[node114:11262] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node117:11238] *** on communicator MPI_COMM_WORLD
<br>
[node117:11238] *** MPI_ERR_COMM: invalid communicator
<br>
[node117:11238] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node113:11289] *** on communicator MPI_COMM_WORLD
<br>
[node113:11289] *** MPI_ERR_COMM: invalid communicator
<br>
[node113:11289] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node111:11294] *** on communicator MPI_COMM_WORLD
<br>
[node111:11294] *** MPI_ERR_COMM: invalid communicator
<br>
[node111:11294] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node115:11497] *** MPI_ERR_COMM: invalid communicator
<br>
[node115:11497] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node119:11240] *** on communicator MPI_COMM_WORLD
<br>
[node119:11240] *** MPI_ERR_COMM: invalid communicator
<br>
[node119:11240] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node109:11335] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
base/pls_base_orted_cmds.c at line 275
<br>
[node109:11335] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_tm_module.c
<br>
at line 572
<br>
[node109:11335] [0,0,0] ORTE_ERROR_LOG: Timeout in file errmgr_hnp.c at
<br>
line 90
<br>
[node109:11335] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
base/pls_base_orted_cmds.c at line 188
<br>
[node109:11335] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_tm_module.c
<br>
at line 603
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to cleanly terminate the daemons for this job.
<br>
Returned value Timeout instead of ORTE_SUCCESS.
<br>
--------------------------------------------------------------------------
<br>
[node117:11235] OOB: Connection to HNP lost
<br>
[node113:11286] OOB: Connection to HNP lost
<br>
[node111:11292] OOB: Connection to HNP lost
<br>
[node115:11494] OOB: Connection to HNP lost
<br>
[node119:11237] OOB: Connection to HNP lost
<br>
[node116:11246] OOB: Connection to HNP lost
<br>
[node206:12028] OOB: Connection to HNP lost
<br>
[node114:11260] OOB: Connection to HNP lost
<br>
<p>----------------------------------------------------------------------------------------------------------
<br>
<p>OMPI Info Output
<br>
<p>Open MPI: 1.2.5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Open MPI SVN revision: r16989
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.2.5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Open RTE SVN revision: r16989
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.2.5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: r16989
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix: /opt/ompi/1.2.5/gnu/64
<br>
&nbsp;&nbsp;Configured architecture: x86_64-unknown-linux-gnu
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured by: root
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured on: Sun Jan 20 13:29:39 GMT 2008
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: mg1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built by: root
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built on: Sun Jan 20 13:37:14 GMT 2008
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built host: mg1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 bindings: yes (all)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 bindings: yes
<br>
&nbsp;&nbsp;Fortran90 bindings size: small
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/bin/gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler: g++
<br>
&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler absolute: /usr/bin/g++
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 compiler: gfortran
<br>
&nbsp;&nbsp;&nbsp;Fortran77 compiler abs: /usr/bin/gfortran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 compiler: gfortran
<br>
&nbsp;&nbsp;&nbsp;Fortran90 compiler abs: /usr/bin/gfortran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ exceptions: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thread support: posix (mpi: no, progress: no)
<br>
&nbsp;&nbsp;&nbsp;Internal debug support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI parameter check: runtime
<br>
Memory profiling support: no
<br>
Memory debugging support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libltdl support: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Heterogeneous support: yes
<br>
&nbsp;&nbsp;mpirun default --prefix: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA backtrace: execinfo (MCA v1.0, API v1.0, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: libnuma (MCA v1.0, API v1.0, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA timer: linux (MCA v1.0, API v1.0, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA installdirs: env (MCA v1.0, API v1.0, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA installdirs: config (MCA v1.0, API v1.0, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: basic (MCA v1.0, API v1.0, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: self (MCA v1.0, API v1.0, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA io: romio (MCA v1.0, API v1.0, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: rdma (MCA v1.0, API v1.0, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: openib (MCA v1.0, API v1.0.1, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: self (MCA v1.0, API v1.0.1, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mtl: psm (MCA v1.0, API v1.0, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA topo: unity (MCA v1.0, API v1.0, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA gpr: null (MCA v1.0, API v1.0, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA gpr: replica (MCA v1.0, API v1.0, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ns: proxy (MCA v1.0, API v2.0, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ns: replica (MCA v1.0, API v2.0, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: dash_host (MCA v1.0, API v1.3, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: gridengine (MCA v1.0, API v1.3, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: localhost (MCA v1.0, API v1.3, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: slurm (MCA v1.0, API v1.3, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: tm (MCA v1.0, API v1.3, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rds: hostfile (MCA v1.0, API v1.3, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rds: resfile (MCA v1.0, API v1.3, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: round_robin (MCA v1.0, API v1.3, Component 
<br>
v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: gridengine (MCA v1.0, API v1.3, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: slurm (MCA v1.0, API v1.3, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: tm (MCA v1.0, API v1.3, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: env (MCA v1.0, API v1.0, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: seed (MCA v1.0, API v1.0, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: singleton (MCA v1.0, API v1.0, Component v1.2.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: slurm (MCA v1.0, API v1.0, Component v1.2.5)
<br>
<p><p><pre>
-- 
Si Hammond
Performance Prediction and Analysis Lab,
High Performance Systems Group,
University of Warwick, UK
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3302.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Setting CQ depth"</a>
<li><strong>Previous message:</strong> <a href="3300.php">Jon Mason: "[OMPI devel] Setting CQ depth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3326.php">Jeff Squyres: "Re: [OMPI devel] Error Running Executable Linking C++, C, F77 and F90"</a>
<li><strong>Reply:</strong> <a href="3326.php">Jeff Squyres: "Re: [OMPI devel] Error Running Executable Linking C++, C, F77 and F90"</a>
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
