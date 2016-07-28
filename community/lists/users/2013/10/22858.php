<?
$subject_val = "Re: [OMPI users] [EXTERNAL]  RDMA question";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 28 11:36:55 2013" -->
<!-- isoreceived="20131028153655" -->
<!-- sent="Mon, 28 Oct 2013 15:36:41 +0000" -->
<!-- isosent="20131028153641" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL]  RDMA question" -->
<!-- id="CE93DF39.1494C%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="526E4911.1030400_at_mpimet.mpg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL]  RDMA question<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-28 11:36:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22859.php">San B: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="22857.php">Reuti: "Re: [OMPI users] MPI SGE and IB don't work together"</a>
<li><strong>In reply to:</strong> <a href="22852.php">Luis Kornblueh: "[OMPI users] RDMA question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/28/13 5:22 AM, &quot;Luis Kornblueh&quot; &lt;luis.kornblueh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;My question would be to all openmpi power users and developers, what
</span><br>
<span class="quotelev1">&gt;would be required to get this properly running.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;In case it is required to give more information, please come back to me.
</span><br>
<span class="quotelev1">&gt;Maybe the explanation what we do is insufficient.
</span><br>
<p>Open MPI 1.6 (and 1.7) has a very basic, non-RDMA based one-sided
<br>
implementation.  If you're using InfiniBand and your gets are contiguous,
<br>
you can try adding &quot;-mca osc_rdma_use_rdma 1&quot; to the mpirun command line.
<br>
<p>Brian
<br>
<p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22859.php">San B: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="22857.php">Reuti: "Re: [OMPI users] MPI SGE and IB don't work together"</a>
<li><strong>In reply to:</strong> <a href="22852.php">Luis Kornblueh: "[OMPI users] RDMA question"</a>
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
