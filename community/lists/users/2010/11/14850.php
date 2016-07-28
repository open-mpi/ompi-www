<?
$subject_val = "Re: [OMPI users] Unable to find the following executable";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 20 16:04:17 2010" -->
<!-- isoreceived="20101120210417" -->
<!-- sent="Sat, 20 Nov 2010 15:03:16 -0600" -->
<!-- isosent="20101120210316" -->
<!-- name="Addepalli, Srirangam V" -->
<!-- email="srirangam.v.addepalli_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unable to find the following executable" -->
<!-- id="15F71B097D330B42AA606A4AD8CA9640E72EA85DAD_at_CRATUS.ttu.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTinGQMzifRbYLYjdjxwdTiq2_1_+=qDBpH_SAkLo_at_mail.gmail.com" -->
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
<strong>From:</strong> Addepalli, Srirangam V (<em>srirangam.v.addepalli_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-20 16:03:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14851.php">Tushar Andriyas: "Re: [OMPI users] Unable to find the following executable"</a>
<li><strong>Previous message:</strong> <a href="14849.php">Tushar Andriyas: "Re: [OMPI users] Unable to find the following executable"</a>
<li><strong>In reply to:</strong> <a href="14849.php">Tushar Andriyas: "Re: [OMPI users] Unable to find the following executable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14851.php">Tushar Andriyas: "Re: [OMPI users] Unable to find the following executable"</a>
<li><strong>Reply:</strong> <a href="14851.php">Tushar Andriyas: "Re: [OMPI users] Unable to find the following executable"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
mpirun --mca btl self,sm,tcp --mca btl_base_verbose 30 -np 8   /home/A00945081/SWMF_v2.3/run/SWMF.exe  &gt; run.log
<br>
<p>to run using tcp interface in job submission script.
<br>
<p>Rangam
<br>
_______________________________________
<br>
From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] On Behalf Of Tushar Andriyas [thugnomics28_at_[hidden]]
<br>
Sent: Saturday, November 20, 2010 1:36 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Unable to find the following executable
<br>
<p>Ya sure, here is the list
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.2.7
<br>
&nbsp;&nbsp;&nbsp;Open MPI SVN revision: r19401
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.2.7
<br>
&nbsp;&nbsp;&nbsp;Open RTE SVN revision: r19401
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.2.7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: r19401
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix: /opt/libraries/openmpi/openmpi-1.2.7-pgi
<br>
&nbsp;Configured architecture: x86_64-unknown-linux-gnu
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured by: A00017402
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured on: Thu Sep 18 15:00:05 MDT 2008
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: volvox.hpc.usu.edu&lt;<a href="http://volvox.hpc.usu.edu">http://volvox.hpc.usu.edu</a>&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built by: A00017402
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built on: Thu Sep 18 15:20:06 MDT 2008
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built host: volvox.hpc.usu.edu&lt;<a href="http://volvox.hpc.usu.edu">http://volvox.hpc.usu.edu</a>&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 bindings: yes (all)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 bindings: yes
<br>
&nbsp;Fortran90 bindings size: large
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: pgcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /opt/apps/pgi/linux86-64/7.2/bin/pgcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler: pgCC
<br>
&nbsp;&nbsp;&nbsp;C++ compiler absolute: /opt/apps/pgi/linux86-64/7.2/bin/pgCC
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 compiler: pgf77
<br>
&nbsp;&nbsp;Fortran77 compiler abs: /opt/apps/pgi/linux86-64/7.2/bin/pgf77
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 compiler: pgf90
<br>
&nbsp;&nbsp;Fortran90 compiler abs: /opt/apps/pgi/linux86-64/7.2/bin/pgf90
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ exceptions: no
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
&nbsp;&nbsp;&nbsp;Heterogeneous support: yes
<br>
&nbsp;mpirun default --prefix: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA backtrace: execinfo (MCA v1.0, API v1.0, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: libnuma (MCA v1.0, API v1.0, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA timer: linux (MCA v1.0, API v1.0, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA installdirs: env (MCA v1.0, API v1.0, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA installdirs: config (MCA v1.0, API v1.0, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: basic (MCA v1.0, API v1.0, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: self (MCA v1.0, API v1.0, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA io: romio (MCA v1.0, API v1.0, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: rdma (MCA v1.0, API v1.0, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: gm (MCA v1.0, API v1.0.1, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: self (MCA v1.0, API v1.0.1, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA topo: unity (MCA v1.0, API v1.0, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA gpr: null (MCA v1.0, API v1.0, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA gpr: replica (MCA v1.0, API v1.0, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ns: proxy (MCA v1.0, API v2.0, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ns: replica (MCA v1.0, API v2.0, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: dash_host (MCA v1.0, API v1.3, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: gridengine (MCA v1.0, API v1.3, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: localhost (MCA v1.0, API v1.3, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: slurm (MCA v1.0, API v1.3, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: tm (MCA v1.0, API v1.3, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rds: hostfile (MCA v1.0, API v1.3, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rds: resfile (MCA v1.0, API v1.3, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: round_robin (MCA v1.0, API v1.3, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: gridengine (MCA v1.0, API v1.3, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: slurm (MCA v1.0, API v1.3, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: tm (MCA v1.0, API v1.3, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: env (MCA v1.0, API v1.0, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: seed (MCA v1.0, API v1.0, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: singleton (MCA v1.0, API v1.0, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: slurm (MCA v1.0, API v1.0, Component v1.2.7)
<br>
<p>How do you invoke tcp? I no for sure that the launcher on the clusters is torque.
<br>
<p>Tushar
<br>
<p>On Sat, Nov 20, 2010 at 11:28 AM, Addepalli, Srirangam V &lt;srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&gt; wrote:
<br>
Hello Tushar,
<br>
Can you send me the output of ompi_info.
<br>
Have you tried using just tcp instead of IB to narrow down.
<br>
Rangam
<br>
<p>#!/bin/sh
<br>
#PBS -V
<br>
#PBS -q wasatch
<br>
#PBS -N SWMF
<br>
#PBS -l nodes=1:ppn=8
<br>
# change to the run directory
<br>
#cd $SWMF_v2.3/run
<br>
cat `echo ${PBS_NODEFILE}` &gt; list_of_nodes
<br>
<p>mpirun --mca btl self,sm,tcp --mca btl_base_verbose 30 -np 8   /home/A00945081/SWMF_v2.3/run/SWMF.exe  &gt; run.log
<br>
<p><p>________________________________________
<br>
From: users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt; [users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;] On Behalf Of Tushar Andriyas [thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;]
<br>
Sent: Saturday, November 20, 2010 12:11 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Unable to find the following executable
<br>
<p>Rangam,
<br>
<p>It does not want to run at all. Attached is the log file from the batch file run u sent.
<br>
<p>On Sat, Nov 20, 2010 at 10:32 AM, Addepalli, Srirangam V &lt;srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&gt;&gt; wrote:
<br>
Hello Tushar,
<br>
MPIRUN is not able to spawn processes on the  node allocated. This should help
<br>
<p>#!/bin/sh
<br>
#PBS -V
<br>
#PBS -q wasatch
<br>
#PBS -N SWMF
<br>
#PBS -l nodes=2:ppn=8
<br>
# change to the run directory
<br>
#cd $SWMF_v2.3/run
<br>
cat `echo ${PBS_NODEFILE}` &gt; list_of_nodes
<br>
mpirun -np 8   /home/A00945081/SWMF_v2.3/run/SWMF.exe  &gt; run.log
<br>
<p><p>Rangam
<br>
<p><p>________________________________________
<br>
From: users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt; [users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;] On Behalf Of Tushar Andriyas [thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;]
<br>
Sent: Saturday, November 20, 2010 10:48 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Unable to find the following executable
<br>
<p>Hi Rangam,
<br>
<p>I ran the batch file that you gave and have attached the error file. Also, since the WASATCH cluster is kind of small, people usually run on UINTA. So, if possible could you look at the uinta error files?
<br>
Tushar
<br>
<p>On Fri, Nov 19, 2010 at 12:31 PM, Addepalli, Srirangam V &lt;srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&gt;&gt;&gt; wrote:
<br>
Hello Tushar,
<br>
After looking at the log files you attached it appears  that there are multiple issues.
<br>
<p>[0,1,11]: Myrinet/GM on host wasatch-55 was unable to find any NICs.
<br>
Another transport will be used instead, although this may result in
<br>
lower performance.
<br>
<p>Usually they occur if there is a mismatch in mpirun version and mca blt selection.  I suggest the following order to check if the job actually works on a single node
<br>
<p>#!/bin/sh
<br>
#PBS -V
<br>
#PBS -q wasatch
<br>
#PBS -N SWMF
<br>
#PBS -l nodes=2:ppn=8
<br>
# change to the run directory
<br>
#cd $SWMF_v2.3/run
<br>
cat `echo ${PBS_NODEFILE}` &gt; list_of_nodes
<br>
mpirun -np 8 -machinefile list_of_nodes  /home/A00945081/SWMF_v2.3/run/SWMF.exe  &gt; run.log
<br>
<p><p>Rangam
<br>
<p><p>________________________________________
<br>
From: users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&gt; [users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&gt;] On Behalf Of Tushar Andriyas [thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;&gt;]
<br>
Sent: Friday, November 19, 2010 1:11 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Unable to find the following executable
<br>
<p>Hey Rangam,
<br>
<p>I tried out the batch script and the error file comes out empty and the output file has /home/A00945081/SWM_v2.3/run/SWMF.exe (WHEN RUN ON A SINGLE MACHINE) and the same with multiple machines in the run. So, does that mean that the exe is auto mounted ? What should I do next?
<br>
<p>Tushar
<br>
<p>On Fri, Nov 19, 2010 at 10:05 AM, Addepalli, Srirangam V &lt;srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&gt;&gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&gt;&gt;&gt;&gt; wrote:
<br>
Hello Tushar,
<br>
<p>Try the following script.
<br>
<p>#!/bin/sh
<br>
#PBS -V
<br>
#PBS -q wasatch
<br>
#PBS -N SWMF
<br>
#PBS -l nodes=1:ppn=8
<br>
# change to the run directory
<br>
#cd $SWMF_v2.3/run
<br>
cat `echo ${PBS_NODEFILE}` &gt; list_of_nodes
<br>
<p><p><p><p>The objective is to check if your user directories are auto mounted on compute nodes and are available during run time.
<br>
<p>If the job returns information about SWMF.exe then it can be safely assumed that user directories are being auto mounted.
<br>
<p>Rangam
<br>
<p><p><p>________________________________________
<br>
From: users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&gt;&gt; [users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounce<br>
s_at_[hidden]&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&gt;&gt;] On Behalf Of Tushar Andriyas [thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;&gt;&gt;]
<br>
Sent: Friday, November 19, 2010 8:35 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Unable to find the following executable
<br>
<p>It just gives back the info on folders in my home directory. Dont get me wrong but i m kinda new in this. So, could u type out d full command which i need to give?
<br>
<p>Tushar
<br>
<p>On Thu, Nov 18, 2010 at 8:35 AM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;&gt;&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;&gt;&gt;&gt;&gt; wrote:
<br>
You can qsub a simple &quot;ls&quot; on that path - that will tell you if the path is valid on all machines in that allocation.
<br>
<p>What typically happens is that home directories aren't remotely mounted, or are mounted on a different location.
<br>
<p><p>On Thu, Nov 18, 2010 at 8:31 AM, Tushar Andriyas &lt;thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;&gt;&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_gmai<br>
l.com&gt;&gt;&gt;&gt;&gt;&gt; wrote:
<br>
no its not in the same directory as SWMF. I guess the path is the same since all the machines in a cluster are configured d same way. How do I know if this is not the case?
<br>
<p><p>On Thu, Nov 18, 2010 at 8:25 AM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;&gt;&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;&gt;&gt;&gt;&gt; wrote:
<br>
Is you &quot;hello world&quot; test program in the same directory as SWMF? Is it possible that the path you are specifying is not available on all of the remote machines? That's the most common problem we see.
<br>
<p><p>On Thu, Nov 18, 2010 at 7:59 AM, Tushar Andriyas &lt;thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;&gt;&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_gmai<br>
l.com&gt;&gt;&gt;&gt;&gt;&gt; wrote:
<br>
Hi there,
<br>
<p>Thanks for the expedite reply. The thing is that although the mpirun is setup correctly (since a simple hello world works), when I run the main SWMF.exe executable, the cluster machines somehow fail to find the executable (SWMF.exe).
<br>
<p>So, I have attached the sample error file from one of the runs (SWMF.e143438) and also the MAKEFILES so that you could better gauge the problem. The makefiles have Linux as the OS and pgf90 as compiler with mpif90 as the linker. I am using openmpi-1.2.7-pgi. Job is submitted using a batch file (job.bats) and the scheduler is Torque (version I am not sure but I can see three on the machines viz 2.0.0, 2.2.1, 2.5.2).
<br>
<p>I have also attached an error file from one of the clusters (WASATCH viz SWMF.e143439) and UINTA (SWMF.e143440) with the whole path of the exe as Srirangam mentioned as follows (in the batch file).
<br>
<p>mpirun --prefix /opt/libraries/openmpi/openmpi-1.2.7-pgi   /home/A00945081/SWMF_v2.3/run/SWMF.exe &gt; runlog_`date +%y%m%d%H%M`
<br>
<p>I have tried both mpirun and mpiexec but nothing seems to work.
<br>
<p>Tushar
<br>
<p><p>On Wed, Nov 17, 2010 at 8:12 PM, Addepalli, Srirangam V &lt;srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&gt;&gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&gt;&gt;&gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&gt;&gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepal<br>
li_at_[hidden]&gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&gt;&gt;&gt;&gt;&gt; wrote:
<br>
Hello Tushar,
<br>
Have you tried supplying the full path of the executable just to check ?
<br>
Rangam
<br>
________________________________________
<br>
From: users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&gt;&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-<br>
bounces_at_[hidden]&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&gt;&gt;&gt; [users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&gt;&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&gt;&lt;mailto:users-bounce&lt;mailto:users-bounce&gt;!
<br>
&nbsp;s_at_[hidden]&lt;mailto:s_at_[hidden]&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&gt;&gt;&gt;] On Behalf Of Tushar Andriyas [thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;&gt;&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;&gt;&lt;mailto<br>
:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;&gt;&gt;&gt;]
<br>
Sent: Wednesday, November 17, 2010 8:49 PM
<br>
To: users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;&gt;&gt;
<br>
Subject: [OMPI users] Unable to find the following executable
<br>
<p>Hi there,
<br>
<p>I am new to using mpi commands and was stuck in problem with running a code. When I submit my job through a batch file, the job exits with the message that the executable could not be found on the machines. I have tried a lot of options such as PBS -V and so on on but the problem persists. If someone is interested, I can send the full info on the cluster, the compiler and openmpi settings and other stuff. BTW the launcher is torque (which you might have guessed). The code does not have a forum so I am in a deep mire.
<br>
<p>Thanks,
<br>
Tushar
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;&gt;&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;&gt;&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;&gt;&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;&gt;&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;&gt;&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14851.php">Tushar Andriyas: "Re: [OMPI users] Unable to find the following executable"</a>
<li><strong>Previous message:</strong> <a href="14849.php">Tushar Andriyas: "Re: [OMPI users] Unable to find the following executable"</a>
<li><strong>In reply to:</strong> <a href="14849.php">Tushar Andriyas: "Re: [OMPI users] Unable to find the following executable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14851.php">Tushar Andriyas: "Re: [OMPI users] Unable to find the following executable"</a>
<li><strong>Reply:</strong> <a href="14851.php">Tushar Andriyas: "Re: [OMPI users] Unable to find the following executable"</a>
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
