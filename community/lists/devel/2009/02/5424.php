<?
$subject_val = "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 16 09:14:11 2009" -->
<!-- isoreceived="20090216141411" -->
<!-- sent="Mon, 16 Feb 2009 12:14:07 -0200" -->
<!-- isosent="20090216141407" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] possible bugs and unexpected values in returned errors classes" -->
<!-- id="e7ba66e40902160614h14979d73r218970bbcede556f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Date:</strong> 2009-02-16 09:14:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5425.php">Jeff Squyres: "[OMPI devel] RFC: New Open MPI release procedure"</a>
<li><strong>Previous message:</strong> <a href="5423.php">Lisandro Dalcin: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>In reply to:</strong> <a href="5410.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5472.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>Reply:</strong> <a href="5472.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just found something new to comment after diving into the actual sources
<br>
<p>On Thu, Feb 12, 2009 at 10:02 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Feb 11, 2009, at 8:24 AM, Lisandro Dalcin wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) When passing MPI_COMM_NULL, MPI_Comm_get_errhandler() fails with
</span><br>
<span class="quotelev2">&gt;&gt; MPI_ERR_ARG. I would expect MPI_ERR_COMM.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't have a strong feeling on this one; I think you could probably argue
</span><br>
<span class="quotelev1">&gt; either way.  That being said, we haven't paid too close attention to the
</span><br>
<span class="quotelev1">&gt; error values that we return.  Unfortunately, I don't think there's much
</span><br>
<span class="quotelev1">&gt; standardization between different MPI implementations, unless they share a
</span><br>
<span class="quotelev1">&gt; common code ancestry.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>After running my testsuite again and next looking at
<br>
&quot;ompi/mpi/c/comm_set_errhandler.c&quot;, I noticed that
<br>
MPI_Comm_set_errhandler() do return MPI_ERR_COMM when invalid
<br>
communicators are passed. IMHO, for the sake of consistency, you
<br>
should fix MPI_Comm_get_errhandler() to behave the same as the setter.
<br>
Would this rationale be enough?
<br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="5425.php">Jeff Squyres: "[OMPI devel] RFC: New Open MPI release procedure"</a>
<li><strong>Previous message:</strong> <a href="5423.php">Lisandro Dalcin: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>In reply to:</strong> <a href="5410.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5472.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>Reply:</strong> <a href="5472.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
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
