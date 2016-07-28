<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 14 20:26:43 2012" -->
<!-- isoreceived="20121115012643" -->
<!-- sent="Wed, 14 Nov 2012 17:26:36 -0800" -->
<!-- isosent="20121115012636" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk" -->
<!-- id="339F74B2-A306-4D5E-BDB5-D8EDE7265F45_at_usgs.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="66243916-B0B3-4F42-A103-9605B713859D_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk<br>
<strong>From:</strong> Larry Baker (<em>baker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-14 20:26:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11779.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<li><strong>Previous message:</strong> <a href="11777.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<li><strong>In reply to:</strong> <a href="11777.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11780.php">Paul Hargrove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<li><strong>Reply:</strong> <a href="11780.php">Paul Hargrove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>Try sed -n -E -e '1s/^.*[^A-Za-z0-9_-]?([0-9]+[.][0-9]+[.][0-9]+)[^A-Za-z0-9_-]?.*$/\1/p' (or its equivalent in Perl).
<br>
<p>-n = Don't print out lines that do not match the pattern
<br>
-E = Telsl sed to recognize +
<br>
pattern = &lt;digits&gt;.&lt;digits&gt;.&lt;digits&gt; (no attempt to rule out nonsense like 0.0.0)
<br>
<p><span class="quotelev1">&gt; savaii:~ baker$ m4 --version
</span><br>
<span class="quotelev1">&gt; GNU M4 1.4.6
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2006 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; This is free software; see the source for copying conditions.  There is NO
</span><br>
<span class="quotelev1">&gt; warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Written by Rene' Seindal.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; savaii:~ baker$ m4 --version | sed -n -E -e '1s/^.*[^A-Za-z0-9_-]?([0-9]+[.][0-9]+[.][0-9]+)[^A-Za-z0-9_-]?.*$/\1/p'
</span><br>
<span class="quotelev1">&gt; 1.4.6
</span><br>
<p><span class="quotelev1">&gt; savaii:~ baker$ gcc --version
</span><br>
<span class="quotelev1">&gt; i686-apple-darwin10-gcc-4.2.1 (GCC) 4.2.1 (Apple Inc. build 5666) (dot 3)
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2007 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; This is free software; see the source for copying conditions.  There is NO
</span><br>
<span class="quotelev1">&gt; warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; savaii:~ baker$ gcc --version | sed -n -E -e '1s/^.*[^A-Za-z0-9_-]?([0-9]+[.][0-9]+[.][0-9]+)[^A-Za-z0-9_-]?.*$/\1/p'
</span><br>
<span class="quotelev1">&gt; 4.2.1
</span><br>
<p><span class="quotelev1">&gt; savaii:~ baker$ flex --version
</span><br>
<span class="quotelev1">&gt; flex 2.5.35
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; savaii:~ baker$ flex --version | sed -n -E -e '1s/^.*[^A-Za-z0-9_-]?([0-9]+[.][0-9]+[.][0-9]+)[^A-Za-z0-9_-]?.*$/\1/p'
</span><br>
<span class="quotelev1">&gt; 2.5.35
</span><br>
<p>To match Ralph's sample failure:
<br>
<p><span class="quotelev1">&gt; savaii:~ baker$ echo &quot;flex 2.5.35 Apple(flex-31)&quot; | sed -n -E -e '1s/^.*[^A-Za-z0-9_-]?([0-9]+[.][0-9]+[.][0-9]+)[^A-Za-z0-9_-]?.*$/\1/p'
</span><br>
<span class="quotelev1">&gt; 2.5.35
</span><br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p><p><p>On 14 Nov 2012, at 3:26 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Sorry Nathan - I had to revert this out as it broke builds on Mac ML. The problem is that the find_and_check parser looks for parens to find the version number, expecting something like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ m4 --version
</span><br>
<span class="quotelev1">&gt; m4 (GNU M4) 1.4.16
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; or this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ gcc --version
</span><br>
<span class="quotelev1">&gt; i686-apple-darwin11-llvm-gcc-4.2 (GCC) 4.2.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, on Mac ML, you get this for flex:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ flex --version
</span><br>
<span class="quotelev1">&gt; flex 2.5.35 Apple(flex-31)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And so the parser incorrectly rejects the flex version. We'll have to come up with a more robust way of getting version numbers so we can do this test.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 12, 2012, at 11:28 PM, svn-commit-mailer_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Author: hjelmn (Nathan Hjelm)
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2012-11-13 02:28:10 EST (Tue, 13 Nov 2012)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 27601
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/27601">https://svn.open-mpi.org/trac/ompi/changeset/27601</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; enforce minimum flex version in autogen.pl
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev2">&gt;&gt; trunk/autogen.pl |     4 ++++                                    
</span><br>
<span class="quotelev2">&gt;&gt; 1 files changed, 4 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/autogen.pl
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/autogen.pl	Tue Nov 13 02:21:10 2012	(r27600)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/autogen.pl	2012-11-13 02:28:10 EST (Tue, 13 Nov 2012)	(r27601)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -56,11 +56,13 @@
</span><br>
<span class="quotelev2">&gt;&gt; my $ompi_automake_version = &quot;1.11.1&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; my $ompi_autoconf_version = &quot;2.65&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; my $ompi_libtool_version = &quot;2.2.6b&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; +my $ompi_flex_version = &quot;2.5.35&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; # Search paths
</span><br>
<span class="quotelev2">&gt;&gt; my $ompi_autoconf_search = &quot;autoconf&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; my $ompi_automake_search = &quot;automake&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; my $ompi_libtoolize_search = &quot;libtoolize;glibtoolize&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; +my $ompi_flex_search = &quot;flex&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; # One-time setup
</span><br>
<span class="quotelev2">&gt;&gt; my $username;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -797,6 +799,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;   GNU Autoconf: $ompi_autoconf_version
</span><br>
<span class="quotelev2">&gt;&gt;   GNU Automake: $ompi_automake_version
</span><br>
<span class="quotelev2">&gt;&gt;   GNU Libtool: $ompi_libtool_version
</span><br>
<span class="quotelev2">&gt;&gt; +    Flex: $ompi_flex_version
</span><br>
<span class="quotelev2">&gt;&gt; =================================================================\n&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;   my_exit(1);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1015,6 +1018,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; &amp;find_and_check(&quot;autoconf&quot;, $ompi_autoconf_search, $ompi_autoconf_version);
</span><br>
<span class="quotelev2">&gt;&gt; &amp;find_and_check(&quot;libtool&quot;, $ompi_libtoolize_search, $ompi_libtool_version);
</span><br>
<span class="quotelev2">&gt;&gt; &amp;find_and_check(&quot;automake&quot;, $ompi_automake_search, $ompi_automake_version);
</span><br>
<span class="quotelev2">&gt;&gt; +&amp;find_and_check(&quot;flex&quot;, $ompi_flex_search, $ompi_flex_version);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #---------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11779.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<li><strong>Previous message:</strong> <a href="11777.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<li><strong>In reply to:</strong> <a href="11777.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11780.php">Paul Hargrove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<li><strong>Reply:</strong> <a href="11780.php">Paul Hargrove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
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
