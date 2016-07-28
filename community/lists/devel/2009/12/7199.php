<?
$subject_val = "Re: [OMPI devel] Crash when using MPI_REAL8";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  8 05:35:32 2009" -->
<!-- isoreceived="20091208103532" -->
<!-- sent="Tue, 8 Dec 2009 11:38:37 +0100 (CET)" -->
<!-- isosent="20091208103837" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Crash when using MPI_REAL8" -->
<!-- id="alpine.DEB.2.00.0912081137350.3715_at_jeaugeys.frec.bull.fr" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-08 05:38:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7200.php">Ashley Pittman: "[OMPI devel] [patch] Verifying the message queue DLL build"</a>
<li><strong>Previous message:</strong> <a href="7198.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Question about ompi_proc_t"</a>
<li><strong>In reply to:</strong> <a href="7193.php">Rainer Keller: "Re: [OMPI devel] Crash when using MPI_REAL8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7207.php">George Bosilca: "Re: [OMPI devel] Crash when using MPI_REAL8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Rainer for the patch. I confirm it solves my testcase as well as 
<br>
the real application that triggered the bug.
<br>
<p>Sylvain
<br>
<p>On Mon, 7 Dec 2009, Rainer Keller wrote:
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7200.php">Ashley Pittman: "[OMPI devel] [patch] Verifying the message queue DLL build"</a>
<li><strong>Previous message:</strong> <a href="7198.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Question about ompi_proc_t"</a>
<li><strong>In reply to:</strong> <a href="7193.php">Rainer Keller: "Re: [OMPI devel] Crash when using MPI_REAL8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7207.php">George Bosilca: "Re: [OMPI devel] Crash when using MPI_REAL8"</a>
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
