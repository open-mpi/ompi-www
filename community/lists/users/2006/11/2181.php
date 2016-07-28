<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov 16 16:58:46 2006" -->
<!-- isoreceived="20061116215846" -->
<!-- sent="Thu, 16 Nov 2006 14:51:23 -0700" -->
<!-- isosent="20061116215123" -->
<!-- name="Victor Prosolin" -->
<!-- email="victor.prosolin_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI runtime problem" -->
<!-- id="455CDD5B.4090605_at_gmail.com" -->
<!-- charset="windows-1251" -->
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
<strong>From:</strong> Victor Prosolin (<em>victor.prosolin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-16 16:51:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2182.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime problem"</a>
<li><strong>Previous message:</strong> <a href="2180.php">&#197;ke Sandgren: "[OMPI users] Problems running Intel Mpi Benchmark (formerly PMB) with ompi	1.1.2 and 1.2b1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2182.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime problem"</a>
<li><strong>Reply:</strong> <a href="2182.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime problem"</a>
<li><strong>Maybe reply:</strong> <a href="2183.php">Victor Prosolin: "Re: [OMPI users] OpenMPI runtime problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all.
<br>
I have been fighting with this problem for weeks now, and I am getting
<br>
quite desperate about it. Hope I can get help here, because local folks
<br>
couldn't help me.
<br>
<p>There is a cluster running Debian Linux - kernel 2.4, gcc version 3.3.4
<br>
(Debian 1:3.3.4-13), . (some more info at ttp://www.capca.ucalgary.ca)
<br>
They have some mpi libraries (LAM I beleive) installed, but since they
<br>
don't support
<br>
Fortran90, I compile my own library. I install it in my home directory
<br>
/home/victor/programs. I configure with the following options
<br>
<p>F77=ifort FFLAGS='-O2' FC=ifort CC=distcc ./configure --enable-mpi-f90
<br>
--prefix=/home/victor/programs --enable-pretty-print-stacktrace
<br>
--config-cache --disable-shared --enable-static
<br>
<p>It compiles and installs with no errors. But when I run my code by using
<br>
mpiexec1 -np 4 valgrind --tool=memcheck ./my-executable
<br>
(mpiexec1 is a link pointing to /home/victor/programs/bin/mpiexec to
<br>
avoid conflict with system-wide mpiexec)
<br>
<p>it dies silently with no errors shown - just stops and says
<br>
2 additional processes aborted (not shown)
<br>
<p>It depends on the number of grid points, because for some
<br>
small grid sizes (40x10x10) it runs fine. But the number at which I
<br>
start getting problems is stupidly small (like 40x20x10) so it can't be
<br>
an insufficient memory issue - the cluster server has 2Gb of memory and
<br>
I can run my code in serial mode with at least 200x100x100.
<br>
<p>Mainly I use Intel Fortran and gcc (or distcc pointing to gcc) to
<br>
compile the library, but I've tried different compilers (g95-gcc,
<br>
ifort-gcc4.1) - same result all the time. As far as I can say, it's not
<br>
an error in my code either, because I've done numerous checks and also
<br>
it runs fine on my pc, though on my pc I compiled the library with ifort
<br>
and icc.
<br>
And here comes the weirdest part - if I run my code through valgrind in
<br>
mpi mode (mpiexec -np 4 valgrind --tool=memcheck ./my-executable) - it
<br>
runs fine with grid sizes it fails on without valgrind!!! It doesn't
<br>
exit mpiexec, but does get to the last statement of my code.
<br>
<p>I am attaching config.log and ompi_info.log
<br>
The following is the output of mpiexex -d -np 4 ./model-0.0.9:
<br>
<p>[obelix:08876] procdir: (null)
<br>
[obelix:08876] jobdir: (null)
<br>
[obelix:08876] unidir:
<br>
/tmp/openmpi-sessions-victor_at_obelix_0/default-universe
<br>
[obelix:08876] top: openmpi-sessions-victor_at_obelix_0
<br>
[obelix:08876] tmp: /tmp
<br>
[obelix:08876] connect_uni: contact info read
<br>
[obelix:08876] connect_uni: connection not allowed
<br>
[obelix:08876] [0,0,0] setting up session dir with
<br>
[obelix:08876]  tmpdir /tmp
<br>
[obelix:08876]  universe default-universe-8876
<br>
[obelix:08876]  user victor
<br>
[obelix:08876]  host obelix
<br>
[obelix:08876]  jobid 0
<br>
[obelix:08876]  procid 0
<br>
[obelix:08876] procdir:
<br>
/tmp/openmpi-sessions-victor_at_obelix_0/default-universe-8876/0/0
<br>
[obelix:08876] jobdir:
<br>
/tmp/openmpi-sessions-victor_at_obelix_0/default-universe-8876/0
<br>
[obelix:08876] unidir:
<br>
/tmp/openmpi-sessions-victor_at_obelix_0/default-universe-8876
<br>
[obelix:08876] top: openmpi-sessions-victor_at_obelix_0
<br>
[obelix:08876] tmp: /tmp
<br>
[obelix:08876] [0,0,0] contact_file
<br>
/tmp/openmpi-sessions-victor_at_obelix_0/default-universe-8876/universe-setup.txt
<br>
[obelix:08876] [0,0,0] wrote setup file
<br>
[obelix:08876] pls:rsh: local csh: 0, local bash: 1
<br>
[obelix:08876] pls:rsh: assuming same remote shell as local shell
<br>
[obelix:08876] pls:rsh: remote csh: 0, remote bash: 1
<br>
[obelix:08876] pls:rsh: final template argv:
<br>
[obelix:08876] pls:rsh:     /usr/bin/ssh &lt;template&gt; orted --debug
<br>
--bootproxy 1 --name &lt;template&gt; --num_procs 2 --vpid_start 0 --nodename
<br>
&lt;template&gt; --universe victor_at_obelix:default-universe-8876 --nsreplica
<br>
&quot;0.0.0;tcp://136.159.56.131:55111;tcp://192.168.1.1:55111&quot; --gprreplica
<br>
&quot;0.0.0;tcp://136.159.56.131:55111;tcp://192.168.1.1:55111&quot;
<br>
--mpi-call-yield 0
<br>
[obelix:08876] pls:rsh: launching on node localhost
<br>
[obelix:08876] pls:rsh: oversubscribed -- setting mpi_yield_when_idle to
<br>
1 (1 4)
<br>
[obelix:08876] pls:rsh: localhost is a LOCAL node
<br>
[obelix:08876] pls:rsh: changing to directory /home/victor
<br>
[obelix:08876] pls:rsh: executing: orted --debug --bootproxy 1 --name
<br>
0.0.1 --num_procs 2 --vpid_start 0 --nodename localhost --universe
<br>
victor_at_obelix:default-universe-8876 --nsreplica
<br>
&quot;0.0.0;tcp://136.159.56.131:55111;tcp://192.168.1.1:55111&quot; --gprreplica
<br>
&quot;0.0.0;tcp://136.159.56.131:55111;tcp://192.168.1.1:55111&quot;
<br>
--mpi-call-yield 1
<br>
[obelix:08877] [0,0,1] setting up session dir with
<br>
[obelix:08877]  universe default-universe-8876
<br>
[obelix:08877]  user victor
<br>
[obelix:08877]  host localhost
<br>
[obelix:08877]  jobid 0
<br>
[obelix:08877]  procid 1
<br>
[obelix:08877] procdir:
<br>
/tmp/openmpi-sessions-victor_at_localhost_0/default-universe-8876/0/1
<br>
[obelix:08877] jobdir:
<br>
/tmp/openmpi-sessions-victor_at_localhost_0/default-universe-8876/0
<br>
[obelix:08877] unidir:
<br>
/tmp/openmpi-sessions-victor_at_localhost_0/default-universe-8876
<br>
[obelix:08877] top: openmpi-sessions-victor_at_localhost_0
<br>
[obelix:08877] tmp: /tmp
<br>
[obelix:08878] [0,1,0] setting up session dir with
<br>
[obelix:08878]  universe default-universe-8876
<br>
[obelix:08878]  user victor
<br>
[obelix:08878]  host localhost
<br>
[obelix:08878]  jobid 1
<br>
[obelix:08878]  procid 0
<br>
[obelix:08878] procdir:
<br>
/tmp/openmpi-sessions-victor_at_localhost_0/default-universe-8876/1/0
<br>
[obelix:08878] jobdir:
<br>
/tmp/openmpi-sessions-victor_at_localhost_0/default-universe-8876/1
<br>
[obelix:08878] unidir:
<br>
/tmp/openmpi-sessions-victor_at_localhost_0/default-universe-8876
<br>
[obelix:08878] top: openmpi-sessions-victor_at_localhost_0
<br>
[obelix:08878] tmp: /tmp
<br>
[obelix:08879] [0,1,1] setting up session dir with
<br>
[obelix:08879]  universe default-universe-8876
<br>
[obelix:08879]  user victor
<br>
[obelix:08879]  host localhost
<br>
[obelix:08879]  jobid 1
<br>
[obelix:08879]  procid 1
<br>
[obelix:08879] procdir:
<br>
/tmp/openmpi-sessions-victor_at_localhost_0/default-universe-8876/1/1
<br>
[obelix:08879] jobdir:
<br>
/tmp/openmpi-sessions-victor_at_localhost_0/default-universe-8876/1
<br>
[obelix:08879] unidir:
<br>
/tmp/openmpi-sessions-victor_at_localhost_0/default-universe-8876
<br>
[obelix:08879] top: openmpi-sessions-victor_at_localhost_0
<br>
[obelix:08879] tmp: /tmp
<br>
[obelix:08880] [0,1,2] setting up session dir with
<br>
[obelix:08880]  universe default-universe-8876
<br>
[obelix:08880]  user victor
<br>
[obelix:08880]  host localhost
<br>
[obelix:08880]  jobid 1
<br>
[obelix:08880]  procid 2
<br>
[obelix:08880] procdir:
<br>
/tmp/openmpi-sessions-victor_at_localhost_0/default-universe-8876/1/2
<br>
[obelix:08880] jobdir:
<br>
/tmp/openmpi-sessions-victor_at_localhost_0/default-universe-8876/1
<br>
[obelix:08880] unidir:
<br>
/tmp/openmpi-sessions-victor_at_localhost_0/default-universe-8876
<br>
[obelix:08880] top: openmpi-sessions-victor_at_localhost_0
<br>
[obelix:08880] tmp: /tmp
<br>
[obelix:08881] [0,1,3] setting up session dir with
<br>
[obelix:08881]  universe default-universe-8876
<br>
[obelix:08881]  user victor
<br>
[obelix:08881]  host localhost
<br>
[obelix:08881]  jobid 1
<br>
[obelix:08881]  procid 3
<br>
[obelix:08881] procdir:
<br>
/tmp/openmpi-sessions-victor_at_localhost_0/default-universe-8876/1/3
<br>
[obelix:08881] jobdir:
<br>
/tmp/openmpi-sessions-victor_at_localhost_0/default-universe-8876/1
<br>
[obelix:08881] unidir:
<br>
/tmp/openmpi-sessions-victor_at_localhost_0/default-universe-8876
<br>
[obelix:08881] top: openmpi-sessions-victor_at_localhost_0
<br>
[obelix:08881] tmp: /tmp
<br>
[obelix:08876] spawn: in job_state_callback(jobid = 1, state = 0x4)
<br>
[obelix:08876] Info: Setting up debugger process table for applications
<br>
&nbsp;&nbsp;MPIR_being_debugged = 0
<br>
&nbsp;&nbsp;MPIR_debug_gate = 0
<br>
&nbsp;&nbsp;MPIR_debug_state = 1
<br>
&nbsp;&nbsp;MPIR_acquired_pre_main = 0
<br>
&nbsp;&nbsp;MPIR_i_am_starter = 0
<br>
&nbsp;&nbsp;MPIR_proctable_size = 4
<br>
&nbsp;&nbsp;MPIR_proctable:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (0, localhost, ./model-0.0.9, 8878)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (1, localhost, ./model-0.0.9, 8879)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (2, localhost, ./model-0.0.9, 8880)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (3, localhost, ./model-0.0.9, 8881)
<br>
[obelix:08878] [0,1,0] ompi_mpi_init completed
<br>
[obelix:08879] [0,1,1] ompi_mpi_init completed
<br>
[obelix:08880] [0,1,2] ompi_mpi_init completed
<br>
[obelix:08881] [0,1,3] ompi_mpi_init completed
<br>
[obelix:08877] sess_dir_finalize: found proc session dir empty - deleting
<br>
[obelix:08877] sess_dir_finalize: job session dir not empty - leaving
<br>
[obelix:08877] orted: job_state_callback(jobid = 1, state =
<br>
ORTE_PROC_STATE_ABORTED)
<br>
[obelix:08877] sess_dir_finalize: found proc session dir empty - deleting
<br>
[obelix:08877] sess_dir_finalize: job session dir not empty - leaving
<br>
[obelix:08877] orted: job_state_callback(jobid = 1, state =
<br>
ORTE_PROC_STATE_TERMINATED)
<br>
[obelix:08877] sess_dir_finalize: job session dir not empty - leaving
<br>
[obelix:08877] sess_dir_finalize: found proc session dir empty - deleting
<br>
[obelix:08877] sess_dir_finalize: found job session dir empty - deleting
<br>
[obelix:08877] sess_dir_finalize: univ session dir not empty - leaving
<br>
<p>Thank you,
<br>
Victor Prosolin.
<br>
<p>

<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2181/config.log.tar.gz">config.log.tar.gz</a>
</ul>
<!-- attachment="config.log.tar.gz" -->
<hr>
<ul>
<li>text/x-log attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2181/ompi_info.log">ompi_info.log</a>
</ul>
<!-- attachment="ompi_info.log" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2182.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime problem"</a>
<li><strong>Previous message:</strong> <a href="2180.php">&#197;ke Sandgren: "[OMPI users] Problems running Intel Mpi Benchmark (formerly PMB) with ompi	1.1.2 and 1.2b1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2182.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime problem"</a>
<li><strong>Reply:</strong> <a href="2182.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime problem"</a>
<li><strong>Maybe reply:</strong> <a href="2183.php">Victor Prosolin: "Re: [OMPI users] OpenMPI runtime problem"</a>
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
