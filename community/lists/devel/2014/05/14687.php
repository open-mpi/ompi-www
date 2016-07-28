<?
$subject_val = "Re: [OMPI devel] oshmem fixed sized type support";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  6 06:44:10 2014" -->
<!-- isoreceived="20140506104410" -->
<!-- sent="Tue, 6 May 2014 10:44:09 +0000" -->
<!-- isosent="20140506104409" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] oshmem fixed sized type support" -->
<!-- id="FF3210F8-4EC1-41C0-BE6D-5C96EBF1E91A_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="294EC2B4-6243-43B4-8B70-8A779BA03D4B_at_usgs.gov" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-06 06:44:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14688.php">George Bosilca: "Re: [OMPI devel] Possible bug with derived datatypes and openib BTL in trunk"</a>
<li><strong>Previous message:</strong> <a href="14686.php">Larry Baker: "Re: [OMPI devel] oshmem fixed sized type support"</a>
<li><strong>In reply to:</strong> <a href="14686.php">Larry Baker: "Re: [OMPI devel] oshmem fixed sized type support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok -- if &lt;stdint.h&gt; is C99, then we're cool.
<br>
<p>Thanks Larry.
<br>
<p><p>On May 5, 2014, at 6:14 PM, Larry Baker &lt;baker_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The stdint.h header is Section 7.18 Integer types &lt;stdint.h&gt; in the C99 standard (I can mail you a PDF copy if you like).  It says
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 7.18.1.1 Exact-width integer types
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1	The typedef name intN_t designates a signed integer type with width N , no padding bits, and a two&#146;s complement representation. Thus, int8_t denotes a signed integer type with a width of exactly 8 bits.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2	The typedef name uintN_t designates an unsigned integer type with width N . Thus, uint24_t denotes an unsigned integer type with a width of exactly 24 bits.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 3	These types are optional. However, if an implementation provides integer types with widths of 8, 16, 32, or 64 bits, no padding bits, and (for the signed types) that have a two&#146;s complement representation, it shall define the corresponding typedef names.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If OpenMPI requires C99 conformance, stdint.h will be there, but you will have to check for any width (u)int_t's you care about by name.  Since these are typedefs, I am not sure how that might be done in CPP; a configure step might be required.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Larry Baker
</span><br>
<span class="quotelev1">&gt; US Geological Survey
</span><br>
<span class="quotelev1">&gt; 650-329-5608
</span><br>
<span class="quotelev1">&gt; baker_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 5 May 2014, at 2:46 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Josh --
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is this the Right fix?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I ask because we check for &lt;stdint.h&gt; in configure.  I'm sure it's always there for Linux, but is it *always* there?  Indeed, are all the fixed size types always guaranteed to be available?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 2, 2014, at 12:14 PM, svn-commit-mailer_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: jladd (Joshua Ladd)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2014-05-02 12:14:05 EDT (Fri, 02 May 2014)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 31605
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/31605">https://svn.open-mpi.org/trac/ompi/changeset/31605</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Adding missing include for OSHMEM changes necessary to support Java bindings.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk/oshmem/include/shmem.h.in |     2 +-                                      
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 files changed, 1 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/oshmem/include/shmem.h.in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/oshmem/include/shmem.h.in	Fri May  2 10:28:45 2014	(r31604)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/oshmem/include/shmem.h.in	2014-05-02 12:14:05 EDT (Fri, 02 May 2014)	(r31605)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -14,7 +14,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;stddef.h&gt;     /* include for ptrdiff_t */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#include &lt;stdint.h&gt;     /* include for fixed width types */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #if defined(c_plusplus) || defined(__cplusplus)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #    include &lt;complex&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #    define OSHMEM_COMPLEX_TYPE(type)    std::complex&lt;type&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14685.php">http://www.open-mpi.org/community/lists/devel/2014/05/14685.php</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="14688.php">George Bosilca: "Re: [OMPI devel] Possible bug with derived datatypes and openib BTL in trunk"</a>
<li><strong>Previous message:</strong> <a href="14686.php">Larry Baker: "Re: [OMPI devel] oshmem fixed sized type support"</a>
<li><strong>In reply to:</strong> <a href="14686.php">Larry Baker: "Re: [OMPI devel] oshmem fixed sized type support"</a>
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
