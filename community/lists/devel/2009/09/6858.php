<?
$subject_val = "Re: [OMPI devel] MPIR_Breakpoint visibility";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 21 09:18:13 2009" -->
<!-- isoreceived="20090921131813" -->
<!-- sent="Mon, 21 Sep 2009 09:18:08 -0400" -->
<!-- isosent="20090921131808" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPIR_Breakpoint visibility" -->
<!-- id="40727A98-A300-407D-81E4-ED7797F27468_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CBB9D0B0-1F5D-4C10-8F75-7CF777D24B3E_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPIR_Breakpoint visibility<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-21 09:18:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6859.php">Terry Dontje: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
<li><strong>Previous message:</strong> <a href="6857.php">Ralph Castain: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
<li><strong>In reply to:</strong> <a href="6857.php">Ralph Castain: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6859.php">Terry Dontje: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Does declspec matter for executables?  (I don't recall)
<br>
<p>On Sep 21, 2009, at 9:15 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I see it declared &quot;extern&quot; in orte/tools/orterun/debuggers.h, but not
</span><br>
<span class="quotelev1">&gt; DECLSPEC'd
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW: LANL uses intel compilers + totalview on a regular basis, and I
</span><br>
<span class="quotelev1">&gt; have yet to hear of an issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 21, 2009, at 7:03 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I was kind of amazed no one else managed to run into this but it was
</span><br>
<span class="quotelev2">&gt; &gt; brought to my attention that compiling OMPI with Intel compilers and
</span><br>
<span class="quotelev2">&gt; &gt; visibility on that the MPIR_Breakpoint symbol was not being
</span><br>
<span class="quotelev2">&gt; &gt; exposed.  I am assuming this is due to MPIR_Breakpoint not being
</span><br>
<span class="quotelev2">&gt; &gt; ORTE or OMPI_DECLSPEC'd
</span><br>
<span class="quotelev2">&gt; &gt; Do others agree or am I missing something obvious here?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Interestingly enough, it doesn't look like gcc, pgi, pathscale or
</span><br>
<span class="quotelev2">&gt; &gt; sun compilers are hiding the MPIR_Breakpoint symbol.
</span><br>
<span class="quotelev2">&gt; &gt; --td
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6859.php">Terry Dontje: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
<li><strong>Previous message:</strong> <a href="6857.php">Ralph Castain: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
<li><strong>In reply to:</strong> <a href="6857.php">Ralph Castain: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6859.php">Terry Dontje: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
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
