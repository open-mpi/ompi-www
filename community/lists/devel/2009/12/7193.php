<?
$subject_val = "Re: [OMPI devel] Crash when using MPI_REAL8";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  7 11:27:41 2009" -->
<!-- isoreceived="20091207162741" -->
<!-- sent="Mon, 07 Dec 2009 11:27:26 -0500" -->
<!-- isosent="20091207162726" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Crash when using MPI_REAL8" -->
<!-- id="200912071127.26242.keller_at_ornl.gov" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="alpine.DEB.2.00.0912042003020.3715_at_jeaugeys.frec.bull.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Crash when using MPI_REAL8<br>
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-07 11:27:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7194.php">George Bosilca: "Re: [OMPI devel] Question about ompi_proc_t"</a>
<li><strong>Previous message:</strong> <a href="7192.php">Timothy Hayes: "Re: [OMPI devel] Question about ompi_proc_t"</a>
<li><strong>In reply to:</strong> <a href="7186.php">Sylvain Jeaugey: "Re: [OMPI devel] Crash when using MPI_REAL8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7199.php">Sylvain Jeaugey: "Re: [OMPI devel] Crash when using MPI_REAL8"</a>
<li><strong>Reply:</strong> <a href="7199.php">Sylvain Jeaugey: "Re: [OMPI devel] Crash when using MPI_REAL8"</a>
<li><strong>Reply:</strong> <a href="7207.php">George Bosilca: "Re: [OMPI devel] Crash when using MPI_REAL8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Sylvain,
<br>
<p>On Friday 04 December 2009 02:27:22 pm Sylvain Jeaugey wrote:
<br>
<span class="quotelev1">&gt; There is definetly something wrong in types.
</span><br>
Yes, the new ids for optional Fortran datatypes are wrong.
<br>
<p>So, as with other Fortran types, IMHO they need to map to C types, aka the IDs 
<br>
should map. Therefore, we should _not_ increase the number of predefined types 
<br>
-- these are fixed as representable by C...
<br>
<p>The below patch does just that and fixes Your testcase!
<br>
<p>George, what do You think? Could You check, please?
<br>
<p>Best regards,
<br>
Rainer
<br>
<p>PS: Yes, You're perfectly right, that the number of Fortran tests (esp. with 
<br>
regard to optional ddt) are too low.
<br>
Several features of MPI (MPI-2 are not well represented in MTT).
<br>
<pre>
-- 
------------------------------------------------------------------------
Rainer Keller, PhD                  Tel: +1 (865) 241-6293
Oak Ridge National Lab          Fax: +1 (865) 241-4811
PO Box 2008 MS 6164           Email: keller_at_[hidden]
Oak Ridge, TN 37831-2008    AIM/Skype: rusraink

</pre>
<hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7193/ompi_datatype_optional_fortran-2009.12.07.diff">ompi_datatype_optional_fortran-2009.12.07.diff</a>
</ul>
<!-- attachment="ompi_datatype_optional_fortran-2009.12.07.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7194.php">George Bosilca: "Re: [OMPI devel] Question about ompi_proc_t"</a>
<li><strong>Previous message:</strong> <a href="7192.php">Timothy Hayes: "Re: [OMPI devel] Question about ompi_proc_t"</a>
<li><strong>In reply to:</strong> <a href="7186.php">Sylvain Jeaugey: "Re: [OMPI devel] Crash when using MPI_REAL8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7199.php">Sylvain Jeaugey: "Re: [OMPI devel] Crash when using MPI_REAL8"</a>
<li><strong>Reply:</strong> <a href="7199.php">Sylvain Jeaugey: "Re: [OMPI devel] Crash when using MPI_REAL8"</a>
<li><strong>Reply:</strong> <a href="7207.php">George Bosilca: "Re: [OMPI devel] Crash when using MPI_REAL8"</a>
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
