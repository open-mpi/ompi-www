<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 31 08:54:01 2006" -->
<!-- isoreceived="20061031135401" -->
<!-- sent="Tue, 31 Oct 2006 06:53:53 -0700" -->
<!-- isosent="20061031135353" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_spawn multiple bproc support" -->
<!-- id="C16CA381.5759%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="J7ZY2U$EA272CB826C838903FBA8E970C6B5088_at_aliceadsl.fr" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-31 08:53:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2088.php">Gleb Natapov: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<li><strong>Previous message:</strong> <a href="2086.php">hpetit_at_[hidden]: "[OMPI users]  Re: Re:  MPI_Comm_spawn multiple bproc support"</a>
<li><strong>In reply to:</strong> <a href="2086.php">hpetit_at_[hidden]: "[OMPI users]  Re: Re:  MPI_Comm_spawn multiple bproc support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/11/2108.php">hpetit_at_[hidden]: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/11/2108.php">hpetit_at_[hidden]: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Aha! Thanks for your detailed information - that helps identify the problem.
<br>
<p>See some thoughts below.
<br>
Ralph
<br>
<p><p>On 10/31/06 3:49 AM, &quot;hpetit_at_[hidden]&quot; &lt;hpetit_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thank you for you quick reply Ralf,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As far as I know, the NODES environment variable is created when a job is
</span><br>
<span class="quotelev1">&gt; submitted to the bjs scheduler.
</span><br>
<span class="quotelev1">&gt; The only way I know (but I am a bproc newbe) is to use the bjssub command.
</span><br>
<p>That is correct. However, Open MPI requires that ALL of the nodes you are
<br>
going to use must be allocated in advance. In other words, you have to get
<br>
an allocation large enough to run your entire job - both the initial
<br>
application and anything you comm_spawn.
<br>
<p>I wish I could help you with the proper bjs commands to get an allocation,
<br>
but I am not familiar with bjs and (even after multiple Google searches)
<br>
cannot find any documentation on that code. Try doing a &quot;bjs --help&quot; and see
<br>
what it says.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then, I have retried my test with the following running command: &quot;bjssub -i
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 main_exe&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>&lt;snip&gt;
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I guess, this problem comes from the way I set the parameters to the spawned
</span><br>
<span class="quotelev1">&gt; program. Instead of giving instructions to spawn the program on a specific
</span><br>
<span class="quotelev1">&gt; host, I should set parameters to spawn the program on a specific node.
</span><br>
<span class="quotelev1">&gt; But I do not know how to do it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>What you did was fine. &quot;host&quot; is the correct field to set. I suspect two
<br>
possible issues:
<br>
<p>1. The specified host may not be in the allocation. In the case you showed
<br>
here, I would expect it to be since you specified the same host we are
<br>
already on. However, you might try running mpirun with the &quot;--nolocal&quot;
<br>
option - this will force mpirun to launch the processes on a machine other
<br>
than the one you are on (typically you are on the head node. In many bproc
<br>
machines, this node is not included in an allocation as the system admins
<br>
don't want you running MPI jobs on it).
<br>
<p>2. We may have something wrong in our code for this case. I'm not sure how
<br>
well that has been tested, especially in the 1.1 code branch.
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; Then, I have a bunch of questions:
</span><br>
<span class="quotelev1">&gt; - when mpi is used together with bproc, is it necessary to use bjssub or bjs
</span><br>
<span class="quotelev1">&gt; in general ?
</span><br>
<p>You have to use some kind of resource manager to obtain a node allocation
<br>
for your use. At our site, we use LSF - other people use bjs. Anything that
<br>
sets the NODE variable is fine.
<br>
<p><span class="quotelev1">&gt; - I was wondering if I had to submit to bjs the spawned program ? i.e do I
</span><br>
<span class="quotelev1">&gt; have to add 'bjssub' to the commands parameter of the MPI_Comm_spawn_mutliple
</span><br>
<span class="quotelev1">&gt; call ?
</span><br>
<p>You shouldn't have to do so. I suspect, however, that bjssub is not getting
<br>
a large enough allocation for your combined mpirun + spawned job. I'm not
<br>
familiar enough with bjs to know for certain.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As you can see, I am still not able to spawn a program and need some more help
</span><br>
<span class="quotelev1">&gt; ? 
</span><br>
<span class="quotelev1">&gt; Do you have a some examples describing how to do it ?
</span><br>
<p>Unfortunately, not in the 1.1 branch, nor do I have one for
<br>
comm_spawn_multiple that uses the &quot;host&quot; field. I can try to concoct
<br>
something over the next few days, though, and verify that our code is
<br>
working correctly.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Herve
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Date: Mon, 30 Oct 2006 09:00:47 -0700
</span><br>
<span class="quotelev1">&gt; From: Ralph H Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI_Comm_spawn multiple bproc support
</span><br>
<span class="quotelev1">&gt; problem
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users &lt;users_at_[hidden]&gt;&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;C16B6FBF.570D%rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;ISO-8859-1&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 1.1.2, what that error is telling you is that it didn't find any nodes in
</span><br>
<span class="quotelev1">&gt; the environment. The bproc allocator looks for an environmental variable
</span><br>
<span class="quotelev1">&gt; NODES that contains a list of nodes assigned to you. This error indicates it
</span><br>
<span class="quotelev1">&gt; didn't find anything.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did you get an allocation prior to running the job? Could you check to see
</span><br>
<span class="quotelev1">&gt; if NODES appears in your environment?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 10/30/06 8:47 AM, &quot;hpetit_at_[hidden]&quot; &lt;hpetit_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; I have a problem using the MPI_Comm_spawn multiple together with bproc.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I want to use the MPI_Comm_spawn multiple call to spawn a set of exe, but in
</span><br>
<span class="quotelev2">&gt;&gt; a
</span><br>
<span class="quotelev2">&gt;&gt; bproc environment, the program crashes or is stuck on this call (depending of
</span><br>
<span class="quotelev2">&gt;&gt; the used open mpi release).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have created one test program that spawns one other program on the same
</span><br>
<span class="quotelev2">&gt;&gt; host
</span><br>
<span class="quotelev2">&gt;&gt; (cf. code listing at the end of the mail).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * With open mpi 1.1.2, the program crashs on the MPI_Comm_spawn multiple
</span><br>
<span class="quotelev2">&gt;&gt; call:
</span><br>
<span class="quotelev2">&gt;&gt; &lt;---------------------------------&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [myhost:17061] [0,0,0] ORTE_ERROR_LOG: Not available in file ras_bjs.c at
</span><br>
<span class="quotelev2">&gt;&gt; line
</span><br>
<span class="quotelev2">&gt;&gt; 253
</span><br>
<span class="quotelev2">&gt;&gt; main_exe: Begining of main_exe
</span><br>
<span class="quotelev2">&gt;&gt; main_exe: Call MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; main_exe: Call MPI_Comm_spawn_multiple()
</span><br>
<span class="quotelev2">&gt;&gt; [myhost:17061] [0,0,0] ORTE_ERROR_LOG: Not available in file ras_bjs.c at
</span><br>
<span class="quotelev2">&gt;&gt; line
</span><br>
<span class="quotelev2">&gt;&gt; 253
</span><br>
<span class="quotelev2">&gt;&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev2">&gt;&gt; Failing at addr:(nil)
</span><br>
<span class="quotelev2">&gt;&gt; [0] func:/usr/local/Mpi/openmpi-1.1.2/lib/libopal.so.0 [0xb7f70ccf]
</span><br>
<span class="quotelev2">&gt;&gt; [1] func:[0xffffe440]
</span><br>
<span class="quotelev2">&gt;&gt; [2] 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
func:/usr/local/Mpi/openmpi-1.1.2/lib/liborte.so.0(orte_schema_base_get_node_&gt;&gt;
<br>
t
<br>
<span class="quotelev2">&gt;&gt; okens+0x7f) [0xb7fdc41f]
</span><br>
<span class="quotelev2">&gt;&gt; [3] 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
func:/usr/local/Mpi/openmpi-1.1.2/lib/liborte.so.0(orte_ras_base_node_assign+&gt;&gt;
<br>
0
<br>
<span class="quotelev2">&gt;&gt; x20b) [0xb7fd230b]
</span><br>
<span class="quotelev2">&gt;&gt; [4] 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
func:/usr/local/Mpi/openmpi-1.1.2/lib/liborte.so.0(orte_ras_base_allocate_nod&gt;&gt;
<br>
e
<br>
<span class="quotelev2">&gt;&gt; s+0x41) [0xb7fd0371]
</span><br>
<span class="quotelev2">&gt;&gt; [5] func:/usr/local/Mpi/openmpi-1.1.2/lib/openmpi/mca_ras_hostfile.so
</span><br>
<span class="quotelev2">&gt;&gt; [0xb7538ba8]
</span><br>
<span class="quotelev2">&gt;&gt; [6] 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
func:/usr/local/Mpi/openmpi-1.1.2/lib/liborte.so.0(orte_ras_base_allocate+0xd&gt;&gt;
<br>
0
<br>
<span class="quotelev2">&gt;&gt; ) [0xb7fd0470]
</span><br>
<span class="quotelev2">&gt;&gt; [7] func:/usr/local/Mpi/openmpi-1.1.2/lib/openmpi/mca_rmgr_urm.so
</span><br>
<span class="quotelev2">&gt;&gt; [0xb754d62f]
</span><br>
<span class="quotelev2">&gt;&gt; [8] 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
func:/usr/local/Mpi/openmpi-1.1.2/lib/liborte.so.0(orte_rmgr_base_cmd_dispatc&gt;&gt;
<br>
h
<br>
<span class="quotelev2">&gt;&gt; +0x137) [0xb7fd9187]
</span><br>
<span class="quotelev2">&gt;&gt; [9] func:/usr/local/Mpi/openmpi-1.1.2/lib/openmpi/mca_rmgr_urm.so
</span><br>
<span class="quotelev2">&gt;&gt; [0xb754e09e]
</span><br>
<span class="quotelev2">&gt;&gt; [10] func:/usr/local/Mpi/openmpi-1.1.2/lib/liborte.so.0 [0xb7fcd00e]
</span><br>
<span class="quotelev2">&gt;&gt; [11] func:/usr/local/Mpi/openmpi-1.1.2/lib/openmpi/mca_oob_tcp.so
</span><br>
<span class="quotelev2">&gt;&gt; [0xb7585084]
</span><br>
<span class="quotelev2">&gt;&gt; [12] func:/usr/local/Mpi/openmpi-1.1.2/lib/openmpi/mca_oob_tcp.so
</span><br>
<span class="quotelev2">&gt;&gt; [0xb7586763]
</span><br>
<span class="quotelev2">&gt;&gt; [13] 
</span><br>
<span class="quotelev2">&gt;&gt; func:/usr/local/Mpi/openmpi-1.1.2/lib/libopal.so.0(opal_event_loop+0x199)
</span><br>
<span class="quotelev2">&gt;&gt; [0xb7f5f7a9]
</span><br>
<span class="quotelev2">&gt;&gt; [14] func:/usr/local/Mpi/openmpi-1.1.2/lib/libopal.so.0 [0xb7f60353]
</span><br>
<span class="quotelev2">&gt;&gt; [15] func:/lib/tls/libpthread.so.0 [0xb7ef7b63]
</span><br>
<span class="quotelev2">&gt;&gt; [16] func:/lib/tls/libc.so.6(__clone+0x5a) [0xb7e9518a]
</span><br>
<span class="quotelev2">&gt;&gt; *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; &lt;-----------------------------------------------&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * With open mpi 1.1.1, the program is simply stuck on the MPI_Comm_spawn
</span><br>
<span class="quotelev2">&gt;&gt; multiple call:
</span><br>
<span class="quotelev2">&gt;&gt; &lt;---------------------------------&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [myhost:17187] [0,0,0] ORTE_ERROR_LOG: Not available in file ras_bjs.c at
</span><br>
<span class="quotelev2">&gt;&gt; line
</span><br>
<span class="quotelev2">&gt;&gt; 253
</span><br>
<span class="quotelev2">&gt;&gt; main_exe: Begining of main_exe
</span><br>
<span class="quotelev2">&gt;&gt; main_exe: Call MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; main_exe: Call MPI_Comm_spawn_multiple()
</span><br>
<span class="quotelev2">&gt;&gt; [myhost:17187] [0,0,0] ORTE_ERROR_LOG: Not available in file ras_bjs.c at
</span><br>
<span class="quotelev2">&gt;&gt; line
</span><br>
<span class="quotelev2">&gt;&gt; 253
</span><br>
<span class="quotelev2">&gt;&gt; &lt;---------------------------------&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * With open mpi 1.0.2, the program is also stuck on the MPI_Comm_spawn
</span><br>
<span class="quotelev2">&gt;&gt; multiple call but there is no ORTE_ERROR_LOG:
</span><br>
<span class="quotelev2">&gt;&gt; &lt;---------------------------------&gt;
</span><br>
<span class="quotelev2">&gt;&gt; main_exe: Begining of main_exe
</span><br>
<span class="quotelev2">&gt;&gt; main_exe: Call MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; main_exe: Call MPI_Comm_spawn_multiple()
</span><br>
<span class="quotelev2">&gt;&gt; &lt;---------------------------------&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * With open mpi 1.1.2 in a non bproc environment, the program works just fine
</span><br>
<span class="quotelev2">&gt;&gt; :
</span><br>
<span class="quotelev2">&gt;&gt; &lt;---------------------------------&gt;
</span><br>
<span class="quotelev2">&gt;&gt; main_exe: Begining of main_exe
</span><br>
<span class="quotelev2">&gt;&gt; main_exe: Call MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; main_exe: Call MPI_Comm_spawn_multiple()
</span><br>
<span class="quotelev2">&gt;&gt; spawned_exe: Begining of spawned_exe
</span><br>
<span class="quotelev2">&gt;&gt; spawned_exe: Call MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; main_exe: Back from MPI_Comm_spawn_multiple() result = 0
</span><br>
<span class="quotelev2">&gt;&gt; main_exe: Spawned exe returned errcode = 0
</span><br>
<span class="quotelev2">&gt;&gt; spawned_exe: This exe does not do really much thing actually
</span><br>
<span class="quotelev2">&gt;&gt; main_exe: Call MPI_finalize
</span><br>
<span class="quotelev2">&gt;&gt; main_exe: End of main_exe
</span><br>
<span class="quotelev2">&gt;&gt; &lt;---------------------------------&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you help me to solve this problem ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Herve
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The bproc release is:
</span><br>
<span class="quotelev2">&gt;&gt; bproc: Beowulf Distributed Process Space Version 4.0.0pre8
</span><br>
<span class="quotelev2">&gt;&gt; bproc: (C) 1999-2003 Erik Hendriks &lt;erik_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; bproc: Initializing node set. node_ct=1 id_ct=1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; the system is a debian sarge with a 2.6.9 kernel installed and patched with
</span><br>
<span class="quotelev2">&gt;&gt; bproc.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Eventually, I provide to you the ompi_info log fot he open mpi 1.1.2 release:
</span><br>
<span class="quotelev2">&gt;&gt;                 Open MPI: 1.1.2
</span><br>
<span class="quotelev2">&gt;&gt;    Open MPI SVN revision: r12073
</span><br>
<span class="quotelev2">&gt;&gt;                 Open RTE: 1.1.2
</span><br>
<span class="quotelev2">&gt;&gt;    Open RTE SVN revision: r12073
</span><br>
<span class="quotelev2">&gt;&gt;                     OPAL: 1.1.2
</span><br>
<span class="quotelev2">&gt;&gt;        OPAL SVN revision: r12073
</span><br>
<span class="quotelev2">&gt;&gt;                   Prefix: /usr/local/Mpi/openmpi-1.1.2
</span><br>
<span class="quotelev2">&gt;&gt;  Configured architecture: i686-pc-linux-gnu
</span><br>
<span class="quotelev2">&gt;&gt;            Configured by: itrsat
</span><br>
<span class="quotelev2">&gt;&gt;            Configured on: Mon Oct 23 12:55:17 CEST 2006
</span><br>
<span class="quotelev2">&gt;&gt;           Configure host: myhost
</span><br>
<span class="quotelev2">&gt;&gt;                 Built by: setics
</span><br>
<span class="quotelev2">&gt;&gt;                 Built on: lun oct 23 13:09:47 CEST 2006
</span><br>
<span class="quotelev2">&gt;&gt;               Built host: myhost
</span><br>
<span class="quotelev2">&gt;&gt;               C bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;             C++ bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran77 bindings: no
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran90 bindings: no
</span><br>
<span class="quotelev2">&gt;&gt;  Fortran90 bindings size: na
</span><br>
<span class="quotelev2">&gt;&gt;               C compiler: gcc
</span><br>
<span class="quotelev2">&gt;&gt;      C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt;             C++ compiler: g++
</span><br>
<span class="quotelev2">&gt;&gt;    C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran77 compiler: none
</span><br>
<span class="quotelev2">&gt;&gt;   Fortran77 compiler abs: none
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran90 compiler: none
</span><br>
<span class="quotelev2">&gt;&gt;   Fortran90 compiler abs: none
</span><br>
<span class="quotelev2">&gt;&gt;              C profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;            C++ profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;      Fortran77 profiling: no
</span><br>
<span class="quotelev2">&gt;&gt;      Fortran90 profiling: no
</span><br>
<span class="quotelev2">&gt;&gt;           C++ exceptions: no
</span><br>
<span class="quotelev2">&gt;&gt;           Thread support: posix (mpi: yes, progress: yes)
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
<span class="quotelev2">&gt;&gt;               MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA timer: linux (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: basic (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: hierarch (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: self (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: tuned (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA io: romio (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA rcache: rb (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: self (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: sm (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA topo: unity (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA gpr: null (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA gpr: replica (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA iof: proxy (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ns: proxy (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ns: replica (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: bjs (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: dash_host (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: hostfile (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: localhost (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: lsf_bproc (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: poe (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: slurm (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rds: hostfile (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rds: resfile (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmaps: round_robin (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rmgr: proxy (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rmgr: urm (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: bproc (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: bproc_orted (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: fork (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: rsh (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: slurm (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: bproc (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: env (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: singleton (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: slurm (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA soh: bproc (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here below, the code listings:
</span><br>
<span class="quotelev2">&gt;&gt; * main_exe.c
</span><br>
<span class="quotelev2">&gt;&gt; &lt;-------------------------------------------------------------------&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int gethostname(char *nom, size_t lg);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; int main( int argc, char **argv ) {
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     /* 
</span><br>
<span class="quotelev2">&gt;&gt;      * MPI_Comm_spawn_multiple parameters
</span><br>
<span class="quotelev2">&gt;&gt;      */
</span><br>
<span class="quotelev2">&gt;&gt;     int result, count, root;
</span><br>
<span class="quotelev2">&gt;&gt;     int maxprocs;
</span><br>
<span class="quotelev2">&gt;&gt;     char **commands;
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Info infos;
</span><br>
<span class="quotelev2">&gt;&gt;     int errcodes;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm intercomm, newintracomm;
</span><br>
<span class="quotelev2">&gt;&gt;     int rank;
</span><br>
<span class="quotelev2">&gt;&gt;     char hostname[80];
</span><br>
<span class="quotelev2">&gt;&gt;     int len;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt;     printf( &quot;main_exe: Begining of main_exe\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;     printf( &quot;main_exe: Call MPI_Init\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Init( &amp;argc, &amp;argv );
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm_rank( MPI_COMM_WORLD, &amp;rank );
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     /* 
</span><br>
<span class="quotelev2">&gt;&gt;      * MPI_Comm_spawn_multiple parameters
</span><br>
<span class="quotelev2">&gt;&gt;      */
</span><br>
<span class="quotelev2">&gt;&gt;     count = 1;
</span><br>
<span class="quotelev2">&gt;&gt;     maxprocs = 1;
</span><br>
<span class="quotelev2">&gt;&gt;     root = rank;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt;     commands = malloc (sizeof (char *));
</span><br>
<span class="quotelev2">&gt;&gt;     commands[0] = calloc (80, sizeof (char ));
</span><br>
<span class="quotelev2">&gt;&gt;     sprintf (commands[0], &quot;./spawned_exe&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;         
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Info_create( &amp;infos );
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt;     /* set proc/cpu info */
</span><br>
<span class="quotelev2">&gt;&gt;     result = MPI_Info_set( infos, &quot;soft&quot;, &quot;0:1&quot; );
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt;     /* set host info */
</span><br>
<span class="quotelev2">&gt;&gt;     result = gethostname ( hostname, len);
</span><br>
<span class="quotelev2">&gt;&gt;     if ( -1 == result ) {
</span><br>
<span class="quotelev2">&gt;&gt;         printf (&quot;main_exe: Problem in gethostname\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;     result = MPI_Info_set( infos, &quot;host&quot;, hostname );
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     printf( &quot;main_exe: Call MPI_Comm_spawn_multiple()\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;     result = MPI_Comm_spawn_multiple( count,
</span><br>
<span class="quotelev2">&gt;&gt;                                       commands,
</span><br>
<span class="quotelev2">&gt;&gt;                                       MPI_ARGVS_NULL,
</span><br>
<span class="quotelev2">&gt;&gt;                                       &amp;maxprocs,
</span><br>
<span class="quotelev2">&gt;&gt;                                       &amp;infos,
</span><br>
<span class="quotelev2">&gt;&gt;                                       root,
</span><br>
<span class="quotelev2">&gt;&gt;                                       MPI_COMM_WORLD,
</span><br>
<span class="quotelev2">&gt;&gt;                                       &amp;intercomm,
</span><br>
<span class="quotelev2">&gt;&gt;                                       &amp;errcodes  );
</span><br>
<span class="quotelev2">&gt;&gt;     printf( &quot;main_exe: Back from MPI_Comm_spawn_multiple() result = %d\n&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; result);
</span><br>
<span class="quotelev2">&gt;&gt;     printf( &quot;main_exe: Spawned exe returned errcode = %d\n&quot;, errcodes );
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Intercomm_merge( intercomm, 0, &amp;newintracomm );
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     /* Synchronisation with spawned exe */
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Barrier( newintracomm );
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     free( commands[0] );
</span><br>
<span class="quotelev2">&gt;&gt;     free( commands );
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm_free( &amp;newintracomm );
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     printf( &quot;main_exe: Call MPI_finalize\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Finalize( );
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     printf( &quot;main_exe: End of main_exe\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;     return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;-------------------------------------------------------------------&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * spawned_exe.c
</span><br>
<span class="quotelev2">&gt;&gt; &lt;-------------------------------------------------------------------&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; int main( int argc, char **argv ) {
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm parent, newintracomm;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     printf (&quot;spawned_exe: Begining of spawned_exe\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;     printf( &quot;spawned_exe: Call MPI_Init\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Init( &amp;argc, &amp;argv );
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm_get_parent ( &amp;parent );
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Intercomm_merge ( parent, 1, &amp;newintracomm );
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     printf( &quot;spawned_exe: This exe does not do really much thing actually\n&quot;
</span><br>
<span class="quotelev2">&gt;&gt; );
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     /* Synchronisation with main exe */
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Barrier( newintracomm );
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm_free( &amp;newintracomm );
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     printf( &quot;spawned_exe: Call MPI_finalize\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Finalize( );
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     printf( &quot;spawned_exe: End of spawned_exe\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;     return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;-------------------------------------------------------------------&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------- ALICE SECURITE ENFANTS ---------------------
</span><br>
<span class="quotelev1">&gt; Prot&#233;gez vos enfants des dangers d'Internet en installant S&#233;curit&#233; Enfants, le
</span><br>
<span class="quotelev1">&gt; contr&#244;le parental d'Alice.
</span><br>
<span class="quotelev1">&gt; <a href="http://www.aliceadsl.fr/securitepc/default_copa.asp">http://www.aliceadsl.fr/securitepc/default_copa.asp</a>
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2088.php">Gleb Natapov: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<li><strong>Previous message:</strong> <a href="2086.php">hpetit_at_[hidden]: "[OMPI users]  Re: Re:  MPI_Comm_spawn multiple bproc support"</a>
<li><strong>In reply to:</strong> <a href="2086.php">hpetit_at_[hidden]: "[OMPI users]  Re: Re:  MPI_Comm_spawn multiple bproc support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/11/2108.php">hpetit_at_[hidden]: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/11/2108.php">hpetit_at_[hidden]: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
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
