<?
$subject_val = "Re: [OMPI devel] VT support for 1.5";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  7 10:38:11 2011" -->
<!-- isoreceived="20110607143811" -->
<!-- sent="Tue, 7 Jun 2011 10:38:06 -0400" -->
<!-- isosent="20110607143806" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] VT support for 1.5" -->
<!-- id="78A2CDB6-3145-484B-9749-40989C9B4963_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2D7B83A2-FA7D-4D5D-AA72-BEF7B461DD60_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] VT support for 1.5<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-07 10:38:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9307.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9305.php">Jeff Squyres: "Re: [OMPI devel] VT support for 1.5"</a>
<li><strong>In reply to:</strong> <a href="9305.php">Jeff Squyres: "Re: [OMPI devel] VT support for 1.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9309.php">Jeff Squyres: "Re: [OMPI devel] VT support for 1.5"</a>
<li><strong>Reply:</strong> <a href="9309.php">Jeff Squyres: "Re: [OMPI devel] VT support for 1.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My 'svn status' indicates no differences. I always build using a VPATH, and in this case I did remove the build directory. However, the issue persisted.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Jun 7, 2011, at 10:31 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I've seen VT builds get confused sometimes.  I'm not sure of the exact cause, but if I get a new checkout, all the problems seem to go away.  I've never had the time to track it down.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you get a clean / new checkout and see if that fixes the problem?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 7, 2011, at 10:27 AM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I can't compile the 1.5 is I do not disable VT. Using the following configure line:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ../ompi/configure --prefix=/home/bosilca/opt/stable/1.5/debug --enable-mpirun-prefix-by-default --with-knem=/usr/local/knem --with-mx=/usr/local/mx-1.2.11 --enable-picky --enable-debug
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I get:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ar: /home/bosilca/unstable/1.5/debug/ompi/contrib/vt/vt/util/.libs/libutil.a: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any ideas?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; george.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9307.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9305.php">Jeff Squyres: "Re: [OMPI devel] VT support for 1.5"</a>
<li><strong>In reply to:</strong> <a href="9305.php">Jeff Squyres: "Re: [OMPI devel] VT support for 1.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9309.php">Jeff Squyres: "Re: [OMPI devel] VT support for 1.5"</a>
<li><strong>Reply:</strong> <a href="9309.php">Jeff Squyres: "Re: [OMPI devel] VT support for 1.5"</a>
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
