<?
$subject_val = "Re: [OMPI users] OpenMPI MPMD Support";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 29 14:32:34 2016" -->
<!-- isoreceived="20160429183234" -->
<!-- sent="Fri, 29 Apr 2016 18:32:31 +0000" -->
<!-- isosent="20160429183231" -->
<!-- name="Scott Shaw" -->
<!-- email="sshaw_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI MPMD Support" -->
<!-- id="190C59C272C796498BD7424037D878718FCC3455_at_P-EXMB6-DC21.corp.sgi.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="8441E5E7-6B81-428B-B1AB-38AB64ED5A8D_at_open-mpi.org" -->
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
<strong>From:</strong> Scott Shaw (<em>sshaw_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-29 14:32:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29059.php">Palmer, Bruce J: "[OMPI users] MPI Datatypes and RMA"</a>
<li><strong>Previous message:</strong> <a href="29057.php">Ralph Castain: "Re: [OMPI users] OpenMPI MPMD Support"</a>
<li><strong>In reply to:</strong> <a href="29057.php">Ralph Castain: "Re: [OMPI users] OpenMPI MPMD Support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the responses.  I will try 1.10.3rc release and see this addresses the issue.
<br>

<br>

<br>

<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Friday, April 29, 2016 2:30 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] OpenMPI MPMD Support
<br>

<br>
This might be a bug that has been fixed - can you try the 1.10.3rc? If it doesn&#226;&#128;&#153;t work, I&#226;&#128;&#153;ll try to quickly fix it.
<br>

<br>
On Apr 29, 2016, at 10:59 AM, Scott Shaw &lt;sshaw_at_[hidden]&lt;mailto:sshaw_at_[hidden]&gt;&gt; wrote:
<br>

<br>
I am using a &#226;&#128;&#147;app file to run a serial application on N number of compute nodes and each compute node has 24 cores available. If I only want to use one core to execute the serial app I get a &#226;&#128;&#156;not enough slots available&#226;&#128;&#157; error when running OMPI.  How do you define the slots parameter to inform OMPI that a total of 24 cores are available per node when using a app file. I need to contain all parameters in the &#226;&#128;&#147;app file since any additional options passed on the mpirun command line are ignored.
<br>

<br>
io/jobs&gt; mpirun -V
<br>
mpirun (Open MPI) 1.10.2
<br>

<br>
io/jobs&gt; mpirun --app cmd.file
<br>
--------------------------------------------------------------------------
<br>
There are not enough slots available in the system to satisfy the 2 slots
<br>
that were requested by the application:
<br>
&nbsp;&nbsp;uptime
<br>

<br>
Either request fewer slots for your application, or make more slots available
<br>
for use.
<br>
--------------------------------------------------------------------------
<br>

<br>
&nbsp;&nbsp;io/jobs&gt; cat cmd.file
<br>
--host hosta -np 1 convertslice input1 output1
<br>
--host hosta -np 1 convertslice input2 output2
<br>
--host hostb -np 1 convertslice input3 output3
<br>
--host hostb -np 1 convertslice input4 output4
<br>

<br>
Following is the lscpu output from one of the compute nodes showing 24 cores and 24 HTs available.
<br>
io/jobs&gt; lscpu
<br>
Architecture:          x86_64
<br>
CPU op-mode(s):        32-bit, 64-bit
<br>
Byte Order:            Little Endian
<br>
CPU(s):                48
<br>
On-line CPU(s) list:   0-47
<br>
Thread(s) per core:    2
<br>
Core(s) per socket:    12
<br>
Socket(s):             2
<br>
NUMA node(s):          2
<br>
Vendor ID:             GenuineIntel
<br>
CPU family:            6
<br>
Model:                 63
<br>
Stepping:              2
<br>
CPU MHz:               2500.092
<br>
BogoMIPS:              4999.93
<br>
Virtualization:        VT-x
<br>
L1d cache:             32K
<br>
L1i cache:             32K
<br>
L2 cache:              256K
<br>
L3 cache:              30720K
<br>
NUMA node0 CPU(s):     0-11,24-35
<br>
NUMA node1 CPU(s):     12-23,36-47
<br>

<br>
Any guidance would be greatly appreciated.
<br>

<br>
Thanks,
<br>
Scott
<br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/29055.php">http://www.open-mpi.org/community/lists/users/2016/04/29055.php</a>
<br>

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29058/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29059.php">Palmer, Bruce J: "[OMPI users] MPI Datatypes and RMA"</a>
<li><strong>Previous message:</strong> <a href="29057.php">Ralph Castain: "Re: [OMPI users] OpenMPI MPMD Support"</a>
<li><strong>In reply to:</strong> <a href="29057.php">Ralph Castain: "Re: [OMPI users] OpenMPI MPMD Support"</a>
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
