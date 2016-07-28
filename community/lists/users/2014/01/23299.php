<?
$subject_val = "Re: [OMPI users] Solaris sigbus error in ompi_info";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  1 10:58:15 2014" -->
<!-- isoreceived="20140101155815" -->
<!-- sent="Wed, 1 Jan 2014 07:56:27 -0800" -->
<!-- isosent="20140101155627" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Solaris sigbus error in ompi_info" -->
<!-- id="301D2B26-3755-4D97-9E33-17FB7C5AE7AB_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201401010948.s019m734010487_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Solaris sigbus error in ompi_info<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-01 10:56:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23300.php">Ralph Castain: "Re: [OMPI users] some problems with openmpi-1.9a1r30100"</a>
<li><strong>Previous message:</strong> <a href="23298.php">Siegmar Gross: "[OMPI users] some problems with openmpi-1.9a1r30100"</a>
<li><strong>In reply to:</strong> <a href="23298.php">Siegmar Gross: "[OMPI users] some problems with openmpi-1.9a1r30100"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23310.php">Siegmar Gross: "Re: [OMPI users] Solaris sigbus error in ompi_info"</a>
<li><strong>Maybe reply:</strong> <a href="23310.php">Siegmar Gross: "Re: [OMPI users] Solaris sigbus error in ompi_info"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm going to split this apart so we can deal with these in a more manageable fashion.
<br>
<p>I have no ideas here as there isn't enough info - can you dig deeper to tell us where the sigbus happens?
<br>
<p>Meantime, I filed a ticket against it and we can capture your response there.
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/ticket/4042">https://svn.open-mpi.org/trac/ompi/ticket/4042</a>
<br>
<p><p>On Jan 1, 2014, at 1:48 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Unfortunately I still get a &quot;SIGBUS Error&quot; on &quot;Solaris Sparc&quot;
</span><br>
<span class="quotelev1">&gt; for &quot;ompi_info -a&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.9 99 ompi_info | grep MPI:
</span><br>
<span class="quotelev1">&gt;                Open MPI: 1.9a1r30100
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.9 100 ompi_info -a |&amp; grep Signal
</span><br>
<span class="quotelev1">&gt; [tyr:09699] Signal: Bus Error (10)
</span><br>
<span class="quotelev1">&gt; [tyr:09699] Signal code: Invalid address alignment (1)
</span><br>
<span class="quotelev1">&gt; .../openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:0x1321b8
</span><br>
<span class="quotelev1">&gt;  [ Signal 2099900312 (?)]
</span><br>
<span class="quotelev1">&gt; Bus error 
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.9 101 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can compile and run a small MPI program without &quot;SIGBUS Error&quot;.
</span><br>
<span class="quotelev1">&gt; Jeff, thank you very much for solving this problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr small_prog 110 mpicc init_finalize.c 
</span><br>
<span class="quotelev1">&gt; tyr small_prog 111 mpiexec -np 1 a.out 
</span><br>
<span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt; tyr small_prog 112 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23299/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23300.php">Ralph Castain: "Re: [OMPI users] some problems with openmpi-1.9a1r30100"</a>
<li><strong>Previous message:</strong> <a href="23298.php">Siegmar Gross: "[OMPI users] some problems with openmpi-1.9a1r30100"</a>
<li><strong>In reply to:</strong> <a href="23298.php">Siegmar Gross: "[OMPI users] some problems with openmpi-1.9a1r30100"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23310.php">Siegmar Gross: "Re: [OMPI users] Solaris sigbus error in ompi_info"</a>
<li><strong>Maybe reply:</strong> <a href="23310.php">Siegmar Gross: "Re: [OMPI users] Solaris sigbus error in ompi_info"</a>
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
