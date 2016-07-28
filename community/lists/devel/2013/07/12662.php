<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 18 22:07:59 2013" -->
<!-- isoreceived="20130719020759" -->
<!-- sent="Fri, 19 Jul 2013 02:07:19 +0000" -->
<!-- isosent="20130719020719" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup" -->
<!-- id="CE0DF8F8.12A7E%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="FD83CB91-EE63-432D-8D47-54E1D879DA08_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-18 22:07:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12663.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
<li><strong>Previous message:</strong> <a href="12661.php">Ralph Castain: "Re: [OMPI devel] RFC: Change ompi_proc_t endpoint data lookup"</a>
<li><strong>In reply to:</strong> <a href="12661.php">Ralph Castain: "Re: [OMPI devel] RFC: Change ompi_proc_t endpoint data lookup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12666.php">George Bosilca: "Re: [OMPI devel] RFC: Change ompi_proc_t endpoint data lookup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/18/13 7:39 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
<br>
<p>We are looking at exascale requirements, and one of the big issues is memory footprint. We currently retrieve the endpoint info for every process in the job, plus all the procs in any communicator with which we do a connect/accept - even though we probably will only communicate with a small number of them. This wastes a lot of memory at scale.
<br>
<p>As long as we are re-working the endpoint stuff, would it be a thought to go ahead and change how we handle the above? I'm looking to switch to a lazy definition approach where we compute endpoints for procs on first-message instead of during mpi_init, retrieving the endpoint info for that proc only at that time. So instead of storing all the endpoint info for every proc in each proc, each proc only would contain the info it requires for that application.
<br>
<p>It depends on what you mean by endpoint information.  If you mean what I call endpoint information (the stuff the PML/MTL/BML stores on an ompi_proc_t), then I really don't care.  For Portals, the endpoint information is quite small (8-16 bytes, depending on addressing mode), so I'd rather pre-populate the array and not slow down the send path with yet another conditional than have to check for endpoint data.  Of course, given the Portals usage model, I'd really like to jam the endpoint data into shared memory at some point (not this patch).  If others want to figure out how to do lazy endpoint data setup for their network, I think that's reasonable.
<br>
<p>Ideally, I'd like to see that extended to the ompi_proc_t array itself - maybe changing it to a sparse array/list of some type, so we only create that storage for procs we actually communicate to.
<br>
<p>This would actually break a whole lot of things in OMPI and is a huge change.  However, I still have plans to add a --enable-minimal-memory type option some day which will make the ompi_proc_t significantly smaller by assuming homogeneous convertors and that you can programmatically get a remote host name when needed.  Again, unless we need to get micro-small (and I don't think we do), the sparseness requires conditionals in the critical path that worry me.
<br>
<p>If you'd prefer to discuss this as a separate issue, that's fine - just something we need to work on at some point in the next year or two.
<br>
<p>I agree some work is needed, but I think it's orthogonal to this issue and is something we're going to need to study in detail.  There are a number of space/time tradeoffs in that path.  Which isn't a problem, but there's a whole lot of low hanging fruit before we get to the hard stuff.  Now if you want the OFED interfaces to run at exascale, well, buy lots of memory.
<br>
<p>Brian
<br>
<p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12662/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12663.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
<li><strong>Previous message:</strong> <a href="12661.php">Ralph Castain: "Re: [OMPI devel] RFC: Change ompi_proc_t endpoint data lookup"</a>
<li><strong>In reply to:</strong> <a href="12661.php">Ralph Castain: "Re: [OMPI devel] RFC: Change ompi_proc_t endpoint data lookup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12666.php">George Bosilca: "Re: [OMPI devel] RFC: Change ompi_proc_t endpoint data lookup"</a>
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
