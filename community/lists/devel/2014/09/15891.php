<?
$subject_val = "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 14:39:43 2014" -->
<!-- isoreceived="20140922183943" -->
<!-- sent="Mon, 22 Sep 2014 11:39:30 -0700" -->
<!-- isosent="20140922183930" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: &amp;quot;v1.9.0&amp;quot; (vs. &amp;quot;v1.9&amp;quot;)" -->
<!-- id="7398F04B-F15F-4D04-98F9-81560C1EE8D0_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="FAD48D4B-3BCC-424F-9B50-C50B87D7F297_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-22 14:39:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15892.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<li><strong>Previous message:</strong> <a href="15890.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<li><strong>In reply to:</strong> <a href="15890.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15892.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<li><strong>Reply:</strong> <a href="15892.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm....I see your point, but that means &quot;1.9.5&quot; would actually be lagging *behind* &quot;1.9.0&quot;, which also seems confusing. Usually, if we release a 1.9.0, we concurrently roll the trunk to 2.0 to avoid the confusion. Is that not adequate?
<br>
<p><p>On Sep 22, 2014, at 11:30 AM, Aur&#233;lien Bouteiller &lt;bouteill_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; During the phase where there is not yet a release of &#147;next&#148;, the README and other documentations employs the number of the not yet released upcoming version. Sometimes when these gets dispatched, outsiders get confused that they are using some release version, when in fact they are running a nightly build.  Reserving a particular number (like 1.9.0) for all non-release versions of a general series could help avoid this. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;          ~~~ Aur&#233;lien Bouteiller, Ph.D. ~~~
</span><br>
<span class="quotelev1">&gt;             ~ Research Scientist @ ICL ~
</span><br>
<span class="quotelev1">&gt; The University of Tennessee, Innovative Computing Laboratory
</span><br>
<span class="quotelev1">&gt; 1122 Volunteer Blvd, suite 309, Knoxville, TN 37996
</span><br>
<span class="quotelev1">&gt; tel: +1 (865) 974-9375       fax: +1 (865) 974-8296
</span><br>
<span class="quotelev1">&gt; <a href="https://icl.cs.utk.edu/~bouteill/">https://icl.cs.utk.edu/~bouteill/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 22 sept. 2014 &#224; 14:21, Ralph Castain &lt;rhc_at_[hidden]&gt; a &#233;crit :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Not sure I understand - what do you mean by a &quot;free&quot; number??
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 22, 2014, at 10:50 AM, Aur&#233;lien Bouteiller &lt;bouteill_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could also start at 1.9.1 instead of 1.9.0. That gives a free number for the &#147;trunk&#148; nightly builds. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        ~~~ Aur&#233;lien Bouteiller, Ph.D. ~~~
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           ~ Research Scientist @ ICL ~
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The University of Tennessee, Innovative Computing Laboratory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1122 Volunteer Blvd, suite 309, Knoxville, TN 37996
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tel: +1 (865) 974-9375       fax: +1 (865) 974-8296
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://icl.cs.utk.edu/~bouteill/">https://icl.cs.utk.edu/~bouteill/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 22 sept. 2014 &#224; 13:38, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHAT: Change our version numbering scheme to always include all 3 numbers -- even when the 3rd number is 0.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHY: I think we made a mistake years ago when we designed the version number scheme.  It's weird that we drop the last digit when it is 0.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHERE: Trivial patch.  See below.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHEN: Tuesday teleconf next week, 30 Sep 2014
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MORE DETAIL:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Right now, per <a href="http://www.open-mpi.org/software/ompi/versions/">http://www.open-mpi.org/software/ompi/versions/</a>, when the 3rd digit of our version number is zero, we drop it in the filename and various other outputs (e.g., ompi_info).  For example, we have:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        openmpi-1.8.tar.bz2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; instead of openmpi-1.8.0.tar.bz2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Honestly, I think that's just a little weird.  I think I was the one who advocated for dropping the 0 way back in the beginning, but I'm now changing my mind.  :-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Making this change will be immediately obvious in the filename of the trunk nightly tarball.  It won't affect the v1.8 series (or any prior series), because they're all well past their .0 releases.  But it will mean that the first release in the v1.9 series will be &quot;v1.9.0&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Finally, note that this will also apply to all version numbers shown in ompi_info (e.g., components and projects).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here's the diff:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Index: config/opal_get_version.m4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- config/opal_get_version.m4	(revision 32771)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ config/opal_get_version.m4	(working copy)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -60,12 +60,7 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 	p&quot; &lt; &quot;$1&quot;`
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 	[eval] &quot;$opal_vers&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -        # Only print release version if it isn't 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -        if test $$2_RELEASE_VERSION -ne 0 ; then
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -            $2_VERSION=&quot;$$2_MAJOR_VERSION.$$2_MINOR_VERSION.$$2_RELEASE_VERSION&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -        else
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -            $2_VERSION=&quot;$$2_MAJOR_VERSION.$$2_MINOR_VERSION&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -        fi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        $2_VERSION=&quot;$$2_MAJOR_VERSION.$$2_MINOR_VERSION.$$2_RELEASE_VERSION&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      $2_VERSION=&quot;${$2_VERSION}${$2_GREEK_VERSION}&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      $2_BASE_VERSION=$$2_VERSION
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Index: opal/runtime/opal_info_support.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- opal/runtime/opal_info_support.c	(revision 32771)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ opal/runtime/opal_info_support.c	(working copy)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -1099,14 +1099,8 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  temp[BUFSIZ - 1] = '\0';
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  if (0 == strcmp(scope, opal_info_ver_full) ||
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      0 == strcmp(scope, opal_info_ver_all)) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -        snprintf(temp, BUFSIZ - 1, &quot;%d.%d&quot;, major, minor);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        snprintf(temp, BUFSIZ - 1, &quot;%d.%d.%d&quot;, major, minor, release);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      str = strdup(temp);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -        if (release &gt; 0) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -            snprintf(temp, BUFSIZ - 1, &quot;.%d&quot;, release);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -            asprintf(&amp;tmp, &quot;%s%s&quot;, str, temp);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -            free(str);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -            str = tmp;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -        }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      if (NULL != greek) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          asprintf(&amp;tmp, &quot;%s%s&quot;, str, greek);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          free(str);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15887.php">http://www.open-mpi.org/community/lists/devel/2014/09/15887.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15888.php">http://www.open-mpi.org/community/lists/devel/2014/09/15888.php</a>
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15889.php">http://www.open-mpi.org/community/lists/devel/2014/09/15889.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15890.php">http://www.open-mpi.org/community/lists/devel/2014/09/15890.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15892.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<li><strong>Previous message:</strong> <a href="15890.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<li><strong>In reply to:</strong> <a href="15890.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15892.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<li><strong>Reply:</strong> <a href="15892.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
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
