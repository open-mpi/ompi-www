<?
$subject_val = "[OMPI devel] PLM consistency: priority";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 11 10:56:27 2008" -->
<!-- isoreceived="20080711145627" -->
<!-- sent="Fri, 11 Jul 2008 08:56:18 -0600" -->
<!-- isosent="20080711145618" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] PLM consistency: priority" -->
<!-- id="C49CD0B2.E432%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] PLM consistency: priority<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-11 10:56:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4322.php">Aurélien Bouteiller: "Re: [OMPI devel] PLM consistency: priority"</a>
<li><strong>Previous message:</strong> <a href="4320.php">Ralph H Castain: "Re: [OMPI devel] PLM consistency: launch agent param"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4322.php">Aurélien Bouteiller: "Re: [OMPI devel] PLM consistency: priority"</a>
<li><strong>Reply:</strong> <a href="4322.php">Aurélien Bouteiller: "Re: [OMPI devel] PLM consistency: priority"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, another fun one. Some of the PLM modules use MCA params to adjust
<br>
their relative selection priority. This can lead to very unexpected behavior
<br>
as which module gets selected will depend on the priorities of the other
<br>
selectable modules - which changes from release to release as people
<br>
independently make adjustments and/or new modules are added.
<br>
<p>Fortunately, this doesn't bite us too often since many environments only
<br>
support one module, and since there is nothing to tell the user that the plm
<br>
module whose priority they raised actually -didn't- get used!
<br>
<p>However, in the interest of &quot;least astonishment&quot;, some of us working on the
<br>
RTE had changed our coding approach to avoid this confusion. Given that we
<br>
have this nice mca component select logic that takes the specified module -
<br>
i.e., &quot;-mca plm foo&quot; always yields foo if it can run, or errors out if it
<br>
can't - then the safest course is to remove MCA params that adjust module
<br>
priorities and have the user simply tell us which module they want us to
<br>
use.
<br>
<p>Do we want to make this consistent, at least in the PLM? Or do you want to
<br>
leave the user guessing? :-)
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4322.php">Aurélien Bouteiller: "Re: [OMPI devel] PLM consistency: priority"</a>
<li><strong>Previous message:</strong> <a href="4320.php">Ralph H Castain: "Re: [OMPI devel] PLM consistency: launch agent param"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4322.php">Aurélien Bouteiller: "Re: [OMPI devel] PLM consistency: priority"</a>
<li><strong>Reply:</strong> <a href="4322.php">Aurélien Bouteiller: "Re: [OMPI devel] PLM consistency: priority"</a>
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
