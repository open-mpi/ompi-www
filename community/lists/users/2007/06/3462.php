<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 11 16:33:18 2007" -->
<!-- isoreceived="20070611203318" -->
<!-- sent="Mon, 11 Jun 2007 16:33:13 -0400" -->
<!-- isosent="20070611203313" -->
<!-- name="Kelley, Sean" -->
<!-- email="Sean.Kelley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun hanging when processes started on head node" -->
<!-- id="864805E437EF7C40986276CE00F29E4C9D9CE3_at_ava-es5.solers.local" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C2930375.97FA%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Kelley, Sean (<em>Sean.Kelley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-11 16:33:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3463.php">Jonathan Underwood: "[OMPI users] TCP connection errors"</a>
<li><strong>Previous message:</strong> <a href="3461.php">Galen Shipman: "Re: [OMPI users] Open MPI issue with Iprobe"</a>
<li><strong>In reply to:</strong> <a href="3459.php">Ralph H Castain: "Re: [OMPI users] mpirun hanging when processes started on head node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3472.php">Ralph H Castain: "Re: [OMPI users] mpirun hanging when processes started on head node"</a>
<li><strong>Reply:</strong> <a href="3472.php">Ralph H Castain: "Re: [OMPI users] mpirun hanging when processes started on head node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks for the quick response, clarifications below.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sean
<br>
<p>________________________________
<br>
<p>From: users-bounces_at_[hidden] on behalf of Ralph H Castain
<br>
Sent: Mon 6/11/2007 3:49 PM
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] mpirun hanging when processes started on head node
<br>
<p><p>Hi Sean
<br>
<p>Could you please clarify something? I'm a little confused by your comments about where things are running. I'm assuming that you mean everything works fine if you type the mpirun command on the head node and just let it launch on your compute nodes - that the problems only occur when you specifically tell mpirun you want processes on the head node as well (or exclusively). Is that correct?
<br>
<p>[Sean] This is correct.
<br>
<p><p>There are several possible sources of trouble, if I have understood your situation correctly. Our bproc support is somewhat limited at the moment - you may be encountering one of those limits. We currently have bproc support focused on the configuration here at Los Alamos National Lab as (a) that is where the bproc-related developers are working, and (b) it is the only regular test environment we have to work with for bproc. We don't normally use bproc in combination with hostfiles, so I'm not sure if there is a problem in that combination. I can investigate that a little later this week.
<br>
<p>[Sean] If it is helpful, running 'export NODES=-1; mpirun -np 1 hostname' exibits identical behaviour.
<br>
<p>Similarly, we require that all the nodes being used must be accessible via the same launch environment. It sounds like we may be able to launch processes on your head node via rsh, but not necessarily bproc. You might check to ensure that the head node will allow bproc-based process launch (I know ours don't - all jobs are run solely on the compute nodes. I believe that is generally the case). We don't currently support mixed environments, and I honestly don't expect that to change anytime soon.
<br>
<p><p>[Sean] I'm working through the strace output to follow the progression on the head node. It looks like mpirun consults '/bpfs/self' and determines that the request is to be run on the local machine so it fork/execs 'orted' which then runs 'hostname'. 'mpirun' didn't consult '/bpfs' or utilize 'rsh' after the determination to run on the local machine was made. When the 'hostname' command completes, 'orted' receives the SIGCHLD signal, performs some work and then both 'mpirun' and 'orted' go into what appears to be a poll() waiting for events.
<br>
<p><p>Hope that helps at least a little.
<br>
<p>[Sean] I appreciate the help. We are running processes on the head node because the head node is the only node which can access external resources (storage devices). 
<br>
<p><p>Ralph
<br>
<p><p><p><p><p>On 6/11/07 1:04 PM, &quot;Kelley, Sean&quot; &lt;Sean.Kelley_at_[hidden]&gt; wrote:
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I forgot to add that we are using 'bproc'. Launching processes on the compute nodes using bproc works well, I'm not sure if bproc is involved when processes are launched on the local node.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sean
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
________________________________
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From: users-bounces_at_[hidden] on behalf of Kelley, Sean
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sent: Mon 6/11/2007 2:07 PM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To: users_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject: [OMPI users] mpirun hanging when processes started on head node
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hi,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We are running the OFED 1.2rc4 distribution containing openmpi-1.2.2 on a RedhatEL4U4 system with Scyld Clusterware 4.1. The hardware configuration consists of a DELL 2950 as the headnode and 3 DELL 1950 blades as compute nodes using Cisco TopSpin Infiband HCAs and switches for the interconnect.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;When we use 'mpirun' from the OFED/Open MPI distribution to start processes on the compute nodes, everything works correctly. However, when we try to start processes on the head node, the processes appear to run correctly but 'mpirun' hangs and does not terminate until killed. The attached 'run1.tgz' file contains detailed information from running the following command:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun --hostfile hostfile1 --np 1 --byslot --debug-daemons -d hostname
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;where 'hostfile1' contains the following:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-1 slots=2 max_slots=2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The 'run.log' is the output of the above line. The 'strace.out.0' is the result of 'strace -f' on the mpirun process (and the 'hostname' child process since mpirun simply forks the local processes). The child process (pid 23415 in this case) runs to completion and exits successfully. The parent process (mpirun) doesn't appear to recognize that the child has completed and hangs until killed (with a ^c). 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Additionally, when we run a set of processes which span the headnode and the compute nodes, the processes on the head node complete successfully, but the processes on the compute nodes do not appear to start. mpirun again appears to hang.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Do I have a configuration error or is there a problem that I have encountered? Thank you in advance for your assistance or suggestions
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sean
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sean M. Kelley
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sean.kelley_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
________________________________
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______________________________________________
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users mailing list
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3462/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3463.php">Jonathan Underwood: "[OMPI users] TCP connection errors"</a>
<li><strong>Previous message:</strong> <a href="3461.php">Galen Shipman: "Re: [OMPI users] Open MPI issue with Iprobe"</a>
<li><strong>In reply to:</strong> <a href="3459.php">Ralph H Castain: "Re: [OMPI users] mpirun hanging when processes started on head node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3472.php">Ralph H Castain: "Re: [OMPI users] mpirun hanging when processes started on head node"</a>
<li><strong>Reply:</strong> <a href="3472.php">Ralph H Castain: "Re: [OMPI users] mpirun hanging when processes started on head node"</a>
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
