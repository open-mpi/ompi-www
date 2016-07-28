<?
$subject_val = "Re: [OMPI devel] MPIR_Breakpoint visibility";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 21 10:26:16 2009" -->
<!-- isoreceived="20090921142616" -->
<!-- sent="Mon, 21 Sep 2009 08:26:11 -0600" -->
<!-- isosent="20090921142611" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPIR_Breakpoint visibility" -->
<!-- id="DE60E2F2-1456-491B-9C6E-3B59120A2434_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4AB77D7D.9090406_at_sun.com" -->
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
<strong>From:</strong> Samuel K. Gutierrez (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-21 10:26:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6863.php">Jeff Squyres: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
<li><strong>Previous message:</strong> <a href="6861.php">Brice Goglin: "Re: [OMPI devel] detecting regcache_clean deadlocks in Open-MX"</a>
<li><strong>In reply to:</strong> <a href="6859.php">Terry Dontje: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6863.php">Jeff Squyres: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
<li><strong>Reply:</strong> <a href="6863.php">Jeff Squyres: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>According to our TotalView person, PGI and Intel versions of OMPI  
<br>
1.3.3 are not working properly.  She noted that 1.2.8 and 1.3.2 work  
<br>
fine.
<br>
<p>Thanks,
<br>
<p>Samuel K. Gutierrez
<br>
<p>On Sep 21, 2009, at 7:19 AM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I see it declared &quot;extern&quot; in orte/tools/orterun/debuggers.h, but  
</span><br>
<span class="quotelev2">&gt;&gt; not DECLSPEC'd
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FWIW: LANL uses intel compilers + totalview on a regular basis, and  
</span><br>
<span class="quotelev2">&gt;&gt; I have yet to hear of an issue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; It actually will work if you attach to the job or if you are not  
</span><br>
<span class="quotelev1">&gt; relying on the MPIR_Breakpoint to actually stop execution.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 21, 2009, at 7:03 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I was kind of amazed no one else managed to run into this but it  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was brought to my attention that compiling OMPI with Intel  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compilers and visibility on that the MPIR_Breakpoint symbol was  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not being exposed. I am assuming this is due to MPIR_Breakpoint  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not being ORTE or OMPI_DECLSPEC'd
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do others agree or am I missing something obvious here?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Interestingly enough, it doesn't look like gcc, pgi, pathscale or  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sun compilers are hiding the MPIR_Breakpoint symbol.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --td
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="6863.php">Jeff Squyres: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
<li><strong>Previous message:</strong> <a href="6861.php">Brice Goglin: "Re: [OMPI devel] detecting regcache_clean deadlocks in Open-MX"</a>
<li><strong>In reply to:</strong> <a href="6859.php">Terry Dontje: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6863.php">Jeff Squyres: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
<li><strong>Reply:</strong> <a href="6863.php">Jeff Squyres: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
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
