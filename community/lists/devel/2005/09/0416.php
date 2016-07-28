<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 27 11:38:07 2005" -->
<!-- isoreceived="20050927163807" -->
<!-- sent="Tue, 27 Sep 2005 12:38:04 -0400" -->
<!-- isosent="20050927163804" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  ompi_info Seg Fault, missing component	--	linux	(solved?)	(fwd)" -->
<!-- id="d43b2a4761c51a2e30f08c296e9469c7_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1127836744.31257.112.camel_at_polylepis.inforead.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-27 11:38:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0417.php">Roland Dreier: "Re:  [PATCH] Update Open MPI for new libibverbs API"</a>
<li><strong>Previous message:</strong> <a href="0415.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component	--	linux	(solved?)	(fwd)"</a>
<li><strong>In reply to:</strong> <a href="0415.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component	--	linux	(solved?)	(fwd)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks muchly for tracking this down!  I'm working on the fixes right 
<br>
now; will commit shortly.
<br>
<p><p><p>On Sep 27, 2005, at 11:59 AM, Ferris McCormick wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, 2005-09-26 at 20:09 +0000, Ferris McCormick wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, 2005-09-26 at 14:59 +0000, Ferris McCormick wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, 2005-09-16 at 11:35 -0500, Brian Barrett wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sep 16, 2005, at 8:44 AM, Ferris McCormick wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ==========================================
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fmccor_at_polylepis util [235]% ./opal_timer
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --&gt; frequency: 900000000
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --&gt; cycle count
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     Slept approximately 903151189 cycles, or 1003501 us
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --&gt; usecs
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     Slept approximately 18446744073289684648 us
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ==========================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; That last value means that I'm munging the upper 32 bits of the tick
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; register (it's 64 bits long).  So we're not quite there yet, but
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; getting closer.  I should be able to get to that today.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The other problem is very odd.  Since you're compiling in 32bit 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mode,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'd expect us to see it on our PowerPC machines, but I haven't run 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; into
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that one yet.  I'll try to compile without debugging and see what I 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; see.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's where the SegFault comes from.
</span><br>
<span class="quotelev1">&gt; For whatever reason, when working with the verbose opal_output_stream,
</span><br>
<span class="quotelev1">&gt; eventually opal_paffinity_base_open sets opal_paffinity_base_output=-1
</span><br>
<span class="quotelev1">&gt; (at paffinity_base_open.c, 62) and calls mca_base_components_open with
</span><br>
<span class="quotelev1">&gt; that value as the output_id.  In turn, if output_id!=0,
</span><br>
<span class="quotelev1">&gt; mca_base_components_open calls:
</span><br>
<span class="quotelev1">&gt; =====================================
</span><br>
<span class="quotelev1">&gt;  if (output_id != 0) {
</span><br>
<span class="quotelev1">&gt;     opal_output_set_verbosity(output_id, verbose_level);
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt; ======================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, opal_set_verbosity (in opal/util/output.c) unconditionally does
</span><br>
<span class="quotelev1">&gt; this:
</span><br>
<span class="quotelev1">&gt;     info[output_id].ldi_verbose_level = level;
</span><br>
<span class="quotelev1">&gt; (where, for verbose, this is info[-1].ldi_verbose_level=0;)
</span><br>
<span class="quotelev1">&gt; On my system, this wipes out verbose itself.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Elsewhere in output.c, such constructs are bracketed with
</span><br>
<span class="quotelev1">&gt; if(output_id &gt;= 0) { ... } (or if(-1 == output_id) {...}), and I 
</span><br>
<span class="quotelev1">&gt; suspect
</span><br>
<span class="quotelev1">&gt; that is needed here, too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this helps,
</span><br>
<span class="quotelev1">&gt; Ferris
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ferris McCormick (P44646, MI) &lt;fmccor_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Developer, Gentoo Linux (Sparc, Devrel)
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0417.php">Roland Dreier: "Re:  [PATCH] Update Open MPI for new libibverbs API"</a>
<li><strong>Previous message:</strong> <a href="0415.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component	--	linux	(solved?)	(fwd)"</a>
<li><strong>In reply to:</strong> <a href="0415.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component	--	linux	(solved?)	(fwd)"</a>
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
