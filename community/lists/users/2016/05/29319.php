<?
$subject_val = "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 27 02:17:04 2016" -->
<!-- isoreceived="20160527061704" -->
<!-- sent="Fri, 27 May 2016 08:16:41 +0200" -->
<!-- isosent="20160527061641" -->
<!-- name="Siegmar Gross" -->
<!-- email="siegmar.gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2" -->
<!-- id="f5653a5c-174f-4569-c730-082a9db82e6a_at_informatik.hs-fulda.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="E90A0DA1-5298-4B3B-A508-D2A1E49161B7_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2<br>
<strong>From:</strong> Siegmar Gross (<em>siegmar.gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-27 02:16:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29320.php">Marco D'Amico: "[OMPI users] OpenMPI virtualization aware"</a>
<li><strong>Previous message:</strong> <a href="29318.php">Jeff Squyres (jsquyres): "Re: [OMPI users] users Digest, Vol 3510, Issue 2"</a>
<li><strong>In reply to:</strong> <a href="29316.php">Ralph Castain: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29303.php">Jeff Squyres (jsquyres): "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p><p>Am 26.05.2016 um 17:38 schrieb Ralph Castain:
<br>
<span class="quotelev1">&gt; I&#146;m afraid I honestly can&#146;t make any sense of it. It seems
</span><br>
<span class="quotelev1">&gt; you at least have a simple workaround (use a hostfile instead
</span><br>
<span class="quotelev1">&gt; of -host), yes?
</span><br>
<p>Only the combination &quot;--host&quot; and &quot;--slot-list&quot; breaks.
<br>
Everything else works as expected. One more remark: As you
<br>
can see below, this combination worked using gdb and &quot;next&quot;
<br>
after the breakpoint. The process blocks, if I keep the
<br>
enter-key pressed down and I have to kill simple_spawn in
<br>
another window to get control back in gdb (&lt;Ctrl-c&gt; or
<br>
anything else didn't work). I got this error yesterday
<br>
evening.
<br>
<p>...
<br>
(gdb)
<br>
ompi_mpi_init (argc=0, argv=0x0, requested=0, provided=0x7fffffffbc0c)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-1.10.3rc3/ompi/runtime/ompi_mpi_init.c:738
<br>
738         if (OMPI_SUCCESS != (ret = ompi_file_init())) {
<br>
(gdb)
<br>
744         if (OMPI_SUCCESS != (ret = ompi_win_init())) {
<br>
(gdb)
<br>
750         if (OMPI_SUCCESS != (ret = ompi_attr_init())) {
<br>
(gdb)
<br>
758         if (OMPI_SUCCESS != (ret = ompi_proc_complete_init())) {
<br>
(gdb)
<br>
764         ret = MCA_PML_CALL(enable(true));
<br>
(gdb)
<br>
765         if( OMPI_SUCCESS != ret ) {
<br>
(gdb)
<br>
771         if (NULL == (procs = ompi_proc_world(&amp;nprocs))) {
<br>
(gdb)
<br>
775         ret = MCA_PML_CALL(add_procs(procs, nprocs));
<br>
(gdb)
<br>
776         free(procs);
<br>
(gdb)
<br>
780         if (OMPI_ERR_UNREACH == ret) {
<br>
(gdb)
<br>
785         } else if (OMPI_SUCCESS != ret) {
<br>
(gdb)
<br>
790         MCA_PML_CALL(add_comm(&amp;ompi_mpi_comm_world.comm));
<br>
(gdb)
<br>
791         MCA_PML_CALL(add_comm(&amp;ompi_mpi_comm_self.comm));
<br>
(gdb)
<br>
796         if (ompi_mpi_show_mca_params) {
<br>
(gdb)
<br>
803         ompi_rte_wait_for_debugger();
<br>
(gdb)
<br>
807         if (ompi_enable_timing &amp;&amp; 0 == OMPI_PROC_MY_NAME-&gt;vpid) {
<br>
(gdb)
<br>
817         coll = OBJ_NEW(ompi_rte_collective_t);
<br>
(gdb)
<br>
818         coll-&gt;id = ompi_process_info.peer_init_barrier;
<br>
(gdb)
<br>
819         coll-&gt;active = true;
<br>
(gdb)
<br>
820         if (OMPI_SUCCESS != (ret = ompi_rte_barrier(coll))) {
<br>
(gdb)
<br>
825         OMPI_WAIT_FOR_COMPLETION(coll-&gt;active);
<br>
(gdb)
<br>
<p><p><p><p><p><p><p><p><p><p><p><p><p><p>Program received signal SIGTERM, Terminated.
<br>
0x00007ffff7a7acd0 in opal_progress_at_plt ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12
<br>
(gdb)
<br>
Single stepping until exit from function opal_progress_at_plt,
<br>
which has no line number information.
<br>
[Thread 0x7ffff491b700 (LWP 19602) exited]
<br>
<p>Program terminated with signal SIGTERM, Terminated.
<br>
The program no longer exists.
<br>
(gdb)
<br>
The program is not being run.
<br>
(gdb)
<br>
...
<br>
<p><p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><span class="quotelev2">&gt;&gt; On May 26, 2016, at 5:48 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph and Gilles,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; it's strange that the program works with &quot;--host&quot; and &quot;--slot-list&quot;
</span><br>
<span class="quotelev2">&gt;&gt; in your environment and not in mine. I get the following output, if
</span><br>
<span class="quotelev2">&gt;&gt; I run the program in gdb without a breakpoint.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; loki spawn 142 gdb /usr/local/openmpi-1.10.3_64_gcc/bin/mpiexec
</span><br>
<span class="quotelev2">&gt;&gt; GNU gdb (GDB; SUSE Linux Enterprise 12) 7.9.1
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) set args -np 1 --host loki --slot-list 0:0-1,1:0-1 simple_spawn
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) run
</span><br>
<span class="quotelev2">&gt;&gt; Starting program: /usr/local/openmpi-1.10.3_64_gcc/bin/mpiexec -np 1 --host loki --slot-list 0:0-1,1:0-1 simple_spawn
</span><br>
<span class="quotelev2">&gt;&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev2">&gt;&gt; Using host libthread_db library &quot;/lib64/libthread_db.so.1&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; Detaching after fork from child process 18031.
</span><br>
<span class="quotelev2">&gt;&gt; [pid 18031] starting up!
</span><br>
<span class="quotelev2">&gt;&gt; 0 completed MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; Parent [pid 18031] about to spawn!
</span><br>
<span class="quotelev2">&gt;&gt; Detaching after fork from child process 18033.
</span><br>
<span class="quotelev2">&gt;&gt; Detaching after fork from child process 18034.
</span><br>
<span class="quotelev2">&gt;&gt; [pid 18033] starting up!
</span><br>
<span class="quotelev2">&gt;&gt; [pid 18034] starting up!
</span><br>
<span class="quotelev2">&gt;&gt; [loki:18034] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [loki:18034] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I get a different output, if I run the program in gdb with
</span><br>
<span class="quotelev2">&gt;&gt; a breakpoint.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; gdb /usr/local/openmpi-1.10.3_64_gcc/bin/mpiexec
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) set args -np 1 --host loki --slot-list 0:0-1,1:0-1 simple_spawn
</span><br>
<span class="quotelev2">&gt;&gt; (gbd) set follow-fork-mode child
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) break ompi_proc_self
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) run
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) next
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Repeating &quot;next&quot; very often results in the following output.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; Starting program: /home/fd1026/work/skripte/master/parallel/prog/mpi/spawn/simple_spawn
</span><br>
<span class="quotelev2">&gt;&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev2">&gt;&gt; Using host libthread_db library &quot;/lib64/libthread_db.so.1&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; [pid 13277] starting up!
</span><br>
<span class="quotelev2">&gt;&gt; [New Thread 0x7ffff42ef700 (LWP 13289)]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Breakpoint 1, ompi_proc_self (size=0x7fffffffc060)
</span><br>
<span class="quotelev2">&gt;&gt;    at ../../openmpi-1.10.3rc3/ompi/proc/proc.c:413
</span><br>
<span class="quotelev2">&gt;&gt; 413         ompi_proc_t **procs = (ompi_proc_t**) malloc(sizeof(ompi_proc_t*));
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) n
</span><br>
<span class="quotelev2">&gt;&gt; 414         if (NULL == procs) {
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 423         OBJ_RETAIN(ompi_proc_local_proc);
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 424         *procs = ompi_proc_local_proc;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 425         *size = 1;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 426         return procs;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 427     }
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; ompi_comm_init () at ../../openmpi-1.10.3rc3/ompi/communicator/comm_init.c:138
</span><br>
<span class="quotelev2">&gt;&gt; 138         group-&gt;grp_my_rank       = 0;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 139         group-&gt;grp_proc_count    = (int)size;
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; 193         ompi_comm_reg_init();
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 196         ompi_comm_request_init ();
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 198         return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 199     }
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; ompi_mpi_init (argc=0, argv=0x0, requested=0, provided=0x7fffffffc21c)
</span><br>
<span class="quotelev2">&gt;&gt;    at ../../openmpi-1.10.3rc3/ompi/runtime/ompi_mpi_init.c:738
</span><br>
<span class="quotelev2">&gt;&gt; 738         if (OMPI_SUCCESS != (ret = ompi_file_init())) {
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 744         if (OMPI_SUCCESS != (ret = ompi_win_init())) {
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 750         if (OMPI_SUCCESS != (ret = ompi_attr_init())) {
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; 988         ompi_mpi_initialized = true;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 991         if (ompi_enable_timing &amp;&amp; 0 == OMPI_PROC_MY_NAME-&gt;vpid) {
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 999         return MPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 1000    }
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; PMPI_Init (argc=0x0, argv=0x0) at pinit.c:94
</span><br>
<span class="quotelev2">&gt;&gt; 94          if (MPI_SUCCESS != err) {
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 104         return MPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 105     }
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 0x0000000000400d0c in main ()
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; Single stepping until exit from function main,
</span><br>
<span class="quotelev2">&gt;&gt; which has no line number information.
</span><br>
<span class="quotelev2">&gt;&gt; 0 completed MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; Parent [pid 13277] about to spawn!
</span><br>
<span class="quotelev2">&gt;&gt; [New process 13472]
</span><br>
<span class="quotelev2">&gt;&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev2">&gt;&gt; Using host libthread_db library &quot;/lib64/libthread_db.so.1&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; process 13472 is executing new program: /usr/local/openmpi-1.10.3_64_gcc/bin/orted
</span><br>
<span class="quotelev2">&gt;&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev2">&gt;&gt; Using host libthread_db library &quot;/lib64/libthread_db.so.1&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; [New process 13474]
</span><br>
<span class="quotelev2">&gt;&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev2">&gt;&gt; Using host libthread_db library &quot;/lib64/libthread_db.so.1&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; process 13474 is executing new program: /home/fd1026/work/skripte/master/parallel/prog/mpi/spawn/simple_spawn
</span><br>
<span class="quotelev2">&gt;&gt; [pid 13475] starting up!
</span><br>
<span class="quotelev2">&gt;&gt; [pid 13476] starting up!
</span><br>
<span class="quotelev2">&gt;&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev2">&gt;&gt; Using host libthread_db library &quot;/lib64/libthread_db.so.1&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; [pid 13474] starting up!
</span><br>
<span class="quotelev2">&gt;&gt; [New Thread 0x7ffff491b700 (LWP 13480)]
</span><br>
<span class="quotelev2">&gt;&gt; [Switching to Thread 0x7ffff7ff1740 (LWP 13474)]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Breakpoint 1, ompi_proc_self (size=0x7fffffffba30)
</span><br>
<span class="quotelev2">&gt;&gt;    at ../../openmpi-1.10.3rc3/ompi/proc/proc.c:413
</span><br>
<span class="quotelev2">&gt;&gt; 413         ompi_proc_t **procs = (ompi_proc_t**) malloc(sizeof(ompi_proc_t*));
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 414         if (NULL == procs) {
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; 426         return procs;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 427     }
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; ompi_comm_init () at ../../openmpi-1.10.3rc3/ompi/communicator/comm_init.c:138
</span><br>
<span class="quotelev2">&gt;&gt; 138         group-&gt;grp_my_rank       = 0;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 139         group-&gt;grp_proc_count    = (int)size;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 140         OMPI_GROUP_SET_INTRINSIC (group);
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; 193         ompi_comm_reg_init();
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 196         ompi_comm_request_init ();
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 198         return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 199     }
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; ompi_mpi_init (argc=0, argv=0x0, requested=0, provided=0x7fffffffbbec)
</span><br>
<span class="quotelev2">&gt;&gt;    at ../../openmpi-1.10.3rc3/ompi/runtime/ompi_mpi_init.c:738
</span><br>
<span class="quotelev2">&gt;&gt; 738         if (OMPI_SUCCESS != (ret = ompi_file_init())) {
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 744         if (OMPI_SUCCESS != (ret = ompi_win_init())) {
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 750         if (OMPI_SUCCESS != (ret = ompi_attr_init())) {
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; 863         if (OMPI_SUCCESS != (ret = ompi_pubsub_base_select())) {
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 869         if (OMPI_SUCCESS != (ret = mca_base_framework_open(&amp;ompi_dpm_base_framework, 0))) {
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 873         if (OMPI_SUCCESS != (ret = ompi_dpm_base_select())) {
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 884         if ( OMPI_SUCCESS !=
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 894         if (OMPI_SUCCESS !=
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 900         if (OMPI_SUCCESS !=
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 911         if (OMPI_SUCCESS != (ret = ompi_dpm.dyn_init())) {
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; Parent done with spawn
</span><br>
<span class="quotelev2">&gt;&gt; Parent sending message to child
</span><br>
<span class="quotelev2">&gt;&gt; 2 completed MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; Hello from the child 2 of 3 on host loki pid 13476
</span><br>
<span class="quotelev2">&gt;&gt; 1 completed MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; Hello from the child 1 of 3 on host loki pid 13475
</span><br>
<span class="quotelev2">&gt;&gt; 921         if (OMPI_SUCCESS != (ret = ompi_cr_init())) {
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 931         opal_progress_event_users_decrement();
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 934         opal_progress_set_yield_when_idle(ompi_mpi_yield_when_idle);
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 937         if (ompi_mpi_event_tick_rate &gt;= 0) {
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 946         if (OMPI_SUCCESS != (ret = ompi_mpiext_init())) {
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 953         if (ret != OMPI_SUCCESS) {
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 972         OBJ_CONSTRUCT(&amp;ompi_registered_datareps, opal_list_t);
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 977         OBJ_CONSTRUCT( &amp;ompi_mpi_f90_integer_hashtable, opal_hash_table_t);
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 978         opal_hash_table_init(&amp;ompi_mpi_f90_integer_hashtable, 16 /* why not? */);
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 980         OBJ_CONSTRUCT( &amp;ompi_mpi_f90_real_hashtable, opal_hash_table_t);
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 981         opal_hash_table_init(&amp;ompi_mpi_f90_real_hashtable, FLT_MAX_10_EXP);
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 983         OBJ_CONSTRUCT( &amp;ompi_mpi_f90_complex_hashtable, opal_hash_table_t);
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 984         opal_hash_table_init(&amp;ompi_mpi_f90_complex_hashtable, FLT_MAX_10_EXP);
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 988         ompi_mpi_initialized = true;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 991         if (ompi_enable_timing &amp;&amp; 0 == OMPI_PROC_MY_NAME-&gt;vpid) {
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 999         return MPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 1000    }
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; PMPI_Init (argc=0x0, argv=0x0) at pinit.c:94
</span><br>
<span class="quotelev2">&gt;&gt; 94          if (MPI_SUCCESS != err) {
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 104         return MPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 105     }
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 0x0000000000400d0c in main ()
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; Single stepping until exit from function main,
</span><br>
<span class="quotelev2">&gt;&gt; which has no line number information.
</span><br>
<span class="quotelev2">&gt;&gt; 0 completed MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; Hello from the child 0 of 3 on host loki pid 13474
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Child 2 disconnected
</span><br>
<span class="quotelev2">&gt;&gt; Child 1 disconnected
</span><br>
<span class="quotelev2">&gt;&gt; Child 0 received msg: 38
</span><br>
<span class="quotelev2">&gt;&gt; Parent disconnected
</span><br>
<span class="quotelev2">&gt;&gt; 13277: exiting
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Program received signal SIGTERM, Terminated.
</span><br>
<span class="quotelev2">&gt;&gt; 0x0000000000400f0a in main ()
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; Single stepping until exit from function main,
</span><br>
<span class="quotelev2">&gt;&gt; which has no line number information.
</span><br>
<span class="quotelev2">&gt;&gt; [tcsetpgrp failed in terminal_inferior: No such process]
</span><br>
<span class="quotelev2">&gt;&gt; [Thread 0x7ffff491b700 (LWP 13480) exited]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Program terminated with signal SIGTERM, Terminated.
</span><br>
<span class="quotelev2">&gt;&gt; The program no longer exists.
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; The program is not being run.
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; The program is not being run.
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) info break
</span><br>
<span class="quotelev2">&gt;&gt; Num     Type           Disp Enb Address            What
</span><br>
<span class="quotelev2">&gt;&gt; 1       breakpoint     keep y   0x00007ffff7aa35c7 in ompi_proc_self
</span><br>
<span class="quotelev2">&gt;&gt;                                                   at ../../openmpi-1.10.3rc3/ompi/proc/proc.c:413 inf 8, 7, 6, 5, 4, 3, 2, 1
</span><br>
<span class="quotelev2">&gt;&gt;        breakpoint already hit 2 times
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) delete 1
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) r
</span><br>
<span class="quotelev2">&gt;&gt; Starting program: /home/fd1026/work/skripte/master/parallel/prog/mpi/spawn/simple_spawn
</span><br>
<span class="quotelev2">&gt;&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev2">&gt;&gt; Using host libthread_db library &quot;/lib64/libthread_db.so.1&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; [pid 16708] starting up!
</span><br>
<span class="quotelev2">&gt;&gt; 0 completed MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; Parent [pid 16708] about to spawn!
</span><br>
<span class="quotelev2">&gt;&gt; [New process 16720]
</span><br>
<span class="quotelev2">&gt;&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev2">&gt;&gt; Using host libthread_db library &quot;/lib64/libthread_db.so.1&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; process 16720 is executing new program: /usr/local/openmpi-1.10.3_64_gcc/bin/orted
</span><br>
<span class="quotelev2">&gt;&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev2">&gt;&gt; Using host libthread_db library &quot;/lib64/libthread_db.so.1&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; [New process 16722]
</span><br>
<span class="quotelev2">&gt;&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev2">&gt;&gt; Using host libthread_db library &quot;/lib64/libthread_db.so.1&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; process 16722 is executing new program: /home/fd1026/work/skripte/master/parallel/prog/mpi/spawn/simple_spawn
</span><br>
<span class="quotelev2">&gt;&gt; [pid 16723] starting up!
</span><br>
<span class="quotelev2">&gt;&gt; [pid 16724] starting up!
</span><br>
<span class="quotelev2">&gt;&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev2">&gt;&gt; Using host libthread_db library &quot;/lib64/libthread_db.so.1&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; [pid 16722] starting up!
</span><br>
<span class="quotelev2">&gt;&gt; Parent done with spawn
</span><br>
<span class="quotelev2">&gt;&gt; Parent sending message to child
</span><br>
<span class="quotelev2">&gt;&gt; 1 completed MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; Hello from the child 1 of 3 on host loki pid 16723
</span><br>
<span class="quotelev2">&gt;&gt; 2 completed MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; Hello from the child 2 of 3 on host loki pid 16724
</span><br>
<span class="quotelev2">&gt;&gt; 0 completed MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; Hello from the child 0 of 3 on host loki pid 16722
</span><br>
<span class="quotelev2">&gt;&gt; Child 0 received msg: 38
</span><br>
<span class="quotelev2">&gt;&gt; Child 0 disconnected
</span><br>
<span class="quotelev2">&gt;&gt; Parent disconnected
</span><br>
<span class="quotelev2">&gt;&gt; Child 1 disconnected
</span><br>
<span class="quotelev2">&gt;&gt; Child 2 disconnected
</span><br>
<span class="quotelev2">&gt;&gt; 16708: exiting
</span><br>
<span class="quotelev2">&gt;&gt; 16724: exiting
</span><br>
<span class="quotelev2">&gt;&gt; 16723: exiting
</span><br>
<span class="quotelev2">&gt;&gt; [New Thread 0x7ffff491b700 (LWP 16729)]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Program received signal SIGTERM, Terminated.
</span><br>
<span class="quotelev2">&gt;&gt; [Switching to Thread 0x7ffff7ff1740 (LWP 16722)]
</span><br>
<span class="quotelev2">&gt;&gt; __GI__dl_debug_state () at dl-debug.c:74
</span><br>
<span class="quotelev2">&gt;&gt; 74      dl-debug.c: No such file or directory.
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; WARNING: A process refused to die despite all the efforts!
</span><br>
<span class="quotelev2">&gt;&gt; This process may still be running and/or consuming resources.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Host: loki
</span><br>
<span class="quotelev2">&gt;&gt; PID:  16722
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The following simple_spawn processes exist now.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; loki spawn 171 ps -aef | grep simple_spawn
</span><br>
<span class="quotelev2">&gt;&gt; fd1026   11079 11053  0 14:00 pts/0    00:00:00 /usr/local/openmpi-1.10.3_64_gcc/bin/mpiexec -np 1 --host loki --slot-list 0:0-1,1:0-1 simple_spawn
</span><br>
<span class="quotelev2">&gt;&gt; fd1026   11095 11079 29 14:01 pts/0    00:09:37 [simple_spawn] &lt;defunct&gt;
</span><br>
<span class="quotelev2">&gt;&gt; fd1026   16722     1  0 14:31 ?        00:00:00 [simple_spawn] &lt;defunct&gt;
</span><br>
<span class="quotelev2">&gt;&gt; fd1026   17271 29963  0 14:33 pts/2    00:00:00 grep simple_spawn
</span><br>
<span class="quotelev2">&gt;&gt; loki spawn 172
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is it possible that there is a race condition? How can I help
</span><br>
<span class="quotelev2">&gt;&gt; to get a solution for my problem?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Kind regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Siegmar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am 24.05.2016 um 16:54 schrieb Ralph Castain:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Works perfectly for me, so I believe this must be an environment issue - I am using gcc 6.0.0 on CentOS7 with x86:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpirun -n 1 -host bend001 --slot-list 0:0-1,1:0-1 --report-bindings ./simple_spawn
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bend001:17599] MCW rank 0 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]], socket 1[core 6[hwt 0-1]], socket 1[core 7[hwt 0-1]]: [BB/BB/../../../..][BB/BB/../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pid 17601] starting up!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0 completed MPI_Init
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Parent [pid 17601] about to spawn!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pid 17603] starting up!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bend001:17599] MCW rank 0 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]], socket 1[core 6[hwt 0-1]], socket 1[core 7[hwt 0-1]]: [BB/BB/../../../..][BB/BB/../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bend001:17599] MCW rank 1 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]], socket 1[core 6[hwt 0-1]], socket 1[core 7[hwt 0-1]]: [BB/BB/../../../..][BB/BB/../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bend001:17599] MCW rank 2 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]], socket 1[core 6[hwt 0-1]], socket 1[core 7[hwt 0-1]]: [BB/BB/../../../..][BB/BB/../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pid 17604] starting up!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pid 17605] starting up!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Parent done with spawn
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Parent sending message to child
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0 completed MPI_Init
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello from the child 0 of 3 on host bend001 pid 17603
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Child 0 received msg: 38
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 completed MPI_Init
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello from the child 1 of 3 on host bend001 pid 17604
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2 completed MPI_Init
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello from the child 2 of 3 on host bend001 pid 17605
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Child 0 disconnected
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Child 2 disconnected
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Parent disconnected
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Child 1 disconnected
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 17603: exiting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 17605: exiting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 17601: exiting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 17604: exiting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On May 24, 2016, at 7:18 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Ralph and Gilles,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the program breaks only, if I combine &quot;--host&quot; and &quot;--slot-list&quot;. Perhaps this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; information is helpful. I use a different machine now, so that you can see that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the problem is not restricted to &quot;loki&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pc03 spawn 115 ompi_info | grep -e &quot;OPAL repo revision:&quot; -e &quot;C compiler absolute:&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     OPAL repo revision: v1.10.2-201-gd23dda8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    C compiler absolute: /usr/local/gcc-6.1.0/bin/gcc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pc03 spawn 116 uname -a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Linux pc03 3.12.55-52.42-default #1 SMP Thu Mar 3 10:35:46 UTC 2016 (4354e1d) x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pc03 spawn 117 cat host_pc03.openmpi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pc03.informatik.hs-fulda.de slots=12 max_slots=12
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pc03 spawn 118 mpicc simple_spawn.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pc03 spawn 119 mpiexec -np 1 --report-bindings a.out
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pc03:03711] MCW rank 0 bound to socket 0[core 0[hwt 0-1]]: [BB/../../../../..][../../../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pid 3713] starting up!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0 completed MPI_Init
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Parent [pid 3713] about to spawn!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pc03:03711] MCW rank 0 bound to socket 1[core 6[hwt 0-1]], socket 1[core 7[hwt 0-1]], socket 1[core 8[hwt 0-1]], socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt 0-1]]: [../../../../../..][BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pc03:03711] MCW rank 1 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]]: [BB/BB/BB/BB/BB/BB][../../../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pc03:03711] MCW rank 2 bound to socket 1[core 6[hwt 0-1]], socket 1[core 7[hwt 0-1]], socket 1[core 8[hwt 0-1]], socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt 0-1]]: [../../../../../..][BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pid 3715] starting up!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pid 3716] starting up!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pid 3717] starting up!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Parent done with spawn
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Parent sending message to child
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0 completed MPI_Init
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello from the child 0 of 3 on host pc03 pid 3715
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1 completed MPI_Init
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello from the child 1 of 3 on host pc03 pid 3716
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2 completed MPI_Init
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello from the child 2 of 3 on host pc03 pid 3717
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Child 0 received msg: 38
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Child 0 disconnected
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Child 2 disconnected
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Parent disconnected
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Child 1 disconnected
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3713: exiting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3715: exiting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3716: exiting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3717: exiting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pc03 spawn 120 mpiexec -np 1 --hostfile host_pc03.openmpi --slot-list 0:0-1,1:0-1 --report-bindings a.out
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pc03:03729] MCW rank 0 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]], socket 1[core 6[hwt 0-1]], socket 1[core 7[hwt 0-1]]: [BB/BB/../../../..][BB/BB/../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pid 3731] starting up!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0 completed MPI_Init
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Parent [pid 3731] about to spawn!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pc03:03729] MCW rank 0 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]], socket 1[core 6[hwt 0-1]], socket 1[core 7[hwt 0-1]]: [BB/BB/../../../..][BB/BB/../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pc03:03729] MCW rank 1 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]], socket 1[core 6[hwt 0-1]], socket 1[core 7[hwt 0-1]]: [BB/BB/../../../..][BB/BB/../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pc03:03729] MCW rank 2 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]], socket 1[core 6[hwt 0-1]], socket 1[core 7[hwt 0-1]]: [BB/BB/../../../..][BB/BB/../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pid 3733] starting up!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pid 3734] starting up!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pid 3735] starting up!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Parent done with spawn
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Parent sending message to child
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2 completed MPI_Init
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello from the child 2 of 3 on host pc03 pid 3735
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1 completed MPI_Init
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello from the child 1 of 3 on host pc03 pid 3734
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0 completed MPI_Init
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello from the child 0 of 3 on host pc03 pid 3733
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Child 0 received msg: 38
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Child 0 disconnected
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Child 2 disconnected
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Child 1 disconnected
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Parent disconnected
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3731: exiting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3734: exiting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3733: exiting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3735: exiting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pc03 spawn 121 mpiexec -np 1 --host pc03 --slot-list 0:0-1,1:0-1 --report-bindings a.out
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pc03:03744] MCW rank 0 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]], socket 1[core 6[hwt 0-1]], socket 1[core 7[hwt 0-1]]: [BB/BB/../../../..][BB/BB/../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pid 3746] starting up!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0 completed MPI_Init
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Parent [pid 3746] about to spawn!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pc03:03744] MCW rank 0 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]], socket 1[core 6[hwt 0-1]], socket 1[core 7[hwt 0-1]]: [BB/BB/../../../..][BB/BB/../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pc03:03744] MCW rank 2 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]], socket 1[core 6[hwt 0-1]], socket 1[core 7[hwt 0-1]]: [BB/BB/../../../..][BB/BB/../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pid 3748] starting up!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pid 3749] starting up!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pc03:03749] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pc03:03749] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pc03:03749] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pc03:03749] Failing at address: 0x8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pc03:03749] [ 0] /lib64/libpthread.so.0(+0xf870)[0x7fe6f0d1f870]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pc03:03749] [ 1] /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_proc_self+0x35)[0x7fe6f0f825b0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pc03:03749] [ 2] /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_comm_init+0x68b)[0x7fe6f0f61b08]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pc03:03749] [ 3] /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_mpi_init+0xa90)[0x7fe6f0f87e8a]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pc03:03749] [ 4] /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(MPI_Init+0x1a0)[0x7fe6f0fc42ae]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pc03:03749] [ 5] a.out[0x400d0c]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pc03:03749] [ 6] /lib64/libc.so.6(__libc_start_main+0xf5)[0x7fe6f0989b05]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pc03:03749] [ 7] a.out[0x400bf9]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pc03:03749] *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpiexec noticed that process rank 2 with PID 3749 on node pc03 exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pc03 spawn 122
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 05/24/16 15:44, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On May 24, 2016, at 6:21 AM, Siegmar Gross &lt;siegmar.gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I copy the relevant lines to this place, so that it is easier to see what
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; happens. &quot;a.out&quot; is your program, which I compiled with mpicc.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; loki spawn 153 ompi_info | grep -e &quot;OPAL repo revision:&quot; -e &quot;C compiler
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; absolute:&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    OPAL repo revision: v1.10.2-201-gd23dda8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   C compiler absolute: /usr/local/gcc-6.1.0/bin/gcc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; loki spawn 154 mpicc simple_spawn.c
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; loki spawn 155 mpiexec -np 1 a.out
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [pid 24008] starting up!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0 completed MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;mpiexec -np 1 a.out&quot; works.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I don&#146;t know what &#147;a.out&#148; is, but it looks like there is some memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; corruption there.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;a.out&quot; is still your program. I get the same error on different
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; machines, so that it is not very likely, that the (hardware) memory
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; is corrupted.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; loki spawn 156 mpiexec -np 1 --host loki --slot-list 0-5 a.out
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [pid 24102] starting up!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0 completed MPI_Init
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Parent [pid 24102] about to spawn!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [pid 24104] starting up!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [pid 24105] starting up!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:24105] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:24105] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:24105] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;mpiexec -np 1 --host loki --slot-list 0-5 a.out&quot; breaks with a segmentation
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; faUlt. Can I do something, so that you can find out, what happens?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I honestly have no idea - perhaps Gilles can help, as I have no access to that kind of environment. We aren&#146;t seeing such problems elsewhere, so it is likely something local.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On 05/24/16 15:07, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On May 24, 2016, at 4:19 AM, Siegmar Gross
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;Siegmar.Gross_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;mailto:Siegmar.Gross_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; thank you very much for your answer and your example program.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 05/23/16 17:45, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I cannot replicate the problem - both scenarios work fine for me. I&#146;m not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; convinced your test code is correct, however, as you call Comm_free the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; inter-communicator but didn&#146;t call Comm_disconnect. Checkout the attached
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; for a correct code and see if it works for you.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I thought that I only need MPI_Comm_Disconnect, if I would have established a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; connection with MPI_Comm_connect before. The man page for MPI_Comm_free states
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;This  operation marks the communicator object for deallocation. The
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; handle is set to MPI_COMM_NULL. Any pending operations that use this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; communicator will complete normally; the object is actually deallocated only
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; if there are no other active references to it.&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The man page for MPI_Comm_disconnect states
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;MPI_Comm_disconnect waits for all pending communication on comm to complete
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; internally, deallocates the communicator object, and sets the handle to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_COMM_NULL. It is  a  collective operation.&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I don't see a difference for my spawned processes, because both functions will
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;wait&quot; until all pending operations have finished, before the object will be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; destroyed. Nevertheless, perhaps my small example program worked all the years
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; by chance.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; However, I don't understand, why my program works with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;mpiexec -np 1 --host loki,loki,loki,loki,loki spawn_master&quot; and breaks with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;mpiexec -np 1 --host loki --slot-list 0:0-5,1:0-5 spawn_master&quot;. You are right,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; my slot-list is equivalent to &quot;-bind-to none&quot;. I could also have used
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;mpiexec -np 1 --host loki --oversubscribe spawn_master&quot; which works as well.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Well, you are only giving us one slot when you specify &quot;-host loki&#148;, and then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; you are trying to launch multiple processes into it. The &#147;slot-list&#148; option only
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; tells us what cpus to bind each process to - it doesn&#146;t allocate process slots.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; So you have to tell us how many processes are allowed to run on this node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The program breaks with &quot;There are not enough slots available in the system
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to satisfy ...&quot;, if I only use &quot;--host loki&quot; or different host names,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; without mentioning five host names, using &quot;slot-list&quot;, or &quot;oversubscribe&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Unfortunately &quot;--host &lt;host name&gt;:&lt;number of slots&gt;&quot; isn't available for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; openmpi-1.10.3rc2 to specify the number of available slots.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Correct - we did not backport the new syntax
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Your program behaves the same way as mine, so that MPI_Comm_disconnect
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; will not solve my problem. I had to modify your program in a negligible way
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to get it compiled.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; loki spawn 153 ompi_info | grep -e &quot;OPAL repo revision:&quot; -e &quot;C compiler absolute:&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   OPAL repo revision: v1.10.2-201-gd23dda8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  C compiler absolute: /usr/local/gcc-6.1.0/bin/gcc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; loki spawn 154 mpicc simple_spawn.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; loki spawn 155 mpiexec -np 1 a.out
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [pid 24008] starting up!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0 completed MPI_Init
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Parent [pid 24008] about to spawn!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [pid 24010] starting up!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [pid 24011] starting up!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [pid 24012] starting up!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Parent done with spawn
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Parent sending message to child
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0 completed MPI_Init
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello from the child 0 of 3 on host loki pid 24010
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1 completed MPI_Init
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello from the child 1 of 3 on host loki pid 24011
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2 completed MPI_Init
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello from the child 2 of 3 on host loki pid 24012
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Child 0 received msg: 38
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Child 0 disconnected
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Child 1 disconnected
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Child 2 disconnected
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Parent disconnected
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 24012: exiting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 24010: exiting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 24008: exiting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 24011: exiting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Is something wrong with my command line? I didn't use slot-list before, so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; that I'm not sure, if I use it in the intended way.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I don&#146;t know what &#147;a.out&#148; is, but it looks like there is some memory corruption
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; there.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; loki spawn 156 mpiexec -np 1 --host loki --slot-list 0-5 a.out
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [pid 24102] starting up!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0 completed MPI_Init
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Parent [pid 24102] about to spawn!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [pid 24104] starting up!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [pid 24105] starting up!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:24105] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:24105] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:24105] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:24105] Failing at address: 0x8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:24105] [ 0] /lib64/libpthread.so.0(+0xf870)[0x7f39aa76f870]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:24105] [ 1]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_proc_self+0x35)[0x7f39aa9d25b0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:24105] [ 2]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_comm_init+0x68b)[0x7f39aa9b1b08]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:24105] [ 3] *** An error occurred in MPI_Init
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; *** on a NULL communicator
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:24104] Local abort before MPI_INIT completed successfully; not able to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; aggregate error messages, and not able to guarantee that all other processes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; were killed!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_mpi_init+0xa90)[0x7f39aa9d7e8a]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:24105] [ 4]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(MPI_Init+0x1a0)[0x7f39aaa142ae]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:24105] [ 5] a.out[0x400d0c]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:24105] [ 6] /lib64/libc.so.6(__libc_start_main+0xf5)[0x7f39aa3d9b05]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:24105] [ 7] a.out[0x400bf9]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:24105] *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Child job 2 terminated normally, but 1 process returned
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpiexec detected that one or more processes exited with non-zero status, thus
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; causing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Process name: [[49560,2],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Exit code:    1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; loki spawn 157
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hopefully, you will find out what happens. Please let me know, if I can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; help you in any way.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; FWIW: I don&#146;t know how many cores you have on your sockets, but if you
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; have 6 cores/socket, then your slot-list is equivalent to &#147;&#151;bind-to none&#148;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; as the slot-list applies to every process being launched
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On May 23, 2016, at 6:26 AM, Siegmar Gross
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;Siegmar.Gross_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;mailto:Siegmar.Gross_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I installed openmpi-1.10.3rc2 on my &quot;SUSE Linux Enterprise Server
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 12 (x86_64)&quot; with Sun C 5.13  and gcc-6.1.0. Unfortunately I get
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; a segmentation fault for &quot;--slot-list&quot; for one of my small programs.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; loki spawn 119 ompi_info | grep -e &quot;OPAL repo revision:&quot; -e &quot;C compiler
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; absolute:&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  OPAL repo revision: v1.10.2-201-gd23dda8
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; C compiler absolute: /usr/local/gcc-6.1.0/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; loki spawn 120 mpiexec -np 1 --host loki,loki,loki,loki,loki spawn_master
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Parent process 0 running on loki
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I create 4 slave processes
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Parent process 0: tasks in MPI_COMM_WORLD:                    1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;              tasks in COMM_CHILD_PROCESSES local group:  1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;              tasks in COMM_CHILD_PROCESSES remote group: 4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Slave process 0 of 4 running on loki
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Slave process 1 of 4 running on loki
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Slave process 2 of 4 running on loki
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; spawn_slave 2: argv[0]: spawn_slave
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Slave process 3 of 4 running on loki
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; spawn_slave 0: argv[0]: spawn_slave
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; spawn_slave 1: argv[0]: spawn_slave
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; spawn_slave 3: argv[0]: spawn_slave
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; loki spawn 121 mpiexec -np 1 --host loki --slot-list 0:0-5,1:0-5 spawn_master
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Parent process 0 running on loki
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I create 4 slave processes
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:17326] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:17326] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:17326] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:17326] Failing at address: 0x8
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:17326] [ 0] /lib64/libpthread.so.0(+0xf870)[0x7f4e469b3870]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:17326] [ 1] *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; *** on a NULL communicator
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:17324] Local abort before MPI_INIT completed successfully; not able to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; aggregate error messages, and not able to guarantee that all other processes
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; were killed!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_proc_self+0x35)[0x7f4e46c165b0]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:17326] [ 2]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_comm_init+0x68b)[0x7f4e46bf5b08]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:17326] [ 3] *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; *** on a NULL communicator
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:17325] Local abort before MPI_INIT completed successfully; not able to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; aggregate error messages, and not able to guarantee that all other processes
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; were killed!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_mpi_init+0xa90)[0x7f4e46c1be8a]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:17326] [ 4]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(MPI_Init+0x180)[0x7f4e46c5828e]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:17326] [ 5] spawn_slave[0x40097e]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:17326] [ 6] /lib64/libc.so.6(__libc_start_main+0xf5)[0x7f4e4661db05]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:17326] [ 7] spawn_slave[0x400a54]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:17326] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Child job 2 terminated normally, but 1 process returned
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpiexec detected that one or more processes exited with non-zero status,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; thus causing
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Process name: [[56340,2],0]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Exit code:    1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; loki spawn 122
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I would be grateful, if somebody can fix the problem. Thank you
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; very much for any help in advance.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29281.php">http://www.open-mpi.org/community/lists/users/2016/05/29281.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29284.php">http://www.open-mpi.org/community/lists/users/2016/05/29284.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;simple_spawn_modified.c&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29300.php">http://www.open-mpi.org/community/lists/users/2016/05/29300.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29301.php">http://www.open-mpi.org/community/lists/users/2016/05/29301.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29304.php">http://www.open-mpi.org/community/lists/users/2016/05/29304.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29307.php">http://www.open-mpi.org/community/lists/users/2016/05/29307.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29308.php">http://www.open-mpi.org/community/lists/users/2016/05/29308.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29309.php">http://www.open-mpi.org/community/lists/users/2016/05/29309.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29315.php">http://www.open-mpi.org/community/lists/users/2016/05/29315.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29316.php">http://www.open-mpi.org/community/lists/users/2016/05/29316.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29320.php">Marco D'Amico: "[OMPI users] OpenMPI virtualization aware"</a>
<li><strong>Previous message:</strong> <a href="29318.php">Jeff Squyres (jsquyres): "Re: [OMPI users] users Digest, Vol 3510, Issue 2"</a>
<li><strong>In reply to:</strong> <a href="29316.php">Ralph Castain: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29303.php">Jeff Squyres (jsquyres): "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
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
