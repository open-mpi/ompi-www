<?
$subject_val = "Re: [OMPI users] which info is needed for SIGSEGV in Java for openmpi-dev-124-g91e9686 on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 21 23:53:53 2014" -->
<!-- isoreceived="20141022035353" -->
<!-- sent="Wed, 22 Oct 2014 03:53:48 +0000" -->
<!-- isosent="20141022035348" -->
<!-- name="Kawashima, Takahiro" -->
<!-- email="t-kawashima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] which info is needed for SIGSEGV in Java for openmpi-dev-124-g91e9686 on Solaris" -->
<!-- id="20141022125348.8f6aa8dda3ac24386bca2a56_at_jp.fujitsu.com" -->
<!-- charset="iso-2022-jp" -->
<!-- inreplyto="201410211511.s9LFBl9i013166_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] which info is needed for SIGSEGV in Java for openmpi-dev-124-g91e9686 on Solaris<br>
<strong>From:</strong> Kawashima, Takahiro (<em>t-kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-21 23:53:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25551.php">Bill Broadley: "Re: [OMPI users] New ib locked pages behavior?"</a>
<li><strong>Previous message:</strong> <a href="25549.php">Brock Palen: "Re: [OMPI users] low CPU utilization with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="25543.php">Siegmar Gross: "[OMPI users] which info is needed for SIGSEGV in Java for openmpi-dev-124-g91e9686 on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25553.php">Siegmar Gross: "Re: [OMPI users] which info is needed for SIGSEGV in Java for openmpi-dev-124-g91e9686 on Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Siegmar,
<br>
<p>mpiexec and java run as distinct processes. Your JRE message
<br>
says java process raises SEGV. So you should trace the java
<br>
process, not the mpiexec process. And more, your JRE message
<br>
says the crash happened outside the Java Virtual Machine in
<br>
native code. So usual Java program debugger is useless.
<br>
You should trace native code part of the java process.
<br>
Unfortunately I don't know how to debug such one.
<br>
<p>The log file output by JRE may help you.
<br>
<span class="quotelev1">&gt; # An error report file with more information is saved as:
</span><br>
<span class="quotelev1">&gt; # /home/fd1026/work/skripte/master/parallel/prog/mpi/java/hs_err_pid13080.log
</span><br>
<p>Regards,
<br>
Takahiro
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I installed openmpi-dev-124-g91e9686 on Solaris 10 Sparc with
</span><br>
<span class="quotelev1">&gt; gcc-4.9.1 to track down the error with my small Java program.
</span><br>
<span class="quotelev1">&gt; I started single stepping in orterun.c at line 1081 and
</span><br>
<span class="quotelev1">&gt; continued until I got the segmentation fault. I get
</span><br>
<span class="quotelev1">&gt; &quot;jdata = 0x0&quot; in version openmpi-1.8.2a1r31804, which is the
</span><br>
<span class="quotelev1">&gt; last one which works with Java in my environment, while I get
</span><br>
<span class="quotelev1">&gt; &quot;jdata = 0x100125250&quot; in this version. Unfortunately I don't
</span><br>
<span class="quotelev1">&gt; know which files or variables are important to look at. Perhaps
</span><br>
<span class="quotelev1">&gt; somebody can look at the following lines of code and tell me,
</span><br>
<span class="quotelev1">&gt; which information I should provide to solve the problem. I know
</span><br>
<span class="quotelev1">&gt; that Solaris isn't any longer on your list of supported systems,
</span><br>
<span class="quotelev1">&gt; but perhaps we can get it working again, if you tell me what
</span><br>
<span class="quotelev1">&gt; you need and I do the debugging.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/gdb-7.6.1_64_gcc/bin/gdb mpiexec
</span><br>
<span class="quotelev1">&gt; GNU gdb (GDB) 7.6.1
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; (gdb) run -np 1 java InitFinalizeMain 
</span><br>
<span class="quotelev1">&gt; Starting program: /usr/local/openmpi-1.9.0_64_gcc/bin/mpiexec \
</span><br>
<span class="quotelev1">&gt;   -np 1 java InitFinalizeMain
</span><br>
<span class="quotelev1">&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev1">&gt; [New Thread 1 (LWP 1)]
</span><br>
<span class="quotelev1">&gt; [New LWP    2        ]
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=13064, tid=2
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; [LWP    2         exited]
</span><br>
<span class="quotelev1">&gt; [New Thread 2        ]
</span><br>
<span class="quotelev1">&gt; [Switching to Thread 1 (LWP 1)]
</span><br>
<span class="quotelev1">&gt; sol_thread_fetch_registers: td_ta_map_id2thr: no thread can be
</span><br>
<span class="quotelev1">&gt;   found to satisfy query
</span><br>
<span class="quotelev1">&gt; (gdb) thread 1
</span><br>
<span class="quotelev1">&gt; [Switching to thread 1 (LWP    1        )]
</span><br>
<span class="quotelev1">&gt; #0  0xffffffff7f6173d0 in rtld_db_dlactivity () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt; (gdb) b orterun.c:1081
</span><br>
<span class="quotelev1">&gt; Breakpoint 1 at 0x1000070dc: file 
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-dev-124-g91e9686/orte/tools/orterun/orterun.c, line 1081.
</span><br>
<span class="quotelev1">&gt; (gdb) r
</span><br>
<span class="quotelev1">&gt; The program being debugged has been started already.
</span><br>
<span class="quotelev1">&gt; Start it from the beginning? (y or n) y
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Starting program: /usr/local/openmpi-1.9.0_64_gcc/bin/mpiexec -np 1 java 
</span><br>
<span class="quotelev1">&gt; InitFinalizeMain
</span><br>
<span class="quotelev1">&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev1">&gt; [New Thread 1 (LWP 1)]
</span><br>
<span class="quotelev1">&gt; [New LWP    2        ]
</span><br>
<span class="quotelev1">&gt; [Switching to Thread 1 (LWP 1)]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Breakpoint 1, orterun (argc=5, argv=0xffffffff7fffe0d8)
</span><br>
<span class="quotelev1">&gt;     at ../../../../openmpi-dev-124-g91e9686/orte/tools/orterun/orterun.c:1081
</span><br>
<span class="quotelev1">&gt; 1081        rc = orte_plm.spawn(jdata);
</span><br>
<span class="quotelev1">&gt; (gdb) print jdata
</span><br>
<span class="quotelev1">&gt; $1 = (orte_job_t *) 0x100125250
</span><br>
<span class="quotelev1">&gt; (gdb) s
</span><br>
<span class="quotelev1">&gt; rsh_launch (jdata=0x100125250)
</span><br>
<span class="quotelev1">&gt;     at 
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-dev-124-g91e9686/orte/mca/plm/rsh/plm_rsh_module.c:876
</span><br>
<span class="quotelev1">&gt; 876         if (ORTE_FLAG_TEST(jdata, ORTE_JOB_FLAG_RESTART)) {
</span><br>
<span class="quotelev1">&gt; (gdb) s    
</span><br>
<span class="quotelev1">&gt; 881             ORTE_ACTIVATE_JOB_STATE(jdata, ORTE_JOB_STATE_INIT);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; orte_util_print_name_args (name=0x100118380 &lt;orte_process_info+104&gt;)
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:122
</span><br>
<span class="quotelev1">&gt; 122         if (NULL == name) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 142         job = orte_util_print_jobids(name-&gt;jobid);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; orte_util_print_jobids (job=2502885376) at 
</span><br>
<span class="quotelev1">&gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:170
</span><br>
<span class="quotelev1">&gt; 170         ptr = get_print_name_buffer();
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev1">&gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:92
</span><br>
<span class="quotelev1">&gt; 92          if (!fns_init) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 101         ret = opal_tsd_getspecific(print_args_tsd_key, (void**)&amp;ptr);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; opal_tsd_getspecific (key=1, valuep=0xffffffff7fffd990)
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-124-g91e9686/opal/threads/tsd.h:163
</span><br>
<span class="quotelev1">&gt; 163         *valuep = pthread_getspecific(key);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 164         return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 165     }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev1">&gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:102
</span><br>
<span class="quotelev1">&gt; 102         if (OPAL_SUCCESS != ret) return NULL;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 104         if (NULL == ptr) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 113         return (orte_print_args_buffers_t*) ptr;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 114     }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; orte_util_print_jobids (job=2502885376) at 
</span><br>
<span class="quotelev1">&gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:172
</span><br>
<span class="quotelev1">&gt; 172         if (NULL == ptr) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 178         if (ORTE_PRINT_NAME_ARG_NUM_BUFS == ptr-&gt;cntr) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 182         if (ORTE_JOBID_INVALID == job) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 184         } else if (ORTE_JOBID_WILDCARD == job) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 187             tmp1 = ORTE_JOB_FAMILY((unsigned long)job);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 188             tmp2 = ORTE_LOCAL_JOBID((unsigned long)job);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 189             snprintf(ptr-&gt;buffers[ptr-&gt;cntr++], 
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 193         return ptr-&gt;buffers[ptr-&gt;cntr-1];
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 194     }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; orte_util_print_name_args (name=0x100118380 &lt;orte_process_info+104&gt;)
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:143
</span><br>
<span class="quotelev1">&gt; 143         vpid = orte_util_print_vpids(name-&gt;vpid);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; orte_util_print_vpids (vpid=0) at 
</span><br>
<span class="quotelev1">&gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:260
</span><br>
<span class="quotelev1">&gt; 260         ptr = get_print_name_buffer();
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev1">&gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:92
</span><br>
<span class="quotelev1">&gt; 92          if (!fns_init) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 101         ret = opal_tsd_getspecific(print_args_tsd_key, (void**)&amp;ptr);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; opal_tsd_getspecific (key=1, valuep=0xffffffff7fffd9a0)
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-124-g91e9686/opal/threads/tsd.h:163
</span><br>
<span class="quotelev1">&gt; 163         *valuep = pthread_getspecific(key);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 164         return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 165     }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev1">&gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:102
</span><br>
<span class="quotelev1">&gt; 102         if (OPAL_SUCCESS != ret) return NULL;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 104         if (NULL == ptr) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 113         return (orte_print_args_buffers_t*) ptr;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 114     }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; orte_util_print_vpids (vpid=0) at 
</span><br>
<span class="quotelev1">&gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:262
</span><br>
<span class="quotelev1">&gt; 262         if (NULL == ptr) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 268         if (ORTE_PRINT_NAME_ARG_NUM_BUFS == ptr-&gt;cntr) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 272         if (ORTE_VPID_INVALID == vpid) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 274         } else if (ORTE_VPID_WILDCARD == vpid) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 277             snprintf(ptr-&gt;buffers[ptr-&gt;cntr++], 
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 281         return ptr-&gt;buffers[ptr-&gt;cntr-1];
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 282     }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; orte_util_print_name_args (name=0x100118380 &lt;orte_process_info+104&gt;)
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:146
</span><br>
<span class="quotelev1">&gt; 146         ptr = get_print_name_buffer();
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev1">&gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:92
</span><br>
<span class="quotelev1">&gt; 92          if (!fns_init) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 101         ret = opal_tsd_getspecific(print_args_tsd_key, (void**)&amp;ptr);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; opal_tsd_getspecific (key=1, valuep=0xffffffff7fffda60)
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-124-g91e9686/opal/threads/tsd.h:163
</span><br>
<span class="quotelev1">&gt; 163         *valuep = pthread_getspecific(key);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 164         return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 165     }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev1">&gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:102
</span><br>
<span class="quotelev1">&gt; 102         if (OPAL_SUCCESS != ret) return NULL;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 104         if (NULL == ptr) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 113         return (orte_print_args_buffers_t*) ptr;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 114     }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; orte_util_print_name_args (name=0x100118380 &lt;orte_process_info+104&gt;)
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:148
</span><br>
<span class="quotelev1">&gt; 148         if (NULL == ptr) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 154         if (ORTE_PRINT_NAME_ARG_NUM_BUFS == ptr-&gt;cntr) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 158         snprintf(ptr-&gt;buffers[ptr-&gt;cntr++], 
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 162         return ptr-&gt;buffers[ptr-&gt;cntr-1];
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 163     }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; orte_util_print_jobids (job=4294967295) at 
</span><br>
<span class="quotelev1">&gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:170
</span><br>
<span class="quotelev1">&gt; 170         ptr = get_print_name_buffer();
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev1">&gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:92
</span><br>
<span class="quotelev1">&gt; 92          if (!fns_init) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 101         ret = opal_tsd_getspecific(print_args_tsd_key, (void**)&amp;ptr);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; opal_tsd_getspecific (key=1, valuep=0xffffffff7fffda60)
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-124-g91e9686/opal/threads/tsd.h:163
</span><br>
<span class="quotelev1">&gt; 163         *valuep = pthread_getspecific(key);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 164         return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 165     }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev1">&gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:102
</span><br>
<span class="quotelev1">&gt; 102         if (OPAL_SUCCESS != ret) return NULL;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 104         if (NULL == ptr) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 113         return (orte_print_args_buffers_t*) ptr;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 114     }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; orte_util_print_jobids (job=4294967295) at 
</span><br>
<span class="quotelev1">&gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:172
</span><br>
<span class="quotelev1">&gt; 172         if (NULL == ptr) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 178         if (ORTE_PRINT_NAME_ARG_NUM_BUFS == ptr-&gt;cntr) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 182         if (ORTE_JOBID_INVALID == job) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 183             snprintf(ptr-&gt;buffers[ptr-&gt;cntr++], 
</span><br>
<span class="quotelev1">&gt; ORTE_PRINT_NAME_ARGS_MAX_SIZE, &quot;[INVALID]&quot;);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 193         return ptr-&gt;buffers[ptr-&gt;cntr-1];
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 194     }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; orte_job_state_to_str (state=1) at 
</span><br>
<span class="quotelev1">&gt; ../../openmpi-dev-124-g91e9686/orte/util/error_strings.c:217
</span><br>
<span class="quotelev1">&gt; 217         switch(state) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 221             return &quot;PENDING INIT&quot;;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 317     }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; opal_output_verbose (level=1, output_id=0, 
</span><br>
<span class="quotelev1">&gt;     format=0xffffffff7f14dd98 &lt;orte_job_states&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;\336\257\276\355\336\257\276\355&quot;)
</span><br>
<span class="quotelev1">&gt;     at ../../../openmpi-dev-124-g91e9686/opal/util/output.c:373
</span><br>
<span class="quotelev1">&gt; 373             va_start(arglist, format);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 369     {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 370         if (output_id &gt;= 0 &amp;&amp; output_id &lt; OPAL_OUTPUT_MAX_STREAMS &amp;&amp;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 377     }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; orte_state_base_activate_job_state (jdata=0x100125250, state=1)
</span><br>
<span class="quotelev1">&gt;     at 
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-dev-124-g91e9686/orte/mca/state/base/state_base_fns.c:33
</span><br>
<span class="quotelev1">&gt; 33          opal_list_item_t *itm, *any=NULL, *error=NULL;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 37          for (itm = opal_list_get_first(&amp;orte_job_states);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; opal_list_get_first (list=0xffffffff7f14dd98 &lt;orte_job_states&gt;)
</span><br>
<span class="quotelev1">&gt;     at ../../../../openmpi-dev-124-g91e9686/opal/class/opal_list.h:320
</span><br>
<span class="quotelev1">&gt; 320         opal_list_item_t* item = 
</span><br>
<span class="quotelev1">&gt; (opal_list_item_t*)list-&gt;opal_list_sentinel.opal_list_next;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 324         assert(1 == item-&gt;opal_list_item_refcount);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 325         assert( list == item-&gt;opal_list_item_belong_to );
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 328         return item;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 329     }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; orte_state_base_activate_job_state (jdata=0x100125250, state=1)
</span><br>
<span class="quotelev1">&gt;     at 
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-dev-124-g91e9686/orte/mca/state/base/state_base_fns.c:38
</span><br>
<span class="quotelev1">&gt; 38               itm != opal_list_get_end(&amp;orte_job_states);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; opal_list_get_end (list=0xffffffff7f14dd98 &lt;orte_job_states&gt;)
</span><br>
<span class="quotelev1">&gt;     at ../../../../openmpi-dev-124-g91e9686/opal/class/opal_list.h:399
</span><br>
<span class="quotelev1">&gt; 399         return &amp;(list-&gt;opal_list_sentinel);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 400     }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; orte_state_base_activate_job_state (jdata=0x100125250, state=1)
</span><br>
<span class="quotelev1">&gt;     at 
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-dev-124-g91e9686/orte/mca/state/base/state_base_fns.c:37
</span><br>
<span class="quotelev1">&gt; 37          for (itm = opal_list_get_first(&amp;orte_job_states);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 40              s = (orte_state_t*)itm;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 41              if (s-&gt;job_state == ORTE_JOB_STATE_ANY) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 45              if (s-&gt;job_state == ORTE_JOB_STATE_ERROR) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 48              if (s-&gt;job_state == state) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 49                  OPAL_OUTPUT_VERBOSE((1, 
</span><br>
<span class="quotelev1">&gt; orte_state_base_framework.framework_output,
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; orte_util_print_name_args (name=0x100118380 &lt;orte_process_info+104&gt;)
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:122
</span><br>
<span class="quotelev1">&gt; 122         if (NULL == name) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 142         job = orte_util_print_jobids(name-&gt;jobid);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; orte_util_print_jobids (job=2502885376) at 
</span><br>
<span class="quotelev1">&gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:170
</span><br>
<span class="quotelev1">&gt; 170         ptr = get_print_name_buffer();
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev1">&gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:92
</span><br>
<span class="quotelev1">&gt; 92          if (!fns_init) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 101         ret = opal_tsd_getspecific(print_args_tsd_key, (void**)&amp;ptr);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; opal_tsd_getspecific (key=1, valuep=0xffffffff7fffd880)
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-124-g91e9686/opal/threads/tsd.h:163
</span><br>
<span class="quotelev1">&gt; 163         *valuep = pthread_getspecific(key);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 164         return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 165     }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev1">&gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:102
</span><br>
<span class="quotelev1">&gt; 102         if (OPAL_SUCCESS != ret) return NULL;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 104         if (NULL == ptr) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 113         return (orte_print_args_buffers_t*) ptr;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 114     }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; orte_util_print_jobids (job=2502885376) at 
</span><br>
<span class="quotelev1">&gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:172
</span><br>
<span class="quotelev1">&gt; 172         if (NULL == ptr) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 178         if (ORTE_PRINT_NAME_ARG_NUM_BUFS == ptr-&gt;cntr) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 182         if (ORTE_JOBID_INVALID == job) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 184         } else if (ORTE_JOBID_WILDCARD == job) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 187             tmp1 = ORTE_JOB_FAMILY((unsigned long)job);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 188             tmp2 = ORTE_LOCAL_JOBID((unsigned long)job);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 189             snprintf(ptr-&gt;buffers[ptr-&gt;cntr++], 
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 193         return ptr-&gt;buffers[ptr-&gt;cntr-1];
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 194     }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; orte_util_print_name_args (name=0x100118380 &lt;orte_process_info+104&gt;)
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:143
</span><br>
<span class="quotelev1">&gt; 143         vpid = orte_util_print_vpids(name-&gt;vpid);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; orte_util_print_vpids (vpid=0) at 
</span><br>
<span class="quotelev1">&gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:260
</span><br>
<span class="quotelev1">&gt; 260         ptr = get_print_name_buffer();
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev1">&gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:92
</span><br>
<span class="quotelev1">&gt; 92          if (!fns_init) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 101         ret = opal_tsd_getspecific(print_args_tsd_key, (void**)&amp;ptr);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; opal_tsd_getspecific (key=1, valuep=0xffffffff7fffd890)
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-124-g91e9686/opal/threads/tsd.h:163
</span><br>
<span class="quotelev1">&gt; 163         *valuep = pthread_getspecific(key);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 164         return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 165     }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev1">&gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:102
</span><br>
<span class="quotelev1">&gt; 102         if (OPAL_SUCCESS != ret) return NULL;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 104         if (NULL == ptr) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 113         return (orte_print_args_buffers_t*) ptr;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 114     }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; orte_util_print_vpids (vpid=0) at 
</span><br>
<span class="quotelev1">&gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:262
</span><br>
<span class="quotelev1">&gt; 262         if (NULL == ptr) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 268         if (ORTE_PRINT_NAME_ARG_NUM_BUFS == ptr-&gt;cntr) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 272         if (ORTE_VPID_INVALID == vpid) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 274         } else if (ORTE_VPID_WILDCARD == vpid) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 277             snprintf(ptr-&gt;buffers[ptr-&gt;cntr++], 
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 281         return ptr-&gt;buffers[ptr-&gt;cntr-1];
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 282     }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; orte_util_print_name_args (name=0x100118380 &lt;orte_process_info+104&gt;)
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:146
</span><br>
<span class="quotelev1">&gt; 146         ptr = get_print_name_buffer();
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev1">&gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:92
</span><br>
<span class="quotelev1">&gt; 92          if (!fns_init) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 101         ret = opal_tsd_getspecific(print_args_tsd_key, (void**)&amp;ptr);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; opal_tsd_getspecific (key=1, valuep=0xffffffff7fffd950)
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-124-g91e9686/opal/threads/tsd.h:163
</span><br>
<span class="quotelev1">&gt; 163         *valuep = pthread_getspecific(key);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 164         return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 165     }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev1">&gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:102
</span><br>
<span class="quotelev1">&gt; 102         if (OPAL_SUCCESS != ret) return NULL;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 104         if (NULL == ptr) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 113         return (orte_print_args_buffers_t*) ptr;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 114     }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; orte_util_print_name_args (name=0x100118380 &lt;orte_process_info+104&gt;)
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:148
</span><br>
<span class="quotelev1">&gt; 148         if (NULL == ptr) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 154         if (ORTE_PRINT_NAME_ARG_NUM_BUFS == ptr-&gt;cntr) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 158         snprintf(ptr-&gt;buffers[ptr-&gt;cntr++], 
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 162         return ptr-&gt;buffers[ptr-&gt;cntr-1];
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 163     }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; orte_util_print_jobids (job=4294967295) at 
</span><br>
<span class="quotelev1">&gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:170
</span><br>
<span class="quotelev1">&gt; 170         ptr = get_print_name_buffer();
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev1">&gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:92
</span><br>
<span class="quotelev1">&gt; 92          if (!fns_init) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 101         ret = opal_tsd_getspecific(print_args_tsd_key, (void**)&amp;ptr);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; opal_tsd_getspecific (key=1, valuep=0xffffffff7fffd950)
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-124-g91e9686/opal/threads/tsd.h:163
</span><br>
<span class="quotelev1">&gt; 163         *valuep = pthread_getspecific(key);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 164         return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 165     }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev1">&gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:102
</span><br>
<span class="quotelev1">&gt; 102         if (OPAL_SUCCESS != ret) return NULL;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 104         if (NULL == ptr) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 113         return (orte_print_args_buffers_t*) ptr;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 114     }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; orte_util_print_jobids (job=4294967295) at 
</span><br>
<span class="quotelev1">&gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:172
</span><br>
<span class="quotelev1">&gt; 172         if (NULL == ptr) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 178         if (ORTE_PRINT_NAME_ARG_NUM_BUFS == ptr-&gt;cntr) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 182         if (ORTE_JOBID_INVALID == job) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 183             snprintf(ptr-&gt;buffers[ptr-&gt;cntr++], 
</span><br>
<span class="quotelev1">&gt; ORTE_PRINT_NAME_ARGS_MAX_SIZE, &quot;[INVALID]&quot;);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 193         return ptr-&gt;buffers[ptr-&gt;cntr-1];
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 194     }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; orte_job_state_to_str (state=1) at 
</span><br>
<span class="quotelev1">&gt; ../../openmpi-dev-124-g91e9686/orte/util/error_strings.c:217
</span><br>
<span class="quotelev1">&gt; 217         switch(state) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 221             return &quot;PENDING INIT&quot;;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 317     }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; opal_output_verbose (level=1, output_id=-1, format=0x1 &lt;Address 0x1 out of 
</span><br>
<span class="quotelev1">&gt; bounds&gt;)
</span><br>
<span class="quotelev1">&gt;     at ../../../openmpi-dev-124-g91e9686/opal/util/output.c:373
</span><br>
<span class="quotelev1">&gt; 373             va_start(arglist, format);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 369     {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 370         if (output_id &gt;= 0 &amp;&amp; output_id &lt; OPAL_OUTPUT_MAX_STREAMS &amp;&amp;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 377     }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; orte_state_base_activate_job_state (jdata=0x100125250, state=1)
</span><br>
<span class="quotelev1">&gt;     at 
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-dev-124-g91e9686/orte/mca/state/base/state_base_fns.c:54
</span><br>
<span class="quotelev1">&gt; 54                  if (NULL == s-&gt;cbfunc) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 62                  caddy = OBJ_NEW(orte_state_caddy_t);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; opal_obj_new_debug (type=0xffffffff7f14c7d8 &lt;orte_state_caddy_t_class&gt;, 
</span><br>
<span class="quotelev1">&gt;     file=0xffffffff7f034c08 
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-dev-124-g91e9686/orte/mca/state/base/state_base_fns.c&quot;, 
</span><br>
<span class="quotelev1">&gt; line=62) at ../../../../openmpi-dev-124-g91e9686/opal/class/opal_object.h:249
</span><br>
<span class="quotelev1">&gt; 249         opal_object_t* object = opal_obj_new(type);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; opal_obj_new (cls=0xffffffff7f14c7d8 &lt;orte_state_caddy_t_class&gt;)
</span><br>
<span class="quotelev1">&gt;     at ../../../../openmpi-dev-124-g91e9686/opal/class/opal_object.h:465
</span><br>
<span class="quotelev1">&gt; 465         assert(cls-&gt;cls_sizeof &gt;= sizeof(opal_object_t));
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 470         object = (opal_object_t *) malloc(cls-&gt;cls_sizeof);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 472         if (0 == cls-&gt;cls_initialized) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 473             opal_class_initialize(cls);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; opal_class_initialize (cls=0xffffffff7f14c7d8 &lt;orte_state_caddy_t_class&gt;)
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-124-g91e9686/opal/class/opal_object.c:79
</span><br>
<span class="quotelev1">&gt; 79          assert(cls);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 84          if (1 == cls-&gt;cls_initialized) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 87          opal_atomic_lock(&amp;class_lock);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; opal_atomic_lock (lock=0xffffffff7ee89bf0 &lt;class_lock&gt;)
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-124-g91e9686/opal/include/opal/sys/atomic_impl.h:397
</span><br>
<span class="quotelev1">&gt; 397        while( !opal_atomic_cmpset_acq_32( &amp;(lock-&gt;u.lock),
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; opal_atomic_cmpset_acq_32 (addr=0xffffffff7ee89bf0 &lt;class_lock&gt;, oldval=0, 
</span><br>
<span class="quotelev1">&gt; newval=1)
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-124-g91e9686/opal/include/opal/sys/sparcv9/atomic.h:107
</span><br>
<span class="quotelev1">&gt; 107        rc = opal_atomic_cmpset_32(addr, oldval, newval);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; opal_atomic_cmpset_32 (addr=0xffffffff7ee89bf0 &lt;class_lock&gt;, oldval=0, newval=1)
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-124-g91e9686/opal/include/opal/sys/sparcv9/atomic.h:93
</span><br>
<span class="quotelev1">&gt; 93         int32_t ret = newval;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 95         __asm__ __volatile__(&quot;casa [%1] &quot; ASI_P &quot;, %2, %0&quot;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 98         return (ret == oldval);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 99      }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; opal_atomic_cmpset_acq_32 (addr=0xffffffff7ee89bf0 &lt;class_lock&gt;, oldval=0, 
</span><br>
<span class="quotelev1">&gt; newval=1)
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-124-g91e9686/opal/include/opal/sys/sparcv9/atomic.h:108
</span><br>
<span class="quotelev1">&gt; 108        opal_atomic_rmb();
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; opal_atomic_rmb () at 
</span><br>
<span class="quotelev1">&gt; ../../openmpi-dev-124-g91e9686/opal/include/opal/sys/sparcv9/atomic.h:63
</span><br>
<span class="quotelev1">&gt; 63          MEMBAR(&quot;#LoadLoad&quot;);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 64      }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; opal_atomic_cmpset_acq_32 (addr=0xffffffff7ee89bf0 &lt;class_lock&gt;, oldval=0, 
</span><br>
<span class="quotelev1">&gt; newval=1)
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-124-g91e9686/opal/include/opal/sys/sparcv9/atomic.h:110
</span><br>
<span class="quotelev1">&gt; 110        return rc;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 111     }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; opal_atomic_lock (lock=0xffffffff7ee89bf0 &lt;class_lock&gt;)
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-124-g91e9686/opal/include/opal/sys/atomic_impl.h:403
</span><br>
<span class="quotelev1">&gt; 403     }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; opal_class_initialize (cls=0xffffffff7f14c7d8 &lt;orte_state_caddy_t_class&gt;)
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-124-g91e9686/opal/class/opal_object.c:93
</span><br>
<span class="quotelev1">&gt; 93          if (1 == cls-&gt;cls_initialized) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 103         cls-&gt;cls_depth = 0;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 104         cls_construct_array_count = 0;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 105         cls_destruct_array_count  = 0;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 106         for (c = cls; c; c = c-&gt;cls_parent) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 107             if( NULL != c-&gt;cls_construct ) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 108                 cls_construct_array_count++;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 110             if( NULL != c-&gt;cls_destruct ) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 111                 cls_destruct_array_count++;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 113             cls-&gt;cls_depth++;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 106         for (c = cls; c; c = c-&gt;cls_parent) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 107             if( NULL != c-&gt;cls_construct ) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 110             if( NULL != c-&gt;cls_destruct ) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 113             cls-&gt;cls_depth++;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 106         for (c = cls; c; c = c-&gt;cls_parent) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 122             (void (**)(opal_object_t*))malloc((cls_construct_array_count +
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 123                                                cls_destruct_array_count + 2) 
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 122             (void (**)(opal_object_t*))malloc((cls_construct_array_count +
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 121         cls-&gt;cls_construct_array = 
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 125         if (NULL == cls-&gt;cls_construct_array) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 130             cls-&gt;cls_construct_array + cls_construct_array_count + 1;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 129         cls-&gt;cls_destruct_array =
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 136         cls_construct_array = cls-&gt;cls_construct_array + 
</span><br>
<span class="quotelev1">&gt; cls_construct_array_count;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 137         cls_destruct_array  = cls-&gt;cls_destruct_array;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 139         c = cls;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 140         *cls_construct_array = NULL;  /* end marker for the constructors */
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 141         for (i = 0; i &lt; cls-&gt;cls_depth; i++) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 142             if( NULL != c-&gt;cls_construct ) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 143                 --cls_construct_array;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 144                 *cls_construct_array = c-&gt;cls_construct;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 146             if( NULL != c-&gt;cls_destruct ) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 147                 *cls_destruct_array = c-&gt;cls_destruct;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 148                 cls_destruct_array++;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 150             c = c-&gt;cls_parent;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 141         for (i = 0; i &lt; cls-&gt;cls_depth; i++) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 142             if( NULL != c-&gt;cls_construct ) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 146             if( NULL != c-&gt;cls_destruct ) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 150             c = c-&gt;cls_parent;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 141         for (i = 0; i &lt; cls-&gt;cls_depth; i++) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 152         *cls_destruct_array = NULL;  /* end marker for the destructors */
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 154         cls-&gt;cls_initialized = 1;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 155         save_class(cls);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; save_class (cls=0xffffffff7f14c7d8 &lt;orte_state_caddy_t_class&gt;)
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-124-g91e9686/opal/class/opal_object.c:188
</span><br>
<span class="quotelev1">&gt; 188         if (num_classes &gt;= max_classes) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 189             expand_array();
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; expand_array () at ../../openmpi-dev-124-g91e9686/opal/class/opal_object.c:201
</span><br>
<span class="quotelev1">&gt; 201         max_classes += increment;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 202         classes = (void**)realloc(classes, sizeof(opal_class_t*) * 
</span><br>
<span class="quotelev1">&gt; max_classes);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 203         if (NULL == classes) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 207         for (i = num_classes; i &lt; max_classes; ++i) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 208             classes[i] = NULL;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 207         for (i = num_classes; i &lt; max_classes; ++i) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 208             classes[i] = NULL;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 207         for (i = num_classes; i &lt; max_classes; ++i) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 208             classes[i] = NULL;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 207         for (i = num_classes; i &lt; max_classes; ++i) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 208             classes[i] = NULL;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 207         for (i = num_classes; i &lt; max_classes; ++i) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 208             classes[i] = NULL;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 207         for (i = num_classes; i &lt; max_classes; ++i) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 208             classes[i] = NULL;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 207         for (i = num_classes; i &lt; max_classes; ++i) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 208             classes[i] = NULL;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 207         for (i = num_classes; i &lt; max_classes; ++i) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 208             classes[i] = NULL;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 207         for (i = num_classes; i &lt; max_classes; ++i) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 208             classes[i] = NULL;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 207         for (i = num_classes; i &lt; max_classes; ++i) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 208             classes[i] = NULL;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 207         for (i = num_classes; i &lt; max_classes; ++i) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 210     }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; save_class (cls=0xffffffff7f14c7d8 &lt;orte_state_caddy_t_class&gt;)
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-124-g91e9686/opal/class/opal_object.c:192
</span><br>
<span class="quotelev1">&gt; 192         classes[num_classes] = cls-&gt;cls_construct_array;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 193         ++num_classes;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 194     }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; opal_class_initialize (cls=0xffffffff7f14c7d8 &lt;orte_state_caddy_t_class&gt;)
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-124-g91e9686/opal/class/opal_object.c:159
</span><br>
<span class="quotelev1">&gt; 159         opal_atomic_unlock(&amp;class_lock);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; opal_atomic_unlock (lock=0xffffffff7ee89bf0 &lt;class_lock&gt;)
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-124-g91e9686/opal/include/opal/sys/atomic_impl.h:409
</span><br>
<span class="quotelev1">&gt; 409        opal_atomic_wmb();
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; opal_atomic_wmb () at 
</span><br>
<span class="quotelev1">&gt; ../../openmpi-dev-124-g91e9686/opal/include/opal/sys/sparcv9/atomic.h:69
</span><br>
<span class="quotelev1">&gt; 69          MEMBAR(&quot;#StoreStore&quot;);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 70      }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; opal_atomic_unlock (lock=0xffffffff7ee89bf0 &lt;class_lock&gt;)
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-124-g91e9686/opal/include/opal/sys/atomic_impl.h:410
</span><br>
<span class="quotelev1">&gt; 410        lock-&gt;u.lock=OPAL_ATOMIC_UNLOCKED;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 411     }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; opal_class_initialize (cls=0xffffffff7f14c7d8 &lt;orte_state_caddy_t_class&gt;)
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-124-g91e9686/opal/class/opal_object.c:160
</span><br>
<span class="quotelev1">&gt; 160     }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; opal_obj_new (cls=0xffffffff7f14c7d8 &lt;orte_state_caddy_t_class&gt;)
</span><br>
<span class="quotelev1">&gt;     at ../../../../openmpi-dev-124-g91e9686/opal/class/opal_object.h:475
</span><br>
<span class="quotelev1">&gt; 475         if (NULL != object) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 476             object-&gt;obj_class = cls;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 477             object-&gt;obj_reference_count = 1;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 478             opal_obj_run_constructors(object);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; opal_obj_run_constructors (object=0x1001bfcf0)
</span><br>
<span class="quotelev1">&gt;     at ../../../../openmpi-dev-124-g91e9686/opal/class/opal_object.h:420
</span><br>
<span class="quotelev1">&gt; 420         assert(NULL != object-&gt;obj_class);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 422         cls_construct = object-&gt;obj_class-&gt;cls_construct_array;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 423         while( NULL != *cls_construct ) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 424             (*cls_construct)(object);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; orte_state_caddy_construct (caddy=0x1001bfcf0)
</span><br>
<span class="quotelev1">&gt;     at 
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-dev-124-g91e9686/orte/mca/state/base/state_base_frame.c:84
</span><br>
<span class="quotelev1">&gt; 84          memset(&amp;caddy-&gt;ev, 0, sizeof(opal_event_t));
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 85          caddy-&gt;jdata = NULL;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 86      }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; opal_obj_run_constructors (object=0x1001bfcf0)
</span><br>
<span class="quotelev1">&gt;     at ../../../../openmpi-dev-124-g91e9686/opal/class/opal_object.h:425
</span><br>
<span class="quotelev1">&gt; 425             cls_construct++;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 423         while( NULL != *cls_construct ) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 427     }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; opal_obj_new (cls=0xffffffff7f14c7d8 &lt;orte_state_caddy_t_class&gt;)
</span><br>
<span class="quotelev1">&gt;     at ../../../../openmpi-dev-124-g91e9686/opal/class/opal_object.h:480
</span><br>
<span class="quotelev1">&gt; 480         return object;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 481     }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; opal_obj_new_debug (type=0xffffffff7f14c7d8 &lt;orte_state_caddy_t_class&gt;, 
</span><br>
<span class="quotelev1">&gt;     file=0xffffffff7f034c08 
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-dev-124-g91e9686/orte/mca/state/base/state_base_fns.c&quot;, 
</span><br>
<span class="quotelev1">&gt; line=62) at ../../../../openmpi-dev-124-g91e9686/opal/class/opal_object.h:250
</span><br>
<span class="quotelev1">&gt; 250         object-&gt;obj_magic_id = OPAL_OBJ_MAGIC_ID;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 251         object-&gt;cls_init_file_name = file;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 252         object-&gt;cls_init_lineno = line;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 253         return object;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 254     }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; orte_state_base_activate_job_state (jdata=0x100125250, state=1)
</span><br>
<span class="quotelev1">&gt;     at 
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-dev-124-g91e9686/orte/mca/state/base/state_base_fns.c:63
</span><br>
<span class="quotelev1">&gt; 63                  if (NULL != jdata) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 64                      caddy-&gt;jdata = jdata;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 65                      caddy-&gt;job_state = state;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 66                      OBJ_RETAIN(jdata);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; opal_obj_update (inc=1, object=0x100125250)
</span><br>
<span class="quotelev1">&gt;     at ../../../../openmpi-dev-124-g91e9686/opal/class/opal_object.h:497
</span><br>
<span class="quotelev1">&gt; 497         return opal_atomic_add_32(&amp;(object-&gt;obj_reference_count), inc);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; opal_atomic_add_32 (addr=0x100125260, delta=1)
</span><br>
<span class="quotelev1">&gt;     at 
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-dev-124-g91e9686/opal/include/opal/sys/atomic_impl.h:63
</span><br>
<span class="quotelev1">&gt; 63            oldval = *addr;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 64         } while (0 == opal_atomic_cmpset_32(addr, oldval, oldval + delta));
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; opal_atomic_cmpset_32 (addr=0x100125260, oldval=1, newval=2)
</span><br>
<span class="quotelev1">&gt;     at 
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-dev-124-g91e9686/opal/include/opal/sys/sparcv9/atomic.h:93
</span><br>
<span class="quotelev1">&gt; 93         int32_t ret = newval;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 95         __asm__ __volatile__(&quot;casa [%1] &quot; ASI_P &quot;, %2, %0&quot;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 98         return (ret == oldval);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 99      }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; opal_atomic_add_32 (addr=0x100125260, delta=1)
</span><br>
<span class="quotelev1">&gt;     at 
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-dev-124-g91e9686/opal/include/opal/sys/atomic_impl.h:65
</span><br>
<span class="quotelev1">&gt; 65         return (oldval + delta);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 66      }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; orte_state_base_activate_job_state (jdata=0x100125250, state=1)
</span><br>
<span class="quotelev1">&gt;     at 
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-dev-124-g91e9686/orte/mca/state/base/state_base_fns.c:66
</span><br>
<span class="quotelev1">&gt; 66                      OBJ_RETAIN(jdata);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 68                  opal_event_set(orte_event_base, &amp;caddy-&gt;ev, -1, 
</span><br>
<span class="quotelev1">&gt; OPAL_EV_WRITE, s-&gt;cbfunc, caddy);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 69                  opal_event_set_priority(&amp;caddy-&gt;ev, s-&gt;priority);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 70                  opal_event_active(&amp;caddy-&gt;ev, OPAL_EV_WRITE, 1);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 71                  return;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 105     }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; rsh_launch (jdata=0x100125250)
</span><br>
<span class="quotelev1">&gt;     at 
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-dev-124-g91e9686/orte/mca/plm/rsh/plm_rsh_module.c:883
</span><br>
<span class="quotelev1">&gt; 883         return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 884     }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; orterun (argc=5, argv=0xffffffff7fffe0d8)
</span><br>
<span class="quotelev1">&gt;     at ../../../../openmpi-dev-124-g91e9686/orte/tools/orterun/orterun.c:1084
</span><br>
<span class="quotelev1">&gt; 1084        while (orte_event_base_active) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 1085            opal_event_loop(orte_event_base, OPAL_EVLOOP_ONCE);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 1084        while (orte_event_base_active) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 1085            opal_event_loop(orte_event_base, OPAL_EVLOOP_ONCE);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 1084        while (orte_event_base_active) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 1085            opal_event_loop(orte_event_base, OPAL_EVLOOP_ONCE);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=13080, tid=2
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # JRE version: Java(TM) SE Runtime Environment (8.0-b132) (build 1.8.0-b132)
</span><br>
<span class="quotelev1">&gt; # Java VM: Java HotSpot(TM) 64-Bit Server VM (25.0-b70 mixed mode solaris-sparc 
</span><br>
<span class="quotelev1">&gt; compressed oops)
</span><br>
<span class="quotelev1">&gt; # Problematic frame:
</span><br>
<span class="quotelev1">&gt; # 1084      while (orte_event_base_active) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 1085            opal_event_loop(orte_event_base, OPAL_EVLOOP_ONCE);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; C  [libc.so.1+0x3c7f0]  strlen+0x50
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Failed to write core dump. Core dumps have been disabled. To enable core 
</span><br>
<span class="quotelev1">&gt; dumping, try &quot;ulimit -c unlimited&quot; before starting Java again
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # An error report file with more information is saved as:
</span><br>
<span class="quotelev1">&gt; # /home/fd1026/work/skripte/master/parallel/prog/mpi/java/hs_err_pid13080.log
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # If you would like to submit a bug report, please visit:
</span><br>
<span class="quotelev1">&gt; #   <a href="http://bugreport.sun.com/bugreport/crash.jsp">http://bugreport.sun.com/bugreport/crash.jsp</a>
</span><br>
<span class="quotelev1">&gt; # The crash happened outside the Java Virtual Machine in native code.
</span><br>
<span class="quotelev1">&gt; # See problematic frame for where to report the bug.
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec noticed that process rank 0 with PID 0 on node tyr exited on signal 6 
</span><br>
<span class="quotelev1">&gt; (Abort).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 1084        while (orte_event_base_active) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 1089        orte_odls.kill_local_procs(NULL);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much for any help in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25551.php">Bill Broadley: "Re: [OMPI users] New ib locked pages behavior?"</a>
<li><strong>Previous message:</strong> <a href="25549.php">Brock Palen: "Re: [OMPI users] low CPU utilization with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="25543.php">Siegmar Gross: "[OMPI users] which info is needed for SIGSEGV in Java for openmpi-dev-124-g91e9686 on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25553.php">Siegmar Gross: "Re: [OMPI users] which info is needed for SIGSEGV in Java for openmpi-dev-124-g91e9686 on Solaris"</a>
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
