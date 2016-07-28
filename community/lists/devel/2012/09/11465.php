<?
$subject_val = "[OMPI devel] RFC: hostfile setting of #slots";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep  1 05:54:28 2012" -->
<!-- isoreceived="20120901095428" -->
<!-- sent="Sat, 1 Sep 2012 02:54:20 -0700" -->
<!-- isosent="20120901095420" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: hostfile setting of #slots" -->
<!-- id="D00BDBE0-2079-4AB3-8471-DEEC68A8E247_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: hostfile setting of #slots<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-01 05:54:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11466.php">Kenneth A. Lloyd: "Re: [OMPI devel] RFC: hostfile setting of #slots"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/08/11464.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27161 - trunk/orte/mca/grpcomm/base"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11466.php">Kenneth A. Lloyd: "Re: [OMPI devel] RFC: hostfile setting of #slots"</a>
<li><strong>Reply:</strong> <a href="11466.php">Kenneth A. Lloyd: "Re: [OMPI devel] RFC: hostfile setting of #slots"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is not a notice of intended change, but rather a solicitation for comment.
<br>
<p>We currently default the number of slots on a host provided via hostfile or -host to 1. This is a historical &quot;feature&quot; driven by the fact that our initial launch system spawned daemons on the remote nodes after we had already mapped the processes to them - so we had no way of guessing a reasonable value for the number of slots on any node.
<br>
<p>However, the &quot;vm&quot; launch method starts daemons on every node prior to  doing the mapping, precisely so we can use the topology in the mapping algorithm. This creates the possibility of setting the number of slots on a node to the number of cpus (either cores or hardware threads, depending on how that flag is set) IF it wasn't provided in the hostfile.
<br>
<p>This would have an impact on the default &quot;byslot&quot; mapping algorithm. With only one slot/node, byslot essentially equates to bynode mapping. So a user-provided hostfile that doesn't give any info on the number of slots on a node effectively changes the default mapping algorithm to &quot;bynode&quot;. This change would alter that behavior and retain a &quot;byslot&quot; algorithm, with the number of slots being the number of cpus.
<br>
<p>I have a use-case that would benefit from making the change, but can handle it outside of the main code path. However, if others would also find it of use, I can add it to the main code path, either as the default or via MCA param.
<br>
<p>Any thoughts?
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11466.php">Kenneth A. Lloyd: "Re: [OMPI devel] RFC: hostfile setting of #slots"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/08/11464.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27161 - trunk/orte/mca/grpcomm/base"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11466.php">Kenneth A. Lloyd: "Re: [OMPI devel] RFC: hostfile setting of #slots"</a>
<li><strong>Reply:</strong> <a href="11466.php">Kenneth A. Lloyd: "Re: [OMPI devel] RFC: hostfile setting of #slots"</a>
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
