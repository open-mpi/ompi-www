<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Oct 14 07:18:15 2006" -->
<!-- isoreceived="20061014111815" -->
<!-- sent="Fri, 13 Oct 2006 14:07:04 -0700" -->
<!-- isosent="20061013210704" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.1.1 with Multiple Thread Support" -->
<!-- id="766369F2-15A3-4E3F-A67B-B70486240B15_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="AF3852B8E5337749823CCFC6889EA8AA03503924_at_WS-BCO-MSE7.milky-way.battelle.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-13 17:07:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1980.php">Jeff Squyres: "Re: [OMPI users] Trouble with shared libraries"</a>
<li><strong>Previous message:</strong> <a href="1978.php">Aleph One: "Re: [OMPI users] mca_oob_tcp_accept: accept() failed with errno 24"</a>
<li><strong>In reply to:</strong> <a href="1969.php">Cupp, Matthew R: "Re: [OMPI users] OpenMPI 1.1.1 with Multiple Thread Support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1991.php">Cupp, Matthew R: "Re: [OMPI users] OpenMPI 1.1.1 with Multiple Thread Support"</a>
<li><strong>Reply:</strong> <a href="1991.php">Cupp, Matthew R: "Re: [OMPI users] OpenMPI 1.1.1 with Multiple Thread Support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The problem is that we haven't done a whole lot of testing yet for  
<br>
multiple thread support.  In particular, OMPI was fundamentally  
<br>
designed for both THREAD_MULTIPLE and progression thread support, and  
<br>
several groups have done testing to ensure that when compiled with  
<br>
multiple thread support, OMPI doesn't just hang, but:
<br>
<p>- I don't know if we have tested the progress thread support in quite  
<br>
a long time, and
<br>
- Even though OMPI has been tested to ensure that we don't have  
<br>
boneheaded extra locks/unlocks, not a whole lot of testing has  
<br>
occurred to ensure that THREAD_MULTIPLE support is completely solid.
<br>
<p>As such, I'd be surprised if THREAD_MULTIPLE works for any  
<br>
applications that do anything reasonably &quot;interesting&quot; with multiple  
<br>
threads and MPI (it pains me to say this, but I'd rather be honest  
<br>
than string you along! :-( ).
<br>
<p>That being said, THREAD_MULTIPLE support is going to become more  
<br>
relevant in the next several months (i.e., various organizations have  
<br>
a vested interest in THREAD_MULTIPLE and the work will resume in this  
<br>
area).
<br>
<p><p>On Oct 12, 2006, at 7:02 AM, Cupp, Matthew R wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ran the program with the debug flag (-d) and got the following
</span><br>
<span class="quotelev1">&gt; (hopefully it helps)...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Matt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [master:32399] [0,0,0] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [master:32399] 	universe default-universe
</span><br>
<span class="quotelev1">&gt; [master:32399] 	user cuppm
</span><br>
<span class="quotelev1">&gt; [master:32399] 	host master
</span><br>
<span class="quotelev1">&gt; [master:32399] 	jobid 0
</span><br>
<span class="quotelev1">&gt; [master:32399] 	procid 0
</span><br>
<span class="quotelev1">&gt; [master:32399] procdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-cuppm_at_master_0/default-universe/0/0
</span><br>
<span class="quotelev1">&gt; [master:32399] jobdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-cuppm_at_master_0/default-universe/0
</span><br>
<span class="quotelev1">&gt; [master:32399] unidir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-cuppm_at_master_0/default-universe
</span><br>
<span class="quotelev1">&gt; [master:32399] top: openmpi-sessions-cuppm_at_master_0
</span><br>
<span class="quotelev1">&gt; [master:32399] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [master:32399] [0,0,0] contact_file
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-cuppm_at_master_0/default-universe/universe- 
</span><br>
<span class="quotelev1">&gt; setup.txt
</span><br>
<span class="quotelev1">&gt; [master:32399] [0,0,0] wrote setup file
</span><br>
<span class="quotelev1">&gt; [master:32399] pls:rsh: local csh: 0, local bash: 1
</span><br>
<span class="quotelev1">&gt; [master:32399] pls:rsh: assuming same remote shell as local shell
</span><br>
<span class="quotelev1">&gt; [master:32399] pls:rsh: remote csh: 0, remote bash: 1
</span><br>
<span class="quotelev1">&gt; [master:32399] pls:rsh: final template argv:
</span><br>
<span class="quotelev1">&gt; [master:32399] pls:rsh:     /usr/bin/ssh &lt;template&gt; orted --debug
</span><br>
<span class="quotelev1">&gt; --bootproxy 1 --name &lt;template&gt; --num_procs 4 --vpid_start 0 -- 
</span><br>
<span class="quotelev1">&gt; nodename
</span><br>
<span class="quotelev1">&gt; &lt;template&gt; --universe cuppm_at_master:default-universe --nsreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.1.254:6331;tcp://131.167.49.200:6331&quot; -- 
</span><br>
<span class="quotelev1">&gt; gprreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.1.254:6331;tcp://131.167.49.200:6331&quot;
</span><br>
<span class="quotelev1">&gt; --mpi-call-yield 0
</span><br>
<span class="quotelev1">&gt; [master:32399] pls:rsh: launching on node node02
</span><br>
<span class="quotelev1">&gt; [master:32399] pls:rsh: not oversubscribed -- setting
</span><br>
<span class="quotelev1">&gt; mpi_yield_when_idle to 0
</span><br>
<span class="quotelev1">&gt; [master:32399] pls:rsh: node02 is a REMOTE node
</span><br>
<span class="quotelev1">&gt; [master:32399] pls:rsh: executing: /usr/bin/ssh node02
</span><br>
<span class="quotelev1">&gt; PATH=/opt/openmpi/bin:$PATH ; export PATH ;
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/opt/openmpi/lib:$LD_LIBRARY_PATH ; export
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH ; /opt/openmpi/bin/orted --debug --bootproxy 1 --name
</span><br>
<span class="quotelev1">&gt; 0.0.1 --num_procs 4 --vpid_start 0 --nodename node02 --universe
</span><br>
<span class="quotelev1">&gt; cuppm_at_master:default-universe --nsreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.1.254:6331;tcp://131.167.49.200:6331&quot; -- 
</span><br>
<span class="quotelev1">&gt; gprreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.1.254:6331;tcp://131.167.49.200:6331&quot;
</span><br>
<span class="quotelev1">&gt; --mpi-call-yield 0
</span><br>
<span class="quotelev1">&gt; [node02:05515] [0,0,1] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [node02:05515] 	universe default-universe
</span><br>
<span class="quotelev1">&gt; [node02:05515] 	user cuppm
</span><br>
<span class="quotelev1">&gt; [node02:05515] 	host node02
</span><br>
<span class="quotelev1">&gt; [node02:05515] 	jobid 0
</span><br>
<span class="quotelev1">&gt; [node02:05515] 	procid 1
</span><br>
<span class="quotelev1">&gt; [node02:05515] procdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-cuppm_at_node02_0/default-universe/0/1
</span><br>
<span class="quotelev1">&gt; [node02:05515] jobdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-cuppm_at_node02_0/default-universe/0
</span><br>
<span class="quotelev1">&gt; [node02:05515] unidir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-cuppm_at_node02_0/default-universe
</span><br>
<span class="quotelev1">&gt; [node02:05515] top: openmpi-sessions-cuppm_at_node02_0
</span><br>
<span class="quotelev1">&gt; [node02:05515] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [master:32399] pls:rsh: launching on node node01
</span><br>
<span class="quotelev1">&gt; [master:32399] pls:rsh: not oversubscribed -- setting
</span><br>
<span class="quotelev1">&gt; mpi_yield_when_idle to 0
</span><br>
<span class="quotelev1">&gt; [master:32399] pls:rsh: node01 is a REMOTE node
</span><br>
<span class="quotelev1">&gt; [master:32399] pls:rsh: executing: /usr/bin/ssh node01
</span><br>
<span class="quotelev1">&gt; PATH=/opt/openmpi/bin:$PATH ; export PATH ;
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/opt/openmpi/lib:$LD_LIBRARY_PATH ; export
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH ; /opt/openmpi/bin/orted --debug --bootproxy 1 --name
</span><br>
<span class="quotelev1">&gt; 0.0.2 --num_procs 4 --vpid_start 0 --nodename node01 --universe
</span><br>
<span class="quotelev1">&gt; cuppm_at_master:default-universe --nsreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.1.254:6331;tcp://131.167.49.200:6331&quot; -- 
</span><br>
<span class="quotelev1">&gt; gprreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.1.254:6331;tcp://131.167.49.200:6331&quot;
</span><br>
<span class="quotelev1">&gt; --mpi-call-yield 0
</span><br>
<span class="quotelev1">&gt; [node01:15482] [0,0,2] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [node01:15482] 	universe default-universe
</span><br>
<span class="quotelev1">&gt; [node01:15482] 	user cuppm
</span><br>
<span class="quotelev1">&gt; [node01:15482] 	host node01
</span><br>
<span class="quotelev1">&gt; [node01:15482] 	jobid 0
</span><br>
<span class="quotelev1">&gt; [node01:15482] 	procid 2
</span><br>
<span class="quotelev1">&gt; [node01:15482] procdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-cuppm_at_node01_0/default-universe/0/2
</span><br>
<span class="quotelev1">&gt; [node01:15482] jobdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-cuppm_at_node01_0/default-universe/0
</span><br>
<span class="quotelev1">&gt; [node01:15482] unidir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-cuppm_at_node01_0/default-universe
</span><br>
<span class="quotelev1">&gt; [node01:15482] top: openmpi-sessions-cuppm_at_node01_0
</span><br>
<span class="quotelev1">&gt; [node01:15482] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [master:32399] pls:rsh: launching on node master
</span><br>
<span class="quotelev1">&gt; [master:32399] pls:rsh: not oversubscribed -- setting
</span><br>
<span class="quotelev1">&gt; mpi_yield_when_idle to 0
</span><br>
<span class="quotelev1">&gt; [master:32399] pls:rsh: master is a LOCAL node
</span><br>
<span class="quotelev1">&gt; [master:32399] pls:rsh: reset PATH:
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/bin:/opt/maui/bin:/opt/torque/bin:/opt/bin:/opt/ 
</span><br>
<span class="quotelev1">&gt; hdfview/bin
</span><br>
<span class="quotelev1">&gt; :/opt/hdf/bin:/opt/ncarg/bin:/opt/mpich/p4-gnu/bin:/opt/mpiexec// 
</span><br>
<span class="quotelev1">&gt; bin:/us
</span><br>
<span class="quotelev1">&gt; r/kerberos/bin:/opt/java/jdk1.5.0/bin:/usr/lib64/ccache/bin:/usr/ 
</span><br>
<span class="quotelev1">&gt; local/b
</span><br>
<span class="quotelev1">&gt; in:/bin:/usr/bin:/opt/java/jdk1.5.0/jre/bin
</span><br>
<span class="quotelev1">&gt; [master:32399] pls:rsh: reset LD_LIBRARY_PATH:
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/lib:/usr/lib/jvm/jdk1.5.0_08/jre/lib/amd64/server:/usr/ 
</span><br>
<span class="quotelev1">&gt; lib/
</span><br>
<span class="quotelev1">&gt; jvm/jdk1.5.0_08/jre/lib/amd64:/usr/lib/jvm/jdk1.5.0_08/jre/../lib/ 
</span><br>
<span class="quotelev1">&gt; amd64:
</span><br>
<span class="quotelev1">&gt; /opt/mpich/p4-gnu/lib:/usr/lib64/mozilla-1.7.13
</span><br>
<span class="quotelev1">&gt; [master:32399] pls:rsh: changing to directory /home/cuppm
</span><br>
<span class="quotelev1">&gt; [master:32399] pls:rsh: executing: orted --debug --bootproxy 1 --name
</span><br>
<span class="quotelev1">&gt; 0.0.3 --num_procs 4 --vpid_start 0 --nodename master --universe
</span><br>
<span class="quotelev1">&gt; cuppm_at_master:default-universe --nsreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.1.254:6331;tcp://131.167.49.200:6331&quot; -- 
</span><br>
<span class="quotelev1">&gt; gprreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.1.254:6331;tcp://131.167.49.200:6331&quot;
</span><br>
<span class="quotelev1">&gt; --mpi-call-yield 0
</span><br>
<span class="quotelev1">&gt; [master:32408] [0,0,3] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [master:32408] 	universe default-universe
</span><br>
<span class="quotelev1">&gt; [master:32408] 	user cuppm
</span><br>
<span class="quotelev1">&gt; [master:32408] 	host master
</span><br>
<span class="quotelev1">&gt; [master:32408] 	jobid 0
</span><br>
<span class="quotelev1">&gt; [master:32408] 	procid 3
</span><br>
<span class="quotelev1">&gt; [master:32408] procdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-cuppm_at_master_0/default-universe/0/3
</span><br>
<span class="quotelev1">&gt; [master:32408] jobdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-cuppm_at_master_0/default-universe/0
</span><br>
<span class="quotelev1">&gt; [master:32408] unidir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-cuppm_at_master_0/default-universe
</span><br>
<span class="quotelev1">&gt; [master:32408] top: openmpi-sessions-cuppm_at_master_0
</span><br>
<span class="quotelev1">&gt; [master:32408] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; Calling Init...
</span><br>
<span class="quotelev1">&gt; [master:32410] [0,1,0] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [master:32410] 	universe default-universe
</span><br>
<span class="quotelev1">&gt; [master:32410] 	user cuppm
</span><br>
<span class="quotelev1">&gt; [master:32410] 	host master
</span><br>
<span class="quotelev1">&gt; [master:32410] 	jobid 1
</span><br>
<span class="quotelev1">&gt; [master:32410] 	procid 0
</span><br>
<span class="quotelev1">&gt; [master:32410] procdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-cuppm_at_master_0/default-universe/1/0
</span><br>
<span class="quotelev1">&gt; [master:32410] jobdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-cuppm_at_master_0/default-universe/1
</span><br>
<span class="quotelev1">&gt; [master:32410] unidir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-cuppm_at_master_0/default-universe
</span><br>
<span class="quotelev1">&gt; [master:32410] top: openmpi-sessions-cuppm_at_master_0
</span><br>
<span class="quotelev1">&gt; [master:32410] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; Calling Init...
</span><br>
<span class="quotelev1">&gt; Calling Init...
</span><br>
<span class="quotelev1">&gt; [node02:05517] [0,1,2] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [node02:05517] 	universe default-universe
</span><br>
<span class="quotelev1">&gt; [node02:05517] 	user cuppm
</span><br>
<span class="quotelev1">&gt; [node02:05517] 	host node02
</span><br>
<span class="quotelev1">&gt; [node02:05517] 	jobid 1
</span><br>
<span class="quotelev1">&gt; [node02:05517] 	procid 2
</span><br>
<span class="quotelev1">&gt; [node02:05517] procdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-cuppm_at_node02_0/default-universe/1/2
</span><br>
<span class="quotelev1">&gt; [node02:05517] jobdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-cuppm_at_node02_0/default-universe/1
</span><br>
<span class="quotelev1">&gt; [node02:05517] unidir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-cuppm_at_node02_0/default-universe
</span><br>
<span class="quotelev1">&gt; [node02:05517] top: openmpi-sessions-cuppm_at_node02_0
</span><br>
<span class="quotelev1">&gt; [node02:05517] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [node01:15484] [0,1,1] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [node01:15484] 	universe default-universe
</span><br>
<span class="quotelev1">&gt; [node01:15484] 	user cuppm
</span><br>
<span class="quotelev1">&gt; [node01:15484] 	host node01
</span><br>
<span class="quotelev1">&gt; [node01:15484] 	jobid 1
</span><br>
<span class="quotelev1">&gt; [node01:15484] 	procid 1
</span><br>
<span class="quotelev1">&gt; [node01:15484] procdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-cuppm_at_node01_0/default-universe/1/1
</span><br>
<span class="quotelev1">&gt; [node01:15484] jobdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-cuppm_at_node01_0/default-universe/1
</span><br>
<span class="quotelev1">&gt; [node01:15484] unidir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-cuppm_at_node01_0/default-universe
</span><br>
<span class="quotelev1">&gt; [node01:15484] top: openmpi-sessions-cuppm_at_node01_0
</span><br>
<span class="quotelev1">&gt; [node01:15484] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [node02:05517] mca_btl_sm_component_init: mkfifo failed with errno=17
</span><br>
<span class="quotelev1">&gt; [node01:15484] mca_btl_sm_component_init: mkfifo failed with errno=17
</span><br>
<span class="quotelev1">&gt; [master:32399] spawn: in job_state_callback(jobid = 1, state = 0x4)
</span><br>
<span class="quotelev1">&gt; [master:32399] Info: Setting up debugger process table for  
</span><br>
<span class="quotelev1">&gt; applications
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
<span class="quotelev1">&gt;   MPIR_proctable_size = 3
</span><br>
<span class="quotelev1">&gt;   MPIR_proctable:
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (0, master,
</span><br>
<span class="quotelev1">&gt; /home/cuppm/workspace/MpiTest/Debug/MpiTest, 32410)
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (1, node01,
</span><br>
<span class="quotelev1">&gt; /home/cuppm/workspace/MpiTest/Debug/MpiTest, 15484)
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (2, node02,
</span><br>
<span class="quotelev1">&gt; /home/cuppm/workspace/MpiTest/Debug/MpiTest, 5517)
</span><br>
<span class="quotelev1">&gt; ______________________________
</span><br>
<span class="quotelev1">&gt; Matt Cupp
</span><br>
<span class="quotelev1">&gt; Battelle Memorial Institute
</span><br>
<span class="quotelev1">&gt; Statistics and Information Analysis
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
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1980.php">Jeff Squyres: "Re: [OMPI users] Trouble with shared libraries"</a>
<li><strong>Previous message:</strong> <a href="1978.php">Aleph One: "Re: [OMPI users] mca_oob_tcp_accept: accept() failed with errno 24"</a>
<li><strong>In reply to:</strong> <a href="1969.php">Cupp, Matthew R: "Re: [OMPI users] OpenMPI 1.1.1 with Multiple Thread Support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1991.php">Cupp, Matthew R: "Re: [OMPI users] OpenMPI 1.1.1 with Multiple Thread Support"</a>
<li><strong>Reply:</strong> <a href="1991.php">Cupp, Matthew R: "Re: [OMPI users] OpenMPI 1.1.1 with Multiple Thread Support"</a>
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
