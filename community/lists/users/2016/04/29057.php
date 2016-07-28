<?
$subject_val = "Re: [OMPI users] OpenMPI MPMD Support";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 29 14:30:07 2016" -->
<!-- isoreceived="20160429183007" -->
<!-- sent="Fri, 29 Apr 2016 11:30:03 -0700" -->
<!-- isosent="20160429183003" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI MPMD Support" -->
<!-- id="8441E5E7-6B81-428B-B1AB-38AB64ED5A8D_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="190C59C272C796498BD7424037D878718FCC341D_at_P-EXMB6-DC21.corp.sgi.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI MPMD Support<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-29 14:30:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29058.php">Scott Shaw: "Re: [OMPI users] OpenMPI MPMD Support"</a>
<li><strong>Previous message:</strong> <a href="29056.php">Fabricio Cannini: "Re: [OMPI users] OpenMPI MPMD Support"</a>
<li><strong>In reply to:</strong> <a href="29055.php">Scott Shaw: "Re: [OMPI users] OpenMPI MPMD Support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29058.php">Scott Shaw: "Re: [OMPI users] OpenMPI MPMD Support"</a>
<li><strong>Reply:</strong> <a href="29058.php">Scott Shaw: "Re: [OMPI users] OpenMPI MPMD Support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This might be a bug that has been fixed - can you try the 1.10.3rc? If it doesn&#226;&#128;&#153;t work, I&#226;&#128;&#153;ll try to quickly fix it.
<br>
<p><span class="quotelev1">&gt; On Apr 29, 2016, at 10:59 AM, Scott Shaw &lt;sshaw_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using a &#226;&#128;&#147;app file to run a serial application on N number of compute nodes and each compute node has 24 cores available. If I only want to use one core to execute the serial app I get a &#226;&#128;&#156;not enough slots available&#226;&#128;&#157; error when running OMPI.  How do you define the slots parameter to inform OMPI that a total of 24 cores are available per node when using a app file. I need to contain all parameters in the &#226;&#128;&#147;app file since any additional options passed on the mpirun command line are ignored.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; io/jobs&gt; mpirun -V
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.10.2
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; io/jobs&gt; mpirun --app cmd.file
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; There are not enough slots available in the system to satisfy the 2 slots
</span><br>
<span class="quotelev1">&gt; that were requested by the application:
</span><br>
<span class="quotelev1">&gt;   uptime
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Either request fewer slots for your application, or make more slots available
</span><br>
<span class="quotelev1">&gt; for use.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   io/jobs&gt; cat cmd.file
</span><br>
<span class="quotelev1">&gt; --host hosta -np 1 convertslice input1 output1
</span><br>
<span class="quotelev1">&gt; --host hosta -np 1 convertslice input2 output2
</span><br>
<span class="quotelev1">&gt; --host hostb -np 1 convertslice input3 output3
</span><br>
<span class="quotelev1">&gt; --host hostb -np 1 convertslice input4 output4
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Following is the lscpu output from one of the compute nodes showing 24 cores and 24 HTs available.
</span><br>
<span class="quotelev1">&gt; io/jobs&gt; lscpu
</span><br>
<span class="quotelev1">&gt; Architecture:          x86_64
</span><br>
<span class="quotelev1">&gt; CPU op-mode(s):        32-bit, 64-bit
</span><br>
<span class="quotelev1">&gt; Byte Order:            Little Endian
</span><br>
<span class="quotelev1">&gt; CPU(s):                48
</span><br>
<span class="quotelev1">&gt; On-line CPU(s) list:   0-47
</span><br>
<span class="quotelev1">&gt; Thread(s) per core:    2
</span><br>
<span class="quotelev1">&gt; Core(s) per socket:    12
</span><br>
<span class="quotelev1">&gt; Socket(s):             2
</span><br>
<span class="quotelev1">&gt; NUMA node(s):          2
</span><br>
<span class="quotelev1">&gt; Vendor ID:             GenuineIntel
</span><br>
<span class="quotelev1">&gt; CPU family:            6
</span><br>
<span class="quotelev1">&gt; Model:                 63
</span><br>
<span class="quotelev1">&gt; Stepping:              2
</span><br>
<span class="quotelev1">&gt; CPU MHz:               2500.092
</span><br>
<span class="quotelev1">&gt; BogoMIPS:              4999.93
</span><br>
<span class="quotelev1">&gt; Virtualization:        VT-x
</span><br>
<span class="quotelev1">&gt; L1d cache:             32K
</span><br>
<span class="quotelev1">&gt; L1i cache:             32K
</span><br>
<span class="quotelev1">&gt; L2 cache:              256K
</span><br>
<span class="quotelev1">&gt; L3 cache:              30720K
</span><br>
<span class="quotelev1">&gt; NUMA node0 CPU(s):     0-11,24-35
</span><br>
<span class="quotelev1">&gt; NUMA node1 CPU(s):     12-23,36-47
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Any guidance would be greatly appreciated. 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Scott
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/29055.php">http://www.open-mpi.org/community/lists/users/2016/04/29055.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/04/29055.php">http://www.open-mpi.org/community/lists/users/2016/04/29055.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29057/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29058.php">Scott Shaw: "Re: [OMPI users] OpenMPI MPMD Support"</a>
<li><strong>Previous message:</strong> <a href="29056.php">Fabricio Cannini: "Re: [OMPI users] OpenMPI MPMD Support"</a>
<li><strong>In reply to:</strong> <a href="29055.php">Scott Shaw: "Re: [OMPI users] OpenMPI MPMD Support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29058.php">Scott Shaw: "Re: [OMPI users] OpenMPI MPMD Support"</a>
<li><strong>Reply:</strong> <a href="29058.php">Scott Shaw: "Re: [OMPI users] OpenMPI MPMD Support"</a>
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
