<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 27 10:59:15 2005" -->
<!-- isoreceived="20050927155915" -->
<!-- sent="Tue, 27 Sep 2005 15:59:04 +0000" -->
<!-- isosent="20050927155904" -->
<!-- name="Ferris McCormick" -->
<!-- email="fmccor_at_[hidden]" -->
<!-- subject="Re:  ompi_info Seg Fault, missing component	--	linux	(solved?)	(fwd)" -->
<!-- id="1127836744.31257.112.camel_at_polylepis.inforead.com" -->
<!-- inreplyto="1127765346.31258.92.camel_at_polylepis.inforead.com" -->
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
<strong>Date:</strong> 2005-09-27 10:59:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0416.php">Jeff Squyres: "Re:  ompi_info Seg Fault, missing component	--	linux	(solved?)	(fwd)"</a>
<li><strong>Previous message:</strong> <a href="0414.php">Brian Barrett: "Re:  [PATCH] Update Open MPI for new libibverbs API"</a>
<li><strong>In reply to:</strong> <a href="0411.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component	--	linux	(fwd)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0416.php">Jeff Squyres: "Re:  ompi_info Seg Fault, missing component	--	linux	(solved?)	(fwd)"</a>
<li><strong>Reply:</strong> <a href="0416.php">Jeff Squyres: "Re:  ompi_info Seg Fault, missing component	--	linux	(solved?)	(fwd)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2005-09-26 at 20:09 +0000, Ferris McCormick wrote:
<br>
<span class="quotelev1">&gt; On Mon, 2005-09-26 at 14:59 +0000, Ferris McCormick wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, 2005-09-16 at 11:35 -0500, Brian Barrett wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Sep 16, 2005, at 8:44 AM, Ferris McCormick wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ==========================================
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; fmccor_at_polylepis util [235]% ./opal_timer
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; --&gt; frequency: 900000000
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; --&gt; cycle count
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     Slept approximately 903151189 cycles, or 1003501 us
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; --&gt; usecs
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     Slept approximately 18446744073289684648 us
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ==========================================
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; That last value means that I'm munging the upper 32 bits of the tick 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; register (it's 64 bits long).  So we're not quite there yet, but 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; getting closer.  I should be able to get to that today.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The other problem is very odd.  Since you're compiling in 32bit mode, 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I'd expect us to see it on our PowerPC machines, but I haven't run into 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; that one yet.  I'll try to compile without debugging and see what I can 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; see.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Brian 
</span><br>
<p>Here's where the SegFault comes from.
<br>
For whatever reason, when working with the verbose opal_output_stream,
<br>
eventually opal_paffinity_base_open sets opal_paffinity_base_output=-1
<br>
(at paffinity_base_open.c, 62) and calls mca_base_components_open with
<br>
that value as the output_id.  In turn, if output_id!=0,
<br>
mca_base_components_open calls:
<br>
=====================================
<br>
&nbsp;if (output_id != 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_output_set_verbosity(output_id, verbose_level);
<br>
&nbsp;&nbsp;}
<br>
======================================
<br>
<p>Now, opal_set_verbosity (in opal/util/output.c) unconditionally does
<br>
this:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;info[output_id].ldi_verbose_level = level;
<br>
(where, for verbose, this is info[-1].ldi_verbose_level=0;)
<br>
On my system, this wipes out verbose itself.
<br>
<p>Elsewhere in output.c, such constructs are bracketed with
<br>
if(output_id &gt;= 0) { ... } (or if(-1 == output_id) {...}), and I suspect
<br>
that is needed here, too.
<br>
<p>Hope this helps,
<br>
Ferris
<br>
<pre>
-- 
Ferris McCormick (P44646, MI) &lt;fmccor_at_[hidden]&gt;
Developer, Gentoo Linux (Sparc, Devrel)

</pre>
<p>
<p><p><hr>
<ul>
<li>application/pgp-signature attachment: <a href="../../att-0415/signature.asc">This is a digitally signed message part</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0416.php">Jeff Squyres: "Re:  ompi_info Seg Fault, missing component	--	linux	(solved?)	(fwd)"</a>
<li><strong>Previous message:</strong> <a href="0414.php">Brian Barrett: "Re:  [PATCH] Update Open MPI for new libibverbs API"</a>
<li><strong>In reply to:</strong> <a href="0411.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component	--	linux	(fwd)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0416.php">Jeff Squyres: "Re:  ompi_info Seg Fault, missing component	--	linux	(solved?)	(fwd)"</a>
<li><strong>Reply:</strong> <a href="0416.php">Jeff Squyres: "Re:  ompi_info Seg Fault, missing component	--	linux	(solved?)	(fwd)"</a>
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
