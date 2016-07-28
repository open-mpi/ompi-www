<?
$subject_val = "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 31 10:06:10 2010" -->
<!-- isoreceived="20100331140610" -->
<!-- sent="Wed, 31 Mar 2010 09:05:28 -0500" -->
<!-- isosent="20100331140528" -->
<!-- name="Oliver Geisler" -->
<!-- email="openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times" -->
<!-- id="4BB356A8.1090309_at_docawk.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8A64D8BF-2A04-425F-8A82-5C0B7F6C8EBC_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times<br>
<strong>From:</strong> Oliver Geisler (<em>openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-31 10:05:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12500.php">Richard Treumann: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Previous message:</strong> <a href="12498.php">Jeff Squyres: "Re: [OMPI users] strange problem with OpenMPI + rankfile + Intelcompiler 11.0.074 + centos/fedora-12"</a>
<li><strong>In reply to:</strong> <a href="12497.php">Jeff Squyres: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12513.php">Oliver Geisler: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have tried up to kernel 2.6.33.1 on both architectures (Core2 Duo and
<br>
I5) with the same results. The &quot;slow&quot; results are also appearing for
<br>
distribution of processes on the 4 cores one single node.
<br>
We use
<br>
btl = self,sm,tcp
<br>
in
<br>
/etc/openmpi/openmpi-mca-params.conf
<br>
Distributing several process to each one core on several machines is
<br>
fast and has &quot;normal&quot; communication times. So I guess tcp communication
<br>
shouldn't be the problem.
<br>
Also multiple instances of the program, started on one &quot;master&quot; node,
<br>
with each instance distributing several processes to one core of &quot;slave&quot;
<br>
nodes don't seem to be a problem. In effect 4 instances of the program
<br>
occupie all 4 cores on each node which doesn't influence communication
<br>
and overall calculation time much.
<br>
But running 4 processes from the same &quot;master&quot; instance on 4 cores on
<br>
the same node does.
<br>
<p><p>Do you have some more ideas what I can test for? I tried to test
<br>
connectivity_c from openmpi examples on 8 nodes/32 processes. It is hard
<br>
to get reliable/consistent figures from 'top' since the programm
<br>
terminates quite fast and interesting usage is very short. But these are
<br>
some shots of 'top' (master and slave nodes show similar images)
<br>
<p>System and/or Wait Time are up.
<br>
<p>sh-3.2$ mpirun -np 4 -host cluster-05 connectivity_c : -np 28 -host
<br>
cluster-06,cluster-07,cluster-08,cluster-09,cluster-10,cluster-11,cluster-12
<br>
connectivity_c
<br>
Connectivity test on 32 processes PASSED.
<br>
<p><p>Cpu(s): 37.5%us, 46.6%sy,  0.0%ni,  0.0%id, 15.9%wa,  0.0%hi,  0.0%si,
<br>
0.0%st
<br>
Mem:   8181236k total,   168200k used,  8013036k free,        0k buffers
<br>
Swap:        0k total,        0k used,        0k free,   132092k cached
<br>
<p>&nbsp;&nbsp;PID USER      PR  NI  VIRT  RES  SHR S %CPU %MEM    TIME+  P COMMAND
<br>
25179 oli       20   0  143m 3436 2196 R   43  0.0   0:00.57 0
<br>
25180 oli       20   0  142m 3392 2180 R  100  0.0   0:00.85 3
<br>
25182 oli       20   0  142m 3312 2172 R  100  0.0   0:00.93 2
<br>
25181 oli       20   0  134m 3052 2172 R  100  0.0   0:00.93 1
<br>
<p>Cpu(s): 10.3%us,  8.7%sy,  0.0%ni, 21.4%id, 58.7%wa,  0.8%hi,  0.0%si,
<br>
0.0%st
<br>
Mem:   8181236k total,   171352k used,  8009884k free,        0k buffers
<br>
Swap:        0k total,        0k used,        0k free,   130572k cached
<br>
<p>&nbsp;&nbsp;PID USER      PR  NI  VIRT  RES  SHR S %CPU %MEM    TIME+  P COMMAND
<br>
29496 oli       20   0  142m 3300 2176 D   33  0.0   0:00.21 2
<br>
29497 oli       20   0  142m 3280 2160 R   25  0.0   0:00.17 0
<br>
29494 oli       20   0  134m 3044 2180 D    0  0.0   0:00.01 1
<br>
29495 oli       20   0  134m 3036 2172 R   16  0.0   0:00.11 3
<br>
<p>Cpu(s): 18.3%us, 36.3%sy,  0.0%ni, 38.0%id,  6.3%wa,  1.1%hi,  0.0%si,
<br>
0.0%st
<br>
Mem:   8181236k total,   141704k used,  8039532k free,        0k buffers
<br>
Swap:        0k total,        0k used,        0k free,    99828k cached
<br>
<p>&nbsp;&nbsp;PID USER      PR  NI  VIRT  RES  SHR S %CPU %MEM    TIME+  P COMMAND
<br>
29452 oli       20   0  143m 3452 2212 R   52  0.0   0:00.37 1
<br>
29455 oli       20   0  143m 3452 2212 S   57  0.0   0:00.41 3
<br>
29453 oli       20   0  143m 3440 2200 S   55  0.0   0:00.39 0
<br>
29454 oli       20   0  143m 3440 2200 R   55  0.0   0:00.39 2
<br>
<p><p>Thanks for your thoughts, each input is appreciated.
<br>
<p>Oli
<br>
<p><p><p><p>On 3/31/2010 8:38 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I have a very dim recollection of some kernel TCP issues back in some older kernel versions -- such issues affected all TCP communications, not just MPI.  Can you try a newer kernel, perchance?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 30, 2010, at 1:26 PM, &lt;openmpi_at_[hidden]&gt; &lt;openmpi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello List,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I hope you can help us out on that one, as we are trying to figure out
</span><br>
<span class="quotelev2">&gt;&gt; since weeks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The situation: We have a program being capable of slitting to several
</span><br>
<span class="quotelev2">&gt;&gt; processes to be shared on nodes within a cluster network using openmpi.
</span><br>
<span class="quotelev2">&gt;&gt; We were running that system on &quot;older&quot; cluster hardware (Intel Core2 Duo
</span><br>
<span class="quotelev2">&gt;&gt; based, 2GB RAM) using an &quot;older&quot; kernel (2.6.18.6). All nodes are
</span><br>
<span class="quotelev2">&gt;&gt; diskless network booting. Recently we upgraded the hardware (Intel i5,
</span><br>
<span class="quotelev2">&gt;&gt; 8GB RAM) which also required an upgrade to a recent kernel version
</span><br>
<span class="quotelev2">&gt;&gt; (2.6.26+).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is the problem: We experience overall performance loss on the new
</span><br>
<span class="quotelev2">&gt;&gt; hardware and think, we can break it down to a communication issue
</span><br>
<span class="quotelev2">&gt;&gt; inbetween the processes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, we found out, the issue araises in the transition from kernel
</span><br>
<span class="quotelev2">&gt;&gt; 2.6.23 to 2.6.24 (tested on the Core2 Duo system).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is an output from our programm:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2.6.23.17 (64bit), MPI 1.2.7
</span><br>
<span class="quotelev2">&gt;&gt; 5 Iterationen (Core2 Duo) 6 CPU:
</span><br>
<span class="quotelev2">&gt;&gt;     93.33 seconds per iteration.
</span><br>
<span class="quotelev2">&gt;&gt;  Node   0 communication/computation time:      6.83 /    647.64 seconds.
</span><br>
<span class="quotelev2">&gt;&gt;  Node   1 communication/computation time:     10.09 /    644.36 seconds.
</span><br>
<span class="quotelev2">&gt;&gt;  Node   2 communication/computation time:      7.27 /    645.03 seconds.
</span><br>
<span class="quotelev2">&gt;&gt;  Node   3 communication/computation time:    165.02 /    485.52 seconds.
</span><br>
<span class="quotelev2">&gt;&gt;  Node   4 communication/computation time:      6.50 /    643.82 seconds.
</span><br>
<span class="quotelev2">&gt;&gt;  Node   5 communication/computation time:      7.80 /    627.63 seconds.
</span><br>
<span class="quotelev2">&gt;&gt;  Computation time:    897.00 seconds.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2.6.24.7 (64bit) .. re-evaluated, MPI 1.2.7
</span><br>
<span class="quotelev2">&gt;&gt; 5 Iterationen (Core2 Duo) 6 CPU:
</span><br>
<span class="quotelev2">&gt;&gt;    131.33 seconds per iteration.
</span><br>
<span class="quotelev2">&gt;&gt;  Node   0 communication/computation time:    364.15 /    645.24 seconds.
</span><br>
<span class="quotelev2">&gt;&gt;  Node   1 communication/computation time:    362.83 /    645.26 seconds.
</span><br>
<span class="quotelev2">&gt;&gt;  Node   2 communication/computation time:    349.39 /    645.07 seconds.
</span><br>
<span class="quotelev2">&gt;&gt;  Node   3 communication/computation time:    508.34 /    485.53 seconds.
</span><br>
<span class="quotelev2">&gt;&gt;  Node   4 communication/computation time:    349.94 /    643.81 seconds.
</span><br>
<span class="quotelev2">&gt;&gt;  Node   5 communication/computation time:    349.07 /    627.47 seconds.
</span><br>
<span class="quotelev2">&gt;&gt;  Computation time:   1251.00 seconds.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The program is 32 bit software, but it doesn't make any difference
</span><br>
<span class="quotelev2">&gt;&gt; whether the kernel is 64 or 32 bit. Also the OpenMPI version 1.4.1 was
</span><br>
<span class="quotelev2">&gt;&gt; tested, cut communication times by half (which still is too high), but
</span><br>
<span class="quotelev2">&gt;&gt; improvement decreased with increasing kernel version number.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The communication time is meant to be the time the master process
</span><br>
<span class="quotelev2">&gt;&gt; distributes the data portions for calculation and collecting the results
</span><br>
<span class="quotelev2">&gt;&gt; from the slave processes. The value also contains times a slave has to
</span><br>
<span class="quotelev2">&gt;&gt; wait to communicate with the master as he is occupied. This explains the
</span><br>
<span class="quotelev2">&gt;&gt; extended communication time of node #3 as the calculation time is
</span><br>
<span class="quotelev2">&gt;&gt; reduced (based on the nature of the data)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The command to start the calculation:
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 -host cluster-17 invert-master -b -s -p inv_grav.inp : -np
</span><br>
<span class="quotelev2">&gt;&gt; 4 -host cluster-18,cluster-19
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Using top (with 'f' and 'j' showing P row) we could track which process
</span><br>
<span class="quotelev2">&gt;&gt; runs on which core. We found processes stayed on its initial core in
</span><br>
<span class="quotelev2">&gt;&gt; kernel 2.6.23, but started to flip around with 2.6.24. Using the
</span><br>
<span class="quotelev2">&gt;&gt; --bind-to-core option in openmpi 1.4.1 kept the processes on its cores
</span><br>
<span class="quotelev2">&gt;&gt; again, but that didn't influence the overall outcome, didn't fix the issue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We found top showing ~25% CPU wait time, and processes showing 'D' ,
</span><br>
<span class="quotelev2">&gt;&gt; also on slave only nodes. According to our programmer communications are
</span><br>
<span class="quotelev2">&gt;&gt; only between the master process and its slaves, but not among slaves. On
</span><br>
<span class="quotelev2">&gt;&gt; kernel 2.6.23 and lower CPU usage is 100% on user, no wait or system
</span><br>
<span class="quotelev2">&gt;&gt; percentage.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Example from top:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cpu(s): 75.3%us,  0.6%sy,  0.0%ni,  0.0%id, 23.1%wa,  0.7%hi,  0.3%si,
</span><br>
<span class="quotelev2">&gt;&gt; 0.0%st
</span><br>
<span class="quotelev2">&gt;&gt; Mem:   8181236k total,   131224k used,  8050012k free,        0k buffers
</span><br>
<span class="quotelev2">&gt;&gt; Swap:        0k total,        0k used,        0k free,    49868k cached
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   PID USER      PR  NI  VIRT  RES  SHR S %CPU %MEM    TIME+  P COMMAND
</span><br>
<span class="quotelev2">&gt;&gt;  3386 oli       20   0 90512  20m 3988 R   74  0.3  12:31.80 0 invert-
</span><br>
<span class="quotelev2">&gt;&gt;  3387 oli       20   0 85072  15m 3780 D   67  0.2  11:59.30 1 invert-
</span><br>
<span class="quotelev2">&gt;&gt;  3388 oli       20   0 85064  14m 3588 D   77  0.2  12:56.90 2 invert-
</span><br>
<span class="quotelev2">&gt;&gt;  3389 oli       20   0 84936  14m 3436 R   85  0.2  13:28.30 3 invert-
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Some system information that might be helpful:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Nodes Hardware:
</span><br>
<span class="quotelev2">&gt;&gt; 1. &quot;older&quot;: Intel Core2 Duo, (2x1)GB RAM
</span><br>
<span class="quotelev2">&gt;&gt; 2. &quot;newer&quot;: Intel(R) Core(TM) i5 CPU, Mainboard ASUS RS100-E6, (4x2)GB RAM
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Debian stable (lenny) distribution with
</span><br>
<span class="quotelev2">&gt;&gt; ii  libc6                             2.7-18lenny2
</span><br>
<span class="quotelev2">&gt;&gt; ii  libopenmpi1                       1.2.7~rc2-2
</span><br>
<span class="quotelev2">&gt;&gt; ii  openmpi-bin                       1.2.7~rc2-2
</span><br>
<span class="quotelev2">&gt;&gt; ii  openmpi-common                    1.2.7~rc2-2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Nodes are booting diskless with nfs-root and a kernel with all drivers
</span><br>
<span class="quotelev2">&gt;&gt; needed compiled in.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Information on the program using openmpi and tools used to compile it:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --version:
</span><br>
<span class="quotelev2">&gt;&gt; mpirun (Open MPI) 1.2.7rc2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; libopenmpi-dev 1.2.7~rc2-2
</span><br>
<span class="quotelev2">&gt;&gt; depends on:
</span><br>
<span class="quotelev2">&gt;&gt;  libc6 (2.7-18lenny2)
</span><br>
<span class="quotelev2">&gt;&gt;  libopenmpi1 (1.2.7~rc2-2)
</span><br>
<span class="quotelev2">&gt;&gt;  openmpi-common (1.2.7~rc2-2)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Compilation command:
</span><br>
<span class="quotelev2">&gt;&gt; mpif90
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FORTRAN compiler (FC):
</span><br>
<span class="quotelev2">&gt;&gt; gfortran --version:
</span><br>
<span class="quotelev2">&gt;&gt; GNU Fortran (Debian 4.3.2-1.1) 4.3.2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Called OpenMPI-functions (FORTRAN Bindings):
</span><br>
<span class="quotelev2">&gt;&gt; mpi_comm-rank
</span><br>
<span class="quotelev2">&gt;&gt; mpi_comm_size
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpi_bcast
</span><br>
<span class="quotelev2">&gt;&gt; mpi_reduce
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpi_isend
</span><br>
<span class="quotelev2">&gt;&gt; mpi_wait
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpi_send
</span><br>
<span class="quotelev2">&gt;&gt; mpi_probe
</span><br>
<span class="quotelev2">&gt;&gt; mpi_recv
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Wtime
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Additionally linked libncurses library:
</span><br>
<span class="quotelev2">&gt;&gt; libncurses5-dev (5.7+20081213-1)
</span><br>
<span class="quotelev2">&gt;&gt; On remote nodes no calls are ever made to this library. On local nodes
</span><br>
<span class="quotelev2">&gt;&gt; such calls  (coded in C) are only optionally, but usually they are
</span><br>
<span class="quotelev2">&gt;&gt; skipped too (i.e. even no initscr() is called).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A signal handler is integrated (coded in C) that reacts specifically on
</span><br>
<span class="quotelev2">&gt;&gt; SIGTERM and SIGUSR1 signals.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you need more information (e.g. kernel config etc.) please ask.
</span><br>
<span class="quotelev2">&gt;&gt; I hope you can provide some ideas to test and resolve the issue.
</span><br>
<span class="quotelev2">&gt;&gt; Thanks anyways.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Oli
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; This message has been scanned for viruses and
</span><br>
<span class="quotelev2">&gt;&gt; dangerous content by MailScanner, and is
</span><br>
<span class="quotelev2">&gt;&gt; believed to be clean.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
This message has been scanned for viruses and
dangerous content by MailScanner, and is
believed to be clean.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12500.php">Richard Treumann: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Previous message:</strong> <a href="12498.php">Jeff Squyres: "Re: [OMPI users] strange problem with OpenMPI + rankfile + Intelcompiler 11.0.074 + centos/fedora-12"</a>
<li><strong>In reply to:</strong> <a href="12497.php">Jeff Squyres: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12513.php">Oliver Geisler: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
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
