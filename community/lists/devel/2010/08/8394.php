<?
$subject_val = "Re: [OMPI devel] &quot;make check&quot; (libtool?) failure on Solaris/SPARC (1.5rc5 and 1.4.3rc1)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 26 16:14:34 2010" -->
<!-- isoreceived="20100826201434" -->
<!-- sent="Thu, 26 Aug 2010 13:14:22 -0700" -->
<!-- isosent="20100826201422" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] &amp;quot;make check&amp;quot; (libtool?) failure on Solaris/SPARC (1.5rc5 and 1.4.3rc1)" -->
<!-- id="4C76CB1E.6010105_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C76AF18.1020905_at_lbl.gov" -->
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
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-26 16:14:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8395.php">Ralf Wildenhues: "Re: [OMPI devel] &quot;make check&quot; (libtool?) failure on Solaris/SPARC (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Previous message:</strong> <a href="8393.php">Jeff Squyres: "Re: [OMPI devel] common_sm_mmap.c: wrong args to orte_show_help() (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>In reply to:</strong> <a href="8387.php">Paul H. Hargrove: "Re: [OMPI devel] &quot;make check&quot; (libtool?) failure on Solaris/SPARC (1.5rc5 and 1.4.3rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8395.php">Ralf Wildenhues: "Re: [OMPI devel] &quot;make check&quot; (libtool?) failure on Solaris/SPARC (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Reply:</strong> <a href="8395.php">Ralf Wildenhues: "Re: [OMPI devel] &quot;make check&quot; (libtool?) failure on Solaris/SPARC (1.5rc5 and 1.4.3rc1)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralf Wildenhues wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello Paul,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * Paul H. Hargrove wrote on Thu, Aug 26, 2010 at 01:58:11AM CEST:
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have been able to configure and build both 1.5rc5 and 1.4.3rc1 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Solaris 10 for SPARC, using Sun C 5.10.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have also build 1.5rc5 w/ gcc-3.3.2 (and expect 1.4.3rc1 to build
</span><br>
<span class="quotelev3">&gt;&gt;&gt; w/ gcc as well, once I have time)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All 3 builds fail &quot;make check&quot; in a way that suggests to me that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtool is not working correctly on this platform.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you send output of './libtool --config' for the platforms?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Ralf
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Requested output is attached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Ralph,
<br>
<p>&nbsp;&nbsp;I just had a thought on this one:  In my environment on this platform 
<br>
I have LD_LIBRARY_PATH_32 and LD_LIBRARY_PATH_64 set.  It seems possible 
<br>
to me that this is causing the loader to ignore the LD_LIBRARY_PATH 
<br>
setting that libtool's wrapper script sets when executing uninstalled 
<br>
programs in the build directory, as during &quot;make check&quot;.
<br>
&nbsp;&nbsp;So, I tried removing these from my environment and editing ~/.bashrc 
<br>
not to set them.  The result is a SUCCESSful &quot;make check&quot;!
<br>
<p>-Paul
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8395.php">Ralf Wildenhues: "Re: [OMPI devel] &quot;make check&quot; (libtool?) failure on Solaris/SPARC (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Previous message:</strong> <a href="8393.php">Jeff Squyres: "Re: [OMPI devel] common_sm_mmap.c: wrong args to orte_show_help() (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>In reply to:</strong> <a href="8387.php">Paul H. Hargrove: "Re: [OMPI devel] &quot;make check&quot; (libtool?) failure on Solaris/SPARC (1.5rc5 and 1.4.3rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8395.php">Ralf Wildenhues: "Re: [OMPI devel] &quot;make check&quot; (libtool?) failure on Solaris/SPARC (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Reply:</strong> <a href="8395.php">Ralf Wildenhues: "Re: [OMPI devel] &quot;make check&quot; (libtool?) failure on Solaris/SPARC (1.5rc5 and 1.4.3rc1)"</a>
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
