<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 16 14:19:08 2005" -->
<!-- isoreceived="20050916191908" -->
<!-- sent="Fri, 16 Sep 2005 14:19:05 -0500" -->
<!-- isosent="20050916191905" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  ompi_info Seg Fault, missing component --	linux	(fwd)" -->
<!-- id="37A2E03C-58E6-4645-AAB9-7470EE247EE5_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1126898272.1795.60.camel_at_polylepis.inforead.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-16 14:19:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0373.php">Greg Watson: "MPI question"</a>
<li><strong>Previous message:</strong> <a href="0371.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component --	linux	(fwd)"</a>
<li><strong>In reply to:</strong> <a href="0371.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component --	linux	(fwd)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0410.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component --	linux	(fwd)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 16, 2005, at 2:17 PM, Ferris McCormick wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, 2005-09-16 at 12:52 -0500, Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 16, 2005, at 11:35 AM, Brian Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 16, 2005, at 8:44 AM, Ferris McCormick wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==========================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fmccor_at_polylepis util [235]% ./opal_timer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --&gt; frequency: 900000000
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --&gt; cycle count
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Slept approximately 903151189 cycles, or 1003501 us
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --&gt; usecs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Slept approximately 18446744073289684648 us
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==========================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That last value means that I'm munging the upper 32 bits of the tick
</span><br>
<span class="quotelev3">&gt;&gt;&gt; register (it's 64 bits long).  So we're not quite there yet, but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; getting closer.  I should be able to get to that today.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I believe this is now fixed in SVN.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Like this? (SB1000(2x900)):
</span><br>
<span class="quotelev1">&gt; ===================================================
</span><br>
<span class="quotelev1">&gt; fmccor_at_polylepis test [309]% util/opal_timer
</span><br>
<span class="quotelev1">&gt; --&gt; frequency: 900000000
</span><br>
<span class="quotelev1">&gt; --&gt; cycle count
</span><br>
<span class="quotelev1">&gt;     Slept approximately 902584116 cycles, or 1002871 us
</span><br>
<span class="quotelev1">&gt; --&gt; usecs
</span><br>
<span class="quotelev1">&gt;     Slept approximately 1004096 us
</span><br>
<span class="quotelev1">&gt; ====================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That looks correct.
</span><br>
<p>I agree - looks like we got that part down - now on to the seg  
<br>
faults :).
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0373.php">Greg Watson: "MPI question"</a>
<li><strong>Previous message:</strong> <a href="0371.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component --	linux	(fwd)"</a>
<li><strong>In reply to:</strong> <a href="0371.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component --	linux	(fwd)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0410.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component --	linux	(fwd)"</a>
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
