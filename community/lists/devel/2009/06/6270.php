<?
$subject_val = "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 18 11:22:13 2009" -->
<!-- isoreceived="20090618152213" -->
<!-- sent="Thu, 18 Jun 2009 11:22:03 -0400" -->
<!-- isosent="20090618152203" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib" -->
<!-- id="CB620C4A-40E0-4A34-9DD7-0FB9B925F875_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-18 11:22:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6271.php">Sylvain Jeaugey: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>Previous message:</strong> <a href="6269.php">Jeff Squyres: "Re: [OMPI devel] Just a suggestion about a formation of new openMPIstudent mailing list"</a>
<li><strong>In reply to:</strong> <a href="6265.php">Sylvain Jeaugey: "[OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6271.php">Sylvain Jeaugey: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, using OPAL_PREFIX seems to work for me on the trunk and the head  
<br>
of the v1.3 branch...?
<br>
<p><p><p>On Jun 18, 2009, at 4:55 AM, Sylvain Jeaugey wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Until Open MPI 1.3 (maybe 1.3.1), I used to find it convenient to be  
</span><br>
<span class="quotelev1">&gt; able
</span><br>
<span class="quotelev1">&gt; to move a library from its &quot;normal&quot; place (either /usr or /opt) to
</span><br>
<span class="quotelev1">&gt; somewhere else (i.e. my NFS home account) to be able to try things  
</span><br>
<span class="quotelev1">&gt; only on
</span><br>
<span class="quotelev1">&gt; my account.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, I used to set OPAL_PREFIX to the root of the Open MPI directory  
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; all went fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know if relocation was intended in the first place, but with
</span><br>
<span class="quotelev1">&gt; 1.3.2, this seems to be broken.
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
<span class="quotelev1">&gt; diff -r 676a8fbdbb16 -r c7152b893f1c opal/tools/wrappers/ 
</span><br>
<span class="quotelev1">&gt; opal_wrapper.c
</span><br>
<span class="quotelev1">&gt; --- a/opal/tools/wrappers/opal_wrapper.c        Fri Sep 29 23:58:58  
</span><br>
<span class="quotelev1">&gt; 2006 +0000
</span><br>
<span class="quotelev1">&gt; +++ b/opal/tools/wrappers/opal_wrapper.c        Sat Sep 30 20:22:30  
</span><br>
<span class="quotelev1">&gt; 2006 +0000
</span><br>
<span class="quotelev1">&gt; @@ -561,9 +561,9 @@
</span><br>
<span class="quotelev1">&gt;           if (0 != strcmp(OPAL_INCLUDEDIR, &quot;/usr/include&quot;)) {
</span><br>
<span class="quotelev1">&gt;               char *line;
</span><br>
<span class="quotelev1">&gt;   #if defined(__WINDOWS__)
</span><br>
<span class="quotelev1">&gt; -            asprintf(&amp;line, OPAL_INCLUDE_PATTERN OPAL_PREFIX &quot;\&quot;\\%s 
</span><br>
<span class="quotelev1">&gt; \&quot;&quot;, OPAL_INCLUDEDIR);
</span><br>
<span class="quotelev1">&gt; +            asprintf(&amp;line, OPAL_INCLUDE_PATTERN &quot;\&quot;\\%s\&quot;&quot;,  
</span><br>
<span class="quotelev1">&gt; OPAL_INCLUDEDIR);
</span><br>
<span class="quotelev1">&gt;   #else
</span><br>
<span class="quotelev1">&gt; -            asprintf(&amp;line, OPAL_INCLUDE_PATTERN OPAL_PREFIX&quot;/%s&quot;,  
</span><br>
<span class="quotelev1">&gt; OPAL_INCLUDEDIR);
</span><br>
<span class="quotelev1">&gt; +            asprintf(&amp;line, OPAL_INCLUDE_PATTERN &quot;/%s&quot;,  
</span><br>
<span class="quotelev1">&gt; OPAL_INCLUDEDIR);
</span><br>
<span class="quotelev1">&gt;   #endif  /* defined(__WINDOWS__) */
</span><br>
<span class="quotelev1">&gt;               opal_argv_append_nosize(&amp;data.preproc_flags, line);
</span><br>
<span class="quotelev1">&gt;               free(line);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George, is there a rationale behind this patch for disabling  
</span><br>
<span class="quotelev1">&gt; relocation of
</span><br>
<span class="quotelev1">&gt; libraries ? Do you think reverting only this patch would bring back  
</span><br>
<span class="quotelev1">&gt; the
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6271.php">Sylvain Jeaugey: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>Previous message:</strong> <a href="6269.php">Jeff Squyres: "Re: [OMPI devel] Just a suggestion about a formation of new openMPIstudent mailing list"</a>
<li><strong>In reply to:</strong> <a href="6265.php">Sylvain Jeaugey: "[OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6271.php">Sylvain Jeaugey: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
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
