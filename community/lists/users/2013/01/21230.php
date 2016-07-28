<?
$subject_val = "Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2	with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 25 21:17:33 2013" -->
<!-- isoreceived="20130126021733" -->
<!-- sent="Fri, 25 Jan 2013 18:17:25 -0800" -->
<!-- isosent="20130126021725" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2	with OpenMPI" -->
<!-- id="991C018B-C4CC-4680-8244-CED71C071368_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="009017CD69F590478F7063E1C082325823BB5CE7_at_HKNPRD0111MB375.apcprd01.prod.exchangelabs.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2	with OpenMPI<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-25 21:17:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21231.php">#YEO JINGJIE#: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos	6.2	with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="21229.php">#YEO JINGJIE#: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2	with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="21229.php">#YEO JINGJIE#: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2	with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21231.php">#YEO JINGJIE#: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos	6.2	with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="21231.php">#YEO JINGJIE#: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos	6.2	with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...looks like it was built with Slurm support - is your cluster running Slurm? Do you see an &quot;srun&quot; command - e.g., if you do &quot;which srun&quot;, what do you get?
<br>
<p>You should also do an &quot;ls -R /usr/lib64/openmpi&quot; and see what modules were installed. Send that along and let's see why it didn't find anything.
<br>
<p><p>On Jan 25, 2013, at 6:05 PM, #YEO JINGJIE# &lt;JYEO1_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Yes sir here it is:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                  Package: Open MPI mockbuild_at_[hidden]
</span><br>
<span class="quotelev1">&gt;                           Distribution
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.5.4
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r25060
</span><br>
<span class="quotelev1">&gt;    Open MPI release date: Aug 18, 2011
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.5.4
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r25060
</span><br>
<span class="quotelev1">&gt;    Open RTE release date: Aug 18, 2011
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.5.4
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r25060
</span><br>
<span class="quotelev1">&gt;        OPAL release date: Aug 18, 2011
</span><br>
<span class="quotelev1">&gt;             Ident string: 1.5.4
</span><br>
<span class="quotelev1">&gt;                   Prefix: /usr/lib64/openmpi
</span><br>
<span class="quotelev1">&gt;  Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;           Configure host: c6b8.bsys.dev.centos.org
</span><br>
<span class="quotelev1">&gt;            Configured by: mockbuild
</span><br>
<span class="quotelev1">&gt;            Configured on: Fri Jun 22 06:42:03 UTC 2012
</span><br>
<span class="quotelev1">&gt;           Configure host: c6b8.bsys.dev.centos.org
</span><br>
<span class="quotelev1">&gt;                 Built by: mockbuild
</span><br>
<span class="quotelev1">&gt;                 Built on: Fri Jun 22 06:46:48 UTC 2012
</span><br>
<span class="quotelev1">&gt;               Built host: c6b8.bsys.dev.centos.org
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
<span class="quotelev1">&gt;               C compiler: gcc
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;   C compiler family name: GNU
</span><br>
<span class="quotelev1">&gt;       C compiler version: 4.4.6
</span><br>
<span class="quotelev1">&gt;             C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;              C profiling: yes
</span><br>
<span class="quotelev1">&gt;            C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev1">&gt;           C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;           Thread support: posix (MPI_THREAD_MULTIPLE: no, progress: no)
</span><br>
<span class="quotelev1">&gt;            Sparse Groups: no
</span><br>
<span class="quotelev1">&gt;   Internal debug support: no
</span><br>
<span class="quotelev1">&gt;   MPI interface warnings: no
</span><br>
<span class="quotelev1">&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;          libltdl support: yes
</span><br>
<span class="quotelev1">&gt;    Heterogeneous support: no
</span><br>
<span class="quotelev1">&gt;  mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt;          MPI I/O support: yes
</span><br>
<span class="quotelev1">&gt;        MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev1">&gt;      Symbol vis. support: yes
</span><br>
<span class="quotelev1">&gt;           MPI extensions: affinity example
</span><br>
<span class="quotelev1">&gt;    FT Checkpoint support: no (checkpoint thread: no)
</span><br>
<span class="quotelev1">&gt;   MPI_MAX_PROCESSOR_NAME: 256
</span><br>
<span class="quotelev1">&gt;     MPI_MAX_ERROR_STRING: 256
</span><br>
<span class="quotelev1">&gt;      MPI_MAX_OBJECT_NAME: 64
</span><br>
<span class="quotelev1">&gt;         MPI_MAX_INFO_KEY: 36
</span><br>
<span class="quotelev1">&gt;         MPI_MAX_INFO_VAL: 256
</span><br>
<span class="quotelev1">&gt;        MPI_MAX_PORT_NAME: 1024
</span><br>
<span class="quotelev1">&gt;   MPI_MAX_DATAREP_STRING: 128
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;           MCA memchecker: valgrind (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;               MCA memory: linux (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: hwloc (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                MCA carto: auto_detect (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                MCA carto: file (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: libnuma (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                MCA timer: linux (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: env (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: config (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                  MCA dpm: orte (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;               MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: basic (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: basic (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: inter (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: self (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sm (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sync (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: tuned (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: fake (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: sm (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: bfo (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: csum (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: v (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: r2 (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: vma (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: ofud (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: openib (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: self (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: sm (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: tcp (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: unity (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: rdma (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: hnp (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: orted (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: tool (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: tcp (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                 MCA odls: default (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: cm (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: loadleveler (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: slurm (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: load_balance (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: resilient (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: topo (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: oob (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;               MCA routed: binomial (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;               MCA routed: cm (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;               MCA routed: direct (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;               MCA routed: linear (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;               MCA routed: radix (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;               MCA routed: slave (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                  MCA plm: rsh (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                  MCA plm: rshd (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                  MCA plm: slurm (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                MCA filem: rsh (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: default (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: env (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: hnp (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: singleton (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: slave (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: slurm (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: slurmd (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: tool (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;              MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;              MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;              MCA grpcomm: hier (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;             MCA notifier: command (MCA v2.0, API v1.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;             MCA notifier: smtp (MCA v2.0, API v1.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;             MCA notifier: syslog (MCA v2.0, API v1.0, Component v1.5.4)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Jingjie Yeo
</span><br>
<span class="quotelev1">&gt; Ph.D. Student
</span><br>
<span class="quotelev1">&gt; School of Mechanical and Aerospace Engineering
</span><br>
<span class="quotelev1">&gt; Nanyang Technological University, Singapore
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Saturday, 26 January, 2013 9:58:04 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2 with OpenMPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Groan - I hate these bundled installs :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you do &quot;ompi_info&quot;, what does it tell you? Could you please send it along?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 25, 2013, at 5:51 PM, #YEO JINGJIE# &lt;JYEO1_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I tried to follow the installation instructions over here:
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://amusecode.org/doc/install/install-prerequisites-redhat.html">http://amusecode.org/doc/install/install-prerequisites-redhat.html</a>
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; And I am using bash and yum.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Jingjie Yeo
</span><br>
<span class="quotelev2">&gt;&gt; Ph.D. Student
</span><br>
<span class="quotelev2">&gt;&gt; School of Mechanical and Aerospace Engineering
</span><br>
<span class="quotelev2">&gt;&gt; Nanyang Technological University, Singapore
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21230/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21231.php">#YEO JINGJIE#: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos	6.2	with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="21229.php">#YEO JINGJIE#: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2	with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="21229.php">#YEO JINGJIE#: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2	with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21231.php">#YEO JINGJIE#: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos	6.2	with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="21231.php">#YEO JINGJIE#: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos	6.2	with OpenMPI"</a>
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
