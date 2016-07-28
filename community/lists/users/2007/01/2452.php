<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan  9 13:27:13 2007" -->
<!-- isoreceived="20070109182713" -->
<!-- sent="Tue, 9 Jan 2007 12:27:03 -0600" -->
<!-- isosent="20070109182703" -->
<!-- name="Grobe, Gary L. \(JSC-EV\)[ESCG]" -->
<!-- email="gary.l.grobe_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Ompi failing on mx only" -->
<!-- id="559847D38F12F742B0EE27727596F42901AB917E_at_NDJSEVS14.ndc.nasa.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="Pine.OSX.4.64.0701081906570.21200_at_laptop37.cs.utk.edu" -->
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
<strong>Date:</strong> 2007-01-09 13:27:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2453.php">Robert Latham: "Re: [OMPI users] external32 i/o not implemented?"</a>
<li><strong>Previous message:</strong> <a href="2451.php">Ralph H Castain: "Re: [OMPI users] openmpi / mpirun problem on aix: poll failed with errno=25, opal_event_loop: ompi_evesel-&gt;dispatch() failed."</a>
<li><strong>In reply to:</strong> <a href="2445.php">George Bosilca: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2446.php">Reese Faucette: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; I need it's the backtrace on the process which generate the 
</span><br>
<span class="quotelev1">&gt; segfault. Second, in order to understand the backtrace, it's 
</span><br>
<span class="quotelev1">&gt; better to have run debug version of Open MPI. Without the 
</span><br>
<span class="quotelev1">&gt; debug version we only see the address where the fault occur 
</span><br>
<span class="quotelev1">&gt; without having access to the line number ...
</span><br>
<p>How about this, this is the section that I was stepping through in order
<br>
to get the first error I usually run into ... &quot;mx_connect fail for
<br>
node-1:0 with key aaaaffff (error Endpoint closed or not connectable!)&quot;
<br>
<p>// gdb output
<br>
<p>Breakpoint 1, 0x00002ac856bd92e0 in opal_progress ()
<br>
&nbsp;&nbsp;&nbsp;from /usr/local/openmpi-1.2b3r13030/lib/libopen-pal.so.0
<br>
(gdb) s
<br>
Single stepping until exit from function opal_progress, 
<br>
which has no line number information.
<br>
0x00002ac857361540 in sched_yield () from /lib/libc.so.6
<br>
(gdb) s
<br>
Single stepping until exit from function sched_yield, 
<br>
which has no line number information.
<br>
opal_condition_wait (c=0x5098e0, m=0x5098a0) at condition.h:80
<br>
80              while (c-&gt;c_signaled == 0) {
<br>
(gdb) s
<br>
81                  opal_progress();
<br>
(gdb) s
<br>
<p>Breakpoint 1, 0x00002ac856bd92e0 in opal_progress ()
<br>
&nbsp;&nbsp;&nbsp;from /usr/local/openmpi-1.2b3r13030/lib/libopen-pal.so.0
<br>
(gdb) s
<br>
Single stepping until exit from function opal_progress, 
<br>
which has no line number information.
<br>
0x00002ac857361540 in sched_yield () from /lib/libc.so.6
<br>
(gdb) backtrace
<br>
#0  0x00002ac857361540 in sched_yield () from /lib/libc.so.6
<br>
#1  0x0000000000402f60 in opal_condition_wait (c=0x5098e0, m=0x5098a0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at condition.h:81
<br>
#2  0x0000000000402b3c in orterun (argc=17, argv=0x7fff54151088)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at orterun.c:427
<br>
#3  0x0000000000402713 in main (argc=17, argv=0x7fff54151088) at
<br>
main.c:13
<br>
<p>--- This is the mpirun output as I was stepping through it. At the end
<br>
of this is the error that the backtrace above shows.
<br>
<p>[node-2:11909] top: openmpi-sessions-ggrobe_at_node-2_0
<br>
[node-2:11909] tmp: /tmp
<br>
[node-1:10719] procdir:
<br>
/tmp/openmpi-sessions-ggrobe_at_node-1_0/default-universe-17414/1/0
<br>
[node-1:10719] jobdir:
<br>
/tmp/openmpi-sessions-ggrobe_at_node-1_0/default-universe-17414/1
<br>
[node-1:10719] unidir:
<br>
/tmp/openmpi-sessions-ggrobe_at_node-1_0/default-universe-17414
<br>
[node-1:10719] top: openmpi-sessions-ggrobe_at_node-1_0
<br>
[node-1:10719] tmp: /tmp
<br>
[juggernaut:17414] spawn: in job_state_callback(jobid = 1, state = 0x4)
<br>
[juggernaut:17414] Info: Setting up debugger process table for
<br>
applications
<br>
&nbsp;&nbsp;MPIR_being_debugged = 0
<br>
&nbsp;&nbsp;MPIR_debug_gate = 0
<br>
&nbsp;&nbsp;MPIR_debug_state = 1
<br>
&nbsp;&nbsp;MPIR_acquired_pre_main = 0
<br>
&nbsp;&nbsp;MPIR_i_am_starter = 0
<br>
&nbsp;&nbsp;MPIR_proctable_size = 6
<br>
&nbsp;&nbsp;MPIR_proctable:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (0, node-1,
<br>
/home/ggrobe/Projects/ompi/cpi/./cpi, 10719)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (1, node-1,
<br>
/home/ggrobe/Projects/ompi/cpi/./cpi, 10720)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (2, node-1,
<br>
/home/ggrobe/Projects/ompi/cpi/./cpi, 10721)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (3, node-1,
<br>
/home/ggrobe/Projects/ompi/cpi/./cpi, 10722)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (4, node-2,
<br>
/home/ggrobe/Projects/ompi/cpi/./cpi, 11908)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (5, node-2,
<br>
/home/ggrobe/Projects/ompi/cpi/./cpi, 11909)
<br>
[node-1:10718] sess_dir_finalize: proc session dir not empty - leaving
<br>
[node-1:10718] sess_dir_finalize: proc session dir not empty - leaving
<br>
[node-1:10721] procdir:
<br>
/tmp/openmpi-sessions-ggrobe_at_node-1_0/default-universe-17414/1/2
<br>
[node-1:10721] jobdir:
<br>
/tmp/openmpi-sessions-ggrobe_at_node-1_0/default-universe-17414/1
<br>
[node-1:10721] unidir:
<br>
/tmp/openmpi-sessions-ggrobe_at_node-1_0/default-universe-17414
<br>
[node-1:10721] top: openmpi-sessions-ggrobe_at_node-1_0
<br>
[node-1:10721] tmp: /tmp
<br>
[node-1:10720] mx_connect fail for node-1:0 with key aaaaffff (error
<br>
Endpoint closed or not connectable!)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2453.php">Robert Latham: "Re: [OMPI users] external32 i/o not implemented?"</a>
<li><strong>Previous message:</strong> <a href="2451.php">Ralph H Castain: "Re: [OMPI users] openmpi / mpirun problem on aix: poll failed with errno=25, opal_event_loop: ompi_evesel-&gt;dispatch() failed."</a>
<li><strong>In reply to:</strong> <a href="2445.php">George Bosilca: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2446.php">Reese Faucette: "Re: [OMPI users] Ompi failing on mx only"</a>
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
