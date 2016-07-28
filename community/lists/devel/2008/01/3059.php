<?
$subject_val = "Re: [OMPI devel] Trunk borked";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 28 09:39:10 2008" -->
<!-- isoreceived="20080128143910" -->
<!-- sent="Mon, 28 Jan 2008 09:38:36 -0500" -->
<!-- isosent="20080128143836" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk borked" -->
<!-- id="77F8BDB1-CE14-4321-A43E-A5E32941B569_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C3C33440.BF49%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk borked<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-28 09:38:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3060.php">Jeff Squyres: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>Previous message:</strong> <a href="3058.php">Adrian Knoth: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>In reply to:</strong> <a href="3057.php">Ralph H Castain: "[OMPI devel] Trunk borked"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Doh -- sorry about that.  r17282 removes the erroneous #if.
<br>
<p><p>On Jan 28, 2008, at 9:26 AM, Ralph H Castain wrote:
<br>
<p><span class="quotelev1">&gt; We seem to have a problem on the trunk this morning. I am building  
</span><br>
<span class="quotelev1">&gt; on a
</span><br>
<span class="quotelev1">&gt; platform with the following configuration:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with_threads=no
</span><br>
<span class="quotelev1">&gt; enable_dlopen=no
</span><br>
<span class="quotelev1">&gt; enable_pty_support=no
</span><br>
<span class="quotelev1">&gt; with_tm=/opt/PBS
</span><br>
<span class="quotelev1">&gt; LDFLAGS=-L/opt/PBS/lib64
</span><br>
<span class="quotelev1">&gt; with_openib=/opt/ofed
</span><br>
<span class="quotelev1">&gt; with_memory_manager=no
</span><br>
<span class="quotelev1">&gt; enable_mem_debug=yes
</span><br>
<span class="quotelev1">&gt; enable_mem_profile=no
</span><br>
<span class="quotelev1">&gt; enable_debug_symbols=yes
</span><br>
<span class="quotelev1">&gt; enable_binaries=yes
</span><br>
<span class="quotelev1">&gt; with_devel_headers=yes
</span><br>
<span class="quotelev1">&gt; enable_heterogeneous=no
</span><br>
<span class="quotelev1">&gt; enable_picky=yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The compile errors out in the OpenIB BTL with the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btl_openib_proc.c: In function `mca_btl_openib_proc_create':
</span><br>
<span class="quotelev1">&gt; btl_openib_proc.c:159: error: `i' undeclared (first use in this  
</span><br>
<span class="quotelev1">&gt; function)
</span><br>
<span class="quotelev1">&gt; btl_openib_proc.c:159: error: (Each undeclared identifier is  
</span><br>
<span class="quotelev1">&gt; reported only
</span><br>
<span class="quotelev1">&gt; once
</span><br>
<span class="quotelev1">&gt; btl_openib_proc.c:159: error: for each function it appears in.)
</span><br>
<span class="quotelev1">&gt; make[2]: *** [btl_openib_proc.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I look at the code, the problem is the following #if:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #if !defined(WORDS_BIGENDIAN) &amp;&amp; OMPI_ENABLE_HETEROGENEOUS_SUPPORT
</span><br>
<span class="quotelev1">&gt;    size_t i;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yet the code will ALWAYS use that variable to unpack all the ports. I
</span><br>
<span class="quotelev1">&gt; removed the #if to clear the problem, but before committing the  
</span><br>
<span class="quotelev1">&gt; change, I
</span><br>
<span class="quotelev1">&gt; wanted to ask why someone thought this test needed to be in the code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Should the entire loop unpacking all the ports be similarly  
</span><br>
<span class="quotelev1">&gt; protected, or
</span><br>
<span class="quotelev1">&gt; was the protection around the variable declaration simply an error?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3060.php">Jeff Squyres: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>Previous message:</strong> <a href="3058.php">Adrian Knoth: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>In reply to:</strong> <a href="3057.php">Ralph H Castain: "[OMPI devel] Trunk borked"</a>
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
