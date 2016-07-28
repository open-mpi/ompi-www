<?
$subject_val = "[OMPI devel] Minor fix to some intel tests - FYI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  8 11:15:19 2008" -->
<!-- isoreceived="20080108161519" -->
<!-- sent="Tue, 08 Jan 2008 11:14:59 -0500" -->
<!-- isosent="20080108161459" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] Minor fix to some intel tests - FYI" -->
<!-- id="4783A183.2080500_at_Sun.COM" -->
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
<strong>Subject:</strong> [OMPI devel] Minor fix to some intel tests - FYI<br>
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-08 11:14:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2944.php">Jeff Squyres: "[OMPI devel] vt integration -- still problems on os x"</a>
<li><strong>Previous message:</strong> <a href="2942.php">Jeff Squyres: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just wanted to let everyone know we are making a minor change to some of 
<br>
the tests in the intel test suite.  There is a bug where the tests are 
<br>
passing in a pointer rather then the address of a pointer to the 
<br>
MPI_Buffer_detach call.  Most of the time, this does not cause a problem 
<br>
as we can see that these tests have been passing for years.  However, 
<br>
there are some cases on the 64-bit sparc platform where we get our 
<br>
wonderful bus errors.  Therefore, we plan to make this minor change to 
<br>
several of the tests.
<br>
<p>&nbsp;&nbsp;sr1-ubur-13 97 =&gt;svn diff MPI_Testany_c.c
<br>
Index: MPI_Testany_c.c
<br>
===================================================================
<br>
--- MPI_Testany_c.c     (revision 1220)
<br>
+++ MPI_Testany_c.c     (working copy)
<br>
@@ -100,6 +100,7 @@
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bsend_buff[NUMMESG * (8 * NUMELM + MPI_BSEND_OVERHEAD + 100)];
<br>
+    void * bsend_ptr;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/*-----------------------  MPI Initialization 
<br>
--------------------------*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/*
<br>
@@ -297,7 +298,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fail++;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* MPI_Test_cancelled Error Test */
<br>
-        ierr = MPI_Buffer_detach(&amp;bsend_buff, &amp;size);
<br>
+        ierr = MPI_Buffer_detach(&amp;bsend_ptr, &amp;size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ierr != MPI_SUCCESS) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sprintf(info_buf,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;Non-zero return code (%d) from MPI_Buffer_detach&quot;,
<br>
&nbsp;&nbsp;sr1-ubur-13 98 =&gt;
<br>
<p>The tests being modified are:
<br>
<p>M      MPI_Test_c.c
<br>
M      MPI_Testany_p_c.c
<br>
M      MPI_Testall_p_c.c
<br>
M      MPI_Testsome_p_c.c
<br>
M      MPI_Testany_c.c
<br>
M      MPI_Testall_c.c
<br>
M      MPI_Test_p_c.c
<br>
M      MPI_Waitsome_p_c.c
<br>
M      MPI_Waitany_c.c
<br>
M      MPI_Waitsome_c.c
<br>
M      MPI_Waitall_c.c
<br>
M      MPI_Testsome_c.c
<br>
M      MPI_Waitany_p_c.c
<br>
M      MPI_Waitall_p_c.c
<br>
&nbsp;&nbsp;sr1-ubur-13 99 =&gt;
<br>
<p><p><p><pre>
-- 
=========================
rolf.vandevaart_at_[hidden]
781-442-3043
=========================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2944.php">Jeff Squyres: "[OMPI devel] vt integration -- still problems on os x"</a>
<li><strong>Previous message:</strong> <a href="2942.php">Jeff Squyres: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
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
