<?
$subject_val = "Re: [OMPI devel] 1.7.4rc1 autogen error: NetBSD-6";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 20 21:04:36 2013" -->
<!-- isoreceived="20131221020436" -->
<!-- sent="Fri, 20 Dec 2013 18:04:34 -0800" -->
<!-- isosent="20131221020434" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc1 autogen error: NetBSD-6" -->
<!-- id="CAAvDA15cRZYLZ-D+0MS2ydg_8kbT_EH+y6QPoN2v=aLKppwmpA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C2BB9BC9-4181-4889-916B-4E7B4AF18B51_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc1 autogen error: NetBSD-6<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-20 21:04:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13552.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 autogen error: NetBSD-6"</a>
<li><strong>Previous message:</strong> <a href="13550.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs"</a>
<li><strong>In reply to:</strong> <a href="13524.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 autogen error: NetBSD-6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13552.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 autogen error: NetBSD-6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As I indicated earlier today, the CMRed fix to push/pop &quot;dir&quot; in hwloc did
<br>
NOT fix the problem of configure failing after running autogen.pl on my
<br>
NetBSD-6/amd64 system.
<br>
<p>I've traced the problem to the following fragment from
<br>
_LT_PROG_ECHO_BACKSLASH in the NetBSD-provided libtool.m4:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;lt_save_ifs=&quot;$IFS&quot;; IFS=$PATH_SEPARATOR
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for dir in $PATH /usr/ucb; do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IFS=&quot;$lt_save_ifs&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (test -f $dir/echo || test -f $dir/echo$ac_exeext) &amp;&amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test &quot;X`($dir/echo '\t') 2&gt;/dev/null`&quot; = 'X\t' &amp;&amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo_testing_string=`($dir/echo &quot;$echo_test_string&quot;) 2&gt;/dev/null`
<br>
&amp;&amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test &quot;X$echo_testing_string&quot; = &quot;X$echo_test_string&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ECHO=&quot;$dir/echo&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;done
<br>
<p>I am hoping to generate an appropriate fix-up in autogen.pl if I can find
<br>
time.
<br>
However, I am sending this email to document my finding in case I don't get
<br>
back to this.
<br>
<p>-Paul
<br>
<p><p>On Fri, Dec 20, 2013 at 6:49 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; I just submitted a CMR to Brian to fix this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="https://svn.open-mpi.org/trac/ompi/ticket/4015">https://svn.open-mpi.org/trac/ompi/ticket/4015</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 19, 2013, at 10:46 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Probably nobody cares, but I'll report this for completeness.
</span><br>
<span class="quotelev2">&gt; &gt; In trying to understand the &quot;make install&quot; failure on NetBSD-6 I run
</span><br>
<span class="quotelev1">&gt; &quot;autogen.sh&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The versions detected:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Searching for autoconf
</span><br>
<span class="quotelev2">&gt; &gt;      Found autoconf version 2.69; checking version...
</span><br>
<span class="quotelev2">&gt; &gt;        Found version component 2 -- need 2
</span><br>
<span class="quotelev2">&gt; &gt;        Found version component 69 -- need 65
</span><br>
<span class="quotelev2">&gt; &gt;      ==&gt; ACCEPTED
</span><br>
<span class="quotelev2">&gt; &gt;    Searching for libtoolize
</span><br>
<span class="quotelev2">&gt; &gt;      Found libtoolize version 2.2.6b; checking version...
</span><br>
<span class="quotelev2">&gt; &gt;        Found version component 2 -- need 2
</span><br>
<span class="quotelev2">&gt; &gt;        Found version component 2 -- need 2
</span><br>
<span class="quotelev2">&gt; &gt;        Found version component 6b -- need 6b
</span><br>
<span class="quotelev2">&gt; &gt;      ==&gt; ACCEPTED
</span><br>
<span class="quotelev2">&gt; &gt;    Searching for automake
</span><br>
<span class="quotelev2">&gt; &gt;      Found automake version 1.13.1; checking version...
</span><br>
<span class="quotelev2">&gt; &gt;        Found version component 1 -- need 1
</span><br>
<span class="quotelev2">&gt; &gt;        Found version component 13 -- need 12
</span><br>
<span class="quotelev2">&gt; &gt;      ==&gt; ACCEPTED
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The problem is that when run, the generated configure script dies as
</span><br>
<span class="quotelev1">&gt; follows:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; *** Java compiler
</span><br>
<span class="quotelev2">&gt; &gt; configure: WARNING: Found configure shell variable clash!
</span><br>
<span class="quotelev2">&gt; &gt; configure: WARNING: OPAL_VAR_SCOPE_PUSH called on &quot;dir&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; configure: WARNING: but it is already defined with value &quot;/bin&quot;
</span><br>
<span class="quotelev2">&gt; &gt; configure: WARNING: This usually indicates an error in configure.
</span><br>
<span class="quotelev2">&gt; &gt; configure: error: Cannot continue
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Paul
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt; &gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt; &gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13551/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13552.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 autogen error: NetBSD-6"</a>
<li><strong>Previous message:</strong> <a href="13550.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs"</a>
<li><strong>In reply to:</strong> <a href="13524.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 autogen error: NetBSD-6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13552.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 autogen error: NetBSD-6"</a>
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
