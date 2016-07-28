<?
$subject_val = "Re: [OMPI users] Hang in MPI_Abort";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 30 17:00:32 2016" -->
<!-- isoreceived="20160630210032" -->
<!-- sent="Thu, 30 Jun 2016 14:00:28 -0700" -->
<!-- isosent="20160630210028" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hang in MPI_Abort" -->
<!-- id="05FF0906-A4E6-4B8F-9198-274B2D5C12E2_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5775877F.6040202_at_cora.nwra.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Hang in MPI_Abort<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-30 17:00:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/07/29583.php">Thomas Jahns: "Re: [OMPI users] Hang in MPI_Abort"</a>
<li><strong>Previous message:</strong> <a href="29581.php">Orion Poplawski: "Re: [OMPI users] Hang in MPI_Abort"</a>
<li><strong>In reply to:</strong> <a href="29581.php">Orion Poplawski: "Re: [OMPI users] Hang in MPI_Abort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/07/29583.php">Thomas Jahns: "Re: [OMPI users] Hang in MPI_Abort"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/07/29583.php">Thomas Jahns: "Re: [OMPI users] Hang in MPI_Abort"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rats - and this only happens on arm32?
<br>
<p><span class="quotelev1">&gt; On Jun 30, 2016, at 1:56 PM, Orion Poplawski &lt;orion_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 06/30/2016 02:55 PM, Orion Poplawski wrote:
</span><br>
<span class="quotelev2">&gt;&gt; valgrind output:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ valgrind mpiexec -n 6 ./testphdf5
</span><br>
<span class="quotelev2">&gt;&gt; ==8518== Memcheck, a memory error detector
</span><br>
<span class="quotelev2">&gt;&gt; ==8518== Copyright (C) 2002-2015, and GNU GPL'd, by Julian Seward et al.
</span><br>
<span class="quotelev2">&gt;&gt; ==8518== Using Valgrind-3.11.0 and LibVEX; rerun with -h for copyright info
</span><br>
<span class="quotelev2">&gt;&gt; ==8518== Command: mpiexec -n 6 ./testphdf5
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==
</span><br>
<span class="quotelev2">&gt;&gt; ==8518== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==    at 0x401C724: index (in /usr/lib/ld-2.23.90.so)
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==
</span><br>
<span class="quotelev2">&gt;&gt; ==8518== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==    at 0x401C728: index (in /usr/lib/ld-2.23.90.so)
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==
</span><br>
<span class="quotelev2">&gt;&gt; ==8518== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==    at 0x4008C04: fillin_rpath (in /usr/lib/ld-2.23.90.so)
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==    by 0x4009423: _dl_init_paths (in /usr/lib/ld-2.23.90.so)
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==
</span><br>
<span class="quotelev2">&gt;&gt; ==8518== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==    at 0x4016D48: dl_open_worker (in /usr/lib/ld-2.23.90.so)
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==
</span><br>
<span class="quotelev2">&gt;&gt; ==8518== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==    at 0x4009858: _dl_map_object (in /usr/lib/ld-2.23.90.so)
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==    by 0x4016DA3: dl_open_worker (in /usr/lib/ld-2.23.90.so)
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==
</span><br>
<span class="quotelev2">&gt;&gt; ==8518== Invalid read of size 4
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==    at 0x401C724: index (in /usr/lib/ld-2.23.90.so)
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==  Address 0x4d1b7bc is 1 bytes after a block of size 43 alloc'd
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==    at 0x4849584: malloc (vg_replace_malloc.c:299)
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==    by 0x4BCB75F: __vasprintf_chk (in /usr/lib/libc-2.23.90.so)
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==    by 0x4BCB633: __asprintf_chk (in /usr/lib/libc-2.23.90.so)
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==    by 0x49393E3: UnknownInlinedFun (stdio2.h:178)
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==    by 0x49393E3: dlopen_open (dl_dlopen_module.c:77)
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==    by 0x491B22B: open_component (mca_base_component_find.c:558)
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==    by 0x491C6C3: find_dyn_components (mca_base_component_find.c:446)
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==    by 0x491C6C3: mca_base_component_find (mca_base_component_find.c:190)
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==    by 0x4926D5F: mca_base_framework_components_register
</span><br>
<span class="quotelev2">&gt;&gt; (mca_base_components_register.c:57)
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==    by 0x4927253: mca_base_framework_register (mca_base_framework.c:115)
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==    by 0x49272BB: mca_base_framework_open (mca_base_framework.c:134)
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==    by 0x48735D3: orte_init (orte_init.c:128)
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==    by 0x10C3F3: orterun (orterun.c:908)
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==    by 0x10B25F: main (main.c:13)
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I think this is mainly harmless.  Or at least not in openmpi.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Then:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; aborting MPI processes
</span><br>
<span class="quotelev2">&gt;&gt; [arm03-packager00.cloud.fedoraproject.org:08518] 4 more processes have sent
</span><br>
<span class="quotelev2">&gt;&gt; help message help-mpi-api.txt / mpi-abort
</span><br>
<span class="quotelev2">&gt;&gt; [arm03-packager00.cloud.fedoraproject.org:08518] Set MCA parameter
</span><br>
<span class="quotelev2">&gt;&gt; &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev2">&gt;&gt; ==8518== Syscall param write(buf) points to uninitialised byte(s)
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==    at 0x4ABA888: write (in /usr/lib/libpthread-2.23.90.so)
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==    by 0x50FAC9B: component_shutdown (oob_tcp_component.c:658)
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==    by 0x48A9F67: orte_oob_base_close (oob_base_frame.c:73)
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==    by 0x49273EF: mca_base_framework_close (mca_base_framework.c:198)
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==    by 0x50BC647: rte_finalize (ess_hnp_module.c:882)
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==    by 0x4873433: orte_finalize (orte_finalize.c:65)
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==    by 0x10D257: orterun (orterun.c:1151)
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==    by 0x10B25F: main (main.c:13)
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==  Address 0xbd828898 is on thread 1's stack
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==  in frame #1, created by component_shutdown (oob_tcp_component.c:647)
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==
</span><br>
<span class="quotelev2">&gt;&gt; ==8518== HEAP SUMMARY:
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==     in use at exit: 244,487 bytes in 773 blocks
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==   total heap usage: 14,898 allocs, 14,125 frees, 4,150,667 bytes
</span><br>
<span class="quotelev2">&gt;&gt; allocated
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==
</span><br>
<span class="quotelev2">&gt;&gt; ==8518== LEAK SUMMARY:
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==    definitely lost: 33,337 bytes in 23 blocks
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==    indirectly lost: 130,972 bytes in 20 blocks
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==      possibly lost: 2,368 bytes in 32 blocks
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==    still reachable: 77,810 bytes in 698 blocks
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==         suppressed: 0 bytes in 0 blocks
</span><br>
<span class="quotelev2">&gt;&gt; ==8518== Rerun with --leak-check=full to see details of leaked memory
</span><br>
<span class="quotelev2">&gt;&gt; ==8518==
</span><br>
<span class="quotelev2">&gt;&gt; ==8518== For counts of detected and suppressed errors, rerun with: -v
</span><br>
<span class="quotelev2">&gt;&gt; ==8518== Use --track-origins=yes to see where uninitialised values come from
</span><br>
<span class="quotelev2">&gt;&gt; ==8518== ERROR SUMMARY: 310 errors from 8 contexts (suppressed: 0 from 0)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But I should note that this process exits fine.  Seems like some kind of race
</span><br>
<span class="quotelev1">&gt; or otherwise sensitive to external conditions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Orion Poplawski
</span><br>
<span class="quotelev1">&gt; Technical Manager                     303-415-9701 x222
</span><br>
<span class="quotelev1">&gt; NWRA, Boulder/CoRA Office             FAX: 303-415-9702
</span><br>
<span class="quotelev1">&gt; 3380 Mitchell Lane                       orion_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Boulder, CO 80301                   <a href="http://www.nwra.com">http://www.nwra.com</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29581.php">http://www.open-mpi.org/community/lists/users/2016/06/29581.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/07/29583.php">Thomas Jahns: "Re: [OMPI users] Hang in MPI_Abort"</a>
<li><strong>Previous message:</strong> <a href="29581.php">Orion Poplawski: "Re: [OMPI users] Hang in MPI_Abort"</a>
<li><strong>In reply to:</strong> <a href="29581.php">Orion Poplawski: "Re: [OMPI users] Hang in MPI_Abort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/07/29583.php">Thomas Jahns: "Re: [OMPI users] Hang in MPI_Abort"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/07/29583.php">Thomas Jahns: "Re: [OMPI users] Hang in MPI_Abort"</a>
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
