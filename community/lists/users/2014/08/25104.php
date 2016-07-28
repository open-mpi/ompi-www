<?
$subject_val = "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 21 02:46:48 2014" -->
<!-- isoreceived="20140821064648" -->
<!-- sent="Thu, 21 Aug 2014 07:46:43 +0100" -->
<!-- isosent="20140821064643" -->
<!-- name="Filippo Spiga" -->
<!-- email="spiga.filippo_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface" -->
<!-- id="C786BDC0-DDED-425C-8CC7-750E6530ACBA_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAG4F6z-A9H9BSu119Ad4wgriatiFENDyveK92VXt9LOOfZmBRw_at_mail.gmail.com" -->
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
<strong>From:</strong> Filippo Spiga (<em>spiga.filippo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-21 02:46:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25105.php">Timur Ismagilov: "Re: [OMPI users] ORTE daemon has unexpectedly failed after launch"</a>
<li><strong>Previous message:</strong> <a href="25103.php">tmishima_at_[hidden]: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>In reply to:</strong> <a href="25100.php">Joshua Ladd: "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25110.php">Ralph Castain: "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
<li><strong>Reply:</strong> <a href="25110.php">Ralph Castain: "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Joshua,
<br>
<p>On Aug 21, 2014, at 12:28 AM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; When launching with mpirun in a SLURM environment, srun is only being used to launch the ORTE daemons (orteds.)  Since the daemon will already exist on the node from which you invoked mpirun, this node will not be included in the list of nodes. SLURM's PMI library is not involved (that functionality is only necessary if you directly launch your MPI application with srun, in which case it is used to exchanged wireup info amongst slurmds.) This is the expected behavior. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ~/ompi-top-level/orte/mca/plm/plm_slurm_module.c +294
</span><br>
<span class="quotelev1">&gt; /* if the daemon already exists on this node, then
</span><br>
<span class="quotelev1">&gt;          * don't include it
</span><br>
<span class="quotelev1">&gt;          */
</span><br>
<span class="quotelev1">&gt;         if (node-&gt;daemon_launched) {
</span><br>
<span class="quotelev1">&gt;             continue;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you have a frontend node that you can launch from? What happens if you set &quot;-np X&quot; where X = 8*ppn. The alternative is to do a direct launch of the MPI application with srun.
</span><br>
<p>I understand the logic and I understand with orted in the first node is not needed. But since we use a batch system (SLURM) we do not want people to run their mpirun commands directly fon a front-end. Typical scenario: all compute node are running fine but we reboot all the login nodes to upgrade the linux image because of a security update the kernel. We can keep the login nodes offline potentially for hours without stop the system to work. 
<br>
<p>From our perspective, a front-end node is an additional burden. Of course login node and front-end node can be two separated hosts but I am looking for a way to keep our setup as-it-is without introducing structural changes. 
<br>
<p><p>Hi Ralph,
<br>
<p>On Aug 21, 2014, at 12:36 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Or you can add 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    -nolocal|--nolocal    Do not run any MPI applications on the local node
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to your mpirun command line and we won't run any application procs on the node where mpirun is executing
</span><br>
<p>I tried but of course but mpirun complains. If it cannot run local (meaning on the first node, tesla121) then only 7 nodes remains and I request in total 8. So to use &quot;--nolocal&quot; I need to add another nodes. Since we allocate node exclusively and for some users we charge the usage real money... this is not ideal I am afraid.
<br>
<p><p>srun seems the only solution to go. I need to understand how to pass most of the --mca parameters to srun and to be sure I can pilot  rmaps_lama_* options as flexible as I do with normal mpirun. Then there are mxm, fca, hcoll....I am not against srun in principle, my only stopping point it that the syntax is only different that we might receive lot (too many) complains our users in adopting this new way to submit because they are used to use classic mpirun inside a sbatch script. Most of them will probably not switch to a different method! So our hope to &quot;silently&quot; profile network, energy, I/O using SLURM plugins also using Open MPI is lost...
<br>
<p>F
<br>
<p><pre>
--
Mr. Filippo SPIGA, M.Sc.
<a href="http://filippospiga.info">http://filippospiga.info</a> ~ skype: filippo.spiga
&#194;&#171;Nobody will drive us out of Cantor's paradise.&#194;&#187; ~ David Hilbert
*****
Disclaimer: &quot;Please note this message and any attachments are CONFIDENTIAL and may be privileged or otherwise protected from disclosure. The contents are not to be disclosed to anyone other than the addressee. Unauthorized recipients are requested to preserve this confidentiality and to advise the sender immediately of any error in transmission.&quot;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25105.php">Timur Ismagilov: "Re: [OMPI users] ORTE daemon has unexpectedly failed after launch"</a>
<li><strong>Previous message:</strong> <a href="25103.php">tmishima_at_[hidden]: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>In reply to:</strong> <a href="25100.php">Joshua Ladd: "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25110.php">Ralph Castain: "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
<li><strong>Reply:</strong> <a href="25110.php">Ralph Castain: "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
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
