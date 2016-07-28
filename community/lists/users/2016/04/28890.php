<?
$subject_val = "Re: [OMPI users] resolution of MPI_Wtime";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  5 12:31:40 2016" -->
<!-- isoreceived="20160405163140" -->
<!-- sent="Tue, 05 Apr 2016 17:31:38 +0100" -->
<!-- isosent="20160405163138" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] resolution of MPI_Wtime" -->
<!-- id="87fuv010gl.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CC082DBB-C76A-4C9C-B9A8-8211F18F1CB5_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] resolution of MPI_Wtime<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-05 12:31:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28891.php">Nathan Hjelm: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Previous message:</strong> <a href="28889.php">Mark Santcroos: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>In reply to:</strong> <a href="28888.php">Aur&#195;&#169;lien Bouteiller: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28891.php">Nathan Hjelm: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Reply:</strong> <a href="28891.php">Nathan Hjelm: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Reply:</strong> <a href="28892.php">George Bosilca: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Aur&#233;lien Bouteiller &lt;bouteill_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Open MPI uses clock_gettime when it is available, and defaults to
</span><br>
<span class="quotelev1">&gt; gettimeofday only when this better option can't be found. Check that
</span><br>
<span class="quotelev1">&gt; your system has clock_gettime and the resolution of this timer.
</span><br>
<p>That's what I thought after I raised this originally, but where
<br>
(assuming I'm not using these components)?
<br>
<p>&nbsp;&nbsp;openmpi-1.10.2]$ grep -r -l clock_gettime | egrep -v /libevent\|/vt/
<br>
&nbsp;&nbsp;ompi/mca/common/cuda/common_cuda.c
<br>
&nbsp;&nbsp;ompi/mca/btl/scif/btl_scif_get.c
<br>
&nbsp;&nbsp;ompi/mca/btl/scif/btl_scif_send.c
<br>
&nbsp;&nbsp;ompi/mca/btl/scif/btl_scif_put.c
<br>
&nbsp;&nbsp;ompi/mca/btl/scif/btl_scif.h
<br>
<p>This is on RHEL6, but I doubt there's a current distribution without
<br>
clock_gettime.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28891.php">Nathan Hjelm: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Previous message:</strong> <a href="28889.php">Mark Santcroos: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>In reply to:</strong> <a href="28888.php">Aur&#195;&#169;lien Bouteiller: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28891.php">Nathan Hjelm: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Reply:</strong> <a href="28891.php">Nathan Hjelm: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Reply:</strong> <a href="28892.php">George Bosilca: "Re: [OMPI users] resolution of MPI_Wtime"</a>
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
