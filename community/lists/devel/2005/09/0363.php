<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 15 20:18:14 2005" -->
<!-- isoreceived="20050916011814" -->
<!-- sent="Fri, 16 Sep 2005 01:17:57 +0000 (UTC)" -->
<!-- isosent="20050916011757" -->
<!-- name="Ferris McCormick" -->
<!-- email="fmccor_at_[hidden]" -->
<!-- subject="Re:  ompi_info Seg Fault, missing component -- linux (fwd)" -->
<!-- id="Pine.LNX.4.63.0509160101440.32354_at_terciopelo.krait.us" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1126816533.1795.41.camel_at_polylepis.inforead.com" -->
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
<strong>Date:</strong> 2005-09-15 20:17:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0364.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux (fwd)"</a>
<li><strong>Previous message:</strong> <a href="0362.php">Nathan DeBardeleben: "Re:  64bit shared library problems"</a>
<li><strong>In reply to:</strong> <a href="0360.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component --	linux	(fwd)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0364.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux (fwd)"</a>
<li><strong>Reply:</strong> <a href="0364.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux (fwd)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On Thu, 15 Sep 2005, Ferris McCormick wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, 2005-09-15 at 15:26 -0500, Brian Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Gah...  The #if 0 and missing header are my bad - I'll fix those
</span><br>
<span class="quotelev2">&gt;&gt; tonight.  can you rerun the compiler on the file that errors out, but
</span><br>
<span class="quotelev2">&gt;&gt; with the -S option to get the assembly file?  It would be useful to
</span><br>
<span class="quotelev2">&gt;&gt; know what is on lines 61, 195, and 292.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Yes, I can.  I tried compiling a dummy program with just the time.h and
</span><br>
<span class="quotelev1">&gt; val = opal_sys_timer_get_cycles();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At first glance, it looks like
</span><br>
<span class="quotelev1">&gt;    mov %tick, %o4
</span><br>
<span class="quotelev1">&gt; is generating the error.  I've been fighting other things all day, so I
</span><br>
<span class="quotelev1">&gt; can't provide much more than that right now.  I'll verify with the
</span><br>
<span class="quotelev1">&gt; actual failure tomorrow, if the problem persists.  (I am using the svn
</span><br>
<span class="quotelev1">&gt; pull right now.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>A little experimentation suggests that instead of &quot;mov %tick, ...&quot; we need
<br>
&quot;rd %tick,%o4&quot;.  I'll verify tomorrow when I am on a system with a build 
<br>
on it, but at least &quot;rd %tick,o4&quot; assembles properly but &quot;mov %tick,%o4&quot; 
<br>
gives an error.
<br>
<p>Regards,
<br>
Ferris
<br>
<p>- --
<br>
Ferris McCormick (P44646, MI) &lt;fmccor_at_[hidden]&gt;
<br>
Developer, Gentoo Linux (sparc, devrel)
<br>
-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.1 (GNU/Linux)
<br>
<p>iD8DBQFDKh1IQa6M3+I///cRAtW2AJ45/BWdJWa/S5ZZULNS5B/OWm4T3gCeJIPV
<br>
pJKnCcs4PJ+fi19dyH38eXE=
<br>
=sc97
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0364.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux (fwd)"</a>
<li><strong>Previous message:</strong> <a href="0362.php">Nathan DeBardeleben: "Re:  64bit shared library problems"</a>
<li><strong>In reply to:</strong> <a href="0360.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component --	linux	(fwd)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0364.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux (fwd)"</a>
<li><strong>Reply:</strong> <a href="0364.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux (fwd)"</a>
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
