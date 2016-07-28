<?
$subject_val = "Re: [OMPI devel] RFC: use ISO C99 style struct initialization";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 19 17:22:42 2011" -->
<!-- isoreceived="20110119222242" -->
<!-- sent="Wed, 19 Jan 2011 15:22:38 -0700 (MST)" -->
<!-- isosent="20110119222238" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: use ISO C99 style struct initialization" -->
<!-- id="alpine.OSX.2.00.1101191521510.28834_at_panthera.lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="0A65D95E-56B2-4133-9A0C-EBD70F99DB39_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: use ISO C99 style struct initialization<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-19 17:22:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8901.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Building Open MPI components outside of the sourcetree"</a>
<li><strong>Previous message:</strong> <a href="8899.php">George Bosilca: "Re: [OMPI devel] Building Open MPI components outside of the source tree"</a>
<li><strong>In reply to:</strong> <a href="8896.php">Jeff Squyres: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8902.php">Terry Dontje: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<li><strong>Reply:</strong> <a href="8902.php">Terry Dontje: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Done. I added the module orte/mca/debugger/dummy and I will remove it tomorrow.
<br>
<p>-Nathan
<br>
HPC-3, LANL
<br>
<p>On Wed, 19 Jan 2011, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; +1 on Ralph and George's comments.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Want to make a dummy component somewhere that uses this kind of initialization and see what happens?  Put a test for the C99 initialization style in configure.m4 to see if it works or not; MTT will then check this for all the compilers that we care about.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 19, 2011, at 3:58 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I believe the majority of structs used in OMPI are actually declared to be opal objects of some flavor, so I'm not sure how much this will actually accomplish. Other than that, I have no real objection - either way works fine for me.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 19, 2011, at 12:29 PM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm with you on that. Let's create a fake module using the ISO C99 naming scheme, and leave it to MTT to figure out where is breaks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 19, 2011, at 14:23 , Nathan Hjelm wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I don't know if this has been discussed before or if this will break Windows (or some obscure platform) support but I would like to start using the ISO C99 style for struct initialization (see section 6.7.8, example 10 in <a href="http://www.open-std.org/jtc1/sc22/wg14/www/docs/n1124.pdf">http://www.open-std.org/jtc1/sc22/wg14/www/docs/n1124.pdf</a>). Using this style would make mca code much easier to read. Any thoughts? Would this break something?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Example:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; struct module_foo {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     char *bar;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     int   baz;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; };
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; struct foo foobar = {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     .bar = &quot;foobar&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     .baz = 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; };
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Nathan
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; HPC-3, LANL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8901.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Building Open MPI components outside of the sourcetree"</a>
<li><strong>Previous message:</strong> <a href="8899.php">George Bosilca: "Re: [OMPI devel] Building Open MPI components outside of the source tree"</a>
<li><strong>In reply to:</strong> <a href="8896.php">Jeff Squyres: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8902.php">Terry Dontje: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<li><strong>Reply:</strong> <a href="8902.php">Terry Dontje: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
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
