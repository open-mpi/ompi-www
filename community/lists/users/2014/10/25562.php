<?
$subject_val = "Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686 on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 23 11:04:12 2014" -->
<!-- isoreceived="20141023150412" -->
<!-- sent="Thu, 23 Oct 2014 17:03:46 +0200 (CEST)" -->
<!-- isosent="20141023150346" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686 on Solaris" -->
<!-- id="201410231503.s9NF3kaa015578_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686 on Solaris" -->
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
<strong>Subject:</strong> Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686 on Solaris<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-23 11:03:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25563.php">Oscar Vega-Gisbert: "Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686 on Solaris"</a>
<li><strong>Previous message:</strong> <a href="25561.php">Jeff Squyres (jsquyres): "Re: [OMPI users] low CPU utilization with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25563.php">Oscar Vega-Gisbert: "Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686 on Solaris"</a>
<li><strong>Reply:</strong> <a href="25563.php">Oscar Vega-Gisbert: "Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686 on Solaris"</a>
<li><strong>Reply:</strong> <a href="25564.php">Kawashima, Takahiro: "Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686 on Solaris"</a>
<li><strong>Reply:</strong> <a href="25567.php">Gilles Gouaillardet: "Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686 on Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Oscar,
<br>
<p>do you have time to look into my problem? Probably Takahiro has a
<br>
point and gdb behaves differently on Solaris and Linux, so that
<br>
the differing outputs have no meaning. I tried to debug my Java
<br>
program, but without success so far, because I wasn't able to get
<br>
into the Java program to set a breakpoint or to see the code. Have
<br>
you succeeded to debug a mpiJava program? If so, how must I call
<br>
gdb (I normally use &quot;gdb mipexec&quot; and then &quot;run -np 1 java ...&quot;)?
<br>
What can I do to get helpful information to track the error down?
<br>
I have attached the error log file. Perhaps you can see if something
<br>
is going wrong with the Java interface. Thank you very much for your
<br>
help and any hints for the usage of gdb with mpiJava in advance.
<br>
Please let me know if I can provide anything else.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><span class="quotelev2">&gt; &gt; I think that it must have to do with MPI, because everything
</span><br>
<span class="quotelev2">&gt; &gt; works fine on Linux and my Java program works fine with an older
</span><br>
<span class="quotelev2">&gt; &gt; MPI version (openmpi-1.8.2a1r31804) as well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes. I also think it must have to do with MPI.
</span><br>
<span class="quotelev1">&gt; But java process side, not mpiexec process side.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When you run Java MPI program via mpiexec, a mpiexec process
</span><br>
<span class="quotelev1">&gt; process launch a java process. When the java process (your
</span><br>
<span class="quotelev1">&gt; Java program) calls a MPI method, native part (written in C/C++)
</span><br>
<span class="quotelev1">&gt; of the MPI library is called. It runs in java process, not in
</span><br>
<span class="quotelev1">&gt; mpiexec process. I suspect that part.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Solaris things are different.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are you saying the following difference?
</span><br>
<span class="quotelev1">&gt; After this line,
</span><br>
<span class="quotelev2">&gt; &gt; 881             ORTE_ACTIVATE_JOB_STATE(jdata, ORTE_JOB_STATE_INIT);
</span><br>
<span class="quotelev1">&gt; Linux shows
</span><br>
<span class="quotelev2">&gt; &gt; orte_job_state_to_str (state=1)
</span><br>
<span class="quotelev2">&gt; &gt;     at ../../openmpi-dev-124-g91e9686/orte/util/error_strings.c:217
</span><br>
<span class="quotelev2">&gt; &gt; 217         switch(state) {
</span><br>
<span class="quotelev1">&gt; but Solaris shows
</span><br>
<span class="quotelev2">&gt; &gt; orte_util_print_name_args (name=0x100118380 &lt;orte_process_info+104&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;     at ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:122
</span><br>
<span class="quotelev2">&gt; &gt; 122         if (NULL == name) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Each macro is defined as:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define ORTE_ACTIVATE_JOB_STATE(j, s)                                   \
</span><br>
<span class="quotelev1">&gt;     do {                                                                \
</span><br>
<span class="quotelev1">&gt;         orte_job_t *shadow=(j);                                         \
</span><br>
<span class="quotelev1">&gt;         opal_output_verbose(1, orte_state_base_framework.framework_output, \
</span><br>
<span class="quotelev1">&gt;                             &quot;%s ACTIVATE JOB %s STATE %s AT %s:%d&quot;,	\
</span><br>
<span class="quotelev1">&gt;                             ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),         \
</span><br>
<span class="quotelev1">&gt;                             (NULL == shadow) ? &quot;NULL&quot; :                 \
</span><br>
<span class="quotelev1">&gt;                             ORTE_JOBID_PRINT(shadow-&gt;jobid),		\
</span><br>
<span class="quotelev1">&gt;                             orte_job_state_to_str((s)),                 \
</span><br>
<span class="quotelev1">&gt;                             __FILE__, __LINE__);			\
</span><br>
<span class="quotelev1">&gt;         orte_state.activate_job_state(shadow, (s));                     \
</span><br>
<span class="quotelev1">&gt;     } while(0);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define ORTE_NAME_PRINT(n) \
</span><br>
<span class="quotelev1">&gt;     orte_util_print_name_args(n)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define ORTE_JOBID_PRINT(n) \
</span><br>
<span class="quotelev1">&gt;     orte_util_print_jobids(n)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure, but I think the gdb on Solaris steps into
</span><br>
<span class="quotelev1">&gt; orte_util_print_name_args, but gdb on Linux doesn't step into
</span><br>
<span class="quotelev1">&gt; orte_util_print_name_args and orte_util_print_jobids for some
</span><br>
<span class="quotelev1">&gt; reason, or orte_job_state_to_str is evaluated before them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I think it's not an important difference.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You showed the following lines.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; orterun (argc=5, argv=0xffffffff7fffe0d8)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at 
</span><br>
../../../../openmpi-dev-124-g91e9686/orte/tools/orterun/orterun.c:1084
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 1084        while (orte_event_base_active) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 1085            opal_event_loop(orte_event_base, OPAL_EVLOOP_ONCE);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not familiar with this code but I think this part (in mpiexec
</span><br>
<span class="quotelev1">&gt; process) is only waiting the java process to terminate (normally
</span><br>
<span class="quotelev1">&gt; or abnormally). So I think the problem is not in a mpiexec process
</span><br>
<span class="quotelev1">&gt; but in a java process.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Takahiro
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi Takahiro,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpiexec and java run as distinct processes. Your JRE message
</span><br>
<span class="quotelev3">&gt; &gt; &gt; says java process raises SEGV. So you should trace the java
</span><br>
<span class="quotelev3">&gt; &gt; &gt; process, not the mpiexec process. And more, your JRE message
</span><br>
<span class="quotelev3">&gt; &gt; &gt; says the crash happened outside the Java Virtual Machine in
</span><br>
<span class="quotelev3">&gt; &gt; &gt; native code. So usual Java program debugger is useless.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; You should trace native code part of the java process.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Unfortunately I don't know how to debug such one.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I think that it must have to do with MPI, because everything
</span><br>
<span class="quotelev2">&gt; &gt; works fine on Linux and my Java program works fine with an older
</span><br>
<span class="quotelev2">&gt; &gt; MPI version (openmpi-1.8.2a1r31804) as well.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; linpc1 x 112 mpiexec -np 1 java InitFinalizeMain
</span><br>
<span class="quotelev2">&gt; &gt; Hello!
</span><br>
<span class="quotelev2">&gt; &gt; linpc1 x 113 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Therefore I single stepped through the program on Linux as well
</span><br>
<span class="quotelev2">&gt; &gt; and found a difference launching the process. On Linux I get the
</span><br>
<span class="quotelev2">&gt; &gt; following sequence.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Breakpoint 1, rsh_launch (jdata=0x614aa0)
</span><br>
<span class="quotelev2">&gt; &gt;     at 
</span><br>
../../../../../openmpi-dev-124-g91e9686/orte/mca/plm/rsh/plm_rsh_module.c:876
<br>
<span class="quotelev2">&gt; &gt; 876         if (ORTE_FLAG_TEST(jdata, ORTE_JOB_FLAG_RESTART)) {
</span><br>
<span class="quotelev2">&gt; &gt; (gdb) s
</span><br>
<span class="quotelev2">&gt; &gt; 881             ORTE_ACTIVATE_JOB_STATE(jdata, ORTE_JOB_STATE_INIT);
</span><br>
<span class="quotelev2">&gt; &gt; (gdb) s
</span><br>
<span class="quotelev2">&gt; &gt; orte_job_state_to_str (state=1)
</span><br>
<span class="quotelev2">&gt; &gt;     at ../../openmpi-dev-124-g91e9686/orte/util/error_strings.c:217
</span><br>
<span class="quotelev2">&gt; &gt; 217         switch(state) {
</span><br>
<span class="quotelev2">&gt; &gt; (gdb) 
</span><br>
<span class="quotelev2">&gt; &gt; 221             return &quot;PENDING INIT&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; (gdb) 
</span><br>
<span class="quotelev2">&gt; &gt; 317     }
</span><br>
<span class="quotelev2">&gt; &gt; (gdb) 
</span><br>
<span class="quotelev2">&gt; &gt; orte_util_print_jobids (job=4294967295)
</span><br>
<span class="quotelev2">&gt; &gt;     at ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:170
</span><br>
<span class="quotelev2">&gt; &gt; 170         ptr = get_print_name_buffer();
</span><br>
<span class="quotelev2">&gt; &gt; (gdb) 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Solaris things are different.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Breakpoint 1, rsh_launch (jdata=0x100125250)
</span><br>
<span class="quotelev2">&gt; &gt;     at 
</span><br>
../../../../../openmpi-dev-124-g91e9686/orte/mca/plm/rsh/plm_rsh_module.c:876
<br>
<span class="quotelev2">&gt; &gt; 876         if (ORTE_FLAG_TEST(jdata, ORTE_JOB_FLAG_RESTART)) {
</span><br>
<span class="quotelev2">&gt; &gt; (gdb) s
</span><br>
<span class="quotelev2">&gt; &gt; 881             ORTE_ACTIVATE_JOB_STATE(jdata, ORTE_JOB_STATE_INIT);
</span><br>
<span class="quotelev2">&gt; &gt; (gdb) s
</span><br>
<span class="quotelev2">&gt; &gt; orte_util_print_name_args (name=0x100118380 &lt;orte_process_info+104&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;     at ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:122
</span><br>
<span class="quotelev2">&gt; &gt; 122         if (NULL == name) {
</span><br>
<span class="quotelev2">&gt; &gt; (gdb) 
</span><br>
<span class="quotelev2">&gt; &gt; 142         job = orte_util_print_jobids(name-&gt;jobid);
</span><br>
<span class="quotelev2">&gt; &gt; (gdb) 
</span><br>
<span class="quotelev2">&gt; &gt; orte_util_print_jobids (job=2673410048)
</span><br>
<span class="quotelev2">&gt; &gt;     at ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:170
</span><br>
<span class="quotelev2">&gt; &gt; 170         ptr = get_print_name_buffer();
</span><br>
<span class="quotelev2">&gt; &gt; (gdb) 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Is this normal or is it the reason for the crash on Solaris?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Kind regards
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Siegmar
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The log file output by JRE may help you.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; # An error report file with more information is saved as:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; # 
</span><br>
/home/fd1026/work/skripte/master/parallel/prog/mpi/java/hs_err_pid13080.log
<br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Regards,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Takahiro
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I installed openmpi-dev-124-g91e9686 on Solaris 10 Sparc with
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; gcc-4.9.1 to track down the error with my small Java program.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I started single stepping in orterun.c at line 1081 and
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; continued until I got the segmentation fault. I get
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &quot;jdata = 0x0&quot; in version openmpi-1.8.2a1r31804, which is the
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; last one which works with Java in my environment, while I get
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &quot;jdata = 0x100125250&quot; in this version. Unfortunately I don't
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; know which files or variables are important to look at. Perhaps
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; somebody can look at the following lines of code and tell me,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; which information I should provide to solve the problem. I know
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; that Solaris isn't any longer on your list of supported systems,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; but perhaps we can get it working again, if you tell me what
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; you need and I do the debugging.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; /usr/local/gdb-7.6.1_64_gcc/bin/gdb mpiexec
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; GNU gdb (GDB) 7.6.1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ...
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) run -np 1 java InitFinalizeMain 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Starting program: /usr/local/openmpi-1.9.0_64_gcc/bin/mpiexec \
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   -np 1 java InitFinalizeMain
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [New Thread 1 (LWP 1)]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [New LWP    2        ]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=13064, tid=2
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ...
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [LWP    2         exited]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [New Thread 2        ]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [Switching to Thread 1 (LWP 1)]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; sol_thread_fetch_registers: td_ta_map_id2thr: no thread can be
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   found to satisfy query
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) thread 1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [Switching to thread 1 (LWP    1        )]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #0  0xffffffff7f6173d0 in rtld_db_dlactivity () from 
</span><br>
/usr/lib/sparcv9/ld.so.1
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) b orterun.c:1081
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Breakpoint 1 at 0x1000070dc: file 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ../../../../openmpi-dev-124-g91e9686/orte/tools/orterun/orterun.c, line 
</span><br>
1081.
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) r
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; The program being debugged has been started already.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Start it from the beginning? (y or n) y
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Starting program: /usr/local/openmpi-1.9.0_64_gcc/bin/mpiexec -np 1 java 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; InitFinalizeMain
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [New Thread 1 (LWP 1)]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [New LWP    2        ]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [Switching to Thread 1 (LWP 1)]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Breakpoint 1, orterun (argc=5, argv=0xffffffff7fffe0d8)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at 
</span><br>
../../../../openmpi-dev-124-g91e9686/orte/tools/orterun/orterun.c:1081
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 1081        rc = orte_plm.spawn(jdata);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) print jdata
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; $1 = (orte_job_t *) 0x100125250
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) s
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; rsh_launch (jdata=0x100125250)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
../../../../../openmpi-dev-124-g91e9686/orte/mca/plm/rsh/plm_rsh_module.c:876
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 876         if (ORTE_FLAG_TEST(jdata, ORTE_JOB_FLAG_RESTART)) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) s    
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 881             ORTE_ACTIVATE_JOB_STATE(jdata, ORTE_JOB_STATE_INIT);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; orte_util_print_name_args (name=0x100118380 &lt;orte_process_info+104&gt;)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:122
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 122         if (NULL == name) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 142         job = orte_util_print_jobids(name-&gt;jobid);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; orte_util_print_jobids (job=2502885376) at 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:170
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 170         ptr = get_print_name_buffer();
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:92
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 92          if (!fns_init) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 101         ret = opal_tsd_getspecific(print_args_tsd_key, 
</span><br>
(void**)&amp;ptr);
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; opal_tsd_getspecific (key=1, valuep=0xffffffff7fffd990)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/opal/threads/tsd.h:163
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 163         *valuep = pthread_getspecific(key);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 164         return OPAL_SUCCESS;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 165     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:102
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 102         if (OPAL_SUCCESS != ret) return NULL;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 104         if (NULL == ptr) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 113         return (orte_print_args_buffers_t*) ptr;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 114     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; orte_util_print_jobids (job=2502885376) at 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:172
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 172         if (NULL == ptr) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 178         if (ORTE_PRINT_NAME_ARG_NUM_BUFS == ptr-&gt;cntr) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 182         if (ORTE_JOBID_INVALID == job) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 184         } else if (ORTE_JOBID_WILDCARD == job) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 187             tmp1 = ORTE_JOB_FAMILY((unsigned long)job);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 188             tmp2 = ORTE_LOCAL_JOBID((unsigned long)job);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 189             snprintf(ptr-&gt;buffers[ptr-&gt;cntr++], 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 193         return ptr-&gt;buffers[ptr-&gt;cntr-1];
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 194     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; orte_util_print_name_args (name=0x100118380 &lt;orte_process_info+104&gt;)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:143
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 143         vpid = orte_util_print_vpids(name-&gt;vpid);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; orte_util_print_vpids (vpid=0) at 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:260
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 260         ptr = get_print_name_buffer();
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:92
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 92          if (!fns_init) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 101         ret = opal_tsd_getspecific(print_args_tsd_key, 
</span><br>
(void**)&amp;ptr);
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; opal_tsd_getspecific (key=1, valuep=0xffffffff7fffd9a0)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/opal/threads/tsd.h:163
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 163         *valuep = pthread_getspecific(key);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 164         return OPAL_SUCCESS;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 165     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:102
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 102         if (OPAL_SUCCESS != ret) return NULL;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 104         if (NULL == ptr) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 113         return (orte_print_args_buffers_t*) ptr;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 114     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; orte_util_print_vpids (vpid=0) at 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:262
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 262         if (NULL == ptr) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 268         if (ORTE_PRINT_NAME_ARG_NUM_BUFS == ptr-&gt;cntr) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 272         if (ORTE_VPID_INVALID == vpid) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 274         } else if (ORTE_VPID_WILDCARD == vpid) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 277             snprintf(ptr-&gt;buffers[ptr-&gt;cntr++], 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 281         return ptr-&gt;buffers[ptr-&gt;cntr-1];
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 282     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; orte_util_print_name_args (name=0x100118380 &lt;orte_process_info+104&gt;)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:146
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 146         ptr = get_print_name_buffer();
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:92
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 92          if (!fns_init) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 101         ret = opal_tsd_getspecific(print_args_tsd_key, 
</span><br>
(void**)&amp;ptr);
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; opal_tsd_getspecific (key=1, valuep=0xffffffff7fffda60)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/opal/threads/tsd.h:163
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 163         *valuep = pthread_getspecific(key);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 164         return OPAL_SUCCESS;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 165     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:102
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 102         if (OPAL_SUCCESS != ret) return NULL;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 104         if (NULL == ptr) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 113         return (orte_print_args_buffers_t*) ptr;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 114     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; orte_util_print_name_args (name=0x100118380 &lt;orte_process_info+104&gt;)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:148
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 148         if (NULL == ptr) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 154         if (ORTE_PRINT_NAME_ARG_NUM_BUFS == ptr-&gt;cntr) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 158         snprintf(ptr-&gt;buffers[ptr-&gt;cntr++], 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 162         return ptr-&gt;buffers[ptr-&gt;cntr-1];
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 163     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; orte_util_print_jobids (job=4294967295) at 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:170
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 170         ptr = get_print_name_buffer();
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:92
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 92          if (!fns_init) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 101         ret = opal_tsd_getspecific(print_args_tsd_key, 
</span><br>
(void**)&amp;ptr);
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; opal_tsd_getspecific (key=1, valuep=0xffffffff7fffda60)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/opal/threads/tsd.h:163
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 163         *valuep = pthread_getspecific(key);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 164         return OPAL_SUCCESS;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 165     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:102
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 102         if (OPAL_SUCCESS != ret) return NULL;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 104         if (NULL == ptr) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 113         return (orte_print_args_buffers_t*) ptr;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 114     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; orte_util_print_jobids (job=4294967295) at 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:172
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 172         if (NULL == ptr) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 178         if (ORTE_PRINT_NAME_ARG_NUM_BUFS == ptr-&gt;cntr) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 182         if (ORTE_JOBID_INVALID == job) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 183             snprintf(ptr-&gt;buffers[ptr-&gt;cntr++], 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ORTE_PRINT_NAME_ARGS_MAX_SIZE, &quot;[INVALID]&quot;);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 193         return ptr-&gt;buffers[ptr-&gt;cntr-1];
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 194     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; orte_job_state_to_str (state=1) at 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/error_strings.c:217
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 217         switch(state) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 221             return &quot;PENDING INIT&quot;;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 317     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; opal_output_verbose (level=1, output_id=0, 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     format=0xffffffff7f14dd98 &lt;orte_job_states&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &quot;\336\257\276\355\336\257\276\355&quot;)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at ../../../openmpi-dev-124-g91e9686/opal/util/output.c:373
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 373             va_start(arglist, format);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 369     {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 370         if (output_id &gt;= 0 &amp;&amp; output_id &lt; OPAL_OUTPUT_MAX_STREAMS &amp;&amp;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 377     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; orte_state_base_activate_job_state (jdata=0x100125250, state=1)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
../../../../openmpi-dev-124-g91e9686/orte/mca/state/base/state_base_fns.c:33
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 33          opal_list_item_t *itm, *any=NULL, *error=NULL;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 37          for (itm = opal_list_get_first(&amp;orte_job_states);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; opal_list_get_first (list=0xffffffff7f14dd98 &lt;orte_job_states&gt;)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at ../../../../openmpi-dev-124-g91e9686/opal/class/opal_list.h:320
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 320         opal_list_item_t* item = 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (opal_list_item_t*)list-&gt;opal_list_sentinel.opal_list_next;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 324         assert(1 == item-&gt;opal_list_item_refcount);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 325         assert( list == item-&gt;opal_list_item_belong_to );
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 328         return item;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 329     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; orte_state_base_activate_job_state (jdata=0x100125250, state=1)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
../../../../openmpi-dev-124-g91e9686/orte/mca/state/base/state_base_fns.c:38
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 38               itm != opal_list_get_end(&amp;orte_job_states);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; opal_list_get_end (list=0xffffffff7f14dd98 &lt;orte_job_states&gt;)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at ../../../../openmpi-dev-124-g91e9686/opal/class/opal_list.h:399
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 399         return &amp;(list-&gt;opal_list_sentinel);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 400     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; orte_state_base_activate_job_state (jdata=0x100125250, state=1)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
../../../../openmpi-dev-124-g91e9686/orte/mca/state/base/state_base_fns.c:37
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 37          for (itm = opal_list_get_first(&amp;orte_job_states);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 40              s = (orte_state_t*)itm;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 41              if (s-&gt;job_state == ORTE_JOB_STATE_ANY) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 45              if (s-&gt;job_state == ORTE_JOB_STATE_ERROR) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 48              if (s-&gt;job_state == state) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 49                  OPAL_OUTPUT_VERBOSE((1, 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; orte_state_base_framework.framework_output,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; orte_util_print_name_args (name=0x100118380 &lt;orte_process_info+104&gt;)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:122
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 122         if (NULL == name) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 142         job = orte_util_print_jobids(name-&gt;jobid);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; orte_util_print_jobids (job=2502885376) at 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:170
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 170         ptr = get_print_name_buffer();
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:92
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 92          if (!fns_init) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 101         ret = opal_tsd_getspecific(print_args_tsd_key, 
</span><br>
(void**)&amp;ptr);
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; opal_tsd_getspecific (key=1, valuep=0xffffffff7fffd880)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/opal/threads/tsd.h:163
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 163         *valuep = pthread_getspecific(key);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 164         return OPAL_SUCCESS;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 165     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:102
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 102         if (OPAL_SUCCESS != ret) return NULL;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 104         if (NULL == ptr) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 113         return (orte_print_args_buffers_t*) ptr;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 114     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; orte_util_print_jobids (job=2502885376) at 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:172
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 172         if (NULL == ptr) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 178         if (ORTE_PRINT_NAME_ARG_NUM_BUFS == ptr-&gt;cntr) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 182         if (ORTE_JOBID_INVALID == job) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 184         } else if (ORTE_JOBID_WILDCARD == job) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 187             tmp1 = ORTE_JOB_FAMILY((unsigned long)job);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 188             tmp2 = ORTE_LOCAL_JOBID((unsigned long)job);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 189             snprintf(ptr-&gt;buffers[ptr-&gt;cntr++], 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 193         return ptr-&gt;buffers[ptr-&gt;cntr-1];
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 194     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; orte_util_print_name_args (name=0x100118380 &lt;orte_process_info+104&gt;)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:143
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 143         vpid = orte_util_print_vpids(name-&gt;vpid);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; orte_util_print_vpids (vpid=0) at 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:260
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 260         ptr = get_print_name_buffer();
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:92
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 92          if (!fns_init) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 101         ret = opal_tsd_getspecific(print_args_tsd_key, 
</span><br>
(void**)&amp;ptr);
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; opal_tsd_getspecific (key=1, valuep=0xffffffff7fffd890)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/opal/threads/tsd.h:163
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 163         *valuep = pthread_getspecific(key);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 164         return OPAL_SUCCESS;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 165     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:102
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 102         if (OPAL_SUCCESS != ret) return NULL;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 104         if (NULL == ptr) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 113         return (orte_print_args_buffers_t*) ptr;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 114     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; orte_util_print_vpids (vpid=0) at 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:262
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 262         if (NULL == ptr) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 268         if (ORTE_PRINT_NAME_ARG_NUM_BUFS == ptr-&gt;cntr) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 272         if (ORTE_VPID_INVALID == vpid) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 274         } else if (ORTE_VPID_WILDCARD == vpid) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 277             snprintf(ptr-&gt;buffers[ptr-&gt;cntr++], 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 281         return ptr-&gt;buffers[ptr-&gt;cntr-1];
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 282     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; orte_util_print_name_args (name=0x100118380 &lt;orte_process_info+104&gt;)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:146
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 146         ptr = get_print_name_buffer();
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:92
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 92          if (!fns_init) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 101         ret = opal_tsd_getspecific(print_args_tsd_key, 
</span><br>
(void**)&amp;ptr);
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; opal_tsd_getspecific (key=1, valuep=0xffffffff7fffd950)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/opal/threads/tsd.h:163
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 163         *valuep = pthread_getspecific(key);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 164         return OPAL_SUCCESS;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 165     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:102
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 102         if (OPAL_SUCCESS != ret) return NULL;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 104         if (NULL == ptr) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 113         return (orte_print_args_buffers_t*) ptr;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 114     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; orte_util_print_name_args (name=0x100118380 &lt;orte_process_info+104&gt;)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:148
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 148         if (NULL == ptr) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 154         if (ORTE_PRINT_NAME_ARG_NUM_BUFS == ptr-&gt;cntr) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 158         snprintf(ptr-&gt;buffers[ptr-&gt;cntr++], 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 162         return ptr-&gt;buffers[ptr-&gt;cntr-1];
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 163     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; orte_util_print_jobids (job=4294967295) at 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:170
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 170         ptr = get_print_name_buffer();
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:92
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 92          if (!fns_init) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 101         ret = opal_tsd_getspecific(print_args_tsd_key, 
</span><br>
(void**)&amp;ptr);
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; opal_tsd_getspecific (key=1, valuep=0xffffffff7fffd950)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/opal/threads/tsd.h:163
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 163         *valuep = pthread_getspecific(key);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 164         return OPAL_SUCCESS;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 165     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:102
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 102         if (OPAL_SUCCESS != ret) return NULL;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 104         if (NULL == ptr) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 113         return (orte_print_args_buffers_t*) ptr;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 114     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; orte_util_print_jobids (job=4294967295) at 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:172
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 172         if (NULL == ptr) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 178         if (ORTE_PRINT_NAME_ARG_NUM_BUFS == ptr-&gt;cntr) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 182         if (ORTE_JOBID_INVALID == job) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 183             snprintf(ptr-&gt;buffers[ptr-&gt;cntr++], 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ORTE_PRINT_NAME_ARGS_MAX_SIZE, &quot;[INVALID]&quot;);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 193         return ptr-&gt;buffers[ptr-&gt;cntr-1];
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 194     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; orte_job_state_to_str (state=1) at 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/error_strings.c:217
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 217         switch(state) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 221             return &quot;PENDING INIT&quot;;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 317     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; opal_output_verbose (level=1, output_id=-1, format=0x1 &lt;Address 0x1 out 
</span><br>
of 
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; bounds&gt;)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at ../../../openmpi-dev-124-g91e9686/opal/util/output.c:373
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 373             va_start(arglist, format);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 369     {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 370         if (output_id &gt;= 0 &amp;&amp; output_id &lt; OPAL_OUTPUT_MAX_STREAMS &amp;&amp;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 377     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; orte_state_base_activate_job_state (jdata=0x100125250, state=1)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
../../../../openmpi-dev-124-g91e9686/orte/mca/state/base/state_base_fns.c:54
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 54                  if (NULL == s-&gt;cbfunc) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 62                  caddy = OBJ_NEW(orte_state_caddy_t);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; opal_obj_new_debug (type=0xffffffff7f14c7d8 &lt;orte_state_caddy_t_class&gt;, 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     file=0xffffffff7f034c08 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
&quot;../../../../openmpi-dev-124-g91e9686/orte/mca/state/base/state_base_fns.c&quot;, 
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; line=62) at 
</span><br>
../../../../openmpi-dev-124-g91e9686/opal/class/opal_object.h:249
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 249         opal_object_t* object = opal_obj_new(type);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; opal_obj_new (cls=0xffffffff7f14c7d8 &lt;orte_state_caddy_t_class&gt;)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at ../../../../openmpi-dev-124-g91e9686/opal/class/opal_object.h:465
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 465         assert(cls-&gt;cls_sizeof &gt;= sizeof(opal_object_t));
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 470         object = (opal_object_t *) malloc(cls-&gt;cls_sizeof);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 472         if (0 == cls-&gt;cls_initialized) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 473             opal_class_initialize(cls);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; opal_class_initialize (cls=0xffffffff7f14c7d8 
</span><br>
&lt;orte_state_caddy_t_class&gt;)
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/opal/class/opal_object.c:79
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 79          assert(cls);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 84          if (1 == cls-&gt;cls_initialized) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 87          opal_atomic_lock(&amp;class_lock);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; opal_atomic_lock (lock=0xffffffff7ee89bf0 &lt;class_lock&gt;)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at 
</span><br>
../../openmpi-dev-124-g91e9686/opal/include/opal/sys/atomic_impl.h:397
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 397        while( !opal_atomic_cmpset_acq_32( &amp;(lock-&gt;u.lock),
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; opal_atomic_cmpset_acq_32 (addr=0xffffffff7ee89bf0 &lt;class_lock&gt;, 
</span><br>
oldval=0, 
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; newval=1)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at 
</span><br>
../../openmpi-dev-124-g91e9686/opal/include/opal/sys/sparcv9/atomic.h:107
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 107        rc = opal_atomic_cmpset_32(addr, oldval, newval);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; opal_atomic_cmpset_32 (addr=0xffffffff7ee89bf0 &lt;class_lock&gt;, oldval=0, 
</span><br>
newval=1)
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at 
</span><br>
../../openmpi-dev-124-g91e9686/opal/include/opal/sys/sparcv9/atomic.h:93
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 93         int32_t ret = newval;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 95         __asm__ __volatile__(&quot;casa [%1] &quot; ASI_P &quot;, %2, %0&quot;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 98         return (ret == oldval);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 99      }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; opal_atomic_cmpset_acq_32 (addr=0xffffffff7ee89bf0 &lt;class_lock&gt;, 
</span><br>
oldval=0, 
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; newval=1)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at 
</span><br>
../../openmpi-dev-124-g91e9686/opal/include/opal/sys/sparcv9/atomic.h:108
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 108        opal_atomic_rmb();
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; opal_atomic_rmb () at 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/opal/include/opal/sys/sparcv9/atomic.h:63
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 63          MEMBAR(&quot;#LoadLoad&quot;);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 64      }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; opal_atomic_cmpset_acq_32 (addr=0xffffffff7ee89bf0 &lt;class_lock&gt;, 
</span><br>
oldval=0, 
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; newval=1)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at 
</span><br>
../../openmpi-dev-124-g91e9686/opal/include/opal/sys/sparcv9/atomic.h:110
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 110        return rc;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 111     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; opal_atomic_lock (lock=0xffffffff7ee89bf0 &lt;class_lock&gt;)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at 
</span><br>
../../openmpi-dev-124-g91e9686/opal/include/opal/sys/atomic_impl.h:403
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 403     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; opal_class_initialize (cls=0xffffffff7f14c7d8 
</span><br>
&lt;orte_state_caddy_t_class&gt;)
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/opal/class/opal_object.c:93
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 93          if (1 == cls-&gt;cls_initialized) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 103         cls-&gt;cls_depth = 0;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 104         cls_construct_array_count = 0;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 105         cls_destruct_array_count  = 0;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 106         for (c = cls; c; c = c-&gt;cls_parent) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 107             if( NULL != c-&gt;cls_construct ) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 108                 cls_construct_array_count++;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 110             if( NULL != c-&gt;cls_destruct ) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 111                 cls_destruct_array_count++;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 113             cls-&gt;cls_depth++;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 106         for (c = cls; c; c = c-&gt;cls_parent) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 107             if( NULL != c-&gt;cls_construct ) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 110             if( NULL != c-&gt;cls_destruct ) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 113             cls-&gt;cls_depth++;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 106         for (c = cls; c; c = c-&gt;cls_parent) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 122             (void 
</span><br>
(**)(opal_object_t*))malloc((cls_construct_array_count +
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 123                                                
</span><br>
cls_destruct_array_count + 2) 
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 122             (void 
</span><br>
(**)(opal_object_t*))malloc((cls_construct_array_count +
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 121         cls-&gt;cls_construct_array = 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 125         if (NULL == cls-&gt;cls_construct_array) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 130             cls-&gt;cls_construct_array + cls_construct_array_count + 
</span><br>
1;
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 129         cls-&gt;cls_destruct_array =
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 136         cls_construct_array = cls-&gt;cls_construct_array + 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; cls_construct_array_count;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 137         cls_destruct_array  = cls-&gt;cls_destruct_array;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 139         c = cls;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 140         *cls_construct_array = NULL;  /* end marker for the 
</span><br>
constructors */
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 141         for (i = 0; i &lt; cls-&gt;cls_depth; i++) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 142             if( NULL != c-&gt;cls_construct ) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 143                 --cls_construct_array;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 144                 *cls_construct_array = c-&gt;cls_construct;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 146             if( NULL != c-&gt;cls_destruct ) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 147                 *cls_destruct_array = c-&gt;cls_destruct;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 148                 cls_destruct_array++;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 150             c = c-&gt;cls_parent;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 141         for (i = 0; i &lt; cls-&gt;cls_depth; i++) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 142             if( NULL != c-&gt;cls_construct ) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 146             if( NULL != c-&gt;cls_destruct ) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 150             c = c-&gt;cls_parent;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 141         for (i = 0; i &lt; cls-&gt;cls_depth; i++) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 152         *cls_destruct_array = NULL;  /* end marker for the 
</span><br>
destructors */
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 154         cls-&gt;cls_initialized = 1;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 155         save_class(cls);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; save_class (cls=0xffffffff7f14c7d8 &lt;orte_state_caddy_t_class&gt;)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/opal/class/opal_object.c:188
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 188         if (num_classes &gt;= max_classes) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 189             expand_array();
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; expand_array () at 
</span><br>
../../openmpi-dev-124-g91e9686/opal/class/opal_object.c:201
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 201         max_classes += increment;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 202         classes = (void**)realloc(classes, sizeof(opal_class_t*) * 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; max_classes);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 203         if (NULL == classes) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 207         for (i = num_classes; i &lt; max_classes; ++i) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 208             classes[i] = NULL;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 207         for (i = num_classes; i &lt; max_classes; ++i) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 208             classes[i] = NULL;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 207         for (i = num_classes; i &lt; max_classes; ++i) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 208             classes[i] = NULL;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 207         for (i = num_classes; i &lt; max_classes; ++i) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 208             classes[i] = NULL;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 207         for (i = num_classes; i &lt; max_classes; ++i) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 208             classes[i] = NULL;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 207         for (i = num_classes; i &lt; max_classes; ++i) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 208             classes[i] = NULL;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 207         for (i = num_classes; i &lt; max_classes; ++i) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 208             classes[i] = NULL;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 207         for (i = num_classes; i &lt; max_classes; ++i) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 208             classes[i] = NULL;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 207         for (i = num_classes; i &lt; max_classes; ++i) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 208             classes[i] = NULL;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 207         for (i = num_classes; i &lt; max_classes; ++i) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 208             classes[i] = NULL;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 207         for (i = num_classes; i &lt; max_classes; ++i) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 210     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; save_class (cls=0xffffffff7f14c7d8 &lt;orte_state_caddy_t_class&gt;)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/opal/class/opal_object.c:192
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 192         classes[num_classes] = cls-&gt;cls_construct_array;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 193         ++num_classes;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 194     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; opal_class_initialize (cls=0xffffffff7f14c7d8 
</span><br>
&lt;orte_state_caddy_t_class&gt;)
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/opal/class/opal_object.c:159
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 159         opal_atomic_unlock(&amp;class_lock);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; opal_atomic_unlock (lock=0xffffffff7ee89bf0 &lt;class_lock&gt;)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at 
</span><br>
../../openmpi-dev-124-g91e9686/opal/include/opal/sys/atomic_impl.h:409
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 409        opal_atomic_wmb();
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; opal_atomic_wmb () at 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/opal/include/opal/sys/sparcv9/atomic.h:69
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 69          MEMBAR(&quot;#StoreStore&quot;);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 70      }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; opal_atomic_unlock (lock=0xffffffff7ee89bf0 &lt;class_lock&gt;)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at 
</span><br>
../../openmpi-dev-124-g91e9686/opal/include/opal/sys/atomic_impl.h:410
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 410        lock-&gt;u.lock=OPAL_ATOMIC_UNLOCKED;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 411     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; opal_class_initialize (cls=0xffffffff7f14c7d8 
</span><br>
&lt;orte_state_caddy_t_class&gt;)
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/opal/class/opal_object.c:160
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 160     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; opal_obj_new (cls=0xffffffff7f14c7d8 &lt;orte_state_caddy_t_class&gt;)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at ../../../../openmpi-dev-124-g91e9686/opal/class/opal_object.h:475
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 475         if (NULL != object) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 476             object-&gt;obj_class = cls;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 477             object-&gt;obj_reference_count = 1;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 478             opal_obj_run_constructors(object);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; opal_obj_run_constructors (object=0x1001bfcf0)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at ../../../../openmpi-dev-124-g91e9686/opal/class/opal_object.h:420
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 420         assert(NULL != object-&gt;obj_class);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 422         cls_construct = object-&gt;obj_class-&gt;cls_construct_array;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 423         while( NULL != *cls_construct ) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 424             (*cls_construct)(object);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; orte_state_caddy_construct (caddy=0x1001bfcf0)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
../../../../openmpi-dev-124-g91e9686/orte/mca/state/base/state_base_frame.c:84
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 84          memset(&amp;caddy-&gt;ev, 0, sizeof(opal_event_t));
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 85          caddy-&gt;jdata = NULL;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 86      }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; opal_obj_run_constructors (object=0x1001bfcf0)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at ../../../../openmpi-dev-124-g91e9686/opal/class/opal_object.h:425
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 425             cls_construct++;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 423         while( NULL != *cls_construct ) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 427     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; opal_obj_new (cls=0xffffffff7f14c7d8 &lt;orte_state_caddy_t_class&gt;)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at ../../../../openmpi-dev-124-g91e9686/opal/class/opal_object.h:480
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 480         return object;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 481     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; opal_obj_new_debug (type=0xffffffff7f14c7d8 &lt;orte_state_caddy_t_class&gt;, 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     file=0xffffffff7f034c08 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
&quot;../../../../openmpi-dev-124-g91e9686/orte/mca/state/base/state_base_fns.c&quot;, 
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; line=62) at 
</span><br>
../../../../openmpi-dev-124-g91e9686/opal/class/opal_object.h:250
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 250         object-&gt;obj_magic_id = OPAL_OBJ_MAGIC_ID;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 251         object-&gt;cls_init_file_name = file;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 252         object-&gt;cls_init_lineno = line;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 253         return object;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 254     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; orte_state_base_activate_job_state (jdata=0x100125250, state=1)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
../../../../openmpi-dev-124-g91e9686/orte/mca/state/base/state_base_fns.c:63
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 63                  if (NULL != jdata) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 64                      caddy-&gt;jdata = jdata;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 65                      caddy-&gt;job_state = state;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 66                      OBJ_RETAIN(jdata);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; opal_obj_update (inc=1, object=0x100125250)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at ../../../../openmpi-dev-124-g91e9686/opal/class/opal_object.h:497
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 497         return opal_atomic_add_32(&amp;(object-&gt;obj_reference_count), 
</span><br>
inc);
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; opal_atomic_add_32 (addr=0x100125260, delta=1)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
../../../../openmpi-dev-124-g91e9686/opal/include/opal/sys/atomic_impl.h:63
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 63            oldval = *addr;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 64         } while (0 == opal_atomic_cmpset_32(addr, oldval, oldval + 
</span><br>
delta));
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; opal_atomic_cmpset_32 (addr=0x100125260, oldval=1, newval=2)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
../../../../openmpi-dev-124-g91e9686/opal/include/opal/sys/sparcv9/atomic.h:93
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 93         int32_t ret = newval;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 95         __asm__ __volatile__(&quot;casa [%1] &quot; ASI_P &quot;, %2, %0&quot;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 98         return (ret == oldval);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 99      }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; opal_atomic_add_32 (addr=0x100125260, delta=1)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
../../../../openmpi-dev-124-g91e9686/opal/include/opal/sys/atomic_impl.h:65
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 65         return (oldval + delta);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 66      }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; orte_state_base_activate_job_state (jdata=0x100125250, state=1)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
../../../../openmpi-dev-124-g91e9686/orte/mca/state/base/state_base_fns.c:66
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 66                      OBJ_RETAIN(jdata);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 68                  opal_event_set(orte_event_base, &amp;caddy-&gt;ev, -1, 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; OPAL_EV_WRITE, s-&gt;cbfunc, caddy);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 69                  opal_event_set_priority(&amp;caddy-&gt;ev, s-&gt;priority);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 70                  opal_event_active(&amp;caddy-&gt;ev, OPAL_EV_WRITE, 1);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 71                  return;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 105     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; rsh_launch (jdata=0x100125250)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
../../../../../openmpi-dev-124-g91e9686/orte/mca/plm/rsh/plm_rsh_module.c:883
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 883         return ORTE_SUCCESS;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 884     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; orterun (argc=5, argv=0xffffffff7fffe0d8)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at 
</span><br>
../../../../openmpi-dev-124-g91e9686/orte/tools/orterun/orterun.c:1084
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 1084        while (orte_event_base_active) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 1085            opal_event_loop(orte_event_base, OPAL_EVLOOP_ONCE);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 1084        while (orte_event_base_active) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 1085            opal_event_loop(orte_event_base, OPAL_EVLOOP_ONCE);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 1084        while (orte_event_base_active) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 1085            opal_event_loop(orte_event_base, OPAL_EVLOOP_ONCE);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=13080, tid=2
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; # JRE version: Java(TM) SE Runtime Environment (8.0-b132) (build 
</span><br>
1.8.0-b132)
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; # Java VM: Java HotSpot(TM) 64-Bit Server VM (25.0-b70 mixed mode 
</span><br>
solaris-sparc 
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; compressed oops)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; # Problematic frame:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; # 1084      while (orte_event_base_active) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 1085            opal_event_loop(orte_event_base, OPAL_EVLOOP_ONCE);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; C  [libc.so.1+0x3c7f0]  strlen+0x50
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; # Failed to write core dump. Core dumps have been disabled. To enable 
</span><br>
core 
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; dumping, try &quot;ulimit -c unlimited&quot; before starting Java again
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; # An error report file with more information is saved as:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; # 
</span><br>
/home/fd1026/work/skripte/master/parallel/prog/mpi/java/hs_err_pid13080.log
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; # If you would like to submit a bug report, please visit:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #   <a href="http://bugreport.sun.com/bugreport/crash.jsp">http://bugreport.sun.com/bugreport/crash.jsp</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; # The crash happened outside the Java Virtual Machine in native code.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; # See problematic frame for where to report the bug.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; mpiexec noticed that process rank 0 with PID 0 on node tyr exited on 
</span><br>
signal 6 
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (Abort).
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 1084        while (orte_event_base_active) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 1089        orte_odls.kill_local_procs(NULL);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Thank you very much for any help in advance.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Kind regards
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Siegmar
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: 
</span><br>
<a href="http://www.open-mpi.org/community/lists/users/2014/10/25559.php">http://www.open-mpi.org/community/lists/users/2014/10/25559.php</a>
<br>
<p>
<br><p>
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
# Java VM: Java HotSpot(TM) 64-Bit Server VM (25.0-b70 mixed mode solaris-sparc compressed oops)
<br>
# Problematic frame:
<br>
# C  [libc.so.1+0x3c7f0]  strlen+0x50
<br>
#
<br>
# Failed to write core dump. Core dumps have been disabled. To enable core dumping, try &quot;ulimit -c unlimited&quot; before starting Java again
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
<p>---------------  T H R E A D  ---------------
<br>
<p>Current thread (0x000000010010e800):  JavaThread &quot;main&quot; [_thread_in_native, id=2, stack(0xffffffff7b400000,0xffffffff7b500000)]
<br>
<p>siginfo:si_signo=SIGSEGV: si_errno=0, si_code=1 (SEGV_MAPERR), si_addr=0x0000000000000000
<br>
<p>Registers:
<br>
&nbsp;G1=0xffffffff7b4fd915 G2=0x0000000000000000 G3=0xffffffff7fffe0b9 G4=0xfffffffffffffad8
<br>
&nbsp;G5=0x0000000000000000 G6=0xffffffff2affe000 G7=0xffffffff7e900a00 Y=0x0000000000000000
<br>
&nbsp;O0=0x0000000000000000 O1=0x0000000000000053 O2=0x0000000000000000 O3=0x0000000000000000
<br>
&nbsp;O4=0x0000000000000000 O5=0x0000000000000053 O6=0xffffffff7b4fbf31 O7=0xffffffff7eaacdc8
<br>
&nbsp;L0=0x0000000000000000 L1=0x0000000000000073 L2=0x0000000000000000 L3=0x0000000000000000
<br>
&nbsp;L4=0x0000000000001000 L5=0x0000000000000000 L6=0x0000000000000000 L7=0xffffffff7ec491f9
<br>
&nbsp;I0=0xfffffffee4854037 I1=0xffffffff7b4fdac0 I2=0xffffffff7eaab058 I3=0xffffffff7b4fd1c5
<br>
&nbsp;I4=0x0000000000000000 I5=0xfffffffee4854036 I6=0xffffffff7b4fcf01 I7=0xffffffff7eaaf638
<br>
&nbsp;PC=0xffffffff7ea3c7f0 nPC=0xffffffff7ea3c7f4
<br>
<p><p>Top of Stack: (sp=0xffffffff7b4fc730)
<br>
0xffffffff7b4fc730:   0000000000000000 0000000000000073
<br>
0xffffffff7b4fc740:   0000000000000000 0000000000000000
<br>
0xffffffff7b4fc750:   0000000000001000 0000000000000000
<br>
0xffffffff7b4fc760:   0000000000000000 ffffffff7ec491f9
<br>
0xffffffff7b4fc770:   fffffffee4854037 ffffffff7b4fdac0
<br>
0xffffffff7b4fc780:   ffffffff7eaab058 ffffffff7b4fd1c5
<br>
0xffffffff7b4fc790:   0000000000000000 fffffffee4854036
<br>
0xffffffff7b4fc7a0:   ffffffff7b4fcf01 ffffffff7eaaf638
<br>
0xffffffff7b4fc7b0:   ffffffff7f635b91 000000007b4fd238
<br>
0xffffffff7b4fc7c0:   ffffffff7b4fcc58 ffffffff7b4fd150
<br>
0xffffffff7b4fc7d0:   000000000000000a ffffffff7b4fd050
<br>
0xffffffff7b4fc7e0:   ffffffff7b4fd7c0 0000000000000000
<br>
0xffffffff7b4fc7f0:   0000000000000000 ffffffff7ec3e000
<br>
0xffffffff7b4fc800:   0000000000000000 0000000000000000
<br>
0xffffffff7b4fc810:   0000000000000000 0000000100000000
<br>
0xffffffff7b4fc820:   0000000000000001 0000000000002000 
<br>
<p>Instructions: (pc=0xffffffff7ea3c7f0)
<br>
0xffffffff7ea3c7d0:   d2 12 80 00 99 32 60 08 80 90 00 0c 02 40 00 24
<br>
0xffffffff7ea3c7e0:   80 8a 60 ff 02 40 00 22 94 02 a0 01 94 02 a0 01
<br>
0xffffffff7ea3c7f0:   d2 02 80 00 19 00 40 40 1b 20 20 20 98 13 21 01
<br>
0xffffffff7ea3c800:   9a 13 60 80 96 2b 40 09 82 22 40 0c 80 8a c0 01 
<br>
<p>Register to memory mapping:
<br>
<p>G1=0xffffffff7b4fd915 is pointing into the stack for thread: 0x000000010010e800
<br>
G2=0x0000000000000000 is an unknown value
<br>
G3=0xffffffff7fffe0b9 is an unknown value
<br>
G4=0xfffffffffffffad8 is an unknown value
<br>
G5=0x0000000000000000 is an unknown value
<br>
G6=0xffffffff2affe000 is an unknown value
<br>
G7=0xffffffff7e900a00 is an unknown value
<br>
<p>O0=0x0000000000000000 is an unknown value
<br>
O1=0x0000000000000053 is an unknown value
<br>
O2=0x0000000000000000 is an unknown value
<br>
O3=0x0000000000000000 is an unknown value
<br>
O4=0x0000000000000000 is an unknown value
<br>
O5=0x0000000000000053 is an unknown value
<br>
O6=0xffffffff7b4fbf31 is pointing into the stack for thread: 0x000000010010e800
<br>
O7=0xffffffff7eaacdc8: _doprnt+0x1d80 in /lib/sparcv9/libc.so.1 at 0xffffffff7ea00000
<br>
<p>L0=0x0000000000000000 is an unknown value
<br>
L1=0x0000000000000073 is an unknown value
<br>
L2=0x0000000000000000 is an unknown value
<br>
L3=0x0000000000000000 is an unknown value
<br>
L4=0x0000000000001000 is an unknown value
<br>
L5=0x0000000000000000 is an unknown value
<br>
L6=0x0000000000000000 is an unknown value
<br>
L7=0xffffffff7ec491f9: _ctype+0x1 in /lib/sparcv9/libc.so.1 at 0xffffffff7ea00000
<br>
<p>I0=0xfffffffee4854037: var_type_sizes+0x2df in /export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libopen-pal.so.0.0.0 at 0xfffffffee4700000
<br>
I1=0xffffffff7b4fdac0 is pointing into the stack for thread: 0x000000010010e800
<br>
I2=0xffffffff7eaab058: _doprnt+0x10 in /lib/sparcv9/libc.so.1 at 0xffffffff7ea00000
<br>
I3=0xffffffff7b4fd1c5 is pointing into the stack for thread: 0x000000010010e800
<br>
I4=0x0000000000000000 is an unknown value
<br>
I5=0xfffffffee4854036: var_type_sizes+0x2de in /export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libopen-pal.so.0.0.0 at 0xfffffffee4700000
<br>
I6=0xffffffff7b4fcf01 is pointing into the stack for thread: 0x000000010010e800
<br>
I7=0xffffffff7eaaf638: vsnprintf+0x7c in /lib/sparcv9/libc.so.1 at 0xffffffff7ea00000
<br>
<p><p>Stack: [0xffffffff7b400000,0xffffffff7b500000],  sp=0xffffffff7b4fc730,  free space=1009k
<br>
Native frames: (J=compiled Java code, j=interpreted, Vv=VM code, C=native code)
<br>
C  [libc.so.1+0x3c7f0]  strlen+0x50
<br>
C  [libc.so.1+0xaf640]  vsnprintf+0x84
<br>
C  [libc.so.1+0xaadb4]  vasprintf+0x20
<br>
C  [libc.so.1+0xaaf04]  asprintf+0x28
<br>
C  [libopen-pal.so.0.0.0+0xaf3cc]  mca_base_var_cache_files+0x160
<br>
C  [libopen-pal.so.0.0.0+0xaed90]  mca_base_var_init+0x4e8
<br>
C  [libopen-pal.so.0.0.0+0xb260c]  register_variable+0x214
<br>
C  [libopen-pal.so.0.0.0+0xb36a0]  mca_base_var_register+0x104
<br>
C  [libmpi_java.so.0.0.0+0x221e8]  JNI_OnLoad+0x128
<br>
C  [libjava.so+0x10860]  Java_java_lang_ClassLoader_00024NativeLibrary_load+0xb8
<br>
j  java.lang.ClassLoader$NativeLibrary.load(Ljava/lang/String;Z)V+-665819
<br>
j  java.lang.ClassLoader$NativeLibrary.load(Ljava/lang/String;Z)V+0
<br>
j  java.lang.ClassLoader.loadLibrary0(Ljava/lang/Class;Ljava/io/File;)Z+328
<br>
j  java.lang.ClassLoader.loadLibrary(Ljava/lang/Class;Ljava/lang/String;Z)V+290
<br>
j  java.lang.Runtime.loadLibrary0(Ljava/lang/Class;Ljava/lang/String;)V+54
<br>
j  java.lang.System.loadLibrary(Ljava/lang/String;)V+7
<br>
j  mpi.MPI.&lt;clinit&gt;()V+28
<br>
v  ~StubRoutines::call_stub
<br>
V  [libjvm.so+0x6fd4f0]  void JavaCalls::call_helper(JavaValue*,methodHandle*,JavaCallArguments*,Thread*)+0xa58
<br>
V  [libjvm.so+0x690b2c]  void InstanceKlass::call_class_initializer_impl(instanceKlassHandle,Thread*)+0xd4
<br>
V  [libjvm.so+0x68f394]  void InstanceKlass::initialize_impl(instanceKlassHandle,Thread*)+0x654
<br>
V  [libjvm.so+0x68e190]  void InstanceKlass::initialize(Thread*)+0x38
<br>
V  [libjvm.so+0x9ac5ec]  void LinkResolver::resolve_static_call(CallInfo&amp;,KlassHandle&amp;,Symbol*,Symbol*,KlassHandle,bool,bool,Thread*)+0xbc
<br>
V  [libjvm.so+0x9b2ff8]  void LinkResolver::resolve_invokestatic(CallInfo&amp;,constantPoolHandle,int,Thread*)+0x200
<br>
V  [libjvm.so+0x9b2b34]  void LinkResolver::resolve_invoke(CallInfo&amp;,Handle,constantPoolHandle,int,Bytecodes::Code,Thread*)+0x94c
<br>
V  [libjvm.so+0x6e8af8]  void InterpreterRuntime::resolve_invoke(JavaThread*,Bytecodes::Code)+0x938
<br>
j  InitFinalizeMain.main([Ljava/lang/String;)V+1
<br>
v  ~StubRoutines::call_stub
<br>
V  [libjvm.so+0x6fd4f0]  void JavaCalls::call_helper(JavaValue*,methodHandle*,JavaCallArguments*,Thread*)+0xa58
<br>
V  [libjvm.so+0x793324]  jni_CallStaticVoidMethod+0x910
<br>
C  [libjli.so+0x7298]  JavaMain+0x778
<br>
<p>Java frames: (J=compiled Java code, j=interpreted, Vv=VM code)
<br>
j  java.lang.ClassLoader$NativeLibrary.load(Ljava/lang/String;Z)V+0
<br>
j  java.lang.ClassLoader.loadLibrary0(Ljava/lang/Class;Ljava/io/File;)Z+328
<br>
j  java.lang.ClassLoader.loadLibrary(Ljava/lang/Class;Ljava/lang/String;Z)V+290
<br>
j  java.lang.Runtime.loadLibrary0(Ljava/lang/Class;Ljava/lang/String;)V+54
<br>
j  java.lang.System.loadLibrary(Ljava/lang/String;)V+7
<br>
j  mpi.MPI.&lt;clinit&gt;()V+28
<br>
v  ~StubRoutines::call_stub
<br>
j  InitFinalizeMain.main([Ljava/lang/String;)V+1
<br>
v  ~StubRoutines::call_stub
<br>
<p>---------------  P R O C E S S  ---------------
<br>
<p>Java Threads: ( =&gt; current thread )
<br>
&nbsp;&nbsp;0x000000010035e800 JavaThread &quot;Service Thread&quot; daemon [_thread_blocked, id=11, stack(0xfffffffee5500000,0xfffffffee5600000)]
<br>
&nbsp;&nbsp;0x00000001002fa000 JavaThread &quot;C1 CompilerThread1&quot; daemon [_thread_blocked, id=10, stack(0xfffffffee5700000,0xfffffffee5800000)]
<br>
&nbsp;&nbsp;0x00000001002f7000 JavaThread &quot;C2 CompilerThread0&quot; daemon [_thread_blocked, id=9, stack(0xfffffffee5900000,0xfffffffee5a00000)]
<br>
&nbsp;&nbsp;0x00000001002f5800 JavaThread &quot;Signal Dispatcher&quot; daemon [_thread_blocked, id=8, stack(0xfffffffee5b00000,0xfffffffee5c00000)]
<br>
&nbsp;&nbsp;0x00000001002c4000 JavaThread &quot;Finalizer&quot; daemon [_thread_blocked, id=7, stack(0xfffffffee5d00000,0xfffffffee5e00000)]
<br>
&nbsp;&nbsp;0x00000001002bc800 JavaThread &quot;Reference Handler&quot; daemon [_thread_blocked, id=6, stack(0xfffffffee5f00000,0xfffffffee6000000)]
<br>
=&gt;0x000000010010e800 JavaThread &quot;main&quot; [_thread_in_native, id=2, stack(0xffffffff7b400000,0xffffffff7b500000)]
<br>
<p>Other Threads:
<br>
&nbsp;&nbsp;0x00000001002b6000 VMThread [stack: 0xfffffffee6100000,0xfffffffee6200000] [id=5]
<br>
&nbsp;&nbsp;0x0000000100364000 WatcherThread [stack: 0xfffffffee5300000,0xfffffffee5400000] [id=12]
<br>
<p>VM state:not at safepoint (normal execution)
<br>
<p>VM Mutex/Monitor currently owned by a thread: None
<br>
<p>Heap:
<br>
&nbsp;PSYoungGen      total 8192K, used 933K [0xffffffff55c00000, 0xffffffff56800000, 0xffffffff6b000000)
<br>
&nbsp;&nbsp;eden space 4096K, 22% used [0xffffffff55c00000,0xffffffff55ce9530,0xffffffff56000000)
<br>
&nbsp;&nbsp;from space 4096K, 0% used [0xffffffff56400000,0xffffffff56400000,0xffffffff56800000)
<br>
&nbsp;&nbsp;to   space 4096K, 0% used [0xffffffff56000000,0xffffffff56000000,0xffffffff56400000)
<br>
&nbsp;ParOldGen       total 53248K, used 0K [0xffffffff2b000000, 0xffffffff2e400000, 0xffffffff55c00000)
<br>
&nbsp;&nbsp;object space 53248K, 0% used [0xffffffff2b000000,0xffffffff2b000000,0xffffffff2e400000)
<br>
&nbsp;Metaspace       used 2853K, capacity 4550K, committed 4864K, reserved 1056768K
<br>
&nbsp;&nbsp;class space    used 305K, capacity 386K, committed 512K, reserved 1048576K
<br>
<p>Card table byte_map: [0xffffffff6b100000,0xffffffff6b302000] byte_map_base: 0xff7fffff6b7a8000
<br>
<p>Marking Bits: (ParMarkBitMap*) 0xffffffff7e5daee0
<br>
&nbsp;Begin Bits: [0xffffffff28400000, 0xffffffff29400000)
<br>
&nbsp;End Bits:   [0xffffffff29400000, 0xffffffff2a400000)
<br>
<p>Polling page: 0xffffffff7b100000
<br>
<p>CodeCache: size=245760Kb used=1116Kb max_used=1116Kb free=244643Kb
<br>
&nbsp;bounds [0xffffffff6b800000, 0xffffffff6bc00000, 0xffffffff7a800000]
<br>
&nbsp;total_blobs=272 nmethods=38 adapters=151
<br>
&nbsp;compilation: enabled
<br>
<p>Compilation events (10 events):
<br>
Event: 0.308 Thread 0x00000001002fa000   34       3       java.lang.AbstractStringBuilder::append (50 bytes)
<br>
Event: 0.309 Thread 0x00000001002fa000 nmethod 34 0xffffffff6b9131d0 code [0xffffffff6b9133c0, 0xffffffff6b913978]
<br>
Event: 0.312 Thread 0x00000001002fa000   35       3       java.lang.System::getSecurityManager (4 bytes)
<br>
Event: 0.313 Thread 0x00000001002fa000 nmethod 35 0xffffffff6b913b90 code [0xffffffff6b913ce0, 0xffffffff6b913e48]
<br>
Event: 0.315 Thread 0x00000001002fa000   36       3       java.lang.String::lastIndexOf (52 bytes)
<br>
Event: 0.316 Thread 0x00000001002fa000 nmethod 36 0xffffffff6b913ed0 code [0xffffffff6b9140a0, 0xffffffff6b9145f0]
<br>
Event: 0.316 Thread 0x00000001002fa000   38       3       java.util.HashMap::putVal (300 bytes)
<br>
Event: 0.319 Thread 0x00000001002fa000 nmethod 38 0xffffffff6b914790 code [0xffffffff6b914b40, 0xffffffff6b916670]
<br>
Event: 0.319 Thread 0x00000001002fa000   37       3       java.util.HashMap::put (13 bytes)
<br>
Event: 0.320 Thread 0x00000001002fa000 nmethod 37 0xffffffff6b916d50 code [0xffffffff6b916f00, 0xffffffff6b9173d0]
<br>
<p>GC Heap History (0 events):
<br>
No events
<br>
<p>Deoptimization events (0 events):
<br>
No events
<br>
<p>Internal exceptions (5 events):
<br>
Event: 0.107 Thread 0x000000010010e800 Exception &lt;a 'java/lang/NoSuchMethodError': Method sun.misc.Unsafe.defineClass(Ljava/lang/String;[BII)Ljava/lang/Class; name or signature does not match&gt; (0xffffffff55c0bd00) thrown at [/tmp/workspace/8-2-build-solaris-sparcv9/jdk8/2238/hotspot/src/share/
<br>
Event: 0.108 Thread 0x000000010010e800 Exception &lt;a 'java/lang/NoSuchMethodError': Method sun.misc.Unsafe.prefetchRead(Ljava/lang/Object;J)V name or signature does not match&gt; (0xffffffff55c0bf90) thrown at [/tmp/workspace/8-2-build-solaris-sparcv9/jdk8/2238/hotspot/src/share/vm/prims/jni.cpp, 
<br>
Event: 0.274 Thread 0x000000010010e800 Exception &lt;a 'java/security/PrivilegedActionException'&gt; (0xffffffff55cb1f60) thrown at [/tmp/workspace/8-2-build-solaris-sparcv9/jdk8/2238/hotspot/src/share/vm/prims/jvm.cpp, line 1248]
<br>
Event: 0.288 Thread 0x000000010010e800 Exception &lt;a 'java/security/PrivilegedActionException'&gt; (0xffffffff55cb6c78) thrown at [/tmp/workspace/8-2-build-solaris-sparcv9/jdk8/2238/hotspot/src/share/vm/prims/jvm.cpp, line 1248]
<br>
Event: 0.306 Thread 0x000000010010e800 Exception &lt;a 'java/security/PrivilegedActionException'&gt; (0xffffffff55cc3270) thrown at [/tmp/workspace/8-2-build-solaris-sparcv9/jdk8/2238/hotspot/src/share/vm/prims/jvm.cpp, line 1248]
<br>
<p>Events (10 events):
<br>
Event: 0.306 loading class mpi/MPI
<br>
Event: 0.306 loading class mpi/MPI done
<br>
Event: 0.312 loading class java/io/IOException
<br>
Event: 0.312 loading class java/io/IOException done
<br>
Event: 0.313 loading class java/util/concurrent/ConcurrentHashMap$ForwardingNode
<br>
Event: 0.313 loading class java/util/concurrent/ConcurrentHashMap$ForwardingNode done
<br>
Event: 0.314 loading class java/lang/AssertionError
<br>
Event: 0.314 loading class java/lang/AssertionError done
<br>
Event: 0.316 loading class java/lang/ClassLoaderHelper
<br>
Event: 0.316 loading class java/lang/ClassLoaderHelper done
<br>
<p><p>Dynamic libraries:
<br>
0x0000000100000000 	/export2/prog/SunOS_sparc/jdk1.8.0/bin/java
<br>
0xffffffff7f000000 	/export2/prog/SunOS_sparc/jdk1.8.0/bin/../lib/sparcv9/jli/libjli.so
<br>
0xffffffff7f100000 	/lib/sparcv9/libthread.so.1
<br>
0xffffffff7ed00000 	/lib/sparcv9/libdl.so.1
<br>
0xffffffff7ea00000 	/lib/sparcv9/libc.so.1
<br>
0xffffffff7e800000 	/platform/SUNW,A70/lib/sparcv9/libc_psr.so.1
<br>
0xffffffff7d400000 	/export2/prog/SunOS_sparc/jdk1.8.0/jre/lib/sparcv9/server/libjvm.so
<br>
0xffffffff7d200000 	/lib/sparcv9/libsocket.so.1
<br>
0xffffffff7e400000 	/usr/lib/sparcv9/libsched.so.1
<br>
0xffffffff7cf00000 	/lib/sparcv9/libm.so.1
<br>
0xffffffff7cd00000 	/usr/lib/sparcv9/libCrun.so.1
<br>
0xffffffff7cb00000 	/lib/sparcv9/libdoor.so.1
<br>
0xffffffff7c900000 	/usr/lib/sparcv9/libdemangle.so.1
<br>
0xffffffff7c700000 	/lib/sparcv9/libkstat.so.1
<br>
0xffffffff7c500000 	/lib/sparcv9/libnsl.so.1
<br>
0xffffffff7c300000 	/lib/sparcv9/libm.so.2
<br>
0xffffffff7c100000 	/lib/sparcv9/libmp.so.2
<br>
0xffffffff7bf00000 	/lib/sparcv9/libmd.so.1
<br>
0xffffffff7bd00000 	/platform/SUNW,A70/lib/sparcv9/libmd_psr.so.1
<br>
0xffffffff7bb00000 	/lib/sparcv9/libscf.so.1
<br>
0xffffffff7b900000 	/lib/sparcv9/libuutil.so.1
<br>
0xffffffff7b700000 	/lib/sparcv9/libgen.so.1
<br>
0xffffffff7b200000 	/export2/prog/SunOS_sparc/jdk1.8.0/jre/lib/sparcv9/libverify.so
<br>
0xffffffff7b000000 	/export2/prog/SunOS_sparc/jdk1.8.0/jre/lib/sparcv9/libjava.so
<br>
0xffffffff7ab00000 	/export2/prog/SunOS_sparc/jdk1.8.0/jre/lib/sparcv9/libzip.so
<br>
0xfffffffee5100000 	/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libmpi_java.so.0.0.0
<br>
0xfffffffee4d00000 	/usr/local/openmpi-1.9.0_64_gcc/lib64/libmpi.so.0
<br>
0xfffffffee4a00000 	/usr/local/openmpi-1.9.0_64_gcc/lib64/libopen-rte.so.0
<br>
0xfffffffee4700000 	/usr/local/openmpi-1.9.0_64_gcc/lib64/libopen-pal.so.0
<br>
0xfffffffee4500000 	/lib/sparcv9/libsendfile.so.1
<br>
0xfffffffee4300000 	/usr/lib/sparcv9/libpicl.so.1
<br>
0xfffffffee4100000 	/usr/lib/sparcv9/liblgrp.so.1
<br>
0xfffffffee3f00000 	/lib/sparcv9/librt.so.1
<br>
0xfffffffee3d00000 	/usr/local/gcc-4.9.1/lib/sparcv9/libgcc_s.so.1
<br>
0xfffffffee4c00000 	/lib/sparcv9/libpthread.so.1
<br>
0xfffffffee3b00000 	/lib/sparcv9/libaio.so.1
<br>
<p>VM Arguments:
<br>
jvm_args: -Djava.library.path=/usr/local/openmpi-1.9.0_64_gcc/lib64 
<br>
java_command: InitFinalizeMain
<br>
java_class_path (initial): /home/fd1026/work/skripte/master/parallel/prog/mpi/java:/usr/local/junit4.10:/usr/local/junit4.10/junit-4.10.jar:/usr/local/javacc-5.0/javacc.jar:.:/home/fd1026/SunOS/sparc/mpi_classfiles:/usr/local/openmpi-1.9.0_64_gcc/lib64/mpi.jar
<br>
Launcher Type: SUN_STANDARD
<br>
<p>Environment Variables:
<br>
JAVA_HOME=/usr/local/jdk1.8.0
<br>
CLASSPATH=/usr/local/junit4.10:/usr/local/junit4.10/junit-4.10.jar:/usr/local/javacc-5.0/javacc.jar:.:/home/fd1026/SunOS/sparc/mpi_classfiles
<br>
PATH=/usr/local/openmpi-1.9.0_64_gcc/bin:/usr/local/openmpi-1.9.0_64_gcc/bin:/usr/local/openmpi-1.9.0_64_gcc/bin:/usr/local/NetBeans-4.0/bin:/usr/local/jdk1.8.0/bin:/usr/local/apache-ant-1.6.2/bin:/usr/local/gcc-4.9.1/bin:/opt/solstudio12.3/bin:/usr/local/bin:/usr/local/ssl/bin:/usr/local/pgsql/bin:/usr/bin:/usr/openwin/bin:/usr/dt/bin:/usr/ccs/bin:/usr/sfw/bin:/opt/sfw/bin:/usr/ucb:/usr/xpg4/bin:/usr/local/teTeX-1.0.7/bin/sparc-sun-solaris2.10:/usr/local/bluej-2.1.2:/usr/local/hwloc-1.10.0/bin:/home/fd1026/SunOS/sparc/bin:.:/usr/sbin:/usr/sbin
<br>
LD_LIBRARY_PATH=/usr/local/openmpi-1.9.0_64_gcc/lib:/usr/local/openmpi-1.9.0_64_gcc/lib64:/usr/local/openmpi-1.9.0_64_gcc/lib:/usr/local/jdk1.8.0/jre/lib/sparc:/usr/local/gcc-4.9.1/lib:/usr/local/gcc-4.9.1/lib/gcc/sparc-sun-solaris2.10/4.9.1:/usr/local/lib:/usr/local/ssl/lib:/usr/local/oracle:/usr/local/pgsql/lib:/lib:/usr/lib:/usr/openwin/lib:/usr/dt/lib:/usr/X11R6/lib:/usr/ccs/lib:/usr/sfw/lib:/opt/sfw/lib:/usr/ucblib:/usr/local/hwloc-1.10.0/lib:/usr/lib/gnome-private/lib:/home/fd1026/SunOS/sparc/lib
<br>
SHELL=/bin/tcsh
<br>
DISPLAY=localhost:11.0
<br>
HOSTTYPE=sun4
<br>
OSTYPE=solaris
<br>
MACHTYPE=sparc
<br>
<p>Signal Handlers:
<br>
SIGSEGV: [libjvm.so+0xd98e60], sa_mask[0]=0xffbffeff, sa_flags=0x0000000c
<br>
SIGBUS: [libjvm.so+0xd98e60], sa_mask[0]=0xffbffeff, sa_flags=0x0000000c
<br>
SIGFPE: [libjvm.so+0xb44e68], sa_mask[0]=0xffbffeff, sa_flags=0x0000000c
<br>
SIGPIPE: [libjvm.so+0xb44e68], sa_mask[0]=0xffbffeff, sa_flags=0x0000000c
<br>
SIGXFSZ: [libjvm.so+0xb44e68], sa_mask[0]=0xffbffeff, sa_flags=0x0000000c
<br>
SIGILL: [libjvm.so+0xb44e68], sa_mask[0]=0xffbffeff, sa_flags=0x0000000c
<br>
SIGUSR1: SIG_DFL, sa_mask[0]=0x00000000, sa_flags=0x00000000
<br>
SIGUSR2: SIG_DFL, sa_mask[0]=0x00000000, sa_flags=0x00000000
<br>
SIGQUIT: [libjvm.so+0xb3f148], sa_mask[0]=0xffbffeff, sa_flags=0x00000004
<br>
SIGHUP: [libjvm.so+0xb3f148], sa_mask[0]=0xffbffeff, sa_flags=0x00000004
<br>
SIGINT: [libjvm.so+0xb3f148], sa_mask[0]=0xffbffeff, sa_flags=0x00000004
<br>
SIGTERM: [libjvm.so+0xb3f148], sa_mask[0]=0xffbffeff, sa_flags=0x00000004
<br>
SIG39: [libjvm.so+0xb44eb8], sa_mask[0]=0x00000000, sa_flags=0x00000008
<br>
SIG40: [libjvm.so+0xb44e68], sa_mask[0]=0xffbffeff, sa_flags=0x0000000c
<br>
<p><p>---------------  S Y S T E M  ---------------
<br>
<p>OS:                      Solaris 10 10/09 s10s_u8wos_08a SPARC
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright 2009 Sun Microsystems, Inc.  All Rights Reserved.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Use is subject to license terms.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Assembled 16 September 2009
<br>
<p>uname:SunOS 5.10 Generic_150400-11 sun4u
<br>
&nbsp;&nbsp;(T2 libthread)
<br>
rlimit: STACK 8192k, CORE 0k, NOFILE 65536, AS infinity
<br>
load average:0.07 0.28 0.23
<br>
<p>CPU:total 2 v9, vis1, vis2, ultra3
<br>
<p>Memory: 8k page, physical 4194304k(2345768k free)
<br>
<p>vm_info: Java HotSpot(TM) 64-Bit Server VM (25.0-b70) for solaris-sparc JRE (1.8.0-b132), built on Mar  4 2014 11:22:49 by &quot;&quot; with Sun Studio 12u1
<br>
<p>time: Tue Oct 21 13:22:10 2014
<br>
elapsed time: 0 seconds
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25563.php">Oscar Vega-Gisbert: "Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686 on Solaris"</a>
<li><strong>Previous message:</strong> <a href="25561.php">Jeff Squyres (jsquyres): "Re: [OMPI users] low CPU utilization with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25563.php">Oscar Vega-Gisbert: "Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686 on Solaris"</a>
<li><strong>Reply:</strong> <a href="25563.php">Oscar Vega-Gisbert: "Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686 on Solaris"</a>
<li><strong>Reply:</strong> <a href="25564.php">Kawashima, Takahiro: "Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686 on Solaris"</a>
<li><strong>Reply:</strong> <a href="25567.php">Gilles Gouaillardet: "Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686 on Solaris"</a>
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
