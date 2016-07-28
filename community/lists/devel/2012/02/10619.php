<?
$subject_val = "Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the	trunk)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 28 03:25:09 2012" -->
<!-- isoreceived="20120228082509" -->
<!-- sent="Tue, 28 Feb 2012 09:25:02 +0100" -->
<!-- isosent="20120228082502" -->
<!-- name="pascal.deveze_at_[hidden]" -->
<!-- email="pascal.deveze_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the	trunk)" -->
<!-- id="OF96CA847F.40FD170A-ONC12579B2.002BB16D-C12579B2.002E3F2B_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3BFD5110-9BB6-4CCC-88F8-B3A31819940C_at_open-mpi.org" -->
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
<strong>From:</strong> <a href="mailto:pascal.deveze_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20Problem%20with%20the%20openmpi-default-hostfile%20(on%20the	trunk)"><em>pascal.deveze_at_[hidden]</em></a><br>
<strong>Date:</strong> 2012-02-28 03:25:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10620.php">Ralph Castain: "Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the	trunk)"</a>
<li><strong>Previous message:</strong> <a href="10618.php">Christopher Samuel: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>In reply to:</strong> <a href="10613.php">Ralph Castain: "Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the trunk)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10620.php">Ralph Castain: "Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the	trunk)"</a>
<li><strong>Reply:</strong> <a href="10620.php">Ralph Castain: "Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the	trunk)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
devel-bounces_at_[hidden] a &#233;crit sur 27/02/2012 15:53:06 :
<br>
<p><span class="quotelev1">&gt; De : Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; A : Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date : 27/02/2012 16:17
</span><br>
<span class="quotelev1">&gt; Objet : Re: [OMPI devel] Problem with the openmpi-default-hostfile 
</span><br>
<span class="quotelev1">&gt; (on the trunk)
</span><br>
<span class="quotelev1">&gt; Envoy&#233; par : devel-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's strange - I run on slurm frequently and never have this 
</span><br>
<span class="quotelev1">&gt; problem, and my default hostfile is present and empty. Do you have 
</span><br>
<span class="quotelev1">&gt; anything in your default mca param file that might be telling us to 
</span><br>
<span class="quotelev1">&gt; use the hostfile?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The only way I can find to get that behavior is if your default mca 
</span><br>
<span class="quotelev1">&gt; param file includes the orte_default_hostfile value. In that case, 
</span><br>
<span class="quotelev1">&gt; you are telling us to use the default hostfile, and so we will enforce 
</span><br>
it.
<br>
<p>Hi Ralph,
<br>
<p>On my side, the default value of orte_default_hostfile is a pointer to 
<br>
etc/openmpi-default-hostfile.
<br>
The command ompi_info -a gives :
<br>
<p>MCA orte: parameter &quot;orte_default_hostfile&quot; (current value: 
<br>
&lt;..../etc/openmpi-default-hostfile&gt;, data source: default value)
<br>
Name of the default hostfile (relative or absolute path, &quot;none&quot; to ignore 
<br>
environmental or default MCA param setting)
<br>
<p>The following files are empty:
<br>
&nbsp;- .../etc/openmpi-mca-params.conf
<br>
&nbsp;- $HOME/.openmpi/mca-params.conf
<br>
Another solution for me is to put &quot;orte_default_hostfile=none&quot; in one of 
<br>
these files.
<br>
<p>Pascal
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 27, 2012, at 5:57 AM, pascal.deveze_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi all, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have problems with the openmpi-default-hostfile since the 
</span><br>
<span class="quotelev1">&gt; following patch on the trunk 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; changeset:   19874:088fc6c84a9f 
</span><br>
<span class="quotelev1">&gt; user:        rhc 
</span><br>
<span class="quotelev1">&gt; date:        Wed Feb 01 17:40:44 2012 +0000 
</span><br>
<span class="quotelev1">&gt; summary:     In accordance with prior releases, we are supposed to 
</span><br>
<span class="quotelev1">&gt; default to looking at the openmpi-default-hostfile as a default 
</span><br>
<span class="quotelev1">&gt; hostfile. Restore that behavior, but ignore the file if it is empty.
</span><br>
<span class="quotelev1">&gt; Allow the user to ignore any MCA param setting pointing to a default
</span><br>
<span class="quotelev1">&gt; hostfile by setting the param to &quot;none&quot; (via cmd line or whatever) -
</span><br>
<span class="quotelev1">&gt; this allows them to override a setting in the system default MCA param 
</span><br>
file. 
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; According to the summary of this patch, the openmpi-default-hostfile
</span><br>
<span class="quotelev1">&gt; is ignored if it is empty. 
</span><br>
<span class="quotelev1">&gt; But, when I run my jobs with slurm + mpirun, I get the following 
</span><br>
message: 
<br>
<span class="quotelev1">&gt; 
</span><br>
-------------------------------------------------------------------------- 
<br>
<p><span class="quotelev1">&gt; No nodes are available for this job, either due to a failure to 
</span><br>
<span class="quotelev1">&gt; allocate nodes to the job, or allocated nodes being marked 
</span><br>
<span class="quotelev1">&gt; as unavailable (e.g., down, rebooting, or a process attempting 
</span><br>
<span class="quotelev1">&gt; to be relocated to another node when none are available). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
-------------------------------------------------------------------------- 
<br>
<p><span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; It appears that an empty openmpi-default-hostfile is not ignored. 
</span><br>
<span class="quotelev1">&gt; This patch seems not be complete 
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10619/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10620.php">Ralph Castain: "Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the	trunk)"</a>
<li><strong>Previous message:</strong> <a href="10618.php">Christopher Samuel: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>In reply to:</strong> <a href="10613.php">Ralph Castain: "Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the trunk)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10620.php">Ralph Castain: "Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the	trunk)"</a>
<li><strong>Reply:</strong> <a href="10620.php">Ralph Castain: "Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the	trunk)"</a>
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
