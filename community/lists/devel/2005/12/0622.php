<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Dec 16 10:47:13 2005" -->
<!-- isoreceived="20051216154713" -->
<!-- sent="Fri, 16 Dec 2005 08:47:24 -0700" -->
<!-- isosent="20051216154724" -->
<!-- name="Greg Watson" -->
<!-- email="gwatson_at_[hidden]" -->
<!-- subject="Re:  sm btl/signal 11 problem on Linux" -->
<!-- id="C8E2CD2D-6867-47C4-AF7C-5E3891D48DA7_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4d7f520eeac6c7b132154df4f6cd50b5_at_open-mpi.org" -->
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
<strong>From:</strong> Greg Watson (<em>gwatson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-16 10:47:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0623.php">Jeff Squyres: "Re:  sm btl/signal 11 problem on Linux"</a>
<li><strong>Previous message:</strong> <a href="0621.php">Jeff Squyres: "Fwd: [PATCH] Update ompi to new OpenIB libibverbs API"</a>
<li><strong>In reply to:</strong> <a href="0574.php">Jeff Squyres: "Re:  sm btl/signal 11 problem on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0623.php">Jeff Squyres: "Re:  sm btl/signal 11 problem on Linux"</a>
<li><strong>Reply:</strong> <a href="0623.php">Jeff Squyres: "Re:  sm btl/signal 11 problem on Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>I finally worked out why I couldn't reproduce the problem. You're not  
<br>
going to like it though.
<br>
<p>As before, this is running on FC4 and I'm using 1.0.1r8453 (the 1.0.1  
<br>
release version).
<br>
<p>First test:
<br>
<p>$ ./configure --with-devel-headers --prefix=/usr/local/ompi
<br>
$ make
<br>
$ make install
<br>
$ mpicc -o x x.c
<br>
$ mpirun -d -np 2 ./x
<br>
<p>[localhost.localdomain:10085] [0,0,0] setting up session dir with
<br>
[localhost.localdomain:10085]   universe default-universe
<br>
[localhost.localdomain:10085]   user greg
<br>
[localhost.localdomain:10085]   host localhost.localdomain
<br>
[localhost.localdomain:10085]   jobid 0
<br>
[localhost.localdomain:10085]   procid 0
<br>
[localhost.localdomain:10085] procdir: /tmp/openmpi-sessions- 
<br>
greg_at_localhost.localdomain_0/default-universe/0/0
<br>
[localhost.localdomain:10085] jobdir: /tmp/openmpi-sessions- 
<br>
greg_at_localhost.localdomain_0/default-universe/0
<br>
[localhost.localdomain:10085] unidir: /tmp/openmpi-sessions- 
<br>
greg_at_localhost.localdomain_0/default-universe
<br>
[localhost.localdomain:10085] top: openmpi-sessions- 
<br>
greg_at_localhost.localdomain_0
<br>
[localhost.localdomain:10085] tmp: /tmp
<br>
[localhost.localdomain:10085] [0,0,0] contact_file /tmp/openmpi- 
<br>
sessions-greg_at_localhost.localdomain_0/default-universe/universe- 
<br>
setup.txt
<br>
[localhost.localdomain:10085] [0,0,0] wrote setup file
<br>
[localhost.localdomain:10085] spawn: in job_state_callback(jobid = 1,  
<br>
state = 0x1)
<br>
[localhost.localdomain:10085] pls:rsh: local csh: 0, local bash: 1
<br>
[localhost.localdomain:10085] pls:rsh: assuming same remote shell as  
<br>
local shell
<br>
[localhost.localdomain:10085] pls:rsh: remote csh: 0, remote bash: 1
<br>
[localhost.localdomain:10085] pls:rsh: final template argv:
<br>
[localhost.localdomain:10085] pls:rsh:     ssh &lt;template&gt; orted -- 
<br>
debug --bootproxy 1 --name &lt;template&gt; --num_procs 2 --vpid_start 0 -- 
<br>
nodename &lt;template&gt; --universe greg_at_localhost.localdomain:default- 
<br>
universe --nsreplica &quot;0.0.0;tcp://10.0.1.103:32818&quot; --gprreplica  
<br>
&quot;0.0.0;tcp://10.0.1.103:32818&quot; --mpi-call-yield 0
<br>
[localhost.localdomain:10085] pls:rsh: launching on node localhost
<br>
[localhost.localdomain:10085] pls:rsh: oversubscribed -- setting  
<br>
mpi_yield_when_idle to 1 (1 2)
<br>
[localhost.localdomain:10085] sess_dir_finalize: proc session dir not  
<br>
empty - leaving
<br>
[localhost.localdomain:10085] spawn: in job_state_callback(jobid = 1,  
<br>
state = 0xa)
<br>
mpirun noticed that job rank 1 with PID 0 on node &quot;localhost&quot; exited  
<br>
on signal 11.
<br>
[localhost.localdomain:10085] sess_dir_finalize: proc session dir not  
<br>
empty - leaving
<br>
[localhost.localdomain:10085] spawn: in job_state_callback(jobid = 1,  
<br>
state = 0x9)
<br>
[localhost.localdomain:10085] ERROR: A daemon on node localhost  
<br>
failed to startas expected.
<br>
[localhost.localdomain:10085] ERROR: There may be more information  
<br>
available from
<br>
[localhost.localdomain:10085] ERROR: the remote shell (see above).
<br>
[localhost.localdomain:10085] The daemon received a signal 11 (with  
<br>
core).
<br>
1 additional process aborted (not shown)
<br>
[localhost.localdomain:10085] sess_dir_finalize: found proc session  
<br>
dir empty -deleting
<br>
[localhost.localdomain:10085] sess_dir_finalize: found job session  
<br>
dir empty - deleting
<br>
[localhost.localdomain:10085] sess_dir_finalize: found univ session  
<br>
dir empty -deleting
<br>
[localhost.localdomain:10085] sess_dir_finalize: found top session  
<br>
dir empty - deleting
<br>
<p>Here's the stacktracefrom the core file:
<br>
<p>#0  0x00e93fe8 in orte_pls_rsh_launch ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/ompi/lib/openmpi/mca_pls_rsh.so
<br>
#1  0x0023c642 in orte_rmgr_urm_spawn ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/ompi/lib/openmpi/mca_rmgr_urm.so
<br>
#2  0x0804a0d4 in orterun (argc=5, argv=0xbfab2e84) at orterun.c:373
<br>
#3  0x08049b16 in main (argc=5, argv=0xbfab2e84) at main.c:13
<br>
<p>Now reconfigure with debugging enabled:
<br>
<p>$ CFLAGS=-g ./configure --with-devel-headers --prefix=/usr/local/ompi
<br>
$ make
<br>
$ make install
<br>
$ mpicc -o x x.c
<br>
$ mpirun -d -np 2 ./x
<br>
<p>[localhost.localdomain:10166] [0,0,0] setting up session dir with
<br>
[localhost.localdomain:10166]   universe default-universe
<br>
[localhost.localdomain:10166]   user greg
<br>
[localhost.localdomain:10166]   host localhost.localdomain
<br>
[localhost.localdomain:10166]   jobid 0
<br>
[localhost.localdomain:10166]   procid 0
<br>
[localhost.localdomain:10166] procdir: /tmp/openmpi-sessions- 
<br>
greg_at_localhost.localdomain_0/default-universe/0/0
<br>
[localhost.localdomain:10166] jobdir: /tmp/openmpi-sessions- 
<br>
greg_at_localhost.localdomain_0/default-universe/0
<br>
[localhost.localdomain:10166] unidir: /tmp/openmpi-sessions- 
<br>
greg_at_localhost.localdomain_0/default-universe
<br>
[localhost.localdomain:10166] top: openmpi-sessions- 
<br>
greg_at_localhost.localdomain_0
<br>
[localhost.localdomain:10166] tmp: /tmp
<br>
[localhost.localdomain:10166] [0,0,0] contact_file /tmp/openmpi- 
<br>
sessions-greg_at_localhost.localdomain_0/default-universe/universe- 
<br>
setup.txt
<br>
[localhost.localdomain:10166] [0,0,0] wrote setup file
<br>
[localhost.localdomain:10166] spawn: in job_state_callback(jobid = 1,  
<br>
state = 0x1)
<br>
[localhost.localdomain:10166] pls:rsh: local csh: 0, local bash: 1
<br>
[localhost.localdomain:10166] pls:rsh: assuming same remote shell as  
<br>
local shell
<br>
[localhost.localdomain:10166] pls:rsh: remote csh: 0, remote bash: 1
<br>
[localhost.localdomain:10166] pls:rsh: final template argv:
<br>
[localhost.localdomain:10166] pls:rsh:     ssh &lt;template&gt; orted -- 
<br>
debug --bootproxy 1 --name &lt;template&gt; --num_procs 2 --vpid_start 0 -- 
<br>
nodename &lt;template&gt; --universe greg_at_localhost.localdomain:default- 
<br>
universe --nsreplica &quot;0.0.0;tcp://10.0.1.103:32820&quot; --gprreplica  
<br>
&quot;0.0.0;tcp://10.0.1.103:32820&quot; --mpi-call-yield 0
<br>
[localhost.localdomain:10166] pls:rsh: launching on node localhost
<br>
[localhost.localdomain:10166] pls:rsh: oversubscribed -- setting  
<br>
mpi_yield_when_idle to 1 (1 2)
<br>
[localhost.localdomain:10166] pls:rsh: localhost is a LOCAL node
<br>
[localhost.localdomain:10166] pls:rsh: executing: orted --debug -- 
<br>
bootproxy 1 --name 0.0.1 --num_procs 2 --vpid_start 0 --nodename  
<br>
localhost --universe greg_at_localhost.localdomain:default-universe -- 
<br>
nsreplica &quot;0.0.0;tcp://10.0.1.103:32820&quot; --gprreplica &quot;0.0.0;tcp:// 
<br>
10.0.1.103:32820&quot; --mpi-call-yield 1
<br>
[localhost.localdomain:10167] [0,0,1] setting up session dir with
<br>
[localhost.localdomain:10167]   universe default-universe
<br>
[localhost.localdomain:10167]   user greg
<br>
[localhost.localdomain:10167]   host localhost
<br>
[localhost.localdomain:10167]   jobid 0
<br>
[localhost.localdomain:10167]   procid 1
<br>
[localhost.localdomain:10167] procdir: /tmp/openmpi-sessions- 
<br>
greg_at_localhost_0/default-universe/0/1
<br>
[localhost.localdomain:10167] jobdir: /tmp/openmpi-sessions- 
<br>
greg_at_localhost_0/default-universe/0
<br>
[localhost.localdomain:10167] unidir: /tmp/openmpi-sessions- 
<br>
greg_at_localhost_0/default-universe
<br>
[localhost.localdomain:10167] top: openmpi-sessions-greg_at_localhost_0
<br>
[localhost.localdomain:10167] tmp: /tmp
<br>
[localhost.localdomain:10169] [0,1,1] setting up session dir with
<br>
[localhost.localdomain:10169]   universe default-universe
<br>
[localhost.localdomain:10169]   user greg
<br>
[localhost.localdomain:10169]   host localhost
<br>
[localhost.localdomain:10169]   jobid 1
<br>
[localhost.localdomain:10169]   procid 1
<br>
[localhost.localdomain:10169] procdir: /tmp/openmpi-sessions- 
<br>
greg_at_localhost_0/default-universe/1/1
<br>
[localhost.localdomain:10169] jobdir: /tmp/openmpi-sessions- 
<br>
greg_at_localhost_0/default-universe/1
<br>
[localhost.localdomain:10169] unidir: /tmp/openmpi-sessions- 
<br>
greg_at_localhost_0/default-universe
<br>
[localhost.localdomain:10169] top: openmpi-sessions-greg_at_localhost_0
<br>
[localhost.localdomain:10169] tmp: /tmp
<br>
[localhost.localdomain:10170] [0,1,0] setting up session dir with
<br>
[localhost.localdomain:10170]   universe default-universe
<br>
[localhost.localdomain:10170]   user greg
<br>
[localhost.localdomain:10170]   host localhost
<br>
[localhost.localdomain:10170]   jobid 1
<br>
[localhost.localdomain:10170]   procid 0
<br>
[localhost.localdomain:10170] procdir: /tmp/openmpi-sessions- 
<br>
greg_at_localhost_0/default-universe/1/0
<br>
[localhost.localdomain:10170] jobdir: /tmp/openmpi-sessions- 
<br>
greg_at_localhost_0/default-universe/1
<br>
[localhost.localdomain:10170] unidir: /tmp/openmpi-sessions- 
<br>
greg_at_localhost_0/default-universe
<br>
[localhost.localdomain:10170] top: openmpi-sessions-greg_at_localhost_0
<br>
[localhost.localdomain:10170] tmp: /tmp
<br>
[localhost.localdomain:10166] spawn: in job_state_callback(jobid = 1,  
<br>
state = 0x3)
<br>
[localhost.localdomain:10166] Info: Setting up debugger process table  
<br>
for applications
<br>
&nbsp;&nbsp;&nbsp;MPIR_being_debugged = 0
<br>
&nbsp;&nbsp;&nbsp;MPIR_debug_gate = 0
<br>
&nbsp;&nbsp;&nbsp;MPIR_debug_state = 1
<br>
&nbsp;&nbsp;&nbsp;MPIR_acquired_pre_main = 0
<br>
&nbsp;&nbsp;&nbsp;MPIR_i_am_starter = 0
<br>
&nbsp;&nbsp;&nbsp;MPIR_proctable_size = 2
<br>
&nbsp;&nbsp;&nbsp;MPIR_proctable:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (0, localhost, ./x, 10169)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (1, localhost, ./x, 10170)
<br>
[localhost.localdomain:10166] spawn: in job_state_callback(jobid = 1,  
<br>
state = 0x4)
<br>
[localhost.localdomain:10170] [0,1,0] ompi_mpi_init completed
<br>
[localhost.localdomain:10169] [0,1,1] ompi_mpi_init completed
<br>
my tid is 0
<br>
my tid is 1
<br>
[localhost.localdomain:10166] spawn: in job_state_callback(jobid = 1,  
<br>
state = 0x7)
<br>
[localhost.localdomain:10166] spawn: in job_state_callback(jobid = 1,  
<br>
state = 0x8)
<br>
[localhost.localdomain:10167] sess_dir_finalize: proc session dir not  
<br>
empty - leaving
<br>
[localhost.localdomain:10170] sess_dir_finalize: found proc session  
<br>
dir empty -deleting
<br>
[localhost.localdomain:10169] sess_dir_finalize: found proc session  
<br>
dir empty -deleting
<br>
[localhost.localdomain:10170] sess_dir_finalize: job session dir not  
<br>
empty - leaving
<br>
[localhost.localdomain:10167] sess_dir_finalize: proc session dir not  
<br>
empty - leaving
<br>
[localhost.localdomain:10167] orted: job_state_callback(jobid = 1,  
<br>
state = ORTE_PROC_STATE_TERMINATED)
<br>
[localhost.localdomain:10167] sess_dir_finalize: found proc session  
<br>
dir empty -deleting
<br>
[localhost.localdomain:10167] sess_dir_finalize: found job session  
<br>
dir empty - deleting
<br>
[localhost.localdomain:10167] sess_dir_finalize: found univ session  
<br>
dir empty -deleting
<br>
[localhost.localdomain:10167] sess_dir_finalize: found top session  
<br>
dir empty - deleting
<br>
<p>So it looks like you're doing something that breaks with normal  
<br>
optimization (I presume -O3) but works otherwise.
<br>
<p>FC4 is using gcc 4.0.0 20050519.
<br>
<p>Suggestions on how to proceed would be appreciated.
<br>
<p>Greg
<br>
<p>On Dec 1, 2005, at 9:19 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Dec 1, 2005, at 10:58 AM, Greg Watson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; @#$%^&amp; it! I can't get the problem to manifest for either branch now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well, that's good for me.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, the problem existed on systems that could/would return different
</span><br>
<span class="quotelev1">&gt; addresses in different processes from mmap() for memory that was  
</span><br>
<span class="quotelev1">&gt; common
</span><br>
<span class="quotelev1">&gt; to all of them.  E.g., if processes A and B share common memory Z, A
</span><br>
<span class="quotelev1">&gt; would get virtual address M for Z, and B would get virtual address N
</span><br>
<span class="quotelev1">&gt; (as opposed to both A and B getting virtual address M).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's the history of what happened...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We had code paths for that situation in the sm btl (i.e., when A and B
</span><br>
<span class="quotelev1">&gt; get different addresses for the same shared memory), but  
</span><br>
<span class="quotelev1">&gt; unbeknownst to
</span><br>
<span class="quotelev1">&gt; us, mmap() on most systems seems to return the same value in A and B
</span><br>
<span class="quotelev1">&gt; (this could be a side-effect of typical MPI testing memory usage
</span><br>
<span class="quotelev1">&gt; patterns... I don't know).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But FC3 and FC4 consistently did not seem to follow this pattern --
</span><br>
<span class="quotelev1">&gt; they would return different values from mmap() in different processes.
</span><br>
<span class="quotelev1">&gt; Unfortunately, we did not do any testing on FC3 or FC4 systems until a
</span><br>
<span class="quotelev1">&gt; few weeks before SC, and discovered that some of our
</span><br>
<span class="quotelev1">&gt; previously-unknowingly-untested sm bootstrap code paths had some bugs.
</span><br>
<span class="quotelev1">&gt; I fixed all of those and brought [almost all of] them over to the 1.0
</span><br>
<span class="quotelev1">&gt; release branch.  I missed one patch in v1.0, but it will be  
</span><br>
<span class="quotelev1">&gt; included in
</span><br>
<span class="quotelev1">&gt; v1.0.1, to be released shortly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I'd be surprised if you were still seeing this bug in either branch
</span><br>
<span class="quotelev1">&gt; -- as far as I know, I fixed all the issues.  More specifically, if  
</span><br>
<span class="quotelev1">&gt; you 
</span><br>
<span class="quotelev1">&gt; see this behavior, it will probably be in *both* branches.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me know if you run across it again.  Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev1">&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev1">&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0623.php">Jeff Squyres: "Re:  sm btl/signal 11 problem on Linux"</a>
<li><strong>Previous message:</strong> <a href="0621.php">Jeff Squyres: "Fwd: [PATCH] Update ompi to new OpenIB libibverbs API"</a>
<li><strong>In reply to:</strong> <a href="0574.php">Jeff Squyres: "Re:  sm btl/signal 11 problem on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0623.php">Jeff Squyres: "Re:  sm btl/signal 11 problem on Linux"</a>
<li><strong>Reply:</strong> <a href="0623.php">Jeff Squyres: "Re:  sm btl/signal 11 problem on Linux"</a>
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
