<?
$subject_val = "Re: [OMPI users] mpi error?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 11 10:42:22 2010" -->
<!-- isoreceived="20100311154222" -->
<!-- sent="Thu, 11 Mar 2010 16:42:16 +0100" -->
<!-- isosent="20100311154216" -->
<!-- name="Peter Kjellstrom" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi error?" -->
<!-- id="201003111642.16335.cap_at_nsc.liu.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="76aeda4a1003110714m52f27626j9bda18f07e43d3c0_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi error?<br>
<strong>From:</strong> Peter Kjellstrom (<em>cap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-11 10:42:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12324.php">Olivier Riff: "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
<li><strong>Previous message:</strong> <a href="12322.php">Ralph Castain: "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
<li><strong>In reply to:</strong> <a href="12321.php">Matthew MacManes: "[OMPI users] mpi error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12325.php">Matthew MacManes: "Re: [OMPI users] mpi error?"</a>
<li><strong>Reply:</strong> <a href="12325.php">Matthew MacManes: "Re: [OMPI users] mpi error?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thursday 11 March 2010, Matthew MacManes wrote:
<br>
<span class="quotelev1">&gt; Can anybody tell me if this is an error associated with openmpi, versus an
</span><br>
<span class="quotelev1">&gt; issue with the program I am running (MRBAYES,
</span><br>
<span class="quotelev1">&gt; <a href="https://sourceforge.net/projects/mrbayes/">https://sourceforge.net/projects/mrbayes/</a>)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are trying to run a large simulated dataset using 1,000,000 bases
</span><br>
<span class="quotelev1">&gt; divided up into 1000 genes, 5 taxa.. An error is occurring, but we are not
</span><br>
<span class="quotelev1">&gt; sure why. We are using the MPI version of MRBAYES v3.2-cvs on a linux
</span><br>
<span class="quotelev1">&gt; 16core 24GB RAM machine. It does not appear as if the program runs out of
</span><br>
<span class="quotelev1">&gt; memory (max memory usage is 13gb).  Maybe this is an OpenMPI problem and
</span><br>
<span class="quotelev1">&gt; not related to MrBayes...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See snippet of error message below. Can anybody give me any hints about the
</span><br>
<span class="quotelev1">&gt; source of the problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using OPENMPI version 1.4.1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; Defining charset called gene997
</span><br>
<span class="quotelev1">&gt; Defining charset called gene998
</span><br>
<span class="quotelev1">&gt; Defining charset called gene999
</span><br>
<span class="quotelev1">&gt; Defining charset called gene1000
</span><br>
<span class="quotelev1">&gt; Defining partition called Genes
</span><br>
<span class="quotelev1">&gt; [macmanes:02546] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [macmanes:02546] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [macmanes:02546] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [macmanes:02546] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [macmanes:02546] [ 0] /lib/libpthread.so.0 [0x7ffd0f322190]
</span><br>
<span class="quotelev1">&gt; [macmanes:02546] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 13 with PID 2546 on node macmanes exited
</span><br>
<span class="quotelev1">&gt; on signal 11 (Segmentation fault).
</span><br>
<p>On of the ranks got a &quot;Segmentation fault&quot;. This would typically indicate a 
<br>
problem with the app not the MPI. Maybe you ran out of stack space? 
<br>
(ulimit -s).
<br>
<p>Have you tried a different/lower number of ranks?
<br>
<p>/Peter
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12323/signature.asc_">This is a digitally signed message part.</a>
</ul>
<!-- attachment="signature.asc_" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12324.php">Olivier Riff: "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
<li><strong>Previous message:</strong> <a href="12322.php">Ralph Castain: "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
<li><strong>In reply to:</strong> <a href="12321.php">Matthew MacManes: "[OMPI users] mpi error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12325.php">Matthew MacManes: "Re: [OMPI users] mpi error?"</a>
<li><strong>Reply:</strong> <a href="12325.php">Matthew MacManes: "Re: [OMPI users] mpi error?"</a>
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
