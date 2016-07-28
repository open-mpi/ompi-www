<?
$subject_val = "Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the trunk)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 27 09:53:15 2012" -->
<!-- isoreceived="20120227145315" -->
<!-- sent="Mon, 27 Feb 2012 07:53:06 -0700" -->
<!-- isosent="20120227145306" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the trunk)" -->
<!-- id="3BFD5110-9BB6-4CCC-88F8-B3A31819940C_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="OF6A738C51.0CD1C0D5-ONC12579B1.00430C2A-C12579B1.00473149_at_bull.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the trunk)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-27 09:53:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10614.php">Jeffrey Squyres: "Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2"</a>
<li><strong>Previous message:</strong> <a href="10612.php">pascal.deveze_at_[hidden]: "[OMPI devel] Problem with the openmpi-default-hostfile (on the trunk)"</a>
<li><strong>In reply to:</strong> <a href="10612.php">pascal.deveze_at_[hidden]: "[OMPI devel] Problem with the openmpi-default-hostfile (on the trunk)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10619.php">pascal.deveze_at_[hidden]: "Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the	trunk)"</a>
<li><strong>Reply:</strong> <a href="10619.php">pascal.deveze_at_[hidden]: "Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the	trunk)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's strange - I run on slurm frequently and never have this problem, and my default hostfile is present and empty. Do you have anything in your default mca param file that might be telling us to use the hostfile?
<br>
<p>The only way I can find to get that behavior is if your default mca param file includes the orte_default_hostfile value. In that case, you are telling us to use the default hostfile, and so we will enforce it.
<br>
<p><p>On Feb 27, 2012, at 5:57 AM, pascal.deveze_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Hi all, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have problems with the openmpi-default-hostfile since the following patch on the trunk 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; changeset:   19874:088fc6c84a9f 
</span><br>
<span class="quotelev1">&gt; user:        rhc 
</span><br>
<span class="quotelev1">&gt; date:        Wed Feb 01 17:40:44 2012 +0000 
</span><br>
<span class="quotelev1">&gt; summary:     In accordance with prior releases, we are supposed to default to looking at the openmpi-default-hostfile as a default hostfile. Restore that behavior, but ignore the file if it is empty. Allow the user to ignore any MCA param setting pointing to a default hostfile by setting the param to &quot;none&quot; (via cmd line or whatever) - this allows them to override a setting in the system default MCA param file. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; According to the summary of this patch, the openmpi-default-hostfile is ignored if it is empty. 
</span><br>
<span class="quotelev1">&gt; But, when I run my jobs with slurm + mpirun, I get the following message: 
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; No nodes are available for this job, either due to a failure to 
</span><br>
<span class="quotelev1">&gt; allocate nodes to the job, or allocated nodes being marked 
</span><br>
<span class="quotelev1">&gt; as unavailable (e.g., down, rebooting, or a process attempting 
</span><br>
<span class="quotelev1">&gt; to be relocated to another node when none are available). 
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am able to run my job if: 
</span><br>
<span class="quotelev1">&gt;  - either I put my node(s) in the file etc/openmpi-default-hostfile 
</span><br>
<span class="quotelev1">&gt;  - or use &quot;-mca orte_default_hostfile=none&quot; in the mpirun command line 
</span><br>
<span class="quotelev1">&gt;  - or &quot;export OMPI_MCA_orte_default_hostfile none&quot; in my environment 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It appears that an empty openmpi-default-hostfile is not ignored. This patch seems not be complete 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Or do I misunderstand something ? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pascal Dev&#232;ze_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10613/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10614.php">Jeffrey Squyres: "Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2"</a>
<li><strong>Previous message:</strong> <a href="10612.php">pascal.deveze_at_[hidden]: "[OMPI devel] Problem with the openmpi-default-hostfile (on the trunk)"</a>
<li><strong>In reply to:</strong> <a href="10612.php">pascal.deveze_at_[hidden]: "[OMPI devel] Problem with the openmpi-default-hostfile (on the trunk)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10619.php">pascal.deveze_at_[hidden]: "Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the	trunk)"</a>
<li><strong>Reply:</strong> <a href="10619.php">pascal.deveze_at_[hidden]: "Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the	trunk)"</a>
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
