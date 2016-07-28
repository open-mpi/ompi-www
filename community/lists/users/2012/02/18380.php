<?
$subject_val = "Re: [OMPI users] Using physical numbering in a rankfile";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  2 12:22:59 2012" -->
<!-- isoreceived="20120202172259" -->
<!-- sent="Thu, 2 Feb 2012 12:22:48 -0500" -->
<!-- isosent="20120202172248" -->
<!-- name="teng ma" -->
<!-- email="tma_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using physical numbering in a rankfile" -->
<!-- id="CANQYCiZu7sf713KseT+qApaJBYYtNmMMaKBTthQme-2=njvg8A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> teng ma (<em>tma_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-02 12:22:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18381.php">Ralph Castain: "Re: [OMPI users] Using physical numbering in a rankfile"</a>
<li><strong>Previous message:</strong> <a href="18379.php">teng ma: "Re: [OMPI users] Using physical numbering in a rankfile"</a>
<li><strong>In reply to:</strong> <a href="18379.php">teng ma: "Re: [OMPI users] Using physical numbering in a rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18381.php">Ralph Castain: "Re: [OMPI users] Using physical numbering in a rankfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I made a mistake in the previous reply. You can use two ways here like:
<br>
rank 0=host1 slot=0
<br>
rank 1=host1 slot=2
<br>
rank 2=host1 slot=4
<br>
rank 3=host1 slot=6
<br>
rank 4=host1 slot=1
<br>
rank 5=host1 slot=3
<br>
rank 6=host1 slot=5
<br>
rank 7=host1 slot=7
<br>
<p>or
<br>
<p>rank 0=host1 slot=0:0
<br>
rank 1=host1 slot=0:1
<br>
rank 2=host1 slot=0:2
<br>
rank 3=host1 slot=0:3
<br>
rank 4=host1 slot=1:0
<br>
rank 5=host1 slot=1:1
<br>
rank 6=host1 slot=1:2
<br>
rank 7=host1 slot=1:3
<br>
<p>Teng
<br>
<p><p>On Thu, Feb 2, 2012 at 12:17 PM, teng ma &lt;tma_at_[hidden]&gt; wrote:
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I need to use a rankfile with openMPI 1.5.4 to do some tests on a basic
</span><br>
<span class="quotelev2">&gt;&gt; architecture. I'm using a node for which lstopo returns that :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----------------
</span><br>
<span class="quotelev2">&gt;&gt; Machine (24GB)
</span><br>
<span class="quotelev2">&gt;&gt;   NUMANode L#0 (P#0 12GB)
</span><br>
<span class="quotelev2">&gt;&gt;     Socket L#0 + L3 L#0 (8192KB)
</span><br>
<span class="quotelev2">&gt;&gt;       L2 L#0 (256KB) + L1 L#0 (32KB) + Core L#0 + PU L#0 (P#0)
</span><br>
<span class="quotelev2">&gt;&gt;       L2 L#1 (256KB) + L1 L#1 (32KB) + Core L#1 + PU L#1 (P#2)
</span><br>
<span class="quotelev2">&gt;&gt;       L2 L#2 (256KB) + L1 L#2 (32KB) + Core L#2 + PU L#2 (P#4)
</span><br>
<span class="quotelev2">&gt;&gt;       L2 L#3 (256KB) + L1 L#3 (32KB) + Core L#3 + PU L#3 (P#6)
</span><br>
<span class="quotelev2">&gt;&gt;     HostBridge L#0
</span><br>
<span class="quotelev2">&gt;&gt;       PCIBridge
</span><br>
<span class="quotelev2">&gt;&gt;         PCI 8086:10c9
</span><br>
<span class="quotelev2">&gt;&gt;           Net L#0 &quot;eth0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;         PCI 8086:10c9
</span><br>
<span class="quotelev2">&gt;&gt;           Net L#1 &quot;eth1&quot;
</span><br>
<span class="quotelev2">&gt;&gt;       PCIBridge
</span><br>
<span class="quotelev2">&gt;&gt;         PCI 15b3:673c
</span><br>
<span class="quotelev2">&gt;&gt;           Net L#2 &quot;ib0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           Net L#3 &quot;ib1&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           OpenFabrics L#4 &quot;mlx4_0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;       PCIBridge
</span><br>
<span class="quotelev2">&gt;&gt;         PCI 102b:0522
</span><br>
<span class="quotelev2">&gt;&gt;       PCI 8086:3a22
</span><br>
<span class="quotelev2">&gt;&gt;         Block L#5 &quot;sda&quot;
</span><br>
<span class="quotelev2">&gt;&gt;         Block L#6 &quot;sdb&quot;
</span><br>
<span class="quotelev2">&gt;&gt;         Block L#7 &quot;sdc&quot;
</span><br>
<span class="quotelev2">&gt;&gt;         Block L#8 &quot;sdd&quot;
</span><br>
<span class="quotelev2">&gt;&gt;   NUMANode L#1 (P#1 12GB) + Socket L#1 + L3 L#1 (8192KB)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#4 (256KB) + L1 L#4 (32KB) + Core L#4 + PU L#4 (P#1)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#5 (256KB) + L1 L#5 (32KB) + Core L#5 + PU L#5 (P#3)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#6 (256KB) + L1 L#6 (32KB) + Core L#6 + PU L#6 (P#5)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#7 (256KB) + L1 L#7 (32KB) + Core L#7 + PU L#7 (P#7)
</span><br>
<span class="quotelev2">&gt;&gt; ----------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And I would like to use the physical numbering. To do that, I created a
</span><br>
<span class="quotelev2">&gt;&gt; rankfile like this :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; rank 0=host1 slot=p0:0
</span><br>
<span class="quotelev2">&gt;&gt; rank 1=host1 slot=p0:2
</span><br>
<span class="quotelev2">&gt;&gt; rank 2=host1 slot=p0:4
</span><br>
<span class="quotelev2">&gt;&gt; rank 3=host1 slot=p0:6
</span><br>
<span class="quotelev2">&gt;&gt; rank 4=host1 slot=p1:1
</span><br>
<span class="quotelev2">&gt;&gt; rank 5=host1 slot=p1:3
</span><br>
<span class="quotelev2">&gt;&gt; rank 6=host1 slot=p1:5
</span><br>
<span class="quotelev2">&gt;&gt; rank 7=host1 slot=p1:7
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But when I run my job with &quot;*mpiexec -np 8 --rankfile rankfile ./foo*&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; I encounter this error :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *    Specified slot list: p0:4
</span><br>
<span class="quotelev2">&gt;&gt;     Error: Not found
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     This could mean that a non-existent processor was specified, or
</span><br>
<span class="quotelev2">&gt;&gt;     that the specification had improper syntax.*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do you know what I did wrong?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Fran&#231;ois
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; ___________________
</span><br>
<span class="quotelev2">&gt;&gt; Fran&#231;ois TESSIER
</span><br>
<span class="quotelev2">&gt;&gt; PhD Student at University of Bordeaux
</span><br>
<span class="quotelev2">&gt;&gt; Tel : 0033.5.24.57.41.52francois.tessier_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
| Teng Ma          Univ. of Tennessee |
| tma_at_[hidden]        Knoxville, TN |
| <a href="http://web.eecs.utk.edu/~tma/">http://web.eecs.utk.edu/~tma/</a>       |
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18380/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18381.php">Ralph Castain: "Re: [OMPI users] Using physical numbering in a rankfile"</a>
<li><strong>Previous message:</strong> <a href="18379.php">teng ma: "Re: [OMPI users] Using physical numbering in a rankfile"</a>
<li><strong>In reply to:</strong> <a href="18379.php">teng ma: "Re: [OMPI users] Using physical numbering in a rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18381.php">Ralph Castain: "Re: [OMPI users] Using physical numbering in a rankfile"</a>
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
