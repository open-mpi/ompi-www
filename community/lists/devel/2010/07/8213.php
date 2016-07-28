<?
$subject_val = "Re: [OMPI devel] potential memory leak in mpi_type_create_struct_f()?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 23 07:12:52 2010" -->
<!-- isoreceived="20100723111252" -->
<!-- sent="Fri, 23 Jul 2010 07:13:31 -0400" -->
<!-- isosent="20100723111331" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] potential memory leak in mpi_type_create_struct_f()?" -->
<!-- id="7EF344A4-F8D4-41A1-BD7D-2C1FE2A48791_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1279883632.15370.4054.camel_at_B014522" -->
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
<strong>Subject:</strong> Re: [OMPI devel] potential memory leak in mpi_type_create_struct_f()?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-23 07:13:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8214.php">N.M. Maclaren: "Re: [OMPI devel] Weird problem with strace, and question about transfers"</a>
<li><strong>Previous message:</strong> <a href="8212.php">nadia.derbey: "[OMPI devel] potential memory leak in mpi_type_create_struct_f()?"</a>
<li><strong>In reply to:</strong> <a href="8212.php">nadia.derbey: "[OMPI devel] potential memory leak in mpi_type_create_struct_f()?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Be very, very careful here -- you might be inadvertantly volunteering to become a co-Fortran maintainer!  ;-)
<br>
<p>Good catch.  Can you commit a fix?  I assume this needs to go to both v1.4 and v1.5.
<br>
<p><p><p>On Jul 23, 2010, at 7:13 AM, nadia.derbey wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In ompi/mpi/f77/type_create_struct_f.c, routine
</span><br>
<span class="quotelev1">&gt; mpi_type_create_struct_f() mallocates c_type_old_array, but never frees
</span><br>
<span class="quotelev1">&gt; it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Nadia
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; nadia.derbey &lt;Nadia.Derbey_at_[hidden]&gt;
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
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8214.php">N.M. Maclaren: "Re: [OMPI devel] Weird problem with strace, and question about transfers"</a>
<li><strong>Previous message:</strong> <a href="8212.php">nadia.derbey: "[OMPI devel] potential memory leak in mpi_type_create_struct_f()?"</a>
<li><strong>In reply to:</strong> <a href="8212.php">nadia.derbey: "[OMPI devel] potential memory leak in mpi_type_create_struct_f()?"</a>
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
