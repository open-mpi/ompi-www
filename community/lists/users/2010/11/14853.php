<?
$subject_val = "Re: [OMPI users] Unable to find the following executable";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 21 16:24:12 2010" -->
<!-- isoreceived="20101121212412" -->
<!-- sent="Sun, 21 Nov 2010 14:24:07 -0700" -->
<!-- isosent="20101121212407" -->
<!-- name="Tushar Andriyas" -->
<!-- email="thugnomics28_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unable to find the following executable" -->
<!-- id="AANLkTimaYFCop6SyeeoPfJJn2d3w0f4VU+mhptSu3eMe_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTimyqo0oH-gepApNeiuqc+HyKgT3J8EbVxybb2-3_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Unable to find the following executable<br>
<strong>From:</strong> Tushar Andriyas (<em>thugnomics28_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-21 16:24:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14854.php">George Markomanolis: "[OMPI users] tool for measuring the ping with accuracy"</a>
<li><strong>Previous message:</strong> <a href="14852.php">Riccardo Murri: "[OMPI users] possible mismatch between MPI_Iprobe and MPI_Recv?"</a>
<li><strong>In reply to:</strong> <a href="14851.php">Tushar Andriyas: "Re: [OMPI users] Unable to find the following executable"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The same TCP connection if I run on the other cluster UINTA,
<br>
I get the following error log
<br>
<p><p>mca/pls/tm/pls_tm_module.c at line 572
<br>
[uinta-0039:14508] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
../../../../../orte/\
<br>
mca/errmgr/hnp/errmgr_hnp.c at line 90
<br>
[uinta-0039:14508] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
../../../../orte/mca\
<br>
/pls/base/pls_base_orted_cmds.c at line 188
<br>
[uinta-0039:14508] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
../../../../../orte/\
<br>
mca/pls/tm/pls_tm_module.c at line 603
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to cleanly terminate the daemons for this job. Returned
<br>
value\
<br>
&nbsp;Timeout instead of ORTE_SUCCESS.
<br>
--------------------------------------------------------------------------
<br>
[uinta-0039:14510] OOB: Connection to HNP lost
<br>
[uinta-0038:15165] OOB: Connection to HNP lost
<br>
<p><p>On Sat, Nov 20, 2010 at 5:35 PM, Tushar Andriyas &lt;thugnomics28_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; I tried out the TCP connection and here is what the error file came out as.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [wasatch-29:05042] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev1">&gt; ../../../../orte/mca\
</span><br>
<span class="quotelev1">&gt; /pls/base/pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev1">&gt; [wasatch-29:05042] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/\
</span><br>
<span class="quotelev1">&gt; mca/pls/tm/pls_tm_module.c at line 572
</span><br>
<span class="quotelev1">&gt; [wasatch-29:05042] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/\
</span><br>
<span class="quotelev1">&gt; mca/errmgr/hnp/errmgr_hnp.c at line 90
</span><br>
<span class="quotelev1">&gt; [wasatch-29:05042] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev1">&gt; ../../../../orte/mca\
</span><br>
<span class="quotelev1">&gt; /pls/base/pls_base_orted_cmds.c at line 188
</span><br>
<span class="quotelev1">&gt; [wasatch-29:05042] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/\
</span><br>
<span class="quotelev1">&gt; mca/pls/tm/pls_tm_module.c at line 603
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to cleanly terminate the daemons for this job. Returned
</span><br>
<span class="quotelev1">&gt; value\
</span><br>
<span class="quotelev1">&gt;  Timeout instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [wasatch-29:05044] OOB: Connection to HNP lost
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, Nov 20, 2010 at 2:03 PM, Addepalli, Srirangam V &lt;
</span><br>
<span class="quotelev1">&gt; srirangam.v.addepalli_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca btl self,sm,tcp --mca btl_base_verbose 30 -np 8
</span><br>
<span class="quotelev2">&gt;&gt; /home/A00945081/SWMF_v2.3/run/SWMF.exe  &gt; run.log
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; to run using tcp interface in job submission script.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rangam
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] On Behalf
</span><br>
<span class="quotelev2">&gt;&gt; Of Tushar Andriyas [thugnomics28_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Saturday, November 20, 2010 1:36 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Unable to find the following executable
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ya sure, here is the list
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            Open MPI: 1.2.7
</span><br>
<span class="quotelev2">&gt;&gt;   Open MPI SVN revision: r19401
</span><br>
<span class="quotelev2">&gt;&gt;                Open RTE: 1.2.7
</span><br>
<span class="quotelev2">&gt;&gt;   Open RTE SVN revision: r19401
</span><br>
<span class="quotelev2">&gt;&gt;                    OPAL: 1.2.7
</span><br>
<span class="quotelev2">&gt;&gt;       OPAL SVN revision: r19401
</span><br>
<span class="quotelev2">&gt;&gt;                  Prefix: /opt/libraries/openmpi/openmpi-1.2.7-pgi
</span><br>
<span class="quotelev2">&gt;&gt;  Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev2">&gt;&gt;           Configured by: A00017402
</span><br>
<span class="quotelev2">&gt;&gt;           Configured on: Thu Sep 18 15:00:05 MDT 2008
</span><br>
<span class="quotelev2">&gt;&gt;           Configure host: volvox.hpc.usu.edu&lt;<a href="http://volvox.hpc.usu.edu">http://volvox.hpc.usu.edu</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 Built by: A00017402
</span><br>
<span class="quotelev2">&gt;&gt;                Built on: Thu Sep 18 15:20:06 MDT 2008
</span><br>
<span class="quotelev2">&gt;&gt;               Built host: volvox.hpc.usu.edu&lt;<a href="http://volvox.hpc.usu.edu">http://volvox.hpc.usu.edu</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               C bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;            C++ bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;      Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev2">&gt;&gt;      Fortran90 bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;  Fortran90 bindings size: large
</span><br>
<span class="quotelev2">&gt;&gt;              C compiler: pgcc
</span><br>
<span class="quotelev2">&gt;&gt;     C compiler absolute: /opt/apps/pgi/linux86-64/7.2/bin/pgcc
</span><br>
<span class="quotelev2">&gt;&gt;            C++ compiler: pgCC
</span><br>
<span class="quotelev2">&gt;&gt;   C++ compiler absolute: /opt/apps/pgi/linux86-64/7.2/bin/pgCC
</span><br>
<span class="quotelev2">&gt;&gt;      Fortran77 compiler: pgf77
</span><br>
<span class="quotelev2">&gt;&gt;  Fortran77 compiler abs: /opt/apps/pgi/linux86-64/7.2/bin/pgf77
</span><br>
<span class="quotelev2">&gt;&gt;      Fortran90 compiler: pgf90
</span><br>
<span class="quotelev2">&gt;&gt;  Fortran90 compiler abs: /opt/apps/pgi/linux86-64/7.2/bin/pgf90
</span><br>
<span class="quotelev2">&gt;&gt;             C profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;           C++ profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;     Fortran77 profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;     Fortran90 profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;          C++ exceptions: no
</span><br>
<span class="quotelev2">&gt;&gt;          Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev2">&gt;&gt;  Internal debug support: no
</span><br>
<span class="quotelev2">&gt;&gt;     MPI parameter check: runtime
</span><br>
<span class="quotelev2">&gt;&gt; Memory profiling support: no
</span><br>
<span class="quotelev2">&gt;&gt; Memory debugging support: no
</span><br>
<span class="quotelev2">&gt;&gt;         libltdl support: yes
</span><br>
<span class="quotelev2">&gt;&gt;   Heterogeneous support: yes
</span><br>
<span class="quotelev2">&gt;&gt;  mpirun default --prefix: no
</span><br>
<span class="quotelev2">&gt;&gt;           MCA backtrace: execinfo (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;           MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;           MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;           MCA maffinity: libnuma (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA timer: linux (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;         MCA installdirs: env (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;         MCA installdirs: config (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;           MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;           MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA coll: basic (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA coll: self (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA io: romio (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA mpool: rdma (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: gm (MCA v1.0, API v1.0.1, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: self (MCA v1.0, API v1.0.1, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA topo: unity (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA gpr: null (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA gpr: replica (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ns: proxy (MCA v1.0, API v2.0, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ns: replica (MCA v1.0, API v2.0, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA ras: dash_host (MCA v1.0, API v1.3, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA ras: gridengine (MCA v1.0, API v1.3, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA ras: localhost (MCA v1.0, API v1.3, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA ras: slurm (MCA v1.0, API v1.3, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA ras: tm (MCA v1.0, API v1.3, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rds: hostfile (MCA v1.0, API v1.3, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rds: resfile (MCA v1.0, API v1.3, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA rmaps: round_robin (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA pls: gridengine (MCA v1.0, API v1.3, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA pls: slurm (MCA v1.0, API v1.3, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA pls: tm (MCA v1.0, API v1.3, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA sds: env (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA sds: seed (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA sds: singleton (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA sds: slurm (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How do you invoke tcp? I no for sure that the launcher on the clusters is
</span><br>
<span class="quotelev2">&gt;&gt; torque.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tushar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sat, Nov 20, 2010 at 11:28 AM, Addepalli, Srirangam V &lt;
</span><br>
<span class="quotelev2">&gt;&gt; srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello Tushar,
</span><br>
<span class="quotelev2">&gt;&gt; Can you send me the output of ompi_info.
</span><br>
<span class="quotelev2">&gt;&gt; Have you tried using just tcp instead of IB to narrow down.
</span><br>
<span class="quotelev2">&gt;&gt; Rangam
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev2">&gt;&gt; #PBS -V
</span><br>
<span class="quotelev2">&gt;&gt; #PBS -q wasatch
</span><br>
<span class="quotelev2">&gt;&gt; #PBS -N SWMF
</span><br>
<span class="quotelev2">&gt;&gt; #PBS -l nodes=1:ppn=8
</span><br>
<span class="quotelev2">&gt;&gt; # change to the run directory
</span><br>
<span class="quotelev2">&gt;&gt; #cd $SWMF_v2.3/run
</span><br>
<span class="quotelev2">&gt;&gt; cat `echo ${PBS_NODEFILE}` &gt; list_of_nodes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca btl self,sm,tcp --mca btl_base_verbose 30 -np 8
</span><br>
<span class="quotelev2">&gt;&gt; /home/A00945081/SWMF_v2.3/run/SWMF.exe  &gt; run.log
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt; [
</span><br>
<span class="quotelev2">&gt;&gt; users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;] On Behalf
</span><br>
<span class="quotelev2">&gt;&gt; Of Tushar Andriyas [thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Saturday, November 20, 2010 12:11 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Unable to find the following executable
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rangam,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It does not want to run at all. Attached is the log file from the batch
</span><br>
<span class="quotelev2">&gt;&gt; file run u sent.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sat, Nov 20, 2010 at 10:32 AM, Addepalli, Srirangam V &lt;
</span><br>
<span class="quotelev2">&gt;&gt; srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; srirangam.v.addepalli_at_[hidden]&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello Tushar,
</span><br>
<span class="quotelev2">&gt;&gt; MPIRUN is not able to spawn processes on the  node allocated. This should
</span><br>
<span class="quotelev2">&gt;&gt; help
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev2">&gt;&gt; #PBS -V
</span><br>
<span class="quotelev2">&gt;&gt; #PBS -q wasatch
</span><br>
<span class="quotelev2">&gt;&gt; #PBS -N SWMF
</span><br>
<span class="quotelev2">&gt;&gt; #PBS -l nodes=2:ppn=8
</span><br>
<span class="quotelev2">&gt;&gt; # change to the run directory
</span><br>
<span class="quotelev2">&gt;&gt; #cd $SWMF_v2.3/run
</span><br>
<span class="quotelev2">&gt;&gt; cat `echo ${PBS_NODEFILE}` &gt; list_of_nodes
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 8   /home/A00945081/SWMF_v2.3/run/SWMF.exe  &gt; run.log
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rangam
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt; [
</span><br>
<span class="quotelev2">&gt;&gt; users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;] On Behalf
</span><br>
<span class="quotelev2">&gt;&gt; Of Tushar Andriyas [thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Saturday, November 20, 2010 10:48 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Unable to find the following executable
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Rangam,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I ran the batch file that you gave and have attached the error file. Also,
</span><br>
<span class="quotelev2">&gt;&gt; since the WASATCH cluster is kind of small, people usually run on UINTA. So,
</span><br>
<span class="quotelev2">&gt;&gt; if possible could you look at the uinta error files?
</span><br>
<span class="quotelev2">&gt;&gt; Tushar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Nov 19, 2010 at 12:31 PM, Addepalli, Srirangam V &lt;
</span><br>
<span class="quotelev2">&gt;&gt; srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; srirangam.v.addepalli_at_[hidden]&gt;&gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello Tushar,
</span><br>
<span class="quotelev2">&gt;&gt; After looking at the log files you attached it appears  that there are
</span><br>
<span class="quotelev2">&gt;&gt; multiple issues.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,11]: Myrinet/GM on host wasatch-55 was unable to find any NICs.
</span><br>
<span class="quotelev2">&gt;&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev2">&gt;&gt; lower performance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Usually they occur if there is a mismatch in mpirun version and mca blt
</span><br>
<span class="quotelev2">&gt;&gt; selection.  I suggest the following order to check if the job actually works
</span><br>
<span class="quotelev2">&gt;&gt; on a single node
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev2">&gt;&gt; #PBS -V
</span><br>
<span class="quotelev2">&gt;&gt; #PBS -q wasatch
</span><br>
<span class="quotelev2">&gt;&gt; #PBS -N SWMF
</span><br>
<span class="quotelev2">&gt;&gt; #PBS -l nodes=2:ppn=8
</span><br>
<span class="quotelev2">&gt;&gt; # change to the run directory
</span><br>
<span class="quotelev2">&gt;&gt; #cd $SWMF_v2.3/run
</span><br>
<span class="quotelev2">&gt;&gt; cat `echo ${PBS_NODEFILE}` &gt; list_of_nodes
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 8 -machinefile list_of_nodes
</span><br>
<span class="quotelev2">&gt;&gt;  /home/A00945081/SWMF_v2.3/run/SWMF.exe  &gt; run.log
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rangam
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&gt;] On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of Tushar Andriyas [thugnomics28_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&gt;&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&gt;&gt;&gt;]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Friday, November 19, 2010 1:11 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Unable to find the following executable
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hey Rangam,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried out the batch script and the error file comes out empty and the
</span><br>
<span class="quotelev2">&gt;&gt; output file has /home/A00945081/SWM_v2.3/run/SWMF.exe (WHEN RUN ON A SINGLE
</span><br>
<span class="quotelev2">&gt;&gt; MACHINE) and the same with multiple machines in the run. So, does that mean
</span><br>
<span class="quotelev2">&gt;&gt; that the exe is auto mounted ? What should I do next?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tushar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Nov 19, 2010 at 10:05 AM, Addepalli, Srirangam V &lt;
</span><br>
<span class="quotelev2">&gt;&gt; srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; srirangam.v.addepalli_at_[hidden]&gt;&gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; srirangam.v.addepalli_at_[hidden]&gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; srirangam.v.addepalli_at_[hidden]&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello Tushar,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Try the following script.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev2">&gt;&gt; #PBS -V
</span><br>
<span class="quotelev2">&gt;&gt; #PBS -q wasatch
</span><br>
<span class="quotelev2">&gt;&gt; #PBS -N SWMF
</span><br>
<span class="quotelev2">&gt;&gt; #PBS -l nodes=1:ppn=8
</span><br>
<span class="quotelev2">&gt;&gt; # change to the run directory
</span><br>
<span class="quotelev2">&gt;&gt; #cd $SWMF_v2.3/run
</span><br>
<span class="quotelev2">&gt;&gt; cat `echo ${PBS_NODEFILE}` &gt; list_of_nodes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The objective is to check if your user directories are auto mounted on
</span><br>
<span class="quotelev2">&gt;&gt; compute nodes and are available during run time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If the job returns information about SWMF.exe then it can be safely
</span><br>
<span class="quotelev2">&gt;&gt; assumed that user directories are being auto mounted.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rangam
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users-bounce!
</span><br>
<span class="quotelev2">&gt;&gt;  s_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&gt;&gt;] On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of Tushar Andriyas [thugnomics28_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&gt;&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&gt;&gt;&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&gt;&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&gt;&gt;&gt;&gt;]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Friday, November 19, 2010 8:35 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Unable to find the following executable
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It just gives back the info on folders in my home directory. Dont get me
</span><br>
<span class="quotelev2">&gt;&gt; wrong but i m kinda new in this. So, could u type out d full command which i
</span><br>
<span class="quotelev2">&gt;&gt; need to give?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tushar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Nov 18, 2010 at 8:35 AM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; rhc_at_[hidden]&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;&gt;&lt;mailto:rhc_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:rhc_at_[hidden]&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;&gt;&gt;&lt;mailto:rhc_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:rhc_at_[hidden]&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;&gt;&lt;mailto:rhc_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:rhc_at_[hidden]&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; You can qsub a simple &quot;ls&quot; on that path - that will tell you if the path
</span><br>
<span class="quotelev2">&gt;&gt; is valid on all machines in that allocation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What typically happens is that home directories aren't remotely mounted,
</span><br>
<span class="quotelev2">&gt;&gt; or are mounted on a different location.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Nov 18, 2010 at 8:31 AM, Tushar Andriyas &lt;thugnomics28_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&gt;&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&gt;&gt;&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&gt;&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&gt;&gt;&gt;&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&gt;&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&gt;&gt;&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&gt;&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28@!
</span><br>
<span class="quotelev2">&gt;&gt;  gmail.com&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; no its not in the same directory as SWMF. I guess the path is the same
</span><br>
<span class="quotelev2">&gt;&gt; since all the machines in a cluster are configured d same way. How do I know
</span><br>
<span class="quotelev2">&gt;&gt; if this is not the case?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Nov 18, 2010 at 8:25 AM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; rhc_at_[hidden]&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;&gt;&lt;mailto:rhc_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:rhc_at_[hidden]&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;&gt;&gt;&lt;mailto:rhc_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:rhc_at_[hidden]&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;&gt;&lt;mailto:rhc_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:rhc_at_[hidden]&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Is you &quot;hello world&quot; test program in the same directory as SWMF? Is it
</span><br>
<span class="quotelev2">&gt;&gt; possible that the path you are specifying is not available on all of the
</span><br>
<span class="quotelev2">&gt;&gt; remote machines? That's the most common problem we see.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Nov 18, 2010 at 7:59 AM, Tushar Andriyas &lt;thugnomics28_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&gt;&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&gt;&gt;&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&gt;&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&gt;&gt;&gt;&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&gt;&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&gt;&gt;&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&gt;&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28@!
</span><br>
<span class="quotelev2">&gt;&gt;  gmail.com&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi there,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the expedite reply. The thing is that although the mpirun is
</span><br>
<span class="quotelev2">&gt;&gt; setup correctly (since a simple hello world works), when I run the main
</span><br>
<span class="quotelev2">&gt;&gt; SWMF.exe executable, the cluster machines somehow fail to find the
</span><br>
<span class="quotelev2">&gt;&gt; executable (SWMF.exe).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, I have attached the sample error file from one of the runs
</span><br>
<span class="quotelev2">&gt;&gt; (SWMF.e143438) and also the MAKEFILES so that you could better gauge the
</span><br>
<span class="quotelev2">&gt;&gt; problem. The makefiles have Linux as the OS and pgf90 as compiler with
</span><br>
<span class="quotelev2">&gt;&gt; mpif90 as the linker. I am using openmpi-1.2.7-pgi. Job is submitted using a
</span><br>
<span class="quotelev2">&gt;&gt; batch file (job.bats) and the scheduler is Torque (version I am not sure but
</span><br>
<span class="quotelev2">&gt;&gt; I can see three on the machines viz 2.0.0, 2.2.1, 2.5.2).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have also attached an error file from one of the clusters (WASATCH viz
</span><br>
<span class="quotelev2">&gt;&gt; SWMF.e143439) and UINTA (SWMF.e143440) with the whole path of the exe as
</span><br>
<span class="quotelev2">&gt;&gt; Srirangam mentioned as follows (in the batch file).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --prefix /opt/libraries/openmpi/openmpi-1.2.7-pgi
</span><br>
<span class="quotelev2">&gt;&gt; /home/A00945081/SWMF_v2.3/run/SWMF.exe &gt; runlog_`date +%y%m%d%H%M`
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have tried both mpirun and mpiexec but nothing seems to work.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tushar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Nov 17, 2010 at 8:12 PM, Addepalli, Srirangam V &lt;
</span><br>
<span class="quotelev2">&gt;&gt; srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; srirangam.v.addepalli_at_[hidden]&gt;&gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; srirangam.v.addepalli_at_[hidden]&gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; srirangam.v.addepalli_at_[hidden]&gt;&gt;&gt;&gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; srirangam.v.addepalli_at_[hidden]&gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&gt;&gt;&lt;mailto:srirangam.v.addepalli@!
</span><br>
<span class="quotelev2">&gt;&gt;  ttu.edu&lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; srirangam.v.addepalli_at_[hidden]&gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello Tushar,
</span><br>
<span class="quotelev2">&gt;&gt; Have you tried supplying the full path of the executable just to check ?
</span><br>
<span class="quotelev2">&gt;&gt; Rangam
</span><br>
<span class="quotelev2">&gt;&gt; ________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&lt;mailto:users-!
</span><br>
<span class="quotelev2">&gt;&gt;  bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&gt;&gt;&gt; [
</span><br>
<span class="quotelev2">&gt;&gt; users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&gt;&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users-bounce&lt;mailto:!
</span><br>
<span class="quotelev2">&gt;&gt;  users-bounce&gt;!
</span><br>
<span class="quotelev2">&gt;&gt;  s_at_[hidden]&lt;mailto:s_at_[hidden]&gt;&lt;mailto:users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:users-bounces_at_[hidden]&gt;&gt;&lt;mailto:users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:users-bounces_at_[hidden]&gt;&gt;&gt;&gt;&gt;] On Behalf Of Tushar Andriyas [
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;&gt;&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&lt;mailt!
</span><br>
<span class="quotelev2">&gt;&gt;  o:thugnomics28_at_[hidden] &lt;o%3Athugnomics28_at_[hidden]&gt;&gt;&gt;&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;&gt;&gt;&gt;]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, November 17, 2010 8:49 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&gt;&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:users_at_[hidden]&gt;&gt;&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] Unable to find the following executable
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi there,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am new to using mpi commands and was stuck in problem with running a
</span><br>
<span class="quotelev2">&gt;&gt; code. When I submit my job through a batch file, the job exits with the
</span><br>
<span class="quotelev2">&gt;&gt; message that the executable could not be found on the machines. I have tried
</span><br>
<span class="quotelev2">&gt;&gt; a lot of options such as PBS -V and so on on but the problem persists. If
</span><br>
<span class="quotelev2">&gt;&gt; someone is interested, I can send the full info on the cluster, the compiler
</span><br>
<span class="quotelev2">&gt;&gt; and openmpi settings and other stuff. BTW the launcher is torque (which you
</span><br>
<span class="quotelev2">&gt;&gt; might have guessed). The code does not have a forum so I am in a deep mire.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Tushar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&gt;&gt;&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&gt;&gt;&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&gt;&gt;&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&gt;&gt;&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&gt;&gt;&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14853/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14854.php">George Markomanolis: "[OMPI users] tool for measuring the ping with accuracy"</a>
<li><strong>Previous message:</strong> <a href="14852.php">Riccardo Murri: "[OMPI users] possible mismatch between MPI_Iprobe and MPI_Recv?"</a>
<li><strong>In reply to:</strong> <a href="14851.php">Tushar Andriyas: "Re: [OMPI users] Unable to find the following executable"</a>
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
