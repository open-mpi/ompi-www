<?
$subject_val = "Re: [OMPI devel] Fixes to OpenMPI-1.4.2 for PGI compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 20 13:15:09 2010" -->
<!-- isoreceived="20100820171509" -->
<!-- sent="Fri, 20 Aug 2010 10:15:05 -0700" -->
<!-- isosent="20100820171505" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fixes to OpenMPI-1.4.2 for PGI compilers" -->
<!-- id="A245A018-DAA8-48F1-A479-C6A66976717E_at_usgs.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="61780A89-CA4E-450C-8D24-66BB87AAB1B0_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fixes to OpenMPI-1.4.2 for PGI compilers<br>
<strong>From:</strong> Larry Baker (<em>baker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-20 13:15:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8305.php">Ralf Wildenhues: "Re: [OMPI devel] Fixes to OpenMPI-1.4.2 for PGI compilers"</a>
<li><strong>Previous message:</strong> <a href="8303.php">Larry Baker: "Re: [OMPI devel] [Open MPI] #2538: PGI compiler issues"</a>
<li><strong>In reply to:</strong> <a href="8302.php">Jeff Squyres: "Re: [OMPI devel] Fixes to OpenMPI-1.4.2 for PGI compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8305.php">Ralf Wildenhues: "Re: [OMPI devel] Fixes to OpenMPI-1.4.2 for PGI compilers"</a>
<li><strong>Reply:</strong> <a href="8305.php">Ralf Wildenhues: "Re: [OMPI devel] Fixes to OpenMPI-1.4.2 for PGI compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>Without the 1.4.2 fix in configure to correctly parse the PGI version  
<br>
no. (the same fix you have in 1.5rc5), I'm pretty sure the make of  
<br>
1.4.2 fails for PGI 10.x.  Also, I think the inline assembly of atomic  
<br>
instructions might not be correct for the C++ version of the library  
<br>
without the other fix in configure to hard-code disabling that feature  
<br>
for PGI.
<br>
<p>I don't know anything about Libtool, like where it comes from, which  
<br>
pieces of OpenMPI come from Libtool, and, probably more significant,  
<br>
how those pieces might have been modified when they were incorporated  
<br>
into OpenMPI.  The fixes to configure and libtool.m4 that I sent seem  
<br>
to already be well known.  (They were passed on to me when I fixed  
<br>
them while installing netCDF.) I'm happy to report bugs and fixes to  
<br>
the developers of the code I use.  I really have to leave it up to  
<br>
them to decide whether to pass them on to their upstream providers.
<br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p>On Aug 20, 2010, at 8:24 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Aug 17, 2010, at 9:50 PM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I patched OpenMPI 1.4.2 to fix some problems/warnings when using the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PGI compilers.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FWIW, if there are fixes suitable for upstream Libtool in your  
</span><br>
<span class="quotelev2">&gt;&gt; changes,
</span><br>
<span class="quotelev2">&gt;&gt; we would be glad if you could send them as bug reports or even  
</span><br>
<span class="quotelev2">&gt;&gt; 'diff -u'
</span><br>
<span class="quotelev2">&gt;&gt; patches to the bug-libtool at gnu.org list.  Line numbers don't help
</span><br>
<span class="quotelev2">&gt;&gt; because they change too quickly, and issues might have been fixed  
</span><br>
<span class="quotelev2">&gt;&gt; in the
</span><br>
<span class="quotelev2">&gt;&gt; git version of Libtool already.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, that would be great -- would you mind submitting these upstream  
</span><br>
<span class="quotelev1">&gt; to Libtool?  We try to do that when I fix something so that it's  
</span><br>
<span class="quotelev1">&gt; there for us without patching in future releases.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the v1.4 fixes!  But given that you also submitted them  
</span><br>
<span class="quotelev1">&gt; for v1.5, since none of them are drastic correctness issues, we  
</span><br>
<span class="quotelev1">&gt; might well opt to only fix them in the v1.5 series.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8305.php">Ralf Wildenhues: "Re: [OMPI devel] Fixes to OpenMPI-1.4.2 for PGI compilers"</a>
<li><strong>Previous message:</strong> <a href="8303.php">Larry Baker: "Re: [OMPI devel] [Open MPI] #2538: PGI compiler issues"</a>
<li><strong>In reply to:</strong> <a href="8302.php">Jeff Squyres: "Re: [OMPI devel] Fixes to OpenMPI-1.4.2 for PGI compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8305.php">Ralf Wildenhues: "Re: [OMPI devel] Fixes to OpenMPI-1.4.2 for PGI compilers"</a>
<li><strong>Reply:</strong> <a href="8305.php">Ralf Wildenhues: "Re: [OMPI devel] Fixes to OpenMPI-1.4.2 for PGI compilers"</a>
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
