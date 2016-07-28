<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 12 08:52:30 2007" -->
<!-- isoreceived="20070612125230" -->
<!-- sent="Tue, 12 Jun 2007 06:52:22 -0600" -->
<!-- isosent="20070612125222" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun hanging when processes started on head node" -->
<!-- id="C293F326.981C%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="864805E437EF7C40986276CE00F29E4C9D9CE3_at_ava-es5.solers.local" -->
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
<strong>Date:</strong> 2007-06-12 08:52:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3473.php">Brian Barrett: "Re: [OMPI users] rdma over tcp?"</a>
<li><strong>Previous message:</strong> <a href="3471.php">Jeff Squyres: "Re: [OMPI users] f90 support not built with gfortran?"</a>
<li><strong>In reply to:</strong> <a href="3462.php">Kelley, Sean: "Re: [OMPI users] mpirun hanging when processes started on head node"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Sean
<br>
<p><span class="quotelev1">&gt; [Sean] I'm working through the strace output to follow the progression on the
</span><br>
<span class="quotelev1">&gt; head node. It looks like mpirun consults '/bpfs/self' and determines that the
</span><br>
<span class="quotelev1">&gt; request is to be run on the local machine so it fork/execs 'orted' which then
</span><br>
<span class="quotelev1">&gt; runs 'hostname'. 'mpirun' didn't consult '/bpfs' or utilize 'rsh' after the
</span><br>
<span class="quotelev1">&gt; determination to run on the local machine was made. When the 'hostname'
</span><br>
<span class="quotelev1">&gt; command completes, 'orted' receives the SIGCHLD signal, performs some work and
</span><br>
<span class="quotelev1">&gt; then both 'mpirun' and 'orted' go into what appears to be a poll() waiting for
</span><br>
<span class="quotelev1">&gt; events.
</span><br>
<p>This is the core of the problem - I confess to being blown away that mpirun
<br>
is fork/exec'ing that local orted. I will have to go through the code and
<br>
try to figure that one out - we have never seen that behavior. There should
<br>
be no way at all for that to happen.
<br>
<p>The problem is that, if the code fork/exec's that local orted, then the
<br>
bproc code components have no idea it exists. Hence, the system doesn't know
<br>
it should shutdown when complete because (a) there is still a lingering
<br>
orted out there, but (b) the dominant component (bproc, in this case) has no
<br>
earthly idea where it is or how to tell it to go away.
<br>
<p>FWIW, this problem will vanish in 1.3 due to a major change in the way we
<br>
handle orteds. However, the idea that we could fork/exec an orted under
<br>
bproc is something we definitely will have to fix.
<br>
<p>Sorry for the problem. I'll have to see if there is a fix for 1.2 - it may
<br>
require too much code change and have to wait for 1.3. I'll advise as soon
<br>
as I figure this one out.
<br>
<p>Ralph
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope that helps at least a little.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Sean] I appreciate the help. We are running processes on the head node
</span><br>
<span class="quotelev1">&gt; because the head node is the only node which can access external resources
</span><br>
<span class="quotelev1">&gt; (storage devices).
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 6/11/07 1:04 PM, &quot;Kelley, Sean&quot; &lt;Sean.Kelley_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I forgot to add that we are using 'bproc'. Launching processes on the compute
</span><br>
<span class="quotelev2">&gt;&gt; nodes using bproc works well, I'm not sure if bproc is involved when
</span><br>
<span class="quotelev2">&gt;&gt; processes are launched on the local node.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sean
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] on behalf of Kelley, Sean
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Mon 6/11/2007 2:07 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] mpirun hanging when processes started on head node
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;       We are running the OFED 1.2rc4 distribution containing openmpi-1.2.2 on
</span><br>
<span class="quotelev2">&gt;&gt; a RedhatEL4U4 system with Scyld Clusterware 4.1. The hardware configuration
</span><br>
<span class="quotelev2">&gt;&gt; consists of a DELL 2950 as the headnode and 3 DELL 1950 blades as compute
</span><br>
<span class="quotelev2">&gt;&gt; nodes using Cisco TopSpin Infiband HCAs and switches for the interconnect.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;       When we use 'mpirun' from the OFED/Open MPI distribution to start
</span><br>
<span class="quotelev2">&gt;&gt; processes on the compute nodes, everything works correctly. However, when we
</span><br>
<span class="quotelev2">&gt;&gt; try to start processes on the head node, the processes appear to run
</span><br>
<span class="quotelev2">&gt;&gt; correctly but 'mpirun' hangs and does not terminate until killed. The
</span><br>
<span class="quotelev2">&gt;&gt; attached 'run1.tgz' file contains detailed information from running the
</span><br>
<span class="quotelev2">&gt;&gt; following command:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;      mpirun --hostfile hostfile1 --np 1 --byslot --debug-daemons -d hostname
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; where 'hostfile1' contains the following:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -1 slots=2 max_slots=2
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The 'run.log' is the output of the above line. The 'strace.out.0' is the
</span><br>
<span class="quotelev2">&gt;&gt; result of 'strace -f' on the mpirun process (and the 'hostname' child process
</span><br>
<span class="quotelev2">&gt;&gt; since mpirun simply forks the local processes). The child process (pid 23415
</span><br>
<span class="quotelev2">&gt;&gt; in this case) runs to completion and exits successfully. The parent process
</span><br>
<span class="quotelev2">&gt;&gt; (mpirun) doesn't appear to recognize that the child has completed and hangs
</span><br>
<span class="quotelev2">&gt;&gt; until killed (with a ^c).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Additionally, when we run a set of processes which span the headnode and the
</span><br>
<span class="quotelev2">&gt;&gt; compute nodes, the processes on the head node complete successfully, but the
</span><br>
<span class="quotelev2">&gt;&gt; processes on the compute nodes do not appear to start. mpirun again appears
</span><br>
<span class="quotelev2">&gt;&gt; to hang.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Do I have a configuration error or is there a problem that I have
</span><br>
<span class="quotelev2">&gt;&gt; encountered? Thank you in advance for your assistance or suggestions
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sean
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ------
</span><br>
<span class="quotelev2">&gt;&gt; Sean M. Kelley
</span><br>
<span class="quotelev2">&gt;&gt; sean.kelley_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="3473.php">Brian Barrett: "Re: [OMPI users] rdma over tcp?"</a>
<li><strong>Previous message:</strong> <a href="3471.php">Jeff Squyres: "Re: [OMPI users] f90 support not built with gfortran?"</a>
<li><strong>In reply to:</strong> <a href="3462.php">Kelley, Sean: "Re: [OMPI users] mpirun hanging when processes started on head node"</a>
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
