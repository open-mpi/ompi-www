<?
$subject_val = "Re: [OMPI devel] Heads up on new feature to 1.3.4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 17 12:11:56 2009" -->
<!-- isoreceived="20090817161156" -->
<!-- sent="17 Aug 2009 17:11:49 +0100" -->
<!-- isosent="20090817161149" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Heads up on new feature to 1.3.4" -->
<!-- id="Prayer.1.3.1.0908171711490.11182_at_hermes-2.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="71d2d8cc0908170831j72231e9yc0037adfc2dc399f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Heads up on new feature to 1.3.4<br>
<strong>From:</strong> N.M. Maclaren (<em>nmm1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-17 12:11:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6655.php">Jeff Squyres: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6653.php">Ralph Castain: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6653.php">Ralph Castain: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6655.php">Jeff Squyres: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6655.php">Jeff Squyres: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 17 2009, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;At issue for us is that other MPIs -do- bind by default, thus creating an
</span><br>
<span class="quotelev1">&gt;apparent performance advantage for themselves compared to us on standard
</span><br>
<span class="quotelev1">&gt;benchmarks run &quot;out-of-the-box&quot;. We repeatedly get beat-up in papers and
</span><br>
<span class="quotelev1">&gt;elsewhere over our performance, when many times the major difference is in
</span><br>
<span class="quotelev1">&gt;the default binding. If we bind the same way they do, then the performance
</span><br>
<span class="quotelev1">&gt;gap disappears or is minimal.
</span><br>
<p>The two obvious gratuitous hacks that I can see to tackle this are:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;1) To have a mandatory configuration option setting the default, which
<br>
would have a name like 'performance' for the binding option.  YOU could then
<br>
beat up anyone who benchmarkets without it for being biassed.  This is a
<br>
better solution, but the &quot;I shouldn't need to have to think just because I
<br>
am doing something complicated&quot; brigade would object.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;2) To use a heuristic to choose which algorithm to select, based on
<br>
the core count, number of users, load averages, number of active non-root
<br>
processes and similar unreliable indicators of the purpose for which the
<br>
system is being used.  It should be chosen so that it doesn't behave TOO
<br>
badly when it gets it wrong, as it will, but that it gets the case of a
<br>
dedicated benchmarketing system right most of the time.
<br>
<p><p>Regards,
<br>
Nick Maclaren.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6655.php">Jeff Squyres: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6653.php">Ralph Castain: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6653.php">Ralph Castain: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6655.php">Jeff Squyres: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6655.php">Jeff Squyres: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
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
