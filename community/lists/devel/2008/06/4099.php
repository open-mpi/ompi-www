<?
$subject_val = "Re: [OMPI devel] heterogeneous support";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  5 16:56:32 2008" -->
<!-- isoreceived="20080605205632" -->
<!-- sent="Thu, 5 Jun 2008 16:56:17 -0400" -->
<!-- isosent="20080605205617" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] heterogeneous support" -->
<!-- id="63B8DFA7-D22D-476E-A77D-8B64D0506ED1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.64.0806051652060.24150_at_marvin.we-be-smart.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] heterogeneous support<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-05 16:56:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4100.php">Jeff Squyres: "Re: [OMPI devel] some Makefile.am questions"</a>
<li><strong>Previous message:</strong> <a href="4098.php">Brian W. Barrett: "Re: [OMPI devel] heterogeneous support"</a>
<li><strong>In reply to:</strong> <a href="4098.php">Brian W. Barrett: "Re: [OMPI devel] heterogeneous support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good call -- I just checked ompi/proc/proc.c and we *do* check.  If  
<br>
you start a heterogeneous job and we don't have support for it, we  
<br>
show_help and barf.
<br>
<p>I'll change the default tonight.
<br>
<p><p>On Jun 5, 2008, at 4:53 PM, Brian W. Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, 5 Jun 2008, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I just noticed that heterogeneous MPI support is enabled by default.
</span><br>
<span class="quotelev2">&gt;&gt; Do we really want this?  Doesn't it add a little overhead (probably
</span><br>
<span class="quotelev2">&gt;&gt; noticeable on shared memory)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'd be comfortable with users specifically having to enable
</span><br>
<span class="quotelev2">&gt;&gt; heterogeneous support via configure and having [slightly] better out-
</span><br>
<span class="quotelev2">&gt;&gt; of-the-box performance for the common (homogeneous) case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think it was initially on by default because we didn't have a good  
</span><br>
<span class="quotelev1">&gt; way
</span><br>
<span class="quotelev1">&gt; of detecting that the job was heterogeneous when that was setup.  I
</span><br>
<span class="quotelev1">&gt; believe we do now, so it probably makes sense to change the default.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4100.php">Jeff Squyres: "Re: [OMPI devel] some Makefile.am questions"</a>
<li><strong>Previous message:</strong> <a href="4098.php">Brian W. Barrett: "Re: [OMPI devel] heterogeneous support"</a>
<li><strong>In reply to:</strong> <a href="4098.php">Brian W. Barrett: "Re: [OMPI devel] heterogeneous support"</a>
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
