<?
$subject_val = "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 18 11:25:26 2009" -->
<!-- isoreceived="20090618152526" -->
<!-- sent="Thu, 18 Jun 2009 17:25:13 +0200 (CEST)" -->
<!-- isosent="20090618152513" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib" -->
<!-- id="alpine.DEB.2.00.0906181723270.4598_at_jeaugeys.frec.bull.fr" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.DEB.2.00.0906181047390.4598_at_jeaugeys.frec.bull.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib<br>
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-18 11:25:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6272.php">Jeff Squyres: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>Previous message:</strong> <a href="6270.php">Jeff Squyres: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>In reply to:</strong> <a href="6265.php">Sylvain Jeaugey: "[OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6272.php">Jeff Squyres: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>Reply:</strong> <a href="6272.php">Jeff Squyres: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, never mind.
<br>
<p>My problem seems related to library generation through RPM, not with 
<br>
1.3.2, nor the patch.
<br>
<p>Sylvain
<br>
<p>On Thu, 18 Jun 2009, Sylvain Jeaugey wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Until Open MPI 1.3 (maybe 1.3.1), I used to find it convenient to be able to 
</span><br>
<span class="quotelev1">&gt; move a library from its &quot;normal&quot; place (either /usr or /opt) to somewhere 
</span><br>
<span class="quotelev1">&gt; else (i.e. my NFS home account) to be able to try things only on my account.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, I used to set OPAL_PREFIX to the root of the Open MPI directory and all 
</span><br>
<span class="quotelev1">&gt; went fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know if relocation was intended in the first place, but with 1.3.2, 
</span><br>
<span class="quotelev1">&gt; this seems to be broken.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It may have something to do with this patch (and maybe others) :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # HG changeset patch
</span><br>
<span class="quotelev1">&gt; # User bosilca
</span><br>
<span class="quotelev1">&gt; # Date 1159647750 0
</span><br>
<span class="quotelev1">&gt; # Node ID c7152b893f1ce1bc54eea2dc3f06c7e359011fdd
</span><br>
<span class="quotelev1">&gt; # Parent  676a8fbdbb161f0b84a1c6bb12e2324c8a749c56
</span><br>
<span class="quotelev1">&gt; All the OPAL_ defines from the install_dirs.h contain ABSOLUTE path. 
</span><br>
<span class="quotelev1">&gt; Therefore,
</span><br>
<span class="quotelev1">&gt; there is no need to prepend OPAL_PREFIX to them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; diff -r 676a8fbdbb16 -r c7152b893f1c opal/tools/wrappers/opal_wrapper.c
</span><br>
<span class="quotelev1">&gt; --- a/opal/tools/wrappers/opal_wrapper.c        Fri Sep 29 23:58:58 2006 
</span><br>
<span class="quotelev1">&gt; +0000
</span><br>
<span class="quotelev1">&gt; +++ b/opal/tools/wrappers/opal_wrapper.c        Sat Sep 30 20:22:30 2006 
</span><br>
<span class="quotelev1">&gt; +0000
</span><br>
<span class="quotelev1">&gt; @@ -561,9 +561,9 @@
</span><br>
<span class="quotelev1">&gt;         if (0 != strcmp(OPAL_INCLUDEDIR, &quot;/usr/include&quot;)) {
</span><br>
<span class="quotelev1">&gt;             char *line;
</span><br>
<span class="quotelev1">&gt; #if defined(__WINDOWS__)
</span><br>
<span class="quotelev1">&gt; -            asprintf(&amp;line, OPAL_INCLUDE_PATTERN OPAL_PREFIX &quot;\&quot;\\%s\&quot;&quot;, 
</span><br>
<span class="quotelev1">&gt; OPAL_INCLUDEDIR);
</span><br>
<span class="quotelev1">&gt; +            asprintf(&amp;line, OPAL_INCLUDE_PATTERN &quot;\&quot;\\%s\&quot;&quot;, 
</span><br>
<span class="quotelev1">&gt; OPAL_INCLUDEDIR);
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt; -            asprintf(&amp;line, OPAL_INCLUDE_PATTERN OPAL_PREFIX&quot;/%s&quot;, 
</span><br>
<span class="quotelev1">&gt; OPAL_INCLUDEDIR);
</span><br>
<span class="quotelev1">&gt; +            asprintf(&amp;line, OPAL_INCLUDE_PATTERN &quot;/%s&quot;, OPAL_INCLUDEDIR);
</span><br>
<span class="quotelev1">&gt; #endif  /* defined(__WINDOWS__) */
</span><br>
<span class="quotelev1">&gt;             opal_argv_append_nosize(&amp;data.preproc_flags, line);
</span><br>
<span class="quotelev1">&gt;             free(line);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George, is there a rationale behind this patch for disabling relocation of 
</span><br>
<span class="quotelev1">&gt; libraries ? Do you think reverting only this patch would bring back the 
</span><br>
<span class="quotelev1">&gt; relocation functionality ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TIA,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sylvain
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6272.php">Jeff Squyres: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>Previous message:</strong> <a href="6270.php">Jeff Squyres: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>In reply to:</strong> <a href="6265.php">Sylvain Jeaugey: "[OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6272.php">Jeff Squyres: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>Reply:</strong> <a href="6272.php">Jeff Squyres: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
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
