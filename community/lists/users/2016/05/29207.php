<?
$subject_val = "Re: [OMPI users] slot problem on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 15 10:55:15 2016" -->
<!-- isoreceived="20160515145515" -->
<!-- sent="Sun, 15 May 2016 07:55:02 -0700" -->
<!-- isosent="20160515145502" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] slot problem on &amp;quot;SUSE Linux, Enterprise Server 12 (x86_64)&amp;quot;" -->
<!-- id="54C0A645-9E82-415D-AB9F-1BD99480621E_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="b8867d86-7b89-2f62-ec07-bf64505ce45d_at_informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] slot problem on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-15 10:55:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29208.php">Ralph Castain: "Re: [OMPI users] slot problem on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;"</a>
<li><strong>Previous message:</strong> <a href="29206.php">Siegmar Gross: "Re: [OMPI users] slot problem on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;"</a>
<li><strong>In reply to:</strong> <a href="29206.php">Siegmar Gross: "Re: [OMPI users] slot problem on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29208.php">Ralph Castain: "Re: [OMPI users] slot problem on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;"</a>
<li><strong>Reply:</strong> <a href="29208.php">Ralph Castain: "Re: [OMPI users] slot problem on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You are showing different cmd lines then last time :-)
<br>
<p>I&#146;ll try to take a look as time permits
<br>
<p><span class="quotelev1">&gt; On May 15, 2016, at 7:47 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; today I upgraded to the latest version and I still have
</span><br>
<span class="quotelev1">&gt; problems. I compiled with gcc-6.1.0 and I tried to compile
</span><br>
<span class="quotelev1">&gt; with Sun C 5.14 beta. Sun C still broke with &quot;unrecognized
</span><br>
<span class="quotelev1">&gt; option '-path'&quot; which was reported before, so that I use
</span><br>
<span class="quotelev1">&gt; my gcc version. By the way, this problem is solved for
</span><br>
<span class="quotelev1">&gt; openmpi-v2.x-dev-1425-ga558e90 and openmpi-dev-4050-g7f65c2b.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; loki hello_2 124 ompi_info | grep -e &quot;OPAL repo revision&quot; -e &quot;C compiler absolute&quot;
</span><br>
<span class="quotelev1">&gt;      OPAL repo revision: v1.10.2-189-gfc05056
</span><br>
<span class="quotelev1">&gt;     C compiler absolute: /usr/local/gcc-6.1.0/bin/gcc
</span><br>
<span class="quotelev1">&gt; loki hello_2 125 mpiexec -np 1 --host loki hello_2_mpi : -np 1 --host loki --slot-list 0:0-5,1:0-5 hello_2_slave_mpi
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; There are not enough slots available in the system to satisfy the 1 slots
</span><br>
<span class="quotelev1">&gt; that were requested by the application:
</span><br>
<span class="quotelev1">&gt;  hello_2_slave_mpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Either request fewer slots for your application, or make more slots available
</span><br>
<span class="quotelev1">&gt; for use.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get a result, if I add &quot;--slot-list&quot; to the master process
</span><br>
<span class="quotelev1">&gt; as well. I changed &quot;-np 2&quot; to &quot;-np 1&quot; for the slave processes
</span><br>
<span class="quotelev1">&gt; to show new problems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; loki hello_2 126 mpiexec -np 1 --host loki --slot-list 0:0-5,1:0-5 hello_2_mpi : -np 1 --host loki --slot-list 0:0-5,1:0-5 hello_2_slave_mpi
</span><br>
<span class="quotelev1">&gt; Process 0 of 2 running on loki
</span><br>
<span class="quotelev1">&gt; Process 1 of 2 running on loki
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now 1 slave tasks are sending greetings.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Greetings from task 1:
</span><br>
<span class="quotelev1">&gt;  message type:        3
</span><br>
<span class="quotelev1">&gt;  msg length:          132 characters
</span><br>
<span class="quotelev1">&gt;  message:
</span><br>
<span class="quotelev1">&gt;    hostname:          loki
</span><br>
<span class="quotelev1">&gt;    operating system:  Linux
</span><br>
<span class="quotelev1">&gt;    release:           3.12.55-52.42-default
</span><br>
<span class="quotelev1">&gt;    processor:         x86_64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now lets increase the number of slave processes to 2.
</span><br>
<span class="quotelev1">&gt; I still get only greetings from one slave process and
</span><br>
<span class="quotelev1">&gt; if I increase the number of slave processes to 3, I get
</span><br>
<span class="quotelev1">&gt; a segmentation fault. It's nearly the same for
</span><br>
<span class="quotelev1">&gt; openmpi-v2.x-dev-1425-ga558e90 (the only difference is
</span><br>
<span class="quotelev1">&gt; that the program hangs forever for 3 slave processes
</span><br>
<span class="quotelev1">&gt; for my cc and gcc version). Everything works as expected
</span><br>
<span class="quotelev1">&gt; for openmpi-dev-4050-g7f65c2b (although it takes very long
</span><br>
<span class="quotelev1">&gt; until I get all messages). It even works, if I put
</span><br>
<span class="quotelev1">&gt; &quot;--slot-list&quot; only once on the command line as you can see
</span><br>
<span class="quotelev1">&gt; below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; loki hello_2 127 mpiexec -np 1 --host loki --slot-list 0:0-5,1:0-5 hello_2_mpi : -np 2 --host loki --slot-list 0:0-5,1:0-5 hello_2_slave_mpi
</span><br>
<span class="quotelev1">&gt; Process 0 of 2 running on loki
</span><br>
<span class="quotelev1">&gt; Process 1 of 2 running on loki
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now 1 slave tasks are sending greetings.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Greetings from task 1:
</span><br>
<span class="quotelev1">&gt;  message type:        3
</span><br>
<span class="quotelev1">&gt;  msg length:          132 characters
</span><br>
<span class="quotelev1">&gt;  message:
</span><br>
<span class="quotelev1">&gt;    hostname:          loki
</span><br>
<span class="quotelev1">&gt;    operating system:  Linux
</span><br>
<span class="quotelev1">&gt;    release:           3.12.55-52.42-default
</span><br>
<span class="quotelev1">&gt;    processor:         x86_64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; loki hello_2 128 mpiexec -np 1 --host loki --slot-list 0:0-5,1:0-5 hello_2_mpi : -np 3 --host loki --slot-list 0:0-5,1:0-5 hello_2_slave_mpi
</span><br>
<span class="quotelev1">&gt; [loki:28536] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [loki:28536] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [loki:28536] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [loki:28536] Failing at address: 0x8
</span><br>
<span class="quotelev1">&gt; [loki:28536] [ 0] /lib64/libpthread.so.0(+0xf870)[0x7fd40eb75870]
</span><br>
<span class="quotelev1">&gt; [loki:28536] [ 1] /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_proc_self+0x35)[0x7fd40edd85b0]
</span><br>
<span class="quotelev1">&gt; [loki:28536] [ 2] /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_comm_init+0x68b)[0x7fd40edb7b08]
</span><br>
<span class="quotelev1">&gt; [loki:28536] [ 3] /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_mpi_init+0xa90)[0x7fd40eddde8a]
</span><br>
<span class="quotelev1">&gt; [loki:28536] [ 4] /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(MPI_Init+0x180)[0x7fd40ee1a28e]
</span><br>
<span class="quotelev1">&gt; [loki:28536] [ 5] hello_2_slave_mpi[0x400bee]
</span><br>
<span class="quotelev1">&gt; [loki:28536] [ 6] *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; [loki:28534] Local abort before MPI_INIT completed successfully; not able to aggregate error messages, and not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; [loki:28535] Local abort before MPI_INIT completed successfully; not able to aggregate error messages, and not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xf5)[0x7fd40e7dfb05]
</span><br>
<span class="quotelev1">&gt; [loki:28536] [ 7] hello_2_slave_mpi[0x400fb0]
</span><br>
<span class="quotelev1">&gt; [loki:28536] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Primary job  terminated normally, but 1 process returned
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
<span class="quotelev1">&gt;  Process name: [[61640,1],0]
</span><br>
<span class="quotelev1">&gt;  Exit code:    1
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; loki hello_2 129
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; loki hello_2 114 ompi_info | grep -e &quot;OPAL repo revision&quot; -e &quot;C compiler absolute&quot;
</span><br>
<span class="quotelev1">&gt;      OPAL repo revision: dev-4050-g7f65c2b
</span><br>
<span class="quotelev1">&gt;     C compiler absolute: /opt/solstudio12.5b/bin/cc
</span><br>
<span class="quotelev1">&gt; loki hello_2 115 mpiexec -np 1 --host loki --slot-list 0:0-5,1:0-5 hello_2_mpi : -np 3 --host loki --slot-list 0:0-5,1:0-5 hello_2_slave_mpi
</span><br>
<span class="quotelev1">&gt; Process 0 of 4 running on loki
</span><br>
<span class="quotelev1">&gt; Process 1 of 4 running on loki
</span><br>
<span class="quotelev1">&gt; Process 2 of 4 running on loki
</span><br>
<span class="quotelev1">&gt; Process 3 of 4 running on loki
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It even works, if I put &quot;--slot-list&quot; only once on the command
</span><br>
<span class="quotelev1">&gt; line.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; loki hello_2 116 mpiexec -np 1 --host loki hello_2_mpi : -np 3 --host loki --slot-list 0:0-5,1:0-5 hello_2_slave_mpi
</span><br>
<span class="quotelev1">&gt; Process 1 of 4 running on loki
</span><br>
<span class="quotelev1">&gt; Process 2 of 4 running on loki
</span><br>
<span class="quotelev1">&gt; Process 0 of 4 running on loki
</span><br>
<span class="quotelev1">&gt; Process 3 of 4 running on loki
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hopefully you know what happens and why it happens so that
</span><br>
<span class="quotelev1">&gt; you can fix the problem for openmpi-1.10.x and openmpi-2.x.
</span><br>
<span class="quotelev1">&gt; My three spawn programs work with openmpi-master as well
</span><br>
<span class="quotelev1">&gt; while &quot;spawn_master&quot; breaks on both openmpi-1.10.x and
</span><br>
<span class="quotelev1">&gt; openmpi-2.x with the same failure as my hello master/slave
</span><br>
<span class="quotelev1">&gt; program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you know when the Java problem will be solved?
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 15.05.2016 um 01:27 schrieb Ralph Castain:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 7, 2016, at 1:13 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; yesterday I installed openmpi-v1.10.2-176-g9d45e07 on my &quot;SUSE Linux
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Enterprise Server 12 (x86_64)&quot; with Sun C 5.13  and gcc-5.3.0. The
</span><br>
<span class="quotelev3">&gt;&gt;&gt; following programs don't run anymore.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; loki hello_2 112 ompi_info | grep -e &quot;OPAL repo revision&quot; -e &quot;C compiler absolute&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     OPAL repo revision: v1.10.2-176-g9d45e07
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    C compiler absolute: /opt/solstudio12.4/bin/cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; loki hello_2 113 mpiexec -np 1 --host loki hello_2_mpi : -np 2 --host loki,loki hello_2_slave_mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There are not enough slots available in the system to satisfy the 2 slots
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that were requested by the application:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hello_2_slave_mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Either request fewer slots for your application, or make more slots available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for use.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; loki hello_2 114
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The above worked fine for me with:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; OPAL repo revision: v1.10.2-182-g52c7573
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You might try updating.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Everything worked as expected with openmpi-v1.10.0-178-gb80f802.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; loki hello_2 114 ompi_info | grep -e &quot;OPAL repo revision&quot; -e &quot;C compiler absolute&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     OPAL repo revision: v1.10.0-178-gb80f802
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    C compiler absolute: /opt/solstudio12.4/bin/cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; loki hello_2 115 mpiexec -np 1 --host loki hello_2_mpi : -np 2 --host loki,loki hello_2_slave_mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 0 of 3 running on loki
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 1 of 3 running on loki
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 2 of 3 running on loki
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now 2 slave tasks are sending greetings.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Greetings from task 2:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; message type:        3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have the same problem with openmpi-v2.x-dev-1404-g74d8ea0, if I use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the following commands.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec -np 1 --host loki hello_2_mpi : -np 2 --host loki,loki hello_2_slave_mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec -np 1 --host loki hello_2_mpi : -np 2 --host loki,nfs1 hello_2_slave_mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec -np 1 --host loki hello_2_mpi : -np 2 --host loki --slot-list 0:0-5,1:0-5 hello_2_slave_mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have also the same problem with openmpi-dev-4010-g6c9d65c, if I use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the following command.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec -np 1 --host loki hello_2_mpi : -np 2 --host loki,loki hello_2_slave_mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-dev-4010-g6c9d65c works as expected with the following commands.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec -np 1 --host loki hello_2_mpi : -np 2 --host loki,nfs1 hello_2_slave_mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec -np 1 --host loki hello_2_mpi : -np 2 --host loki --slot-list 0:0-5,1:0-5 hello_2_slave_mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Has the interface changed so that I'm not allowed to use some of my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; commands any longer? I would be grateful, if somebody can fix the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem if it is a problem. Thank you very much for any help in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; advance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<span class="quotelev3">&gt;&gt;&gt; &lt;hello_2_mpi.c&gt;&lt;hello_2_slave_mpi.c&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29126.php">http://www.open-mpi.org/community/lists/users/2016/05/29126.php</a>
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29205.php">http://www.open-mpi.org/community/lists/users/2016/05/29205.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;hello_2_mpi.c&gt;&lt;hello_2_slave_mpi.c&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29206.php">http://www.open-mpi.org/community/lists/users/2016/05/29206.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29208.php">Ralph Castain: "Re: [OMPI users] slot problem on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;"</a>
<li><strong>Previous message:</strong> <a href="29206.php">Siegmar Gross: "Re: [OMPI users] slot problem on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;"</a>
<li><strong>In reply to:</strong> <a href="29206.php">Siegmar Gross: "Re: [OMPI users] slot problem on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29208.php">Ralph Castain: "Re: [OMPI users] slot problem on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;"</a>
<li><strong>Reply:</strong> <a href="29208.php">Ralph Castain: "Re: [OMPI users] slot problem on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;"</a>
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
