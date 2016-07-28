<?
$subject_val = "[OMPI devel] Unsolicited code review of new distscript.sh";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 23 22:42:49 2015" -->
<!-- isoreceived="20150424024249" -->
<!-- sent="Thu, 23 Apr 2015 19:42:34 -0700" -->
<!-- isosent="20150424024234" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] Unsolicited code review of new distscript.sh" -->
<!-- id="CAAvDA15UGjS6Tu5q4C-F0=0iaw7JndtdQCQ8eodjNkOYi+suDQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Unsolicited code review of new distscript.sh<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-23 22:42:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17355.php">Nysal Jan K A: "Re: [OMPI devel] &quot;maybe&quot; issue in 1.8.5rc[23]"</a>
<li><strong>Previous message:</strong> <a href="17353.php">Paul Hargrove: "[OMPI devel] 1.8.5rc3 preliminary testing report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17369.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unsolicited code review of new distscript.sh"</a>
<li><strong>Reply:</strong> <a href="17369.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unsolicited code review of new distscript.sh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I gave &quot;make dist&quot; a try on NetBSD (with its own /bin/sh) and Ubuntu Trusty
<br>
(w/ /bin/sh symlinked to dash).
<br>
Both generated the tarballs, but dash spewed some warnings on the unalias
<br>
commands.
<br>
<p>So here is my code review (roughly as long as the scipt itself).
<br>
<p>1)
<br>
<p>#!/usr/bin/env sh
<br>
<p><p>The presence of a bourne-compatible shell at /bin/sh is possible *the* most
<br>
fundamental assumption in any unix-like system.
<br>
So, the /bin/sh path is far more standard than /usr/bin/env (have seen
<br>
/bin/env).
<br>
Just use &quot;#!/bin/sh&quot;
<br>
<p><p>2)
<br>
<p>OMPI_VERSION=$3
<br>
OMPI_REPO_REV=$4
<br>
<p>if test x&quot;$2&quot; = x ; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;echo &quot;Must supply relative distdir as argv[2] -- aborting&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;exit 1
<br>
elif test x$OMPI_VERSION = x ; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;echo &quot;Must supply version as argv[1] -- aborting&quot;
<br>
<p><p>The first line I've quoted takes OMPI_VERSION from ARGV[3].
<br>
So the last line I quoted is incorrect in referring to &quot;argv[1]&quot; (should be
<br>
3).
<br>
<p>3)
<br>
<p>unalias cp &amp;&gt; /dev/null
<br>
unalias rm &amp;&gt; /dev/null
<br>
unalias mv &amp;&gt; /dev/null
<br>
<p><p>The redirect operator &quot;&amp;&gt;&quot; is a bash-ism.
<br>
With dash this runs unalias in the background (in a subshell) with only
<br>
stdout redirected.
<br>
The result is that if the alias exists it *remains*:
<br>
<p>$ alias a=b
<br>
$ alias
<br>
a='b'
<br>
$ unalias a &amp;&gt; /dev/null
<br>
$ alias
<br>
a='b'
<br>
[1] + Done                       unalias a
<br>
<p><p>However, if the alias does not exist, dash will give you a warning since
<br>
stderr is not redirected:
<br>
<p>$ unalias b &amp;&gt; /dev/null
<br>
$ unalias: b not found
<br>
[1] + Done(1)                    unalias b
<br>
<p><p>Neither of those is what you wanted.
<br>
The portable incantation for redirecting both stdout and stderr is
<br>
<p>command &gt;/dev/null 2&gt;&amp;1
<br>
<p><p>4)
<br>
<p>#########################################################
<br>
# VERY IMPORTANT: Now go into the new distribution tree #
<br>
#########################################################
<br>
cd &quot;$distdir&quot;
<br>
<p><p>If it's important enough to yell like that, then I suggest checking that
<br>
the cd succeeded
<br>
<p>#########################################################
<br>
# VERY IMPORTANT: Now go into the new distribution tree #
<br>
#########################################################
<br>
cd &quot;$distdir&quot;
<br>
if test $? != 0; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;echo &quot;*** ERROR: failed to enter $distdir&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;exit 1
<br>
fi
<br>
<p><p>5)
<br>
<p>The current line
<br>
<p>for file in $(echo $files) ; do
<br>
<p>produces a behavior no different than the simpler
<br>
<p>for file in $files; do
<br>
<p><p>HOWEVER, that is probably a moot point since the body of the loop appears
<br>
to be pointless.
<br>
I say pointless because it is intended to replace the string &quot;OMPI_VERSION&quot;
<br>
in README and INSTALL.
<br>
However, unless I am missing something, that string doesn't appear in
<br>
either file!!
<br>
<p><p>6)
<br>
<p>I am not sure why
<br>
<p>cat &lt;&lt;EOF
<br>
<p>line1
<br>
line2
<br>
line2
<br>
<p>EOF
<br>
<p><p>is used rather than multiple echo commands.
<br>
The use of a &quot;here document&quot; normally requires the shell to write the text
<br>
to a temporary file to perform the input redirection.
<br>
<p>7)
<br>
<p>In one place sed+cp+rm is used to edit a file.
<br>
In another sed+mv is used (but item #5 would eliminate that case).
<br>
Since perl is already required for autogen, you could replace sed+whatever
<br>
with perl's in-place operation
<br>
<p>perl -pi -e 's/from/to/' -- file(s)
<br>
<p><p><p><p>-Paul
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17354/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17355.php">Nysal Jan K A: "Re: [OMPI devel] &quot;maybe&quot; issue in 1.8.5rc[23]"</a>
<li><strong>Previous message:</strong> <a href="17353.php">Paul Hargrove: "[OMPI devel] 1.8.5rc3 preliminary testing report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17369.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unsolicited code review of new distscript.sh"</a>
<li><strong>Reply:</strong> <a href="17369.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unsolicited code review of new distscript.sh"</a>
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
