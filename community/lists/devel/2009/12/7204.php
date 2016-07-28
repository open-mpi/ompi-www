<?
$subject_val = "Re: [OMPI devel] Question about ompi_proc_t";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  8 12:06:10 2009" -->
<!-- isoreceived="20091208170610" -->
<!-- sent="Tue, 8 Dec 2009 12:05:56 -0500" -->
<!-- isosent="20091208170556" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Question about ompi_proc_t" -->
<!-- id="A448700C-98E9-44DC-A141-38763B30164D_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B1E19E2.8090807_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Question about ompi_proc_t<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-08 12:05:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7205.php">Jeff Squyres: "Re: [OMPI devel] Question about ompi_proc_t"</a>
<li><strong>Previous message:</strong> <a href="7203.php">Terry Dontje: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
<li><strong>In reply to:</strong> <a href="7198.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Question about ompi_proc_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7205.php">Jeff Squyres: "Re: [OMPI devel] Question about ompi_proc_t"</a>
<li><strong>Reply:</strong> <a href="7205.php">Jeff Squyres: "Re: [OMPI devel] Question about ompi_proc_t"</a>
<li><strong>Reply:</strong> <a href="7208.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Question about ompi_proc_t"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pasha,
<br>
<p>Both of these types (mca_pml_endpoint_t and mca_pml_base_endpoint_t) are meaningless, they can safely be replaced by void*. We have them clearly typed (but with just for the sake of understanding, so one can easily figure out what is supposed to be stored in this specific field. As such, we can remove one of them (mca_pml_base_endpoint_t) and use the other one (mca_pml_endpoint_t) everywhere.
<br>
<p>I wonder what is exactly the reason that drives your questions?
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><p>On Dec 8, 2009, at 04:18 , Pavel Shamis (Pasha) wrote:
<br>
<p><span class="quotelev1">&gt; George,
</span><br>
<span class="quotelev1">&gt; Actually My original question was correct.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the ompi code base I found ONLY two places where we &quot;use&quot; the structure.
</span><br>
<span class="quotelev1">&gt; Actually we only assign values for the pointer in DR and CM PML:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi/mca/pml/cm/pml_cm.c:145:        procs[i]-&gt;proc_pml = (struct mca_pml_base_endpoint_t*) endpoints[i];
</span><br>
<span class="quotelev1">&gt; ompi/mca/pml/dr/pml_dr.c:264:        procs[i]-&gt;proc_pml = (struct mca_pml_base_endpoint_t*) endpoint;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I do not see any struct definiton/declaration mca_pml_base_endpoint_t in the OMPI code at all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But I do see the &quot;struct mca_pml_endpoint_t;&quot; declaration in pml.h. As well, I comment that says: &quot;A pointer to an mca_pml_endpoint_t is maintained on each ompi_proc_t&quot;. So it looks that the idea was to use use mca_pml_endpoint_t on the ompi_proc_t and not mca_pml_base_endpoint_t, is not it ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks !
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pasha
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Actually your answer is correct. The endpoint is defined down below in the PML. In addition, I think only the MTL and the DR PML use it, all OB1 derivative completely ignore it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  george.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 7, 2009, at 08:30 , Timothy Hayes wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry, I think I read your question too quickly. Ignore me. :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2009/12/7 Timothy Hayes &lt;hayesti_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is it not a forward definition and then defined in the PML components individually based on their own requirements?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2009/12/7 Pavel Shamis (Pasha) &lt;pashash_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In the ompi_proc_t structure (ompi/proc/proc.h:54) we keep pointer to proc_pml - &quot;struct mca_pml_base_endpoint_t* proc_pml&quot; . I tired to find definition for &quot;struct mca_pml_base_endpoint_t&quot; , but I failed. Does somebody know where is it defined ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pasha
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<span class="quotelev3">&gt;&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7205.php">Jeff Squyres: "Re: [OMPI devel] Question about ompi_proc_t"</a>
<li><strong>Previous message:</strong> <a href="7203.php">Terry Dontje: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
<li><strong>In reply to:</strong> <a href="7198.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Question about ompi_proc_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7205.php">Jeff Squyres: "Re: [OMPI devel] Question about ompi_proc_t"</a>
<li><strong>Reply:</strong> <a href="7205.php">Jeff Squyres: "Re: [OMPI devel] Question about ompi_proc_t"</a>
<li><strong>Reply:</strong> <a href="7208.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Question about ompi_proc_t"</a>
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
