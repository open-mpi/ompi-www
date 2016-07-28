<?
$subject_val = "Re: [OMPI devel] RFC: revised ORTE error handling";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 15 09:45:58 2013" -->
<!-- isoreceived="20130715134558" -->
<!-- sent="Mon, 15 Jul 2013 15:45:50 +0200" -->
<!-- isosent="20130715134550" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: revised ORTE error handling" -->
<!-- id="64A3E36B-4506-47BB-B622-DB86334F3E48_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0E6868B0-DB1E-4BA9-99E8-CAE2FC484DA5_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: revised ORTE error handling<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-15 09:45:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12607.php">Ralph Castain: "Re: [OMPI devel] RFC: revised ORTE error handling"</a>
<li><strong>Previous message:</strong> <a href="12605.php">George Bosilca: "Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype"</a>
<li><strong>In reply to:</strong> <a href="12530.php">Ralph Castain: "[OMPI devel] RFC: revised ORTE error handling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12607.php">Ralph Castain: "Re: [OMPI devel] RFC: revised ORTE error handling"</a>
<li><strong>Reply:</strong> <a href="12607.php">Ralph Castain: "Re: [OMPI devel] RFC: revised ORTE error handling"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>Sorry for the late answer, we have quite a few things on our todo list right now. Here are few concerns I'm having about the proposed approach.
<br>
<p>1. We would have preferred to have a list of processes for the ompi_errhandler_runtime_callback function. We don't necessary care about the error code, but having a list will allow us to move the notifications per bulk instead of one by one.
<br>
<p>2. You made the registration of the callbacks ordered, and added special arguments to append or prepend callbacks to the list. Right now I can't figure out a good reason on how to use it especially that the order might be impose on the order the modules are loaded by the frameworks, thus not something we can easily control.
<br>
<p>3. The callback list. The concept is useful, I don't know about the implementation. The current version doesn't support stopping the propagation of the error signal, which might be an issue in some cases. I can picture the fact that one level know about the issue, and know how to fix it, so the error does not need to propagate to other levels. This can be implemented in the old way interrupts were managed in DOS, with basically a simple _get / _set type of interface. If a callback wants to propagate the error it has first to retrieve the ancestor on the moment when it registered the callback and then explicitly calls it upon error.
<br>
<p>Again, nothing major in the short term as it will take a significant amount of work to move the only user of such error handling capability (the FT prototype) back over the current version of the ORTE.
<br>
<p>Regards,
<br>
&nbsp;&nbsp;George.
<br>
<p><p><p>On Jul 3, 2013, at 06:45 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; **** NOTICE: This RFC modifies the MPI-RTE interface ****
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHAT: revise the RTE error handling to allow registration of callbacks upon RTE-detected errors
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY: currently, the RTE aborts the process if an RTE-detected error occurs. This allows the upper layers (e.g., MPI) no chance to implement their own error response strategy, and it precludes allowing user-defined error handling.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMEOUT:  let's go for July 19th, pending further discussion
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; George and I were talking about ORTE's error handling the other day in regards to the right way to deal with errors in the updated OOB. Specifically, it seemed a bad idea for a library such as ORTE to be aborting the job on its own prerogative. If we lose a connection or cannot send a message, then we really should just report it upwards and let the application and/or upper layers decide what to do about it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The current code base only allows a single error callback to exist, which seemed unduly limiting. So, based on the conversation, I've modified the errmgr interface to provide a mechanism for registering any number of error handlers (this replaces the current &quot;set_fault_callback&quot; API). When an error occurs, these handlers will be called in order until one responds that the error has been &quot;resolved&quot; - i.e., no further action is required. The default MPI layer error handler is specified to go &quot;last&quot; and calls mpi_abort, so the current &quot;abort&quot; behavior is preserved unless other error handlers are registered.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the register_callback function, I provide an &quot;order&quot; param so you can specify &quot;this callback must come first&quot; or &quot;this callback must come last&quot;. Seemed to me that we will probably have different code areas registering callbacks, and one might require it go first (the default &quot;abort&quot; will always require it go last). So you can append and prepend, or go first/last.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The errhandler callback function passes the name of the proc involved (which can be yourself for internal errors) and the error code. This is a change from the current fault callback which returned an opal_pointer_array of process names.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The work is available for review in my bitbucket:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://bitbucket.org/rhc/ompi-errmgr">https://bitbucket.org/rhc/ompi-errmgr</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've attached the svn diff as well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Appreciate your comments - nothing in concrete.
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;err.diff&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12606/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12607.php">Ralph Castain: "Re: [OMPI devel] RFC: revised ORTE error handling"</a>
<li><strong>Previous message:</strong> <a href="12605.php">George Bosilca: "Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype"</a>
<li><strong>In reply to:</strong> <a href="12530.php">Ralph Castain: "[OMPI devel] RFC: revised ORTE error handling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12607.php">Ralph Castain: "Re: [OMPI devel] RFC: revised ORTE error handling"</a>
<li><strong>Reply:</strong> <a href="12607.php">Ralph Castain: "Re: [OMPI devel] RFC: revised ORTE error handling"</a>
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
