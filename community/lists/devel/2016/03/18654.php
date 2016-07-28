<?
$subject_val = "Re: [OMPI devel] RFC: warn if running a debug build";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  1 23:17:53 2016" -->
<!-- isoreceived="20160302041753" -->
<!-- sent="Wed, 2 Mar 2016 13:17:54 +0900" -->
<!-- isosent="20160302041754" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: warn if running a debug build" -->
<!-- id="56D66972.6080202_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="B2DD0B77-12C2-4E80-B744-589C25056501_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: warn if running a debug build<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-01 23:17:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18655.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>Previous message:</strong> <a href="18653.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>In reply to:</strong> <a href="18653.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18655.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>Reply:</strong> <a href="18655.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In this case, should we only display the warning if debug build was 
<br>
implicit ?
<br>
for example, ./configure from git would display the warning (implicit 
<br>
debug),
<br>
but ./configure --enable-debug would not (explicit debug), regardless we 
<br>
built from git or a tarball
<br>
<p><p>On 3/2/2016 1:13 PM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; On Mar 1, 2016, at 10:06 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; what about *not* issuing this warning if OpenMPI is built from git ?
</span><br>
<span class="quotelev2">&gt;&gt; that would be friendlier for OMPI developers,
</span><br>
<span class="quotelev2">&gt;&gt; and should basically *not* affect endusers, since they would rather build OMPI from a tarball.
</span><br>
<span class="quotelev1">&gt; We're actually specifically trying to catch this case: someone builds from git, doesn't know (or care) that it's a debug build, and runs some performance tests with Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We figured that it would be sufficient for OMPI devs to set the env variable in their shell startup files to avoid the message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18655.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>Previous message:</strong> <a href="18653.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>In reply to:</strong> <a href="18653.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18655.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>Reply:</strong> <a href="18655.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: warn if running a debug build"</a>
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
