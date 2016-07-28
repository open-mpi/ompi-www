<?
$subject_val = "Re: [OMPI users] open mpi 1.3 RDMA_CM_EVENT_CONNECT_ERROR";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 10:27:15 2009" -->
<!-- isoreceived="20090219152715" -->
<!-- sent="Thu, 19 Feb 2009 10:27:02 -0500" -->
<!-- isosent="20090219152702" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open mpi 1.3 RDMA_CM_EVENT_CONNECT_ERROR" -->
<!-- id="7104B018-F886-4DBF-8E48-ECD5A9BEC2E8_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4086.192.168.14.9.1235054931.squirrel_at_india.einfochips.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] open mpi 1.3 RDMA_CM_EVENT_CONNECT_ERROR<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-19 10:27:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8107.php">Gerry Creager: "[OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<li><strong>Previous message:</strong> <a href="8105.php">viral.mehta_at_[hidden]: "[OMPI users] open mpi 1.3 RDMA_CM_EVENT_CONNECT_ERROR"</a>
<li><strong>In reply to:</strong> <a href="8105.php">viral.mehta_at_[hidden]: "[OMPI users] open mpi 1.3 RDMA_CM_EVENT_CONNECT_ERROR"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What iWARP hardware are you using?
<br>
<p>I only tested with Chelsio T3 iWARP hardware before v1.3 was launched;  
<br>
I tested with Intel (NetEffect) 020's after v1.3 was launched and  
<br>
found that their driver in OFED v1.4.0 does not handle RDMA CM REJECT  
<br>
messages correctly.  I have not yet tested with any other iWARP  
<br>
hardware.
<br>
<p>You probably don't care about the details; the high level description  
<br>
of the problem is this: there are ordering issues in our  
<br>
implementation during OpenFabrics wireups such that Open MPI insists  
<br>
on connections being made in &quot;one direction.&quot;  If a connection is made  
<br>
in &quot;the Wrong direction&quot;, OMPI will REJECT the connection and initiate  
<br>
a new connection in &quot;the Right direction.&quot;  It's this REJECT that the  
<br>
Intel (NetEffect) driver doesn't handle properly, but it also explains  
<br>
why reversing the order of your hosts works properly (because  
<br>
connections will be made in the Right direction, and OMPI doesn't  
<br>
issue REJECTs).
<br>
<p>This gets complicated because both two different as-yet unreleased  
<br>
pieces of software are compensating:
<br>
<p>- Open MPI v1.3.1 (coming soon): contains a workaround for the Intel/ 
<br>
NetEffect RNICs that handles the fact that REJECT behavior misbehaves  
<br>
in the OFED 1.4.0 Intel driver.  It relies on detecting that it is  
<br>
running on one of the misbehaving Intel RNICs to know when to apply  
<br>
the workaround.  You can also manually enable the workaround via an  
<br>
MCA parameter.
<br>
<p>- OFED v1.4.1 (coming soon): As of yesterday, Intel was on schedule to  
<br>
deliver driver fixes for REJECT behavior for OFED v1.4.1.  Hopefully,  
<br>
they'll be able to stay on schedule and OFED v1.4.1 will contain the  
<br>
fixes and OMPI 1.3 will work out-of-the-box.
<br>
<p>The situation gets further complicated because the Intel RNICs do not  
<br>
report their vendor/part IDs properly in OFED v1.4.0.  Hence, Open MPI  
<br>
v1.3.1 cannot automatically know to apply the workaround (because it  
<br>
can't detect that it's running on a problematic RNIC); you  
<br>
unfortunately have to set an MCA parameter to activate the workaround.
<br>
<p>That being said, the fixes for the Intel RNICs to properly report  
<br>
their vendor/part IDs have already been pushed upstream and will  
<br>
definitely be included in OFED v1.4.1.  So here's the possible outcomes:
<br>
<p>1. OMPI v1.3.1 will definitely work with OFED v1.4.1 with Intel RNICs  
<br>
(either via auto-detecting to use the workaround or if the Intel  
<br>
REJECT driver problems get fixed).
<br>
<p>2. OMPI v1.3.1 will work with OFED v1.4.0 if you manually set an MCA  
<br>
parameter to activate the workaround (perhaps it would be convenient  
<br>
to set that MCA param in the system-wide mca-params.conf file).
<br>
<p>3. OMPI v1.3.0 will work with OFED v1.4.1 *if* Intel gets the REJECT  
<br>
fixes pushed upstream in time for OFED v1.4.1.
<br>
<p>So if you're running in Intel/NetEffect RNICs with OFED 1.4.0, you  
<br>
might want to try a nightly OMPI v1.3.1 tarball.  They're not yet  
<br>
released, but they're darn close and pretty stable.  If nothing else,  
<br>
you can at least see if it works for you:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/nightly/v1.3/">http://www.open-mpi.org/nightly/v1.3/</a>
<br>
<p>You may need to enable the  
<br>
btl_openib_connect_rdmacm_reject_causes_connect_error MCA parameter  
<br>
(yes, it's a long name on purpose :-) ), perhaps something like this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca  
<br>
btl_openib_connect_rdmacm_reject_causes_connect_error 1 ....
<br>
<p>To be absolutely clear: this MCA parameter and RDMA CM workaround does  
<br>
not exist in OMPI v1.3.0.  Since v1.3.1 final is not yet released, the  
<br>
only way to try it out is via the v1.3.1 nightly tarballs (via the URL  
<br>
above).
<br>
<p>Hope that helps!
<br>
<p><p><p><p><p>On Feb 19, 2009, at 9:48 AM, viral.mehta_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; I successfully installed OpenMPI-1.3. I am trying to run OpenMPI  
</span><br>
<span class="quotelev1">&gt; over iWARP.
</span><br>
<span class="quotelev1">&gt; But I am getting error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; RDMA_CM_EVENT_CONNECT_ERROR
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried to run with more debug messages
</span><br>
<span class="quotelev1">&gt; mpirun --mca orte_base_help_aggregate 0 -np 2 -display-map -v -host
</span><br>
<span class="quotelev1">&gt; 100.168.54.49,100.168.54.50
</span><br>
<span class="quotelev1">&gt; /usr/mpi/gcc/openmpi-1.3/tests/osu_benchmarks-3.0/osu_bw
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And I got
</span><br>
<span class="quotelev1">&gt; [qa49:06449] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [qa49:06449] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [qa49:06449] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [qa49:06449] Failing at address: 0x1c
</span><br>
<span class="quotelev1">&gt; [qa49:06449] [ 0] /lib64/tls/libpthread.so.0 [0x3c4d80c5b0]
</span><br>
<span class="quotelev1">&gt; [qa49:06449] [ 1] /usr/mpi/gcc/openmpi-1.3/lib64/libopen-pal.so.0  
</span><br>
<span class="quotelev1">&gt; [0x2a95868604]
</span><br>
<span class="quotelev1">&gt; [qa49:06449] [ 2]
</span><br>
<span class="quotelev1">&gt; /usr/mpi/gcc/openmpi-1.3/lib64/libopen-pal.so. 
</span><br>
<span class="quotelev1">&gt; 0(opal_show_help_vstring+0xd5)
</span><br>
<span class="quotelev1">&gt; [0x2a95867215]
</span><br>
<span class="quotelev1">&gt; [qa49:06449] [ 3]
</span><br>
<span class="quotelev1">&gt; /usr/mpi/gcc/openmpi-1.3/lib64/libopen-rte.so.0(orte_show_help+0xaf)
</span><br>
<span class="quotelev1">&gt; [0x2a9570d36f]
</span><br>
<span class="quotelev1">&gt; [qa49:06449] [ 4] /usr/mpi/gcc/openmpi-1.3/lib64/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_btl_openib.so
</span><br>
<span class="quotelev1">&gt; [0x2a970a8e64]
</span><br>
<span class="quotelev1">&gt; [qa49:06449] [ 5] /usr/mpi/gcc/openmpi-1.3/lib64/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_btl_openib.so
</span><br>
<span class="quotelev1">&gt; [0x2a970a2d0b]
</span><br>
<span class="quotelev1">&gt; [qa49:06449] [ 6] /usr/mpi/gcc/openmpi-1.3/lib64/libopen-pal.so.0  
</span><br>
<span class="quotelev1">&gt; [0x2a958557b8]
</span><br>
<span class="quotelev1">&gt; [qa49:06449] [ 7]
</span><br>
<span class="quotelev1">&gt; /usr/mpi/gcc/openmpi-1.3/lib64/libopen-pal.so.0(opal_progress+0xac)
</span><br>
<span class="quotelev1">&gt; [0x2a9584a80c]
</span><br>
<span class="quotelev1">&gt; [qa49:06449] [ 8] /usr/mpi/gcc/openmpi-1.3/lib64/libmpi.so.0  
</span><br>
<span class="quotelev1">&gt; [0x2a9558aa15]
</span><br>
<span class="quotelev1">&gt; [qa49:06449] [ 9] /usr/mpi/gcc/openmpi-1.3/lib64/libmpi.so. 
</span><br>
<span class="quotelev1">&gt; 0(PMPI_Waitall+0x8a)
</span><br>
<span class="quotelev1">&gt; [0x2a955b756a]
</span><br>
<span class="quotelev1">&gt; [qa49:06449] [10]
</span><br>
<span class="quotelev1">&gt; /usr/mpi/gcc/openmpi-1.3/tests/osu_benchmarks-3.0/osu_bw(main+0x29d)  
</span><br>
<span class="quotelev1">&gt; [0x401135]
</span><br>
<span class="quotelev1">&gt; [qa49:06449] [11] /lib64/tls/libc.so.6(__libc_start_main+0xdb)  
</span><br>
<span class="quotelev1">&gt; [0x3c4cf1c3fb]
</span><br>
<span class="quotelev1">&gt; [qa49:06449] [12] /usr/mpi/gcc/openmpi-1.3/tests/osu_benchmarks-3.0/ 
</span><br>
<span class="quotelev1">&gt; osu_bw
</span><br>
<span class="quotelev1">&gt; [0x400e0a]
</span><br>
<span class="quotelev1">&gt; [qa49:06449] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am I doing something wrong ??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Surprisingly,
</span><br>
<span class="quotelev1">&gt; mpirun --mca orte_base_help_aggregate 0 -np 2 -display-map -v -host
</span><br>
<span class="quotelev1">&gt; 100.168.54.50,100.168.54.49
</span><br>
<span class="quotelev1">&gt; /usr/mpi/gcc/openmpi-1.3/tests/osu_benchmarks-3.0/osu_bw
</span><br>
<span class="quotelev1">&gt; is working fine (notice just host arguments are swapped)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Viral
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; _____________________________________________________________________
</span><br>
<span class="quotelev1">&gt; Disclaimer: This e-mail message and all attachments transmitted with  
</span><br>
<span class="quotelev1">&gt; it
</span><br>
<span class="quotelev1">&gt; are intended solely for the use of the addressee and may contain  
</span><br>
<span class="quotelev1">&gt; legally
</span><br>
<span class="quotelev1">&gt; privileged and confidential information. If the reader of this message
</span><br>
<span class="quotelev1">&gt; is not the intended recipient, or an employee or agent responsible for
</span><br>
<span class="quotelev1">&gt; delivering this message to the intended recipient, you are hereby
</span><br>
<span class="quotelev1">&gt; notified that any dissemination, distribution, copying, or other use  
</span><br>
<span class="quotelev1">&gt; of
</span><br>
<span class="quotelev1">&gt; this message or its attachments is strictly prohibited. If you have
</span><br>
<span class="quotelev1">&gt; received this message in error, please notify the sender immediately  
</span><br>
<span class="quotelev1">&gt; by
</span><br>
<span class="quotelev1">&gt; replying to this message and please delete it from your computer. Any
</span><br>
<span class="quotelev1">&gt; views expressed in this message are those of the individual sender
</span><br>
<span class="quotelev1">&gt; unless otherwise stated.Company has taken enough precautions to  
</span><br>
<span class="quotelev1">&gt; prevent
</span><br>
<span class="quotelev1">&gt; the spread of viruses. However the company accepts no liability for  
</span><br>
<span class="quotelev1">&gt; any
</span><br>
<span class="quotelev1">&gt; damage caused by any virus transmitted by this email.
</span><br>
<span class="quotelev1">&gt; __________________________________________________________________________
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8107.php">Gerry Creager: "[OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<li><strong>Previous message:</strong> <a href="8105.php">viral.mehta_at_[hidden]: "[OMPI users] open mpi 1.3 RDMA_CM_EVENT_CONNECT_ERROR"</a>
<li><strong>In reply to:</strong> <a href="8105.php">viral.mehta_at_[hidden]: "[OMPI users] open mpi 1.3 RDMA_CM_EVENT_CONNECT_ERROR"</a>
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
