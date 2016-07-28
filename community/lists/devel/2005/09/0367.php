<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 16 11:35:42 2005" -->
<!-- isoreceived="20050916163542" -->
<!-- sent="Fri, 16 Sep 2005 11:35:39 -0500" -->
<!-- isosent="20050916163539" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  ompi_info Seg Fault, missing component -- linux	(fwd)" -->
<!-- id="aa99da8a1717a7d60754016cab944d61_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1126878245.1795.57.camel_at_polylepis.inforead.com" -->
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
<strong>Date:</strong> 2005-09-16 11:35:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0368.php">Brian Barrett: "Group_range_excl question"</a>
<li><strong>Previous message:</strong> <a href="0366.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux	(fwd)"</a>
<li><strong>In reply to:</strong> <a href="0366.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux	(fwd)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0370.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux	(fwd)"</a>
<li><strong>Reply:</strong> <a href="0370.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux	(fwd)"</a>
<li><strong>Reply:</strong> <a href="0410.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component --	linux	(fwd)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 16, 2005, at 8:44 AM, Ferris McCormick wrote:
<br>
<p><span class="quotelev1">&gt; ==========================================
</span><br>
<span class="quotelev1">&gt; fmccor_at_polylepis util [235]% ./opal_timer
</span><br>
<span class="quotelev1">&gt; --&gt; frequency: 900000000
</span><br>
<span class="quotelev1">&gt; --&gt; cycle count
</span><br>
<span class="quotelev1">&gt;     Slept approximately 903151189 cycles, or 1003501 us
</span><br>
<span class="quotelev1">&gt; --&gt; usecs
</span><br>
<span class="quotelev1">&gt;     Slept approximately 18446744073289684648 us
</span><br>
<span class="quotelev1">&gt; ==========================================
</span><br>
<p>That last value means that I'm munging the upper 32 bits of the tick 
<br>
register (it's 64 bits long).  So we're not quite there yet, but 
<br>
getting closer.  I should be able to get to that today.
<br>
<p>The other problem is very odd.  Since you're compiling in 32bit mode, 
<br>
I'd expect us to see it on our PowerPC machines, but I haven't run into 
<br>
that one yet.  I'll try to compile without debugging and see what I can 
<br>
see.
<br>
<p><p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0368.php">Brian Barrett: "Group_range_excl question"</a>
<li><strong>Previous message:</strong> <a href="0366.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux	(fwd)"</a>
<li><strong>In reply to:</strong> <a href="0366.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux	(fwd)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0370.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux	(fwd)"</a>
<li><strong>Reply:</strong> <a href="0370.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux	(fwd)"</a>
<li><strong>Reply:</strong> <a href="0410.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component --	linux	(fwd)"</a>
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
