<?
$subject_val = "[OMPI devel] valgrind warnings (uninited mem passed to syscall)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 17 16:08:50 2007" -->
<!-- isoreceived="20071217210850" -->
<!-- sent="Mon, 17 Dec 2007 18:08:44 -0300" -->
<!-- isosent="20071217210844" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] valgrind warnings (uninited mem passed to syscall)" -->
<!-- id="e7ba66e40712171308x2a763085x9363fd634fca8be5_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] valgrind warnings (uninited mem passed to syscall)<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-17 16:08:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2877.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Previous message:</strong> <a href="2875.php">George Bosilca: "Re: [OMPI devel] pointer_array"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2881.php">Jeff Squyres: "Re: [OMPI devel] valgrind warnings (uninited mem passed to syscall)"</a>
<li><strong>Reply:</strong> <a href="2881.php">Jeff Squyres: "Re: [OMPI devel] valgrind warnings (uninited mem passed to syscall)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I'm getting valgrind warnings related to syscalls with uninitialized
<br>
memory (with release 1.2.4).
<br>
<p>Before providing more details and code reproducing the problem, I
<br>
would like to know if there is any configure option I should take care
<br>
of which enables extra memory initialization (--enable-debug is
<br>
enough? I ask this because MPICH2 has specific configure option for
<br>
this, perhaps you also have something similar).
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
<li><strong>Next message:</strong> <a href="2877.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Previous message:</strong> <a href="2875.php">George Bosilca: "Re: [OMPI devel] pointer_array"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2881.php">Jeff Squyres: "Re: [OMPI devel] valgrind warnings (uninited mem passed to syscall)"</a>
<li><strong>Reply:</strong> <a href="2881.php">Jeff Squyres: "Re: [OMPI devel] valgrind warnings (uninited mem passed to syscall)"</a>
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
