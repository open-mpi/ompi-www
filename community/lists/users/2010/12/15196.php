<?
$subject_val = "Re: [OMPI users] Using (or not using) Torque/Moab under PBS Pro as the OpenMPI launcher";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 18 06:59:46 2010" -->
<!-- isoreceived="20101218115946" -->
<!-- sent="Sat, 18 Dec 2010 12:59:33 +0100" -->
<!-- isosent="20101218115933" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using (or not using) Torque/Moab under PBS Pro as the OpenMPI launcher" -->
<!-- id="D871CAE9-2631-4257-BC98-0FD6DD1A7306_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D6E8E056-D763-4D21-B52B-57111DCE0F11_at_umich.edu" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-18 06:59:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15197.php">Tim Prince: "Re: [OMPI users] Call to MPI_Test has large time-jitter"</a>
<li><strong>Previous message:</strong> <a href="15195.php">Sashi Balasingam: "[OMPI users] Call to MPI_Test has large time-jitter"</a>
<li><strong>In reply to:</strong> <a href="15194.php">Brock Palen: "Re: [OMPI users] Using (or not using) Torque/Moab under PBS Pro as the OpenMPI launcher"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 17.12.2010 um 23:34 schrieb Brock Palen:
<br>
<p><span class="quotelev1">&gt; You can build openMPI without tm,  which will disable it,  or you can test first with a nasty option like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;           mpirun   \
</span><br>
<span class="quotelev1">&gt;            --mca plm ^tm \
</span><br>
<span class="quotelev1">&gt;            --mca ras ^tm \
</span><br>
<span class="quotelev1">&gt;            --hostfile $PBS_NODEFILE \
</span><br>
<span class="quotelev1">&gt;            ./testmom 
</span><br>
<p>often it's sufficient to unset some of the environment variable during execution to switch off the automatic integration. I.e. unsetting $PBS_JOBID and $PBS_ENVIRONMENT in the jobscript could do it already.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 17, 2010, at 5:29 PM, David Whitaker wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;   At Cray, we have a a Cluster Compatibility Mode (CCM)
</span><br>
<span class="quotelev2">&gt;&gt;  which runs under PBSPro. If we do a qsub,
</span><br>
<span class="quotelev2">&gt;&gt;  we get an allocation of compute nodes and the first
</span><br>
<span class="quotelev2">&gt;&gt;  node in the list of allocated nodes is considered the
</span><br>
<span class="quotelev2">&gt;&gt;  &quot;head node&quot; of the &quot;Cluster&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   The list of allocated nodes is contained in
</span><br>
<span class="quotelev2">&gt;&gt;  the file $PBS_NODEFILE.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    To launch a command on the head node we type:
</span><br>
<span class="quotelev2">&gt;&gt;  ccmrun COMMAND
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    In the normal PBSPro environment, we launch
</span><br>
<span class="quotelev2">&gt;&gt;  the OpenMPI mpirun as:
</span><br>
<span class="quotelev2">&gt;&gt;  ccmrun ${OpenMPI_Install}/bin/mpirun &lt;options ..&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    -hostfile host.list -np $NCPUS ./hello_mpi
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    This all works great with the &quot;mpirun&quot; command
</span><br>
<span class="quotelev2">&gt;&gt;  launching on the &quot;head node&quot; and the the mpirun
</span><br>
<span class="quotelev2">&gt;&gt;  command using ssh/rsh to launch other processes
</span><br>
<span class="quotelev2">&gt;&gt;  on the other nodes in the virtual cluster. Everything
</span><br>
<span class="quotelev2">&gt;&gt;  works.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    On Cray sites, that use PBSPro/Torque/Moab, OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt;  detects that Torque/Moab is present and attempts
</span><br>
<span class="quotelev2">&gt;&gt;  to use Torque/Moab to launch on other nodes. Because of
</span><br>
<span class="quotelev2">&gt;&gt;  the way Cray has Torque/moab configured, this doesn't work.
</span><br>
<span class="quotelev2">&gt;&gt;  This is not a problem with OpenMPI.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    Is there an option to OpenMPI to tell it to ignore
</span><br>
<span class="quotelev2">&gt;&gt;  Torque/Moab and use rsh/ssh and the -hostfile/hosts
</span><br>
<span class="quotelev2">&gt;&gt;  even if Torque/Moab is detected?? I've looked through
</span><br>
<span class="quotelev2">&gt;&gt;  the README and the FAQ but I haven't seen anything.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;                     Many thanks,
</span><br>
<span class="quotelev2">&gt;&gt;                         Dave
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; CCCCCCCCCCCCCCCCCCCCCCFFFFFFFFFFFFFFFFFFFFFFFFFDDDDDDDDDDDDDDDDDDDDD
</span><br>
<span class="quotelev2">&gt;&gt; David Whitaker, Ph.D.                              whitaker_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Aerospace CFD Specialist                        phone: (651)605-9078
</span><br>
<span class="quotelev2">&gt;&gt; ISV Applications/Cray Inc                         fax: (651)605-9001
</span><br>
<span class="quotelev2">&gt;&gt; CCCCCCCCCCCCCCCCCCCCCCFFFFFFFFFFFFFFFFFFFFFFFFFDDDDDDDDDDDDDDDDDDDDD
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="15197.php">Tim Prince: "Re: [OMPI users] Call to MPI_Test has large time-jitter"</a>
<li><strong>Previous message:</strong> <a href="15195.php">Sashi Balasingam: "[OMPI users] Call to MPI_Test has large time-jitter"</a>
<li><strong>In reply to:</strong> <a href="15194.php">Brock Palen: "Re: [OMPI users] Using (or not using) Torque/Moab under PBS Pro as the OpenMPI launcher"</a>
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
