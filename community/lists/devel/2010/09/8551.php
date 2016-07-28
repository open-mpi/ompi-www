<?
$subject_val = "Re: [OMPI devel] update configury for Autoconf 2.68";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 24 13:32:11 2010" -->
<!-- isoreceived="20100924173211" -->
<!-- sent="Fri, 24 Sep 2010 19:32:03 +0200" -->
<!-- isosent="20100924173203" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] update configury for Autoconf 2.68" -->
<!-- id="20100924173203.GD26594_at_gmx.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F6CF5DC5-9B35-4190-B38E-42A7DCF42373_at_cisco.com" -->
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
<strong>Date:</strong> 2010-09-24 13:32:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8552.php">Ralph Castain: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>Previous message:</strong> <a href="8550.php">Kenneth Lloyd: "Re: [OMPI devel] RFC: make hwloc first-class data"</a>
<li><strong>In reply to:</strong> <a href="8548.php">Jeff Squyres: "Re: [OMPI devel] update configury for Autoconf 2.68"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
* Jeff Squyres wrote on Fri, Sep 24, 2010 at 03:26:46PM CEST:
<br>
<span class="quotelev1">&gt; On Sep 23, 2010, at 2:15 PM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Is the silent-rules clause in AM_INIT_AUTOMAKE exactly equivalent to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; calling AM_SILENT_RULES?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Yes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Weird -- when I do this:
</span><br>
<p><span class="quotelev1">&gt; -AM_INIT_AUTOMAKE([foreign dist-bzip2 subdir-objects no-define 1.10 tar-ustar])
</span><br>
<span class="quotelev1">&gt; +AM_INIT_AUTOMAKE([foreign dist-bzip2 subdir-objects no-define 1.11 silent-rules tar-ustar])
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -# If Automake supports silent rules, enable them.
</span><br>
<span class="quotelev1">&gt; -m4_ifdef([AM_SILENT_RULES], [AM_SILENT_RULES([yes])])
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<p><span class="quotelev1">&gt; I do not get silent rules behavior -- I still get the old verbose behavior.  This is with:
</span><br>
<p>Ah, yes, you are exactly right of course, and I was hurrying and reading
<br>
the code wrong.  With the 'silent-rules' option, the user still needs to
<br>
pass --enable-silent-rules to configure.  IOW, the default is different.
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8552.php">Ralph Castain: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>Previous message:</strong> <a href="8550.php">Kenneth Lloyd: "Re: [OMPI devel] RFC: make hwloc first-class data"</a>
<li><strong>In reply to:</strong> <a href="8548.php">Jeff Squyres: "Re: [OMPI devel] update configury for Autoconf 2.68"</a>
<!-- nextthread="start" -->
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
