<?
$subject_val = "Re: [OMPI devel] MPI_Comm_create_group()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 29 13:48:19 2014" -->
<!-- isoreceived="20140429174819" -->
<!-- sent="Tue, 29 Apr 2014 17:48:12 +0000" -->
<!-- isosent="20140429174812" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Comm_create_group()" -->
<!-- id="EA0AB667-F587-4420-9897-764B1BD8594C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAEcYPwDD37PJ_KtQ-PiMHf4-DbAt2QfYcKHcADGPh5W3qyjfpA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Comm_create_group()<br>
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-29 13:48:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14653.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Patch to fix valgrind warning"</a>
<li><strong>Previous message:</strong> <a href="14651.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>In reply to:</strong> <a href="14566.php">Lisandro Dalcin: "[OMPI devel] MPI_Comm_create_group()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14655.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Comm_create_group()"</a>
<li><strong>Reply:</strong> <a href="14655.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Comm_create_group()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Lisandro,
<br>
<p>Thanks for the bug report.  It seems that nobody has time to work on this at the moment, so I've filed a ticket so that we don't lose track of it:
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/ticket/4577">https://svn.open-mpi.org/trac/ompi/ticket/4577</a>
<br>
<p>-Dave
<br>
<p>On Apr 21, 2014, at 9:55 AM, Lisandro Dalcin &lt;dalcinl_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; A very basic test for MPI_Comm_create_group() is failing for me. I'm
</span><br>
<span class="quotelev1">&gt; pasting the code, the failure, and output from valgrind.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [dalcinl_at_kw2060 openmpi]$ cat comm_create_group.c
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  MPI_Group group;
</span><br>
<span class="quotelev1">&gt;  MPI_Comm comm;
</span><br>
<span class="quotelev1">&gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_group(MPI_COMM_WORLD, &amp;group);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_create_group(MPI_COMM_WORLD, group, 0, &amp;comm);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_free(&amp;comm);
</span><br>
<span class="quotelev1">&gt;  MPI_Group_free(&amp;group);
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;  return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; [dalcinl_at_kw2060 openmpi]$ mpicc comm_create_group.c
</span><br>
<span class="quotelev1">&gt; [dalcinl_at_kw2060 openmpi]$ ./a.out
</span><br>
<span class="quotelev1">&gt; [kw2060:22673] *** An error occurred in MPI_Comm_create_group
</span><br>
<span class="quotelev1">&gt; [kw2060:22673] *** reported by process [140737483440129,140733193388032]
</span><br>
<span class="quotelev1">&gt; [kw2060:22673] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [kw2060:22673] *** MPI_ERR_UNKNOWN: unknown error
</span><br>
<span class="quotelev1">&gt; [kw2060:22673] *** MPI_ERRORS_ARE_FATAL (processes in this
</span><br>
<span class="quotelev1">&gt; communicator will now abort,
</span><br>
<span class="quotelev1">&gt; [kw2060:22673] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [dalcinl_at_kw2060 openmpi]$ valgrind -q ./a.out
</span><br>
<span class="quotelev1">&gt; ==22675== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==22675==    at 0x4C457D6: ompi_comm_nextcid (comm_cid.c:262)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C42FA8: ompi_comm_create_group (comm.c:1109)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C81E35: PMPI_Comm_create_group (pcomm_create_group.c:77)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4008FF: main (in /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
</span><br>
<span class="quotelev1">&gt; ==22675==
</span><br>
<span class="quotelev1">&gt; ==22675== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==22675==    at 0x4C42FB0: ompi_comm_create_group (comm.c:1116)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C81E35: PMPI_Comm_create_group (pcomm_create_group.c:77)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4008FF: main (in /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
</span><br>
<span class="quotelev1">&gt; ==22675==
</span><br>
<span class="quotelev1">&gt; ==22675== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==22675==    at 0x4C81E46: PMPI_Comm_create_group (pcomm_create_group.c:79)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4008FF: main (in /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
</span><br>
<span class="quotelev1">&gt; ==22675==
</span><br>
<span class="quotelev1">&gt; ==22675== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==22675==    at 0x4C81BA0: ompi_errcode_get_mpi_code (errcode-internal.h:64)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C81E51: PMPI_Comm_create_group (pcomm_create_group.c:79)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4008FF: main (in /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
</span><br>
<span class="quotelev1">&gt; ==22675==
</span><br>
<span class="quotelev1">&gt; ==22675== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==22675==    at 0x4C4AA14: opal_pointer_array_get_item
</span><br>
<span class="quotelev1">&gt; (opal_pointer_array.h:130)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C4AA60: ompi_mpi_errnum_get_string (errcode.h:122)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C4B0B4: backend_fatal_aggregate (errhandler_predefined.c:192)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C4B657: backend_fatal (errhandler_predefined.c:334)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C4AB7C: ompi_mpi_errors_are_fatal_comm_handler
</span><br>
<span class="quotelev1">&gt; (errhandler_predefined.c:69)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C4A63E: ompi_errhandler_invoke (errhandler_invoke.c:53)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C81E81: PMPI_Comm_create_group (pcomm_create_group.c:79)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4008FF: main (in /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
</span><br>
<span class="quotelev1">&gt; ==22675==
</span><br>
<span class="quotelev1">&gt; ==22675== Use of uninitialised value of size 8
</span><br>
<span class="quotelev1">&gt; ==22675==    at 0x327BC47B9B: _itoa_word (in /usr/lib64/libc-2.18.so)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x327BC48AD0: vfprintf (in /usr/lib64/libc-2.18.so)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x327BC74D52: vasprintf (in /usr/lib64/libc-2.18.so)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x52E6C4B: opal_show_help_vstring (show_help.c:309)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4FCFBB4: orte_show_help (show_help.c:591)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C4B1B5: backend_fatal_aggregate (errhandler_predefined.c:201)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C4B657: backend_fatal (errhandler_predefined.c:334)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C4AB7C: ompi_mpi_errors_are_fatal_comm_handler
</span><br>
<span class="quotelev1">&gt; (errhandler_predefined.c:69)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C4A63E: ompi_errhandler_invoke (errhandler_invoke.c:53)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C81E81: PMPI_Comm_create_group (pcomm_create_group.c:79)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4008FF: main (in /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
</span><br>
<span class="quotelev1">&gt; ==22675==
</span><br>
<span class="quotelev1">&gt; ==22675== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==22675==    at 0x327BC47BA5: _itoa_word (in /usr/lib64/libc-2.18.so)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x327BC48AD0: vfprintf (in /usr/lib64/libc-2.18.so)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x327BC74D52: vasprintf (in /usr/lib64/libc-2.18.so)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x52E6C4B: opal_show_help_vstring (show_help.c:309)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4FCFBB4: orte_show_help (show_help.c:591)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C4B1B5: backend_fatal_aggregate (errhandler_predefined.c:201)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C4B657: backend_fatal (errhandler_predefined.c:334)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C4AB7C: ompi_mpi_errors_are_fatal_comm_handler
</span><br>
<span class="quotelev1">&gt; (errhandler_predefined.c:69)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C4A63E: ompi_errhandler_invoke (errhandler_invoke.c:53)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C81E81: PMPI_Comm_create_group (pcomm_create_group.c:79)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4008FF: main (in /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
</span><br>
<span class="quotelev1">&gt; ==22675==
</span><br>
<span class="quotelev1">&gt; ==22675== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==22675==    at 0x327BC48B18: vfprintf (in /usr/lib64/libc-2.18.so)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x327BC74D52: vasprintf (in /usr/lib64/libc-2.18.so)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x52E6C4B: opal_show_help_vstring (show_help.c:309)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4FCFBB4: orte_show_help (show_help.c:591)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C4B1B5: backend_fatal_aggregate (errhandler_predefined.c:201)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C4B657: backend_fatal (errhandler_predefined.c:334)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C4AB7C: ompi_mpi_errors_are_fatal_comm_handler
</span><br>
<span class="quotelev1">&gt; (errhandler_predefined.c:69)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C4A63E: ompi_errhandler_invoke (errhandler_invoke.c:53)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C81E81: PMPI_Comm_create_group (pcomm_create_group.c:79)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4008FF: main (in /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
</span><br>
<span class="quotelev1">&gt; ==22675==
</span><br>
<span class="quotelev1">&gt; ==22675== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==22675==    at 0x327BC48737: vfprintf (in /usr/lib64/libc-2.18.so)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x327BC74D52: vasprintf (in /usr/lib64/libc-2.18.so)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x52E6C4B: opal_show_help_vstring (show_help.c:309)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4FCFBB4: orte_show_help (show_help.c:591)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C4B1B5: backend_fatal_aggregate (errhandler_predefined.c:201)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C4B657: backend_fatal (errhandler_predefined.c:334)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C4AB7C: ompi_mpi_errors_are_fatal_comm_handler
</span><br>
<span class="quotelev1">&gt; (errhandler_predefined.c:69)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C4A63E: ompi_errhandler_invoke (errhandler_invoke.c:53)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C81E81: PMPI_Comm_create_group (pcomm_create_group.c:79)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4008FF: main (in /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
</span><br>
<span class="quotelev1">&gt; ==22675==
</span><br>
<span class="quotelev1">&gt; ==22675== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==22675==    at 0x327BC487B7: vfprintf (in /usr/lib64/libc-2.18.so)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x327BC74D52: vasprintf (in /usr/lib64/libc-2.18.so)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x52E6C4B: opal_show_help_vstring (show_help.c:309)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4FCFBB4: orte_show_help (show_help.c:591)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C4B1B5: backend_fatal_aggregate (errhandler_predefined.c:201)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C4B657: backend_fatal (errhandler_predefined.c:334)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C4AB7C: ompi_mpi_errors_are_fatal_comm_handler
</span><br>
<span class="quotelev1">&gt; (errhandler_predefined.c:69)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C4A63E: ompi_errhandler_invoke (errhandler_invoke.c:53)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C81E81: PMPI_Comm_create_group (pcomm_create_group.c:79)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4008FF: main (in /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
</span><br>
<span class="quotelev1">&gt; ==22675==
</span><br>
<span class="quotelev1">&gt; [kw2060:22675] *** An error occurred in MPI_Comm_create_group
</span><br>
<span class="quotelev1">&gt; [kw2060:22675] *** reported by process [68714692609,0]
</span><br>
<span class="quotelev1">&gt; [kw2060:22675] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [kw2060:22675] *** Unknown error (this should not happen!)
</span><br>
<span class="quotelev1">&gt; [kw2060:22675] *** MPI_ERRORS_ARE_FATAL (processes in this
</span><br>
<span class="quotelev1">&gt; communicator will now abort,
</span><br>
<span class="quotelev1">&gt; [kw2060:22675] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; ==22675== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==22675==    at 0x4C606BE: ompi_mpi_abort (ompi_mpi_abort.c:96)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C4B6AA: backend_fatal (errhandler_predefined.c:346)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C4AB7C: ompi_mpi_errors_are_fatal_comm_handler
</span><br>
<span class="quotelev1">&gt; (errhandler_predefined.c:69)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C4A63E: ompi_errhandler_invoke (errhandler_invoke.c:53)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C81E81: PMPI_Comm_create_group (pcomm_create_group.c:79)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4008FF: main (in /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
</span><br>
<span class="quotelev1">&gt; ==22675==
</span><br>
<span class="quotelev1">&gt; ==22675== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==22675==    at 0x4C60498: opal_pointer_array_get_item
</span><br>
<span class="quotelev1">&gt; (opal_pointer_array.h:130)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C6052C: ompi_mpi_errnum_get_string (errcode.h:122)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C606EA: ompi_mpi_abort (ompi_mpi_abort.c:97)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C4B6AA: backend_fatal (errhandler_predefined.c:346)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C4AB7C: ompi_mpi_errors_are_fatal_comm_handler
</span><br>
<span class="quotelev1">&gt; (errhandler_predefined.c:69)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C4A63E: ompi_errhandler_invoke (errhandler_invoke.c:53)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C81E81: PMPI_Comm_create_group (pcomm_create_group.c:79)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4008FF: main (in /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
</span><br>
<span class="quotelev1">&gt; ==22675==
</span><br>
<span class="quotelev1">&gt; ==22675== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==22675==    at 0x4CF5382: ompi_rte_abort (rte_orte_module.c:77)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C60B04: ompi_mpi_abort (ompi_mpi_abort.c:203)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C4B6AA: backend_fatal (errhandler_predefined.c:346)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C4AB7C: ompi_mpi_errors_are_fatal_comm_handler
</span><br>
<span class="quotelev1">&gt; (errhandler_predefined.c:69)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C4A63E: ompi_errhandler_invoke (errhandler_invoke.c:53)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C81E81: PMPI_Comm_create_group (pcomm_create_group.c:79)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4008FF: main (in /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
</span><br>
<span class="quotelev1">&gt; ==22675==
</span><br>
<span class="quotelev1">&gt; ==22675== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==22675==    at 0x4CF538E: ompi_rte_abort (rte_orte_module.c:77)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C60B04: ompi_mpi_abort (ompi_mpi_abort.c:203)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C4B6AA: backend_fatal (errhandler_predefined.c:346)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C4AB7C: ompi_mpi_errors_are_fatal_comm_handler
</span><br>
<span class="quotelev1">&gt; (errhandler_predefined.c:69)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C4A63E: ompi_errhandler_invoke (errhandler_invoke.c:53)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C81E81: PMPI_Comm_create_group (pcomm_create_group.c:79)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4008FF: main (in /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
</span><br>
<span class="quotelev1">&gt; ==22675==
</span><br>
<span class="quotelev1">&gt; ==22675== Syscall param exit_group(status) contains uninitialised byte(s)
</span><br>
<span class="quotelev1">&gt; ==22675==    at 0x327BCBCCF9: _Exit (in /usr/lib64/libc-2.18.so)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x327BC3948A: __run_exit_handlers (in /usr/lib64/libc-2.18.so)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x327BC39514: exit (in /usr/lib64/libc-2.18.so)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4FEF419: orte_ess_base_app_abort (ess_base_std_app.c:450)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4CF53C5: ompi_rte_abort (rte_orte_module.c:81)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C60B04: ompi_mpi_abort (ompi_mpi_abort.c:203)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C4B6AA: backend_fatal (errhandler_predefined.c:346)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C4AB7C: ompi_mpi_errors_are_fatal_comm_handler
</span><br>
<span class="quotelev1">&gt; (errhandler_predefined.c:69)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C4A63E: ompi_errhandler_invoke (errhandler_invoke.c:53)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4C81E81: PMPI_Comm_create_group (pcomm_create_group.c:79)
</span><br>
<span class="quotelev1">&gt; ==22675==    by 0x4008FF: main (in /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
</span><br>
<span class="quotelev1">&gt; ==22675==
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14566.php">http://www.open-mpi.org/community/lists/devel/2014/04/14566.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14653.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Patch to fix valgrind warning"</a>
<li><strong>Previous message:</strong> <a href="14651.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>In reply to:</strong> <a href="14566.php">Lisandro Dalcin: "[OMPI devel] MPI_Comm_create_group()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14655.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Comm_create_group()"</a>
<li><strong>Reply:</strong> <a href="14655.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Comm_create_group()"</a>
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
