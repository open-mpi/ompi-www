<?
$subject_val = "Re: [OMPI users] SIGBUS in openmpi-dev-178-ga16c1e4 on Solaris 10 Sparc";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 29 00:22:36 2014" -->
<!-- isoreceived="20141029042236" -->
<!-- sent="Wed, 29 Oct 2014 13:22:35 +0900" -->
<!-- isosent="20141029042235" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SIGBUS in openmpi-dev-178-ga16c1e4 on Solaris 10 Sparc" -->
<!-- id="54506B8B.9030007_at_iferc.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="201410282024.s9SKOof5025563_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] SIGBUS in openmpi-dev-178-ga16c1e4 on Solaris 10 Sparc<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-29 00:22:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25639.php">Siegmar Gross: "Re: [OMPI users] SIGBUS in openmpi-dev-178-ga16c1e4 on Solaris 10Sparc"</a>
<li><strong>Previous message:</strong> <a href="25637.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<li><strong>In reply to:</strong> <a href="25635.php">Siegmar Gross: "Re: [OMPI users] SIGBUS in openmpi-dev-178-ga16c1e4 on Solaris 10 Sparc"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Siegmar,
<br>
<p>thanks for the detailled report.
<br>
<p>i think i found the alignment issue and fixed it (commit
<br>
8c556bbc66c06fb19c6e46c67624bac1d6719b12)
<br>
<p>here is attached the patch that fixes the issue.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/10/29 5:24, Siegmar Gross wrote:
<br>
<span class="quotelev1">&gt; Hi Gilles,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; From the jvm logs, there is an alignment error in native_get_attr
</span><br>
<span class="quotelev2">&gt;&gt; but i could not find it by reading the source code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could you please do
</span><br>
<span class="quotelev2">&gt;&gt; ulimit -c unlimited
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec ...
</span><br>
<span class="quotelev2">&gt;&gt; and then
</span><br>
<span class="quotelev2">&gt;&gt; gdb &lt;your path to java&gt;/bin/java core
</span><br>
<span class="quotelev2">&gt;&gt; And run bt on all threads until you get a line number in native_get_attr
</span><br>
<span class="quotelev1">&gt; I found pmix_native.c:1131 in native_get_attr, attached gdb to the
</span><br>
<span class="quotelev1">&gt; Java process and set a breakpoint to this line. From there I single
</span><br>
<span class="quotelev1">&gt; stepped until I got SIGSEGV, so that you can see what happened.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) b pmix_native.c:1131
</span><br>
<span class="quotelev1">&gt; No source file named pmix_native.c.
</span><br>
<span class="quotelev1">&gt; Make breakpoint pending on future shared library load? (y or [n]) y
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Breakpoint 1 (pmix_native.c:1131) pending.
</span><br>
<span class="quotelev1">&gt; (gdb) thread 14
</span><br>
<span class="quotelev1">&gt; [Switching to thread 14 (Thread 2 (LWP 2))]
</span><br>
<span class="quotelev1">&gt; #0  0xffffffff7eadc6b0 in __pollsys () from /lib/sparcv9/libc.so.1
</span><br>
<span class="quotelev1">&gt; (gdb) f 3
</span><br>
<span class="quotelev1">&gt; #3  0xfffffffee5122230 in JNI_OnLoad (vm=0xffffffff7e57e9d8 &lt;main_vm&gt;, 
</span><br>
<span class="quotelev1">&gt;     reserved=0x0)
</span><br>
<span class="quotelev1">&gt;     at ../../../../../openmpi-dev-178-ga16c1e4/ompi/mpi/java/c/mpi_MPI.c:128
</span><br>
<span class="quotelev1">&gt; 128             while (_dbg) poll(NULL, 0, 1);
</span><br>
<span class="quotelev1">&gt; (gdb) set _dbg=0
</span><br>
<span class="quotelev1">&gt; (gdb) c
</span><br>
<span class="quotelev1">&gt; Continuing.
</span><br>
<span class="quotelev1">&gt; [New LWP    13        ]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Breakpoint 1, native_get_attr (attr=0xfffffffee2e05db0 &quot;pmix.jobid&quot;, 
</span><br>
<span class="quotelev1">&gt;     kv=0xffffffff7b4ff028)
</span><br>
<span class="quotelev1">&gt;     at ../../../../../openmpi-dev-178-ga16c1e4/opal/mca/pmix/native/pmix_native.c:1131
</span><br>
<span class="quotelev1">&gt; 1131            OPAL_OUTPUT_VERBOSE((1, opal_pmix_base_framework.framework_output,
</span><br>
<span class="quotelev1">&gt; (gdb) s
</span><br>
<span class="quotelev1">&gt; opal_proc_local_get () at ../../../openmpi-dev-178-ga16c1e4/opal/util/proc.c:80
</span><br>
<span class="quotelev1">&gt; 80          return opal_proc_my_name;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 81      }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; _process_name_print_for_opal (procname=14259803799433510912)
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-178-ga16c1e4/orte/runtime/orte_init.c:64
</span><br>
<span class="quotelev1">&gt; 64          orte_process_name_t* rte_name = (orte_process_name_t*)&amp;procname;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 65          return ORTE_NAME_PRINT(rte_name);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; orte_util_print_name_args (name=0xffffffff7b4feb90)
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-178-ga16c1e4/orte/util/name_fns.c:122
</span><br>
<span class="quotelev1">&gt; 122         if (NULL == name) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 142         job = orte_util_print_jobids(name-&gt;jobid);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; orte_util_print_jobids (job=3320119297)
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-178-ga16c1e4/orte/util/name_fns.c:170
</span><br>
<span class="quotelev1">&gt; 170         ptr = get_print_name_buffer();
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; get_print_name_buffer ()
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-178-ga16c1e4/orte/util/name_fns.c:92
</span><br>
<span class="quotelev1">&gt; 92          if (!fns_init) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 101         ret = opal_tsd_getspecific(print_args_tsd_key, (void**)&amp;ptr);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; opal_tsd_getspecific (key=4, valuep=0xffffffff7b4fe8a0)
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-178-ga16c1e4/opal/threads/tsd.h:163
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
<span class="quotelev1">&gt; get_print_name_buffer ()
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-178-ga16c1e4/orte/util/name_fns.c:102
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
<span class="quotelev1">&gt; orte_util_print_jobids (job=3320119297)
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-178-ga16c1e4/orte/util/name_fns.c:172
</span><br>
<span class="quotelev1">&gt; 172         if (NULL == ptr) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 178         if (ORTE_PRINT_NAME_ARG_NUM_BUFS == ptr-&gt;cntr) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 179             ptr-&gt;cntr = 0;
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
<span class="quotelev1">&gt; orte_util_print_name_args (name=0xffffffff7b4feb90)
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-178-ga16c1e4/orte/util/name_fns.c:143
</span><br>
<span class="quotelev1">&gt; 143         vpid = orte_util_print_vpids(name-&gt;vpid);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; orte_util_print_vpids (vpid=0)
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-178-ga16c1e4/orte/util/name_fns.c:260
</span><br>
<span class="quotelev1">&gt; 260         ptr = get_print_name_buffer();
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; get_print_name_buffer ()
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-178-ga16c1e4/orte/util/name_fns.c:92
</span><br>
<span class="quotelev1">&gt; 92          if (!fns_init) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 101         ret = opal_tsd_getspecific(print_args_tsd_key, (void**)&amp;ptr);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; opal_tsd_getspecific (key=4, valuep=0xffffffff7b4fe8b0)
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-178-ga16c1e4/opal/threads/tsd.h:163
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
<span class="quotelev1">&gt; get_print_name_buffer ()
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-178-ga16c1e4/orte/util/name_fns.c:102
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
<span class="quotelev1">&gt; orte_util_print_vpids (vpid=0)
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-178-ga16c1e4/orte/util/name_fns.c:262
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
<span class="quotelev1">&gt; orte_util_print_name_args (name=0xffffffff7b4feb90)
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-178-ga16c1e4/orte/util/name_fns.c:146
</span><br>
<span class="quotelev1">&gt; 146         ptr = get_print_name_buffer();
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; get_print_name_buffer ()
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-178-ga16c1e4/orte/util/name_fns.c:92
</span><br>
<span class="quotelev1">&gt; 92          if (!fns_init) {
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 101         ret = opal_tsd_getspecific(print_args_tsd_key, (void**)&amp;ptr);
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; opal_tsd_getspecific (key=4, valuep=0xffffffff7b4fe970)
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-178-ga16c1e4/opal/threads/tsd.h:163
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
<span class="quotelev1">&gt; get_print_name_buffer ()
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-178-ga16c1e4/orte/util/name_fns.c:102
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
<span class="quotelev1">&gt; orte_util_print_name_args (name=0xffffffff7b4feb90)
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-178-ga16c1e4/orte/util/name_fns.c:148
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
<span class="quotelev1">&gt; _process_name_print_for_opal (procname=14259803799433510912)
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-178-ga16c1e4/orte/runtime/orte_init.c:66
</span><br>
<span class="quotelev1">&gt; 66      }
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; 0xfffffffee3210bfc in native_get_attr (attr=0xfffffffee2e05db0 &quot;pmix.jobid&quot;, 
</span><br>
<span class="quotelev1">&gt;     kv=0xffffffff7b4ff028)
</span><br>
<span class="quotelev1">&gt;     at ../../../../../openmpi-dev-178-ga16c1e4/opal/mca/pmix/native/pmix_native.c:1131
</span><br>
<span class="quotelev1">&gt; 1131            OPAL_OUTPUT_VERBOSE((1, opal_pmix_base_framework.framework_output,
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0xfffffffee3210bfc in native_get_attr (
</span><br>
<span class="quotelev1">&gt;     attr=0xfffffffee2e05db0 &quot;pmix.jobid&quot;, kv=0xffffffff7b4ff028)
</span><br>
<span class="quotelev1">&gt;     at ../../../../../openmpi-dev-178-ga16c1e4/opal/mca/pmix/native/pmix_native.c:1131
</span><br>
<span class="quotelev1">&gt; #1  0xfffffffee2e033e4 in rte_init ()
</span><br>
<span class="quotelev1">&gt;     at ../../../../../openmpi-dev-178-ga16c1e4/orte/mca/ess/pmi/ess_pmi_module.c:170
</span><br>
<span class="quotelev1">&gt; #2  0xfffffffee4a340c0 in orte_init (pargc=0x0, pargv=0x0, flags=32)
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-178-ga16c1e4/orte/runtime/orte_init.c:239
</span><br>
<span class="quotelev1">&gt; #3  0xfffffffee4d9a164 in ompi_mpi_init (argc=0, argv=0x1003f5850, 
</span><br>
<span class="quotelev1">&gt;     requested=0, provided=0xffffffff7b4ff44c)
</span><br>
<span class="quotelev1">&gt;     at ../../openmpi-dev-178-ga16c1e4/ompi/runtime/ompi_mpi_init.c:480
</span><br>
<span class="quotelev1">&gt; #4  0xfffffffee4dfbb30 in PMPI_Init (argc=0xffffffff7b4ff554, 
</span><br>
<span class="quotelev1">&gt;     argv=0xffffffff7b4ff548) at pinit.c:84
</span><br>
<span class="quotelev1">&gt; #5  0xfffffffee5122f6c in Java_mpi_MPI_Init_1jni (env=0x10010e9e0, 
</span><br>
<span class="quotelev1">&gt;     clazz=0xffffffff7b4ff760, argv=0xffffffff7b4ff858)
</span><br>
<span class="quotelev1">&gt;     at ../../../../../openmpi-dev-178-ga16c1e4/ompi/mpi/java/c/mpi_MPI.c:271
</span><br>
<span class="quotelev1">&gt; #6  0xffffffff6b810738 in ?? ()
</span><br>
<span class="quotelev1">&gt; #7  0xffffffff6b810738 in ?? ()
</span><br>
<span class="quotelev1">&gt; Backtrace stopped: previous frame identical to this frame (corrupt stack?)
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hopefully the above output is helpful. Please let me know if you
</span><br>
<span class="quotelev1">&gt; need something else.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; today I installed openmpi-dev-178-ga16c1e4 on Solaris 10 Sparc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with gcc-4.9.1 and Java 8. Now a very simple Java program works
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as expected, but other Java programs still break. I removed the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; warnings about &quot;shmem.jar&quot; and used the following configure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; command.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr openmpi-dev-178-ga16c1e4-SunOS.sparc.64_gcc 406 head config.log \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  | grep openmpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ ../openmpi-dev-178-ga16c1e4/configure
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --prefix=/usr/local/openmpi-1.9.0_64_gcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --libdir=/usr/local/openmpi-1.9.0_64_gcc/lib64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --with-jdk-bindir=/usr/local/jdk1.8.0/bin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --with-jdk-headers=/usr/local/jdk1.8.0/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  JAVA_HOME=/usr/local/jdk1.8.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  LDFLAGS=-m64 CC=gcc CXX=g++ FC=gfortran CFLAGS=-m64 -D_REENTRANT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  CXXFLAGS=-m64 FCFLAGS=-m64 CPP=cpp CXXCPP=cpp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  CPPFLAGS= -D_REENTRANT CXXCPPFLAGS=
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --enable-mpi-cxx --enable-cxx-exceptions --enable-mpi-java
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --enable-mpi-thread-multiple --with-threads=posix
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --with-hwloc=internal
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --without-verbs --with-wrapper-cflags=-std=c11 -m64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --with-wrapper-cxxflags=-m64 --enable-debug
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr java 290 ompi_info | grep -e &quot;Open MPI repo revision:&quot; -e &quot;C compiler version:&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Open MPI repo revision: dev-178-ga16c1e4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      C compiler version: 4.9.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; regarding the BUS error reported by Siegmar, i also commited
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 62bde1fcb554079143030bb305512c236672386f
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in order to fix it (this is based on code review only, i have no sparc64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hardware to test it is enough)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'll test it, when a new nightly snapshot is available for the trunk.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr java 291 mpijavac InitFinalizeMain.java 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr java 292 mpiexec -np 1 java InitFinalizeMain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr java 293 mpijavac BcastIntMain.java 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr java 294 mpiexec -np 2 java BcastIntMain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #  SIGBUS (0xa) at pc=0xfffffffee3210bfc, pid=24792, tid=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr java 296 /usr/local/gdb-7.6.1_64_gcc/bin/gdb mpiexec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) run -np 2 java BcastIntMain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Starting program: /usr/local/openmpi-1.9.0_64_gcc/bin/mpiexec -np 2 java BcastIntMain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [New Thread 1 (LWP 1)]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [New LWP    2        ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #  SIGBUS (0xa) at pc=0xfffffffee3210bfc, pid=24814, tid=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # JRE version: Java(TM) SE Runtime Environment (8.0-b132) (build 1.8.0-b132)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Java VM: Java HotSpot(TM) 64-Bit Server VM (25.0-b70 mixed mode solaris-sparc compressed oops)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Problematic frame:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # C  [mca_pmix_native.so+0x10bfc]  native_get_attr+0x3000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Failed to write core dump. Core dumps have been disabled. To enable core dumping, try &quot;ulimit -c unlimited&quot; 
</span><br>
<span class="quotelev1">&gt; before starting Java again
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # An error report file with more information is saved as:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # /home/fd1026/work/skripte/master/parallel/prog/mpi/java/hs_err_pid24814.log
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #  SIGBUS (0xa) at pc=0xfffffffee3210bfc, pid=24812, tid=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # JRE version: Java(TM) SE Runtime Environment (8.0-b132) (build 1.8.0-b132)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Java VM: Java HotSpot(TM) 64-Bit Server VM (25.0-b70 mixed mode solaris-sparc compressed oops)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Problematic frame:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # C  [mca_pmix_native.so+0x10bfc]  native_get_attr+0x3000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Failed to write core dump. Core dumps have been disabled. To enable core dumping, try &quot;ulimit -c unlimited&quot; 
</span><br>
<span class="quotelev1">&gt; before starting Java again
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # An error report file with more information is saved as:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # /home/fd1026/work/skripte/master/parallel/prog/mpi/java/hs_err_pid24812.log
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # If you would like to submit a bug report, please visit:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #   <a href="http://bugreport.sun.com/bugreport/crash.jsp">http://bugreport.sun.com/bugreport/crash.jsp</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # The crash happened outside the Java Virtual Machine in native code.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # See problematic frame for where to report the bug.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr:24814] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr:24814] Signal: Abort (6)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr:24814] Signal code:  (-1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libopen-pal.so.0.0.0:opal_backtrace_print+0x2c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libopen-pal.so.0.0.0:0xdc2d4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/sparcv9/libc.so.1:0xd8b98
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/sparcv9/libc.so.1:0xcc70c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/sparcv9/libc.so.1:0xcc918
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/sparcv9/libc.so.1:0xdd2d0 [ Signal 6 (ABRT)]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/sparcv9/libc.so.1:_thr_sigsetmask+0x1c4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/sparcv9/libc.so.1:sigprocmask+0x28
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/sparcv9/libc.so.1:_sigrelse+0x5c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/sparcv9/libc.so.1:abort+0xc0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_sparc/jdk1.8.0/jre/lib/sparcv9/server/libjvm.so:0xb3cb90
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_sparc/jdk1.8.0/jre/lib/sparcv9/server/libjvm.so:0xd97a04
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_sparc/jdk1.8.0/jre/lib/sparcv9/server/libjvm.so:JVM_handle_solaris_signal+0xc0c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_sparc/jdk1.8.0/jre/lib/sparcv9/server/libjvm.so:0xb44e84
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/sparcv9/libc.so.1:0xd8b98
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/sparcv9/libc.so.1:0xcc70c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/sparcv9/libc.so.1:0xcc918
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/openmpi/mca_pmix_native.so:0x10bfc [ Signal 10 (BUS)]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/openmpi/mca_ess_pmi.so:0x33dc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libopen-rte.so.0.0.0:orte_init+0x67c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libmpi.so.0.0.0:ompi_mpi_init+0x374
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libmpi.so.0.0.0:PMPI_Init+0x2a8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libmpi_java.so.0.0.0:Java_mpi_MPI_Init_1jni+0x1a0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0xffffffff6b810730
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0xffffffff6b8106d4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0xffffffff6b8078a8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0xffffffff6b8078a8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0xffffffff6b80024c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_sparc/jdk1.8.0/jre/lib/sparcv9/server/libjvm.so:0x6fd4e8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_sparc/jdk1.8.0/jre/lib/sparcv9/server/libjvm.so:0x79331c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_sparc/jdk1.8.0/lib/sparcv9/jli/libjli.so:0x7290
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/sparcv9/libc.so.1:0xd8a6c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr:24814] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec noticed that process rank 1 with PID 0 on node tyr exited on signal 6 (Abort).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [LWP    2         exited]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [New Thread 2        ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Switching to Thread 1 (LWP 1)]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sol_thread_fetch_registers: td_ta_map_id2thr: no thread can be found to satisfy query
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #0  0xffffffff7f6173d0 in rtld_db_dlactivity () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #1  0xffffffff7f6175a8 in rd_event () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #2  0xffffffff7f618950 in lm_delete () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #3  0xffffffff7f6226bc in remove_so () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #4  0xffffffff7f624574 in remove_hdl () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #5  0xffffffff7f61d97c in dlclose_core () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #6  0xffffffff7f61d9d4 in dlclose_intn () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #7  0xffffffff7f61db0c in dlclose () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #8  0xffffffff7ec87ca0 in vm_close ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   from /usr/local/openmpi-1.9.0_64_gcc/lib64/libopen-pal.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #9  0xffffffff7ec85274 in lt_dlclose ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   from /usr/local/openmpi-1.9.0_64_gcc/lib64/libopen-pal.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #10 0xffffffff7ecaa5dc in ri_destructor (obj=0x100187b70)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_component_repository.c:382
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #11 0xffffffff7eca8fd8 in opal_obj_run_destructors (object=0x100187b70)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    at ../../../../openmpi-dev-178-ga16c1e4/opal/class/opal_object.h:446
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #12 0xffffffff7eca9eac in mca_base_component_repository_release (
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    component=0xffffffff7b1236f0 &lt;mca_oob_tcp_component&gt;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_component_repository.c:240
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #13 0xffffffff7ecac17c in mca_base_component_unload (
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    component=0xffffffff7b1236f0 &lt;mca_oob_tcp_component&gt;, output_id=-1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_components_close.c:47
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #14 0xffffffff7ecac210 in mca_base_component_close (
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    component=0xffffffff7b1236f0 &lt;mca_oob_tcp_component&gt;, output_id=-1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_components_close.c:60
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #15 0xffffffff7ecac2e4 in mca_base_components_close (output_id=-1, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    components=0xffffffff7f14bc58 &lt;orte_oob_base_framework+80&gt;, skip=0x0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_components_close.c:86
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #16 0xffffffff7ecac24c in mca_base_framework_components_close (
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    framework=0xffffffff7f14bc08 &lt;orte_oob_base_framework&gt;, skip=0x0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_components_close.c:66
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #17 0xffffffff7efcaf80 in orte_oob_base_close ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    at ../../../../openmpi-dev-178-ga16c1e4/orte/mca/oob/base/oob_base_frame.c:112
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #18 0xffffffff7ecc0d74 in mca_base_framework_close (
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    framework=0xffffffff7f14bc08 &lt;orte_oob_base_framework&gt;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_framework.c:187
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #19 0xffffffff7be07858 in rte_finalize ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    at ../../../../../openmpi-dev-178-ga16c1e4/orte/mca/ess/hnp/ess_hnp_module.c:857
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #20 0xffffffff7ef338bc in orte_finalize ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    at ../../openmpi-dev-178-ga16c1e4/orte/runtime/orte_finalize.c:66
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #21 0x000000010000723c in orterun (argc=5, argv=0xffffffff7fffe0d8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    at ../../../../openmpi-dev-178-ga16c1e4/orte/tools/orterun/orterun.c:1103
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #22 0x0000000100003e80 in main (argc=5, argv=0xffffffff7fffe0d8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---Type &lt;return&gt; to continue, or q &lt;return&gt; to quit---
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    at ../../../../openmpi-dev-178-ga16c1e4/orte/tools/orterun/main.c:13
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I get the same error for C programs, if they use more than
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Init and MPI_Finalize.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr small_prog 301 mpicc init_finalize.c 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr small_prog 302 mpiexec -np 1 a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr small_prog 303 mpicc column_int.c 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr small_prog 306 /usr/local/gdb-7.6.1_64_gcc/bin/gdb mpiexec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) run -np 4 a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Starting program: /usr/local/openmpi-1.9.0_64_gcc/bin/mpiexec -np 4 a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [New Thread 1 (LWP 1)]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [New LWP    2        ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr:24880] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr:24880] Signal: Bus Error (10)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr:24880] Signal code: Invalid address alignment (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr:24880] Failing at address: ffffffff7bd1c10c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libopen-pal.so.0.0.0:opal_backtrace_print+0x2c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libopen-pal.so.0.0.0:0xdc2d4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/sparcv9/libc.so.1:0xd8b98
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/sparcv9/libc.so.1:0xcc70c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/sparcv9/libc.so.1:0xcc918
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/openmpi/mca_pmix_native.so:0x10684 [ Signal 10 (BUS)]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/openmpi/mca_ess_pmi.so:0x33dc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libopen-rte.so.0.0.0:orte_init+0x67c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libmpi.so.0.0.0:ompi_mpi_init+0x374
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libmpi.so.0.0.0:PMPI_Init+0x2a8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/fd1026/work/skripte/master/parallel/prog/mpi/small_prog/a.out:main+0x20
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/fd1026/work/skripte/master/parallel/prog/mpi/small_prog/a.out:_start+0x7c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr:24880] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr:24876] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr:24876] Signal: Bus Error (10)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr:24876] Signal code: Invalid address alignment (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr:24876] Failing at address: ffffffff7bd1c10c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libopen-pal.so.0.0.0:opal_backtrace_print+0x2c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libopen-pal.so.0.0.0:0xdc2d4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/sparcv9/libc.so.1:0xd8b98
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/sparcv9/libc.so.1:0xcc70c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/sparcv9/libc.so.1:0xcc918
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/openmpi/mca_pmix_native.so:0x10684 [ Signal 10 (BUS)]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/openmpi/mca_ess_pmi.so:0x33dc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libopen-rte.so.0.0.0:orte_init+0x67c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libmpi.so.0.0.0:ompi_mpi_init+0x374
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libmpi.so.0.0.0:PMPI_Init+0x2a8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/fd1026/work/skripte/master/parallel/prog/mpi/small_prog/a.out:main+0x20
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/fd1026/work/skripte/master/parallel/prog/mpi/small_prog/a.out:_start+0x7c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr:24876] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec noticed that process rank 2 with PID 0 on node tyr exited on signal 10 (Bus Error).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [LWP    2         exited]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [New Thread 2        ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Switching to Thread 1 (LWP 1)]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sol_thread_fetch_registers: td_ta_map_id2thr: no thread can be found to satisfy query
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #0  0xffffffff7f6173d0 in rtld_db_dlactivity () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #1  0xffffffff7f6175a8 in rd_event () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #2  0xffffffff7f618950 in lm_delete () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #3  0xffffffff7f6226bc in remove_so () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #4  0xffffffff7f624574 in remove_hdl () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #5  0xffffffff7f61d97c in dlclose_core () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #6  0xffffffff7f61d9d4 in dlclose_intn () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #7  0xffffffff7f61db0c in dlclose () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #8  0xffffffff7ec87ca0 in vm_close ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   from /usr/local/openmpi-1.9.0_64_gcc/lib64/libopen-pal.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #9  0xffffffff7ec85274 in lt_dlclose ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   from /usr/local/openmpi-1.9.0_64_gcc/lib64/libopen-pal.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #10 0xffffffff7ecaa5dc in ri_destructor (obj=0x100187ae0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_component_repository.c:382
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #11 0xffffffff7eca8fd8 in opal_obj_run_destructors (object=0x100187ae0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    at ../../../../openmpi-dev-178-ga16c1e4/opal/class/opal_object.h:446
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #12 0xffffffff7eca9eac in mca_base_component_repository_release (
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    component=0xffffffff7b0236f0 &lt;mca_oob_tcp_component&gt;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_component_repository.c:240
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #13 0xffffffff7ecac17c in mca_base_component_unload (
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    component=0xffffffff7b0236f0 &lt;mca_oob_tcp_component&gt;, output_id=-1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_components_close.c:47
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #14 0xffffffff7ecac210 in mca_base_component_close (
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    component=0xffffffff7b0236f0 &lt;mca_oob_tcp_component&gt;, output_id=-1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_components_close.c:60
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #15 0xffffffff7ecac2e4 in mca_base_components_close (output_id=-1, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    components=0xffffffff7f14bc58 &lt;orte_oob_base_framework+80&gt;, skip=0x0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_components_close.c:86
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #16 0xffffffff7ecac24c in mca_base_framework_components_close (
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    framework=0xffffffff7f14bc08 &lt;orte_oob_base_framework&gt;, skip=0x0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_components_close.c:66
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #17 0xffffffff7efcaf80 in orte_oob_base_close ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    at ../../../../openmpi-dev-178-ga16c1e4/orte/mca/oob/base/oob_base_frame.c:112
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #18 0xffffffff7ecc0d74 in mca_base_framework_close (
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    framework=0xffffffff7f14bc08 &lt;orte_oob_base_framework&gt;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_framework.c:187
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #19 0xffffffff7bd07858 in rte_finalize ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    at ../../../../../openmpi-dev-178-ga16c1e4/orte/mca/ess/hnp/ess_hnp_module.c:857
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #20 0xffffffff7ef338bc in orte_finalize ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    at ../../openmpi-dev-178-ga16c1e4/orte/runtime/orte_finalize.c:66
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #21 0x000000010000723c in orterun (argc=4, argv=0xffffffff7fffe0e8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    at ../../../../openmpi-dev-178-ga16c1e4/orte/tools/orterun/orterun.c:1103
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #22 0x0000000100003e80 in main (argc=4, argv=0xffffffff7fffe0e8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    at ../../../../openmpi-dev-178-ga16c1e4/orte/tools/orterun/main.c:13
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you need any other information?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25635.php">http://www.open-mpi.org/community/lists/users/2014/10/25635.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25638/pmix.patch">pmix.patch</a>
</ul>
<!-- attachment="pmix.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25639.php">Siegmar Gross: "Re: [OMPI users] SIGBUS in openmpi-dev-178-ga16c1e4 on Solaris 10Sparc"</a>
<li><strong>Previous message:</strong> <a href="25637.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<li><strong>In reply to:</strong> <a href="25635.php">Siegmar Gross: "Re: [OMPI users] SIGBUS in openmpi-dev-178-ga16c1e4 on Solaris 10 Sparc"</a>
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
