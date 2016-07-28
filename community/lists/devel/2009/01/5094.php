<?
$subject_val = "[OMPI devel] problem compiling r20196";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  5 13:16:43 2009" -->
<!-- isoreceived="20090105181643" -->
<!-- sent="Mon, 05 Jan 2009 19:16:38 +0100" -->
<!-- isosent="20090105181638" -->
<!-- name="Thomas Ropars" -->
<!-- email="tropars_at_[hidden]" -->
<!-- subject="[OMPI devel] problem compiling r20196" -->
<!-- id="49624E86.8030809_at_irisa.fr" -->
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
<strong>Subject:</strong> [OMPI devel] problem compiling r20196<br>
<strong>From:</strong> Thomas Ropars (<em>tropars_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-05 13:16:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5095.php">Aurélien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r20196"</a>
<li><strong>Previous message:</strong> <a href="5093.php">Jeff Squyres: "Re: [OMPI devel] RFC: Component-izing MPI_Op"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5097.php">Jeff Squyres: "Re: [OMPI devel] problem compiling r20196"</a>
<li><strong>Reply:</strong> <a href="5097.php">Jeff Squyres: "Re: [OMPI devel] problem compiling r20196"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I don't manage to compile the code from the svn r20196.
<br>
<p>I get the following error:
<br>
pstat_linux_module.c:34:73: error: asm/page.h: No such file or directory
<br>
make[2]: *** [pstat_linux_module.lo] Error 1
<br>
<p>It seems that it is because new Linux kernels no longer install 
<br>
asm/page.h (I use a 2.6.27 Linux kernel).
<br>
<p>Regards,
<br>
<p>Thomas.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5095.php">Aurélien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r20196"</a>
<li><strong>Previous message:</strong> <a href="5093.php">Jeff Squyres: "Re: [OMPI devel] RFC: Component-izing MPI_Op"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5097.php">Jeff Squyres: "Re: [OMPI devel] problem compiling r20196"</a>
<li><strong>Reply:</strong> <a href="5097.php">Jeff Squyres: "Re: [OMPI devel] problem compiling r20196"</a>
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
