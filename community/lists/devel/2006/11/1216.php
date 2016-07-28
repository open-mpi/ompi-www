<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov 30 10:43:54 2006" -->
<!-- isoreceived="20061130154354" -->
<!-- sent="Thu, 30 Nov 2006 08:43:47 -0700" -->
<!-- isosent="20061130154347" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build system changes" -->
<!-- id="C1944A43.61AB%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20061130153341.GF19753_at_iam.uni-bonn.de" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-30 10:43:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1217.php">Jeff Squyres: "Re: [OMPI devel] pfile_read_at_f.c:99: error: invalid lvalue in unary '&amp;'"</a>
<li><strong>Previous message:</strong> <a href="1215.php">Ralf Wildenhues: "Re: [OMPI devel] Build system changes"</a>
<li><strong>In reply to:</strong> <a href="1215.php">Ralf Wildenhues: "Re: [OMPI devel] Build system changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1213.php">Ralph Castain: "Re: [OMPI devel] Build system changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralf! Much appreciated.
<br>
<p><p>On 11/30/06 8:33 AM, &quot;Ralf Wildenhues&quot; &lt;Ralf.Wildenhues_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; * Ralph Castain wrote on Thu, Nov 30, 2006 at 04:12:16PM CET:
</span><br>
<span class="quotelev2">&gt;&gt; That could be the problem. I had to update automake, and unfortunately
</span><br>
<span class="quotelev2">&gt;&gt; Darwin Ports hasn't reached that level yet. So I had to build and install
</span><br>
<span class="quotelev2">&gt;&gt; automake by hand under my own bin directory. But libtool etc are all in
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then that's the most likely cause.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Ralph Castain wrote on Thu, Nov 30, 2006 at 04:10:35PM CET:
</span><br>
<span class="quotelev2">&gt;&gt; m4 version is 1.4.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Updating is advisable.  M4 1.4.8 is the current version.  It has
</span><br>
<span class="quotelev1">&gt; many bugfixes over 1.4.2, and there are a couple of tricky cases
</span><br>
<span class="quotelev1">&gt; where the latter is known to fail (in conjunction with autoconf).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you excuse a small plug: Automake 1.10 and (unreleased) Autoconf 2.62
</span><br>
<span class="quotelev1">&gt; will both help to eliminate a large part of config.status execution time,
</span><br>
<span class="quotelev1">&gt; compared with the 1.9.6/2.59 combo (OpenMPI was used for testing here):
</span><br>
<span class="quotelev1">&gt; <a href="http://lists.gnu.org/archive/html/autoconf-patches/2006-11/msg00035.html">http://lists.gnu.org/archive/html/autoconf-patches/2006-11/msg00035.html</a>
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
<li><strong>Next message:</strong> <a href="1217.php">Jeff Squyres: "Re: [OMPI devel] pfile_read_at_f.c:99: error: invalid lvalue in unary '&amp;'"</a>
<li><strong>Previous message:</strong> <a href="1215.php">Ralf Wildenhues: "Re: [OMPI devel] Build system changes"</a>
<li><strong>In reply to:</strong> <a href="1215.php">Ralf Wildenhues: "Re: [OMPI devel] Build system changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1213.php">Ralph Castain: "Re: [OMPI devel] Build system changes"</a>
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
