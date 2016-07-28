<?
$subject_val = "Re: [OMPI devel] RFC: convert send to ssend";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 24 16:32:00 2009" -->
<!-- isoreceived="20090824203200" -->
<!-- sent="Mon, 24 Aug 2009 16:31:51 -0400" -->
<!-- isosent="20090824203151" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: convert send to ssend" -->
<!-- id="F8F6A562-A714-4C83-9813-B4BD3C97BFAB_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="64C1C582-F3D7-4109-9A48-453D239BE303_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-24 16:31:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6712.php">George Bosilca: "Re: [OMPI devel] New frameworks and contribs in the trunk"</a>
<li><strong>Previous message:</strong> <a href="6710.php">Jeff Squyres: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>In reply to:</strong> <a href="6710.php">Jeff Squyres: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6714.php">Patrick Geoffray: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We spent more time over emails on this thread than the time required  
<br>
to write the patch. As apparently I'm the only one concerned about  
<br>
what we have in our code base or the only one that do not perceive the  
<br>
usefulness of such a feature, I belong to an ignorable minority.
<br>
<p>As long as you don't make it compile by default, please ignore my  
<br>
rambling.
<br>
<p>On Aug 24, 2009, at 15:30 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Aug 24, 2009, at 2:26 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; My point is that this is a fairly trivial-to-implement feature.  It
</span><br>
<span class="quotelev3">&gt;&gt; &gt; can even be done in a way that doesn't impact performance at all
</span><br>
<span class="quotelev3">&gt;&gt; &gt; (default to compile out).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It is more trivial than this: mpirun -np 2 --mca
</span><br>
<span class="quotelev2">&gt;&gt; btl_tcp_rndv_eager_limit 0 --mca btl_tcp_eager_limit 72  --bynode ./
</span><br>
<span class="quotelev2">&gt;&gt; NPmpi ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You would have a user do that rather than
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   mpirun --mca mpi_force_ssend 1 -np 2 --bynode ./NPmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm an OMPI implementor and I'll never remember that the TCP BTL  
</span><br>
<span class="quotelev1">&gt; requires *2* eager limits, much less what their values are.  :-)
</span><br>
<p>My version is for free, it doesn't require _any_ modification in the  
<br>
source code and no long term maintenance. In fact, what I'm trying to  
<br>
say it's that we already have such a feature, except it doesn't have a  
<br>
cool name (mpi_force_ssend) and it is slightly PML dependent.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6712.php">George Bosilca: "Re: [OMPI devel] New frameworks and contribs in the trunk"</a>
<li><strong>Previous message:</strong> <a href="6710.php">Jeff Squyres: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>In reply to:</strong> <a href="6710.php">Jeff Squyres: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6714.php">Patrick Geoffray: "Re: [OMPI devel] RFC: convert send to ssend"</a>
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
