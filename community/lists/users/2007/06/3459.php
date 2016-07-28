<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 11 15:49:47 2007" -->
<!-- isoreceived="20070611194947" -->
<!-- sent="Mon, 11 Jun 2007 13:49:41 -0600" -->
<!-- isosent="20070611194941" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun hanging when processes started on head node" -->
<!-- id="C2930375.97FA%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="864805E437EF7C40986276CE00F29E4C9D9CE2_at_ava-es5.solers.local" -->
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
<strong>Date:</strong> 2007-06-11 15:49:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3460.php">Reese Faucette: "Re: [OMPI users] mixing MX and TCP"</a>
<li><strong>Previous message:</strong> <a href="3458.php">Kelley, Sean: "Re: [OMPI users] mpirun hanging when processes started on head node"</a>
<li><strong>In reply to:</strong> <a href="3458.php">Kelley, Sean: "Re: [OMPI users] mpirun hanging when processes started on head node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3462.php">Kelley, Sean: "Re: [OMPI users] mpirun hanging when processes started on head node"</a>
<li><strong>Reply:</strong> <a href="3462.php">Kelley, Sean: "Re: [OMPI users] mpirun hanging when processes started on head node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Sean
<br>
<p>Could you please clarify something? I&#185;m a little confused by your comments
<br>
about where things are running. I&#185;m assuming that you mean everything works
<br>
fine if you type the mpirun command on the head node and just let it launch
<br>
on your compute nodes &#173; that the problems only occur when you specifically
<br>
tell mpirun you want processes on the head node as well (or exclusively). Is
<br>
that correct?
<br>
<p>There are several possible sources of trouble, if I have understood your
<br>
situation correctly. Our bproc support is somewhat limited at the moment &#173;
<br>
you may be encountering one of those limits. We currently have bproc support
<br>
focused on the configuration here at Los Alamos National Lab as (a) that is
<br>
where the bproc-related developers are working, and (b) it is the only
<br>
regular test environment we have to work with for bproc. We don&#185;t normally
<br>
use bproc in combination with hostfiles, so I&#185;m not sure if there is a
<br>
problem in that combination. I can investigate that a little later this
<br>
week.
<br>
<p>Similarly, we require that all the nodes being used must be accessible via
<br>
the same launch environment. It sounds like we may be able to launch
<br>
processes on your head node via rsh, but not necessarily bproc. You might
<br>
check to ensure that the head node will allow bproc-based process launch (I
<br>
know ours don&#185;t &#173; all jobs are run solely on the compute nodes. I believe
<br>
that is generally the case). We don&#185;t currently support mixed environments,
<br>
and I honestly don&#185;t expect that to change anytime soon.
<br>
<p>Hope that helps at least a little.
<br>
Ralph
<br>
<p><p><p><p><p>On 6/11/07 1:04 PM, &quot;Kelley, Sean&quot; &lt;Sean.Kelley_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I forgot to add that we are using 'bproc'. Launching processes on the compute
</span><br>
<span class="quotelev1">&gt; nodes using bproc works well, I'm not sure if bproc is involved when processes
</span><br>
<span class="quotelev1">&gt; are launched on the local node.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Sean
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] on behalf of Kelley, Sean
</span><br>
<span class="quotelev1">&gt; Sent: Mon 6/11/2007 2:07 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] mpirun hanging when processes started on head node
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;       We are running the OFED 1.2rc4 distribution containing openmpi-1.2.2 on
</span><br>
<span class="quotelev1">&gt; a RedhatEL4U4 system with Scyld Clusterware 4.1. The hardware configuration
</span><br>
<span class="quotelev1">&gt; consists of a DELL 2950 as the headnode and 3 DELL 1950 blades as compute
</span><br>
<span class="quotelev1">&gt; nodes using Cisco TopSpin Infiband HCAs and switches for the interconnect.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;        When we use 'mpirun' from the OFED/Open MPI distribution to start
</span><br>
<span class="quotelev1">&gt; processes on the compute nodes, everything works correctly. However, when we
</span><br>
<span class="quotelev1">&gt; try to start processes on the head node, the processes appear to run correctly
</span><br>
<span class="quotelev1">&gt; but 'mpirun' hangs and does not terminate until killed. The attached
</span><br>
<span class="quotelev1">&gt; 'run1.tgz' file contains detailed information from running the following
</span><br>
<span class="quotelev1">&gt; command:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;       mpirun --hostfile hostfile1 --np 1 --byslot --debug-daemons -d hostname
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; where 'hostfile1' contains the following:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -1 slots=2 max_slots=2
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The 'run.log' is the output of the above line. The 'strace.out.0' is the
</span><br>
<span class="quotelev1">&gt; result of 'strace -f' on the mpirun process (and the 'hostname' child process
</span><br>
<span class="quotelev1">&gt; since mpirun simply forks the local processes). The child process (pid 23415
</span><br>
<span class="quotelev1">&gt; in this case) runs to completion and exits successfully. The parent process
</span><br>
<span class="quotelev1">&gt; (mpirun) doesn't appear to recognize that the child has completed and hangs
</span><br>
<span class="quotelev1">&gt; until killed (with a ^c).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Additionally, when we run a set of processes which span the headnode and the
</span><br>
<span class="quotelev1">&gt; compute nodes, the processes on the head node complete successfully, but the
</span><br>
<span class="quotelev1">&gt; processes on the compute nodes do not appear to start. mpirun again appears to
</span><br>
<span class="quotelev1">&gt; hang.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Do I have a configuration error or is there a problem that I have encountered?
</span><br>
<span class="quotelev1">&gt; Thank you in advance for your assistance or suggestions
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Sean
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ------
</span><br>
<span class="quotelev1">&gt; Sean M. Kelley
</span><br>
<span class="quotelev1">&gt; sean.kelley_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  
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
<p><p><p><p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3459/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3460.php">Reese Faucette: "Re: [OMPI users] mixing MX and TCP"</a>
<li><strong>Previous message:</strong> <a href="3458.php">Kelley, Sean: "Re: [OMPI users] mpirun hanging when processes started on head node"</a>
<li><strong>In reply to:</strong> <a href="3458.php">Kelley, Sean: "Re: [OMPI users] mpirun hanging when processes started on head node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3462.php">Kelley, Sean: "Re: [OMPI users] mpirun hanging when processes started on head node"</a>
<li><strong>Reply:</strong> <a href="3462.php">Kelley, Sean: "Re: [OMPI users] mpirun hanging when processes started on head node"</a>
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
