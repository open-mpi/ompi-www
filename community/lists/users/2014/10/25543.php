<?
$subject_val = "[OMPI users] which info is needed for SIGSEGV in Java for openmpi-dev-124-g91e9686 on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 21 11:12:53 2014" -->
<!-- isoreceived="20141021151253" -->
<!-- sent="Tue, 21 Oct 2014 17:11:47 +0200 (CEST)" -->
<!-- isosent="20141021151147" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] which info is needed for SIGSEGV in Java for openmpi-dev-124-g91e9686 on Solaris" -->
<!-- id="201410211511.s9LFBl9i013166_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] which info is needed for SIGSEGV in Java for openmpi-dev-124-g91e9686 on Solaris<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-21 11:11:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25544.php">Bill Broadley: "[OMPI users] New ib locked pages behavior?"</a>
<li><strong>Previous message:</strong> <a href="25542.php">Nathan Hjelm: "Re: [OMPI users] large memory usage and hangs when preconnecting beyond 1000 cpus"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25550.php">Kawashima, Takahiro: "Re: [OMPI users] which info is needed for SIGSEGV in Java for openmpi-dev-124-g91e9686 on Solaris"</a>
<li><strong>Reply:</strong> <a href="25550.php">Kawashima, Takahiro: "Re: [OMPI users] which info is needed for SIGSEGV in Java for openmpi-dev-124-g91e9686 on Solaris"</a>
<li><strong>Maybe reply:</strong> <a href="25553.php">Siegmar Gross: "Re: [OMPI users] which info is needed for SIGSEGV in Java for openmpi-dev-124-g91e9686 on Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I installed openmpi-dev-124-g91e9686 on Solaris 10 Sparc with
<br>
gcc-4.9.1 to track down the error with my small Java program.
<br>
I started single stepping in orterun.c at line 1081 and
<br>
continued until I got the segmentation fault. I get
<br>
&quot;jdata = 0x0&quot; in version openmpi-1.8.2a1r31804, which is the
<br>
last one which works with Java in my environment, while I get
<br>
&quot;jdata = 0x100125250&quot; in this version. Unfortunately I don't
<br>
know which files or variables are important to look at. Perhaps
<br>
somebody can look at the following lines of code and tell me,
<br>
which information I should provide to solve the problem. I know
<br>
that Solaris isn't any longer on your list of supported systems,
<br>
but perhaps we can get it working again, if you tell me what
<br>
you need and I do the debugging.
<br>
<p>/usr/local/gdb-7.6.1_64_gcc/bin/gdb mpiexec
<br>
GNU gdb (GDB) 7.6.1
<br>
...
<br>
(gdb) run -np 1 java InitFinalizeMain 
<br>
Starting program: /usr/local/openmpi-1.9.0_64_gcc/bin/mpiexec \
<br>
&nbsp;&nbsp;-np 1 java InitFinalizeMain
<br>
[Thread debugging using libthread_db enabled]
<br>
[New Thread 1 (LWP 1)]
<br>
[New LWP    2        ]
<br>
#
<br>
# A fatal error has been detected by the Java Runtime Environment:
<br>
#
<br>
#  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=13064, tid=2
<br>
...
<br>
[LWP    2         exited]
<br>
[New Thread 2        ]
<br>
[Switching to Thread 1 (LWP 1)]
<br>
sol_thread_fetch_registers: td_ta_map_id2thr: no thread can be
<br>
&nbsp;&nbsp;found to satisfy query
<br>
(gdb) thread 1
<br>
[Switching to thread 1 (LWP    1        )]
<br>
#0  0xffffffff7f6173d0 in rtld_db_dlactivity () from /usr/lib/sparcv9/ld.so.1
<br>
(gdb) b orterun.c:1081
<br>
Breakpoint 1 at 0x1000070dc: file 
<br>
../../../../openmpi-dev-124-g91e9686/orte/tools/orterun/orterun.c, line 1081.
<br>
(gdb) r
<br>
The program being debugged has been started already.
<br>
Start it from the beginning? (y or n) y
<br>
<p>Starting program: /usr/local/openmpi-1.9.0_64_gcc/bin/mpiexec -np 1 java 
<br>
InitFinalizeMain
<br>
[Thread debugging using libthread_db enabled]
<br>
[New Thread 1 (LWP 1)]
<br>
[New LWP    2        ]
<br>
[Switching to Thread 1 (LWP 1)]
<br>
<p>Breakpoint 1, orterun (argc=5, argv=0xffffffff7fffe0d8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-124-g91e9686/orte/tools/orterun/orterun.c:1081
<br>
1081        rc = orte_plm.spawn(jdata);
<br>
(gdb) print jdata
<br>
$1 = (orte_job_t *) 0x100125250
<br>
(gdb) s
<br>
rsh_launch (jdata=0x100125250)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at 
<br>
../../../../../openmpi-dev-124-g91e9686/orte/mca/plm/rsh/plm_rsh_module.c:876
<br>
876         if (ORTE_FLAG_TEST(jdata, ORTE_JOB_FLAG_RESTART)) {
<br>
(gdb) s    
<br>
881             ORTE_ACTIVATE_JOB_STATE(jdata, ORTE_JOB_STATE_INIT);
<br>
(gdb) 
<br>
orte_util_print_name_args (name=0x100118380 &lt;orte_process_info+104&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:122
<br>
122         if (NULL == name) {
<br>
(gdb) 
<br>
142         job = orte_util_print_jobids(name-&gt;jobid);
<br>
(gdb) 
<br>
orte_util_print_jobids (job=2502885376) at 
<br>
../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:170
<br>
170         ptr = get_print_name_buffer();
<br>
(gdb) 
<br>
get_print_name_buffer () at 
<br>
../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:92
<br>
92          if (!fns_init) {
<br>
(gdb) 
<br>
101         ret = opal_tsd_getspecific(print_args_tsd_key, (void**)&amp;ptr);
<br>
(gdb) 
<br>
opal_tsd_getspecific (key=1, valuep=0xffffffff7fffd990)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-dev-124-g91e9686/opal/threads/tsd.h:163
<br>
163         *valuep = pthread_getspecific(key);
<br>
(gdb) 
<br>
164         return OPAL_SUCCESS;
<br>
(gdb) 
<br>
165     }
<br>
(gdb) 
<br>
get_print_name_buffer () at 
<br>
../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:102
<br>
102         if (OPAL_SUCCESS != ret) return NULL;
<br>
(gdb) 
<br>
104         if (NULL == ptr) {
<br>
(gdb) 
<br>
113         return (orte_print_args_buffers_t*) ptr;
<br>
(gdb) 
<br>
114     }
<br>
(gdb) 
<br>
orte_util_print_jobids (job=2502885376) at 
<br>
../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:172
<br>
172         if (NULL == ptr) {
<br>
(gdb) 
<br>
178         if (ORTE_PRINT_NAME_ARG_NUM_BUFS == ptr-&gt;cntr) {
<br>
(gdb) 
<br>
182         if (ORTE_JOBID_INVALID == job) {
<br>
(gdb) 
<br>
184         } else if (ORTE_JOBID_WILDCARD == job) {
<br>
(gdb) 
<br>
187             tmp1 = ORTE_JOB_FAMILY((unsigned long)job);
<br>
(gdb) 
<br>
188             tmp2 = ORTE_LOCAL_JOBID((unsigned long)job);
<br>
(gdb) 
<br>
189             snprintf(ptr-&gt;buffers[ptr-&gt;cntr++], 
<br>
(gdb) 
<br>
193         return ptr-&gt;buffers[ptr-&gt;cntr-1];
<br>
(gdb) 
<br>
194     }
<br>
(gdb) 
<br>
orte_util_print_name_args (name=0x100118380 &lt;orte_process_info+104&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:143
<br>
143         vpid = orte_util_print_vpids(name-&gt;vpid);
<br>
(gdb) 
<br>
orte_util_print_vpids (vpid=0) at 
<br>
../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:260
<br>
260         ptr = get_print_name_buffer();
<br>
(gdb) 
<br>
get_print_name_buffer () at 
<br>
../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:92
<br>
92          if (!fns_init) {
<br>
(gdb) 
<br>
101         ret = opal_tsd_getspecific(print_args_tsd_key, (void**)&amp;ptr);
<br>
(gdb) 
<br>
opal_tsd_getspecific (key=1, valuep=0xffffffff7fffd9a0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-dev-124-g91e9686/opal/threads/tsd.h:163
<br>
163         *valuep = pthread_getspecific(key);
<br>
(gdb) 
<br>
164         return OPAL_SUCCESS;
<br>
(gdb) 
<br>
165     }
<br>
(gdb) 
<br>
get_print_name_buffer () at 
<br>
../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:102
<br>
102         if (OPAL_SUCCESS != ret) return NULL;
<br>
(gdb) 
<br>
104         if (NULL == ptr) {
<br>
(gdb) 
<br>
113         return (orte_print_args_buffers_t*) ptr;
<br>
(gdb) 
<br>
114     }
<br>
(gdb) 
<br>
orte_util_print_vpids (vpid=0) at 
<br>
../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:262
<br>
262         if (NULL == ptr) {
<br>
(gdb) 
<br>
268         if (ORTE_PRINT_NAME_ARG_NUM_BUFS == ptr-&gt;cntr) {
<br>
(gdb) 
<br>
272         if (ORTE_VPID_INVALID == vpid) {
<br>
(gdb) 
<br>
274         } else if (ORTE_VPID_WILDCARD == vpid) {
<br>
(gdb) 
<br>
277             snprintf(ptr-&gt;buffers[ptr-&gt;cntr++], 
<br>
(gdb) 
<br>
281         return ptr-&gt;buffers[ptr-&gt;cntr-1];
<br>
(gdb) 
<br>
282     }
<br>
(gdb) 
<br>
orte_util_print_name_args (name=0x100118380 &lt;orte_process_info+104&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:146
<br>
146         ptr = get_print_name_buffer();
<br>
(gdb) 
<br>
get_print_name_buffer () at 
<br>
../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:92
<br>
92          if (!fns_init) {
<br>
(gdb) 
<br>
101         ret = opal_tsd_getspecific(print_args_tsd_key, (void**)&amp;ptr);
<br>
(gdb) 
<br>
opal_tsd_getspecific (key=1, valuep=0xffffffff7fffda60)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-dev-124-g91e9686/opal/threads/tsd.h:163
<br>
163         *valuep = pthread_getspecific(key);
<br>
(gdb) 
<br>
164         return OPAL_SUCCESS;
<br>
(gdb) 
<br>
165     }
<br>
(gdb) 
<br>
get_print_name_buffer () at 
<br>
../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:102
<br>
102         if (OPAL_SUCCESS != ret) return NULL;
<br>
(gdb) 
<br>
104         if (NULL == ptr) {
<br>
(gdb) 
<br>
113         return (orte_print_args_buffers_t*) ptr;
<br>
(gdb) 
<br>
114     }
<br>
(gdb) 
<br>
orte_util_print_name_args (name=0x100118380 &lt;orte_process_info+104&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:148
<br>
148         if (NULL == ptr) {
<br>
(gdb) 
<br>
154         if (ORTE_PRINT_NAME_ARG_NUM_BUFS == ptr-&gt;cntr) {
<br>
(gdb) 
<br>
158         snprintf(ptr-&gt;buffers[ptr-&gt;cntr++], 
<br>
(gdb) 
<br>
162         return ptr-&gt;buffers[ptr-&gt;cntr-1];
<br>
(gdb) 
<br>
163     }
<br>
(gdb) 
<br>
orte_util_print_jobids (job=4294967295) at 
<br>
../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:170
<br>
170         ptr = get_print_name_buffer();
<br>
(gdb) 
<br>
get_print_name_buffer () at 
<br>
../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:92
<br>
92          if (!fns_init) {
<br>
(gdb) 
<br>
101         ret = opal_tsd_getspecific(print_args_tsd_key, (void**)&amp;ptr);
<br>
(gdb) 
<br>
opal_tsd_getspecific (key=1, valuep=0xffffffff7fffda60)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-dev-124-g91e9686/opal/threads/tsd.h:163
<br>
163         *valuep = pthread_getspecific(key);
<br>
(gdb) 
<br>
164         return OPAL_SUCCESS;
<br>
(gdb) 
<br>
165     }
<br>
(gdb) 
<br>
get_print_name_buffer () at 
<br>
../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:102
<br>
102         if (OPAL_SUCCESS != ret) return NULL;
<br>
(gdb) 
<br>
104         if (NULL == ptr) {
<br>
(gdb) 
<br>
113         return (orte_print_args_buffers_t*) ptr;
<br>
(gdb) 
<br>
114     }
<br>
(gdb) 
<br>
orte_util_print_jobids (job=4294967295) at 
<br>
../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:172
<br>
172         if (NULL == ptr) {
<br>
(gdb) 
<br>
178         if (ORTE_PRINT_NAME_ARG_NUM_BUFS == ptr-&gt;cntr) {
<br>
(gdb) 
<br>
182         if (ORTE_JOBID_INVALID == job) {
<br>
(gdb) 
<br>
183             snprintf(ptr-&gt;buffers[ptr-&gt;cntr++], 
<br>
ORTE_PRINT_NAME_ARGS_MAX_SIZE, &quot;[INVALID]&quot;);
<br>
(gdb) 
<br>
193         return ptr-&gt;buffers[ptr-&gt;cntr-1];
<br>
(gdb) 
<br>
194     }
<br>
(gdb) 
<br>
orte_job_state_to_str (state=1) at 
<br>
../../openmpi-dev-124-g91e9686/orte/util/error_strings.c:217
<br>
217         switch(state) {
<br>
(gdb) 
<br>
221             return &quot;PENDING INIT&quot;;
<br>
(gdb) 
<br>
317     }
<br>
(gdb) 
<br>
opal_output_verbose (level=1, output_id=0, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;format=0xffffffff7f14dd98 &lt;orte_job_states&gt; 
<br>
&quot;\336\257\276\355\336\257\276\355&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../openmpi-dev-124-g91e9686/opal/util/output.c:373
<br>
373             va_start(arglist, format);
<br>
(gdb) 
<br>
369     {
<br>
(gdb) 
<br>
370         if (output_id &gt;= 0 &amp;&amp; output_id &lt; OPAL_OUTPUT_MAX_STREAMS &amp;&amp;
<br>
(gdb) 
<br>
377     }
<br>
(gdb) 
<br>
orte_state_base_activate_job_state (jdata=0x100125250, state=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at 
<br>
../../../../openmpi-dev-124-g91e9686/orte/mca/state/base/state_base_fns.c:33
<br>
33          opal_list_item_t *itm, *any=NULL, *error=NULL;
<br>
(gdb) 
<br>
37          for (itm = opal_list_get_first(&amp;orte_job_states);
<br>
(gdb) 
<br>
opal_list_get_first (list=0xffffffff7f14dd98 &lt;orte_job_states&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-124-g91e9686/opal/class/opal_list.h:320
<br>
320         opal_list_item_t* item = 
<br>
(opal_list_item_t*)list-&gt;opal_list_sentinel.opal_list_next;
<br>
(gdb) 
<br>
324         assert(1 == item-&gt;opal_list_item_refcount);
<br>
(gdb) 
<br>
325         assert( list == item-&gt;opal_list_item_belong_to );
<br>
(gdb) 
<br>
328         return item;
<br>
(gdb) 
<br>
329     }
<br>
(gdb) 
<br>
orte_state_base_activate_job_state (jdata=0x100125250, state=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at 
<br>
../../../../openmpi-dev-124-g91e9686/orte/mca/state/base/state_base_fns.c:38
<br>
38               itm != opal_list_get_end(&amp;orte_job_states);
<br>
(gdb) 
<br>
opal_list_get_end (list=0xffffffff7f14dd98 &lt;orte_job_states&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-124-g91e9686/opal/class/opal_list.h:399
<br>
399         return &amp;(list-&gt;opal_list_sentinel);
<br>
(gdb) 
<br>
400     }
<br>
(gdb) 
<br>
orte_state_base_activate_job_state (jdata=0x100125250, state=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at 
<br>
../../../../openmpi-dev-124-g91e9686/orte/mca/state/base/state_base_fns.c:37
<br>
37          for (itm = opal_list_get_first(&amp;orte_job_states);
<br>
(gdb) 
<br>
40              s = (orte_state_t*)itm;
<br>
(gdb) 
<br>
41              if (s-&gt;job_state == ORTE_JOB_STATE_ANY) {
<br>
(gdb) 
<br>
45              if (s-&gt;job_state == ORTE_JOB_STATE_ERROR) {
<br>
(gdb) 
<br>
48              if (s-&gt;job_state == state) {
<br>
(gdb) 
<br>
49                  OPAL_OUTPUT_VERBOSE((1, 
<br>
orte_state_base_framework.framework_output,
<br>
(gdb) 
<br>
orte_util_print_name_args (name=0x100118380 &lt;orte_process_info+104&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:122
<br>
122         if (NULL == name) {
<br>
(gdb) 
<br>
142         job = orte_util_print_jobids(name-&gt;jobid);
<br>
(gdb) 
<br>
orte_util_print_jobids (job=2502885376) at 
<br>
../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:170
<br>
170         ptr = get_print_name_buffer();
<br>
(gdb) 
<br>
get_print_name_buffer () at 
<br>
../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:92
<br>
92          if (!fns_init) {
<br>
(gdb) 
<br>
101         ret = opal_tsd_getspecific(print_args_tsd_key, (void**)&amp;ptr);
<br>
(gdb) 
<br>
opal_tsd_getspecific (key=1, valuep=0xffffffff7fffd880)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-dev-124-g91e9686/opal/threads/tsd.h:163
<br>
163         *valuep = pthread_getspecific(key);
<br>
(gdb) 
<br>
164         return OPAL_SUCCESS;
<br>
(gdb) 
<br>
165     }
<br>
(gdb) 
<br>
get_print_name_buffer () at 
<br>
../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:102
<br>
102         if (OPAL_SUCCESS != ret) return NULL;
<br>
(gdb) 
<br>
104         if (NULL == ptr) {
<br>
(gdb) 
<br>
113         return (orte_print_args_buffers_t*) ptr;
<br>
(gdb) 
<br>
114     }
<br>
(gdb) 
<br>
orte_util_print_jobids (job=2502885376) at 
<br>
../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:172
<br>
172         if (NULL == ptr) {
<br>
(gdb) 
<br>
178         if (ORTE_PRINT_NAME_ARG_NUM_BUFS == ptr-&gt;cntr) {
<br>
(gdb) 
<br>
182         if (ORTE_JOBID_INVALID == job) {
<br>
(gdb) 
<br>
184         } else if (ORTE_JOBID_WILDCARD == job) {
<br>
(gdb) 
<br>
187             tmp1 = ORTE_JOB_FAMILY((unsigned long)job);
<br>
(gdb) 
<br>
188             tmp2 = ORTE_LOCAL_JOBID((unsigned long)job);
<br>
(gdb) 
<br>
189             snprintf(ptr-&gt;buffers[ptr-&gt;cntr++], 
<br>
(gdb) 
<br>
193         return ptr-&gt;buffers[ptr-&gt;cntr-1];
<br>
(gdb) 
<br>
194     }
<br>
(gdb) 
<br>
orte_util_print_name_args (name=0x100118380 &lt;orte_process_info+104&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:143
<br>
143         vpid = orte_util_print_vpids(name-&gt;vpid);
<br>
(gdb) 
<br>
orte_util_print_vpids (vpid=0) at 
<br>
../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:260
<br>
260         ptr = get_print_name_buffer();
<br>
(gdb) 
<br>
get_print_name_buffer () at 
<br>
../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:92
<br>
92          if (!fns_init) {
<br>
(gdb) 
<br>
101         ret = opal_tsd_getspecific(print_args_tsd_key, (void**)&amp;ptr);
<br>
(gdb) 
<br>
opal_tsd_getspecific (key=1, valuep=0xffffffff7fffd890)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-dev-124-g91e9686/opal/threads/tsd.h:163
<br>
163         *valuep = pthread_getspecific(key);
<br>
(gdb) 
<br>
164         return OPAL_SUCCESS;
<br>
(gdb) 
<br>
165     }
<br>
(gdb) 
<br>
get_print_name_buffer () at 
<br>
../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:102
<br>
102         if (OPAL_SUCCESS != ret) return NULL;
<br>
(gdb) 
<br>
104         if (NULL == ptr) {
<br>
(gdb) 
<br>
113         return (orte_print_args_buffers_t*) ptr;
<br>
(gdb) 
<br>
114     }
<br>
(gdb) 
<br>
orte_util_print_vpids (vpid=0) at 
<br>
../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:262
<br>
262         if (NULL == ptr) {
<br>
(gdb) 
<br>
268         if (ORTE_PRINT_NAME_ARG_NUM_BUFS == ptr-&gt;cntr) {
<br>
(gdb) 
<br>
272         if (ORTE_VPID_INVALID == vpid) {
<br>
(gdb) 
<br>
274         } else if (ORTE_VPID_WILDCARD == vpid) {
<br>
(gdb) 
<br>
277             snprintf(ptr-&gt;buffers[ptr-&gt;cntr++], 
<br>
(gdb) 
<br>
281         return ptr-&gt;buffers[ptr-&gt;cntr-1];
<br>
(gdb) 
<br>
282     }
<br>
(gdb) 
<br>
orte_util_print_name_args (name=0x100118380 &lt;orte_process_info+104&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:146
<br>
146         ptr = get_print_name_buffer();
<br>
(gdb) 
<br>
get_print_name_buffer () at 
<br>
../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:92
<br>
92          if (!fns_init) {
<br>
(gdb) 
<br>
101         ret = opal_tsd_getspecific(print_args_tsd_key, (void**)&amp;ptr);
<br>
(gdb) 
<br>
opal_tsd_getspecific (key=1, valuep=0xffffffff7fffd950)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-dev-124-g91e9686/opal/threads/tsd.h:163
<br>
163         *valuep = pthread_getspecific(key);
<br>
(gdb) 
<br>
164         return OPAL_SUCCESS;
<br>
(gdb) 
<br>
165     }
<br>
(gdb) 
<br>
get_print_name_buffer () at 
<br>
../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:102
<br>
102         if (OPAL_SUCCESS != ret) return NULL;
<br>
(gdb) 
<br>
104         if (NULL == ptr) {
<br>
(gdb) 
<br>
113         return (orte_print_args_buffers_t*) ptr;
<br>
(gdb) 
<br>
114     }
<br>
(gdb) 
<br>
orte_util_print_name_args (name=0x100118380 &lt;orte_process_info+104&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:148
<br>
148         if (NULL == ptr) {
<br>
(gdb) 
<br>
154         if (ORTE_PRINT_NAME_ARG_NUM_BUFS == ptr-&gt;cntr) {
<br>
(gdb) 
<br>
158         snprintf(ptr-&gt;buffers[ptr-&gt;cntr++], 
<br>
(gdb) 
<br>
162         return ptr-&gt;buffers[ptr-&gt;cntr-1];
<br>
(gdb) 
<br>
163     }
<br>
(gdb) 
<br>
orte_util_print_jobids (job=4294967295) at 
<br>
../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:170
<br>
170         ptr = get_print_name_buffer();
<br>
(gdb) 
<br>
get_print_name_buffer () at 
<br>
../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:92
<br>
92          if (!fns_init) {
<br>
(gdb) 
<br>
101         ret = opal_tsd_getspecific(print_args_tsd_key, (void**)&amp;ptr);
<br>
(gdb) 
<br>
opal_tsd_getspecific (key=1, valuep=0xffffffff7fffd950)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-dev-124-g91e9686/opal/threads/tsd.h:163
<br>
163         *valuep = pthread_getspecific(key);
<br>
(gdb) 
<br>
164         return OPAL_SUCCESS;
<br>
(gdb) 
<br>
165     }
<br>
(gdb) 
<br>
get_print_name_buffer () at 
<br>
../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:102
<br>
102         if (OPAL_SUCCESS != ret) return NULL;
<br>
(gdb) 
<br>
104         if (NULL == ptr) {
<br>
(gdb) 
<br>
113         return (orte_print_args_buffers_t*) ptr;
<br>
(gdb) 
<br>
114     }
<br>
(gdb) 
<br>
orte_util_print_jobids (job=4294967295) at 
<br>
../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:172
<br>
172         if (NULL == ptr) {
<br>
(gdb) 
<br>
178         if (ORTE_PRINT_NAME_ARG_NUM_BUFS == ptr-&gt;cntr) {
<br>
(gdb) 
<br>
182         if (ORTE_JOBID_INVALID == job) {
<br>
(gdb) 
<br>
183             snprintf(ptr-&gt;buffers[ptr-&gt;cntr++], 
<br>
ORTE_PRINT_NAME_ARGS_MAX_SIZE, &quot;[INVALID]&quot;);
<br>
(gdb) 
<br>
193         return ptr-&gt;buffers[ptr-&gt;cntr-1];
<br>
(gdb) 
<br>
194     }
<br>
(gdb) 
<br>
orte_job_state_to_str (state=1) at 
<br>
../../openmpi-dev-124-g91e9686/orte/util/error_strings.c:217
<br>
217         switch(state) {
<br>
(gdb) 
<br>
221             return &quot;PENDING INIT&quot;;
<br>
(gdb) 
<br>
317     }
<br>
(gdb) 
<br>
opal_output_verbose (level=1, output_id=-1, format=0x1 &lt;Address 0x1 out of 
<br>
bounds&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../openmpi-dev-124-g91e9686/opal/util/output.c:373
<br>
373             va_start(arglist, format);
<br>
(gdb) 
<br>
369     {
<br>
(gdb) 
<br>
370         if (output_id &gt;= 0 &amp;&amp; output_id &lt; OPAL_OUTPUT_MAX_STREAMS &amp;&amp;
<br>
(gdb) 
<br>
377     }
<br>
(gdb) 
<br>
orte_state_base_activate_job_state (jdata=0x100125250, state=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at 
<br>
../../../../openmpi-dev-124-g91e9686/orte/mca/state/base/state_base_fns.c:54
<br>
54                  if (NULL == s-&gt;cbfunc) {
<br>
(gdb) 
<br>
62                  caddy = OBJ_NEW(orte_state_caddy_t);
<br>
(gdb) 
<br>
opal_obj_new_debug (type=0xffffffff7f14c7d8 &lt;orte_state_caddy_t_class&gt;, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;file=0xffffffff7f034c08 
<br>
&quot;../../../../openmpi-dev-124-g91e9686/orte/mca/state/base/state_base_fns.c&quot;, 
<br>
line=62) at ../../../../openmpi-dev-124-g91e9686/opal/class/opal_object.h:249
<br>
249         opal_object_t* object = opal_obj_new(type);
<br>
(gdb) 
<br>
opal_obj_new (cls=0xffffffff7f14c7d8 &lt;orte_state_caddy_t_class&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-124-g91e9686/opal/class/opal_object.h:465
<br>
465         assert(cls-&gt;cls_sizeof &gt;= sizeof(opal_object_t));
<br>
(gdb) 
<br>
470         object = (opal_object_t *) malloc(cls-&gt;cls_sizeof);
<br>
(gdb) 
<br>
472         if (0 == cls-&gt;cls_initialized) {
<br>
(gdb) 
<br>
473             opal_class_initialize(cls);
<br>
(gdb) 
<br>
opal_class_initialize (cls=0xffffffff7f14c7d8 &lt;orte_state_caddy_t_class&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-dev-124-g91e9686/opal/class/opal_object.c:79
<br>
79          assert(cls);
<br>
(gdb) 
<br>
84          if (1 == cls-&gt;cls_initialized) {
<br>
(gdb) 
<br>
87          opal_atomic_lock(&amp;class_lock);
<br>
(gdb) 
<br>
opal_atomic_lock (lock=0xffffffff7ee89bf0 &lt;class_lock&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-dev-124-g91e9686/opal/include/opal/sys/atomic_impl.h:397
<br>
397        while( !opal_atomic_cmpset_acq_32( &amp;(lock-&gt;u.lock),
<br>
(gdb) 
<br>
opal_atomic_cmpset_acq_32 (addr=0xffffffff7ee89bf0 &lt;class_lock&gt;, oldval=0, 
<br>
newval=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-dev-124-g91e9686/opal/include/opal/sys/sparcv9/atomic.h:107
<br>
107        rc = opal_atomic_cmpset_32(addr, oldval, newval);
<br>
(gdb) 
<br>
opal_atomic_cmpset_32 (addr=0xffffffff7ee89bf0 &lt;class_lock&gt;, oldval=0, newval=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-dev-124-g91e9686/opal/include/opal/sys/sparcv9/atomic.h:93
<br>
93         int32_t ret = newval;
<br>
(gdb) 
<br>
95         __asm__ __volatile__(&quot;casa [%1] &quot; ASI_P &quot;, %2, %0&quot;
<br>
(gdb) 
<br>
98         return (ret == oldval);
<br>
(gdb) 
<br>
99      }
<br>
(gdb) 
<br>
opal_atomic_cmpset_acq_32 (addr=0xffffffff7ee89bf0 &lt;class_lock&gt;, oldval=0, 
<br>
newval=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-dev-124-g91e9686/opal/include/opal/sys/sparcv9/atomic.h:108
<br>
108        opal_atomic_rmb();
<br>
(gdb) 
<br>
opal_atomic_rmb () at 
<br>
../../openmpi-dev-124-g91e9686/opal/include/opal/sys/sparcv9/atomic.h:63
<br>
63          MEMBAR(&quot;#LoadLoad&quot;);
<br>
(gdb) 
<br>
64      }
<br>
(gdb) 
<br>
opal_atomic_cmpset_acq_32 (addr=0xffffffff7ee89bf0 &lt;class_lock&gt;, oldval=0, 
<br>
newval=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-dev-124-g91e9686/opal/include/opal/sys/sparcv9/atomic.h:110
<br>
110        return rc;
<br>
(gdb) 
<br>
111     }
<br>
(gdb) 
<br>
opal_atomic_lock (lock=0xffffffff7ee89bf0 &lt;class_lock&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-dev-124-g91e9686/opal/include/opal/sys/atomic_impl.h:403
<br>
403     }
<br>
(gdb) 
<br>
opal_class_initialize (cls=0xffffffff7f14c7d8 &lt;orte_state_caddy_t_class&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-dev-124-g91e9686/opal/class/opal_object.c:93
<br>
93          if (1 == cls-&gt;cls_initialized) {
<br>
(gdb) 
<br>
103         cls-&gt;cls_depth = 0;
<br>
(gdb) 
<br>
104         cls_construct_array_count = 0;
<br>
(gdb) 
<br>
105         cls_destruct_array_count  = 0;
<br>
(gdb) 
<br>
106         for (c = cls; c; c = c-&gt;cls_parent) {
<br>
(gdb) 
<br>
107             if( NULL != c-&gt;cls_construct ) {
<br>
(gdb) 
<br>
108                 cls_construct_array_count++;
<br>
(gdb) 
<br>
110             if( NULL != c-&gt;cls_destruct ) {
<br>
(gdb) 
<br>
111                 cls_destruct_array_count++;
<br>
(gdb) 
<br>
113             cls-&gt;cls_depth++;
<br>
(gdb) 
<br>
106         for (c = cls; c; c = c-&gt;cls_parent) {
<br>
(gdb) 
<br>
107             if( NULL != c-&gt;cls_construct ) {
<br>
(gdb) 
<br>
110             if( NULL != c-&gt;cls_destruct ) {
<br>
(gdb) 
<br>
113             cls-&gt;cls_depth++;
<br>
(gdb) 
<br>
106         for (c = cls; c; c = c-&gt;cls_parent) {
<br>
(gdb) 
<br>
122             (void (**)(opal_object_t*))malloc((cls_construct_array_count +
<br>
(gdb) 
<br>
123                                                cls_destruct_array_count + 2) 
<br>
*
<br>
(gdb) 
<br>
122             (void (**)(opal_object_t*))malloc((cls_construct_array_count +
<br>
(gdb) 
<br>
121         cls-&gt;cls_construct_array = 
<br>
(gdb) 
<br>
125         if (NULL == cls-&gt;cls_construct_array) {
<br>
(gdb) 
<br>
130             cls-&gt;cls_construct_array + cls_construct_array_count + 1;
<br>
(gdb) 
<br>
129         cls-&gt;cls_destruct_array =
<br>
(gdb) 
<br>
136         cls_construct_array = cls-&gt;cls_construct_array + 
<br>
cls_construct_array_count;
<br>
(gdb) 
<br>
137         cls_destruct_array  = cls-&gt;cls_destruct_array;
<br>
(gdb) 
<br>
139         c = cls;
<br>
(gdb) 
<br>
140         *cls_construct_array = NULL;  /* end marker for the constructors */
<br>
(gdb) 
<br>
141         for (i = 0; i &lt; cls-&gt;cls_depth; i++) {
<br>
(gdb) 
<br>
142             if( NULL != c-&gt;cls_construct ) {
<br>
(gdb) 
<br>
143                 --cls_construct_array;
<br>
(gdb) 
<br>
144                 *cls_construct_array = c-&gt;cls_construct;
<br>
(gdb) 
<br>
146             if( NULL != c-&gt;cls_destruct ) {
<br>
(gdb) 
<br>
147                 *cls_destruct_array = c-&gt;cls_destruct;
<br>
(gdb) 
<br>
148                 cls_destruct_array++;
<br>
(gdb) 
<br>
150             c = c-&gt;cls_parent;
<br>
(gdb) 
<br>
141         for (i = 0; i &lt; cls-&gt;cls_depth; i++) {
<br>
(gdb) 
<br>
142             if( NULL != c-&gt;cls_construct ) {
<br>
(gdb) 
<br>
146             if( NULL != c-&gt;cls_destruct ) {
<br>
(gdb) 
<br>
150             c = c-&gt;cls_parent;
<br>
(gdb) 
<br>
141         for (i = 0; i &lt; cls-&gt;cls_depth; i++) {
<br>
(gdb) 
<br>
152         *cls_destruct_array = NULL;  /* end marker for the destructors */
<br>
(gdb) 
<br>
154         cls-&gt;cls_initialized = 1;
<br>
(gdb) 
<br>
155         save_class(cls);
<br>
(gdb) 
<br>
save_class (cls=0xffffffff7f14c7d8 &lt;orte_state_caddy_t_class&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-dev-124-g91e9686/opal/class/opal_object.c:188
<br>
188         if (num_classes &gt;= max_classes) {
<br>
(gdb) 
<br>
189             expand_array();
<br>
(gdb) 
<br>
expand_array () at ../../openmpi-dev-124-g91e9686/opal/class/opal_object.c:201
<br>
201         max_classes += increment;
<br>
(gdb) 
<br>
202         classes = (void**)realloc(classes, sizeof(opal_class_t*) * 
<br>
max_classes);
<br>
(gdb) 
<br>
203         if (NULL == classes) {
<br>
(gdb) 
<br>
207         for (i = num_classes; i &lt; max_classes; ++i) {
<br>
(gdb) 
<br>
208             classes[i] = NULL;
<br>
(gdb) 
<br>
207         for (i = num_classes; i &lt; max_classes; ++i) {
<br>
(gdb) 
<br>
208             classes[i] = NULL;
<br>
(gdb) 
<br>
207         for (i = num_classes; i &lt; max_classes; ++i) {
<br>
(gdb) 
<br>
208             classes[i] = NULL;
<br>
(gdb) 
<br>
207         for (i = num_classes; i &lt; max_classes; ++i) {
<br>
(gdb) 
<br>
208             classes[i] = NULL;
<br>
(gdb) 
<br>
207         for (i = num_classes; i &lt; max_classes; ++i) {
<br>
(gdb) 
<br>
208             classes[i] = NULL;
<br>
(gdb) 
<br>
207         for (i = num_classes; i &lt; max_classes; ++i) {
<br>
(gdb) 
<br>
208             classes[i] = NULL;
<br>
(gdb) 
<br>
207         for (i = num_classes; i &lt; max_classes; ++i) {
<br>
(gdb) 
<br>
208             classes[i] = NULL;
<br>
(gdb) 
<br>
207         for (i = num_classes; i &lt; max_classes; ++i) {
<br>
(gdb) 
<br>
208             classes[i] = NULL;
<br>
(gdb) 
<br>
207         for (i = num_classes; i &lt; max_classes; ++i) {
<br>
(gdb) 
<br>
208             classes[i] = NULL;
<br>
(gdb) 
<br>
207         for (i = num_classes; i &lt; max_classes; ++i) {
<br>
(gdb) 
<br>
208             classes[i] = NULL;
<br>
(gdb) 
<br>
207         for (i = num_classes; i &lt; max_classes; ++i) {
<br>
(gdb) 
<br>
210     }
<br>
(gdb) 
<br>
save_class (cls=0xffffffff7f14c7d8 &lt;orte_state_caddy_t_class&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-dev-124-g91e9686/opal/class/opal_object.c:192
<br>
192         classes[num_classes] = cls-&gt;cls_construct_array;
<br>
(gdb) 
<br>
193         ++num_classes;
<br>
(gdb) 
<br>
194     }
<br>
(gdb) 
<br>
opal_class_initialize (cls=0xffffffff7f14c7d8 &lt;orte_state_caddy_t_class&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-dev-124-g91e9686/opal/class/opal_object.c:159
<br>
159         opal_atomic_unlock(&amp;class_lock);
<br>
(gdb) 
<br>
opal_atomic_unlock (lock=0xffffffff7ee89bf0 &lt;class_lock&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-dev-124-g91e9686/opal/include/opal/sys/atomic_impl.h:409
<br>
409        opal_atomic_wmb();
<br>
(gdb) 
<br>
opal_atomic_wmb () at 
<br>
../../openmpi-dev-124-g91e9686/opal/include/opal/sys/sparcv9/atomic.h:69
<br>
69          MEMBAR(&quot;#StoreStore&quot;);
<br>
(gdb) 
<br>
70      }
<br>
(gdb) 
<br>
opal_atomic_unlock (lock=0xffffffff7ee89bf0 &lt;class_lock&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-dev-124-g91e9686/opal/include/opal/sys/atomic_impl.h:410
<br>
410        lock-&gt;u.lock=OPAL_ATOMIC_UNLOCKED;
<br>
(gdb) 
<br>
411     }
<br>
(gdb) 
<br>
opal_class_initialize (cls=0xffffffff7f14c7d8 &lt;orte_state_caddy_t_class&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-dev-124-g91e9686/opal/class/opal_object.c:160
<br>
160     }
<br>
(gdb) 
<br>
opal_obj_new (cls=0xffffffff7f14c7d8 &lt;orte_state_caddy_t_class&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-124-g91e9686/opal/class/opal_object.h:475
<br>
475         if (NULL != object) {
<br>
(gdb) 
<br>
476             object-&gt;obj_class = cls;
<br>
(gdb) 
<br>
477             object-&gt;obj_reference_count = 1;
<br>
(gdb) 
<br>
478             opal_obj_run_constructors(object);
<br>
(gdb) 
<br>
opal_obj_run_constructors (object=0x1001bfcf0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-124-g91e9686/opal/class/opal_object.h:420
<br>
420         assert(NULL != object-&gt;obj_class);
<br>
(gdb) 
<br>
422         cls_construct = object-&gt;obj_class-&gt;cls_construct_array;
<br>
(gdb) 
<br>
423         while( NULL != *cls_construct ) {
<br>
(gdb) 
<br>
424             (*cls_construct)(object);
<br>
(gdb) 
<br>
orte_state_caddy_construct (caddy=0x1001bfcf0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at 
<br>
../../../../openmpi-dev-124-g91e9686/orte/mca/state/base/state_base_frame.c:84
<br>
84          memset(&amp;caddy-&gt;ev, 0, sizeof(opal_event_t));
<br>
(gdb) 
<br>
85          caddy-&gt;jdata = NULL;
<br>
(gdb) 
<br>
86      }
<br>
(gdb) 
<br>
opal_obj_run_constructors (object=0x1001bfcf0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-124-g91e9686/opal/class/opal_object.h:425
<br>
425             cls_construct++;
<br>
(gdb) 
<br>
423         while( NULL != *cls_construct ) {
<br>
(gdb) 
<br>
427     }
<br>
(gdb) 
<br>
opal_obj_new (cls=0xffffffff7f14c7d8 &lt;orte_state_caddy_t_class&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-124-g91e9686/opal/class/opal_object.h:480
<br>
480         return object;
<br>
(gdb) 
<br>
481     }
<br>
(gdb) 
<br>
opal_obj_new_debug (type=0xffffffff7f14c7d8 &lt;orte_state_caddy_t_class&gt;, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;file=0xffffffff7f034c08 
<br>
&quot;../../../../openmpi-dev-124-g91e9686/orte/mca/state/base/state_base_fns.c&quot;, 
<br>
line=62) at ../../../../openmpi-dev-124-g91e9686/opal/class/opal_object.h:250
<br>
250         object-&gt;obj_magic_id = OPAL_OBJ_MAGIC_ID;
<br>
(gdb) 
<br>
251         object-&gt;cls_init_file_name = file;
<br>
(gdb) 
<br>
252         object-&gt;cls_init_lineno = line;
<br>
(gdb) 
<br>
253         return object;
<br>
(gdb) 
<br>
254     }
<br>
(gdb) 
<br>
orte_state_base_activate_job_state (jdata=0x100125250, state=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at 
<br>
../../../../openmpi-dev-124-g91e9686/orte/mca/state/base/state_base_fns.c:63
<br>
63                  if (NULL != jdata) {
<br>
(gdb) 
<br>
64                      caddy-&gt;jdata = jdata;
<br>
(gdb) 
<br>
65                      caddy-&gt;job_state = state;
<br>
(gdb) 
<br>
66                      OBJ_RETAIN(jdata);
<br>
(gdb) 
<br>
opal_obj_update (inc=1, object=0x100125250)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-124-g91e9686/opal/class/opal_object.h:497
<br>
497         return opal_atomic_add_32(&amp;(object-&gt;obj_reference_count), inc);
<br>
(gdb) 
<br>
opal_atomic_add_32 (addr=0x100125260, delta=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at 
<br>
../../../../openmpi-dev-124-g91e9686/opal/include/opal/sys/atomic_impl.h:63
<br>
63            oldval = *addr;
<br>
(gdb) 
<br>
64         } while (0 == opal_atomic_cmpset_32(addr, oldval, oldval + delta));
<br>
(gdb) 
<br>
opal_atomic_cmpset_32 (addr=0x100125260, oldval=1, newval=2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at 
<br>
../../../../openmpi-dev-124-g91e9686/opal/include/opal/sys/sparcv9/atomic.h:93
<br>
93         int32_t ret = newval;
<br>
(gdb) 
<br>
95         __asm__ __volatile__(&quot;casa [%1] &quot; ASI_P &quot;, %2, %0&quot;
<br>
(gdb) 
<br>
98         return (ret == oldval);
<br>
(gdb) 
<br>
99      }
<br>
(gdb) 
<br>
opal_atomic_add_32 (addr=0x100125260, delta=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at 
<br>
../../../../openmpi-dev-124-g91e9686/opal/include/opal/sys/atomic_impl.h:65
<br>
65         return (oldval + delta);
<br>
(gdb) 
<br>
66      }
<br>
(gdb) 
<br>
orte_state_base_activate_job_state (jdata=0x100125250, state=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at 
<br>
../../../../openmpi-dev-124-g91e9686/orte/mca/state/base/state_base_fns.c:66
<br>
66                      OBJ_RETAIN(jdata);
<br>
(gdb) 
<br>
68                  opal_event_set(orte_event_base, &amp;caddy-&gt;ev, -1, 
<br>
OPAL_EV_WRITE, s-&gt;cbfunc, caddy);
<br>
(gdb) 
<br>
69                  opal_event_set_priority(&amp;caddy-&gt;ev, s-&gt;priority);
<br>
(gdb) 
<br>
70                  opal_event_active(&amp;caddy-&gt;ev, OPAL_EV_WRITE, 1);
<br>
(gdb) 
<br>
71                  return;
<br>
(gdb) 
<br>
105     }
<br>
(gdb) 
<br>
rsh_launch (jdata=0x100125250)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at 
<br>
../../../../../openmpi-dev-124-g91e9686/orte/mca/plm/rsh/plm_rsh_module.c:883
<br>
883         return ORTE_SUCCESS;
<br>
(gdb) 
<br>
884     }
<br>
(gdb) 
<br>
orterun (argc=5, argv=0xffffffff7fffe0d8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-124-g91e9686/orte/tools/orterun/orterun.c:1084
<br>
1084        while (orte_event_base_active) {
<br>
(gdb) 
<br>
1085            opal_event_loop(orte_event_base, OPAL_EVLOOP_ONCE);
<br>
(gdb) 
<br>
1084        while (orte_event_base_active) {
<br>
(gdb) 
<br>
1085            opal_event_loop(orte_event_base, OPAL_EVLOOP_ONCE);
<br>
(gdb) 
<br>
1084        while (orte_event_base_active) {
<br>
(gdb) 
<br>
1085            opal_event_loop(orte_event_base, OPAL_EVLOOP_ONCE);
<br>
(gdb) 
<br>
#
<br>
# A fatal error has been detected by the Java Runtime Environment:
<br>
#
<br>
#  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=13080, tid=2
<br>
#
<br>
# JRE version: Java(TM) SE Runtime Environment (8.0-b132) (build 1.8.0-b132)
<br>
# Java VM: Java HotSpot(TM) 64-Bit Server VM (25.0-b70 mixed mode solaris-sparc 
<br>
compressed oops)
<br>
# Problematic frame:
<br>
# 1084      while (orte_event_base_active) {
<br>
(gdb) 
<br>
1085            opal_event_loop(orte_event_base, OPAL_EVLOOP_ONCE);
<br>
(gdb) 
<br>
C  [libc.so.1+0x3c7f0]  strlen+0x50
<br>
#
<br>
# Failed to write core dump. Core dumps have been disabled. To enable core 
<br>
dumping, try &quot;ulimit -c unlimited&quot; before starting Java again
<br>
#
<br>
# An error report file with more information is saved as:
<br>
# /home/fd1026/work/skripte/master/parallel/prog/mpi/java/hs_err_pid13080.log
<br>
#
<br>
# If you would like to submit a bug report, please visit:
<br>
#   <a href="http://bugreport.sun.com/bugreport/crash.jsp">http://bugreport.sun.com/bugreport/crash.jsp</a>
<br>
# The crash happened outside the Java Virtual Machine in native code.
<br>
# See problematic frame for where to report the bug.
<br>
#
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 0 with PID 0 on node tyr exited on signal 6 
<br>
(Abort).
<br>
--------------------------------------------------------------------------
<br>
1084        while (orte_event_base_active) {
<br>
(gdb) 
<br>
1089        orte_odls.kill_local_procs(NULL);
<br>
(gdb) 
<br>
<p><p>Thank you very much for any help in advance.
<br>
<p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25544.php">Bill Broadley: "[OMPI users] New ib locked pages behavior?"</a>
<li><strong>Previous message:</strong> <a href="25542.php">Nathan Hjelm: "Re: [OMPI users] large memory usage and hangs when preconnecting beyond 1000 cpus"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25550.php">Kawashima, Takahiro: "Re: [OMPI users] which info is needed for SIGSEGV in Java for openmpi-dev-124-g91e9686 on Solaris"</a>
<li><strong>Reply:</strong> <a href="25550.php">Kawashima, Takahiro: "Re: [OMPI users] which info is needed for SIGSEGV in Java for openmpi-dev-124-g91e9686 on Solaris"</a>
<li><strong>Maybe reply:</strong> <a href="25553.php">Siegmar Gross: "Re: [OMPI users] which info is needed for SIGSEGV in Java for openmpi-dev-124-g91e9686 on Solaris"</a>
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
