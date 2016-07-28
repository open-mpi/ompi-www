<?
$subject_val = "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 13:50:34 2014" -->
<!-- isoreceived="20140922175034" -->
<!-- sent="Mon, 22 Sep 2014 13:50:30 -0400" -->
<!-- isosent="20140922175030" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: &amp;quot;v1.9.0&amp;quot; (vs. &amp;quot;v1.9&amp;quot;)" -->
<!-- id="26D83AC9-35D6-40E9-B3AF-86ECE7BBEA12_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="DB473054-6C3F-4894-8CD3-8B9266AB8E6E_at_cisco.com" -->
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
<strong>Date:</strong> 2014-09-22 13:50:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15889.php">Ralph Castain: "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<li><strong>Previous message:</strong> <a href="15887.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<li><strong>In reply to:</strong> <a href="15887.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15889.php">Ralph Castain: "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<li><strong>Reply:</strong> <a href="15889.php">Ralph Castain: "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<li><strong>Reply:</strong> <a href="15896.php">Andreas Schäfer: "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Could also start at 1.9.1 instead of 1.9.0. That gives a free number for the &#147;trunk&#148; nightly builds. 
<br>
<p><p><pre>
--
          ~~~ Aur&#233;lien Bouteiller, Ph.D. ~~~
             ~ Research Scientist @ ICL ~
The University of Tennessee, Innovative Computing Laboratory
1122 Volunteer Blvd, suite 309, Knoxville, TN 37996
tel: +1 (865) 974-9375       fax: +1 (865) 974-8296
<a href="https://icl.cs.utk.edu/~bouteill/">https://icl.cs.utk.edu/~bouteill/</a>
Le 22 sept. 2014 &#224; 13:38, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; a &#233;crit :
&gt; WHAT: Change our version numbering scheme to always include all 3 numbers -- even when the 3rd number is 0.
&gt; 
&gt; WHY: I think we made a mistake years ago when we designed the version number scheme.  It's weird that we drop the last digit when it is 0.
&gt; 
&gt; WHERE: Trivial patch.  See below.
&gt; 
&gt; WHEN: Tuesday teleconf next week, 30 Sep 2014
&gt; 
&gt; MORE DETAIL:
&gt; 
&gt; Right now, per <a href="http://www.open-mpi.org/software/ompi/versions/">http://www.open-mpi.org/software/ompi/versions/</a>, when the 3rd digit of our version number is zero, we drop it in the filename and various other outputs (e.g., ompi_info).  For example, we have:
&gt; 
&gt;           openmpi-1.8.tar.bz2
&gt; instead of openmpi-1.8.0.tar.bz2
&gt; 
&gt; Honestly, I think that's just a little weird.  I think I was the one who advocated for dropping the 0 way back in the beginning, but I'm now changing my mind.  :-)
&gt; 
&gt; Making this change will be immediately obvious in the filename of the trunk nightly tarball.  It won't affect the v1.8 series (or any prior series), because they're all well past their .0 releases.  But it will mean that the first release in the v1.9 series will be &quot;v1.9.0&quot;.
&gt; 
&gt; Finally, note that this will also apply to all version numbers shown in ompi_info (e.g., components and projects).
&gt; 
&gt; Here's the diff:
&gt; 
&gt; Index: config/opal_get_version.m4
&gt; ===================================================================
&gt; --- config/opal_get_version.m4	(revision 32771)
&gt; +++ config/opal_get_version.m4	(working copy)
&gt; @@ -60,12 +60,7 @@
&gt; 	p&quot; &lt; &quot;$1&quot;`
&gt; 	[eval] &quot;$opal_vers&quot;
&gt; 
&gt; -        # Only print release version if it isn't 0
&gt; -        if test $$2_RELEASE_VERSION -ne 0 ; then
&gt; -            $2_VERSION=&quot;$$2_MAJOR_VERSION.$$2_MINOR_VERSION.$$2_RELEASE_VERSION&quot;
&gt; -        else
&gt; -            $2_VERSION=&quot;$$2_MAJOR_VERSION.$$2_MINOR_VERSION&quot;
&gt; -        fi
&gt; +        $2_VERSION=&quot;$$2_MAJOR_VERSION.$$2_MINOR_VERSION.$$2_RELEASE_VERSION&quot;
&gt;         $2_VERSION=&quot;${$2_VERSION}${$2_GREEK_VERSION}&quot;
&gt;         $2_BASE_VERSION=$$2_VERSION
&gt; 
&gt; Index: opal/runtime/opal_info_support.c
&gt; ===================================================================
&gt; --- opal/runtime/opal_info_support.c	(revision 32771)
&gt; +++ opal/runtime/opal_info_support.c	(working copy)
&gt; @@ -1099,14 +1099,8 @@
&gt;     temp[BUFSIZ - 1] = '\0';
&gt;     if (0 == strcmp(scope, opal_info_ver_full) ||
&gt;         0 == strcmp(scope, opal_info_ver_all)) {
&gt; -        snprintf(temp, BUFSIZ - 1, &quot;%d.%d&quot;, major, minor);
&gt; +        snprintf(temp, BUFSIZ - 1, &quot;%d.%d.%d&quot;, major, minor, release);
&gt;         str = strdup(temp);
&gt; -        if (release &gt; 0) {
&gt; -            snprintf(temp, BUFSIZ - 1, &quot;.%d&quot;, release);
&gt; -            asprintf(&amp;tmp, &quot;%s%s&quot;, str, temp);
&gt; -            free(str);
&gt; -            str = tmp;
&gt; -        }
&gt;         if (NULL != greek) {
&gt;             asprintf(&amp;tmp, &quot;%s%s&quot;, str, greek);
&gt;             free(str);
&gt; 
&gt; 
&gt; -- 
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden]
&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt; 
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15887.php">http://www.open-mpi.org/community/lists/devel/2014/09/15887.php</a>

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15888/signature.asc">Message signed with OpenPGP using GPGMail</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15889.php">Ralph Castain: "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<li><strong>Previous message:</strong> <a href="15887.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<li><strong>In reply to:</strong> <a href="15887.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15889.php">Ralph Castain: "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<li><strong>Reply:</strong> <a href="15889.php">Ralph Castain: "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<li><strong>Reply:</strong> <a href="15896.php">Andreas Schäfer: "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
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
