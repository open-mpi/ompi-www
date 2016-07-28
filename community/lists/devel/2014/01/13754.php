<?
$subject_val = "[OMPI devel] RFC: deprecate old mapping/binding MCA params";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 12 12:43:12 2014" -->
<!-- isoreceived="20140112174312" -->
<!-- sent="Sun, 12 Jan 2014 09:43:03 -0800" -->
<!-- isosent="20140112174303" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: deprecate old mapping/binding MCA params" -->
<!-- id="E0439561-89DE-4ABA-A642-9F988D0E8B18_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: deprecate old mapping/binding MCA params<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-12 12:43:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13755.php">Paul Hargrove: "Re: [OMPI devel] Paul's testing summary"</a>
<li><strong>Previous message:</strong> <a href="13753.php">Ralph Castain: "Re: [OMPI devel] Paul's testing summary"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT:  Deprecate the old mapping and binding MCA params - this includes:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--bynode
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--bycore
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--bysocket
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--bind-to-core
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--bind-to-socket
<br>
<p>WHY:    These have been replaced by the new --map-by &lt;foo&gt; and --bind-to &lt;bar&gt; directives, which
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;are string-based MCA params. Thus, the two params cannot resolve to the same underlying
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;params, and users can easily create parameter conflicts (e.g., specifying one in their default
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA param file and another on the cmd line). These conflicts will not be resolved by the MCA
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;system as the params are in fact independent. This creates user confusion.
<br>
<p>HOW:    Mark the old params as deprecated for the 1.7 series, and remove them in the trunk/1.9 series
<br>
<p>WHEN:  I propose a very short timeout so we can do this for 1.7.4 as it is a low-risk code change, so
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;timeout will be at this Tues call. If concerns are expressed, we can defer to 1.7.5
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13755.php">Paul Hargrove: "Re: [OMPI devel] Paul's testing summary"</a>
<li><strong>Previous message:</strong> <a href="13753.php">Ralph Castain: "Re: [OMPI devel] Paul's testing summary"</a>
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
