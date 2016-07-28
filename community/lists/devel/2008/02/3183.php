<?
$subject_val = "Re: [OMPI devel] VT integration: make distclean problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 11 15:06:10 2008" -->
<!-- isoreceived="20080211200610" -->
<!-- sent="Mon, 11 Feb 2008 21:05:57 +0100" -->
<!-- isosent="20080211200557" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] VT integration: make distclean problem" -->
<!-- id="20080211200557.GA10939_at_ins.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E54C4648-8263-419D-8FAD-B8A5FFC47149_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] VT integration: make distclean problem<br>
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-11 15:05:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3184.php">Ralf Wildenhues: "[OMPI devel] Fixlet for config/ompi_contrib.m4"</a>
<li><strong>Previous message:</strong> <a href="3182.php">Cedric Desmoulin: "[OMPI devel] New Driver BTL"</a>
<li><strong>In reply to:</strong> <a href="3181.php">Josh Hursey: "[OMPI devel] VT integration: make distclean problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3196.php">Andreas Knüpfer: "Re: [OMPI devel] VT integration: make distclean problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
* Josh Hursey wrote on Mon, Feb 11, 2008 at 07:31:25PM CET:
<br>
<span class="quotelev1">&gt; I've been noticing another problem with the VT integration. If you do  
</span><br>
<span class="quotelev1">&gt; a &quot;./configure --enable-contrib-no-build=vt&quot; a subsequent 'make  
</span><br>
<span class="quotelev1">&gt; distclean' will fail in contrib/vt. The 'make distclean' will succeed  
</span><br>
<span class="quotelev1">&gt; with VT enabled (default).
</span><br>
<p>ATM the toplevel configury does not run configure in contrib/vt/vt, if
<br>
that is disabled.  I think that's intended.  But it also means that a
<br>
distribution built from such a build tree cannot be complete, i.e.,
<br>
contain all contribs, because their Makefiles do not exist which contain
<br>
the respective dist rules.  Likewise for distclean and maintainer-clean.
<br>
<p>I suppose for distclean, this could be worked around uglily (please
<br>
speak up if you want me to take a shot at it), but if you want all of
<br>
these to work out of the box even for --enable-contrib-no-build=vt, then
<br>
you need to run configure for vt every time.  Sorry 'bout that.
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3184.php">Ralf Wildenhues: "[OMPI devel] Fixlet for config/ompi_contrib.m4"</a>
<li><strong>Previous message:</strong> <a href="3182.php">Cedric Desmoulin: "[OMPI devel] New Driver BTL"</a>
<li><strong>In reply to:</strong> <a href="3181.php">Josh Hursey: "[OMPI devel] VT integration: make distclean problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3196.php">Andreas Knüpfer: "Re: [OMPI devel] VT integration: make distclean problem"</a>
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
