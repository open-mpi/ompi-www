<?
$subject_val = "[OMPI devel] oshmem fixed sized type support";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  5 17:46:27 2014" -->
<!-- isoreceived="20140505214627" -->
<!-- sent="Mon, 5 May 2014 21:46:26 +0000" -->
<!-- isosent="20140505214626" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] oshmem fixed sized type support" -->
<!-- id="CE4C74DB-7511-4EBD-A0A0-2203D716FEA1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140502161405.D972316058C_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> [OMPI devel] oshmem fixed sized type support<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-05 17:46:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14686.php">Larry Baker: "Re: [OMPI devel] oshmem fixed sized type support"</a>
<li><strong>Previous message:</strong> <a href="14684.php">Ralph Castain: "Re: [OMPI devel] [PATCH] Fix typo defining macro _WORD_MASK_"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14686.php">Larry Baker: "Re: [OMPI devel] oshmem fixed sized type support"</a>
<li><strong>Reply:</strong> <a href="14686.php">Larry Baker: "Re: [OMPI devel] oshmem fixed sized type support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh --
<br>
<p>Is this the Right fix?
<br>
<p>I ask because we check for &lt;stdint.h&gt; in configure.  I'm sure it's always there for Linux, but is it *always* there?  Indeed, are all the fixed size types always guaranteed to be available?
<br>
<p><p><p>On May 2, 2014, at 12:14 PM, svn-commit-mailer_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: jladd (Joshua Ladd)
</span><br>
<span class="quotelev1">&gt; Date: 2014-05-02 12:14:05 EDT (Fri, 02 May 2014)
</span><br>
<span class="quotelev1">&gt; New Revision: 31605
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/31605">https://svn.open-mpi.org/trac/ompi/changeset/31605</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Adding missing include for OSHMEM changes necessary to support Java bindings.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/oshmem/include/shmem.h.in |     2 +-                                      
</span><br>
<span class="quotelev1">&gt;   1 files changed, 1 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/oshmem/include/shmem.h.in
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/oshmem/include/shmem.h.in	Fri May  2 10:28:45 2014	(r31604)
</span><br>
<span class="quotelev1">&gt; +++ trunk/oshmem/include/shmem.h.in	2014-05-02 12:14:05 EDT (Fri, 02 May 2014)	(r31605)
</span><br>
<span class="quotelev1">&gt; @@ -14,7 +14,7 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;stddef.h&gt;     /* include for ptrdiff_t */
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +#include &lt;stdint.h&gt;     /* include for fixed width types */
</span><br>
<span class="quotelev1">&gt; #if defined(c_plusplus) || defined(__cplusplus)
</span><br>
<span class="quotelev1">&gt; #    include &lt;complex&gt;
</span><br>
<span class="quotelev1">&gt; #    define OSHMEM_COMPLEX_TYPE(type)    std::complex&lt;type&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14686.php">Larry Baker: "Re: [OMPI devel] oshmem fixed sized type support"</a>
<li><strong>Previous message:</strong> <a href="14684.php">Ralph Castain: "Re: [OMPI devel] [PATCH] Fix typo defining macro _WORD_MASK_"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14686.php">Larry Baker: "Re: [OMPI devel] oshmem fixed sized type support"</a>
<li><strong>Reply:</strong> <a href="14686.php">Larry Baker: "Re: [OMPI devel] oshmem fixed sized type support"</a>
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
