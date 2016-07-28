<?
$subject_val = "Re: [OMPI devel] RFC: Remove autogen.sh sym link";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  8 09:34:19 2014" -->
<!-- isoreceived="20140508133419" -->
<!-- sent="Thu, 8 May 2014 14:34:17 +0100" -->
<!-- isosent="20140508133417" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove autogen.sh sym link" -->
<!-- id="2A8B67F2-1174-4C2B-8D13-E5CC7CBEABA7_at_pittman.co.uk" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="54D0016F-D9E7-4589-B39C-28B318AB1BA6_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Remove autogen.sh sym link<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-08 09:34:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14758.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Previous message:</strong> <a href="14756.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove autogen.sh sym link"</a>
<li><strong>In reply to:</strong> <a href="14756.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove autogen.sh sym link"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was thinking of something even easier than that ;)  I try to keep an eye on the message queue functionality so it&#146;s not often that I need to build code over four years old from source.
<br>
<p>Ashley.
<br>
<p>On 8 May 2014, at 14:27, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On May 8, 2014, at 8:59 AM, Ashley Pittman &lt;ashley_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This will break my build but it&#146;s an easy fix so don&#146;t let that stop you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Something like this should do ya:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- bogus	2014-05-08 06:26:19.759259593 -0700
</span><br>
<span class="quotelev1">&gt; +++ bogus-new	2014-05-08 06:26:22.567481480 -0700
</span><br>
<span class="quotelev1">&gt; @@ -14,7 +14,11 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -./autogen.sh
</span><br>
<span class="quotelev1">&gt; +if test -x autogen.sh; then
</span><br>
<span class="quotelev1">&gt; +   ./autogen.sh
</span><br>
<span class="quotelev1">&gt; +else
</span><br>
<span class="quotelev1">&gt; +   ./autogen.pl
</span><br>
<span class="quotelev1">&gt; +fi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14756.php">http://www.open-mpi.org/community/lists/devel/2014/05/14756.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14758.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Previous message:</strong> <a href="14756.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove autogen.sh sym link"</a>
<li><strong>In reply to:</strong> <a href="14756.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove autogen.sh sym link"</a>
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
