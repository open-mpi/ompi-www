<?
$subject_val = "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  9 08:39:19 2010" -->
<!-- isoreceived="20100709123919" -->
<!-- sent="Fri, 9 Jul 2010 14:39:10 +0200" -->
<!-- isosent="20100709123910" -->
<!-- name="Peter Kjellstrom" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?" -->
<!-- id="201007091439.14837.cap_at_nsc.liu.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20100709114856.GA26745_at_rei.informatik.uni-erlangen.de" -->
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
<strong>Date:</strong> 2010-07-09 08:39:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13560.php">Andreas Schäfer: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<li><strong>Previous message:</strong> <a href="13558.php">Andreas Sch&#228;fer: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<li><strong>In reply to:</strong> <a href="13558.php">Andreas Sch&#228;fer: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13560.php">Andreas Schäfer: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<li><strong>Reply:</strong> <a href="13560.php">Andreas Schäfer: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Friday 09 July 2010, Andreas Sch&#228;fer wrote:
<br>
<span class="quotelev1">&gt; Thanks, those were good suggestions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 11:53 Fri 09 Jul     , Peter Kjellstrom wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On an E5520 (nehalem) node I get ~5 GB/s ping-pong for &gt;64K sizes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just tried a Core i7 system which maxes at 6550 MB/s for the
</span><br>
<span class="quotelev1">&gt; ping-pong test.
</span><br>
<p>It makes quite some difference if the ranks end up on the same socket or 
<br>
different sockets (on an i7 you only have one).
<br>
<p><span class="quotelev2">&gt; &gt; On QDR IB on similar nodes I get ~3 GB/s ping-pong for &gt;256K.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll try to find a Intel system to repeat the tests. Maybe it's AMD's
</span><br>
<span class="quotelev1">&gt; different memory subsystem/cache architecture which is slowing Open
</span><br>
<span class="quotelev1">&gt; MPI? Or are my systems just badly configured?
</span><br>
<p>8x pci-express gen2 5GT/s should show figures like mine. If it's pci-express 
<br>
gen1 or gen2 2.5GT/s or 4x or if the IB only came up with two lanes then 1500 
<br>
is expected.
<br>
<p>/Peter
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13559/signature.asc_">This is a digitally signed message part.</a>
</ul>
<!-- attachment="signature.asc_" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13560.php">Andreas Schäfer: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<li><strong>Previous message:</strong> <a href="13558.php">Andreas Sch&#228;fer: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<li><strong>In reply to:</strong> <a href="13558.php">Andreas Sch&#228;fer: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13560.php">Andreas Schäfer: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<li><strong>Reply:</strong> <a href="13560.php">Andreas Schäfer: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
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
