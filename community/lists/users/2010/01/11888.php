<?
$subject_val = "Re: [OMPI users] ABI stabilization/versioning";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 26 06:16:14 2010" -->
<!-- isoreceived="20100126111614" -->
<!-- sent="Tue, 26 Jan 2010 11:15:45 +0000" -->
<!-- isosent="20100126111545" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ABI stabilization/versioning" -->
<!-- id="873a1tazha.fsf_at_liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1264424117.10611.7.camel_at_ce170155.zmb.uni-duisburg-essen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] ABI stabilization/versioning<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-26 06:15:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11889.php">Dave Love: "Re: [OMPI users] ABI stabilization/versioning"</a>
<li><strong>Previous message:</strong> <a href="11887.php">Mathieu Gontier: "Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3"</a>
<li><strong>In reply to:</strong> <a href="11864.php">Manuel Prinz: "Re: [OMPI users] ABI stabilization/versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11890.php">Jed Brown: "Re: [OMPI users] ABI stabilization/versioning"</a>
<li><strong>Reply:</strong> <a href="11890.php">Jed Brown: "Re: [OMPI users] ABI stabilization/versioning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Manuel Prinz &lt;manuel_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; The ABI should be stable since 1.3.2. OMPI 1.4.x does set the libtool
</span><br>
<span class="quotelev1">&gt; version info;
</span><br>
<p>Oh, sorry.  I grepped the code for the relevant libtool args and
<br>
couldn't see any evidence it was done.  I wonder how I missed it.
<br>
<p><span class="quotelev1">&gt; Versions where bumped to 0.0.1 for libmpi which has no
</span><br>
<span class="quotelev1">&gt; effect for dynamic linking.
</span><br>
<p>I've forgotten the rules on this, but the point is that it needs to
<br>
affect dynamic linking to avoid running with earlier libraries
<br>
(specifically picking up ones from 1.2, which is the most common
<br>
problem).
<br>
<p><span class="quotelev1">&gt; Could you please elaborate on what needs to be addressed? Debian does
</span><br>
<span class="quotelev1">&gt; not have 1.4.1 yet though I'm planning to upload it really soon.
</span><br>
<p>I just looked at the most recent 1.3.something in the pool.
<br>
<p><span class="quotelev1">&gt; The ABI
</span><br>
<span class="quotelev1">&gt; did not change (also not in an incompatible way, AFAICS). If you know of
</span><br>
<span class="quotelev1">&gt; any issues, I'd be glad if you could tell us, so we can find a solution
</span><br>
<span class="quotelev1">&gt; before any damage is done. Thanks in advance!
</span><br>
<p>Maybe there isn't a problem, but it sounds as if you could still get an
<br>
incompatible version dynamically linked.  We don't run Debian on the
<br>
clusters (unfortunately), and I don't have time to check what happens in
<br>
a VM just now.  If you're confident that binaries won't dynamically link
<br>
incompatible libraries, that's good.  Thanks for maintaining it, even
<br>
though I can't use it; I don't understand the prejudice against
<br>
Debian-ish systems on clusters.
<br>
<p>Apologies for the confusion.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11889.php">Dave Love: "Re: [OMPI users] ABI stabilization/versioning"</a>
<li><strong>Previous message:</strong> <a href="11887.php">Mathieu Gontier: "Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3"</a>
<li><strong>In reply to:</strong> <a href="11864.php">Manuel Prinz: "Re: [OMPI users] ABI stabilization/versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11890.php">Jed Brown: "Re: [OMPI users] ABI stabilization/versioning"</a>
<li><strong>Reply:</strong> <a href="11890.php">Jed Brown: "Re: [OMPI users] ABI stabilization/versioning"</a>
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
