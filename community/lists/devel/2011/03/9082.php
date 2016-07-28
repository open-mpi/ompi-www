<?
$subject_val = "Re: [OMPI devel] Old Linux kernels";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 16 10:14:13 2011" -->
<!-- isoreceived="20110316141413" -->
<!-- sent="Wed, 16 Mar 2011 10:14:07 -0400" -->
<!-- isosent="20110316141407" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Old Linux kernels" -->
<!-- id="4129A89B-5EDB-43FA-A5F8-4144BBC64824_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D80A3A5.7010000_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Old Linux kernels<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-16 10:14:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9083.php">Jeff Squyres: "[OMPI devel] 1.5.3rc2 posted"</a>
<li><strong>Previous message:</strong> <a href="9081.php">Jeff Squyres: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<li><strong>In reply to:</strong> <a href="9079.php">Paul H. Hargrove: "Re: [OMPI devel] Old Linux kernels"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 16, 2011, at 7:48 AM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; I have looked before for symbols to distinguish LinuxThreads from NPTL, but I was not successful in finding anything.  I don't recall if I examined headers for differences, but the implementations are binary compatible by design, making differences intentionally minimal.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I suppose one can grep the pthreads.h header for the following:
</span><br>
<span class="quotelev1">&gt; /* Linuxthreads - a simple clone()-based implementation of Posix        */
</span><br>
<span class="quotelev1">&gt; /* threads for Linux.                                                   */
</span><br>
<span class="quotelev1">&gt; /* Copyright (C) 1996 Xavier Leroy (Xavier.Leroy_at_[hidden])              */
</span><br>
<p>I'd rather not grep -- that would entail finding pthread.h, which could be tricky in a cross-compile scenario (i.e., it is likely not in /usr/include/pthread.h).
<br>
<p>Could you send me the pthread.h from that RH8 box?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9083.php">Jeff Squyres: "[OMPI devel] 1.5.3rc2 posted"</a>
<li><strong>Previous message:</strong> <a href="9081.php">Jeff Squyres: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<li><strong>In reply to:</strong> <a href="9079.php">Paul H. Hargrove: "Re: [OMPI devel] Old Linux kernels"</a>
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
