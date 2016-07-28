<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov 30 10:33:47 2006" -->
<!-- isoreceived="20061130153347" -->
<!-- sent="Thu, 30 Nov 2006 16:33:41 +0100" -->
<!-- isosent="20061130153341" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build system changes" -->
<!-- id="20061130153341.GF19753_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C19442E0.A41%rhc_at_lanl.gov" -->
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
<strong>Date:</strong> 2006-11-30 10:33:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1216.php">Ralph H Castain: "Re: [OMPI devel] Build system changes"</a>
<li><strong>Previous message:</strong> <a href="1214.php">Ralph Castain: "Re: [OMPI devel] Build system changes"</a>
<li><strong>In reply to:</strong> <a href="1214.php">Ralph Castain: "Re: [OMPI devel] Build system changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1216.php">Ralph H Castain: "Re: [OMPI devel] Build system changes"</a>
<li><strong>Reply:</strong> <a href="1216.php">Ralph H Castain: "Re: [OMPI devel] Build system changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
* Ralph Castain wrote on Thu, Nov 30, 2006 at 04:12:16PM CET:
<br>
<span class="quotelev1">&gt; That could be the problem. I had to update automake, and unfortunately
</span><br>
<span class="quotelev1">&gt; Darwin Ports hasn't reached that level yet. So I had to build and install
</span><br>
<span class="quotelev1">&gt; automake by hand under my own bin directory. But libtool etc are all in
</span><br>
<span class="quotelev1">&gt; /usr/bin.
</span><br>
<p>Then that's the most likely cause.
<br>
<p>* Ralph Castain wrote on Thu, Nov 30, 2006 at 04:10:35PM CET:
<br>
<span class="quotelev1">&gt; m4 version is 1.4.2
</span><br>
<p>Updating is advisable.  M4 1.4.8 is the current version.  It has
<br>
many bugfixes over 1.4.2, and there are a couple of tricky cases
<br>
where the latter is known to fail (in conjunction with autoconf).
<br>
<p>If you excuse a small plug: Automake 1.10 and (unreleased) Autoconf 2.62
<br>
will both help to eliminate a large part of config.status execution time,
<br>
compared with the 1.9.6/2.59 combo (OpenMPI was used for testing here):
<br>
<a href="http://lists.gnu.org/archive/html/autoconf-patches/2006-11/msg00035.html">http://lists.gnu.org/archive/html/autoconf-patches/2006-11/msg00035.html</a>
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1216.php">Ralph H Castain: "Re: [OMPI devel] Build system changes"</a>
<li><strong>Previous message:</strong> <a href="1214.php">Ralph Castain: "Re: [OMPI devel] Build system changes"</a>
<li><strong>In reply to:</strong> <a href="1214.php">Ralph Castain: "Re: [OMPI devel] Build system changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1216.php">Ralph H Castain: "Re: [OMPI devel] Build system changes"</a>
<li><strong>Reply:</strong> <a href="1216.php">Ralph H Castain: "Re: [OMPI devel] Build system changes"</a>
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
