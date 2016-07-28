<?
$subject_val = "[OMPI devel] 1.7.4rc1 autogen error: NetBSD-6";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 19 22:46:49 2013" -->
<!-- isoreceived="20131220034649" -->
<!-- sent="Thu, 19 Dec 2013 19:46:48 -0800" -->
<!-- isosent="20131220034648" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.4rc1 autogen error: NetBSD-6" -->
<!-- id="CAAvDA14McKf92u-O=SwRA02chn8OHyPBVprAo+DeRpDhKZTZ_w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.4rc1 autogen error: NetBSD-6<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-19 22:46:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13520.php">Paul Hargrove: "Re: [OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun Studio 12.3"</a>
<li><strong>Previous message:</strong> <a href="13518.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 run failure on Solaris 10 / SPARC (not SIGBUS)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13524.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 autogen error: NetBSD-6"</a>
<li><strong>Reply:</strong> <a href="13524.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 autogen error: NetBSD-6"</a>
<li><strong>Maybe reply:</strong> <a href="13552.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 autogen error: NetBSD-6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Probably nobody cares, but I'll report this for completeness.
<br>
In trying to understand the &quot;make install&quot; failure on NetBSD-6 I run
<br>
&quot;autogen.sh&quot;.
<br>
<p>The versions detected:
<br>
<p>&nbsp;&nbsp;&nbsp;Searching for autoconf
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found autoconf version 2.69; checking version...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found version component 2 -- need 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found version component 69 -- need 65
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;==&gt; ACCEPTED
<br>
&nbsp;&nbsp;&nbsp;Searching for libtoolize
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found libtoolize version 2.2.6b; checking version...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found version component 2 -- need 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found version component 2 -- need 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found version component 6b -- need 6b
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;==&gt; ACCEPTED
<br>
&nbsp;&nbsp;&nbsp;Searching for automake
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found automake version 1.13.1; checking version...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found version component 1 -- need 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found version component 13 -- need 12
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;==&gt; ACCEPTED
<br>
<p>The problem is that when run, the generated configure script dies as
<br>
follows:
<br>
<p>*** Java compiler
<br>
configure: WARNING: Found configure shell variable clash!
<br>
configure: WARNING: OPAL_VAR_SCOPE_PUSH called on &quot;dir&quot;,
<br>
configure: WARNING: but it is already defined with value &quot;/bin&quot;
<br>
configure: WARNING: This usually indicates an error in configure.
<br>
configure: error: Cannot continue
<br>
<p><p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13519/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13520.php">Paul Hargrove: "Re: [OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun Studio 12.3"</a>
<li><strong>Previous message:</strong> <a href="13518.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 run failure on Solaris 10 / SPARC (not SIGBUS)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13524.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 autogen error: NetBSD-6"</a>
<li><strong>Reply:</strong> <a href="13524.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 autogen error: NetBSD-6"</a>
<li><strong>Maybe reply:</strong> <a href="13552.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 autogen error: NetBSD-6"</a>
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
