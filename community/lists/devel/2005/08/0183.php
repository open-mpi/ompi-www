<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 17 16:37:29 2005" -->
<!-- isoreceived="20050817213729" -->
<!-- sent="Wed, 17 Aug 2005 17:37:27 -0400" -->
<!-- isosent="20050817213727" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  Autogen.sh errors" -->
<!-- id="ee75acac17b688620ad64de7dbf8122b_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6.2.0.14.2.20050817153208.036224f0_at_cic-mail.lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-17 16:37:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0184.php">Brian Barrett: "Re:  ob1 -&gt; default?"</a>
<li><strong>Previous message:</strong> <a href="0182.php">James W. Barker: "Autogen.sh errors"</a>
<li><strong>In reply to:</strong> <a href="0182.php">James W. Barker: "Autogen.sh errors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like your Auto* tools were not installed to the same $prefix.
<br>
<p>Specifically, you need to install Autoconf, Automake, and Libtool to  
<br>
the same $prefix (check the HACKING file for details).
<br>
<p><p>On Aug 17, 2005, at 5:35 PM, James W. Barker wrote:
<br>
<p><span class="quotelev1">&gt; All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm having trouble with auotgen.sh.  Autogen.sh errors saying I need to
</span><br>
<span class="quotelev1">&gt; install Autoconf 2.58 but I am at version 2.59; any thoughts?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jim Barker
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI MCA component configure generator finished
</span><br>
<span class="quotelev1">&gt; *** Running GNU tools
</span><br>
<span class="quotelev1">&gt; [Running] aclocal
</span><br>
<span class="quotelev1">&gt; aclocal:configure.ac:108: warning: macro `AM_ENABLE_SHARED' not found  
</span><br>
<span class="quotelev1">&gt; in
</span><br>
<span class="quotelev1">&gt; library
</span><br>
<span class="quotelev1">&gt; aclocal:configure.ac:109: warning: macro `AM_DISABLE_STATIC' not found  
</span><br>
<span class="quotelev1">&gt; in
</span><br>
<span class="quotelev1">&gt; library
</span><br>
<span class="quotelev1">&gt; aclocal:configure.ac:383: warning: macro `AM_PROG_LIBTOOL' not found  
</span><br>
<span class="quotelev1">&gt; in library
</span><br>
<span class="quotelev1">&gt; [Running] autoheader
</span><br>
<span class="quotelev1">&gt; [Running] autoconf
</span><br>
<span class="quotelev1">&gt; configure.ac:110: error: possibly undefined macro: AM_ENABLE_SHARED
</span><br>
<span class="quotelev1">&gt;        If this token and others are legitimate, please use  
</span><br>
<span class="quotelev1">&gt; m4_pattern_allow.
</span><br>
<span class="quotelev1">&gt;        See the Autoconf documentation.
</span><br>
<span class="quotelev1">&gt; configure.ac:111: error: possibly undefined macro: AM_DISABLE_STATIC
</span><br>
<span class="quotelev1">&gt; configure.ac:395: error: possibly undefined macro: AM_PROG_LIBTOOL
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; It seems that the execution of &quot;autoconf&quot; has failed.  See above for
</span><br>
<span class="quotelev1">&gt; the specific error message that caused it to abort.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This *MAY* be caused by an older version of one of the required
</span><br>
<span class="quotelev1">&gt; packages.  Please make sure you are using at least the following
</span><br>
<span class="quotelev1">&gt; versions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; GNU Autoconf 2.58
</span><br>
<span class="quotelev1">&gt; GNU Automake 1.7
</span><br>
<span class="quotelev1">&gt; GNU Libtool  1.5
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ffe1.lanl.gov&gt; autoconf -V
</span><br>
<span class="quotelev1">&gt; autoconf (GNU Autoconf) 2.59
</span><br>
<span class="quotelev1">&gt; Written by David J. MacKenzie and Akim Demaille.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2003 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; This is free software; see the source for copying conditions.  There  
</span><br>
<span class="quotelev1">&gt; is NO
</span><br>
<span class="quotelev1">&gt; warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR  
</span><br>
<span class="quotelev1">&gt; PURPOSE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; James W. Barker  Ph.D.
</span><br>
<span class="quotelev1">&gt; CCS-1,  Resilient Technologies Team
</span><br>
<span class="quotelev1">&gt; 505-665-9558
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
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0184.php">Brian Barrett: "Re:  ob1 -&gt; default?"</a>
<li><strong>Previous message:</strong> <a href="0182.php">James W. Barker: "Autogen.sh errors"</a>
<li><strong>In reply to:</strong> <a href="0182.php">James W. Barker: "Autogen.sh errors"</a>
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
