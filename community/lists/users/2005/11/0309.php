<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov 10 10:03:00 2005" -->
<!-- isoreceived="20051110150300" -->
<!-- sent="Fri, 11 Nov 2005 02:01:29 +1100" -->
<!-- isosent="20051110150129" -->
<!-- name="Clement Chu" -->
<!-- email="clement.chu_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4" -->
<!-- id="437360C9.7060909_at_csse.monash.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6910cfa662c05f61d4414b47079e7865_at_open-mpi.org" -->
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
<strong>From:</strong> Clement Chu (<em>clement.chu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-10 10:01:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0310.php">Clement Chu: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>Previous message:</strong> <a href="0308.php">Jeff Squyres: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>In reply to:</strong> <a href="0308.php">Jeff Squyres: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0314.php">Jeff Squyres: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>Reply:</strong> <a href="0314.php">Jeff Squyres: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
[clement_at_kfc TestMPI]$ mpirun -d -np 2 test
<br>
[kfc:29199] procdir: (null)
<br>
[kfc:29199] jobdir: (null)
<br>
[kfc:29199] unidir: /tmp/openmpi-sessions-clement_at_kfc_0/default-universe
<br>
[kfc:29199] top: openmpi-sessions-clement_at_kfc_0
<br>
[kfc:29199] tmp: /tmp
<br>
[kfc:29199] [0,0,0] setting up session dir with
<br>
[kfc:29199]     tmpdir /tmp
<br>
[kfc:29199]     universe default-universe-29199
<br>
[kfc:29199]     user clement
<br>
[kfc:29199]     host kfc
<br>
[kfc:29199]     jobid 0
<br>
[kfc:29199]     procid 0
<br>
[kfc:29199] procdir: 
<br>
/tmp/openmpi-sessions-clement_at_kfc_0/default-universe-29199/0/0
<br>
[kfc:29199] jobdir: 
<br>
/tmp/openmpi-sessions-clement_at_kfc_0/default-universe-29199/0
<br>
[kfc:29199] unidir: 
<br>
/tmp/openmpi-sessions-clement_at_kfc_0/default-universe-29199
<br>
[kfc:29199] top: openmpi-sessions-clement_at_kfc_0
<br>
[kfc:29199] tmp: /tmp
<br>
[kfc:29199] [0,0,0] contact_file 
<br>
/tmp/openmpi-sessions-clement_at_kfc_0/default-universe-29199/universe-setup.txt
<br>
[kfc:29199] [0,0,0] wrote setup file
<br>
[kfc:29199] pls:rsh: local csh: 0, local bash: 1
<br>
[kfc:29199] pls:rsh: assuming same remote shell as local shell
<br>
[kfc:29199] pls:rsh: remote csh: 0, remote bash: 1
<br>
[kfc:29199] pls:rsh: final template argv:
<br>
[kfc:29199] pls:rsh:     ssh &lt;template&gt; orted --debug --bootproxy 1 
<br>
--name &lt;template&gt; --num_procs 2 --vpid_start 0 --nodename &lt;template&gt; 
<br>
--universe clement_at_kfc:default-universe-29199 --nsreplica 
<br>
&quot;0.0.0;tcp://192.168.11.101:32784&quot; --gprreplica 
<br>
&quot;0.0.0;tcp://192.168.11.101:32784&quot; --mpi-call-yield 0
<br>
[kfc:29199] pls:rsh: launching on node localhost
<br>
[kfc:29199] pls:rsh: oversubscribed -- setting mpi_yield_when_idle to 1 
<br>
(1 2)
<br>
[kfc:29199] sess_dir_finalize: proc session dir not empty - leaving
<br>
[kfc:29199] spawn: in job_state_callback(jobid = 1, state = 0xa)
<br>
mpirun noticed that job rank 1 with PID 0 on node &quot;localhost&quot; exited on 
<br>
signal 11.
<br>
[kfc:29199] sess_dir_finalize: proc session dir not empty - leaving
<br>
[kfc:29199] spawn: in job_state_callback(jobid = 1, state = 0x9)
<br>
[kfc:29199] ERROR: A daemon on node localhost failed to start as expected.
<br>
[kfc:29199] ERROR: There may be more information available from
<br>
[kfc:29199] ERROR: the remote shell (see above).
<br>
[kfc:29199] The daemon received a signal 11.
<br>
1 additional process aborted (not shown)
<br>
[kfc:29199] sess_dir_finalize: found proc session dir empty - deleting
<br>
[kfc:29199] sess_dir_finalize: found job session dir empty - deleting
<br>
[kfc:29199] sess_dir_finalize: found univ session dir empty - deleting
<br>
[kfc:29199] sess_dir_finalize: top session dir not empty - leaving
<br>
<p><p>opmi_info output message:
<br>
<p>[clement_at_kfc TestMPI]$ ompi_info
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.0rc5r8053
<br>
&nbsp;&nbsp;&nbsp;Open MPI SVN revision: r8053
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.0rc5r8053
<br>
&nbsp;&nbsp;&nbsp;Open RTE SVN revision: r8053
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.0rc5r8053
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: r8053
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix: /home/clement/openmpi
<br>
&nbsp;Configured architecture: i686-pc-linux-gnu
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured by: clement
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured on: Fri Nov 11 00:37:23 EST 2005
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: kfc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built by: clement
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built on: Fri Nov 11 00:59:26 EST 2005
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built host: kfc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 bindings: yes (all)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/bin/gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler: g++
<br>
&nbsp;&nbsp;&nbsp;C++ compiler absolute: /usr/bin/g++
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 compiler: gfortran
<br>
&nbsp;&nbsp;Fortran77 compiler abs: /usr/bin/gfortran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 compiler: gfortran
<br>
&nbsp;&nbsp;Fortran90 compiler abs: /usr/bin/gfortran
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libltdl support: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA memory: malloc_hooks (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA timer: linux (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: basic (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: self (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: sm (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA io: romio (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: sm (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: teg (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: uniq (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ptl: self (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ptl: sm (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ptl: tcp (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: self (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: sm (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA topo: unity (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA gpr: null (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA gpr: replica (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: proxy (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: svc (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ns: proxy (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ns: replica (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: dash_host (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: hostfile (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: localhost (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: slurm (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rds: hostfile (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rds: resfile (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: round_robin (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmgr: proxy (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmgr: urm (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rml: oob (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: fork (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: proxy (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: rsh (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: slurm (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: env (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: pipe (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: seed (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: singleton (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: slurm (MCA v1.0, API v1.0, Component v1.0)
<br>
[clement_at_kfc TestMPI]$
<br>
<p><p><p>Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt;I'm sorry -- I wasn't entirely clear:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;1. Are you using a 1.0 nightly tarball or a 1.1 nightly tarball?  We 
</span><br>
<span class="quotelev1">&gt;have made a bunch of fixes to the 1.1 tree (i.e., the Subversion 
</span><br>
<span class="quotelev1">&gt;trunk), but have not fully vetted them yet, so they have not yet been 
</span><br>
<span class="quotelev1">&gt;taken to the 1.0 release branch yet.  If you have not done so already, 
</span><br>
<span class="quotelev1">&gt;could you try a tarball from the trunk?  
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;2. The error you are seeing looks like a proxy process is failing to 
</span><br>
<span class="quotelev1">&gt;start because it seg faults.  Are you getting corefiles?  If so, can 
</span><br>
<span class="quotelev1">&gt;you send the backtrace?  The corefile should be from the 
</span><br>
<span class="quotelev1">&gt;$prefix/bin/orted executable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;3. Failing that, can you run with the &quot;-d&quot; switch?  It should give a 
</span><br>
<span class="quotelev1">&gt;bunch of debugging output that might be helpful.  &quot;mpirun -d -np 2 
</span><br>
<span class="quotelev1">&gt;./test&quot;, for example.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;4. Also please send the output of the &quot;ompi_info&quot; command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Nov 10, 2005, at 9:05 AM, Clement Chu wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I have tried the latest version (rc5 8053), but the error is still 
</span><br>
<span class="quotelev2">&gt;&gt;here.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;We've actually made quite a few bug fixes since RC4 (RC5 is not
</span><br>
<span class="quotelev3">&gt;&gt;&gt;available yet).  Would you mind trying with a nightly snapshot 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;tarball?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;(there were some SVN commits last night after the nightly snapshot was
</span><br>
<span class="quotelev3">&gt;&gt;&gt;made; I've just initiated another snapshot build -- r8085 should be on
</span><br>
<span class="quotelev3">&gt;&gt;&gt;the web site within an hour or so)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;On Nov 10, 2005, at 4:38 AM, Clement Chu wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I got an error when tried the mpirun on mpi program.  The following
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;the error message:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[clement_at_kfc TestMPI]$ mpicc -g -o test main.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[clement_at_kfc TestMPI]$ mpirun -np 2 test
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;mpirun noticed that job rank 1 with PID 0 on node &quot;localhost&quot; exited 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;signal 11.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[kfc:28466] ERROR: A daemon on node localhost failed to start as
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;expected.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[kfc:28466] ERROR: There may be more information available from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[kfc:28466] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[kfc:28466] The daemon received a signal 11.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;1 additional process aborted (not shown)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[clement_at_kfc TestMPI]$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;I am using openmpi-1.0rc4 and running on Linux Redhat Fedora Core 4.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;The kernal is 2.6.12-1.1456_FC4.  My building procedure is as below:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;1.  ./configure --prefix=/home/clement/openmpi --with-devel-headers
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;2.  make all install
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;3.  login root.  add openmpi's path and lib in /etc/bashrc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;4.  see the $PATH and $LD_LIBRARY_PATH as below
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[clement_at_kfc TestMPI]$ echo $PATH
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;/usr/java/jdk1.5.0_05/bin:/home/clement/openmpi/bin:/usr/java/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;jdk1.5.0_05/bin:/home/clement/mpich-1.2.7/bin:/usr/kerberos/bin:/usr/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;local/bin:/usr/bin:/bin:/usr/X11R6/bin:/home/clement/bin
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[clement_at_kfc TestMPI]$ echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;/home/clement/openmpi/lib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[clement_at_kfc TestMPI]$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;5.  go to mpi program's directory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;6.  mpicc -g -o test main.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;7.  mpirun -np 2 test
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Any idea of this problem.  Many thanks.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Clement Kam Man Chu
Research Assistant
School of Computer Science &amp; Software Engineering
Monash University, Caulfield Campus
Ph: 61 3 9903 1964
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0310.php">Clement Chu: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>Previous message:</strong> <a href="0308.php">Jeff Squyres: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>In reply to:</strong> <a href="0308.php">Jeff Squyres: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0314.php">Jeff Squyres: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>Reply:</strong> <a href="0314.php">Jeff Squyres: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
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
