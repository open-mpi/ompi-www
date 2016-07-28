<?
$subject_val = "Re: [OMPI users] users Digest, Vol 885, Issue 2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  1 13:48:21 2008" -->
<!-- isoreceived="20080501174821" -->
<!-- sent="Thu, 01 May 2008 13:48:14 -0400" -->
<!-- isosent="20080501174814" -->
<!-- name="Ryan Buckley ; 21426" -->
<!-- email="rbuckley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 885, Issue 2" -->
<!-- id="1209664094.6518.43.camel_at_localhost" -->
<!-- inreplyto="mailman.3748.1209657763.5420.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] users Digest, Vol 885, Issue 2<br>
<strong>From:</strong> Ryan Buckley ; 21426 (<em>rbuckley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-01 13:48:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5590.php">Linwei Wang: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>Previous message:</strong> <a href="5588.php">Doug Reeder: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The problem is that when running over InfiniBand the application hangs
<br>
on the call to MPI_Init.
<br>
<p>Thanks, 
<br>
<p>Ryan
<br>
<p><p>On Thu, 2008-05-01 at 12:02 -0400, users-request_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev1">&gt; 	users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev1">&gt; 	<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev1">&gt; 	users-request_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev1">&gt; 	users-owner_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev1">&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Today's Topics:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    1. Running Hetergenous MPI Application Over Infiniband
</span><br>
<span class="quotelev1">&gt;       (Ryan Buckley ; 21426)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Thu, 01 May 2008 12:02:01 -0400
</span><br>
<span class="quotelev1">&gt; From: &quot;Ryan Buckley ; 21426&quot; &lt;rbuckley_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Running Hetergenous MPI Application Over
</span><br>
<span class="quotelev1">&gt; 	Infiniband
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;1209657721.6518.28.camel_at_localhost&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to run a simple Hello World MPI application in a
</span><br>
<span class="quotelev1">&gt; heterogeneous environment.  The machines include 1 x86 machine with a
</span><br>
<span class="quotelev1">&gt; standard 1Gb ethernet connection and 2 ppc machines with standard 1Gb
</span><br>
<span class="quotelev1">&gt; ethernet as well as a 10Gb ethernet (Infiniband) switch between the two.
</span><br>
<span class="quotelev1">&gt; The Hello World program is the same hello_c.c that is included in the
</span><br>
<span class="quotelev1">&gt; examples directory of the Open MPI installation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The goal is that I would like to run heterogeneous applications between
</span><br>
<span class="quotelev1">&gt; the three aforementioned machines in the following manner:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	The x86 machine will use tcp to communicate to the 2 ppc machines,
</span><br>
<span class="quotelev1">&gt; while the ppc machines will communicate with one another via the 10GbE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		x86 &lt;--tcp--&gt; ppc_1
</span><br>
<span class="quotelev1">&gt; 		x86 &lt;--tcp--&gt; ppc_2
</span><br>
<span class="quotelev1">&gt; 		ppc1 &lt;--openib--&gt; ppc_2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am currently using a machfile set up as follows,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # cat machfile
</span><br>
<span class="quotelev1">&gt; &lt;ppc_host_1&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ppc_host_2&gt;
</span><br>
<span class="quotelev1">&gt; &lt;x86_host&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In addition I am using an appfile set up as follows, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # cat appfile
</span><br>
<span class="quotelev1">&gt; -np 1 --hostfile machfile --host &lt;ppc_host_1&gt; --mca btl
</span><br>
<span class="quotelev1">&gt; sm,self,tcp,openib /path/to/ppc/openmpi-1.2.5/examples/hello
</span><br>
<span class="quotelev1">&gt; -np 1 --hostfile machfile --host &lt;ppc_host_2&gt; --mca btl
</span><br>
<span class="quotelev1">&gt; sm,self,tcp,openib /path/to/ppc/openmpi-1.2.5/examples/hello
</span><br>
<span class="quotelev1">&gt; -np 1 --hostfile machfile --host &lt;x86_host&gt; --mca btl
</span><br>
<span class="quotelev1">&gt; sm,self,tcp /path/to/x86/openmpi-1.2.5/examples/hello
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am running on the command line via
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # mpirun --app appfile
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've also attached the output from 'ompi_info --all' from all machines.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any suggestions would be much appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ryan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.2.5
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r16989
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.2.5
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r16989
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.2.5
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r16989
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: execinfo (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;               MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                MCA timer: linux (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: env (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: config (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: basic (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: self (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                   MCA io: romio (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: rdma (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: self (MCA v1.0, API v1.0.1, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: unity (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: null (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: replica (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: proxy (MCA v1.0, API v2.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: replica (MCA v1.0, API v2.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: dash_host (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: localhost (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: gridengine (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: slurm (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: hostfile (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: resfile (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: round_robin (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: gridengine (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: slurm (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: env (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: singleton (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: slurm (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                   Prefix: /h/rbuckley/usr/linux_x86_64
</span><br>
<span class="quotelev1">&gt;                   Bindir: /h/rbuckley/usr/linux_x86_64/bin
</span><br>
<span class="quotelev1">&gt;                   Libdir: /h/rbuckley/usr/linux_x86_64/lib
</span><br>
<span class="quotelev1">&gt;                   Incdir: /h/rbuckley/usr/linux_x86_64/include
</span><br>
<span class="quotelev1">&gt;                Pkglibdir: /h/rbuckley/usr/linux_x86_64/lib/openmpi
</span><br>
<span class="quotelev1">&gt;               Sysconfdir: /h/rbuckley/usr/linux_x86_64/etc
</span><br>
<span class="quotelev1">&gt;  Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;            Configured by: rbuckley
</span><br>
<span class="quotelev1">&gt;            Configured on: Thu Apr  3 11:48:40 EDT 2008
</span><br>
<span class="quotelev1">&gt;           Configure host: 1usrv
</span><br>
<span class="quotelev1">&gt;                 Built by: rbuckley
</span><br>
<span class="quotelev1">&gt;                 Built on: Thu Apr  3 12:05:09 EDT 2008
</span><br>
<span class="quotelev1">&gt;               Built host: 1usrv
</span><br>
<span class="quotelev1">&gt;               C bindings: yes
</span><br>
<span class="quotelev1">&gt;             C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;       Fortran77 bindings: no
</span><br>
<span class="quotelev1">&gt;       Fortran90 bindings: no
</span><br>
<span class="quotelev1">&gt;  Fortran90 bindings size: na
</span><br>
<span class="quotelev1">&gt;               C compiler: gcc
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;              C char size: 1
</span><br>
<span class="quotelev1">&gt;              C bool size: 1
</span><br>
<span class="quotelev1">&gt;             C short size: 2
</span><br>
<span class="quotelev1">&gt;               C int size: 4
</span><br>
<span class="quotelev1">&gt;              C long size: 8
</span><br>
<span class="quotelev1">&gt;             C float size: 4
</span><br>
<span class="quotelev1">&gt;            C double size: 8
</span><br>
<span class="quotelev1">&gt;           C pointer size: 8
</span><br>
<span class="quotelev1">&gt;             C char align: 1
</span><br>
<span class="quotelev1">&gt;             C bool align: 1
</span><br>
<span class="quotelev1">&gt;              C int align: 4
</span><br>
<span class="quotelev1">&gt;            C float align: 4
</span><br>
<span class="quotelev1">&gt;           C double align: 8
</span><br>
<span class="quotelev1">&gt;             C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: none
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: none
</span><br>
<span class="quotelev1">&gt;        Fort integer size: 4
</span><br>
<span class="quotelev1">&gt;        Fort logical size: 4
</span><br>
<span class="quotelev1">&gt;  Fort logical value true: 0
</span><br>
<span class="quotelev1">&gt;           Fort real size: skipped
</span><br>
<span class="quotelev1">&gt;       Fort dbl prec size: skipped
</span><br>
<span class="quotelev1">&gt;           Fort cplx size: skipped
</span><br>
<span class="quotelev1">&gt;       Fort dbl cplx size: skipped
</span><br>
<span class="quotelev1">&gt;       Fort integer align: skipped
</span><br>
<span class="quotelev1">&gt;          Fort real align: skipped
</span><br>
<span class="quotelev1">&gt;      Fort dbl prec align: skipped
</span><br>
<span class="quotelev1">&gt;          Fort cplx align: skipped
</span><br>
<span class="quotelev1">&gt;      Fort dbl cplx align: skipped
</span><br>
<span class="quotelev1">&gt;              C profiling: yes
</span><br>
<span class="quotelev1">&gt;            C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 profiling: no
</span><br>
<span class="quotelev1">&gt;      Fortran90 profiling: no
</span><br>
<span class="quotelev1">&gt;           C++ exceptions: yes
</span><br>
<span class="quotelev1">&gt;           Thread support: posix (mpi: yes, progress: no)
</span><br>
<span class="quotelev1">&gt;             Build CFLAGS: -O3 -DNDEBUG -m64 -Wall -Wundef -Wno-long-long -Wsign-compare -Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic -Werror-implicit-function-declaration -finline-functions -fno-strict-aliasing  -pthread
</span><br>
<span class="quotelev1">&gt;           Build CXXFLAGS: -O3 -DNDEBUG -m64 -Wall -Wundef -Wno-long-long -finline-functions -fexceptions -pthread
</span><br>
<span class="quotelev1">&gt;             Build FFLAGS: -m64 
</span><br>
<span class="quotelev1">&gt;            Build FCFLAGS: -m64
</span><br>
<span class="quotelev1">&gt;            Build LDFLAGS: -export-dynamic  -fexceptions 
</span><br>
<span class="quotelev1">&gt;               Build LIBS: -lnsl -lutil  -lm 
</span><br>
<span class="quotelev1">&gt;     Wrapper extra CFLAGS: -pthread 
</span><br>
<span class="quotelev1">&gt;   Wrapper extra CXXFLAGS: -fexceptions -pthread 
</span><br>
<span class="quotelev1">&gt;     Wrapper extra FFLAGS:  
</span><br>
<span class="quotelev1">&gt;    Wrapper extra FCFLAGS:  
</span><br>
<span class="quotelev1">&gt;    Wrapper extra LDFLAGS:     
</span><br>
<span class="quotelev1">&gt;       Wrapper extra LIBS: -lrt  -ldl   -Wl,--export-dynamic -lnsl -lutil -lm -ldl 
</span><br>
<span class="quotelev1">&gt;   Internal debug support: no
</span><br>
<span class="quotelev1">&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: yes
</span><br>
<span class="quotelev1">&gt; Memory debugging support: yes
</span><br>
<span class="quotelev1">&gt;          libltdl support: yes
</span><br>
<span class="quotelev1">&gt;    Heterogeneous support: yes
</span><br>
<span class="quotelev1">&gt;  mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_param_files&quot; (current value: &quot;/h/rbuckley/.openmpi/mca-params.conf:/h/rbuckley/usr/linux_x86_64/etc/openmpi-mca-params.conf&quot;)
</span><br>
<span class="quotelev1">&gt;                           Path for MCA configuration files containing default parameter values
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_component_path&quot; (current value: &quot;/h/rbuckley/usr/linux_x86_64/lib/openmpi:/h/rbuckley/.openmpi/components&quot;)
</span><br>
<span class="quotelev1">&gt;                           Path where to look for Open MPI and ORTE components
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_verbose&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Top-level verbosity parameter
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_component_show_load_errors&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to show errors for components that failed to load or not
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_component_disable_dlopen&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to attempt to disable opening dynamic components or not
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_param_check&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether you want MPI API parameters checked at run-time or not.  Possible values are 0 (no checking) and 1 (perform checking at run-time)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_yield_when_idle&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Yield the processor when waiting for MPI communication (for MPI processes, will default to 1 when oversubscribing nodes)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_event_tick_rate&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                           How often to progress TCP communications (0 = never, otherwise specified in microseconds)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_show_handle_leaks&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether MPI_FINALIZE shows all MPI handles that were not freed or not
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_no_free_handles&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to actually free MPI objects when their handles are freed
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_show_mca_params&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to show all MCA parameter value during MPI_INIT or not (good for reproducability of MPI jobs)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_show_mca_params_file&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           If mpi_show_mca_params is true, setting this string to a valid filename tells Open MPI to dump all the MCA parameter values into a file suitable for reading via the mca_param_files parameter (good for reproducability of MPI jobs)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_paffinity_alone&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, assume that this job is the only (set of) process(es) running on each node and bind processes to processors, starting with processor ID 0
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_keep_peer_hostnames&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, save the string hostnames of all MPI peer processes (mostly for error / debugging output messages).  This can add quite a bit of memory usage to each MPI process.
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_abort_delay&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, print out an identifying message when MPI_ABORT is invoked (hostname, PID of the process that called MPI_ABORT) and delay for that many seconds before exiting (a negative delay value means to never abort).  This allows attaching of a debugger before quitting the job.
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_abort_print_stack&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, print out a stack trace when MPI_ABORT is invoked
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_preconnect_all&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to force MPI processes to create connections / warmup with *all* peers during MPI_INIT (vs. making connections lazily -- upon the first MPI traffic between each process peer pair)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_preconnect_oob&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to force MPI processes to fully wire-up the OOB system between MPI processes.
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_leave_pinned&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to use the &quot;leave pinned&quot; protocol or not.  Enabling this setting can help bandwidth performance when repeatedly sending and receiving large messages with the same buffers over RDMA-based networks.
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_leave_pinned_pipeline&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to use the &quot;leave pinned pipeline&quot; protocol or not.
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_warn_if_thread_multiple&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to show a warning when MPI_THREAD_MULTIPLE is used or not.
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_warn_if_progress_threads&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to show a warning when progress threads are used or not.
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Top-level ORTE debug switch
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_no_daemonize&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to properly daemonize the ORTE daemons or not
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_base_user_debugger&quot; (current value: &quot;totalview @mpirun@ -a @mpirun_args@ : ddt -n @np@ -start @executable@ @executable_argv@ @single_app@ : fxp @mpirun@ -a @mpirun_args@&quot;)
</span><br>
<span class="quotelev1">&gt;                           Sequence of user-level debuggers to search for in orterun
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_abort_timeout&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Time to wait [in seconds] before giving up on aborting an ORTE operation
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_timing&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Request that critical timing loops be measured
</span><br>
<span class="quotelev1">&gt;                 MCA opal: parameter &quot;opal_signal&quot; (current value: &quot;6,7,8,11&quot;)
</span><br>
<span class="quotelev1">&gt;                           If a signal is received, display the stack trace frame
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: parameter &quot;backtrace&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the backtrace framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: parameter &quot;backtrace_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the backtrace framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: parameter &quot;backtrace_execinfo_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA memory: parameter &quot;memory&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the memory framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA memory: parameter &quot;memory_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the memory framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;               MCA memory: parameter &quot;memory_ptmalloc2_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: parameter &quot;paffinity_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level of the paffinity framework
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: parameter &quot;paffinity&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the paffinity framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: parameter &quot;paffinity_linux_priority&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the linux paffinity component
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: information &quot;paffinity_linux_have_cpu_set_t&quot; (value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether this component was compiled on a system with the type cpu_set_t or not (1 = yes, 0 = no)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: information &quot;paffinity_linux_CPU_ZERO_ok&quot; (value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether this component was compiled on a system where CPU_ZERO() is functional or broken (1 = functional, 0 = broken/not available)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: information &quot;paffinity_linux_sched_setaffinity_num_params&quot; (value: &quot;3&quot;)
</span><br>
<span class="quotelev1">&gt;                           The number of parameters that sched_set_affinity() takes on the machine where this component was compiled
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: parameter &quot;maffinity_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level of the maffinity framework
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: parameter &quot;maffinity&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the maffinity framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: parameter &quot;maffinity_first_use_priority&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the first_use maffinity component
</span><br>
<span class="quotelev1">&gt;                MCA timer: parameter &quot;timer&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the timer framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA timer: parameter &quot;timer_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the timer framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                MCA timer: parameter &quot;timer_linux_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: parameter &quot;allocator&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the allocator framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: parameter &quot;allocator_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the allocator framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: parameter &quot;allocator_basic_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: parameter &quot;allocator_bucket_num_buckets&quot; (current value: &quot;30&quot;)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: parameter &quot;allocator_bucket_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the coll framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the coll framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_basic_priority&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the basic coll component
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_basic_crossover&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                           Minimum number of processes in a communicator before using the logarithmic algorithms
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_self_priority&quot; (current value: &quot;75&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the sm coll component
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_control_size&quot; (current value: &quot;4096&quot;)
</span><br>
<span class="quotelev1">&gt;                           Length of the control data -- should usually be either the length of a cache line on most SMPs, or the size of a page on machines that support direct memory affinity page placement (in bytes)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_bootstrap_filename&quot; (current value: &quot;shared_mem_sm_bootstrap&quot;)
</span><br>
<span class="quotelev1">&gt;                           Filename (in the Open MPI session directory) of the coll sm component bootstrap rendezvous mmap file
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_bootstrap_num_segments&quot; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                           Number of segments in the bootstrap file
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_fragment_size&quot; (current value: &quot;8192&quot;)
</span><br>
<span class="quotelev1">&gt;                           Fragment size (in bytes) used for passing data through shared memory (will be rounded up to the nearest control_size size)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_mpool&quot; (current value: &quot;sm&quot;)
</span><br>
<span class="quotelev1">&gt;                           Name of the mpool component to use
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_comm_in_use_flags&quot; (current value: &quot;2&quot;)
</span><br>
<span class="quotelev1">&gt;                           Number of &quot;in use&quot; flags, used to mark a message passing area segment as currently being used or not (must be &gt;= 2 and &lt;= comm_num_segments)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_comm_num_segments&quot; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                           Number of segments in each communicator's shared memory message passing area (must be &gt;= 2, and must be a multiple of comm_in_use_flags)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_tree_degree&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                           Degree of the tree for tree-based operations (must be =&gt; 1 and &lt;= min(control_size, 255))
</span><br>
<span class="quotelev1">&gt;                 MCA coll: information &quot;coll_sm_shared_mem_used_bootstrap&quot; (value: &quot;216&quot;)
</span><br>
<span class="quotelev1">&gt;                           Amount of shared memory used in the shared memory bootstrap area (in bytes)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_info_num_procs&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                           Number of processes to use for the calculation of the shared_mem_size MCA information parameter (must be =&gt; 2)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: information &quot;coll_sm_shared_mem_used_data&quot; (value: &quot;548864&quot;)
</span><br>
<span class="quotelev1">&gt;                           Amount of shared memory used in the shared memory data area for info_num_procs processes (in bytes)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_priority&quot; (current value: &quot;30&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the tuned coll component
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_pre_allocate_memory_comm_size_limit&quot; (current value: &quot;32768&quot;)
</span><br>
<span class="quotelev1">&gt;                           Size of communicator were we stop pre-allocating memory for the fixed internal buffer used for message requests etc that is hung off the communicator data segment. I.e. if you have a 100'000 nodes you might not want to pre-allocate 200'000 request handle slots per communicator instance!
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_init_tree_fanout&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                           Inital fanout used in the tree topologies for each communicator. This is only an initial guess, if a tuned collective needs a different fanout for an operation, it build it dynamically. This parameter is only for the first guess and might save a little time
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_init_chain_fanout&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                           Inital fanout used in the chain (fanout followed by pipeline) topologies for each communicator. This is only an initial guess, if a tuned collective needs a different fanout for an operation, it build it dynamically. This parameter is only for the first guess and might save a little time
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_use_dynamic_rules&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Switch used to decide if we use static (compiled/if statements) or dynamic (built at runtime) decision function rules
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_base_freelist_initial_size&quot; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev1">&gt;                           Initial MPI-2 IO request freelist size
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_base_freelist_max_size&quot; (current value: &quot;64&quot;)
</span><br>
<span class="quotelev1">&gt;                           Max size of the MPI-2 IO request freelist
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_base_freelist_increment&quot; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev1">&gt;                           Increment size of the MPI-2 IO request freelist
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the io framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the io framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_romio_priority&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the io romio component
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_romio_delete_priority&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Delete priority of the io romio component
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_romio_enable_parallel_optimizations&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable set of Open MPI-added options to improve collective file i/o performance
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the mpool framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the mpool framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_rdma_rcache_name&quot; (current value: &quot;vma&quot;)
</span><br>
<span class="quotelev1">&gt;                           The name of the registration cache the mpool should use
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_rdma_rcache_size_limit&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           the maximum size of registration cache in bytes. 0 is unlimited (default 0)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_rdma_print_stats&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           print pool usage statistics at the end of the run
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_rdma_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_sm_allocator&quot; (current value: &quot;bucket&quot;)
</span><br>
<span class="quotelev1">&gt;                           Name of allocator component to use with sm mpool
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_sm_max_size&quot; (current value: &quot;536870912&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum size of the sm mpool shared memory file
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_sm_min_size&quot; (current value: &quot;134217728&quot;)
</span><br>
<span class="quotelev1">&gt;                           Minimum size of the sm mpool shared memory file
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_sm_per_peer_size&quot; (current value: &quot;33554432&quot;)
</span><br>
<span class="quotelev1">&gt;                           Size (in bytes) to allocate per local peer in the sm mpool shared memory file, bounded by min_size and max_size
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_sm_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable verbose output for mpool sm component
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_sm_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_base_use_mem_hooks&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           use memory hooks for deregistering freed memory
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_use_mem_hooks&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           (deprecated, use mpool_base_use_mem_hooks)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_base_disable_sbrk&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           use mallopt to override calling sbrk (doesn't return memory to OS!)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_disable_sbrk&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           (deprecated, use mca_mpool_base_disable_sbrk)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the pml framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the pml framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_cm_free_list_num&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                           Initial size of request free lists
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_cm_free_list_max&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum size of request free lists
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_cm_free_list_inc&quot; (current value: &quot;64&quot;)
</span><br>
<span class="quotelev1">&gt;                           Number of elements to add when growing request free lists
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_cm_priority&quot; (current value: &quot;30&quot;)
</span><br>
<span class="quotelev1">&gt;                           CM PML selection priority
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_free_list_num&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_free_list_max&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_free_list_inc&quot; (current value: &quot;64&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_priority&quot; (current value: &quot;20&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_eager_limit&quot; (current value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_send_pipeline_depth&quot; (current value: &quot;3&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_recv_pipeline_depth&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: parameter &quot;bml&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the bml framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: parameter &quot;bml_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the bml framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: parameter &quot;bml_r2_show_unreach_errors&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Show error message when procs are unreachable
</span><br>
<span class="quotelev1">&gt;                  MCA bml: parameter &quot;bml_r2_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: parameter &quot;rcache&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the rcache framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: parameter &quot;rcache_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the rcache framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: parameter &quot;rcache_vma_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           If btl_base_debug is 1 standard debug is output, if &gt; 1 verbose debug is output
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the btl framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the btl framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_free_list_num&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Number of fragments by default
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_free_list_max&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum number of fragments
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_free_list_inc&quot; (current value: &quot;32&quot;)
</span><br>
<span class="quotelev1">&gt;                           Increment by this number of fragments
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_eager_limit&quot; (current value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                           Eager size fragmeng (before the rendez-vous ptotocol)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_min_send_size&quot; (current value: &quot;262144&quot;)
</span><br>
<span class="quotelev1">&gt;                           Minimum fragment size after the rendez-vous
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_max_send_size&quot; (current value: &quot;262144&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum fragment size after the rendez-vous
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_min_rdma_size&quot; (current value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum fragment size for the RDMA transfer
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_max_rdma_size&quot; (current value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum fragment size for the RDMA transfer
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_exclusivity&quot; (current value: &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;                           Device exclusivity
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_flags&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Active behavior flags
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_free_list_num&quot; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_free_list_max&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_free_list_inc&quot; (current value: &quot;64&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_exclusivity&quot; (current value: &quot;65535&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_latency&quot; (current value: &quot;100&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_max_procs&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_sm_extra_procs&quot; (current value: &quot;2&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_mpool&quot; (current value: &quot;sm&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_eager_limit&quot; (current value: &quot;4096&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_max_frag_size&quot; (current value: &quot;32768&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_size_of_cb_queue&quot; (current value: &quot;128&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_cb_lazy_free_freq&quot; (current value: &quot;120&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_if_include&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_if_exclude&quot; (current value: &quot;lo&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_free_list_num&quot; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_free_list_max&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_free_list_inc&quot; (current value: &quot;32&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_sndbuf&quot; (current value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_rcvbuf&quot; (current value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_endpoint_cache&quot; (current value: &quot;30720&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_exclusivity&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_eager_limit&quot; (current value: &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_min_send_size&quot; (current value: &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_max_send_size&quot; (current value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_min_rdma_size&quot; (current value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_max_rdma_size&quot; (current value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_flags&quot; (current value: &quot;122&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_include&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_exclude&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_warn_component_unused&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           This parameter is used to turn on warning messages when certain NICs are not used
</span><br>
<span class="quotelev1">&gt;                  MCA mtl: parameter &quot;mtl&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the mtl framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA mtl: parameter &quot;mtl_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the mtl framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: parameter &quot;topo&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the topo framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: parameter &quot;topo_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the topo framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: parameter &quot;osc&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the osc framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: parameter &quot;osc_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the osc framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: parameter &quot;osc_pt2pt_no_locks&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable optimizations available only if MPI_LOCK is not used.
</span><br>
<span class="quotelev1">&gt;                  MCA osc: parameter &quot;osc_pt2pt_eager_limit&quot; (current value: &quot;16384&quot;)
</span><br>
<span class="quotelev1">&gt;                           Max size of eagerly sent data
</span><br>
<span class="quotelev1">&gt;                  MCA osc: parameter &quot;osc_pt2pt_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the errmgr framework
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the errmgr framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr_hnp_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr_hnp_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr_orted_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr_orted_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr_proxy_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr_proxy_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the gpr framework
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_base_maxsize&quot; (current value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_base_blocksize&quot; (current value: &quot;512&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the gpr framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_null_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_proxy_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_proxy_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_replica_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_replica_isolate&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_replica_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof_base_window_size&quot; (current value: &quot;4096&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof_base_service&quot; (current value: &quot;0.0.0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the iof framework
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the iof framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof_proxy_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof_svc_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the ns framework
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the ns framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_proxy_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_proxy_maxsize&quot; (current value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_proxy_blocksize&quot; (current value: &quot;512&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_proxy_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_replica_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_replica_isolate&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_replica_maxsize&quot; (current value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_replica_blocksize&quot; (current value: &quot;512&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_replica_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the oob framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the oob framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_peer_limit&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_peer_retries&quot; (current value: &quot;60&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_sndbuf&quot; (current value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_rcvbuf&quot; (current value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_if_include&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Comma-delimited list of TCP interfaces to use
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_if_exclude&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Comma-delimited list of TCP interfaces to exclude
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_connect_sleep&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable (1) / disable (0) random sleep for connection wireup
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_listen_mode&quot; (current value: &quot;event&quot;)
</span><br>
<span class="quotelev1">&gt;                           Mode for HNP to accept incoming connections: event, listen_thread
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_listen_thread_max_queue&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           High water mark for queued accepted socket list size
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_listen_thread_max_time&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum amount of time (in milliseconds) to wait between processing accepted socket list
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_accept_spin_count&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Number of times to let accept return EWOULDBLOCK before updating accepted socket list
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_base_include&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Components to include for oob framework selection
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_base_exclude&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Components to exclude for oob framework selection
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable debugging for the RAS framework (nonzero = enabled)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_dash_host_priority&quot; (current value: &quot;5&quot;)
</span><br>
<span class="quotelev1">&gt;                           Selection priority for the dash_host RAS component
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_localhost_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Selection priority for the localhost RAS component
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_gridengine_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable debugging output for the gridengine ras component
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_gridengine_priority&quot; (current value: &quot;100&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the gridengine ras component
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_gridengine_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable verbose output for the gridengine ras component
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_gridengine_show_jobid&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Show the JOB_ID of the Grid Engine job
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_slurm_priority&quot; (current value: &quot;75&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the slurm ras component
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the rds framework
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds_hostfile_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Toggle debug output for hostfile RDS component
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds_hostfile_path&quot; (current value: &quot;/h/rbuckley/usr/linux_x86_64/etc/openmpi-default-hostfile&quot;)
</span><br>
<span class="quotelev1">&gt;                           ORTE Host filename
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds_hostfile_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds_proxy_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds_resfile_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Toggle debug output for resfile RDS component
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds_resfile_name&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           ORTE Resource filename
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds_resfile_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the rmaps framework
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_schedule_policy&quot; (current value: &quot;unspec&quot;)
</span><br>
<span class="quotelev1">&gt;                           Scheduling Policy for RMAPS. [slot | node]
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_pernode&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Launch one ppn as directed
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_n_pernode&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Launch n procs/node
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_no_schedule_local&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           If false, allow scheduling MPI applications on the same node as mpirun (default).  If true, do not schedule any MPI applications on the same node as mpirun
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_no_oversubscribe&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           If true, then do not allow oversubscription of nodes - mpirun will return an error if there aren't enough nodes to launch all processes without oversubscribing
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_display_map&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to display the process map after it is computed
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the rmaps framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_round_robin_debug&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Toggle debug output for Round Robin RMAPS component
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_round_robin_priority&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Selection priority for Round Robin RMAPS component
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: parameter &quot;rmgr_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the rmgr framework
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: parameter &quot;rmgr&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the rmgr framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: parameter &quot;rmgr_proxy_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: parameter &quot;rmgr_urm_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: parameter &quot;rml_base_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the rml famework
</span><br>
<span class="quotelev1">&gt;                  MCA rml: parameter &quot;rml&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the rml framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: parameter &quot;rml_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the rml framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: parameter &quot;rml_oob_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_base_reuse_daemons&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, reuse daemons to launch dynamically spawned processes.  If zero, do not reuse daemons (default)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the pls framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the pls framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_proxy_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_gridengine_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable debugging of gridengine pls component
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_gridengine_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable verbose output of the gridengine qrsh -inherit command
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_gridengine_priority&quot; (current value: &quot;100&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the gridengine pls component
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_gridengine_orted&quot; (current value: &quot;orted&quot;)
</span><br>
<span class="quotelev1">&gt;                           The command name that the gridengine pls component will invoke for the ORTE daemon
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether or not to enable debugging output for the rsh pls component (0 or 1)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_num_concurrent&quot; (current value: &quot;128&quot;)
</span><br>
<span class="quotelev1">&gt;                           How many pls_rsh_agent instances to invoke concurrently (must be &gt; 0)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_force_rsh&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Force the launcher to always use rsh, even for local daemons
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_orted&quot; (current value: &quot;orted&quot;)
</span><br>
<span class="quotelev1">&gt;                           The command name that the rsh pls component will invoke for the ORTE daemon
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_priority&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the rsh pls component
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_delay&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Delay (in seconds) between invocations of the remote agent, but only used when the &quot;debug&quot; MCA parameter is true, or the top-level MCA debugging is enabled (otherwise this value is ignored)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_reap&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           If set to 1, wait for all the processes to complete before exiting.  Otherwise, quit immediately -- without waiting for confirmation that all other processes in the job have completed.
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_assume_same_shell&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           If set to 1, assume that the shell on the remote node is the same as the shell on the local node.  Otherwise, probe for what the remote shell.
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_agent&quot; (current value: &quot;ssh : rsh&quot;)
</span><br>
<span class="quotelev1">&gt;                           The command used to launch executables on remote nodes (typically either &quot;ssh&quot; or &quot;rsh&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_slurm_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable debugging of slurm pls
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_slurm_priority&quot; (current value: &quot;75&quot;)
</span><br>
<span class="quotelev1">&gt;                           Default selection priority
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_slurm_orted&quot; (current value: &quot;orted&quot;)
</span><br>
<span class="quotelev1">&gt;                           Command to use to start proxy orted
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_slurm_args&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Custom arguments to srun
</span><br>
<span class="quotelev1">&gt;                  MCA sds: parameter &quot;sds&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the sds framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: parameter &quot;sds_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the sds framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: parameter &quot;sds_env_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: parameter &quot;sds_seed_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: parameter &quot;sds_singleton_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: parameter &quot;sds_pipe_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: parameter &quot;sds_slurm_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.2.5
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r16989
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.2.5
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r16989
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.2.5
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r16989
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: execinfo (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;               MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                MCA timer: linux (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: env (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: config (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: basic (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: self (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                   MCA io: romio (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: rdma (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: self (MCA v1.0, API v1.0.1, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: openib (MCA v1.0, API v1.0.1, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: unity (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: null (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: replica (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: proxy (MCA v1.0, API v2.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: replica (MCA v1.0, API v2.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: dash_host (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: localhost (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: gridengine (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: slurm (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: hostfile (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: resfile (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: round_robin (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: gridengine (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: slurm (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: env (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: singleton (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: slurm (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                   Prefix: /h/rbuckley/usr/linux_ppc64_ib/
</span><br>
<span class="quotelev1">&gt;                   Bindir: /h/rbuckley/usr/linux_ppc64_ib//bin
</span><br>
<span class="quotelev1">&gt;                   Libdir: /h/rbuckley/usr/linux_ppc64_ib//lib
</span><br>
<span class="quotelev1">&gt;                   Incdir: /h/rbuckley/usr/linux_ppc64_ib//include
</span><br>
<span class="quotelev1">&gt;                Pkglibdir: /h/rbuckley/usr/linux_ppc64_ib//lib/openmpi
</span><br>
<span class="quotelev1">&gt;               Sysconfdir: /h/rbuckley/usr/linux_ppc64_ib//etc
</span><br>
<span class="quotelev1">&gt;  Configured architecture: powerpc64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;            Configured by: rbuckley
</span><br>
<span class="quotelev1">&gt;            Configured on: Tue Apr 15 10:30:42 EDT 2008
</span><br>
<span class="quotelev1">&gt;           Configure host: nesprod1
</span><br>
<span class="quotelev1">&gt;                 Built by: rbuckley
</span><br>
<span class="quotelev1">&gt;                 Built on: Tue Apr 15 11:16:23 EDT 2008
</span><br>
<span class="quotelev1">&gt;               Built host: nesprod1
</span><br>
<span class="quotelev1">&gt;               C bindings: yes
</span><br>
<span class="quotelev1">&gt;             C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;       Fortran77 bindings: no
</span><br>
<span class="quotelev1">&gt;       Fortran90 bindings: no
</span><br>
<span class="quotelev1">&gt;  Fortran90 bindings size: na
</span><br>
<span class="quotelev1">&gt;               C compiler: gcc
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /usr/lib/ccache/gcc
</span><br>
<span class="quotelev1">&gt;              C char size: 1
</span><br>
<span class="quotelev1">&gt;              C bool size: 1
</span><br>
<span class="quotelev1">&gt;             C short size: 2
</span><br>
<span class="quotelev1">&gt;               C int size: 4
</span><br>
<span class="quotelev1">&gt;              C long size: 8
</span><br>
<span class="quotelev1">&gt;             C float size: 4
</span><br>
<span class="quotelev1">&gt;            C double size: 8
</span><br>
<span class="quotelev1">&gt;           C pointer size: 8
</span><br>
<span class="quotelev1">&gt;             C char align: 1
</span><br>
<span class="quotelev1">&gt;             C bool align: 1
</span><br>
<span class="quotelev1">&gt;              C int align: 4
</span><br>
<span class="quotelev1">&gt;            C float align: 4
</span><br>
<span class="quotelev1">&gt;           C double align: 8
</span><br>
<span class="quotelev1">&gt;             C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /usr/lib/ccache/g++
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: none
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: none
</span><br>
<span class="quotelev1">&gt;        Fort integer size: 4
</span><br>
<span class="quotelev1">&gt;        Fort logical size: 4
</span><br>
<span class="quotelev1">&gt;  Fort logical value true: 0
</span><br>
<span class="quotelev1">&gt;           Fort real size: skipped
</span><br>
<span class="quotelev1">&gt;       Fort dbl prec size: skipped
</span><br>
<span class="quotelev1">&gt;           Fort cplx size: skipped
</span><br>
<span class="quotelev1">&gt;       Fort dbl cplx size: skipped
</span><br>
<span class="quotelev1">&gt;       Fort integer align: skipped
</span><br>
<span class="quotelev1">&gt;          Fort real align: skipped
</span><br>
<span class="quotelev1">&gt;      Fort dbl prec align: skipped
</span><br>
<span class="quotelev1">&gt;          Fort cplx align: skipped
</span><br>
<span class="quotelev1">&gt;      Fort dbl cplx align: skipped
</span><br>
<span class="quotelev1">&gt;              C profiling: yes
</span><br>
<span class="quotelev1">&gt;            C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 profiling: no
</span><br>
<span class="quotelev1">&gt;      Fortran90 profiling: no
</span><br>
<span class="quotelev1">&gt;           C++ exceptions: yes
</span><br>
<span class="quotelev1">&gt;           Thread support: posix (mpi: yes, progress: no)
</span><br>
<span class="quotelev1">&gt;             Build CFLAGS: -O3 -DNDEBUG -m64 -Wall -Wundef -Wno-long-long -Wsign-compare -Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic -Werror-implicit-function-declaration -finline-functions -fno-strict-aliasing  -pthread
</span><br>
<span class="quotelev1">&gt;           Build CXXFLAGS: -O3 -DNDEBUG -m64 -Wall -Wundef -Wno-long-long -finline-functions -fexceptions -pthread
</span><br>
<span class="quotelev1">&gt;             Build FFLAGS: -m64 
</span><br>
<span class="quotelev1">&gt;            Build FCFLAGS: -m64
</span><br>
<span class="quotelev1">&gt;            Build LDFLAGS: -export-dynamic  -fexceptions 
</span><br>
<span class="quotelev1">&gt;               Build LIBS: -lnsl -lutil  -lm 
</span><br>
<span class="quotelev1">&gt;     Wrapper extra CFLAGS: -pthread 
</span><br>
<span class="quotelev1">&gt;   Wrapper extra CXXFLAGS: -fexceptions -pthread 
</span><br>
<span class="quotelev1">&gt;     Wrapper extra FFLAGS:  
</span><br>
<span class="quotelev1">&gt;    Wrapper extra FCFLAGS:  
</span><br>
<span class="quotelev1">&gt;    Wrapper extra LDFLAGS:     
</span><br>
<span class="quotelev1">&gt;       Wrapper extra LIBS: -libverbs -lrt  -ldl   -Wl,--export-dynamic -lnsl -lutil -lm -ldl 
</span><br>
<span class="quotelev1">&gt;   Internal debug support: no
</span><br>
<span class="quotelev1">&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: yes
</span><br>
<span class="quotelev1">&gt; Memory debugging support: yes
</span><br>
<span class="quotelev1">&gt;          libltdl support: yes
</span><br>
<span class="quotelev1">&gt;    Heterogeneous support: yes
</span><br>
<span class="quotelev1">&gt;  mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_param_files&quot; (current value: &quot;/h/rbuckley/.openmpi/mca-params.conf:/h/rbuckley/usr/linux_ppc64_ib//etc/openmpi-mca-params.conf&quot;)
</span><br>
<span class="quotelev1">&gt;                           Path for MCA configuration files containing default parameter values
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_component_path&quot; (current value: &quot;/h/rbuckley/usr/linux_ppc64_ib//lib/openmpi:/h/rbuckley/.openmpi/components&quot;)
</span><br>
<span class="quotelev1">&gt;                           Path where to look for Open MPI and ORTE components
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_verbose&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Top-level verbosity parameter
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_component_show_load_errors&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to show errors for components that failed to load or not
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_component_disable_dlopen&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to attempt to disable opening dynamic components or not
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_param_check&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether you want MPI API parameters checked at run-time or not.  Possible values are 0 (no checking) and 1 (perform checking at run-time)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_yield_when_idle&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Yield the processor when waiting for MPI communication (for MPI processes, will default to 1 when oversubscribing nodes)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_event_tick_rate&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                           How often to progress TCP communications (0 = never, otherwise specified in microseconds)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_show_handle_leaks&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether MPI_FINALIZE shows all MPI handles that were not freed or not
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_no_free_handles&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to actually free MPI objects when their handles are freed
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_show_mca_params&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to show all MCA parameter value during MPI_INIT or not (good for reproducability of MPI jobs)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_show_mca_params_file&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           If mpi_show_mca_params is true, setting this string to a valid filename tells Open MPI to dump all the MCA parameter values into a file suitable for reading via the mca_param_files parameter (good for reproducability of MPI jobs)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_paffinity_alone&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, assume that this job is the only (set of) process(es) running on each node and bind processes to processors, starting with processor ID 0
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_keep_peer_hostnames&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, save the string hostnames of all MPI peer processes (mostly for error / debugging output messages).  This can add quite a bit of memory usage to each MPI process.
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_abort_delay&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, print out an identifying message when MPI_ABORT is invoked (hostname, PID of the process that called MPI_ABORT) and delay for that many seconds before exiting (a negative delay value means to never abort).  This allows attaching of a debugger before quitting the job.
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_abort_print_stack&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, print out a stack trace when MPI_ABORT is invoked
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_preconnect_all&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to force MPI processes to create connections / warmup with *all* peers during MPI_INIT (vs. making connections lazily -- upon the first MPI traffic between each process peer pair)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_preconnect_oob&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to force MPI processes to fully wire-up the OOB system between MPI processes.
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_leave_pinned&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to use the &quot;leave pinned&quot; protocol or not.  Enabling this setting can help bandwidth performance when repeatedly sending and receiving large messages with the same buffers over RDMA-based networks.
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_leave_pinned_pipeline&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to use the &quot;leave pinned pipeline&quot; protocol or not.
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_warn_if_thread_multiple&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to show a warning when MPI_THREAD_MULTIPLE is used or not.
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_warn_if_progress_threads&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to show a warning when progress threads are used or not.
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Top-level ORTE debug switch
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_no_daemonize&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to properly daemonize the ORTE daemons or not
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_base_user_debugger&quot; (current value: &quot;totalview @mpirun@ -a @mpirun_args@ : ddt -n @np@ -start @executable@ @executable_argv@ @single_app@ : fxp @mpirun@ -a @mpirun_args@&quot;)
</span><br>
<span class="quotelev1">&gt;                           Sequence of user-level debuggers to search for in orterun
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_abort_timeout&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Time to wait [in seconds] before giving up on aborting an ORTE operation
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_timing&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Request that critical timing loops be measured
</span><br>
<span class="quotelev1">&gt;                 MCA opal: parameter &quot;opal_signal&quot; (current value: &quot;6,7,8,11&quot;)
</span><br>
<span class="quotelev1">&gt;                           If a signal is received, display the stack trace frame
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: parameter &quot;backtrace&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the backtrace framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: parameter &quot;backtrace_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the backtrace framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: parameter &quot;backtrace_execinfo_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA memory: parameter &quot;memory&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the memory framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA memory: parameter &quot;memory_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the memory framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;               MCA memory: parameter &quot;memory_ptmalloc2_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: parameter &quot;paffinity_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level of the paffinity framework
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: parameter &quot;paffinity&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the paffinity framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: parameter &quot;paffinity_linux_priority&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the linux paffinity component
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: information &quot;paffinity_linux_have_cpu_set_t&quot; (value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether this component was compiled on a system with the type cpu_set_t or not (1 = yes, 0 = no)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: information &quot;paffinity_linux_CPU_ZERO_ok&quot; (value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether this component was compiled on a system where CPU_ZERO() is functional or broken (1 = functional, 0 = broken/not available)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: information &quot;paffinity_linux_sched_setaffinity_num_params&quot; (value: &quot;3&quot;)
</span><br>
<span class="quotelev1">&gt;                           The number of parameters that sched_set_affinity() takes on the machine where this component was compiled
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: parameter &quot;maffinity_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level of the maffinity framework
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: parameter &quot;maffinity&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the maffinity framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: parameter &quot;maffinity_first_use_priority&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the first_use maffinity component
</span><br>
<span class="quotelev1">&gt;                MCA timer: parameter &quot;timer&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the timer framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA timer: parameter &quot;timer_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the timer framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                MCA timer: parameter &quot;timer_linux_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: parameter &quot;allocator&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the allocator framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: parameter &quot;allocator_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the allocator framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: parameter &quot;allocator_basic_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: parameter &quot;allocator_bucket_num_buckets&quot; (current value: &quot;30&quot;)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: parameter &quot;allocator_bucket_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the coll framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the coll framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_basic_priority&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the basic coll component
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_basic_crossover&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                           Minimum number of processes in a communicator before using the logarithmic algorithms
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_self_priority&quot; (current value: &quot;75&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the sm coll component
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_control_size&quot; (current value: &quot;4096&quot;)
</span><br>
<span class="quotelev1">&gt;                           Length of the control data -- should usually be either the length of a cache line on most SMPs, or the size of a page on machines that support direct memory affinity page placement (in bytes)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_bootstrap_filename&quot; (current value: &quot;shared_mem_sm_bootstrap&quot;)
</span><br>
<span class="quotelev1">&gt;                           Filename (in the Open MPI session directory) of the coll sm component bootstrap rendezvous mmap file
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_bootstrap_num_segments&quot; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                           Number of segments in the bootstrap file
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_fragment_size&quot; (current value: &quot;8192&quot;)
</span><br>
<span class="quotelev1">&gt;                           Fragment size (in bytes) used for passing data through shared memory (will be rounded up to the nearest control_size size)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_mpool&quot; (current value: &quot;sm&quot;)
</span><br>
<span class="quotelev1">&gt;                           Name of the mpool component to use
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_comm_in_use_flags&quot; (current value: &quot;2&quot;)
</span><br>
<span class="quotelev1">&gt;                           Number of &quot;in use&quot; flags, used to mark a message passing area segment as currently being used or not (must be &gt;= 2 and &lt;= comm_num_segments)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_comm_num_segments&quot; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                           Number of segments in each communicator's shared memory message passing area (must be &gt;= 2, and must be a multiple of comm_in_use_flags)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_tree_degree&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                           Degree of the tree for tree-based operations (must be =&gt; 1 and &lt;= min(control_size, 255))
</span><br>
<span class="quotelev1">&gt;                 MCA coll: information &quot;coll_sm_shared_mem_used_bootstrap&quot; (value: &quot;216&quot;)
</span><br>
<span class="quotelev1">&gt;                           Amount of shared memory used in the shared memory bootstrap area (in bytes)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_info_num_procs&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                           Number of processes to use for the calculation of the shared_mem_size MCA information parameter (must be =&gt; 2)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: information &quot;coll_sm_shared_mem_used_data&quot; (value: &quot;548864&quot;)
</span><br>
<span class="quotelev1">&gt;                           Amount of shared memory used in the shared memory data area for info_num_procs processes (in bytes)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_priority&quot; (current value: &quot;30&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the tuned coll component
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_pre_allocate_memory_comm_size_limit&quot; (current value: &quot;32768&quot;)
</span><br>
<span class="quotelev1">&gt;                           Size of communicator were we stop pre-allocating memory for the fixed internal buffer used for message requests etc that is hung off the communicator data segment. I.e. if you have a 100'000 nodes you might not want to pre-allocate 200'000 request handle slots per communicator instance!
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_init_tree_fanout&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                           Inital fanout used in the tree topologies for each communicator. This is only an initial guess, if a tuned collective needs a different fanout for an operation, it build it dynamically. This parameter is only for the first guess and might save a little time
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_init_chain_fanout&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                           Inital fanout used in the chain (fanout followed by pipeline) topologies for each communicator. This is only an initial guess, if a tuned collective needs a different fanout for an operation, it build it dynamically. This parameter is only for the first guess and might save a little time
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_use_dynamic_rules&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Switch used to decide if we use static (compiled/if statements) or dynamic (built at runtime) decision function rules
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_base_freelist_initial_size&quot; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev1">&gt;                           Initial MPI-2 IO request freelist size
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_base_freelist_max_size&quot; (current value: &quot;64&quot;)
</span><br>
<span class="quotelev1">&gt;                           Max size of the MPI-2 IO request freelist
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_base_freelist_increment&quot; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev1">&gt;                           Increment size of the MPI-2 IO request freelist
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the io framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the io framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_romio_priority&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the io romio component
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_romio_delete_priority&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Delete priority of the io romio component
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_romio_enable_parallel_optimizations&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable set of Open MPI-added options to improve collective file i/o performance
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the mpool framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the mpool framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_rdma_rcache_name&quot; (current value: &quot;vma&quot;)
</span><br>
<span class="quotelev1">&gt;                           The name of the registration cache the mpool should use
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_rdma_rcache_size_limit&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           the maximum size of registration cache in bytes. 0 is unlimited (default 0)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_rdma_print_stats&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           print pool usage statistics at the end of the run
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_rdma_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_sm_allocator&quot; (current value: &quot;bucket&quot;)
</span><br>
<span class="quotelev1">&gt;                           Name of allocator component to use with sm mpool
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_sm_max_size&quot; (current value: &quot;536870912&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum size of the sm mpool shared memory file
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_sm_min_size&quot; (current value: &quot;134217728&quot;)
</span><br>
<span class="quotelev1">&gt;                           Minimum size of the sm mpool shared memory file
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_sm_per_peer_size&quot; (current value: &quot;33554432&quot;)
</span><br>
<span class="quotelev1">&gt;                           Size (in bytes) to allocate per local peer in the sm mpool shared memory file, bounded by min_size and max_size
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_sm_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable verbose output for mpool sm component
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_sm_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_base_use_mem_hooks&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           use memory hooks for deregistering freed memory
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_use_mem_hooks&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           (deprecated, use mpool_base_use_mem_hooks)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_base_disable_sbrk&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           use mallopt to override calling sbrk (doesn't return memory to OS!)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_disable_sbrk&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           (deprecated, use mca_mpool_base_disable_sbrk)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the pml framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the pml framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_cm_free_list_num&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                           Initial size of request free lists
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_cm_free_list_max&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum size of request free lists
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_cm_free_list_inc&quot; (current value: &quot;64&quot;)
</span><br>
<span class="quotelev1">&gt;                           Number of elements to add when growing request free lists
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_cm_priority&quot; (current value: &quot;30&quot;)
</span><br>
<span class="quotelev1">&gt;                           CM PML selection priority
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_free_list_num&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_free_list_max&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_free_list_inc&quot; (current value: &quot;64&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_priority&quot; (current value: &quot;20&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_eager_limit&quot; (current value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_send_pipeline_depth&quot; (current value: &quot;3&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_recv_pipeline_depth&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: parameter &quot;bml&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the bml framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: parameter &quot;bml_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the bml framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: parameter &quot;bml_r2_show_unreach_errors&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Show error message when procs are unreachable
</span><br>
<span class="quotelev1">&gt;                  MCA bml: parameter &quot;bml_r2_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: parameter &quot;rcache&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the rcache framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: parameter &quot;rcache_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the rcache framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: parameter &quot;rcache_vma_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           If btl_base_debug is 1 standard debug is output, if &gt; 1 verbose debug is output
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl&quot; (current value: &quot;self,sm,tcp,openib&quot;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the btl framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the btl framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_free_list_num&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Number of fragments by default
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_free_list_max&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum number of fragments
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_free_list_inc&quot; (current value: &quot;32&quot;)
</span><br>
<span class="quotelev1">&gt;                           Increment by this number of fragments
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_eager_limit&quot; (current value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                           Eager size fragmeng (before the rendez-vous ptotocol)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_min_send_size&quot; (current value: &quot;262144&quot;)
</span><br>
<span class="quotelev1">&gt;                           Minimum fragment size after the rendez-vous
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_max_send_size&quot; (current value: &quot;262144&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum fragment size after the rendez-vous
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_min_rdma_size&quot; (current value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum fragment size for the RDMA transfer
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_max_rdma_size&quot; (current value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum fragment size for the RDMA transfer
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_exclusivity&quot; (current value: &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;                           Device exclusivity
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_flags&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Active behavior flags
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_free_list_num&quot; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_free_list_max&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_free_list_inc&quot; (current value: &quot;64&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_exclusivity&quot; (current value: &quot;65535&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_latency&quot; (current value: &quot;100&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_max_procs&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_sm_extra_procs&quot; (current value: &quot;2&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_mpool&quot; (current value: &quot;sm&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_eager_limit&quot; (current value: &quot;4096&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_max_frag_size&quot; (current value: &quot;32768&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_size_of_cb_queue&quot; (current value: &quot;128&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_cb_lazy_free_freq&quot; (current value: &quot;120&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_if_include&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_if_exclude&quot; (current value: &quot;lo&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_free_list_num&quot; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_free_list_max&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_free_list_inc&quot; (current value: &quot;32&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_sndbuf&quot; (current value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_rcvbuf&quot; (current value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_endpoint_cache&quot; (current value: &quot;30720&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_exclusivity&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_eager_limit&quot; (current value: &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_min_send_size&quot; (current value: &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_max_send_size&quot; (current value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_min_rdma_size&quot; (current value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_max_rdma_size&quot; (current value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_flags&quot; (current value: &quot;122&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Output some verbose OpenIB BTL information (0 = no output, nonzero = output)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_warn_no_hca_params_found&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Warn when no HCA-specific parameters are found in the INI file specified by the btl_openib_hca_param_files MCA parameter (0 = do not warn; any other value = warn)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_warn_default_gid_prefix&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Warn when there is more than one active ports and at least one of them connected to the network with only default GID prefix configured (0 = do not warn; any other value = warn)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_want_fork_support&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether fork support is desired or not (negative = try to enable fork support, but continue even if it is not available, 0 = do not enable fork support, positive = try to enable fork support and fail if it is not available)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_hca_param_files&quot; (current value: &quot;/h/rbuckley/usr/linux_ppc64_ib//share/openmpi/mca-btl-openib-hca-params.ini&quot;)
</span><br>
<span class="quotelev1">&gt;                           Colon-delimited list of INI-style files that contain HCA vendor/part-specific parameters
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_max_btls&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum number of HCA ports to use (-1 = use all available, otherwise must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_free_list_num&quot; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                           Intial size of free lists (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_free_list_max&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum size of free lists (-1 = infinite, otherwise must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_free_list_inc&quot; (current value: &quot;32&quot;)
</span><br>
<span class="quotelev1">&gt;                           Increment size of free lists (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_mpool&quot; (current value: &quot;rdma&quot;)
</span><br>
<span class="quotelev1">&gt;                           Name of the memory pool to be used (it is unlikely that you will ever want to change this
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_reg_mru_len&quot; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev1">&gt;                           Length of the registration cache most recently used list (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_cq_size&quot; (current value: &quot;1000&quot;)
</span><br>
<span class="quotelev1">&gt;                           Size of the IB completion queue (will automatically be set to a minimum of (2 * number_of_peers * btl_openib_rd_num))
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_sg_list_size&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                           Size of IB segment list (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_pkey_ix&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           InfiniBand pkey index (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_pkey_val&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           InfiniBand pkey value(must be &gt; 0 and &lt; 0xffff)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_psn&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           InfiniBand packet sequence starting number (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_qp_ous_rd_atom&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                           InfiniBand outstanding atomic reads (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_mtu&quot; (current value: &quot;3&quot;)
</span><br>
<span class="quotelev1">&gt;                           IB MTU, in bytes (if not specified in INI files).  Valid values are: 1=256 bytes, 2=512 bytes, 3=1024 bytes, 4=2048 bytes, 5=4096 bytes
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_min_rnr_timer&quot; (current value: &quot;5&quot;)
</span><br>
<span class="quotelev1">&gt;                           InfiniBand minimum &quot;receiver not ready&quot; timer, in seconds (must be &gt;= 0 and &lt;= 31)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_timeout&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           InfiniBand transmit timeout, plugged into formula: 4.096 microseconds * (2^btl_openib_ib_timeout)(must be &gt;= 0 and &lt;= 31)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_retry_count&quot; (current value: &quot;7&quot;)
</span><br>
<span class="quotelev1">&gt;                           InfiniBand transmit retry count (must be &gt;= 0 and &lt;= 7)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_rnr_retry&quot; (current value: &quot;7&quot;)
</span><br>
<span class="quotelev1">&gt;                           InfiniBand &quot;receiver not ready&quot; retry count (must be &gt;= 0 and &lt;= 7)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_max_rdma_dst_ops&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                           InfiniBand maximum pending RDMA destination operations (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_service_level&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           InfiniBand service level (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_static_rate&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           InfiniBand static rate (must be &gt;= 0; defulat: %d)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_exclusivity&quot; (current value: &quot;1024&quot;)
</span><br>
<span class="quotelev1">&gt;                           OpenIB BTL exclusivity (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_rd_num&quot; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                           Number of receive descriptors to post to a queue pair (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_rd_low&quot; (current value: &quot;6&quot;)
</span><br>
<span class="quotelev1">&gt;                           Low water mark before reposting occurs (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_rd_win&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                           Window size at which generate explicit credit message (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_use_srq&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, use the InfiniBand shared receive queue (&quot;SRQ&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_srq_rd_max&quot; (current value: &quot;1000&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maxium number of receive descriptors posted per SRQ (only relevant if btl_openib_use_srq is true; must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_srq_rd_per_peer&quot; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev1">&gt;                           Number of receive descriptors posted per peer in the SRQ (only relevant if btl_openib_use_srq is true; must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_srq_sd_max&quot; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum number of send descriptors posted (only relevant if btl_openib_use_srq is true; must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_use_eager_rdma&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Use RDMA for eager messages 
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_eager_rdma_threshold&quot; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev1">&gt;                           Use RDMA for short messages after this number of messages are received from a given peer (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_max_eager_rdma&quot; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum number of peers allowed to use RDMA for short messages (RDMA is used for all long messages, except if explicitly disabled, such as with the &quot;dr&quot; pml) (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_eager_rdma_num&quot; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev1">&gt;                           Number of RDMA buffers to allocate for small messages(must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_btls_per_lid&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Number of BTLs to create for each InfiniBand LID (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_max_lmc&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum number of LIDs to use for each HCA port (must be &gt;= 0, where 0 = use all available)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_buffer_alignment&quot; (current value: &quot;64&quot;)
</span><br>
<span class="quotelev1">&gt;                           Prefered communication buffer alignment, in bytes (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_eager_limit&quot; (current value: &quot;12288&quot;)
</span><br>
<span class="quotelev1">&gt;                           Eager send limit, in bytes (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_min_send_size&quot; (current value: &quot;32768&quot;)
</span><br>
<span class="quotelev1">&gt;                           Minimum send size, in bytes (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_max_send_size&quot; (current value: &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum send size, in bytes (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_min_rdma_size&quot; (current value: &quot;1048576&quot;)
</span><br>
<span class="quotelev1">&gt;                           Minimum RDMA size, in bytes (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_max_rdma_size&quot; (current value: &quot;1048576&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximium RDMA size, in bytes (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_flags&quot; (current value: &quot;54&quot;)
</span><br>
<span class="quotelev1">&gt;                           BTL flags, added together: SEND=1, PUT=2, GET=4 (cannot be 0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_bandwidth&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Approximate maximum bandwidth of each network interface in megabits per second (if 0, filled in at run-time by querying the HCA, otherwise must be &gt; 0) 
</span><br>
<span class="quotelev1">&gt;                  MCA btl: information &quot;btl_openib_have_fork_support&quot; (value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether the OpenFabrics stack supports applications that invoke the &quot;fork()&quot; system call or not (0 = no, 1 = yes).  Note that this value does NOT indicate whether the system being run on supports &quot;fork()&quot; with OpenFabrics applications or not.
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_include&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_exclude&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_warn_component_unused&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           This parameter is used to turn on warning messages when certain NICs are not used
</span><br>
<span class="quotelev1">&gt;                  MCA mtl: parameter &quot;mtl&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the mtl framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA mtl: parameter &quot;mtl_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the mtl framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: parameter &quot;topo&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the topo framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: parameter &quot;topo_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the topo framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: parameter &quot;osc&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the osc framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: parameter &quot;osc_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the osc framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: parameter &quot;osc_pt2pt_no_locks&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable optimizations available only if MPI_LOCK is not used.
</span><br>
<span class="quotelev1">&gt;                  MCA osc: parameter &quot;osc_pt2pt_eager_limit&quot; (current value: &quot;16384&quot;)
</span><br>
<span class="quotelev1">&gt;                           Max size of eagerly sent data
</span><br>
<span class="quotelev1">&gt;                  MCA osc: parameter &quot;osc_pt2pt_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the errmgr framework
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the errmgr framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr_hnp_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr_hnp_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr_orted_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr_orted_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr_proxy_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr_proxy_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the gpr framework
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_base_maxsize&quot; (current value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_base_blocksize&quot; (current value: &quot;512&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the gpr framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_null_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_proxy_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_proxy_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_replica_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_replica_isolate&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_replica_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof_base_window_size&quot; (current value: &quot;4096&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof_base_service&quot; (current value: &quot;0.0.0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the iof framework
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the iof framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof_proxy_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof_svc_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the ns framework
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the ns framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_proxy_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_proxy_maxsize&quot; (current value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_proxy_blocksize&quot; (current value: &quot;512&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_proxy_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_replica_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_replica_isolate&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_replica_maxsize&quot; (current value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_replica_blocksize&quot; (current value: &quot;512&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_replica_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the oob framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the oob framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_peer_limit&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_peer_retries&quot; (current value: &quot;60&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_sndbuf&quot; (current value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_rcvbuf&quot; (current value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_if_include&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Comma-delimited list of TCP interfaces to use
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_if_exclude&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Comma-delimited list of TCP interfaces to exclude
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_connect_sleep&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable (1) / disable (0) random sleep for connection wireup
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_listen_mode&quot; (current value: &quot;event&quot;)
</span><br>
<span class="quotelev1">&gt;                           Mode for HNP to accept incoming connections: event, listen_thread
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_listen_thread_max_queue&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           High water mark for queued accepted socket list size
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_listen_thread_max_time&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum amount of time (in milliseconds) to wait between processing accepted socket list
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_accept_spin_count&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Number of times to let accept return EWOULDBLOCK before updating accepted socket list
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_base_include&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Components to include for oob framework selection
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_base_exclude&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Components to exclude for oob framework selection
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable debugging for the RAS framework (nonzero = enabled)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_dash_host_priority&quot; (current value: &quot;5&quot;)
</span><br>
<span class="quotelev1">&gt;                           Selection priority for the dash_host RAS component
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_localhost_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Selection priority for the localhost RAS component
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_gridengine_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable debugging output for the gridengine ras component
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_gridengine_priority&quot; (current value: &quot;100&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the gridengine ras component
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_gridengine_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable verbose output for the gridengine ras component
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_gridengine_show_jobid&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Show the JOB_ID of the Grid Engine job
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_slurm_priority&quot; (current value: &quot;75&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the slurm ras component
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the rds framework
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds_hostfile_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Toggle debug output for hostfile RDS component
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds_hostfile_path&quot; (current value: &quot;/h/rbuckley/usr/linux_ppc64_ib//etc/openmpi-default-hostfile&quot;)
</span><br>
<span class="quotelev1">&gt;                           ORTE Host filename
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds_hostfile_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds_proxy_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds_resfile_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Toggle debug output for resfile RDS component
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds_resfile_name&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           ORTE Resource filename
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds_resfile_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the rmaps framework
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_schedule_policy&quot; (current value: &quot;unspec&quot;)
</span><br>
<span class="quotelev1">&gt;                           Scheduling Policy for RMAPS. [slot | node]
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_pernode&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Launch one ppn as directed
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_n_pernode&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Launch n procs/node
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_no_schedule_local&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           If false, allow scheduling MPI applications on the same node as mpirun (default).  If true, do not schedule any MPI applications on the same node as mpirun
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_no_oversubscribe&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           If true, then do not allow oversubscription of nodes - mpirun will return an error if there aren't enough nodes to launch all processes without oversubscribing
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_display_map&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to display the process map after it is computed
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the rmaps framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_round_robin_debug&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Toggle debug output for Round Robin RMAPS component
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_round_robin_priority&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Selection priority for Round Robin RMAPS component
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: parameter &quot;rmgr_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the rmgr framework
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: parameter &quot;rmgr&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the rmgr framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: parameter &quot;rmgr_proxy_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: parameter &quot;rmgr_urm_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: parameter &quot;rml_base_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the rml famework
</span><br>
<span class="quotelev1">&gt;                  MCA rml: parameter &quot;rml&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the rml framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: parameter &quot;rml_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the rml framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: parameter &quot;rml_oob_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_base_reuse_daemons&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, reuse daemons to launch dynamically spawned processes.  If zero, do not reuse daemons (default)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the pls framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the pls framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_proxy_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_gridengine_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable debugging of gridengine pls component
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_gridengine_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable verbose output of the gridengine qrsh -inherit command
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_gridengine_priority&quot; (current value: &quot;100&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the gridengine pls component
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_gridengine_orted&quot; (current value: &quot;orted&quot;)
</span><br>
<span class="quotelev1">&gt;                           The command name that the gridengine pls component will invoke for the ORTE daemon
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether or not to enable debugging output for the rsh pls component (0 or 1)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_num_concurrent&quot; (current value: &quot;128&quot;)
</span><br>
<span class="quotelev1">&gt;                           How many pls_rsh_agent instances to invoke concurrently (must be &gt; 0)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_force_rsh&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Force the launcher to always use rsh, even for local daemons
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_orted&quot; (current value: &quot;orted&quot;)
</span><br>
<span class="quotelev1">&gt;                           The command name that the rsh pls component will invoke for the ORTE daemon
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_priority&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the rsh pls component
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_delay&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Delay (in seconds) between invocations of the remote agent, but only used when the &quot;debug&quot; MCA parameter is true, or the top-level MCA debugging is enabled (otherwise this value is ignored)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_reap&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           If set to 1, wait for all the processes to complete before exiting.  Otherwise, quit immediately -- without waiting for confirmation that all other processes in the job have completed.
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_assume_same_shell&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           If set to 1, assume that the shell on the remote node is the same as the shell on the local node.  Otherwise, probe for what the remote shell.
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_agent&quot; (current value: &quot;ssh : rsh&quot;)
</span><br>
<span class="quotelev1">&gt;                           The command used to launch executables on remote nodes (typically either &quot;ssh&quot; or &quot;rsh&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_slurm_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable debugging of slurm pls
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_slurm_priority&quot; (current value: &quot;75&quot;)
</span><br>
<span class="quotelev1">&gt;                           Default selection priority
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_slurm_orted&quot; (current value: &quot;orted&quot;)
</span><br>
<span class="quotelev1">&gt;                           Command to use to start proxy orted
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_slurm_args&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Custom arguments to srun
</span><br>
<span class="quotelev1">&gt;                  MCA sds: parameter &quot;sds&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the sds framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: parameter &quot;sds_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the sds framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: parameter &quot;sds_env_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: parameter &quot;sds_seed_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: parameter &quot;sds_singleton_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: parameter &quot;sds_pipe_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: parameter &quot;sds_slurm_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.2.5
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r16989
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.2.5
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r16989
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.2.5
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r16989
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: execinfo (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;               MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                MCA timer: linux (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: env (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: config (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: basic (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: self (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                   MCA io: romio (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: rdma (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: self (MCA v1.0, API v1.0.1, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: openib (MCA v1.0, API v1.0.1, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: unity (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: null (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: replica (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: proxy (MCA v1.0, API v2.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: replica (MCA v1.0, API v2.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: dash_host (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: localhost (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: gridengine (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: slurm (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: hostfile (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: resfile (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: round_robin (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: gridengine (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: slurm (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: env (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: singleton (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: slurm (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                   Prefix: /h/rbuckley/usr/linux_ppc64_ib/
</span><br>
<span class="quotelev1">&gt;                   Bindir: /h/rbuckley/usr/linux_ppc64_ib//bin
</span><br>
<span class="quotelev1">&gt;                   Libdir: /h/rbuckley/usr/linux_ppc64_ib//lib
</span><br>
<span class="quotelev1">&gt;                   Incdir: /h/rbuckley/usr/linux_ppc64_ib//include
</span><br>
<span class="quotelev1">&gt;                Pkglibdir: /h/rbuckley/usr/linux_ppc64_ib//lib/openmpi
</span><br>
<span class="quotelev1">&gt;               Sysconfdir: /h/rbuckley/usr/linux_ppc64_ib//etc
</span><br>
<span class="quotelev1">&gt;  Configured architecture: powerpc64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;            Configured by: rbuckley
</span><br>
<span class="quotelev1">&gt;            Configured on: Tue Apr 15 10:30:42 EDT 2008
</span><br>
<span class="quotelev1">&gt;           Configure host: nesprod1
</span><br>
<span class="quotelev1">&gt;                 Built by: rbuckley
</span><br>
<span class="quotelev1">&gt;                 Built on: Tue Apr 15 11:16:23 EDT 2008
</span><br>
<span class="quotelev1">&gt;               Built host: nesprod1
</span><br>
<span class="quotelev1">&gt;               C bindings: yes
</span><br>
<span class="quotelev1">&gt;             C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;       Fortran77 bindings: no
</span><br>
<span class="quotelev1">&gt;       Fortran90 bindings: no
</span><br>
<span class="quotelev1">&gt;  Fortran90 bindings size: na
</span><br>
<span class="quotelev1">&gt;               C compiler: gcc
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /usr/lib/ccache/gcc
</span><br>
<span class="quotelev1">&gt;              C char size: 1
</span><br>
<span class="quotelev1">&gt;              C bool size: 1
</span><br>
<span class="quotelev1">&gt;             C short size: 2
</span><br>
<span class="quotelev1">&gt;               C int size: 4
</span><br>
<span class="quotelev1">&gt;              C long size: 8
</span><br>
<span class="quotelev1">&gt;             C float size: 4
</span><br>
<span class="quotelev1">&gt;            C double size: 8
</span><br>
<span class="quotelev1">&gt;           C pointer size: 8
</span><br>
<span class="quotelev1">&gt;             C char align: 1
</span><br>
<span class="quotelev1">&gt;             C bool align: 1
</span><br>
<span class="quotelev1">&gt;              C int align: 4
</span><br>
<span class="quotelev1">&gt;            C float align: 4
</span><br>
<span class="quotelev1">&gt;           C double align: 8
</span><br>
<span class="quotelev1">&gt;             C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /usr/lib/ccache/g++
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: none
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: none
</span><br>
<span class="quotelev1">&gt;        Fort integer size: 4
</span><br>
<span class="quotelev1">&gt;        Fort logical size: 4
</span><br>
<span class="quotelev1">&gt;  Fort logical value true: 0
</span><br>
<span class="quotelev1">&gt;           Fort real size: skipped
</span><br>
<span class="quotelev1">&gt;       Fort dbl prec size: skipped
</span><br>
<span class="quotelev1">&gt;           Fort cplx size: skipped
</span><br>
<span class="quotelev1">&gt;       Fort dbl cplx size: skipped
</span><br>
<span class="quotelev1">&gt;       Fort integer align: skipped
</span><br>
<span class="quotelev1">&gt;          Fort real align: skipped
</span><br>
<span class="quotelev1">&gt;      Fort dbl prec align: skipped
</span><br>
<span class="quotelev1">&gt;          Fort cplx align: skipped
</span><br>
<span class="quotelev1">&gt;      Fort dbl cplx align: skipped
</span><br>
<span class="quotelev1">&gt;              C profiling: yes
</span><br>
<span class="quotelev1">&gt;            C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 profiling: no
</span><br>
<span class="quotelev1">&gt;      Fortran90 profiling: no
</span><br>
<span class="quotelev1">&gt;           C++ exceptions: yes
</span><br>
<span class="quotelev1">&gt;           Thread support: posix (mpi: yes, progress: no)
</span><br>
<span class="quotelev1">&gt;             Build CFLAGS: -O3 -DNDEBUG -m64 -Wall -Wundef -Wno-long-long -Wsign-compare -Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic -Werror-implicit-function-declaration -finline-functions -fno-strict-aliasing  -pthread
</span><br>
<span class="quotelev1">&gt;           Build CXXFLAGS: -O3 -DNDEBUG -m64 -Wall -Wundef -Wno-long-long -finline-functions -fexceptions -pthread
</span><br>
<span class="quotelev1">&gt;             Build FFLAGS: -m64 
</span><br>
<span class="quotelev1">&gt;            Build FCFLAGS: -m64
</span><br>
<span class="quotelev1">&gt;            Build LDFLAGS: -export-dynamic  -fexceptions 
</span><br>
<span class="quotelev1">&gt;               Build LIBS: -lnsl -lutil  -lm 
</span><br>
<span class="quotelev1">&gt;     Wrapper extra CFLAGS: -pthread 
</span><br>
<span class="quotelev1">&gt;   Wrapper extra CXXFLAGS: -fexceptions -pthread 
</span><br>
<span class="quotelev1">&gt;     Wrapper extra FFLAGS:  
</span><br>
<span class="quotelev1">&gt;    Wrapper extra FCFLAGS:  
</span><br>
<span class="quotelev1">&gt;    Wrapper extra LDFLAGS:     
</span><br>
<span class="quotelev1">&gt;       Wrapper extra LIBS: -libverbs -lrt  -ldl   -Wl,--export-dynamic -lnsl -lutil -lm -ldl 
</span><br>
<span class="quotelev1">&gt;   Internal debug support: no
</span><br>
<span class="quotelev1">&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: yes
</span><br>
<span class="quotelev1">&gt; Memory debugging support: yes
</span><br>
<span class="quotelev1">&gt;          libltdl support: yes
</span><br>
<span class="quotelev1">&gt;    Heterogeneous support: yes
</span><br>
<span class="quotelev1">&gt;  mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_param_files&quot; (current value: &quot;/h/rbuckley/.openmpi/mca-params.conf:/h/rbuckley/usr/linux_ppc64_ib//etc/openmpi-mca-params.conf&quot;)
</span><br>
<span class="quotelev1">&gt;                           Path for MCA configuration files containing default parameter values
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_component_path&quot; (current value: &quot;/h/rbuckley/usr/linux_ppc64_ib//lib/openmpi:/h/rbuckley/.openmpi/components&quot;)
</span><br>
<span class="quotelev1">&gt;                           Path where to look for Open MPI and ORTE components
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_verbose&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Top-level verbosity parameter
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_component_show_load_errors&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to show errors for components that failed to load or not
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_component_disable_dlopen&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to attempt to disable opening dynamic components or not
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_param_check&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether you want MPI API parameters checked at run-time or not.  Possible values are 0 (no checking) and 1 (perform checking at run-time)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_yield_when_idle&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Yield the processor when waiting for MPI communication (for MPI processes, will default to 1 when oversubscribing nodes)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_event_tick_rate&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                           How often to progress TCP communications (0 = never, otherwise specified in microseconds)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_show_handle_leaks&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether MPI_FINALIZE shows all MPI handles that were not freed or not
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_no_free_handles&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to actually free MPI objects when their handles are freed
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_show_mca_params&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to show all MCA parameter value during MPI_INIT or not (good for reproducability of MPI jobs)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_show_mca_params_file&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           If mpi_show_mca_params is true, setting this string to a valid filename tells Open MPI to dump all the MCA parameter values into a file suitable for reading via the mca_param_files parameter (good for reproducability of MPI jobs)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_paffinity_alone&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, assume that this job is the only (set of) process(es) running on each node and bind processes to processors, starting with processor ID 0
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_keep_peer_hostnames&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, save the string hostnames of all MPI peer processes (mostly for error / debugging output messages).  This can add quite a bit of memory usage to each MPI process.
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_abort_delay&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, print out an identifying message when MPI_ABORT is invoked (hostname, PID of the process that called MPI_ABORT) and delay for that many seconds before exiting (a negative delay value means to never abort).  This allows attaching of a debugger before quitting the job.
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_abort_print_stack&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, print out a stack trace when MPI_ABORT is invoked
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_preconnect_all&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to force MPI processes to create connections / warmup with *all* peers during MPI_INIT (vs. making connections lazily -- upon the first MPI traffic between each process peer pair)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_preconnect_oob&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to force MPI processes to fully wire-up the OOB system between MPI processes.
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_leave_pinned&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to use the &quot;leave pinned&quot; protocol or not.  Enabling this setting can help bandwidth performance when repeatedly sending and receiving large messages with the same buffers over RDMA-based networks.
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_leave_pinned_pipeline&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to use the &quot;leave pinned pipeline&quot; protocol or not.
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_warn_if_thread_multiple&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to show a warning when MPI_THREAD_MULTIPLE is used or not.
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_warn_if_progress_threads&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to show a warning when progress threads are used or not.
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Top-level ORTE debug switch
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_no_daemonize&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to properly daemonize the ORTE daemons or not
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_base_user_debugger&quot; (current value: &quot;totalview @mpirun@ -a @mpirun_args@ : ddt -n @np@ -start @executable@ @executable_argv@ @single_app@ : fxp @mpirun@ -a @mpirun_args@&quot;)
</span><br>
<span class="quotelev1">&gt;                           Sequence of user-level debuggers to search for in orterun
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_abort_timeout&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Time to wait [in seconds] before giving up on aborting an ORTE operation
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_timing&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Request that critical timing loops be measured
</span><br>
<span class="quotelev1">&gt;                 MCA opal: parameter &quot;opal_signal&quot; (current value: &quot;6,7,8,11&quot;)
</span><br>
<span class="quotelev1">&gt;                           If a signal is received, display the stack trace frame
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: parameter &quot;backtrace&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the backtrace framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: parameter &quot;backtrace_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the backtrace framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: parameter &quot;backtrace_execinfo_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA memory: parameter &quot;memory&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the memory framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA memory: parameter &quot;memory_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the memory framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;               MCA memory: parameter &quot;memory_ptmalloc2_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: parameter &quot;paffinity_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level of the paffinity framework
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: parameter &quot;paffinity&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the paffinity framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: parameter &quot;paffinity_linux_priority&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the linux paffinity component
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: information &quot;paffinity_linux_have_cpu_set_t&quot; (value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether this component was compiled on a system with the type cpu_set_t or not (1 = yes, 0 = no)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: information &quot;paffinity_linux_CPU_ZERO_ok&quot; (value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether this component was compiled on a system where CPU_ZERO() is functional or broken (1 = functional, 0 = broken/not available)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: information &quot;paffinity_linux_sched_setaffinity_num_params&quot; (value: &quot;3&quot;)
</span><br>
<span class="quotelev1">&gt;                           The number of parameters that sched_set_affinity() takes on the machine where this component was compiled
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: parameter &quot;maffinity_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level of the maffinity framework
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: parameter &quot;maffinity&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the maffinity framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: parameter &quot;maffinity_first_use_priority&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the first_use maffinity component
</span><br>
<span class="quotelev1">&gt;                MCA timer: parameter &quot;timer&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the timer framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA timer: parameter &quot;timer_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the timer framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                MCA timer: parameter &quot;timer_linux_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: parameter &quot;allocator&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the allocator framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: parameter &quot;allocator_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the allocator framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: parameter &quot;allocator_basic_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: parameter &quot;allocator_bucket_num_buckets&quot; (current value: &quot;30&quot;)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: parameter &quot;allocator_bucket_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the coll framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the coll framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_basic_priority&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the basic coll component
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_basic_crossover&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                           Minimum number of processes in a communicator before using the logarithmic algorithms
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_self_priority&quot; (current value: &quot;75&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the sm coll component
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_control_size&quot; (current value: &quot;4096&quot;)
</span><br>
<span class="quotelev1">&gt;                           Length of the control data -- should usually be either the length of a cache line on most SMPs, or the size of a page on machines that support direct memory affinity page placement (in bytes)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_bootstrap_filename&quot; (current value: &quot;shared_mem_sm_bootstrap&quot;)
</span><br>
<span class="quotelev1">&gt;                           Filename (in the Open MPI session directory) of the coll sm component bootstrap rendezvous mmap file
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_bootstrap_num_segments&quot; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                           Number of segments in the bootstrap file
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_fragment_size&quot; (current value: &quot;8192&quot;)
</span><br>
<span class="quotelev1">&gt;                           Fragment size (in bytes) used for passing data through shared memory (will be rounded up to the nearest control_size size)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_mpool&quot; (current value: &quot;sm&quot;)
</span><br>
<span class="quotelev1">&gt;                           Name of the mpool component to use
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_comm_in_use_flags&quot; (current value: &quot;2&quot;)
</span><br>
<span class="quotelev1">&gt;                           Number of &quot;in use&quot; flags, used to mark a message passing area segment as currently being used or not (must be &gt;= 2 and &lt;= comm_num_segments)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_comm_num_segments&quot; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                           Number of segments in each communicator's shared memory message passing area (must be &gt;= 2, and must be a multiple of comm_in_use_flags)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_tree_degree&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                           Degree of the tree for tree-based operations (must be =&gt; 1 and &lt;= min(control_size, 255))
</span><br>
<span class="quotelev1">&gt;                 MCA coll: information &quot;coll_sm_shared_mem_used_bootstrap&quot; (value: &quot;216&quot;)
</span><br>
<span class="quotelev1">&gt;                           Amount of shared memory used in the shared memory bootstrap area (in bytes)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_info_num_procs&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                           Number of processes to use for the calculation of the shared_mem_size MCA information parameter (must be =&gt; 2)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: information &quot;coll_sm_shared_mem_used_data&quot; (value: &quot;548864&quot;)
</span><br>
<span class="quotelev1">&gt;                           Amount of shared memory used in the shared memory data area for info_num_procs processes (in bytes)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_priority&quot; (current value: &quot;30&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the tuned coll component
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_pre_allocate_memory_comm_size_limit&quot; (current value: &quot;32768&quot;)
</span><br>
<span class="quotelev1">&gt;                           Size of communicator were we stop pre-allocating memory for the fixed internal buffer used for message requests etc that is hung off the communicator data segment. I.e. if you have a 100'000 nodes you might not want to pre-allocate 200'000 request handle slots per communicator instance!
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_init_tree_fanout&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                           Inital fanout used in the tree topologies for each communicator. This is only an initial guess, if a tuned collective needs a different fanout for an operation, it build it dynamically. This parameter is only for the first guess and might save a little time
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_init_chain_fanout&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                           Inital fanout used in the chain (fanout followed by pipeline) topologies for each communicator. This is only an initial guess, if a tuned collective needs a different fanout for an operation, it build it dynamically. This parameter is only for the first guess and might save a little time
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_use_dynamic_rules&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Switch used to decide if we use static (compiled/if statements) or dynamic (built at runtime) decision function rules
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_base_freelist_initial_size&quot; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev1">&gt;                           Initial MPI-2 IO request freelist size
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_base_freelist_max_size&quot; (current value: &quot;64&quot;)
</span><br>
<span class="quotelev1">&gt;                           Max size of the MPI-2 IO request freelist
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_base_freelist_increment&quot; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev1">&gt;                           Increment size of the MPI-2 IO request freelist
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the io framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the io framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_romio_priority&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the io romio component
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_romio_delete_priority&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Delete priority of the io romio component
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_romio_enable_parallel_optimizations&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable set of Open MPI-added options to improve collective file i/o performance
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the mpool framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the mpool framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_rdma_rcache_name&quot; (current value: &quot;vma&quot;)
</span><br>
<span class="quotelev1">&gt;                           The name of the registration cache the mpool should use
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_rdma_rcache_size_limit&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           the maximum size of registration cache in bytes. 0 is unlimited (default 0)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_rdma_print_stats&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           print pool usage statistics at the end of the run
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_rdma_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_sm_allocator&quot; (current value: &quot;bucket&quot;)
</span><br>
<span class="quotelev1">&gt;                           Name of allocator component to use with sm mpool
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_sm_max_size&quot; (current value: &quot;536870912&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum size of the sm mpool shared memory file
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_sm_min_size&quot; (current value: &quot;134217728&quot;)
</span><br>
<span class="quotelev1">&gt;                           Minimum size of the sm mpool shared memory file
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_sm_per_peer_size&quot; (current value: &quot;33554432&quot;)
</span><br>
<span class="quotelev1">&gt;                           Size (in bytes) to allocate per local peer in the sm mpool shared memory file, bounded by min_size and max_size
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_sm_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable verbose output for mpool sm component
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_sm_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_base_use_mem_hooks&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           use memory hooks for deregistering freed memory
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_use_mem_hooks&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           (deprecated, use mpool_base_use_mem_hooks)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_base_disable_sbrk&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           use mallopt to override calling sbrk (doesn't return memory to OS!)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_disable_sbrk&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           (deprecated, use mca_mpool_base_disable_sbrk)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the pml framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the pml framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_cm_free_list_num&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                           Initial size of request free lists
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_cm_free_list_max&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum size of request free lists
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_cm_free_list_inc&quot; (current value: &quot;64&quot;)
</span><br>
<span class="quotelev1">&gt;                           Number of elements to add when growing request free lists
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_cm_priority&quot; (current value: &quot;30&quot;)
</span><br>
<span class="quotelev1">&gt;                           CM PML selection priority
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_free_list_num&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_free_list_max&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_free_list_inc&quot; (current value: &quot;64&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_priority&quot; (current value: &quot;20&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_eager_limit&quot; (current value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_send_pipeline_depth&quot; (current value: &quot;3&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_recv_pipeline_depth&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: parameter &quot;bml&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the bml framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: parameter &quot;bml_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the bml framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: parameter &quot;bml_r2_show_unreach_errors&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Show error message when procs are unreachable
</span><br>
<span class="quotelev1">&gt;                  MCA bml: parameter &quot;bml_r2_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: parameter &quot;rcache&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the rcache framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: parameter &quot;rcache_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the rcache framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: parameter &quot;rcache_vma_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           If btl_base_debug is 1 standard debug is output, if &gt; 1 verbose debug is output
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl&quot; (current value: &quot;self,sm,tcp,openib&quot;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the btl framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the btl framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_free_list_num&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Number of fragments by default
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_free_list_max&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum number of fragments
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_free_list_inc&quot; (current value: &quot;32&quot;)
</span><br>
<span class="quotelev1">&gt;                           Increment by this number of fragments
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_eager_limit&quot; (current value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                           Eager size fragmeng (before the rendez-vous ptotocol)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_min_send_size&quot; (current value: &quot;262144&quot;)
</span><br>
<span class="quotelev1">&gt;                           Minimum fragment size after the rendez-vous
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_max_send_size&quot; (current value: &quot;262144&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum fragment size after the rendez-vous
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_min_rdma_size&quot; (current value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum fragment size for the RDMA transfer
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_max_rdma_size&quot; (current value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum fragment size for the RDMA transfer
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_exclusivity&quot; (current value: &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;                           Device exclusivity
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_flags&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Active behavior flags
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_free_list_num&quot; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_free_list_max&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_free_list_inc&quot; (current value: &quot;64&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_exclusivity&quot; (current value: &quot;65535&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_latency&quot; (current value: &quot;100&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_max_procs&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_sm_extra_procs&quot; (current value: &quot;2&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_mpool&quot; (current value: &quot;sm&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_eager_limit&quot; (current value: &quot;4096&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_max_frag_size&quot; (current value: &quot;32768&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_size_of_cb_queue&quot; (current value: &quot;128&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_cb_lazy_free_freq&quot; (current value: &quot;120&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_if_include&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_if_exclude&quot; (current value: &quot;lo&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_free_list_num&quot; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_free_list_max&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_free_list_inc&quot; (current value: &quot;32&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_sndbuf&quot; (current value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_rcvbuf&quot; (current value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_endpoint_cache&quot; (current value: &quot;30720&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_exclusivity&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_eager_limit&quot; (current value: &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_min_send_size&quot; (current value: &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_max_send_size&quot; (current value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_min_rdma_size&quot; (current value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_max_rdma_size&quot; (current value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_flags&quot; (current value: &quot;122&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Output some verbose OpenIB BTL information (0 = no output, nonzero = output)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_warn_no_hca_params_found&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Warn when no HCA-specific parameters are found in the INI file specified by the btl_openib_hca_param_files MCA parameter (0 = do not warn; any other value = warn)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_warn_default_gid_prefix&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Warn when there is more than one active ports and at least one of them connected to the network with only default GID prefix configured (0 = do not warn; any other value = warn)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_want_fork_support&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether fork support is desired or not (negative = try to enable fork support, but continue even if it is not available, 0 = do not enable fork support, positive = try to enable fork support and fail if it is not available)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_hca_param_files&quot; (current value: &quot;/h/rbuckley/usr/linux_ppc64_ib//share/openmpi/mca-btl-openib-hca-params.ini&quot;)
</span><br>
<span class="quotelev1">&gt;                           Colon-delimited list of INI-style files that contain HCA vendor/part-specific parameters
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_max_btls&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum number of HCA ports to use (-1 = use all available, otherwise must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_free_list_num&quot; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                           Intial size of free lists (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_free_list_max&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum size of free lists (-1 = infinite, otherwise must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_free_list_inc&quot; (current value: &quot;32&quot;)
</span><br>
<span class="quotelev1">&gt;                           Increment size of free lists (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_mpool&quot; (current value: &quot;rdma&quot;)
</span><br>
<span class="quotelev1">&gt;                           Name of the memory pool to be used (it is unlikely that you will ever want to change this
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_reg_mru_len&quot; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev1">&gt;                           Length of the registration cache most recently used list (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_cq_size&quot; (current value: &quot;1000&quot;)
</span><br>
<span class="quotelev1">&gt;                           Size of the IB completion queue (will automatically be set to a minimum of (2 * number_of_peers * btl_openib_rd_num))
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_sg_list_size&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                           Size of IB segment list (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_pkey_ix&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           InfiniBand pkey index (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_pkey_val&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           InfiniBand pkey value(must be &gt; 0 and &lt; 0xffff)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_psn&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           InfiniBand packet sequence starting number (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_qp_ous_rd_atom&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                           InfiniBand outstanding atomic reads (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_mtu&quot; (current value: &quot;3&quot;)
</span><br>
<span class="quotelev1">&gt;                           IB MTU, in bytes (if not specified in INI files).  Valid values are: 1=256 bytes, 2=512 bytes, 3=1024 bytes, 4=2048 bytes, 5=4096 bytes
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_min_rnr_timer&quot; (current value: &quot;5&quot;)
</span><br>
<span class="quotelev1">&gt;                           InfiniBand minimum &quot;receiver not ready&quot; timer, in seconds (must be &gt;= 0 and &lt;= 31)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_timeout&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           InfiniBand transmit timeout, plugged into formula: 4.096 microseconds * (2^btl_openib_ib_timeout)(must be &gt;= 0 and &lt;= 31)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_retry_count&quot; (current value: &quot;7&quot;)
</span><br>
<span class="quotelev1">&gt;                           InfiniBand transmit retry count (must be &gt;= 0 and &lt;= 7)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_rnr_retry&quot; (current value: &quot;7&quot;)
</span><br>
<span class="quotelev1">&gt;                           InfiniBand &quot;receiver not ready&quot; retry count (must be &gt;= 0 and &lt;= 7)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_max_rdma_dst_ops&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                           InfiniBand maximum pending RDMA destination operations (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_service_level&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           InfiniBand service level (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_static_rate&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           InfiniBand static rate (must be &gt;= 0; defulat: %d)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_exclusivity&quot; (current value: &quot;1024&quot;)
</span><br>
<span class="quotelev1">&gt;                           OpenIB BTL exclusivity (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_rd_num&quot; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                           Number of receive descriptors to post to a queue pair (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_rd_low&quot; (current value: &quot;6&quot;)
</span><br>
<span class="quotelev1">&gt;                           Low water mark before reposting occurs (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_rd_win&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                           Window size at which generate explicit credit message (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_use_srq&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, use the InfiniBand shared receive queue (&quot;SRQ&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_srq_rd_max&quot; (current value: &quot;1000&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maxium number of receive descriptors posted per SRQ (only relevant if btl_openib_use_srq is true; must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_srq_rd_per_peer&quot; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev1">&gt;                           Number of receive descriptors posted per peer in the SRQ (only relevant if btl_openib_use_srq is true; must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_srq_sd_max&quot; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum number of send descriptors posted (only relevant if btl_openib_use_srq is true; must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_use_eager_rdma&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Use RDMA for eager messages 
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_eager_rdma_threshold&quot; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev1">&gt;                           Use RDMA for short messages after this number of messages are received from a given peer (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_max_eager_rdma&quot; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum number of peers allowed to use RDMA for short messages (RDMA is used for all long messages, except if explicitly disabled, such as with the &quot;dr&quot; pml) (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_eager_rdma_num&quot; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev1">&gt;                           Number of RDMA buffers to allocate for small messages(must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_btls_per_lid&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Number of BTLs to create for each InfiniBand LID (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_max_lmc&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum number of LIDs to use for each HCA port (must be &gt;= 0, where 0 = use all available)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_buffer_alignment&quot; (current value: &quot;64&quot;)
</span><br>
<span class="quotelev1">&gt;                           Prefered communication buffer alignment, in bytes (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_eager_limit&quot; (current value: &quot;12288&quot;)
</span><br>
<span class="quotelev1">&gt;                           Eager send limit, in bytes (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_min_send_size&quot; (current value: &quot;32768&quot;)
</span><br>
<span class="quotelev1">&gt;                           Minimum send size, in bytes (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_max_send_size&quot; (current value: &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum send size, in bytes (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_min_rdma_size&quot; (current value: &quot;1048576&quot;)
</span><br>
<span class="quotelev1">&gt;                           Minimum RDMA size, in bytes (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_max_rdma_size&quot; (current value: &quot;1048576&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximium RDMA size, in bytes (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_flags&quot; (current value: &quot;54&quot;)
</span><br>
<span class="quotelev1">&gt;                           BTL flags, added together: SEND=1, PUT=2, GET=4 (cannot be 0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_bandwidth&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Approximate maximum bandwidth of each network interface in megabits per second (if 0, filled in at run-time by querying the HCA, otherwise must be &gt; 0) 
</span><br>
<span class="quotelev1">&gt;                  MCA btl: information &quot;btl_openib_have_fork_support&quot; (value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether the OpenFabrics stack supports applications that invoke the &quot;fork()&quot; system call or not (0 = no, 1 = yes).  Note that this value does NOT indicate whether the system being run on supports &quot;fork()&quot; with OpenFabrics applications or not.
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_include&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_exclude&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_warn_component_unused&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           This parameter is used to turn on warning messages when certain NICs are not used
</span><br>
<span class="quotelev1">&gt;                  MCA mtl: parameter &quot;mtl&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the mtl framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA mtl: parameter &quot;mtl_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the mtl framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: parameter &quot;topo&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the topo framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: parameter &quot;topo_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the topo framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: parameter &quot;osc&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the osc framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: parameter &quot;osc_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the osc framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: parameter &quot;osc_pt2pt_no_locks&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable optimizations available only if MPI_LOCK is not used.
</span><br>
<span class="quotelev1">&gt;                  MCA osc: parameter &quot;osc_pt2pt_eager_limit&quot; (current value: &quot;16384&quot;)
</span><br>
<span class="quotelev1">&gt;                           Max size of eagerly sent data
</span><br>
<span class="quotelev1">&gt;                  MCA osc: parameter &quot;osc_pt2pt_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the errmgr framework
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the errmgr framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr_hnp_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr_hnp_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr_orted_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr_orted_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr_proxy_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr_proxy_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the gpr framework
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_base_maxsize&quot; (current value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_base_blocksize&quot; (current value: &quot;512&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the gpr framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_null_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_proxy_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_proxy_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_replica_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_replica_isolate&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_replica_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof_base_window_size&quot; (current value: &quot;4096&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof_base_service&quot; (current value: &quot;0.0.0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the iof framework
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the iof framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof_proxy_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof_svc_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the ns framework
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the ns framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_proxy_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_proxy_maxsize&quot; (current value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_proxy_blocksize&quot; (current value: &quot;512&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_proxy_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_replica_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_replica_isolate&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_replica_maxsize&quot; (current value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_replica_blocksize&quot; (current value: &quot;512&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_replica_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the oob framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the oob framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_peer_limit&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_peer_retries&quot; (current value: &quot;60&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_sndbuf&quot; (current value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_rcvbuf&quot; (current value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_if_include&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Comma-delimited list of TCP interfaces to use
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_if_exclude&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Comma-delimited list of TCP interfaces to exclude
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_connect_sleep&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable (1) / disable (0) random sleep for connection wireup
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_listen_mode&quot; (current value: &quot;event&quot;)
</span><br>
<span class="quotelev1">&gt;                           Mode for HNP to accept incoming connections: event, listen_thread
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_listen_thread_max_queue&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           High water mark for queued accepted socket list size
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_listen_thread_max_time&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum amount of time (in milliseconds) to wait between processing accepted socket list
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_accept_spin_count&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Number of times to let accept return EWOULDBLOCK before updating accepted socket list
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_base_include&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Components to include for oob framework selection
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_base_exclude&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Components to exclude for oob framework selection
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable debugging for the RAS framework (nonzero = enabled)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_dash_host_priority&quot; (current value: &quot;5&quot;)
</span><br>
<span class="quotelev1">&gt;                           Selection priority for the dash_host RAS component
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_localhost_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Selection priority for the localhost RAS component
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_gridengine_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable debugging output for the gridengine ras component
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_gridengine_priority&quot; (current value: &quot;100&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the gridengine ras component
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_gridengine_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable verbose output for the gridengine ras component
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_gridengine_show_jobid&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Show the JOB_ID of the Grid Engine job
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_slurm_priority&quot; (current value: &quot;75&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the slurm ras component
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the rds framework
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds_hostfile_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Toggle debug output for hostfile RDS component
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds_hostfile_path&quot; (current value: &quot;/h/rbuckley/usr/linux_ppc64_ib//etc/openmpi-default-hostfile&quot;)
</span><br>
<span class="quotelev1">&gt;                           ORTE Host filename
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds_hostfile_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds_proxy_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds_resfile_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Toggle debug output for resfile RDS component
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds_resfile_name&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           ORTE Resource filename
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds_resfile_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the rmaps framework
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_schedule_policy&quot; (current value: &quot;unspec&quot;)
</span><br>
<span class="quotelev1">&gt;                           Scheduling Policy for RMAPS. [slot | node]
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_pernode&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Launch one ppn as directed
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_n_pernode&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Launch n procs/node
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_no_schedule_local&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           If false, allow scheduling MPI applications on the same node as mpirun (default).  If true, do not schedule any MPI applications on the same node as mpirun
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_no_oversubscribe&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           If true, then do not allow oversubscription of nodes - mpirun will return an error if there aren't enough nodes to launch all processes without oversubscribing
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_display_map&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to display the process map after it is computed
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the rmaps framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_round_robin_debug&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Toggle debug output for Round Robin RMAPS component
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_round_robin_priority&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Selection priority for Round Robin RMAPS component
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: parameter &quot;rmgr_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the rmgr framework
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: parameter &quot;rmgr&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the rmgr framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: parameter &quot;rmgr_proxy_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: parameter &quot;rmgr_urm_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: parameter &quot;rml_base_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the rml famework
</span><br>
<span class="quotelev1">&gt;                  MCA rml: parameter &quot;rml&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the rml framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: parameter &quot;rml_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the rml framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: parameter &quot;rml_oob_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_base_reuse_daemons&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, reuse daemons to launch dynamically spawned processes.  If zero, do not reuse daemons (default)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the pls framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the pls framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_proxy_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_gridengine_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable debugging of gridengine pls component
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_gridengine_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable verbose output of the gridengine qrsh -inherit command
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_gridengine_priority&quot; (current value: &quot;100&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the gridengine pls component
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_gridengine_orted&quot; (current value: &quot;orted&quot;)
</span><br>
<span class="quotelev1">&gt;                           The command name that the gridengine pls component will invoke for the ORTE daemon
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether or not to enable debugging output for the rsh pls component (0 or 1)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_num_concurrent&quot; (current value: &quot;128&quot;)
</span><br>
<span class="quotelev1">&gt;                           How many pls_rsh_agent instances to invoke concurrently (must be &gt; 0)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_force_rsh&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Force the launcher to always use rsh, even for local daemons
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_orted&quot; (current value: &quot;orted&quot;)
</span><br>
<span class="quotelev1">&gt;                           The command name that the rsh pls component will invoke for the ORTE daemon
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_priority&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the rsh pls component
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_delay&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Delay (in seconds) between invocations of the remote agent, but only used when the &quot;debug&quot; MCA parameter is true, or the top-level MCA debugging is enabled (otherwise this value is ignored)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_reap&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           If set to 1, wait for all the processes to complete before exiting.  Otherwise, quit immediately -- without waiting for confirmation that all other processes in the job have completed.
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_assume_same_shell&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           If set to 1, assume that the shell on the remote node is the same as the shell on the local node.  Otherwise, probe for what the remote shell.
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_agent&quot; (current value: &quot;ssh : rsh&quot;)
</span><br>
<span class="quotelev1">&gt;                           The command used to launch executables on remote nodes (typically either &quot;ssh&quot; or &quot;rsh&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_slurm_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable debugging of slurm pls
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_slurm_priority&quot; (current value: &quot;75&quot;)
</span><br>
<span class="quotelev1">&gt;                           Default selection priority
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_slurm_orted&quot; (current value: &quot;orted&quot;)
</span><br>
<span class="quotelev1">&gt;                           Command to use to start proxy orted
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_slurm_args&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Custom arguments to srun
</span><br>
<span class="quotelev1">&gt;                  MCA sds: parameter &quot;sds&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the sds framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: parameter &quot;sds_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the sds framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: parameter &quot;sds_env_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: parameter &quot;sds_seed_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: parameter &quot;sds_singleton_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: parameter &quot;sds_pipe_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: parameter &quot;sds_slurm_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------
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
<span class="quotelev1">&gt; End of users Digest, Vol 885, Issue 2
</span><br>
<span class="quotelev1">&gt; *************************************
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5590.php">Linwei Wang: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>Previous message:</strong> <a href="5588.php">Doug Reeder: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
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
