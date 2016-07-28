<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb 14 12:34:01 2007" -->
<!-- isoreceived="20070214173401" -->
<!-- sent="Wed, 14 Feb 2007 12:33:56 -0500" -->
<!-- isosent="20070214173356" -->
<!-- name="Alex Tumanov" -->
<!-- email="atumanov_at_[hidden]" -->
<!-- subject="[OMPI users] problems with HPLinpack over myrinet MX-10G" -->
<!-- id="2453e2900702140933r3905d80cj2a46448441f9b5e0_at_mail.gmail.com" -->
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
<strong>From:</strong> Alex Tumanov (<em>atumanov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-14 12:33:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2694.php">Adrian Knoth: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Previous message:</strong> <a href="2692.php">Jeff Squyres: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2700.php">Scott Atchley: "Re: [OMPI users] problems with HPLinpack over myrinet MX-10G"</a>
<li><strong>Reply:</strong> <a href="2700.php">Scott Atchley: "Re: [OMPI users] problems with HPLinpack over myrinet MX-10G"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I recently tried running HPLinpack, compiled with OMPI, over myrinet
<br>
MX interconnect. Running a simple hello world program works, but XHPL
<br>
fails with an error occurring when it tries to MPI_Send:
<br>
<p># mpirun -np 4 -H l0-0,c0-2 --prefix $MPIHOME --mca btl mx,self
<br>
/opt/hpl/openmpi-hpl/bin/xhpl
<br>
[l0-0.local:04707] *** An error occurred in MPI_Send
<br>
[l0-0.local:04707] *** on communicator MPI_COMM_WORLD
<br>
[l0-0.local:04707] *** MPI_ERR_INTERN: internal error
<br>
[l0-0.local:04707] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
mpirun noticed that job rank 0 with PID 4706 on node &quot;l0-0&quot; exited on signal 15.
<br>
3 additional processes aborted (not shown)
<br>
<p># mpirun -np 4 -H l0-0,c0-2 --prefix $MPIHOME --mca btl mx,self ~/atumanov/hello
<br>
Hello from Alex' MPI test program
<br>
Process 1 on compute-0-2.local out of 4
<br>
Hello from Alex' MPI test program
<br>
Hello from Alex' MPI test program
<br>
Process 0 on l0-0.local out of 4
<br>
Process 3 on compute-0-2.local out of 4
<br>
Hello from Alex' MPI test program
<br>
Process 2 on l0-0.local out of 4
<br>
<p>The output from mx_info is as follows:
<br>
-------------------------------------------------------------------------------------------------
<br>
MX Version: 1.2.0g
<br>
MX Build: root_at_[hidden]:/home/install/rocks/src/roll/myrinet_mx10g/BUILD/mx-1.2.0g
<br>
Wed Jan 17 18:51:12 PST 2007
<br>
1 Myrinet board installed.
<br>
The MX driver is configured to support up to 4 instances and 1024 nodes.
<br>
===================================================================
<br>
Instance #0:  299.8 MHz LANai, PCI-E x8, 2 MB SRAM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status:         Running, P0: Link up
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MAC Address:    00:60:dd:47:7d:73
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Product code:   10G-PCIE-8A-C
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Part number:    09-03362
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Serial number:  314581
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mapper:         00:60:dd:47:7d:73, version = 0x591b1c74, configured
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mapped hosts:   2
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ROUTE COUNT
<br>
INDEX    MAC ADDRESS     HOST NAME                                P0
<br>
-----    -----------     ---------                                ---
<br>
&nbsp;&nbsp;&nbsp;0) 00:60:dd:47:7d:73 compute-0-2.local:0                     D 0,0
<br>
&nbsp;&nbsp;&nbsp;1) 00:60:dd:47:7d:72 l0-0.local:0                        1,0
<br>
-------------------------------------------------------------------------------------------------
<br>
<p>There are several questions. First of all, am I able to initiate OMPI
<br>
over MX jobs from the headnode to be executed on 2 compute nodes even
<br>
though the headnode does not have MX hardware? Secondly, looking at
<br>
next to last line in the mx_info output, what does  letter 'D' stand
<br>
for? Third, the MX interconnect support OMPI provides - does it mean
<br>
MX-2G or there's support for MX-10G as well?
<br>
<p>If anybody has encountered a similar problem and was able to
<br>
circumvent it please do let me know.
<br>
<p>Many thanks for your time and for bringing the community together.
<br>
<p>Sincerely,
<br>
Alex.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2694.php">Adrian Knoth: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Previous message:</strong> <a href="2692.php">Jeff Squyres: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2700.php">Scott Atchley: "Re: [OMPI users] problems with HPLinpack over myrinet MX-10G"</a>
<li><strong>Reply:</strong> <a href="2700.php">Scott Atchley: "Re: [OMPI users] problems with HPLinpack over myrinet MX-10G"</a>
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
