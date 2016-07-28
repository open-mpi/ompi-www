<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re:  portable_platform.h copies";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  6 09:50:12 2013" -->
<!-- isoreceived="20131106145012" -->
<!-- sent="Wed, 6 Nov 2013 14:48:42 +0000" -->
<!-- isosent="20131106144842" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re:  portable_platform.h copies" -->
<!-- id="CE9FA47D.15550%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="88C1F1D3-921B-40B2-B3DA-185CCB6AECFF_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re:  portable_platform.h copies<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-06 09:48:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13203.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re:  portable_platform.h copies"</a>
<li><strong>Previous message:</strong> <a href="13201.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] portable_platform.h copies"</a>
<li><strong>In reply to:</strong> <a href="13201.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] portable_platform.h copies"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13203.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re:  portable_platform.h copies"</a>
<li><strong>Reply:</strong> <a href="13203.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re:  portable_platform.h copies"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/6/13 7:44 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;I looked at that, too -- I think the only reason to have 2 files is that
</span><br>
<span class="quotelev1">&gt;mpi_portable_platform.h is included by mpi.h (its used for knowing how to
</span><br>
<span class="quotelev1">&gt;define __mpi_interface_deprecated__ in mpi.h), and is therefore
</span><br>
<span class="quotelev1">&gt;installed.  opal_portable_platform.h is not installed.
</span><br>
<p>Yeah, I noticed that.  However, I'm not sure that's the best way to do
<br>
that.  First, build-time symlinks are good.  Second, I'd prefer always
<br>
installing openmpi/opal/opal_portable_platform.h over having two copies of
<br>
the same file in the source tree, if symlinks don't work.  Hence the
<br>
question...
<br>
<p>Brian
<br>
<p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13203.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re:  portable_platform.h copies"</a>
<li><strong>Previous message:</strong> <a href="13201.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] portable_platform.h copies"</a>
<li><strong>In reply to:</strong> <a href="13201.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] portable_platform.h copies"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13203.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re:  portable_platform.h copies"</a>
<li><strong>Reply:</strong> <a href="13203.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re:  portable_platform.h copies"</a>
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
