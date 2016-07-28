<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r20196";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  5 13:31:06 2009" -->
<!-- isoreceived="20090105183106" -->
<!-- sent="Mon, 5 Jan 2009 13:31:00 -0500" -->
<!-- isosent="20090105183100" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r20196" -->
<!-- id="A2BCCC89-D19A-4A4C-99AD-E5CE75AE935F_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200901040509.n0459IAT007682_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r20196<br>
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-05 13:31:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5097.php">Jeff Squyres: "Re: [OMPI devel] problem compiling r20196"</a>
<li><strong>Previous message:</strong> <a href="5095.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r20196"</a>
<li><strong>Maybe in reply to:</strong> <a href="5095.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r20196"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Addendum to the previous message concerning this discussion: I think  
<br>
we should stick with including opal_stdint everywhere instead of  
<br>
inttypes.h (this file does not always exist on ansi pedantic compilers).
<br>
<p>Aurelien
<br>
<p><p>Le 4 janv. 09 &#224; 00:09, timattox_at_[hidden] a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Author: timattox
</span><br>
<span class="quotelev1">&gt; Date: 2009-01-04 00:09:18 EST (Sun, 04 Jan 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 20196
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/20196">https://svn.open-mpi.org/trac/ompi/changeset/20196</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Refs #868, #869
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The fix for #868, r14358, introduced an (unneeded?) inconsitency...
</span><br>
<span class="quotelev1">&gt; For Mac OS X systems, inttypes.h will always be included with  
</span><br>
<span class="quotelev1">&gt; opal_config.h,
</span><br>
<span class="quotelev1">&gt; and NOT included for non-Mac OS X systems.  For developers using Mac  
</span><br>
<span class="quotelev1">&gt; OS X,
</span><br>
<span class="quotelev1">&gt; this masks the need to include inttypes.h or more properly  
</span><br>
<span class="quotelev1">&gt; opal_stdint.h.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This changeset corrects one of these oopses.  However, the  
</span><br>
<span class="quotelev1">&gt; underlying problem
</span><br>
<span class="quotelev1">&gt; still exists.  Moving the equivelent of r14358 into opal_stdint.h from
</span><br>
<span class="quotelev1">&gt; opal_config_bottom.h might be the &quot;right&quot; solution, but AFAIK, we  
</span><br>
<span class="quotelev1">&gt; would then
</span><br>
<span class="quotelev1">&gt; need to replace each direct inclusion of inttypes.h with  
</span><br>
<span class="quotelev1">&gt; opal_stdint.h to
</span><br>
<span class="quotelev1">&gt; properly address tickets #868 and #869.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/opal/dss/dss_print.c |     1 +
</span><br>
<span class="quotelev1">&gt;   1 files changed, 1 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/dss/dss_print.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/dss/dss_print.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/dss/dss_print.c	2009-01-04 00:09:18 EST (Sun, 04 Jan  
</span><br>
<span class="quotelev1">&gt; 2009)
</span><br>
<span class="quotelev1">&gt; @@ -18,6 +18,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;opal_config.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#include &quot;opal_stdint.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;opal/dss/dss_internal.h&quot;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5097.php">Jeff Squyres: "Re: [OMPI devel] problem compiling r20196"</a>
<li><strong>Previous message:</strong> <a href="5095.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r20196"</a>
<li><strong>Maybe in reply to:</strong> <a href="5095.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r20196"</a>
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
