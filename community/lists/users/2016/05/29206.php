<?
$subject_val = "Re: [OMPI users] slot problem on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 15 10:48:00 2016" -->
<!-- isoreceived="20160515144800" -->
<!-- sent="Sun, 15 May 2016 16:47:36 +0200" -->
<!-- isosent="20160515144736" -->
<!-- name="Siegmar Gross" -->
<!-- email="siegmar.gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] slot problem on &amp;quot;SUSE Linux, Enterprise Server 12 (x86_64)&amp;quot;" -->
<!-- id="b8867d86-7b89-2f62-ec07-bf64505ce45d_at_informatik.hs-fulda.de" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="942B3518-315C-4456-8749-745E13F9707D_at_open-mpi.org" -->
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
<strong>From:</strong> Siegmar Gross (<em>siegmar.gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-15 10:47:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29207.php">Ralph Castain: "Re: [OMPI users] slot problem on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;"</a>
<li><strong>Previous message:</strong> <a href="29205.php">Ralph Castain: "Re: [OMPI users] slot problem on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;"</a>
<li><strong>In reply to:</strong> <a href="29205.php">Ralph Castain: "Re: [OMPI users] slot problem on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29207.php">Ralph Castain: "Re: [OMPI users] slot problem on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;"</a>
<li><strong>Reply:</strong> <a href="29207.php">Ralph Castain: "Re: [OMPI users] slot problem on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>today I upgraded to the latest version and I still have
<br>
problems. I compiled with gcc-6.1.0 and I tried to compile
<br>
with Sun C 5.14 beta. Sun C still broke with &quot;unrecognized
<br>
option '-path'&quot; which was reported before, so that I use
<br>
my gcc version. By the way, this problem is solved for
<br>
openmpi-v2.x-dev-1425-ga558e90 and openmpi-dev-4050-g7f65c2b.
<br>
<p>loki hello_2 124 ompi_info | grep -e &quot;OPAL repo revision&quot; -e &quot;C compiler absolute&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL repo revision: v1.10.2-189-gfc05056
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/local/gcc-6.1.0/bin/gcc
<br>
loki hello_2 125 mpiexec -np 1 --host loki hello_2_mpi : -np 1 --host loki --slot-list 0:0-5,1:0-5 hello_2_slave_mpi
<br>
--------------------------------------------------------------------------
<br>
There are not enough slots available in the system to satisfy the 1 slots
<br>
that were requested by the application:
<br>
&nbsp;&nbsp;&nbsp;hello_2_slave_mpi
<br>
<p>Either request fewer slots for your application, or make more slots available
<br>
for use.
<br>
--------------------------------------------------------------------------
<br>
<p><p><p>I get a result, if I add &quot;--slot-list&quot; to the master process
<br>
as well. I changed &quot;-np 2&quot; to &quot;-np 1&quot; for the slave processes
<br>
to show new problems.
<br>
<p>loki hello_2 126 mpiexec -np 1 --host loki --slot-list 0:0-5,1:0-5 hello_2_mpi : -np 1 --host loki --slot-list 0:0-5,1:0-5 hello_2_slave_mpi
<br>
Process 0 of 2 running on loki
<br>
Process 1 of 2 running on loki
<br>
<p>Now 1 slave tasks are sending greetings.
<br>
<p>Greetings from task 1:
<br>
&nbsp;&nbsp;&nbsp;message type:        3
<br>
&nbsp;&nbsp;&nbsp;msg length:          132 characters
<br>
&nbsp;&nbsp;&nbsp;message:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hostname:          loki
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;operating system:  Linux
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;release:           3.12.55-52.42-default
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;processor:         x86_64
<br>
<p><p>Now lets increase the number of slave processes to 2.
<br>
I still get only greetings from one slave process and
<br>
if I increase the number of slave processes to 3, I get
<br>
a segmentation fault. It's nearly the same for
<br>
openmpi-v2.x-dev-1425-ga558e90 (the only difference is
<br>
that the program hangs forever for 3 slave processes
<br>
for my cc and gcc version). Everything works as expected
<br>
for openmpi-dev-4050-g7f65c2b (although it takes very long
<br>
until I get all messages). It even works, if I put
<br>
&quot;--slot-list&quot; only once on the command line as you can see
<br>
below.
<br>
<p>loki hello_2 127 mpiexec -np 1 --host loki --slot-list 0:0-5,1:0-5 hello_2_mpi : -np 2 --host loki --slot-list 0:0-5,1:0-5 hello_2_slave_mpi
<br>
Process 0 of 2 running on loki
<br>
Process 1 of 2 running on loki
<br>
<p>Now 1 slave tasks are sending greetings.
<br>
<p>Greetings from task 1:
<br>
&nbsp;&nbsp;&nbsp;message type:        3
<br>
&nbsp;&nbsp;&nbsp;msg length:          132 characters
<br>
&nbsp;&nbsp;&nbsp;message:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hostname:          loki
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;operating system:  Linux
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;release:           3.12.55-52.42-default
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;processor:         x86_64
<br>
<p><p>loki hello_2 128 mpiexec -np 1 --host loki --slot-list 0:0-5,1:0-5 hello_2_mpi : -np 3 --host loki --slot-list 0:0-5,1:0-5 hello_2_slave_mpi
<br>
[loki:28536] *** Process received signal ***
<br>
[loki:28536] Signal: Segmentation fault (11)
<br>
[loki:28536] Signal code: Address not mapped (1)
<br>
[loki:28536] Failing at address: 0x8
<br>
[loki:28536] [ 0] /lib64/libpthread.so.0(+0xf870)[0x7fd40eb75870]
<br>
[loki:28536] [ 1] /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_proc_self+0x35)[0x7fd40edd85b0]
<br>
[loki:28536] [ 2] /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_comm_init+0x68b)[0x7fd40edb7b08]
<br>
[loki:28536] [ 3] /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_mpi_init+0xa90)[0x7fd40eddde8a]
<br>
[loki:28536] [ 4] /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(MPI_Init+0x180)[0x7fd40ee1a28e]
<br>
[loki:28536] [ 5] hello_2_slave_mpi[0x400bee]
<br>
[loki:28536] [ 6] *** An error occurred in MPI_Init
<br>
*** on a NULL communicator
<br>
*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
***    and potentially your MPI job)
<br>
[loki:28534] Local abort before MPI_INIT completed successfully; not able to aggregate error messages, and not able to guarantee that all other processes were 
<br>
killed!
<br>
*** An error occurred in MPI_Init
<br>
*** on a NULL communicator
<br>
*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
***    and potentially your MPI job)
<br>
[loki:28535] Local abort before MPI_INIT completed successfully; not able to aggregate error messages, and not able to guarantee that all other processes were 
<br>
killed!
<br>
/lib64/libc.so.6(__libc_start_main+0xf5)[0x7fd40e7dfb05]
<br>
[loki:28536] [ 7] hello_2_slave_mpi[0x400fb0]
<br>
[loki:28536] *** End of error message ***
<br>
-------------------------------------------------------
<br>
Primary job  terminated normally, but 1 process returned
<br>
a non-zero exit code.. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpiexec detected that one or more processes exited with non-zero status, thus causing
<br>
the job to be terminated. The first process to do so was:
<br>
<p>&nbsp;&nbsp;&nbsp;Process name: [[61640,1],0]
<br>
&nbsp;&nbsp;&nbsp;Exit code:    1
<br>
--------------------------------------------------------------------------
<br>
loki hello_2 129
<br>
<p><p><p>loki hello_2 114 ompi_info | grep -e &quot;OPAL repo revision&quot; -e &quot;C compiler absolute&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL repo revision: dev-4050-g7f65c2b
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /opt/solstudio12.5b/bin/cc
<br>
loki hello_2 115 mpiexec -np 1 --host loki --slot-list 0:0-5,1:0-5 hello_2_mpi : -np 3 --host loki --slot-list 0:0-5,1:0-5 hello_2_slave_mpi
<br>
Process 0 of 4 running on loki
<br>
Process 1 of 4 running on loki
<br>
Process 2 of 4 running on loki
<br>
Process 3 of 4 running on loki
<br>
...
<br>
<p><p>It even works, if I put &quot;--slot-list&quot; only once on the command
<br>
line.
<br>
<p>loki hello_2 116 mpiexec -np 1 --host loki hello_2_mpi : -np 3 --host loki --slot-list 0:0-5,1:0-5 hello_2_slave_mpi
<br>
Process 1 of 4 running on loki
<br>
Process 2 of 4 running on loki
<br>
Process 0 of 4 running on loki
<br>
Process 3 of 4 running on loki
<br>
...
<br>
<p><p>Hopefully you know what happens and why it happens so that
<br>
you can fix the problem for openmpi-1.10.x and openmpi-2.x.
<br>
My three spawn programs work with openmpi-master as well
<br>
while &quot;spawn_master&quot; breaks on both openmpi-1.10.x and
<br>
openmpi-2.x with the same failure as my hello master/slave
<br>
program.
<br>
<p>Do you know when the Java problem will be solved?
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><p>Am 15.05.2016 um 01:27 schrieb Ralph Castain:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 7, 2016, at 1:13 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; yesterday I installed openmpi-v1.10.2-176-g9d45e07 on my &quot;SUSE Linux
</span><br>
<span class="quotelev2">&gt;&gt; Enterprise Server 12 (x86_64)&quot; with Sun C 5.13  and gcc-5.3.0. The
</span><br>
<span class="quotelev2">&gt;&gt; following programs don't run anymore.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; loki hello_2 112 ompi_info | grep -e &quot;OPAL repo revision&quot; -e &quot;C compiler absolute&quot;
</span><br>
<span class="quotelev2">&gt;&gt;      OPAL repo revision: v1.10.2-176-g9d45e07
</span><br>
<span class="quotelev2">&gt;&gt;     C compiler absolute: /opt/solstudio12.4/bin/cc
</span><br>
<span class="quotelev2">&gt;&gt; loki hello_2 113 mpiexec -np 1 --host loki hello_2_mpi : -np 2 --host loki,loki hello_2_slave_mpi
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; There are not enough slots available in the system to satisfy the 2 slots
</span><br>
<span class="quotelev2">&gt;&gt; that were requested by the application:
</span><br>
<span class="quotelev2">&gt;&gt;  hello_2_slave_mpi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Either request fewer slots for your application, or make more slots available
</span><br>
<span class="quotelev2">&gt;&gt; for use.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; loki hello_2 114
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The above worked fine for me with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OPAL repo revision: v1.10.2-182-g52c7573
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You might try updating.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Everything worked as expected with openmpi-v1.10.0-178-gb80f802.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; loki hello_2 114 ompi_info | grep -e &quot;OPAL repo revision&quot; -e &quot;C compiler absolute&quot;
</span><br>
<span class="quotelev2">&gt;&gt;      OPAL repo revision: v1.10.0-178-gb80f802
</span><br>
<span class="quotelev2">&gt;&gt;     C compiler absolute: /opt/solstudio12.4/bin/cc
</span><br>
<span class="quotelev2">&gt;&gt; loki hello_2 115 mpiexec -np 1 --host loki hello_2_mpi : -np 2 --host loki,loki hello_2_slave_mpi
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 of 3 running on loki
</span><br>
<span class="quotelev2">&gt;&gt; Process 1 of 3 running on loki
</span><br>
<span class="quotelev2">&gt;&gt; Process 2 of 3 running on loki
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now 2 slave tasks are sending greetings.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Greetings from task 2:
</span><br>
<span class="quotelev2">&gt;&gt;  message type:        3
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have the same problem with openmpi-v2.x-dev-1404-g74d8ea0, if I use
</span><br>
<span class="quotelev2">&gt;&gt; the following commands.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec -np 1 --host loki hello_2_mpi : -np 2 --host loki,loki hello_2_slave_mpi
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec -np 1 --host loki hello_2_mpi : -np 2 --host loki,nfs1 hello_2_slave_mpi
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec -np 1 --host loki hello_2_mpi : -np 2 --host loki --slot-list 0:0-5,1:0-5 hello_2_slave_mpi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have also the same problem with openmpi-dev-4010-g6c9d65c, if I use
</span><br>
<span class="quotelev2">&gt;&gt; the following command.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec -np 1 --host loki hello_2_mpi : -np 2 --host loki,loki hello_2_slave_mpi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-dev-4010-g6c9d65c works as expected with the following commands.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec -np 1 --host loki hello_2_mpi : -np 2 --host loki,nfs1 hello_2_slave_mpi
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec -np 1 --host loki hello_2_mpi : -np 2 --host loki --slot-list 0:0-5,1:0-5 hello_2_slave_mpi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Has the interface changed so that I'm not allowed to use some of my
</span><br>
<span class="quotelev2">&gt;&gt; commands any longer? I would be grateful, if somebody can fix the
</span><br>
<span class="quotelev2">&gt;&gt; problem if it is a problem. Thank you very much for any help in
</span><br>
<span class="quotelev2">&gt;&gt; advance.
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; &lt;hello_2_mpi.c&gt;&lt;hello_2_slave_mpi.c&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29126.php">http://www.open-mpi.org/community/lists/users/2016/05/29126.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29205.php">http://www.open-mpi.org/community/lists/users/2016/05/29205.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>

<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29206/hello_2_mpi.c">hello_2_mpi.c</a>
</ul>
<!-- attachment="hello_2_mpi.c" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29206/hello_2_slave_mpi.c">hello_2_slave_mpi.c</a>
</ul>
<!-- attachment="hello_2_slave_mpi.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29207.php">Ralph Castain: "Re: [OMPI users] slot problem on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;"</a>
<li><strong>Previous message:</strong> <a href="29205.php">Ralph Castain: "Re: [OMPI users] slot problem on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;"</a>
<li><strong>In reply to:</strong> <a href="29205.php">Ralph Castain: "Re: [OMPI users] slot problem on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29207.php">Ralph Castain: "Re: [OMPI users] slot problem on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;"</a>
<li><strong>Reply:</strong> <a href="29207.php">Ralph Castain: "Re: [OMPI users] slot problem on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;"</a>
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
