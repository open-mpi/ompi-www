<?
$subject_val = "Re: [OMPI devel] update configury for Autoconf 2.68";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 23 14:16:05 2010" -->
<!-- isoreceived="20100923181605" -->
<!-- sent="Thu, 23 Sep 2010 20:15:59 +0200" -->
<!-- isosent="20100923181559" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] update configury for Autoconf 2.68" -->
<!-- id="20100923181559.GE16526_at_gmx.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="55CD49B4-399D-48EC-A714-ACBA2F01D549_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] update configury for Autoconf 2.68<br>
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-23 14:15:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8541.php">Ethan Mallove: "Re: [OMPI devel] Autogen improvements: ready for blast off"</a>
<li><strong>Previous message:</strong> <a href="8539.php">Jeff Squyres: "Re: [OMPI devel] update configury for Autoconf 2.68"</a>
<li><strong>In reply to:</strong> <a href="8539.php">Jeff Squyres: "Re: [OMPI devel] update configury for Autoconf 2.68"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8548.php">Jeff Squyres: "Re: [OMPI devel] update configury for Autoconf 2.68"</a>
<li><strong>Reply:</strong> <a href="8548.php">Jeff Squyres: "Re: [OMPI devel] update configury for Autoconf 2.68"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
* Jeff Squyres wrote on Thu, Sep 23, 2010 at 08:11:41PM CEST:
<br>
<span class="quotelev1">&gt; On Sep 23, 2010, at 2:03 PM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Is the call to AM_SILENT_RULES now moot because it's listed in AM_INIT_AUTOMAKE?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Oh, just drop that hunk, that was leftover junk in my tree and isn't
</span><br>
<span class="quotelev2">&gt; &gt; really needed any more; I didn't mean to send it along.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is the silent-rules clause in AM_INIT_AUTOMAKE exactly equivalent to
</span><br>
<span class="quotelev1">&gt; calling AM_SILENT_RULES?
</span><br>
<p>Yes.
<br>
<p>(The macro differs in that it also accepts an undocumented optional
<br>
argument to specify the default configure-time setting, but if you find
<br>
out and use it, some distributor people might get a bit annoyed ...)
<br>
<p><span class="quotelev1">&gt;  We already require AM 1.11.1 or higher -- so
</span><br>
<span class="quotelev1">&gt; it might be a moot point to check to see if AM_SILENT_RULES is defined
</span><br>
<span class="quotelev1">&gt; or not...
</span><br>
<p>Indeed.
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8541.php">Ethan Mallove: "Re: [OMPI devel] Autogen improvements: ready for blast off"</a>
<li><strong>Previous message:</strong> <a href="8539.php">Jeff Squyres: "Re: [OMPI devel] update configury for Autoconf 2.68"</a>
<li><strong>In reply to:</strong> <a href="8539.php">Jeff Squyres: "Re: [OMPI devel] update configury for Autoconf 2.68"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8548.php">Jeff Squyres: "Re: [OMPI devel] update configury for Autoconf 2.68"</a>
<li><strong>Reply:</strong> <a href="8548.php">Jeff Squyres: "Re: [OMPI devel] update configury for Autoconf 2.68"</a>
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
