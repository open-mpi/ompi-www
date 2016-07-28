<?
$subject_val = "Re: [OMPI devel] ompi-trunk: have MPI_REAL2 (if available) but missing MPI_COMPLEX4";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 26 13:07:46 2009" -->
<!-- isoreceived="20090926170746" -->
<!-- sent="Sat, 26 Sep 2009 13:07:36 -0400" -->
<!-- isosent="20090926170736" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi-trunk: have MPI_REAL2 (if available) but missing MPI_COMPLEX4" -->
<!-- id="E0E5BCFE-90BC-4D96-90AD-4554C5906A0D_at_eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="e7ba66e40909260804r63f47797u682d7021c6b8e7e2_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-26 13:07:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6897.php">Lisandro Dalcin: "Re: [OMPI devel] ompi-trunk: have MPI_REAL2 (if available) but missing MPI_COMPLEX4"</a>
<li><strong>Previous message:</strong> <a href="6895.php">Lisandro Dalcin: "Re: [OMPI devel] ompi-trunk: have MPI_REAL2 (if available) but missing MPI_COMPLEX4"</a>
<li><strong>In reply to:</strong> <a href="6895.php">Lisandro Dalcin: "Re: [OMPI devel] ompi-trunk: have MPI_REAL2 (if available) but missing MPI_COMPLEX4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6897.php">Lisandro Dalcin: "Re: [OMPI devel] ompi-trunk: have MPI_REAL2 (if available) but missing MPI_COMPLEX4"</a>
<li><strong>Reply:</strong> <a href="6897.php">Lisandro Dalcin: "Re: [OMPI devel] ompi-trunk: have MPI_REAL2 (if available) but missing MPI_COMPLEX4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
These two issues are completely orthogonal.
<br>
<p>On one side, MPI_LOGICALx is not defined by the MPI standard but it is  
<br>
supported by several others MPI libraries and as it match a C type it  
<br>
is easy to implement.
<br>
<p>On the other side, MPI_COMPLEX4 is defined by the MPI standard as an  
<br>
optional datatype (MPI 2.2 page 451) which doesn't make it mandatory  
<br>
(sic!), is supported by few others MPI libraries but as it doesn't  
<br>
match any C type it is really difficult to implement.
<br>
<p>As far as I'm concerned the current behavior is correct, and there is  
<br>
no need to change it.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Sep 26, 2009, at 11:04 , Lisandro Dalcin wrote:
<br>
<p><span class="quotelev1">&gt; Jeff, about ticket #2032 ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was not asking you to eliminate MPI_LOGICALx, just asked for
</span><br>
<span class="quotelev1">&gt; MPI_COMPLEX4 to be added...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you still think the MPI_LOGICALx should be removed from Open MPI,
</span><br>
<span class="quotelev1">&gt; what about rename the macros to OMPI_LOGICALx ? IMHO, the MPI_LOGICALx
</span><br>
<span class="quotelev1">&gt; (provided that Fortran compilers do support them) are an omission in
</span><br>
<span class="quotelev1">&gt; the 2.2 standard.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Sep 23, 2009 at 4:33 PM, Lisandro Dalcin &lt;dalcinl_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Disclaimer: I have almost no experience with Fortran, nor I'm needing
</span><br>
<span class="quotelev2">&gt;&gt; this, but anyway (perhaps just as a reminder for you) :-)...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Provided that:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) Open MPI exposes MPI_LOGICAL{1|2|4|8}, and they are not (AFAIK)
</span><br>
<span class="quotelev2">&gt;&gt; listed in the MPI standard (I cannot found them in MPI-2.2)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) The MPI-2.2 standard DO list MPI COMPLEX4 (at least in 2.2) ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; would it make sense that you add MPI_COMPLEX4 support ASAP, even
</span><br>
<span class="quotelev2">&gt;&gt; before full MPI-2.2 support?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Lisandro Dalc&#237;n
</span><br>
<span class="quotelev2">&gt;&gt; ---------------
</span><br>
<span class="quotelev2">&gt;&gt; Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
</span><br>
<span class="quotelev2">&gt;&gt; Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
</span><br>
<span class="quotelev2">&gt;&gt; Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
</span><br>
<span class="quotelev2">&gt;&gt; PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
</span><br>
<span class="quotelev2">&gt;&gt; Tel/Fax: +54-(0)342-451.1594
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="6897.php">Lisandro Dalcin: "Re: [OMPI devel] ompi-trunk: have MPI_REAL2 (if available) but missing MPI_COMPLEX4"</a>
<li><strong>Previous message:</strong> <a href="6895.php">Lisandro Dalcin: "Re: [OMPI devel] ompi-trunk: have MPI_REAL2 (if available) but missing MPI_COMPLEX4"</a>
<li><strong>In reply to:</strong> <a href="6895.php">Lisandro Dalcin: "Re: [OMPI devel] ompi-trunk: have MPI_REAL2 (if available) but missing MPI_COMPLEX4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6897.php">Lisandro Dalcin: "Re: [OMPI devel] ompi-trunk: have MPI_REAL2 (if available) but missing MPI_COMPLEX4"</a>
<li><strong>Reply:</strong> <a href="6897.php">Lisandro Dalcin: "Re: [OMPI devel] ompi-trunk: have MPI_REAL2 (if available) but missing MPI_COMPLEX4"</a>
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
