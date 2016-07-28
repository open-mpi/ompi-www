<?
$subject_val = "Re: [OMPI devel] Crash when using MPI_REAL8";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  8 12:33:50 2009" -->
<!-- isoreceived="20091208173350" -->
<!-- sent="Tue, 8 Dec 2009 12:33:40 -0500" -->
<!-- isosent="20091208173340" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Crash when using MPI_REAL8" -->
<!-- id="17528E69-2668-458B-A75C-993A553B8274_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="200912071127.26242.keller_at_ornl.gov" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-08 12:33:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7208.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Question about ompi_proc_t"</a>
<li><strong>Previous message:</strong> <a href="7206.php">George Bosilca: "Re: [OMPI devel] Question about ompi_proc_t"</a>
<li><strong>In reply to:</strong> <a href="7193.php">Rainer Keller: "Re: [OMPI devel] Crash when using MPI_REAL8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7209.php">Jeff Squyres: "Re: [OMPI devel] Crash when using MPI_REAL8"</a>
<li><strong>Reply:</strong> <a href="7209.php">Jeff Squyres: "Re: [OMPI devel] Crash when using MPI_REAL8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rainer,
<br>
<p>The patch looks correct. Please feel free to push it in the trunk.
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Dec 7, 2009, at 11:27 , Rainer Keller wrote:
<br>
<p><span class="quotelev1">&gt; Hello Sylvain,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Friday 04 December 2009 02:27:22 pm Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev2">&gt;&gt; There is definetly something wrong in types.
</span><br>
<span class="quotelev1">&gt; Yes, the new ids for optional Fortran datatypes are wrong.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, as with other Fortran types, IMHO they need to map to C types, aka the IDs 
</span><br>
<span class="quotelev1">&gt; should map. Therefore, we should _not_ increase the number of predefined types 
</span><br>
<span class="quotelev1">&gt; -- these are fixed as representable by C...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The below patch does just that and fixes Your testcase!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; George, what do You think? Could You check, please?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Rainer
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PS: Yes, You're perfectly right, that the number of Fortran tests (esp. with 
</span><br>
<span class="quotelev1">&gt; regard to optional ddt) are too low.
</span><br>
<span class="quotelev1">&gt; Several features of MPI (MPI-2 are not well represented in MTT).
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Rainer Keller, PhD                  Tel: +1 (865) 241-6293
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Lab          Fax: +1 (865) 241-4811
</span><br>
<span class="quotelev1">&gt; PO Box 2008 MS 6164           Email: keller_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;ompi_datatype_optional_fortran-2009.12.07.diff&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="7208.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Question about ompi_proc_t"</a>
<li><strong>Previous message:</strong> <a href="7206.php">George Bosilca: "Re: [OMPI devel] Question about ompi_proc_t"</a>
<li><strong>In reply to:</strong> <a href="7193.php">Rainer Keller: "Re: [OMPI devel] Crash when using MPI_REAL8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7209.php">Jeff Squyres: "Re: [OMPI devel] Crash when using MPI_REAL8"</a>
<li><strong>Reply:</strong> <a href="7209.php">Jeff Squyres: "Re: [OMPI devel] Crash when using MPI_REAL8"</a>
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
