<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan  2 16:44:59 2007" -->
<!-- isoreceived="20070102214459" -->
<!-- sent="Tue, 2 Jan 2007 15:44:37 -0600" -->
<!-- isosent="20070102214437" -->
<!-- name="Grobe, Gary L. \(JSC-EV\)[ESCG]" -->
<!-- email="gary.l.grobe_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Ompi failing on mx only" -->
<!-- id="559847D38F12F742B0EE27727596F42901A2FA02_at_NDJSEVS14.ndc.nasa.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="05a301c72eaf$e3cdac50$58c31fac_at_bart" -->
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
<strong>Date:</strong> 2007-01-02 16:44:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2424.php">Reese Faucette: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Previous message:</strong> <a href="2422.php">jcolmenares_at_[hidden]: "Re: [OMPI users] orted: command not found"</a>
<li><strong>In reply to:</strong> <a href="2420.php">Reese Faucette: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2424.php">Reese Faucette: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Reply:</strong> <a href="2424.php">Reese Faucette: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Reply:</strong> <a href="2425.php">Brian W. Barrett: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
About the -x, I've been trying it both ways and prefer the latter, and
<br>
results for either are the same. But it's value is correct. I've
<br>
attached the ompi_info from node-1 and node-2. Sorry for not zipping
<br>
them, but they were small and I think I'd have firewall issues.
<br>
&nbsp;
<br>
$ mpirun --prefix /usr/local/openmpi-1.2b2 -x LD_LIBRARY_PATH --hostfile
<br>
./h13-15 -np 6 --mca pml cm ./cpi 
<br>
[node-14:19260] mx_connect fail for node-14:0 with key aaaaffff (error
<br>
Endpoint closed or not connectable!)
<br>
[node-14:19261] mx_connect fail for node-14:0 with key aaaaffff (error
<br>
Endpoint closed or not connectable!)
<br>
...
<br>
&nbsp;
<br>
Is there any info anywhere's on MTL? Anyways, I've run w/ mtl, and
<br>
sometimes it actually worked once. But now I can't reproduce it and it's
<br>
throwing sig 7's, 11's, and 4's depending upon the number of procs I
<br>
give it. But now that you mention mapper, I take it that's what
<br>
SEGV_MAPERR might be referring to. I'm looking into the 
<br>
&nbsp;
<br>
$ mpirun --prefix /usr/local/openmpi-1.2b2 -x
<br>
LD_LIBRARY_PATH=${LD_LIBRARY_PATH} --hostfile ./h1-3 -np 5 --mca mtl
<br>
mx,self ./cpi 
<br>
Process 4 of 5 is on node-2
<br>
Process 0 of 5 is on node-1
<br>
Process 1 of 5 is on node-1
<br>
Process 2 of 5 is on node-1
<br>
Process 3 of 5 is on node-1
<br>
pi is approximately 3.1415926544231225, Error is 0.0000000008333294
<br>
wall clock time = 0.019305
<br>
Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:0x2b88243862be
<br>
mpirun noticed that job rank 0 with PID 0 on node node-1 exited on
<br>
signal 1.
<br>
4 additional processes aborted (not shown)
<br>
<p>Or sometimes I'll get this error, just depending upon the number of
<br>
procs ...
<br>
&nbsp;
<br>
&nbsp;mpirun --prefix /usr/local/openmpi-1.2b2 -x
<br>
LD_LIBRARY_PATH=${LD_LIBRARY_PATH} --hostfile ./h1-3 -np 7 --mca mtl
<br>
mx,self ./cpi 
<br>
Signal:7 info.si_errno:0(Success) si_code:2()
<br>
Failing at addr:0x2aaaaaaab000
<br>
[0]
<br>
func:/usr/local/openmpi-1.2b2/lib/libopen-pal.so.0(opal_backtrace_print+
<br>
0x1f) [0x2b9b7fa52d1f]
<br>
[1] func:/usr/local/openmpi-1.2b2/lib/libopen-pal.so.0 [0x2b9b7fa51871]
<br>
[2] func:/lib/libpthread.so.0 [0x2b9b80013d00]
<br>
[3]
<br>
func:/usr/local/openmpi-1.2b2/lib/libmca_common_sm.so.0(mca_common_sm_mm
<br>
ap_init+0x1e3) [0x2b9b8270ef83]
<br>
[4] func:/usr/local/openmpi-1.2b2/lib/openmpi/mca_mpool_sm.so
<br>
[0x2b9b8260d0ff]
<br>
[5]
<br>
func:/usr/local/openmpi-1.2b2/lib/libmpi.so.0(mca_mpool_base_module_crea
<br>
te+0x70) [0x2b9b7f7afac0]
<br>
[6]
<br>
func:/usr/local/openmpi-1.2b2/lib/openmpi/mca_btl_sm.so(mca_btl_sm_add_p
<br>
rocs_same_base_addr+0x907) [0x2b9b83070517]
<br>
[7]
<br>
func:/usr/local/openmpi-1.2b2/lib/openmpi/mca_bml_r2.so(mca_bml_r2_add_p
<br>
rocs+0x206) [0x2b9b82d5f576]
<br>
[8]
<br>
func:/usr/local/openmpi-1.2b2/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_add
<br>
_procs+0xe3) [0x2b9b82a2d0a3]
<br>
[9] func:/usr/local/openmpi-1.2b2/lib/libmpi.so.0(ompi_mpi_init+0x697)
<br>
[0x2b9b7f77be07]
<br>
[10] func:/usr/local/openmpi-1.2b2/lib/libmpi.so.0(MPI_Init+0x83)
<br>
[0x2b9b7f79c943]
<br>
[11] func:./cpi(main+0x42) [0x400cd5]
<br>
[12] func:/lib/libc.so.6(__libc_start_main+0xf4) [0x2b9b8013a134]
<br>
[13] func:./cpi [0x400bd9]
<br>
*** End of error message ***
<br>
Process 4 of 7 is on node-2
<br>
Process 5 of 7 is on node-2
<br>
Process 6 of 7 is on node-2
<br>
Process 0 of 7 is on node-1
<br>
Process 1 of 7 is on node-1
<br>
Process 2 of 7 is on node-1
<br>
Process 3 of 7 is on node-1
<br>
pi is approximately 3.1415926544231239, Error is 0.0000000008333307
<br>
wall clock time = 0.009331
<br>
Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:0x2b4ba33652be
<br>
Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:0x2b8685aba2be
<br>
Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:0x2b304ffbe2be
<br>
mpirun noticed that job rank 0 with PID 0 on node node-1 exited on
<br>
signal 1.
<br>
6 additional processes aborted (not shown)
<br>
<p>&nbsp;
<br>
Ok, so I take it one is down. Would this be the cause for all the
<br>
different errors I'm seeing?
<br>
&nbsp;
<br>
$ fm_status 
<br>
FMS Fabric status
<br>
&nbsp;
<br>
17      hosts known
<br>
16      FMAs found
<br>
3       un-ACKed alerts
<br>
Mapping is complete, last map generated by node-20
<br>
Database generation not yet complete.
<br>
<p><p>&nbsp;
<br>
________________________________
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Reese Faucette
<br>
Sent: Tuesday, January 02, 2007 2:52 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Ompi failing on mx only
<br>
<p><p>Hi, Gary-
<br>
This looks like a config problem, and not a code problem yet.  Could you
<br>
send the output of mx_info from node-1 and from node-2?  Also, forgive
<br>
me counter-asking a possibly dumb OMPI question, but is &quot;-x
<br>
LD_LIBRARY_PATH&quot; really what you want, as opposed to &quot;-x
<br>
LD_LIBRARY_PATH=${LD_LIBRARY_PATH}&quot; ?  (I would not be surprised if not
<br>
specifying a value defaults to this behavior, but have to ask).
<br>
&nbsp;
<br>
Also, have you tried MX MTL as opposed to BTL?  --mca pml cm --mca mtl
<br>
mx,self  (it looks like you did)
<br>
&nbsp;
<br>
&quot;[node-2:10464] mx_connect fail for node-2:0 with key aaaaffff &quot; makes
<br>
it look like your fabric may not be fully mapped or that you may have a
<br>
down link.
<br>
&nbsp;
<br>
thanks,
<br>
-reese
<br>
Myricom, Inc.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I was initially using 1.1.2 and moved to 1.2b2 because of a hang
<br>
on MPI_Bcast() which 1.2b2 reports to fix, and seemed to have done so.
<br>
My compute nodes are 2 dual core xeons on myrinet with mx. The problem
<br>
is trying to get ompi running on mx only. My machine file is as follows
<br>
...
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node-1 slots=4 max-slots=4 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node-2 slots=4 max-slots=4 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node-3 slots=4 max-slots=4 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'mpirun' with the minimum number of processes in order to get
<br>
the error ... 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun --prefix /usr/local/openmpi-1.2b2 -x
<br>
LD_LIBRARY_PATH --hostfile ./h1-3 -np 2 --mca btl mx,self ./cpi 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I don't believe there'a anything wrong w/ the hardware as I can
<br>
ping on mx between this failed node and the master fine. So I tried a
<br>
different set of 3 nodes and I got the same error, it always fails on
<br>
the 2nd node of any group of nodes I choose.
<br>
<p><p><p>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2423/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2423/node-2.out">node-2.out</a>
</ul>
<!-- attachment="node-2.out" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2423/node-1.out">node-1.out</a>
</ul>
<!-- attachment="node-1.out" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2424.php">Reese Faucette: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Previous message:</strong> <a href="2422.php">jcolmenares_at_[hidden]: "Re: [OMPI users] orted: command not found"</a>
<li><strong>In reply to:</strong> <a href="2420.php">Reese Faucette: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2424.php">Reese Faucette: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Reply:</strong> <a href="2424.php">Reese Faucette: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Reply:</strong> <a href="2425.php">Brian W. Barrett: "Re: [OMPI users] Ompi failing on mx only"</a>
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
