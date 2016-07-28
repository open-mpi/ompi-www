<?
$subject_val = "Re: [OMPI devel] RFC: remove the --with-threads configure option";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 18 10:44:14 2014" -->
<!-- isoreceived="20140918144414" -->
<!-- sent="Thu, 18 Sep 2014 07:43:08 -0700" -->
<!-- isosent="20140918144308" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: remove the --with-threads configure option" -->
<!-- id="6A18000D-324F-4707-854C-5C319B341943_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F510007-9A05-4487-A736-B776B0583038_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-18 10:43:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15874.php">Artem Polyakov: "Re: [OMPI devel] OPAL timing framework"</a>
<li><strong>Previous message:</strong> <a href="15872.php">Ralph Castain: "Re: [OMPI devel] OPAL timing framework"</a>
<li><strong>In reply to:</strong> <a href="15867.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: remove the --with-threads configure option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15875.php">Pritchard Jr., Howard: "Re: [OMPI devel] RFC: remove the --with-threads configure option"</a>
<li><strong>Reply:</strong> <a href="15875.php">Pritchard Jr., Howard: "Re: [OMPI devel] RFC: remove the --with-threads configure option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
None that I can think of - I'd remove it
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
<span class="quotelev2">&gt;&gt; checking for working POSIX threads package... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking for type of thread support... none
</span><br>
<span class="quotelev2">&gt;&gt; configure: error: User requested MPI threads, but no threading model
</span><br>
<span class="quotelev2">&gt;&gt; supported
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; bottom line, the --with-threads configure option is useless in both v1.8
</span><br>
<span class="quotelev2">&gt;&gt; and trunk.
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
<span class="quotelev2">&gt;&gt; there is still some dead code / bug related to solaris threads, and this
</span><br>
<span class="quotelev2">&gt;&gt; will be removed / fixed
</span><br>
<span class="quotelev2">&gt;&gt; see <a href="https://svn.open-mpi.org/trac/ompi/ticket/4911">https://svn.open-mpi.org/trac/ompi/ticket/4911</a>
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15865.php">http://www.open-mpi.org/community/lists/devel/2014/09/15865.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15867.php">http://www.open-mpi.org/community/lists/devel/2014/09/15867.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15874.php">Artem Polyakov: "Re: [OMPI devel] OPAL timing framework"</a>
<li><strong>Previous message:</strong> <a href="15872.php">Ralph Castain: "Re: [OMPI devel] OPAL timing framework"</a>
<li><strong>In reply to:</strong> <a href="15867.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: remove the --with-threads configure option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15875.php">Pritchard Jr., Howard: "Re: [OMPI devel] RFC: remove the --with-threads configure option"</a>
<li><strong>Reply:</strong> <a href="15875.php">Pritchard Jr., Howard: "Re: [OMPI devel] RFC: remove the --with-threads configure option"</a>
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
