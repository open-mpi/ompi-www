<?
$subject_val = "Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686 on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 23 21:16:21 2014" -->
<!-- isoreceived="20141024011621" -->
<!-- sent="Fri, 24 Oct 2014 01:16:15 +0000" -->
<!-- isosent="20141024011615" -->
<!-- name="Kawashima, Takahiro" -->
<!-- email="t-kawashima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686 on Solaris" -->
<!-- id="20141024101615.9600e74e9b542b1a53e40d84_at_jp.fujitsu.com" -->
<!-- charset="iso-2022-jp" -->
<!-- inreplyto="201410231503.s9NF3kaa015578_at_tyr.informatik.hs-fulda.de" -->
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
<strong>From:</strong> Kawashima, Takahiro (<em>t-kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-23 21:16:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25565.php">Vinson Leung: "Re: [OMPI users] low CPU utilization with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="25563.php">Oscar Vega-Gisbert: "Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686 on Solaris"</a>
<li><strong>In reply to:</strong> <a href="25562.php">Siegmar Gross: "Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686 on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25567.php">Gilles Gouaillardet: "Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686 on Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Siegmar,
<br>
<p>The attached JRE log shows very important information.
<br>
<p>When JRE loads the MPI class, JNI_OnLoad function in
<br>
libmpi_java.so (Open MPI library; written in C) is called.
<br>
And probably mca_base_var_cache_files function passes NULL
<br>
to asprintf function. I don't know how this situation occurs.
<br>
You may be able to track this by inserting debug printf in
<br>
Open MPI code shown in the stack trace, or by using gdb or
<br>
something.
<br>
<p>hs_err_pid13080.log:
<br>
----------------------------------------------------------------
<br>
siginfo:si_signo=SIGSEGV: si_errno=0, si_code=1 (SEGV_MAPERR), si_addr=0x0000000000000000
<br>
<p>Stack: [0xffffffff7b400000,0xffffffff7b500000],  sp=0xffffffff7b4fc730,  free space=1009k
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
----------------------------------------------------------------
<br>
<p>Regards,
<br>
Takahiro
<br>
<p><span class="quotelev1">&gt; Hello Oscar,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; do you have time to look into my problem? Probably Takahiro has a
</span><br>
<span class="quotelev1">&gt; point and gdb behaves differently on Solaris and Linux, so that
</span><br>
<span class="quotelev1">&gt; the differing outputs have no meaning. I tried to debug my Java
</span><br>
<span class="quotelev1">&gt; program, but without success so far, because I wasn't able to get
</span><br>
<span class="quotelev1">&gt; into the Java program to set a breakpoint or to see the code. Have
</span><br>
<span class="quotelev1">&gt; you succeeded to debug a mpiJava program? If so, how must I call
</span><br>
<span class="quotelev1">&gt; gdb (I normally use &quot;gdb mipexec&quot; and then &quot;run -np 1 java ...&quot;)?
</span><br>
<span class="quotelev1">&gt; What can I do to get helpful information to track the error down?
</span><br>
<span class="quotelev1">&gt; I have attached the error log file. Perhaps you can see if something
</span><br>
<span class="quotelev1">&gt; is going wrong with the Java interface. Thank you very much for your
</span><br>
<span class="quotelev1">&gt; help and any hints for the usage of gdb with mpiJava in advance.
</span><br>
<span class="quotelev1">&gt; Please let me know if I can provide anything else.
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev3">&gt; &gt; &gt; I think that it must have to do with MPI, because everything
</span><br>
<span class="quotelev3">&gt; &gt; &gt; works fine on Linux and my Java program works fine with an older
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MPI version (openmpi-1.8.2a1r31804) as well.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Yes. I also think it must have to do with MPI.
</span><br>
<span class="quotelev2">&gt; &gt; But java process side, not mpiexec process side.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; When you run Java MPI program via mpiexec, a mpiexec process
</span><br>
<span class="quotelev2">&gt; &gt; process launch a java process. When the java process (your
</span><br>
<span class="quotelev2">&gt; &gt; Java program) calls a MPI method, native part (written in C/C++)
</span><br>
<span class="quotelev2">&gt; &gt; of the MPI library is called. It runs in java process, not in
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec process. I suspect that part.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Solaris things are different.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Are you saying the following difference?
</span><br>
<span class="quotelev2">&gt; &gt; After this line,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 881             ORTE_ACTIVATE_JOB_STATE(jdata, ORTE_JOB_STATE_INIT);
</span><br>
<span class="quotelev2">&gt; &gt; Linux shows
</span><br>
<span class="quotelev3">&gt; &gt; &gt; orte_job_state_to_str (state=1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/orte/util/error_strings.c:217
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 217         switch(state) {
</span><br>
<span class="quotelev2">&gt; &gt; but Solaris shows
</span><br>
<span class="quotelev3">&gt; &gt; &gt; orte_util_print_name_args (name=0x100118380 &lt;orte_process_info+104&gt;)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:122
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 122         if (NULL == name) {
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Each macro is defined as:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; #define ORTE_ACTIVATE_JOB_STATE(j, s)                                   \
</span><br>
<span class="quotelev2">&gt; &gt;     do {                                                                \
</span><br>
<span class="quotelev2">&gt; &gt;         orte_job_t *shadow=(j);                                         \
</span><br>
<span class="quotelev2">&gt; &gt;         opal_output_verbose(1, orte_state_base_framework.framework_output, \
</span><br>
<span class="quotelev2">&gt; &gt;                             &quot;%s ACTIVATE JOB %s STATE %s AT %s:%d&quot;,	\
</span><br>
<span class="quotelev2">&gt; &gt;                             ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),         \
</span><br>
<span class="quotelev2">&gt; &gt;                             (NULL == shadow) ? &quot;NULL&quot; :                 \
</span><br>
<span class="quotelev2">&gt; &gt;                             ORTE_JOBID_PRINT(shadow-&gt;jobid),		\
</span><br>
<span class="quotelev2">&gt; &gt;                             orte_job_state_to_str((s)),                 \
</span><br>
<span class="quotelev2">&gt; &gt;                             __FILE__, __LINE__);			\
</span><br>
<span class="quotelev2">&gt; &gt;         orte_state.activate_job_state(shadow, (s));                     \
</span><br>
<span class="quotelev2">&gt; &gt;     } while(0);
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; #define ORTE_NAME_PRINT(n) \
</span><br>
<span class="quotelev2">&gt; &gt;     orte_util_print_name_args(n)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; #define ORTE_JOBID_PRINT(n) \
</span><br>
<span class="quotelev2">&gt; &gt;     orte_util_print_jobids(n)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm not sure, but I think the gdb on Solaris steps into
</span><br>
<span class="quotelev2">&gt; &gt; orte_util_print_name_args, but gdb on Linux doesn't step into
</span><br>
<span class="quotelev2">&gt; &gt; orte_util_print_name_args and orte_util_print_jobids for some
</span><br>
<span class="quotelev2">&gt; &gt; reason, or orte_job_state_to_str is evaluated before them.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; So I think it's not an important difference.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; You showed the following lines.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; orterun (argc=5, argv=0xffffffff7fffe0d8)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at 
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-dev-124-g91e9686/orte/tools/orterun/orterun.c:1084
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 1084        while (orte_event_base_active) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 1085            opal_event_loop(orte_event_base, OPAL_EVLOOP_ONCE);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm not familiar with this code but I think this part (in mpiexec
</span><br>
<span class="quotelev2">&gt; &gt; process) is only waiting the java process to terminate (normally
</span><br>
<span class="quotelev2">&gt; &gt; or abnormally). So I think the problem is not in a mpiexec process
</span><br>
<span class="quotelev2">&gt; &gt; but in a java process.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Takahiro
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi Takahiro,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; mpiexec and java run as distinct processes. Your JRE message
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; says java process raises SEGV. So you should trace the java
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; process, not the mpiexec process. And more, your JRE message
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; says the crash happened outside the Java Virtual Machine in
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; native code. So usual Java program debugger is useless.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; You should trace native code part of the java process.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Unfortunately I don't know how to debug such one.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I think that it must have to do with MPI, because everything
</span><br>
<span class="quotelev3">&gt; &gt; &gt; works fine on Linux and my Java program works fine with an older
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MPI version (openmpi-1.8.2a1r31804) as well.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; linpc1 x 112 mpiexec -np 1 java InitFinalizeMain
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hello!
</span><br>
<span class="quotelev3">&gt; &gt; &gt; linpc1 x 113 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Therefore I single stepped through the program on Linux as well
</span><br>
<span class="quotelev3">&gt; &gt; &gt; and found a difference launching the process. On Linux I get the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; following sequence.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Breakpoint 1, rsh_launch (jdata=0x614aa0)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     at 
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-dev-124-g91e9686/orte/mca/plm/rsh/plm_rsh_module.c:876
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 876         if (ORTE_FLAG_TEST(jdata, ORTE_JOB_FLAG_RESTART)) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (gdb) s
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 881             ORTE_ACTIVATE_JOB_STATE(jdata, ORTE_JOB_STATE_INIT);
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (gdb) s
</span><br>
<span class="quotelev3">&gt; &gt; &gt; orte_job_state_to_str (state=1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/orte/util/error_strings.c:217
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 217         switch(state) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 221             return &quot;PENDING INIT&quot;;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 317     }
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; orte_util_print_jobids (job=4294967295)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:170
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 170         ptr = get_print_name_buffer();
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Solaris things are different.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Breakpoint 1, rsh_launch (jdata=0x100125250)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     at 
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-dev-124-g91e9686/orte/mca/plm/rsh/plm_rsh_module.c:876
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 876         if (ORTE_FLAG_TEST(jdata, ORTE_JOB_FLAG_RESTART)) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (gdb) s
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 881             ORTE_ACTIVATE_JOB_STATE(jdata, ORTE_JOB_STATE_INIT);
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (gdb) s
</span><br>
<span class="quotelev3">&gt; &gt; &gt; orte_util_print_name_args (name=0x100118380 &lt;orte_process_info+104&gt;)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:122
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 122         if (NULL == name) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 142         job = orte_util_print_jobids(name-&gt;jobid);
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; orte_util_print_jobids (job=2673410048)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:170
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 170         ptr = get_print_name_buffer();
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Is this normal or is it the reason for the crash on Solaris?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Kind regards
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Siegmar
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; The log file output by JRE may help you.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; # An error report file with more information is saved as:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; # 
</span><br>
<span class="quotelev1">&gt; /home/fd1026/work/skripte/master/parallel/prog/mpi/java/hs_err_pid13080.log
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Regards,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Takahiro
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; I installed openmpi-dev-124-g91e9686 on Solaris 10 Sparc with
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; gcc-4.9.1 to track down the error with my small Java program.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; I started single stepping in orterun.c at line 1081 and
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; continued until I got the segmentation fault. I get
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &quot;jdata = 0x0&quot; in version openmpi-1.8.2a1r31804, which is the
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; last one which works with Java in my environment, while I get
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &quot;jdata = 0x100125250&quot; in this version. Unfortunately I don't
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; know which files or variables are important to look at. Perhaps
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; somebody can look at the following lines of code and tell me,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; which information I should provide to solve the problem. I know
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; that Solaris isn't any longer on your list of supported systems,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; but perhaps we can get it working again, if you tell me what
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; you need and I do the debugging.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; /usr/local/gdb-7.6.1_64_gcc/bin/gdb mpiexec
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; GNU gdb (GDB) 7.6.1
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ...
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) run -np 1 java InitFinalizeMain 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Starting program: /usr/local/openmpi-1.9.0_64_gcc/bin/mpiexec \
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   -np 1 java InitFinalizeMain
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; [New Thread 1 (LWP 1)]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; [New LWP    2        ]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; #
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; #
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; #  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=13064, tid=2
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ...
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; [LWP    2         exited]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; [New Thread 2        ]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; [Switching to Thread 1 (LWP 1)]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; sol_thread_fetch_registers: td_ta_map_id2thr: no thread can be
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   found to satisfy query
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) thread 1
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; [Switching to thread 1 (LWP    1        )]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; #0  0xffffffff7f6173d0 in rtld_db_dlactivity () from 
</span><br>
<span class="quotelev1">&gt; /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) b orterun.c:1081
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Breakpoint 1 at 0x1000070dc: file 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ../../../../openmpi-dev-124-g91e9686/orte/tools/orterun/orterun.c, line 
</span><br>
<span class="quotelev1">&gt; 1081.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) r
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; The program being debugged has been started already.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Start it from the beginning? (y or n) y
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Starting program: /usr/local/openmpi-1.9.0_64_gcc/bin/mpiexec -np 1 java 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; InitFinalizeMain
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; [New Thread 1 (LWP 1)]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; [New LWP    2        ]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; [Switching to Thread 1 (LWP 1)]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Breakpoint 1, orterun (argc=5, argv=0xffffffff7fffe0d8)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at 
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-dev-124-g91e9686/orte/tools/orterun/orterun.c:1081
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 1081        rc = orte_plm.spawn(jdata);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) print jdata
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; $1 = (orte_job_t *) 0x100125250
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) s
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; rsh_launch (jdata=0x100125250)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-dev-124-g91e9686/orte/mca/plm/rsh/plm_rsh_module.c:876
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 876         if (ORTE_FLAG_TEST(jdata, ORTE_JOB_FLAG_RESTART)) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) s    
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 881             ORTE_ACTIVATE_JOB_STATE(jdata, ORTE_JOB_STATE_INIT);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; orte_util_print_name_args (name=0x100118380 &lt;orte_process_info+104&gt;)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:122
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 122         if (NULL == name) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 142         job = orte_util_print_jobids(name-&gt;jobid);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; orte_util_print_jobids (job=2502885376) at 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:170
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 170         ptr = get_print_name_buffer();
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:92
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 92          if (!fns_init) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 101         ret = opal_tsd_getspecific(print_args_tsd_key, 
</span><br>
<span class="quotelev1">&gt; (void**)&amp;ptr);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; opal_tsd_getspecific (key=1, valuep=0xffffffff7fffd990)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/opal/threads/tsd.h:163
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 163         *valuep = pthread_getspecific(key);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 164         return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 165     }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:102
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 102         if (OPAL_SUCCESS != ret) return NULL;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 104         if (NULL == ptr) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 113         return (orte_print_args_buffers_t*) ptr;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 114     }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; orte_util_print_jobids (job=2502885376) at 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:172
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 172         if (NULL == ptr) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 178         if (ORTE_PRINT_NAME_ARG_NUM_BUFS == ptr-&gt;cntr) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 182         if (ORTE_JOBID_INVALID == job) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 184         } else if (ORTE_JOBID_WILDCARD == job) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 187             tmp1 = ORTE_JOB_FAMILY((unsigned long)job);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 188             tmp2 = ORTE_LOCAL_JOBID((unsigned long)job);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 189             snprintf(ptr-&gt;buffers[ptr-&gt;cntr++], 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 193         return ptr-&gt;buffers[ptr-&gt;cntr-1];
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 194     }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; orte_util_print_name_args (name=0x100118380 &lt;orte_process_info+104&gt;)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:143
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 143         vpid = orte_util_print_vpids(name-&gt;vpid);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; orte_util_print_vpids (vpid=0) at 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:260
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 260         ptr = get_print_name_buffer();
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:92
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 92          if (!fns_init) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 101         ret = opal_tsd_getspecific(print_args_tsd_key, 
</span><br>
<span class="quotelev1">&gt; (void**)&amp;ptr);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; opal_tsd_getspecific (key=1, valuep=0xffffffff7fffd9a0)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/opal/threads/tsd.h:163
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 163         *valuep = pthread_getspecific(key);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 164         return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 165     }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:102
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 102         if (OPAL_SUCCESS != ret) return NULL;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 104         if (NULL == ptr) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 113         return (orte_print_args_buffers_t*) ptr;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 114     }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; orte_util_print_vpids (vpid=0) at 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:262
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 262         if (NULL == ptr) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 268         if (ORTE_PRINT_NAME_ARG_NUM_BUFS == ptr-&gt;cntr) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 272         if (ORTE_VPID_INVALID == vpid) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 274         } else if (ORTE_VPID_WILDCARD == vpid) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 277             snprintf(ptr-&gt;buffers[ptr-&gt;cntr++], 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 281         return ptr-&gt;buffers[ptr-&gt;cntr-1];
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 282     }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; orte_util_print_name_args (name=0x100118380 &lt;orte_process_info+104&gt;)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:146
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 146         ptr = get_print_name_buffer();
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:92
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 92          if (!fns_init) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 101         ret = opal_tsd_getspecific(print_args_tsd_key, 
</span><br>
<span class="quotelev1">&gt; (void**)&amp;ptr);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; opal_tsd_getspecific (key=1, valuep=0xffffffff7fffda60)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/opal/threads/tsd.h:163
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 163         *valuep = pthread_getspecific(key);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 164         return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 165     }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:102
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 102         if (OPAL_SUCCESS != ret) return NULL;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 104         if (NULL == ptr) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 113         return (orte_print_args_buffers_t*) ptr;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 114     }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; orte_util_print_name_args (name=0x100118380 &lt;orte_process_info+104&gt;)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:148
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 148         if (NULL == ptr) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 154         if (ORTE_PRINT_NAME_ARG_NUM_BUFS == ptr-&gt;cntr) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 158         snprintf(ptr-&gt;buffers[ptr-&gt;cntr++], 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 162         return ptr-&gt;buffers[ptr-&gt;cntr-1];
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 163     }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; orte_util_print_jobids (job=4294967295) at 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:170
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 170         ptr = get_print_name_buffer();
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:92
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 92          if (!fns_init) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 101         ret = opal_tsd_getspecific(print_args_tsd_key, 
</span><br>
<span class="quotelev1">&gt; (void**)&amp;ptr);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; opal_tsd_getspecific (key=1, valuep=0xffffffff7fffda60)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/opal/threads/tsd.h:163
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 163         *valuep = pthread_getspecific(key);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 164         return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 165     }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:102
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 102         if (OPAL_SUCCESS != ret) return NULL;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 104         if (NULL == ptr) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 113         return (orte_print_args_buffers_t*) ptr;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 114     }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; orte_util_print_jobids (job=4294967295) at 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:172
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 172         if (NULL == ptr) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 178         if (ORTE_PRINT_NAME_ARG_NUM_BUFS == ptr-&gt;cntr) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 182         if (ORTE_JOBID_INVALID == job) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 183             snprintf(ptr-&gt;buffers[ptr-&gt;cntr++], 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ORTE_PRINT_NAME_ARGS_MAX_SIZE, &quot;[INVALID]&quot;);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 193         return ptr-&gt;buffers[ptr-&gt;cntr-1];
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 194     }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; orte_job_state_to_str (state=1) at 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/error_strings.c:217
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 217         switch(state) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 221             return &quot;PENDING INIT&quot;;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 317     }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; opal_output_verbose (level=1, output_id=0, 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     format=0xffffffff7f14dd98 &lt;orte_job_states&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &quot;\336\257\276\355\336\257\276\355&quot;)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at ../../../openmpi-dev-124-g91e9686/opal/util/output.c:373
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 373             va_start(arglist, format);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 369     {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 370         if (output_id &gt;= 0 &amp;&amp; output_id &lt; OPAL_OUTPUT_MAX_STREAMS &amp;&amp;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 377     }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; orte_state_base_activate_job_state (jdata=0x100125250, state=1)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-dev-124-g91e9686/orte/mca/state/base/state_base_fns.c:33
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 33          opal_list_item_t *itm, *any=NULL, *error=NULL;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 37          for (itm = opal_list_get_first(&amp;orte_job_states);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; opal_list_get_first (list=0xffffffff7f14dd98 &lt;orte_job_states&gt;)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at ../../../../openmpi-dev-124-g91e9686/opal/class/opal_list.h:320
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 320         opal_list_item_t* item = 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (opal_list_item_t*)list-&gt;opal_list_sentinel.opal_list_next;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 324         assert(1 == item-&gt;opal_list_item_refcount);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 325         assert( list == item-&gt;opal_list_item_belong_to );
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 328         return item;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 329     }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; orte_state_base_activate_job_state (jdata=0x100125250, state=1)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-dev-124-g91e9686/orte/mca/state/base/state_base_fns.c:38
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 38               itm != opal_list_get_end(&amp;orte_job_states);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; opal_list_get_end (list=0xffffffff7f14dd98 &lt;orte_job_states&gt;)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at ../../../../openmpi-dev-124-g91e9686/opal/class/opal_list.h:399
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 399         return &amp;(list-&gt;opal_list_sentinel);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 400     }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; orte_state_base_activate_job_state (jdata=0x100125250, state=1)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-dev-124-g91e9686/orte/mca/state/base/state_base_fns.c:37
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 37          for (itm = opal_list_get_first(&amp;orte_job_states);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 40              s = (orte_state_t*)itm;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 41              if (s-&gt;job_state == ORTE_JOB_STATE_ANY) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 45              if (s-&gt;job_state == ORTE_JOB_STATE_ERROR) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 48              if (s-&gt;job_state == state) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 49                  OPAL_OUTPUT_VERBOSE((1, 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; orte_state_base_framework.framework_output,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; orte_util_print_name_args (name=0x100118380 &lt;orte_process_info+104&gt;)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:122
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 122         if (NULL == name) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 142         job = orte_util_print_jobids(name-&gt;jobid);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; orte_util_print_jobids (job=2502885376) at 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:170
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 170         ptr = get_print_name_buffer();
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:92
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 92          if (!fns_init) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 101         ret = opal_tsd_getspecific(print_args_tsd_key, 
</span><br>
<span class="quotelev1">&gt; (void**)&amp;ptr);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; opal_tsd_getspecific (key=1, valuep=0xffffffff7fffd880)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/opal/threads/tsd.h:163
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 163         *valuep = pthread_getspecific(key);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 164         return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 165     }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:102
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 102         if (OPAL_SUCCESS != ret) return NULL;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 104         if (NULL == ptr) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 113         return (orte_print_args_buffers_t*) ptr;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 114     }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; orte_util_print_jobids (job=2502885376) at 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:172
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 172         if (NULL == ptr) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 178         if (ORTE_PRINT_NAME_ARG_NUM_BUFS == ptr-&gt;cntr) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 182         if (ORTE_JOBID_INVALID == job) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 184         } else if (ORTE_JOBID_WILDCARD == job) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 187             tmp1 = ORTE_JOB_FAMILY((unsigned long)job);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 188             tmp2 = ORTE_LOCAL_JOBID((unsigned long)job);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 189             snprintf(ptr-&gt;buffers[ptr-&gt;cntr++], 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 193         return ptr-&gt;buffers[ptr-&gt;cntr-1];
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 194     }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; orte_util_print_name_args (name=0x100118380 &lt;orte_process_info+104&gt;)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:143
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 143         vpid = orte_util_print_vpids(name-&gt;vpid);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; orte_util_print_vpids (vpid=0) at 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:260
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 260         ptr = get_print_name_buffer();
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:92
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 92          if (!fns_init) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 101         ret = opal_tsd_getspecific(print_args_tsd_key, 
</span><br>
<span class="quotelev1">&gt; (void**)&amp;ptr);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; opal_tsd_getspecific (key=1, valuep=0xffffffff7fffd890)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/opal/threads/tsd.h:163
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 163         *valuep = pthread_getspecific(key);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 164         return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 165     }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:102
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 102         if (OPAL_SUCCESS != ret) return NULL;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 104         if (NULL == ptr) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 113         return (orte_print_args_buffers_t*) ptr;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 114     }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; orte_util_print_vpids (vpid=0) at 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:262
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 262         if (NULL == ptr) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 268         if (ORTE_PRINT_NAME_ARG_NUM_BUFS == ptr-&gt;cntr) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 272         if (ORTE_VPID_INVALID == vpid) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 274         } else if (ORTE_VPID_WILDCARD == vpid) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 277             snprintf(ptr-&gt;buffers[ptr-&gt;cntr++], 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 281         return ptr-&gt;buffers[ptr-&gt;cntr-1];
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 282     }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; orte_util_print_name_args (name=0x100118380 &lt;orte_process_info+104&gt;)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:146
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 146         ptr = get_print_name_buffer();
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:92
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 92          if (!fns_init) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 101         ret = opal_tsd_getspecific(print_args_tsd_key, 
</span><br>
<span class="quotelev1">&gt; (void**)&amp;ptr);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; opal_tsd_getspecific (key=1, valuep=0xffffffff7fffd950)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/opal/threads/tsd.h:163
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 163         *valuep = pthread_getspecific(key);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 164         return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 165     }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:102
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 102         if (OPAL_SUCCESS != ret) return NULL;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 104         if (NULL == ptr) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 113         return (orte_print_args_buffers_t*) ptr;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 114     }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; orte_util_print_name_args (name=0x100118380 &lt;orte_process_info+104&gt;)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:148
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 148         if (NULL == ptr) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 154         if (ORTE_PRINT_NAME_ARG_NUM_BUFS == ptr-&gt;cntr) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 158         snprintf(ptr-&gt;buffers[ptr-&gt;cntr++], 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 162         return ptr-&gt;buffers[ptr-&gt;cntr-1];
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 163     }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; orte_util_print_jobids (job=4294967295) at 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:170
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 170         ptr = get_print_name_buffer();
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:92
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 92          if (!fns_init) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 101         ret = opal_tsd_getspecific(print_args_tsd_key, 
</span><br>
<span class="quotelev1">&gt; (void**)&amp;ptr);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; opal_tsd_getspecific (key=1, valuep=0xffffffff7fffd950)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/opal/threads/tsd.h:163
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 163         *valuep = pthread_getspecific(key);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 164         return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 165     }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; get_print_name_buffer () at 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:102
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 102         if (OPAL_SUCCESS != ret) return NULL;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 104         if (NULL == ptr) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 113         return (orte_print_args_buffers_t*) ptr;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 114     }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; orte_util_print_jobids (job=4294967295) at 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/name_fns.c:172
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 172         if (NULL == ptr) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 178         if (ORTE_PRINT_NAME_ARG_NUM_BUFS == ptr-&gt;cntr) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 182         if (ORTE_JOBID_INVALID == job) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 183             snprintf(ptr-&gt;buffers[ptr-&gt;cntr++], 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ORTE_PRINT_NAME_ARGS_MAX_SIZE, &quot;[INVALID]&quot;);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 193         return ptr-&gt;buffers[ptr-&gt;cntr-1];
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 194     }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; orte_job_state_to_str (state=1) at 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/orte/util/error_strings.c:217
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 217         switch(state) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 221             return &quot;PENDING INIT&quot;;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 317     }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; opal_output_verbose (level=1, output_id=-1, format=0x1 &lt;Address 0x1 out 
</span><br>
<span class="quotelev1">&gt; of 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; bounds&gt;)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at ../../../openmpi-dev-124-g91e9686/opal/util/output.c:373
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 373             va_start(arglist, format);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 369     {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 370         if (output_id &gt;= 0 &amp;&amp; output_id &lt; OPAL_OUTPUT_MAX_STREAMS &amp;&amp;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 377     }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; orte_state_base_activate_job_state (jdata=0x100125250, state=1)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-dev-124-g91e9686/orte/mca/state/base/state_base_fns.c:54
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 54                  if (NULL == s-&gt;cbfunc) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 62                  caddy = OBJ_NEW(orte_state_caddy_t);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; opal_obj_new_debug (type=0xffffffff7f14c7d8 &lt;orte_state_caddy_t_class&gt;, 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     file=0xffffffff7f034c08 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-dev-124-g91e9686/orte/mca/state/base/state_base_fns.c&quot;, 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; line=62) at 
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-dev-124-g91e9686/opal/class/opal_object.h:249
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 249         opal_object_t* object = opal_obj_new(type);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; opal_obj_new (cls=0xffffffff7f14c7d8 &lt;orte_state_caddy_t_class&gt;)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at ../../../../openmpi-dev-124-g91e9686/opal/class/opal_object.h:465
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 465         assert(cls-&gt;cls_sizeof &gt;= sizeof(opal_object_t));
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 470         object = (opal_object_t *) malloc(cls-&gt;cls_sizeof);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 472         if (0 == cls-&gt;cls_initialized) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 473             opal_class_initialize(cls);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; opal_class_initialize (cls=0xffffffff7f14c7d8 
</span><br>
<span class="quotelev1">&gt; &lt;orte_state_caddy_t_class&gt;)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/opal/class/opal_object.c:79
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 79          assert(cls);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 84          if (1 == cls-&gt;cls_initialized) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 87          opal_atomic_lock(&amp;class_lock);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; opal_atomic_lock (lock=0xffffffff7ee89bf0 &lt;class_lock&gt;)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at 
</span><br>
<span class="quotelev1">&gt; ../../openmpi-dev-124-g91e9686/opal/include/opal/sys/atomic_impl.h:397
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 397        while( !opal_atomic_cmpset_acq_32( &amp;(lock-&gt;u.lock),
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; opal_atomic_cmpset_acq_32 (addr=0xffffffff7ee89bf0 &lt;class_lock&gt;, 
</span><br>
<span class="quotelev1">&gt; oldval=0, 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; newval=1)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at 
</span><br>
<span class="quotelev1">&gt; ../../openmpi-dev-124-g91e9686/opal/include/opal/sys/sparcv9/atomic.h:107
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 107        rc = opal_atomic_cmpset_32(addr, oldval, newval);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; opal_atomic_cmpset_32 (addr=0xffffffff7ee89bf0 &lt;class_lock&gt;, oldval=0, 
</span><br>
<span class="quotelev1">&gt; newval=1)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at 
</span><br>
<span class="quotelev1">&gt; ../../openmpi-dev-124-g91e9686/opal/include/opal/sys/sparcv9/atomic.h:93
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 93         int32_t ret = newval;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 95         __asm__ __volatile__(&quot;casa [%1] &quot; ASI_P &quot;, %2, %0&quot;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 98         return (ret == oldval);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 99      }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; opal_atomic_cmpset_acq_32 (addr=0xffffffff7ee89bf0 &lt;class_lock&gt;, 
</span><br>
<span class="quotelev1">&gt; oldval=0, 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; newval=1)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at 
</span><br>
<span class="quotelev1">&gt; ../../openmpi-dev-124-g91e9686/opal/include/opal/sys/sparcv9/atomic.h:108
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 108        opal_atomic_rmb();
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; opal_atomic_rmb () at 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/opal/include/opal/sys/sparcv9/atomic.h:63
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 63          MEMBAR(&quot;#LoadLoad&quot;);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 64      }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; opal_atomic_cmpset_acq_32 (addr=0xffffffff7ee89bf0 &lt;class_lock&gt;, 
</span><br>
<span class="quotelev1">&gt; oldval=0, 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; newval=1)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at 
</span><br>
<span class="quotelev1">&gt; ../../openmpi-dev-124-g91e9686/opal/include/opal/sys/sparcv9/atomic.h:110
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 110        return rc;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 111     }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; opal_atomic_lock (lock=0xffffffff7ee89bf0 &lt;class_lock&gt;)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at 
</span><br>
<span class="quotelev1">&gt; ../../openmpi-dev-124-g91e9686/opal/include/opal/sys/atomic_impl.h:403
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 403     }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; opal_class_initialize (cls=0xffffffff7f14c7d8 
</span><br>
<span class="quotelev1">&gt; &lt;orte_state_caddy_t_class&gt;)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/opal/class/opal_object.c:93
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 93          if (1 == cls-&gt;cls_initialized) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 103         cls-&gt;cls_depth = 0;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 104         cls_construct_array_count = 0;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 105         cls_destruct_array_count  = 0;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 106         for (c = cls; c; c = c-&gt;cls_parent) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 107             if( NULL != c-&gt;cls_construct ) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 108                 cls_construct_array_count++;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 110             if( NULL != c-&gt;cls_destruct ) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 111                 cls_destruct_array_count++;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 113             cls-&gt;cls_depth++;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 106         for (c = cls; c; c = c-&gt;cls_parent) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 107             if( NULL != c-&gt;cls_construct ) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 110             if( NULL != c-&gt;cls_destruct ) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 113             cls-&gt;cls_depth++;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 106         for (c = cls; c; c = c-&gt;cls_parent) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 122             (void 
</span><br>
<span class="quotelev1">&gt; (**)(opal_object_t*))malloc((cls_construct_array_count +
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 123                                                
</span><br>
<span class="quotelev1">&gt; cls_destruct_array_count + 2) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; *
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 122             (void 
</span><br>
<span class="quotelev1">&gt; (**)(opal_object_t*))malloc((cls_construct_array_count +
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 121         cls-&gt;cls_construct_array = 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 125         if (NULL == cls-&gt;cls_construct_array) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 130             cls-&gt;cls_construct_array + cls_construct_array_count + 
</span><br>
<span class="quotelev1">&gt; 1;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 129         cls-&gt;cls_destruct_array =
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 136         cls_construct_array = cls-&gt;cls_construct_array + 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; cls_construct_array_count;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 137         cls_destruct_array  = cls-&gt;cls_destruct_array;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 139         c = cls;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 140         *cls_construct_array = NULL;  /* end marker for the 
</span><br>
<span class="quotelev1">&gt; constructors */
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 141         for (i = 0; i &lt; cls-&gt;cls_depth; i++) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 142             if( NULL != c-&gt;cls_construct ) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 143                 --cls_construct_array;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 144                 *cls_construct_array = c-&gt;cls_construct;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 146             if( NULL != c-&gt;cls_destruct ) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 147                 *cls_destruct_array = c-&gt;cls_destruct;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 148                 cls_destruct_array++;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 150             c = c-&gt;cls_parent;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 141         for (i = 0; i &lt; cls-&gt;cls_depth; i++) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 142             if( NULL != c-&gt;cls_construct ) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 146             if( NULL != c-&gt;cls_destruct ) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 150             c = c-&gt;cls_parent;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 141         for (i = 0; i &lt; cls-&gt;cls_depth; i++) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 152         *cls_destruct_array = NULL;  /* end marker for the 
</span><br>
<span class="quotelev1">&gt; destructors */
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 154         cls-&gt;cls_initialized = 1;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 155         save_class(cls);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; save_class (cls=0xffffffff7f14c7d8 &lt;orte_state_caddy_t_class&gt;)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/opal/class/opal_object.c:188
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 188         if (num_classes &gt;= max_classes) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 189             expand_array();
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; expand_array () at 
</span><br>
<span class="quotelev1">&gt; ../../openmpi-dev-124-g91e9686/opal/class/opal_object.c:201
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 201         max_classes += increment;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 202         classes = (void**)realloc(classes, sizeof(opal_class_t*) * 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; max_classes);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 203         if (NULL == classes) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 207         for (i = num_classes; i &lt; max_classes; ++i) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 208             classes[i] = NULL;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 207         for (i = num_classes; i &lt; max_classes; ++i) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 208             classes[i] = NULL;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 207         for (i = num_classes; i &lt; max_classes; ++i) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 208             classes[i] = NULL;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 207         for (i = num_classes; i &lt; max_classes; ++i) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 208             classes[i] = NULL;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 207         for (i = num_classes; i &lt; max_classes; ++i) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 208             classes[i] = NULL;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 207         for (i = num_classes; i &lt; max_classes; ++i) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 208             classes[i] = NULL;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 207         for (i = num_classes; i &lt; max_classes; ++i) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 208             classes[i] = NULL;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 207         for (i = num_classes; i &lt; max_classes; ++i) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 208             classes[i] = NULL;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 207         for (i = num_classes; i &lt; max_classes; ++i) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 208             classes[i] = NULL;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 207         for (i = num_classes; i &lt; max_classes; ++i) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 208             classes[i] = NULL;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 207         for (i = num_classes; i &lt; max_classes; ++i) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 210     }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; save_class (cls=0xffffffff7f14c7d8 &lt;orte_state_caddy_t_class&gt;)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/opal/class/opal_object.c:192
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 192         classes[num_classes] = cls-&gt;cls_construct_array;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 193         ++num_classes;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 194     }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; opal_class_initialize (cls=0xffffffff7f14c7d8 
</span><br>
<span class="quotelev1">&gt; &lt;orte_state_caddy_t_class&gt;)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/opal/class/opal_object.c:159
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 159         opal_atomic_unlock(&amp;class_lock);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; opal_atomic_unlock (lock=0xffffffff7ee89bf0 &lt;class_lock&gt;)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at 
</span><br>
<span class="quotelev1">&gt; ../../openmpi-dev-124-g91e9686/opal/include/opal/sys/atomic_impl.h:409
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 409        opal_atomic_wmb();
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; opal_atomic_wmb () at 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ../../openmpi-dev-124-g91e9686/opal/include/opal/sys/sparcv9/atomic.h:69
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 69          MEMBAR(&quot;#StoreStore&quot;);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 70      }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; opal_atomic_unlock (lock=0xffffffff7ee89bf0 &lt;class_lock&gt;)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at 
</span><br>
<span class="quotelev1">&gt; ../../openmpi-dev-124-g91e9686/opal/include/opal/sys/atomic_impl.h:410
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 410        lock-&gt;u.lock=OPAL_ATOMIC_UNLOCKED;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 411     }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; opal_class_initialize (cls=0xffffffff7f14c7d8 
</span><br>
<span class="quotelev1">&gt; &lt;orte_state_caddy_t_class&gt;)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at ../../openmpi-dev-124-g91e9686/opal/class/opal_object.c:160
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 160     }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; opal_obj_new (cls=0xffffffff7f14c7d8 &lt;orte_state_caddy_t_class&gt;)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at ../../../../openmpi-dev-124-g91e9686/opal/class/opal_object.h:475
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 475         if (NULL != object) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 476             object-&gt;obj_class = cls;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 477             object-&gt;obj_reference_count = 1;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 478             opal_obj_run_constructors(object);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; opal_obj_run_constructors (object=0x1001bfcf0)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at ../../../../openmpi-dev-124-g91e9686/opal/class/opal_object.h:420
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 420         assert(NULL != object-&gt;obj_class);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 422         cls_construct = object-&gt;obj_class-&gt;cls_construct_array;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 423         while( NULL != *cls_construct ) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 424             (*cls_construct)(object);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; orte_state_caddy_construct (caddy=0x1001bfcf0)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-dev-124-g91e9686/orte/mca/state/base/state_base_frame.c:84
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 84          memset(&amp;caddy-&gt;ev, 0, sizeof(opal_event_t));
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 85          caddy-&gt;jdata = NULL;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 86      }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; opal_obj_run_constructors (object=0x1001bfcf0)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at ../../../../openmpi-dev-124-g91e9686/opal/class/opal_object.h:425
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 425             cls_construct++;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 423         while( NULL != *cls_construct ) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 427     }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; opal_obj_new (cls=0xffffffff7f14c7d8 &lt;orte_state_caddy_t_class&gt;)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at ../../../../openmpi-dev-124-g91e9686/opal/class/opal_object.h:480
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 480         return object;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 481     }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; opal_obj_new_debug (type=0xffffffff7f14c7d8 &lt;orte_state_caddy_t_class&gt;, 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     file=0xffffffff7f034c08 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-dev-124-g91e9686/orte/mca/state/base/state_base_fns.c&quot;, 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; line=62) at 
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-dev-124-g91e9686/opal/class/opal_object.h:250
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 250         object-&gt;obj_magic_id = OPAL_OBJ_MAGIC_ID;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 251         object-&gt;cls_init_file_name = file;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 252         object-&gt;cls_init_lineno = line;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 253         return object;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 254     }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; orte_state_base_activate_job_state (jdata=0x100125250, state=1)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-dev-124-g91e9686/orte/mca/state/base/state_base_fns.c:63
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 63                  if (NULL != jdata) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 64                      caddy-&gt;jdata = jdata;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 65                      caddy-&gt;job_state = state;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 66                      OBJ_RETAIN(jdata);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; opal_obj_update (inc=1, object=0x100125250)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at ../../../../openmpi-dev-124-g91e9686/opal/class/opal_object.h:497
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 497         return opal_atomic_add_32(&amp;(object-&gt;obj_reference_count), 
</span><br>
<span class="quotelev1">&gt; inc);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; opal_atomic_add_32 (addr=0x100125260, delta=1)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-dev-124-g91e9686/opal/include/opal/sys/atomic_impl.h:63
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 63            oldval = *addr;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 64         } while (0 == opal_atomic_cmpset_32(addr, oldval, oldval + 
</span><br>
<span class="quotelev1">&gt; delta));
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; opal_atomic_cmpset_32 (addr=0x100125260, oldval=1, newval=2)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-dev-124-g91e9686/opal/include/opal/sys/sparcv9/atomic.h:93
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 93         int32_t ret = newval;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 95         __asm__ __volatile__(&quot;casa [%1] &quot; ASI_P &quot;, %2, %0&quot;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 98         return (ret == oldval);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 99      }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; opal_atomic_add_32 (addr=0x100125260, delta=1)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-dev-124-g91e9686/opal/include/opal/sys/atomic_impl.h:65
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 65         return (oldval + delta);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 66      }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; orte_state_base_activate_job_state (jdata=0x100125250, state=1)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-dev-124-g91e9686/orte/mca/state/base/state_base_fns.c:66
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 66                      OBJ_RETAIN(jdata);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 68                  opal_event_set(orte_event_base, &amp;caddy-&gt;ev, -1, 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; OPAL_EV_WRITE, s-&gt;cbfunc, caddy);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 69                  opal_event_set_priority(&amp;caddy-&gt;ev, s-&gt;priority);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 70                  opal_event_active(&amp;caddy-&gt;ev, OPAL_EV_WRITE, 1);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 71                  return;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 105     }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; rsh_launch (jdata=0x100125250)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-dev-124-g91e9686/orte/mca/plm/rsh/plm_rsh_module.c:883
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 883         return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 884     }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; orterun (argc=5, argv=0xffffffff7fffe0d8)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     at 
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-dev-124-g91e9686/orte/tools/orterun/orterun.c:1084
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 1084        while (orte_event_base_active) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 1085            opal_event_loop(orte_event_base, OPAL_EVLOOP_ONCE);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 1084        while (orte_event_base_active) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 1085            opal_event_loop(orte_event_base, OPAL_EVLOOP_ONCE);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 1084        while (orte_event_base_active) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 1085            opal_event_loop(orte_event_base, OPAL_EVLOOP_ONCE);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; #
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; #
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; #  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=13080, tid=2
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; #
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; # JRE version: Java(TM) SE Runtime Environment (8.0-b132) (build 
</span><br>
<span class="quotelev1">&gt; 1.8.0-b132)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; # Java VM: Java HotSpot(TM) 64-Bit Server VM (25.0-b70 mixed mode 
</span><br>
<span class="quotelev1">&gt; solaris-sparc 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; compressed oops)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; # Problematic frame:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; # 1084      while (orte_event_base_active) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 1085            opal_event_loop(orte_event_base, OPAL_EVLOOP_ONCE);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; C  [libc.so.1+0x3c7f0]  strlen+0x50
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; #
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; # Failed to write core dump. Core dumps have been disabled. To enable 
</span><br>
<span class="quotelev1">&gt; core 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; dumping, try &quot;ulimit -c unlimited&quot; before starting Java again
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; #
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; # An error report file with more information is saved as:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; # 
</span><br>
<span class="quotelev1">&gt; /home/fd1026/work/skripte/master/parallel/prog/mpi/java/hs_err_pid13080.log
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; #
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; # If you would like to submit a bug report, please visit:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; #   <a href="http://bugreport.sun.com/bugreport/crash.jsp">http://bugreport.sun.com/bugreport/crash.jsp</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; # The crash happened outside the Java Virtual Machine in native code.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; # See problematic frame for where to report the bug.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; #
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; mpiexec noticed that process rank 0 with PID 0 on node tyr exited on 
</span><br>
<span class="quotelev1">&gt; signal 6 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (Abort).
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 1084        while (orte_event_base_active) {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 1089        orte_odls.kill_local_procs(NULL);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Thank you very much for any help in advance.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Kind regards
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Siegmar
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25565.php">Vinson Leung: "Re: [OMPI users] low CPU utilization with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="25563.php">Oscar Vega-Gisbert: "Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686 on Solaris"</a>
<li><strong>In reply to:</strong> <a href="25562.php">Siegmar Gross: "Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686 on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25567.php">Gilles Gouaillardet: "Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686 on Solaris"</a>
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
