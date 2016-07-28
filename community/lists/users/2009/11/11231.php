<?
$subject_val = "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 18 05:37:50 2009" -->
<!-- isoreceived="20091118103750" -->
<!-- sent="Wed, 18 Nov 2009 11:37:34 +0100" -->
<!-- isosent="20091118103734" -->
<!-- name="Vincent Loechner" -->
<!-- email="loechner_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0" -->
<!-- id="E1NAhuo-0003Lx-PJ_at_gauvain.u-strasbg.fr" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4B03BE2D.9040602_at_cse.ucdavis.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0<br>
<strong>From:</strong> Vincent Loechner (<em>loechner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-18 05:37:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11232.php">Ralph Castain: "Re: [OMPI users] Antw: Re: mpirun not working on more than one	 node"</a>
<li><strong>Previous message:</strong> <a href="11230.php">Nick Holway: "Re: [OMPI users] Segmentation fault whilst running RaXML-MPI"</a>
<li><strong>In reply to:</strong> <a href="11228.php">Bill Broadley: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11233.php">Eugene Loh: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<li><strong>Reply:</strong> <a href="11233.php">Eugene Loh: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bill,
<br>
<p><span class="quotelev1">&gt; A rather stable production code that has worked with various versions of MPI
</span><br>
<span class="quotelev1">&gt; on various architectures started hanging with gcc-4.4.2 and openmpi 1.3.33
</span><br>
<p>Probably this bug :
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/2043">https://svn.open-mpi.org/trac/ompi/ticket/2043</a>
<br>
<p>Waiting for a correction, try adding this option to mpirun :
<br>
-mca btl_sm_num_fifos 5
<br>
<p>--Vincent
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11232.php">Ralph Castain: "Re: [OMPI users] Antw: Re: mpirun not working on more than one	 node"</a>
<li><strong>Previous message:</strong> <a href="11230.php">Nick Holway: "Re: [OMPI users] Segmentation fault whilst running RaXML-MPI"</a>
<li><strong>In reply to:</strong> <a href="11228.php">Bill Broadley: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11233.php">Eugene Loh: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<li><strong>Reply:</strong> <a href="11233.php">Eugene Loh: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
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
