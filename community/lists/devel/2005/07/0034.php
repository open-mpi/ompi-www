<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 18 15:57:44 2005" -->
<!-- isoreceived="20050718205744" -->
<!-- sent="Mon, 18 Jul 2005 14:57:41 -0600" -->
<!-- isosent="20050718205741" -->
<!-- name="Tim S. Woodall" -->
<!-- email="twoodall_at_[hidden]" -->
<!-- subject="Re:  FYI: Failing intel tests" -->
<!-- id="42DC17C5.4020203_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6a4726eaa3f2762e1b17fa2a179efcfe_at_open-mpi.org" -->
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
<strong>From:</strong> Tim S. Woodall (<em>twoodall_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-07-18 15:57:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0035.php">Edgar Gabriel: "Re:  collectives discussion @LANL"</a>
<li><strong>Previous message:</strong> <a href="0033.php">Josh Hursey: "FYI: Failing intel tests"</a>
<li><strong>In reply to:</strong> <a href="0033.php">Josh Hursey: "FYI: Failing intel tests"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt;So I have been working a variety of platforms [x86 32 bit, x86 64 bit, 
</span><br>
<span class="quotelev1">&gt;PPC 64 bit]. As of SVN Revision 6541 below are the current failures 
</span><br>
<span class="quotelev1">&gt;from the intel_tests suite. For all of these tests I used &quot;tcp,self&quot; 
</span><br>
<span class="quotelev1">&gt;PTLs and the TEG PML.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On x86-32, x86-64, PPC64
</span><br>
<span class="quotelev1">&gt;-------------------------
</span><br>
<span class="quotelev1">&gt;MPI_Send_self_f
</span><br>
<span class="quotelev1">&gt;MPI_Send_self_c
</span><br>
<span class="quotelev1">&gt;MPI_Send_init_self_c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>This will be true for all platforms w/ the ptl code - as it does no 
<br>
buffering. The intel
<br>
tests are incorrect - in that they assume the implementation provides 
<br>
some degree of
<br>
buffering (blocking sends are called before receive is posted).
<br>
<p>The btl code will buffer up to a configurable eager limit - which I've 
<br>
set by default
<br>
to be large enough to pass the intel tests.
<br>
<p>Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0035.php">Edgar Gabriel: "Re:  collectives discussion @LANL"</a>
<li><strong>Previous message:</strong> <a href="0033.php">Josh Hursey: "FYI: Failing intel tests"</a>
<li><strong>In reply to:</strong> <a href="0033.php">Josh Hursey: "FYI: Failing intel tests"</a>
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
