<?
$subject_val = "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 27 16:25:38 2014" -->
<!-- isoreceived="20140527202538" -->
<!-- sent="Tue, 27 May 2014 13:25:35 -0700" -->
<!-- isosent="20140527202535" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite" -->
<!-- id="D05F3219-8535-4F4C-A48F-8923AAF7295F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5tVPRpmjaGYEWgH=H2BR2Ozc3kZkjeq7_5yn58zdfogjQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-27 16:25:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14868.php">Ralph Castain: "Re: [OMPI devel] OMPI Opengrok config"</a>
<li><strong>Previous message:</strong> <a href="14866.php">Thomas Naughton: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>In reply to:</strong> <a href="14847.php">Gilles Gouaillardet: "[OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14875.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test	suite"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: this now appears true for *any* case where a parent connects to more than one child - i.e., if a process calls connect-accept more than once (e.g., in loop_spawn)
<br>
<p>This didn't used to be true, so something has changed in OMPI's underlying behavior.
<br>
<p><p>On May 26, 2014, at 11:27 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; currently, the dynamic/intercomm_create test from the ibm test suite output the following messages :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; dpm_base_disconnect_init: error -12 in isend to process 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the root cause it task 0 tries to send messages to already exited tasks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; one way of seeing things is that this is an application issue :
</span><br>
<span class="quotelev1">&gt; task 0 should have MPI_Comm_free'd all its communicator before calling MPI_Comm_disconnect.
</span><br>
<span class="quotelev1">&gt; This can be achieved via the attached patch
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; an other way of seeing things is that this is a bug in OpenMPI.
</span><br>
<span class="quotelev1">&gt; In this case, what would be the the right approach ?
</span><br>
<span class="quotelev1">&gt; - automatically free communicators (if needed) when MPI_Comm_disconnect is invoked ?
</span><br>
<span class="quotelev1">&gt; - simply remove communicators (if needed) from ompi_mpi_communicators when MPI_Comm_disconnect is invoked ?
</span><br>
<span class="quotelev1">&gt;   /* this causes a memory leak, but the application can be seen as responsible of it */
</span><br>
<span class="quotelev1">&gt; - other ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance for your feedback,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; &lt;intercomm_create.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14847.php">http://www.open-mpi.org/community/lists/devel/2014/05/14847.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14868.php">Ralph Castain: "Re: [OMPI devel] OMPI Opengrok config"</a>
<li><strong>Previous message:</strong> <a href="14866.php">Thomas Naughton: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>In reply to:</strong> <a href="14847.php">Gilles Gouaillardet: "[OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14875.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test	suite"</a>
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
