<?
$subject_val = "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 25 09:05:00 2015" -->
<!-- isoreceived="20150825130500" -->
<!-- sent="Tue, 25 Aug 2015 15:04:54 +0200" -->
<!-- isosent="20150825130454" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*" -->
<!-- id="55DC67F6.60301_at_tu-dresden.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAkFZ5sfGab1x1XScWSMMw92JFKSYmPXh9hVj6wTYQk4MdaRpg_at_mail.gmail.com" -->
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
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-25 09:04:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17844.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mca_mtl_psm and java"</a>
<li><strong>Previous message:</strong> <a href="17842.php">Gilles Gouaillardet: "[OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<li><strong>In reply to:</strong> <a href="17842.php">Gilles Gouaillardet: "[OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17848.php">George Bosilca: "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<li><strong>Reply:</strong> <a href="17848.php">George Bosilca: "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 08/25/2015 02:44 PM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ran some basic tests with IPM profiler-like
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/nerscadmin/IPM">https://github.com/nerscadmin/IPM</a> and found that when fortran calls an
</span><br>
<span class="quotelev1">&gt; mpi subroutine, this is accounted twice.
</span><br>
<span class="quotelev1">&gt; IPM defines both MPI_* subroutines and their fortran mpi_*_ counterpart.
</span><br>
<span class="quotelev1">&gt; since the ompi fortran calls the MPI_* symbol (and not the PMPI_* one), and
</span><br>
<span class="quotelev1">&gt; IPM does nothing to prevent double accounting, all subroutines are
</span><br>
<span class="quotelev1">&gt; accounted twice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; what is the rationale for calling MPI_* from fortran instead of PMPI_* ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; basically, I can see three options
</span><br>
<span class="quotelev1">&gt; 1. we do nothing, this is an IPM problem, not an Open MPI one
</span><br>
<span class="quotelev1">&gt; 2. we change ompi to call the PMPI_* symbols
</span><br>
<span class="quotelev1">&gt; 3. we add a configure option to call PMPI_* symbols instead of the MPI_*
</span><br>
<span class="quotelev1">&gt; ones
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; any thoughts ?
</span><br>
<p>One more datapoint, also from a monitor tool (Score-P, as some of you 
<br>
know): The Open SHMEM part of Open MPI also calls the MPI interface, not 
<br>
the PMPI. That may result in performance data from MPI calls in SHMEM 
<br>
applications, which seems weird too.
<br>
<p>Bert
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Dipl.-Inf. Bert Wesarg
wiss. Mitarbeiter
Technische Universit&#228;t Dresden
Zentrum f&#252;r Informationsdienste und Hochleistungsrechnen (ZIH)
01062 Dresden
Tel.: +49 (351) 463-42451
Fax: +49 (351) 463-37773
E-Mail: bert.wesarg_at_[hidden]

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17843/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17844.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mca_mtl_psm and java"</a>
<li><strong>Previous message:</strong> <a href="17842.php">Gilles Gouaillardet: "[OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<li><strong>In reply to:</strong> <a href="17842.php">Gilles Gouaillardet: "[OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17848.php">George Bosilca: "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<li><strong>Reply:</strong> <a href="17848.php">George Bosilca: "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
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
