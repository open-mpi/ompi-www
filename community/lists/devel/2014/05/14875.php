<?
$subject_val = "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test	suite";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 27 20:33:47 2014" -->
<!-- isoreceived="20140528003347" -->
<!-- sent="Wed, 28 May 2014 00:33:45 +0000" -->
<!-- isosent="20140528003345" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test	suite" -->
<!-- id="9E3214BF-B2D3-4E5B-AF08-3C8D72E127AD_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test	suite<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-27 20:33:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14876.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test	suite"</a>
<li><strong>Previous message:</strong> <a href="14874.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI Opengrok config"</a>
<li><strong>In reply to:</strong> <a href="14847.php">Gilles Gouaillardet: "[OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14876.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test	suite"</a>
<li><strong>Reply:</strong> <a href="14876.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test	suite"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Note that MPI says that COMM_DISCONNECT simply disconnects that individual communicator.  It does *not* guarantee that the processes involved will be fully disconnected.
<br>
<p>So I think that the freeing of communicators is good app behavior, but it is not required by the MPI spec.
<br>
<p>If OMPI is requiring this for correct termination, then something is wrong.  MPI_FINALIZE is supposed to be collective across all connected MPI procs -- and if the parent and spawned procs in this test are still connected (because they have not disconnected all communicators between them), the FINALIZE is supposed to be collective across all of them.
<br>
<p>This means that FINALIZE is allowed to block if it needs to, such that OMPI sending control messages to procs that are still &quot;connected&quot; (in the MPI sense) should never cause a race condition.
<br>
<p>As such, this sounds like an OMPI bug.
<br>
<p><p><p><p>On May 27, 2014, at 2:27 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14876.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test	suite"</a>
<li><strong>Previous message:</strong> <a href="14874.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI Opengrok config"</a>
<li><strong>In reply to:</strong> <a href="14847.php">Gilles Gouaillardet: "[OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14876.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test	suite"</a>
<li><strong>Reply:</strong> <a href="14876.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test	suite"</a>
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
