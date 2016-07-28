<?
$subject_val = "Re: [OMPI users] openmpi credits for eager messages";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  4 12:30:46 2008" -->
<!-- isoreceived="20080204173046" -->
<!-- sent="Mon, 4 Feb 2008 10:24:11 -0700" -->
<!-- isosent="20080204172411" -->
<!-- name="Ron Brightwell" -->
<!-- email="rbbrigh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi credits for eager messages" -->
<!-- id="20080204172411.GA20614_at_ratbert.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF467D467D.25326148-ON852573E5.004D0296-852573E5.004DB4C5_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi credits for eager messages<br>
<strong>From:</strong> Ron Brightwell (<em>rbbrigh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-04 12:24:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4959.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4957.php">Number Cruncher: "Re: [OMPI users] overlapping memcpy in	ompi_coll_tuned_allgather_intra_bruck"</a>
<li><strong>In reply to:</strong> <a href="4954.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4959.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4959.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Is what George says accurate? If so, it sounds to me like OpenMPI
</span><br>
<span class="quotelev1">&gt; does not comply with the MPI standard on the behavior of eager
</span><br>
<span class="quotelev1">&gt; protocol. MPICH is getting dinged in this discussion because they
</span><br>
<span class="quotelev1">&gt; have complied with the requirements of the MPI standard. IBM MPI
</span><br>
<span class="quotelev1">&gt; also complies with the standard.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If there is any debate about whether the MPI standard does (or
</span><br>
<span class="quotelev1">&gt; should) require the behavior I describe below then we should move
</span><br>
<span class="quotelev1">&gt; the discussion to the MPI 2.1 Forum and get a clarification.
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<p>The MPI Standard also says the following about resource limitations:
<br>
<p>&nbsp;&nbsp;Any pending communication operation consumes system resources that are
<br>
&nbsp;&nbsp;limited. Errors may occur when lack of resources prevent the execution
<br>
&nbsp;&nbsp;of an MPI call. A quality implementation will use a (small) fixed amount
<br>
&nbsp;&nbsp;of resources for each pending send in the ready or synchronous mode and
<br>
&nbsp;&nbsp;for each pending receive. However, buffer space may be consumed to store
<br>
&nbsp;&nbsp;messages sent in standard mode, and must be consumed to store messages
<br>
&nbsp;&nbsp;sent in buffered mode, when no matching receive is available. The amount
<br>
&nbsp;&nbsp;of space available for buffering will be much smaller than program data
<br>
&nbsp;&nbsp;memory on many systems. Then, it will be easy to write programs that
<br>
&nbsp;&nbsp;overrun available buffer space.
<br>
<p>Since I work on MPI implementations that are expected to allow applications
<br>
to scale to tens of thousands of processes, I don't want the overhead of
<br>
a user-level flow control protocol that penalizes scalable applications in
<br>
favor of non-scalable ones.  I also don't want an MPI implementation that
<br>
hides such non-scalable application behavior, but rather exposes it at lower
<br>
processor counts -- preferably in a way that makes the application developer
<br>
aware of the resources requirements of their code and allows them to make
<br>
the appropriate choice regarding the structure of their code, the underlying
<br>
protocols, and the amount of buffer resources.
<br>
<p>But I work in a place where codes are expected to scale and not just work.
<br>
Most of the vendors aren't allowed to have this perspective....
<br>
<p>-Ron
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4959.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4957.php">Number Cruncher: "Re: [OMPI users] overlapping memcpy in	ompi_coll_tuned_allgather_intra_bruck"</a>
<li><strong>In reply to:</strong> <a href="4954.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4959.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4959.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
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
