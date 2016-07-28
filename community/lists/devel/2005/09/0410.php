<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 26 09:59:28 2005" -->
<!-- isoreceived="20050926145928" -->
<!-- sent="Mon, 26 Sep 2005 14:59:21 +0000" -->
<!-- isosent="20050926145921" -->
<!-- name="Ferris McCormick" -->
<!-- email="fmccor_at_[hidden]" -->
<!-- subject="Re:  ompi_info Seg Fault, missing component --	linux	(fwd)" -->
<!-- id="1127746761.31259.82.camel_at_polylepis.inforead.com" -->
<!-- inreplyto="aa99da8a1717a7d60754016cab944d61_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-09-26 09:59:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0411.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component	--	linux	(fwd)"</a>
<li><strong>Previous message:</strong> <a href="0409.php">Jeff Squyres: "Re:  mpif.h problems"</a>
<li><strong>In reply to:</strong> <a href="0367.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux	(fwd)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0411.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component	--	linux	(fwd)"</a>
<li><strong>Reply:</strong> <a href="0411.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component	--	linux	(fwd)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 2005-09-16 at 11:35 -0500, Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; On Sep 16, 2005, at 8:44 AM, Ferris McCormick wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ==========================================
</span><br>
<span class="quotelev2">&gt; &gt; fmccor_at_polylepis util [235]% ./opal_timer
</span><br>
<span class="quotelev2">&gt; &gt; --&gt; frequency: 900000000
</span><br>
<span class="quotelev2">&gt; &gt; --&gt; cycle count
</span><br>
<span class="quotelev2">&gt; &gt;     Slept approximately 903151189 cycles, or 1003501 us
</span><br>
<span class="quotelev2">&gt; &gt; --&gt; usecs
</span><br>
<span class="quotelev2">&gt; &gt;     Slept approximately 18446744073289684648 us
</span><br>
<span class="quotelev2">&gt; &gt; ==========================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That last value means that I'm munging the upper 32 bits of the tick 
</span><br>
<span class="quotelev1">&gt; register (it's 64 bits long).  So we're not quite there yet, but 
</span><br>
<span class="quotelev1">&gt; getting closer.  I should be able to get to that today.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The other problem is very odd.  Since you're compiling in 32bit mode, 
</span><br>
<span class="quotelev1">&gt; I'd expect us to see it on our PowerPC machines, but I haven't run into 
</span><br>
<span class="quotelev1">&gt; that one yet.  I'll try to compile without debugging and see what I can 
</span><br>
<span class="quotelev1">&gt; see.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Here's a little more information on the SegFault when trying
<br>
OBJ_DESTRUCT(&amp;verbose); in opal/util/optput.c:
<br>
First of all, verbose is of type opal_output_stream_t, and this is not
<br>
an opal_object_t, so OBJ_DESTRUCT is calling opal_obj_run_destructors
<br>
with an object of the wrong type (although ompi might be forcing storage
<br>
allocation so that this call should work; I haven't worked it out).
<br>
<p>Second, on my system at least, when OBJ_DESTRUCT(&amp;verbose) gets called,
<br>
verbose looks like this (I have a debug fprintf to try to look at a bit
<br>
of the verbose structure.  The corresponding fprintf I put after
<br>
OBJ_CONSTRUCT(&amp;verbose, opal_output_stream_t); is fine.)
<br>
====================================
<br>
Program received signal SIGSEGV, Segmentation fault.
<br>
0x7014f7d4 in opal_output_close (output_id=1883966264) at output.c:287
<br>
287             fprintf(stderr,&quot;Destroying verbose, depth=%d
<br>
\n&quot;,(/*(opal_object_t*)&amp;*/verbose.super).obj_class-&gt;cls_depth);
<br>
Current language:  auto; currently c
<br>
(gdb) print verbose
<br>
$1 = {super = {obj_class = 0x0, obj_reference_count = 1},
<br>
lds_is_debugging = false, 
<br>
lds_verbose_level = 0, lds_want_syslog = false, lds_syslog_priority =
<br>
0, 
<br>
lds_syslog_ident = 0x0, lds_prefix = 0x0, lds_want_stdout = false,
<br>
lds_want_stderr = true, 
<br>
lds_want_file = false, lds_want_file_append = false, lds_file_suffix =
<br>
0x0}
<br>
=====================================
<br>
so that verbose.super.obj_class has been set to null, and no matter how
<br>
it is supposed to work, the opal_obj_run_destructors loop:
<br>
&nbsp;&nbsp;cls = object-&gt;obj_class;
<br>
&nbsp;&nbsp;for(i=0; i &lt; cls-&gt;cls_depth;i++) { ...
<br>
is going to be working on garbage, because nothing in verbose has a
<br>
useful obj_class element.
<br>
<p>Hope this helps,
<br>
Regards,
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
<li>application/pgp-signature attachment: <a href="../../att-0410/signature.asc">This is a digitally signed message part</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0411.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component	--	linux	(fwd)"</a>
<li><strong>Previous message:</strong> <a href="0409.php">Jeff Squyres: "Re:  mpif.h problems"</a>
<li><strong>In reply to:</strong> <a href="0367.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux	(fwd)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0411.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component	--	linux	(fwd)"</a>
<li><strong>Reply:</strong> <a href="0411.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component	--	linux	(fwd)"</a>
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
