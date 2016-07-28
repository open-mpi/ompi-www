<?
$subject_val = "Re: [OMPI users] Mixed Mellanox and Qlogic problems";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 13 19:46:43 2011" -->
<!-- isoreceived="20110713234643" -->
<!-- sent="Wed, 13 Jul 2011 16:46:35 -0700" -->
<!-- isosent="20110713234635" -->
<!-- name="David Warren" -->
<!-- email="warren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mixed Mellanox and Qlogic problems" -->
<!-- id="4E1E2E5B.5070704_at_atmos.washington.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="7072A8F5-B174-4643-BB69-767AD3AE53D5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mixed Mellanox and Qlogic problems<br>
<strong>From:</strong> David Warren (<em>warren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-13 19:46:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16916.php">Yevgeny Kliteynik: "Re: [OMPI users] InfiniBand, different OpenFabrics transport types"</a>
<li><strong>Previous message:</strong> <a href="16914.php">Jeff Squyres: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>In reply to:</strong> <a href="16849.php">Jeff Squyres: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16917.php">Jeff Squyres: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
<li><strong>Reply:</strong> <a href="16917.php">Jeff Squyres: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I finally got access to the systems again (the original ones are part of 
<br>
our real time system). I thought I would try one other test I had set up 
<br>
first.  I went to OFED 1.6 and it started running with no errors. It 
<br>
must have been an OFED bug. Now I just have the speed problem. Anyone 
<br>
have a way to make the mixture of mlx4 and qlogic work together without 
<br>
slowing down?
<br>
<p>On 07/07/11 17:19, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Huh; wonky.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you set the MCA parameter &quot;mpi_abort_delay&quot; to -1 and run your job again? This will prevent all the processes from dying when MPI_ABORT is invoked.  Then attach a debugger to one of the still-live processes after the error message is printed.  Can you send the stack trace?  It would be interesting to know what is going on here -- I can't think of a reason that would happen offhand.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 30, 2011, at 5:03 PM, David Warren wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev2">&gt;&gt; I have a cluster with mostly Mellanox ConnectX hardware and a few with Qlogic QLE7340's. After looking through the web, FAQs etc. I built openmpi-1.5.3 with psm and openib. If I run within the same hardware it is fast and works fine. If I run between without specifying an MTL (e.g. mpirun -np 24 -machinefile dwhosts --byslot --bind-to-core --mca btl ^tcp ...) it dies with
</span><br>
<span class="quotelev2">&gt;&gt; *** The MPI_Init() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n16:9438] Abort before MPI_INIT completed successfully; not able to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        
</span><br>
<span class="quotelev2">&gt;&gt; guarantee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** The MPI_Init() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; I can make it run but giving a bad mtl e.g. -mca mtl psm,none. All the processes run after complaining that mtl none does not exist. However, they run just as slow (about 10% slower than either set alone)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Pertinent info:
</span><br>
<span class="quotelev2">&gt;&gt; On the Qlogic Nodes:
</span><br>
<span class="quotelev2">&gt;&gt; OFED: QLogic-OFED.SLES11-x86_64.1.5.3.0.22
</span><br>
<span class="quotelev2">&gt;&gt; On the Mellanox Nodes:
</span><br>
<span class="quotelev2">&gt;&gt; OFED-1.5.2.1-20101105-0600
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; All:
</span><br>
<span class="quotelev2">&gt;&gt; debian lenny kernel 2.6.32.41
</span><br>
<span class="quotelev2">&gt;&gt; OpenSM
</span><br>
<span class="quotelev2">&gt;&gt; limit | grep memorylocked gives unlimited on all nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Configure line:
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --with-libnuma --with-openib --prefix=/usr/local/openmpi-1.5.3 --with-psm=/usr --enable-btl-openib-failover --enable-openib-connectx-xrc --enable-openib-rdmacm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I thought that with 1.5.3 I am supposed to be able to do this. Am I just wrong? Does anyone see what I am doing wrong?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mellanox_devinfo.gz&gt;&lt;mellanox_ifconfig.gz&gt;&lt;ompi_info_output.gz&gt;&lt;qlogic_devinfo.gz&gt;&lt;qlogic_ifconfig.gz&gt;&lt;warren.vcf&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<p><!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16916.php">Yevgeny Kliteynik: "Re: [OMPI users] InfiniBand, different OpenFabrics transport types"</a>
<li><strong>Previous message:</strong> <a href="16914.php">Jeff Squyres: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>In reply to:</strong> <a href="16849.php">Jeff Squyres: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16917.php">Jeff Squyres: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
<li><strong>Reply:</strong> <a href="16917.php">Jeff Squyres: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
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
