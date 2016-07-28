<?
$subject_val = "Re: [OMPI users] Runtime error only on one node.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  5 17:25:42 2009" -->
<!-- isoreceived="20090305222542" -->
<!-- sent="Thu, 5 Mar 2009 17:25:34 -0500" -->
<!-- isosent="20090305222534" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Runtime error only on one node." -->
<!-- id="70D31C29-B711-419F-9973-73B41FEB0DBC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="29133_1236230001_n255DGaC026461_49AF5F6A.2070703_at_anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] Runtime error only on one node.<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-05 17:25:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8339.php">Jeff Squyres: "Re: [OMPI users] Gamess with openmpi"</a>
<li><strong>Previous message:</strong> <a href="8337.php">Jeff Layton: "Re: [OMPI users] mlx4 error - looking for guidance"</a>
<li><strong>In reply to:</strong> <a href="8307.php">Shinta Bonnefoy: "[OMPI users] Runtime error only on one node."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8346.php">Shinta Bonnefoy: "Re: [OMPI users] Runtime error only on one node."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Whoops; we shouldn't be seg faulting.  :-\
<br>
<p>The warning is exactly what it implies -- it found the OpenFabrics  
<br>
network stack by no functioning OpenFabrics-capable hardware.  You can  
<br>
disable it (and the segv) by disabling the openfabrics BTL from running:
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun --mca btl ^openib
<br>
<p>But what I don't see is why we're segv'ing when calling  
<br>
ibv_destroy_srq().  This is a function in the shutdown sequence of the  
<br>
openib BTL, but that shouldn't be getting called with the error  
<br>
message that you're seeing.  Are you getting corefiles, perchance?   
<br>
Could you get a stack trace with the file and line numbers in OMPI  
<br>
where this is happening, perchance?
<br>
<p>Do you have OpenFabrics hardware on your cluster?  According to your  
<br>
error message, node18 is the one that doesn't find an OF-capable  
<br>
hardware, but node66 is the one that segv's, which is darn weird...
<br>
<p><p>On Mar 5, 2009, at 12:13 AM, Shinta Bonnefoy wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am the admin of a small cluster (server running under SLES 10.1 and
</span><br>
<span class="quotelev1">&gt; nodes on OSS 10.3).
</span><br>
<span class="quotelev1">&gt; and I have just installed openmpi 1.3 on it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to get a simple program (like hello world) running but it
</span><br>
<span class="quotelev1">&gt; fails all the time on on of the node but never on the others.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't think it's related to the program since it's the simplest on  
</span><br>
<span class="quotelev1">&gt; you
</span><br>
<span class="quotelev1">&gt; can write.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All the nodes are sharing the openmpi install directory (trhough) nfs
</span><br>
<span class="quotelev1">&gt; and have all the same profile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the runtime code error I've got :
</span><br>
<span class="quotelev1">&gt; mpirun -machinefile no  -np 6 ~/hello.x
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [[6735,1],0]: A high-performance Open MPI point-to-point messaging  
</span><br>
<span class="quotelev1">&gt; module
</span><br>
<span class="quotelev1">&gt; was unable to find any relevant network interfaces:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Module: OpenFabrics (openib)
</span><br>
<span class="quotelev1">&gt;   Host: node18
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Hello world from process 3 of 6
</span><br>
<span class="quotelev1">&gt; Hello world from process 1 of 6
</span><br>
<span class="quotelev1">&gt; Hello world from process 4 of 6
</span><br>
<span class="quotelev1">&gt; Hello world from process 2 of 6
</span><br>
<span class="quotelev1">&gt; Hello world from process 5 of 6
</span><br>
<span class="quotelev1">&gt; Hello world from process 0 of 6
</span><br>
<span class="quotelev1">&gt; [node66:03997] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [node66:03997] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [node66:03997] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [node66:03997] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [node66:03997] [ 0] /lib64/libpthread.so.0 [0x2b5e227a4fb0]
</span><br>
<span class="quotelev1">&gt; [node66:03997] [ 1] /usr/lib64/libibverbs.so.1(ibv_destroy_srq+0)
</span><br>
<span class="quotelev1">&gt; [0x2b5e24ee0fa0]
</span><br>
<span class="quotelev1">&gt; [node66:03997] [ 2]
</span><br>
<span class="quotelev1">&gt; /opt/cluster/software/openmpi/1.3/lib/openmpi/mca_btl_openib.so
</span><br>
<span class="quotelev1">&gt; [0x2b5e250eb2dd]
</span><br>
<span class="quotelev1">&gt; [node66:03997] [ 3]
</span><br>
<span class="quotelev1">&gt; /opt/cluster/software/openmpi/1.3/lib/libmpi.so.0(mca_btl_base_close 
</span><br>
<span class="quotelev1">&gt; +0x87)
</span><br>
<span class="quotelev1">&gt; [0x2b5e21aa2a67]
</span><br>
<span class="quotelev1">&gt; [node66:03997] [ 4]
</span><br>
<span class="quotelev1">&gt; /opt/cluster/software/openmpi/1.3/lib/openmpi/mca_bml_r2.so  
</span><br>
<span class="quotelev1">&gt; [0x2b5e24cc39d2]
</span><br>
<span class="quotelev1">&gt; [node66:03997] [ 5]
</span><br>
<span class="quotelev1">&gt; /opt/cluster/software/openmpi/1.3/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; [0x2b5e24aa2d0e]
</span><br>
<span class="quotelev1">&gt; [node66:03997] [ 6]
</span><br>
<span class="quotelev1">&gt; /opt/cluster/software/openmpi/1.3/lib/libmpi.so. 
</span><br>
<span class="quotelev1">&gt; 0(mca_pml_base_finalize+0x1b)
</span><br>
<span class="quotelev1">&gt; [0x2b5e21aacd2f]
</span><br>
<span class="quotelev1">&gt; [node66:03997] [ 7] /opt/cluster/software/openmpi/1.3/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; [0x2b5e21a66a7b]
</span><br>
<span class="quotelev1">&gt; [node66:03997] [ 8]
</span><br>
<span class="quotelev1">&gt; /opt/cluster/software/openmpi/1.3/lib/libmpi.so.0(MPI_Finalize+0x17)
</span><br>
<span class="quotelev1">&gt; [0x2b5e21a84207]
</span><br>
<span class="quotelev1">&gt; [node66:03997] [ 9] /home/donald/hello.x(main+0x6d) [0x401bd5]
</span><br>
<span class="quotelev1">&gt; [node66:03997] [10] /lib64/libc.so.6(__libc_start_main+0xf4)
</span><br>
<span class="quotelev1">&gt; [0x2b5e229cfb54]
</span><br>
<span class="quotelev1">&gt; [node66:03997] [11] /home/donald/hello.x [0x401ad9]
</span><br>
<span class="quotelev1">&gt; [node66:03997] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 5 with PID 3997 on node node66 exited
</span><br>
<span class="quotelev1">&gt; on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [node72:07895] 4 more processes have sent help message
</span><br>
<span class="quotelev1">&gt; help-mpi-btl-base.txt / btl:no-nics
</span><br>
<span class="quotelev1">&gt; [node72:07895] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to  
</span><br>
<span class="quotelev1">&gt; see
</span><br>
<span class="quotelev1">&gt; all help / error messages
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please advise,
</span><br>
<span class="quotelev1">&gt; Thanks and regards,
</span><br>
<span class="quotelev1">&gt; SB
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="8339.php">Jeff Squyres: "Re: [OMPI users] Gamess with openmpi"</a>
<li><strong>Previous message:</strong> <a href="8337.php">Jeff Layton: "Re: [OMPI users] mlx4 error - looking for guidance"</a>
<li><strong>In reply to:</strong> <a href="8307.php">Shinta Bonnefoy: "[OMPI users] Runtime error only on one node."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8346.php">Shinta Bonnefoy: "Re: [OMPI users] Runtime error only on one node."</a>
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
