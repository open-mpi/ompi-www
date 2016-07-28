<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 16 08:44:16 2005" -->
<!-- isoreceived="20050916134416" -->
<!-- sent="Fri, 16 Sep 2005 13:44:05 +0000" -->
<!-- isosent="20050916134405" -->
<!-- name="Ferris McCormick" -->
<!-- email="fmccor_at_[hidden]" -->
<!-- subject="Re:  ompi_info Seg Fault, missing component -- linux	(fwd)" -->
<!-- id="1126878245.1795.57.camel_at_polylepis.inforead.com" -->
<!-- inreplyto="1d843fe1a3ca2a5e57c19211c34f6291_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-09-16 08:44:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0367.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux	(fwd)"</a>
<li><strong>Previous message:</strong> <a href="0365.php">Ralf Wildenhues: "Re:  error message on make"</a>
<li><strong>In reply to:</strong> <a href="0364.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux (fwd)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0367.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux	(fwd)"</a>
<li><strong>Reply:</strong> <a href="0367.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux	(fwd)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2005-09-15 at 20:25 -0500, Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; On Sep 15, 2005, at 8:17 PM, Ferris McCormick wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, 15 Sep 2005, Ferris McCormick wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; A little experimentation suggests that instead of &quot;mov %tick, ...&quot; we 
</span><br>
<span class="quotelev2">&gt; &gt; need
</span><br>
<span class="quotelev2">&gt; &gt; &quot;rd %tick,%o4&quot;.  I'll verify tomorrow when I am on a system with a 
</span><br>
<span class="quotelev2">&gt; &gt; build
</span><br>
<span class="quotelev2">&gt; &gt; on it, but at least &quot;rd %tick,o4&quot; assembles properly but &quot;mov 
</span><br>
<span class="quotelev2">&gt; &gt; %tick,%o4&quot;
</span><br>
<span class="quotelev2">&gt; &gt; gives an error.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yeah, ok, that makes sense.  Damn Solaris for letting me be lazy ;).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let me know if that works and I'll commit the change.  I already 
</span><br>
<span class="quotelev1">&gt; committed the fixes so that the type wouldn't be #if 0'ed and the 
</span><br>
<span class="quotelev1">&gt; header would be in the dist tarball.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
With current svn and with the 'mov %tick...' changed to 'rd %tick...'
<br>
everything builds and the &quot;Can't load ...&quot; message is gone.  the
<br>
opal_timer test gives (on SB1000 (2x900)):
<br>
==========================================
<br>
fmccor_at_polylepis util [235]% ./opal_timer
<br>
--&gt; frequency: 900000000
<br>
--&gt; cycle count
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Slept approximately 903151189 cycles, or 1003501 us
<br>
--&gt; usecs
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Slept approximately 18446744073289684648 us
<br>
==========================================
<br>
<p>This just leaves the SegFault in opal/util/output.c on the
<br>
OBJ_DESTRUCT(&amp;verbose); (in opal_output_close() at about 283)
<br>
unless either (1) OMPI_ENABLE_DEBUG is set or (2) I do something like
<br>
if(OMPI_ENABLE_DEBUG) {OBJ_DESTRUCT(&amp;verbose);}
<br>
<p>Without OMPI_ENABLE_DEBUG, the run_destructors loop goes insane (it dies
<br>
with i = something huge), but I can't tell why.
<br>
It's consistent across all my systems, though, and if no one else sees
<br>
it, I suppose it must be sparc-specific.
<br>
<p>Thanks for your help,
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
<li>application/pgp-signature attachment: <a href="../../att-0366/signature.asc">This is a digitally signed message part</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0367.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux	(fwd)"</a>
<li><strong>Previous message:</strong> <a href="0365.php">Ralf Wildenhues: "Re:  error message on make"</a>
<li><strong>In reply to:</strong> <a href="0364.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux (fwd)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0367.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux	(fwd)"</a>
<li><strong>Reply:</strong> <a href="0367.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux	(fwd)"</a>
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
