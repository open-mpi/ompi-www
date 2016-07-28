<?
$subject_val = "[OMPI devel] Odd build breakage seen with 1.5.5rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 26 01:27:32 2012" -->
<!-- isoreceived="20120226062732" -->
<!-- sent="Sat, 25 Feb 2012 22:27:26 -0800" -->
<!-- isosent="20120226062726" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] Odd build breakage seen with 1.5.5rc2" -->
<!-- id="CAAvDA15YeQcQMM_Y-ZgqcLVYP9AGj7_oyYhJxVFL8NLJmaFerw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Odd build breakage seen with 1.5.5rc2<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-26 01:27:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10605.php">Ralph Castain: "Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2"</a>
<li><strong>Previous message:</strong> <a href="10603.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc2 atomics fail w/ xlc-9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10605.php">Ralph Castain: "Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2"</a>
<li><strong>Reply:</strong> <a href="10605.php">Ralph Castain: "Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am I the only one seeing the following odd behavior when running configure?
<br>
<p>[...]
<br>
<span class="quotelev1">&gt; *** GNU libltdl setup
</span><br>
<span class="quotelev1">&gt; checking location of libltdl... internal copy
</span><br>
<span class="quotelev1">&gt; configure: OMPI configuring in opal/libltdl
</span><br>
<span class="quotelev1">&gt; [....]
</span><br>
<span class="quotelev1">&gt; configure: creating ./config.status
</span><br>
<span class="quotelev1">&gt; config.status: creating Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating config.h
</span><br>
<span class="quotelev1">&gt; config.status: executing depfiles commands
</span><br>
<span class="quotelev1">&gt; config.status: executing libtool commands
</span><br>
<span class="quotelev1">&gt; configure: /bin/sh '[srcdir]/opal/libltdl/configure' succeeded for
</span><br>
<span class="quotelev1">&gt; opal/libltdl
</span><br>
<span class="quotelev1">&gt; grep: [srcdir]/opal/libltdl/Makefile: No such file or directory
</span><br>
<span class="quotelev1">&gt; checking for libtool-supplied linker flags... ACLOCAL='${SHELL}
</span><br>
<span class="quotelev1">&gt; [srcir]/config/missing --run aclocal-1.11'
</span><br>
<span class="quotelev1">&gt; AMDEPBACKSLASH='\'
</span><br>
<span class="quotelev1">&gt; AMDEP_FALSE='#'
</span><br>
<span class="quotelev1">&gt; AMDEP_TRUE=
</span><br>
<span class="quotelev1">&gt; AMTAR='$${TAR-tar}'
</span><br>
<span class="quotelev1">&gt; [...dump of every shell variable, as from running &quot;set&quot;...]
</span><br>
<span class="quotelev1">&gt;  dummy mt
</span><br>
<span class="quotelev1">&gt; *** Compiler flags
</span><br>
<span class="quotelev1">&gt; checking which of CFLAGS are ok for debugger modules...  -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev1">&gt; checking for debugger extra CFLAGS... -g
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>*** Wrapper compiler final setup
<br>
<span class="quotelev1">&gt; checking for perl... /usr/bin/perl
</span><br>
<span class="quotelev1">&gt; checking for OPAL CPPFLAGS...
</span><br>
<span class="quotelev1">&gt; checking for OPAL CFLAGS... -pthread
</span><br>
<span class="quotelev1">&gt; checking for OPAL CXXFLAGS... -pthread
</span><br>
<span class="quotelev1">&gt; checking for OPAL LDFLAGS...
</span><br>
<span class="quotelev1">&gt; checking for OPAL LIBS... -ldl  -lm  dummy mt
</span><br>
<span class="quotelev1">&gt; checking for OPAL extra include dirs...
</span><br>
<span class="quotelev1">&gt; checking for ORTE CPPFLAGS...
</span><br>
<span class="quotelev1">&gt; checking for ORTE CXXFLAGS... -pthread
</span><br>
<span class="quotelev1">&gt; checking for ORTE CFLAGS... -pthread
</span><br>
<span class="quotelev1">&gt; checking for ORTE LDFLAGS...
</span><br>
<span class="quotelev1">&gt; checking for ORTE LIBS...  -ldl  -lm  dummy mt
</span><br>
<span class="quotelev1">&gt; checking for ORTE extra include dirs...
</span><br>
<span class="quotelev1">&gt; checking for OMPI CPPFLAGS...
</span><br>
<span class="quotelev1">&gt; checking for OMPI CFLAGS... -pthread
</span><br>
<span class="quotelev1">&gt; checking for OMPI CXXFLAGS... -pthread
</span><br>
<span class="quotelev1">&gt; checking for OMPI FFLAGS... -pthread
</span><br>
<span class="quotelev1">&gt; checking for OMPI FCFLAGS... -pthread
</span><br>
<span class="quotelev1">&gt; checking for OMPI LDFLAGS...
</span><br>
<span class="quotelev1">&gt; checking for OMPI LIBS...   -ldl  -lm  dummy mt
</span><br>
<span class="quotelev1">&gt; checking for OMPI extra include dirs...
</span><br>
<span class="quotelev1">&gt; *** Final output
</span><br>
<span class="quotelev1">&gt; [....]
</span><br>
<p><p><p>The presence of &quot;dummy mt&quot; in the LIBS vars renders the resulting wrapper
<br>
compilers unusable.
<br>
<p>This is a VPATH (blddir != srcdir) build and it appears that something is
<br>
looking for a Makefile in [srcdir]/opal/libltdl when it almost certainly
<br>
should be looking in [blddir]/opal/libltdl.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10604/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10605.php">Ralph Castain: "Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2"</a>
<li><strong>Previous message:</strong> <a href="10603.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc2 atomics fail w/ xlc-9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10605.php">Ralph Castain: "Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2"</a>
<li><strong>Reply:</strong> <a href="10605.php">Ralph Castain: "Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2"</a>
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
