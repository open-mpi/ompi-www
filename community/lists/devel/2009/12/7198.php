<?
$subject_val = "Re: [OMPI devel] Question about ompi_proc_t";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  8 04:18:34 2009" -->
<!-- isoreceived="20091208091834" -->
<!-- sent="Tue, 08 Dec 2009 11:18:26 +0200" -->
<!-- isosent="20091208091826" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pashash_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Question about ompi_proc_t" -->
<!-- id="4B1E19E2.8090807_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="416CE466-C2FE-42A0-B1C5-74D1E7EE5342_at_eecs.utk.edu" -->
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
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pashash_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-08 04:18:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7199.php">Sylvain Jeaugey: "Re: [OMPI devel] Crash when using MPI_REAL8"</a>
<li><strong>Previous message:</strong> <a href="7197.php">Ralph Castain: "Re: [OMPI devel] MPI_finalize with srun"</a>
<li><strong>In reply to:</strong> <a href="7194.php">George Bosilca: "Re: [OMPI devel] Question about ompi_proc_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7204.php">George Bosilca: "Re: [OMPI devel] Question about ompi_proc_t"</a>
<li><strong>Reply:</strong> <a href="7204.php">George Bosilca: "Re: [OMPI devel] Question about ompi_proc_t"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
Actually My original question was correct.
<br>
<p>In the ompi code base I found ONLY two places where we &quot;use&quot; the structure.
<br>
Actually we only assign values for the pointer in DR and CM PML:
<br>
<p>ompi/mca/pml/cm/pml_cm.c:145:        procs[i]-&gt;proc_pml = (struct 
<br>
mca_pml_base_endpoint_t*) endpoints[i];
<br>
ompi/mca/pml/dr/pml_dr.c:264:        procs[i]-&gt;proc_pml = (struct 
<br>
mca_pml_base_endpoint_t*) endpoint;
<br>
<p>I do not see any struct definiton/declaration mca_pml_base_endpoint_t in 
<br>
the OMPI code at all.
<br>
<p>But I do see the &quot;struct mca_pml_endpoint_t;&quot; declaration in pml.h. As 
<br>
well, I comment that says: &quot;A pointer to an mca_pml_endpoint_t is 
<br>
maintained on each ompi_proc_t&quot;. So it looks that the idea was to use 
<br>
use mca_pml_endpoint_t on the ompi_proc_t and not 
<br>
mca_pml_base_endpoint_t, is not it ?
<br>
<p>Thanks !
<br>
<p>Pasha
<br>
<p>George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Actually your answer is correct. The endpoint is defined down below in the PML. In addition, I think only the MTL and the DR PML use it, all OB1 derivative completely ignore it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 7, 2009, at 08:30 , Timothy Hayes wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Sorry, I think I read your question too quickly. Ignore me. :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2009/12/7 Timothy Hayes &lt;hayesti_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is it not a forward definition and then defined in the PML components individually based on their own requirements?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2009/12/7 Pavel Shamis (Pasha) &lt;pashash_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In the ompi_proc_t structure (ompi/proc/proc.h:54) we keep pointer to proc_pml - &quot;struct mca_pml_base_endpoint_t* proc_pml&quot; . I tired to find definition for &quot;struct mca_pml_base_endpoint_t&quot; , but I failed. Does somebody know where is it defined ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Pasha
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7199.php">Sylvain Jeaugey: "Re: [OMPI devel] Crash when using MPI_REAL8"</a>
<li><strong>Previous message:</strong> <a href="7197.php">Ralph Castain: "Re: [OMPI devel] MPI_finalize with srun"</a>
<li><strong>In reply to:</strong> <a href="7194.php">George Bosilca: "Re: [OMPI devel] Question about ompi_proc_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7204.php">George Bosilca: "Re: [OMPI devel] Question about ompi_proc_t"</a>
<li><strong>Reply:</strong> <a href="7204.php">George Bosilca: "Re: [OMPI devel] Question about ompi_proc_t"</a>
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
