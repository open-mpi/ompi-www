<?
$subject_val = "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 23 11:45:58 2016" -->
<!-- isoreceived="20160523154558" -->
<!-- sent="Mon, 23 May 2016 08:45:53 -0700" -->
<!-- isosent="20160523154553" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2" -->
<!-- id="73195D72-CEA7-4AFC-9527-8F725C8B1FA1_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="241613b1-ada6-292f-eeb9-722fc8fa2f94_at_informatik.hs-fulda.de" -->
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
<strong>Date:</strong> 2016-05-23 11:45:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29285.php">Claudio Stamile: "[OMPI users] mpirun java"</a>
<li><strong>Previous message:</strong> <a href="29283.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI does not work when MPICH or intel MPI are installed"</a>
<li><strong>In reply to:</strong> <a href="29281.php">Siegmar Gross: "[OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29300.php">Siegmar Gross: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<li><strong>Reply:</strong> <a href="29300.php">Siegmar Gross: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I cannot replicate the problem - both scenarios work fine for me. I&#226;&#128;&#153;m not convinced your test code is correct, however, as you call Comm_free the inter-communicator but didn&#226;&#128;&#153;t call Comm_disconnect. Checkout the attached for a correct code and see if it works for you.
<br>
<p>FWIW: I don&#226;&#128;&#153;t know how many cores you have on your sockets, but if you have 6 cores/socket, then your slot-list is equivalent to &#226;&#128;&#156;&#226;&#128;&#148;bind-to none&#226;&#128;&#157; as the slot-list applies to every process being launched
<br>
<p><p>

<br><p>
<p><p><span class="quotelev1">&gt; On May 23, 2016, at 6:26 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I installed openmpi-1.10.3rc2 on my &quot;SUSE Linux Enterprise Server
</span><br>
<span class="quotelev1">&gt; 12 (x86_64)&quot; with Sun C 5.13  and gcc-6.1.0. Unfortunately I get
</span><br>
<span class="quotelev1">&gt; a segmentation fault for &quot;--slot-list&quot; for one of my small programs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; loki spawn 119 ompi_info | grep -e &quot;OPAL repo revision:&quot; -e &quot;C compiler absolute:&quot;
</span><br>
<span class="quotelev1">&gt;      OPAL repo revision: v1.10.2-201-gd23dda8
</span><br>
<span class="quotelev1">&gt;     C compiler absolute: /usr/local/gcc-6.1.0/bin/gcc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; loki spawn 120 mpiexec -np 1 --host loki,loki,loki,loki,loki spawn_master
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Parent process 0 running on loki
</span><br>
<span class="quotelev1">&gt;  I create 4 slave processes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Parent process 0: tasks in MPI_COMM_WORLD:                    1
</span><br>
<span class="quotelev1">&gt;                  tasks in COMM_CHILD_PROCESSES local group:  1
</span><br>
<span class="quotelev1">&gt;                  tasks in COMM_CHILD_PROCESSES remote group: 4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Slave process 0 of 4 running on loki
</span><br>
<span class="quotelev1">&gt; Slave process 1 of 4 running on loki
</span><br>
<span class="quotelev1">&gt; Slave process 2 of 4 running on loki
</span><br>
<span class="quotelev1">&gt; spawn_slave 2: argv[0]: spawn_slave
</span><br>
<span class="quotelev1">&gt; Slave process 3 of 4 running on loki
</span><br>
<span class="quotelev1">&gt; spawn_slave 0: argv[0]: spawn_slave
</span><br>
<span class="quotelev1">&gt; spawn_slave 1: argv[0]: spawn_slave
</span><br>
<span class="quotelev1">&gt; spawn_slave 3: argv[0]: spawn_slave
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; loki spawn 121 mpiexec -np 1 --host loki --slot-list 0:0-5,1:0-5 spawn_master
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Parent process 0 running on loki
</span><br>
<span class="quotelev1">&gt;  I create 4 slave processes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [loki:17326] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [loki:17326] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [loki:17326] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [loki:17326] Failing at address: 0x8
</span><br>
<span class="quotelev1">&gt; [loki:17326] [ 0] /lib64/libpthread.so.0(+0xf870)[0x7f4e469b3870]
</span><br>
<span class="quotelev1">&gt; [loki:17326] [ 1] *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; [loki:17324] Local abort before MPI_INIT completed successfully; not able to aggregate error messages, and not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_proc_self+0x35)[0x7f4e46c165b0]
</span><br>
<span class="quotelev1">&gt; [loki:17326] [ 2] /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_comm_init+0x68b)[0x7f4e46bf5b08]
</span><br>
<span class="quotelev1">&gt; [loki:17326] [ 3] *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; [loki:17325] Local abort before MPI_INIT completed successfully; not able to aggregate error messages, and not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_mpi_init+0xa90)[0x7f4e46c1be8a]
</span><br>
<span class="quotelev1">&gt; [loki:17326] [ 4] /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(MPI_Init+0x180)[0x7f4e46c5828e]
</span><br>
<span class="quotelev1">&gt; [loki:17326] [ 5] spawn_slave[0x40097e]
</span><br>
<span class="quotelev1">&gt; [loki:17326] [ 6] /lib64/libc.so.6(__libc_start_main+0xf5)[0x7f4e4661db05]
</span><br>
<span class="quotelev1">&gt; [loki:17326] [ 7] spawn_slave[0x400a54]
</span><br>
<span class="quotelev1">&gt; [loki:17326] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Child job 2 terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec detected that one or more processes exited with non-zero status, thus causing
</span><br>
<span class="quotelev1">&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Process name: [[56340,2],0]
</span><br>
<span class="quotelev1">&gt;  Exit code:    1
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; loki spawn 122
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would be grateful, if somebody can fix the problem. Thank you
</span><br>
<span class="quotelev1">&gt; very much for any help in advance.
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29281.php">http://www.open-mpi.org/community/lists/users/2016/05/29281.php</a>
</span><br>
<p><p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29284/simple_spawn.c">simple_spawn.c</a>
</ul>
<!-- attachment="simple_spawn.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29285.php">Claudio Stamile: "[OMPI users] mpirun java"</a>
<li><strong>Previous message:</strong> <a href="29283.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI does not work when MPICH or intel MPI are installed"</a>
<li><strong>In reply to:</strong> <a href="29281.php">Siegmar Gross: "[OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29300.php">Siegmar Gross: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<li><strong>Reply:</strong> <a href="29300.php">Siegmar Gross: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
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
