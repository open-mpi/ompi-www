<?
$subject_val = "[OMPI devel] The hostfile option";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 27 21:30:21 2012" -->
<!-- isoreceived="20120728013021" -->
<!-- sent="Sat, 28 Jul 2012 03:30:15 +0200" -->
<!-- isosent="20120728013015" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="[OMPI devel] The hostfile option" -->
<!-- id="45442A50-F85B-40DE-8237-2C6039732B7E_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] The hostfile option<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-27 21:30:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11335.php">Jeff Squyres: "[OMPI devel] 1.6.1rc1 posted"</a>
<li><strong>Previous message:</strong> <a href="11333.php">Rayson Ho: "Re: [OMPI devel] OpenMPI and SGE integration made more stable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11336.php">Ralph Castain: "Re: [OMPI devel] The hostfile option"</a>
<li><strong>Reply:</strong> <a href="11336.php">Ralph Castain: "Re: [OMPI devel] The hostfile option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm somewhat puzzled by the behavior of the -hostfile in Open MPI. Based on the FAQ it is supposed to provide a list of resources to be used by the launcher (in my case ssh) to start the processes. Make sense so far.
<br>
<p>However, if the configuration file contain a value for orte_default_hostfile, then the behavior of the hostfile option change drastically, and the option become a filter (the machines must be on the original list or a cryptic error message is displayed).
<br>
<p>Overall, we have a well defined [mostly] consistent behavior for parameters in Open MPI. We have an order of precedence of sources of MCA parameters, clearly defined which make understanding where a value comes straightforward. I'm absolutely certain there was a group discussion about this unique &quot;eccentricity&quot; regarding the hostfile option, but I fail to remember what was the reason we decided to go this way. Can I have a quick refresh please?
<br>
<p>Thanks,
<br>
&nbsp;george.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11335.php">Jeff Squyres: "[OMPI devel] 1.6.1rc1 posted"</a>
<li><strong>Previous message:</strong> <a href="11333.php">Rayson Ho: "Re: [OMPI devel] OpenMPI and SGE integration made more stable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11336.php">Ralph Castain: "Re: [OMPI devel] The hostfile option"</a>
<li><strong>Reply:</strong> <a href="11336.php">Ralph Castain: "Re: [OMPI devel] The hostfile option"</a>
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
