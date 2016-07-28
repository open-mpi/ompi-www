<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan  8 17:56:18 2007" -->
<!-- isoreceived="20070108225618" -->
<!-- sent="Mon, 8 Jan 2007 16:56:11 -0600" -->
<!-- isosent="20070108225611" -->
<!-- name="Grobe, Gary L. \(JSC-EV\)[ESCG]" -->
<!-- email="gary.l.grobe_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Ompi failing on mx only" -->
<!-- id="559847D38F12F742B0EE27727596F42901AB8EC3_at_NDJSEVS14.ndc.nasa.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="06FEC5A0-A74B-4DDF-8531-8489187CAEAC_at_cisco.com" -->
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
<strong>From:</strong> Grobe, Gary L. \(JSC-EV\)[ESCG] (<em>gary.l.grobe_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-08 17:56:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2445.php">George Bosilca: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Previous message:</strong> <a href="2443.php">Tom Lund: "Re: [OMPI users] external32 i/o not implemented?"</a>
<li><strong>In reply to:</strong> <a href="2440.php">Jeff Squyres: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2445.php">George Bosilca: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Reply:</strong> <a href="2445.php">George Bosilca: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev3">&gt; &gt;&gt; PS: Is there any way you can attach to the processes with gdb ? I 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; would like to see the backtrace as showed by gdb in order 
</span><br>
<span class="quotelev1">&gt; to be able 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to figure out what's wrong there.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<p>I found out that all processes on the 2nd node crash so I just put a 30
<br>
second wait before MPI_Init in order to attach gdb and go from there.
<br>
<p>The code in cpi starts off as follows (in order to show where the
<br>
SIGTERM below is coming from).
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;numprocs);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;myid);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Get_processor_name(processor_name,&amp;namelen);
<br>
<p><pre>
---
Attaching to process 11856
Reading symbols from /home/ggrobe/Projects/ompi/cpi/cpi...done.
Using host libthread_db library &quot;/lib/libthread_db.so.1&quot;.
Reading symbols from
/usr/local/openmpi-1.2b3r13030/lib/libmpi.so.0...done.
Loaded symbols for /usr/local/openmpi-1.2b3r13030/lib/libmpi.so.0
Reading symbols from
/usr/local/openmpi-1.2b3r13030/lib/libopen-rte.so.0...done.
Loaded symbols for /usr/local/openmpi-1.2b3r13030/lib/libopen-rte.so.0
Reading symbols from
/usr/local/openmpi-1.2b3r13030/lib/libopen-pal.so.0...done.
Loaded symbols for /usr/local/openmpi-1.2b3r13030/lib/libopen-pal.so.0
Reading symbols from /lib64/libdl.so.2...done.
Loaded symbols for /lib/libdl.so.2
Reading symbols from /lib64/libnsl.so.1...done.
Loaded symbols for /lib/libnsl.so.1
Reading symbols from /lib64/libutil.so.1...done.
Loaded symbols for /lib/libutil.so.1
Reading symbols from /lib64/libm.so.6...done.
Loaded symbols for /lib/libm.so.6
Reading symbols from /lib64/libpthread.so.0...done.
[Thread debugging using libthread_db enabled]
[New Thread 46974166086512 (LWP 11856)]
Loaded symbols for /lib/libpthread.so.0
Reading symbols from /lib64/libc.so.6...done.
Loaded symbols for /lib/libc.so.6
Reading symbols from /lib64/ld-linux-x86-64.so.2...done.
Loaded symbols for /lib64/ld-linux-x86-64.so.2
0x00002ab90661e880 in nanosleep () from /lib/libc.so.6
(gdb) break MPI_Init
Breakpoint 1 at 0x2ab905c0c880
(gdb) break MPI_Comm_size
Breakpoint 2 at 0x2ab905c01af0
(gdb) continue
Continuing.
[Switching to Thread 46974166086512 (LWP 11856)]
Breakpoint 1, 0x00002ab905c0c880 in PMPI_Init ()
   from /usr/local/openmpi-1.2b3r13030/lib/libmpi.so.0
(gdb) n
Single stepping until exit from function PMPI_Init, 
which has no line number information.
[New Thread 1082132816 (LWP 11862)]
Program received signal SIGTERM, Terminated.
0x00002ab906643f47 in ioctl () from /lib/libc.so.6
(gdb) backtrace
#0  0x00002ab906643f47 in ioctl () from /lib/libc.so.6
Cannot access memory at address 0x7fffa50102f8
---
Does this help in anyway?
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2445.php">George Bosilca: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Previous message:</strong> <a href="2443.php">Tom Lund: "Re: [OMPI users] external32 i/o not implemented?"</a>
<li><strong>In reply to:</strong> <a href="2440.php">Jeff Squyres: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2445.php">George Bosilca: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Reply:</strong> <a href="2445.php">George Bosilca: "Re: [OMPI users] Ompi failing on mx only"</a>
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
