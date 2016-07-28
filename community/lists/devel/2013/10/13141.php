<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: shmem vs. oshmem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 28 14:22:35 2013" -->
<!-- isoreceived="20131028182235" -->
<!-- sent="Mon, 28 Oct 2013 18:22:03 +0000" -->
<!-- isosent="20131028182203" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: shmem vs. oshmem" -->
<!-- id="CE940750.14995%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F996ADF_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re: shmem vs. oshmem<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-28 14:22:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13142.php">Mike Dubman: "Re: [OMPI devel] [EXTERNAL] Re: shmem vs. oshmem"</a>
<li><strong>Previous message:</strong> <a href="13140.php">Ralph Castain: "Re: [OMPI devel] openmpi with FT enabled"</a>
<li><strong>In reply to:</strong> <a href="13139.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: shmem vs. oshmem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13142.php">Mike Dubman: "Re: [OMPI devel] [EXTERNAL] Re: shmem vs. oshmem"</a>
<li><strong>Reply:</strong> <a href="13142.php">Mike Dubman: "Re: [OMPI devel] [EXTERNAL] Re: shmem vs. oshmem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not sure what we gain by having them.  It's a new (to us) product;
<br>
let's not support legacy names.
<br>
<p>Brian
<br>
<p>On 10/28/13 11:40 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;Ah -- my mistake in the original post: I now see that it installs *both*
</span><br>
<span class="quotelev1">&gt;shmemcc and oshcc (and friends).  I didn't notice the osh* versions in my
</span><br>
<span class="quotelev1">&gt;initial post.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The question still remains, though -- do we still want these names
</span><br>
<span class="quotelev1">&gt;installed:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-----
</span><br>
<span class="quotelev1">&gt;$ cd $prefix/bin
</span><br>
<span class="quotelev1">&gt;$ ls -1 shmem*
</span><br>
<span class="quotelev1">&gt;shmemcc@
</span><br>
<span class="quotelev1">&gt;shmemfort@
</span><br>
<span class="quotelev1">&gt;shmemrun@
</span><br>
<span class="quotelev1">&gt;-----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Oct 28, 2013, at 1:03 PM, Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks Brian,
</span><br>
<span class="quotelev2">&gt;&gt; The code in trunk already generates:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; oshcc        oshfort      oshmem_info  oshrun
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sat, Oct 26, 2013 at 12:13 AM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt; i thought I mentioned this before, but the compilers should be oshcc,
</span><br>
<span class="quotelev2">&gt;&gt;oshCC, and oshfort, with the starter named oshrun, according to Appendix
</span><br>
<span class="quotelev2">&gt;&gt;C of the spec.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;   Brian W. Barrett
</span><br>
<span class="quotelev2">&gt;&gt;   Scalable System Software Group
</span><br>
<span class="quotelev2">&gt;&gt;   Sandia National Laboratories
</span><br>
<span class="quotelev2">&gt;&gt; ________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; From: devel [devel-bounces_at_[hidden]] on behalf of Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;(jsquyres) [jsquyres_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Friday, October 25, 2013 3:32 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [EXTERNAL] Re: [OMPI devel] shmem vs. oshmem
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 25, 2013, at 12:58 PM, Igor Ivanov &lt;Igor.Ivanov_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; - shmemcc / shmemfort / shmem_info / shmemrun
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;   --&gt; should these all be &quot;oshmem*&quot; ?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; - the examples are hello_shmem* and ring_shmem*
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;   --&gt; should these all be &quot;*_oshmem*&quot; ?
</span><br>
<span class="quotelev3">&gt;&gt; &gt; These examples are not OpenSHMEM specific.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; - there are header files named shmem*
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;   --&gt; I'm guessing the names &quot;shmem.h&quot; and &quot;shmem.fh&quot; are mandated
</span><br>
<span class="quotelev3">&gt;&gt; &gt; OpenSHMEM specification says
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So ya, those names are standardized -- no problem.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But shouldn't we be branding everything else as oshmem?  Even if the
</span><br>
<span class="quotelev2">&gt;&gt;examples are not oshmem-specific.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We're shipping oshmem, not shmem, so why not call them oshmem examples
</span><br>
<span class="quotelev2">&gt;&gt;[that also happen to be shmem examples] -- rather than shmem examples
</span><br>
<span class="quotelev2">&gt;&gt;[that also happen to be oshmem examples]?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- 
</span><br>
<span class="quotelev1">&gt;Jeff Squyres
</span><br>
<span class="quotelev1">&gt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13142.php">Mike Dubman: "Re: [OMPI devel] [EXTERNAL] Re: shmem vs. oshmem"</a>
<li><strong>Previous message:</strong> <a href="13140.php">Ralph Castain: "Re: [OMPI devel] openmpi with FT enabled"</a>
<li><strong>In reply to:</strong> <a href="13139.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: shmem vs. oshmem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13142.php">Mike Dubman: "Re: [OMPI devel] [EXTERNAL] Re: shmem vs. oshmem"</a>
<li><strong>Reply:</strong> <a href="13142.php">Mike Dubman: "Re: [OMPI devel] [EXTERNAL] Re: shmem vs. oshmem"</a>
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
