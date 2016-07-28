<?
$subject_val = "Re: [OMPI users] OpenMPI MPMD Support";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 29 13:59:35 2016" -->
<!-- isoreceived="20160429175935" -->
<!-- sent="Fri, 29 Apr 2016 17:59:33 +0000" -->
<!-- isosent="20160429175933" -->
<!-- name="Scott Shaw" -->
<!-- email="sshaw_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI MPMD Support" -->
<!-- id="190C59C272C796498BD7424037D878718FCC341D_at_P-EXMB6-DC21.corp.sgi.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] OpenMPI MPMD Support" -->
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
<strong>Date:</strong> 2016-04-29 13:59:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29056.php">Fabricio Cannini: "Re: [OMPI users] OpenMPI MPMD Support"</a>
<li><strong>Previous message:</strong> <a href="29054.php">Siegmar Gross: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29056.php">Fabricio Cannini: "Re: [OMPI users] OpenMPI MPMD Support"</a>
<li><strong>Reply:</strong> <a href="29056.php">Fabricio Cannini: "Re: [OMPI users] OpenMPI MPMD Support"</a>
<li><strong>Reply:</strong> <a href="29057.php">Ralph Castain: "Re: [OMPI users] OpenMPI MPMD Support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am using a -app file to run a serial application on N number of compute nodes and each compute node has 24 cores available. If I only want to use one core to execute the serial app I get a &quot;not enough slots available&quot; error when running OMPI.  How do you define the slots parameter to inform OMPI that a total of 24 cores are available per node when using a app file. I need to contain all parameters in the -app file since any additional options passed on the mpirun command line are ignored.
<br>
<p>io/jobs&gt; mpirun -V
<br>
mpirun (Open MPI) 1.10.2
<br>
<p>io/jobs&gt; mpirun --app cmd.file
<br>
--------------------------------------------------------------------------
<br>
There are not enough slots available in the system to satisfy the 2 slots
<br>
that were requested by the application:
<br>
&nbsp;&nbsp;uptime
<br>
<p>Either request fewer slots for your application, or make more slots available
<br>
for use.
<br>
--------------------------------------------------------------------------
<br>
<p>&nbsp;&nbsp;io/jobs&gt; cat cmd.file
<br>
--host hosta -np 1 convertslice input1 output1
<br>
--host hosta -np 1 convertslice input2 output2
<br>
--host hostb -np 1 convertslice input3 output3
<br>
--host hostb -np 1 convertslice input4 output4
<br>
<p>Following is the lscpu output from one of the compute nodes showing 24 cores and 24 HTs available.
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
<p>Any guidance would be greatly appreciated.
<br>
<p>Thanks,
<br>
Scott
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29055/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29056.php">Fabricio Cannini: "Re: [OMPI users] OpenMPI MPMD Support"</a>
<li><strong>Previous message:</strong> <a href="29054.php">Siegmar Gross: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29056.php">Fabricio Cannini: "Re: [OMPI users] OpenMPI MPMD Support"</a>
<li><strong>Reply:</strong> <a href="29056.php">Fabricio Cannini: "Re: [OMPI users] OpenMPI MPMD Support"</a>
<li><strong>Reply:</strong> <a href="29057.php">Ralph Castain: "Re: [OMPI users] OpenMPI MPMD Support"</a>
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
