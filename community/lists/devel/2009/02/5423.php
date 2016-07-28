<?
$subject_val = "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 16 08:43:26 2009" -->
<!-- isoreceived="20090216134326" -->
<!-- sent="Mon, 16 Feb 2009 11:43:22 -0200" -->
<!-- isosent="20090216134322" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] possible bugs and unexpected values in returned errors classes" -->
<!-- id="e7ba66e40902160543t7e9214e4v49ad7f9e710805e8_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-02-16 08:43:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5424.php">Lisandro Dalcin: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>Previous message:</strong> <a href="5422.php">Eugene Loh: "Re: [OMPI devel] Announcing searchable OMPI source code tree"</a>
<li><strong>In reply to:</strong> <a href="5410.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5424.php">Lisandro Dalcin: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Feb 12, 2009 at 10:02 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Feb 11, 2009, at 8:24 AM, Lisandro Dalcin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Below a list of stuff that I've got by running mpi4py testsuite. Never
</span><br>
<span class="quotelev2">&gt;&gt; reported them before just because some of them are not actually
</span><br>
<span class="quotelev2">&gt;&gt; errors, but anyway, I want to raise the discussion.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Likely bugs (regarding my interpretation of the MPI standard)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) When passing MPI_REQUEST_NULL, MPI_Request_free() DO NOT fail.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) When passing MPI_REQUEST_NULL, MPI_Cancel() DO NOT fail.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3) When passing MPI_REQUEST_NULL, MPI_Request_get_status() DO NOT fail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I agree with all of these; I'm not sure why we allowed MPI_REQUEST_NULL.  I
</span><br>
<span class="quotelev1">&gt; double checked LAM/MPI -- it errors in all of these cases.  So OMPI now
</span><br>
<span class="quotelev1">&gt; does, too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 4)  When passing MPI_WIN_NULL, MPI_Win_get_errhandler() and
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Win_set_errhandler()  DO NOT fail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was a little more dubious here; the param checking code was specifically
</span><br>
<span class="quotelev1">&gt; checking for MPI_WIN_NULL and not classifying it as an error.  Digging to
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
<span class="quotelev1">&gt; errhandler on MPI_WIN_NULL.  I checked LAM as well; LAM errors in this case.
</span><br>
<span class="quotelev1">&gt;  So I made this now be an error in OMPI as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you need these in the 1.3 series?  Or are you ok waiting for 1.4
</span><br>
<span class="quotelev1">&gt; (assuming 1.4 takes significantly less time to release than 1.3 :-) ).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I do not have a strong need to get those fixes in 1.3 series. In
<br>
mpi4py, I have some compatibility layer in a implementation by
<br>
implementation (well, actually just MPICH 1/2, Open MPI and LAM) and
<br>
release by release basis trying to hide those small discrepancies and
<br>
bugs in the MPI's out there.
<br>
<p><span class="quotelev2">&gt;&gt; - Unexpected errors classes (at least for me)
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
<p>You are right... However, IMHO, some agreement between Open MPI and
<br>
MPICH2 would be great, right :) ? In the end, they are the
<br>
reference/basis for other implementations.
<br>
<p><span class="quotelev2">&gt;&gt; 2) MPI_Type_free() fails with MPI_ERR_INTERN when passing predefined
</span><br>
<span class="quotelev2">&gt;&gt; datatypes like MPI_INT or MPI_FLOAT. I would expect MPI_ERR_TYPE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ya, that seems weird.  Fixed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Controversial (I'm even fine with the current behavior)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) MPI_Info_get_nthkey(info, n) returns MPI_ERR_INFO_KEY when &quot;n&quot; is
</span><br>
<span class="quotelev2">&gt;&gt; larger that the number of keys. Perhaps MPI_ERR_ARG would be more
</span><br>
<span class="quotelev2">&gt;&gt; appropriate? A possible rationale would be that the error is not
</span><br>
<span class="quotelev2">&gt;&gt; related to the contents of a 'key' string, but an out of range value
</span><br>
<span class="quotelev2">&gt;&gt; for &quot;n&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't have a particular opinion on this one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That's all. Sorry for being so pedantic :-) and not offering help for
</span><br>
<span class="quotelev2">&gt;&gt; the patches, but I'm really busy.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No worries; this stuff is great.  Thanks -- and keep it coming!  (we usually
</span><br>
<span class="quotelev1">&gt; remember to cite people who submit stuff like this; e.g.,
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/20537">https://svn.open-mpi.org/trac/ompi/changeset/20537</a> and
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/20538">https://svn.open-mpi.org/trac/ompi/changeset/20538</a>).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Jeff, once again, many thanks for you fast response, and even more
<br>
thanks for fixing the issues!
<br>
<p><p><span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="5424.php">Lisandro Dalcin: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>Previous message:</strong> <a href="5422.php">Eugene Loh: "Re: [OMPI devel] Announcing searchable OMPI source code tree"</a>
<li><strong>In reply to:</strong> <a href="5410.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5424.php">Lisandro Dalcin: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
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
