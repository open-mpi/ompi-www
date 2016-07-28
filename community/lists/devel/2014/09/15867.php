<?
$subject_val = "Re: [OMPI devel] RFC: remove the --with-threads configure option";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 18 08:23:29 2014" -->
<!-- isoreceived="20140918122329" -->
<!-- sent="Thu, 18 Sep 2014 12:23:28 +0000" -->
<!-- isosent="20140918122328" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: remove the --with-threads configure option" -->
<!-- id="4F510007-9A05-4487-A736-B776B0583038_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="541ABBF6.4010208_at_iferc.org" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-18 08:23:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15868.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] External loopback"</a>
<li><strong>Previous message:</strong> <a href="15866.php">Alina Sklarevich: "Re: [OMPI devel] Need to know your Github ID"</a>
<li><strong>In reply to:</strong> <a href="15865.php">Gilles Gouaillardet: "[OMPI devel] RFC: remove the --with-threads configure option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15873.php">Ralph Castain: "Re: [OMPI devel] RFC: remove the --with-threads configure option"</a>
<li><strong>Reply:</strong> <a href="15873.php">Ralph Castain: "Re: [OMPI devel] RFC: remove the --with-threads configure option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm unaware of a use case for --without-threads.
<br>
<p>Does anyone have one?
<br>
<p>If not, then I think removing all that dead code would be a Good Thing.
<br>
<p><p>On Sep 18, 2014, at 7:03 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for both trunk and v1.8 branch, configure takes the --with-threads option.
</span><br>
<span class="quotelev1">&gt; valid usages are
</span><br>
<span class="quotelev1">&gt; --with-threads, --with-threads=yes, --with-threads=posix and
</span><br>
<span class="quotelev1">&gt; --with-threads=no
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* v1.6 used to support the --with-threads=solaris */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if we try to configure with --with-threads=no, this will result in a
</span><br>
<span class="quotelev1">&gt; fatal error :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; checking for working POSIX threads package... yes
</span><br>
<span class="quotelev1">&gt; checking for type of thread support... none
</span><br>
<span class="quotelev1">&gt; configure: error: User requested MPI threads, but no threading model
</span><br>
<span class="quotelev1">&gt; supported
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bottom line, the --with-threads configure option is useless in both v1.8
</span><br>
<span class="quotelev1">&gt; and trunk.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is there any plan to support --with-threads=no in the future ?
</span><br>
<span class="quotelev1">&gt; if no, i'd like to simply remove the --with-threads option
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance for your feedback
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FYI
</span><br>
<span class="quotelev1">&gt; there is still some dead code / bug related to solaris threads, and this
</span><br>
<span class="quotelev1">&gt; will be removed / fixed
</span><br>
<span class="quotelev1">&gt; see <a href="https://svn.open-mpi.org/trac/ompi/ticket/4911">https://svn.open-mpi.org/trac/ompi/ticket/4911</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15865.php">http://www.open-mpi.org/community/lists/devel/2014/09/15865.php</a>
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
<li><strong>Next message:</strong> <a href="15868.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] External loopback"</a>
<li><strong>Previous message:</strong> <a href="15866.php">Alina Sklarevich: "Re: [OMPI devel] Need to know your Github ID"</a>
<li><strong>In reply to:</strong> <a href="15865.php">Gilles Gouaillardet: "[OMPI devel] RFC: remove the --with-threads configure option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15873.php">Ralph Castain: "Re: [OMPI devel] RFC: remove the --with-threads configure option"</a>
<li><strong>Reply:</strong> <a href="15873.php">Ralph Castain: "Re: [OMPI devel] RFC: remove the --with-threads configure option"</a>
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
