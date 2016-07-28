<?
$subject_val = "Re: [OMPI devel] Launcher in trunk is broken?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 10 11:05:56 2011" -->
<!-- isoreceived="20111010150556" -->
<!-- sent="Mon, 10 Oct 2011 09:05:46 -0600" -->
<!-- isosent="20111010150546" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Launcher in trunk is broken?" -->
<!-- id="5AA2A2D3-E043-446C-9E9C-B3CF8CB2A8E4_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5C691E518F345F4882FAB9E9839E60BA0DE8C2AEC7_at_EXCHMB.ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Launcher in trunk is broken?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-10 11:05:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9803.php">George Bosilca: "Re: [OMPI devel] RFC: CRS Module for MTCP Checkpointing Package"</a>
<li><strong>Previous message:</strong> <a href="9801.php">Shamis, Pavel: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<li><strong>In reply to:</strong> <a href="9801.php">Shamis, Pavel: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9804.php">Ralph Castain: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm back from vacation - am building now and will take a look (will be a little while to build).
<br>
<p>On Oct 10, 2011, at 8:33 AM, Shamis, Pavel wrote:
<br>
<p><span class="quotelev1">&gt; + 1 , I see the same issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; On Behalf Of Yevgeny Kliteynik
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Monday, October 10, 2011 10:24 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: OpenMPI Devel
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI devel] Launcher in trunk is broken?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It looks like the process launcher is broken in the OMPI trunk:
</span><br>
<span class="quotelev2">&gt;&gt; If you run any simple test (not necessarily including MPI calls) on 4 or
</span><br>
<span class="quotelev2">&gt;&gt; more nodes, the MPI processes won't be killed after the test finishes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -host host_1,host_2,host_3,host_4 -np 4 --mca btl sm,tcp,self
</span><br>
<span class="quotelev2">&gt;&gt; /bin/hostname
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Output:
</span><br>
<span class="quotelev2">&gt;&gt; host_1
</span><br>
<span class="quotelev2">&gt;&gt; host_2
</span><br>
<span class="quotelev2">&gt;&gt; host_3
</span><br>
<span class="quotelev2">&gt;&gt; host_4
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; And test is hanging......
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have an older trunk (r25228), and everything is OK there.
</span><br>
<span class="quotelev2">&gt;&gt; Not sure if it means that something was broken after that, or the problem
</span><br>
<span class="quotelev2">&gt;&gt; existed before, but kicked in only now due to some other change.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- YK
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; hxxp://www.open-mpi.org/mailman/listinfo.cgi/devel
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9803.php">George Bosilca: "Re: [OMPI devel] RFC: CRS Module for MTCP Checkpointing Package"</a>
<li><strong>Previous message:</strong> <a href="9801.php">Shamis, Pavel: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<li><strong>In reply to:</strong> <a href="9801.php">Shamis, Pavel: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9804.php">Ralph Castain: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
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
