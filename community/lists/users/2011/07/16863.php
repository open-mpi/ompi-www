<?
$subject_val = "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  8 14:19:39 2011" -->
<!-- isoreceived="20110708181939" -->
<!-- sent="Fri, 8 Jul 2011 14:19:27 -0400" -->
<!-- isosent="20110708181927" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD" -->
<!-- id="087DDAA3-6062-4901-8F41-D0725B45256A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20110708173128.GA82548_at_troutmask.apl.washington.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-08 14:19:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16864.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="16862.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>In reply to:</strong> <a href="16862.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16864.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="16864.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="16866.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 8, 2011, at 1:31 PM, Steve Kargl wrote:
<br>
<p><span class="quotelev1">&gt; It seems that openmpi-1.4.4 compiled code is trying to use the
</span><br>
<span class="quotelev1">&gt; wrong nic.  My /etc/hosts file has
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 10.208.78.111           hpc.apl.washington.edu hpc
</span><br>
<span class="quotelev1">&gt; 192.168.0.10            node10.cimu.org node10 n10 master
</span><br>
<span class="quotelev1">&gt; 192.168.0.11            node11.cimu.org node11 n11
</span><br>
<span class="quotelev1">&gt; 192.168.0.12            node12.cimu.org node12 n12
</span><br>
<span class="quotelev1">&gt; ... down to ...
</span><br>
<span class="quotelev1">&gt; 192.168.0.21            node21.cimu.org node21 n21
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note, node10 and hpc are the same system (2 different NICs). 
</span><br>
<p>Don't confuse the machinefile with the NICs that OMPI will try to use.  The machinefile is only hosts on which OMPI will launch.  Specifically: the machinefile does not influence which NICs OMPI will use for MPI communications.
<br>
<p><span class="quotelev1">&gt; hpc:kargl[252] /usr/local/openmpi-1.4.4/bin/mpif90 -o z -g -O ring_f90.f90 
</span><br>
<span class="quotelev1">&gt; hpc:kargl[253] cat &gt; mf1
</span><br>
<span class="quotelev1">&gt; node10 slots=1
</span><br>
<span class="quotelev1">&gt; node11 slots=1
</span><br>
<span class="quotelev1">&gt; node12 slots=1
</span><br>
<span class="quotelev1">&gt; hpc:kargl[254] /usr/local/openmpi-1.4.4/bin/mpiexec -machinefile mf1 ./z
</span><br>
<span class="quotelev1">&gt; Process 0 sending           10  to            1  tag          201  (           3  processes in ring)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; in another xterm if I attach to the process on node10, I see
</span><br>
<span class="quotelev1">&gt; with gdb.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00000003c10f9b9c in kevent () from /lib/libc.so.7
</span><br>
<span class="quotelev1">&gt; #1  0x000000000052ca18 in kq_dispatch ()
</span><br>
<span class="quotelev1">&gt; #2  0x000000000052ba93 in opal_event_base_loop ()
</span><br>
<span class="quotelev1">&gt; #3  0x000000000052549b in opal_progress ()
</span><br>
<span class="quotelev1">&gt; #4  0x000000000048fcfc in mca_pml_ob1_send ()
</span><br>
<span class="quotelev1">&gt; #5  0x0000000000428873 in PMPI_Send ()
</span><br>
<span class="quotelev1">&gt; #6  0x000000000041a890 in pmpi_send__ ()
</span><br>
<span class="quotelev1">&gt; #7  0x000000000041a3f0 in ring () at ring_f90.f90:34
</span><br>
<span class="quotelev1">&gt; #8  0x000000000041a640 in main (argc=&lt;value optimized out&gt;, 
</span><br>
<span class="quotelev1">&gt;    argv=&lt;value optimized out&gt;) at ring_f90.f90:10
</span><br>
<span class="quotelev1">&gt; #9  0x000000000041a1cc in _start ()
</span><br>
<span class="quotelev1">&gt; (gdb) quit
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now, eliminating node10 from the machine file, I see:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hpc:kargl[255] cat &gt; mf2
</span><br>
<span class="quotelev1">&gt; node11 slots=1
</span><br>
<span class="quotelev1">&gt; node12 slots=1
</span><br>
<span class="quotelev1">&gt; node13 slots=1
</span><br>
<span class="quotelev1">&gt; hpc:kargl[256] /usr/local/openmpi-1.4.4/bin/mpiexec -machinefile mf2 ./z
</span><br>
<span class="quotelev1">&gt; Process 0 sending           10  to            1  tag          201  (           3  processes in ring)
</span><br>
<span class="quotelev1">&gt; Process 0 sent to            1
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value:           9
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value:           8
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value:           7
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value:           6
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value:           5
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value:           4
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value:           3
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value:           2
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value:           1
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value:           0
</span><br>
<span class="quotelev1">&gt; Process            0  exiting
</span><br>
<span class="quotelev1">&gt; Process            1  exiting
</span><br>
<span class="quotelev1">&gt; Process            2  exiting
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also have a simple mpi test program netmpi.c from Argonne.
</span><br>
<span class="quotelev1">&gt; It shows
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hpc:kargl[263] /usr/local/openmpi-1.4.4/bin/mpicc -o z -g -O GetOpt.c netmpi.c
</span><br>
<span class="quotelev1">&gt; hpc:kargl[264] cat mf_ompi_3 
</span><br>
<span class="quotelev1">&gt; node11.cimu.org slots=1
</span><br>
<span class="quotelev1">&gt; node16.cimu.org slots=1
</span><br>
<span class="quotelev1">&gt; hpc:kargl[265] /usr/local/openmpi-1.4.4/bin/mpiexec -machinefile mf_ompi_3 ./z
</span><br>
<span class="quotelev1">&gt; 1: node16.cimu.org
</span><br>
<span class="quotelev1">&gt; 0: node11.cimu.org
</span><br>
<span class="quotelev1">&gt; Latency: 0.000073617
</span><br>
<span class="quotelev1">&gt; Sync Time: 0.000147234
</span><br>
<span class="quotelev1">&gt; Now starting main loop
</span><br>
<span class="quotelev1">&gt;  0:         0 bytes 16384 times --&gt;    0.00 Mbps in 0.000073612 sec
</span><br>
<span class="quotelev1">&gt;  1:         1 bytes 16384 times --&gt;    0.10 Mbps in 0.000073612 sec
</span><br>
<span class="quotelev1">&gt;  2:         2 bytes 3396 times --&gt;    0.21 Mbps in 0.000073611 sec
</span><br>
<span class="quotelev1">&gt;  3:         3 bytes 1698 times --&gt;    0.31 Mbps in 0.000073609 sec
</span><br>
<span class="quotelev1">&gt;  4:         5 bytes 2264 times --&gt;    0.52 Mbps in 0.000073610 sec
</span><br>
<span class="quotelev1">&gt;  5:         7 bytes 1358 times --&gt;    0.73 Mbps in 0.000073608 sec
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hpc:kargl[268] cat mf_ompi_1
</span><br>
<span class="quotelev1">&gt; node10.cimu.org slots=1
</span><br>
<span class="quotelev1">&gt; node16.cimu.org slots=1
</span><br>
<span class="quotelev1">&gt; hpc:kargl[267] /usr/local/openmpi-1.4.4/bin/mpiexec -machinefile mf_ompi_1 ./z
</span><br>
<span class="quotelev1">&gt; 0: hpc.apl.washington.edu
</span><br>
<span class="quotelev1">&gt; 1: node16.cimu.org
</span><br>
<p>What function is netmpi.c using to get the hostname that is printed?  It might be using MPI_Get_processor_name() or gethostname() -- both of which may return whatever hostname(1) returns.  
<br>
<p>Again -- this is not an indicator of which NIC Open MPI is using.
<br>
<p><span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00000003c0bedb9c in kevent () from /lib/libc.so.7
</span><br>
<span class="quotelev1">&gt; #1  0x000000000052d648 in kq_dispatch ()
</span><br>
<span class="quotelev1">&gt; #2  0x000000000052c6c3 in opal_event_base_loop ()
</span><br>
<span class="quotelev1">&gt; #3  0x00000000005260cb in opal_progress ()
</span><br>
<span class="quotelev1">&gt; #4  0x0000000000491d1c in mca_pml_ob1_send ()
</span><br>
<span class="quotelev1">&gt; #5  0x000000000043c753 in PMPI_Send ()
</span><br>
<span class="quotelev1">&gt; #6  0x000000000041a112 in Sync (p=0x7fffffffd4d0) at netmpi.c:573
</span><br>
<span class="quotelev1">&gt; #7  0x000000000041a3cf in DetermineLatencyReps (p=0x3) at netmpi.c:593
</span><br>
<span class="quotelev1">&gt; #8  0x000000000041a4fe in TestLatency (p=0x3) at netmpi.c:630
</span><br>
<span class="quotelev1">&gt; #9  0x000000000041a958 in main (argc=1, argv=0x7fffffffd6a0) at netmpi.c:213
</span><br>
<span class="quotelev1">&gt; (gdb) quit
</span><br>
<p>The easiest way to fix this is likely to use the btl_tcp_if_include or btl_tcp_if_exclude MCA parameters -- i.e., tell OMPI exactly which interfaces to use:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>
<br>
<p>Hypothetically, however, OMPI should be able to determine that 192.168.0.x is not reachable from the 10.x network (assuming your netmasks are set right), and automatically not use the 10.x network to reach any of the non-node10 machines.  It's curious that this is not happening; I wonder if this is some kind of quirk of OMPI's reachability algorithms (<a href="http://www.open-mpi.org/faq/?category=tcp#tcp-routability">http://www.open-mpi.org/faq/?category=tcp#tcp-routability</a>) on FreeBSD...?
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="16864.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="16862.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>In reply to:</strong> <a href="16862.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16864.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="16864.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="16866.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
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
