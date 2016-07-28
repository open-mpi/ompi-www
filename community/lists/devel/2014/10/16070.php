<?
$subject_val = "Re: [OMPI devel] Missing f08 binding for Win_allocate";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 17 15:23:52 2014" -->
<!-- isoreceived="20141017192352" -->
<!-- sent="Fri, 17 Oct 2014 19:23:30 +0000" -->
<!-- isosent="20141017192330" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Missing f08 binding for Win_allocate" -->
<!-- id="E4007629-1502-4AE3-B1C5-C7FA4B6F6306_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="323382168.877.1413381596332.JavaMail.root_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Missing f08 binding for Win_allocate<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-17 15:23:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16071.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: Open MPI 1.8: link problem when	Fortran+C+Platform LSF"</a>
<li><strong>Previous message:</strong> <a href="16069.php">Artem Polyakov: "Re: [OMPI devel] OMPI BCOL hang with PMI1"</a>
<li><strong>In reply to:</strong> <a href="16044.php">Christoph Niethammer: "[OMPI devel] Missing f08 binding for Win_allocate"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Christoph -
<br>
<p>Thanks for sending this patch. I've been on travel this week, which always makes my inbox a disaster - sorry I didn't reply earlier. 
<br>
<p>You did the right thing by filing a PR against master. It allows the use of the nice GitHub code review tools. 
<br>
<p>I've already replied on that PR; just wanted to close the loop here in the mail thread. 
<br>
<p>Sent from my phone. No type good. 
<br>
<p><span class="quotelev1">&gt; On Oct 15, 2014, at 7:00 AM, &quot;Christoph Niethammer&quot; &lt;niethammer_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The f08 binding for Win_allocate is missing in master and 1.8 series.
</span><br>
<span class="quotelev1">&gt; I fixed the problem based on master. The attached patch also works for 1.8.3.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I found some documentation in the wiki but I am not sure if this is intended for small fixes like this as well.
</span><br>
<span class="quotelev1">&gt; How shall I proceed to get this into master after the svn-&gt;git transition?
</span><br>
<span class="quotelev1">&gt; * Open a bug first
</span><br>
<span class="quotelev1">&gt; * fork + pull request or 
</span><br>
<span class="quotelev1">&gt; * email patch from git format-patch to devel list?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt; Christoph Niethammer
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Christoph Niethammer
</span><br>
<span class="quotelev1">&gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev1">&gt; Nobelstrasse 19
</span><br>
<span class="quotelev1">&gt; 70569 Stuttgart
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tel: ++49(0)711-685-87203
</span><br>
<span class="quotelev1">&gt; email: niethammer_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.hlrs.de/people/niethammer">http://www.hlrs.de/people/niethammer</a>
</span><br>
<span class="quotelev1">&gt; &lt;0001-Add-missing-Fortran-binding-for-Win_allocate.patch&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16044.php">http://www.open-mpi.org/community/lists/devel/2014/10/16044.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16071.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: Open MPI 1.8: link problem when	Fortran+C+Platform LSF"</a>
<li><strong>Previous message:</strong> <a href="16069.php">Artem Polyakov: "Re: [OMPI devel] OMPI BCOL hang with PMI1"</a>
<li><strong>In reply to:</strong> <a href="16044.php">Christoph Niethammer: "[OMPI devel] Missing f08 binding for Win_allocate"</a>
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
