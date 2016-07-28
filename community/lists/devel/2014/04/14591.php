<?
$subject_val = "[OMPI devel] Patch to fix valgrind warning";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 24 03:38:06 2014" -->
<!-- isoreceived="20140424073806" -->
<!-- sent="Thu, 24 Apr 2014 10:37:35 +0300" -->
<!-- isosent="20140424073735" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] Patch to fix valgrind warning" -->
<!-- id="CAEcYPwBXUjt-0wy0nZt7OWmi5hhKPpUTeY4ujT9PDkr0heeiXg_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Patch to fix valgrind warning<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-24 03:37:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14592.php">Rupert Nash: "Re: [OMPI devel] Bug report: non-blocking allreduce with user-defined operation gives segfault"</a>
<li><strong>Previous message:</strong> <a href="14590.php">Mike Dubman: "[OMPI devel] RFC: Well-known mca parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14653.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Patch to fix valgrind warning"</a>
<li><strong>Reply:</strong> <a href="14653.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Patch to fix valgrind warning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please review the attached patch,
<br>
<p>==19533== Conditional jump or move depends on uninitialised value(s)
<br>
==19533==    at 0x140DAB78: component_select (osc_sm_component.c:352)
<br>
==19533==    by 0xD9BA0B2: ompi_osc_base_select (osc_base_init.c:73)
<br>
==19533==    by 0xD9314C1: ompi_win_allocate (win.c:182)
<br>
==19533==    by 0xD982C4E: PMPI_Win_allocate (pwin_allocate.c:79)
<br>
==19533==    by 0xD628887: __pyx_pw_6mpi4py_3MPI_3Win_11Allocate
<br>
(mpi4py.MPI.c:109170)
<br>
==19533==    by 0x38442E0BD3: PyEval_EvalFrameEx (in
<br>
/usr/lib64/libpython2.7.so.1.0)
<br>
==19533==    by 0x38442E21EC: PyEval_EvalCodeEx (in
<br>
/usr/lib64/libpython2.7.so.1.0)
<br>
==19533==    by 0x38442E22F1: PyEval_EvalCode (in
<br>
/usr/lib64/libpython2.7.so.1.0)
<br>
==19533==    by 0x38442F20DB: PyImport_ExecCodeModuleEx (in
<br>
/usr/lib64/libpython2.7.so.1.0)
<br>
==19533==    by 0x38442F2357: ??? (in /usr/lib64/libpython2.7.so.1.0)
<br>
==19533==    by 0x38442F2FF0: ??? (in /usr/lib64/libpython2.7.so.1.0)
<br>
==19533==    by 0x38442F323C: ??? (in /usr/lib64/libpython2.7.so.1.0)
<br>
==19533==
<br>
==19533== Conditional jump or move depends on uninitialised value(s)
<br>
==19533==    at 0x140DAB78: component_select (osc_sm_component.c:352)
<br>
==19533==    by 0xD9BA0B2: ompi_osc_base_select (osc_base_init.c:73)
<br>
==19533==    by 0xD93174D: ompi_win_allocate_shared (win.c:213)
<br>
==19533==    by 0xD982FD0: PMPI_Win_allocate_shared (pwin_allocate_shared.c:80)
<br>
==19533==    by 0xD62C727:
<br>
__pyx_pw_6mpi4py_3MPI_3Win_13Allocate_shared (mpi4py.MPI.c:109409)
<br>
==19533==    by 0x38442E0BD3: PyEval_EvalFrameEx (in
<br>
/usr/lib64/libpython2.7.so.1.0)
<br>
==19533==    by 0x38442E21EC: PyEval_EvalCodeEx (in
<br>
/usr/lib64/libpython2.7.so.1.0)
<br>
==19533==    by 0x38442E22F1: PyEval_EvalCode (in
<br>
/usr/lib64/libpython2.7.so.1.0)
<br>
==19533==    by 0x38442F20DB: PyImport_ExecCodeModuleEx (in
<br>
/usr/lib64/libpython2.7.so.1.0)
<br>
==19533==    by 0x38442F2357: ??? (in /usr/lib64/libpython2.7.so.1.0)
<br>
==19533==    by 0x38442F2FF0: ??? (in /usr/lib64/libpython2.7.so.1.0)
<br>
==19533==    by 0x38442F323C: ??? (in /usr/lib64/libpython2.7.so.1.0)
<br>
<p><p><pre>
-- 
Lisandro Dalcin
---------------
CIMEC (UNL/CONICET)
Predio CONICET-Santa Fe
Colectora RN 168 Km 472, Paraje El Pozo
3000 Santa Fe, Argentina
Tel: +54-342-4511594 (ext 1016)
Tel/Fax: +54-342-4511169

</pre>
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14591/osc_sm_component.diff">osc_sm_component.diff</a>
</ul>
<!-- attachment="osc_sm_component.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14592.php">Rupert Nash: "Re: [OMPI devel] Bug report: non-blocking allreduce with user-defined operation gives segfault"</a>
<li><strong>Previous message:</strong> <a href="14590.php">Mike Dubman: "[OMPI devel] RFC: Well-known mca parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14653.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Patch to fix valgrind warning"</a>
<li><strong>Reply:</strong> <a href="14653.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Patch to fix valgrind warning"</a>
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
