<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 26 15:09:17 2005" -->
<!-- isoreceived="20050926200917" -->
<!-- sent="Mon, 26 Sep 2005 20:09:06 +0000" -->
<!-- isosent="20050926200906" -->
<!-- name="Ferris McCormick" -->
<!-- email="fmccor_at_[hidden]" -->
<!-- subject="Re:  ompi_info Seg Fault, missing component	--	linux	(fwd)" -->
<!-- id="1127765346.31258.92.camel_at_polylepis.inforead.com" -->
<!-- inreplyto="1127746761.31259.82.camel_at_polylepis.inforead.com" -->
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
<strong>Date:</strong> 2005-09-26 15:09:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0412.php">Roland Dreier: "[PATCH] Update Open MPI for new libibverbs API"</a>
<li><strong>Previous message:</strong> <a href="0410.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component --	linux	(fwd)"</a>
<li><strong>In reply to:</strong> <a href="0410.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component --	linux	(fwd)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0415.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component	--	linux	(solved?)	(fwd)"</a>
<li><strong>Reply:</strong> <a href="0415.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component	--	linux	(solved?)	(fwd)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2005-09-26 at 14:59 +0000, Ferris McCormick wrote:
<br>
<span class="quotelev1">&gt; On Fri, 2005-09-16 at 11:35 -0500, Brian Barrett wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Sep 16, 2005, at 8:44 AM, Ferris McCormick wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ==========================================
</span><br>
<span class="quotelev3">&gt; &gt; &gt; fmccor_at_polylepis util [235]% ./opal_timer
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --&gt; frequency: 900000000
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --&gt; cycle count
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     Slept approximately 903151189 cycles, or 1003501 us
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --&gt; usecs
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     Slept approximately 18446744073289684648 us
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ==========================================
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; That last value means that I'm munging the upper 32 bits of the tick 
</span><br>
<span class="quotelev2">&gt; &gt; register (it's 64 bits long).  So we're not quite there yet, but 
</span><br>
<span class="quotelev2">&gt; &gt; getting closer.  I should be able to get to that today.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The other problem is very odd.  Since you're compiling in 32bit mode, 
</span><br>
<span class="quotelev2">&gt; &gt; I'd expect us to see it on our PowerPC machines, but I haven't run into 
</span><br>
<span class="quotelev2">&gt; &gt; that one yet.  I'll try to compile without debugging and see what I can 
</span><br>
<span class="quotelev2">&gt; &gt; see.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Brian
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; Here's a little more information on the SegFault when trying
</span><br>
<span class="quotelev1">&gt; OBJ_DESTRUCT(&amp;verbose); in opal/util/optput.c:
</span><br>
<span class="quotelev1">&gt; First of all, verbose is of type opal_output_stream_t, and this is not
</span><br>
<span class="quotelev1">&gt; an opal_object_t, so OBJ_DESTRUCT is calling opal_obj_run_destructors
</span><br>
<span class="quotelev1">&gt; with an object of the wrong type (although ompi might be forcing storage
</span><br>
<span class="quotelev1">&gt; allocation so that this call should work; I haven't worked it out).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Second, on my system at least, when OBJ_DESTRUCT(&amp;verbose) gets called,
</span><br>
<span class="quotelev1">&gt; verbose looks like this (I have a debug fprintf to try to look at a bit
</span><br>
<span class="quotelev1">&gt; of the verbose structure.  The corresponding fprintf I put after
</span><br>
<span class="quotelev1">&gt; OBJ_CONSTRUCT(&amp;verbose, opal_output_stream_t); is fine.)
</span><br>
<span class="quotelev1">&gt; ====================================
</span><br>
<span class="quotelev1">&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; 0x7014f7d4 in opal_output_close (output_id=1883966264) at output.c:287
</span><br>
<span class="quotelev1">&gt; 287             fprintf(stderr,&quot;Destroying verbose, depth=%d
</span><br>
<span class="quotelev1">&gt; \n&quot;,(/*(opal_object_t*)&amp;*/verbose.super).obj_class-&gt;cls_depth);
</span><br>
<span class="quotelev1">&gt; Current language:  auto; currently c
</span><br>
<span class="quotelev1">&gt; (gdb) print verbose
</span><br>
<span class="quotelev1">&gt; $1 = {super = {obj_class = 0x0, obj_reference_count = 1},
</span><br>
<span class="quotelev1">&gt; lds_is_debugging = false, 
</span><br>
<span class="quotelev1">&gt; lds_verbose_level = 0, lds_want_syslog = false, lds_syslog_priority =
</span><br>
<span class="quotelev1">&gt; 0, 
</span><br>
<span class="quotelev1">&gt; lds_syslog_ident = 0x0, lds_prefix = 0x0, lds_want_stdout = false,
</span><br>
<span class="quotelev1">&gt; lds_want_stderr = true, 
</span><br>
<span class="quotelev1">&gt; lds_want_file = false, lds_want_file_append = false, lds_file_suffix =
</span><br>
<span class="quotelev1">&gt; 0x0}
</span><br>
<span class="quotelev1">&gt; =====================================
</span><br>
<span class="quotelev1">&gt; so that verbose.super.obj_class has been set to null, and no matter how
</span><br>
<span class="quotelev1">&gt; it is supposed to work, the opal_obj_run_destructors loop:
</span><br>
<span class="quotelev1">&gt;   cls = object-&gt;obj_class;
</span><br>
<span class="quotelev1">&gt;   for(i=0; i &lt; cls-&gt;cls_depth;i++) { ...
</span><br>
<span class="quotelev1">&gt; is going to be working on garbage, because nothing in verbose has a
</span><br>
<span class="quotelev1">&gt; useful obj_class element.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I've looked at the structures, and I see that opal_output_stream_t is
<br>
set up so that (opal_object_t*)(&amp;verbose) should resolve correctly, and
<br>
thus my first concern is gone.
<br>
<p>Now, for the second:  If built with --enable-debug, then when the
<br>
program finally reaches OBJ_DESTRUCT(&amp;verbose), the obj_class pointer is
<br>
correct.  Without --enable-debug, it is NULL.  I'll keep looking at it,
<br>
but so far, I don't see what is going wrong.
<br>
<p>Regards,
<br>
<pre>
-- 
Ferris McCormick (P44646, MI) &lt;fmccor_at_[hidden]&gt;
Developer, Gentoo Linux (Sparc, Devrel)

</pre>
<p>
<p><p><hr>
<ul>
<li>application/pgp-signature attachment: <a href="../../att-0411/signature.asc">This is a digitally signed message part</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0412.php">Roland Dreier: "[PATCH] Update Open MPI for new libibverbs API"</a>
<li><strong>Previous message:</strong> <a href="0410.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component --	linux	(fwd)"</a>
<li><strong>In reply to:</strong> <a href="0410.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component --	linux	(fwd)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0415.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component	--	linux	(solved?)	(fwd)"</a>
<li><strong>Reply:</strong> <a href="0415.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component	--	linux	(solved?)	(fwd)"</a>
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
