<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29651 - in trunk: config examples oshmem/include oshmem/tools/oshmem_info";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 11 15:22:33 2013" -->
<!-- isoreceived="20131111202233" -->
<!-- sent="Mon, 11 Nov 2013 20:22:18 +0000" -->
<!-- isosent="20131111202218" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29651 - in trunk: config examples oshmem/include oshmem/tools/oshmem_info" -->
<!-- id="CEA689D6.156E5%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6A3DDC3F-635A-401E-BD17-5B70FAAE30CF_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29651 - in trunk: config examples oshmem/include oshmem/tools/oshmem_info<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-11 15:22:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13236.php">Saliya Ekanayake: "[OMPI devel] Bug in MPI.MINLOC with Java binding"</a>
<li><strong>Previous message:</strong> <a href="13234.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29651 - in	trunk:	config examples	oshmem/include oshmem/tools/oshmem_info"</a>
<li><strong>In reply to:</strong> <a href="13233.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29651 - in trunk:	config examples	oshmem/include oshmem/tools/oshmem_info"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/11/13 12:49 PM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;More comments on this commit:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;- The Fortran, Java, and C++ MPI examples are now no longer build by
</span><br>
<span class="quotelev1">&gt;default.  Er... what happened there, and why?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;- Why are the oshmem examples in a separate target?  The point of the
</span><br>
<span class="quotelev1">&gt;previous makefile was that &quot;make&quot; (or &quot;make all&quot;) would build all
</span><br>
<span class="quotelev1">&gt;relevant examples -- including oshmem examples (if possible).
</span><br>
<p>On the good side of the patch, thanks for doing the right mojo to only
<br>
build the shmem examples if the shmem layer is enabled.
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
<li><strong>Next message:</strong> <a href="13236.php">Saliya Ekanayake: "[OMPI devel] Bug in MPI.MINLOC with Java binding"</a>
<li><strong>Previous message:</strong> <a href="13234.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29651 - in	trunk:	config examples	oshmem/include oshmem/tools/oshmem_info"</a>
<li><strong>In reply to:</strong> <a href="13233.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29651 - in trunk:	config examples	oshmem/include oshmem/tools/oshmem_info"</a>
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
