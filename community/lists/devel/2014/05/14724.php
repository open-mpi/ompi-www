<?
$subject_val = "Re: [OMPI devel] scif btl side effects";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  7 15:21:08 2014" -->
<!-- isoreceived="20140507192108" -->
<!-- sent="Wed, 7 May 2014 19:21:06 +0000" -->
<!-- isosent="20140507192106" -->
<!-- name="Hjelm, Nathan T" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] scif btl side effects" -->
<!-- id="AE45F2F55FE69B4F99BB3455E821D7153A8AF7EC_at_ECS-EXG-P-MB07.win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="536A17B4.4070904_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] scif btl side effects<br>
<strong>From:</strong> Hjelm, Nathan T (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-07 15:21:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14725.php">Artem Polyakov: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Previous message:</strong> <a href="14723.php">Rolf vandeVaart: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="14699.php">Gilles Gouaillardet: "[OMPI devel] scif btl side effects"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14770.php">Gilles Gouaillardet: "Re: [OMPI devel] scif btl side effects"</a>
<li><strong>Reply:</strong> <a href="14770.php">Gilles Gouaillardet: "Re: [OMPI devel] scif btl side effects"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wednesday, May 07, 2014 5:23 AM, devel [devel-bounces_at_[hidden]] on behalf of Gilles Gouaillardet [gilles.gouaillardet_at_[hidden]] wrote:
<br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] scif btl side effects
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dear OpenMPI Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i noticed some crashes when running OpenMPI (both latest v1.8 and trunk
</span><br>
<span class="quotelev1">&gt; from svn) on a single linux system where a MIC is available.
</span><br>
<span class="quotelev1">&gt; /* strictly speaking, MIC hardware is not needed: libscif.so, mic kernel
</span><br>
<span class="quotelev1">&gt; module and accessible /dev/mic/* are enough */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the attached test_scif program can be used in order to evidence this issue.
</span><br>
<span class="quotelev1">&gt; /* this is an over simplified version of collective/bcast_struct.c from
</span><br>
<span class="quotelev1">&gt; the ibm test suite,
</span><br>
<span class="quotelev1">&gt; it is currently failing on the bend-rsh cluster at intel */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; this program will cause a silent failure
</span><br>
<span class="quotelev1">&gt; (MPI_Recv receives truncated data without issuing any warning)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i ran a few investigations and basically, here is what i found :
</span><br>
<span class="quotelev1">&gt; MPI_Send will split the message into two fragments. the first fragment
</span><br>
<span class="quotelev1">&gt; is sent via the vader btl
</span><br>
<span class="quotelev1">&gt; and the second fragment is sent with the scif btl.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the program will success if the scif btl is disabled (mpirun --mca btl
</span><br>
<span class="quotelev1">&gt; ^scif)
</span><br>
<span class="quotelev1">&gt; interestingly, i found that
</span><br>
<span class="quotelev1">&gt; mpirun -host localhost -np 2 --mca btl scif,self ./test_scif
</span><br>
<span class="quotelev1">&gt; does produce correct results with ompi v1.8 r31309 (a crash might happen
</span><br>
<span class="quotelev1">&gt; in MPI_Finalize)
</span><br>
<span class="quotelev1">&gt; and it procuce incorrect results with ompi v1.8 r31671 and trunk (r31667)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; imho :
</span><br>
<span class="quotelev1">&gt; a) the scif btl could/should be automatically disabled if no MIC is
</span><br>
<span class="quotelev1">&gt; detected on a host
</span><br>
<p>Nope.
<br>
<p><span class="quotelev1">&gt; b) the scif btl could/should not be used to communicates between two
</span><br>
<span class="quotelev1">&gt; cores of the host
</span><br>
<p>Also, no. SCIF can give excellent performance for host-host communications as it provides an xpmem-like interface to sharing pages. I have not seen any issues when running just the scif btl on its own so I suspect the issue must be elsewhere.
<br>
<p><span class="quotelev1">&gt; (e.g. it should be used *only* when at least one peer is on the MIC)
</span><br>
<span class="quotelev1">&gt; c) that being said, that should work so there is a bug
</span><br>
<span class="quotelev1">&gt; d) there is a regression in v1.8 and a bug that might have been always here
</span><br>
<p>This is probably not a regression. The SCIF btl has been part of the 1.7 series for some time. The nightly MTTs are probably missing one of the cases that causes this problem. Hopefully we can get this fixed before 1.8.2.
<br>
<p>-Nathan<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14725.php">Artem Polyakov: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Previous message:</strong> <a href="14723.php">Rolf vandeVaart: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="14699.php">Gilles Gouaillardet: "[OMPI devel] scif btl side effects"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14770.php">Gilles Gouaillardet: "Re: [OMPI devel] scif btl side effects"</a>
<li><strong>Reply:</strong> <a href="14770.php">Gilles Gouaillardet: "Re: [OMPI devel] scif btl side effects"</a>
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
