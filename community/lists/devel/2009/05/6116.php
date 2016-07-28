<?
$subject_val = "Re: [OMPI devel] faster autogen.sh";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 10:44:09 2009" -->
<!-- isoreceived="20090527144409" -->
<!-- sent="Wed, 27 May 2009 10:22:40 -0400" -->
<!-- isosent="20090527142240" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] faster autogen.sh" -->
<!-- id="997A1155-D335-4AC5-A9D6-01F986302E7C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20090527041129.GA30232_at_gmx.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] faster autogen.sh<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-27 10:22:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6117.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21295"</a>
<li><strong>Previous message:</strong> <a href="6115.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<li><strong>In reply to:</strong> <a href="6101.php">Ralf Wildenhues: "[OMPI devel] faster autogen.sh"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Done -- thanks!
<br>
<p>On May 27, 2009, at 12:11 AM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; As part of a shameless advertising move I suggest this patch.
</span><br>
<span class="quotelev1">&gt; While it won't make autogen.sh exactly fast, for me it shaves
</span><br>
<span class="quotelev1">&gt; half a minute off its runtime.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ralf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HACKING: recommend parallel automake 1.11 execution.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: HACKING
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- HACKING     (revision 21262)
</span><br>
<span class="quotelev1">&gt; +++ HACKING     (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -197,7 +197,15 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Running autogen.sh may take several minutes.  It's not very
</span><br>
<span class="quotelev1">&gt;     exciting to watch.  :-)
</span><br>
<span class="quotelev1">&gt; +   If you have an SMP system, say with 4 processors, be sure to use
</span><br>
<span class="quotelev1">&gt; +   Automake 1.11 or newer and enable threaded execution before  
</span><br>
<span class="quotelev1">&gt; running
</span><br>
<span class="quotelev1">&gt; +   autogen.sh (you can again put this in your shell startup files):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +          # For bash/sh:
</span><br>
<span class="quotelev1">&gt; +          export AUTOMAKE_JOBS=4
</span><br>
<span class="quotelev1">&gt; +          # For csh/tcsh:
</span><br>
<span class="quotelev1">&gt; +          set AUTOMAKE_JOBS 4
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     5a. You generally need to run autogen.sh whenever the top-level
</span><br>
<span class="quotelev1">&gt;         file &quot;configure.ac&quot; changes, or any files in the config/
</span><br>
<span class="quotelev1">&gt;         directory change (the config/ directory is where a lot of
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6117.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21295"</a>
<li><strong>Previous message:</strong> <a href="6115.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<li><strong>In reply to:</strong> <a href="6101.php">Ralf Wildenhues: "[OMPI devel] faster autogen.sh"</a>
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
