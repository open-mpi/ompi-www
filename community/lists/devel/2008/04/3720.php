<?
$subject_val = "Re: [OMPI devel] Change in btl/tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 18 12:56:11 2008" -->
<!-- isoreceived="20080418165611" -->
<!-- sent="Fri, 18 Apr 2008 18:56:05 +0200" -->
<!-- isosent="20080418165605" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Change in btl/tcp" -->
<!-- id="20080418165605.GK15077_at_ltw.loris.tv" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="48088E41.2070404_at_cs.indiana.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Change in btl/tcp<br>
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-18 12:56:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3721.php">Josh Hursey: "Re: [OMPI devel] Change in btl/tcp"</a>
<li><strong>Previous message:</strong> <a href="3719.php">Tim Prins: "Re: [OMPI devel] Change in btl/tcp"</a>
<li><strong>In reply to:</strong> <a href="3719.php">Tim Prins: "Re: [OMPI devel] Change in btl/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3721.php">Josh Hursey: "Re: [OMPI devel] Change in btl/tcp"</a>
<li><strong>Reply:</strong> <a href="3721.php">Josh Hursey: "Re: [OMPI devel] Change in btl/tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Apr 18, 2008 at 08:04:17AM -0400, Tim Prins wrote:
<br>
<p><span class="quotelev1">&gt; Hi Adrian,
</span><br>
<p>Hi!
<br>
<p><span class="quotelev1">&gt; After this change, I am getting a lot of errors of the form:
</span><br>
<span class="quotelev1">&gt; [sif2][[12854,1],9][btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] 
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp_frag_recv: readv failed: Connection reset by
</span><br>
<span class="quotelev1">&gt; peer (104)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See for instance: <a href="http://www.open-mpi.org/mtt/index.php?do_redir=615">http://www.open-mpi.org/mtt/index.php?do_redir=615</a>
</span><br>
<p>That's weird. I've tried hello_c.c on about ten machines with different
<br>
network configurations, none of them showed any problems at all.
<br>
<p>Do you have a very special setup? And if need be, would it be possible
<br>
to debug on your machine?
<br>
<p><p><span class="quotelev1">&gt;From all MTT sites, this error only occurs on Odin and Sif. What's so
</span><br>
special with these clusters?
<br>
<p><span class="quotelev1">&gt; I have found this especially easy to reproduce if I run 16 processes all 
</span><br>
<span class="quotelev1">&gt; with just the tcp and self btls on the same machine, running the 
</span><br>
<span class="quotelev1">&gt; 'hello_c' program in the examples directory.
</span><br>
<p>Unfortunately, I can't reproduce it that way. If this is related to the
<br>
change, then it would mean that mca_btl_tcp_proc_accept() returns false,
<br>
either after the large loop or in mca_btl_tcp_endpoint_accept().
<br>
<p>Do you have the cycles to add some BTL_VERBOSE-lines to see where things
<br>
go wrong? Or even to step through with the debugger?
<br>
<p>If you want me to do it, I would provide you with my ssh key?
<br>
<p><p>Cheerio
<br>
<p><p><pre>
-- 
mail: adi_at_[hidden]  	<a href="http://adi.thur.de">http://adi.thur.de</a>	PGP/GPG: key via keyserver
Das Sterben wird nur halb so schlimm, rauchst du KIM.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3721.php">Josh Hursey: "Re: [OMPI devel] Change in btl/tcp"</a>
<li><strong>Previous message:</strong> <a href="3719.php">Tim Prins: "Re: [OMPI devel] Change in btl/tcp"</a>
<li><strong>In reply to:</strong> <a href="3719.php">Tim Prins: "Re: [OMPI devel] Change in btl/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3721.php">Josh Hursey: "Re: [OMPI devel] Change in btl/tcp"</a>
<li><strong>Reply:</strong> <a href="3721.php">Josh Hursey: "Re: [OMPI devel] Change in btl/tcp"</a>
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
