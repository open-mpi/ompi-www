<?
$subject_val = "[OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 30 13:39:56 2010" -->
<!-- isoreceived="20100330173956" -->
<!-- sent="Tue, 30 Mar 2010 12:26:52 -0500" -->
<!-- isosent="20100330172652" -->
<!-- name="openmpi_at_[hidden]" -->
<!-- email="openmpi_at_[hidden]" -->
<!-- subject="[OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times" -->
<!-- id="4BB2345C.1030208_at_docawk.org" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times<br>
<strong>From:</strong> <a href="mailto:openmpi_at_[hidden]?Subject=Re:%20[OMPI%20users]%20kernel%202.6.23%20vs%202.6.24%20-%20communication/wait%20times"><em>openmpi_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-03-30 13:26:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12475.php">Robert Collyer: "Re: [OMPI users] Problem in remote nodes"</a>
<li><strong>Previous message:</strong> <a href="12473.php">Ralph Castain: "Re: [OMPI users] Problem in remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12497.php">Jeff Squyres: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="12497.php">Jeff Squyres: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12513.php">Oliver Geisler: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12732.php">Oliver Geisler: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello List,
<br>
<p>I hope you can help us out on that one, as we are trying to figure out
<br>
since weeks.
<br>
<p>The situation: We have a program being capable of slitting to several
<br>
processes to be shared on nodes within a cluster network using openmpi.
<br>
We were running that system on &quot;older&quot; cluster hardware (Intel Core2 Duo
<br>
based, 2GB RAM) using an &quot;older&quot; kernel (2.6.18.6). All nodes are
<br>
diskless network booting. Recently we upgraded the hardware (Intel i5,
<br>
8GB RAM) which also required an upgrade to a recent kernel version
<br>
(2.6.26+).
<br>
<p>Here is the problem: We experience overall performance loss on the new
<br>
hardware and think, we can break it down to a communication issue
<br>
inbetween the processes.
<br>
<p>Also, we found out, the issue araises in the transition from kernel
<br>
2.6.23 to 2.6.24 (tested on the Core2 Duo system).
<br>
<p>Here is an output from our programm:
<br>
<p>2.6.23.17 (64bit), MPI 1.2.7
<br>
5 Iterationen (Core2 Duo) 6 CPU:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;93.33 seconds per iteration.
<br>
&nbsp;Node   0 communication/computation time:      6.83 /    647.64 seconds.
<br>
&nbsp;Node   1 communication/computation time:     10.09 /    644.36 seconds.
<br>
&nbsp;Node   2 communication/computation time:      7.27 /    645.03 seconds.
<br>
&nbsp;Node   3 communication/computation time:    165.02 /    485.52 seconds.
<br>
&nbsp;Node   4 communication/computation time:      6.50 /    643.82 seconds.
<br>
&nbsp;Node   5 communication/computation time:      7.80 /    627.63 seconds.
<br>
&nbsp;Computation time:    897.00 seconds.
<br>
<p>2.6.24.7 (64bit) .. re-evaluated, MPI 1.2.7
<br>
5 Iterationen (Core2 Duo) 6 CPU:
<br>
&nbsp;&nbsp;&nbsp;131.33 seconds per iteration.
<br>
&nbsp;Node   0 communication/computation time:    364.15 /    645.24 seconds.
<br>
&nbsp;Node   1 communication/computation time:    362.83 /    645.26 seconds.
<br>
&nbsp;Node   2 communication/computation time:    349.39 /    645.07 seconds.
<br>
&nbsp;Node   3 communication/computation time:    508.34 /    485.53 seconds.
<br>
&nbsp;Node   4 communication/computation time:    349.94 /    643.81 seconds.
<br>
&nbsp;Node   5 communication/computation time:    349.07 /    627.47 seconds.
<br>
&nbsp;Computation time:   1251.00 seconds.
<br>
<p>The program is 32 bit software, but it doesn't make any difference
<br>
whether the kernel is 64 or 32 bit. Also the OpenMPI version 1.4.1 was
<br>
tested, cut communication times by half (which still is too high), but
<br>
improvement decreased with increasing kernel version number.
<br>
<p>The communication time is meant to be the time the master process
<br>
distributes the data portions for calculation and collecting the results
<br>
from the slave processes. The value also contains times a slave has to
<br>
wait to communicate with the master as he is occupied. This explains the
<br>
extended communication time of node #3 as the calculation time is
<br>
reduced (based on the nature of the data)
<br>
<p>The command to start the calculation:
<br>
mpirun -np 2 -host cluster-17 invert-master -b -s -p inv_grav.inp : -np
<br>
4 -host cluster-18,cluster-19
<br>
<p>Using top (with 'f' and 'j' showing P row) we could track which process
<br>
runs on which core. We found processes stayed on its initial core in
<br>
kernel 2.6.23, but started to flip around with 2.6.24. Using the
<br>
--bind-to-core option in openmpi 1.4.1 kept the processes on its cores
<br>
again, but that didn't influence the overall outcome, didn't fix the issue.
<br>
<p>We found top showing ~25% CPU wait time, and processes showing 'D' ,
<br>
also on slave only nodes. According to our programmer communications are
<br>
only between the master process and its slaves, but not among slaves. On
<br>
kernel 2.6.23 and lower CPU usage is 100% on user, no wait or system
<br>
percentage.
<br>
<p>Example from top:
<br>
<p>Cpu(s): 75.3%us,  0.6%sy,  0.0%ni,  0.0%id, 23.1%wa,  0.7%hi,  0.3%si,
<br>
0.0%st
<br>
Mem:   8181236k total,   131224k used,  8050012k free,        0k buffers
<br>
Swap:        0k total,        0k used,        0k free,    49868k cached
<br>
<p>&nbsp;&nbsp;PID USER      PR  NI  VIRT  RES  SHR S %CPU %MEM    TIME+  P COMMAND
<br>
&nbsp;3386 oli       20   0 90512  20m 3988 R   74  0.3  12:31.80 0 invert-
<br>
&nbsp;3387 oli       20   0 85072  15m 3780 D   67  0.2  11:59.30 1 invert-
<br>
&nbsp;3388 oli       20   0 85064  14m 3588 D   77  0.2  12:56.90 2 invert-
<br>
&nbsp;3389 oli       20   0 84936  14m 3436 R   85  0.2  13:28.30 3 invert-
<br>
<p><p>Some system information that might be helpful:
<br>
<p>Nodes Hardware:
<br>
1. &quot;older&quot;: Intel Core2 Duo, (2x1)GB RAM
<br>
2. &quot;newer&quot;: Intel(R) Core(TM) i5 CPU, Mainboard ASUS RS100-E6, (4x2)GB RAM
<br>
<p>Debian stable (lenny) distribution with
<br>
ii  libc6                             2.7-18lenny2
<br>
ii  libopenmpi1                       1.2.7~rc2-2
<br>
ii  openmpi-bin                       1.2.7~rc2-2
<br>
ii  openmpi-common                    1.2.7~rc2-2
<br>
<p>Nodes are booting diskless with nfs-root and a kernel with all drivers
<br>
needed compiled in.
<br>
<p>Information on the program using openmpi and tools used to compile it:
<br>
<p>mpirun --version:
<br>
mpirun (Open MPI) 1.2.7rc2
<br>
<p>libopenmpi-dev 1.2.7~rc2-2
<br>
depends on:
<br>
&nbsp;libc6 (2.7-18lenny2)
<br>
&nbsp;libopenmpi1 (1.2.7~rc2-2)
<br>
&nbsp;openmpi-common (1.2.7~rc2-2)
<br>
<p><p>Compilation command:
<br>
mpif90
<br>
<p><p>FORTRAN compiler (FC):
<br>
gfortran --version:
<br>
GNU Fortran (Debian 4.3.2-1.1) 4.3.2
<br>
<p><p>Called OpenMPI-functions (FORTRAN Bindings):
<br>
mpi_comm-rank
<br>
mpi_comm_size
<br>
<p>mpi_bcast
<br>
mpi_reduce
<br>
<p>mpi_isend
<br>
mpi_wait
<br>
<p>mpi_send
<br>
mpi_probe
<br>
mpi_recv
<br>
<p>MPI_Wtime
<br>
<p><p>Additionally linked libncurses library:
<br>
libncurses5-dev (5.7+20081213-1)
<br>
On remote nodes no calls are ever made to this library. On local nodes
<br>
such calls  (coded in C) are only optionally, but usually they are
<br>
skipped too (i.e. even no initscr() is called).
<br>
<p><p>A signal handler is integrated (coded in C) that reacts specifically on
<br>
SIGTERM and SIGUSR1 signals.
<br>
<p><p>If you need more information (e.g. kernel config etc.) please ask.
<br>
I hope you can provide some ideas to test and resolve the issue.
<br>
Thanks anyways.
<br>
<p>Oli
<br>
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
<li><strong>Next message:</strong> <a href="12475.php">Robert Collyer: "Re: [OMPI users] Problem in remote nodes"</a>
<li><strong>Previous message:</strong> <a href="12473.php">Ralph Castain: "Re: [OMPI users] Problem in remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12497.php">Jeff Squyres: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="12497.php">Jeff Squyres: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12513.php">Oliver Geisler: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12732.php">Oliver Geisler: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
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
