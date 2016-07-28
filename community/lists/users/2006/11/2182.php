<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov 16 22:10:43 2006" -->
<!-- isoreceived="20061117031043" -->
<!-- sent="Thu, 16 Nov 2006 20:10:28 -0700" -->
<!-- isosent="20061117031028" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI runtime problem" -->
<!-- id="C1827634.60F%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="455CDD5B.4090605_at_gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-16 22:10:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2183.php">Victor Prosolin: "Re: [OMPI users] OpenMPI runtime problem"</a>
<li><strong>Previous message:</strong> <a href="2181.php">Victor Prosolin: "[OMPI users] OpenMPI runtime problem"</a>
<li><strong>In reply to:</strong> <a href="2181.php">Victor Prosolin: "[OMPI users] OpenMPI runtime problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2183.php">Victor Prosolin: "Re: [OMPI users] OpenMPI runtime problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;From what you sent, it appears that Open MPI thinks your processes called
</span><br>
MPI_Abort (as opposed to segfaulting or some other failure mode). The system
<br>
appears to be operating exactly as it should - it just thinks your program
<br>
aborted the job - i.e., that one or more processes actually called MPI_Abort
<br>
for some reason.
<br>
<p>Have you tried running your code without valgrind? I'm wondering if the
<br>
valgrind interaction may be part of the problem.
<br>
<p>Do you have a code path in your program that would lead to MPI_Abort? I'm
<br>
wondering if you have some logic that might abort if it encounters what it
<br>
believes is a problem. If so, you might put some output in that path to see
<br>
if you are traversing it. Then we would have some idea as to why the code
<br>
thinks it *should* abort.
<br>
<p>Others may also have suggestions. Most of the team is at the Supercomputing
<br>
show this week and won't really be available until next week or after
<br>
Thanksgiving.
<br>
<p>Ralph
<br>
<p><p>On 11/16/06 2:51 PM, &quot;Victor Prosolin&quot; &lt;victor.prosolin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all.
</span><br>
<span class="quotelev1">&gt; I have been fighting with this problem for weeks now, and I am getting
</span><br>
<span class="quotelev1">&gt; quite desperate about it. Hope I can get help here, because local folks
</span><br>
<span class="quotelev1">&gt; couldn't help me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is a cluster running Debian Linux - kernel 2.4, gcc version 3.3.4
</span><br>
<span class="quotelev1">&gt; (Debian 1:3.3.4-13), . (some more info at ttp://www.capca.ucalgary.ca)
</span><br>
<span class="quotelev1">&gt; They have some mpi libraries (LAM I beleive) installed, but since they
</span><br>
<span class="quotelev1">&gt; don't support
</span><br>
<span class="quotelev1">&gt; Fortran90, I compile my own library. I install it in my home directory
</span><br>
<span class="quotelev1">&gt; /home/victor/programs. I configure with the following options
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; F77=ifort FFLAGS='-O2' FC=ifort CC=distcc ./configure --enable-mpi-f90
</span><br>
<span class="quotelev1">&gt; --prefix=/home/victor/programs --enable-pretty-print-stacktrace
</span><br>
<span class="quotelev1">&gt; --config-cache --disable-shared --enable-static
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It compiles and installs with no errors. But when I run my code by using
</span><br>
<span class="quotelev1">&gt; mpiexec1 -np 4 valgrind --tool=memcheck ./my-executable
</span><br>
<span class="quotelev1">&gt; (mpiexec1 is a link pointing to /home/victor/programs/bin/mpiexec to
</span><br>
<span class="quotelev1">&gt; avoid conflict with system-wide mpiexec)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; it dies silently with no errors shown - just stops and says
</span><br>
<span class="quotelev1">&gt; 2 additional processes aborted (not shown)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It depends on the number of grid points, because for some
</span><br>
<span class="quotelev1">&gt; small grid sizes (40x10x10) it runs fine. But the number at which I
</span><br>
<span class="quotelev1">&gt; start getting problems is stupidly small (like 40x20x10) so it can't be
</span><br>
<span class="quotelev1">&gt; an insufficient memory issue - the cluster server has 2Gb of memory and
</span><br>
<span class="quotelev1">&gt; I can run my code in serial mode with at least 200x100x100.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mainly I use Intel Fortran and gcc (or distcc pointing to gcc) to
</span><br>
<span class="quotelev1">&gt; compile the library, but I've tried different compilers (g95-gcc,
</span><br>
<span class="quotelev1">&gt; ifort-gcc4.1) - same result all the time. As far as I can say, it's not
</span><br>
<span class="quotelev1">&gt; an error in my code either, because I've done numerous checks and also
</span><br>
<span class="quotelev1">&gt; it runs fine on my pc, though on my pc I compiled the library with ifort
</span><br>
<span class="quotelev1">&gt; and icc.
</span><br>
<span class="quotelev1">&gt; And here comes the weirdest part - if I run my code through valgrind in
</span><br>
<span class="quotelev1">&gt; mpi mode (mpiexec -np 4 valgrind --tool=memcheck ./my-executable) - it
</span><br>
<span class="quotelev1">&gt; runs fine with grid sizes it fails on without valgrind!!! It doesn't
</span><br>
<span class="quotelev1">&gt; exit mpiexec, but does get to the last statement of my code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am attaching config.log and ompi_info.log
</span><br>
<span class="quotelev1">&gt; The following is the output of mpiexex -d -np 4 ./model-0.0.9:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [obelix:08876] procdir: (null)
</span><br>
<span class="quotelev1">&gt; [obelix:08876] jobdir: (null)
</span><br>
<span class="quotelev1">&gt; [obelix:08876] unidir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-victor_at_obelix_0/default-universe
</span><br>
<span class="quotelev1">&gt; [obelix:08876] top: openmpi-sessions-victor_at_obelix_0
</span><br>
<span class="quotelev1">&gt; [obelix:08876] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [obelix:08876] connect_uni: contact info read
</span><br>
<span class="quotelev1">&gt; [obelix:08876] connect_uni: connection not allowed
</span><br>
<span class="quotelev1">&gt; [obelix:08876] [0,0,0] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [obelix:08876]  tmpdir /tmp
</span><br>
<span class="quotelev1">&gt; [obelix:08876]  universe default-universe-8876
</span><br>
<span class="quotelev1">&gt; [obelix:08876]  user victor
</span><br>
<span class="quotelev1">&gt; [obelix:08876]  host obelix
</span><br>
<span class="quotelev1">&gt; [obelix:08876]  jobid 0
</span><br>
<span class="quotelev1">&gt; [obelix:08876]  procid 0
</span><br>
<span class="quotelev1">&gt; [obelix:08876] procdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-victor_at_obelix_0/default-universe-8876/0/0
</span><br>
<span class="quotelev1">&gt; [obelix:08876] jobdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-victor_at_obelix_0/default-universe-8876/0
</span><br>
<span class="quotelev1">&gt; [obelix:08876] unidir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-victor_at_obelix_0/default-universe-8876
</span><br>
<span class="quotelev1">&gt; [obelix:08876] top: openmpi-sessions-victor_at_obelix_0
</span><br>
<span class="quotelev1">&gt; [obelix:08876] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [obelix:08876] [0,0,0] contact_file
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-victor_at_obelix_0/default-universe-8876/universe-setup.txt
</span><br>
<span class="quotelev1">&gt; [obelix:08876] [0,0,0] wrote setup file
</span><br>
<span class="quotelev1">&gt; [obelix:08876] pls:rsh: local csh: 0, local bash: 1
</span><br>
<span class="quotelev1">&gt; [obelix:08876] pls:rsh: assuming same remote shell as local shell
</span><br>
<span class="quotelev1">&gt; [obelix:08876] pls:rsh: remote csh: 0, remote bash: 1
</span><br>
<span class="quotelev1">&gt; [obelix:08876] pls:rsh: final template argv:
</span><br>
<span class="quotelev1">&gt; [obelix:08876] pls:rsh:     /usr/bin/ssh &lt;template&gt; orted --debug
</span><br>
<span class="quotelev1">&gt; --bootproxy 1 --name &lt;template&gt; --num_procs 2 --vpid_start 0 --nodename
</span><br>
<span class="quotelev1">&gt; &lt;template&gt; --universe victor_at_obelix:default-universe-8876 --nsreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://136.159.56.131:55111;tcp://192.168.1.1:55111&quot; --gprreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://136.159.56.131:55111;tcp://192.168.1.1:55111&quot;
</span><br>
<span class="quotelev1">&gt; --mpi-call-yield 0
</span><br>
<span class="quotelev1">&gt; [obelix:08876] pls:rsh: launching on node localhost
</span><br>
<span class="quotelev1">&gt; [obelix:08876] pls:rsh: oversubscribed -- setting mpi_yield_when_idle to
</span><br>
<span class="quotelev1">&gt; 1 (1 4)
</span><br>
<span class="quotelev1">&gt; [obelix:08876] pls:rsh: localhost is a LOCAL node
</span><br>
<span class="quotelev1">&gt; [obelix:08876] pls:rsh: changing to directory /home/victor
</span><br>
<span class="quotelev1">&gt; [obelix:08876] pls:rsh: executing: orted --debug --bootproxy 1 --name
</span><br>
<span class="quotelev1">&gt; 0.0.1 --num_procs 2 --vpid_start 0 --nodename localhost --universe
</span><br>
<span class="quotelev1">&gt; victor_at_obelix:default-universe-8876 --nsreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://136.159.56.131:55111;tcp://192.168.1.1:55111&quot; --gprreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://136.159.56.131:55111;tcp://192.168.1.1:55111&quot;
</span><br>
<span class="quotelev1">&gt; --mpi-call-yield 1
</span><br>
<span class="quotelev1">&gt; [obelix:08877] [0,0,1] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [obelix:08877]  universe default-universe-8876
</span><br>
<span class="quotelev1">&gt; [obelix:08877]  user victor
</span><br>
<span class="quotelev1">&gt; [obelix:08877]  host localhost
</span><br>
<span class="quotelev1">&gt; [obelix:08877]  jobid 0
</span><br>
<span class="quotelev1">&gt; [obelix:08877]  procid 1
</span><br>
<span class="quotelev1">&gt; [obelix:08877] procdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-victor_at_localhost_0/default-universe-8876/0/1
</span><br>
<span class="quotelev1">&gt; [obelix:08877] jobdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-victor_at_localhost_0/default-universe-8876/0
</span><br>
<span class="quotelev1">&gt; [obelix:08877] unidir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-victor_at_localhost_0/default-universe-8876
</span><br>
<span class="quotelev1">&gt; [obelix:08877] top: openmpi-sessions-victor_at_localhost_0
</span><br>
<span class="quotelev1">&gt; [obelix:08877] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [obelix:08878] [0,1,0] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [obelix:08878]  universe default-universe-8876
</span><br>
<span class="quotelev1">&gt; [obelix:08878]  user victor
</span><br>
<span class="quotelev1">&gt; [obelix:08878]  host localhost
</span><br>
<span class="quotelev1">&gt; [obelix:08878]  jobid 1
</span><br>
<span class="quotelev1">&gt; [obelix:08878]  procid 0
</span><br>
<span class="quotelev1">&gt; [obelix:08878] procdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-victor_at_localhost_0/default-universe-8876/1/0
</span><br>
<span class="quotelev1">&gt; [obelix:08878] jobdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-victor_at_localhost_0/default-universe-8876/1
</span><br>
<span class="quotelev1">&gt; [obelix:08878] unidir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-victor_at_localhost_0/default-universe-8876
</span><br>
<span class="quotelev1">&gt; [obelix:08878] top: openmpi-sessions-victor_at_localhost_0
</span><br>
<span class="quotelev1">&gt; [obelix:08878] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [obelix:08879] [0,1,1] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [obelix:08879]  universe default-universe-8876
</span><br>
<span class="quotelev1">&gt; [obelix:08879]  user victor
</span><br>
<span class="quotelev1">&gt; [obelix:08879]  host localhost
</span><br>
<span class="quotelev1">&gt; [obelix:08879]  jobid 1
</span><br>
<span class="quotelev1">&gt; [obelix:08879]  procid 1
</span><br>
<span class="quotelev1">&gt; [obelix:08879] procdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-victor_at_localhost_0/default-universe-8876/1/1
</span><br>
<span class="quotelev1">&gt; [obelix:08879] jobdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-victor_at_localhost_0/default-universe-8876/1
</span><br>
<span class="quotelev1">&gt; [obelix:08879] unidir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-victor_at_localhost_0/default-universe-8876
</span><br>
<span class="quotelev1">&gt; [obelix:08879] top: openmpi-sessions-victor_at_localhost_0
</span><br>
<span class="quotelev1">&gt; [obelix:08879] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [obelix:08880] [0,1,2] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [obelix:08880]  universe default-universe-8876
</span><br>
<span class="quotelev1">&gt; [obelix:08880]  user victor
</span><br>
<span class="quotelev1">&gt; [obelix:08880]  host localhost
</span><br>
<span class="quotelev1">&gt; [obelix:08880]  jobid 1
</span><br>
<span class="quotelev1">&gt; [obelix:08880]  procid 2
</span><br>
<span class="quotelev1">&gt; [obelix:08880] procdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-victor_at_localhost_0/default-universe-8876/1/2
</span><br>
<span class="quotelev1">&gt; [obelix:08880] jobdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-victor_at_localhost_0/default-universe-8876/1
</span><br>
<span class="quotelev1">&gt; [obelix:08880] unidir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-victor_at_localhost_0/default-universe-8876
</span><br>
<span class="quotelev1">&gt; [obelix:08880] top: openmpi-sessions-victor_at_localhost_0
</span><br>
<span class="quotelev1">&gt; [obelix:08880] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [obelix:08881] [0,1,3] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [obelix:08881]  universe default-universe-8876
</span><br>
<span class="quotelev1">&gt; [obelix:08881]  user victor
</span><br>
<span class="quotelev1">&gt; [obelix:08881]  host localhost
</span><br>
<span class="quotelev1">&gt; [obelix:08881]  jobid 1
</span><br>
<span class="quotelev1">&gt; [obelix:08881]  procid 3
</span><br>
<span class="quotelev1">&gt; [obelix:08881] procdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-victor_at_localhost_0/default-universe-8876/1/3
</span><br>
<span class="quotelev1">&gt; [obelix:08881] jobdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-victor_at_localhost_0/default-universe-8876/1
</span><br>
<span class="quotelev1">&gt; [obelix:08881] unidir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-victor_at_localhost_0/default-universe-8876
</span><br>
<span class="quotelev1">&gt; [obelix:08881] top: openmpi-sessions-victor_at_localhost_0
</span><br>
<span class="quotelev1">&gt; [obelix:08881] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [obelix:08876] spawn: in job_state_callback(jobid = 1, state = 0x4)
</span><br>
<span class="quotelev1">&gt; [obelix:08876] Info: Setting up debugger process table for applications
</span><br>
<span class="quotelev1">&gt;   MPIR_being_debugged = 0
</span><br>
<span class="quotelev1">&gt;   MPIR_debug_gate = 0
</span><br>
<span class="quotelev1">&gt;   MPIR_debug_state = 1
</span><br>
<span class="quotelev1">&gt;   MPIR_acquired_pre_main = 0
</span><br>
<span class="quotelev1">&gt;   MPIR_i_am_starter = 0
</span><br>
<span class="quotelev1">&gt;   MPIR_proctable_size = 4
</span><br>
<span class="quotelev1">&gt;   MPIR_proctable:
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (0, localhost, ./model-0.0.9, 8878)
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (1, localhost, ./model-0.0.9, 8879)
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (2, localhost, ./model-0.0.9, 8880)
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (3, localhost, ./model-0.0.9, 8881)
</span><br>
<span class="quotelev1">&gt; [obelix:08878] [0,1,0] ompi_mpi_init completed
</span><br>
<span class="quotelev1">&gt; [obelix:08879] [0,1,1] ompi_mpi_init completed
</span><br>
<span class="quotelev1">&gt; [obelix:08880] [0,1,2] ompi_mpi_init completed
</span><br>
<span class="quotelev1">&gt; [obelix:08881] [0,1,3] ompi_mpi_init completed
</span><br>
<span class="quotelev1">&gt; [obelix:08877] sess_dir_finalize: found proc session dir empty - deleting
</span><br>
<span class="quotelev1">&gt; [obelix:08877] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [obelix:08877] orted: job_state_callback(jobid = 1, state =
</span><br>
<span class="quotelev1">&gt; ORTE_PROC_STATE_ABORTED)
</span><br>
<span class="quotelev1">&gt; [obelix:08877] sess_dir_finalize: found proc session dir empty - deleting
</span><br>
<span class="quotelev1">&gt; [obelix:08877] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [obelix:08877] orted: job_state_callback(jobid = 1, state =
</span><br>
<span class="quotelev1">&gt; ORTE_PROC_STATE_TERMINATED)
</span><br>
<span class="quotelev1">&gt; [obelix:08877] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [obelix:08877] sess_dir_finalize: found proc session dir empty - deleting
</span><br>
<span class="quotelev1">&gt; [obelix:08877] sess_dir_finalize: found job session dir empty - deleting
</span><br>
<span class="quotelev1">&gt; [obelix:08877] sess_dir_finalize: univ session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Victor Prosolin.
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.1.2
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r12073
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.1.2
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r12073
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.1.2
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r12073
</span><br>
<span class="quotelev1">&gt;                   Prefix: /home/victor/programs
</span><br>
<span class="quotelev1">&gt;  Configured architecture: i686-pc-linux-gnu
</span><br>
<span class="quotelev1">&gt;            Configured by: victor
</span><br>
<span class="quotelev1">&gt;            Configured on: Thu Nov 16 13:06:12 MST 2006
</span><br>
<span class="quotelev1">&gt;           Configure host: obelix
</span><br>
<span class="quotelev1">&gt;                 Built by: victor
</span><br>
<span class="quotelev1">&gt;                 Built on: Thu Nov 16 13:42:40 MST 2006
</span><br>
<span class="quotelev1">&gt;               Built host: obelix
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
<span class="quotelev1">&gt;               C compiler: distcc
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /home/victor/programs/bin/distcc
</span><br>
<span class="quotelev1">&gt;             C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: ifort
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: /opt/intel/fc/9.1.037/bin/ifort
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: ifort
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: /opt/intel/fc/9.1.037/bin/ifort
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
<span class="quotelev1">&gt;           Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev1">&gt;   Internal debug support: no
</span><br>
<span class="quotelev1">&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;          libltdl support: yes
</span><br>
<span class="quotelev1">&gt;               MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                MCA timer: linux (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: basic (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: hierarch (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: self (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: tuned (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA io: romio (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: rb (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: self (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: sm (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: unity (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: null (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: replica (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: proxy (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: proxy (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: replica (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: dash_host (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: hostfile (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: localhost (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: poe (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: slurm (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: hostfile (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: resfile (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: round_robin (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: proxy (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: urm (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: fork (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: rsh (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: slurm (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: env (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: singleton (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: slurm (MCA v1.0, API v1.0, Component v1.1.2)
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
<li><strong>Next message:</strong> <a href="2183.php">Victor Prosolin: "Re: [OMPI users] OpenMPI runtime problem"</a>
<li><strong>Previous message:</strong> <a href="2181.php">Victor Prosolin: "[OMPI users] OpenMPI runtime problem"</a>
<li><strong>In reply to:</strong> <a href="2181.php">Victor Prosolin: "[OMPI users] OpenMPI runtime problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2183.php">Victor Prosolin: "Re: [OMPI users] OpenMPI runtime problem"</a>
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
