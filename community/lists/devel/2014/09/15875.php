<?
$subject_val = "Re: [OMPI devel] RFC: remove the --with-threads configure option";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 18 11:05:07 2014" -->
<!-- isoreceived="20140918150507" -->
<!-- sent="Thu, 18 Sep 2014 15:05:05 +0000" -->
<!-- isosent="20140918150505" -->
<!-- name="Pritchard Jr., Howard" -->
<!-- email="howardp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: remove the --with-threads configure option" -->
<!-- id="5F6FB0CDAF4F98419A0D970E1F65ED05B363D8_at_ECS-EXG-P-MB05.win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6A18000D-324F-4707-854C-5C319B341943_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: remove the --with-threads configure option<br>
<strong>From:</strong> Pritchard Jr., Howard (<em>howardp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-18 11:05:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15876.php">Vishwanath Venkatesan: "Re: [OMPI devel] Need to know your Github ID"</a>
<li><strong>Previous message:</strong> <a href="15874.php">Artem Polyakov: "Re: [OMPI devel] OPAL timing framework"</a>
<li><strong>In reply to:</strong> <a href="15873.php">Ralph Castain: "Re: [OMPI devel] RFC: remove the --with-threads configure option"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I second the motion.
<br>
<p>-----Original Message-----
<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Thursday, September 18, 2014 8:43 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] RFC: remove the --with-threads configure option
<br>
<p>None that I can think of - I'd remove it
<br>
<p>On Sep 18, 2014, at 5:23 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm unaware of a use case for --without-threads.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does anyone have one?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If not, then I think removing all that dead code would be a Good Thing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 18, 2014, at 7:03 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Folks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; for both trunk and v1.8 branch, configure takes the --with-threads option.
</span><br>
<span class="quotelev2">&gt;&gt; valid usages are
</span><br>
<span class="quotelev2">&gt;&gt; --with-threads, --with-threads=yes, --with-threads=posix and 
</span><br>
<span class="quotelev2">&gt;&gt; --with-threads=no
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /* v1.6 used to support the --with-threads=solaris */
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; if we try to configure with --with-threads=no, this will result in a 
</span><br>
<span class="quotelev2">&gt;&gt; fatal error :
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; checking for working POSIX threads package... yes checking for type 
</span><br>
<span class="quotelev2">&gt;&gt; of thread support... none
</span><br>
<span class="quotelev2">&gt;&gt; configure: error: User requested MPI threads, but no threading model 
</span><br>
<span class="quotelev2">&gt;&gt; supported
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; bottom line, the --with-threads configure option is useless in both 
</span><br>
<span class="quotelev2">&gt;&gt; v1.8 and trunk.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; is there any plan to support --with-threads=no in the future ?
</span><br>
<span class="quotelev2">&gt;&gt; if no, i'd like to simply remove the --with-threads option
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance for your feedback
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; FYI
</span><br>
<span class="quotelev2">&gt;&gt; there is still some dead code / bug related to solaris threads, and 
</span><br>
<span class="quotelev2">&gt;&gt; this will be removed / fixed see 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/4911">https://svn.open-mpi.org/trac/ompi/ticket/4911</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15865.php">http://www.open-mpi.org/community/lists/devel/2014/09/15865.php</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15867.php">http://www.open-mpi.org/community/lists/devel/2014/09/15867.php</a>
</span><br>
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15873.php">http://www.open-mpi.org/community/lists/devel/2014/09/15873.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15876.php">Vishwanath Venkatesan: "Re: [OMPI devel] Need to know your Github ID"</a>
<li><strong>Previous message:</strong> <a href="15874.php">Artem Polyakov: "Re: [OMPI devel] OPAL timing framework"</a>
<li><strong>In reply to:</strong> <a href="15873.php">Ralph Castain: "Re: [OMPI devel] RFC: remove the --with-threads configure option"</a>
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
