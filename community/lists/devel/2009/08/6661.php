<?
$subject_val = "Re: [OMPI devel] Heads up on new feature to 1.3.4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 17 18:30:05 2009" -->
<!-- isoreceived="20090817223005" -->
<!-- sent="17 Aug 2009 23:30:01 +0100" -->
<!-- isosent="20090817223001" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Heads up on new feature to 1.3.4" -->
<!-- id="Prayer.1.3.1.0908172330010.5051_at_hermes-2.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A89CEF0.2030707_at_lbl.gov" -->
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
<strong>Date:</strong> 2009-08-17 18:30:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6662.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6660.php">Patrick Geoffray: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6659.php">Paul H. Hargrove: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6664.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 17 2009, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;+ I wonder if one can do any &quot;introspection&quot; with the dynamic linker to 
</span><br>
<span class="quotelev1">&gt;detect hybrid OpenMP (no &quot;I&quot;) apps and avoid pinning them by default 
</span><br>
<span class="quotelev1">&gt;(examining OMP_NUM_THREADS in the environment is no good, since that 
</span><br>
<span class="quotelev1">&gt;variable may have a site default value other than 1 or empty).  To me 
</span><br>
<span class="quotelev1">&gt;this is the most obvious class of application that will suffer from 
</span><br>
<span class="quotelev1">&gt;imposing pinning by default.
</span><br>
<p>This is a bit off-thread, but my experience with tuning 'threading'
<br>
(mainly OpenMP) is that it makes tuning processes (e.g. MPI) look
<br>
trivial.  You need affinity even more than you do for processes,
<br>
but few operating systems provide a way of binding threads to cores.
<br>
You can try tweaking the POSIX scheduling parameters, but I failed
<br>
to find a system on which they were connected to anything.  All right,
<br>
this is all a little out of date now, but I'll bet it hasn't changed
<br>
much.
<br>
<p>That being so, a reasonable test would be to check for ANY secondary
<br>
thread in the process and/or threading call, and to throw in the towel
<br>
that that point.  I don't know ELF, but the latter can be done in most
<br>
reasonably advanced linkers (by using weak externals).
<br>
<p>Despite their uncleanliness, some heuristics of this nature are probably
<br>
the only viable solution, for the reasons that Jeff described.  I stand
<br>
by my term &quot;gratuitous hack&quot;!
<br>
<p><p>Regards,
<br>
Nick Maclaren.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6662.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6660.php">Patrick Geoffray: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6659.php">Paul H. Hargrove: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6664.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
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
