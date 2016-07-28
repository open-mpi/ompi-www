<?
$subject_val = "Re: [OMPI devel] more vt woes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 13 07:49:52 2008" -->
<!-- isoreceived="20080213124952" -->
<!-- sent="Wed, 13 Feb 2008 13:49:41 +0100" -->
<!-- isosent="20080213124941" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] more vt woes" -->
<!-- id="1202906981.5923.5.camel_at_ricolap" -->
<!-- charset="utf-8" -->
<!-- inreplyto="8DF6D3D2-590E-445E-BFB8-1CA7523DA9E7_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] more vt woes<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-13 07:49:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3235.php">Ralph Castain: "Re: [OMPI devel] Please set svn:ignore properly"</a>
<li><strong>Previous message:</strong> <a href="3233.php">Lenny Verkhovsky: "Re: [OMPI devel] merging new PLPA to the trunk"</a>
<li><strong>In reply to:</strong> <a href="3211.php">George Bosilca: "Re: [OMPI devel] more vt woes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3236.php">Ralf Wildenhues: "Re: [OMPI devel] more vt woes"</a>
<li><strong>Reply:</strong> <a href="3236.php">Ralf Wildenhues: "Re: [OMPI devel] more vt woes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George,
<br>
<p>I'm not sure, whether you are able to see my reply of the ticket 1214...
<br>
<p>.......
<br>
For building VT on cross-platforms it's possible to build the compiler
<br>
wrappers (vtcc, vtcxx, vtf77, and vtf90) and the OPARI binary for the
<br>
front-end. Therefor the user should set the variable CXX_FOR_BUILD to
<br>
the 'native' compiler on the front-end. That means that the compiler
<br>
wrappers and OPARI will be built with the CXX_FOR_BUILD instead of the
<br>
cross-compiler (CXX). Futhermore, the user can set compiler and linker
<br>
flags for the front-end compiler (e.g. CXXFLAGS_FOR_BUILD). The
<br>
Makefile.am's for the compiler wrappers (tools/compwrap) and OPARI
<br>
(tools/opari) overwrite the user-variables (e.g. CXXFLAGS) by the
<br>
*_FOR_BUILD stuff. Unfortunately, the variables AM_CXXFLAGS,
<br>
AM_CPPFLAGS, and AM_LDFLAGS cannot be used for do that, because these
<br>
variables don't overwrite the user-variables but they will be append.
<br>
This could means that unsupported compiler flags will be passed to the
<br>
front-end compiler.
<br>
<p>Example: configure CXX_FOR_BUILD=g++ CXXFLAGS_FOR_BUILD=-m64
<br>
CC=cross-xlc CXX=cross-xlC CFLAGS=-q64 CXXFLAGS=-q64 ...
<br>
<p>In this case the compiler flag -q64 is not supported by g++, so
<br>
CXXFLAGS_FOR_BUILD should be used instead of CXXFLAGS.
<br>
<p>So, please ignore the warnings from Automake... Currently, I see no
<br>
better solution ;-)
<br>
.......
<br>
<p>Regards,
<br>
Matthias
<br>
<p><p>On Di, 2008-02-12 at 11:27 -0500, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I keep getting some warnings when I compile with gcc-4.2 on MAC OS X.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tools/compwrap/Makefile.am:38: `CXXFLAGS' is a user variable, you  
</span><br>
<span class="quotelev1">&gt; should not override it;
</span><br>
<span class="quotelev1">&gt; tools/compwrap/Makefile.am:38: use `AM_CXXFLAGS' instead.
</span><br>
<span class="quotelev1">&gt; tools/compwrap/Makefile.am:40: `CPPFLAGS' is a user variable, you  
</span><br>
<span class="quotelev1">&gt; should not override it;
</span><br>
<span class="quotelev1">&gt; tools/compwrap/Makefile.am:40: use `AM_CPPFLAGS' instead.
</span><br>
<span class="quotelev1">&gt; tools/compwrap/Makefile.am:41: `LDFLAGS' is a user variable, you  
</span><br>
<span class="quotelev1">&gt; should not override it;
</span><br>
<span class="quotelev1">&gt; tools/compwrap/Makefile.am:41: use `AM_LDFLAGS' instead.
</span><br>
<span class="quotelev1">&gt; tools/opari/tool/Makefile.am:8: `CXXFLAGS' is a user variable, you  
</span><br>
<span class="quotelev1">&gt; should not override it;
</span><br>
<span class="quotelev1">&gt; tools/opari/tool/Makefile.am:8: use `AM_CXXFLAGS' instead.
</span><br>
<span class="quotelev1">&gt; tools/opari/tool/Makefile.am:10: `CPPFLAGS' is a user variable, you  
</span><br>
<span class="quotelev1">&gt; should not override it;
</span><br>
<span class="quotelev1">&gt; tools/opari/tool/Makefile.am:10: use `AM_CPPFLAGS' instead.
</span><br>
<span class="quotelev1">&gt; tools/opari/tool/Makefile.am:11: `LDFLAGS' is a user variable, you  
</span><br>
<span class="quotelev1">&gt; should not override it;
</span><br>
<span class="quotelev1">&gt; tools/opari/tool/Makefile.am:11: use `AM_LDFLAGS' instead.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Thanks,
</span><br>
<span class="quotelev1">&gt;      george.
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
<p><pre>
--
Matthias Jurenz,
Center for Information Services and 
High Performance Computing (ZIH), TU Dresden, 
Willersbau A106, Zellescher Weg 12, 01062 Dresden
phone +49-351-463-31945, fax +49-351-463-37773
</pre>
<p>
<p>
<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3234/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3234/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3235.php">Ralph Castain: "Re: [OMPI devel] Please set svn:ignore properly"</a>
<li><strong>Previous message:</strong> <a href="3233.php">Lenny Verkhovsky: "Re: [OMPI devel] merging new PLPA to the trunk"</a>
<li><strong>In reply to:</strong> <a href="3211.php">George Bosilca: "Re: [OMPI devel] more vt woes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3236.php">Ralf Wildenhues: "Re: [OMPI devel] more vt woes"</a>
<li><strong>Reply:</strong> <a href="3236.php">Ralf Wildenhues: "Re: [OMPI devel] more vt woes"</a>
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
