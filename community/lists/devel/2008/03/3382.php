<?
$subject_val = "[OMPI devel] orte_job_data";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  5 17:31:45 2008" -->
<!-- isoreceived="20080305223145" -->
<!-- sent="Wed, 5 Mar 2008 17:31:38 -0500" -->
<!-- isosent="20080305223138" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="[OMPI devel] orte_job_data" -->
<!-- id="CD20C3C1-ABC3-4FD5-961C-F3C5132E5121_at_eecs.utk.edu" -->
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
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-05 17:31:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3383.php">Ralph Castain: "Re: [OMPI devel] orte_job_data"</a>
<li><strong>Previous message:</strong> <a href="3381.php">Camille Coti: "[OMPI devel] orte_job_data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3383.php">Ralph Castain: "Re: [OMPI devel] orte_job_data"</a>
<li><strong>Reply:</strong> <a href="3383.php">Ralph Castain: "Re: [OMPI devel] orte_job_data"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;From : Camille Coti &lt;coti_at_[hidden]&gt;
<br>
Date : 5 mars 2008 17:26:32 HNE (&#201;UA)
<br>
to : devel_at_[hidden]
<br>
Objet : orte_job_data
<br>
<p><p>Hello,
<br>
<p>I had a look at how the job data are kept during the life cycle of a  
<br>
job.
<br>
<p>The orte_job_data pointer array contains two elements:
<br>
&nbsp;&nbsp;&nbsp;addr[0] is filled during rte_init().
<br>
&nbsp;&nbsp;&nbsp;addr[1] is filled by PLM at setup time and contains the map on  
<br>
which the job is spawned.
<br>
<p>What does the first entry correspond to?
<br>
<p>Besides, when I dump the map contained in the second element during  
<br>
the execution of my application (ie, after PLM launched the job), each  
<br>
node entry contains: &quot;Daemon launched: False&quot;. Is this expected?
<br>
<p>Thanks,
<br>
Camille
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3383.php">Ralph Castain: "Re: [OMPI devel] orte_job_data"</a>
<li><strong>Previous message:</strong> <a href="3381.php">Camille Coti: "[OMPI devel] orte_job_data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3383.php">Ralph Castain: "Re: [OMPI devel] orte_job_data"</a>
<li><strong>Reply:</strong> <a href="3383.php">Ralph Castain: "Re: [OMPI devel] orte_job_data"</a>
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
