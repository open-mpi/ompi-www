<?
$subject_val = "[OMPI devel] Uninitialized ORTE epoch values";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  5 15:03:11 2011" -->
<!-- isoreceived="20110805190311" -->
<!-- sent="Fri, 5 Aug 2011 15:03:04 -0400" -->
<!-- isosent="20110805190304" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Uninitialized ORTE epoch values" -->
<!-- id="EBA15C7F-7865-4CF3-BB4D-A30CD16DF87A_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Uninitialized ORTE epoch values<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-05 15:03:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9612.php">Jeff Squyres: "Re: [OMPI devel] Uninitialized ORTE epoch values"</a>
<li><strong>Previous message:</strong> <a href="9610.php">Jeff Squyres: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9612.php">Jeff Squyres: "Re: [OMPI devel] Uninitialized ORTE epoch values"</a>
<li><strong>Reply:</strong> <a href="9612.php">Jeff Squyres: "Re: [OMPI devel] Uninitialized ORTE epoch values"</a>
<li><strong>Reply:</strong> <a href="9613.php">Wesley Bland: "Re: [OMPI devel] Uninitialized ORTE epoch values"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph and I are trying to track down the mysterious ORTE error.  
<br>
<p>In doing so, I have found at least one fairly repeatable error on my cluster: when running through SLURM the ibm/dynamic/spawn test, where we mpirun 3 procs and then we MPI_COMM_SPAWN 3 more.  Running the orteds through valgrind, I see a bunch of uninitialized epoch issues.  
<br>
<p>Attached at the 2 valgrind outputs.
<br>
<p>Can these be fixed?  I don't know if they're actual problems or not, but seeing uninitialized values go by makes me extremely nervous.
<br>
<p>Thanks!
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>

</pre>
<p>
==4436== Memcheck, a memory error detector
<br>
==4436== Copyright (C) 2002-2009, and GNU GPL'd, by Julian Seward et al.
<br>
==4436== Using Valgrind-3.5.0 and LibVEX; rerun with -h for copyright info
<br>
==4436== Command: /home/jsquyres/bogus/bin/orted -mca ess slurm -mca orte_ess_jobid 2778071040 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri &quot;2778071040.0.0;tcp://172.29.218.140:40955;tcp://10.10.10.140:40955;tcp://10.10.20.140:40955;tcp://10.10.30.140:40955&quot; --mca orte_startup_timeout 10000 --mca mpi_leave_pinned 0 --mca btl tcp,self
<br>
==4436== 
<br>
==4436== Conditional jump or move depends on uninitialised value(s)
<br>
==4436==    at 0x4E6634C: orte_util_print_epoch (name_fns.c:301)
<br>
==4436==    by 0x4E65CB3: orte_util_print_name_args (name_fns.c:144)
<br>
==4436==    by 0x4E898D6: orte_ess_base_proc_get_epoch (ess_base_select.c:46)
<br>
==4436==    by 0x4EA3B6D: orte_odls_base_default_construct_child_list (odls_base_default_fns.c:737)
<br>
==4436==    by 0xA36FD92: orte_odls_default_launch_local_procs (odls_default_module.c:1496)
<br>
==4436==    by 0x4E823A3: orte_daemon_process_commands (orted_comm.c:508)
<br>
==4436==    by 0x4E819B1: orte_daemon_cmd_processor (orted_comm.c:324)
<br>
==4436==    by 0x4F3EA39: event_process_active_single_queue (event.c:1303)
<br>
==4436==    by 0x4F3EBAF: event_process_active (event.c:1370)
<br>
==4436==    by 0x4F3EFBE: opal_libevent207_event_base_loop (event.c:1566)
<br>
==4436==    by 0x4E806AE: orte_daemon (orted_main.c:682)
<br>
==4436==    by 0x400929: main (orted.c:62)
<br>
==4436== 
<br>
==4436== Conditional jump or move depends on uninitialised value(s)
<br>
==4436==    at 0x4E66392: orte_util_print_epoch (name_fns.c:303)
<br>
==4436==    by 0x4E65CB3: orte_util_print_name_args (name_fns.c:144)
<br>
==4436==    by 0x4E898D6: orte_ess_base_proc_get_epoch (ess_base_select.c:46)
<br>
==4436==    by 0x4EA3B6D: orte_odls_base_default_construct_child_list (odls_base_default_fns.c:737)
<br>
==4436==    by 0xA36FD92: orte_odls_default_launch_local_procs (odls_default_module.c:1496)
<br>
==4436==    by 0x4E823A3: orte_daemon_process_commands (orted_comm.c:508)
<br>
==4436==    by 0x4E819B1: orte_daemon_cmd_processor (orted_comm.c:324)
<br>
==4436==    by 0x4F3EA39: event_process_active_single_queue (event.c:1303)
<br>
==4436==    by 0x4F3EBAF: event_process_active (event.c:1370)
<br>
==4436==    by 0x4F3EFBE: opal_libevent207_event_base_loop (event.c:1566)
<br>
==4436==    by 0x4E806AE: orte_daemon (orted_main.c:682)
<br>
==4436==    by 0x400929: main (orted.c:62)
<br>
==4436== 
<br>
==4436== Use of uninitialised value of size 8
<br>
==4436==    at 0x64649BD: _itoa_word (in /lib64/libc-2.5.so)
<br>
==4436==    by 0x6467E5A: vfprintf (in /lib64/libc-2.5.so)
<br>
==4436==    by 0x648C889: vsnprintf (in /lib64/libc-2.5.so)
<br>
==4436==    by 0x6470492: snprintf (in /lib64/libc-2.5.so)
<br>
==4436==    by 0x4E6640E: orte_util_print_epoch (name_fns.c:306)
<br>
==4436==    by 0x4E65CB3: orte_util_print_name_args (name_fns.c:144)
<br>
==4436==    by 0x4E898D6: orte_ess_base_proc_get_epoch (ess_base_select.c:46)
<br>
==4436==    by 0x4EA3B6D: orte_odls_base_default_construct_child_list (odls_base_default_fns.c:737)
<br>
==4436==    by 0xA36FD92: orte_odls_default_launch_local_procs (odls_default_module.c:1496)
<br>
==4436==    by 0x4E823A3: orte_daemon_process_commands (orted_comm.c:508)
<br>
==4436==    by 0x4E819B1: orte_daemon_cmd_processor (orted_comm.c:324)
<br>
==4436==    by 0x4F3EA39: event_process_active_single_queue (event.c:1303)
<br>
==4436== 
<br>
==4436== Conditional jump or move depends on uninitialised value(s)
<br>
==4436==    at 0x64649C7: _itoa_word (in /lib64/libc-2.5.so)
<br>
==4436==    by 0x6467E5A: vfprintf (in /lib64/libc-2.5.so)
<br>
==4436==    by 0x648C889: vsnprintf (in /lib64/libc-2.5.so)
<br>
==4436==    by 0x6470492: snprintf (in /lib64/libc-2.5.so)
<br>
==4436==    by 0x4E6640E: orte_util_print_epoch (name_fns.c:306)
<br>
==4436==    by 0x4E65CB3: orte_util_print_name_args (name_fns.c:144)
<br>
==4436==    by 0x4E898D6: orte_ess_base_proc_get_epoch (ess_base_select.c:46)
<br>
==4436==    by 0x4EA3B6D: orte_odls_base_default_construct_child_list (odls_base_default_fns.c:737)
<br>
==4436==    by 0xA36FD92: orte_odls_default_launch_local_procs (odls_default_module.c:1496)
<br>
==4436==    by 0x4E823A3: orte_daemon_process_commands (orted_comm.c:508)
<br>
==4436==    by 0x4E819B1: orte_daemon_cmd_processor (orted_comm.c:324)
<br>
==4436==    by 0x4F3EA39: event_process_active_single_queue (event.c:1303)
<br>
==4436== 
<br>
==4436== Conditional jump or move depends on uninitialised value(s)
<br>
==4436==    at 0x6467ED4: vfprintf (in /lib64/libc-2.5.so)
<br>
==4436==    by 0x648C889: vsnprintf (in /lib64/libc-2.5.so)
<br>
==4436==    by 0x6470492: snprintf (in /lib64/libc-2.5.so)
<br>
==4436==    by 0x4E6640E: orte_util_print_epoch (name_fns.c:306)
<br>
==4436==    by 0x4E65CB3: orte_util_print_name_args (name_fns.c:144)
<br>
==4436==    by 0x4E898D6: orte_ess_base_proc_get_epoch (ess_base_select.c:46)
<br>
==4436==    by 0x4EA3B6D: orte_odls_base_default_construct_child_list (odls_base_default_fns.c:737)
<br>
==4436==    by 0xA36FD92: orte_odls_default_launch_local_procs (odls_default_module.c:1496)
<br>
==4436==    by 0x4E823A3: orte_daemon_process_commands (orted_comm.c:508)
<br>
==4436==    by 0x4E819B1: orte_daemon_cmd_processor (orted_comm.c:324)
<br>
==4436==    by 0x4F3EA39: event_process_active_single_queue (event.c:1303)
<br>
==4436==    by 0x4F3EBAF: event_process_active (event.c:1370)
<br>
==4436== 
<br>
==4436== Conditional jump or move depends on uninitialised value(s)
<br>
==4436==    at 0x4E6634C: orte_util_print_epoch (name_fns.c:301)
<br>
==4436==    by 0x4E65CB3: orte_util_print_name_args (name_fns.c:144)
<br>
==4436==    by 0x4E898D6: orte_ess_base_proc_get_epoch (ess_base_select.c:46)
<br>
==4436==    by 0x4E96DBF: orte_grpcomm_base_daemon_collective (grpcomm_base_coll.c:715)
<br>
==4436==    by 0x4E979D4: process_msg (grpcomm_base_coll.c:883)
<br>
==4436==    by 0x4F3EA39: event_process_active_single_queue (event.c:1303)
<br>
==4436==    by 0x4F3EBAF: event_process_active (event.c:1370)
<br>
==4436==    by 0x4F3EFBE: opal_libevent207_event_base_loop (event.c:1566)
<br>
==4436==    by 0x4E806AE: orte_daemon (orted_main.c:682)
<br>
==4436==    by 0x400929: main (orted.c:62)
<br>
==4436== 
<br>
==4436== Conditional jump or move depends on uninitialised value(s)
<br>
==4436==    at 0x4E66392: orte_util_print_epoch (name_fns.c:303)
<br>
==4436==    by 0x4E65CB3: orte_util_print_name_args (name_fns.c:144)
<br>
==4436==    by 0x4E898D6: orte_ess_base_proc_get_epoch (ess_base_select.c:46)
<br>
==4436==    by 0x4E96DBF: orte_grpcomm_base_daemon_collective (grpcomm_base_coll.c:715)
<br>
==4436==    by 0x4E979D4: process_msg (grpcomm_base_coll.c:883)
<br>
==4436==    by 0x4F3EA39: event_process_active_single_queue (event.c:1303)
<br>
==4436==    by 0x4F3EBAF: event_process_active (event.c:1370)
<br>
==4436==    by 0x4F3EFBE: opal_libevent207_event_base_loop (event.c:1566)
<br>
==4436==    by 0x4E806AE: orte_daemon (orted_main.c:682)
<br>
==4436==    by 0x400929: main (orted.c:62)
<br>
==4436== 
<br>
==4436== Invalid free() / delete / delete[]
<br>
==4436==    at 0x4C20A31: free (vg_replace_malloc.c:325)
<br>
==4436==    by 0x4F1B433: opal_free (malloc.c:190)
<br>
==4436==    by 0x4E67987: orte_proc_info_finalize (proc_info.c:200)
<br>
==4436==    by 0x4E4EE18: orte_finalize (orte_finalize.c:67)
<br>
==4436==    by 0x4E53972: orte_quit (orte_quit.c:155)
<br>
==4436==    by 0x4E83147: orte_daemon_process_commands (orted_comm.c:756)
<br>
==4436==    by 0x4E819B1: orte_daemon_cmd_processor (orted_comm.c:324)
<br>
==4436==    by 0x4F3EA39: event_process_active_single_queue (event.c:1303)
<br>
==4436==    by 0x4F3EBAF: event_process_active (event.c:1370)
<br>
==4436==    by 0x4F3EFBE: opal_libevent207_event_base_loop (event.c:1566)
<br>
==4436==    by 0x4E806AE: orte_daemon (orted_main.c:682)
<br>
==4436==    by 0x400929: main (orted.c:62)
<br>
==4436==  Address 0x7ff000f5f is on thread 1's stack
<br>
==4436== 
<br>
==4436== 
<br>
==4436== HEAP SUMMARY:
<br>
==4436==     in use at exit: 192,837 bytes in 442 blocks
<br>
==4436==   total heap usage: 8,178 allocs, 7,737 frees, 12,493,593 bytes allocated
<br>
==4436== 
<br>
==4436== LEAK SUMMARY:
<br>
==4436==    definitely lost: 50,169 bytes in 72 blocks
<br>
==4436==    indirectly lost: 52,519 bytes in 81 blocks
<br>
==4436==      possibly lost: 8,408 bytes in 3 blocks
<br>
==4436==    still reachable: 81,741 bytes in 286 blocks
<br>
==4436==         suppressed: 0 bytes in 0 blocks
<br>
==4436== Rerun with --leak-check=full to see details of leaked memory
<br>
==4436== 
<br>
==4436== For counts of detected and suppressed errors, rerun with: -v
<br>
==4436== Use --track-origins=yes to see where uninitialised values come from
<br>
==4436== ERROR SUMMARY: 151 errors from 8 contexts (suppressed: 7 from 7)
<br>
<p>
<br><p>
==4267== Memcheck, a memory error detector
<br>
==4267== Copyright (C) 2002-2009, and GNU GPL'd, by Julian Seward et al.
<br>
==4267== Using Valgrind-3.5.0 and LibVEX; rerun with -h for copyright info
<br>
==4267== Command: /home/jsquyres/bogus/bin/orted -mca ess slurm -mca orte_ess_jobid 2778071040 -mca orte_ess_vpid 2 -mca orte_ess_num_procs 3 --hnp-uri &quot;2778071040.0.0;tcp://172.29.218.140:40955;tcp://10.10.10.140:40955;tcp://10.10.20.140:40955;tcp://10.10.30.140:40955&quot; --mca orte_startup_timeout 10000 --mca mpi_leave_pinned 0 --mca btl tcp,self
<br>
==4267== 
<br>
==4267== Conditional jump or move depends on uninitialised value(s)
<br>
==4267==    at 0x4E6634C: orte_util_print_epoch (name_fns.c:301)
<br>
==4267==    by 0x4E65CB3: orte_util_print_name_args (name_fns.c:144)
<br>
==4267==    by 0x4E898D6: orte_ess_base_proc_get_epoch (ess_base_select.c:46)
<br>
==4267==    by 0x4EA3B6D: orte_odls_base_default_construct_child_list (odls_base_default_fns.c:737)
<br>
==4267==    by 0xA36FD92: orte_odls_default_launch_local_procs (odls_default_module.c:1496)
<br>
==4267==    by 0x4E823A3: orte_daemon_process_commands (orted_comm.c:508)
<br>
==4267==    by 0x4E819B1: orte_daemon_cmd_processor (orted_comm.c:324)
<br>
==4267==    by 0x4F3EA39: event_process_active_single_queue (event.c:1303)
<br>
==4267==    by 0x4F3EBAF: event_process_active (event.c:1370)
<br>
==4267==    by 0x4F3EFBE: opal_libevent207_event_base_loop (event.c:1566)
<br>
==4267==    by 0x4E806AE: orte_daemon (orted_main.c:682)
<br>
==4267==    by 0x400929: main (orted.c:62)
<br>
==4267== 
<br>
==4267== Conditional jump or move depends on uninitialised value(s)
<br>
==4267==    at 0x4E66392: orte_util_print_epoch (name_fns.c:303)
<br>
==4267==    by 0x4E65CB3: orte_util_print_name_args (name_fns.c:144)
<br>
==4267==    by 0x4E898D6: orte_ess_base_proc_get_epoch (ess_base_select.c:46)
<br>
==4267==    by 0x4EA3B6D: orte_odls_base_default_construct_child_list (odls_base_default_fns.c:737)
<br>
==4267==    by 0xA36FD92: orte_odls_default_launch_local_procs (odls_default_module.c:1496)
<br>
==4267==    by 0x4E823A3: orte_daemon_process_commands (orted_comm.c:508)
<br>
==4267==    by 0x4E819B1: orte_daemon_cmd_processor (orted_comm.c:324)
<br>
==4267==    by 0x4F3EA39: event_process_active_single_queue (event.c:1303)
<br>
==4267==    by 0x4F3EBAF: event_process_active (event.c:1370)
<br>
==4267==    by 0x4F3EFBE: opal_libevent207_event_base_loop (event.c:1566)
<br>
==4267==    by 0x4E806AE: orte_daemon (orted_main.c:682)
<br>
==4267==    by 0x400929: main (orted.c:62)
<br>
==4267== 
<br>
==4267== Use of uninitialised value of size 8
<br>
==4267==    at 0x64649BD: _itoa_word (in /lib64/libc-2.5.so)
<br>
==4267==    by 0x6467E5A: vfprintf (in /lib64/libc-2.5.so)
<br>
==4267==    by 0x648C889: vsnprintf (in /lib64/libc-2.5.so)
<br>
==4267==    by 0x6470492: snprintf (in /lib64/libc-2.5.so)
<br>
==4267==    by 0x4E6640E: orte_util_print_epoch (name_fns.c:306)
<br>
==4267==    by 0x4E65CB3: orte_util_print_name_args (name_fns.c:144)
<br>
==4267==    by 0x4E898D6: orte_ess_base_proc_get_epoch (ess_base_select.c:46)
<br>
==4267==    by 0x4EA3B6D: orte_odls_base_default_construct_child_list (odls_base_default_fns.c:737)
<br>
==4267==    by 0xA36FD92: orte_odls_default_launch_local_procs (odls_default_module.c:1496)
<br>
==4267==    by 0x4E823A3: orte_daemon_process_commands (orted_comm.c:508)
<br>
==4267==    by 0x4E819B1: orte_daemon_cmd_processor (orted_comm.c:324)
<br>
==4267==    by 0x4F3EA39: event_process_active_single_queue (event.c:1303)
<br>
==4267== 
<br>
==4267== Conditional jump or move depends on uninitialised value(s)
<br>
==4267==    at 0x64649C7: _itoa_word (in /lib64/libc-2.5.so)
<br>
==4267==    by 0x6467E5A: vfprintf (in /lib64/libc-2.5.so)
<br>
==4267==    by 0x648C889: vsnprintf (in /lib64/libc-2.5.so)
<br>
==4267==    by 0x6470492: snprintf (in /lib64/libc-2.5.so)
<br>
==4267==    by 0x4E6640E: orte_util_print_epoch (name_fns.c:306)
<br>
==4267==    by 0x4E65CB3: orte_util_print_name_args (name_fns.c:144)
<br>
==4267==    by 0x4E898D6: orte_ess_base_proc_get_epoch (ess_base_select.c:46)
<br>
==4267==    by 0x4EA3B6D: orte_odls_base_default_construct_child_list (odls_base_default_fns.c:737)
<br>
==4267==    by 0xA36FD92: orte_odls_default_launch_local_procs (odls_default_module.c:1496)
<br>
==4267==    by 0x4E823A3: orte_daemon_process_commands (orted_comm.c:508)
<br>
==4267==    by 0x4E819B1: orte_daemon_cmd_processor (orted_comm.c:324)
<br>
==4267==    by 0x4F3EA39: event_process_active_single_queue (event.c:1303)
<br>
==4267== 
<br>
==4267== Conditional jump or move depends on uninitialised value(s)
<br>
==4267==    at 0x6467ED4: vfprintf (in /lib64/libc-2.5.so)
<br>
==4267==    by 0x648C889: vsnprintf (in /lib64/libc-2.5.so)
<br>
==4267==    by 0x6470492: snprintf (in /lib64/libc-2.5.so)
<br>
==4267==    by 0x4E6640E: orte_util_print_epoch (name_fns.c:306)
<br>
==4267==  Address 0x7ff000f5f is on thread 1's stack
<br>
==4267== 
<br>
==4267== 
<br>
==4267== HEAP SUMMARY:
<br>
==4267==     in use at exit: 174,607 bytes in 393 blocks
<br>
==4267==   total heap usage: 6,696 allocs, 6,304 frees, 11,958,108 bytes allocated
<br>
==4267== 
<br>
==4267== LEAK SUMMARY:
<br>
==4267==    definitely lost: 41,547 bytes in 42 blocks
<br>
==4267==    indirectly lost: 43,935 bytes in 62 blocks
<br>
==4267==      possibly lost: 7,384 bytes in 3 blocks
<br>
==4267==    still reachable: 81,741 bytes in 286 blocks
<br>
==4267==         suppressed: 0 bytes in 0 blocks
<br>
==4267== Rerun with --leak-check=full to see details of leaked memory
<br>
==4267== 
<br>
==4267== For counts of detected and suppressed errors, rerun with: -v
<br>
==4267== Use --track-origins=yes to see where uninitialised values come from
<br>
==4267== ERROR SUMMARY: 69 errors from 8 contexts (suppressed: 7 from 7)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9612.php">Jeff Squyres: "Re: [OMPI devel] Uninitialized ORTE epoch values"</a>
<li><strong>Previous message:</strong> <a href="9610.php">Jeff Squyres: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9612.php">Jeff Squyres: "Re: [OMPI devel] Uninitialized ORTE epoch values"</a>
<li><strong>Reply:</strong> <a href="9612.php">Jeff Squyres: "Re: [OMPI devel] Uninitialized ORTE epoch values"</a>
<li><strong>Reply:</strong> <a href="9613.php">Wesley Bland: "Re: [OMPI devel] Uninitialized ORTE epoch values"</a>
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
