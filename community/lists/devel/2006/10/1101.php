<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  9 11:41:55 2006" -->
<!-- isoreceived="20061009154155" -->
<!-- sent="Mon, 9 Oct 2006 12:41:49 -0300" -->
<!-- isosent="20061009154149" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_XXX_{get|set}_errhandler in general , and for files in particular" -->
<!-- id="e7ba66e40610090841p170b9bf6i2c60f18b8df21d09_at_mail.gmail.com" -->
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
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-09 11:41:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1102.php">Jeff Squyres: "[OMPI devel] ORTE fixes on v1.1"</a>
<li><strong>Previous message:</strong> <a href="1100.php">Karl Dockendorf: "[OMPI devel] Segment Faults in MPI_INIT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1117.php">Jeff Squyres: "Re: [OMPI devel] MPI_XXX_{get|set}_errhandler in general , and for files in particular"</a>
<li><strong>Reply:</strong> <a href="1117.php">Jeff Squyres: "Re: [OMPI devel] MPI_XXX_{get|set}_errhandler in general , and for files in particular"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looking at MPI-2 errata document,
<br>
<a href="http://www.mpi-forum.org/docs/errata-20-2.html">http://www.mpi-forum.org/docs/errata-20-2.html</a>, is says:
<br>
<p>Page 61, after line 36. Add the following (paralleling the errata to MPI-1.1):
<br>
<p>MPI_{COMM,WIN,FILE}_GET_ERRHANDLER behave as if a new error handler
<br>
object is created. That is, once the error handler is no longer
<br>
needed, MPI_ERRHANDLER_FREE should be called with the error handler
<br>
returned from MPI_ERRHANDLER_GET or MPI_{COMM,WIN,FILE}_GET_ERRHANDLER
<br>
to mark the error handler for deallocation. This provides behavior
<br>
similar to that of MPI_COMM_GROUP and MPI_GROUP_FREE.
<br>
<p>Well, is seems that OMPI does not currently follow this specification.
<br>
Any plans to change this? Or it will not go in?
<br>
<p>Additionaly, I've noted that MPI_File_get_errhandler fails with
<br>
MPI_ERR_FILE is passed file handle is MPI_FILE_NULL. However, I
<br>
undersand (regarding the standard) this is the handle to query to
<br>
get/set/reset the default error handler for new files... I think
<br>
MPI_File_{get|set}_errhandler should accept MPI_FILE_NULL handle. Am I
<br>
right?
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="1102.php">Jeff Squyres: "[OMPI devel] ORTE fixes on v1.1"</a>
<li><strong>Previous message:</strong> <a href="1100.php">Karl Dockendorf: "[OMPI devel] Segment Faults in MPI_INIT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1117.php">Jeff Squyres: "Re: [OMPI devel] MPI_XXX_{get|set}_errhandler in general , and for files in particular"</a>
<li><strong>Reply:</strong> <a href="1117.php">Jeff Squyres: "Re: [OMPI devel] MPI_XXX_{get|set}_errhandler in general , and for files in particular"</a>
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
