<?
$subject_val = "[OMPI devel] RFC: revised ORTE error handling";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  3 00:46:06 2013" -->
<!-- isoreceived="20130703044606" -->
<!-- sent="Tue, 2 Jul 2013 21:45:59 -0700" -->
<!-- isosent="20130703044559" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: revised ORTE error handling" -->
<!-- id="0E6868B0-DB1E-4BA9-99E8-CAE2FC484DA5_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: revised ORTE error handling<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-03 00:45:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12531.php">George Bosilca: "Re: [OMPI devel] [EXTERNAL] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument"</a>
<li><strong>Previous message:</strong> <a href="12529.php">Nathan Hjelm: "[OMPI devel] RFC: add performance variable interface to the MCA base"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12606.php">George Bosilca: "Re: [OMPI devel] RFC: revised ORTE error handling"</a>
<li><strong>Reply:</strong> <a href="12606.php">George Bosilca: "Re: [OMPI devel] RFC: revised ORTE error handling"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
**** NOTICE: This RFC modifies the MPI-RTE interface ****
<br>
<p>WHAT: revise the RTE error handling to allow registration of callbacks upon RTE-detected errors
<br>
<p>WHY: currently, the RTE aborts the process if an RTE-detected error occurs. This allows the upper layers (e.g., MPI) no chance to implement their own error response strategy, and it precludes allowing user-defined error handling.
<br>
<p>TIMEOUT:  let's go for July 19th, pending further discussion
<br>
<p>George and I were talking about ORTE's error handling the other day in regards to the right way to deal with errors in the updated OOB. Specifically, it seemed a bad idea for a library such as ORTE to be aborting the job on its own prerogative. If we lose a connection or cannot send a message, then we really should just report it upwards and let the application and/or upper layers decide what to do about it.
<br>
<p>The current code base only allows a single error callback to exist, which seemed unduly limiting. So, based on the conversation, I've modified the errmgr interface to provide a mechanism for registering any number of error handlers (this replaces the current &quot;set_fault_callback&quot; API). When an error occurs, these handlers will be called in order until one responds that the error has been &quot;resolved&quot; - i.e., no further action is required. The default MPI layer error handler is specified to go &quot;last&quot; and calls mpi_abort, so the current &quot;abort&quot; behavior is preserved unless other error handlers are registered.
<br>
<p>In the register_callback function, I provide an &quot;order&quot; param so you can specify &quot;this callback must come first&quot; or &quot;this callback must come last&quot;. Seemed to me that we will probably have different code areas registering callbacks, and one might require it go first (the default &quot;abort&quot; will always require it go last). So you can append and prepend, or go first/last.
<br>
<p>The errhandler callback function passes the name of the proc involved (which can be yourself for internal errors) and the error code. This is a change from the current fault callback which returned an opal_pointer_array of process names.
<br>
<p>The work is available for review in my bitbucket:
<br>
<p><a href="https://bitbucket.org/rhc/ompi-errmgr">https://bitbucket.org/rhc/ompi-errmgr</a>
<br>
<p>I've attached the svn diff as well.
<br>
<p>Appreciate your comments - nothing in concrete.
<br>
Ralph
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12530/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12530/err.diff">err.diff</a>
</ul>
<!-- attachment="err.diff" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12530/03-attachment">attachment</a>
</ul>
<!-- attachment="03-attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12531.php">George Bosilca: "Re: [OMPI devel] [EXTERNAL] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument"</a>
<li><strong>Previous message:</strong> <a href="12529.php">Nathan Hjelm: "[OMPI devel] RFC: add performance variable interface to the MCA base"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12606.php">George Bosilca: "Re: [OMPI devel] RFC: revised ORTE error handling"</a>
<li><strong>Reply:</strong> <a href="12606.php">George Bosilca: "Re: [OMPI devel] RFC: revised ORTE error handling"</a>
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
