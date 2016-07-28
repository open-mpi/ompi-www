<?
$subject_val = "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 24 09:45:00 2016" -->
<!-- isoreceived="20160524134500" -->
<!-- sent="Tue, 24 May 2016 06:44:56 -0700" -->
<!-- isosent="20160524134456" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2" -->
<!-- id="07882090-55B4-4776-B6DB-8D2922FB587B_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="dd5b8524-d924-130b-1796-17f47a883c91_at_informatik.hs-fulda.de" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-24 09:44:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29308.php">Siegmar Gross: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<li><strong>Previous message:</strong> <a href="29306.php">Scott Shaw: "Re: [OMPI users] users Digest, Vol 3510, Issue 2"</a>
<li><strong>In reply to:</strong> <a href="29304.php">Siegmar Gross: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29308.php">Siegmar Gross: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<li><strong>Reply:</strong> <a href="29308.php">Siegmar Gross: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On May 24, 2016, at 6:21 AM, Siegmar Gross &lt;siegmar.gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I copy the relevant lines to this place, so that it is easier to see what
</span><br>
<span class="quotelev1">&gt; happens. &quot;a.out&quot; is your program, which I compiled with mpicc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; loki spawn 153 ompi_info | grep -e &quot;OPAL repo revision:&quot; -e &quot;C compiler
</span><br>
<span class="quotelev3">&gt; &gt;&gt; absolute:&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      OPAL repo revision: v1.10.2-201-gd23dda8
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     C compiler absolute: /usr/local/gcc-6.1.0/bin/gcc
</span><br>
<span class="quotelev3">&gt; &gt;&gt; loki spawn 154 mpicc simple_spawn.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; loki spawn 155 mpiexec -np 1 a.out
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [pid 24008] starting up!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 0 completed MPI_Init
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;mpiexec -np 1 a.out&quot; works.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I don&#146;t know what &#147;a.out&#148; is, but it looks like there is some memory
</span><br>
<span class="quotelev2">&gt; &gt; corruption there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;a.out&quot; is still your program. I get the same error on different
</span><br>
<span class="quotelev1">&gt; machines, so that it is not very likely, that the (hardware) memory
</span><br>
<span class="quotelev1">&gt; is corrupted.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; loki spawn 156 mpiexec -np 1 --host loki --slot-list 0-5 a.out
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [pid 24102] starting up!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 0 completed MPI_Init
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Parent [pid 24102] about to spawn!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [pid 24104] starting up!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [pid 24105] starting up!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [loki:24105] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [loki:24105] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [loki:24105] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;mpiexec -np 1 --host loki --slot-list 0-5 a.out&quot; breaks with a segmentation
</span><br>
<span class="quotelev1">&gt; faUlt. Can I do something, so that you can find out, what happens?
</span><br>
<p>I honestly have no idea - perhaps Gilles can help, as I have no access to that kind of environment. We aren&#146;t seeing such problems elsewhere, so it is likely something local.
<br>
<p><span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; On 05/24/16 15:07, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 24, 2016, at 4:19 AM, Siegmar Gross
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;Siegmar.Gross_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mailto:Siegmar.Gross_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thank you very much for your answer and your example program.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 05/23/16 17:45, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I cannot replicate the problem - both scenarios work fine for me. I&#146;m not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; convinced your test code is correct, however, as you call Comm_free the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; inter-communicator but didn&#146;t call Comm_disconnect. Checkout the attached
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for a correct code and see if it works for you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I thought that I only need MPI_Comm_Disconnect, if I would have established a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connection with MPI_Comm_connect before. The man page for MPI_Comm_free states
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;This  operation marks the communicator object for deallocation. The
</span><br>
<span class="quotelev3">&gt;&gt;&gt; handle is set to MPI_COMM_NULL. Any pending operations that use this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communicator will complete normally; the object is actually deallocated only
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if there are no other active references to it.&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The man page for MPI_Comm_disconnect states
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;MPI_Comm_disconnect waits for all pending communication on comm to complete
</span><br>
<span class="quotelev3">&gt;&gt;&gt; internally, deallocates the communicator object, and sets the handle to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_COMM_NULL. It is  a  collective operation.&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't see a difference for my spawned processes, because both functions will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;wait&quot; until all pending operations have finished, before the object will be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; destroyed. Nevertheless, perhaps my small example program worked all the years
</span><br>
<span class="quotelev3">&gt;&gt;&gt; by chance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, I don't understand, why my program works with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;mpiexec -np 1 --host loki,loki,loki,loki,loki spawn_master&quot; and breaks with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;mpiexec -np 1 --host loki --slot-list 0:0-5,1:0-5 spawn_master&quot;. You are right,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my slot-list is equivalent to &quot;-bind-to none&quot;. I could also have used
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;mpiexec -np 1 --host loki --oversubscribe spawn_master&quot; which works as well.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Well, you are only giving us one slot when you specify &quot;-host loki&#148;, and then
</span><br>
<span class="quotelev2">&gt;&gt; you are trying to launch multiple processes into it. The &#147;slot-list&#148; option only
</span><br>
<span class="quotelev2">&gt;&gt; tells us what cpus to bind each process to - it doesn&#146;t allocate process slots.
</span><br>
<span class="quotelev2">&gt;&gt; So you have to tell us how many processes are allowed to run on this node.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The program breaks with &quot;There are not enough slots available in the system
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to satisfy ...&quot;, if I only use &quot;--host loki&quot; or different host names,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; without mentioning five host names, using &quot;slot-list&quot;, or &quot;oversubscribe&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunately &quot;--host &lt;host name&gt;:&lt;number of slots&gt;&quot; isn't available for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.10.3rc2 to specify the number of available slots.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Correct - we did not backport the new syntax
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Your program behaves the same way as mine, so that MPI_Comm_disconnect
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will not solve my problem. I had to modify your program in a negligible way
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to get it compiled.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; loki spawn 153 ompi_info | grep -e &quot;OPAL repo revision:&quot; -e &quot;C compiler absolute:&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     OPAL repo revision: v1.10.2-201-gd23dda8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    C compiler absolute: /usr/local/gcc-6.1.0/bin/gcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; loki spawn 154 mpicc simple_spawn.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; loki spawn 155 mpiexec -np 1 a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pid 24008] starting up!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0 completed MPI_Init
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Parent [pid 24008] about to spawn!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pid 24010] starting up!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pid 24011] starting up!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pid 24012] starting up!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Parent done with spawn
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Parent sending message to child
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0 completed MPI_Init
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello from the child 0 of 3 on host loki pid 24010
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 completed MPI_Init
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello from the child 1 of 3 on host loki pid 24011
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2 completed MPI_Init
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello from the child 2 of 3 on host loki pid 24012
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Child 0 received msg: 38
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Child 0 disconnected
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Child 1 disconnected
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Child 2 disconnected
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Parent disconnected
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 24012: exiting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 24010: exiting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 24008: exiting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 24011: exiting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is something wrong with my command line? I didn't use slot-list before, so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that I'm not sure, if I use it in the intended way.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don&#146;t know what &#147;a.out&#148; is, but it looks like there is some memory corruption
</span><br>
<span class="quotelev2">&gt;&gt; there.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; loki spawn 156 mpiexec -np 1 --host loki --slot-list 0-5 a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pid 24102] starting up!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0 completed MPI_Init
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Parent [pid 24102] about to spawn!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pid 24104] starting up!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pid 24105] starting up!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [loki:24105] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [loki:24105] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [loki:24105] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [loki:24105] Failing at address: 0x8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [loki:24105] [ 0] /lib64/libpthread.so.0(+0xf870)[0x7f39aa76f870]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [loki:24105] [ 1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_proc_self+0x35)[0x7f39aa9d25b0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [loki:24105] [ 2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_comm_init+0x68b)[0x7f39aa9b1b08]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [loki:24105] [ 3] *** An error occurred in MPI_Init
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** on a NULL communicator
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [loki:24104] Local abort before MPI_INIT completed successfully; not able to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; aggregate error messages, and not able to guarantee that all other processes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; were killed!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_mpi_init+0xa90)[0x7f39aa9d7e8a]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [loki:24105] [ 4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(MPI_Init+0x1a0)[0x7f39aaa142ae]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [loki:24105] [ 5] a.out[0x400d0c]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [loki:24105] [ 6] /lib64/libc.so.6(__libc_start_main+0xf5)[0x7f39aa3d9b05]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [loki:24105] [ 7] a.out[0x400bf9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [loki:24105] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Child job 2 terminated normally, but 1 process returned
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec detected that one or more processes exited with non-zero status, thus
</span><br>
<span class="quotelev3">&gt;&gt;&gt; causing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process name: [[49560,2],0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Exit code:    1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; loki spawn 157
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hopefully, you will find out what happens. Please let me know, if I can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; help you in any way.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FWIW: I don&#146;t know how many cores you have on your sockets, but if you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; have 6 cores/socket, then your slot-list is equivalent to &#147;&#151;bind-to none&#148;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; as the slot-list applies to every process being launched
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On May 23, 2016, at 6:26 AM, Siegmar Gross
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;Siegmar.Gross_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;mailto:Siegmar.Gross_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I installed openmpi-1.10.3rc2 on my &quot;SUSE Linux Enterprise Server
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 12 (x86_64)&quot; with Sun C 5.13  and gcc-6.1.0. Unfortunately I get
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a segmentation fault for &quot;--slot-list&quot; for one of my small programs.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; loki spawn 119 ompi_info | grep -e &quot;OPAL repo revision:&quot; -e &quot;C compiler
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; absolute:&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    OPAL repo revision: v1.10.2-201-gd23dda8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   C compiler absolute: /usr/local/gcc-6.1.0/bin/gcc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; loki spawn 120 mpiexec -np 1 --host loki,loki,loki,loki,loki spawn_master
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Parent process 0 running on loki
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I create 4 slave processes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Parent process 0: tasks in MPI_COMM_WORLD:                    1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                tasks in COMM_CHILD_PROCESSES local group:  1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                tasks in COMM_CHILD_PROCESSES remote group: 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Slave process 0 of 4 running on loki
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Slave process 1 of 4 running on loki
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Slave process 2 of 4 running on loki
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; spawn_slave 2: argv[0]: spawn_slave
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Slave process 3 of 4 running on loki
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; spawn_slave 0: argv[0]: spawn_slave
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; spawn_slave 1: argv[0]: spawn_slave
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; spawn_slave 3: argv[0]: spawn_slave
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; loki spawn 121 mpiexec -np 1 --host loki --slot-list 0:0-5,1:0-5 spawn_master
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Parent process 0 running on loki
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I create 4 slave processes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [loki:17326] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [loki:17326] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [loki:17326] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [loki:17326] Failing at address: 0x8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [loki:17326] [ 0] /lib64/libpthread.so.0(+0xf870)[0x7f4e469b3870]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [loki:17326] [ 1] *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [loki:17324] Local abort before MPI_INIT completed successfully; not able to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; aggregate error messages, and not able to guarantee that all other processes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; were killed!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_proc_self+0x35)[0x7f4e46c165b0]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [loki:17326] [ 2]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_comm_init+0x68b)[0x7f4e46bf5b08]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [loki:17326] [ 3] *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [loki:17325] Local abort before MPI_INIT completed successfully; not able to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; aggregate error messages, and not able to guarantee that all other processes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; were killed!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_mpi_init+0xa90)[0x7f4e46c1be8a]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [loki:17326] [ 4]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(MPI_Init+0x180)[0x7f4e46c5828e]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [loki:17326] [ 5] spawn_slave[0x40097e]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [loki:17326] [ 6] /lib64/libc.so.6(__libc_start_main+0xf5)[0x7f4e4661db05]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [loki:17326] [ 7] spawn_slave[0x400a54]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [loki:17326] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Child job 2 terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpiexec detected that one or more processes exited with non-zero status,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; thus causing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Process name: [[56340,2],0]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Exit code:    1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; loki spawn 122
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I would be grateful, if somebody can fix the problem. Thank you
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; very much for any help in advance.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29281.php">http://www.open-mpi.org/community/lists/users/2016/05/29281.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29284.php">http://www.open-mpi.org/community/lists/users/2016/05/29284.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;simple_spawn_modified.c&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29300.php">http://www.open-mpi.org/community/lists/users/2016/05/29300.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29301.php">http://www.open-mpi.org/community/lists/users/2016/05/29301.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29304.php">http://www.open-mpi.org/community/lists/users/2016/05/29304.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29308.php">Siegmar Gross: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<li><strong>Previous message:</strong> <a href="29306.php">Scott Shaw: "Re: [OMPI users] users Digest, Vol 3510, Issue 2"</a>
<li><strong>In reply to:</strong> <a href="29304.php">Siegmar Gross: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29308.php">Siegmar Gross: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<li><strong>Reply:</strong> <a href="29308.php">Siegmar Gross: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
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
