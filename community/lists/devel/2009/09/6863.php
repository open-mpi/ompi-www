<?
$subject_val = "Re: [OMPI devel] MPIR_Breakpoint visibility";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 21 10:58:30 2009" -->
<!-- isoreceived="20090921145830" -->
<!-- sent="Mon, 21 Sep 2009 10:58:24 -0400" -->
<!-- isosent="20090921145824" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPIR_Breakpoint visibility" -->
<!-- id="2EB40ACE-F48E-450D-91E4-53A3C5159ABD_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="DE60E2F2-1456-491B-9C6E-3B59120A2434_at_lanl.gov" -->
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
<strong>Date:</strong> 2009-09-21 10:58:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6864.php">Ralf Wildenhues: "Re: [OMPI devel] Dynamic languages, dlopen() issues, and symbol visibility of libtool 	ltdl API in current trunk"</a>
<li><strong>Previous message:</strong> <a href="6862.php">Samuel K. Gutierrez: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
<li><strong>In reply to:</strong> <a href="6862.php">Samuel K. Gutierrez: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6865.php">Samuel K. Gutierrez: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
<li><strong>Reply:</strong> <a href="6865.php">Samuel K. Gutierrez: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you more precisely define &quot;not working properly&quot;?
<br>
<p>On Sep 21, 2009, at 10:26 AM, Samuel K. Gutierrez wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; According to our TotalView person, PGI and Intel versions of OMPI
</span><br>
<span class="quotelev1">&gt; 1.3.3 are not working properly.  She noted that 1.2.8 and 1.3.2 work
</span><br>
<span class="quotelev1">&gt; fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel K. Gutierrez
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 21, 2009, at 7:19 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I see it declared &quot;extern&quot; in orte/tools/orterun/debuggers.h, but
</span><br>
<span class="quotelev3">&gt; &gt;&gt; not DECLSPEC'd
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; FWIW: LANL uses intel compilers + totalview on a regular basis, and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have yet to hear of an issue.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; It actually will work if you attach to the job or if you are not
</span><br>
<span class="quotelev2">&gt; &gt; relying on the MPIR_Breakpoint to actually stop execution.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --td
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Sep 21, 2009, at 7:03 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I was kind of amazed no one else managed to run into this but it
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; was brought to my attention that compiling OMPI with Intel
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; compilers and visibility on that the MPIR_Breakpoint symbol was
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; not being exposed. I am assuming this is due to MPIR_Breakpoint
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; not being ORTE or OMPI_DECLSPEC'd
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Do others agree or am I missing something obvious here?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Interestingly enough, it doesn't look like gcc, pgi, pathscale or
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; sun compilers are hiding the MPIR_Breakpoint symbol.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --td
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="6864.php">Ralf Wildenhues: "Re: [OMPI devel] Dynamic languages, dlopen() issues, and symbol visibility of libtool 	ltdl API in current trunk"</a>
<li><strong>Previous message:</strong> <a href="6862.php">Samuel K. Gutierrez: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
<li><strong>In reply to:</strong> <a href="6862.php">Samuel K. Gutierrez: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6865.php">Samuel K. Gutierrez: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
<li><strong>Reply:</strong> <a href="6865.php">Samuel K. Gutierrez: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
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
