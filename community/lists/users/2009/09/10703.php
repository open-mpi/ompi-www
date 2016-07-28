<?
$subject_val = "Re: [OMPI users] Question about OpenMPI performance vs. MVAPICH2";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 20 12:06:47 2009" -->
<!-- isoreceived="20090920160647" -->
<!-- sent="Sun, 20 Sep 2009 10:06:38 -0600" -->
<!-- isosent="20090920160638" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about OpenMPI performance vs. MVAPICH2" -->
<!-- id="AA5AD465-9A1E-475B-99D7-9044AA1CF9D1_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4AB64F3F.2040802_at_59A2.org" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-20 12:06:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10704.php">Brian Powell: "Re: [OMPI users] Question about OpenMPI performance vs. MVAPICH2"</a>
<li><strong>Previous message:</strong> <a href="10702.php">Ralph Castain: "Re: [OMPI users] Question about OpenMPI performance vs. MVAPICH2"</a>
<li><strong>In reply to:</strong> <a href="10701.php">Jed Brown: "Re: [OMPI users] Question about OpenMPI performance vs. MVAPICH2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10702.php">Ralph Castain: "Re: [OMPI users] Question about OpenMPI performance vs. MVAPICH2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Excellent point that is often overlooked. Be sure you compiled  
<br>
optimized - i.e., &quot;mpicc -O3&quot; (or whatever O-level you want).
<br>
<p>OMPI's wrapper compilers do NOT contain optimization flags.
<br>
<p>On Sep 20, 2009, at 9:50 AM, Jed Brown wrote:
<br>
<p><span class="quotelev1">&gt; Brian Powell wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I ran a final test which I find very strange: I ran the same test  
</span><br>
<span class="quotelev2">&gt;&gt; case
</span><br>
<span class="quotelev2">&gt;&gt; on 1 cpu. The MVAPICH2 case was 23% faster!?!? This makes little  
</span><br>
<span class="quotelev2">&gt;&gt; sense
</span><br>
<span class="quotelev2">&gt;&gt; to me. Both are using ifort as the mpif90 compiler using *identical*
</span><br>
<span class="quotelev2">&gt;&gt; optimization flags, etc. I don't understand how the results could be
</span><br>
<span class="quotelev2">&gt;&gt; different.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you saying the output of mpicc/mpif90 -show has the same
</span><br>
<span class="quotelev1">&gt; optimization flags?  MPICH2 usually puts it's own optimization flags
</span><br>
<span class="quotelev1">&gt; into the wrappers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10704.php">Brian Powell: "Re: [OMPI users] Question about OpenMPI performance vs. MVAPICH2"</a>
<li><strong>Previous message:</strong> <a href="10702.php">Ralph Castain: "Re: [OMPI users] Question about OpenMPI performance vs. MVAPICH2"</a>
<li><strong>In reply to:</strong> <a href="10701.php">Jed Brown: "Re: [OMPI users] Question about OpenMPI performance vs. MVAPICH2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10702.php">Ralph Castain: "Re: [OMPI users] Question about OpenMPI performance vs. MVAPICH2"</a>
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
