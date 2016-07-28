<?
$subject_val = "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 29 07:23:17 2014" -->
<!-- isoreceived="20140829112317" -->
<!-- sent="Fri, 29 Aug 2014 07:22:55 -0400" -->
<!-- isosent="20140829112255" -->
<!-- name="Matt Thompson" -->
<!-- email="fortran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs" -->
<!-- id="CAFb48S8aOxtDfK5-nOONRm4e4=aEvykQt3T1RvVrmkTOJEAqvA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="A6930B68-441B-40B4-9965-222F1E3105CB_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs<br>
<strong>From:</strong> Matt Thompson (<em>fortran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-29 07:22:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25188.php">Shamis, Pavel: "Re: [OMPI users] open shmem optimization"</a>
<li><strong>Previous message:</strong> <a href="25186.php">Reuti: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<li><strong>In reply to:</strong> <a href="25184.php">Ralph Castain: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25193.php">Ralph Castain: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>Reply:</strong> <a href="25193.php">Ralph Castain: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>For 1.8.2rc4 I get:
<br>
<p>(1003) $
<br>
/discover/nobackup/mathomp4/MPI/gcc_4.9.1-openmpi_1.8.2rc4/bin/mpirun
<br>
--leave-session-attached --debug-daemons -np 8 ./helloWorld.182.x
<br>
srun.slurm: cluster configuration lacks support for cpu binding
<br>
srun.slurm: cluster configuration lacks support for cpu binding
<br>
Daemon [[47143,0],5] checking in as pid 10990 on host borg01x154
<br>
[borg01x154:10990] [[47143,0],5] orted: up and running - waiting for
<br>
commands!
<br>
Daemon [[47143,0],1] checking in as pid 23473 on host borg01x143
<br>
Daemon [[47143,0],2] checking in as pid 8250 on host borg01x144
<br>
[borg01x144:08250] [[47143,0],2] orted: up and running - waiting for
<br>
commands!
<br>
[borg01x143:23473] [[47143,0],1] orted: up and running - waiting for
<br>
commands!
<br>
Daemon [[47143,0],3] checking in as pid 12320 on host borg01x145
<br>
Daemon [[47143,0],4] checking in as pid 10902 on host borg01x153
<br>
[borg01x153:10902] [[47143,0],4] orted: up and running - waiting for
<br>
commands!
<br>
[borg01x145:12320] [[47143,0],3] orted: up and running - waiting for
<br>
commands!
<br>
[borg01x142:01629] [[47143,0],0] orted_cmd: received add_local_procs
<br>
[borg01x144:08250] [[47143,0],2] orted_cmd: received add_local_procs
<br>
[borg01x153:10902] [[47143,0],4] orted_cmd: received add_local_procs
<br>
[borg01x143:23473] [[47143,0],1] orted_cmd: received add_local_procs
<br>
[borg01x145:12320] [[47143,0],3] orted_cmd: received add_local_procs
<br>
[borg01x154:10990] [[47143,0],5] orted_cmd: received add_local_procs
<br>
[borg01x142:01629] [[47143,0],0] orted_recv: received sync+nidmap from
<br>
local proc [[47143,1],0]
<br>
[borg01x142:01629] [[47143,0],0] orted_recv: received sync+nidmap from
<br>
local proc [[47143,1],2]
<br>
[borg01x142:01629] [[47143,0],0] orted_recv: received sync+nidmap from
<br>
local proc [[47143,1],3]
<br>
[borg01x142:01629] [[47143,0],0] orted_recv: received sync+nidmap from
<br>
local proc [[47143,1],1]
<br>
[borg01x142:01629] [[47143,0],0] orted_recv: received sync+nidmap from
<br>
local proc [[47143,1],5]
<br>
[borg01x142:01629] [[47143,0],0] orted_recv: received sync+nidmap from
<br>
local proc [[47143,1],4]
<br>
[borg01x142:01629] [[47143,0],0] orted_recv: received sync+nidmap from
<br>
local proc [[47143,1],6]
<br>
[borg01x142:01629] [[47143,0],0] orted_recv: received sync+nidmap from
<br>
local proc [[47143,1],7]
<br>
&nbsp;&nbsp;MPIR_being_debugged = 0
<br>
&nbsp;&nbsp;MPIR_debug_state = 1
<br>
&nbsp;&nbsp;MPIR_partial_attach_ok = 1
<br>
&nbsp;&nbsp;MPIR_i_am_starter = 0
<br>
&nbsp;&nbsp;MPIR_forward_output = 0
<br>
&nbsp;&nbsp;MPIR_proctable_size = 8
<br>
&nbsp;&nbsp;MPIR_proctable:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (0, borg01x142,
<br>
/home/mathomp4/HelloWorldTest/./helloWorld.182.x, 1647)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (1, borg01x142,
<br>
/home/mathomp4/HelloWorldTest/./helloWorld.182.x, 1648)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (2, borg01x142,
<br>
/home/mathomp4/HelloWorldTest/./helloWorld.182.x, 1650)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (3, borg01x142,
<br>
/home/mathomp4/HelloWorldTest/./helloWorld.182.x, 1652)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (4, borg01x142,
<br>
/home/mathomp4/HelloWorldTest/./helloWorld.182.x, 1654)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (5, borg01x142,
<br>
/home/mathomp4/HelloWorldTest/./helloWorld.182.x, 1656)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (6, borg01x142,
<br>
/home/mathomp4/HelloWorldTest/./helloWorld.182.x, 1658)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (7, borg01x142,
<br>
/home/mathomp4/HelloWorldTest/./helloWorld.182.x, 1660)
<br>
MPIR_executable_path: NULL
<br>
MPIR_server_arguments: NULL
<br>
[borg01x142:01629] [[47143,0],0] orted_cmd: received message_local_procs
<br>
[borg01x144:08250] [[47143,0],2] orted_cmd: received message_local_procs
<br>
[borg01x143:23473] [[47143,0],1] orted_cmd: received message_local_procs
<br>
[borg01x153:10902] [[47143,0],4] orted_cmd: received message_local_procs
<br>
[borg01x154:10990] [[47143,0],5] orted_cmd: received message_local_procs
<br>
[borg01x145:12320] [[47143,0],3] orted_cmd: received message_local_procs
<br>
[borg01x142:01629] [[47143,0],0] orted_cmd: received message_local_procs
<br>
[borg01x143:23473] [[47143,0],1] orted_cmd: received message_local_procs
<br>
[borg01x144:08250] [[47143,0],2] orted_cmd: received message_local_procs
<br>
[borg01x153:10902] [[47143,0],4] orted_cmd: received message_local_procs
<br>
[borg01x145:12320] [[47143,0],3] orted_cmd: received message_local_procs
<br>
Process    2 of    8 is on borg01x142
<br>
Process    5 of    8 is on borg01x142
<br>
Process    4 of    8 is on borg01x142
<br>
Process    1 of    8 is on borg01x142
<br>
Process    0 of    8 is on borg01x142
<br>
Process    3 of    8 is on borg01x142
<br>
Process    6 of    8 is on borg01x142
<br>
Process    7 of    8 is on borg01x142
<br>
[borg01x154:10990] [[47143,0],5] orted_cmd: received message_local_procs
<br>
[borg01x142:01629] [[47143,0],0] orted_cmd: received message_local_procs
<br>
[borg01x144:08250] [[47143,0],2] orted_cmd: received message_local_procs
<br>
[borg01x143:23473] [[47143,0],1] orted_cmd: received message_local_procs
<br>
[borg01x153:10902] [[47143,0],4] orted_cmd: received message_local_procs
<br>
[borg01x154:10990] [[47143,0],5] orted_cmd: received message_local_procs
<br>
[borg01x145:12320] [[47143,0],3] orted_cmd: received message_local_procs
<br>
[borg01x142:01629] [[47143,0],0] orted_recv: received sync from local proc
<br>
[[47143,1],2]
<br>
[borg01x142:01629] [[47143,0],0] orted_recv: received sync from local proc
<br>
[[47143,1],1]
<br>
[borg01x142:01629] [[47143,0],0] orted_recv: received sync from local proc
<br>
[[47143,1],3]
<br>
[borg01x142:01629] [[47143,0],0] orted_recv: received sync from local proc
<br>
[[47143,1],0]
<br>
[borg01x142:01629] [[47143,0],0] orted_recv: received sync from local proc
<br>
[[47143,1],4]
<br>
[borg01x142:01629] [[47143,0],0] orted_recv: received sync from local proc
<br>
[[47143,1],6]
<br>
[borg01x142:01629] [[47143,0],0] orted_recv: received sync from local proc
<br>
[[47143,1],5]
<br>
[borg01x142:01629] [[47143,0],0] orted_recv: received sync from local proc
<br>
[[47143,1],7]
<br>
[borg01x142:01629] [[47143,0],0] orted_cmd: received exit cmd
<br>
[borg01x144:08250] [[47143,0],2] orted_cmd: received exit cmd
<br>
[borg01x144:08250] [[47143,0],2] orted_cmd: all routes and children gone -
<br>
exiting
<br>
[borg01x153:10902] [[47143,0],4] orted_cmd: received exit cmd
<br>
[borg01x153:10902] [[47143,0],4] orted_cmd: all routes and children gone -
<br>
exiting
<br>
[borg01x143:23473] [[47143,0],1] orted_cmd: received exit cmd
<br>
[borg01x154:10990] [[47143,0],5] orted_cmd: received exit cmd
<br>
[borg01x154:10990] [[47143,0],5] orted_cmd: all routes and children gone -
<br>
exiting
<br>
[borg01x145:12320] [[47143,0],3] orted_cmd: received exit cmd
<br>
[borg01x145:12320] [[47143,0],3] orted_cmd: all routes and children gone -
<br>
exiting
<br>
<p>Using the 1.8.2 mpirun:
<br>
<p>(1004) $ /discover/nobackup/mathomp4/MPI/gcc_4.9.1-openmpi_1.8.2/bin/mpirun
<br>
--leave-session-attached --debug-daemons -np 8 ./helloWorld.182.x
<br>
srun.slurm: cluster configuration lacks support for cpu binding
<br>
srun.slurm: cluster configuration lacks support for cpu binding
<br>
[borg01x143:23494] [[47330,0],1] ORTE_ERROR_LOG: Bad parameter in file
<br>
base/rml_base_contact.c at line 161
<br>
[borg01x143:23494] [[47330,0],1] ORTE_ERROR_LOG: Bad parameter in file
<br>
routed_binomial.c at line 498
<br>
[borg01x143:23494] [[47330,0],1] ORTE_ERROR_LOG: Bad parameter in file
<br>
base/ess_base_std_orted.c at line 539
<br>
srun.slurm: error: borg01x143: task 0: Exited with exit code 213
<br>
srun.slurm: Terminating job step 2332583.4
<br>
[borg01x153:10915] [[47330,0],4] ORTE_ERROR_LOG: Bad parameter in file
<br>
base/rml_base_contact.c at line 161
<br>
[borg01x153:10915] [[47330,0],4] ORTE_ERROR_LOG: Bad parameter in file
<br>
routed_binomial.c at line 498
<br>
[borg01x153:10915] [[47330,0],4] ORTE_ERROR_LOG: Bad parameter in file
<br>
base/ess_base_std_orted.c at line 539
<br>
[borg01x144:08263] [[47330,0],2] ORTE_ERROR_LOG: Bad parameter in file
<br>
base/rml_base_contact.c at line 161
<br>
[borg01x144:08263] [[47330,0],2] ORTE_ERROR_LOG: Bad parameter in file
<br>
routed_binomial.c at line 498
<br>
[borg01x144:08263] [[47330,0],2] ORTE_ERROR_LOG: Bad parameter in file
<br>
base/ess_base_std_orted.c at line 539
<br>
srun.slurm: Job step aborted: Waiting up to 2 seconds for job step to
<br>
finish.
<br>
slurmd[borg01x145]: *** STEP 2332583.4 KILLED AT 2014-08-29T07:16:20 WITH
<br>
SIGNAL 9 ***
<br>
slurmd[borg01x154]: *** STEP 2332583.4 KILLED AT 2014-08-29T07:16:20 WITH
<br>
SIGNAL 9 ***
<br>
slurmd[borg01x153]: *** STEP 2332583.4 KILLED AT 2014-08-29T07:16:20 WITH
<br>
SIGNAL 9 ***
<br>
slurmd[borg01x153]: *** STEP 2332583.4 KILLED AT 2014-08-29T07:16:20 WITH
<br>
SIGNAL 9 ***
<br>
srun.slurm: error: borg01x144: task 1: Exited with exit code 213
<br>
slurmd[borg01x144]: *** STEP 2332583.4 KILLED AT 2014-08-29T07:16:20 WITH
<br>
SIGNAL 9 ***
<br>
slurmd[borg01x144]: *** STEP 2332583.4 KILLED AT 2014-08-29T07:16:20 WITH
<br>
SIGNAL 9 ***
<br>
srun.slurm: error: borg01x153: task 3: Exited with exit code 213
<br>
slurmd[borg01x154]: *** STEP 2332583.4 KILLED AT 2014-08-29T07:16:20 WITH
<br>
SIGNAL 9 ***
<br>
slurmd[borg01x145]: *** STEP 2332583.4 KILLED AT 2014-08-29T07:16:20 WITH
<br>
SIGNAL 9 ***
<br>
srun.slurm: error: borg01x154: task 4: Killed
<br>
srun.slurm: error: borg01x145: task 2: Killed
<br>
sh: tcp://10.1.25.142,172.31.1.254,10.12.25.142:34169: No such file or
<br>
directory
<br>
<p><p><p><p>On Thu, Aug 28, 2014 at 7:17 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm unaware of any changes to the Slurm integration between rc4 and final
</span><br>
<span class="quotelev1">&gt; release. It sounds like this might be something else going on - try adding
</span><br>
<span class="quotelev1">&gt; &quot;--leave-session-attached --debug-daemons&quot; to your 1.8.2 command line and
</span><br>
<span class="quotelev1">&gt; let's see if any errors get reported.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 28, 2014, at 12:20 PM, Matt Thompson &lt;fortran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI List,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I recently encountered an odd bug with Open MPI 1.8.1 and GCC 4.9.1 on our
</span><br>
<span class="quotelev1">&gt; cluster (reported on this list), and decided to try it with 1.8.2. However,
</span><br>
<span class="quotelev1">&gt; we seem to be having an issue with Open MPI 1.8.2 and SLURM. Even weirder,
</span><br>
<span class="quotelev1">&gt; Open MPI 1.8.2rc4 doesn't show the bug. And the bug is: I get no stdout
</span><br>
<span class="quotelev1">&gt; with Open MPI 1.8.2. That is, HelloWorld doesn't work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To wit, our sysadmin has two tarballs:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (1441) $ sha1sum openmpi-1.8.2rc4.tar.bz2
</span><br>
<span class="quotelev1">&gt; 7e7496913c949451f546f22a1a159df25f8bb683  openmpi-1.8.2rc4.tar.bz2
</span><br>
<span class="quotelev1">&gt; (1442) $ sha1sum openmpi-1.8.2.tar.gz
</span><br>
<span class="quotelev1">&gt; cf2b1e45575896f63367406c6c50574699d8b2e1  openmpi-1.8.2.tar.gz
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I then build each with a script in the method our sysadmin usually does:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev2">&gt;&gt; set -x
</span><br>
<span class="quotelev2">&gt;&gt; export PREFIX=/discover/nobackup/mathomp4/MPI/gcc_4.9.1-openmpi_1.8.2
</span><br>
<span class="quotelev2">&gt;&gt; export LD_LIBRARY_PATH=${LD_LIBRARY_PATH}:/usr/nlocal/slurm/2.6.3/lib64
</span><br>
<span class="quotelev2">&gt;&gt; build() {
</span><br>
<span class="quotelev2">&gt;&gt;   echo `pwd`
</span><br>
<span class="quotelev2">&gt;&gt;   ./configure --with-slurm --disable-wrapper-rpath --enable-shared
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mca-no-build=btl-usnic \
</span><br>
<span class="quotelev2">&gt;&gt;       CC=gcc CXX=g++ F77=gfortran FC=gfortran \
</span><br>
<span class="quotelev2">&gt;&gt;       CFLAGS=&quot;-mtune=generic -fPIC -m64&quot; CXXFLAGS=&quot;-mtune=generic -fPIC
</span><br>
<span class="quotelev2">&gt;&gt; -m64&quot; FFLAGS=&quot;-mtune=generic -fPIC -m64&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;       F77FLAGS=&quot;-mtune=generic -fPIC -m64&quot; FCFLAGS=&quot;-mtune=generic -fPIC
</span><br>
<span class="quotelev2">&gt;&gt; -m64&quot; F90FLAGS=&quot;-mtune=generic -fPIC -m64&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;       LDFLAGS=&quot;-L/usr/nlocal/slurm/2.6.3/lib64&quot;
</span><br>
<span class="quotelev2">&gt;&gt; CPPFLAGS=&quot;-I/usr/nlocal/slurm/2.6.3/include&quot; LIBS=&quot;-lpciaccess&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;      --prefix=${PREFIX} 2&gt;&amp;1 | tee configure.1.8.2.log
</span><br>
<span class="quotelev2">&gt;&gt;   make 2&gt;&amp;1 | tee make.1.8.2.log
</span><br>
<span class="quotelev2">&gt;&gt;   make check 2&gt;&amp;1 | tee makecheck.1.8.2.log
</span><br>
<span class="quotelev2">&gt;&gt;   make install 2&gt;&amp;1 | tee makeinstall.1.8.2.log
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; echo &quot;calling build&quot;
</span><br>
<span class="quotelev2">&gt;&gt; build
</span><br>
<span class="quotelev2">&gt;&gt; echo &quot;exiting&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The only difference between the two is '1.8.2' or '1.8.2rc4' in the PREFIX
</span><br>
<span class="quotelev1">&gt; and log file tees.  Now, let us test. First, I grab some nodes with slurm:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ salloc --nodes=6 --ntasks-per-node=16 --constraint=sand --time=09:00:00
</span><br>
<span class="quotelev2">&gt;&gt; --account=g0620 --mail-type=BEGIN
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Once I get my nodes, I run with 1.8.2rc4:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (1142) $
</span><br>
<span class="quotelev2">&gt;&gt; /discover/nobackup/mathomp4/MPI/gcc_4.9.1-openmpi_1.8.2rc4/bin/mpifort -o
</span><br>
<span class="quotelev2">&gt;&gt; helloWorld.182rc4.x helloWorld.F90
</span><br>
<span class="quotelev2">&gt;&gt; (1143) $
</span><br>
<span class="quotelev2">&gt;&gt; /discover/nobackup/mathomp4/MPI/gcc_4.9.1-openmpi_1.8.2rc4/bin/mpirun -np 8
</span><br>
<span class="quotelev2">&gt;&gt; ./helloWorld.182rc4.x
</span><br>
<span class="quotelev2">&gt;&gt; Process    0 of    8 is on borg01w044
</span><br>
<span class="quotelev2">&gt;&gt; Process    5 of    8 is on borg01w044
</span><br>
<span class="quotelev2">&gt;&gt; Process    3 of    8 is on borg01w044
</span><br>
<span class="quotelev2">&gt;&gt; Process    7 of    8 is on borg01w044
</span><br>
<span class="quotelev2">&gt;&gt; Process    1 of    8 is on borg01w044
</span><br>
<span class="quotelev2">&gt;&gt; Process    2 of    8 is on borg01w044
</span><br>
<span class="quotelev2">&gt;&gt; Process    4 of    8 is on borg01w044
</span><br>
<span class="quotelev2">&gt;&gt; Process    6 of    8 is on borg01w044
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now 1.8.2:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (1144) $
</span><br>
<span class="quotelev2">&gt;&gt; /discover/nobackup/mathomp4/MPI/gcc_4.9.1-openmpi_1.8.2/bin/mpifort -o
</span><br>
<span class="quotelev2">&gt;&gt; helloWorld.182.x helloWorld.F90
</span><br>
<span class="quotelev2">&gt;&gt; (1145) $
</span><br>
<span class="quotelev2">&gt;&gt; /discover/nobackup/mathomp4/MPI/gcc_4.9.1-openmpi_1.8.2/bin/mpirun -np 8
</span><br>
<span class="quotelev2">&gt;&gt; ./helloWorld.182.x
</span><br>
<span class="quotelev2">&gt;&gt; (1146) $
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No output at all. But, if I take the helloWorld.x from 1.8.2 and run it
</span><br>
<span class="quotelev1">&gt; with 1.8.2rc4's mpirun:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (1146) $
</span><br>
<span class="quotelev2">&gt;&gt; /discover/nobackup/mathomp4/MPI/gcc_4.9.1-openmpi_1.8.2rc4/bin/mpirun -np 8
</span><br>
<span class="quotelev2">&gt;&gt; ./helloWorld.182.x
</span><br>
<span class="quotelev2">&gt;&gt; Process    5 of    8 is on borg01w044
</span><br>
<span class="quotelev2">&gt;&gt; Process    7 of    8 is on borg01w044
</span><br>
<span class="quotelev2">&gt;&gt; Process    2 of    8 is on borg01w044
</span><br>
<span class="quotelev2">&gt;&gt; Process    4 of    8 is on borg01w044
</span><br>
<span class="quotelev2">&gt;&gt; Process    1 of    8 is on borg01w044
</span><br>
<span class="quotelev2">&gt;&gt; Process    3 of    8 is on borg01w044
</span><br>
<span class="quotelev2">&gt;&gt; Process    6 of    8 is on borg01w044
</span><br>
<span class="quotelev2">&gt;&gt; Process    0 of    8 is on borg01w044
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So...any idea what is happening here? There did seem to be a few SLURM
</span><br>
<span class="quotelev1">&gt; related changes between the two tarballs involving /dev/null but it's a bit
</span><br>
<span class="quotelev1">&gt; above me to decipher.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can find the ompi_info, build, make, config, etc logs at these links
</span><br>
<span class="quotelev1">&gt; (they are ~300kB which is over the mailing list limit according to the Open
</span><br>
<span class="quotelev1">&gt; MPI web page):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://dl.dropboxusercontent.com/u/61696/OMPI-1.8.2rc4-Output.tar.bz2">https://dl.dropboxusercontent.com/u/61696/OMPI-1.8.2rc4-Output.tar.bz2</a>
</span><br>
<span class="quotelev1">&gt; <a href="https://dl.dropboxusercontent.com/u/61696/OMPI-1.8.2-Output.tar.bz2">https://dl.dropboxusercontent.com/u/61696/OMPI-1.8.2-Output.tar.bz2</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for any help and please let me know if you need more information,
</span><br>
<span class="quotelev1">&gt; Matt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; &quot;And, isn't sanity really just a one-trick pony anyway? I mean all you
</span><br>
<span class="quotelev1">&gt;  get is one trick: rational thinking. But when you're good and crazy,
</span><br>
<span class="quotelev1">&gt;  oooh, oooh, oooh, the sky is the limit!&quot; -- The Tick
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25182.php">http://www.open-mpi.org/community/lists/users/2014/08/25182.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25184.php">http://www.open-mpi.org/community/lists/users/2014/08/25184.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
&quot;And, isn't sanity really just a one-trick pony anyway? I mean all you
 get is one trick: rational thinking. But when you're good and crazy,
 oooh, oooh, oooh, the sky is the limit!&quot; -- The Tick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25187/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25188.php">Shamis, Pavel: "Re: [OMPI users] open shmem optimization"</a>
<li><strong>Previous message:</strong> <a href="25186.php">Reuti: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<li><strong>In reply to:</strong> <a href="25184.php">Ralph Castain: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25193.php">Ralph Castain: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>Reply:</strong> <a href="25193.php">Ralph Castain: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
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
