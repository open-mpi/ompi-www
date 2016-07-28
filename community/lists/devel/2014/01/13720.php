<?
$subject_val = "Re: [OMPI devel] callback debugging";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 10 15:55:41 2014" -->
<!-- isoreceived="20140110205541" -->
<!-- sent="Fri, 10 Jan 2014 12:55:26 -0800" -->
<!-- isosent="20140110205526" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] callback debugging" -->
<!-- id="5E9F8D65-9F4C-4B21-A3D7-F1B43E6B37AD_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140110204500.GU20741_at_lisas.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] callback debugging<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-10 15:55:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13721.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<li><strong>Previous message:</strong> <a href="13719.php">Adrian Reber: "Re: [OMPI devel] callback debugging"</a>
<li><strong>In reply to:</strong> <a href="13719.php">Adrian Reber: "Re: [OMPI devel] callback debugging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13747.php">Ralph Castain: "Re: [OMPI devel] callback debugging"</a>
<li><strong>Reply:</strong> <a href="13747.php">Ralph Castain: "Re: [OMPI devel] callback debugging"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 10, 2014, at 12:45 PM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, Jan 10, 2014 at 09:48:14AM -0800, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 10, 2014, at 8:02 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am currently trying to understand how callbacks are working. Right now
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am looking at orte/mca/rml/base/rml_base_receive.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_rml_base_comm_start() which does 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                           ORTE_RML_TAG_RML_INFO_UPDATE,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                           ORTE_RML_PERSISTENT,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                           orte_rml_base_recv,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                           NULL);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As far as I understand it orte_rml_base_recv() is the callback function.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; At which point should this function run? When the data is actually
</span><br>
<span class="quotelev3">&gt;&gt;&gt; received?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Not precisely. When data is received by the OOB, it pushes the data into an event. When that event gets serviced, it calls the orte_rml_base_receive function which processes the data to find the matching tag, and then uses that to execute the callback to the user code.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The same for send_buffer_nb() functions. I do not see the callback
</span><br>
<span class="quotelev3">&gt;&gt;&gt; functions actually running. How can I verify that the callback functions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are running. Especially for the send case it sounds pretty obvious how
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it should work but I never see the callback function running. At least
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in my setup.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The data is not immediately sent. It gets pushed into an event. When that event gets serviced, it calls the orte_oob_base_send function which then passes the data to each active OOB component until one of them says it can send it. The data is then pushed into another event to get it into the event base for that component's active module - when that event gets serviced, the data is sent. Once the data is sent, an event is created that, when serviced, executes the callback to the user code.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you aren't seeing callbacks, the most likely cause is that the orte progress thread isn't running. Without it, none of this will work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks. Running configure without '--with-ft=cr' I can run a program and
</span><br>
<span class="quotelev1">&gt; use orte-top. In orterun I can see that the callback is running and
</span><br>
<span class="quotelev1">&gt; orte-top displays the retrieved information. I can also see in orte-top
</span><br>
<span class="quotelev1">&gt; that the callbacks are working.
</span><br>
<p>Actually, I'm rather impressed - I hadn't tested orte-top and didn't honestly know if it would work any more! Glad to hear it does :-)
<br>
<p><span class="quotelev1">&gt; Doing the same with '--with-ft=cr'
</span><br>
<span class="quotelev1">&gt; enabled orte-top crashes as well as orte-checkpoint and both (-top and
</span><br>
<span class="quotelev1">&gt; -checkpoint) seem to no longer have working callbacks and that is why
</span><br>
<span class="quotelev1">&gt; they are probably crashing. So some code which is enabled by '--with-ft=cr'
</span><br>
<span class="quotelev1">&gt; seems to break callbacks in orte-top as well as in orte-checkpoint.
</span><br>
<span class="quotelev1">&gt; orterun handles callbacks no matter if configured with or without
</span><br>
<span class="quotelev1">&gt; '--with-ft=cr'.
</span><br>
<p>I can take a look this weekend - probably something silly
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		Adrian
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13720/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13721.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<li><strong>Previous message:</strong> <a href="13719.php">Adrian Reber: "Re: [OMPI devel] callback debugging"</a>
<li><strong>In reply to:</strong> <a href="13719.php">Adrian Reber: "Re: [OMPI devel] callback debugging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13747.php">Ralph Castain: "Re: [OMPI devel] callback debugging"</a>
<li><strong>Reply:</strong> <a href="13747.php">Ralph Castain: "Re: [OMPI devel] callback debugging"</a>
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
