<?
$subject_val = "[OMPI devel] Problem with the openmpi-default-hostfile (on the trunk)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 27 07:57:41 2012" -->
<!-- isoreceived="20120227125741" -->
<!-- sent="Mon, 27 Feb 2012 13:57:35 +0100" -->
<!-- isosent="20120227125735" -->
<!-- name="pascal.deveze_at_[hidden]" -->
<!-- email="pascal.deveze_at_[hidden]" -->
<!-- subject="[OMPI devel] Problem with the openmpi-default-hostfile (on the trunk)" -->
<!-- id="OF6A738C51.0CD1C0D5-ONC12579B1.00430C2A-C12579B1.00473149_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Problem with the openmpi-default-hostfile (on the trunk)<br>
<strong>From:</strong> <a href="mailto:pascal.deveze_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20Problem%20with%20the%20openmpi-default-hostfile%20(on%20the%20trunk)"><em>pascal.deveze_at_[hidden]</em></a><br>
<strong>Date:</strong> 2012-02-27 07:57:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10613.php">Ralph Castain: "Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the trunk)"</a>
<li><strong>Previous message:</strong> <a href="10611.php">Paul Hargrove: "Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10613.php">Ralph Castain: "Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the trunk)"</a>
<li><strong>Reply:</strong> <a href="10613.php">Ralph Castain: "Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the trunk)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I have problems with the openmpi-default-hostfile since the following 
<br>
patch on the trunk
<br>
<p>changeset:   19874:088fc6c84a9f
<br>
user:        rhc
<br>
date:        Wed Feb 01 17:40:44 2012 +0000
<br>
summary:     In accordance with prior releases, we are supposed to default 
<br>
to looking at the openmpi-default-hostfile as a default hostfile. Restore 
<br>
that behavior, but ignore the file if it is empty. Allow the user to 
<br>
ignore any MCA param setting pointing to a default hostfile by setting the 
<br>
param to &quot;none&quot; (via cmd line or whatever) - this allows them to override 
<br>
a setting in the system default MCA param file.
<br>
<p>According to the summary of this patch, the openmpi-default-hostfile is 
<br>
ignored if it is empty.
<br>
But, when I run my jobs with slurm + mpirun, I get the following message:
<br>
--------------------------------------------------------------------------
<br>
No nodes are available for this job, either due to a failure to
<br>
allocate nodes to the job, or allocated nodes being marked
<br>
as unavailable (e.g., down, rebooting, or a process attempting
<br>
to be relocated to another node when none are available).
<br>
--------------------------------------------------------------------------
<br>
<p>I am able to run my job if:
<br>
&nbsp;- either I put my node(s) in the file etc/openmpi-default-hostfile
<br>
&nbsp;- or use &quot;-mca orte_default_hostfile=none&quot; in the mpirun command line
<br>
&nbsp;- or &quot;export OMPI_MCA_orte_default_hostfile none&quot; in my environment
<br>
<p>It appears that an empty openmpi-default-hostfile is not ignored. This 
<br>
patch seems not be complete
<br>
<p>&nbsp;Or do I misunderstand something ?
<br>
<p>Pascal Dev&#232;ze
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10612/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10613.php">Ralph Castain: "Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the trunk)"</a>
<li><strong>Previous message:</strong> <a href="10611.php">Paul Hargrove: "Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10613.php">Ralph Castain: "Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the trunk)"</a>
<li><strong>Reply:</strong> <a href="10613.php">Ralph Castain: "Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the trunk)"</a>
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
