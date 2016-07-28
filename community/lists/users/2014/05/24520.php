<?
$subject_val = "Re: [OMPI users] Valgrind reports lots of memory leakage";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 30 15:32:00 2014" -->
<!-- isoreceived="20140530193200" -->
<!-- sent="Fri, 30 May 2014 13:31:56 -0600" -->
<!-- isosent="20140530193156" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Valgrind reports lots of memory leakage" -->
<!-- id="20140530193156.GE44233_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5388D9B3.2070904_at_earthlink.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] Valgrind reports lots of memory leakage<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-30 15:31:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/06/24521.php">Alain Miniussi: "Re: [OMPI users] divide-by-zero in mca_btl_openib_add_procs"</a>
<li><strong>Previous message:</strong> <a href="24519.php">W Spector: "[OMPI users] Valgrind reports lots of memory leakage"</a>
<li><strong>In reply to:</strong> <a href="24519.php">W Spector: "[OMPI users] Valgrind reports lots of memory leakage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/06/24721.php">Jeffrey A Cummings: "[OMPI users] Problem moving from 1.4 to 1.6"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/06/24721.php">Jeffrey A Cummings: "[OMPI users] Problem moving from 1.4 to 1.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We are aware of the problem and many of these leaks are already fixed in
<br>
the trunk and 1.8.2 nightlies.
<br>
<p>-Nathan Hjelm
<br>
HPC-5, LANL
<br>
<p><p>On Fri, May 30, 2014 at 12:19:15PM -0700, W Spector wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have been doing a lot of testing/fixing lately on our code, using valgrind
</span><br>
<span class="quotelev1">&gt; to find problems.  Unfortunately, OpenMPI causes a lot of 'false positives'
</span><br>
<span class="quotelev1">&gt; in our testing due to memory leaks of its own.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It appears that MPI_Init allocates a lot of memory blocks that MPI_Finalize
</span><br>
<span class="quotelev1">&gt; never bothers to clean up.  (Perhaps some should be cleaned up during the
</span><br>
<span class="quotelev1">&gt; MPI_Init process itself?)  There are also a couple of blocks that are
</span><br>
<span class="quotelev1">&gt; created during MPI_Finalize that are not freed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Appended is a trivial 'hello world' program which demonstrates this using
</span><br>
<span class="quotelev1">&gt; valgrind.  Rerunning with the valgrind --leak-check=full option shows a
</span><br>
<span class="quotelev1">&gt; plethora of objects which are not deallocated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In these runs, OpenMPI is at version 1.8.1, but older versions also have the
</span><br>
<span class="quotelev1">&gt; problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Walter
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; wws_at_w6ws-4:/tmp$ cat hellompi.f90
</span><br>
<span class="quotelev1">&gt; program hellompi
</span><br>
<span class="quotelev1">&gt;   use mpi
</span><br>
<span class="quotelev1">&gt;   implicit none
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   integer :: mpierr
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   call MPI_INIT (ierror=mpierr)
</span><br>
<span class="quotelev1">&gt;   print *, 'hello world!'
</span><br>
<span class="quotelev1">&gt;   call MPI_FINALIZE (ierror=mpierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; end program
</span><br>
<span class="quotelev1">&gt; wws_at_w6ws-4:/tmp$ mpif90 --version hellompi.f90
</span><br>
<span class="quotelev1">&gt; GNU Fortran (Ubuntu 4.8.2-19ubuntu1) 4.8.2
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2013 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; GNU Fortran comes with NO WARRANTY, to the extent permitted by law.
</span><br>
<span class="quotelev1">&gt; You may redistribute copies of GNU Fortran
</span><br>
<span class="quotelev1">&gt; under the terms of the GNU General Public License.
</span><br>
<span class="quotelev1">&gt; For more information about these matters, see the file named COPYING
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; wws_at_w6ws-4:/tmp$ mpif90 hellompi.f90
</span><br>
<span class="quotelev1">&gt; wws_at_w6ws-4:/tmp$ valgrind a.out
</span><br>
<span class="quotelev1">&gt; ==6897== Memcheck, a memory error detector
</span><br>
<span class="quotelev1">&gt; ==6897== Copyright (C) 2002-2013, and GNU GPL'd, by Julian Seward et al.
</span><br>
<span class="quotelev1">&gt; ==6897== Using Valgrind-3.10.0.SVN and LibVEX; rerun with -h for copyright
</span><br>
<span class="quotelev1">&gt; info
</span><br>
<span class="quotelev1">&gt; ==6897== Command: a.out
</span><br>
<span class="quotelev1">&gt; ==6897==
</span><br>
<span class="quotelev1">&gt;  hello world!
</span><br>
<span class="quotelev1">&gt; ==6897==
</span><br>
<span class="quotelev1">&gt; ==6897== HEAP SUMMARY:
</span><br>
<span class="quotelev1">&gt; ==6897==     in use at exit: 23,899 bytes in 110 blocks
</span><br>
<span class="quotelev1">&gt; ==6897==   total heap usage: 15,436 allocs, 15,326 frees, 14,034,006 bytes
</span><br>
<span class="quotelev1">&gt; allocated
</span><br>
<span class="quotelev1">&gt; ==6897==
</span><br>
<span class="quotelev1">&gt; ==6897== LEAK SUMMARY:
</span><br>
<span class="quotelev1">&gt; ==6897==    definitely lost: 13,159 bytes in 26 blocks
</span><br>
<span class="quotelev1">&gt; ==6897==    indirectly lost: 2,800 bytes in 13 blocks
</span><br>
<span class="quotelev1">&gt; ==6897==      possibly lost: 0 bytes in 0 blocks
</span><br>
<span class="quotelev1">&gt; ==6897==    still reachable: 7,940 bytes in 71 blocks
</span><br>
<span class="quotelev1">&gt; ==6897==         suppressed: 0 bytes in 0 blocks
</span><br>
<span class="quotelev1">&gt; ==6897== Rerun with --leak-check=full to see details of leaked memory
</span><br>
<span class="quotelev1">&gt; ==6897==
</span><br>
<span class="quotelev1">&gt; ==6897== For counts of detected and suppressed errors, rerun with: -v
</span><br>
<span class="quotelev1">&gt; ==6897== ERROR SUMMARY: 0 errors from 0 contexts (suppressed: 0 from 0)
</span><br>
<span class="quotelev1">&gt; wws_at_w6ws-4:/tmp$
</span><br>
<span class="quotelev1">&gt; wws_at_w6ws-4:/tmp$
</span><br>
<span class="quotelev1">&gt; wws_at_w6ws-4:/tmp$
</span><br>
<span class="quotelev1">&gt; wws_at_w6ws-4:/tmp$
</span><br>
<span class="quotelev1">&gt; wws_at_w6ws-4:/tmp$ valgrind --leak-check=full a.out
</span><br>
<span class="quotelev1">&gt; ==6932== Memcheck, a memory error detector
</span><br>
<span class="quotelev1">&gt; ==6932== Copyright (C) 2002-2013, and GNU GPL'd, by Julian Seward et al.
</span><br>
<span class="quotelev1">&gt; ==6932== Using Valgrind-3.10.0.SVN and LibVEX; rerun with -h for copyright
</span><br>
<span class="quotelev1">&gt; info
</span><br>
<span class="quotelev1">&gt; ==6932== Command: a.out
</span><br>
<span class="quotelev1">&gt; ==6932==
</span><br>
<span class="quotelev1">&gt;  hello world!
</span><br>
<span class="quotelev1">&gt; ==6932==
</span><br>
<span class="quotelev1">&gt; ==6932== HEAP SUMMARY:
</span><br>
<span class="quotelev1">&gt; ==6932==     in use at exit: 23,899 bytes in 110 blocks
</span><br>
<span class="quotelev1">&gt; ==6932==   total heap usage: 15,438 allocs, 15,328 frees, 14,034,092 bytes
</span><br>
<span class="quotelev1">&gt; allocated
</span><br>
<span class="quotelev1">&gt; ==6932==
</span><br>
<span class="quotelev1">&gt; ==6932== 1 bytes in 1 blocks are definitely lost in loss record 2 of 89
</span><br>
<span class="quotelev1">&gt; ==6932==    at 0x4C2AB80: malloc (in
</span><br>
<span class="quotelev1">&gt; /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x917CAD0: ???
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x5AAD346: opal_db_base_store (db_base_fns.c:49)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57B12A2: ompi_modex_send_string
</span><br>
<span class="quotelev1">&gt; (ompi_module_exchange.c:119)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57AD42A: ompi_mpi_init (ompi_mpi_init.c:511)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57CE572: PMPI_Init (pinit.c:84)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x4E777C4: MPI_INIT (pinit_f.c:82)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400B33: MAIN__ (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400BD5: main (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==
</span><br>
<span class="quotelev1">&gt; ==6932== 6 bytes in 1 blocks are definitely lost in loss record 3 of 89
</span><br>
<span class="quotelev1">&gt; ==6932==    at 0x4C2AB80: malloc (in
</span><br>
<span class="quotelev1">&gt; /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x66BA951: orte_register_params (orte_mca_params.c:719)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x66B1042: orte_init (orte_init.c:107)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57AD39C: ompi_mpi_init (ompi_mpi_init.c:464)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57CE572: PMPI_Init (pinit.c:84)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x4E777C4: MPI_INIT (pinit_f.c:82)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400B33: MAIN__ (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400BD5: main (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==
</span><br>
<span class="quotelev1">&gt; ==6932== 8 bytes in 1 blocks are definitely lost in loss record 4 of 89
</span><br>
<span class="quotelev1">&gt; ==6932==    at 0x4C2AB80: malloc (in
</span><br>
<span class="quotelev1">&gt; /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0xAFB7C33: ???
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57AE12F: ompi_mpi_finalize (ompi_mpi_finalize.c:143)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x4E74878: mpi_finalize (pfinalize_f.c:69)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400B9F: MAIN__ (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400BD5: main (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==
</span><br>
<span class="quotelev1">&gt; ==6932== 17 (16 direct, 1 indirect) bytes in 1 blocks are definitely lost in
</span><br>
<span class="quotelev1">&gt; loss record 8 of 89
</span><br>
<span class="quotelev1">&gt; ==6932==    at 0x4C2AB80: malloc (in
</span><br>
<span class="quotelev1">&gt; /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x917D30D: ???
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x5AAD58A: opal_db_base_fetch (db_base_fns.c:133)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57FEDF0: ompi_rte_db_fetch (rte_orte_module.c:281)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57B12DF: ompi_modex_recv_string
</span><br>
<span class="quotelev1">&gt; (ompi_module_exchange.c:138)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x579CE2A: ompi_comm_cid_init (comm_cid.c:164)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57ADF0C: ompi_mpi_init (ompi_mpi_init.c:880)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57CE572: PMPI_Init (pinit.c:84)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x4E777C4: MPI_INIT (pinit_f.c:82)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400B33: MAIN__ (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400BD5: main (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==
</span><br>
<span class="quotelev1">&gt; ==6932== 24 bytes in 1 blocks are definitely lost in loss record 12 of 89
</span><br>
<span class="quotelev1">&gt; ==6932==    at 0x4C2AB80: malloc (in
</span><br>
<span class="quotelev1">&gt; /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x917CAD0: ???
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x5AAD346: opal_db_base_store (db_base_fns.c:49)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57B1179: ompi_modex_send (ompi_module_exchange.c:49)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0xB5CCE77: ???
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57EAC42: mca_btl_base_select (btl_base_select.c:108)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0xAFB8790: ???
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57EA42D: mca_bml_base_init (bml_base_init.c:69)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0xC2902E6: ???
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57FCFA2: mca_pml_base_select (pml_base_select.c:128)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57AD6B9: ompi_mpi_init (ompi_mpi_init.c:604)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57CE572: PMPI_Init (pinit.c:84)
</span><br>
<span class="quotelev1">&gt; ==6932==
</span><br>
<span class="quotelev1">&gt; ==6932== 48 bytes in 1 blocks are definitely lost in loss record 31 of 89
</span><br>
<span class="quotelev1">&gt; ==6932==    at 0x4C2AB80: malloc (in
</span><br>
<span class="quotelev1">&gt; /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x66E3C83: orte_oob_base_select (opal_object.h:467)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x66D4E64: orte_ess_base_app_setup (ess_base_std_app.c:128)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x833C36E: ???
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x66B1107: orte_init (orte_init.c:148)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57AD39C: ompi_mpi_init (ompi_mpi_init.c:464)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57CE572: PMPI_Init (pinit.c:84)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x4E777C4: MPI_INIT (pinit_f.c:82)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400B33: MAIN__ (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400BD5: main (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==
</span><br>
<span class="quotelev1">&gt; ==6932== 64 bytes in 1 blocks are definitely lost in loss record 53 of 89
</span><br>
<span class="quotelev1">&gt; ==6932==    at 0x4C2AB80: malloc (in
</span><br>
<span class="quotelev1">&gt; /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x5794DFE: ompi_attr_create_keyval_impl (opal_object.h:467)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x579527B: ompi_attr_create_keyval (attribute.c:582)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x5796C36: ompi_attr_create_predefined
</span><br>
<span class="quotelev1">&gt; (attribute_predefined.c:225)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57ADA14: ompi_mpi_init (ompi_mpi_init.c:739)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57CE572: PMPI_Init (pinit.c:84)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x4E777C4: MPI_INIT (pinit_f.c:82)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400B33: MAIN__ (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400BD5: main (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==
</span><br>
<span class="quotelev1">&gt; ==6932== 64 bytes in 1 blocks are definitely lost in loss record 54 of 89
</span><br>
<span class="quotelev1">&gt; ==6932==    at 0x4C2AB80: malloc (in
</span><br>
<span class="quotelev1">&gt; /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x5794DFE: ompi_attr_create_keyval_impl (opal_object.h:467)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x579527B: ompi_attr_create_keyval (attribute.c:582)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x5796C76: ompi_attr_create_predefined
</span><br>
<span class="quotelev1">&gt; (attribute_predefined.c:225)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57ADA14: ompi_mpi_init (ompi_mpi_init.c:739)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57CE572: PMPI_Init (pinit.c:84)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x4E777C4: MPI_INIT (pinit_f.c:82)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400B33: MAIN__ (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400BD5: main (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==
</span><br>
<span class="quotelev1">&gt; ==6932== 64 bytes in 1 blocks are definitely lost in loss record 55 of 89
</span><br>
<span class="quotelev1">&gt; ==6932==    at 0x4C2AB80: malloc (in
</span><br>
<span class="quotelev1">&gt; /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x5794DFE: ompi_attr_create_keyval_impl (opal_object.h:467)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x579527B: ompi_attr_create_keyval (attribute.c:582)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x5796CB5: ompi_attr_create_predefined
</span><br>
<span class="quotelev1">&gt; (attribute_predefined.c:225)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57ADA14: ompi_mpi_init (ompi_mpi_init.c:739)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57CE572: PMPI_Init (pinit.c:84)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x4E777C4: MPI_INIT (pinit_f.c:82)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400B33: MAIN__ (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400BD5: main (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==
</span><br>
<span class="quotelev1">&gt; ==6932== 64 bytes in 1 blocks are definitely lost in loss record 56 of 89
</span><br>
<span class="quotelev1">&gt; ==6932==    at 0x4C2AB80: malloc (in
</span><br>
<span class="quotelev1">&gt; /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x5794DFE: ompi_attr_create_keyval_impl (opal_object.h:467)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x579527B: ompi_attr_create_keyval (attribute.c:582)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x5796CF4: ompi_attr_create_predefined
</span><br>
<span class="quotelev1">&gt; (attribute_predefined.c:225)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57ADA14: ompi_mpi_init (ompi_mpi_init.c:739)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57CE572: PMPI_Init (pinit.c:84)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x4E777C4: MPI_INIT (pinit_f.c:82)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400B33: MAIN__ (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400BD5: main (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==
</span><br>
<span class="quotelev1">&gt; ==6932== 64 bytes in 1 blocks are definitely lost in loss record 57 of 89
</span><br>
<span class="quotelev1">&gt; ==6932==    at 0x4C2AB80: malloc (in
</span><br>
<span class="quotelev1">&gt; /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x5794DFE: ompi_attr_create_keyval_impl (opal_object.h:467)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x579527B: ompi_attr_create_keyval (attribute.c:582)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x5796D33: ompi_attr_create_predefined
</span><br>
<span class="quotelev1">&gt; (attribute_predefined.c:225)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57ADA14: ompi_mpi_init (ompi_mpi_init.c:739)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57CE572: PMPI_Init (pinit.c:84)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x4E777C4: MPI_INIT (pinit_f.c:82)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400B33: MAIN__ (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400BD5: main (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==
</span><br>
<span class="quotelev1">&gt; ==6932== 64 bytes in 1 blocks are definitely lost in loss record 58 of 89
</span><br>
<span class="quotelev1">&gt; ==6932==    at 0x4C2AB80: malloc (in
</span><br>
<span class="quotelev1">&gt; /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x5794DFE: ompi_attr_create_keyval_impl (opal_object.h:467)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x579527B: ompi_attr_create_keyval (attribute.c:582)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x5796D76: ompi_attr_create_predefined
</span><br>
<span class="quotelev1">&gt; (attribute_predefined.c:225)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57ADA14: ompi_mpi_init (ompi_mpi_init.c:739)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57CE572: PMPI_Init (pinit.c:84)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x4E777C4: MPI_INIT (pinit_f.c:82)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400B33: MAIN__ (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400BD5: main (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==
</span><br>
<span class="quotelev1">&gt; ==6932== 64 bytes in 1 blocks are definitely lost in loss record 59 of 89
</span><br>
<span class="quotelev1">&gt; ==6932==    at 0x4C2AB80: malloc (in
</span><br>
<span class="quotelev1">&gt; /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x5794DFE: ompi_attr_create_keyval_impl (opal_object.h:467)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x579527B: ompi_attr_create_keyval (attribute.c:582)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x5796DB5: ompi_attr_create_predefined
</span><br>
<span class="quotelev1">&gt; (attribute_predefined.c:225)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57ADA14: ompi_mpi_init (ompi_mpi_init.c:739)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57CE572: PMPI_Init (pinit.c:84)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x4E777C4: MPI_INIT (pinit_f.c:82)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400B33: MAIN__ (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400BD5: main (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==
</span><br>
<span class="quotelev1">&gt; ==6932== 96 (48 direct, 48 indirect) bytes in 1 blocks are definitely lost
</span><br>
<span class="quotelev1">&gt; in loss record 61 of 89
</span><br>
<span class="quotelev1">&gt; ==6932==    at 0x4C2AB80: malloc (in
</span><br>
<span class="quotelev1">&gt; /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x5A8E541: open_component (opal_object.h:467)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x5A8F8F9: mca_base_component_find
</span><br>
<span class="quotelev1">&gt; (mca_base_component_find.c:466)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x5A9A428: mca_base_framework_components_register
</span><br>
<span class="quotelev1">&gt; (mca_base_components_register.c:57)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x5A9A8FD: mca_base_framework_register
</span><br>
<span class="quotelev1">&gt; (mca_base_framework.c:107)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x5A9A968: mca_base_framework_open (mca_base_framework.c:131)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57AD686: ompi_mpi_init (ompi_mpi_init.c:577)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57CE572: PMPI_Init (pinit.c:84)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x4E777C4: MPI_INIT (pinit_f.c:82)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400B33: MAIN__ (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400BD5: main (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==
</span><br>
<span class="quotelev1">&gt; ==6932== 96 bytes in 2 blocks are definitely lost in loss record 62 of 89
</span><br>
<span class="quotelev1">&gt; ==6932==    at 0x4C2AB80: malloc (in
</span><br>
<span class="quotelev1">&gt; /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x5A8E541: open_component (opal_object.h:467)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x5A8F8F9: mca_base_component_find
</span><br>
<span class="quotelev1">&gt; (mca_base_component_find.c:466)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x5A9A428: mca_base_framework_components_register
</span><br>
<span class="quotelev1">&gt; (mca_base_components_register.c:57)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x5A9A8FD: mca_base_framework_register
</span><br>
<span class="quotelev1">&gt; (mca_base_framework.c:107)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x5A9A968: mca_base_framework_open (mca_base_framework.c:131)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x5A9A9B5: mca_base_framework_open (mca_base_framework.c:150)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57AD629: ompi_mpi_init (ompi_mpi_init.c:564)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57CE572: PMPI_Init (pinit.c:84)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x4E777C4: MPI_INIT (pinit_f.c:82)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400B33: MAIN__ (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400BD5: main (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==
</span><br>
<span class="quotelev1">&gt; ==6932== 160 bytes in 1 blocks are definitely lost in loss record 68 of 89
</span><br>
<span class="quotelev1">&gt; ==6932==    at 0x4C2AB80: malloc (in
</span><br>
<span class="quotelev1">&gt; /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x999C136: ???
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57AD75A: ompi_mpi_init (ompi_mpi_init.c:627)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57CE572: PMPI_Init (pinit.c:84)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x4E777C4: MPI_INIT (pinit_f.c:82)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400B33: MAIN__ (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400BD5: main (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==
</span><br>
<span class="quotelev1">&gt; ==6932== 160 bytes in 1 blocks are definitely lost in loss record 69 of 89
</span><br>
<span class="quotelev1">&gt; ==6932==    at 0x4C2AB80: malloc (in
</span><br>
<span class="quotelev1">&gt; /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x999BFB6: ???
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57ADB7E: ompi_mpi_init (ompi_mpi_init.c:816)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57CE572: PMPI_Init (pinit.c:84)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x4E777C4: MPI_INIT (pinit_f.c:82)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400B33: MAIN__ (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400BD5: main (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==
</span><br>
<span class="quotelev1">&gt; ==6932== 160 bytes in 1 blocks are definitely lost in loss record 70 of 89
</span><br>
<span class="quotelev1">&gt; ==6932==    at 0x4C2AB80: malloc (in
</span><br>
<span class="quotelev1">&gt; /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x999BFB6: ???
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57AE1CB: ompi_mpi_finalize (ompi_mpi_finalize.c:222)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x4E74878: mpi_finalize (pfinalize_f.c:69)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400B9F: MAIN__ (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400BD5: main (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==
</span><br>
<span class="quotelev1">&gt; ==6932== 184 (96 direct, 88 indirect) bytes in 1 blocks are definitely lost
</span><br>
<span class="quotelev1">&gt; in loss record 71 of 89
</span><br>
<span class="quotelev1">&gt; ==6932==    at 0x4C2AB80: malloc (in
</span><br>
<span class="quotelev1">&gt; /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x5ABF110: opal_hwloc_base_filter_cpus (opal_object.h:467)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x5AC0D6A: opal_hwloc_base_get_topology
</span><br>
<span class="quotelev1">&gt; (hwloc_base_util.c:226)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57AD7B4: ompi_mpi_init (ompi_mpi_init.c:485)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57CE572: PMPI_Init (pinit.c:84)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x4E777C4: MPI_INIT (pinit_f.c:82)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400B33: MAIN__ (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400BD5: main (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==
</span><br>
<span class="quotelev1">&gt; ==6932== 199 (80 direct, 119 indirect) bytes in 1 blocks are definitely lost
</span><br>
<span class="quotelev1">&gt; in loss record 72 of 89
</span><br>
<span class="quotelev1">&gt; ==6932==    at 0x4C2AB80: malloc (in
</span><br>
<span class="quotelev1">&gt; /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x5A98EFD: mca_base_var_enum_create (opal_object.h:467)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0xCD0B59B: ???
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x5A9A531: mca_base_framework_components_register
</span><br>
<span class="quotelev1">&gt; (mca_base_components_register.c:116)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x5A9A8FD: mca_base_framework_register
</span><br>
<span class="quotelev1">&gt; (mca_base_framework.c:107)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x5A9A968: mca_base_framework_open (mca_base_framework.c:131)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57AD667: ompi_mpi_init (ompi_mpi_init.c:572)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57CE572: PMPI_Init (pinit.c:84)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x4E777C4: MPI_INIT (pinit_f.c:82)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400B33: MAIN__ (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400BD5: main (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==
</span><br>
<span class="quotelev1">&gt; ==6932== 376 (232 direct, 144 indirect) bytes in 1 blocks are definitely
</span><br>
<span class="quotelev1">&gt; lost in loss record 76 of 89
</span><br>
<span class="quotelev1">&gt; ==6932==    at 0x4C2AB80: malloc (in
</span><br>
<span class="quotelev1">&gt; /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0xAFB77F4: ???
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0xC28E7D8: ???
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57ADA88: ompi_mpi_init (ompi_mpi_init.c:771)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57CE572: PMPI_Init (pinit.c:84)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x4E777C4: MPI_INIT (pinit_f.c:82)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400B33: MAIN__ (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400BD5: main (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==
</span><br>
<span class="quotelev1">&gt; ==6932== 888 bytes in 1 blocks are definitely lost in loss record 84 of 89
</span><br>
<span class="quotelev1">&gt; ==6932==    at 0x4C2AB80: malloc (in
</span><br>
<span class="quotelev1">&gt; /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57928B4: ompi_free_list_grow (ompi_free_list.c:203)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0xC28E415: ???
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57FD909: mca_pml_v_enable (pml_v_component.c:217)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57ADA5C: ompi_mpi_init (ompi_mpi_init.c:760)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57CE572: PMPI_Init (pinit.c:84)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x4E777C4: MPI_INIT (pinit_f.c:82)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400B33: MAIN__ (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400BD5: main (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==
</span><br>
<span class="quotelev1">&gt; ==6932== 2,400 bytes in 1 blocks are definitely lost in loss record 87 of 89
</span><br>
<span class="quotelev1">&gt; ==6932==    at 0x4C2AB80: malloc (in
</span><br>
<span class="quotelev1">&gt; /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0xA5A2FE6: ???
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0xA5A2EC8: ???
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0xC290610: ???
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x5A9070C: mca_base_framework_components_open
</span><br>
<span class="quotelev1">&gt; (mca_base_components_open.c:173)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57FC9F6: mca_pml_base_open (pml_base_frame.c:187)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x5A9A9B5: mca_base_framework_open (mca_base_framework.c:150)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57AD648: ompi_mpi_init (ompi_mpi_init.c:568)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57CE572: PMPI_Init (pinit.c:84)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x4E777C4: MPI_INIT (pinit_f.c:82)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400B33: MAIN__ (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400BD5: main (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==
</span><br>
<span class="quotelev1">&gt; ==6932== 2,480 (80 direct, 2,400 indirect) bytes in 1 blocks are definitely
</span><br>
<span class="quotelev1">&gt; lost in loss record 88 of 89
</span><br>
<span class="quotelev1">&gt; ==6932==    at 0x4C2AB80: malloc (in
</span><br>
<span class="quotelev1">&gt; /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0xA5A2EAC: ???
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0xBE632D0: ???
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x5A9070C: mca_base_framework_components_open
</span><br>
<span class="quotelev1">&gt; (mca_base_components_open.c:173)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57FC9F6: mca_pml_base_open (pml_base_frame.c:187)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x5A9A9B5: mca_base_framework_open (mca_base_framework.c:150)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57AD648: ompi_mpi_init (ompi_mpi_init.c:568)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57CE572: PMPI_Init (pinit.c:84)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x4E777C4: MPI_INIT (pinit_f.c:82)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400B33: MAIN__ (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400BD5: main (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==
</span><br>
<span class="quotelev1">&gt; ==6932== 8,208 bytes in 1 blocks are definitely lost in loss record 89 of 89
</span><br>
<span class="quotelev1">&gt; ==6932==    at 0x4C2AB80: malloc (in
</span><br>
<span class="quotelev1">&gt; /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0xCCEDD99: ???
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x5A6A708: opal_free_list_grow (opal_object.h:424)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0xCCE9649: ???
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57F90B4: ompi_osc_base_find_available (osc_base_frame.c:48)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57AD929: ompi_mpi_init (ompi_mpi_init.c:661)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x57CE572: PMPI_Init (pinit.c:84)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x4E777C4: MPI_INIT (pinit_f.c:82)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400B33: MAIN__ (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==    by 0x400BD5: main (in /tmp/a.out)
</span><br>
<span class="quotelev1">&gt; ==6932==
</span><br>
<span class="quotelev1">&gt; ==6932== LEAK SUMMARY:
</span><br>
<span class="quotelev1">&gt; ==6932==    definitely lost: 13,159 bytes in 26 blocks
</span><br>
<span class="quotelev1">&gt; ==6932==    indirectly lost: 2,800 bytes in 13 blocks
</span><br>
<span class="quotelev1">&gt; ==6932==      possibly lost: 0 bytes in 0 blocks
</span><br>
<span class="quotelev1">&gt; ==6932==    still reachable: 7,940 bytes in 71 blocks
</span><br>
<span class="quotelev1">&gt; ==6932==         suppressed: 0 bytes in 0 blocks
</span><br>
<span class="quotelev1">&gt; ==6932== Reachable blocks (those to which a pointer was found) are not
</span><br>
<span class="quotelev1">&gt; shown.
</span><br>
<span class="quotelev1">&gt; ==6932== To see them, rerun with: --leak-check=full --show-leak-kinds=all
</span><br>
<span class="quotelev1">&gt; ==6932==
</span><br>
<span class="quotelev1">&gt; ==6932== For counts of detected and suppressed errors, rerun with: -v
</span><br>
<span class="quotelev1">&gt; ==6932== ERROR SUMMARY: 25 errors from 25 contexts (suppressed: 0 from 0)
</span><br>
<span class="quotelev1">&gt; wws_at_w6ws-4:/tmp$
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24520/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/06/24521.php">Alain Miniussi: "Re: [OMPI users] divide-by-zero in mca_btl_openib_add_procs"</a>
<li><strong>Previous message:</strong> <a href="24519.php">W Spector: "[OMPI users] Valgrind reports lots of memory leakage"</a>
<li><strong>In reply to:</strong> <a href="24519.php">W Spector: "[OMPI users] Valgrind reports lots of memory leakage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/06/24721.php">Jeffrey A Cummings: "[OMPI users] Problem moving from 1.4 to 1.6"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/06/24721.php">Jeffrey A Cummings: "[OMPI users] Problem moving from 1.4 to 1.6"</a>
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
