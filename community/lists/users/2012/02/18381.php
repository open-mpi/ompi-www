<?
$subject_val = "Re: [OMPI users] Using physical numbering in a rankfile";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  2 12:30:37 2012" -->
<!-- isoreceived="20120202173037" -->
<!-- sent="Thu, 2 Feb 2012 10:30:28 -0700" -->
<!-- isosent="20120202173028" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using physical numbering in a rankfile" -->
<!-- id="B0A673C4-183C-4253-AFF6-269B0971FA95_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CANQYCiaJJ7c29DuVuyQjO2pBERw5DhOE4=Fux5Yt5ZF0Jm-53g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Using physical numbering in a rankfile<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-02 12:30:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18382.php">Jeff Squyres: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<li><strong>Previous message:</strong> <a href="18380.php">teng ma: "Re: [OMPI users] Using physical numbering in a rankfile"</a>
<li><strong>In reply to:</strong> <a href="18379.php">teng ma: "Re: [OMPI users] Using physical numbering in a rankfile"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, that's not true - the 1.5 series technically still supports assignment to physical cpus. However, it is never really tested and very unusual for someone to use, so I suspect it is broken. I very much doubt anyone will fix it.
<br>
<p>Also, be aware that physical cpu assignments are not supported in the current developer trunk. This will likely be the case when it is released as the 1.7 series and going forward.
<br>
<p><p>On Feb 2, 2012, at 10:17 AM, teng ma wrote:
<br>
<p><span class="quotelev1">&gt; Just remove p in your rankfile like
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rank 0=host1 slot=0:0
</span><br>
<span class="quotelev1">&gt; rank 1=host1 slot=0:2
</span><br>
<span class="quotelev1">&gt; rank 2=host1 slot=0:4
</span><br>
<span class="quotelev1">&gt; rank 3=host1 slot=0:6
</span><br>
<span class="quotelev1">&gt; rank 4=host1 slot=1:1
</span><br>
<span class="quotelev1">&gt; rank 5=host1 slot=1:3
</span><br>
<span class="quotelev1">&gt; rank 6=host1 slot=1:5
</span><br>
<span class="quotelev1">&gt; rank 7=host1 slot=1:7
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Teng
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2012/2/2 Fran&#231;ois Tessier &lt;francois.tessier_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I need to use a rankfile with openMPI 1.5.4 to do some tests on a basic architecture. I'm using a node for which lstopo returns that : 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------
</span><br>
<span class="quotelev1">&gt; Machine (24GB)
</span><br>
<span class="quotelev1">&gt;   NUMANode L#0 (P#0 12GB)
</span><br>
<span class="quotelev1">&gt;     Socket L#0 + L3 L#0 (8192KB)
</span><br>
<span class="quotelev1">&gt;       L2 L#0 (256KB) + L1 L#0 (32KB) + Core L#0 + PU L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;       L2 L#1 (256KB) + L1 L#1 (32KB) + Core L#1 + PU L#1 (P#2)
</span><br>
<span class="quotelev1">&gt;       L2 L#2 (256KB) + L1 L#2 (32KB) + Core L#2 + PU L#2 (P#4)
</span><br>
<span class="quotelev1">&gt;       L2 L#3 (256KB) + L1 L#3 (32KB) + Core L#3 + PU L#3 (P#6)
</span><br>
<span class="quotelev1">&gt;     HostBridge L#0
</span><br>
<span class="quotelev1">&gt;       PCIBridge
</span><br>
<span class="quotelev1">&gt;         PCI 8086:10c9
</span><br>
<span class="quotelev1">&gt;           Net L#0 &quot;eth0&quot;
</span><br>
<span class="quotelev1">&gt;         PCI 8086:10c9
</span><br>
<span class="quotelev1">&gt;           Net L#1 &quot;eth1&quot;
</span><br>
<span class="quotelev1">&gt;       PCIBridge
</span><br>
<span class="quotelev1">&gt;         PCI 15b3:673c
</span><br>
<span class="quotelev1">&gt;           Net L#2 &quot;ib0&quot;
</span><br>
<span class="quotelev1">&gt;           Net L#3 &quot;ib1&quot;
</span><br>
<span class="quotelev1">&gt;           OpenFabrics L#4 &quot;mlx4_0&quot;
</span><br>
<span class="quotelev1">&gt;       PCIBridge
</span><br>
<span class="quotelev1">&gt;         PCI 102b:0522
</span><br>
<span class="quotelev1">&gt;       PCI 8086:3a22
</span><br>
<span class="quotelev1">&gt;         Block L#5 &quot;sda&quot;
</span><br>
<span class="quotelev1">&gt;         Block L#6 &quot;sdb&quot;
</span><br>
<span class="quotelev1">&gt;         Block L#7 &quot;sdc&quot;
</span><br>
<span class="quotelev1">&gt;         Block L#8 &quot;sdd&quot;
</span><br>
<span class="quotelev1">&gt;   NUMANode L#1 (P#1 12GB) + Socket L#1 + L3 L#1 (8192KB)
</span><br>
<span class="quotelev1">&gt;     L2 L#4 (256KB) + L1 L#4 (32KB) + Core L#4 + PU L#4 (P#1)
</span><br>
<span class="quotelev1">&gt;     L2 L#5 (256KB) + L1 L#5 (32KB) + Core L#5 + PU L#5 (P#3)
</span><br>
<span class="quotelev1">&gt;     L2 L#6 (256KB) + L1 L#6 (32KB) + Core L#6 + PU L#6 (P#5)
</span><br>
<span class="quotelev1">&gt;     L2 L#7 (256KB) + L1 L#7 (32KB) + Core L#7 + PU L#7 (P#7)
</span><br>
<span class="quotelev1">&gt; ----------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And I would like to use the physical numbering. To do that, I created a rankfile like this :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rank 0=host1 slot=p0:0
</span><br>
<span class="quotelev1">&gt; rank 1=host1 slot=p0:2
</span><br>
<span class="quotelev1">&gt; rank 2=host1 slot=p0:4
</span><br>
<span class="quotelev1">&gt; rank 3=host1 slot=p0:6
</span><br>
<span class="quotelev1">&gt; rank 4=host1 slot=p1:1
</span><br>
<span class="quotelev1">&gt; rank 5=host1 slot=p1:3
</span><br>
<span class="quotelev1">&gt; rank 6=host1 slot=p1:5
</span><br>
<span class="quotelev1">&gt; rank 7=host1 slot=p1:7
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But when I run my job with &quot;mpiexec -np 8 --rankfile rankfile ./foo&quot;, I encounter this error :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Specified slot list: p0:4
</span><br>
<span class="quotelev1">&gt;     Error: Not found
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     This could mean that a non-existent processor was specified, or
</span><br>
<span class="quotelev1">&gt;     that the specification had improper syntax.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you know what I did wrong?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fran&#231;ois
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ___________________
</span><br>
<span class="quotelev1">&gt; Fran&#231;ois TESSIER
</span><br>
<span class="quotelev1">&gt; PhD Student at University of Bordeaux
</span><br>
<span class="quotelev1">&gt; Tel : 0033.5.24.57.41.52
</span><br>
<span class="quotelev1">&gt; francois.tessier_at_[hidden]
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; | Teng Ma          Univ. of Tennessee |
</span><br>
<span class="quotelev1">&gt; | tma_at_[hidden]        Knoxville, TN |
</span><br>
<span class="quotelev1">&gt; | <a href="http://web.eecs.utk.edu/~tma/">http://web.eecs.utk.edu/~tma/</a>       |
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18381/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18382.php">Jeff Squyres: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<li><strong>Previous message:</strong> <a href="18380.php">teng ma: "Re: [OMPI users] Using physical numbering in a rankfile"</a>
<li><strong>In reply to:</strong> <a href="18379.php">teng ma: "Re: [OMPI users] Using physical numbering in a rankfile"</a>
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
