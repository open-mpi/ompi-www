<?
$subject_val = "Re: [OMPI devel] openib btl build question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 21 16:44:35 2008" -->
<!-- isoreceived="20080521204435" -->
<!-- sent="Wed, 21 May 2008 16:43:49 -0400" -->
<!-- isosent="20080521204349" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib btl build question" -->
<!-- id="6C563673-8149-4D45-95E1-1B8CFCAA59BD_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.64.0805211636230.15227_at_marvin.we-be-smart.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openib btl build question<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-21 16:43:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3976.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3974.php">Brian W. Barrett: "Re: [OMPI devel] openib btl build question"</a>
<li><strong>In reply to:</strong> <a href="3974.php">Brian W. Barrett: "Re: [OMPI devel] openib btl build question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3986.php">Don Kerr: "Re: [OMPI devel] openib btl build question"</a>
<li><strong>Reply:</strong> <a href="3986.php">Don Kerr: "Re: [OMPI devel] openib btl build question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 21, 2008, at 4:37 PM, Brian W. Barrett wrote:
<br>
<p><span class="quotelev2">&gt;&gt; ptmalloc2 is not *required* by the openib btl.  But it is required on
</span><br>
<span class="quotelev2">&gt;&gt; Linux if you want to use the mpi_leave_pinned functionality.  I see
</span><br>
<span class="quotelev2">&gt;&gt; one function call to __pthread_initialize in the ptmalloc2 code -- it
</span><br>
<span class="quotelev2">&gt;&gt; *looks* like it's a function of glibc, but I don't know for sure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's actually more than that, it's just buried a bit.  There's a  
</span><br>
<span class="quotelev1">&gt; whole
</span><br>
<span class="quotelev1">&gt; bunch of thread-specific data stuff, which is wrapped so that  
</span><br>
<span class="quotelev1">&gt; different
</span><br>
<span class="quotelev1">&gt; thread packages can be used (although OMPI only supports pthreads).   
</span><br>
<span class="quotelev1">&gt; The
</span><br>
<span class="quotelev1">&gt; wrappers are in ptmalloc2/sysdeps/pthreads.
</span><br>
<p><p>Doh!  I didn't &quot;grep -r&quot;; my bad...
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3976.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3974.php">Brian W. Barrett: "Re: [OMPI devel] openib btl build question"</a>
<li><strong>In reply to:</strong> <a href="3974.php">Brian W. Barrett: "Re: [OMPI devel] openib btl build question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3986.php">Don Kerr: "Re: [OMPI devel] openib btl build question"</a>
<li><strong>Reply:</strong> <a href="3986.php">Don Kerr: "Re: [OMPI devel] openib btl build question"</a>
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
