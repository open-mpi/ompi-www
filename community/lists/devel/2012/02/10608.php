<?
$subject_val = "Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 26 04:30:07 2012" -->
<!-- isoreceived="20120226093007" -->
<!-- sent="Sun, 26 Feb 2012 01:30:01 -0800" -->
<!-- isosent="20120226093001" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2" -->
<!-- id="CAAvDA17xRm5UMG9tCh3dDqcQkayS9=JvO_r7CxDdJxxgfRBa4Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA16d5oP83vjZuO-N3iUa=4DeMMUQjzO1vkh03LoT1V84Gw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-26 04:30:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10609.php">Ralph Castain: "Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2"</a>
<li><strong>Previous message:</strong> <a href="10607.php">Paul Hargrove: "Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2"</a>
<li><strong>In reply to:</strong> <a href="10607.php">Paul Hargrove: "Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10609.php">Ralph Castain: "Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe the problem originates with
<br>
<p><span class="quotelev1">&gt; r26014 | bosilca | 2012-02-22 19:25:51 -0800 (Wed, 22 Feb 2012) | 7 lines
</span><br>
<span class="quotelev1">&gt; Fixes #3033: Fix lt_dladvise search in v1.5
</span><br>
<span class="quotelev1">&gt; ---svn-pre-commit-ignore-below---
</span><br>
<span class="quotelev1">&gt; r26006
</span><br>
<span class="quotelev1">&gt; Fix the search for ltdl_advise support in VPATH builds.
</span><br>
<p><p>That changeset appears to INCORRECTLY use $srcdir on lines 179 and 181.
<br>
I am fairly certain both should be an explicit $builddir or nothing at all.
<br>
<p>The same issue, of course, exists in r26006 on trunk.
<br>
However, Jeff corrected it in r26023.
<br>
<p>It appears ticket #3033 already requests cmr of r26023 to the v1.5 branch.
<br>
So, I guess I've just encountered a known problem.
<br>
<p>Since my scripts only do VPATH, you won't get any test results from me for
<br>
1.5.5rc2.
<br>
<p>-Paul
<br>
<p>P.S.  I have no clue how a &quot;make distcheck&quot; could have completed with this
<br>
problem.
<br>
<p><p>On Sun, Feb 26, 2012 at 12:32 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I don't think the GNU autotools all work correctly for pathnames with
</span><br>
<span class="quotelev1">&gt; spaces.
</span><br>
<span class="quotelev1">&gt; So, I don't that is not something to worry too much about for the moment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HOWEVER, there are NO spaces in my srcdir, blddir, or even in prefix.
</span><br>
<span class="quotelev1">&gt; There are no characters other than &quot;[-._/0-9a-zA-Z]&quot;.
</span><br>
<span class="quotelev1">&gt; So, how then am I hitting this problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've been testing just fine 1 day before w/o seeing this problem.
</span><br>
<span class="quotelev1">&gt; It is possible something changed in my testing setup, but I can't recall
</span><br>
<span class="quotelev1">&gt; anything.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am going to keep poking at this, but would appreciate any clues as to
</span><br>
<span class="quotelev1">&gt; where to look.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, Feb 25, 2012 at 11:28 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No, I ran into it last week. The problem is that we don't handle spaces
</span><br>
<span class="quotelev2">&gt;&gt; in path names - apparently, we never have, so far as Jeff could determine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 25, 2012, at 11:27 PM, Paul Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am I the only one seeing the following odd behavior when running
</span><br>
<span class="quotelev2">&gt;&gt; configure?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [...]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** GNU libltdl setup
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking location of libltdl... internal copy
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: OMPI configuring in opal/libltdl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [....]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: creating ./config.status
</span><br>
<span class="quotelev3">&gt;&gt;&gt; config.status: creating Makefile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; config.status: creating config.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; config.status: executing depfiles commands
</span><br>
<span class="quotelev3">&gt;&gt;&gt; config.status: executing libtool commands
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: /bin/sh '[srcdir]/opal/libltdl/configure' succeeded for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal/libltdl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; grep: [srcdir]/opal/libltdl/Makefile: No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for libtool-supplied linker flags... ACLOCAL='${SHELL}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [srcir]/config/missing --run aclocal-1.11'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AMDEPBACKSLASH='\'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AMDEP_FALSE='#'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AMDEP_TRUE=
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AMTAR='$${TAR-tar}'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [...dump of every shell variable, as from running &quot;set&quot;...]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  dummy mt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** Compiler flags
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking which of CFLAGS are ok for debugger modules...  -DNDEBUG
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for debugger extra CFLAGS... -g
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *** Wrapper compiler final setup
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for perl... /usr/bin/perl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for OPAL CPPFLAGS...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for OPAL CFLAGS... -pthread
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for OPAL CXXFLAGS... -pthread
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for OPAL LDFLAGS...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for OPAL LIBS... -ldl  -lm  dummy mt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for OPAL extra include dirs...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for ORTE CPPFLAGS...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for ORTE CXXFLAGS... -pthread
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for ORTE CFLAGS... -pthread
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for ORTE LDFLAGS...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for ORTE LIBS...  -ldl  -lm  dummy mt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for ORTE extra include dirs...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for OMPI CPPFLAGS...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for OMPI CFLAGS... -pthread
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for OMPI CXXFLAGS... -pthread
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for OMPI FFLAGS... -pthread
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for OMPI FCFLAGS... -pthread
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for OMPI LDFLAGS...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for OMPI LIBS...   -ldl  -lm  dummy mt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for OMPI extra include dirs...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** Final output
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [....]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The presence of &quot;dummy mt&quot; in the LIBS vars renders the resulting wrapper
</span><br>
<span class="quotelev2">&gt;&gt; compilers unusable.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is a VPATH (blddir != srcdir) build and it appears that something is
</span><br>
<span class="quotelev2">&gt;&gt; looking for a Makefile in [srcdir]/opal/libltdl when it almost certainly
</span><br>
<span class="quotelev2">&gt;&gt; should be looking in [blddir]/opal/libltdl.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10608/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10609.php">Ralph Castain: "Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2"</a>
<li><strong>Previous message:</strong> <a href="10607.php">Paul Hargrove: "Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2"</a>
<li><strong>In reply to:</strong> <a href="10607.php">Paul Hargrove: "Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10609.php">Ralph Castain: "Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2"</a>
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
