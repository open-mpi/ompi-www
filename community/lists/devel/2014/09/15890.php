<?
$subject_val = "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 14:30:55 2014" -->
<!-- isoreceived="20140922183055" -->
<!-- sent="Mon, 22 Sep 2014 14:30:51 -0400" -->
<!-- isosent="20140922183051" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: &amp;quot;v1.9.0&amp;quot; (vs. &amp;quot;v1.9&amp;quot;)" -->
<!-- id="FAD48D4B-3BCC-424F-9B50-C50B87D7F297_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="BF1E7FC7-F041-42E5-B41C-C9A732E785D1_at_open-mpi.org" -->
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
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-22 14:30:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15891.php">Ralph Castain: "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<li><strong>Previous message:</strong> <a href="15889.php">Ralph Castain: "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<li><strong>In reply to:</strong> <a href="15889.php">Ralph Castain: "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15891.php">Ralph Castain: "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<li><strong>Reply:</strong> <a href="15891.php">Ralph Castain: "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
During the phase where there is not yet a release of &#147;next&#148;, the README and other documentations employs the number of the not yet released upcoming version. Sometimes when these gets dispatched, outsiders get confused that they are using some release version, when in fact they are running a nightly build.  Reserving a particular number (like 1.9.0) for all non-release versions of a general series could help avoid this. 
<br>
<p><pre>
--
          ~~~ Aur&#233;lien Bouteiller, Ph.D. ~~~
             ~ Research Scientist @ ICL ~
The University of Tennessee, Innovative Computing Laboratory
1122 Volunteer Blvd, suite 309, Knoxville, TN 37996
tel: +1 (865) 974-9375       fax: +1 (865) 974-8296
<a href="https://icl.cs.utk.edu/~bouteill/">https://icl.cs.utk.edu/~bouteill/</a>
Le 22 sept. 2014 &#224; 14:21, Ralph Castain &lt;rhc_at_[hidden]&gt; a &#233;crit :
&gt; Not sure I understand - what do you mean by a &quot;free&quot; number??
&gt; 
&gt; On Sep 22, 2014, at 10:50 AM, Aur&#233;lien Bouteiller &lt;bouteill_at_[hidden]&gt; wrote:
&gt; 
&gt;&gt; Could also start at 1.9.1 instead of 1.9.0. That gives a free number for the &#147;trunk&#148; nightly builds. 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; --
&gt;&gt;         ~~~ Aur&#233;lien Bouteiller, Ph.D. ~~~
&gt;&gt;            ~ Research Scientist @ ICL ~
&gt;&gt; The University of Tennessee, Innovative Computing Laboratory
&gt;&gt; 1122 Volunteer Blvd, suite 309, Knoxville, TN 37996
&gt;&gt; tel: +1 (865) 974-9375       fax: +1 (865) 974-8296
&gt;&gt; <a href="https://icl.cs.utk.edu/~bouteill/">https://icl.cs.utk.edu/~bouteill/</a>
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; Le 22 sept. 2014 &#224; 13:38, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; a &#233;crit :
&gt;&gt; 
&gt;&gt;&gt; WHAT: Change our version numbering scheme to always include all 3 numbers -- even when the 3rd number is 0.
&gt;&gt;&gt; 
&gt;&gt;&gt; WHY: I think we made a mistake years ago when we designed the version number scheme.  It's weird that we drop the last digit when it is 0.
&gt;&gt;&gt; 
&gt;&gt;&gt; WHERE: Trivial patch.  See below.
&gt;&gt;&gt; 
&gt;&gt;&gt; WHEN: Tuesday teleconf next week, 30 Sep 2014
&gt;&gt;&gt; 
&gt;&gt;&gt; MORE DETAIL:
&gt;&gt;&gt; 
&gt;&gt;&gt; Right now, per <a href="http://www.open-mpi.org/software/ompi/versions/">http://www.open-mpi.org/software/ompi/versions/</a>, when the 3rd digit of our version number is zero, we drop it in the filename and various other outputs (e.g., ompi_info).  For example, we have:
&gt;&gt;&gt; 
&gt;&gt;&gt;         openmpi-1.8.tar.bz2
&gt;&gt;&gt; instead of openmpi-1.8.0.tar.bz2
&gt;&gt;&gt; 
&gt;&gt;&gt; Honestly, I think that's just a little weird.  I think I was the one who advocated for dropping the 0 way back in the beginning, but I'm now changing my mind.  :-)
&gt;&gt;&gt; 
&gt;&gt;&gt; Making this change will be immediately obvious in the filename of the trunk nightly tarball.  It won't affect the v1.8 series (or any prior series), because they're all well past their .0 releases.  But it will mean that the first release in the v1.9 series will be &quot;v1.9.0&quot;.
&gt;&gt;&gt; 
&gt;&gt;&gt; Finally, note that this will also apply to all version numbers shown in ompi_info (e.g., components and projects).
&gt;&gt;&gt; 
&gt;&gt;&gt; Here's the diff:
&gt;&gt;&gt; 
&gt;&gt;&gt; Index: config/opal_get_version.m4
&gt;&gt;&gt; ===================================================================
&gt;&gt;&gt; --- config/opal_get_version.m4	(revision 32771)
&gt;&gt;&gt; +++ config/opal_get_version.m4	(working copy)
&gt;&gt;&gt; @@ -60,12 +60,7 @@
&gt;&gt;&gt; 	p&quot; &lt; &quot;$1&quot;`
&gt;&gt;&gt; 	[eval] &quot;$opal_vers&quot;
&gt;&gt;&gt; 
&gt;&gt;&gt; -        # Only print release version if it isn't 0
&gt;&gt;&gt; -        if test $$2_RELEASE_VERSION -ne 0 ; then
&gt;&gt;&gt; -            $2_VERSION=&quot;$$2_MAJOR_VERSION.$$2_MINOR_VERSION.$$2_RELEASE_VERSION&quot;
&gt;&gt;&gt; -        else
&gt;&gt;&gt; -            $2_VERSION=&quot;$$2_MAJOR_VERSION.$$2_MINOR_VERSION&quot;
&gt;&gt;&gt; -        fi
&gt;&gt;&gt; +        $2_VERSION=&quot;$$2_MAJOR_VERSION.$$2_MINOR_VERSION.$$2_RELEASE_VERSION&quot;
&gt;&gt;&gt;       $2_VERSION=&quot;${$2_VERSION}${$2_GREEK_VERSION}&quot;
&gt;&gt;&gt;       $2_BASE_VERSION=$$2_VERSION
&gt;&gt;&gt; 
&gt;&gt;&gt; Index: opal/runtime/opal_info_support.c
&gt;&gt;&gt; ===================================================================
&gt;&gt;&gt; --- opal/runtime/opal_info_support.c	(revision 32771)
&gt;&gt;&gt; +++ opal/runtime/opal_info_support.c	(working copy)
&gt;&gt;&gt; @@ -1099,14 +1099,8 @@
&gt;&gt;&gt;   temp[BUFSIZ - 1] = '\0';
&gt;&gt;&gt;   if (0 == strcmp(scope, opal_info_ver_full) ||
&gt;&gt;&gt;       0 == strcmp(scope, opal_info_ver_all)) {
&gt;&gt;&gt; -        snprintf(temp, BUFSIZ - 1, &quot;%d.%d&quot;, major, minor);
&gt;&gt;&gt; +        snprintf(temp, BUFSIZ - 1, &quot;%d.%d.%d&quot;, major, minor, release);
&gt;&gt;&gt;       str = strdup(temp);
&gt;&gt;&gt; -        if (release &gt; 0) {
&gt;&gt;&gt; -            snprintf(temp, BUFSIZ - 1, &quot;.%d&quot;, release);
&gt;&gt;&gt; -            asprintf(&amp;tmp, &quot;%s%s&quot;, str, temp);
&gt;&gt;&gt; -            free(str);
&gt;&gt;&gt; -            str = tmp;
&gt;&gt;&gt; -        }
&gt;&gt;&gt;       if (NULL != greek) {
&gt;&gt;&gt;           asprintf(&amp;tmp, &quot;%s%s&quot;, str, greek);
&gt;&gt;&gt;           free(str);
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; -- 
&gt;&gt;&gt; Jeff Squyres
&gt;&gt;&gt; jsquyres_at_[hidden]
&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;&gt;&gt; 
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; devel mailing list
&gt;&gt;&gt; devel_at_[hidden]
&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15887.php">http://www.open-mpi.org/community/lists/devel/2014/09/15887.php</a>
&gt;&gt; 
&gt;&gt; _______________________________________________
&gt;&gt; devel mailing list
&gt;&gt; devel_at_[hidden]
&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15888.php">http://www.open-mpi.org/community/lists/devel/2014/09/15888.php</a>
&gt; 
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15889.php">http://www.open-mpi.org/community/lists/devel/2014/09/15889.php</a>

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15890/signature.asc">Message signed with OpenPGP using GPGMail</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15891.php">Ralph Castain: "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<li><strong>Previous message:</strong> <a href="15889.php">Ralph Castain: "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<li><strong>In reply to:</strong> <a href="15889.php">Ralph Castain: "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15891.php">Ralph Castain: "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<li><strong>Reply:</strong> <a href="15891.php">Ralph Castain: "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
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
