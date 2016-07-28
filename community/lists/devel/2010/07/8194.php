<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23440";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 20 07:21:24 2010" -->
<!-- isoreceived="20100720112124" -->
<!-- sent="Tue, 20 Jul 2010 07:22:00 -0400" -->
<!-- isosent="20100720112200" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23440" -->
<!-- id="7CC46D8D-F8F3-4ED5-A488-5FF27C7ECA5B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201007200631.o6K6VHjo004233_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23440<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-20 07:22:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8195.php">N.M. Maclaren: "Re: [OMPI devel] IB warnings"</a>
<li><strong>Previous message:</strong> <a href="8193.php">Jeff Squyres: "Re: [OMPI devel] IB warnings"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please file CMR if this is needed in 1.4 and 1.5.
<br>
<p>Thanks!
<br>
<p><p>On Jul 20, 2010, at 2:31 AM, &lt;cyeoh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: cyeoh
</span><br>
<span class="quotelev1">&gt; Date: 2010-07-20 02:31:16 EDT (Tue, 20 Jul 2010)
</span><br>
<span class="quotelev1">&gt; New Revision: 23440
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/23440">https://svn.open-mpi.org/trac/ompi/changeset/23440</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Adds missing sys/stat.h include needed for more recent versions of glibc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/opal/mca/memory/linux/hooks.c |     5 +++++                                  
</span><br>
<span class="quotelev1">&gt;    1 files changed, 5 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/mca/memory/linux/hooks.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/mca/memory/linux/hooks.c (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/mca/memory/linux/hooks.c 2010-07-20 02:31:16 EDT (Tue, 20 Jul 2010)
</span><br>
<span class="quotelev1">&gt; @@ -39,6 +39,11 @@
</span><br>
<span class="quotelev1">&gt;  #define DEFAULT_CHECK_ACTION 1
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +#ifdef HAVE_SYS_STAT_H
</span><br>
<span class="quotelev1">&gt; +#include &lt;sys/stat.h&gt;  /* for stat */
</span><br>
<span class="quotelev1">&gt; +#endif  /* HAVE_SYS_STAT_H */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  /* What to do if the standard debugging hooks are in place and a
</span><br>
<span class="quotelev1">&gt;     corrupt pointer is detected: do nothing (0), print an error message
</span><br>
<span class="quotelev1">&gt;     (1), or call abort() (2). */
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8195.php">N.M. Maclaren: "Re: [OMPI devel] IB warnings"</a>
<li><strong>Previous message:</strong> <a href="8193.php">Jeff Squyres: "Re: [OMPI devel] IB warnings"</a>
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
