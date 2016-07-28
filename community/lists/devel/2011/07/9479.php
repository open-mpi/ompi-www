<?
$subject_val = "Re: [OMPI devel] TIPC BTL Segmentation fault";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  7 20:28:13 2011" -->
<!-- isoreceived="20110708002813" -->
<!-- sent="Thu, 7 Jul 2011 20:28:08 -0400" -->
<!-- isosent="20110708002808" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] TIPC BTL Segmentation fault" -->
<!-- id="93283107-EAD2-49E9-B60D-C10C8E11DF76_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E11C21F.1050602_at_ericsson.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] TIPC BTL Segmentation fault<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-07 20:28:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9480.php">Jeff Squyres: "Re: [OMPI devel] Question about hanging mpirun"</a>
<li><strong>Previous message:</strong> <a href="9478.php">Jeff Squyres: "Re: [OMPI devel] Fix a hang in carto_base_select() if carto_module_init() fails"</a>
<li><strong>In reply to:</strong> <a href="9471.php">Xin He: "Re: [OMPI devel] TIPC BTL Segmentation fault"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay; this past weekend was a holiday in the US.  I'm just now catching up on the backlog.
<br>
<p>Have you edited pml_ob1_comm.c?  For me, line 56 (on the trunk) is:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;OBJ_CONSTRUCT(&amp;comm-&gt;matching_lock, opal_mutex_t);
<br>
<p>But clearly you seem to be executing the line above that:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;OBJ_CONSTRUCT(&amp;comm-&gt;wild_receives, opal_list_t);
<br>
<p>I can't imagine why that line would segv -- it would imply that the &quot;class definition&quot; for opal_list_t is hosed in memory somehow.
<br>
<p>Are you 100% sure that you're compiling / linking against your development copy of Open MPI, and not accidentally mixing it with some other OMPI installation at run time?  (e.g., via LD_LIBRARY_PATH or somesuch)
<br>
<p>If you're not, you might want to run hello_c through a debugger and put a watch on the opal_list_t_class variable and see when it changes.  It should be initialed early in opal_init() somewhere and then used many times during MPI_Init() before the place where it fails.  The sentinel value 0xDEAFBEEDDEAFBEED is used in OMPI debug builds to mean that it's an object that has been destroyed.  But this should never happen in the opal_list_t_class instance itself.
<br>
<p><p><p>On Jul 4, 2011, at 9:37 AM, Xin He wrote:
<br>
<p><span class="quotelev1">&gt; Hi, here is the result:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ehhexxn_at_oak:~/git/test$ mpirun -n 2 -mca btl tipc,self valgrind ./hello_c &gt; 11.out
</span><br>
<span class="quotelev1">&gt; ==30850== Memcheck, a memory error detector
</span><br>
<span class="quotelev1">&gt; ==30850== Copyright (C) 2002-2010, and GNU GPL'd, by Julian Seward et al.
</span><br>
<span class="quotelev1">&gt; ==30850== Using Valgrind-3.6.0.SVN-Debian and LibVEX; rerun with -h for copyright info
</span><br>
<span class="quotelev1">&gt; ==30850== Command: ./hello_c
</span><br>
<span class="quotelev1">&gt; ==30850==
</span><br>
<span class="quotelev1">&gt; ==30849== Memcheck, a memory error detector
</span><br>
<span class="quotelev1">&gt; ==30849== Copyright (C) 2002-2010, and GNU GPL'd, by Julian Seward et al.
</span><br>
<span class="quotelev1">&gt; ==30849== Using Valgrind-3.6.0.SVN-Debian and LibVEX; rerun with -h for copyright info
</span><br>
<span class="quotelev1">&gt; ==30849== Command: ./hello_c
</span><br>
<span class="quotelev1">&gt; ==30849==
</span><br>
<span class="quotelev1">&gt; ==30849== Jump to the invalid address stated on the next line
</span><br>
<span class="quotelev1">&gt; ==30849==    at 0xDEAFBEEDDEAFBEED: ???
</span><br>
<span class="quotelev1">&gt; ==30849==    by 0x50151F1: opal_list_construct (opal_list.c:88)
</span><br>
<span class="quotelev1">&gt; ==30849==    by 0xA8A49F1: opal_obj_run_constructors (opal_object.h:427)
</span><br>
<span class="quotelev1">&gt; ==30849==    by 0xA8A4E59: mca_pml_ob1_comm_construct (pml_ob1_comm.c:56)
</span><br>
<span class="quotelev1">&gt; ==30849==    by 0xA8A1385: opal_obj_run_constructors (opal_object.h:427)
</span><br>
<span class="quotelev1">&gt; ==30849==    by 0xA8A149F: opal_obj_new (opal_object.h:477)
</span><br>
<span class="quotelev1">&gt; ==30849==    by 0xA8A12FA: opal_obj_new_debug (opal_object.h:252)
</span><br>
<span class="quotelev1">&gt; ==30849==    by 0xA8A2A5F: mca_pml_ob1_add_comm (pml_ob1.c:182)
</span><br>
<span class="quotelev1">&gt; ==30849==    by 0x4E95F50: ompi_mpi_init (ompi_mpi_init.c:770)
</span><br>
<span class="quotelev1">&gt; ==30849==    by 0x4EC6C32: PMPI_Init (pinit.c:84)
</span><br>
<span class="quotelev1">&gt; ==30849==    by 0x400935: main (in /home/ehhexxn/git/test/hello_c)
</span><br>
<span class="quotelev1">&gt; ==30849==  Address 0xdeafbeeddeafbeed is not stack'd, malloc'd or (recently) free'd
</span><br>
<span class="quotelev1">&gt; ==30849==
</span><br>
<span class="quotelev1">&gt; [oak:30849] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [oak:30849] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [oak:30849] Signal code: Invalid permissions (2)
</span><br>
<span class="quotelev1">&gt; [oak:30849] Failing at address: 0xdeafbeeddeafbeed
</span><br>
<span class="quotelev1">&gt; ==30849== Invalid read of size 1
</span><br>
<span class="quotelev1">&gt; ==30849==    at 0xA011FDB: ??? (in /lib/libgcc_s.so.1)
</span><br>
<span class="quotelev1">&gt; ==30849==    by 0xA012B0B: _Unwind_Backtrace (in /lib/libgcc_s.so.1)
</span><br>
<span class="quotelev1">&gt; ==30849==    by 0x60BE69D: backtrace (backtrace.c:91)
</span><br>
<span class="quotelev1">&gt; ==30849==    by 0x4FAB055: opal_backtrace_buffer (backtrace_execinfo.c:54)
</span><br>
<span class="quotelev1">&gt; ==30849==    by 0x5026DF3: show_stackframe (stacktrace.c:348)
</span><br>
<span class="quotelev1">&gt; ==30849==    by 0x5DB1B3F: ??? (in /lib/libpthread-2.12.1.so)
</span><br>
<span class="quotelev1">&gt; ==30849==    by 0xDEAFBEEDDEAFBEEC: ???
</span><br>
<span class="quotelev1">&gt; ==30849==    by 0x50151F1: opal_list_construct (opal_list.c:88)
</span><br>
<span class="quotelev1">&gt; ==30849==    by 0xA8A49F1: opal_obj_run_constructors (opal_object.h:427)
</span><br>
<span class="quotelev1">&gt; ==30849==    by 0xA8A4E59: mca_pml_ob1_comm_construct (pml_ob1_comm.c:56)
</span><br>
<span class="quotelev1">&gt; ==30849==    by 0xA8A1385: opal_obj_run_constructors (opal_object.h:427)
</span><br>
<span class="quotelev1">&gt; ==30849==    by 0xA8A149F: opal_obj_new (opal_object.h:477)
</span><br>
<span class="quotelev1">&gt; ==30849==  Address 0xdeafbeeddeafbeed is not stack'd, malloc'd or (recently) free'd
</span><br>
<span class="quotelev1">&gt; ==30849==
</span><br>
<span class="quotelev1">&gt; ==30849==
</span><br>
<span class="quotelev1">&gt; ==30849== Process terminating with default action of signal 11 (SIGSEGV): dumping core
</span><br>
<span class="quotelev1">&gt; ==30849==  General Protection Fault
</span><br>
<span class="quotelev1">&gt; ==30849==    at 0xA011FDB: ??? (in /lib/libgcc_s.so.1)
</span><br>
<span class="quotelev1">&gt; ==30849==    by 0xA012B0B: _Unwind_Backtrace (in /lib/libgcc_s.so.1)
</span><br>
<span class="quotelev1">&gt; ==30849==    by 0x60BE69D: backtrace (backtrace.c:91)
</span><br>
<span class="quotelev1">&gt; ==30849==    by 0x4FAB055: opal_backtrace_buffer (backtrace_execinfo.c:54)
</span><br>
<span class="quotelev1">&gt; ==30849==    by 0x5026DF3: show_stackframe (stacktrace.c:348)
</span><br>
<span class="quotelev1">&gt; ==30849==    by 0x5DB1B3F: ??? (in /lib/libpthread-2.12.1.so)
</span><br>
<span class="quotelev1">&gt; ==30849==    by 0xDEAFBEEDDEAFBEEC: ???
</span><br>
<span class="quotelev1">&gt; ==30849==    by 0x50151F1: opal_list_construct (opal_list.c:88)
</span><br>
<span class="quotelev1">&gt; ==30849==    by 0xA8A49F1: opal_obj_run_constructors (opal_object.h:427)
</span><br>
<span class="quotelev1">&gt; ==30849==    by 0xA8A4E59: mca_pml_ob1_comm_construct (pml_ob1_comm.c:56)
</span><br>
<span class="quotelev1">&gt; ==30849==    by 0xA8A1385: opal_obj_run_constructors (opal_object.h:427)
</span><br>
<span class="quotelev1">&gt; ==30849==    by 0xA8A149F: opal_obj_new (opal_object.h:477)
</span><br>
<span class="quotelev1">&gt; ==30850== Jump to the invalid address stated on the next line
</span><br>
<span class="quotelev1">&gt; ==30850==    at 0xDEAFBEEDDEAFBEED: ???
</span><br>
<span class="quotelev1">&gt; ==30850==    by 0x50151F1: opal_list_construct (opal_list.c:88)
</span><br>
<span class="quotelev1">&gt; ==30850==    by 0xA8A49F1: opal_obj_run_constructors (opal_object.h:427)
</span><br>
<span class="quotelev1">&gt; ==30850==    by 0xA8A4E59: mca_pml_ob1_comm_construct (pml_ob1_comm.c:56)
</span><br>
<span class="quotelev1">&gt; ==30850==    by 0xA8A1385: opal_obj_run_constructors (opal_object.h:427)
</span><br>
<span class="quotelev1">&gt; ==30850==    by 0xA8A149F: opal_obj_new (opal_object.h:477)
</span><br>
<span class="quotelev1">&gt; ==30850==    by 0xA8A12FA: opal_obj_new_debug (opal_object.h:252)
</span><br>
<span class="quotelev1">&gt; ==30850==    by 0xA8A2A5F: mca_pml_ob1_add_comm (pml_ob1.c:182)
</span><br>
<span class="quotelev1">&gt; ==30850==    by 0x4E95F50: ompi_mpi_init (ompi_mpi_init.c:770)
</span><br>
<span class="quotelev1">&gt; ==30850==    by 0x4EC6C32: PMPI_Init (pinit.c:84)
</span><br>
<span class="quotelev1">&gt; ==30850==    by 0x400935: main (in /home/ehhexxn/git/test/hello_c)
</span><br>
<span class="quotelev1">&gt; ==30850==  Address 0xdeafbeeddeafbeed is not stack'd, malloc'd or (recently) free'd
</span><br>
<span class="quotelev1">&gt; ==30850==
</span><br>
<span class="quotelev1">&gt; [oak:30850] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [oak:30850] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [oak:30850] Signal code: Invalid permissions (2)
</span><br>
<span class="quotelev1">&gt; [oak:30850] Failing at address: 0xdeafbeeddeafbeed
</span><br>
<span class="quotelev1">&gt; ==30849==
</span><br>
<span class="quotelev1">&gt; ==30849== HEAP SUMMARY:
</span><br>
<span class="quotelev1">&gt; ==30849==     in use at exit: 2,338,964 bytes in 3,213 blocks
</span><br>
<span class="quotelev1">&gt; ==30849==   total heap usage: 5,205 allocs, 1,992 frees, 12,942,078 bytes allocated
</span><br>
<span class="quotelev1">&gt; ==30849==
</span><br>
<span class="quotelev1">&gt; ==30850== Invalid read of size 1
</span><br>
<span class="quotelev1">&gt; ==30850==    at 0xA011FDB: ??? (in /lib/libgcc_s.so.1)
</span><br>
<span class="quotelev1">&gt; ==30850==    by 0xA012B0B: _Unwind_Backtrace (in /lib/libgcc_s.so.1)
</span><br>
<span class="quotelev1">&gt; ==30850==    by 0x60BE69D: backtrace (backtrace.c:91)
</span><br>
<span class="quotelev1">&gt; ==30850==    by 0x4FAB055: opal_backtrace_buffer (backtrace_execinfo.c:54)
</span><br>
<span class="quotelev1">&gt; ==30850==    by 0x5026DF3: show_stackframe (stacktrace.c:348)
</span><br>
<span class="quotelev1">&gt; ==30850==    by 0x5DB1B3F: ??? (in /lib/libpthread-2.12.1.so)
</span><br>
<span class="quotelev1">&gt; ==30850==    by 0xDEAFBEEDDEAFBEEC: ???
</span><br>
<span class="quotelev1">&gt; ==30850==    by 0x50151F1: opal_list_construct (opal_list.c:88)
</span><br>
<span class="quotelev1">&gt; ==30850==    by 0xA8A49F1: opal_obj_run_constructors (opal_object.h:427)
</span><br>
<span class="quotelev1">&gt; ==30850==    by 0xA8A4E59: mca_pml_ob1_comm_construct (pml_ob1_comm.c:56)
</span><br>
<span class="quotelev1">&gt; ==30850==    by 0xA8A1385: opal_obj_run_constructors (opal_object.h:427)
</span><br>
<span class="quotelev1">&gt; ==30850==    by 0xA8A149F: opal_obj_new (opal_object.h:477)
</span><br>
<span class="quotelev1">&gt; ==30850==  Address 0xdeafbeeddeafbeed is not stack'd, malloc'd or (recently) free'd
</span><br>
<span class="quotelev1">&gt; ==30850==
</span><br>
<span class="quotelev1">&gt; ==30850==
</span><br>
<span class="quotelev1">&gt; ==30850== Process terminating with default action of signal 11 (SIGSEGV): dumping core
</span><br>
<span class="quotelev1">&gt; ==30850==  General Protection Fault
</span><br>
<span class="quotelev1">&gt; ==30850==    at 0xA011FDB: ??? (in /lib/libgcc_s.so.1)
</span><br>
<span class="quotelev1">&gt; ==30850==    by 0xA012B0B: _Unwind_Backtrace (in /lib/libgcc_s.so.1)
</span><br>
<span class="quotelev1">&gt; ==30850==    by 0x60BE69D: backtrace (backtrace.c:91)
</span><br>
<span class="quotelev1">&gt; ==30850==    by 0x4FAB055: opal_backtrace_buffer (backtrace_execinfo.c:54)
</span><br>
<span class="quotelev1">&gt; ==30850==    by 0x5026DF3: show_stackframe (stacktrace.c:348)
</span><br>
<span class="quotelev1">&gt; ==30850==    by 0x5DB1B3F: ??? (in /lib/libpthread-2.12.1.so)
</span><br>
<span class="quotelev1">&gt; ==30850==    by 0xDEAFBEEDDEAFBEEC: ???
</span><br>
<span class="quotelev1">&gt; ==30850==    by 0x50151F1: opal_list_construct (opal_list.c:88)
</span><br>
<span class="quotelev1">&gt; ==30850==    by 0xA8A49F1: opal_obj_run_constructors (opal_object.h:427)
</span><br>
<span class="quotelev1">&gt; ==30850==    by 0xA8A4E59: mca_pml_ob1_comm_construct (pml_ob1_comm.c:56)
</span><br>
<span class="quotelev1">&gt; ==30850==    by 0xA8A1385: opal_obj_run_constructors (opal_object.h:427)
</span><br>
<span class="quotelev1">&gt; ==30850==    by 0xA8A149F: opal_obj_new (opal_object.h:477)
</span><br>
<span class="quotelev1">&gt; ==30849== LEAK SUMMARY:
</span><br>
<span class="quotelev1">&gt; ==30849==    definitely lost: 453 bytes in 13 blocks
</span><br>
<span class="quotelev1">&gt; ==30849==    indirectly lost: 7,440 bytes in 12 blocks
</span><br>
<span class="quotelev1">&gt; ==30849==      possibly lost: 0 bytes in 0 blocks
</span><br>
<span class="quotelev1">&gt; ==30849==    still reachable: 2,331,071 bytes in 3,188 blocks
</span><br>
<span class="quotelev1">&gt; ==30849==         suppressed: 0 bytes in 0 blocks
</span><br>
<span class="quotelev1">&gt; ==30849== Rerun with --leak-check=full to see details of leaked memory
</span><br>
<span class="quotelev1">&gt; ==30849==
</span><br>
<span class="quotelev1">&gt; ==30849== For counts of detected and suppressed errors, rerun with: -v
</span><br>
<span class="quotelev1">&gt; ==30849== ERROR SUMMARY: 2 errors from 2 contexts (suppressed: 4 from 4)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 07/04/2011 01:51 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Keep in mind, too, that opal_object is the &quot;base&quot; object -- put in C++ terms, it's the abstract class that all other classes are made of.  So it's rare that we could create a opal_object by itself.  opal_objects are usually created as part of some other, higher-level object.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What's the full call stack of where Valgrind is showing the error?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Make sure you have the most recent valgrind (www.valgrind.org); the versions that ship in various distros may be somewhat old.  Newer valgrind versions show lots of things that older versions don't.  A new valgrind *might* be able to show some prior memory fault that is causing the issue...?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 4, 2011, at 7:45 AM, Xin He wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I ran the program with valgrind, and it showed almost the same error. It appeared that the segmentation fault happened during
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the initiation of an opal_object.  That's why it puzzled me.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /Xin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 07/04/2011 01:40 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ah -- so this is in the template code.  I suspect this code might have bit rotted a bit.  :-\
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If you run this through valgrind, does anything obvious show up?  I ask because this kind of error is typically a symptom of the real error.  I.e., the real error was some kind of memory corruption that occurred earlier, and this is the memory access that exposes that prior memory corruption.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jul 4, 2011, at 5:08 AM, Xin He wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Yes, it is a opal_object.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; And this error seems to be caused by these code:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  void mca_btl_template_proc_construct(mca_btl_template_proc_t* template_proc){
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     .......
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    .........
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     /* add to list of all proc instance */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     OPAL_THREAD_LOCK(&amp;mca_btl_template_component.template_lock);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     opal_list_append(&amp;mca_btl_template_component.template_procs,&amp;template_proc-&gt;super);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     OPAL_THREAD_UNLOCK(&amp;mca_btl_template_component.template_lock);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /Xin
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 07/02/2011 10:49 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Do u know which object it is that is being constructed?  When you compile with debugging enabled, theres strings in the object struct that identify te file and line where the obj was created.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Sent from my phone. No type good.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Jun 29, 2011, at 8:48 AM, &quot;Xin He&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt;xin.i.he_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; As I advanced in my implementation of TIPC BTL, I added the component and tried to run hello_c program to test.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Then I got this segmentation fault. It seemed happening after the call &quot;mca_btl_tipc_add_procs&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; The error message displayed:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [oak:23192] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [oak:23192] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [oak:23192] Signal code:  (128)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [oak:23192] Failing at address: (nil)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [oak:23192] [ 0] /lib/libpthread.so.0(+0xfb40) [0x7fec2a40fb40]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [oak:23192] [ 1] /usr/lib/libmpi.so.0(+0x1e6c10) [0x7fec2b2afc10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [oak:23192] [ 2] /usr/lib/libmpi.so.0(+0x1e71f2) [0x7fec2b2b01f2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [oak:23192] [ 3] /usr/lib/openmpi/mca_pml_ob1.so(+0x59f2) [0x7fec264fc9f2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [oak:23192] [ 4] /usr/lib/openmpi/mca_pml_ob1.so(+0x5e5a) [0x7fec264fce5a]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [oak:23192] [ 5] /usr/lib/openmpi/mca_pml_ob1.so(+0x2386) [0x7fec264f9386]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [oak:23192] [ 6] /usr/lib/openmpi/mca_pml_ob1.so(+0x24a0) [0x7fec264f94a0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [oak:23192] [ 7] /usr/lib/openmpi/mca_pml_ob1.so(+0x22fb) [0x7fec264f92fb]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [oak:23192] [ 8] /usr/lib/openmpi/mca_pml_ob1.so(+0x3a60) [0x7fec264faa60]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [oak:23192] [ 9] /usr/lib/libmpi.so.0(+0x67f51) [0x7fec2b130f51]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [oak:23192] [10] /usr/lib/libmpi.so.0(MPI_Init+0x173) [0x7fec2b161c33]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [oak:23192] [11] hello_i(main+0x22) [0x400936]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [oak:23192] [12] /lib/libc.so.6(__libc_start_main+0xfe) [0x7fec2a09bd8e]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [oak:23192] [13] hello_i() [0x400859]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [oak:23192] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I used gdb to check the stack:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #0  0x00007ffff7afac10 in opal_obj_run_constructors (object=0x6ca980)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;    at ../opal/class/opal_object.h:427
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #1  0x00007ffff7afb1f2 in opal_list_construct (list=0x6ca958) at class/opal_list.c:88
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #2  0x00007ffff2d479f2 in opal_obj_run_constructors (object=0x6ca958)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;    at ../../../../opal/class/opal_object.h:427
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #3  0x00007ffff2d47e5a in mca_pml_ob1_comm_construct (comm=0x6ca8c0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;    at pml_ob1_comm.c:55
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #4  0x00007ffff2d44386 in opal_obj_run_constructors (object=0x6ca8c0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;    at ../../../../opal/class/opal_object.h:427
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #5  0x00007ffff2d444a0 in opal_obj_new (cls=0x7ffff2f6c040)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;    at ../../../../opal/class/opal_object.h:477
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #6  0x00007ffff2d442fb in opal_obj_new_debug (type=0x7ffff2f6c040,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;    file=0x7ffff2d62840 &quot;pml_ob1.c&quot;, line=182)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;    at ../../../../opal/class/opal_object.h:252
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #7  0x00007ffff2d45a60 in mca_pml_ob1_add_comm (comm=0x601060) at pml_ob1.c:182
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #8  0x00007ffff797bf51 in ompi_mpi_init (argc=1, argv=0x7fffffffdf58, requested=0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;    provided=0x7fffffffde28) at runtime/ompi_mpi_init.c:770
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #9  0x00007ffff79acc33 in PMPI_Init (argc=0x7fffffffde5c, argv=0x7fffffffde50)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;    at pinit.c:84
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #10 0x0000000000400936 in main (argc=1, argv=0x7fffffffdf58) at hello_c.c:17
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; It seems the error happened when an object is constructed. Any idea why this is happening?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Xin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9480.php">Jeff Squyres: "Re: [OMPI devel] Question about hanging mpirun"</a>
<li><strong>Previous message:</strong> <a href="9478.php">Jeff Squyres: "Re: [OMPI devel] Fix a hang in carto_base_select() if carto_module_init() fails"</a>
<li><strong>In reply to:</strong> <a href="9471.php">Xin He: "Re: [OMPI devel] TIPC BTL Segmentation fault"</a>
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
