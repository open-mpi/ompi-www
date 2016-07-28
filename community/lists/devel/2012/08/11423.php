<?
$subject_val = "Re: [OMPI devel] 1.6.1rc3 - 3 of 5 tests failed on OSX 10.8";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 20 21:19:34 2012" -->
<!-- isoreceived="20120821011934" -->
<!-- sent="Mon, 20 Aug 2012 18:19:27 -0700" -->
<!-- isosent="20120821011927" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.6.1rc3 - 3 of 5 tests failed on OSX 10.8" -->
<!-- id="2F17B8F1-A486-401A-A9AD-D86181151FE0_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CDF6872F-9A6B-41E1-BB4F-94DEBA57F396_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.6.1rc3 - 3 of 5 tests failed on OSX 10.8<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-20 21:19:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11424.php">Dmitri Gribenko: "Re: [OMPI devel] 1.6.1rc3 - 3 of 5 tests failed on OSX 10.8"</a>
<li><strong>Previous message:</strong> <a href="11422.php">Jeff Squyres: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>In reply to:</strong> <a href="11420.php">Jeff Squyres: "Re: [OMPI devel] 1.6.1rc3 - 3 of 5 tests failed on OSX 10.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11424.php">Dmitri Gribenko: "Re: [OMPI devel] 1.6.1rc3 - 3 of 5 tests failed on OSX 10.8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mountain Lion ships with 4.0
<br>
<p>Guess I could give it a shot, but I never use clang myself.
<br>
<p>On Aug 20, 2012, at 12:30 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hmm.  That sucks.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have Lion, not Mountain Lion.  All those tests pass for me with both:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [15:28] jsquyres-mac:~ % clang --version
</span><br>
<span class="quotelev1">&gt; Apple clang version 3.0 (tags/Apple/clang-211.12) (based on LLVM 3.0svn)
</span><br>
<span class="quotelev1">&gt; Target: x86_64-apple-darwin11.4.0
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [15:28] jsquyres-mac:~ % gcc --version
</span><br>
<span class="quotelev1">&gt; i686-apple-darwin11-llvm-gcc-4.2 (GCC) 4.2.1 (Based on Apple Inc. build 5658) (LLVM build 2336.1.00)
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2007 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; This is free software; see the source for copying conditions.  There is NO
</span><br>
<span class="quotelev1">&gt; warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I see a clang 3.1 on <a href="http://llvm.org/releases/">http://llvm.org/releases/</a>, but I don't see a 4.0.  Is that a released version?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 18, 2012, at 1:42 PM, P. Martin wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the new 1.6.1rc3.  It compiles well, but
</span><br>
<span class="quotelev2">&gt;&gt; I get 3 of 5 tests failed on OSX 10.8 using clang-4.0.
</span><br>
<span class="quotelev2">&gt;&gt; The output is here:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://gist.github.com/3388612">https://gist.github.com/3388612</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If there is specific output from the failing tests you need,
</span><br>
<span class="quotelev2">&gt;&gt; let me know how to generate it.  When I compile and test
</span><br>
<span class="quotelev2">&gt;&gt; with llvm-gcc-4.2.1, everthing is ok.
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
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="11424.php">Dmitri Gribenko: "Re: [OMPI devel] 1.6.1rc3 - 3 of 5 tests failed on OSX 10.8"</a>
<li><strong>Previous message:</strong> <a href="11422.php">Jeff Squyres: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>In reply to:</strong> <a href="11420.php">Jeff Squyres: "Re: [OMPI devel] 1.6.1rc3 - 3 of 5 tests failed on OSX 10.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11424.php">Dmitri Gribenko: "Re: [OMPI devel] 1.6.1rc3 - 3 of 5 tests failed on OSX 10.8"</a>
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
