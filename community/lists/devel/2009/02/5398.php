<?
$subject_val = "[OMPI devel] possible bugs and unexpected values in returned errors classes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 11 11:24:16 2009" -->
<!-- isoreceived="20090211162416" -->
<!-- sent="Wed, 11 Feb 2009 14:24:12 -0200" -->
<!-- isosent="20090211162412" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] possible bugs and unexpected values in returned errors classes" -->
<!-- id="e7ba66e40902110824i17d10aqf07764c2a5862c0a_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] possible bugs and unexpected values in returned errors classes<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-11 11:24:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5399.php">Eugene Loh: "[OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>Previous message:</strong> <a href="5397.php">Greg Koenig: "Re: [OMPI devel] RFC: Rename several OMPI_* names to OPAL_*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5410.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>Reply:</strong> <a href="5410.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Below a list of stuff that I've got by running mpi4py testsuite. Never
<br>
reported them before just because some of them are not actually
<br>
errors, but anyway, I want to raise the discussion.
<br>
<p>- Likely bugs (regarding my interpretation of the MPI standard)
<br>
<p>1) When passing MPI_REQUEST_NULL, MPI_Request_free() DO NOT fail.
<br>
<p>2) When passing MPI_REQUEST_NULL, MPI_Cancel() DO NOT fail.
<br>
<p>3) When passing MPI_REQUEST_NULL, MPI_Request_get_status() DO NOT fail.
<br>
<p>4)  When passing MPI_WIN_NULL, MPI_Win_get_errhandler() and
<br>
MPI_Win_set_errhandler()  DO NOT fail.
<br>
<p><p>- Unexpected errors classes (at least for me)
<br>
<p>1) When passing MPI_COMM_NULL, MPI_Comm_get_errhandler() fails with
<br>
MPI_ERR_ARG. I would expect MPI_ERR_COMM.
<br>
<p>2) MPI_Type_free() fails with MPI_ERR_INTERN when passing predefined
<br>
datatypes like MPI_INT or MPI_FLOAT. I would expect MPI_ERR_TYPE.
<br>
<p><p>- Controversial (I'm even fine with the current behavior)
<br>
<p>1) MPI_Info_get_nthkey(info, n) returns MPI_ERR_INFO_KEY when &quot;n&quot; is
<br>
larger that the number of keys. Perhaps MPI_ERR_ARG would be more
<br>
appropriate? A possible rationale would be that the error is not
<br>
related to the contents of a 'key' string, but an out of range value
<br>
for &quot;n&quot;.
<br>
<p><p>That's all. Sorry for being so pedantic :-) and not offering help for
<br>
the patches, but I'm really busy.
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
<li><strong>Next message:</strong> <a href="5399.php">Eugene Loh: "[OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>Previous message:</strong> <a href="5397.php">Greg Koenig: "Re: [OMPI devel] RFC: Rename several OMPI_* names to OPAL_*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5410.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>Reply:</strong> <a href="5410.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
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
