<?
$subject_val = "[OMPI devel] orte_job_data";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  5 17:31:23 2008" -->
<!-- isoreceived="20080305223123" -->
<!-- sent="Wed, 05 Mar 2008 17:30:57 -0500" -->
<!-- isosent="20080305223057" -->
<!-- name="Camille Coti" -->
<!-- email="coti_at_[hidden]" -->
<!-- subject="[OMPI devel] orte_job_data" -->
<!-- id="47CF1F21.9070009_at_lri.fr" -->
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
<strong>Subject:</strong> [OMPI devel] orte_job_data<br>
<strong>From:</strong> Camille Coti (<em>coti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-05 17:30:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3382.php">Aurélien Bouteiller: "[OMPI devel] orte_job_data"</a>
<li><strong>Previous message:</strong> <a href="3380.php">Ralph H Castain: "Re: [OMPI devel] Orte cleanup"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I had a look at how the job data are kept during the life cycle of a job.
<br>
<p>The orte_job_data pointer array contains two elements:
<br>
&nbsp;&nbsp;&nbsp;addr[0] is filled during rte_init().
<br>
&nbsp;&nbsp;&nbsp;addr[1] is filled by PLM at setup time and contains the map on which 
<br>
the job is spawned.
<br>
<p>What does the first entry correspond to?
<br>
<p>Besides, when I dump the map contained in the second element during the 
<br>
execution of my application (ie, after PLM launched the job), each node 
<br>
entry contains: &quot;Daemon launched: False&quot;. Is this expected?
<br>
<p>Thanks,
<br>
Camille
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3382.php">Aurélien Bouteiller: "[OMPI devel] orte_job_data"</a>
<li><strong>Previous message:</strong> <a href="3380.php">Ralph H Castain: "Re: [OMPI devel] Orte cleanup"</a>
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
