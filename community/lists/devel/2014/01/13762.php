<?
$subject_val = "Re: [OMPI devel] [EXTERNAL]  RFC: async modex";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 13 15:05:32 2014" -->
<!-- isoreceived="20140113200532" -->
<!-- sent="Mon, 13 Jan 2014 20:05:16 +0000" -->
<!-- isosent="20140113200516" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL]  RFC: async modex" -->
<!-- id="CEF994AB.16C3D%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0295DB8C-6D18-48E2-9B86-403CA6E6C3E0_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL]  RFC: async modex<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-13 15:05:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13763.php">George Bosilca: "Re: [OMPI devel] Padding on ompi_predefined_datatype_t running out"</a>
<li><strong>Previous message:</strong> <a href="13761.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<li><strong>In reply to:</strong> <a href="13752.php">Ralph Castain: "[OMPI devel] RFC: async modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13765.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] RFC: async modex"</a>
<li><strong>Reply:</strong> <a href="13765.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] RFC: async modex"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is there any place that this can actually be used?  It's a fairly large
<br>
change to the RTE interface (which we should try to keep stable), and I
<br>
can't convince myself that it's useful; in general, if a BTL or MTL is
<br>
asking for a piece of data, the MPI library is stuck until that data's
<br>
available.  I can see doing some lazy approach, but I can't see making the
<br>
modex_recv call non-blocking.
<br>
<p>Brian
<br>
<p>On 1/11/14 9:28 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;NOTE:  This will involve a change to the MPI-RTE interface
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;WHAT:  Modify modex_recv to add a callback function that will return the
</span><br>
<span class="quotelev1">&gt;requested data when it is available
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;WHY:    Enable faster startup on large scale systems by eliminating the
</span><br>
<span class="quotelev1">&gt;current mandatory modex barrier during MPI_Init
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;HOW:    The ompi_modex_recv functions will have callback function and
</span><br>
<span class="quotelev1">&gt;(void*)cbdata arguments added to them.
</span><br>
<span class="quotelev1">&gt;              An ompi_modex_recv_t struct will be defined that includes a
</span><br>
<span class="quotelev1">&gt;pointer to the returned data plus a &quot;bool active&quot;
</span><br>
<span class="quotelev1">&gt;              that can be used to detect when the data has been returned
</span><br>
<span class="quotelev1">&gt;if blocking is required.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              When a modex_recv is issued, ORTE will check for the
</span><br>
<span class="quotelev1">&gt;presence of the requested data and immediately
</span><br>
<span class="quotelev1">&gt;              issue a callback if the data is available. If the data is
</span><br>
<span class="quotelev1">&gt;not available, then ORTE will request the data from
</span><br>
<span class="quotelev1">&gt;              the remote process, and execute the callback when the
</span><br>
<span class="quotelev1">&gt;remote process returns it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              The current behavior of a blocking modex barrier will
</span><br>
<span class="quotelev1">&gt;remain the default - the new behavior will only take affect
</span><br>
<span class="quotelev1">&gt;               if specifically requested by the user via MCA param. With
</span><br>
<span class="quotelev1">&gt;this new behavior, the current call to &quot;modex&quot; in
</span><br>
<span class="quotelev1">&gt;               MPI_Init will become a &quot;no-op&quot; when the processes are
</span><br>
<span class="quotelev1">&gt;launched via mpirun - this will be executed in ORTE
</span><br>
<span class="quotelev1">&gt;               so that other RTEs that do not wish to support async modex
</span><br>
<span class="quotelev1">&gt;behavior are not impacted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;WHEN:   No hurry on this as it is intended for 1.9, so let's say mid Feb.
</span><br>
<span class="quotelev1">&gt;Info on a branch will be made available in
</span><br>
<span class="quotelev1">&gt;               the near future.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13763.php">George Bosilca: "Re: [OMPI devel] Padding on ompi_predefined_datatype_t running out"</a>
<li><strong>Previous message:</strong> <a href="13761.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<li><strong>In reply to:</strong> <a href="13752.php">Ralph Castain: "[OMPI devel] RFC: async modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13765.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] RFC: async modex"</a>
<li><strong>Reply:</strong> <a href="13765.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] RFC: async modex"</a>
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
