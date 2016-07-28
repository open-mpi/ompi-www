<?
$subject_val = "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 21 09:30:20 2014" -->
<!-- isoreceived="20140821133020" -->
<!-- sent="Thu, 21 Aug 2014 06:30:00 -0700" -->
<!-- isosent="20140821133000" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface" -->
<!-- id="A09F8F31-D50F-4502-9144-D247CE6663F2_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C786BDC0-DDED-425C-8CC7-750E6530ACBA_at_gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-21 09:30:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25111.php">Ralph Castain: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Previous message:</strong> <a href="25109.php">Ralph Castain: "Re: [OMPI users] ORTE daemon has unexpectedly failed after launch"</a>
<li><strong>In reply to:</strong> <a href="25104.php">Filippo Spiga: "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25119.php">Filippo Spiga: "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
<li><strong>Reply:</strong> <a href="25119.php">Filippo Spiga: "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 20, 2014, at 11:46 PM, Filippo Spiga &lt;spiga.filippo_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Joshua,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 21, 2014, at 12:28 AM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; When launching with mpirun in a SLURM environment, srun is only being used to launch the ORTE daemons (orteds.)  Since the daemon will already exist on the node from which you invoked mpirun, this node will not be included in the list of nodes. SLURM's PMI library is not involved (that functionality is only necessary if you directly launch your MPI application with srun, in which case it is used to exchanged wireup info amongst slurmds.) This is the expected behavior. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ~/ompi-top-level/orte/mca/plm/plm_slurm_module.c +294
</span><br>
<span class="quotelev2">&gt;&gt; /* if the daemon already exists on this node, then
</span><br>
<span class="quotelev2">&gt;&gt;         * don't include it
</span><br>
<span class="quotelev2">&gt;&gt;         */
</span><br>
<span class="quotelev2">&gt;&gt;        if (node-&gt;daemon_launched) {
</span><br>
<span class="quotelev2">&gt;&gt;            continue;
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Do you have a frontend node that you can launch from? What happens if you set &quot;-np X&quot; where X = 8*ppn. The alternative is to do a direct launch of the MPI application with srun.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I understand the logic and I understand with orted in the first node is not needed. But since we use a batch system (SLURM) we do not want people to run their mpirun commands directly fon a front-end. Typical scenario: all compute node are running fine but we reboot all the login nodes to upgrade the linux image because of a security update the kernel. We can keep the login nodes offline potentially for hours without stop the system to work. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From our perspective, a front-end node is an additional burden. Of course login node and front-end node can be two separated hosts but I am looking for a way to keep our setup as-it-is without introducing structural changes. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 21, 2014, at 12:36 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Or you can add 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   -nolocal|--nolocal    Do not run any MPI applications on the local node
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; to your mpirun command line and we won't run any application procs on the node where mpirun is executing
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried but of course but mpirun complains. If it cannot run local (meaning on the first node, tesla121) then only 7 nodes remains and I request in total 8. So to use &quot;--nolocal&quot; I need to add another nodes. Since we allocate node exclusively and for some users we charge the usage real money... this is not ideal I am afraid.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; srun seems the only solution to go. I need to understand how to pass most of the --mca parameters to srun and to be sure I can pilot  rmaps_lama_* options as flexible as I do with normal mpirun. Then there are mxm, fca, hcoll....I am not against srun in principle, my only stopping point it that the syntax is only different that we might receive lot (too many) complains our users in adopting this new way to submit because they are used to use classic mpirun inside a sbatch script. Most of them will probably not switch to a different method! So our hope to &quot;silently&quot; profile network, energy, I/O using SLURM plugins also using Open MPI is lost...
</span><br>
<p>I'm afraid that none of the mapping or binding options would be available under srun as those only work via mpirun. You can pass MCA params in the environment of course, or in default MCA param files.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; F
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
<span class="quotelev1">&gt; &#171;Nobody will drive us out of Cantor's paradise.&#187; ~ David Hilbert
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *****
</span><br>
<span class="quotelev1">&gt; Disclaimer: &quot;Please note this message and any attachments are CONFIDENTIAL and may be privileged or otherwise protected from disclosure. The contents are not to be disclosed to anyone other than the addressee. Unauthorized recipients are requested to preserve this confidentiality and to advise the sender immediately of any error in transmission.&quot;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25104.php">http://www.open-mpi.org/community/lists/users/2014/08/25104.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25111.php">Ralph Castain: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Previous message:</strong> <a href="25109.php">Ralph Castain: "Re: [OMPI users] ORTE daemon has unexpectedly failed after launch"</a>
<li><strong>In reply to:</strong> <a href="25104.php">Filippo Spiga: "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25119.php">Filippo Spiga: "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
<li><strong>Reply:</strong> <a href="25119.php">Filippo Spiga: "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
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
