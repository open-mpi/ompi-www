<?
$subject_val = "Re: [OMPI users] CUDA RDMA not selected by default";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 19 16:25:08 2012" -->
<!-- isoreceived="20120319202508" -->
<!-- sent="Mon, 19 Mar 2012 16:22:02 -0400" -->
<!-- isosent="20120319202202" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CUDA RDMA not selected by default" -->
<!-- id="420C8FCE-A4A5-4C50-BE04-53D0024BBE44_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.OSX.2.00.1203191414240.81297_at_panthera.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] CUDA RDMA not selected by default<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-19 16:22:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18803.php">Rodrigo Oliveira: "[OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>Previous message:</strong> <a href="18801.php">Nathan Hjelm: "Re: [OMPI users] CUDA RDMA not selected by default"</a>
<li><strong>In reply to:</strong> <a href="18801.php">Nathan Hjelm: "Re: [OMPI users] CUDA RDMA not selected by default"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1
<br>
<p>See the description of cm vs. ob1 in the OMPI README.  Here's the latest description (I think we recently added a little more description here):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/README#L421">https://svn.open-mpi.org/trac/ompi/browser/trunk/README#L421</a>
<br>
<p>The PSM MTL does not have CUDA support; the smcuda BTL is for ob1 only.
<br>
<p><p>On Mar 19, 2012, at 4:15 PM, Nathan Hjelm wrote:
<br>
<p><span class="quotelev1">&gt; The selection of cm is not wrong per se. You will find that the psm mtl is much better than the openib btl for QLogic harware.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, 19 Mar 2012, Jens Glaser wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am using the latest trunk version of OMPI, in order to take advantage of the new CUDA RDMA features (smcuda BTL). RDMA support is superb, however, I have to give a manual parameter
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca pml ob1 ...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; to have the OB1 upper layer selected and, consequently, to get smcuda activated. Otherwise mpirun chooses the cm upper layer, which is wrong. The hardware is a
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; InfiniBand: QLogic Corp. IBA7322 QDR InfiniBand HCA (rev 02).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is the output of
</span><br>
<span class="quotelev2">&gt;&gt; mpirun - mca pml_base_verbose 100
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [cas002:05518] select: component cm selected
</span><br>
<span class="quotelev2">&gt;&gt; [cas002:05518] mca: base: close: component v closed
</span><br>
<span class="quotelev2">&gt;&gt; [cas002:05518] mca: base: close: unloading component v
</span><br>
<span class="quotelev2">&gt;&gt; [cas002:05518] mca: base: close: component bfo closed
</span><br>
<span class="quotelev2">&gt;&gt; [cas002:05518] mca: base: close: unloading component bfo
</span><br>
<span class="quotelev2">&gt;&gt; [cas002:05518] mca: base: close: component csum closed
</span><br>
<span class="quotelev2">&gt;&gt; [cas002:05518] mca: base: close: unloading component csum
</span><br>
<span class="quotelev2">&gt;&gt; [cas002:05518] mca: base: close: component dr closed
</span><br>
<span class="quotelev2">&gt;&gt; [cas002:05518] mca: base: close: unloading component dr
</span><br>
<span class="quotelev2">&gt;&gt; [cas002:05518] mca: base: close: component ob1 closed
</span><br>
<span class="quotelev2">&gt;&gt; [cas002:05518] mca: base: close: unloading component ob1
</span><br>
<span class="quotelev2">&gt;&gt; [cas002:05520] mca: base: components_open: component cm open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [cas002:05520] mca: base: components_open: found loaded component csum
</span><br>
<span class="quotelev2">&gt;&gt; [cas002:05520] mca: base: components_open: component csum has no register function
</span><br>
<span class="quotelev2">&gt;&gt; [cas002:05520] mca: base: components_open: component csum open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [cas002:05520] mca: base: components_open: found loaded component dr
</span><br>
<span class="quotelev2">&gt;&gt; [cas002:05520] mca: base: components_open: component dr has no register function
</span><br>
<span class="quotelev2">&gt;&gt; [cas002:05520] mca: base: components_open: component dr open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [cas002:05520] mca: base: components_open: found loaded component ob1
</span><br>
<span class="quotelev2">&gt;&gt; [cas002:05520] mca: base: components_open: component ob1 has no register function
</span><br>
<span class="quotelev2">&gt;&gt; [cas002:05520] mca: base: components_open: component ob1 open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [cas002:05520] select: component v not in the include list
</span><br>
<span class="quotelev2">&gt;&gt; [cas002:05520] select: component bfo not in the include list
</span><br>
<span class="quotelev2">&gt;&gt; [cas002:05520] select: initializing pml component cm
</span><br>
<span class="quotelev2">&gt;&gt; [cas002:05520] select: init returned priority 30
</span><br>
<span class="quotelev2">&gt;&gt; [cas002:05520] select: component csum not in the include list
</span><br>
<span class="quotelev2">&gt;&gt; [cas002:05520] select: component dr not in the include list
</span><br>
<span class="quotelev2">&gt;&gt; [cas002:05520] select: initializing pml component ob1
</span><br>
<span class="quotelev2">&gt;&gt; [cas002:05520] select: init returned failure for component ob1
</span><br>
<span class="quotelev2">&gt;&gt; [cas002:05520] selected cm best priority 30
</span><br>
<span class="quotelev2">&gt;&gt; [cas002:05520] select: component cm selected
</span><br>
<span class="quotelev2">&gt;&gt; [cas002:05520] mca: base: close: component v closed
</span><br>
<span class="quotelev2">&gt;&gt; [cas002:05520] mca: base: close: unloading component v
</span><br>
<span class="quotelev2">&gt;&gt; [cas002:05520] mca: base: close: component bfo closed
</span><br>
<span class="quotelev2">&gt;&gt; [cas002:05520] mca: base: close: unloading component bfo
</span><br>
<span class="quotelev2">&gt;&gt; [cas002:05520] mca: base: close: component csum closed
</span><br>
<span class="quotelev2">&gt;&gt; [cas002:05520] mca: base: close: unloading component csum
</span><br>
<span class="quotelev2">&gt;&gt; [cas002:05520] mca: base: close: component dr closed
</span><br>
<span class="quotelev2">&gt;&gt; [cas002:05520] mca: base: close: unloading component dr
</span><br>
<span class="quotelev2">&gt;&gt; [cas002:05520] mca: base: close: component ob1 closed
</span><br>
<span class="quotelev2">&gt;&gt; [cas002:05520] mca: base: close: unloading component ob1
</span><br>
<span class="quotelev2">&gt;&gt; [cas002:05518] check:select: checking my pml cm against rank=0 pml cm
</span><br>
<span class="quotelev2">&gt;&gt; [cas002:05517] check:select: rank=0
</span><br>
<span class="quotelev2">&gt;&gt; [cas002:05520] check:select: checking my pml cm against rank=0 pml cm
</span><br>
<span class="quotelev2">&gt;&gt; [cas002:05519] check:select: checking my pml cm against rank=0 pml cm
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Configure options:
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --with-openib --with-cuda --prefix=/home/it1/glaser/local --with-tm=/opt/torque --enable-shared
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Does anyone have any idea what causes openmpi to select cm by default?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Jens.
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18803.php">Rodrigo Oliveira: "[OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>Previous message:</strong> <a href="18801.php">Nathan Hjelm: "Re: [OMPI users] CUDA RDMA not selected by default"</a>
<li><strong>In reply to:</strong> <a href="18801.php">Nathan Hjelm: "Re: [OMPI users] CUDA RDMA not selected by default"</a>
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
