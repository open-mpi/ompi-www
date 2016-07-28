<?
$subject_val = "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  9 05:53:43 2010" -->
<!-- isoreceived="20100709095343" -->
<!-- sent="Fri, 9 Jul 2010 11:53:30 +0200" -->
<!-- isosent="20100709095330" -->
<!-- name="Peter Kjellstrom" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?" -->
<!-- id="201007091153.38722.cap_at_nsc.liu.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20100709085003.GA23064_at_rei.informatik.uni-erlangen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?<br>
<strong>From:</strong> Peter Kjellstrom (<em>cap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-09 05:53:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13557.php">Anton Shterenlikht: "Re: [OMPI users] ipath_userinit: userinit command failed: Cannot allocate memory"</a>
<li><strong>Previous message:</strong> <a href="13555.php">Andreas Sch&#228;fer: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<li><strong>In reply to:</strong> <a href="13551.php">Andreas Sch&#228;fer: "[OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13558.php">Andreas Schäfer: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<li><strong>Reply:</strong> <a href="13558.php">Andreas Schäfer: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Friday 09 July 2010, Andreas Sch&#228;fer wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm evaluating Open MPI 1.4.2 on one of our BladeCenters and I'm
</span><br>
<span class="quotelev1">&gt; getting via InfiniBand about 1550 MB/s and via shared memory about
</span><br>
<span class="quotelev1">&gt; 1770 for the PingPong benchmark in Intel's MPI benchmark. (That
</span><br>
<span class="quotelev1">&gt; benchmark is just an example, I'm seeing similar numbers for my own
</span><br>
<span class="quotelev1">&gt; codes.)
</span><br>
<p>Two factors that make a big difference, size of the operations and type of 
<br>
node (cpu model).
<br>
<p>On an E5520 (nehalem) node I get ~5 GB/s ping-pong for &gt;64K sizes.
<br>
<p>On QDR IB on similar nodes I get ~3 GB/s ping-pong for &gt;256K.
<br>
<p>Numbers are for 1.4.1 YMMV. I couldn't find an AMD node similar to yours, 
<br>
sorry.
<br>
<p>/Peter
<br>
<p><p><span class="quotelev1">&gt; Each node has two AMD hex-cores and two 40 Gbps InfiniBand ports, so I
</span><br>
<span class="quotelev1">&gt; wonder if I shouldn't be getting a significantly higher throughput on
</span><br>
<span class="quotelev1">&gt; InfiniBand. Considering the CPUs' memory bandwidth, I believe that
</span><br>
<span class="quotelev1">&gt; shared memory throughput should be much higher as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are those numbers what is to be expected? If not: any ideas how to
</span><br>
<span class="quotelev1">&gt; debug this or tune Open MPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt; -Andreas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ps: if it's any help, this is what iblinkinfo is telling me
</span><br>
<span class="quotelev1">&gt; (tests were run on faui36[bc])
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13556/signature.asc_">This is a digitally signed message part.</a>
</ul>
<!-- attachment="signature.asc_" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13557.php">Anton Shterenlikht: "Re: [OMPI users] ipath_userinit: userinit command failed: Cannot allocate memory"</a>
<li><strong>Previous message:</strong> <a href="13555.php">Andreas Sch&#228;fer: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<li><strong>In reply to:</strong> <a href="13551.php">Andreas Sch&#228;fer: "[OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13558.php">Andreas Schäfer: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<li><strong>Reply:</strong> <a href="13558.php">Andreas Schäfer: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
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
