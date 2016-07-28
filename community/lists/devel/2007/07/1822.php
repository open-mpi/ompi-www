<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 10 02:43:05 2007" -->
<!-- isoreceived="20070710064305" -->
<!-- sent="Tue, 10 Jul 2007 08:42:59 +0200" -->
<!-- isosent="20070710064259" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Multi-environment builds" -->
<!-- id="20070710064259.GA28481_at_ins.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C2B8422A.33F1%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-10 02:42:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1823.php">Bogdan Costescu: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Previous message:</strong> <a href="1821.php">Ralph Castain: "[OMPI devel] Multi-environment builds"</a>
<li><strong>In reply to:</strong> <a href="1821.php">Ralph Castain: "[OMPI devel] Multi-environment builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1824.php">Jeff Squyres: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Reply:</strong> <a href="1824.php">Jeff Squyres: "Re: [OMPI devel] Multi-environment builds"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Ralph,
<br>
<p>* Ralph Castain wrote on Tue, Jul 10, 2007 at 03:51:06AM CEST:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is that our Open MPI build system automatically detects the
</span><br>
<span class="quotelev1">&gt; presence of those libraries, builds the corresponding components, and then
</span><br>
<span class="quotelev1">&gt; links those libraries into our system. Unfortunately, this causes two
</span><br>
<span class="quotelev1">&gt; side-effects:
</span><br>
[...]
<br>
<span class="quotelev1">&gt; A couple of solutions come immediately to mind:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. The most obvious one (to me, at least) is to require that people provide
</span><br>
<span class="quotelev1">&gt; &quot;--with-xx&quot; when they build the system.
</span><br>
<p>I'll throw in another one for good measure: If --with-xx is given,
<br>
build with the component.  If --without-xx is given, disable it.
<br>
If neither is given, do as you currently do: enable it if you find
<br>
suitable libraries.
<br>
<p>In case the number of components gets too large, have a switch to
<br>
turn off automatic discovery even in the nonpresence of --with* flags.
<br>
<p>It may be a bit more work on the Open MPI configury, but it may be
<br>
more convenient for your users.
<br>
<p>2 cents from somebody who's not going to have to implement it.  ;-)
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1823.php">Bogdan Costescu: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Previous message:</strong> <a href="1821.php">Ralph Castain: "[OMPI devel] Multi-environment builds"</a>
<li><strong>In reply to:</strong> <a href="1821.php">Ralph Castain: "[OMPI devel] Multi-environment builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1824.php">Jeff Squyres: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Reply:</strong> <a href="1824.php">Jeff Squyres: "Re: [OMPI devel] Multi-environment builds"</a>
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
