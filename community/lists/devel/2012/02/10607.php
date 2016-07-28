<?
$subject_val = "Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 26 03:33:04 2012" -->
<!-- isoreceived="20120226083304" -->
<!-- sent="Sun, 26 Feb 2012 00:32:59 -0800" -->
<!-- isosent="20120226083259" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2" -->
<!-- id="CAAvDA16d5oP83vjZuO-N3iUa=4DeMMUQjzO1vkh03LoT1V84Gw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="497D9952-564E-4973-847F-9263985D0A74_at_open-mpi.org" -->
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
<strong>Date:</strong> 2012-02-26 03:32:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10608.php">Paul Hargrove: "Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2"</a>
<li><strong>Previous message:</strong> <a href="10606.php">Tal Regev: "[OMPI devel] OpenMPI at windows"</a>
<li><strong>In reply to:</strong> <a href="10605.php">Ralph Castain: "Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10608.php">Paul Hargrove: "Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2"</a>
<li><strong>Reply:</strong> <a href="10608.php">Paul Hargrove: "Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2"</a>
<li><strong>Reply:</strong> <a href="10609.php">Ralph Castain: "Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't think the GNU autotools all work correctly for pathnames with
<br>
spaces.
<br>
So, I don't that is not something to worry too much about for the moment.
<br>
<p>HOWEVER, there are NO spaces in my srcdir, blddir, or even in prefix.
<br>
There are no characters other than &quot;[-._/0-9a-zA-Z]&quot;.
<br>
So, how then am I hitting this problem?
<br>
<p>I've been testing just fine 1 day before w/o seeing this problem.
<br>
It is possible something changed in my testing setup, but I can't recall
<br>
anything.
<br>
<p>I am going to keep poking at this, but would appreciate any clues as to
<br>
where to look.
<br>
<p>-Paul
<br>
<p>On Sat, Feb 25, 2012 at 11:28 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; No, I ran into it last week. The problem is that we don't handle spaces in
</span><br>
<span class="quotelev1">&gt; path names - apparently, we never have, so far as Jeff could determine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 25, 2012, at 11:27 PM, Paul Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am I the only one seeing the following odd behavior when running configure?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev2">&gt;&gt; *** GNU libltdl setup
</span><br>
<span class="quotelev2">&gt;&gt; checking location of libltdl... internal copy
</span><br>
<span class="quotelev2">&gt;&gt; configure: OMPI configuring in opal/libltdl
</span><br>
<span class="quotelev2">&gt;&gt; [....]
</span><br>
<span class="quotelev2">&gt;&gt; configure: creating ./config.status
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating config.h
</span><br>
<span class="quotelev2">&gt;&gt; config.status: executing depfiles commands
</span><br>
<span class="quotelev2">&gt;&gt; config.status: executing libtool commands
</span><br>
<span class="quotelev2">&gt;&gt; configure: /bin/sh '[srcdir]/opal/libltdl/configure' succeeded for
</span><br>
<span class="quotelev2">&gt;&gt; opal/libltdl
</span><br>
<span class="quotelev2">&gt;&gt; grep: [srcdir]/opal/libltdl/Makefile: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; checking for libtool-supplied linker flags... ACLOCAL='${SHELL}
</span><br>
<span class="quotelev2">&gt;&gt; [srcir]/config/missing --run aclocal-1.11'
</span><br>
<span class="quotelev2">&gt;&gt; AMDEPBACKSLASH='\'
</span><br>
<span class="quotelev2">&gt;&gt; AMDEP_FALSE='#'
</span><br>
<span class="quotelev2">&gt;&gt; AMDEP_TRUE=
</span><br>
<span class="quotelev2">&gt;&gt; AMTAR='$${TAR-tar}'
</span><br>
<span class="quotelev2">&gt;&gt; [...dump of every shell variable, as from running &quot;set&quot;...]
</span><br>
<span class="quotelev2">&gt;&gt;  dummy mt
</span><br>
<span class="quotelev2">&gt;&gt; *** Compiler flags
</span><br>
<span class="quotelev2">&gt;&gt; checking which of CFLAGS are ok for debugger modules...  -DNDEBUG
</span><br>
<span class="quotelev2">&gt;&gt; -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev2">&gt;&gt; checking for debugger extra CFLAGS... -g
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** Wrapper compiler final setup
</span><br>
<span class="quotelev2">&gt;&gt; checking for perl... /usr/bin/perl
</span><br>
<span class="quotelev2">&gt;&gt; checking for OPAL CPPFLAGS...
</span><br>
<span class="quotelev2">&gt;&gt; checking for OPAL CFLAGS... -pthread
</span><br>
<span class="quotelev2">&gt;&gt; checking for OPAL CXXFLAGS... -pthread
</span><br>
<span class="quotelev2">&gt;&gt; checking for OPAL LDFLAGS...
</span><br>
<span class="quotelev2">&gt;&gt; checking for OPAL LIBS... -ldl  -lm  dummy mt
</span><br>
<span class="quotelev2">&gt;&gt; checking for OPAL extra include dirs...
</span><br>
<span class="quotelev2">&gt;&gt; checking for ORTE CPPFLAGS...
</span><br>
<span class="quotelev2">&gt;&gt; checking for ORTE CXXFLAGS... -pthread
</span><br>
<span class="quotelev2">&gt;&gt; checking for ORTE CFLAGS... -pthread
</span><br>
<span class="quotelev2">&gt;&gt; checking for ORTE LDFLAGS...
</span><br>
<span class="quotelev2">&gt;&gt; checking for ORTE LIBS...  -ldl  -lm  dummy mt
</span><br>
<span class="quotelev2">&gt;&gt; checking for ORTE extra include dirs...
</span><br>
<span class="quotelev2">&gt;&gt; checking for OMPI CPPFLAGS...
</span><br>
<span class="quotelev2">&gt;&gt; checking for OMPI CFLAGS... -pthread
</span><br>
<span class="quotelev2">&gt;&gt; checking for OMPI CXXFLAGS... -pthread
</span><br>
<span class="quotelev2">&gt;&gt; checking for OMPI FFLAGS... -pthread
</span><br>
<span class="quotelev2">&gt;&gt; checking for OMPI FCFLAGS... -pthread
</span><br>
<span class="quotelev2">&gt;&gt; checking for OMPI LDFLAGS...
</span><br>
<span class="quotelev2">&gt;&gt; checking for OMPI LIBS...   -ldl  -lm  dummy mt
</span><br>
<span class="quotelev2">&gt;&gt; checking for OMPI extra include dirs...
</span><br>
<span class="quotelev2">&gt;&gt; *** Final output
</span><br>
<span class="quotelev2">&gt;&gt; [....]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The presence of &quot;dummy mt&quot; in the LIBS vars renders the resulting wrapper
</span><br>
<span class="quotelev1">&gt; compilers unusable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a VPATH (blddir != srcdir) build and it appears that something is
</span><br>
<span class="quotelev1">&gt; looking for a Makefile in [srcdir]/opal/libltdl when it almost certainly
</span><br>
<span class="quotelev1">&gt; should be looking in [blddir]/opal/libltdl.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
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
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10607/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10608.php">Paul Hargrove: "Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2"</a>
<li><strong>Previous message:</strong> <a href="10606.php">Tal Regev: "[OMPI devel] OpenMPI at windows"</a>
<li><strong>In reply to:</strong> <a href="10605.php">Ralph Castain: "Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10608.php">Paul Hargrove: "Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2"</a>
<li><strong>Reply:</strong> <a href="10608.php">Paul Hargrove: "Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2"</a>
<li><strong>Reply:</strong> <a href="10609.php">Ralph Castain: "Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2"</a>
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
