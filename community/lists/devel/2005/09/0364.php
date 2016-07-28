<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 15 20:25:55 2005" -->
<!-- isoreceived="20050916012555" -->
<!-- sent="Thu, 15 Sep 2005 20:25:54 -0500" -->
<!-- isosent="20050916012554" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  ompi_info Seg Fault, missing component -- linux (fwd)" -->
<!-- id="1d843fe1a3ca2a5e57c19211c34f6291_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.63.0509160101440.32354_at_terciopelo.krait.us" -->
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
<strong>Date:</strong> 2005-09-15 20:25:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0365.php">Ralf Wildenhues: "Re:  error message on make"</a>
<li><strong>Previous message:</strong> <a href="0363.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux (fwd)"</a>
<li><strong>In reply to:</strong> <a href="0363.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux (fwd)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0366.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux	(fwd)"</a>
<li><strong>Reply:</strong> <a href="0366.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux	(fwd)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 15, 2005, at 8:17 PM, Ferris McCormick wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, 15 Sep 2005, Ferris McCormick wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, 2005-09-15 at 15:26 -0500, Brian Barrett wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gah...  The #if 0 and missing header are my bad - I'll fix those
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tonight.  can you rerun the compiler on the file that errors out, but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with the -S option to get the assembly file?  It would be useful to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; know what is on lines 61, 195, and 292.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, I can.  I tried compiling a dummy program with just the time.h 
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev2">&gt;&gt; val = opal_sys_timer_get_cycles();
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At first glance, it looks like
</span><br>
<span class="quotelev2">&gt;&gt;    mov %tick, %o4
</span><br>
<span class="quotelev2">&gt;&gt; is generating the error.  I've been fighting other things all day, so 
</span><br>
<span class="quotelev2">&gt;&gt; I
</span><br>
<span class="quotelev2">&gt;&gt; can't provide much more than that right now.  I'll verify with the
</span><br>
<span class="quotelev2">&gt;&gt; actual failure tomorrow, if the problem persists.  (I am using the svn
</span><br>
<span class="quotelev2">&gt;&gt; pull right now.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A little experimentation suggests that instead of &quot;mov %tick, ...&quot; we 
</span><br>
<span class="quotelev1">&gt; need
</span><br>
<span class="quotelev1">&gt; &quot;rd %tick,%o4&quot;.  I'll verify tomorrow when I am on a system with a 
</span><br>
<span class="quotelev1">&gt; build
</span><br>
<span class="quotelev1">&gt; on it, but at least &quot;rd %tick,o4&quot; assembles properly but &quot;mov 
</span><br>
<span class="quotelev1">&gt; %tick,%o4&quot;
</span><br>
<span class="quotelev1">&gt; gives an error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yeah, ok, that makes sense.  Damn Solaris for letting me be lazy ;).
<br>
<p>Let me know if that works and I'll commit the change.  I already 
<br>
committed the fixes so that the type wouldn't be #if 0'ed and the 
<br>
header would be in the dist tarball.
<br>
<p>Thanks!
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0365.php">Ralf Wildenhues: "Re:  error message on make"</a>
<li><strong>Previous message:</strong> <a href="0363.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux (fwd)"</a>
<li><strong>In reply to:</strong> <a href="0363.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux (fwd)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0366.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux	(fwd)"</a>
<li><strong>Reply:</strong> <a href="0366.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux	(fwd)"</a>
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
