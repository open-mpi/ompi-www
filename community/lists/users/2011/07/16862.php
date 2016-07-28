<?
$subject_val = "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  8 13:31:35 2011" -->
<!-- isoreceived="20110708173135" -->
<!-- sent="Fri, 8 Jul 2011 10:31:28 -0700" -->
<!-- isosent="20110708173128" -->
<!-- name="Steve Kargl" -->
<!-- email="sgk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD" -->
<!-- id="20110708173128.GA82548_at_troutmask.apl.washington.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2DAE024D-1094-4581-A2A9-910BCB228084_at_cisco.com" -->
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
<strong>From:</strong> Steve Kargl (<em>sgk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-08 13:31:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16863.php">Jeff Squyres: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="16861.php">Ralph Castain: "Re: [OMPI users] Pinning of openmpi to certain defined cores possible"</a>
<li><strong>In reply to:</strong> <a href="16851.php">Jeff Squyres: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16863.php">Jeff Squyres: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="16863.php">Jeff Squyres: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Jul 07, 2011 at 08:38:56PM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jul 5, 2011, at 4:24 PM, Steve Kargl wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, Jul 05, 2011 at 01:14:06PM -0700, Steve Kargl wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have an application that appears to function as I expect
</span><br>
<span class="quotelev3">&gt; &gt;&gt; when compiled with openmpi-1.4.2 on FreeBSD 9.0.  But, it
</span><br>
<span class="quotelev3">&gt; &gt;&gt; appears to hang during communication between nodes.  What
</span><br>
<span class="quotelev3">&gt; &gt;&gt; follows is the long version.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Argh I messed up.  It should read &quot;But, it appears to hang
</span><br>
<span class="quotelev2">&gt; &gt; during communication between nodes when using 1.4.3 or 1.4.4.&quot;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; Are you able to run simple MPI applications with 1.4.3 or 1.4.4
</span><br>
<span class="quotelev1">&gt; on your OS?  E.g., the &quot;ring_c&quot; program in the example/ directory?
</span><br>
<span class="quotelev1">&gt; This might be a good test to see if OMPI's TCP is working at all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Assuming that works... Have you tried attaching debuggers to see
</span><br>
<span class="quotelev1">&gt; where your process is hanging?  There might be a logic issue in
</span><br>
<span class="quotelev1">&gt; your app that isn't-quite-legal-MPI but works with some amount
</span><br>
<span class="quotelev1">&gt;  of buffering, but fails if the amount of buffering is reduced.
</span><br>
<p>It seems that openmpi-1.4.4 compiled code is trying to use the
<br>
wrong nic.  My /etc/hosts file has
<br>
<p>10.208.78.111           hpc.apl.washington.edu hpc
<br>
192.168.0.10            node10.cimu.org node10 n10 master
<br>
192.168.0.11            node11.cimu.org node11 n11
<br>
192.168.0.12            node12.cimu.org node12 n12
<br>
... down to ...
<br>
192.168.0.21            node21.cimu.org node21 n21
<br>
<p>Note, node10 and hpc are the same system (2 different NICs). 
<br>
<p>hpc:kargl[252] /usr/local/openmpi-1.4.4/bin/mpif90 -o z -g -O ring_f90.f90 
<br>
hpc:kargl[253] cat &gt; mf1
<br>
node10 slots=1
<br>
node11 slots=1
<br>
node12 slots=1
<br>
hpc:kargl[254] /usr/local/openmpi-1.4.4/bin/mpiexec -machinefile mf1 ./z
<br>
&nbsp;Process 0 sending           10  to            1  tag          201  (           3  processes in ring)
<br>
<p>in another xterm if I attach to the process on node10, I see
<br>
with gdb.
<br>
<p>(gdb) bt
<br>
#0  0x00000003c10f9b9c in kevent () from /lib/libc.so.7
<br>
#1  0x000000000052ca18 in kq_dispatch ()
<br>
#2  0x000000000052ba93 in opal_event_base_loop ()
<br>
#3  0x000000000052549b in opal_progress ()
<br>
#4  0x000000000048fcfc in mca_pml_ob1_send ()
<br>
#5  0x0000000000428873 in PMPI_Send ()
<br>
#6  0x000000000041a890 in pmpi_send__ ()
<br>
#7  0x000000000041a3f0 in ring () at ring_f90.f90:34
<br>
#8  0x000000000041a640 in main (argc=&lt;value optimized out&gt;, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;argv=&lt;value optimized out&gt;) at ring_f90.f90:10
<br>
#9  0x000000000041a1cc in _start ()
<br>
(gdb) quit
<br>
<p>Now, eliminating node10 from the machine file, I see:
<br>
<p>hpc:kargl[255] cat &gt; mf2
<br>
node11 slots=1
<br>
node12 slots=1
<br>
node13 slots=1
<br>
hpc:kargl[256] /usr/local/openmpi-1.4.4/bin/mpiexec -machinefile mf2 ./z
<br>
&nbsp;Process 0 sending           10  to            1  tag          201  (           3  processes in ring)
<br>
&nbsp;Process 0 sent to            1
<br>
&nbsp;Process 0 decremented value:           9
<br>
&nbsp;Process 0 decremented value:           8
<br>
&nbsp;Process 0 decremented value:           7
<br>
&nbsp;Process 0 decremented value:           6
<br>
&nbsp;Process 0 decremented value:           5
<br>
&nbsp;Process 0 decremented value:           4
<br>
&nbsp;Process 0 decremented value:           3
<br>
&nbsp;Process 0 decremented value:           2
<br>
&nbsp;Process 0 decremented value:           1
<br>
&nbsp;Process 0 decremented value:           0
<br>
&nbsp;Process            0  exiting
<br>
&nbsp;Process            1  exiting
<br>
&nbsp;Process            2  exiting
<br>
<p>I also have a simple mpi test program netmpi.c from Argonne.
<br>
It shows
<br>
<p>hpc:kargl[263] /usr/local/openmpi-1.4.4/bin/mpicc -o z -g -O GetOpt.c netmpi.c
<br>
hpc:kargl[264] cat mf_ompi_3 
<br>
node11.cimu.org slots=1
<br>
node16.cimu.org slots=1
<br>
hpc:kargl[265] /usr/local/openmpi-1.4.4/bin/mpiexec -machinefile mf_ompi_3 ./z
<br>
1: node16.cimu.org
<br>
0: node11.cimu.org
<br>
Latency: 0.000073617
<br>
Sync Time: 0.000147234
<br>
Now starting main loop
<br>
&nbsp;&nbsp;0:         0 bytes 16384 times --&gt;    0.00 Mbps in 0.000073612 sec
<br>
&nbsp;&nbsp;1:         1 bytes 16384 times --&gt;    0.10 Mbps in 0.000073612 sec
<br>
&nbsp;&nbsp;2:         2 bytes 3396 times --&gt;    0.21 Mbps in 0.000073611 sec
<br>
&nbsp;&nbsp;3:         3 bytes 1698 times --&gt;    0.31 Mbps in 0.000073609 sec
<br>
&nbsp;&nbsp;4:         5 bytes 2264 times --&gt;    0.52 Mbps in 0.000073610 sec
<br>
&nbsp;&nbsp;5:         7 bytes 1358 times --&gt;    0.73 Mbps in 0.000073608 sec
<br>
<p><p>hpc:kargl[268] cat mf_ompi_1
<br>
node10.cimu.org slots=1
<br>
node16.cimu.org slots=1
<br>
hpc:kargl[267] /usr/local/openmpi-1.4.4/bin/mpiexec -machinefile mf_ompi_1 ./z
<br>
0: hpc.apl.washington.edu
<br>
1: node16.cimu.org
<br>
<p>(gdb) bt
<br>
#0  0x00000003c0bedb9c in kevent () from /lib/libc.so.7
<br>
#1  0x000000000052d648 in kq_dispatch ()
<br>
#2  0x000000000052c6c3 in opal_event_base_loop ()
<br>
#3  0x00000000005260cb in opal_progress ()
<br>
#4  0x0000000000491d1c in mca_pml_ob1_send ()
<br>
#5  0x000000000043c753 in PMPI_Send ()
<br>
#6  0x000000000041a112 in Sync (p=0x7fffffffd4d0) at netmpi.c:573
<br>
#7  0x000000000041a3cf in DetermineLatencyReps (p=0x3) at netmpi.c:593
<br>
#8  0x000000000041a4fe in TestLatency (p=0x3) at netmpi.c:630
<br>
#9  0x000000000041a958 in main (argc=1, argv=0x7fffffffd6a0) at netmpi.c:213
<br>
(gdb) quit
<br>
<p>Why is hpc.apl.washington.edu appearing instead of node10.cimu.org?
<br>
<p><pre>
-- 
Steve
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16863.php">Jeff Squyres: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="16861.php">Ralph Castain: "Re: [OMPI users] Pinning of openmpi to certain defined cores possible"</a>
<li><strong>In reply to:</strong> <a href="16851.php">Jeff Squyres: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16863.php">Jeff Squyres: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="16863.php">Jeff Squyres: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
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
