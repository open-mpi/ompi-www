<?
$subject_val = "[OMPI users] CUDA RDMA not selected by default";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 19 16:10:38 2012" -->
<!-- isoreceived="20120319201038" -->
<!-- sent="Mon, 19 Mar 2012 15:10:32 -0500" -->
<!-- isosent="20120319201032" -->
<!-- name="Jens Glaser" -->
<!-- email="jglaser_at_[hidden]" -->
<!-- subject="[OMPI users] CUDA RDMA not selected by default" -->
<!-- id="362BCC5D-CCAB-4540-9504-99BFFD8843F2_at_umn.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] CUDA RDMA not selected by default<br>
<strong>From:</strong> Jens Glaser (<em>jglaser_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-19 16:10:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18801.php">Nathan Hjelm: "Re: [OMPI users] CUDA RDMA not selected by default"</a>
<li><strong>Previous message:</strong> <a href="18799.php">Toufik: "[OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18801.php">Nathan Hjelm: "Re: [OMPI users] CUDA RDMA not selected by default"</a>
<li><strong>Reply:</strong> <a href="18801.php">Nathan Hjelm: "Re: [OMPI users] CUDA RDMA not selected by default"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am using the latest trunk version of OMPI, in order to take advantage of the new CUDA RDMA features (smcuda BTL). RDMA support is superb, however, I have to give a manual parameter
<br>
<p>mpirun --mca pml ob1 ...
<br>
<p>to have the OB1 upper layer selected and, consequently, to get smcuda activated. Otherwise mpirun chooses the cm upper layer, which is wrong. The hardware is a
<br>
<p>InfiniBand: QLogic Corp. IBA7322 QDR InfiniBand HCA (rev 02).
<br>
<p>This is the output of 
<br>
mpirun - mca pml_base_verbose 100
<br>
<p>[cas002:05518] select: component cm selected
<br>
[cas002:05518] mca: base: close: component v closed
<br>
[cas002:05518] mca: base: close: unloading component v
<br>
[cas002:05518] mca: base: close: component bfo closed
<br>
[cas002:05518] mca: base: close: unloading component bfo
<br>
[cas002:05518] mca: base: close: component csum closed
<br>
[cas002:05518] mca: base: close: unloading component csum
<br>
[cas002:05518] mca: base: close: component dr closed
<br>
[cas002:05518] mca: base: close: unloading component dr
<br>
[cas002:05518] mca: base: close: component ob1 closed
<br>
[cas002:05518] mca: base: close: unloading component ob1
<br>
[cas002:05520] mca: base: components_open: component cm open function successful
<br>
[cas002:05520] mca: base: components_open: found loaded component csum
<br>
[cas002:05520] mca: base: components_open: component csum has no register function
<br>
[cas002:05520] mca: base: components_open: component csum open function successful
<br>
[cas002:05520] mca: base: components_open: found loaded component dr
<br>
[cas002:05520] mca: base: components_open: component dr has no register function
<br>
[cas002:05520] mca: base: components_open: component dr open function successful
<br>
[cas002:05520] mca: base: components_open: found loaded component ob1
<br>
[cas002:05520] mca: base: components_open: component ob1 has no register function
<br>
[cas002:05520] mca: base: components_open: component ob1 open function successful
<br>
[cas002:05520] select: component v not in the include list
<br>
[cas002:05520] select: component bfo not in the include list
<br>
[cas002:05520] select: initializing pml component cm
<br>
[cas002:05520] select: init returned priority 30
<br>
[cas002:05520] select: component csum not in the include list
<br>
[cas002:05520] select: component dr not in the include list
<br>
[cas002:05520] select: initializing pml component ob1
<br>
[cas002:05520] select: init returned failure for component ob1
<br>
[cas002:05520] selected cm best priority 30
<br>
[cas002:05520] select: component cm selected
<br>
[cas002:05520] mca: base: close: component v closed
<br>
[cas002:05520] mca: base: close: unloading component v
<br>
[cas002:05520] mca: base: close: component bfo closed
<br>
[cas002:05520] mca: base: close: unloading component bfo
<br>
[cas002:05520] mca: base: close: component csum closed
<br>
[cas002:05520] mca: base: close: unloading component csum
<br>
[cas002:05520] mca: base: close: component dr closed
<br>
[cas002:05520] mca: base: close: unloading component dr
<br>
[cas002:05520] mca: base: close: component ob1 closed
<br>
[cas002:05520] mca: base: close: unloading component ob1
<br>
[cas002:05518] check:select: checking my pml cm against rank=0 pml cm
<br>
[cas002:05517] check:select: rank=0
<br>
[cas002:05520] check:select: checking my pml cm against rank=0 pml cm
<br>
[cas002:05519] check:select: checking my pml cm against rank=0 pml cm
<br>
<p>Configure options:
<br>
./configure --with-openib --with-cuda --prefix=/home/it1/glaser/local --with-tm=/opt/torque --enable-shared
<br>
<p>Does anyone have any idea what causes openmpi to select cm by default?
<br>
<p>Thanks,
<br>
Jens.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18801.php">Nathan Hjelm: "Re: [OMPI users] CUDA RDMA not selected by default"</a>
<li><strong>Previous message:</strong> <a href="18799.php">Toufik: "[OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18801.php">Nathan Hjelm: "Re: [OMPI users] CUDA RDMA not selected by default"</a>
<li><strong>Reply:</strong> <a href="18801.php">Nathan Hjelm: "Re: [OMPI users] CUDA RDMA not selected by default"</a>
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
