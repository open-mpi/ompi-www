<?
$subject_val = "[OMPI devel] MPI_Comm_create_group()";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 21 10:56:24 2014" -->
<!-- isoreceived="20140421145624" -->
<!-- sent="Mon, 21 Apr 2014 17:55:54 +0300" -->
<!-- isosent="20140421145554" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_Comm_create_group()" -->
<!-- id="CAEcYPwDD37PJ_KtQ-PiMHf4-DbAt2QfYcKHcADGPh5W3qyjfpA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_Comm_create_group()<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-21 10:55:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14567.php">George Bosilca: "Re: [OMPI devel] MPI_Type_create_hindexed_block() segfaults"</a>
<li><strong>Previous message:</strong> <a href="14565.php">Lisandro Dalcin: "[OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14652.php">Dave Goodell (dgoodell): "Re: [OMPI devel] MPI_Comm_create_group()"</a>
<li><strong>Reply:</strong> <a href="14652.php">Dave Goodell (dgoodell): "Re: [OMPI devel] MPI_Comm_create_group()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A very basic test for MPI_Comm_create_group() is failing for me. I'm
<br>
pasting the code, the failure, and output from valgrind.
<br>
<p>[dalcinl_at_kw2060 openmpi]$ cat comm_create_group.c
<br>
#include &lt;mpi.h&gt;
<br>
int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;MPI_Group group;
<br>
&nbsp;&nbsp;MPI_Comm comm;
<br>
&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;MPI_Comm_group(MPI_COMM_WORLD, &amp;group);
<br>
&nbsp;&nbsp;MPI_Comm_create_group(MPI_COMM_WORLD, group, 0, &amp;comm);
<br>
&nbsp;&nbsp;MPI_Comm_free(&amp;comm);
<br>
&nbsp;&nbsp;MPI_Group_free(&amp;group);
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
[dalcinl_at_kw2060 openmpi]$ mpicc comm_create_group.c
<br>
[dalcinl_at_kw2060 openmpi]$ ./a.out
<br>
[kw2060:22673] *** An error occurred in MPI_Comm_create_group
<br>
[kw2060:22673] *** reported by process [140737483440129,140733193388032]
<br>
[kw2060:22673] *** on communicator MPI_COMM_WORLD
<br>
[kw2060:22673] *** MPI_ERR_UNKNOWN: unknown error
<br>
[kw2060:22673] *** MPI_ERRORS_ARE_FATAL (processes in this
<br>
communicator will now abort,
<br>
[kw2060:22673] ***    and potentially your MPI job)
<br>
<p><p>[dalcinl_at_kw2060 openmpi]$ valgrind -q ./a.out
<br>
==22675== Conditional jump or move depends on uninitialised value(s)
<br>
==22675==    at 0x4C457D6: ompi_comm_nextcid (comm_cid.c:262)
<br>
==22675==    by 0x4C42FA8: ompi_comm_create_group (comm.c:1109)
<br>
==22675==    by 0x4C81E35: PMPI_Comm_create_group (pcomm_create_group.c:77)
<br>
==22675==    by 0x4008FF: main (in /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
<br>
==22675==
<br>
==22675== Conditional jump or move depends on uninitialised value(s)
<br>
==22675==    at 0x4C42FB0: ompi_comm_create_group (comm.c:1116)
<br>
==22675==    by 0x4C81E35: PMPI_Comm_create_group (pcomm_create_group.c:77)
<br>
==22675==    by 0x4008FF: main (in /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
<br>
==22675==
<br>
==22675== Conditional jump or move depends on uninitialised value(s)
<br>
==22675==    at 0x4C81E46: PMPI_Comm_create_group (pcomm_create_group.c:79)
<br>
==22675==    by 0x4008FF: main (in /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
<br>
==22675==
<br>
==22675== Conditional jump or move depends on uninitialised value(s)
<br>
==22675==    at 0x4C81BA0: ompi_errcode_get_mpi_code (errcode-internal.h:64)
<br>
==22675==    by 0x4C81E51: PMPI_Comm_create_group (pcomm_create_group.c:79)
<br>
==22675==    by 0x4008FF: main (in /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
<br>
==22675==
<br>
==22675== Conditional jump or move depends on uninitialised value(s)
<br>
==22675==    at 0x4C4AA14: opal_pointer_array_get_item
<br>
(opal_pointer_array.h:130)
<br>
==22675==    by 0x4C4AA60: ompi_mpi_errnum_get_string (errcode.h:122)
<br>
==22675==    by 0x4C4B0B4: backend_fatal_aggregate (errhandler_predefined.c:192)
<br>
==22675==    by 0x4C4B657: backend_fatal (errhandler_predefined.c:334)
<br>
==22675==    by 0x4C4AB7C: ompi_mpi_errors_are_fatal_comm_handler
<br>
(errhandler_predefined.c:69)
<br>
==22675==    by 0x4C4A63E: ompi_errhandler_invoke (errhandler_invoke.c:53)
<br>
==22675==    by 0x4C81E81: PMPI_Comm_create_group (pcomm_create_group.c:79)
<br>
==22675==    by 0x4008FF: main (in /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
<br>
==22675==
<br>
==22675== Use of uninitialised value of size 8
<br>
==22675==    at 0x327BC47B9B: _itoa_word (in /usr/lib64/libc-2.18.so)
<br>
==22675==    by 0x327BC48AD0: vfprintf (in /usr/lib64/libc-2.18.so)
<br>
==22675==    by 0x327BC74D52: vasprintf (in /usr/lib64/libc-2.18.so)
<br>
==22675==    by 0x52E6C4B: opal_show_help_vstring (show_help.c:309)
<br>
==22675==    by 0x4FCFBB4: orte_show_help (show_help.c:591)
<br>
==22675==    by 0x4C4B1B5: backend_fatal_aggregate (errhandler_predefined.c:201)
<br>
==22675==    by 0x4C4B657: backend_fatal (errhandler_predefined.c:334)
<br>
==22675==    by 0x4C4AB7C: ompi_mpi_errors_are_fatal_comm_handler
<br>
(errhandler_predefined.c:69)
<br>
==22675==    by 0x4C4A63E: ompi_errhandler_invoke (errhandler_invoke.c:53)
<br>
==22675==    by 0x4C81E81: PMPI_Comm_create_group (pcomm_create_group.c:79)
<br>
==22675==    by 0x4008FF: main (in /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
<br>
==22675==
<br>
==22675== Conditional jump or move depends on uninitialised value(s)
<br>
==22675==    at 0x327BC47BA5: _itoa_word (in /usr/lib64/libc-2.18.so)
<br>
==22675==    by 0x327BC48AD0: vfprintf (in /usr/lib64/libc-2.18.so)
<br>
==22675==    by 0x327BC74D52: vasprintf (in /usr/lib64/libc-2.18.so)
<br>
==22675==    by 0x52E6C4B: opal_show_help_vstring (show_help.c:309)
<br>
==22675==    by 0x4FCFBB4: orte_show_help (show_help.c:591)
<br>
==22675==    by 0x4C4B1B5: backend_fatal_aggregate (errhandler_predefined.c:201)
<br>
==22675==    by 0x4C4B657: backend_fatal (errhandler_predefined.c:334)
<br>
==22675==    by 0x4C4AB7C: ompi_mpi_errors_are_fatal_comm_handler
<br>
(errhandler_predefined.c:69)
<br>
==22675==    by 0x4C4A63E: ompi_errhandler_invoke (errhandler_invoke.c:53)
<br>
==22675==    by 0x4C81E81: PMPI_Comm_create_group (pcomm_create_group.c:79)
<br>
==22675==    by 0x4008FF: main (in /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
<br>
==22675==
<br>
==22675== Conditional jump or move depends on uninitialised value(s)
<br>
==22675==    at 0x327BC48B18: vfprintf (in /usr/lib64/libc-2.18.so)
<br>
==22675==    by 0x327BC74D52: vasprintf (in /usr/lib64/libc-2.18.so)
<br>
==22675==    by 0x52E6C4B: opal_show_help_vstring (show_help.c:309)
<br>
==22675==    by 0x4FCFBB4: orte_show_help (show_help.c:591)
<br>
==22675==    by 0x4C4B1B5: backend_fatal_aggregate (errhandler_predefined.c:201)
<br>
==22675==    by 0x4C4B657: backend_fatal (errhandler_predefined.c:334)
<br>
==22675==    by 0x4C4AB7C: ompi_mpi_errors_are_fatal_comm_handler
<br>
(errhandler_predefined.c:69)
<br>
==22675==    by 0x4C4A63E: ompi_errhandler_invoke (errhandler_invoke.c:53)
<br>
==22675==    by 0x4C81E81: PMPI_Comm_create_group (pcomm_create_group.c:79)
<br>
==22675==    by 0x4008FF: main (in /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
<br>
==22675==
<br>
==22675== Conditional jump or move depends on uninitialised value(s)
<br>
==22675==    at 0x327BC48737: vfprintf (in /usr/lib64/libc-2.18.so)
<br>
==22675==    by 0x327BC74D52: vasprintf (in /usr/lib64/libc-2.18.so)
<br>
==22675==    by 0x52E6C4B: opal_show_help_vstring (show_help.c:309)
<br>
==22675==    by 0x4FCFBB4: orte_show_help (show_help.c:591)
<br>
==22675==    by 0x4C4B1B5: backend_fatal_aggregate (errhandler_predefined.c:201)
<br>
==22675==    by 0x4C4B657: backend_fatal (errhandler_predefined.c:334)
<br>
==22675==    by 0x4C4AB7C: ompi_mpi_errors_are_fatal_comm_handler
<br>
(errhandler_predefined.c:69)
<br>
==22675==    by 0x4C4A63E: ompi_errhandler_invoke (errhandler_invoke.c:53)
<br>
==22675==    by 0x4C81E81: PMPI_Comm_create_group (pcomm_create_group.c:79)
<br>
==22675==    by 0x4008FF: main (in /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
<br>
==22675==
<br>
==22675== Conditional jump or move depends on uninitialised value(s)
<br>
==22675==    at 0x327BC487B7: vfprintf (in /usr/lib64/libc-2.18.so)
<br>
==22675==    by 0x327BC74D52: vasprintf (in /usr/lib64/libc-2.18.so)
<br>
==22675==    by 0x52E6C4B: opal_show_help_vstring (show_help.c:309)
<br>
==22675==    by 0x4FCFBB4: orte_show_help (show_help.c:591)
<br>
==22675==    by 0x4C4B1B5: backend_fatal_aggregate (errhandler_predefined.c:201)
<br>
==22675==    by 0x4C4B657: backend_fatal (errhandler_predefined.c:334)
<br>
==22675==    by 0x4C4AB7C: ompi_mpi_errors_are_fatal_comm_handler
<br>
(errhandler_predefined.c:69)
<br>
==22675==    by 0x4C4A63E: ompi_errhandler_invoke (errhandler_invoke.c:53)
<br>
==22675==    by 0x4C81E81: PMPI_Comm_create_group (pcomm_create_group.c:79)
<br>
==22675==    by 0x4008FF: main (in /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
<br>
==22675==
<br>
[kw2060:22675] *** An error occurred in MPI_Comm_create_group
<br>
[kw2060:22675] *** reported by process [68714692609,0]
<br>
[kw2060:22675] *** on communicator MPI_COMM_WORLD
<br>
[kw2060:22675] *** Unknown error (this should not happen!)
<br>
[kw2060:22675] *** MPI_ERRORS_ARE_FATAL (processes in this
<br>
communicator will now abort,
<br>
[kw2060:22675] ***    and potentially your MPI job)
<br>
==22675== Conditional jump or move depends on uninitialised value(s)
<br>
==22675==    at 0x4C606BE: ompi_mpi_abort (ompi_mpi_abort.c:96)
<br>
==22675==    by 0x4C4B6AA: backend_fatal (errhandler_predefined.c:346)
<br>
==22675==    by 0x4C4AB7C: ompi_mpi_errors_are_fatal_comm_handler
<br>
(errhandler_predefined.c:69)
<br>
==22675==    by 0x4C4A63E: ompi_errhandler_invoke (errhandler_invoke.c:53)
<br>
==22675==    by 0x4C81E81: PMPI_Comm_create_group (pcomm_create_group.c:79)
<br>
==22675==    by 0x4008FF: main (in /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
<br>
==22675==
<br>
==22675== Conditional jump or move depends on uninitialised value(s)
<br>
==22675==    at 0x4C60498: opal_pointer_array_get_item
<br>
(opal_pointer_array.h:130)
<br>
==22675==    by 0x4C6052C: ompi_mpi_errnum_get_string (errcode.h:122)
<br>
==22675==    by 0x4C606EA: ompi_mpi_abort (ompi_mpi_abort.c:97)
<br>
==22675==    by 0x4C4B6AA: backend_fatal (errhandler_predefined.c:346)
<br>
==22675==    by 0x4C4AB7C: ompi_mpi_errors_are_fatal_comm_handler
<br>
(errhandler_predefined.c:69)
<br>
==22675==    by 0x4C4A63E: ompi_errhandler_invoke (errhandler_invoke.c:53)
<br>
==22675==    by 0x4C81E81: PMPI_Comm_create_group (pcomm_create_group.c:79)
<br>
==22675==    by 0x4008FF: main (in /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
<br>
==22675==
<br>
==22675== Conditional jump or move depends on uninitialised value(s)
<br>
==22675==    at 0x4CF5382: ompi_rte_abort (rte_orte_module.c:77)
<br>
==22675==    by 0x4C60B04: ompi_mpi_abort (ompi_mpi_abort.c:203)
<br>
==22675==    by 0x4C4B6AA: backend_fatal (errhandler_predefined.c:346)
<br>
==22675==    by 0x4C4AB7C: ompi_mpi_errors_are_fatal_comm_handler
<br>
(errhandler_predefined.c:69)
<br>
==22675==    by 0x4C4A63E: ompi_errhandler_invoke (errhandler_invoke.c:53)
<br>
==22675==    by 0x4C81E81: PMPI_Comm_create_group (pcomm_create_group.c:79)
<br>
==22675==    by 0x4008FF: main (in /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
<br>
==22675==
<br>
==22675== Conditional jump or move depends on uninitialised value(s)
<br>
==22675==    at 0x4CF538E: ompi_rte_abort (rte_orte_module.c:77)
<br>
==22675==    by 0x4C60B04: ompi_mpi_abort (ompi_mpi_abort.c:203)
<br>
==22675==    by 0x4C4B6AA: backend_fatal (errhandler_predefined.c:346)
<br>
==22675==    by 0x4C4AB7C: ompi_mpi_errors_are_fatal_comm_handler
<br>
(errhandler_predefined.c:69)
<br>
==22675==    by 0x4C4A63E: ompi_errhandler_invoke (errhandler_invoke.c:53)
<br>
==22675==    by 0x4C81E81: PMPI_Comm_create_group (pcomm_create_group.c:79)
<br>
==22675==    by 0x4008FF: main (in /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
<br>
==22675==
<br>
==22675== Syscall param exit_group(status) contains uninitialised byte(s)
<br>
==22675==    at 0x327BCBCCF9: _Exit (in /usr/lib64/libc-2.18.so)
<br>
==22675==    by 0x327BC3948A: __run_exit_handlers (in /usr/lib64/libc-2.18.so)
<br>
==22675==    by 0x327BC39514: exit (in /usr/lib64/libc-2.18.so)
<br>
==22675==    by 0x4FEF419: orte_ess_base_app_abort (ess_base_std_app.c:450)
<br>
==22675==    by 0x4CF53C5: ompi_rte_abort (rte_orte_module.c:81)
<br>
==22675==    by 0x4C60B04: ompi_mpi_abort (ompi_mpi_abort.c:203)
<br>
==22675==    by 0x4C4B6AA: backend_fatal (errhandler_predefined.c:346)
<br>
==22675==    by 0x4C4AB7C: ompi_mpi_errors_are_fatal_comm_handler
<br>
(errhandler_predefined.c:69)
<br>
==22675==    by 0x4C4A63E: ompi_errhandler_invoke (errhandler_invoke.c:53)
<br>
==22675==    by 0x4C81E81: PMPI_Comm_create_group (pcomm_create_group.c:79)
<br>
==22675==    by 0x4008FF: main (in /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
<br>
==22675==
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14567.php">George Bosilca: "Re: [OMPI devel] MPI_Type_create_hindexed_block() segfaults"</a>
<li><strong>Previous message:</strong> <a href="14565.php">Lisandro Dalcin: "[OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14652.php">Dave Goodell (dgoodell): "Re: [OMPI devel] MPI_Comm_create_group()"</a>
<li><strong>Reply:</strong> <a href="14652.php">Dave Goodell (dgoodell): "Re: [OMPI devel] MPI_Comm_create_group()"</a>
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
