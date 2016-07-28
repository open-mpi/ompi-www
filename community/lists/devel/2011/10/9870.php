<?
$subject_val = "[OMPI devel] Determining locality";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 20 15:57:01 2011" -->
<!-- isoreceived="20111020195701" -->
<!-- sent="Thu, 20 Oct 2011 13:56:53 -0600" -->
<!-- isosent="20111020195653" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Determining locality" -->
<!-- id="BE2BCA77-7034-4A5A-ABE2-765274D294C4_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] Determining locality<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-20 15:56:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9871.php">Eugene Loh: "[OMPI devel] MPI 2.2 datatypes"</a>
<li><strong>Previous message:</strong> <a href="9869.php">Ralph Castain: "[OMPI devel] Process ranks"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For those wishing to use the new locality functionality, here is a little (hopefully clearer) info on how to do it. A few clarifications first may help:
<br>
<p>1. the locality is defined by the precise cpu set upon which a process is bound. If not bound, this obviously includes all the available cpus on the node where the process resides. 
<br>
<p>2. the locality value we return to you is a bitmask where each bit represents a specific layer of common usage between you (the proc in which the call to orte_ess.proc_get_locality is made) and the given process. In other words, if the &quot;socket&quot; bit is set, it means you and the process you specified are both bound to the same socket.
<br>
<p>Important note: it does -not- mean that the other process is currently executing on the same socket as you are executing upon at this instant in time. It only means that the OS is allowing that process to use the same socket that you are allowed to use. As the process swaps in/out and moves around, it may or may not be co-located on the socket with you at any given instant.
<br>
<p>We do not currently provide a way for a process to get the relative locality of two other remote processes. However, the infrastructure supports this, so we can add it if/when someone shows a use-case for it.
<br>
<p>3. every process has locality info for all of its peers AND for any proc that connected to it via MPI connect/accept or comm_spawn (the info is included in the modex during the connect/accept procedure). This is true regardless of launch method, with the exception of cnos (which doesn't have a modex).
<br>
<p><p>With that in mind, let's start with determining if a proc is on the same node. The only way to determine if two procs other than yourself are on the same node is to compare their daemon vpids:
<br>
<p>if (orte_ess.proc_get_daemon(A) == orte_ess.proc_get_daemon(B)), then A and B are on the same node.
<br>
<p><p>However, there are two ways to determine if another proc is on the same node as you. First, you can of course use the above method to determine if you share the same daemon:
<br>
<p>if (orte_ess.proc_get_daemon(A) == ORTE_PROC_MY_DAEMON-&gt;vpid), then we are on the same node
<br>
<p>Alternatively, you can use the proc locality since it contains a &quot;node&quot; bit:
<br>
<p>if (OPAL_PROC_ON_LOCAL_NODE(orte_ess.proc_get_locality(A))), then the proc is on the same node as us.
<br>
<p><p>Similarly, we can determine if another process shares a socket, NUMA node, or other hardware element with us by applying the corresponding OPAL_PROC_ON_xxx macro to the locality returned by calling orte_ess.proc_get_locality for that process.
<br>
<p>HTH
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9871.php">Eugene Loh: "[OMPI devel] MPI 2.2 datatypes"</a>
<li><strong>Previous message:</strong> <a href="9869.php">Ralph Castain: "[OMPI devel] Process ranks"</a>
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
