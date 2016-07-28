<?
$subject_val = "[OMPI devel] MPI_Buffer_detach fortran binding";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 29 10:44:37 2015" -->
<!-- isoreceived="20150629144437" -->
<!-- sent="Mon, 29 Jun 2015 23:44:36 +0900" -->
<!-- isosent="20150629144436" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_Buffer_detach fortran binding" -->
<!-- id="CAAkFZ5tJDG4gtV46YYMFCmOnJZfpCpnRF98gXxOhtDpOTmWEfQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_Buffer_detach fortran binding<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-29 10:44:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17558.php">Howard Pritchard: "[OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<li><strong>Previous message:</strong> <a href="17556.php">Gilles Gouaillardet: "Re: [OMPI devel] Java bindings are completely broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17561.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPI_Buffer_detach fortran binding"</a>
<li><strong>Reply:</strong> <a href="17561.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPI_Buffer_detach fortran binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>the first argument of MPI_Buffer_detach is
<br>
OMPI_FORTRAN_IGNORE_TKR_TYPE, INTENT(IN) :: buffer_addrfrom use-mpi-f08
<br>
<p>however, the standard states this is TYPE(C_PTR), INTENT(OUT)
<br>
(and yes, this is very counter intuitive ... at first glance only)
<br>
<p><p>can you please confirm this is an Open MPI bug ?
<br>
(and not an anticipated errata)
<br>
<p>If a bug, then I can fix it tomorrow
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17557/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17558.php">Howard Pritchard: "[OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<li><strong>Previous message:</strong> <a href="17556.php">Gilles Gouaillardet: "Re: [OMPI devel] Java bindings are completely broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17561.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPI_Buffer_detach fortran binding"</a>
<li><strong>Reply:</strong> <a href="17561.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPI_Buffer_detach fortran binding"</a>
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
