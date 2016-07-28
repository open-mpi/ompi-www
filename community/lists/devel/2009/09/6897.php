<?
$subject_val = "Re: [OMPI devel] ompi-trunk: have MPI_REAL2 (if available) but missing MPI_COMPLEX4";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 26 14:52:26 2009" -->
<!-- isoreceived="20090926185226" -->
<!-- sent="Sat, 26 Sep 2009 15:52:21 -0300" -->
<!-- isosent="20090926185221" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi-trunk: have MPI_REAL2 (if available) but missing MPI_COMPLEX4" -->
<!-- id="e7ba66e40909261152i3343aebtead4dad6a92c1afd_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E0E5BCFE-90BC-4D96-90AD-4554C5906A0D_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2009-09-26 14:52:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6898.php">George Bosilca: "Re: [OMPI devel] ompi-trunk: have MPI_REAL2 (if available) but missing MPI_COMPLEX4"</a>
<li><strong>Previous message:</strong> <a href="6896.php">George Bosilca: "Re: [OMPI devel] ompi-trunk: have MPI_REAL2 (if available) but missing MPI_COMPLEX4"</a>
<li><strong>In reply to:</strong> <a href="6896.php">George Bosilca: "Re: [OMPI devel] ompi-trunk: have MPI_REAL2 (if available) but missing MPI_COMPLEX4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6898.php">George Bosilca: "Re: [OMPI devel] ompi-trunk: have MPI_REAL2 (if available) but missing MPI_COMPLEX4"</a>
<li><strong>Reply:</strong> <a href="6898.php">George Bosilca: "Re: [OMPI devel] ompi-trunk: have MPI_REAL2 (if available) but missing MPI_COMPLEX4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, Sep 26, 2009 at 2:07 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; These two issues are completely orthogonal.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On one side, MPI_LOGICALx is not defined by the MPI standard but it is
</span><br>
<span class="quotelev1">&gt; supported by several others MPI libraries and as it match a C type it is
</span><br>
<span class="quotelev1">&gt; easy to implement.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>OK, so we agree here.. It is good to have the MPI_LOGICALx despite not
<br>
being listed in the standard.
<br>
<p><span class="quotelev1">&gt; On the other side, MPI_COMPLEX4 is defined by the MPI standard as an
</span><br>
<span class="quotelev1">&gt; optional datatype (MPI 2.2 page 451) which doesn't make it mandatory (sic!),
</span><br>
<span class="quotelev1">&gt; is supported by few others MPI libraries but as it doesn't match any C type
</span><br>
<span class="quotelev1">&gt; it is really difficult to implement.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>OK, you are right, it is really difficult to implement, at least in
<br>
pure-C code... BTW, this also applies to MPI_REAL2, right ? Then...
<br>
<p>$ nm /usr/local/openmpi/dev-trunk/lib/libmpi.so | grep real2
<br>
000fe0e0 D ompi_mpi_real2
<br>
<p>So if you have support for real(kind=2) in &quot;ompi_mpi_real2&quot; ... Do you
<br>
still think that it is so hard to support complex(kind=4) ??
<br>
<p>Anyway, I see that MPI_REAL2 is never #define'd to &amp;ompi_mpi_real2 .
<br>
<p><p><p><span class="quotelev1">&gt; &#160;george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 26, 2009, at 11:04 , Lisandro Dalcin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff, about ticket #2032 ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was not asking you to eliminate MPI_LOGICALx, just asked for
</span><br>
<span class="quotelev2">&gt;&gt; MPI_COMPLEX4 to be added...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you still think the MPI_LOGICALx should be removed from Open MPI,
</span><br>
<span class="quotelev2">&gt;&gt; what about rename the macros to OMPI_LOGICALx ? IMHO, the MPI_LOGICALx
</span><br>
<span class="quotelev2">&gt;&gt; (provided that Fortran compilers do support them) are an omission in
</span><br>
<span class="quotelev2">&gt;&gt; the 2.2 standard.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Sep 23, 2009 at 4:33 PM, Lisandro Dalcin &lt;dalcinl_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Disclaimer: I have almost no experience with Fortran, nor I'm needing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this, but anyway (perhaps just as a reminder for you) :-)...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Provided that:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) Open MPI exposes MPI_LOGICAL{1|2|4|8}, and they are not (AFAIK)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; listed in the MPI standard (I cannot found them in MPI-2.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2) The MPI-2.2 standard DO list MPI COMPLEX4 (at least in 2.2) ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would it make sense that you add MPI_COMPLEX4 support ASAP, even
</span><br>
<span class="quotelev3">&gt;&gt;&gt; before full MPI-2.2 support?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lisandro Dalc&#237;n
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tel/Fax: +54-(0)342-451.1594
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="6898.php">George Bosilca: "Re: [OMPI devel] ompi-trunk: have MPI_REAL2 (if available) but missing MPI_COMPLEX4"</a>
<li><strong>Previous message:</strong> <a href="6896.php">George Bosilca: "Re: [OMPI devel] ompi-trunk: have MPI_REAL2 (if available) but missing MPI_COMPLEX4"</a>
<li><strong>In reply to:</strong> <a href="6896.php">George Bosilca: "Re: [OMPI devel] ompi-trunk: have MPI_REAL2 (if available) but missing MPI_COMPLEX4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6898.php">George Bosilca: "Re: [OMPI devel] ompi-trunk: have MPI_REAL2 (if available) but missing MPI_COMPLEX4"</a>
<li><strong>Reply:</strong> <a href="6898.php">George Bosilca: "Re: [OMPI devel] ompi-trunk: have MPI_REAL2 (if available) but missing MPI_COMPLEX4"</a>
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
