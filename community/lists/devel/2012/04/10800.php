<?
$subject_val = "Re: [OMPI devel] New MOSIX components draft";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  2 11:35:50 2012" -->
<!-- isoreceived="20120402153550" -->
<!-- sent="Mon, 2 Apr 2012 09:34:58 -0600" -->
<!-- isosent="20120402153458" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New MOSIX components draft" -->
<!-- id="F3C97BD8-25AF-476B-AFAF-7C5B6BE233F8_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F79AE00.9020301_at_mail.huji.ac.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] New MOSIX components draft<br>
<strong>From:</strong> Ralph Castain (<em>rhc.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-02 11:34:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10801.php">Paul H. Hargrove: "Re: [OMPI devel] Remove Portals support?"</a>
<li><strong>Previous message:</strong> <a href="10799.php">Jeffrey Squyres: "Re: [OMPI devel] Regarding the Installation of Open MPI in Amazon EC2 cloud by using UNIVA cluster"</a>
<li><strong>In reply to:</strong> <a href="10798.php">Alex Margolin: "Re: [OMPI devel] New MOSIX components draft"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks like you failed to build the shared memory component. The system isn't seeing a comm path between procs on the same node.
<br>
<p>Sent from my iPad
<br>
<p>On Apr 2, 2012, at 7:47 AM, Alex Margolin &lt;alex.margolin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I found the problem(s) - It was more then just type redefinition, but I fixed it too. I also added some code for btl/base to prevent/detect a similar problem in the future. A newer version of my MOSIX patch (odls + btl + fix) is attached. The BTL, still doesn't work, though, and when I try to use valgrind it fails with some Open-MPI internal problems, which are most likely unrelated to my patch. I'll keep working it, but maybe someone who knows this part of the code should look at it...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; alex_at_singularity:~/huji/benchmarks/simple$ mpirun -mca btl self,mosix -n 2 valgrind simple
</span><br>
<span class="quotelev1">&gt; ==22752== Memcheck, a memory error detector
</span><br>
<span class="quotelev1">&gt; ==22752== Copyright (C) 2002-2010, and GNU GPL'd, by Julian Seward et al.
</span><br>
<span class="quotelev1">&gt; ==22752== Using Valgrind-3.6.1-Debian and LibVEX; rerun with -h for copyright info
</span><br>
<span class="quotelev1">&gt; ==22752== Command: simple
</span><br>
<span class="quotelev1">&gt; ==22752==
</span><br>
<span class="quotelev1">&gt; ==22753== Memcheck, a memory error detector
</span><br>
<span class="quotelev1">&gt; ==22753== Copyright (C) 2002-2010, and GNU GPL'd, by Julian Seward et al.
</span><br>
<span class="quotelev1">&gt; ==22753== Using Valgrind-3.6.1-Debian and LibVEX; rerun with -h for copyright info
</span><br>
<span class="quotelev1">&gt; ==22753== Command: simple
</span><br>
<span class="quotelev1">&gt; ==22753==
</span><br>
<span class="quotelev1">&gt; ==22753== Invalid read of size 8
</span><br>
<span class="quotelev1">&gt; ==22753==    at 0x5ACBE0D: _wordcopy_fwd_dest_aligned (wordcopy.c:205)
</span><br>
<span class="quotelev1">&gt; ==22753==    by 0x5AC5A6B: __GI_memmove (memmove.c:76)
</span><br>
<span class="quotelev1">&gt; ==22753==    by 0x5ACD000: argz_insert (argz-insert.c:55)
</span><br>
<span class="quotelev1">&gt; ==22753==    by 0x520A39A: lt_argz_insert (in /usr/local/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==22753==    by 0x520A537: lt_argz_insertinorder (in /usr/local/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==22753==    by 0x520A808: lt_argz_insertdir (in /usr/local/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==22753==    by 0x520A985: list_files_by_dir (in /usr/local/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==22753==    by 0x520AA0A: foreachfile_callback (in /usr/local/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==22753==    by 0x52086AA: foreach_dirinpath (in /usr/local/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==22753==    by 0x520AADB: lt_dlforeachfile (in /usr/local/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==22753==    by 0x52162DD: find_dyn_components (mca_base_component_find.c:319)
</span><br>
<span class="quotelev1">&gt; ==22753==    by 0x5215EB6: mca_base_component_find (mca_base_component_find.c:186)
</span><br>
<span class="quotelev1">&gt; ==22753==  Address 0x68d9570 is 32 bytes inside a block of size 38 alloc'd
</span><br>
<span class="quotelev1">&gt; ==22753==    at 0x4C28F9F: malloc (vg_replace_malloc.c:236)
</span><br>
<span class="quotelev1">&gt; ==22753==    by 0x52071CA: lt__malloc (in /usr/local/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==22753==    by 0x520A73D: lt_argz_insertdir (in /usr/local/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==22753==    by 0x520A985: list_files_by_dir (in /usr/local/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==22753==    by 0x520AA0A: foreachfile_callback (in /usr/local/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==22753==    by 0x52086AA: foreach_dirinpath (in /usr/local/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==22753==    by 0x520AADB: lt_dlforeachfile (in /usr/local/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==22753==    by 0x52162DD: find_dyn_components (mca_base_component_find.c:319)
</span><br>
<span class="quotelev1">&gt; ==22753==    by 0x5215EB6: mca_base_component_find (mca_base_component_find.c:186)
</span><br>
<span class="quotelev1">&gt; ==22753==    by 0x5219AA3: mca_base_components_open (mca_base_components_open.c:129)
</span><br>
<span class="quotelev1">&gt; ==22753==    by 0x5246183: opal_paffinity_base_open (paffinity_base_open.c:129)
</span><br>
<span class="quotelev1">&gt; ==22753==    by 0x523C013: opal_init (opal_init.c:361)
</span><br>
<span class="quotelev1">&gt; ==22753==
</span><br>
<span class="quotelev1">&gt; ==22752== Invalid read of size 8
</span><br>
<span class="quotelev1">&gt; ==22752==    at 0x5ACBE0D: _wordcopy_fwd_dest_aligned (wordcopy.c:205)
</span><br>
<span class="quotelev1">&gt; ==22752==    by 0x5AC5A6B: __GI_memmove (memmove.c:76)
</span><br>
<span class="quotelev1">&gt; ==22752==    by 0x5ACD000: argz_insert (argz-insert.c:55)
</span><br>
<span class="quotelev1">&gt; ==22752==    by 0x520A39A: lt_argz_insert (in /usr/local/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==22752==    by 0x520A537: lt_argz_insertinorder (in /usr/local/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==22752==    by 0x520A808: lt_argz_insertdir (in /usr/local/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==22752==    by 0x520A985: list_files_by_dir (in /usr/local/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==22752==    by 0x520AA0A: foreachfile_callback (in /usr/local/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==22752==    by 0x52086AA: foreach_dirinpath (in /usr/local/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==22752==    by 0x520AADB: lt_dlforeachfile (in /usr/local/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==22752==    by 0x52162DD: find_dyn_components (mca_base_component_find.c:319)
</span><br>
<span class="quotelev1">&gt; ==22752==    by 0x5215EB6: mca_base_component_find (mca_base_component_find.c:186)
</span><br>
<span class="quotelev1">&gt; ==22752==  Address 0x68d9570 is 32 bytes inside a block of size 38 alloc'd
</span><br>
<span class="quotelev1">&gt; ==22752==    at 0x4C28F9F: malloc (vg_replace_malloc.c:236)
</span><br>
<span class="quotelev1">&gt; ==22752==    by 0x52071CA: lt__malloc (in /usr/local/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==22752==    by 0x520A73D: lt_argz_insertdir (in /usr/local/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==22752==    by 0x520A985: list_files_by_dir (in /usr/local/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==22752==    by 0x520AA0A: foreachfile_callback (in /usr/local/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==22752==    by 0x52086AA: foreach_dirinpath (in /usr/local/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==22752==    by 0x520AADB: lt_dlforeachfile (in /usr/local/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==22752==    by 0x52162DD: find_dyn_components (mca_base_component_find.c:319)
</span><br>
<span class="quotelev1">&gt; ==22752==    by 0x5215EB6: mca_base_component_find (mca_base_component_find.c:186)
</span><br>
<span class="quotelev1">&gt; ==22752==    by 0x5219AA3: mca_base_components_open (mca_base_components_open.c:129)
</span><br>
<span class="quotelev1">&gt; ==22752==    by 0x5246183: opal_paffinity_base_open (paffinity_base_open.c:129)
</span><br>
<span class="quotelev1">&gt; ==22752==    by 0x523C013: opal_init (opal_init.c:361)
</span><br>
<span class="quotelev1">&gt; ==22752==
</span><br>
<span class="quotelev1">&gt; [singularity:22753] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_mpool_sm: libmca_common_sm.so.0: cannot open shared object file: No such file or directory (ignored)
</span><br>
<span class="quotelev1">&gt; [singularity:22752] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_mpool_sm: libmca_common_sm.so.0: cannot open shared object file: No such file or directory (ignored)
</span><br>
<span class="quotelev1">&gt; [singularity:22753] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_coll_sm: libmca_common_sm.so.0: cannot open shared object file: No such file or directory (ignored)
</span><br>
<span class="quotelev1">&gt; [singularity:22752] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_coll_sm: libmca_common_sm.so.0: cannot open shared object file: No such file or directory (ignored)
</span><br>
<span class="quotelev1">&gt; ==22753== Warning: invalid file descriptor 207618048 in syscall open()
</span><br>
<span class="quotelev1">&gt; ==22752== Warning: invalid file descriptor 207618048 in syscall open()
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev1">&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev1">&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev1">&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev1">&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev1">&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Process 1 ([[59806,1],0]) is on host: singularity
</span><br>
<span class="quotelev1">&gt;  Process 2 ([[59806,1],1]) is on host: singularity
</span><br>
<span class="quotelev1">&gt;  BTLs attempted: self
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; MPI_INIT has failed because at least one MPI process is unreachable
</span><br>
<span class="quotelev1">&gt; from another.  This *usually* means that an underlying communication
</span><br>
<span class="quotelev1">&gt; plugin -- such as a BTL or an MTL -- has either not loaded or not
</span><br>
<span class="quotelev1">&gt; allowed itself to be used.  Your MPI job will now abort.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You may wish to try to narrow down the problem;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Check the output of ompi_info to see which BTL/MTL plugins are
</span><br>
<span class="quotelev1">&gt;   available.
</span><br>
<span class="quotelev1">&gt; * Run your application with MPI_THREAD_SINGLE.
</span><br>
<span class="quotelev1">&gt; * Set the MCA parameter btl_base_verbose to 100 (or mtl_base_verbose,
</span><br>
<span class="quotelev1">&gt;   if using MTL-based communications) to see exactly which
</span><br>
<span class="quotelev1">&gt;   communication plugins were considered and/or discarded.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ==22752== Use of uninitialised value of size 8
</span><br>
<span class="quotelev1">&gt; ==22752==    at 0x5A8631B: _itoa_word (_itoa.c:195)
</span><br>
<span class="quotelev1">&gt; ==22752==    by 0x5A8AE43: vfprintf (vfprintf.c:1622)
</span><br>
<span class="quotelev1">&gt; ==22752==    by 0x5AADB83: vasprintf (vasprintf.c:64)
</span><br>
<span class="quotelev1">&gt; ==22752==    by 0x524C150: opal_show_help_vstring (show_help.c:309)
</span><br>
<span class="quotelev1">&gt; ==22752==    by 0x51786F1: orte_show_help (show_help.c:648)
</span><br>
<span class="quotelev1">&gt; ==22752==    by 0x50B4693: backend_fatal_aggregate (errhandler_predefined.c:205)
</span><br>
<span class="quotelev1">&gt; ==22752==    by 0x50B4A9B: backend_fatal (errhandler_predefined.c:329)
</span><br>
<span class="quotelev1">&gt; ==22752==    by 0x50B3FAF: ompi_mpi_errors_are_fatal_comm_handler (errhandler_predefined.c:68)
</span><br>
<span class="quotelev1">&gt; ==22752==    by 0x50B38FA: ompi_errhandler_invoke (errhandler_invoke.c:41)
</span><br>
<span class="quotelev1">&gt; ==22752==    by 0x50FD446: PMPI_Init (pinit.c:95)
</span><br>
<span class="quotelev1">&gt; ==22752==    by 0x40A128: MPI::Init(int&amp;, char**&amp;) (in /home/alex/huji/benchmarks/simple/simple)
</span><br>
<span class="quotelev1">&gt; ==22752==    by 0x409118: main (in /home/alex/huji/benchmarks/simple/simple)
</span><br>
<span class="quotelev1">&gt; ==22752==
</span><br>
<span class="quotelev1">&gt; ==22752== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==22752==    at 0x5A86325: _itoa_word (_itoa.c:195)
</span><br>
<span class="quotelev1">&gt; ==22752==    by 0x5A8AE43: vfprintf (vfprintf.c:1622)
</span><br>
<span class="quotelev1">&gt; ==22752==    by 0x5AADB83: vasprintf (vasprintf.c:64)
</span><br>
<span class="quotelev1">&gt; ==22752==    by 0x524C150: opal_show_help_vstring (show_help.c:309)
</span><br>
<span class="quotelev1">&gt; ==22752==    by 0x51786F1: orte_show_help (show_help.c:648)
</span><br>
<span class="quotelev1">&gt; ==22752==    by 0x50B4693: backend_fatal_aggregate (errhandler_predefined.c:205)
</span><br>
<span class="quotelev1">&gt; ==22752==    by 0x50B4A9B: backend_fatal (errhandler_predefined.c:329)
</span><br>
<span class="quotelev1">&gt; ==22752==    by 0x50B3FAF: ompi_mpi_errors_are_fatal_comm_handler (errhandler_predefined.c:68)
</span><br>
<span class="quotelev1">&gt; ==22752==    by 0x50B38FA: ompi_errhandler_invoke (errhandler_invoke.c:41)
</span><br>
<span class="quotelev1">&gt; ==22752==    by 0x50FD446: PMPI_Init (pinit.c:95)
</span><br>
<span class="quotelev1">&gt; ==22752==    by 0x40A128: MPI::Init(int&amp;, char**&amp;) (in /home/alex/huji/benchmarks/simple/simple)
</span><br>
<span class="quotelev1">&gt; ==22752==    by 0x409118: main (in /home/alex/huji/benchmarks/simple/simple)
</span><br>
<span class="quotelev1">&gt; ==22752==
</span><br>
<span class="quotelev1">&gt; [singularity:22752] *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; [singularity:22752] *** reported by process [3919446017,0]
</span><br>
<span class="quotelev1">&gt; [singularity:22752] *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; [singularity:22752] *** Unknown error
</span><br>
<span class="quotelev1">&gt; [singularity:22752] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; [singularity:22752] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; An MPI process is aborting at a time when it cannot guarantee that all
</span><br>
<span class="quotelev1">&gt; of its peer processes in the job will be killed properly.  You should
</span><br>
<span class="quotelev1">&gt; double check that everything has shut down cleanly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Reason:     Before MPI_INIT completed
</span><br>
<span class="quotelev1">&gt;  Local host: singularity
</span><br>
<span class="quotelev1">&gt;  PID:        22752
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ==22753== Use of uninitialised value of size 8
</span><br>
<span class="quotelev1">&gt; ==22753==    at 0x5A8631B: _itoa_word (_itoa.c:195)
</span><br>
<span class="quotelev1">&gt; ==22753==    by 0x5A8AE43: vfprintf (vfprintf.c:1622)
</span><br>
<span class="quotelev1">&gt; ==22753==    by 0x5AADB83: vasprintf (vasprintf.c:64)
</span><br>
<span class="quotelev1">&gt; ==22753==    by 0x524C150: opal_show_help_vstring (show_help.c:309)
</span><br>
<span class="quotelev1">&gt; ==22753==    by 0x51786F1: orte_show_help (show_help.c:648)
</span><br>
<span class="quotelev1">&gt; ==22753==    by 0x50B4693: backend_fatal_aggregate (errhandler_predefined.c:205)
</span><br>
<span class="quotelev1">&gt; ==22753==    by 0x50B4A9B: backend_fatal (errhandler_predefined.c:329)
</span><br>
<span class="quotelev1">&gt; ==22753==    by 0x50B3FAF: ompi_mpi_errors_are_fatal_comm_handler (errhandler_predefined.c:68)
</span><br>
<span class="quotelev1">&gt; ==22753==    by 0x50B38FA: ompi_errhandler_invoke (errhandler_invoke.c:41)
</span><br>
<span class="quotelev1">&gt; ==22753==    by 0x50FD446: PMPI_Init (pinit.c:95)
</span><br>
<span class="quotelev1">&gt; ==22753==    by 0x40A128: MPI::Init(int&amp;, char**&amp;) (in /home/alex/huji/benchmarks/simple/simple)
</span><br>
<span class="quotelev1">&gt; ==22753==    by 0x409118: main (in /home/alex/huji/benchmarks/simple/simple)
</span><br>
<span class="quotelev1">&gt; ==22753==
</span><br>
<span class="quotelev1">&gt; ==22753== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==22753==    at 0x5A86325: _itoa_word (_itoa.c:195)
</span><br>
<span class="quotelev1">&gt; ==22753==    by 0x5A8AE43: vfprintf (vfprintf.c:1622)
</span><br>
<span class="quotelev1">&gt; ==22753==    by 0x5AADB83: vasprintf (vasprintf.c:64)
</span><br>
<span class="quotelev1">&gt; ==22753==    by 0x524C150: opal_show_help_vstring (show_help.c:309)
</span><br>
<span class="quotelev1">&gt; ==22753==    by 0x51786F1: orte_show_help (show_help.c:648)
</span><br>
<span class="quotelev1">&gt; ==22753==    by 0x50B4693: backend_fatal_aggregate (errhandler_predefined.c:205)
</span><br>
<span class="quotelev1">&gt; ==22753==    by 0x50B4A9B: backend_fatal (errhandler_predefined.c:329)
</span><br>
<span class="quotelev1">&gt; ==22753==    by 0x50B3FAF: ompi_mpi_errors_are_fatal_comm_handler (errhandler_predefined.c:68)
</span><br>
<span class="quotelev1">&gt; ==22753==    by 0x50B38FA: ompi_errhandler_invoke (errhandler_invoke.c:41)
</span><br>
<span class="quotelev1">&gt; ==22753==    by 0x50FD446: PMPI_Init (pinit.c:95)
</span><br>
<span class="quotelev1">&gt; ==22753==    by 0x40A128: MPI::Init(int&amp;, char**&amp;) (in /home/alex/huji/benchmarks/simple/simple)
</span><br>
<span class="quotelev1">&gt; ==22753==    by 0x409118: main (in /home/alex/huji/benchmarks/simple/simple)
</span><br>
<span class="quotelev1">&gt; ==22753==
</span><br>
<span class="quotelev1">&gt; ==22752==
</span><br>
<span class="quotelev1">&gt; ==22752== HEAP SUMMARY:
</span><br>
<span class="quotelev1">&gt; ==22752==     in use at exit: 730,332 bytes in 2,844 blocks
</span><br>
<span class="quotelev1">&gt; ==22752==   total heap usage: 4,959 allocs, 2,115 frees, 11,353,797 bytes allocated
</span><br>
<span class="quotelev1">&gt; ==22752==
</span><br>
<span class="quotelev1">&gt; ==22753==
</span><br>
<span class="quotelev1">&gt; ==22753== HEAP SUMMARY:
</span><br>
<span class="quotelev1">&gt; ==22753==     in use at exit: 730,332 bytes in 2,844 blocks
</span><br>
<span class="quotelev1">&gt; ==22753==   total heap usage: 4,970 allocs, 2,126 frees, 11,354,058 bytes allocated
</span><br>
<span class="quotelev1">&gt; ==22753==
</span><br>
<span class="quotelev1">&gt; ==22752== LEAK SUMMARY:
</span><br>
<span class="quotelev1">&gt; ==22752==    definitely lost: 2,138 bytes in 52 blocks
</span><br>
<span class="quotelev1">&gt; ==22752==    indirectly lost: 7,440 bytes in 12 blocks
</span><br>
<span class="quotelev1">&gt; ==22752==      possibly lost: 0 bytes in 0 blocks
</span><br>
<span class="quotelev1">&gt; ==22752==    still reachable: 720,754 bytes in 2,780 blocks
</span><br>
<span class="quotelev1">&gt; ==22752==         suppressed: 0 bytes in 0 blocks
</span><br>
<span class="quotelev1">&gt; ==22752== Rerun with --leak-check=full to see details of leaked memory
</span><br>
<span class="quotelev1">&gt; ==22752==
</span><br>
<span class="quotelev1">&gt; ==22752== For counts of detected and suppressed errors, rerun with: -v
</span><br>
<span class="quotelev1">&gt; ==22752== Use --track-origins=yes to see where uninitialised values come from
</span><br>
<span class="quotelev1">&gt; ==22752== ERROR SUMMARY: 47 errors from 3 contexts (suppressed: 4 from 4)
</span><br>
<span class="quotelev1">&gt; ==22753== LEAK SUMMARY:
</span><br>
<span class="quotelev1">&gt; ==22753==    definitely lost: 2,138 bytes in 52 blocks
</span><br>
<span class="quotelev1">&gt; ==22753==    indirectly lost: 7,440 bytes in 12 blocks
</span><br>
<span class="quotelev1">&gt; ==22753==      possibly lost: 0 bytes in 0 blocks
</span><br>
<span class="quotelev1">&gt; ==22753==    still reachable: 720,754 bytes in 2,780 blocks
</span><br>
<span class="quotelev1">&gt; ==22753==         suppressed: 0 bytes in 0 blocks
</span><br>
<span class="quotelev1">&gt; ==22753== Rerun with --leak-check=full to see details of leaked memory
</span><br>
<span class="quotelev1">&gt; ==22753==
</span><br>
<span class="quotelev1">&gt; ==22753== For counts of detected and suppressed errors, rerun with: -v
</span><br>
<span class="quotelev1">&gt; ==22753== Use --track-origins=yes to see where uninitialised values come from
</span><br>
<span class="quotelev1">&gt; ==22753== ERROR SUMMARY: 47 errors from 3 contexts (suppressed: 4 from 4)
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; While the primary job  terminated normally, 2 processes returned
</span><br>
<span class="quotelev1">&gt; non-zero exit codes.. Further examination may be required.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [singularity:22751] 1 more process has sent help message help-mca-bml-r2.txt / unreachable proc
</span><br>
<span class="quotelev1">&gt; [singularity:22751] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt; [singularity:22751] 1 more process has sent help message help-mpi-runtime / mpi_init:startup:pml-add-procs-fail
</span><br>
<span class="quotelev1">&gt; [singularity:22751] 1 more process has sent help message help-mpi-errors.txt / mpi_errors_are_fatal unknown handle
</span><br>
<span class="quotelev1">&gt; [singularity:22751] 1 more process has sent help message help-mpi-runtime.txt / ompi mpi abort:cannot guarantee all killed
</span><br>
<span class="quotelev1">&gt; alex_at_singularity:~/huji/benchmarks/simple$
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 04/01/2012 04:59 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I suspect the problem is here:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /**
</span><br>
<span class="quotelev2">&gt;&gt; + * MOSIX BTL component.
</span><br>
<span class="quotelev2">&gt;&gt; + */
</span><br>
<span class="quotelev2">&gt;&gt; +struct mca_btl_base_component_t {
</span><br>
<span class="quotelev2">&gt;&gt; +    mca_btl_base_component_2_0_0_t super;  /**&lt;  base BTL component */
</span><br>
<span class="quotelev2">&gt;&gt; +    mca_btl_mosix_module_t mosix_module;   /**&lt;  local module */
</span><br>
<span class="quotelev2">&gt;&gt; +};
</span><br>
<span class="quotelev2">&gt;&gt; +typedef struct mca_btl_base_component_t mca_btl_mosix_component_t;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +OMPI_MODULE_DECLSPEC extern mca_btl_mosix_component_t mca_btl_mosix_component;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You redefined the mca_btl_base_component_t struct. What we usually do is define a new struct:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; struct mca_btl_mosix_component_t {
</span><br>
<span class="quotelev2">&gt;&gt;    mca_btl_base_component_t super;  /**&lt;  base BTL component */
</span><br>
<span class="quotelev2">&gt;&gt;    mca_btl_mosix_module_t mosix_module;   /**&lt;  local module */
</span><br>
<span class="quotelev2">&gt;&gt; };
</span><br>
<span class="quotelev2">&gt;&gt; typedef struct mca_btl_mosix_component_t mca_btl_mosix_component_t;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You can then overload that component with your additional info, leaving the base component to contain the required minimal elements.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 1, 2012, at 1:59 AM, Alex Margolin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I traced the problem to the BML component:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Index: ompi/mca/bml/r2/bml_r2.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- ompi/mca/bml/r2/bml_r2.c    (revision 26191)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ ompi/mca/bml/r2/bml_r2.c    (working copy)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -105,6 +105,8 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         if (NULL == btl_names_argv || NULL == btl_names_argv[i]) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            printf(&quot;\n\nR1: %p\n\n&quot;, btl-&gt;btl_component-&gt;btl_version.mca_component_name);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            printf(&quot;\n\nR2: %s\n\n&quot;, btl-&gt;btl_component-&gt;btl_version.mca_component_name);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             opal_argv_append_nosize(&amp;btl_names_argv,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                     btl-&gt;btl_component-&gt;btl_version.mca_component_name);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I Get (white-spaces removed) for normal run:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; R1: 0x7f820e3c31d8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; R2: self
</span><br>
<span class="quotelev3">&gt;&gt;&gt; R1: 0x7f820e13c598
</span><br>
<span class="quotelev3">&gt;&gt;&gt; R2: tcp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ... and for my module:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; R1: 0x38
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - and then the segmentation fault.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I guess it has something to do with the way I initialize my component - I'll resume debugging after lunch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Alex
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;mosix_components.diff&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10801.php">Paul H. Hargrove: "Re: [OMPI devel] Remove Portals support?"</a>
<li><strong>Previous message:</strong> <a href="10799.php">Jeffrey Squyres: "Re: [OMPI devel] Regarding the Installation of Open MPI in Amazon EC2 cloud by using UNIVA cluster"</a>
<li><strong>In reply to:</strong> <a href="10798.php">Alex Margolin: "Re: [OMPI devel] New MOSIX components draft"</a>
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
