<?
$subject_val = "Re: [OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 27 13:22:54 2010" -->
<!-- isoreceived="20100827172254" -->
<!-- sent="Fri, 27 Aug 2010 19:22:47 +0200" -->
<!-- isosent="20100827172247" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] &amp;quot;make check&amp;quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)" -->
<!-- id="20100827172247.GD20983_at_gmx.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C771AEE.1060604_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)<br>
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-27 13:22:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8405.php">Paul H. Hargrove: "Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Previous message:</strong> <a href="8403.php">Rolf vandeVaart: "Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>In reply to:</strong> <a href="8400.php">Paul H. Hargrove: "Re: [OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8415.php">Paul H. Hargrove: "Re: [OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Reply:</strong> <a href="8415.php">Paul H. Hargrove: "Re: [OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
* Paul H. Hargrove wrote on Fri, Aug 27, 2010 at 03:54:54AM CEST:
<br>
<span class="quotelev2">&gt; &gt;I am now looking at using IBM's XLC compilers for ILP32 builds on
</span><br>
<span class="quotelev2">&gt; &gt;the same Linux/PPC64 platform for which I've reported some
</span><br>
<span class="quotelev2">&gt; &gt;XLC/LP64 bugs.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;What I find now is that &quot;make check&quot; is failing with the loader
</span><br>
<span class="quotelev2">&gt; &gt;unable to find libmpi.so.0.
</span><br>
<span class="quotelev2">&gt; &gt;This is with both 1.5rc5 and 1.4.3rc1.
</span><br>
<span class="quotelev2">&gt; &gt;This occurs with xlc, but things are just fine with gcc.
</span><br>
<p><span class="quotelev2">&gt; &gt;As I said above, the problem is NOT occuring w/ gcc.  So, I've
</span><br>
<span class="quotelev2">&gt; &gt;attached the &quot;./libtool --config&quot; output for the xlc and gcc
</span><br>
<span class="quotelev2">&gt; &gt;builds, which I see differ in more ways than I would have
</span><br>
<span class="quotelev2">&gt; &gt;expected.
</span><br>
<p>The thing that's unexpected to me is the shlibpath_overrides_runpath
<br>
difference.
<br>
<p><span class="quotelev1">&gt; While I still don't know the root cause, the following diff between
</span><br>
<span class="quotelev1">&gt; the libtool-generated wrappers for a gcc and xlc build make the
</span><br>
<span class="quotelev1">&gt; cause of the &quot;make check&quot; failure fairly obvious:
</span><br>
<p>Please set shlibpath_overrides_runpath=yes in the libtool script for
<br>
xlc, then try 'make clean all check'.  Please send config.log for xlc
<br>
(packed).
<br>
<p>Thanks,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8405.php">Paul H. Hargrove: "Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Previous message:</strong> <a href="8403.php">Rolf vandeVaart: "Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>In reply to:</strong> <a href="8400.php">Paul H. Hargrove: "Re: [OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8415.php">Paul H. Hargrove: "Re: [OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Reply:</strong> <a href="8415.php">Paul H. Hargrove: "Re: [OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)"</a>
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
