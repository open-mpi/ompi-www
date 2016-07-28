<?
$subject_val = "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 20 19:28:28 2014" -->
<!-- isoreceived="20140820232828" -->
<!-- sent="Wed, 20 Aug 2014 19:28:27 -0400" -->
<!-- isosent="20140820232827" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface" -->
<!-- id="CAG4F6z-A9H9BSu119Ad4wgriatiFENDyveK92VXt9LOOfZmBRw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="96498F3F-6D2D-4AC6-B7D5-235BB788229B_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface<br>
<strong>From:</strong> Joshua Ladd (<em>jladd.mlnx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-20 19:28:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25101.php">Ralph Castain: "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
<li><strong>Previous message:</strong> <a href="25099.php">Filippo Spiga: "[OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
<li><strong>In reply to:</strong> <a href="25099.php">Filippo Spiga: "[OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25101.php">Ralph Castain: "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
<li><strong>Reply:</strong> <a href="25101.php">Ralph Castain: "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
<li><strong>Reply:</strong> <a href="25104.php">Filippo Spiga: "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, Filippo
<br>
<p>When launching with mpirun in a SLURM environment, srun is only being used
<br>
to launch the ORTE daemons (orteds.)  Since the daemon will already exist
<br>
on the node from which you invoked mpirun, this node will not be included
<br>
in the list of nodes. SLURM's PMI library is not involved (that
<br>
functionality is only necessary if you directly launch your MPI application
<br>
with srun, in which case it is used to exchanged wireup info amongst
<br>
slurmds.) This is the expected behavior.
<br>
<p>~/ompi-top-level/orte/mca/plm/plm_slurm_module.c +294
<br>
/* if the daemon already exists on this node, then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* don't include it
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (node-&gt;daemon_launched) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>Do you have a frontend node that you can launch from? What happens if you
<br>
set &quot;-np X&quot; where X = 8*ppn. The alternative is to do a direct launch of
<br>
the MPI application with srun.
<br>
<p><p>Best,
<br>
<p>Josh
<br>
<p><p><p>On Wed, Aug 20, 2014 at 6:48 PM, Filippo Spiga &lt;spiga.filippo_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Dear Open MPI experts,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a problem that is related to the integration of OpenMPI, slurm and
</span><br>
<span class="quotelev1">&gt; PMI interface. I spent some time today with a colleague of mine trying to
</span><br>
<span class="quotelev1">&gt; figure out why we were not able to obtain all H5 profile files (generated
</span><br>
<span class="quotelev1">&gt; by acct_gather_profile) using Open MPI. When I say &quot;all&quot; I mean if I run
</span><br>
<span class="quotelev1">&gt; using 8 nodes (e.g. tesla[121-128]) then I always systematically miss the
</span><br>
<span class="quotelev1">&gt; file related to the first one (the first node in the allocation list, in
</span><br>
<span class="quotelev1">&gt; this case tesla121).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; By comparing which processes are spawn on the compute nodes, I discovered
</span><br>
<span class="quotelev1">&gt; that mpirun running on tesla121 calls srun only to spawn remotely new MPI
</span><br>
<span class="quotelev1">&gt; processes to the other 7 nodes (maybe this is obvious, for me it was not)...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; fs395      617  0.0  0.0 106200  1504 ?        S    22:41   0:00 /bin/bash
</span><br>
<span class="quotelev1">&gt; /var/spool/slurm-test/slurmd/job390044/slurm_script
</span><br>
<span class="quotelev1">&gt; fs395      629  0.1  0.0 194552  5288 ?        Sl   22:41   0:00  \_
</span><br>
<span class="quotelev1">&gt; mpirun -bind-to socket --map-by ppr:1:socket --host
</span><br>
<span class="quotelev1">&gt; tesla121,tesla122,tesla123,tesla124,tesla125,tesla126,tes
</span><br>
<span class="quotelev1">&gt; fs395      632  0.0  0.0 659740  9148 ?        Sl   22:41   0:00  |   \_
</span><br>
<span class="quotelev1">&gt; srun --ntasks-per-node=1 --kill-on-bad-exit --cpu_bind=none --nodes=7
</span><br>
<span class="quotelev1">&gt; --nodelist=tesla122,tesla123,tesla1
</span><br>
<span class="quotelev1">&gt; fs395      633  0.0  0.0  55544  1072 ?        S    22:41   0:00  |   |
</span><br>
<span class="quotelev1">&gt; \_ srun --ntasks-per-node=1 --kill-on-bad-exit --cpu_bind=none --nodes=7
</span><br>
<span class="quotelev1">&gt; --nodelist=tesla122,tesla123,te
</span><br>
<span class="quotelev1">&gt; fs395      651  0.0  0.0 106072  1392 ?        S    22:41   0:00  |   \_
</span><br>
<span class="quotelev1">&gt; /bin/bash ./run_linpack ./xhpl
</span><br>
<span class="quotelev1">&gt; fs395      654  295 35.5 120113412 23289280 ?  RLl  22:41   3:12  |   |
</span><br>
<span class="quotelev1">&gt; \_ ./xhpl
</span><br>
<span class="quotelev1">&gt; fs395      652  0.0  0.0 106072  1396 ?        S    22:41   0:00  |   \_
</span><br>
<span class="quotelev1">&gt; /bin/bash ./run_linpack ./xhpl
</span><br>
<span class="quotelev1">&gt; fs395      656  307 35.5 120070332 23267728 ?  RLl  22:41   3:19  |
</span><br>
<span class="quotelev1">&gt; \_ ./xhpl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The &quot;xhpl&quot; processes allocated on the first node of a job are not called
</span><br>
<span class="quotelev1">&gt; by srun and because of this the SLURM profile plugin is not activated on
</span><br>
<span class="quotelev1">&gt; the node!!! As result I always miss the first node profile information.
</span><br>
<span class="quotelev1">&gt; Intel MPI does not have this behavior, mpiexec.hydra uses srun on the first
</span><br>
<span class="quotelev1">&gt; node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I got to the conclusion that SLURM is configured properly, something is
</span><br>
<span class="quotelev1">&gt; wrong in the way I lunch Open MPI using mpirun. If I disable SLURM support
</span><br>
<span class="quotelev1">&gt; and I revert back to rsh (--mca plm rsh) everything work but there is not
</span><br>
<span class="quotelev1">&gt; profiling because the SLURM plug-in is not activated. During the configure
</span><br>
<span class="quotelev1">&gt; step, Open MPI 1.8.1 detects slurm and libmpi/libpmi2 correctly. Honestly,
</span><br>
<span class="quotelev1">&gt; I would prefer to avoid to use srun as job luncher if possible...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestion to get this sorted out is really appreciated!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; Filippo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Mr. Filippo SPIGA, M.Sc.
</span><br>
<span class="quotelev1">&gt; <a href="http://filippospiga.info">http://filippospiga.info</a> ~ skype: filippo.spiga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#171;Nobody will drive us out of Cantor's paradise.&#194;&#187; ~ David Hilbert
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *****
</span><br>
<span class="quotelev1">&gt; Disclaimer: &quot;Please note this message and any attachments are CONFIDENTIAL
</span><br>
<span class="quotelev1">&gt; and may be privileged or otherwise protected from disclosure. The contents
</span><br>
<span class="quotelev1">&gt; are not to be disclosed to anyone other than the addressee. Unauthorized
</span><br>
<span class="quotelev1">&gt; recipients are requested to preserve this confidentiality and to advise the
</span><br>
<span class="quotelev1">&gt; sender immediately of any error in transmission.&quot;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25099.php">http://www.open-mpi.org/community/lists/users/2014/08/25099.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25100/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25101.php">Ralph Castain: "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
<li><strong>Previous message:</strong> <a href="25099.php">Filippo Spiga: "[OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
<li><strong>In reply to:</strong> <a href="25099.php">Filippo Spiga: "[OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25101.php">Ralph Castain: "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
<li><strong>Reply:</strong> <a href="25101.php">Ralph Castain: "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
<li><strong>Reply:</strong> <a href="25104.php">Filippo Spiga: "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
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
