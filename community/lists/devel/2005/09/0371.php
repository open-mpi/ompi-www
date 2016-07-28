<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 16 14:17:59 2005" -->
<!-- isoreceived="20050916191759" -->
<!-- sent="Fri, 16 Sep 2005 19:17:52 +0000" -->
<!-- isosent="20050916191752" -->
<!-- name="Ferris McCormick" -->
<!-- email="fmccor_at_[hidden]" -->
<!-- subject="Re:  ompi_info Seg Fault, missing component --	linux	(fwd)" -->
<!-- id="1126898272.1795.60.camel_at_polylepis.inforead.com" -->
<!-- inreplyto="C5517EBE-5405-4D5E-96E0-B1C7B861D085_at_open-mpi.org" -->
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
<strong>From:</strong> Ferris McCormick (<em>fmccor_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-16 14:17:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0372.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component --	linux	(fwd)"</a>
<li><strong>Previous message:</strong> <a href="0370.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux	(fwd)"</a>
<li><strong>In reply to:</strong> <a href="0370.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux	(fwd)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0372.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component --	linux	(fwd)"</a>
<li><strong>Reply:</strong> <a href="0372.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component --	linux	(fwd)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 2005-09-16 at 12:52 -0500, Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; On Sep 16, 2005, at 11:35 AM, Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Sep 16, 2005, at 8:44 AM, Ferris McCormick wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ==========================================
</span><br>
<span class="quotelev3">&gt; &gt;&gt; fmccor_at_polylepis util [235]% ./opal_timer
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --&gt; frequency: 900000000
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --&gt; cycle count
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Slept approximately 903151189 cycles, or 1003501 us
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --&gt; usecs
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Slept approximately 18446744073289684648 us
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ==========================================
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; That last value means that I'm munging the upper 32 bits of the tick
</span><br>
<span class="quotelev2">&gt; &gt; register (it's 64 bits long).  So we're not quite there yet, but
</span><br>
<span class="quotelev2">&gt; &gt; getting closer.  I should be able to get to that today.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe this is now fixed in SVN.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Like this? (SB1000(2x900)):
<br>
===================================================
<br>
fmccor_at_polylepis test [309]% util/opal_timer
<br>
--&gt; frequency: 900000000
<br>
--&gt; cycle count
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Slept approximately 902584116 cycles, or 1002871 us
<br>
--&gt; usecs
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Slept approximately 1004096 us
<br>
====================================================
<br>
<p>That looks correct.
<br>
Regards,
<br>
<pre>
-- 
Ferris McCormick (P44646, MI) &lt;fmccor_at_[hidden]&gt;
Developer, Gentoo Linux (Sparc, Devrel)

</pre>
<p>
<p><p><hr>
<ul>
<li>application/pgp-signature attachment: <a href="../../att-0371/signature.asc">This is a digitally signed message part</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0372.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component --	linux	(fwd)"</a>
<li><strong>Previous message:</strong> <a href="0370.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux	(fwd)"</a>
<li><strong>In reply to:</strong> <a href="0370.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux	(fwd)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0372.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component --	linux	(fwd)"</a>
<li><strong>Reply:</strong> <a href="0372.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component --	linux	(fwd)"</a>
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
