<?
$subject_val = "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 24 10:54:48 2016" -->
<!-- isoreceived="20160524145448" -->
<!-- sent="Tue, 24 May 2016 07:54:43 -0700" -->
<!-- isosent="20160524145443" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2" -->
<!-- id="99D01387-A51B-44C8-8A15-6D383D2E8739_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="4ce7d822-3f15-b2ef-d978-fa87cc072104_at_informatik.hs-fulda.de" -->
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
<strong>Date:</strong> 2016-05-24 10:54:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29310.php">Howard Pritchard: "Re: [OMPI users] problem with exceptions in Java interface"</a>
<li><strong>Previous message:</strong> <a href="29308.php">Siegmar Gross: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<li><strong>In reply to:</strong> <a href="29308.php">Siegmar Gross: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29313.php">Siegmar Gross: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<li><strong>Reply:</strong> <a href="29313.php">Siegmar Gross: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<li><strong>Reply:</strong> <a href="29315.php">Siegmar Gross: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Works perfectly for me, so I believe this must be an environment issue - I am using gcc 6.0.0 on CentOS7 with x86:
<br>
<p>$ mpirun -n 1 -host bend001 --slot-list 0:0-1,1:0-1 --report-bindings ./simple_spawn
<br>
[bend001:17599] MCW rank 0 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]], socket 1[core 6[hwt 0-1]], socket 1[core 7[hwt 0-1]]: [BB/BB/../../../..][BB/BB/../../../..]
<br>
[pid 17601] starting up!
<br>
0 completed MPI_Init
<br>
Parent [pid 17601] about to spawn!
<br>
[pid 17603] starting up!
<br>
[bend001:17599] MCW rank 0 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]], socket 1[core 6[hwt 0-1]], socket 1[core 7[hwt 0-1]]: [BB/BB/../../../..][BB/BB/../../../..]
<br>
[bend001:17599] MCW rank 1 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]], socket 1[core 6[hwt 0-1]], socket 1[core 7[hwt 0-1]]: [BB/BB/../../../..][BB/BB/../../../..]
<br>
[bend001:17599] MCW rank 2 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]], socket 1[core 6[hwt 0-1]], socket 1[core 7[hwt 0-1]]: [BB/BB/../../../..][BB/BB/../../../..]
<br>
[pid 17604] starting up!
<br>
[pid 17605] starting up!
<br>
Parent done with spawn
<br>
Parent sending message to child
<br>
0 completed MPI_Init
<br>
Hello from the child 0 of 3 on host bend001 pid 17603
<br>
Child 0 received msg: 38
<br>
1 completed MPI_Init
<br>
Hello from the child 1 of 3 on host bend001 pid 17604
<br>
2 completed MPI_Init
<br>
Hello from the child 2 of 3 on host bend001 pid 17605
<br>
Child 0 disconnected
<br>
Child 2 disconnected
<br>
Parent disconnected
<br>
Child 1 disconnected
<br>
17603: exiting
<br>
17605: exiting
<br>
17601: exiting
<br>
17604: exiting
<br>
$
<br>
<p><span class="quotelev1">&gt; On May 24, 2016, at 7:18 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph and Gilles,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the program breaks only, if I combine &quot;--host&quot; and &quot;--slot-list&quot;. Perhaps this
</span><br>
<span class="quotelev1">&gt; information is helpful. I use a different machine now, so that you can see that
</span><br>
<span class="quotelev1">&gt; the problem is not restricted to &quot;loki&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; pc03 spawn 115 ompi_info | grep -e &quot;OPAL repo revision:&quot; -e &quot;C compiler absolute:&quot;
</span><br>
<span class="quotelev1">&gt;      OPAL repo revision: v1.10.2-201-gd23dda8
</span><br>
<span class="quotelev1">&gt;     C compiler absolute: /usr/local/gcc-6.1.0/bin/gcc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; pc03 spawn 116 uname -a
</span><br>
<span class="quotelev1">&gt; Linux pc03 3.12.55-52.42-default #1 SMP Thu Mar 3 10:35:46 UTC 2016 (4354e1d) x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; pc03 spawn 117 cat host_pc03.openmpi
</span><br>
<span class="quotelev1">&gt; pc03.informatik.hs-fulda.de slots=12 max_slots=12
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; pc03 spawn 118 mpicc simple_spawn.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; pc03 spawn 119 mpiexec -np 1 --report-bindings a.out
</span><br>
<span class="quotelev1">&gt; [pc03:03711] MCW rank 0 bound to socket 0[core 0[hwt 0-1]]: [BB/../../../../..][../../../../../..]
</span><br>
<span class="quotelev1">&gt; [pid 3713] starting up!
</span><br>
<span class="quotelev1">&gt; 0 completed MPI_Init
</span><br>
<span class="quotelev1">&gt; Parent [pid 3713] about to spawn!
</span><br>
<span class="quotelev1">&gt; [pc03:03711] MCW rank 0 bound to socket 1[core 6[hwt 0-1]], socket 1[core 7[hwt 0-1]], socket 1[core 8[hwt 0-1]], socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt 0-1]]: [../../../../../..][BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev1">&gt; [pc03:03711] MCW rank 1 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]]: [BB/BB/BB/BB/BB/BB][../../../../../..]
</span><br>
<span class="quotelev1">&gt; [pc03:03711] MCW rank 2 bound to socket 1[core 6[hwt 0-1]], socket 1[core 7[hwt 0-1]], socket 1[core 8[hwt 0-1]], socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt 0-1]]: [../../../../../..][BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev1">&gt; [pid 3715] starting up!
</span><br>
<span class="quotelev1">&gt; [pid 3716] starting up!
</span><br>
<span class="quotelev1">&gt; [pid 3717] starting up!
</span><br>
<span class="quotelev1">&gt; Parent done with spawn
</span><br>
<span class="quotelev1">&gt; Parent sending message to child
</span><br>
<span class="quotelev1">&gt; 0 completed MPI_Init
</span><br>
<span class="quotelev1">&gt; Hello from the child 0 of 3 on host pc03 pid 3715
</span><br>
<span class="quotelev1">&gt; 1 completed MPI_Init
</span><br>
<span class="quotelev1">&gt; Hello from the child 1 of 3 on host pc03 pid 3716
</span><br>
<span class="quotelev1">&gt; 2 completed MPI_Init
</span><br>
<span class="quotelev1">&gt; Hello from the child 2 of 3 on host pc03 pid 3717
</span><br>
<span class="quotelev1">&gt; Child 0 received msg: 38
</span><br>
<span class="quotelev1">&gt; Child 0 disconnected
</span><br>
<span class="quotelev1">&gt; Child 2 disconnected
</span><br>
<span class="quotelev1">&gt; Parent disconnected
</span><br>
<span class="quotelev1">&gt; Child 1 disconnected
</span><br>
<span class="quotelev1">&gt; 3713: exiting
</span><br>
<span class="quotelev1">&gt; 3715: exiting
</span><br>
<span class="quotelev1">&gt; 3716: exiting
</span><br>
<span class="quotelev1">&gt; 3717: exiting
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; pc03 spawn 120 mpiexec -np 1 --hostfile host_pc03.openmpi --slot-list 0:0-1,1:0-1 --report-bindings a.out
</span><br>
<span class="quotelev1">&gt; [pc03:03729] MCW rank 0 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]], socket 1[core 6[hwt 0-1]], socket 1[core 7[hwt 0-1]]: [BB/BB/../../../..][BB/BB/../../../..]
</span><br>
<span class="quotelev1">&gt; [pid 3731] starting up!
</span><br>
<span class="quotelev1">&gt; 0 completed MPI_Init
</span><br>
<span class="quotelev1">&gt; Parent [pid 3731] about to spawn!
</span><br>
<span class="quotelev1">&gt; [pc03:03729] MCW rank 0 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]], socket 1[core 6[hwt 0-1]], socket 1[core 7[hwt 0-1]]: [BB/BB/../../../..][BB/BB/../../../..]
</span><br>
<span class="quotelev1">&gt; [pc03:03729] MCW rank 1 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]], socket 1[core 6[hwt 0-1]], socket 1[core 7[hwt 0-1]]: [BB/BB/../../../..][BB/BB/../../../..]
</span><br>
<span class="quotelev1">&gt; [pc03:03729] MCW rank 2 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]], socket 1[core 6[hwt 0-1]], socket 1[core 7[hwt 0-1]]: [BB/BB/../../../..][BB/BB/../../../..]
</span><br>
<span class="quotelev1">&gt; [pid 3733] starting up!
</span><br>
<span class="quotelev1">&gt; [pid 3734] starting up!
</span><br>
<span class="quotelev1">&gt; [pid 3735] starting up!
</span><br>
<span class="quotelev1">&gt; Parent done with spawn
</span><br>
<span class="quotelev1">&gt; Parent sending message to child
</span><br>
<span class="quotelev1">&gt; 2 completed MPI_Init
</span><br>
<span class="quotelev1">&gt; Hello from the child 2 of 3 on host pc03 pid 3735
</span><br>
<span class="quotelev1">&gt; 1 completed MPI_Init
</span><br>
<span class="quotelev1">&gt; Hello from the child 1 of 3 on host pc03 pid 3734
</span><br>
<span class="quotelev1">&gt; 0 completed MPI_Init
</span><br>
<span class="quotelev1">&gt; Hello from the child 0 of 3 on host pc03 pid 3733
</span><br>
<span class="quotelev1">&gt; Child 0 received msg: 38
</span><br>
<span class="quotelev1">&gt; Child 0 disconnected
</span><br>
<span class="quotelev1">&gt; Child 2 disconnected
</span><br>
<span class="quotelev1">&gt; Child 1 disconnected
</span><br>
<span class="quotelev1">&gt; Parent disconnected
</span><br>
<span class="quotelev1">&gt; 3731: exiting
</span><br>
<span class="quotelev1">&gt; 3734: exiting
</span><br>
<span class="quotelev1">&gt; 3733: exiting
</span><br>
<span class="quotelev1">&gt; 3735: exiting
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; pc03 spawn 121 mpiexec -np 1 --host pc03 --slot-list 0:0-1,1:0-1 --report-bindings a.out
</span><br>
<span class="quotelev1">&gt; [pc03:03744] MCW rank 0 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]], socket 1[core 6[hwt 0-1]], socket 1[core 7[hwt 0-1]]: [BB/BB/../../../..][BB/BB/../../../..]
</span><br>
<span class="quotelev1">&gt; [pid 3746] starting up!
</span><br>
<span class="quotelev1">&gt; 0 completed MPI_Init
</span><br>
<span class="quotelev1">&gt; Parent [pid 3746] about to spawn!
</span><br>
<span class="quotelev1">&gt; [pc03:03744] MCW rank 0 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]], socket 1[core 6[hwt 0-1]], socket 1[core 7[hwt 0-1]]: [BB/BB/../../../..][BB/BB/../../../..]
</span><br>
<span class="quotelev1">&gt; [pc03:03744] MCW rank 2 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]], socket 1[core 6[hwt 0-1]], socket 1[core 7[hwt 0-1]]: [BB/BB/../../../..][BB/BB/../../../..]
</span><br>
<span class="quotelev1">&gt; [pid 3748] starting up!
</span><br>
<span class="quotelev1">&gt; [pid 3749] starting up!
</span><br>
<span class="quotelev1">&gt; [pc03:03749] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [pc03:03749] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [pc03:03749] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [pc03:03749] Failing at address: 0x8
</span><br>
<span class="quotelev1">&gt; [pc03:03749] [ 0] /lib64/libpthread.so.0(+0xf870)[0x7fe6f0d1f870]
</span><br>
<span class="quotelev1">&gt; [pc03:03749] [ 1] /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_proc_self+0x35)[0x7fe6f0f825b0]
</span><br>
<span class="quotelev1">&gt; [pc03:03749] [ 2] /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_comm_init+0x68b)[0x7fe6f0f61b08]
</span><br>
<span class="quotelev1">&gt; [pc03:03749] [ 3] /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_mpi_init+0xa90)[0x7fe6f0f87e8a]
</span><br>
<span class="quotelev1">&gt; [pc03:03749] [ 4] /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(MPI_Init+0x1a0)[0x7fe6f0fc42ae]
</span><br>
<span class="quotelev1">&gt; [pc03:03749] [ 5] a.out[0x400d0c]
</span><br>
<span class="quotelev1">&gt; [pc03:03749] [ 6] /lib64/libc.so.6(__libc_start_main+0xf5)[0x7fe6f0989b05]
</span><br>
<span class="quotelev1">&gt; [pc03:03749] [ 7] a.out[0x400bf9]
</span><br>
<span class="quotelev1">&gt; [pc03:03749] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec noticed that process rank 2 with PID 3749 on node pc03 exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; pc03 spawn 122
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 05/24/16 15:44, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 24, 2016, at 6:21 AM, Siegmar Gross &lt;siegmar.gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I copy the relevant lines to this place, so that it is easier to see what
</span><br>
<span class="quotelev3">&gt;&gt;&gt; happens. &quot;a.out&quot; is your program, which I compiled with mpicc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; loki spawn 153 ompi_info | grep -e &quot;OPAL repo revision:&quot; -e &quot;C compiler
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; absolute:&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     OPAL repo revision: v1.10.2-201-gd23dda8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    C compiler absolute: /usr/local/gcc-6.1.0/bin/gcc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; loki spawn 154 mpicc simple_spawn.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; loki spawn 155 mpiexec -np 1 a.out
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [pid 24008] starting up!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 0 completed MPI_Init
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;mpiexec -np 1 a.out&quot; works.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I don&#146;t know what &#147;a.out&#148; is, but it looks like there is some memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; corruption there.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;a.out&quot; is still your program. I get the same error on different
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machines, so that it is not very likely, that the (hardware) memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is corrupted.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; loki spawn 156 mpiexec -np 1 --host loki --slot-list 0-5 a.out
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [pid 24102] starting up!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 0 completed MPI_Init
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Parent [pid 24102] about to spawn!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [pid 24104] starting up!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [pid 24105] starting up!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [loki:24105] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [loki:24105] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [loki:24105] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;mpiexec -np 1 --host loki --slot-list 0-5 a.out&quot; breaks with a segmentation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; faUlt. Can I do something, so that you can find out, what happens?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I honestly have no idea - perhaps Gilles can help, as I have no access to that kind of environment. We aren&#146;t seeing such problems elsewhere, so it is likely something local.
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 05/24/16 15:07, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On May 24, 2016, at 4:19 AM, Siegmar Gross
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;Siegmar.Gross_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;mailto:Siegmar.Gross_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; thank you very much for your answer and your example program.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 05/23/16 17:45, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I cannot replicate the problem - both scenarios work fine for me. I&#146;m not
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; convinced your test code is correct, however, as you call Comm_free the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; inter-communicator but didn&#146;t call Comm_disconnect. Checkout the attached
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; for a correct code and see if it works for you.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I thought that I only need MPI_Comm_Disconnect, if I would have established a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; connection with MPI_Comm_connect before. The man page for MPI_Comm_free states
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;This  operation marks the communicator object for deallocation. The
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; handle is set to MPI_COMM_NULL. Any pending operations that use this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; communicator will complete normally; the object is actually deallocated only
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; if there are no other active references to it.&quot;.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The man page for MPI_Comm_disconnect states
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;MPI_Comm_disconnect waits for all pending communication on comm to complete
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; internally, deallocates the communicator object, and sets the handle to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_COMM_NULL. It is  a  collective operation.&quot;.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I don't see a difference for my spawned processes, because both functions will
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;wait&quot; until all pending operations have finished, before the object will be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; destroyed. Nevertheless, perhaps my small example program worked all the years
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; by chance.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; However, I don't understand, why my program works with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;mpiexec -np 1 --host loki,loki,loki,loki,loki spawn_master&quot; and breaks with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;mpiexec -np 1 --host loki --slot-list 0:0-5,1:0-5 spawn_master&quot;. You are right,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; my slot-list is equivalent to &quot;-bind-to none&quot;. I could also have used
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;mpiexec -np 1 --host loki --oversubscribe spawn_master&quot; which works as well.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Well, you are only giving us one slot when you specify &quot;-host loki&#148;, and then
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you are trying to launch multiple processes into it. The &#147;slot-list&#148; option only
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tells us what cpus to bind each process to - it doesn&#146;t allocate process slots.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So you have to tell us how many processes are allowed to run on this node.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The program breaks with &quot;There are not enough slots available in the system
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to satisfy ...&quot;, if I only use &quot;--host loki&quot; or different host names,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; without mentioning five host names, using &quot;slot-list&quot;, or &quot;oversubscribe&quot;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Unfortunately &quot;--host &lt;host name&gt;:&lt;number of slots&gt;&quot; isn't available for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; openmpi-1.10.3rc2 to specify the number of available slots.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Correct - we did not backport the new syntax
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Your program behaves the same way as mine, so that MPI_Comm_disconnect
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; will not solve my problem. I had to modify your program in a negligible way
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to get it compiled.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; loki spawn 153 ompi_info | grep -e &quot;OPAL repo revision:&quot; -e &quot;C compiler absolute:&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    OPAL repo revision: v1.10.2-201-gd23dda8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   C compiler absolute: /usr/local/gcc-6.1.0/bin/gcc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; loki spawn 154 mpicc simple_spawn.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; loki spawn 155 mpiexec -np 1 a.out
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [pid 24008] starting up!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 0 completed MPI_Init
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Parent [pid 24008] about to spawn!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [pid 24010] starting up!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [pid 24011] starting up!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [pid 24012] starting up!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Parent done with spawn
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Parent sending message to child
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 0 completed MPI_Init
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello from the child 0 of 3 on host loki pid 24010
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1 completed MPI_Init
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello from the child 1 of 3 on host loki pid 24011
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2 completed MPI_Init
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello from the child 2 of 3 on host loki pid 24012
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Child 0 received msg: 38
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Child 0 disconnected
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Child 1 disconnected
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Child 2 disconnected
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Parent disconnected
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 24012: exiting
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 24010: exiting
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 24008: exiting
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 24011: exiting
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is something wrong with my command line? I didn't use slot-list before, so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that I'm not sure, if I use it in the intended way.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I don&#146;t know what &#147;a.out&#148; is, but it looks like there is some memory corruption
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; there.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; loki spawn 156 mpiexec -np 1 --host loki --slot-list 0-5 a.out
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [pid 24102] starting up!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 0 completed MPI_Init
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Parent [pid 24102] about to spawn!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [pid 24104] starting up!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [pid 24105] starting up!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [loki:24105] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [loki:24105] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [loki:24105] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [loki:24105] Failing at address: 0x8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [loki:24105] [ 0] /lib64/libpthread.so.0(+0xf870)[0x7f39aa76f870]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [loki:24105] [ 1]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_proc_self+0x35)[0x7f39aa9d25b0]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [loki:24105] [ 2]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_comm_init+0x68b)[0x7f39aa9b1b08]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [loki:24105] [ 3] *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [loki:24104] Local abort before MPI_INIT completed successfully; not able to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; aggregate error messages, and not able to guarantee that all other processes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; were killed!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_mpi_init+0xa90)[0x7f39aa9d7e8a]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [loki:24105] [ 4]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(MPI_Init+0x1a0)[0x7f39aaa142ae]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [loki:24105] [ 5] a.out[0x400d0c]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [loki:24105] [ 6] /lib64/libc.so.6(__libc_start_main+0xf5)[0x7f39aa3d9b05]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [loki:24105] [ 7] a.out[0x400bf9]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [loki:24105] *** End of error message ***
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpiexec detected that one or more processes exited with non-zero status, thus
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; causing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Process name: [[49560,2],0]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Exit code:    1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; loki spawn 157
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hopefully, you will find out what happens. Please let me know, if I can
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; help you in any way.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; FWIW: I don&#146;t know how many cores you have on your sockets, but if you
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; have 6 cores/socket, then your slot-list is equivalent to &#147;&#151;bind-to none&#148;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; as the slot-list applies to every process being launched
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On May 23, 2016, at 6:26 AM, Siegmar Gross
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;Siegmar.Gross_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;mailto:Siegmar.Gross_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I installed openmpi-1.10.3rc2 on my &quot;SUSE Linux Enterprise Server
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 12 (x86_64)&quot; with Sun C 5.13  and gcc-6.1.0. Unfortunately I get
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; a segmentation fault for &quot;--slot-list&quot; for one of my small programs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; loki spawn 119 ompi_info | grep -e &quot;OPAL repo revision:&quot; -e &quot;C compiler
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; absolute:&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   OPAL repo revision: v1.10.2-201-gd23dda8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  C compiler absolute: /usr/local/gcc-6.1.0/bin/gcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; loki spawn 120 mpiexec -np 1 --host loki,loki,loki,loki,loki spawn_master
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Parent process 0 running on loki
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I create 4 slave processes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Parent process 0: tasks in MPI_COMM_WORLD:                    1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;               tasks in COMM_CHILD_PROCESSES local group:  1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;               tasks in COMM_CHILD_PROCESSES remote group: 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Slave process 0 of 4 running on loki
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Slave process 1 of 4 running on loki
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Slave process 2 of 4 running on loki
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; spawn_slave 2: argv[0]: spawn_slave
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Slave process 3 of 4 running on loki
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; spawn_slave 0: argv[0]: spawn_slave
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; spawn_slave 1: argv[0]: spawn_slave
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; spawn_slave 3: argv[0]: spawn_slave
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; loki spawn 121 mpiexec -np 1 --host loki --slot-list 0:0-5,1:0-5 spawn_master
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Parent process 0 running on loki
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I create 4 slave processes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:17326] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:17326] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:17326] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:17326] Failing at address: 0x8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:17326] [ 0] /lib64/libpthread.so.0(+0xf870)[0x7f4e469b3870]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:17326] [ 1] *** An error occurred in MPI_Init
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; *** on a NULL communicator
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:17324] Local abort before MPI_INIT completed successfully; not able to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; aggregate error messages, and not able to guarantee that all other processes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; were killed!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_proc_self+0x35)[0x7f4e46c165b0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:17326] [ 2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_comm_init+0x68b)[0x7f4e46bf5b08]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:17326] [ 3] *** An error occurred in MPI_Init
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; *** on a NULL communicator
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:17325] Local abort before MPI_INIT completed successfully; not able to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; aggregate error messages, and not able to guarantee that all other processes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; were killed!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_mpi_init+0xa90)[0x7f4e46c1be8a]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:17326] [ 4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(MPI_Init+0x180)[0x7f4e46c5828e]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:17326] [ 5] spawn_slave[0x40097e]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:17326] [ 6] /lib64/libc.so.6(__libc_start_main+0xf5)[0x7f4e4661db05]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:17326] [ 7] spawn_slave[0x400a54]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [loki:17326] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Child job 2 terminated normally, but 1 process returned
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpiexec detected that one or more processes exited with non-zero status,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; thus causing
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Process name: [[56340,2],0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Exit code:    1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; loki spawn 122
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I would be grateful, if somebody can fix the problem. Thank you
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; very much for any help in advance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29281.php">http://www.open-mpi.org/community/lists/users/2016/05/29281.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29284.php">http://www.open-mpi.org/community/lists/users/2016/05/29284.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;simple_spawn_modified.c&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29300.php">http://www.open-mpi.org/community/lists/users/2016/05/29300.php</a>
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
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29301.php">http://www.open-mpi.org/community/lists/users/2016/05/29301.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29304.php">http://www.open-mpi.org/community/lists/users/2016/05/29304.php</a>
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29307.php">http://www.open-mpi.org/community/lists/users/2016/05/29307.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29308.php">http://www.open-mpi.org/community/lists/users/2016/05/29308.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29310.php">Howard Pritchard: "Re: [OMPI users] problem with exceptions in Java interface"</a>
<li><strong>Previous message:</strong> <a href="29308.php">Siegmar Gross: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<li><strong>In reply to:</strong> <a href="29308.php">Siegmar Gross: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29313.php">Siegmar Gross: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<li><strong>Reply:</strong> <a href="29313.php">Siegmar Gross: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<li><strong>Reply:</strong> <a href="29315.php">Siegmar Gross: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
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
