<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov 30 10:06:32 2006" -->
<!-- isoreceived="20061130150632" -->
<!-- sent="Thu, 30 Nov 2006 16:06:26 +0100" -->
<!-- isosent="20061130150626" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build system changes" -->
<!-- id="20061130150626.GD19753_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20061130150351.GC19753_at_iam.uni-bonn.de" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-30 10:06:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1213.php">Ralph Castain: "Re: [OMPI devel] Build system changes"</a>
<li><strong>Previous message:</strong> <a href="1211.php">Ralf Wildenhues: "Re: [OMPI devel] Build system changes"</a>
<li><strong>In reply to:</strong> <a href="1211.php">Ralf Wildenhues: "Re: [OMPI devel] Build system changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1214.php">Ralph Castain: "Re: [OMPI devel] Build system changes"</a>
<li><strong>Reply:</strong> <a href="1214.php">Ralph Castain: "Re: [OMPI devel] Build system changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; * Ralph Castain wrote on Thu, Nov 30, 2006 at 03:55:05PM CET:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; configure.in:1994: warning: macro `AM_PROG_LIBTOOL' not found in library
</span><br>
<span class="quotelev2">&gt; &gt; [Running] autoheader
</span><br>
<span class="quotelev2">&gt; &gt; [Running] autoconf
</span><br>
<span class="quotelev2">&gt; &gt; configure.in:1997: error: possibly undefined macro: AM_PROG_LIBTOOL
</span><br>
<span class="quotelev2">&gt; &gt;       If this token and others are legitimate, please use m4_pattern_allow.
</span><br>
<span class="quotelev2">&gt; &gt;       See the Autoconf documentation.
</span><br>
<p>Another question: does the aclocal from Automake 1.10 find the
<br>
libtool.m4 file from your Libtool installation?  IOW, if Libtool
<br>
and Automake are not installed below the same $prefix, then you
<br>
need to do something: either put the path to libtool.m4 in the
<br>
file $automake_prefix/share/aclocal/dirlist, or pass some -I
<br>
parameters to aclocal.
<br>
<p>Hope that helps.
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1213.php">Ralph Castain: "Re: [OMPI devel] Build system changes"</a>
<li><strong>Previous message:</strong> <a href="1211.php">Ralf Wildenhues: "Re: [OMPI devel] Build system changes"</a>
<li><strong>In reply to:</strong> <a href="1211.php">Ralf Wildenhues: "Re: [OMPI devel] Build system changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1214.php">Ralph Castain: "Re: [OMPI devel] Build system changes"</a>
<li><strong>Reply:</strong> <a href="1214.php">Ralph Castain: "Re: [OMPI devel] Build system changes"</a>
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
