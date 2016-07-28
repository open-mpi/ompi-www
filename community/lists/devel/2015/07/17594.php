<?
$subject_val = "[OMPI devel] Fortran issue";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul  4 12:11:46 2015" -->
<!-- isoreceived="20150704161146" -->
<!-- sent="Sat, 4 Jul 2015 12:11:44 -0400" -->
<!-- isosent="20150704161144" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="[OMPI devel] Fortran issue" -->
<!-- id="CAMJJpkVXAMTaLLpHq5dVknHp5W=kPCeVV9KL4AhnXeC11s2JnQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Fortran issue<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-04 12:11:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17595.php">Victor Rodriguez: "[OMPI devel] channel initialization failed MPI"</a>
<li><strong>Previous message:</strong> <a href="17593.php">Gilles Gouaillardet: "Re: [OMPI devel] Open MPI 1.8.6 memory leak"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17598.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Reply:</strong> <a href="17598.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fortran issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On OS X the generating the MPI library fails with the following error
<br>
message:
<br>
<p>duplicate symbol _ompi_buffer_detach_f08 in:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;.libs/buffer_detach_f.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;profile/.libs/libmpi_mpifh_pmpi.a(pbuffer_detach_f.o)
<br>
ld: 1 duplicate symbol for architecture x86_64
<br>
<p>I came up with the following patch, but I'm not sure this is the real fix.
<br>
It does fix the issue in my particular configuration.
<br>
<p>diff --git a/ompi/mpi/fortran/mpif-h/buffer_detach_f.c
<br>
b/ompi/mpi/fortran/mpif-h/buffer_detach_f.c
<br>
index e2114d7..5d2c530 100644
<br>
--- a/ompi/mpi/fortran/mpif-h/buffer_detach_f.c
<br>
+++ b/ompi/mpi/fortran/mpif-h/buffer_detach_f.c
<br>
@@ -88,6 +88,7 @@ void ompi_buffer_detach_f(char *buffer, MPI_Fint *size,
<br>
MPI_Fint *ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;}
<br>
<p>+#if !OMPI_PROFILE_LAYER
<br>
&nbsp;/*
<br>
&nbsp;&nbsp;* Per above, this is the mpi_f08 module implementation of
<br>
&nbsp;&nbsp;* MPI_BUFFER_DETACH.  It handles the buffer arugment just like the C
<br>
@@ -107,3 +108,4 @@ void ompi_buffer_detach_f08(char *buffer, MPI_Fint
<br>
*size, MPI_Fint *ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_SINGLE_INT_2_FINT(size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;}
<br>
+#endif  /* !OMPI_PROFILE_LAYER */
<br>
<p>George.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17594/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17595.php">Victor Rodriguez: "[OMPI devel] channel initialization failed MPI"</a>
<li><strong>Previous message:</strong> <a href="17593.php">Gilles Gouaillardet: "Re: [OMPI devel] Open MPI 1.8.6 memory leak"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17598.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Reply:</strong> <a href="17598.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fortran issue"</a>
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
