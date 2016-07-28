<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov 30 10:12:25 2006" -->
<!-- isoreceived="20061130151225" -->
<!-- sent="Thu, 30 Nov 2006 08:12:16 -0700" -->
<!-- isosent="20061130151216" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build system changes" -->
<!-- id="C19442E0.A41%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20061130150626.GD19753_at_iam.uni-bonn.de" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-30 10:12:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1215.php">Ralf Wildenhues: "Re: [OMPI devel] Build system changes"</a>
<li><strong>Previous message:</strong> <a href="1213.php">Ralph Castain: "Re: [OMPI devel] Build system changes"</a>
<li><strong>In reply to:</strong> <a href="1212.php">Ralf Wildenhues: "Re: [OMPI devel] Build system changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1215.php">Ralf Wildenhues: "Re: [OMPI devel] Build system changes"</a>
<li><strong>Reply:</strong> <a href="1215.php">Ralf Wildenhues: "Re: [OMPI devel] Build system changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That could be the problem. I had to update automake, and unfortunately
<br>
Darwin Ports hasn't reached that level yet. So I had to build and install
<br>
automake by hand under my own bin directory. But libtool etc are all in
<br>
/usr/bin.
<br>
<p>I'll give your suggestion a shot later - gotta run.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>On 11/30/06 8:06 AM, &quot;Ralf Wildenhues&quot; &lt;Ralf.Wildenhues_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; * Ralph Castain wrote on Thu, Nov 30, 2006 at 03:55:05PM CET:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure.in:1994: warning: macro `AM_PROG_LIBTOOL' not found in library
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Running] autoheader
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Running] autoconf
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure.in:1997: error: possibly undefined macro: AM_PROG_LIBTOOL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       If this token and others are legitimate, please use m4_pattern_allow.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       See the Autoconf documentation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another question: does the aclocal from Automake 1.10 find the
</span><br>
<span class="quotelev1">&gt; libtool.m4 file from your Libtool installation?  IOW, if Libtool
</span><br>
<span class="quotelev1">&gt; and Automake are not installed below the same $prefix, then you
</span><br>
<span class="quotelev1">&gt; need to do something: either put the path to libtool.m4 in the
</span><br>
<span class="quotelev1">&gt; file $automake_prefix/share/aclocal/dirlist, or pass some -I
</span><br>
<span class="quotelev1">&gt; parameters to aclocal.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope that helps.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ralf
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
<li><strong>Next message:</strong> <a href="1215.php">Ralf Wildenhues: "Re: [OMPI devel] Build system changes"</a>
<li><strong>Previous message:</strong> <a href="1213.php">Ralph Castain: "Re: [OMPI devel] Build system changes"</a>
<li><strong>In reply to:</strong> <a href="1212.php">Ralf Wildenhues: "Re: [OMPI devel] Build system changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1215.php">Ralf Wildenhues: "Re: [OMPI devel] Build system changes"</a>
<li><strong>Reply:</strong> <a href="1215.php">Ralf Wildenhues: "Re: [OMPI devel] Build system changes"</a>
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
