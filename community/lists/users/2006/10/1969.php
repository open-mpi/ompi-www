<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 12 10:02:52 2006" -->
<!-- isoreceived="20061012140252" -->
<!-- sent="Thu, 12 Oct 2006 10:02:29 -0400" -->
<!-- isosent="20061012140229" -->
<!-- name="Cupp, Matthew R" -->
<!-- email="cuppm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.1.1 with Multiple Thread Support" -->
<!-- id="AF3852B8E5337749823CCFC6889EA8AA03503924_at_WS-BCO-MSE7.milky-way.battelle.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AF3852B8E5337749823CCFC6889EA8AA0347D81D_at_WS-BCO-MSE7.milky-way.battelle.org" -->
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
<strong>From:</strong> Cupp, Matthew R (<em>cuppm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-12 10:02:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1970.php">Michael Kluskens: "Re: [OMPI users] Trouble with shared libraries"</a>
<li><strong>Previous message:</strong> <a href="1968.php">amane001: "Re: [OMPI users] PBS problem with OpenMP- only one processor used"</a>
<li><strong>In reply to:</strong> <a href="1954.php">Cupp, Matthew R: "[OMPI users] OpenMPI 1.1.1 with Multiple Thread Support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1979.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.1.1 with Multiple Thread Support"</a>
<li><strong>Reply:</strong> <a href="1979.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.1.1 with Multiple Thread Support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I ran the program with the debug flag (-d) and got the following
<br>
(hopefully it helps)...
<br>
<p>Thanks,
<br>
Matt
<br>
&nbsp;
<br>
<p>[master:32399] [0,0,0] setting up session dir with
<br>
[master:32399] 	universe default-universe
<br>
[master:32399] 	user cuppm
<br>
[master:32399] 	host master
<br>
[master:32399] 	jobid 0
<br>
[master:32399] 	procid 0
<br>
[master:32399] procdir:
<br>
/tmp/openmpi-sessions-cuppm_at_master_0/default-universe/0/0
<br>
[master:32399] jobdir:
<br>
/tmp/openmpi-sessions-cuppm_at_master_0/default-universe/0
<br>
[master:32399] unidir:
<br>
/tmp/openmpi-sessions-cuppm_at_master_0/default-universe
<br>
[master:32399] top: openmpi-sessions-cuppm_at_master_0
<br>
[master:32399] tmp: /tmp
<br>
[master:32399] [0,0,0] contact_file
<br>
/tmp/openmpi-sessions-cuppm_at_master_0/default-universe/universe-setup.txt
<br>
[master:32399] [0,0,0] wrote setup file
<br>
[master:32399] pls:rsh: local csh: 0, local bash: 1
<br>
[master:32399] pls:rsh: assuming same remote shell as local shell
<br>
[master:32399] pls:rsh: remote csh: 0, remote bash: 1
<br>
[master:32399] pls:rsh: final template argv:
<br>
[master:32399] pls:rsh:     /usr/bin/ssh &lt;template&gt; orted --debug
<br>
--bootproxy 1 --name &lt;template&gt; --num_procs 4 --vpid_start 0 --nodename
<br>
&lt;template&gt; --universe cuppm_at_master:default-universe --nsreplica
<br>
&quot;0.0.0;tcp://192.168.1.254:6331;tcp://131.167.49.200:6331&quot; --gprreplica
<br>
&quot;0.0.0;tcp://192.168.1.254:6331;tcp://131.167.49.200:6331&quot;
<br>
--mpi-call-yield 0
<br>
[master:32399] pls:rsh: launching on node node02
<br>
[master:32399] pls:rsh: not oversubscribed -- setting
<br>
mpi_yield_when_idle to 0
<br>
[master:32399] pls:rsh: node02 is a REMOTE node
<br>
[master:32399] pls:rsh: executing: /usr/bin/ssh node02
<br>
PATH=/opt/openmpi/bin:$PATH ; export PATH ;
<br>
LD_LIBRARY_PATH=/opt/openmpi/lib:$LD_LIBRARY_PATH ; export
<br>
LD_LIBRARY_PATH ; /opt/openmpi/bin/orted --debug --bootproxy 1 --name
<br>
0.0.1 --num_procs 4 --vpid_start 0 --nodename node02 --universe
<br>
cuppm_at_master:default-universe --nsreplica
<br>
&quot;0.0.0;tcp://192.168.1.254:6331;tcp://131.167.49.200:6331&quot; --gprreplica
<br>
&quot;0.0.0;tcp://192.168.1.254:6331;tcp://131.167.49.200:6331&quot;
<br>
--mpi-call-yield 0
<br>
[node02:05515] [0,0,1] setting up session dir with
<br>
[node02:05515] 	universe default-universe
<br>
[node02:05515] 	user cuppm
<br>
[node02:05515] 	host node02
<br>
[node02:05515] 	jobid 0
<br>
[node02:05515] 	procid 1
<br>
[node02:05515] procdir:
<br>
/tmp/openmpi-sessions-cuppm_at_node02_0/default-universe/0/1
<br>
[node02:05515] jobdir:
<br>
/tmp/openmpi-sessions-cuppm_at_node02_0/default-universe/0
<br>
[node02:05515] unidir:
<br>
/tmp/openmpi-sessions-cuppm_at_node02_0/default-universe
<br>
[node02:05515] top: openmpi-sessions-cuppm_at_node02_0
<br>
[node02:05515] tmp: /tmp
<br>
[master:32399] pls:rsh: launching on node node01
<br>
[master:32399] pls:rsh: not oversubscribed -- setting
<br>
mpi_yield_when_idle to 0
<br>
[master:32399] pls:rsh: node01 is a REMOTE node
<br>
[master:32399] pls:rsh: executing: /usr/bin/ssh node01
<br>
PATH=/opt/openmpi/bin:$PATH ; export PATH ;
<br>
LD_LIBRARY_PATH=/opt/openmpi/lib:$LD_LIBRARY_PATH ; export
<br>
LD_LIBRARY_PATH ; /opt/openmpi/bin/orted --debug --bootproxy 1 --name
<br>
0.0.2 --num_procs 4 --vpid_start 0 --nodename node01 --universe
<br>
cuppm_at_master:default-universe --nsreplica
<br>
&quot;0.0.0;tcp://192.168.1.254:6331;tcp://131.167.49.200:6331&quot; --gprreplica
<br>
&quot;0.0.0;tcp://192.168.1.254:6331;tcp://131.167.49.200:6331&quot;
<br>
--mpi-call-yield 0
<br>
[node01:15482] [0,0,2] setting up session dir with
<br>
[node01:15482] 	universe default-universe
<br>
[node01:15482] 	user cuppm
<br>
[node01:15482] 	host node01
<br>
[node01:15482] 	jobid 0
<br>
[node01:15482] 	procid 2
<br>
[node01:15482] procdir:
<br>
/tmp/openmpi-sessions-cuppm_at_node01_0/default-universe/0/2
<br>
[node01:15482] jobdir:
<br>
/tmp/openmpi-sessions-cuppm_at_node01_0/default-universe/0
<br>
[node01:15482] unidir:
<br>
/tmp/openmpi-sessions-cuppm_at_node01_0/default-universe
<br>
[node01:15482] top: openmpi-sessions-cuppm_at_node01_0
<br>
[node01:15482] tmp: /tmp
<br>
[master:32399] pls:rsh: launching on node master
<br>
[master:32399] pls:rsh: not oversubscribed -- setting
<br>
mpi_yield_when_idle to 0
<br>
[master:32399] pls:rsh: master is a LOCAL node
<br>
[master:32399] pls:rsh: reset PATH:
<br>
/opt/openmpi/bin:/opt/maui/bin:/opt/torque/bin:/opt/bin:/opt/hdfview/bin
<br>
:/opt/hdf/bin:/opt/ncarg/bin:/opt/mpich/p4-gnu/bin:/opt/mpiexec//bin:/us
<br>
r/kerberos/bin:/opt/java/jdk1.5.0/bin:/usr/lib64/ccache/bin:/usr/local/b
<br>
in:/bin:/usr/bin:/opt/java/jdk1.5.0/jre/bin
<br>
[master:32399] pls:rsh: reset LD_LIBRARY_PATH:
<br>
/opt/openmpi/lib:/usr/lib/jvm/jdk1.5.0_08/jre/lib/amd64/server:/usr/lib/
<br>
jvm/jdk1.5.0_08/jre/lib/amd64:/usr/lib/jvm/jdk1.5.0_08/jre/../lib/amd64:
<br>
/opt/mpich/p4-gnu/lib:/usr/lib64/mozilla-1.7.13
<br>
[master:32399] pls:rsh: changing to directory /home/cuppm
<br>
[master:32399] pls:rsh: executing: orted --debug --bootproxy 1 --name
<br>
0.0.3 --num_procs 4 --vpid_start 0 --nodename master --universe
<br>
cuppm_at_master:default-universe --nsreplica
<br>
&quot;0.0.0;tcp://192.168.1.254:6331;tcp://131.167.49.200:6331&quot; --gprreplica
<br>
&quot;0.0.0;tcp://192.168.1.254:6331;tcp://131.167.49.200:6331&quot;
<br>
--mpi-call-yield 0
<br>
[master:32408] [0,0,3] setting up session dir with
<br>
[master:32408] 	universe default-universe
<br>
[master:32408] 	user cuppm
<br>
[master:32408] 	host master
<br>
[master:32408] 	jobid 0
<br>
[master:32408] 	procid 3
<br>
[master:32408] procdir:
<br>
/tmp/openmpi-sessions-cuppm_at_master_0/default-universe/0/3
<br>
[master:32408] jobdir:
<br>
/tmp/openmpi-sessions-cuppm_at_master_0/default-universe/0
<br>
[master:32408] unidir:
<br>
/tmp/openmpi-sessions-cuppm_at_master_0/default-universe
<br>
[master:32408] top: openmpi-sessions-cuppm_at_master_0
<br>
[master:32408] tmp: /tmp
<br>
Calling Init...
<br>
[master:32410] [0,1,0] setting up session dir with
<br>
[master:32410] 	universe default-universe
<br>
[master:32410] 	user cuppm
<br>
[master:32410] 	host master
<br>
[master:32410] 	jobid 1
<br>
[master:32410] 	procid 0
<br>
[master:32410] procdir:
<br>
/tmp/openmpi-sessions-cuppm_at_master_0/default-universe/1/0
<br>
[master:32410] jobdir:
<br>
/tmp/openmpi-sessions-cuppm_at_master_0/default-universe/1
<br>
[master:32410] unidir:
<br>
/tmp/openmpi-sessions-cuppm_at_master_0/default-universe
<br>
[master:32410] top: openmpi-sessions-cuppm_at_master_0
<br>
[master:32410] tmp: /tmp
<br>
Calling Init...
<br>
Calling Init...
<br>
[node02:05517] [0,1,2] setting up session dir with
<br>
[node02:05517] 	universe default-universe
<br>
[node02:05517] 	user cuppm
<br>
[node02:05517] 	host node02
<br>
[node02:05517] 	jobid 1
<br>
[node02:05517] 	procid 2
<br>
[node02:05517] procdir:
<br>
/tmp/openmpi-sessions-cuppm_at_node02_0/default-universe/1/2
<br>
[node02:05517] jobdir:
<br>
/tmp/openmpi-sessions-cuppm_at_node02_0/default-universe/1
<br>
[node02:05517] unidir:
<br>
/tmp/openmpi-sessions-cuppm_at_node02_0/default-universe
<br>
[node02:05517] top: openmpi-sessions-cuppm_at_node02_0
<br>
[node02:05517] tmp: /tmp
<br>
[node01:15484] [0,1,1] setting up session dir with
<br>
[node01:15484] 	universe default-universe
<br>
[node01:15484] 	user cuppm
<br>
[node01:15484] 	host node01
<br>
[node01:15484] 	jobid 1
<br>
[node01:15484] 	procid 1
<br>
[node01:15484] procdir:
<br>
/tmp/openmpi-sessions-cuppm_at_node01_0/default-universe/1/1
<br>
[node01:15484] jobdir:
<br>
/tmp/openmpi-sessions-cuppm_at_node01_0/default-universe/1
<br>
[node01:15484] unidir:
<br>
/tmp/openmpi-sessions-cuppm_at_node01_0/default-universe
<br>
[node01:15484] top: openmpi-sessions-cuppm_at_node01_0
<br>
[node01:15484] tmp: /tmp
<br>
[node02:05517] mca_btl_sm_component_init: mkfifo failed with errno=17
<br>
[node01:15484] mca_btl_sm_component_init: mkfifo failed with errno=17
<br>
[master:32399] spawn: in job_state_callback(jobid = 1, state = 0x4)
<br>
[master:32399] Info: Setting up debugger process table for applications
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
&nbsp;&nbsp;MPIR_proctable_size = 3
<br>
&nbsp;&nbsp;MPIR_proctable:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (0, master,
<br>
/home/cuppm/workspace/MpiTest/Debug/MpiTest, 32410)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (1, node01,
<br>
/home/cuppm/workspace/MpiTest/Debug/MpiTest, 15484)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (2, node02,
<br>
/home/cuppm/workspace/MpiTest/Debug/MpiTest, 5517)
<br>
______________________________
<br>
Matt Cupp
<br>
Battelle Memorial Institute
<br>
Statistics and Information Analysis 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1970.php">Michael Kluskens: "Re: [OMPI users] Trouble with shared libraries"</a>
<li><strong>Previous message:</strong> <a href="1968.php">amane001: "Re: [OMPI users] PBS problem with OpenMP- only one processor used"</a>
<li><strong>In reply to:</strong> <a href="1954.php">Cupp, Matthew R: "[OMPI users] OpenMPI 1.1.1 with Multiple Thread Support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1979.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.1.1 with Multiple Thread Support"</a>
<li><strong>Reply:</strong> <a href="1979.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.1.1 with Multiple Thread Support"</a>
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
