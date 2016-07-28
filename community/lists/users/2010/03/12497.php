<?
$subject_val = "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 31 09:38:30 2010" -->
<!-- isoreceived="20100331133830" -->
<!-- sent="Wed, 31 Mar 2010 09:38:10 -0400" -->
<!-- isosent="20100331133810" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times" -->
<!-- id="8A64D8BF-2A04-425F-8A82-5C0B7F6C8EBC_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BB2345C.1030208_at_docawk.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-31 09:38:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12498.php">Jeff Squyres: "Re: [OMPI users] strange problem with OpenMPI + rankfile + Intelcompiler 11.0.074 + centos/fedora-12"</a>
<li><strong>Previous message:</strong> <a href="12496.php">Jeff Squyres: "Re: [OMPI users] OPEN_MPI macro for mpif.h?"</a>
<li><strong>In reply to:</strong> <a href="12474.php">openmpi_at_[hidden]: "[OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12499.php">Oliver Geisler: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="12499.php">Oliver Geisler: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a very dim recollection of some kernel TCP issues back in some older kernel versions -- such issues affected all TCP communications, not just MPI.  Can you try a newer kernel, perchance?
<br>
<p><p>On Mar 30, 2010, at 1:26 PM, &lt;openmpi_at_[hidden]&gt; &lt;openmpi_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello List,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope you can help us out on that one, as we are trying to figure out
</span><br>
<span class="quotelev1">&gt; since weeks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The situation: We have a program being capable of slitting to several
</span><br>
<span class="quotelev1">&gt; processes to be shared on nodes within a cluster network using openmpi.
</span><br>
<span class="quotelev1">&gt; We were running that system on &quot;older&quot; cluster hardware (Intel Core2 Duo
</span><br>
<span class="quotelev1">&gt; based, 2GB RAM) using an &quot;older&quot; kernel (2.6.18.6). All nodes are
</span><br>
<span class="quotelev1">&gt; diskless network booting. Recently we upgraded the hardware (Intel i5,
</span><br>
<span class="quotelev1">&gt; 8GB RAM) which also required an upgrade to a recent kernel version
</span><br>
<span class="quotelev1">&gt; (2.6.26+).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the problem: We experience overall performance loss on the new
</span><br>
<span class="quotelev1">&gt; hardware and think, we can break it down to a communication issue
</span><br>
<span class="quotelev1">&gt; inbetween the processes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, we found out, the issue araises in the transition from kernel
</span><br>
<span class="quotelev1">&gt; 2.6.23 to 2.6.24 (tested on the Core2 Duo system).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is an output from our programm:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2.6.23.17 (64bit), MPI 1.2.7
</span><br>
<span class="quotelev1">&gt; 5 Iterationen (Core2 Duo) 6 CPU:
</span><br>
<span class="quotelev1">&gt;     93.33 seconds per iteration.
</span><br>
<span class="quotelev1">&gt;  Node   0 communication/computation time:      6.83 /    647.64 seconds.
</span><br>
<span class="quotelev1">&gt;  Node   1 communication/computation time:     10.09 /    644.36 seconds.
</span><br>
<span class="quotelev1">&gt;  Node   2 communication/computation time:      7.27 /    645.03 seconds.
</span><br>
<span class="quotelev1">&gt;  Node   3 communication/computation time:    165.02 /    485.52 seconds.
</span><br>
<span class="quotelev1">&gt;  Node   4 communication/computation time:      6.50 /    643.82 seconds.
</span><br>
<span class="quotelev1">&gt;  Node   5 communication/computation time:      7.80 /    627.63 seconds.
</span><br>
<span class="quotelev1">&gt;  Computation time:    897.00 seconds.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2.6.24.7 (64bit) .. re-evaluated, MPI 1.2.7
</span><br>
<span class="quotelev1">&gt; 5 Iterationen (Core2 Duo) 6 CPU:
</span><br>
<span class="quotelev1">&gt;    131.33 seconds per iteration.
</span><br>
<span class="quotelev1">&gt;  Node   0 communication/computation time:    364.15 /    645.24 seconds.
</span><br>
<span class="quotelev1">&gt;  Node   1 communication/computation time:    362.83 /    645.26 seconds.
</span><br>
<span class="quotelev1">&gt;  Node   2 communication/computation time:    349.39 /    645.07 seconds.
</span><br>
<span class="quotelev1">&gt;  Node   3 communication/computation time:    508.34 /    485.53 seconds.
</span><br>
<span class="quotelev1">&gt;  Node   4 communication/computation time:    349.94 /    643.81 seconds.
</span><br>
<span class="quotelev1">&gt;  Node   5 communication/computation time:    349.07 /    627.47 seconds.
</span><br>
<span class="quotelev1">&gt;  Computation time:   1251.00 seconds.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The program is 32 bit software, but it doesn't make any difference
</span><br>
<span class="quotelev1">&gt; whether the kernel is 64 or 32 bit. Also the OpenMPI version 1.4.1 was
</span><br>
<span class="quotelev1">&gt; tested, cut communication times by half (which still is too high), but
</span><br>
<span class="quotelev1">&gt; improvement decreased with increasing kernel version number.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The communication time is meant to be the time the master process
</span><br>
<span class="quotelev1">&gt; distributes the data portions for calculation and collecting the results
</span><br>
<span class="quotelev1">&gt; from the slave processes. The value also contains times a slave has to
</span><br>
<span class="quotelev1">&gt; wait to communicate with the master as he is occupied. This explains the
</span><br>
<span class="quotelev1">&gt; extended communication time of node #3 as the calculation time is
</span><br>
<span class="quotelev1">&gt; reduced (based on the nature of the data)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The command to start the calculation:
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 -host cluster-17 invert-master -b -s -p inv_grav.inp : -np
</span><br>
<span class="quotelev1">&gt; 4 -host cluster-18,cluster-19
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Using top (with 'f' and 'j' showing P row) we could track which process
</span><br>
<span class="quotelev1">&gt; runs on which core. We found processes stayed on its initial core in
</span><br>
<span class="quotelev1">&gt; kernel 2.6.23, but started to flip around with 2.6.24. Using the
</span><br>
<span class="quotelev1">&gt; --bind-to-core option in openmpi 1.4.1 kept the processes on its cores
</span><br>
<span class="quotelev1">&gt; again, but that didn't influence the overall outcome, didn't fix the issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We found top showing ~25% CPU wait time, and processes showing 'D' ,
</span><br>
<span class="quotelev1">&gt; also on slave only nodes. According to our programmer communications are
</span><br>
<span class="quotelev1">&gt; only between the master process and its slaves, but not among slaves. On
</span><br>
<span class="quotelev1">&gt; kernel 2.6.23 and lower CPU usage is 100% on user, no wait or system
</span><br>
<span class="quotelev1">&gt; percentage.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Example from top:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cpu(s): 75.3%us,  0.6%sy,  0.0%ni,  0.0%id, 23.1%wa,  0.7%hi,  0.3%si,
</span><br>
<span class="quotelev1">&gt; 0.0%st
</span><br>
<span class="quotelev1">&gt; Mem:   8181236k total,   131224k used,  8050012k free,        0k buffers
</span><br>
<span class="quotelev1">&gt; Swap:        0k total,        0k used,        0k free,    49868k cached
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   PID USER      PR  NI  VIRT  RES  SHR S %CPU %MEM    TIME+  P COMMAND
</span><br>
<span class="quotelev1">&gt;  3386 oli       20   0 90512  20m 3988 R   74  0.3  12:31.80 0 invert-
</span><br>
<span class="quotelev1">&gt;  3387 oli       20   0 85072  15m 3780 D   67  0.2  11:59.30 1 invert-
</span><br>
<span class="quotelev1">&gt;  3388 oli       20   0 85064  14m 3588 D   77  0.2  12:56.90 2 invert-
</span><br>
<span class="quotelev1">&gt;  3389 oli       20   0 84936  14m 3436 R   85  0.2  13:28.30 3 invert-
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Some system information that might be helpful:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nodes Hardware:
</span><br>
<span class="quotelev1">&gt; 1. &quot;older&quot;: Intel Core2 Duo, (2x1)GB RAM
</span><br>
<span class="quotelev1">&gt; 2. &quot;newer&quot;: Intel(R) Core(TM) i5 CPU, Mainboard ASUS RS100-E6, (4x2)GB RAM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Debian stable (lenny) distribution with
</span><br>
<span class="quotelev1">&gt; ii  libc6                             2.7-18lenny2
</span><br>
<span class="quotelev1">&gt; ii  libopenmpi1                       1.2.7~rc2-2
</span><br>
<span class="quotelev1">&gt; ii  openmpi-bin                       1.2.7~rc2-2
</span><br>
<span class="quotelev1">&gt; ii  openmpi-common                    1.2.7~rc2-2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nodes are booting diskless with nfs-root and a kernel with all drivers
</span><br>
<span class="quotelev1">&gt; needed compiled in.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Information on the program using openmpi and tools used to compile it:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --version:
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.2.7rc2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; libopenmpi-dev 1.2.7~rc2-2
</span><br>
<span class="quotelev1">&gt; depends on:
</span><br>
<span class="quotelev1">&gt;  libc6 (2.7-18lenny2)
</span><br>
<span class="quotelev1">&gt;  libopenmpi1 (1.2.7~rc2-2)
</span><br>
<span class="quotelev1">&gt;  openmpi-common (1.2.7~rc2-2)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Compilation command:
</span><br>
<span class="quotelev1">&gt; mpif90
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FORTRAN compiler (FC):
</span><br>
<span class="quotelev1">&gt; gfortran --version:
</span><br>
<span class="quotelev1">&gt; GNU Fortran (Debian 4.3.2-1.1) 4.3.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Called OpenMPI-functions (FORTRAN Bindings):
</span><br>
<span class="quotelev1">&gt; mpi_comm-rank
</span><br>
<span class="quotelev1">&gt; mpi_comm_size
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpi_bcast
</span><br>
<span class="quotelev1">&gt; mpi_reduce
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpi_isend
</span><br>
<span class="quotelev1">&gt; mpi_wait
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpi_send
</span><br>
<span class="quotelev1">&gt; mpi_probe
</span><br>
<span class="quotelev1">&gt; mpi_recv
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Wtime
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Additionally linked libncurses library:
</span><br>
<span class="quotelev1">&gt; libncurses5-dev (5.7+20081213-1)
</span><br>
<span class="quotelev1">&gt; On remote nodes no calls are ever made to this library. On local nodes
</span><br>
<span class="quotelev1">&gt; such calls  (coded in C) are only optionally, but usually they are
</span><br>
<span class="quotelev1">&gt; skipped too (i.e. even no initscr() is called).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A signal handler is integrated (coded in C) that reacts specifically on
</span><br>
<span class="quotelev1">&gt; SIGTERM and SIGUSR1 signals.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you need more information (e.g. kernel config etc.) please ask.
</span><br>
<span class="quotelev1">&gt; I hope you can provide some ideas to test and resolve the issue.
</span><br>
<span class="quotelev1">&gt; Thanks anyways.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Oli
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; This message has been scanned for viruses and
</span><br>
<span class="quotelev1">&gt; dangerous content by MailScanner, and is
</span><br>
<span class="quotelev1">&gt; believed to be clean.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12498.php">Jeff Squyres: "Re: [OMPI users] strange problem with OpenMPI + rankfile + Intelcompiler 11.0.074 + centos/fedora-12"</a>
<li><strong>Previous message:</strong> <a href="12496.php">Jeff Squyres: "Re: [OMPI users] OPEN_MPI macro for mpif.h?"</a>
<li><strong>In reply to:</strong> <a href="12474.php">openmpi_at_[hidden]: "[OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12499.php">Oliver Geisler: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="12499.php">Oliver Geisler: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
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
