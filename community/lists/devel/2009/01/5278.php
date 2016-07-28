<?
$subject_val = "Re: [OMPI devel] RFC: sm Latency";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 22 14:14:06 2009" -->
<!-- isoreceived="20090122191406" -->
<!-- sent="Thu, 22 Jan 2009 14:13:59 -0500" -->
<!-- isosent="20090122191359" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: sm Latency" -->
<!-- id="C59E2FA7.2D782%rlgraham_at_ornl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4978B23A.8020901_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: sm Latency<br>
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-22 14:13:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5279.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi] missing symbols?"</a>
<li><strong>Previous message:</strong> <a href="5277.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>In reply to:</strong> <a href="5277.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nothing wrong with worrying about ping-pong, this is the first thing people
<br>
look at.
<br>
<p>The question about the unexpected queue was to check and see if proper MPI
<br>
matching is done.  If there is matching entry in the unexpected queue, this
<br>
is the one that is the correct match from the MPI matching rules.
<br>
<p>Rich
<br>
<p><p>On 1/22/09 12:51 PM, &quot;Eugene Loh&quot; &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Richard Graham wrote:
</span><br>
<span class="quotelev2">&gt;&gt;  Re: [OMPI devel] RFC: sm Latency In the recvi function, do you first try to
</span><br>
<span class="quotelev2">&gt;&gt; match off the unexpected list before you try and match data in the fifo&#185;s?
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev1">&gt; Within the proposed approach, a variety of things are possible.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Within the specific code I've put back so far, I happen to check the
</span><br>
<span class="quotelev1">&gt; unexpected list.  If it has something on it, the &quot;immediate&quot; receive reverts
</span><br>
<span class="quotelev1">&gt; to the traditional code path.  If the unexpected list is empty, I proceed on
</span><br>
<span class="quotelev1">&gt; to the FIFO.  Again, that's just how the code works that I've put back so far
</span><br>
<span class="quotelev1">&gt; to the workspace mentioned in the RFC.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can let me know why you ask and what behavior you recommend.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Again, to be quite honest, a lot of my interest here is motivated by
</span><br>
<span class="quotelev1">&gt; (ping-pong style) benchmarks.  I feel dirty just admitting that, but then I
</span><br>
<span class="quotelev1">&gt; remind myself of all the reports I see of people getting really bad latencies
</span><br>
<span class="quotelev1">&gt; using OMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5278/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5279.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi] missing symbols?"</a>
<li><strong>Previous message:</strong> <a href="5277.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>In reply to:</strong> <a href="5277.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
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
