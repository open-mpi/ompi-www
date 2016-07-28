<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jul 28 16:59:05 2007" -->
<!-- isoreceived="20070728205905" -->
<!-- sent="Sat, 28 Jul 2007 17:59:00 -0300" -->
<!-- isosent="20070728205900" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_Comm_free with MPI_COMM_SELF" -->
<!-- id="e7ba66e40707281359t745e85eevd5166b71bbf108bf_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-07-28 16:59:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2043.php">Lisandro Dalcin: "[OMPI devel] freeing GROUP_EMPTY"</a>
<li><strong>Previous message:</strong> <a href="2041.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Win_get_group"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2045.php">Jeff Squyres: "Re: [OMPI devel] MPI_Comm_free with MPI_COMM_SELF"</a>
<li><strong>Reply:</strong> <a href="2045.php">Jeff Squyres: "Re: [OMPI devel] MPI_Comm_free with MPI_COMM_SELF"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tried to free COMM_SELF, and it seems to call the error handler
<br>
attached to COMM_WORLD. Is this intended? Should'nt OMPI use the error
<br>
handler to COMM_SELF?
<br>
<p>As reference, I tried this with MPICH2, and of course the call fails,
<br>
but using the error handler in COMM_SELF.
<br>
<p>Again, this is a new corner case AFAIK not taked into account in the standard.
<br>
<p>Regards,
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
<li><strong>Next message:</strong> <a href="2043.php">Lisandro Dalcin: "[OMPI devel] freeing GROUP_EMPTY"</a>
<li><strong>Previous message:</strong> <a href="2041.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Win_get_group"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2045.php">Jeff Squyres: "Re: [OMPI devel] MPI_Comm_free with MPI_COMM_SELF"</a>
<li><strong>Reply:</strong> <a href="2045.php">Jeff Squyres: "Re: [OMPI devel] MPI_Comm_free with MPI_COMM_SELF"</a>
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
