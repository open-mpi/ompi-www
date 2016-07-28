<?
$subject_val = "[OMPI users] Valgrind reports lots of memory leakage";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 30 15:19:18 2014" -->
<!-- isoreceived="20140530191918" -->
<!-- sent="Fri, 30 May 2014 12:19:15 -0700" -->
<!-- isosent="20140530191915" -->
<!-- name="W Spector" -->
<!-- email="w6ws_at_[hidden]" -->
<!-- subject="[OMPI users] Valgrind reports lots of memory leakage" -->
<!-- id="5388D9B3.2070904_at_earthlink.net" -->
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
<strong>Subject:</strong> [OMPI users] Valgrind reports lots of memory leakage<br>
<strong>From:</strong> W Spector (<em>w6ws_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-30 15:19:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24520.php">Nathan Hjelm: "Re: [OMPI users] Valgrind reports lots of memory leakage"</a>
<li><strong>Previous message:</strong> <a href="24518.php">Ralph Castain: "Re: [OMPI users] [warn] Epoll ADD(1) on fd 0 failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24520.php">Nathan Hjelm: "Re: [OMPI users] Valgrind reports lots of memory leakage"</a>
<li><strong>Reply:</strong> <a href="24520.php">Nathan Hjelm: "Re: [OMPI users] Valgrind reports lots of memory leakage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have been doing a lot of testing/fixing lately on our code, using 
<br>
valgrind to find problems.  Unfortunately, OpenMPI causes a lot of 
<br>
'false positives' in our testing due to memory leaks of its own.
<br>
<p>It appears that MPI_Init allocates a lot of memory blocks that 
<br>
MPI_Finalize never bothers to clean up.  (Perhaps some should be cleaned 
<br>
up during the MPI_Init process itself?)  There are also a couple of 
<br>
blocks that are created during MPI_Finalize that are not freed.
<br>
<p>Appended is a trivial 'hello world' program which demonstrates this 
<br>
using valgrind.  Rerunning with the valgrind --leak-check=full option 
<br>
shows a plethora of objects which are not deallocated.
<br>
<p>In these runs, OpenMPI is at version 1.8.1, but older versions also have 
<br>
the problem.
<br>
<p>Walter
<br>
<p>wws_at_w6ws-4:/tmp$ cat hellompi.f90
<br>
program hellompi
<br>
&nbsp;&nbsp;&nbsp;use mpi
<br>
&nbsp;&nbsp;&nbsp;implicit none
<br>
<p>&nbsp;&nbsp;&nbsp;integer :: mpierr
<br>
<p>&nbsp;&nbsp;&nbsp;call MPI_INIT (ierror=mpierr)
<br>
&nbsp;&nbsp;&nbsp;print *, 'hello world!'
<br>
&nbsp;&nbsp;&nbsp;call MPI_FINALIZE (ierror=mpierr)
<br>
<p>end program
<br>
wws_at_w6ws-4:/tmp$ mpif90 --version hellompi.f90
<br>
GNU Fortran (Ubuntu 4.8.2-19ubuntu1) 4.8.2
<br>
Copyright (C) 2013 Free Software Foundation, Inc.
<br>
<p>GNU Fortran comes with NO WARRANTY, to the extent permitted by law.
<br>
You may redistribute copies of GNU Fortran
<br>
under the terms of the GNU General Public License.
<br>
For more information about these matters, see the file named COPYING
<br>
<p>wws_at_w6ws-4:/tmp$ mpif90 hellompi.f90
<br>
wws_at_w6ws-4:/tmp$ valgrind a.out
<br>
==6897== Memcheck, a memory error detector
<br>
==6897== Copyright (C) 2002-2013, and GNU GPL'd, by Julian Seward et al.
<br>
==6897== Using Valgrind-3.10.0.SVN and LibVEX; rerun with -h for 
<br>
copyright info
<br>
==6897== Command: a.out
<br>
==6897==
<br>
&nbsp;&nbsp;hello world!
<br>
==6897==
<br>
==6897== HEAP SUMMARY:
<br>
==6897==     in use at exit: 23,899 bytes in 110 blocks
<br>
==6897==   total heap usage: 15,436 allocs, 15,326 frees, 14,034,006 
<br>
bytes allocated
<br>
==6897==
<br>
==6897== LEAK SUMMARY:
<br>
==6897==    definitely lost: 13,159 bytes in 26 blocks
<br>
==6897==    indirectly lost: 2,800 bytes in 13 blocks
<br>
==6897==      possibly lost: 0 bytes in 0 blocks
<br>
==6897==    still reachable: 7,940 bytes in 71 blocks
<br>
==6897==         suppressed: 0 bytes in 0 blocks
<br>
==6897== Rerun with --leak-check=full to see details of leaked memory
<br>
==6897==
<br>
==6897== For counts of detected and suppressed errors, rerun with: -v
<br>
==6897== ERROR SUMMARY: 0 errors from 0 contexts (suppressed: 0 from 0)
<br>
wws_at_w6ws-4:/tmp$
<br>
wws_at_w6ws-4:/tmp$
<br>
wws_at_w6ws-4:/tmp$
<br>
wws_at_w6ws-4:/tmp$
<br>
wws_at_w6ws-4:/tmp$ valgrind --leak-check=full a.out
<br>
==6932== Memcheck, a memory error detector
<br>
==6932== Copyright (C) 2002-2013, and GNU GPL'd, by Julian Seward et al.
<br>
==6932== Using Valgrind-3.10.0.SVN and LibVEX; rerun with -h for 
<br>
copyright info
<br>
==6932== Command: a.out
<br>
==6932==
<br>
&nbsp;&nbsp;hello world!
<br>
==6932==
<br>
==6932== HEAP SUMMARY:
<br>
==6932==     in use at exit: 23,899 bytes in 110 blocks
<br>
==6932==   total heap usage: 15,438 allocs, 15,328 frees, 14,034,092 
<br>
bytes allocated
<br>
==6932==
<br>
==6932== 1 bytes in 1 blocks are definitely lost in loss record 2 of 89
<br>
==6932==    at 0x4C2AB80: malloc (in 
<br>
/usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
<br>
==6932==    by 0x917CAD0: ???
<br>
==6932==    by 0x5AAD346: opal_db_base_store (db_base_fns.c:49)
<br>
==6932==    by 0x57B12A2: ompi_modex_send_string 
<br>
(ompi_module_exchange.c:119)
<br>
==6932==    by 0x57AD42A: ompi_mpi_init (ompi_mpi_init.c:511)
<br>
==6932==    by 0x57CE572: PMPI_Init (pinit.c:84)
<br>
==6932==    by 0x4E777C4: MPI_INIT (pinit_f.c:82)
<br>
==6932==    by 0x400B33: MAIN__ (in /tmp/a.out)
<br>
==6932==    by 0x400BD5: main (in /tmp/a.out)
<br>
==6932==
<br>
==6932== 6 bytes in 1 blocks are definitely lost in loss record 3 of 89
<br>
==6932==    at 0x4C2AB80: malloc (in 
<br>
/usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
<br>
==6932==    by 0x66BA951: orte_register_params (orte_mca_params.c:719)
<br>
==6932==    by 0x66B1042: orte_init (orte_init.c:107)
<br>
==6932==    by 0x57AD39C: ompi_mpi_init (ompi_mpi_init.c:464)
<br>
==6932==    by 0x57CE572: PMPI_Init (pinit.c:84)
<br>
==6932==    by 0x4E777C4: MPI_INIT (pinit_f.c:82)
<br>
==6932==    by 0x400B33: MAIN__ (in /tmp/a.out)
<br>
==6932==    by 0x400BD5: main (in /tmp/a.out)
<br>
==6932==
<br>
==6932== 8 bytes in 1 blocks are definitely lost in loss record 4 of 89
<br>
==6932==    at 0x4C2AB80: malloc (in 
<br>
/usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
<br>
==6932==    by 0xAFB7C33: ???
<br>
==6932==    by 0x57AE12F: ompi_mpi_finalize (ompi_mpi_finalize.c:143)
<br>
==6932==    by 0x4E74878: mpi_finalize (pfinalize_f.c:69)
<br>
==6932==    by 0x400B9F: MAIN__ (in /tmp/a.out)
<br>
==6932==    by 0x400BD5: main (in /tmp/a.out)
<br>
==6932==
<br>
==6932== 17 (16 direct, 1 indirect) bytes in 1 blocks are definitely 
<br>
lost in loss record 8 of 89
<br>
==6932==    at 0x4C2AB80: malloc (in 
<br>
/usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
<br>
==6932==    by 0x917D30D: ???
<br>
==6932==    by 0x5AAD58A: opal_db_base_fetch (db_base_fns.c:133)
<br>
==6932==    by 0x57FEDF0: ompi_rte_db_fetch (rte_orte_module.c:281)
<br>
==6932==    by 0x57B12DF: ompi_modex_recv_string 
<br>
(ompi_module_exchange.c:138)
<br>
==6932==    by 0x579CE2A: ompi_comm_cid_init (comm_cid.c:164)
<br>
==6932==    by 0x57ADF0C: ompi_mpi_init (ompi_mpi_init.c:880)
<br>
==6932==    by 0x57CE572: PMPI_Init (pinit.c:84)
<br>
==6932==    by 0x4E777C4: MPI_INIT (pinit_f.c:82)
<br>
==6932==    by 0x400B33: MAIN__ (in /tmp/a.out)
<br>
==6932==    by 0x400BD5: main (in /tmp/a.out)
<br>
==6932==
<br>
==6932== 24 bytes in 1 blocks are definitely lost in loss record 12 of 89
<br>
==6932==    at 0x4C2AB80: malloc (in 
<br>
/usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
<br>
==6932==    by 0x917CAD0: ???
<br>
==6932==    by 0x5AAD346: opal_db_base_store (db_base_fns.c:49)
<br>
==6932==    by 0x57B1179: ompi_modex_send (ompi_module_exchange.c:49)
<br>
==6932==    by 0xB5CCE77: ???
<br>
==6932==    by 0x57EAC42: mca_btl_base_select (btl_base_select.c:108)
<br>
==6932==    by 0xAFB8790: ???
<br>
==6932==    by 0x57EA42D: mca_bml_base_init (bml_base_init.c:69)
<br>
==6932==    by 0xC2902E6: ???
<br>
==6932==    by 0x57FCFA2: mca_pml_base_select (pml_base_select.c:128)
<br>
==6932==    by 0x57AD6B9: ompi_mpi_init (ompi_mpi_init.c:604)
<br>
==6932==    by 0x57CE572: PMPI_Init (pinit.c:84)
<br>
==6932==
<br>
==6932== 48 bytes in 1 blocks are definitely lost in loss record 31 of 89
<br>
==6932==    at 0x4C2AB80: malloc (in 
<br>
/usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
<br>
==6932==    by 0x66E3C83: orte_oob_base_select (opal_object.h:467)
<br>
==6932==    by 0x66D4E64: orte_ess_base_app_setup (ess_base_std_app.c:128)
<br>
==6932==    by 0x833C36E: ???
<br>
==6932==    by 0x66B1107: orte_init (orte_init.c:148)
<br>
==6932==    by 0x57AD39C: ompi_mpi_init (ompi_mpi_init.c:464)
<br>
==6932==    by 0x57CE572: PMPI_Init (pinit.c:84)
<br>
==6932==    by 0x4E777C4: MPI_INIT (pinit_f.c:82)
<br>
==6932==    by 0x400B33: MAIN__ (in /tmp/a.out)
<br>
==6932==    by 0x400BD5: main (in /tmp/a.out)
<br>
==6932==
<br>
==6932== 64 bytes in 1 blocks are definitely lost in loss record 53 of 89
<br>
==6932==    at 0x4C2AB80: malloc (in 
<br>
/usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
<br>
==6932==    by 0x5794DFE: ompi_attr_create_keyval_impl (opal_object.h:467)
<br>
==6932==    by 0x579527B: ompi_attr_create_keyval (attribute.c:582)
<br>
==6932==    by 0x5796C36: ompi_attr_create_predefined 
<br>
(attribute_predefined.c:225)
<br>
==6932==    by 0x57ADA14: ompi_mpi_init (ompi_mpi_init.c:739)
<br>
==6932==    by 0x57CE572: PMPI_Init (pinit.c:84)
<br>
==6932==    by 0x4E777C4: MPI_INIT (pinit_f.c:82)
<br>
==6932==    by 0x400B33: MAIN__ (in /tmp/a.out)
<br>
==6932==    by 0x400BD5: main (in /tmp/a.out)
<br>
==6932==
<br>
==6932== 64 bytes in 1 blocks are definitely lost in loss record 54 of 89
<br>
==6932==    at 0x4C2AB80: malloc (in 
<br>
/usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
<br>
==6932==    by 0x5794DFE: ompi_attr_create_keyval_impl (opal_object.h:467)
<br>
==6932==    by 0x579527B: ompi_attr_create_keyval (attribute.c:582)
<br>
==6932==    by 0x5796C76: ompi_attr_create_predefined 
<br>
(attribute_predefined.c:225)
<br>
==6932==    by 0x57ADA14: ompi_mpi_init (ompi_mpi_init.c:739)
<br>
==6932==    by 0x57CE572: PMPI_Init (pinit.c:84)
<br>
==6932==    by 0x4E777C4: MPI_INIT (pinit_f.c:82)
<br>
==6932==    by 0x400B33: MAIN__ (in /tmp/a.out)
<br>
==6932==    by 0x400BD5: main (in /tmp/a.out)
<br>
==6932==
<br>
==6932== 64 bytes in 1 blocks are definitely lost in loss record 55 of 89
<br>
==6932==    at 0x4C2AB80: malloc (in 
<br>
/usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
<br>
==6932==    by 0x5794DFE: ompi_attr_create_keyval_impl (opal_object.h:467)
<br>
==6932==    by 0x579527B: ompi_attr_create_keyval (attribute.c:582)
<br>
==6932==    by 0x5796CB5: ompi_attr_create_predefined 
<br>
(attribute_predefined.c:225)
<br>
==6932==    by 0x57ADA14: ompi_mpi_init (ompi_mpi_init.c:739)
<br>
==6932==    by 0x57CE572: PMPI_Init (pinit.c:84)
<br>
==6932==    by 0x4E777C4: MPI_INIT (pinit_f.c:82)
<br>
==6932==    by 0x400B33: MAIN__ (in /tmp/a.out)
<br>
==6932==    by 0x400BD5: main (in /tmp/a.out)
<br>
==6932==
<br>
==6932== 64 bytes in 1 blocks are definitely lost in loss record 56 of 89
<br>
==6932==    at 0x4C2AB80: malloc (in 
<br>
/usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
<br>
==6932==    by 0x5794DFE: ompi_attr_create_keyval_impl (opal_object.h:467)
<br>
==6932==    by 0x579527B: ompi_attr_create_keyval (attribute.c:582)
<br>
==6932==    by 0x5796CF4: ompi_attr_create_predefined 
<br>
(attribute_predefined.c:225)
<br>
==6932==    by 0x57ADA14: ompi_mpi_init (ompi_mpi_init.c:739)
<br>
==6932==    by 0x57CE572: PMPI_Init (pinit.c:84)
<br>
==6932==    by 0x4E777C4: MPI_INIT (pinit_f.c:82)
<br>
==6932==    by 0x400B33: MAIN__ (in /tmp/a.out)
<br>
==6932==    by 0x400BD5: main (in /tmp/a.out)
<br>
==6932==
<br>
==6932== 64 bytes in 1 blocks are definitely lost in loss record 57 of 89
<br>
==6932==    at 0x4C2AB80: malloc (in 
<br>
/usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
<br>
==6932==    by 0x5794DFE: ompi_attr_create_keyval_impl (opal_object.h:467)
<br>
==6932==    by 0x579527B: ompi_attr_create_keyval (attribute.c:582)
<br>
==6932==    by 0x5796D33: ompi_attr_create_predefined 
<br>
(attribute_predefined.c:225)
<br>
==6932==    by 0x57ADA14: ompi_mpi_init (ompi_mpi_init.c:739)
<br>
==6932==    by 0x57CE572: PMPI_Init (pinit.c:84)
<br>
==6932==    by 0x4E777C4: MPI_INIT (pinit_f.c:82)
<br>
==6932==    by 0x400B33: MAIN__ (in /tmp/a.out)
<br>
==6932==    by 0x400BD5: main (in /tmp/a.out)
<br>
==6932==
<br>
==6932== 64 bytes in 1 blocks are definitely lost in loss record 58 of 89
<br>
==6932==    at 0x4C2AB80: malloc (in 
<br>
/usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
<br>
==6932==    by 0x5794DFE: ompi_attr_create_keyval_impl (opal_object.h:467)
<br>
==6932==    by 0x579527B: ompi_attr_create_keyval (attribute.c:582)
<br>
==6932==    by 0x5796D76: ompi_attr_create_predefined 
<br>
(attribute_predefined.c:225)
<br>
==6932==    by 0x57ADA14: ompi_mpi_init (ompi_mpi_init.c:739)
<br>
==6932==    by 0x57CE572: PMPI_Init (pinit.c:84)
<br>
==6932==    by 0x4E777C4: MPI_INIT (pinit_f.c:82)
<br>
==6932==    by 0x400B33: MAIN__ (in /tmp/a.out)
<br>
==6932==    by 0x400BD5: main (in /tmp/a.out)
<br>
==6932==
<br>
==6932== 64 bytes in 1 blocks are definitely lost in loss record 59 of 89
<br>
==6932==    at 0x4C2AB80: malloc (in 
<br>
/usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
<br>
==6932==    by 0x5794DFE: ompi_attr_create_keyval_impl (opal_object.h:467)
<br>
==6932==    by 0x579527B: ompi_attr_create_keyval (attribute.c:582)
<br>
==6932==    by 0x5796DB5: ompi_attr_create_predefined 
<br>
(attribute_predefined.c:225)
<br>
==6932==    by 0x57ADA14: ompi_mpi_init (ompi_mpi_init.c:739)
<br>
==6932==    by 0x57CE572: PMPI_Init (pinit.c:84)
<br>
==6932==    by 0x4E777C4: MPI_INIT (pinit_f.c:82)
<br>
==6932==    by 0x400B33: MAIN__ (in /tmp/a.out)
<br>
==6932==    by 0x400BD5: main (in /tmp/a.out)
<br>
==6932==
<br>
==6932== 96 (48 direct, 48 indirect) bytes in 1 blocks are definitely 
<br>
lost in loss record 61 of 89
<br>
==6932==    at 0x4C2AB80: malloc (in 
<br>
/usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
<br>
==6932==    by 0x5A8E541: open_component (opal_object.h:467)
<br>
==6932==    by 0x5A8F8F9: mca_base_component_find 
<br>
(mca_base_component_find.c:466)
<br>
==6932==    by 0x5A9A428: mca_base_framework_components_register 
<br>
(mca_base_components_register.c:57)
<br>
==6932==    by 0x5A9A8FD: mca_base_framework_register 
<br>
(mca_base_framework.c:107)
<br>
==6932==    by 0x5A9A968: mca_base_framework_open (mca_base_framework.c:131)
<br>
==6932==    by 0x57AD686: ompi_mpi_init (ompi_mpi_init.c:577)
<br>
==6932==    by 0x57CE572: PMPI_Init (pinit.c:84)
<br>
==6932==    by 0x4E777C4: MPI_INIT (pinit_f.c:82)
<br>
==6932==    by 0x400B33: MAIN__ (in /tmp/a.out)
<br>
==6932==    by 0x400BD5: main (in /tmp/a.out)
<br>
==6932==
<br>
==6932== 96 bytes in 2 blocks are definitely lost in loss record 62 of 89
<br>
==6932==    at 0x4C2AB80: malloc (in 
<br>
/usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
<br>
==6932==    by 0x5A8E541: open_component (opal_object.h:467)
<br>
==6932==    by 0x5A8F8F9: mca_base_component_find 
<br>
(mca_base_component_find.c:466)
<br>
==6932==    by 0x5A9A428: mca_base_framework_components_register 
<br>
(mca_base_components_register.c:57)
<br>
==6932==    by 0x5A9A8FD: mca_base_framework_register 
<br>
(mca_base_framework.c:107)
<br>
==6932==    by 0x5A9A968: mca_base_framework_open (mca_base_framework.c:131)
<br>
==6932==    by 0x5A9A9B5: mca_base_framework_open (mca_base_framework.c:150)
<br>
==6932==    by 0x57AD629: ompi_mpi_init (ompi_mpi_init.c:564)
<br>
==6932==    by 0x57CE572: PMPI_Init (pinit.c:84)
<br>
==6932==    by 0x4E777C4: MPI_INIT (pinit_f.c:82)
<br>
==6932==    by 0x400B33: MAIN__ (in /tmp/a.out)
<br>
==6932==    by 0x400BD5: main (in /tmp/a.out)
<br>
==6932==
<br>
==6932== 160 bytes in 1 blocks are definitely lost in loss record 68 of 89
<br>
==6932==    at 0x4C2AB80: malloc (in 
<br>
/usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
<br>
==6932==    by 0x999C136: ???
<br>
==6932==    by 0x57AD75A: ompi_mpi_init (ompi_mpi_init.c:627)
<br>
==6932==    by 0x57CE572: PMPI_Init (pinit.c:84)
<br>
==6932==    by 0x4E777C4: MPI_INIT (pinit_f.c:82)
<br>
==6932==    by 0x400B33: MAIN__ (in /tmp/a.out)
<br>
==6932==    by 0x400BD5: main (in /tmp/a.out)
<br>
==6932==
<br>
==6932== 160 bytes in 1 blocks are definitely lost in loss record 69 of 89
<br>
==6932==    at 0x4C2AB80: malloc (in 
<br>
/usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
<br>
==6932==    by 0x999BFB6: ???
<br>
==6932==    by 0x57ADB7E: ompi_mpi_init (ompi_mpi_init.c:816)
<br>
==6932==    by 0x57CE572: PMPI_Init (pinit.c:84)
<br>
==6932==    by 0x4E777C4: MPI_INIT (pinit_f.c:82)
<br>
==6932==    by 0x400B33: MAIN__ (in /tmp/a.out)
<br>
==6932==    by 0x400BD5: main (in /tmp/a.out)
<br>
==6932==
<br>
==6932== 160 bytes in 1 blocks are definitely lost in loss record 70 of 89
<br>
==6932==    at 0x4C2AB80: malloc (in 
<br>
/usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
<br>
==6932==    by 0x999BFB6: ???
<br>
==6932==    by 0x57AE1CB: ompi_mpi_finalize (ompi_mpi_finalize.c:222)
<br>
==6932==    by 0x4E74878: mpi_finalize (pfinalize_f.c:69)
<br>
==6932==    by 0x400B9F: MAIN__ (in /tmp/a.out)
<br>
==6932==    by 0x400BD5: main (in /tmp/a.out)
<br>
==6932==
<br>
==6932== 184 (96 direct, 88 indirect) bytes in 1 blocks are definitely 
<br>
lost in loss record 71 of 89
<br>
==6932==    at 0x4C2AB80: malloc (in 
<br>
/usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
<br>
==6932==    by 0x5ABF110: opal_hwloc_base_filter_cpus (opal_object.h:467)
<br>
==6932==    by 0x5AC0D6A: opal_hwloc_base_get_topology 
<br>
(hwloc_base_util.c:226)
<br>
==6932==    by 0x57AD7B4: ompi_mpi_init (ompi_mpi_init.c:485)
<br>
==6932==    by 0x57CE572: PMPI_Init (pinit.c:84)
<br>
==6932==    by 0x4E777C4: MPI_INIT (pinit_f.c:82)
<br>
==6932==    by 0x400B33: MAIN__ (in /tmp/a.out)
<br>
==6932==    by 0x400BD5: main (in /tmp/a.out)
<br>
==6932==
<br>
==6932== 199 (80 direct, 119 indirect) bytes in 1 blocks are definitely 
<br>
lost in loss record 72 of 89
<br>
==6932==    at 0x4C2AB80: malloc (in 
<br>
/usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
<br>
==6932==    by 0x5A98EFD: mca_base_var_enum_create (opal_object.h:467)
<br>
==6932==    by 0xCD0B59B: ???
<br>
==6932==    by 0x5A9A531: mca_base_framework_components_register 
<br>
(mca_base_components_register.c:116)
<br>
==6932==    by 0x5A9A8FD: mca_base_framework_register 
<br>
(mca_base_framework.c:107)
<br>
==6932==    by 0x5A9A968: mca_base_framework_open (mca_base_framework.c:131)
<br>
==6932==    by 0x57AD667: ompi_mpi_init (ompi_mpi_init.c:572)
<br>
==6932==    by 0x57CE572: PMPI_Init (pinit.c:84)
<br>
==6932==    by 0x4E777C4: MPI_INIT (pinit_f.c:82)
<br>
==6932==    by 0x400B33: MAIN__ (in /tmp/a.out)
<br>
==6932==    by 0x400BD5: main (in /tmp/a.out)
<br>
==6932==
<br>
==6932== 376 (232 direct, 144 indirect) bytes in 1 blocks are definitely 
<br>
lost in loss record 76 of 89
<br>
==6932==    at 0x4C2AB80: malloc (in 
<br>
/usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
<br>
==6932==    by 0xAFB77F4: ???
<br>
==6932==    by 0xC28E7D8: ???
<br>
==6932==    by 0x57ADA88: ompi_mpi_init (ompi_mpi_init.c:771)
<br>
==6932==    by 0x57CE572: PMPI_Init (pinit.c:84)
<br>
==6932==    by 0x4E777C4: MPI_INIT (pinit_f.c:82)
<br>
==6932==    by 0x400B33: MAIN__ (in /tmp/a.out)
<br>
==6932==    by 0x400BD5: main (in /tmp/a.out)
<br>
==6932==
<br>
==6932== 888 bytes in 1 blocks are definitely lost in loss record 84 of 89
<br>
==6932==    at 0x4C2AB80: malloc (in 
<br>
/usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
<br>
==6932==    by 0x57928B4: ompi_free_list_grow (ompi_free_list.c:203)
<br>
==6932==    by 0xC28E415: ???
<br>
==6932==    by 0x57FD909: mca_pml_v_enable (pml_v_component.c:217)
<br>
==6932==    by 0x57ADA5C: ompi_mpi_init (ompi_mpi_init.c:760)
<br>
==6932==    by 0x57CE572: PMPI_Init (pinit.c:84)
<br>
==6932==    by 0x4E777C4: MPI_INIT (pinit_f.c:82)
<br>
==6932==    by 0x400B33: MAIN__ (in /tmp/a.out)
<br>
==6932==    by 0x400BD5: main (in /tmp/a.out)
<br>
==6932==
<br>
==6932== 2,400 bytes in 1 blocks are definitely lost in loss record 87 of 89
<br>
==6932==    at 0x4C2AB80: malloc (in 
<br>
/usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
<br>
==6932==    by 0xA5A2FE6: ???
<br>
==6932==    by 0xA5A2EC8: ???
<br>
==6932==    by 0xC290610: ???
<br>
==6932==    by 0x5A9070C: mca_base_framework_components_open 
<br>
(mca_base_components_open.c:173)
<br>
==6932==    by 0x57FC9F6: mca_pml_base_open (pml_base_frame.c:187)
<br>
==6932==    by 0x5A9A9B5: mca_base_framework_open (mca_base_framework.c:150)
<br>
==6932==    by 0x57AD648: ompi_mpi_init (ompi_mpi_init.c:568)
<br>
==6932==    by 0x57CE572: PMPI_Init (pinit.c:84)
<br>
==6932==    by 0x4E777C4: MPI_INIT (pinit_f.c:82)
<br>
==6932==    by 0x400B33: MAIN__ (in /tmp/a.out)
<br>
==6932==    by 0x400BD5: main (in /tmp/a.out)
<br>
==6932==
<br>
==6932== 2,480 (80 direct, 2,400 indirect) bytes in 1 blocks are 
<br>
definitely lost in loss record 88 of 89
<br>
==6932==    at 0x4C2AB80: malloc (in 
<br>
/usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
<br>
==6932==    by 0xA5A2EAC: ???
<br>
==6932==    by 0xBE632D0: ???
<br>
==6932==    by 0x5A9070C: mca_base_framework_components_open 
<br>
(mca_base_components_open.c:173)
<br>
==6932==    by 0x57FC9F6: mca_pml_base_open (pml_base_frame.c:187)
<br>
==6932==    by 0x5A9A9B5: mca_base_framework_open (mca_base_framework.c:150)
<br>
==6932==    by 0x57AD648: ompi_mpi_init (ompi_mpi_init.c:568)
<br>
==6932==    by 0x57CE572: PMPI_Init (pinit.c:84)
<br>
==6932==    by 0x4E777C4: MPI_INIT (pinit_f.c:82)
<br>
==6932==    by 0x400B33: MAIN__ (in /tmp/a.out)
<br>
==6932==    by 0x400BD5: main (in /tmp/a.out)
<br>
==6932==
<br>
==6932== 8,208 bytes in 1 blocks are definitely lost in loss record 89 of 89
<br>
==6932==    at 0x4C2AB80: malloc (in 
<br>
/usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
<br>
==6932==    by 0xCCEDD99: ???
<br>
==6932==    by 0x5A6A708: opal_free_list_grow (opal_object.h:424)
<br>
==6932==    by 0xCCE9649: ???
<br>
==6932==    by 0x57F90B4: ompi_osc_base_find_available (osc_base_frame.c:48)
<br>
==6932==    by 0x57AD929: ompi_mpi_init (ompi_mpi_init.c:661)
<br>
==6932==    by 0x57CE572: PMPI_Init (pinit.c:84)
<br>
==6932==    by 0x4E777C4: MPI_INIT (pinit_f.c:82)
<br>
==6932==    by 0x400B33: MAIN__ (in /tmp/a.out)
<br>
==6932==    by 0x400BD5: main (in /tmp/a.out)
<br>
==6932==
<br>
==6932== LEAK SUMMARY:
<br>
==6932==    definitely lost: 13,159 bytes in 26 blocks
<br>
==6932==    indirectly lost: 2,800 bytes in 13 blocks
<br>
==6932==      possibly lost: 0 bytes in 0 blocks
<br>
==6932==    still reachable: 7,940 bytes in 71 blocks
<br>
==6932==         suppressed: 0 bytes in 0 blocks
<br>
==6932== Reachable blocks (those to which a pointer was found) are not 
<br>
shown.
<br>
==6932== To see them, rerun with: --leak-check=full --show-leak-kinds=all
<br>
==6932==
<br>
==6932== For counts of detected and suppressed errors, rerun with: -v
<br>
==6932== ERROR SUMMARY: 25 errors from 25 contexts (suppressed: 0 from 0)
<br>
wws_at_w6ws-4:/tmp$
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24520.php">Nathan Hjelm: "Re: [OMPI users] Valgrind reports lots of memory leakage"</a>
<li><strong>Previous message:</strong> <a href="24518.php">Ralph Castain: "Re: [OMPI users] [warn] Epoll ADD(1) on fd 0 failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24520.php">Nathan Hjelm: "Re: [OMPI users] Valgrind reports lots of memory leakage"</a>
<li><strong>Reply:</strong> <a href="24520.php">Nathan Hjelm: "Re: [OMPI users] Valgrind reports lots of memory leakage"</a>
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
