<?
$subject_val = "Re: [OMPI devel] Patch to fix valgrind warning";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 29 13:52:43 2014" -->
<!-- isoreceived="20140429175243" -->
<!-- sent="Tue, 29 Apr 2014 17:52:42 +0000" -->
<!-- isosent="20140429175242" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Patch to fix valgrind warning" -->
<!-- id="B1FFF5F3-ADFC-4D61-8C98-BBDDC1231E87_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAEcYPwBXUjt-0wy0nZt7OWmi5hhKPpUTeY4ujT9PDkr0heeiXg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Patch to fix valgrind warning<br>
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-29 13:52:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14654.php">Ralph Castain: "[OMPI devel] OSHMEM svn ignores missing"</a>
<li><strong>Previous message:</strong> <a href="14652.php">Dave Goodell (dgoodell): "Re: [OMPI devel] MPI_Comm_create_group()"</a>
<li><strong>In reply to:</strong> <a href="14591.php">Lisandro Dalcin: "[OMPI devel] Patch to fix valgrind warning"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've filed a ticket for this so that we don't lose track of it: <a href="https://svn.open-mpi.org/trac/ompi/ticket/4578">https://svn.open-mpi.org/trac/ompi/ticket/4578</a>
<br>
<p>-Dave
<br>
<p>On Apr 24, 2014, at 2:37 AM, Lisandro Dalcin &lt;dalcinl_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Please review the attached patch,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==19533== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==19533==    at 0x140DAB78: component_select (osc_sm_component.c:352)
</span><br>
<span class="quotelev1">&gt; ==19533==    by 0xD9BA0B2: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==19533==    by 0xD9314C1: ompi_win_allocate (win.c:182)
</span><br>
<span class="quotelev1">&gt; ==19533==    by 0xD982C4E: PMPI_Win_allocate (pwin_allocate.c:79)
</span><br>
<span class="quotelev1">&gt; ==19533==    by 0xD628887: __pyx_pw_6mpi4py_3MPI_3Win_11Allocate
</span><br>
<span class="quotelev1">&gt; (mpi4py.MPI.c:109170)
</span><br>
<span class="quotelev1">&gt; ==19533==    by 0x38442E0BD3: PyEval_EvalFrameEx (in
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpython2.7.so.1.0)
</span><br>
<span class="quotelev1">&gt; ==19533==    by 0x38442E21EC: PyEval_EvalCodeEx (in
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpython2.7.so.1.0)
</span><br>
<span class="quotelev1">&gt; ==19533==    by 0x38442E22F1: PyEval_EvalCode (in
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpython2.7.so.1.0)
</span><br>
<span class="quotelev1">&gt; ==19533==    by 0x38442F20DB: PyImport_ExecCodeModuleEx (in
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpython2.7.so.1.0)
</span><br>
<span class="quotelev1">&gt; ==19533==    by 0x38442F2357: ??? (in /usr/lib64/libpython2.7.so.1.0)
</span><br>
<span class="quotelev1">&gt; ==19533==    by 0x38442F2FF0: ??? (in /usr/lib64/libpython2.7.so.1.0)
</span><br>
<span class="quotelev1">&gt; ==19533==    by 0x38442F323C: ??? (in /usr/lib64/libpython2.7.so.1.0)
</span><br>
<span class="quotelev1">&gt; ==19533==
</span><br>
<span class="quotelev1">&gt; ==19533== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==19533==    at 0x140DAB78: component_select (osc_sm_component.c:352)
</span><br>
<span class="quotelev1">&gt; ==19533==    by 0xD9BA0B2: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==19533==    by 0xD93174D: ompi_win_allocate_shared (win.c:213)
</span><br>
<span class="quotelev1">&gt; ==19533==    by 0xD982FD0: PMPI_Win_allocate_shared (pwin_allocate_shared.c:80)
</span><br>
<span class="quotelev1">&gt; ==19533==    by 0xD62C727:
</span><br>
<span class="quotelev1">&gt; __pyx_pw_6mpi4py_3MPI_3Win_13Allocate_shared (mpi4py.MPI.c:109409)
</span><br>
<span class="quotelev1">&gt; ==19533==    by 0x38442E0BD3: PyEval_EvalFrameEx (in
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpython2.7.so.1.0)
</span><br>
<span class="quotelev1">&gt; ==19533==    by 0x38442E21EC: PyEval_EvalCodeEx (in
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpython2.7.so.1.0)
</span><br>
<span class="quotelev1">&gt; ==19533==    by 0x38442E22F1: PyEval_EvalCode (in
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpython2.7.so.1.0)
</span><br>
<span class="quotelev1">&gt; ==19533==    by 0x38442F20DB: PyImport_ExecCodeModuleEx (in
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpython2.7.so.1.0)
</span><br>
<span class="quotelev1">&gt; ==19533==    by 0x38442F2357: ??? (in /usr/lib64/libpython2.7.so.1.0)
</span><br>
<span class="quotelev1">&gt; ==19533==    by 0x38442F2FF0: ??? (in /usr/lib64/libpython2.7.so.1.0)
</span><br>
<span class="quotelev1">&gt; ==19533==    by 0x38442F323C: ??? (in /usr/lib64/libpython2.7.so.1.0)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Lisandro Dalcin
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; CIMEC (UNL/CONICET)
</span><br>
<span class="quotelev1">&gt; Predio CONICET-Santa Fe
</span><br>
<span class="quotelev1">&gt; Colectora RN 168 Km 472, Paraje El Pozo
</span><br>
<span class="quotelev1">&gt; 3000 Santa Fe, Argentina
</span><br>
<span class="quotelev1">&gt; Tel: +54-342-4511594 (ext 1016)
</span><br>
<span class="quotelev1">&gt; Tel/Fax: +54-342-4511169
</span><br>
<span class="quotelev1">&gt; &lt;osc_sm_component.diff&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14591.php">http://www.open-mpi.org/community/lists/devel/2014/04/14591.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14654.php">Ralph Castain: "[OMPI devel] OSHMEM svn ignores missing"</a>
<li><strong>Previous message:</strong> <a href="14652.php">Dave Goodell (dgoodell): "Re: [OMPI devel] MPI_Comm_create_group()"</a>
<li><strong>In reply to:</strong> <a href="14591.php">Lisandro Dalcin: "[OMPI devel] Patch to fix valgrind warning"</a>
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
