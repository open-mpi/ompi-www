<?
$subject_val = "[OMPI devel] some possible bugs after trying 1.2.6";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 14 17:25:00 2008" -->
<!-- isoreceived="20080414212500" -->
<!-- sent="Mon, 14 Apr 2008 18:24:52 -0300" -->
<!-- isosent="20080414212452" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] some possible bugs after trying 1.2.6" -->
<!-- id="e7ba66e40804141424n2a41f3e9td578c669dab71b4b_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] some possible bugs after trying 1.2.6<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-14 17:24:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3708.php">Tim Prins: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Previous message:</strong> <a href="3706.php">Jeff Squyres: "[OMPI devel] Pathscale compilers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all, I've just downloaded and installed release 1.2.6.
<br>
Additionally, I'm reimplementing from scratch my Python wrappers for
<br>
MPI using some more advanded tools than manual C coding. Now, I do not
<br>
try in any way of doing argument checking as I did before. Then I've
<br>
ran al my unittest machinger. And then comments follows.
<br>
<p><p>MPI_Comm_get_errhandler() if called with MPI_COMM_NULL raises error
<br>
class MPI_ERR_ARG. I believe it should be MPI_ERR_COMM.
<br>
<p><p>MPI_Abort() if called with MPI_COMM_NULL directly abort the process
<br>
instead of calling the error handler set in MPI_COMM_WORLD. I do not
<br>
know what is correct here; this is just for your information.
<br>
<p><p>MPI_Cancel() and MPI_Request_free() success if they are called with
<br>
MPI_REQUEST_NULL. At first sight, this seems erroneous (at least in
<br>
the MPI-1) as TestXXX and WaitXXX should be the only accepting the
<br>
null handle, but now I cannot remember if MPI-2 clarified/modified
<br>
this (I believe not).
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
<li><strong>Next message:</strong> <a href="3708.php">Tim Prins: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Previous message:</strong> <a href="3706.php">Jeff Squyres: "[OMPI devel] Pathscale compilers"</a>
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
