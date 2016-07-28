<?
$subject_val = "Re: [OMPI devel] RFC: use ISO C99 style struct initialization";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 19 14:29:10 2011" -->
<!-- isoreceived="20110119192910" -->
<!-- sent="Wed, 19 Jan 2011 14:29:05 -0500" -->
<!-- isosent="20110119192905" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: use ISO C99 style struct initialization" -->
<!-- id="9FF1B757-C45E-4E3A-B570-D4B7318F11F1_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.OSX.2.00.1101191215190.28834_at_panthera.lanl.gov" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-19 14:29:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8894.php">Jeff Squyres: "[OMPI devel] Building Open MPI components outside of the source tree"</a>
<li><strong>Previous message:</strong> <a href="8892.php">Nathan Hjelm: "[OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<li><strong>In reply to:</strong> <a href="8892.php">Nathan Hjelm: "[OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8895.php">Ralph Castain: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<li><strong>Reply:</strong> <a href="8895.php">Ralph Castain: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm with you on that. Let's create a fake module using the ISO C99 naming scheme, and leave it to MTT to figure out where is breaks!
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Jan 19, 2011, at 14:23 , Nathan Hjelm wrote:
<br>
<p><span class="quotelev1">&gt; I don't know if this has been discussed before or if this will break Windows (or some obscure platform) support but I would like to start using the ISO C99 style for struct initialization (see section 6.7.8, example 10 in <a href="http://www.open-std.org/jtc1/sc22/wg14/www/docs/n1124.pdf">http://www.open-std.org/jtc1/sc22/wg14/www/docs/n1124.pdf</a>). Using this style would make mca code much easier to read. Any thoughts? Would this break something?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Example:
</span><br>
<span class="quotelev1">&gt; struct module_foo {
</span><br>
<span class="quotelev1">&gt;       char *bar;
</span><br>
<span class="quotelev1">&gt;       int   baz;
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; struct foo foobar = {
</span><br>
<span class="quotelev1">&gt;       .bar = &quot;foobar&quot;,
</span><br>
<span class="quotelev1">&gt;       .baz = 1
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; HPC-3, LANL
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
<li><strong>Next message:</strong> <a href="8894.php">Jeff Squyres: "[OMPI devel] Building Open MPI components outside of the source tree"</a>
<li><strong>Previous message:</strong> <a href="8892.php">Nathan Hjelm: "[OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<li><strong>In reply to:</strong> <a href="8892.php">Nathan Hjelm: "[OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8895.php">Ralph Castain: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<li><strong>Reply:</strong> <a href="8895.php">Ralph Castain: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
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
