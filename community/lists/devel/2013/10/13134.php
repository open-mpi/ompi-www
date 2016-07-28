<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re:  shmem vs. oshmem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 25 18:13:56 2013" -->
<!-- isoreceived="20131025221356" -->
<!-- sent="Fri, 25 Oct 2013 22:13:34 +0000" -->
<!-- isosent="20131025221334" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re:  shmem vs. oshmem" -->
<!-- id="69A29AB53D57F54D81061A9E4E45B8FD4413A07D_at_EXMB01.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F992B6D_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re:  shmem vs. oshmem<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-25 18:13:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13135.php">Adrian Reber: "[OMPI devel] openmpi with FT enabled"</a>
<li><strong>Previous message:</strong> <a href="13133.php">Paul Hargrove: "Re: [OMPI devel] shmem vs. oshmem"</a>
<li><strong>In reply to:</strong> <a href="13132.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] shmem vs. oshmem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13137.php">Mike Dubman: "Re: [OMPI devel] [EXTERNAL] Re: shmem vs. oshmem"</a>
<li><strong>Reply:</strong> <a href="13137.php">Mike Dubman: "Re: [OMPI devel] [EXTERNAL] Re: shmem vs. oshmem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
i thought I mentioned this before, but the compilers should be oshcc, oshCC, and oshfort, with the starter named oshrun, according to Appendix C of the spec.

Brian

--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories
________________________________________
From: devel [devel-bounces_at_[hidden]] on behalf of Jeff Squyres (jsquyres) [jsquyres_at_[hidden]]
Sent: Friday, October 25, 2013 3:32 PM
To: Open MPI Developers
Subject: [EXTERNAL] Re: [OMPI devel] shmem vs. oshmem

On Oct 25, 2013, at 12:58 PM, Igor Ivanov &lt;Igor.Ivanov_at_[hidden]&gt; wrote:

&gt;&gt; - shmemcc / shmemfort / shmem_info / shmemrun
&gt;&gt;   --&gt; should these all be &quot;oshmem*&quot; ?
&gt;&gt;
&gt;&gt; - the examples are hello_shmem* and ring_shmem*
&gt;&gt;   --&gt; should these all be &quot;*_oshmem*&quot; ?
&gt; These examples are not OpenSHMEM specific.
&gt;&gt;
&gt;&gt; - there are header files named shmem*
&gt;&gt;   --&gt; I'm guessing the names &quot;shmem.h&quot; and &quot;shmem.fh&quot; are mandated
&gt; OpenSHMEM specification says

So ya, those names are standardized -- no problem.

But shouldn't we be branding everything else as oshmem?  Even if the examples are not oshmem-specific.

We're shipping oshmem, not shmem, so why not call them oshmem examples [that also happen to be shmem examples] -- rather than shmem examples [that also happen to be oshmem examples]?

--
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>

_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13135.php">Adrian Reber: "[OMPI devel] openmpi with FT enabled"</a>
<li><strong>Previous message:</strong> <a href="13133.php">Paul Hargrove: "Re: [OMPI devel] shmem vs. oshmem"</a>
<li><strong>In reply to:</strong> <a href="13132.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] shmem vs. oshmem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13137.php">Mike Dubman: "Re: [OMPI devel] [EXTERNAL] Re: shmem vs. oshmem"</a>
<li><strong>Reply:</strong> <a href="13137.php">Mike Dubman: "Re: [OMPI devel] [EXTERNAL] Re: shmem vs. oshmem"</a>
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
