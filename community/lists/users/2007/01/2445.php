<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan  8 19:10:42 2007" -->
<!-- isoreceived="20070109001042" -->
<!-- sent="Mon, 8 Jan 2007 19:10:18 -0500 (EST)" -->
<!-- isosent="20070109001018" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Ompi failing on mx only" -->
<!-- id="Pine.OSX.4.64.0701081906570.21200_at_laptop37.cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="559847D38F12F742B0EE27727596F42901AB8EC3_at_NDJSEVS14.ndc.nasa.gov" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-08 19:10:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2446.php">Reese Faucette: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Previous message:</strong> <a href="2444.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>In reply to:</strong> <a href="2444.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2452.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Reply:</strong> <a href="2452.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not really. This is the backtrace of the process that get killed because 
<br>
mpirun detect that the other one died ... What I need it's the backtrace 
<br>
on the process which generate the segfault. Second, in order to understand 
<br>
the backtrace, it's better to have run debug version of Open MPI. Without 
<br>
the debug version we only see the address where the fault occur without 
<br>
having access to the line number ...
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mon, 8 Jan 2007, Grobe, Gary L. \(JSC-EV\)[ESCG] wrote:
<br>
<p><span class="quotelev4">&gt;&gt;&gt;&gt; PS: Is there any way you can attach to the processes with gdb ? I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; would like to see the backtrace as showed by gdb in order
</span><br>
<span class="quotelev2">&gt;&gt; to be able
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to figure out what's wrong there.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I found out that all processes on the 2nd node crash so I just put a 30
</span><br>
<span class="quotelev1">&gt; second wait before MPI_Init in order to attach gdb and go from there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The code in cpi starts off as follows (in order to show where the
</span><br>
<span class="quotelev1">&gt; SIGTERM below is coming from).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_size(MPI_COMM_WORLD,&amp;numprocs);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_rank(MPI_COMM_WORLD,&amp;myid);
</span><br>
<span class="quotelev1">&gt;    MPI_Get_processor_name(processor_name,&amp;namelen);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Attaching to process 11856
</span><br>
<span class="quotelev1">&gt; Reading symbols from /home/ggrobe/Projects/ompi/cpi/cpi...done.
</span><br>
<span class="quotelev1">&gt; Using host libthread_db library &quot;/lib/libthread_db.so.1&quot;.
</span><br>
<span class="quotelev1">&gt; Reading symbols from
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.2b3r13030/lib/libmpi.so.0...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /usr/local/openmpi-1.2b3r13030/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; Reading symbols from
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.2b3r13030/lib/libopen-rte.so.0...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /usr/local/openmpi-1.2b3r13030/lib/libopen-rte.so.0
</span><br>
<span class="quotelev1">&gt; Reading symbols from
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.2b3r13030/lib/libopen-pal.so.0...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /usr/local/openmpi-1.2b3r13030/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; Reading symbols from /lib64/libdl.so.2...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /lib/libdl.so.2
</span><br>
<span class="quotelev1">&gt; Reading symbols from /lib64/libnsl.so.1...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /lib/libnsl.so.1
</span><br>
<span class="quotelev1">&gt; Reading symbols from /lib64/libutil.so.1...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /lib/libutil.so.1
</span><br>
<span class="quotelev1">&gt; Reading symbols from /lib64/libm.so.6...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /lib/libm.so.6
</span><br>
<span class="quotelev1">&gt; Reading symbols from /lib64/libpthread.so.0...done.
</span><br>
<span class="quotelev1">&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev1">&gt; [New Thread 46974166086512 (LWP 11856)]
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /lib/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; Reading symbols from /lib64/libc.so.6...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt; Reading symbols from /lib64/ld-linux-x86-64.so.2...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /lib64/ld-linux-x86-64.so.2
</span><br>
<span class="quotelev1">&gt; 0x00002ab90661e880 in nanosleep () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt; (gdb) break MPI_Init
</span><br>
<span class="quotelev1">&gt; Breakpoint 1 at 0x2ab905c0c880
</span><br>
<span class="quotelev1">&gt; (gdb) break MPI_Comm_size
</span><br>
<span class="quotelev1">&gt; Breakpoint 2 at 0x2ab905c01af0
</span><br>
<span class="quotelev1">&gt; (gdb) continue
</span><br>
<span class="quotelev1">&gt; Continuing.
</span><br>
<span class="quotelev1">&gt; [Switching to Thread 46974166086512 (LWP 11856)]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Breakpoint 1, 0x00002ab905c0c880 in PMPI_Init ()
</span><br>
<span class="quotelev1">&gt;   from /usr/local/openmpi-1.2b3r13030/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; (gdb) n
</span><br>
<span class="quotelev1">&gt; Single stepping until exit from function PMPI_Init,
</span><br>
<span class="quotelev1">&gt; which has no line number information.
</span><br>
<span class="quotelev1">&gt; [New Thread 1082132816 (LWP 11862)]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Program received signal SIGTERM, Terminated.
</span><br>
<span class="quotelev1">&gt; 0x00002ab906643f47 in ioctl () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt; (gdb) backtrace
</span><br>
<span class="quotelev1">&gt; #0  0x00002ab906643f47 in ioctl () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt; Cannot access memory at address 0x7fffa50102f8
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does this help in anyway?
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
<p>&quot;We must accept finite disappointment, but we must never lose infinite
<br>
hope.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Martin Luther King
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2446.php">Reese Faucette: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Previous message:</strong> <a href="2444.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>In reply to:</strong> <a href="2444.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2452.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Reply:</strong> <a href="2452.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
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
