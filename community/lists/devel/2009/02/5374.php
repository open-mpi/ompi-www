<?
$subject_val = "[OMPI devel] r20436 brakes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  5 04:46:07 2009" -->
<!-- isoreceived="20090205094607" -->
<!-- sent="Thu, 5 Feb 2009 11:46:03 +0200" -->
<!-- isosent="20090205094603" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="[OMPI devel] r20436 brakes" -->
<!-- id="453d39990902050146t71ed44a2nbc672e0d6868f75b_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] r20436 brakes<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-05 04:46:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5375.php">Jeff Squyres: "Re: [OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
<li><strong>Previous message:</strong> <a href="5373.php">Eugene Loh: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I think this is the fix for broken trunk
<br>
submitted in r20439.
<br>
<p><p><p>Index: orte/tools/orte-bootproxy/Makefile.am
<br>
===================================================================
<br>
--- orte/tools/orte-bootproxy/Makefile.am       (revision 20438)
<br>
+++ orte/tools/orte-bootproxy/Makefile.am       (working copy)
<br>
@@ -25,7 +25,7 @@
<br>
<p>&nbsp;install-exec-hook:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test -z &quot;$(bindir)&quot; || $(mkdir_p) &quot;$(DESTDIR)$(bindir)&quot;
<br>
-       cp $(top_builddir)/orte/tools/orte-bootproxy/orte-bootproxy.sh
<br>
$(DESTDIR)$(bindir)
<br>
+       cp $(top_srcdir)/orte/tools/orte-bootproxy/orte-bootproxy.sh
<br>
$(DESTDIR)$(bindir)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;chmod 755 $(DESTDIR)$(bindir)/orte-bootproxy.sh
<br>
<p>&nbsp;endif # OMPI_INSTALL_BINARIES
<br>
<p><p><p>Lenny.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5375.php">Jeff Squyres: "Re: [OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
<li><strong>Previous message:</strong> <a href="5373.php">Eugene Loh: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
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
