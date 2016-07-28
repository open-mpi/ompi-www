<?
$subject_val = "Re: [OMPI devel] MPIR_Breakpoint visibility";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 21 09:15:56 2009" -->
<!-- isoreceived="20090921131556" -->
<!-- sent="Mon, 21 Sep 2009 07:15:45 -0600" -->
<!-- isosent="20090921131545" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPIR_Breakpoint visibility" -->
<!-- id="CBB9D0B0-1F5D-4C10-8F75-7CF777D24B3E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4AB7799C.1050905_at_sun.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-21 09:15:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6858.php">Jeff Squyres: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
<li><strong>Previous message:</strong> <a href="6856.php">Brice Goglin: "Re: [OMPI devel] detecting regcache_clean deadlocks in Open-MX"</a>
<li><strong>In reply to:</strong> <a href="6855.php">Terry Dontje: "[OMPI devel] MPIR_Breakpoint visibility"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6858.php">Jeff Squyres: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
<li><strong>Reply:</strong> <a href="6858.php">Jeff Squyres: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
<li><strong>Reply:</strong> <a href="6859.php">Terry Dontje: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see it declared &quot;extern&quot; in orte/tools/orterun/debuggers.h, but not  
<br>
DECLSPEC'd
<br>
<p>FWIW: LANL uses intel compilers + totalview on a regular basis, and I  
<br>
have yet to hear of an issue.
<br>
<p>On Sep 21, 2009, at 7:03 AM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; I was kind of amazed no one else managed to run into this but it was  
</span><br>
<span class="quotelev1">&gt; brought to my attention that compiling OMPI with Intel compilers and  
</span><br>
<span class="quotelev1">&gt; visibility on that the MPIR_Breakpoint symbol was not being  
</span><br>
<span class="quotelev1">&gt; exposed.  I am assuming this is due to MPIR_Breakpoint not being  
</span><br>
<span class="quotelev1">&gt; ORTE or OMPI_DECLSPEC'd
</span><br>
<span class="quotelev1">&gt; Do others agree or am I missing something obvious here?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Interestingly enough, it doesn't look like gcc, pgi, pathscale or  
</span><br>
<span class="quotelev1">&gt; sun compilers are hiding the MPIR_Breakpoint symbol.
</span><br>
<span class="quotelev1">&gt; --td
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
<li><strong>Next message:</strong> <a href="6858.php">Jeff Squyres: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
<li><strong>Previous message:</strong> <a href="6856.php">Brice Goglin: "Re: [OMPI devel] detecting regcache_clean deadlocks in Open-MX"</a>
<li><strong>In reply to:</strong> <a href="6855.php">Terry Dontje: "[OMPI devel] MPIR_Breakpoint visibility"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6858.php">Jeff Squyres: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
<li><strong>Reply:</strong> <a href="6858.php">Jeff Squyres: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
<li><strong>Reply:</strong> <a href="6859.php">Terry Dontje: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
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
