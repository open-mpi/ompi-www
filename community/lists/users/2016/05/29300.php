<?
$subject_val = "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 24 07:19:46 2016" -->
<!-- isoreceived="20160524111946" -->
<!-- sent="Tue, 24 May 2016 13:19:21 +0200" -->
<!-- isosent="20160524111921" -->
<!-- name="Siegmar Gross" -->
<!-- email="siegmar.gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2" -->
<!-- id="92d7afea-42e0-83bb-2d02-92e834033afc_at_informatik.hs-fulda.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="73195D72-CEA7-4AFC-9527-8F725C8B1FA1_at_open-mpi.org" -->
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
<strong>Date:</strong> 2016-05-24 07:19:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29301.php">Ralph Castain: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<li><strong>Previous message:</strong> <a href="29299.php">Dave Love: "Re: [OMPI users] users Digest, Vol 3510, Issue 2"</a>
<li><strong>In reply to:</strong> <a href="29284.php">Ralph Castain: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29301.php">Ralph Castain: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<li><strong>Reply:</strong> <a href="29301.php">Ralph Castain: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<li><strong>Reply:</strong> <a href="29303.php">Jeff Squyres (jsquyres): "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>thank you very much for your answer and your example program.
<br>
<p>On 05/23/16 17:45, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I cannot replicate the problem - both scenarios work fine for me. I&#146;m not
</span><br>
<span class="quotelev1">&gt; convinced your test code is correct, however, as you call Comm_free the
</span><br>
<span class="quotelev1">&gt; inter-communicator but didn&#146;t call Comm_disconnect. Checkout the attached
</span><br>
<span class="quotelev1">&gt; for a correct code and see if it works for you.
</span><br>
<p>I thought that I only need MPI_Comm_Disconnect, if I would have established a
<br>
connection with MPI_Comm_connect before. The man page for MPI_Comm_free states
<br>
<p>&quot;This  operation marks the communicator object for deallocation. The
<br>
handle is set to MPI_COMM_NULL. Any pending operations that use this
<br>
communicator will complete normally; the object is actually deallocated only
<br>
if there are no other active references to it.&quot;.
<br>
<p>The man page for MPI_Comm_disconnect states
<br>
<p>&quot;MPI_Comm_disconnect waits for all pending communication on comm to complete
<br>
internally, deallocates the communicator object, and sets the handle to
<br>
MPI_COMM_NULL. It is  a  collective operation.&quot;.
<br>
<p>I don't see a difference for my spawned processes, because both functions will
<br>
&quot;wait&quot; until all pending operations have finished, before the object will be
<br>
destroyed. Nevertheless, perhaps my small example program worked all the years
<br>
by chance.
<br>
<p>However, I don't understand, why my program works with
<br>
&quot;mpiexec -np 1 --host loki,loki,loki,loki,loki spawn_master&quot; and breaks with
<br>
&quot;mpiexec -np 1 --host loki --slot-list 0:0-5,1:0-5 spawn_master&quot;. You are right,
<br>
my slot-list is equivalent to &quot;-bind-to none&quot;. I could also have used
<br>
&quot;mpiexec -np 1 --host loki --oversubscribe spawn_master&quot; which works as well.
<br>
<p>The program breaks with &quot;There are not enough slots available in the system
<br>
to satisfy ...&quot;, if I only use &quot;--host loki&quot; or different host names,
<br>
without mentioning five host names, using &quot;slot-list&quot;, or &quot;oversubscribe&quot;,
<br>
Unfortunately &quot;--host &lt;host name&gt;:&lt;number of slots&gt;&quot; isn't available for
<br>
openmpi-1.10.3rc2 to specify the number of available slots.
<br>
<p>Your program behaves the same way as mine, so that MPI_Comm_disconnect
<br>
will not solve my problem. I had to modify your program in a negligible way
<br>
to get it compiled.
<br>
<p>loki spawn 153 ompi_info | grep -e &quot;OPAL repo revision:&quot; -e &quot;C compiler absolute:&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL repo revision: v1.10.2-201-gd23dda8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/local/gcc-6.1.0/bin/gcc
<br>
loki spawn 154 mpicc simple_spawn.c
<br>
loki spawn 155 mpiexec -np 1 a.out
<br>
[pid 24008] starting up!
<br>
0 completed MPI_Init
<br>
Parent [pid 24008] about to spawn!
<br>
[pid 24010] starting up!
<br>
[pid 24011] starting up!
<br>
[pid 24012] starting up!
<br>
Parent done with spawn
<br>
Parent sending message to child
<br>
0 completed MPI_Init
<br>
Hello from the child 0 of 3 on host loki pid 24010
<br>
1 completed MPI_Init
<br>
Hello from the child 1 of 3 on host loki pid 24011
<br>
2 completed MPI_Init
<br>
Hello from the child 2 of 3 on host loki pid 24012
<br>
Child 0 received msg: 38
<br>
Child 0 disconnected
<br>
Child 1 disconnected
<br>
Child 2 disconnected
<br>
Parent disconnected
<br>
24012: exiting
<br>
24010: exiting
<br>
24008: exiting
<br>
24011: exiting
<br>
<p><p>Is something wrong with my command line? I didn't use slot-list before, so
<br>
that I'm not sure, if I use it in the intended way.
<br>
<p>loki spawn 156 mpiexec -np 1 --host loki --slot-list 0-5 a.out
<br>
[pid 24102] starting up!
<br>
0 completed MPI_Init
<br>
Parent [pid 24102] about to spawn!
<br>
[pid 24104] starting up!
<br>
[pid 24105] starting up!
<br>
[loki:24105] *** Process received signal ***
<br>
[loki:24105] Signal: Segmentation fault (11)
<br>
[loki:24105] Signal code: Address not mapped (1)
<br>
[loki:24105] Failing at address: 0x8
<br>
[loki:24105] [ 0] /lib64/libpthread.so.0(+0xf870)[0x7f39aa76f870]
<br>
[loki:24105] [ 1] 
<br>
/usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_proc_self+0x35)[0x7f39aa9d25b0]
<br>
[loki:24105] [ 2] 
<br>
/usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_comm_init+0x68b)[0x7f39aa9b1b08]
<br>
[loki:24105] [ 3] *** An error occurred in MPI_Init
<br>
*** on a NULL communicator
<br>
*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
***    and potentially your MPI job)
<br>
[loki:24104] Local abort before MPI_INIT completed successfully; not able to 
<br>
aggregate error messages, and not able to guarantee that all other processes 
<br>
were killed!
<br>
/usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_mpi_init+0xa90)[0x7f39aa9d7e8a]
<br>
[loki:24105] [ 4] 
<br>
/usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(MPI_Init+0x1a0)[0x7f39aaa142ae]
<br>
[loki:24105] [ 5] a.out[0x400d0c]
<br>
[loki:24105] [ 6] /lib64/libc.so.6(__libc_start_main+0xf5)[0x7f39aa3d9b05]
<br>
[loki:24105] [ 7] a.out[0x400bf9]
<br>
[loki:24105] *** End of error message ***
<br>
-------------------------------------------------------
<br>
Child job 2 terminated normally, but 1 process returned
<br>
a non-zero exit code.. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpiexec detected that one or more processes exited with non-zero status, thus 
<br>
causing
<br>
the job to be terminated. The first process to do so was:
<br>
<p>&nbsp;&nbsp;&nbsp;Process name: [[49560,2],0]
<br>
&nbsp;&nbsp;&nbsp;Exit code:    1
<br>
--------------------------------------------------------------------------
<br>
loki spawn 157
<br>
<p><p>Hopefully, you will find out what happens. Please let me know, if I can
<br>
help you in any way.
<br>
<p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><span class="quotelev1">&gt; FWIW: I don&#146;t know how many cores you have on your sockets, but if you
</span><br>
<span class="quotelev1">&gt; have 6 cores/socket, then your slot-list is equivalent to &#147;&#151;bind-to none&#148;
</span><br>
<span class="quotelev1">&gt; as the slot-list applies to every process being launched
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 23, 2016, at 6:26 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I installed openmpi-1.10.3rc2 on my &quot;SUSE Linux Enterprise Server
</span><br>
<span class="quotelev2">&gt;&gt; 12 (x86_64)&quot; with Sun C 5.13  and gcc-6.1.0. Unfortunately I get
</span><br>
<span class="quotelev2">&gt;&gt; a segmentation fault for &quot;--slot-list&quot; for one of my small programs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; loki spawn 119 ompi_info | grep -e &quot;OPAL repo revision:&quot; -e &quot;C compiler absolute:&quot;
</span><br>
<span class="quotelev2">&gt;&gt;      OPAL repo revision: v1.10.2-201-gd23dda8
</span><br>
<span class="quotelev2">&gt;&gt;     C compiler absolute: /usr/local/gcc-6.1.0/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; loki spawn 120 mpiexec -np 1 --host loki,loki,loki,loki,loki spawn_master
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Parent process 0 running on loki
</span><br>
<span class="quotelev2">&gt;&gt;  I create 4 slave processes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Parent process 0: tasks in MPI_COMM_WORLD:                    1
</span><br>
<span class="quotelev2">&gt;&gt;                  tasks in COMM_CHILD_PROCESSES local group:  1
</span><br>
<span class="quotelev2">&gt;&gt;                  tasks in COMM_CHILD_PROCESSES remote group: 4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Slave process 0 of 4 running on loki
</span><br>
<span class="quotelev2">&gt;&gt; Slave process 1 of 4 running on loki
</span><br>
<span class="quotelev2">&gt;&gt; Slave process 2 of 4 running on loki
</span><br>
<span class="quotelev2">&gt;&gt; spawn_slave 2: argv[0]: spawn_slave
</span><br>
<span class="quotelev2">&gt;&gt; Slave process 3 of 4 running on loki
</span><br>
<span class="quotelev2">&gt;&gt; spawn_slave 0: argv[0]: spawn_slave
</span><br>
<span class="quotelev2">&gt;&gt; spawn_slave 1: argv[0]: spawn_slave
</span><br>
<span class="quotelev2">&gt;&gt; spawn_slave 3: argv[0]: spawn_slave
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; loki spawn 121 mpiexec -np 1 --host loki --slot-list 0:0-5,1:0-5 spawn_master
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Parent process 0 running on loki
</span><br>
<span class="quotelev2">&gt;&gt;  I create 4 slave processes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [loki:17326] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [loki:17326] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [loki:17326] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [loki:17326] Failing at address: 0x8
</span><br>
<span class="quotelev2">&gt;&gt; [loki:17326] [ 0] /lib64/libpthread.so.0(+0xf870)[0x7f4e469b3870]
</span><br>
<span class="quotelev2">&gt;&gt; [loki:17326] [ 1] *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *** on a NULL communicator
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev2">&gt;&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev2">&gt;&gt; [loki:17324] Local abort before MPI_INIT completed successfully; not able to aggregate error messages, and not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_proc_self+0x35)[0x7f4e46c165b0]
</span><br>
<span class="quotelev2">&gt;&gt; [loki:17326] [ 2] /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_comm_init+0x68b)[0x7f4e46bf5b08]
</span><br>
<span class="quotelev2">&gt;&gt; [loki:17326] [ 3] *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *** on a NULL communicator
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev2">&gt;&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev2">&gt;&gt; [loki:17325] Local abort before MPI_INIT completed successfully; not able to aggregate error messages, and not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_mpi_init+0xa90)[0x7f4e46c1be8a]
</span><br>
<span class="quotelev2">&gt;&gt; [loki:17326] [ 4] /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(MPI_Init+0x180)[0x7f4e46c5828e]
</span><br>
<span class="quotelev2">&gt;&gt; [loki:17326] [ 5] spawn_slave[0x40097e]
</span><br>
<span class="quotelev2">&gt;&gt; [loki:17326] [ 6] /lib64/libc.so.6(__libc_start_main+0xf5)[0x7f4e4661db05]
</span><br>
<span class="quotelev2">&gt;&gt; [loki:17326] [ 7] spawn_slave[0x400a54]
</span><br>
<span class="quotelev2">&gt;&gt; [loki:17326] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Child job 2 terminated normally, but 1 process returned
</span><br>
<span class="quotelev2">&gt;&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec detected that one or more processes exited with non-zero status, thus causing
</span><br>
<span class="quotelev2">&gt;&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Process name: [[56340,2],0]
</span><br>
<span class="quotelev2">&gt;&gt;  Exit code:    1
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; loki spawn 122
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would be grateful, if somebody can fix the problem. Thank you
</span><br>
<span class="quotelev2">&gt;&gt; very much for any help in advance.
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29281.php">http://www.open-mpi.org/community/lists/users/2016/05/29281.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29284.php">http://www.open-mpi.org/community/lists/users/2016/05/29284.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29300/simple_spawn_modified.c">simple_spawn_modified.c</a>
</ul>
<!-- attachment="simple_spawn_modified.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29301.php">Ralph Castain: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<li><strong>Previous message:</strong> <a href="29299.php">Dave Love: "Re: [OMPI users] users Digest, Vol 3510, Issue 2"</a>
<li><strong>In reply to:</strong> <a href="29284.php">Ralph Castain: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29301.php">Ralph Castain: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<li><strong>Reply:</strong> <a href="29301.php">Ralph Castain: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<li><strong>Reply:</strong> <a href="29303.php">Jeff Squyres (jsquyres): "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
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
