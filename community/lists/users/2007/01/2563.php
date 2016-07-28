<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan 30 03:40:55 2007" -->
<!-- isoreceived="20070130084055" -->
<!-- sent="Tue, 30 Jan 2007 09:40:38 +0100" -->
<!-- isosent="20070130084038" -->
<!-- name="Jeremy Buisson" -->
<!-- email="jbuisson_at_[hidden]" -->
<!-- subject="[OMPI users] mutex deadlock in btl tcp" -->
<!-- id="45BF0486.4030509_at_irisa.fr" -->
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
<strong>From:</strong> Jeremy Buisson (<em>jbuisson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-30 03:40:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2564.php">Adrian Knoth: "Re: [OMPI users] mpirun related"</a>
<li><strong>Previous message:</strong> <a href="2562.php">Chevchenkovic Chevchenkovic: "[OMPI users] mpirun related"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2570.php">George Bosilca: "Re: [OMPI users] mutex deadlock in btl tcp"</a>
<li><strong>Reply:</strong> <a href="2570.php">George Bosilca: "Re: [OMPI users] mutex deadlock in btl tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open MPI users list,
<br>
<p>From time to time, I experience a mutex deadlock in Open-MPI 1.1.2. The stack
<br>
trace is available at the end of the mail. The deadlock seems to be caused by
<br>
lines 118 &amp; 119 of the ompi/mca/btl/tcp/btl_tcp.c file, in function
<br>
mca_btl_tcp_add_procs:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_RELEASE(tcp_endpoint);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_UNLOCK(&amp;tcp_proc-&gt;proc_lock);
<br>
(of course, I did not check whether line numbers have changed since 1.1.2.)
<br>
Indeed, releasing tcp_endpoint causes a call to mca_btl_tcp_proc_remove that
<br>
attempts to acquire the mutex tcp_proc-&gt;proc_lock, which is already held by the
<br>
thread (OBJ_THREAD_LOCK(&amp;tcp_proc-&gt;proc_lock) at line 103 of the
<br>
ompi/mca/btl/tcp/btl_tcp.c file). Switching the two lines above (ie releasing
<br>
the mutex before destructing tcp_endpoint) seems to be sufficient to fix the
<br>
deadlock. Maybe should the changes done in the mca_btl_tcp_proc_insert function
<br>
be reverted rather than releasing the mutex before tcp_endpoint?
<br>
As far as I looked, the problem seems to still appear in the trunk revision 13359.
<br>
<p>Second point. Is there any reason why MPI_Comm_spawn is restricted to execute
<br>
the new process(es) only on hosts listed in either the --host option or in the
<br>
hostfile? Or did I miss something?
<br>
<p>Best regards,
<br>
Jeremy
<br>
<p>------------------------------------------------------------------------------
<br>
stack trace as dumped by open-mpi (gdb version follows):
<br>
opal_mutex_lock(): Resource deadlock avoided
<br>
Signal:6 info.si_errno:0(Success) si_code:-6()
<br>
[0] func:/home1/jbuisson/soft/openmpi-1.1.2/lib/libopal.so.0 [0x8addeb]
<br>
[1] func:/lib/tls/libpthread.so.0 [0x176e40]
<br>
[2] func:/lib/tls/libc.so.6(abort+0x1d5) [0xa294e5]
<br>
[3] func:/home1/jbuisson/soft/openmpi-1.1.2/lib/openmpi/mca_btl_tcp.so
<br>
[0x65f8a3]
<br>
[4]
<br>
func:/home1/jbuisson/soft/openmpi-1.1.2/lib/openmpi/mca_btl_tcp.so(mca_btl_tcp_proc_remove+0x2a)
<br>
[0x65fff0]
<br>
[5] func:/home1/jbuisson/soft/openmpi-1.1.2/lib/openmpi/mca_btl_tcp.so
<br>
[0x65cb24]
<br>
[6] func:/home1/jbuisson/soft/openmpi-1.1.2/lib/openmpi/mca_btl_tcp.so
<br>
[0x659465]
<br>
[7]
<br>
func:/home1/jbuisson/soft/openmpi-1.1.2/lib/openmpi/mca_btl_tcp.so(mca_btl_tcp_add_procs+0x10f)
<br>
[0x65927b]
<br>
[8]
<br>
func:/home1/jbuisson/soft/openmpi-1.1.2/lib/openmpi/mca_bml_r2.so(mca_bml_r2_add_procs+0x1bb)
<br>
[0x628023]
<br>
[9]
<br>
func:/home1/jbuisson/soft/openmpi-1.1.2/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_add_procs+0xd6)
<br>
[0x61650b]
<br>
[10]
<br>
func:/home1/jbuisson/soft/openmpi-1.1.2/lib/libmpi.so.0(ompi_comm_get_rport+0x1f8)
<br>
[0xb82303]
<br>
[11]
<br>
func:/home1/jbuisson/soft/openmpi-1.1.2/lib/libmpi.so.0(ompi_comm_connect_accept+0xbb)
<br>
[0xb81b43]
<br>
[12]
<br>
func:/home1/jbuisson/soft/openmpi-1.1.2/lib/libmpi.so.0(PMPI_Comm_spawn+0x3de)
<br>
[0xbb671a]
<br>
[13]
<br>
func:/home1/jbuisson/target/bin/mpi-spawner(__gxx_personality_v0+0x3d2)
<br>
[0x804bb8e]
<br>
[14] func:/home1/jbuisson/target/bin/mpi-spawner [0x804bdff]
<br>
[15] func:/home1/jbuisson/target/bin/mpi-spawner [0x804bfd4]
<br>
[16] func:/lib/tls/libc.so.6(__libc_start_main+0xda) [0xa1578a]
<br>
[17]
<br>
func:/home1/jbuisson/target/bin/mpi-spawner(__gxx_personality_v0+0x75)
<br>
[0x804b831]
<br>
*** End of error message ***
<br>
<p><p>Same stack, dumped by gdb:
<br>
#0  0x00176357 in __pause_nocancel () from /lib/tls/libpthread.so.0
<br>
#1  0x008ade9b in opal_show_stackframe (signo=6, info=0xbfff9290,
<br>
p=0xbfff9310) at stacktrace.c:306
<br>
#2  &lt;signal handler called&gt;
<br>
#3  0x00a27cdf in raise () from /lib/tls/libc.so.6
<br>
#4  0x00a294e5 in abort () from /lib/tls/libc.so.6
<br>
#5  0x0065f8a3 in opal_mutex_lock (m=0x8ff8250) at
<br>
../../../../opal/threads/mutex_unix.h:104
<br>
#6  0x0065fff0 in mca_btl_tcp_proc_remove (btl_proc=0x8ff8220,
<br>
btl_endpoint=0x900eba0) at btl_tcp_proc.c:296
<br>
#7  0x0065cb24 in mca_btl_tcp_endpoint_destruct (endpoint=0x900eba0) at
<br>
btl_tcp_endpoint.c:99
<br>
#8  0x00659465 in opal_obj_run_destructors (object=0x900eba0) at
<br>
../../../../opal/class/opal_object.h:405
<br>
#9  0x0065927b in mca_btl_tcp_add_procs (btl=0x8e57c30, nprocs=1,
<br>
ompi_procs=0x8ff7ac8, peers=0x8ff7ad8, reachable=0xbfff98e4) at
<br>
btl_tcp.c:118
<br>
#10 0x00628023 in mca_bml_r2_add_procs (nprocs=1, procs=0x8ff7ac8,
<br>
bml_endpoints=0x8ff60b8, reachable=0xbfff98e4) at bml_r2.c:231
<br>
#11 0x0061650b in mca_pml_ob1_add_procs (procs=0xbfff9930, nprocs=1) at
<br>
pml_ob1.c:133
<br>
#12 0x00b82303 in ompi_comm_get_rport (port=0x0, send_first=0,
<br>
proc=0x8e51c70, tag=2000) at communicator/comm_dyn.c:305
<br>
#13 0x00b81b43 in ompi_comm_connect_accept (comm=0x8ff8ce0, root=0,
<br>
port=0x0, send_first=0, newcomm=0xbfff9a38, tag=2000) at
<br>
communicator/comm_dyn.c:85
<br>
#14 0x00bb671a in PMPI_Comm_spawn (command=0x8ff88f0
<br>
&quot;/home1/jbuisson/target/bin/sample-npb-ft-pp&quot;, argv=0xbfff9b40,
<br>
maxprocs=1, info=0x8ff73e0, root=0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;comm=0x8ff8ce0, intercomm=0xbfff9aa4, array_of_errcodes=0x0) at
<br>
pcomm_spawn.c:110
<br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2563/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2564.php">Adrian Knoth: "Re: [OMPI users] mpirun related"</a>
<li><strong>Previous message:</strong> <a href="2562.php">Chevchenkovic Chevchenkovic: "[OMPI users] mpirun related"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2570.php">George Bosilca: "Re: [OMPI users] mutex deadlock in btl tcp"</a>
<li><strong>Reply:</strong> <a href="2570.php">George Bosilca: "Re: [OMPI users] mutex deadlock in btl tcp"</a>
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
