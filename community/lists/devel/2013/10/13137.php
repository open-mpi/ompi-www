<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: shmem vs. oshmem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 28 13:03:28 2013" -->
<!-- isoreceived="20131028170328" -->
<!-- sent="Mon, 28 Oct 2013 19:03:27 +0200" -->
<!-- isosent="20131028170327" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: shmem vs. oshmem" -->
<!-- id="CAAO1KyauoUUfW9LUj2wxd=q6fD5F0ziiihOP8MHTrVnXUHpd+g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="69A29AB53D57F54D81061A9E4E45B8FD4413A07D_at_EXMB01.srn.sandia.gov" -->
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
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-28 13:03:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13138.php">Adrian Reber: "Re: [OMPI devel] openmpi with FT enabled"</a>
<li><strong>Previous message:</strong> <a href="13136.php">Ralph Castain: "Re: [OMPI devel] openmpi with FT enabled"</a>
<li><strong>In reply to:</strong> <a href="13134.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  shmem vs. oshmem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13139.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: shmem vs. oshmem"</a>
<li><strong>Reply:</strong> <a href="13139.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: shmem vs. oshmem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Brian,
<br>
The code in trunk already generates:
<br>
<p>oshcc        oshfort      oshmem_info  oshrun
<br>
<p><p>On Sat, Oct 26, 2013 at 12:13 AM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; i thought I mentioned this before, but the compilers should be oshcc,
</span><br>
<span class="quotelev1">&gt; oshCC, and oshfort, with the starter named oshrun, according to Appendix C
</span><br>
<span class="quotelev1">&gt; of the spec.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;   Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;   Scalable System Software Group
</span><br>
<span class="quotelev1">&gt;   Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: devel [devel-bounces_at_[hidden]] on behalf of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; (jsquyres) [jsquyres_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Friday, October 25, 2013 3:32 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: [EXTERNAL] Re: [OMPI devel] shmem vs. oshmem
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 25, 2013, at 12:58 PM, Igor Ivanov &lt;Igor.Ivanov_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - shmemcc / shmemfort / shmem_info / shmemrun
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   --&gt; should these all be &quot;oshmem*&quot; ?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - the examples are hello_shmem* and ring_shmem*
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   --&gt; should these all be &quot;*_oshmem*&quot; ?
</span><br>
<span class="quotelev2">&gt; &gt; These examples are not OpenSHMEM specific.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - there are header files named shmem*
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   --&gt; I'm guessing the names &quot;shmem.h&quot; and &quot;shmem.fh&quot; are mandated
</span><br>
<span class="quotelev2">&gt; &gt; OpenSHMEM specification says
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So ya, those names are standardized -- no problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But shouldn't we be branding everything else as oshmem?  Even if the
</span><br>
<span class="quotelev1">&gt; examples are not oshmem-specific.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We're shipping oshmem, not shmem, so why not call them oshmem examples
</span><br>
<span class="quotelev1">&gt; [that also happen to be shmem examples] -- rather than shmem examples [that
</span><br>
<span class="quotelev1">&gt; also happen to be oshmem examples]?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13137/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13138.php">Adrian Reber: "Re: [OMPI devel] openmpi with FT enabled"</a>
<li><strong>Previous message:</strong> <a href="13136.php">Ralph Castain: "Re: [OMPI devel] openmpi with FT enabled"</a>
<li><strong>In reply to:</strong> <a href="13134.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  shmem vs. oshmem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13139.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: shmem vs. oshmem"</a>
<li><strong>Reply:</strong> <a href="13139.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: shmem vs. oshmem"</a>
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
