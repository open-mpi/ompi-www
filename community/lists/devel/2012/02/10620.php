<?
$subject_val = "Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the	trunk)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 28 04:54:23 2012" -->
<!-- isoreceived="20120228095423" -->
<!-- sent="Tue, 28 Feb 2012 02:54:15 -0700" -->
<!-- isosent="20120228095415" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the	trunk)" -->
<!-- id="00F2024C-09D7-496D-AB1D-B2134B2BCA7D_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="OF96CA847F.40FD170A-ONC12579B2.002BB16D-C12579B2.002E3F2B_at_bull.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the	trunk)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-28 04:54:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10621.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Previous message:</strong> <a href="10619.php">pascal.deveze_at_[hidden]: "Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the	trunk)"</a>
<li><strong>In reply to:</strong> <a href="10619.php">pascal.deveze_at_[hidden]: "Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the	trunk)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10625.php">pascal.deveze_at_[hidden]: "Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the trunk)"</a>
<li><strong>Reply:</strong> <a href="10625.php">pascal.deveze_at_[hidden]: "Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the trunk)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'll see what I can do when next I have access to a slurm machine - hopefully in a day or two.
<br>
<p>Are you sure you are at the top of the trunk? I reviewed the code, and it clearly detects that the default hostile is empty and ignores it if so. Like I said, I'm not seeing this behavior, and neither are the slurm machines on MTT.
<br>
<p><p>On Feb 28, 2012, at 1:25 AM, pascal.deveze_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; devel-bounces_at_[hidden] a &#233;crit sur 27/02/2012 15:53:06 :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; De : Ralph Castain &lt;rhc_at_[hidden]&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; A : Open MPI Developers &lt;devel_at_[hidden]&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Date : 27/02/2012 16:17 
</span><br>
<span class="quotelev2">&gt; &gt; Objet : Re: [OMPI devel] Problem with the openmpi-default-hostfile 
</span><br>
<span class="quotelev2">&gt; &gt; (on the trunk) 
</span><br>
<span class="quotelev2">&gt; &gt; Envoy&#233; par : devel-bounces_at_[hidden] 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; That's strange - I run on slurm frequently and never have this 
</span><br>
<span class="quotelev2">&gt; &gt; problem, and my default hostfile is present and empty. Do you have 
</span><br>
<span class="quotelev2">&gt; &gt; anything in your default mca param file that might be telling us to 
</span><br>
<span class="quotelev2">&gt; &gt; use the hostfile? 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The only way I can find to get that behavior is if your default mca 
</span><br>
<span class="quotelev2">&gt; &gt; param file includes the orte_default_hostfile value. In that case, 
</span><br>
<span class="quotelev2">&gt; &gt; you are telling us to use the default hostfile, and so we will enforce it. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On my side, the default value of orte_default_hostfile is a pointer to etc/openmpi-default-hostfile. 
</span><br>
<span class="quotelev1">&gt; The command ompi_info -a gives : 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MCA orte: parameter &quot;orte_default_hostfile&quot; (current value: &lt;..../etc/openmpi-default-hostfile&gt;, data source: default value) 
</span><br>
<span class="quotelev1">&gt; Name of the default hostfile (relative or absolute path, &quot;none&quot; to ignore environmental or default MCA param setting) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The following files are empty: 
</span><br>
<span class="quotelev1">&gt;  - .../etc/openmpi-mca-params.conf 
</span><br>
<span class="quotelev1">&gt;  - $HOME/.openmpi/mca-params.conf 
</span><br>
<span class="quotelev1">&gt; Another solution for me is to put &quot;orte_default_hostfile=none&quot; in one of these files. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pascal 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 27, 2012, at 5:57 AM, pascal.deveze_at_[hidden] wrote: 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi all, 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have problems with the openmpi-default-hostfile since the 
</span><br>
<span class="quotelev2">&gt; &gt; following patch on the trunk 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; changeset:   19874:088fc6c84a9f 
</span><br>
<span class="quotelev2">&gt; &gt; user:        rhc 
</span><br>
<span class="quotelev2">&gt; &gt; date:        Wed Feb 01 17:40:44 2012 +0000 
</span><br>
<span class="quotelev2">&gt; &gt; summary:     In accordance with prior releases, we are supposed to 
</span><br>
<span class="quotelev2">&gt; &gt; default to looking at the openmpi-default-hostfile as a default 
</span><br>
<span class="quotelev2">&gt; &gt; hostfile. Restore that behavior, but ignore the file if it is empty.
</span><br>
<span class="quotelev2">&gt; &gt; Allow the user to ignore any MCA param setting pointing to a default
</span><br>
<span class="quotelev2">&gt; &gt; hostfile by setting the param to &quot;none&quot; (via cmd line or whatever) -
</span><br>
<span class="quotelev2">&gt; &gt; this allows them to override a setting in the system default MCA param file. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; According to the summary of this patch, the openmpi-default-hostfile
</span><br>
<span class="quotelev2">&gt; &gt; is ignored if it is empty. 
</span><br>
<span class="quotelev2">&gt; &gt; But, when I run my jobs with slurm + mpirun, I get the following message: 
</span><br>
<span class="quotelev2">&gt; &gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt; &gt; No nodes are available for this job, either due to a failure to 
</span><br>
<span class="quotelev2">&gt; &gt; allocate nodes to the job, or allocated nodes being marked 
</span><br>
<span class="quotelev2">&gt; &gt; as unavailable (e.g., down, rebooting, or a process attempting 
</span><br>
<span class="quotelev2">&gt; &gt; to be relocated to another node when none are available). 
</span><br>
<span class="quotelev2">&gt; &gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I am able to run my job if: 
</span><br>
<span class="quotelev2">&gt; &gt;  - either I put my node(s) in the file etc/openmpi-default-hostfile 
</span><br>
<span class="quotelev2">&gt; &gt;  - or use &quot;-mca orte_default_hostfile=none&quot; in the mpirun command line 
</span><br>
<span class="quotelev2">&gt; &gt;  - or &quot;export OMPI_MCA_orte_default_hostfile none&quot; in my environment 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It appears that an empty openmpi-default-hostfile is not ignored. 
</span><br>
<span class="quotelev2">&gt; &gt; This patch seems not be complete 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  Or do I misunderstand something ? 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Pascal Dev&#232;ze_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10620/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10621.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Previous message:</strong> <a href="10619.php">pascal.deveze_at_[hidden]: "Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the	trunk)"</a>
<li><strong>In reply to:</strong> <a href="10619.php">pascal.deveze_at_[hidden]: "Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the	trunk)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10625.php">pascal.deveze_at_[hidden]: "Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the trunk)"</a>
<li><strong>Reply:</strong> <a href="10625.php">pascal.deveze_at_[hidden]: "Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the trunk)"</a>
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
