<?
$subject_val = "Re: [OMPI users] Hang in MPI_Abort";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 30 16:55:36 2016" -->
<!-- isoreceived="20160630205536" -->
<!-- sent="Thu, 30 Jun 2016 14:55:33 -0600" -->
<!-- isosent="20160630205533" -->
<!-- name="Orion Poplawski" -->
<!-- email="orion_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hang in MPI_Abort" -->
<!-- id="57758745.4020306_at_cora.nwra.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4075A05C-8705-426A-A9A7-D235AC5FD512_at_open-mpi.org" -->
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
<strong>From:</strong> Orion Poplawski (<em>orion_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-30 16:55:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29581.php">Orion Poplawski: "Re: [OMPI users] Hang in MPI_Abort"</a>
<li><strong>Previous message:</strong> <a href="29579.php">Ralph Castain: "Re: [OMPI users] Hang in MPI_Abort"</a>
<li><strong>In reply to:</strong> <a href="29579.php">Ralph Castain: "Re: [OMPI users] Hang in MPI_Abort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29581.php">Orion Poplawski: "Re: [OMPI users] Hang in MPI_Abort"</a>
<li><strong>Reply:</strong> <a href="29581.php">Orion Poplawski: "Re: [OMPI users] Hang in MPI_Abort"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
valgrind output:
<br>
<p>$ valgrind mpiexec -n 6 ./testphdf5
<br>
==8518== Memcheck, a memory error detector
<br>
==8518== Copyright (C) 2002-2015, and GNU GPL'd, by Julian Seward et al.
<br>
==8518== Using Valgrind-3.11.0 and LibVEX; rerun with -h for copyright info
<br>
==8518== Command: mpiexec -n 6 ./testphdf5
<br>
==8518==
<br>
==8518== Conditional jump or move depends on uninitialised value(s)
<br>
==8518==    at 0x401C724: index (in /usr/lib/ld-2.23.90.so)
<br>
==8518==
<br>
==8518== Conditional jump or move depends on uninitialised value(s)
<br>
==8518==    at 0x401C728: index (in /usr/lib/ld-2.23.90.so)
<br>
==8518==
<br>
==8518== Conditional jump or move depends on uninitialised value(s)
<br>
==8518==    at 0x4008C04: fillin_rpath (in /usr/lib/ld-2.23.90.so)
<br>
==8518==    by 0x4009423: _dl_init_paths (in /usr/lib/ld-2.23.90.so)
<br>
==8518==
<br>
==8518== Conditional jump or move depends on uninitialised value(s)
<br>
==8518==    at 0x4016D48: dl_open_worker (in /usr/lib/ld-2.23.90.so)
<br>
==8518==
<br>
==8518== Conditional jump or move depends on uninitialised value(s)
<br>
==8518==    at 0x4009858: _dl_map_object (in /usr/lib/ld-2.23.90.so)
<br>
==8518==    by 0x4016DA3: dl_open_worker (in /usr/lib/ld-2.23.90.so)
<br>
==8518==
<br>
==8518== Invalid read of size 4
<br>
==8518==    at 0x401C724: index (in /usr/lib/ld-2.23.90.so)
<br>
==8518==  Address 0x4d1b7bc is 1 bytes after a block of size 43 alloc'd
<br>
==8518==    at 0x4849584: malloc (vg_replace_malloc.c:299)
<br>
==8518==    by 0x4BCB75F: __vasprintf_chk (in /usr/lib/libc-2.23.90.so)
<br>
==8518==    by 0x4BCB633: __asprintf_chk (in /usr/lib/libc-2.23.90.so)
<br>
==8518==    by 0x49393E3: UnknownInlinedFun (stdio2.h:178)
<br>
==8518==    by 0x49393E3: dlopen_open (dl_dlopen_module.c:77)
<br>
==8518==    by 0x491B22B: open_component (mca_base_component_find.c:558)
<br>
==8518==    by 0x491C6C3: find_dyn_components (mca_base_component_find.c:446)
<br>
==8518==    by 0x491C6C3: mca_base_component_find (mca_base_component_find.c:190)
<br>
==8518==    by 0x4926D5F: mca_base_framework_components_register
<br>
(mca_base_components_register.c:57)
<br>
==8518==    by 0x4927253: mca_base_framework_register (mca_base_framework.c:115)
<br>
==8518==    by 0x49272BB: mca_base_framework_open (mca_base_framework.c:134)
<br>
==8518==    by 0x48735D3: orte_init (orte_init.c:128)
<br>
==8518==    by 0x10C3F3: orterun (orterun.c:908)
<br>
==8518==    by 0x10B25F: main (main.c:13)
<br>
==8518==
<br>
<p>I think this is mainly harmless.  Or at least not in openmpi.
<br>
<p>Then:
<br>
<p>aborting MPI processes
<br>
[arm03-packager00.cloud.fedoraproject.org:08518] 4 more processes have sent
<br>
help message help-mpi-api.txt / mpi-abort
<br>
[arm03-packager00.cloud.fedoraproject.org:08518] Set MCA parameter
<br>
&quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
==8518== Syscall param write(buf) points to uninitialised byte(s)
<br>
==8518==    at 0x4ABA888: write (in /usr/lib/libpthread-2.23.90.so)
<br>
==8518==    by 0x50FAC9B: component_shutdown (oob_tcp_component.c:658)
<br>
==8518==    by 0x48A9F67: orte_oob_base_close (oob_base_frame.c:73)
<br>
==8518==    by 0x49273EF: mca_base_framework_close (mca_base_framework.c:198)
<br>
==8518==    by 0x50BC647: rte_finalize (ess_hnp_module.c:882)
<br>
==8518==    by 0x4873433: orte_finalize (orte_finalize.c:65)
<br>
==8518==    by 0x10D257: orterun (orterun.c:1151)
<br>
==8518==    by 0x10B25F: main (main.c:13)
<br>
==8518==  Address 0xbd828898 is on thread 1's stack
<br>
==8518==  in frame #1, created by component_shutdown (oob_tcp_component.c:647)
<br>
==8518==
<br>
==8518==
<br>
==8518== HEAP SUMMARY:
<br>
==8518==     in use at exit: 244,487 bytes in 773 blocks
<br>
==8518==   total heap usage: 14,898 allocs, 14,125 frees, 4,150,667 bytes
<br>
allocated
<br>
==8518==
<br>
==8518== LEAK SUMMARY:
<br>
==8518==    definitely lost: 33,337 bytes in 23 blocks
<br>
==8518==    indirectly lost: 130,972 bytes in 20 blocks
<br>
==8518==      possibly lost: 2,368 bytes in 32 blocks
<br>
==8518==    still reachable: 77,810 bytes in 698 blocks
<br>
==8518==         suppressed: 0 bytes in 0 blocks
<br>
==8518== Rerun with --leak-check=full to see details of leaked memory
<br>
==8518==
<br>
==8518== For counts of detected and suppressed errors, rerun with: -v
<br>
==8518== Use --track-origins=yes to see where uninitialised values come from
<br>
==8518== ERROR SUMMARY: 310 errors from 8 contexts (suppressed: 0 from 0)
<br>
<p><p>On 06/30/2016 11:59 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; So the application procs are all gone, but mpiexec isn&#226;&#128;&#153;t exiting? I&#226;&#128;&#153;d suggest running valgrind, given the corruption.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 30, 2016, at 10:21 AM, Orion Poplawski &lt;orion_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 06/30/2016 10:33 AM, Orion Poplawski wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No, just mpiexec is running.  single node.  Only see it when the test is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; executed with &quot;make check&quot;, not seeing it if I just run mpiexec -n 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./testphdf5 by hand.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hmm, now I'm seeing it running mpiexec by hand.  Trying to check it via gdb
</span><br>
<span class="quotelev2">&gt;&gt; indicates a corrupted stack:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt;&gt; #0  0xb6cd8ac4 in poll () from /lib/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x00000000 in ?? ()
</span><br>
<span class="quotelev2">&gt;&gt; Backtrace stopped: previous frame identical to this frame (corrupt stack?)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any other tracing I can turn on?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Orion Poplawski
</span><br>
<span class="quotelev2">&gt;&gt; Technical Manager                     303-415-9701 x222
</span><br>
<span class="quotelev2">&gt;&gt; NWRA, Boulder/CoRA Office             FAX: 303-415-9702
</span><br>
<span class="quotelev2">&gt;&gt; 3380 Mitchell Lane                       orion_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Boulder, CO 80301                   <a href="http://www.nwra.com">http://www.nwra.com</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29578.php">http://www.open-mpi.org/community/lists/users/2016/06/29578.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29579.php">http://www.open-mpi.org/community/lists/users/2016/06/29579.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Orion Poplawski
Technical Manager                     303-415-9701 x222
NWRA, Boulder/CoRA Office             FAX: 303-415-9702
3380 Mitchell Lane                       orion_at_[hidden]
Boulder, CO 80301                   <a href="http://www.nwra.com">http://www.nwra.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29581.php">Orion Poplawski: "Re: [OMPI users] Hang in MPI_Abort"</a>
<li><strong>Previous message:</strong> <a href="29579.php">Ralph Castain: "Re: [OMPI users] Hang in MPI_Abort"</a>
<li><strong>In reply to:</strong> <a href="29579.php">Ralph Castain: "Re: [OMPI users] Hang in MPI_Abort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29581.php">Orion Poplawski: "Re: [OMPI users] Hang in MPI_Abort"</a>
<li><strong>Reply:</strong> <a href="29581.php">Orion Poplawski: "Re: [OMPI users] Hang in MPI_Abort"</a>
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
