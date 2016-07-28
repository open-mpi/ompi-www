<?
$subject_val = "Re: [OMPI users] Question about OpenMPI performance vs. MVAPICH2";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 20 11:48:35 2009" -->
<!-- isoreceived="20090920154835" -->
<!-- sent="Sun, 20 Sep 2009 17:50:23 +0200" -->
<!-- isosent="20090920155023" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about OpenMPI performance vs. MVAPICH2" -->
<!-- id="4AB64F3F.2040802_at_59A2.org" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="24224559-0B8E-4BCD-B0A3-250CB93D7F50_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about OpenMPI performance vs. MVAPICH2<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-20 11:50:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10702.php">Ralph Castain: "Re: [OMPI users] Question about OpenMPI performance vs. MVAPICH2"</a>
<li><strong>Previous message:</strong> <a href="10700.php">Sangamesh B: "[OMPI users] Job fails after hours of running on a specific node"</a>
<li><strong>In reply to:</strong> <a href="10699.php">Brian Powell: "[OMPI users] Question about OpenMPI performance vs. MVAPICH2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10703.php">Ralph Castain: "Re: [OMPI users] Question about OpenMPI performance vs. MVAPICH2"</a>
<li><strong>Reply:</strong> <a href="10703.php">Ralph Castain: "Re: [OMPI users] Question about OpenMPI performance vs. MVAPICH2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian Powell wrote:
<br>
<span class="quotelev1">&gt; I ran a final test which I find very strange: I ran the same test case
</span><br>
<span class="quotelev1">&gt; on 1 cpu. The MVAPICH2 case was 23% faster!?!? This makes little sense
</span><br>
<span class="quotelev1">&gt; to me. Both are using ifort as the mpif90 compiler using *identical*
</span><br>
<span class="quotelev1">&gt; optimization flags, etc. I don't understand how the results could be
</span><br>
<span class="quotelev1">&gt; different.
</span><br>
<p>Are you saying the output of mpicc/mpif90 -show has the same
<br>
optimization flags?  MPICH2 usually puts it's own optimization flags
<br>
into the wrappers.
<br>
<p>Jed
<br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10701/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10702.php">Ralph Castain: "Re: [OMPI users] Question about OpenMPI performance vs. MVAPICH2"</a>
<li><strong>Previous message:</strong> <a href="10700.php">Sangamesh B: "[OMPI users] Job fails after hours of running on a specific node"</a>
<li><strong>In reply to:</strong> <a href="10699.php">Brian Powell: "[OMPI users] Question about OpenMPI performance vs. MVAPICH2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10703.php">Ralph Castain: "Re: [OMPI users] Question about OpenMPI performance vs. MVAPICH2"</a>
<li><strong>Reply:</strong> <a href="10703.php">Ralph Castain: "Re: [OMPI users] Question about OpenMPI performance vs. MVAPICH2"</a>
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
