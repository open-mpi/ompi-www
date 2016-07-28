<?
$subject_val = "Re: [OMPI users] Using (or not using) Torque/Moab under PBS Pro as the OpenMPI launcher";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 17 17:34:23 2010" -->
<!-- isoreceived="20101217223423" -->
<!-- sent="Fri, 17 Dec 2010 17:34:17 -0500" -->
<!-- isosent="20101217223417" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using (or not using) Torque/Moab under PBS Pro as the OpenMPI launcher" -->
<!-- id="D6E8E056-D763-4D21-B52B-57111DCE0F11_at_umich.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D0BE42F.7080706_at_cray.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Using (or not using) Torque/Moab under PBS Pro as the OpenMPI launcher<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-17 17:34:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15195.php">Sashi Balasingam: "[OMPI users] Call to MPI_Test has large time-jitter"</a>
<li><strong>Previous message:</strong> <a href="15193.php">David Whitaker: "[OMPI users] Using (or not using) Torque/Moab under PBS Pro as the OpenMPI launcher"</a>
<li><strong>In reply to:</strong> <a href="15193.php">David Whitaker: "[OMPI users] Using (or not using) Torque/Moab under PBS Pro as the OpenMPI launcher"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15196.php">Reuti: "Re: [OMPI users] Using (or not using) Torque/Moab under PBS Pro as the OpenMPI launcher"</a>
<li><strong>Reply:</strong> <a href="15196.php">Reuti: "Re: [OMPI users] Using (or not using) Torque/Moab under PBS Pro as the OpenMPI launcher"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can build openMPI without tm,  which will disable it,  or you can test first with a nasty option like:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun   \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--mca plm ^tm \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--mca ras ^tm \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--hostfile $PBS_NODEFILE \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./testmom 
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Dec 17, 2010, at 5:29 PM, David Whitaker wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;    At Cray, we have a a Cluster Compatibility Mode (CCM)
</span><br>
<span class="quotelev1">&gt;   which runs under PBSPro. If we do a qsub,
</span><br>
<span class="quotelev1">&gt;   we get an allocation of compute nodes and the first
</span><br>
<span class="quotelev1">&gt;   node in the list of allocated nodes is considered the
</span><br>
<span class="quotelev1">&gt;   &quot;head node&quot; of the &quot;Cluster&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    The list of allocated nodes is contained in
</span><br>
<span class="quotelev1">&gt;   the file $PBS_NODEFILE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     To launch a command on the head node we type:
</span><br>
<span class="quotelev1">&gt;   ccmrun COMMAND
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     In the normal PBSPro environment, we launch
</span><br>
<span class="quotelev1">&gt;   the OpenMPI mpirun as:
</span><br>
<span class="quotelev1">&gt;   ccmrun ${OpenMPI_Install}/bin/mpirun &lt;options ..&gt;
</span><br>
<span class="quotelev1">&gt;     -hostfile host.list -np $NCPUS ./hello_mpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     This all works great with the &quot;mpirun&quot; command
</span><br>
<span class="quotelev1">&gt;   launching on the &quot;head node&quot; and the the mpirun
</span><br>
<span class="quotelev1">&gt;   command using ssh/rsh to launch other processes
</span><br>
<span class="quotelev1">&gt;   on the other nodes in the virtual cluster. Everything
</span><br>
<span class="quotelev1">&gt;   works.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     On Cray sites, that use PBSPro/Torque/Moab, OpenMPI
</span><br>
<span class="quotelev1">&gt;   detects that Torque/Moab is present and attempts
</span><br>
<span class="quotelev1">&gt;   to use Torque/Moab to launch on other nodes. Because of
</span><br>
<span class="quotelev1">&gt;   the way Cray has Torque/moab configured, this doesn't work.
</span><br>
<span class="quotelev1">&gt;   This is not a problem with OpenMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Is there an option to OpenMPI to tell it to ignore
</span><br>
<span class="quotelev1">&gt;   Torque/Moab and use rsh/ssh and the -hostfile/hosts
</span><br>
<span class="quotelev1">&gt;   even if Torque/Moab is detected?? I've looked through
</span><br>
<span class="quotelev1">&gt;   the README and the FAQ but I haven't seen anything.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                      Many thanks,
</span><br>
<span class="quotelev1">&gt;                          Dave
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; CCCCCCCCCCCCCCCCCCCCCCFFFFFFFFFFFFFFFFFFFFFFFFFDDDDDDDDDDDDDDDDDDDDD
</span><br>
<span class="quotelev1">&gt; David Whitaker, Ph.D.                              whitaker_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Aerospace CFD Specialist                        phone: (651)605-9078
</span><br>
<span class="quotelev1">&gt; ISV Applications/Cray Inc                         fax: (651)605-9001
</span><br>
<span class="quotelev1">&gt; CCCCCCCCCCCCCCCCCCCCCCFFFFFFFFFFFFFFFFFFFFFFFFFDDDDDDDDDDDDDDDDDDDDD
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15195.php">Sashi Balasingam: "[OMPI users] Call to MPI_Test has large time-jitter"</a>
<li><strong>Previous message:</strong> <a href="15193.php">David Whitaker: "[OMPI users] Using (or not using) Torque/Moab under PBS Pro as the OpenMPI launcher"</a>
<li><strong>In reply to:</strong> <a href="15193.php">David Whitaker: "[OMPI users] Using (or not using) Torque/Moab under PBS Pro as the OpenMPI launcher"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15196.php">Reuti: "Re: [OMPI users] Using (or not using) Torque/Moab under PBS Pro as the OpenMPI launcher"</a>
<li><strong>Reply:</strong> <a href="15196.php">Reuti: "Re: [OMPI users] Using (or not using) Torque/Moab under PBS Pro as the OpenMPI launcher"</a>
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
