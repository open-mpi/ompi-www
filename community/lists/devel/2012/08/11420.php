<?
$subject_val = "Re: [OMPI devel] 1.6.1rc3 - 3 of 5 tests failed on OSX 10.8";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 20 15:30:55 2012" -->
<!-- isoreceived="20120820193055" -->
<!-- sent="Mon, 20 Aug 2012 15:30:29 -0400" -->
<!-- isosent="20120820193029" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.6.1rc3 - 3 of 5 tests failed on OSX 10.8" -->
<!-- id="CDF6872F-9A6B-41E1-BB4F-94DEBA57F396_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1546254521.68738.1345311759284.JavaMail.mail_at_webmail09" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-20 15:30:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11421.php">Ralph Castain: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>Previous message:</strong> <a href="11419.php">Jeff Squyres: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>In reply to:</strong> <a href="11416.php">P. Martin: "[OMPI devel] 1.6.1rc3 - 3 of 5 tests failed on OSX 10.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11423.php">Ralph Castain: "Re: [OMPI devel] 1.6.1rc3 - 3 of 5 tests failed on OSX 10.8"</a>
<li><strong>Reply:</strong> <a href="11423.php">Ralph Castain: "Re: [OMPI devel] 1.6.1rc3 - 3 of 5 tests failed on OSX 10.8"</a>
<li><strong>Reply:</strong> <a href="11424.php">Dmitri Gribenko: "Re: [OMPI devel] 1.6.1rc3 - 3 of 5 tests failed on OSX 10.8"</a>
<li><strong>Reply:</strong> <a href="11438.php">Christopher Samuel: "Re: [OMPI devel] 1.6.1rc3 - 3 of 5 tests failed on OSX 10.8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm.  That sucks.  
<br>
<p>I have Lion, not Mountain Lion.  All those tests pass for me with both:
<br>
<p>[15:28] jsquyres-mac:~ % clang --version
<br>
Apple clang version 3.0 (tags/Apple/clang-211.12) (based on LLVM 3.0svn)
<br>
Target: x86_64-apple-darwin11.4.0
<br>
Thread model: posix
<br>
<p>and
<br>
<p>[15:28] jsquyres-mac:~ % gcc --version
<br>
i686-apple-darwin11-llvm-gcc-4.2 (GCC) 4.2.1 (Based on Apple Inc. build 5658) (LLVM build 2336.1.00)
<br>
Copyright (C) 2007 Free Software Foundation, Inc.
<br>
This is free software; see the source for copying conditions.  There is NO
<br>
warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
<br>
<p>I see a clang 3.1 on <a href="http://llvm.org/releases/">http://llvm.org/releases/</a>, but I don't see a 4.0.  Is that a released version?
<br>
<p><p>On Aug 18, 2012, at 1:42 PM, P. Martin wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for the new 1.6.1rc3.  It compiles well, but
</span><br>
<span class="quotelev1">&gt; I get 3 of 5 tests failed on OSX 10.8 using clang-4.0.
</span><br>
<span class="quotelev1">&gt; The output is here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://gist.github.com/3388612">https://gist.github.com/3388612</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If there is specific output from the failing tests you need,
</span><br>
<span class="quotelev1">&gt; let me know how to generate it.  When I compile and test
</span><br>
<span class="quotelev1">&gt; with llvm-gcc-4.2.1, everthing is ok.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="11421.php">Ralph Castain: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>Previous message:</strong> <a href="11419.php">Jeff Squyres: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>In reply to:</strong> <a href="11416.php">P. Martin: "[OMPI devel] 1.6.1rc3 - 3 of 5 tests failed on OSX 10.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11423.php">Ralph Castain: "Re: [OMPI devel] 1.6.1rc3 - 3 of 5 tests failed on OSX 10.8"</a>
<li><strong>Reply:</strong> <a href="11423.php">Ralph Castain: "Re: [OMPI devel] 1.6.1rc3 - 3 of 5 tests failed on OSX 10.8"</a>
<li><strong>Reply:</strong> <a href="11424.php">Dmitri Gribenko: "Re: [OMPI devel] 1.6.1rc3 - 3 of 5 tests failed on OSX 10.8"</a>
<li><strong>Reply:</strong> <a href="11438.php">Christopher Samuel: "Re: [OMPI devel] 1.6.1rc3 - 3 of 5 tests failed on OSX 10.8"</a>
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
