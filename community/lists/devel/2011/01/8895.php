<?
$subject_val = "Re: [OMPI devel] RFC: use ISO C99 style struct initialization";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 19 15:58:44 2011" -->
<!-- isoreceived="20110119205844" -->
<!-- sent="Wed, 19 Jan 2011 13:58:34 -0700" -->
<!-- isosent="20110119205834" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: use ISO C99 style struct initialization" -->
<!-- id="BFEAF665-540D-4F80-831B-06A4CCBDB6DA_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9FF1B757-C45E-4E3A-B570-D4B7318F11F1_at_eecs.utk.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-19 15:58:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8896.php">Jeff Squyres: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<li><strong>Previous message:</strong> <a href="8894.php">Jeff Squyres: "[OMPI devel] Building Open MPI components outside of the source tree"</a>
<li><strong>In reply to:</strong> <a href="8893.php">George Bosilca: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8896.php">Jeff Squyres: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<li><strong>Reply:</strong> <a href="8896.php">Jeff Squyres: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe the majority of structs used in OMPI are actually declared to be opal objects of some flavor, so I'm not sure how much this will actually accomplish. Other than that, I have no real objection - either way works fine for me.
<br>
<p><p>On Jan 19, 2011, at 12:29 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I'm with you on that. Let's create a fake module using the ISO C99 naming scheme, and leave it to MTT to figure out where is breaks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 19, 2011, at 14:23 , Nathan Hjelm wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't know if this has been discussed before or if this will break Windows (or some obscure platform) support but I would like to start using the ISO C99 style for struct initialization (see section 6.7.8, example 10 in <a href="http://www.open-std.org/jtc1/sc22/wg14/www/docs/n1124.pdf">http://www.open-std.org/jtc1/sc22/wg14/www/docs/n1124.pdf</a>). Using this style would make mca code much easier to read. Any thoughts? Would this break something?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Example:
</span><br>
<span class="quotelev2">&gt;&gt; struct module_foo {
</span><br>
<span class="quotelev2">&gt;&gt;      char *bar;
</span><br>
<span class="quotelev2">&gt;&gt;      int   baz;
</span><br>
<span class="quotelev2">&gt;&gt; };
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; struct foo foobar = {
</span><br>
<span class="quotelev2">&gt;&gt;      .bar = &quot;foobar&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;      .baz = 1
</span><br>
<span class="quotelev2">&gt;&gt; };
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Nathan
</span><br>
<span class="quotelev2">&gt;&gt; HPC-3, LANL
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8896.php">Jeff Squyres: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<li><strong>Previous message:</strong> <a href="8894.php">Jeff Squyres: "[OMPI devel] Building Open MPI components outside of the source tree"</a>
<li><strong>In reply to:</strong> <a href="8893.php">George Bosilca: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8896.php">Jeff Squyres: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<li><strong>Reply:</strong> <a href="8896.php">Jeff Squyres: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
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
