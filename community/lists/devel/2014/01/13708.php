<?
$subject_val = "Re: [OMPI devel] callback debugging";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 10 12:48:28 2014" -->
<!-- isoreceived="20140110174828" -->
<!-- sent="Fri, 10 Jan 2014 09:48:14 -0800" -->
<!-- isosent="20140110174814" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] callback debugging" -->
<!-- id="24DC70EC-6C63-4072-AC94-717D3DB85438_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140110160211.GQ20741_at_lisas.de" -->
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
<strong>Date:</strong> 2014-01-10 12:48:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13709.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<li><strong>Previous message:</strong> <a href="13707.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30168 - misc harmless *BSD warnings"</a>
<li><strong>In reply to:</strong> <a href="13704.php">Adrian Reber: "[OMPI devel] callback debugging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13719.php">Adrian Reber: "Re: [OMPI devel] callback debugging"</a>
<li><strong>Reply:</strong> <a href="13719.php">Adrian Reber: "Re: [OMPI devel] callback debugging"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 10, 2014, at 8:02 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am currently trying to understand how callbacks are working. Right now
</span><br>
<span class="quotelev1">&gt; I am looking at orte/mca/rml/base/rml_base_receive.c
</span><br>
<span class="quotelev1">&gt; orte_rml_base_comm_start() which does 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD,
</span><br>
<span class="quotelev1">&gt;                            ORTE_RML_TAG_RML_INFO_UPDATE,
</span><br>
<span class="quotelev1">&gt;                            ORTE_RML_PERSISTENT,
</span><br>
<span class="quotelev1">&gt;                            orte_rml_base_recv,
</span><br>
<span class="quotelev1">&gt;                            NULL);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As far as I understand it orte_rml_base_recv() is the callback function.
</span><br>
<span class="quotelev1">&gt; At which point should this function run? When the data is actually
</span><br>
<span class="quotelev1">&gt; received?
</span><br>
<p>Not precisely. When data is received by the OOB, it pushes the data into an event. When that event gets serviced, it calls the orte_rml_base_receive function which processes the data to find the matching tag, and then uses that to execute the callback to the user code.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The same for send_buffer_nb() functions. I do not see the callback
</span><br>
<span class="quotelev1">&gt; functions actually running. How can I verify that the callback functions
</span><br>
<span class="quotelev1">&gt; are running. Especially for the send case it sounds pretty obvious how
</span><br>
<span class="quotelev1">&gt; it should work but I never see the callback function running. At least
</span><br>
<span class="quotelev1">&gt; in my setup.
</span><br>
<p>The data is not immediately sent. It gets pushed into an event. When that event gets serviced, it calls the orte_oob_base_send function which then passes the data to each active OOB component until one of them says it can send it. The data is then pushed into another event to get it into the event base for that component's active module - when that event gets serviced, the data is sent. Once the data is sent, an event is created that, when serviced, executes the callback to the user code.
<br>
<p>If you aren't seeing callbacks, the most likely cause is that the orte progress thread isn't running. Without it, none of this will work.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13709.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<li><strong>Previous message:</strong> <a href="13707.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30168 - misc harmless *BSD warnings"</a>
<li><strong>In reply to:</strong> <a href="13704.php">Adrian Reber: "[OMPI devel] callback debugging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13719.php">Adrian Reber: "Re: [OMPI devel] callback debugging"</a>
<li><strong>Reply:</strong> <a href="13719.php">Adrian Reber: "Re: [OMPI devel] callback debugging"</a>
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
