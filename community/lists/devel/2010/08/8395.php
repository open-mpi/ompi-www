<?
$subject_val = "Re: [OMPI devel] &quot;make check&quot; (libtool?) failure on Solaris/SPARC (1.5rc5 and 1.4.3rc1)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 26 16:20:01 2010" -->
<!-- isoreceived="20100826202001" -->
<!-- sent="Thu, 26 Aug 2010 22:19:55 +0200" -->
<!-- isosent="20100826201955" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] &amp;quot;make check&amp;quot; (libtool?) failure on Solaris/SPARC (1.5rc5 and 1.4.3rc1)" -->
<!-- id="20100826201955.GK8657_at_gmx.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C76CB1E.6010105_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] &quot;make check&quot; (libtool?) failure on Solaris/SPARC (1.5rc5 and 1.4.3rc1)<br>
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-26 16:19:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8396.php">Samuel K. Gutierrez: "Re: [OMPI devel] common_sm_mmap.c: wrong args to orte_show_help() (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Previous message:</strong> <a href="8394.php">Paul H. Hargrove: "Re: [OMPI devel] &quot;make check&quot; (libtool?) failure on Solaris/SPARC (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>In reply to:</strong> <a href="8394.php">Paul H. Hargrove: "Re: [OMPI devel] &quot;make check&quot; (libtool?) failure on Solaris/SPARC (1.5rc5 and 1.4.3rc1)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
* Paul H. Hargrove wrote on Thu, Aug 26, 2010 at 10:14:22PM CEST:
<br>
<span class="quotelev1">&gt;  I just had a thought on this one:  In my environment on this
</span><br>
<span class="quotelev1">&gt; platform I have LD_LIBRARY_PATH_32 and LD_LIBRARY_PATH_64 set.  It
</span><br>
<span class="quotelev1">&gt; seems possible to me that this is causing the loader to ignore the
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH setting that libtool's wrapper script sets when
</span><br>
<span class="quotelev1">&gt; executing uninstalled programs in the build directory, as during
</span><br>
<span class="quotelev1">&gt; &quot;make check&quot;.
</span><br>
<span class="quotelev1">&gt;  So, I tried removing these from my environment and editing
</span><br>
<span class="quotelev1">&gt; ~/.bashrc not to set them.  The result is a SUCCESSful &quot;make check&quot;!
</span><br>
<p>Cool.  We need to fix that in Libtool then.
<br>
<p>Thanks for tracking this down!
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8396.php">Samuel K. Gutierrez: "Re: [OMPI devel] common_sm_mmap.c: wrong args to orte_show_help() (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Previous message:</strong> <a href="8394.php">Paul H. Hargrove: "Re: [OMPI devel] &quot;make check&quot; (libtool?) failure on Solaris/SPARC (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>In reply to:</strong> <a href="8394.php">Paul H. Hargrove: "Re: [OMPI devel] &quot;make check&quot; (libtool?) failure on Solaris/SPARC (1.5rc5 and 1.4.3rc1)"</a>
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
