<?
$subject_val = "Re: [OMPI users] Mpirun 1.5.4  problems when request &gt; 28 slots";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  8 01:24:55 2014" -->
<!-- isoreceived="20140808052455" -->
<!-- sent="Fri, 8 Aug 2014 05:24:53 +0000" -->
<!-- isosent="20140808052453" -->
<!-- name="Lane, William" -->
<!-- email="William.Lane_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mpirun 1.5.4  problems when request &amp;gt; 28 slots" -->
<!-- id="434F2BB0AF80484CA04DE0D8C0738BF293E2D2FD_at_cshsmsgmbx02.CSMC.EDU" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D6750846-2CF4-4FBD-B044-BC865AB8605A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mpirun 1.5.4  problems when request &gt; 28 slots<br>
<strong>From:</strong> Lane, William (<em>William.Lane_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-08 01:24:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24951.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mpirun 1.5.4  problems when request &gt; 28 slots"</a>
<li><strong>Previous message:</strong> <a href="24949.php">Kawashima, Takahiro: "Re: [OMPI users] [OMPI devel] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/07/24853.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mpirun 1.5.4  problems when request &gt; 28 slots"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24951.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mpirun 1.5.4  problems when request &gt; 28 slots"</a>
<li><strong>Reply:</strong> <a href="24951.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mpirun 1.5.4  problems when request &gt; 28 slots"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Using the &quot;--mca btl tcp,self&quot; switch to mpirun solved all the issues (in addition to
<br>
the requirement to include the --mca btl_tcp_if_include eth0 switch). I believe
<br>
the &quot;--mca btl tcp,self&quot; switch limits inter-process communication within a node to using the TCP
<br>
loopback rather than shared memory. I should also point out that all of the nodes
<br>
on this cluster feature NUMA architecture.
<br>
<p>Will using the &quot;--mca btl tcp,self&quot; switch to mpirun result in any degraded performance
<br>
issues over using shared memory?
<br>
<p>-Bill Lane
<br>
<p>________________________________________
<br>
From: users [users-bounces_at_[hidden]] on behalf of Jeff Squyres (jsquyres) [jsquyres_at_[hidden]]
<br>
Sent: Tuesday, July 22, 2014 2:29 PM
<br>
To: Open MPI User's List
<br>
Subject: Re: [OMPI users] Mpirun 1.5.4  problems when request &gt; 28 slots
<br>
<p>Hyperthreading is pretty great for non-HPC applications, which is why Intel makes it.  But hyperthreading *generally* does not help HPC application performance.  You're basically halving several on-chip resources / queues / pipelines, and that can hurt for performance-hungry HPC applications.
<br>
<p>This is a per-application issue, of course, so YMMV.  But the general wisdom -- even with Intel Ivy Bridge-class chips -- is to disable hperthreading for HPC apps.
<br>
<p>That being said, Open MPI started supporting hyperthreading properly somewhere in the 1.5/1.6 series (I don't remember the exact version).  These are among the reasons that we're urging you to upgrade to at least 1.6.5.  &quot;Supporting hyperthreading properly&quot; means: when you say &quot;bind to core&quot;, OMPI will recognize that each core is composed of N hyperthreads, and will bind to all of them (vs. bind each MPI process to a Linux virtual processor, which may be a core or a hyperthread).
<br>
<p>So if you're running in a bind-to-core situation, if it's a &quot;before OMPI supporter HT properly&quot; version, then you'll bind 2 MPI processes to a single core, and that will likely be pretty terrible for overall performance.
<br>
<p>Does that help?
<br>
<p><p>On Jul 22, 2014, at 5:18 PM, Lane, William &lt;William.Lane_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The 32 slot systems/nodes I'm running my openMPI test code on only have
</span><br>
<span class="quotelev1">&gt; 16 physical cores, the rest of the slots are hyperthreads. I've done some more
</span><br>
<span class="quotelev1">&gt; testing and noticed that if I limit the number of slots per node to 8
</span><br>
<span class="quotelev1">&gt; (via -npernode 8) everything works and 8 slots are used from each system/node:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 32 -npernode 8 --prefix /usr/lib64/openmpi --hostfile hostfile --mca btl_tcp_if_include eth0 --mca
</span><br>
<span class="quotelev1">&gt;     pls_gridengine_verbose 1 /hpc/home/lanew/mpi/openmpi/ProcessColors2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, when I run this same testcode on an older cluster (much older version
</span><br>
<span class="quotelev1">&gt; of openMPI [1.3.3]) I have no problems using all the cores (including hyperthreading
</span><br>
<span class="quotelev1">&gt; cores). The Intel CPU's used are different in each case: the older cluster uses
</span><br>
<span class="quotelev1">&gt; two, 6 core Xeons with 12 hyperthreads while the new cluster uses two,
</span><br>
<span class="quotelev1">&gt; 8 core Sandybridges with 16 hyperthreads apiece.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is hyperthreading an issue with openMPI? Should hyperthreading always be turned
</span><br>
<span class="quotelev1">&gt; off for openMPI apps?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for you time,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Bill Lane
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: users [users-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, July 22, 2014 7:57 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Mpirun 1.5.4 problems when request &gt; 28 slots
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hmmm...that's not a &quot;bug&quot;, but just a packaging issue with the way CentOS distributed some variants of OMPI that requires you install/update things in a specific order.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 20, 2014, at 11:34 PM, Lane, William &lt;William.Lane_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please see:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://bugs.centos.org/view.php?id=5812">http://bugs.centos.org/view.php?id=5812</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: users [users-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Sunday, July 20, 2014 9:30 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Mpirun 1.5.4 problems when request &gt; 28 slots
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm unaware of any CentOS-OMPI bug, and I've been using CentOS throughout the 6.x series running OMPI 1.6.x and above.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can't speak to the older versions of CentOS and/or the older versions of OMPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 19, 2014, at 8:14 PM, Lane, William &lt;William.Lane_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes there is a second HPC Sun Grid Engine cluster on which I've run
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this openMPI test code dozens of times on upwards of 400 slots
</span><br>
<span class="quotelev3">&gt;&gt;&gt; through SGE using qsub and qrsh, but this was using a much
</span><br>
<span class="quotelev3">&gt;&gt;&gt; older version of openMPI (1.3.3 I believe). On that particular cluster the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; open files hard and soft limits were an issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have noticed that there has been a new (as of July 2014) CentOS openMPI bug that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; occurs when CentOS is upgraded from 6.2 to 6.3. I'm not sure if that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bug applies to this situation though.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This particular problem occurs whether or not I submit jobs through SGE (via qrsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or qsub) or outside of SGE which leads me to believe it is an openMPI and/or CentOS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Bill Lane
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users [users-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Saturday, July 19, 2014 3:21 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] Mpirun 1.5.4 problems when request &gt; 28 slots
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Not for this test case size. You should be just fine with the default values.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I understand you correctly, you've run this app at scale before on another cluster without problem?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 19, 2014, at 1:34 PM, Lane, William &lt;William.Lane_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It's hard to imagine it's the openMPI code because I've tested this code
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; extensively on another cluster with 400 nodes and never had any problems.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But I'll try using the hello_c example in any case. Is it still recommended to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; raise the open files soft and hard limits to 4096? Or should even larger values
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be necessary?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you for your help.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Bill Lane
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: users [users-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sent: Saturday, July 19, 2014 8:07 AM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] Mpirun 1.5.4 problems when request &gt; 28 slots
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; That's a pretty old OMPI version, and we don't really support it any longer. However, I can provide some advice:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * have you tried running the simple &quot;hello_c&quot; example we provide? This would at least tell you if the problem is in your app, which is what I'd expect given your description
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * try using gdb (or pick your debugger) to look at the corefile and see where it is failing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'd also suggest updating OMPI to the 1.6.5 or 1.8.1 versions, but I doubt that's the issue behind this problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jul 19, 2014, at 1:05 AM, Lane, William &lt;William.Lane_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm getting consistent errors of the form:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;mpirun noticed that process rank 3 with PID 802 on node csclprd3-0-8 exited on signal 11 (Segmentation fault).&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; whenever I request more than 28 slots. These
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; errors even occur when I run mpirun locally
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; on a compute node that has 32 slots (8 cores, 16 with hyperthreading).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; When I run less than 28 slots I have no problems whatsoever.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OS:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CentOS release 6.3 (Final)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; openMPI information:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  Package: Open MPI mockbuild_at_[hidden] Distribution
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 Open MPI: 1.5.4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Open MPI SVN revision: r25060
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Open MPI release date: Aug 18, 2011
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 Open RTE: 1.5.4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Open RTE SVN revision: r25060
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Open RTE release date: Aug 18, 2011
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     OPAL: 1.5.4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        OPAL SVN revision: r25060
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        OPAL release date: Aug 18, 2011
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             Ident string: 1.5.4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   Prefix: /usr/lib64/openmpi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           Configure host: c6b8.bsys.dev.centos.org
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            Configured by: mockbuild
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            Configured on: Fri Jun 22 06:42:03 UTC 2012
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           Configure host: c6b8.bsys.dev.centos.org
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 Built by: mockbuild
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 Built on: Fri Jun 22 06:46:48 UTC 2012
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               Built host: c6b8.bsys.dev.centos.org
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               C bindings: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Fortran90 bindings size: small
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               C compiler: gcc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   C compiler family name: GNU
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       C compiler version: 4.4.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       Fortran77 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       Fortran90 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   Fortran90 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              C profiling: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           Thread support: posix (MPI_THREAD_MULTIPLE: no, progress: no)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            Sparse Groups: no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   Internal debug support: no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   MPI interface warnings: no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          libltdl support: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Heterogeneous support: no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          MPI I/O support: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      Symbol vis. support: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           MPI extensions: affinity example
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    FT Checkpoint support: no (checkpoint thread: no)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   MPI_MAX_PROCESSOR_NAME: 256
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     MPI_MAX_ERROR_STRING: 256
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      MPI_MAX_OBJECT_NAME: 64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         MPI_MAX_INFO_KEY: 36
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         MPI_MAX_INFO_VAL: 256
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        MPI_MAX_PORT_NAME: 1024
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   MPI_MAX_DATAREP_STRING: 128
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           MCA memchecker: valgrind (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               MCA memory: linux (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            MCA paffinity: hwloc (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA carto: auto_detect (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA carto: file (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            MCA maffinity: libnuma (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA timer: linux (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          MCA installdirs: env (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          MCA installdirs: config (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA dpm: orte (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            MCA allocator: basic (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 MCA coll: basic (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 MCA coll: inter (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 MCA coll: self (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 MCA coll: sm (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 MCA coll: sync (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 MCA coll: tuned (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA mpool: fake (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA mpool: sm (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA pml: bfo (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA pml: csum (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA pml: v (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA bml: r2 (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               MCA rcache: vma (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA btl: ofud (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA btl: openib (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA btl: self (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA btl: sm (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA btl: tcp (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 MCA topo: unity (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA osc: rdma (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA iof: hnp (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA iof: orted (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA iof: tool (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA oob: tcp (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 MCA odls: default (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA ras: cm (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA ras: loadleveler (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA ras: slurm (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA rmaps: load_balance (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA rmaps: resilient (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA rmaps: topo (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA rml: oob (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               MCA routed: binomial (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               MCA routed: cm (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               MCA routed: direct (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               MCA routed: linear (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               MCA routed: radix (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               MCA routed: slave (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA plm: rsh (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA plm: rshd (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA plm: slurm (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA filem: rsh (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               MCA errmgr: default (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA ess: env (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA ess: hnp (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA ess: singleton (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA ess: slave (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA ess: slurm (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA ess: slurmd (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA ess: tool (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              MCA grpcomm: hier (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             MCA notifier: command (MCA v2.0, API v1.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             MCA notifier: smtp (MCA v2.0, API v1.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             MCA notifier: syslog (MCA v2.0, API v1.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is STRICTLY PROHIBITED. If you have received this message in error, please notify us immediately by calling (310) 423-6428 and destroy the related message. Thank You for your cooperation. _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24815.php">http://www.open-mpi.org/community/lists/users/2014/07/24815.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is STRICTLY PROHIBITED. If you have received this message in error, please notify us immediately by calling (310) 423-6428 and destroy the related message. Thank You for your cooperation. _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24817.php">http://www.open-mpi.org/community/lists/users/2014/07/24817.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is STRICTLY PROHIBITED. If you have received this message in error, please notify us immediately by calling (310) 423-6428 and destroy the related message. Thank You for your cooperation. _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24819.php">http://www.open-mpi.org/community/lists/users/2014/07/24819.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is STRICTLY PROHIBITED. If you have received this message in error, please notify us immediately by calling (310) 423-6428 and destroy the related message. Thank You for your cooperation. _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24832.php">http://www.open-mpi.org/community/lists/users/2014/07/24832.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is STRICTLY PROHIBITED. If you have received this message in error, please notify us immediately by calling (310) 423-6428 and destroy the related message. Thank You for your cooperation.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24852.php">http://www.open-mpi.org/community/lists/users/2014/07/24852.php</a>
</span><br>
<p><p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24853.php">http://www.open-mpi.org/community/lists/users/2014/07/24853.php</a>
IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is STRICTLY PROHIBITED. If you have received this message in error, please notify us immediately by calling (310) 423-6428 and destroy the related message. Thank You for your cooperation.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24951.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mpirun 1.5.4  problems when request &gt; 28 slots"</a>
<li><strong>Previous message:</strong> <a href="24949.php">Kawashima, Takahiro: "Re: [OMPI users] [OMPI devel] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/07/24853.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mpirun 1.5.4  problems when request &gt; 28 slots"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24951.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mpirun 1.5.4  problems when request &gt; 28 slots"</a>
<li><strong>Reply:</strong> <a href="24951.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mpirun 1.5.4  problems when request &gt; 28 slots"</a>
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
