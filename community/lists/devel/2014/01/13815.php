<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] RFC: async modex";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 19 16:31:52 2014" -->
<!-- isoreceived="20140119213152" -->
<!-- sent="Sun, 19 Jan 2014 13:31:31 -0800" -->
<!-- isosent="20140119213131" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] RFC: async modex" -->
<!-- id="9B366152-4253-4BFB-AC91-91890881CDD4_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="FE418181-6923-4610-890C-D1DACA5937F6_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] RFC: async modex<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-19 16:31:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13816.php">Ralph Castain: "Re: [OMPI devel] SC13 birds of a feather - thermal monitoring"</a>
<li><strong>Previous message:</strong> <a href="13814.php">Ralph Castain: "[OMPI devel] Trunk warnings"</a>
<li><strong>In reply to:</strong> <a href="13789.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] RFC: async modex"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have the branch complete for executing this - please see
<br>
<p><a href="https://bitbucket.org/rhc/ompi-scale">https://bitbucket.org/rhc/ompi-scale</a>
<br>
<p>Timeout set to Feb 4th after that week's telecon
<br>
<p><p>On Jan 17, 2014, at 9:57 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; After discussion on the telecon, we decided to:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. let the modex be non-blocking so we can fall thru - only when the corresponding MCA param is set!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. do not modify the modex_recv to add the callback as the MPI layer really doesn't know how to handle this in an async fashion. Modifying that behavior would be difficult and could wind up impacting the critical path - something we may decide to look into more at a later time
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So we will block in a call to modex_recv until the info for that particular process can be obtained. I'll add a timeout feature (via yet another MCA param) so we can gracefully recover if the remote proc never answers for some reason.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Will provide an update when this is ready
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 13, 2014, at 3:00 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What I want to do is make the current &quot;modex&quot; become a no-op, which means we have a lazy modex. As I noted in my commit message, this scales horribly if we don't, hence the MCA param requirement so people don't do this unless their BTL/MTLs will support it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What I found when playing with that arrangement is that a BTL/MTL is going to need or want data at first message, but that data may not be available yet because that particular remote proc hasn't registered all of its modex data yet. A beautiful race condition. So I was forced to block everyone at &quot;modex&quot; just to ensure the remote data was available at time of request.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If I remove the global &quot;barrier&quot; requirement, then I didn't want to &quot;block&quot; on modex_recv as this is done on a per-proc basis. Even though one proc isn't ready to return the data, another might be - and so I'd let you queue up as many modex_recv calls as you like, resolving each of them as data becomes available. This leaves the MPI layer free to send a message as soon as the target remote proc is ready, without waiting for some other proc to register its modex info.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Make sense?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Jan 13, 2014 at 12:05 PM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Is there any place that this can actually be used?  It's a fairly large
</span><br>
<span class="quotelev2">&gt;&gt; change to the RTE interface (which we should try to keep stable), and I
</span><br>
<span class="quotelev2">&gt;&gt; can't convince myself that it's useful; in general, if a BTL or MTL is
</span><br>
<span class="quotelev2">&gt;&gt; asking for a piece of data, the MPI library is stuck until that data's
</span><br>
<span class="quotelev2">&gt;&gt; available.  I can see doing some lazy approach, but I can't see making the
</span><br>
<span class="quotelev2">&gt;&gt; modex_recv call non-blocking.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 1/11/14 9:28 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;NOTE:  This will involve a change to the MPI-RTE interface
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;WHAT:  Modify modex_recv to add a callback function that will return the
</span><br>
<span class="quotelev3">&gt;&gt; &gt;requested data when it is available
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;WHY:    Enable faster startup on large scale systems by eliminating the
</span><br>
<span class="quotelev3">&gt;&gt; &gt;current mandatory modex barrier during MPI_Init
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;HOW:    The ompi_modex_recv functions will have callback function and
</span><br>
<span class="quotelev3">&gt;&gt; &gt;(void*)cbdata arguments added to them.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;              An ompi_modex_recv_t struct will be defined that includes a
</span><br>
<span class="quotelev3">&gt;&gt; &gt;pointer to the returned data plus a &quot;bool active&quot;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;              that can be used to detect when the data has been returned
</span><br>
<span class="quotelev3">&gt;&gt; &gt;if blocking is required.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;              When a modex_recv is issued, ORTE will check for the
</span><br>
<span class="quotelev3">&gt;&gt; &gt;presence of the requested data and immediately
</span><br>
<span class="quotelev3">&gt;&gt; &gt;              issue a callback if the data is available. If the data is
</span><br>
<span class="quotelev3">&gt;&gt; &gt;not available, then ORTE will request the data from
</span><br>
<span class="quotelev3">&gt;&gt; &gt;              the remote process, and execute the callback when the
</span><br>
<span class="quotelev3">&gt;&gt; &gt;remote process returns it.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;              The current behavior of a blocking modex barrier will
</span><br>
<span class="quotelev3">&gt;&gt; &gt;remain the default - the new behavior will only take affect
</span><br>
<span class="quotelev3">&gt;&gt; &gt;               if specifically requested by the user via MCA param. With
</span><br>
<span class="quotelev3">&gt;&gt; &gt;this new behavior, the current call to &quot;modex&quot; in
</span><br>
<span class="quotelev3">&gt;&gt; &gt;               MPI_Init will become a &quot;no-op&quot; when the processes are
</span><br>
<span class="quotelev3">&gt;&gt; &gt;launched via mpirun - this will be executed in ORTE
</span><br>
<span class="quotelev3">&gt;&gt; &gt;               so that other RTEs that do not wish to support async modex
</span><br>
<span class="quotelev3">&gt;&gt; &gt;behavior are not impacted.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;WHEN:   No hurry on this as it is intended for 1.9, so let's say mid Feb.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;Info on a branch will be made available in
</span><br>
<span class="quotelev3">&gt;&gt; &gt;               the near future.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt;devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt;devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;   Brian W. Barrett
</span><br>
<span class="quotelev2">&gt;&gt;   Scalable System Software Group
</span><br>
<span class="quotelev2">&gt;&gt;   Sandia National Laboratories
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13815/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13816.php">Ralph Castain: "Re: [OMPI devel] SC13 birds of a feather - thermal monitoring"</a>
<li><strong>Previous message:</strong> <a href="13814.php">Ralph Castain: "[OMPI devel] Trunk warnings"</a>
<li><strong>In reply to:</strong> <a href="13789.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] RFC: async modex"</a>
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
