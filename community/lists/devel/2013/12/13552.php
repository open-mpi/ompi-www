<?
$subject_val = "Re: [OMPI devel] 1.7.4rc1 autogen error: NetBSD-6";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 20 21:45:12 2013" -->
<!-- isoreceived="20131221024512" -->
<!-- sent="Fri, 20 Dec 2013 18:44:44 -0800" -->
<!-- isosent="20131221024444" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc1 autogen error: NetBSD-6" -->
<!-- id="CAAvDA14jFyu=YkEjwtJgdKQ+OSd8DeznV-obmQts7CeJeouVew_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI devel] 1.7.4rc1 autogen error: NetBSD-6" -->
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
<strong>Date:</strong> 2013-12-20 21:44:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13553.php">Mike Dubman: "Re: [OMPI devel] rpath issues (re: svn:open-mpi r30005 - trunk/config)"</a>
<li><strong>Previous message:</strong> <a href="13551.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 autogen error: NetBSD-6"</a>
<li><strong>Maybe in reply to:</strong> <a href="13519.php">Paul Hargrove: "[OMPI devel] 1.7.4rc1 autogen error: NetBSD-6"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My dinner plans have been delayed.
<br>
So, here is the promised fix:
<br>
<p>$ diff -u autogen.pl~ autogen.pl
<br>
--- autogen.pl~ 2013-12-20 18:01:21.000000000 -0800
<br>
+++ autogen.pl  2013-12-20 18:31:09.000000000 -0800
<br>
@@ -967,6 +967,9 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;verbose &quot;$indent_str&quot;.&quot;Patching configure for IBM xlf libtool bug\n&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$c =~ s/(\$LD -shared \$libobjs \$deplibs \$)compiler_flags( -soname
<br>
\$soname)/$1linker_flags$2/g;
<br>
<p>+    verbose &quot;$indent_str&quot;.&quot;Patching configure for Libtool setting of dir
<br>
variable\n&quot;;
<br>
+    $c =~ s/( +)(ECHO=&quot;\$dir\/echo&quot;)/\1\2\n\1unset dir/;
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;open(OUT, &quot;&gt;configure.patched&quot;) || my_die &quot;Can't open
<br>
configure.patched&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print OUT $c;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;close(OUT);
<br>
<p><p>-Paul
<br>
<p><p>On Fri, Dec 20, 2013 at 6:04 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; As I indicated earlier today, the CMRed fix to push/pop &quot;dir&quot; in hwloc did
</span><br>
<span class="quotelev1">&gt; NOT fix the problem of configure failing after running autogen.pl on my
</span><br>
<span class="quotelev1">&gt; NetBSD-6/amd64 system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've traced the problem to the following fragment from
</span><br>
<span class="quotelev1">&gt; _LT_PROG_ECHO_BACKSLASH in the NetBSD-provided libtool.m4:
</span><br>
<span class="quotelev1">&gt;     lt_save_ifs=&quot;$IFS&quot;; IFS=$PATH_SEPARATOR
</span><br>
<span class="quotelev1">&gt;     for dir in $PATH /usr/ucb; do
</span><br>
<span class="quotelev1">&gt;       IFS=&quot;$lt_save_ifs&quot;
</span><br>
<span class="quotelev1">&gt;       if (test -f $dir/echo || test -f $dir/echo$ac_exeext) &amp;&amp;
</span><br>
<span class="quotelev1">&gt;          test &quot;X`($dir/echo '\t') 2&gt;/dev/null`&quot; = 'X\t' &amp;&amp;
</span><br>
<span class="quotelev1">&gt;          echo_testing_string=`($dir/echo &quot;$echo_test_string&quot;) 2&gt;/dev/null`
</span><br>
<span class="quotelev1">&gt; &amp;&amp;
</span><br>
<span class="quotelev1">&gt;          test &quot;X$echo_testing_string&quot; = &quot;X$echo_test_string&quot;; then
</span><br>
<span class="quotelev1">&gt;         ECHO=&quot;$dir/echo&quot;
</span><br>
<span class="quotelev1">&gt;         break
</span><br>
<span class="quotelev1">&gt;       fi
</span><br>
<span class="quotelev1">&gt;     done
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am hoping to generate an appropriate fix-up in autogen.pl if I can find
</span><br>
<span class="quotelev1">&gt; time.
</span><br>
<span class="quotelev1">&gt; However, I am sending this email to document my finding in case I don't
</span><br>
<span class="quotelev1">&gt; get back to this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Dec 20, 2013 at 6:49 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I just submitted a CMR to Brian to fix this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="https://svn.open-mpi.org/trac/ompi/ticket/4015">https://svn.open-mpi.org/trac/ompi/ticket/4015</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 19, 2013, at 10:46 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Probably nobody cares, but I'll report this for completeness.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; In trying to understand the &quot;make install&quot; failure on NetBSD-6 I run
</span><br>
<span class="quotelev2">&gt;&gt; &quot;autogen.sh&quot;.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The versions detected:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    Searching for autoconf
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      Found autoconf version 2.69; checking version...
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        Found version component 2 -- need 2
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        Found version component 69 -- need 65
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      ==&gt; ACCEPTED
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    Searching for libtoolize
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      Found libtoolize version 2.2.6b; checking version...
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        Found version component 2 -- need 2
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        Found version component 2 -- need 2
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        Found version component 6b -- need 6b
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      ==&gt; ACCEPTED
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    Searching for automake
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      Found automake version 1.13.1; checking version...
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        Found version component 1 -- need 1
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        Found version component 13 -- need 12
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      ==&gt; ACCEPTED
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The problem is that when run, the generated configure script dies as
</span><br>
<span class="quotelev2">&gt;&gt; follows:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; *** Java compiler
</span><br>
<span class="quotelev3">&gt;&gt; &gt; configure: WARNING: Found configure shell variable clash!
</span><br>
<span class="quotelev3">&gt;&gt; &gt; configure: WARNING: OPAL_VAR_SCOPE_PUSH called on &quot;dir&quot;,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; configure: WARNING: but it is already defined with value &quot;/bin&quot;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; configure: WARNING: This usually indicates an error in configure.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; configure: error: Cannot continue
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Future Technologies Group
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13552/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13553.php">Mike Dubman: "Re: [OMPI devel] rpath issues (re: svn:open-mpi r30005 - trunk/config)"</a>
<li><strong>Previous message:</strong> <a href="13551.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 autogen error: NetBSD-6"</a>
<li><strong>Maybe in reply to:</strong> <a href="13519.php">Paul Hargrove: "[OMPI devel] 1.7.4rc1 autogen error: NetBSD-6"</a>
<!-- nextthread="start" -->
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
