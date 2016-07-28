<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 19 18:08:26 2006" -->
<!-- isoreceived="20061019220826" -->
<!-- sent="Thu, 19 Oct 2006 19:08:14 -0300" -->
<!-- isosent="20061019220814" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: MPI_GROUP_TRANSLATE_RANKS (again)" -->
<!-- id="e7ba66e40610191508p3981c342m9fcfa082819bfeda_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="e7ba66e40610191455n237d369cge35429ce1959f28a_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2006-10-19 18:08:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1126.php">Lisandro Dalcin: "[OMPI devel] MPI_BUFFER_ATTACH/DETACH behaviour"</a>
<li><strong>Previous message:</strong> <a href="1124.php">Jeff Squyres: "Re: [OMPI devel] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1133.php">Jeff Squyres: "Re: [OMPI devel] Fwd: MPI_GROUP_TRANSLATE_RANKS (again)"</a>
<li><strong>Reply:</strong> <a href="1133.php">Jeff Squyres: "Re: [OMPI devel] Fwd: MPI_GROUP_TRANSLATE_RANKS (again)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've successfully installed the just released 1.1.2. So I go for a new
<br>
round catching bugs, non standard behavior, or just what could be seen
<br>
as convenient features.
<br>
<p>The problem I've reported with MPI_GROUP_TRANSLATE_RANKS was
<br>
corrected. However, looking at MPI-2 errata documment, it says:
<br>
<p>Add to page 36, after 3.2.11 (above)
<br>
<p>3.2.12 MPI_GROUP_TRANSLATE_RANKS and MPI_PROC_NULL
<br>
<p>MPI_PROC_NULL is a valid rank for input to MPI_GROUP_TRANSLATE_RANKS,
<br>
which returns MPI_PROC_NULL as the translated rank.
<br>
<p>But it seems it returns MPI_UNDEFINED in this case. Try yourself:
<br>
<p>In [1]: from mpi4py import MPI
<br>
<p>In [2]: group = MPI.COMM_WORLD.Get_group()
<br>
<p>In [3]: MPI.Group.Translate_ranks(group, [MPI.PROC_NULL], group)
<br>
Out[3]: [-32766]
<br>
<p>In [4]: MPI.UNDEFINED
<br>
Out[4]: -32766
<br>
<p><p>Additionaly, OMPI segfaults if the group is MPI_GROUP_EMPY. Try yourself
<br>
<p>In [5]: group = MPI.GROUP_EMPTY
<br>
<p>In [6]: MPI.Group.Translate_ranks(group, [MPI.PROC_NULL], group)
<br>
Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:0xfffffff8
<br>
[0] func:/usr/local/openmpi/1.1.2/lib/libopal.so.0 [0xba1dfc]
<br>
[1] func:[0xe67440]
<br>
[2] func:/usr/local/openmpi/1.1.2/lib/libmpi.so.0(MPI_Group_translate_ranks+0xaa
<br>
) [0x5f0786]
<br>
[3] func:/u/dalcinl/lib/python/mpi4py/_mpi.so [0xa5a6c6]
<br>
[4] func:/usr/local/lib/libpython2.4.so.1.0(PyCFunction_Call+0x66) [0x1d5d66]
<br>
# more traceback .....
<br>
[31] func:/usr/local/lib/libpython2.4.so.1.0 [0x20b009]
<br>
*** End of error message ***
<br>
Segmentation fault
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
<li><strong>Next message:</strong> <a href="1126.php">Lisandro Dalcin: "[OMPI devel] MPI_BUFFER_ATTACH/DETACH behaviour"</a>
<li><strong>Previous message:</strong> <a href="1124.php">Jeff Squyres: "Re: [OMPI devel] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1133.php">Jeff Squyres: "Re: [OMPI devel] Fwd: MPI_GROUP_TRANSLATE_RANKS (again)"</a>
<li><strong>Reply:</strong> <a href="1133.php">Jeff Squyres: "Re: [OMPI devel] Fwd: MPI_GROUP_TRANSLATE_RANKS (again)"</a>
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
