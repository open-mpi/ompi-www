<?
$subject_val = "Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 26 09:37:14 2012" -->
<!-- isoreceived="20120226143714" -->
<!-- sent="Sun, 26 Feb 2012 07:37:04 -0700" -->
<!-- isosent="20120226143704" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2" -->
<!-- id="D4AE0C8E-2129-4352-B2BF-9B106D3CA242_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-26 09:37:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10610.php">Ron Broberg: "[OMPI devel] Compiling OpenMPI 1.5.4 on Debian 6 qemu arm6l"</a>
<li><strong>Previous message:</strong> <a href="10608.php">Paul Hargrove: "Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2"</a>
<li><strong>In reply to:</strong> <a href="10607.php">Paul Hargrove: "Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10611.php">Paul Hargrove: "Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2"</a>
<li><strong>Reply:</strong> <a href="10611.php">Paul Hargrove: "Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 26, 2012, at 1:32 AM, Paul Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; I don't think the GNU autotools all work correctly for pathnames with spaces.
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
<p>In the example you gave, the library you were adding (&quot;dummy mt&quot;) has a space in it. We don't handle that case - that was my point.
<br>
<p>However, your other note is also correct - the vpath builds need to be fixed with the other CMR.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've been testing just fine 1 day before w/o seeing this problem.
</span><br>
<span class="quotelev1">&gt; It is possible something changed in my testing setup, but I can't recall anything.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am going to keep poking at this, but would appreciate any clues as to where to look.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sat, Feb 25, 2012 at 11:28 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; No, I ran into it last week. The problem is that we don't handle spaces in path names - apparently, we never have, so far as Jeff could determine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 25, 2012, at 11:27 PM, Paul Hargrove wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Am I the only one seeing the following odd behavior when running configure?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [...]
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
<span class="quotelev2">&gt;&gt; configure: /bin/sh '[srcdir]/opal/libltdl/configure' succeeded for opal/libltdl
</span><br>
<span class="quotelev2">&gt;&gt; grep: [srcdir]/opal/libltdl/Makefile: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; checking for libtool-supplied linker flags... ACLOCAL='${SHELL} [srcir]/config/missing --run aclocal-1.11'
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
<span class="quotelev2">&gt;&gt; checking which of CFLAGS are ok for debugger modules...  -DNDEBUG -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev2">&gt;&gt; checking for debugger extra CFLAGS... -g
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; *** Wrapper compiler final setup
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The presence of &quot;dummy mt&quot; in the LIBS vars renders the resulting wrapper compilers unusable.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is a VPATH (blddir != srcdir) build and it appears that something is looking for a Makefile in [srcdir]/opal/libltdl when it almost certainly should be looking in [blddir]/opal/libltdl.
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10609/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10610.php">Ron Broberg: "[OMPI devel] Compiling OpenMPI 1.5.4 on Debian 6 qemu arm6l"</a>
<li><strong>Previous message:</strong> <a href="10608.php">Paul Hargrove: "Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2"</a>
<li><strong>In reply to:</strong> <a href="10607.php">Paul Hargrove: "Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10611.php">Paul Hargrove: "Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2"</a>
<li><strong>Reply:</strong> <a href="10611.php">Paul Hargrove: "Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2"</a>
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
