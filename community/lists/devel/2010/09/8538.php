<?
$subject_val = "Re: [OMPI devel] update configury for Autoconf 2.68";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 23 14:03:51 2010" -->
<!-- isoreceived="20100923180351" -->
<!-- sent="Thu, 23 Sep 2010 20:03:45 +0200" -->
<!-- isosent="20100923180345" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] update configury for Autoconf 2.68" -->
<!-- id="20100923180345.GA16526_at_gmx.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BEB76CD2-EEC3-4C3F-8662-36653AFA963F_at_cisco.com" -->
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
<strong>Date:</strong> 2010-09-23 14:03:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8539.php">Jeff Squyres: "Re: [OMPI devel] update configury for Autoconf 2.68"</a>
<li><strong>Previous message:</strong> <a href="8537.php">Jeff Squyres: "Re: [OMPI devel] RFC: make hwloc first-class data"</a>
<li><strong>In reply to:</strong> <a href="8534.php">Jeff Squyres: "Re: [OMPI devel] update configury for Autoconf 2.68"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8539.php">Jeff Squyres: "Re: [OMPI devel] update configury for Autoconf 2.68"</a>
<li><strong>Reply:</strong> <a href="8539.php">Jeff Squyres: "Re: [OMPI devel] update configury for Autoconf 2.68"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>* Jeff Squyres wrote on Thu, Sep 23, 2010 at 03:31:32PM CEST:
<br>
<span class="quotelev1">&gt; One very minor question: I notice you added silent-rules to
</span><br>
<span class="quotelev1">&gt; AM_INIT_AUTOMAKE (and bumped the required version, too), but still
</span><br>
<span class="quotelev1">&gt; left in the call to AM_SILENT_RULES:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -AM_INIT_AUTOMAKE([foreign dist-bzip2 subdir-objects no-define 1.10 tar-ustar])
</span><br>
<span class="quotelev1">&gt; +AM_INIT_AUTOMAKE([foreign dist-bzip2 subdir-objects no-define 1.10c silent-rules tar-ustar])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # If Automake supports silent rules, enable them.
</span><br>
<span class="quotelev1">&gt; m4_ifdef([AM_SILENT_RULES], [AM_SILENT_RULES([yes])])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is the call to AM_SILENT_RULES now moot because it's listed in AM_INIT_AUTOMAKE?
</span><br>
<p>Oh, just drop that hunk, that was leftover junk in my tree and isn't
<br>
really needed any more; I didn't mean to send it along.
<br>
<p>Thanks,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8539.php">Jeff Squyres: "Re: [OMPI devel] update configury for Autoconf 2.68"</a>
<li><strong>Previous message:</strong> <a href="8537.php">Jeff Squyres: "Re: [OMPI devel] RFC: make hwloc first-class data"</a>
<li><strong>In reply to:</strong> <a href="8534.php">Jeff Squyres: "Re: [OMPI devel] update configury for Autoconf 2.68"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8539.php">Jeff Squyres: "Re: [OMPI devel] update configury for Autoconf 2.68"</a>
<li><strong>Reply:</strong> <a href="8539.php">Jeff Squyres: "Re: [OMPI devel] update configury for Autoconf 2.68"</a>
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
