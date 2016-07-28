<?
$subject_val = "Re: [OMPI devel] Conversion to GitHub: POSTPONED";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 23 23:58:01 2014" -->
<!-- isoreceived="20140924035801" -->
<!-- sent="Tue, 23 Sep 2014 20:57:59 -0700" -->
<!-- isosent="20140924035759" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Conversion to GitHub: POSTPONED" -->
<!-- id="CAAvDA16rrEuy-EXgYqBMPZ67xW8EkQdDqn+FH61QbRVHzTa0mg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="54223D07.9020701_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Conversion to GitHub: POSTPONED<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-23 23:57:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15911.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Conversion to GitHub: POSTPONED"</a>
<li><strong>Previous message:</strong> <a href="15909.php">Gilles Gouaillardet: "Re: [OMPI devel] Conversion to GitHub: POSTPONED"</a>
<li><strong>In reply to:</strong> <a href="15909.php">Gilles Gouaillardet: "Re: [OMPI devel] Conversion to GitHub: POSTPONED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15911.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Conversion to GitHub: POSTPONED"</a>
<li><strong>Reply:</strong> <a href="15911.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Conversion to GitHub: POSTPONED"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The pricing question might not be as simple as it first sounds.  At
<br>
BitBucket Academic accounts are free and allow unlimited users.  So, if
<br>
somebody with an .EDU email address  (IU and UTK come to mind) are the
<br>
owners of the repo then I believe the cost is zero.  Somebody should verify
<br>
that rather than take my word for it.
<br>
<p>More points for comparison between BitBucket and GitHub are presented in
<br>
<p><a href="http://www.infoworld.com/article/2611771/application-development/bitbucket-vs--github--which-project-host-has-the-most-.html">http://www.infoworld.com/article/2611771/application-development/bitbucket-vs--github--which-project-host-has-the-most-.html</a>
<br>
<p>-Paul
<br>
<p>On Tue, Sep 23, 2014 at 8:39 PM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; my 0.02 US$ ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bitbucket pricing model is per user (but with free public/private
</span><br>
<span class="quotelev1">&gt; repository up to 5 users)
</span><br>
<span class="quotelev1">&gt; whereas github pricing is per *private* repository (and free public
</span><br>
<span class="quotelev1">&gt; repository and with unlimited users)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; from an OpenMPI point of view, this means :
</span><br>
<span class="quotelev1">&gt; - with github, only the private ompi-tests repository requires a fee
</span><br>
<span class="quotelev1">&gt; - with bitbucket, the ompi repository requires a fee (there are 119
</span><br>
<span class="quotelev1">&gt; users in <a href="https://github.com/open-mpi/authors/blob/master/authors.txt">https://github.com/open-mpi/authors/blob/master/authors.txt</a>, in
</span><br>
<span class="quotelev1">&gt; bitbucket pricing model, that means unlimited users and this is 200US$
</span><br>
<span class="quotelev1">&gt; per month)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; per branch ACL is a feature that was requested loooong time ago on
</span><br>
<span class="quotelev1">&gt; bitbucket, and now they implemented it, i would not expect it takes
</span><br>
<span class="quotelev1">&gt; too much time before github implements it too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; from the documentation, gerrithub has also interesting features :
</span><br>
<span class="quotelev1">&gt; - force the use of a workflow (assuming the workflow is a good match
</span><br>
<span class="quotelev1">&gt; with how we want to work ...)
</span><br>
<span class="quotelev1">&gt; - prevent developers from commiting a huge mess to github
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2014/09/24 10:36, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Sep 23, 2014, at 7:52 PM, Jed Brown &lt;jed_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I don't have experience with GerritHub, but Bitbucket supports this
</span><br>
<span class="quotelev3">&gt; &gt;&gt; feature (permissions on branch names/globs) and we use it in PETSc.
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for the info.  Paul Hargrove said pretty much the same thing to
</span><br>
<span class="quotelev1">&gt; me, off-list.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'll check it out.
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15909.php">http://www.open-mpi.org/community/lists/devel/2014/09/15909.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15910/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15911.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Conversion to GitHub: POSTPONED"</a>
<li><strong>Previous message:</strong> <a href="15909.php">Gilles Gouaillardet: "Re: [OMPI devel] Conversion to GitHub: POSTPONED"</a>
<li><strong>In reply to:</strong> <a href="15909.php">Gilles Gouaillardet: "Re: [OMPI devel] Conversion to GitHub: POSTPONED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15911.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Conversion to GitHub: POSTPONED"</a>
<li><strong>Reply:</strong> <a href="15911.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Conversion to GitHub: POSTPONED"</a>
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
