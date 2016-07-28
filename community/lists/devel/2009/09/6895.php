<?
$subject_val = "Re: [OMPI devel] ompi-trunk: have MPI_REAL2 (if available) but missing MPI_COMPLEX4";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 26 11:04:15 2009" -->
<!-- isoreceived="20090926150415" -->
<!-- sent="Sat, 26 Sep 2009 12:04:11 -0300" -->
<!-- isosent="20090926150411" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi-trunk: have MPI_REAL2 (if available) but missing MPI_COMPLEX4" -->
<!-- id="e7ba66e40909260804r63f47797u682d7021c6b8e7e2_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="e7ba66e40909231233n3b1f9c1cwaed9b985a89fe65b_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ompi-trunk: have MPI_REAL2 (if available) but missing MPI_COMPLEX4<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-26 11:04:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6896.php">George Bosilca: "Re: [OMPI devel] ompi-trunk: have MPI_REAL2 (if available) but missing MPI_COMPLEX4"</a>
<li><strong>Previous message:</strong> <a href="6894.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>In reply to:</strong> <a href="6884.php">Lisandro Dalcin: "[OMPI devel] ompi-trunk: have MPI_REAL2 (if available) but missing MPI_COMPLEX4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6896.php">George Bosilca: "Re: [OMPI devel] ompi-trunk: have MPI_REAL2 (if available) but missing MPI_COMPLEX4"</a>
<li><strong>Reply:</strong> <a href="6896.php">George Bosilca: "Re: [OMPI devel] ompi-trunk: have MPI_REAL2 (if available) but missing MPI_COMPLEX4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff, about ticket #2032 ...
<br>
<p>I was not asking you to eliminate MPI_LOGICALx, just asked for
<br>
MPI_COMPLEX4 to be added...
<br>
<p>If you still think the MPI_LOGICALx should be removed from Open MPI,
<br>
what about rename the macros to OMPI_LOGICALx ? IMHO, the MPI_LOGICALx
<br>
(provided that Fortran compilers do support them) are an omission in
<br>
the 2.2 standard.
<br>
<p><p>On Wed, Sep 23, 2009 at 4:33 PM, Lisandro Dalcin &lt;dalcinl_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Disclaimer: I have almost no experience with Fortran, nor I'm needing
</span><br>
<span class="quotelev1">&gt; this, but anyway (perhaps just as a reminder for you) :-)...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Provided that:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) Open MPI exposes MPI_LOGICAL{1|2|4|8}, and they are not (AFAIK)
</span><br>
<span class="quotelev1">&gt; listed in the MPI standard (I cannot found them in MPI-2.2)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) The MPI-2.2 standard DO list MPI COMPLEX4 (at least in 2.2) ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; would it make sense that you add MPI_COMPLEX4 support ASAP, even
</span><br>
<span class="quotelev1">&gt; before full MPI-2.2 support?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Lisandro Dalc&#237;n
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
</span><br>
<span class="quotelev1">&gt; Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
</span><br>
<span class="quotelev1">&gt; Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
</span><br>
<span class="quotelev1">&gt; PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
</span><br>
<span class="quotelev1">&gt; Tel/Fax: +54-(0)342-451.1594
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Lisandro Dalc&#237;n
---------------
Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
Tel/Fax: +54-(0)342-451.1594
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6896.php">George Bosilca: "Re: [OMPI devel] ompi-trunk: have MPI_REAL2 (if available) but missing MPI_COMPLEX4"</a>
<li><strong>Previous message:</strong> <a href="6894.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>In reply to:</strong> <a href="6884.php">Lisandro Dalcin: "[OMPI devel] ompi-trunk: have MPI_REAL2 (if available) but missing MPI_COMPLEX4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6896.php">George Bosilca: "Re: [OMPI devel] ompi-trunk: have MPI_REAL2 (if available) but missing MPI_COMPLEX4"</a>
<li><strong>Reply:</strong> <a href="6896.php">George Bosilca: "Re: [OMPI devel] ompi-trunk: have MPI_REAL2 (if available) but missing MPI_COMPLEX4"</a>
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
