<?
$subject_val = "Re: [OMPI devel] Unsolicited code review of new distscript.sh";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 27 09:54:39 2015" -->
<!-- isoreceived="20150427135439" -->
<!-- sent="Mon, 27 Apr 2015 13:54:28 +0000" -->
<!-- isosent="20150427135428" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Unsolicited code review of new distscript.sh" -->
<!-- id="D770C93C-6001-41FD-80DF-3621ABE1A943_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA15UGjS6Tu5q4C-F0=0iaw7JndtdQCQ8eodjNkOYi+suDQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Unsolicited code review of new distscript.sh<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-27 09:54:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17370.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Unsolicited code review of new distscript.sh"</a>
<li><strong>Previous message:</strong> <a href="17368.php">Nysal Jan K A: "Re: [OMPI devel] 1.8.5....going once...going twice..."</a>
<li><strong>In reply to:</strong> <a href="17354.php">Paul Hargrove: "[OMPI devel] Unsolicited code review of new distscript.sh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17370.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Unsolicited code review of new distscript.sh"</a>
<li><strong>Reply:</strong> <a href="17370.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Unsolicited code review of new distscript.sh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul --
<br>
<p>Thanks for the suggestions.  I took them as a starting point; it looks like much of distscript is moot these days, so I trimmed most of it out (it really only has to set repo_rev in VERSION these days).
<br>
<p>Neat trick about perl -pie; I wasn't aware of that.
<br>
<p>FWIW: I like heredoc notation instead of a bunch of echo statements because it's just easier for the developer (e.g., if you need to reflow lines).  I'm not worried about a minor performance penalty of writing to a temp file behind the scenes.
<br>
<p>Thanks!
<br>
<p><p><span class="quotelev1">&gt; On Apr 23, 2015, at 10:42 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I gave &quot;make dist&quot; a try on NetBSD (with its own /bin/sh) and Ubuntu Trusty (w/ /bin/sh symlinked to dash).
</span><br>
<span class="quotelev1">&gt; Both generated the tarballs, but dash spewed some warnings on the unalias commands.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So here is my code review (roughly as long as the scipt itself).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1)
</span><br>
<span class="quotelev1">&gt; #!/usr/bin/env sh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The presence of a bourne-compatible shell at /bin/sh is possible *the* most fundamental assumption in any unix-like system.
</span><br>
<span class="quotelev1">&gt; So, the /bin/sh path is far more standard than /usr/bin/env (have seen /bin/env).
</span><br>
<span class="quotelev1">&gt; Just use &quot;#!/bin/sh&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OMPI_VERSION=$3
</span><br>
<span class="quotelev1">&gt; OMPI_REPO_REV=$4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if test x&quot;$2&quot; = x ; then
</span><br>
<span class="quotelev1">&gt;     echo &quot;Must supply relative distdir as argv[2] -- aborting&quot;
</span><br>
<span class="quotelev1">&gt;     exit 1
</span><br>
<span class="quotelev1">&gt; elif test x$OMPI_VERSION = x ; then
</span><br>
<span class="quotelev1">&gt;     echo &quot;Must supply version as argv[1] -- aborting&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The first line I've quoted takes OMPI_VERSION from ARGV[3].
</span><br>
<span class="quotelev1">&gt; So the last line I quoted is incorrect in referring to &quot;argv[1]&quot; (should be 3).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; unalias cp &amp;&gt; /dev/null
</span><br>
<span class="quotelev1">&gt; unalias rm &amp;&gt; /dev/null
</span><br>
<span class="quotelev1">&gt; unalias mv &amp;&gt; /dev/null
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The redirect operator &quot;&amp;&gt;&quot; is a bash-ism.
</span><br>
<span class="quotelev1">&gt; With dash this runs unalias in the background (in a subshell) with only stdout redirected.
</span><br>
<span class="quotelev1">&gt; The result is that if the alias exists it *remains*:
</span><br>
<span class="quotelev1">&gt; $ alias a=b
</span><br>
<span class="quotelev1">&gt; $ alias
</span><br>
<span class="quotelev1">&gt; a='b'
</span><br>
<span class="quotelev1">&gt; $ unalias a &amp;&gt; /dev/null
</span><br>
<span class="quotelev1">&gt; $ alias
</span><br>
<span class="quotelev1">&gt; a='b'
</span><br>
<span class="quotelev1">&gt; [1] + Done                       unalias a
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, if the alias does not exist, dash will give you a warning since stderr is not redirected:
</span><br>
<span class="quotelev1">&gt; $ unalias b &amp;&gt; /dev/null
</span><br>
<span class="quotelev1">&gt; $ unalias: b not found
</span><br>
<span class="quotelev1">&gt; [1] + Done(1)                    unalias b
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Neither of those is what you wanted.
</span><br>
<span class="quotelev1">&gt; The portable incantation for redirecting both stdout and stderr is
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; command &gt;/dev/null 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #########################################################
</span><br>
<span class="quotelev1">&gt; # VERY IMPORTANT: Now go into the new distribution tree #
</span><br>
<span class="quotelev1">&gt; #########################################################
</span><br>
<span class="quotelev1">&gt; cd &quot;$distdir&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If it's important enough to yell like that, then I suggest checking that the cd succeeded
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #########################################################
</span><br>
<span class="quotelev1">&gt; # VERY IMPORTANT: Now go into the new distribution tree #
</span><br>
<span class="quotelev1">&gt; #########################################################
</span><br>
<span class="quotelev1">&gt; cd &quot;$distdir&quot;
</span><br>
<span class="quotelev1">&gt; if test $? != 0; then
</span><br>
<span class="quotelev1">&gt;     echo &quot;*** ERROR: failed to enter $distdir&quot;
</span><br>
<span class="quotelev1">&gt;     exit 1
</span><br>
<span class="quotelev1">&gt; fi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 5)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The current line
</span><br>
<span class="quotelev1">&gt; for file in $(echo $files) ; do
</span><br>
<span class="quotelev1">&gt; produces a behavior no different than the simpler
</span><br>
<span class="quotelev1">&gt; for file in $files; do
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HOWEVER, that is probably a moot point since the body of the loop appears to be pointless.
</span><br>
<span class="quotelev1">&gt; I say pointless because it is intended to replace the string &quot;OMPI_VERSION&quot; in README and INSTALL.
</span><br>
<span class="quotelev1">&gt; However, unless I am missing something, that string doesn't appear in either file!!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 6) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am not sure why
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cat &lt;&lt;EOF
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; line1
</span><br>
<span class="quotelev1">&gt; line2
</span><br>
<span class="quotelev1">&gt; line2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; EOF
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is used rather than multiple echo commands.
</span><br>
<span class="quotelev1">&gt; The use of a &quot;here document&quot; normally requires the shell to write the text to a temporary file to perform the input redirection.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 7)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In one place sed+cp+rm is used to edit a file.
</span><br>
<span class="quotelev1">&gt; In another sed+mv is used (but item #5 would eliminate that case).
</span><br>
<span class="quotelev1">&gt; Since perl is already required for autogen, you could replace sed+whatever with perl's in-place operation
</span><br>
<span class="quotelev1">&gt; perl -pi -e 's/from/to/' -- file(s)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17354.php">http://www.open-mpi.org/community/lists/devel/2015/04/17354.php</a>
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
<li><strong>Next message:</strong> <a href="17370.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Unsolicited code review of new distscript.sh"</a>
<li><strong>Previous message:</strong> <a href="17368.php">Nysal Jan K A: "Re: [OMPI devel] 1.8.5....going once...going twice..."</a>
<li><strong>In reply to:</strong> <a href="17354.php">Paul Hargrove: "[OMPI devel] Unsolicited code review of new distscript.sh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17370.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Unsolicited code review of new distscript.sh"</a>
<li><strong>Reply:</strong> <a href="17370.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Unsolicited code review of new distscript.sh"</a>
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
