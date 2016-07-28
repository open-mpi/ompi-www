<?
$subject_val = "Re: [OMPI users] Code Seg Faults in Devel Series";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 30 16:06:30 2008" -->
<!-- isoreceived="20080630200630" -->
<!-- sent="Mon, 30 Jun 2008 16:06:26 -0400 (EDT)" -->
<!-- isosent="20080630200626" -->
<!-- name="Doug Roberts" -->
<!-- email="roberpj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Code Seg Faults in Devel Series" -->
<!-- id="Pine.LNX.4.64.0806301505400.11072_at_localhost.localdomain" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.64.0806262334410.20171_at_localhost.localdomain" -->
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
<strong>Subject:</strong> Re: [OMPI users] Code Seg Faults in Devel Series<br>
<strong>From:</strong> Doug Roberts (<em>roberpj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-30 16:06:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/07/6006.php">Keith Chan: "[OMPI users] Terminating processes started by MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="6004.php">Reuti: "Re: [OMPI users] Problem with gateway between 2 hosts"</a>
<li><strong>In reply to:</strong> <a href="5993.php">Doug Roberts: "[OMPI users] Code Seg Faults in Devel Series"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is resolved ;)  On our system, for releases after 1.3a1r18423
<br>
up to and including the latest release in the 1.4 trunk, configure
<br>
requires the --enable-mpi-threads option to be explicitly specified
<br>
for the cpi.c problem to successfully run, as shown here:
<br>
<p># ./configure --prefix=/opt/testing/openmpi/1.4a1r18770 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--enable-mpi-threads --with-gm=/opt/gm
<br>
<p># mpirun -np 4 -machinefile ~/bruhosts a.out
<br>
Process 1 of 4 is on bru27
<br>
Process 3 of 4 is on bru27
<br>
Process 0 of 4 is on bru25
<br>
Process 2 of 4 is on bru25
<br>
pi is approximately 3.1415926544231239, Error is 0.0000000008333307
<br>
wall clock time = 0.004372
<br>
<p>Otherwise not doing so yields the segfault as shown before:
<br>
<p># ./configure --prefix=/opt/testing/openmpi/1.4a1r18770 --with-gm=/opt/gm
<br>
<p># mpirun -np 4 -machinefile ~/bruhosts a.out
<br>
Process 1 of 4 is on bru27
<br>
Process 3 of 4 is on bru27
<br>
Process 0 of 4 is on bru25
<br>
[bru25:30651] *** Process received signal ***
<br>
[bru25:30651] Signal: Segmentation fault (11)
<br>
[bru25:30651] Signal code: Address not mapped (1)
<br>
[bru25:30651] Failing at address: 0x9
<br>
Process 2 of 4 is on bru25
<br>
[bru25:30651] [ 0] /lib64/tls/libpthread.so.0 [0x2a95f7e420]
<br>
[bru25:30651] [ 1] 
<br>
/opt/sharcnet/testing/openmpi/1.3a1r18740/lib/openmpi/mca_btl_gm.so 
<br>
[0x2a97980fb9]
<br>
[bru25:30651] [ 2] 
<br>
/opt/sharcnet/testing/openmpi/1.3a1r18740/lib/openmpi/mca_pml_ob1.so 
<br>
[0x2a97672c1d]
<br>
[bru25:30651] [ 3] 
<br>
/opt/sharcnet/testing/openmpi/1.3a1r18740/lib/openmpi/mca_pml_ob1.so 
<br>
[0x2a97667753]
<br>
[bru25:30651] [ 4] 
<br>
/opt/sharcnet/testing/openmpi/1.3a1r18740/lib/openmpi/mca_coll_tuned.so 
<br>
[0x2a9857db1c]
<br>
[bru25:30651] [ 5] 
<br>
/opt/sharcnet/testing/openmpi/1.3a1r18740/lib/openmpi/mca_coll_tuned.so 
<br>
[0x2a9857de27]
<br>
[bru25:30651] [ 6] 
<br>
/opt/sharcnet/testing/openmpi/1.3a1r18740/lib/openmpi/mca_coll_tuned.so 
<br>
[0x2a98573eec]
<br>
[bru25:30651] [ 7] 
<br>
/opt/sharcnet/testing/openmpi/current/lib/libmpi.so.0(PMPI_Bcast+0x13e) 
<br>
[0x2a956b405e]
<br>
[bru25:30651] [ 8] a.out(main+0xd6) [0x400d0f]
<br>
[bru25:30651] [ 9] /lib64/tls/libc.so.6(__libc_start_main+0xdb) 
<br>
[0x2a960a34bb]
<br>
[bru25:30651] [10] a.out [0x400b7a]
<br>
[bru25:30651] *** End of error message ***
<br>
[bru34:06039] 
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 30651 on node bru25 exited on 
<br>
signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p><p>On Fri, 27 Jun 2008, Doug Roberts wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi, I am trying to use the latest release of v1.3 to test with BLCR
</span><br>
<span class="quotelev1">&gt; however i just noticed that sometime after 1.3a1r18423 the standard
</span><br>
<span class="quotelev1">&gt; mpich sample code (cpi.c) stopped working on our rel4 based myrinet
</span><br>
<span class="quotelev1">&gt; gm clusters which raises some concern.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please find attached: gm_board_info.out, ompi_info--all.out,
</span><br>
<span class="quotelev1">&gt; ompi_info--param-btl-gm.out and config-1.4a1r18743.log bundled
</span><br>
<span class="quotelev1">&gt; in mpi-output.tar.gz for your analysis.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Below shows the sample code runs with 1.3a1r18423, but crashes with
</span><br>
<span class="quotelev1">&gt; 1.3a1r18740 and further crashes with all snapshots greater than
</span><br>
<span class="quotelev1">&gt; 1.3a1r18423 i have tested.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/07/6006.php">Keith Chan: "[OMPI users] Terminating processes started by MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="6004.php">Reuti: "Re: [OMPI users] Problem with gateway between 2 hosts"</a>
<li><strong>In reply to:</strong> <a href="5993.php">Doug Roberts: "[OMPI users] Code Seg Faults in Devel Series"</a>
<!-- nextthread="start" -->
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
