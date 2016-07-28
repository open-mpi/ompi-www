<?
$subject_val = "[OMPI devel] Confused topic for developer's meeting";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 26 10:38:37 2016" -->
<!-- isoreceived="20160226153837" -->
<!-- sent="Fri, 26 Feb 2016 07:38:24 -0800" -->
<!-- isosent="20160226153824" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Confused topic for developer's meeting" -->
<!-- id="6B1D48C6-4FBF-4ABE-9F82-C0FBA07E8134_at_open-mpi.org" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] Confused topic for developer's meeting<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-26 10:38:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18635.php">Sylvain Jeaugey: "[OMPI devel] Crash in orte_iof_hnp_read_local_handler"</a>
<li><strong>Previous message:</strong> <a href="18633.php">Monika Hemnani: "Re: [OMPI devel] error while compiling openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18638.php">Gilles Gouaillardet: "Re: [OMPI devel] Confused topic for developer's meeting"</a>
<li><strong>Reply:</strong> <a href="18638.php">Gilles Gouaillardet: "Re: [OMPI devel] Confused topic for developer's meeting"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There was some confusion yesterday at the developer&#226;&#128;&#153;s meeting over a topic regarding framework dependencies. I apologize - I should have looked over the agenda more closely in advance to ensure I recalled everything. Instead of the topic I had wanted to discuss, we wound up discussing embedding dependency arguments in component definitions.
<br>
<p>What I really wanted to raise was the issue of statically including all base framework definitions in the core library. In other words, if you want to define a new framework for ORTE, you _must_ put the framework header and the base directory in libopen-rte. This makes it impossible for a 3rd party to add an ORTE framework - they have to get the OMPI community to add it upstream first.
<br>
<p>Note that you _can_ add components dynamically - you just can&#226;&#128;&#153;t add a framework.
<br>
<p>The only solution a 3rd party has today is to create another project layer in the code, and put the framework there. However, this may be somewhat limiting due to circular build dependencies if, for example, an ORTE component needed to reference the new framework, and the new project/framework has an explicit link to libopen-rte.
<br>
<p>Resolving this would require that we dynamically load the frameworks themselves, and not just the components. This point is what led to Jeff&#226;&#128;&#153;s proposal about dependencies - however, the dependency definitions are not _required_ in order to make this change.
<br>
<p>So the question to the community is: does anyone see an issue with making frameworks into dll&#226;&#128;&#153;s? Obviously, this approach won&#226;&#128;&#153;t work for static builds, but that is a separate issue.
<br>
<p>Thanks
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18635.php">Sylvain Jeaugey: "[OMPI devel] Crash in orte_iof_hnp_read_local_handler"</a>
<li><strong>Previous message:</strong> <a href="18633.php">Monika Hemnani: "Re: [OMPI devel] error while compiling openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18638.php">Gilles Gouaillardet: "Re: [OMPI devel] Confused topic for developer's meeting"</a>
<li><strong>Reply:</strong> <a href="18638.php">Gilles Gouaillardet: "Re: [OMPI devel] Confused topic for developer's meeting"</a>
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
