<?
$subject_val = "Re: [OMPI devel] 1.8.5rc2 released";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 22 18:18:45 2015" -->
<!-- isoreceived="20150422221845" -->
<!-- sent="Thu, 23 Apr 2015 00:18:31 +0200" -->
<!-- isosent="20150422221831" -->
<!-- name="Marco Atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.5rc2 released" -->
<!-- id="55381E37.3050209_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="E3B7E1AD-150C-4C97-8C10-60CD4B1E5801_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.5rc2 released<br>
<strong>From:</strong> Marco Atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-22 18:18:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17331.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.5rc2 released"</a>
<li><strong>Previous message:</strong> <a href="17329.php">Paul Hargrove: "[OMPI devel] 1.8.5rc2 testing report"</a>
<li><strong>In reply to:</strong> <a href="17324.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.5rc2 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17331.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.5rc2 released"</a>
<li><strong>Reply:</strong> <a href="17331.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.5rc2 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 4/22/2015 11:19 PM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Question:
</span><br>
<span class="quotelev2">&gt;&gt; what is the scope of the new two shared libs
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; usr/bin/cygmpi_usempi_ignore_tkr-0.dll
</span><br>
<span class="quotelev2">&gt;&gt; usr/bin/cygmpi_usempif08-0.dll
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; in comparison to previous
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; usr/bin/cygmpi_mpifh-2.dll
</span><br>
<span class="quotelev2">&gt;&gt; usr/bin/cygmpi_usempi-1.dll
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; already present in 1.8.4 ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All 4 were present in 1.8.4, too -- but it depends on your compiler which of the fortran libraries are compiled.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm guessing you upgraded your fortran compiler?
</span><br>
<p>eventually just from 4.8.x to 4.9x
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With an &quot;old&quot; fortran compiler, we build the &quot;old&quot; Open MPI &quot;use mpi&quot; Fortran bindings -- cygmpi_usempi-1.dll (which is basically some script-generated code).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With a &quot;new&quot; fortran compiler, we build the &quot;new&quot; Open MPI &quot;use mpi&quot; Fortran bindings -- cygmpi_usempi_ignore_tkr-0.dll.  This is the same Fortran bindings interface as the usempi library, but it uses a compiler extension (that was found by configure) that is effectively a (void*) equivalent in Fortran (the extension is called &quot;Ignore TKR&quot;).  The code that is compiled into the usempi_ignore_tkr library is quite a bit simpler, cleaner, and more inclusive than the generated code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The usempif08 library is the &quot;use mpi_f08&quot; bindings; it will only be built if you have a &quot;new&quot; Fortran compiler.
</span><br>
<p>It seems I will need to add 2 two Fortran sub packages ...
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17331.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.5rc2 released"</a>
<li><strong>Previous message:</strong> <a href="17329.php">Paul Hargrove: "[OMPI devel] 1.8.5rc2 testing report"</a>
<li><strong>In reply to:</strong> <a href="17324.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.5rc2 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17331.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.5rc2 released"</a>
<li><strong>Reply:</strong> <a href="17331.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.5rc2 released"</a>
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
