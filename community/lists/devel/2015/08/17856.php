<?
$subject_val = "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 25 20:39:53 2015" -->
<!-- isoreceived="20150826003953" -->
<!-- sent="Wed, 26 Aug 2015 00:39:50 +0000" -->
<!-- isosent="20150826003950" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*" -->
<!-- id="261B2E49-5213-4AF5-BC66-B58ACBDD99CF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJJpkWbnz4p-VMbBr41jG6HzSHirKqPB0USYyi7cYYdFv6Esg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-25 20:39:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17857.php">Gilles Gouaillardet: "Re: [OMPI devel] mca_mtl_psm and java"</a>
<li><strong>Previous message:</strong> <a href="17855.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] cosmetic misleading mpirun error message"</a>
<li><strong>In reply to:</strong> <a href="17848.php">George Bosilca: "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17876.php">Gilles Gouaillardet: "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<li><strong>Reply:</strong> <a href="17876.php">Gilles Gouaillardet: "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 25, 2015, at 11:03 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This seems to be the case only with the TKR interface. All the others are either calling the OMPI version directly (mpif-h), or are calling some other internal (or weak symbol function).
</span><br>
<p>Yes, those might need to be updated.  Not it!  (let's let the TKR interface die...)
<br>
<p>You're right about the mpif-h interface, though -- they call the PMPI versions of the functions (through weak symbols).
<br>
<p>However, our use of weak symbols might be confusing to the tool -- is it somehow intercepting our call from ompi_send_f() to PMPI_Send(), for example?  You might want to step through with a debugger to see what's happening, because the debugger should show the name of the symbol that is invoked in the call stack, even though the pointer in the source code may show you in &quot;MPI_Send()&quot; (remember: we compile the C code for our functions potential with #defines that turn MPI_Send into PMPI_Send, etc.).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17857.php">Gilles Gouaillardet: "Re: [OMPI devel] mca_mtl_psm and java"</a>
<li><strong>Previous message:</strong> <a href="17855.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] cosmetic misleading mpirun error message"</a>
<li><strong>In reply to:</strong> <a href="17848.php">George Bosilca: "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17876.php">Gilles Gouaillardet: "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<li><strong>Reply:</strong> <a href="17876.php">Gilles Gouaillardet: "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
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
