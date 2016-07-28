<?
$subject_val = "Re: [OMPI devel] Open MPI 1.8: link problem when Fortran+C+Platform LSF";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 16 16:33:07 2015" -->
<!-- isoreceived="20150116213307" -->
<!-- sent="Fri, 16 Jan 2015 21:33:05 +0000" -->
<!-- isosent="20150116213305" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI 1.8: link problem when Fortran+C+Platform LSF" -->
<!-- id="DFD36FE9-41C0-4CDB-AB9E-2154BEB2738C_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="d5caeccf-2c65-4f37-8f03-cc39af18d255_at_HUB2.rwth-ad.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open MPI 1.8: link problem when Fortran+C+Platform LSF<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-16 16:33:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16797.php">Adrian Reber: "[OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<li><strong>Previous message:</strong> <a href="16795.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi master, libfabric and static libraries"</a>
<li><strong>In reply to:</strong> <a href="16733.php">Paul Kapinos: "Re: [OMPI devel] Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As usual for this thread, a bunch of time elapsed.  Sorry for the delay!  :-(
<br>
<p>FWIW: --disable-dlopen does 2 things:
<br>
<p>1. Disables the dlopen code in Open MPI (i.e., it won't load plugins)
<br>
2. Slurps all plugins into libmpi.so (and friends)
<br>
<p>The --disable-mca-dso switch only does #2.  So just FYI: you probably only need the --disable-dlopen option.
<br>
<p><p><span class="quotelev1">&gt; On Jan 5, 2015, at 2:05 PM, Paul Kapinos &lt;kapinos_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Recap:
</span><br>
<span class="quotelev1">&gt; 1) - the error is related to configure with '--disable-dlopen --disable-mca-dso'
</span><br>
<span class="quotelev1">&gt; 2) - the error vanishes when added   '-Wl,--as-needed' to the link line
</span><br>
<span class="quotelev1">&gt; 3) - the error is not special to any compiler or version
</span><br>
<span class="quotelev1">&gt; 4) - the error is not related to LSF but linking with these libs just shut down it due to some symbols mess
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, I'm not really sure that (2) is the true workaround, or just starts some more library deep search and binds to LSF libs linked in somewhere in the bush.
</span><br>
<p>Here's the description of --as-needed from ld(1):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--as-needed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--no-as-needed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This option affects ELF DT_NEEDED tags for dynamic libraries
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mentioned on the command line after the --as-needed option.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Normally the linker will add a DT_NEEDED tag for each dynamic
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;library mentioned on the command line, regardless of whether the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;library is actually needed or not.  --as-needed causes a DT_NEEDED
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tag to only be emitted for a library that satisfies an undefined
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;symbol reference from a regular object file or, if the library is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;not found in the DT_NEEDED lists of other libraries linked up to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;that point, an undefined symbol reference from another dynamic
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;library.  --no-as-needed restores the default behaviour.
<br>
<p>This doesn't feel like the correct solution, either.
<br>
<p>Here's a web page that may help:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.technovelty.org/c/relocation-truncated-to-fit-wtf.html">https://www.technovelty.org/c/relocation-truncated-to-fit-wtf.html</a>
<br>
<p>It describes what the &quot;... unresolvable R_X86_64_PC32 relocation against symbol ...&quot; error actually means.
<br>
<p>In short: do you have giant amounts of static data in your application?  E.g., giant common blocks, or giant arrays on the stack (not heap)?  If so, that page suggests the -m&lt;model&gt; option to gcc.  
<br>
<p>It may also be that -fPIC is sufficient.  I don't fully understand the description of -fPIC in gcc(1), but it sounds like when OMPI's plugins are slurped into libmpi.so (and libopen-rte.so and libopen-pal.so), that increases the code size of your executable such that jumps to some symbols may be out of 32 bit addressing range.
<br>
<p>However, when you *don't* slurp in all of OMPI's plugins, libmpi.so (and friends) are considerably smaller, so the executable code generated by the compiler is significantly smaller, and therefore 32 bit addressable jumps are sufficient.
<br>
<p>Note that when OMPI dlopen's its plugins at run time, that code is jumped to via function pointer through the Global Offset Table (GOT).  And that *sounds* kinda like what the description of -fPIC in gcc(1) says.  But I'm really not sure.
<br>
<p>My takeaways here:
<br>
<p>1. Every time I think I understand linkers, I find out that I don't know anything about linkers.
<br>
<p>2. You should investigate -m&lt;model&gt; in gcc(1) (there *may* be a performance penalty associated with this, but some of the text in gcc(1) looks to be fairly ancient, so modern x86_64 chips may or may not have this penalty).  
<br>
<p>3. You should also investigate -fPIC.
<br>
<p>4. If the app has giant stack/common blocks, perhaps it also would be sufficient to change those to allocate those data blocks from the heap.
<br>
<p>Hope that helps!
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
<li><strong>Next message:</strong> <a href="16797.php">Adrian Reber: "[OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<li><strong>Previous message:</strong> <a href="16795.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi master, libfabric and static libraries"</a>
<li><strong>In reply to:</strong> <a href="16733.php">Paul Kapinos: "Re: [OMPI devel] Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
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
