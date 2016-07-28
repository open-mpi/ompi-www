<?
$subject_val = "Re: [OMPI devel] 1.8.5rc2 released";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 22 17:19:50 2015" -->
<!-- isoreceived="20150422211950" -->
<!-- sent="Wed, 22 Apr 2015 21:19:48 +0000" -->
<!-- isosent="20150422211948" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.5rc2 released" -->
<!-- id="E3B7E1AD-150C-4C97-8C10-60CD4B1E5801_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="5537AA98.9000300_at_gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-22 17:19:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17325.php">Tom Wurgler: "[OMPI devel] Compile &quot;remark&quot; for Openmpi 1.8.4"</a>
<li><strong>Previous message:</strong> <a href="17323.php">Paul Hargrove: "[OMPI devel] powerpc64le support [1-line patch]"</a>
<li><strong>In reply to:</strong> <a href="17304.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5rc2 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17330.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5rc2 released"</a>
<li><strong>Reply:</strong> <a href="17330.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5rc2 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 22, 2015, at 10:05 AM, Marco Atzeri &lt;marco.atzeri_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Making all in mpi/fortran/use-mpi-f08
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory '/cygdrive/e/cyg_pub/devel/openmpi/openmpi-1.8.5rc2-1.x86_64/build/ompi/mpi/fortran/use-mpi-f08'
</span><br>
<span class="quotelev1">&gt;  FCLD     libmpi_usempif08.la
</span><br>
<span class="quotelev1">&gt; .libs/abort_f08.o: In function `mpi_abort_f08_':
</span><br>
<span class="quotelev1">&gt; /usr/src/debug/openmpi-1.8.5rc2-1/ompi/mpi/fortran/use-mpi-f08/abort_f08.F90:17: undefined reference to `ompi_abort_f'
</span><br>
<span class="quotelev1">&gt; /usr/src/debug/openmpi-1.8.5rc2-1/ompi/mpi/fortran/use-mpi-f08/abort_f08.F90:17:(.text+0xe): relocation truncated to fit: R_X86_64_PC32 against undefined symbol `ompi_abort_f'
</span><br>
<span class="quotelev1">&gt; .libs/accumulate_f08.o: In function `mpi_accumulate_f08_':
</span><br>
<span class="quotelev1">&gt; /usr/src/debug/openmpi-1.8.5rc2-1/ompi/mpi/fortran/use-mpi-f08/accumulate_f08.F90:28: undefined reference to `ompi_accumulate_f'
</span><br>
<p>Mmm.  That's a minor bummer -- we usually only linked the libompi_mpifh in the wrapper compiler, not here.  But I suspect this is not harmful to also link it here -- thanks for the patch.
<br>
<p><span class="quotelev1">&gt; Question:
</span><br>
<span class="quotelev1">&gt; what is the scope of the new two shared libs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; usr/bin/cygmpi_usempi_ignore_tkr-0.dll
</span><br>
<span class="quotelev1">&gt; usr/bin/cygmpi_usempif08-0.dll
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; in comparison to previous
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; usr/bin/cygmpi_mpifh-2.dll
</span><br>
<span class="quotelev1">&gt; usr/bin/cygmpi_usempi-1.dll
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; already present in 1.8.4 ?
</span><br>
<p>All 4 were present in 1.8.4, too -- but it depends on your compiler which of the fortran libraries are compiled.
<br>
<p>I'm guessing you upgraded your fortran compiler?
<br>
<p>With an &quot;old&quot; fortran compiler, we build the &quot;old&quot; Open MPI &quot;use mpi&quot; Fortran bindings -- cygmpi_usempi-1.dll (which is basically some script-generated code).  
<br>
<p>With a &quot;new&quot; fortran compiler, we build the &quot;new&quot; Open MPI &quot;use mpi&quot; Fortran bindings -- cygmpi_usempi_ignore_tkr-0.dll.  This is the same Fortran bindings interface as the usempi library, but it uses a compiler extension (that was found by configure) that is effectively a (void*) equivalent in Fortran (the extension is called &quot;Ignore TKR&quot;).  The code that is compiled into the usempi_ignore_tkr library is quite a bit simpler, cleaner, and more inclusive than the generated code.
<br>
<p>The usempif08 library is the &quot;use mpi_f08&quot; bindings; it will only be built if you have a &quot;new&quot; Fortran compiler.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17325.php">Tom Wurgler: "[OMPI devel] Compile &quot;remark&quot; for Openmpi 1.8.4"</a>
<li><strong>Previous message:</strong> <a href="17323.php">Paul Hargrove: "[OMPI devel] powerpc64le support [1-line patch]"</a>
<li><strong>In reply to:</strong> <a href="17304.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5rc2 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17330.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5rc2 released"</a>
<li><strong>Reply:</strong> <a href="17330.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5rc2 released"</a>
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
