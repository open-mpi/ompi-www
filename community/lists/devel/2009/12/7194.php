<?
$subject_val = "Re: [OMPI devel] Question about ompi_proc_t";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  7 11:44:52 2009" -->
<!-- isoreceived="20091207164452" -->
<!-- sent="Mon, 7 Dec 2009 11:44:42 -0500" -->
<!-- isosent="20091207164442" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Question about ompi_proc_t" -->
<!-- id="416CE466-C2FE-42A0-B1C5-74D1E7EE5342_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="f6ed2720912070530w5ad26b67hb8aaa55d11afc02_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-12-07 11:44:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7195.php">Damien Guinier: "[OMPI devel] MPI_finalize with srun"</a>
<li><strong>Previous message:</strong> <a href="7193.php">Rainer Keller: "Re: [OMPI devel] Crash when using MPI_REAL8"</a>
<li><strong>In reply to:</strong> <a href="7192.php">Timothy Hayes: "Re: [OMPI devel] Question about ompi_proc_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7196.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Question about ompi_proc_t"</a>
<li><strong>Reply:</strong> <a href="7196.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Question about ompi_proc_t"</a>
<li><strong>Reply:</strong> <a href="7198.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Question about ompi_proc_t"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually your answer is correct. The endpoint is defined down below in the PML. In addition, I think only the MTL and the DR PML use it, all OB1 derivative completely ignore it.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Dec 7, 2009, at 08:30 , Timothy Hayes wrote:
<br>
<p><span class="quotelev1">&gt; Sorry, I think I read your question too quickly. Ignore me. :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2009/12/7 Timothy Hayes &lt;hayesti_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Is it not a forward definition and then defined in the PML components individually based on their own requirements?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2009/12/7 Pavel Shamis (Pasha) &lt;pashash_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the ompi_proc_t structure (ompi/proc/proc.h:54) we keep pointer to proc_pml - &quot;struct mca_pml_base_endpoint_t* proc_pml&quot; . I tired to find definition for &quot;struct mca_pml_base_endpoint_t&quot; , but I failed. Does somebody know where is it defined ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Pasha
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
<li><strong>Next message:</strong> <a href="7195.php">Damien Guinier: "[OMPI devel] MPI_finalize with srun"</a>
<li><strong>Previous message:</strong> <a href="7193.php">Rainer Keller: "Re: [OMPI devel] Crash when using MPI_REAL8"</a>
<li><strong>In reply to:</strong> <a href="7192.php">Timothy Hayes: "Re: [OMPI devel] Question about ompi_proc_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7196.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Question about ompi_proc_t"</a>
<li><strong>Reply:</strong> <a href="7196.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Question about ompi_proc_t"</a>
<li><strong>Reply:</strong> <a href="7198.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Question about ompi_proc_t"</a>
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
