<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 24 18:55:34 2006" -->
<!-- isoreceived="20060524225534" -->
<!-- sent="Wed, 24 May 2006 18:55:28 -0400" -->
<!-- isosent="20060524225528" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] pallas assistance ?" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF8C4159_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] pallas assistance ?" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-24 18:55:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1283.php">Paul: "Re: [OMPI users] pallas assistance ?"</a>
<li><strong>Previous message:</strong> <a href="1281.php">Paul: "[OMPI users] pallas assistance ?"</a>
<li><strong>Maybe in reply to:</strong> <a href="1281.php">Paul: "[OMPI users] pallas assistance ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1283.php">Paul: "Re: [OMPI users] pallas assistance ?"</a>
<li><strong>Reply:</strong> <a href="1283.php">Paul: "Re: [OMPI users] pallas assistance ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is a known issue with OpenIB on PPC machines at the moment -- see:
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/23">https://svn.open-mpi.org/trac/ompi/ticket/23</a>
<br>
&lt;<a href="https://svn.open-mpi.org/trac/ompi/ticket/23">https://svn.open-mpi.org/trac/ompi/ticket/23</a>&gt; 
<br>
&nbsp;
<br>
A temporary workaround is to either use the SRQ or disable eager RDMA.
<br>
See the bug for the details of both of these options.
<br>
&nbsp;
<br>
<p><p>________________________________
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From: users-bounces_at_[hidden]
<br>
[mailto:users-bounces_at_[hidden]] On Behalf Of Paul
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sent: Wednesday, May 24, 2006 6:53 PM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To: users_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject: [OMPI users] pallas assistance ?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;So I have 64bit ppc versions of openmpi, openib and the pallas
<br>
files (IMB_MP1 being the important one). ldd checks out okay and shows
<br>
nothing missing. However when I try to execute the pallas run it dies
<br>
like so:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[root_at_thing ompi]# /opt/ompi/bin/mpirun -np 2 -machinefile
<br>
machine.list ./IMB-MPI1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Failing at addr:0x3000100a819d
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[0] func:/opt/ompi/lib/libopal.so.0 [0x80001c6e18] 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1] func:[0x1ffffffdfd0]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[2] func:/opt/ompi/lib/libmpi.so.0 [0x800006516c]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[3] func:/opt/ompi/lib/libmpi.so.0 [0x80000652b4]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[4] func:/opt/ompi/lib/openmpi/mca_btl_openib.so [0x800056f2f0]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[5] func:/opt/ompi/lib/libmpi.so.0 [0x80000d0540] 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[6] func:/opt/ompi/lib/openmpi/mca_bml_r2.so [0x80005548a8]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[7] func:/opt/ompi/lib/libmpi.so.0 [0x80000cfc8c]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[8] func:/opt/ompi/lib/openmpi/mca_pml_ob1.so [0x8000533d9c]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[9] func:/opt/ompi/lib/libmpi.so.0 [0x80000d9988] 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[10] func:/opt/ompi/lib/libmpi.so.0 [0x8000087a80]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[11] func:/opt/ompi/lib/libmpi.so.0 [0x80000b09ac]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[12] func:./IMB-MPI1 [0x10003328]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[13] func:/lib64/tls/libc.so.6 [0x8064e9415c]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[14] func:/lib64/tls/libc.so.6 [0x8064e942e4] 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*** End of error message ***
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;are there any special things that need to be done with pallas,
<br>
open-ib, open-mpi ? Pallas compiled fine and linked okay with the needed
<br>
libraries. Currently machine.list is just localhost twice. 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1282/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1283.php">Paul: "Re: [OMPI users] pallas assistance ?"</a>
<li><strong>Previous message:</strong> <a href="1281.php">Paul: "[OMPI users] pallas assistance ?"</a>
<li><strong>Maybe in reply to:</strong> <a href="1281.php">Paul: "[OMPI users] pallas assistance ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1283.php">Paul: "Re: [OMPI users] pallas assistance ?"</a>
<li><strong>Reply:</strong> <a href="1283.php">Paul: "Re: [OMPI users] pallas assistance ?"</a>
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
