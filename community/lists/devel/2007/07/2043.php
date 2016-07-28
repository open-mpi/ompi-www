<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jul 28 18:40:31 2007" -->
<!-- isoreceived="20070728224031" -->
<!-- sent="Sat, 28 Jul 2007 19:40:26 -0300" -->
<!-- isosent="20070728224026" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] freeing GROUP_EMPTY" -->
<!-- id="e7ba66e40707281540r53425244y6411cfa31e624e61_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-07-28 18:40:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2044.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Previous message:</strong> <a href="2042.php">Lisandro Dalcin: "[OMPI devel] MPI_Comm_free with MPI_COMM_SELF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2046.php">Jeff Squyres: "Re: [OMPI devel] freeing GROUP_EMPTY"</a>
<li><strong>Reply:</strong> <a href="2046.php">Jeff Squyres: "Re: [OMPI devel] freeing GROUP_EMPTY"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A simple test trying to free GROUP_EMPTY failed with the following trace.
<br>
<p>a.out: ../opal/class/opal_object.h:403: opal_obj_run_destructors:
<br>
Assertion `((void *)0) != object-&gt;obj_class' failed.
<br>
[trantor:19821] *** Process received signal ***
<br>
[trantor:19821] Signal: Aborted (6)
<br>
[trantor:19821] Signal code:  (-6)
<br>
[trantor:19821] [ 0] [0xcf5440]
<br>
[trantor:19821] [ 1] /lib/libc.so.6(abort+0x101) [0x4fe3c591]
<br>
[trantor:19821] [ 2] /lib/libc.so.6(__assert_fail+0xfb) [0x4fe3438b]
<br>
[trantor:19821] [ 3] /usr/local/openmpi/dev/lib/libmpi.so.0 [0xe554e2]
<br>
[trantor:19821] [ 4]
<br>
/usr/local/openmpi/dev/lib/libmpi.so.0(ompi_group_finalize+0x66)
<br>
[0xe55b69]
<br>
[trantor:19821] [ 5]
<br>
/usr/local/openmpi/dev/lib/libmpi.so.0(ompi_mpi_finalize+0x37a)
<br>
[0xe62ab6]
<br>
[trantor:19821] [ 6]
<br>
/usr/local/openmpi/dev/lib/libmpi.so.0(PMPI_Finalize+0x5f) [0xe9ca6f]
<br>
[trantor:19821] [ 7] a.out(main+0x2f) [0x804877d]
<br>
[trantor:19821] [ 8] /lib/libc.so.6(__libc_start_main+0xdc) [0x4fe27f2c]
<br>
[trantor:19821] [ 9] a.out [0x8048661]
<br>
[trantor:19821] *** End of error message ***
<br>
Aborted
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
<li><strong>Next message:</strong> <a href="2044.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Previous message:</strong> <a href="2042.php">Lisandro Dalcin: "[OMPI devel] MPI_Comm_free with MPI_COMM_SELF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2046.php">Jeff Squyres: "Re: [OMPI devel] freeing GROUP_EMPTY"</a>
<li><strong>Reply:</strong> <a href="2046.php">Jeff Squyres: "Re: [OMPI devel] freeing GROUP_EMPTY"</a>
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
