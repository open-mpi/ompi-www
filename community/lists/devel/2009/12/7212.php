<?
$subject_val = "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  9 10:59:46 2009" -->
<!-- isoreceived="20091209155946" -->
<!-- sent="Wed, 9 Dec 2009 12:59:40 -0300" -->
<!-- isosent="20091209155940" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] possible bugs and unexpected values in returned errors classes" -->
<!-- id="e7ba66e40912090759h2bfca1e1lcd33f37de294587d_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="7486E2A4-F6AD-4BE4-AC6E-DF59635DC8CF_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] possible bugs and unexpected values in returned errors classes<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-09 10:59:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7213.php">Josh Hursey: "Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet"</a>
<li><strong>Previous message:</strong> <a href="7211.php">Ashley Pittman: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/02/5410.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It seems that this issue got lost.
<br>
<p>On Thu, Feb 12, 2009 at 9:02 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Feb 11, 2009, at 8:24 AM, Lisandro Dalcin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Below a list of stuff that I've got by running mpi4py testsuite.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 4) &#194;&#160;When passing MPI_WIN_NULL, MPI_Win_get_errhandler() and
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Win_set_errhandler() &#194;&#160;DO NOT fail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was a little more dubious here; the param checking code was specifically
</span><br>
<span class="quotelev1">&gt; checking for MPI_WIN_NULL and not classifying it as an error. &#194;&#160;Digging to
</span><br>
<span class="quotelev1">&gt; find out why we did that, the best that I can come up with is that it is
</span><br>
<span class="quotelev1">&gt; *not* an error to call MPI_File_set|get_errhandler on MPI_FILE_NULL (to set
</span><br>
<span class="quotelev1">&gt; behavior for what happens when FILE_OPEN fails); I'm *guessing* that we
</span><br>
<span class="quotelev1">&gt; simply copied the _File_ code to the _Win_ code and forgot to remove that
</span><br>
<span class="quotelev1">&gt; extra check.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can't find anything in MPI-2.1 that says it is legal to call set|get
</span><br>
<span class="quotelev1">&gt; errhandler on MPI_WIN_NULL. &#194;&#160;I checked LAM as well; LAM errors in this case.
</span><br>
<span class="quotelev1">&gt; &#194;&#160;So I made this now be an error in OMPI as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you need these in the 1.3 series? &#194;&#160;Or are you ok waiting for 1.4
</span><br>
<span class="quotelev1">&gt; (assuming 1.4 takes significantly less time to release than 1.3 :-) ).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>In short:
<br>
<p>When passing MPI_WIN_NULL, MPI_Win_get_errhandler() and
<br>
MPI_Win_set_errhandler()  DO NOT fail.
<br>
<p>Jeff, you promised this for 1.4 ;-). Any chance for 1.4.1 ?
<br>
<p><pre>
-- 
Lisandro Dalc&#195;&#173;n
---------------
Centro Internacional de M&#195;&#169;todos Computacionales en Ingenier&#195;&#173;a (CIMEC)
Instituto de Desarrollo Tecnol&#195;&#179;gico para la Industria Qu&#195;&#173;mica (INTEC)
Consejo Nacional de Investigaciones Cient&#195;&#173;ficas y T&#195;&#169;cnicas (CONICET)
PTLC - G&#195;&#188;emes 3450, (3000) Santa Fe, Argentina
Tel/Fax: +54-(0)342-451.1594
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7213.php">Josh Hursey: "Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet"</a>
<li><strong>Previous message:</strong> <a href="7211.php">Ashley Pittman: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/02/5410.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<!-- nextthread="start" -->
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
