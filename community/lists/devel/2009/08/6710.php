<?
$subject_val = "Re: [OMPI devel] RFC: convert send to ssend";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 24 15:30:29 2009" -->
<!-- isoreceived="20090824193029" -->
<!-- sent="Mon, 24 Aug 2009 15:30:23 -0400" -->
<!-- isosent="20090824193023" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: convert send to ssend" -->
<!-- id="64C1C582-F3D7-4109-9A48-453D239BE303_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CD0096DA-C6FE-4CF5-8D12-508EDE1E26B4_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: convert send to ssend<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-24 15:30:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6711.php">George Bosilca: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Previous message:</strong> <a href="6709.php">George Bosilca: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>In reply to:</strong> <a href="6709.php">George Bosilca: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6711.php">George Bosilca: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Reply:</strong> <a href="6711.php">George Bosilca: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 24, 2009, at 2:26 PM, George Bosilca wrote:
<br>
<p><span class="quotelev2">&gt; &gt; My point is that this is a fairly trivial-to-implement feature.  It
</span><br>
<span class="quotelev2">&gt; &gt; can even be done in a way that doesn't impact performance at all
</span><br>
<span class="quotelev2">&gt; &gt; (default to compile out).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is more trivial than this: mpirun -np 2 --mca
</span><br>
<span class="quotelev1">&gt; btl_tcp_rndv_eager_limit 0 --mca btl_tcp_eager_limit 72  --bynode ./
</span><br>
<span class="quotelev1">&gt; NPmpi ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>You would have a user do that rather than
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca mpi_force_ssend 1 -np 2 --bynode ./NPmpi
<br>
<p>?
<br>
<p>I'm an OMPI implementor and I'll never remember that the TCP BTL  
<br>
requires *2* eager limits, much less what their values are.  :-)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6711.php">George Bosilca: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Previous message:</strong> <a href="6709.php">George Bosilca: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>In reply to:</strong> <a href="6709.php">George Bosilca: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6711.php">George Bosilca: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Reply:</strong> <a href="6711.php">George Bosilca: "Re: [OMPI devel] RFC: convert send to ssend"</a>
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
