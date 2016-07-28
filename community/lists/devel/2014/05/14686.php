<?
$subject_val = "Re: [OMPI devel] oshmem fixed sized type support";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  5 18:14:13 2014" -->
<!-- isoreceived="20140505221413" -->
<!-- sent="Mon, 5 May 2014 15:14:06 -0700" -->
<!-- isosent="20140505221406" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] oshmem fixed sized type support" -->
<!-- id="294EC2B4-6243-43B4-8B70-8A779BA03D4B_at_usgs.gov" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CE4C74DB-7511-4EBD-A0A0-2203D716FEA1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] oshmem fixed sized type support<br>
<strong>From:</strong> Larry Baker (<em>baker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-05 18:14:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14687.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem fixed sized type support"</a>
<li><strong>Previous message:</strong> <a href="14685.php">Jeff Squyres (jsquyres): "[OMPI devel] oshmem fixed sized type support"</a>
<li><strong>In reply to:</strong> <a href="14685.php">Jeff Squyres (jsquyres): "[OMPI devel] oshmem fixed sized type support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14687.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem fixed sized type support"</a>
<li><strong>Reply:</strong> <a href="14687.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem fixed sized type support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>The stdint.h header is Section 7.18 Integer types &lt;stdint.h&gt; in the C99 standard (I can mail you a PDF copy if you like).  It says
<br>
<p><span class="quotelev1">&gt; 7.18.1.1 Exact-width integer types
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1	The typedef name intN_t designates a signed integer type with width N , no padding bits, and a two&#146;s complement representation. Thus, int8_t denotes a signed integer type with a width of exactly 8 bits.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2	The typedef name uintN_t designates an unsigned integer type with width N . Thus, uint24_t denotes an unsigned integer type with a width of exactly 24 bits.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3	These types are optional. However, if an implementation provides integer types with widths of 8, 16, 32, or 64 bits, no padding bits, and (for the signed types) that have a two&#146;s complement representation, it shall define the corresponding typedef names.
</span><br>
<p>If OpenMPI requires C99 conformance, stdint.h will be there, but you will have to check for any width (u)int_t's you care about by name.  Since these are typedefs, I am not sure how that might be done in CPP; a configure step might be required.
<br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p><p><p>On 5 May 2014, at 2:46 PM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; Josh --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this the Right fix?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I ask because we check for &lt;stdint.h&gt; in configure.  I'm sure it's always there for Linux, but is it *always* there?  Indeed, are all the fixed size types always guaranteed to be available?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 2, 2014, at 12:14 PM, svn-commit-mailer_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Author: jladd (Joshua Ladd)
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2014-05-02 12:14:05 EDT (Fri, 02 May 2014)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 31605
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/31605">https://svn.open-mpi.org/trac/ompi/changeset/31605</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Adding missing include for OSHMEM changes necessary to support Java bindings.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/oshmem/include/shmem.h.in |     2 +-                                      
</span><br>
<span class="quotelev2">&gt;&gt;  1 files changed, 1 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/oshmem/include/shmem.h.in
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/oshmem/include/shmem.h.in	Fri May  2 10:28:45 2014	(r31604)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/oshmem/include/shmem.h.in	2014-05-02 12:14:05 EDT (Fri, 02 May 2014)	(r31605)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -14,7 +14,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stddef.h&gt;     /* include for ptrdiff_t */
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; +#include &lt;stdint.h&gt;     /* include for fixed width types */
</span><br>
<span class="quotelev2">&gt;&gt; #if defined(c_plusplus) || defined(__cplusplus)
</span><br>
<span class="quotelev2">&gt;&gt; #    include &lt;complex&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #    define OSHMEM_COMPLEX_TYPE(type)    std::complex&lt;type&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14685.php">http://www.open-mpi.org/community/lists/devel/2014/05/14685.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14687.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem fixed sized type support"</a>
<li><strong>Previous message:</strong> <a href="14685.php">Jeff Squyres (jsquyres): "[OMPI devel] oshmem fixed sized type support"</a>
<li><strong>In reply to:</strong> <a href="14685.php">Jeff Squyres (jsquyres): "[OMPI devel] oshmem fixed sized type support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14687.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem fixed sized type support"</a>
<li><strong>Reply:</strong> <a href="14687.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem fixed sized type support"</a>
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
