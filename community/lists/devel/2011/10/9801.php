<?
$subject_val = "Re: [OMPI devel] Launcher in trunk is broken?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 10 10:33:12 2011" -->
<!-- isoreceived="20111010143312" -->
<!-- sent="Mon, 10 Oct 2011 10:33:07 -0400" -->
<!-- isosent="20111010143307" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Launcher in trunk is broken?" -->
<!-- id="5C691E518F345F4882FAB9E9839E60BA0DE8C2AEC7_at_EXCHMB.ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E92FFE6.1020001_at_dev.mellanox.co.il" -->
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
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-10 10:33:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9802.php">Ralph Castain: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<li><strong>Previous message:</strong> <a href="9800.php">Yevgeny Kliteynik: "[OMPI devel] Launcher in trunk is broken?"</a>
<li><strong>In reply to:</strong> <a href="9800.php">Yevgeny Kliteynik: "[OMPI devel] Launcher in trunk is broken?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9802.php">Ralph Castain: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<li><strong>Reply:</strong> <a href="9802.php">Ralph Castain: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<li><strong>Reply:</strong> <a href="9804.php">Ralph Castain: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+ 1 , I see the same issue.
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; On Behalf Of Yevgeny Kliteynik
</span><br>
<span class="quotelev1">&gt; Sent: Monday, October 10, 2011 10:24 AM
</span><br>
<span class="quotelev1">&gt; To: OpenMPI Devel
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] Launcher in trunk is broken?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It looks like the process launcher is broken in the OMPI trunk:
</span><br>
<span class="quotelev1">&gt; If you run any simple test (not necessarily including MPI calls) on 4 or
</span><br>
<span class="quotelev1">&gt; more nodes, the MPI processes won't be killed after the test finishes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -host host_1,host_2,host_3,host_4 -np 4 --mca btl sm,tcp,self
</span><br>
<span class="quotelev1">&gt; /bin/hostname
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Output:
</span><br>
<span class="quotelev1">&gt; host_1
</span><br>
<span class="quotelev1">&gt; host_2
</span><br>
<span class="quotelev1">&gt; host_3
</span><br>
<span class="quotelev1">&gt; host_4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And test is hanging......
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have an older trunk (r25228), and everything is OK there.
</span><br>
<span class="quotelev1">&gt; Not sure if it means that something was broken after that, or the problem
</span><br>
<span class="quotelev1">&gt; existed before, but kicked in only now due to some other change.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- YK
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; hxxp://www.open-mpi.org/mailman/listinfo.cgi/devel
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9802.php">Ralph Castain: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<li><strong>Previous message:</strong> <a href="9800.php">Yevgeny Kliteynik: "[OMPI devel] Launcher in trunk is broken?"</a>
<li><strong>In reply to:</strong> <a href="9800.php">Yevgeny Kliteynik: "[OMPI devel] Launcher in trunk is broken?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9802.php">Ralph Castain: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<li><strong>Reply:</strong> <a href="9802.php">Ralph Castain: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<li><strong>Reply:</strong> <a href="9804.php">Ralph Castain: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
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
