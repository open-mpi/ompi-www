<?
$subject_val = "Re: [OMPI devel] openmpi-1.5.5rc1: 2nd gmake dependence (mostly VT)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 20 20:41:04 2011" -->
<!-- isoreceived="20111221014104" -->
<!-- sent="Tue, 20 Dec 2011 20:40:59 -0500" -->
<!-- isosent="20111221014059" -->
<!-- name="Rayson Ho" -->
<!-- email="raysonlogin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.5.5rc1: 2nd gmake dependence (mostly VT)" -->
<!-- id="CAHwLALP5TFjYjo1vpoTskZkXJCixQSNyZqGFYP298D0vpAdqmg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C64BC37B-74D3-4F29-849B-529FBCF40E4D_at_usgs.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openmpi-1.5.5rc1: 2nd gmake dependence (mostly VT)<br>
<strong>From:</strong> Rayson Ho (<em>raysonlogin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-20 20:40:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10189.php">Paul H. Hargrove: "Re: [OMPI devel] openmpi-1.5.5rc1: 2nd gmake dependence (mostly VT)"</a>
<li><strong>Previous message:</strong> <a href="10187.php">Larry Baker: "Re: [OMPI devel] openmpi-1.5.5rc1: 2nd gmake dependence (mostly VT)"</a>
<li><strong>In reply to:</strong> <a href="10187.php">Larry Baker: "Re: [OMPI devel] openmpi-1.5.5rc1: 2nd gmake dependence (mostly VT)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10190.php">Paul H. Hargrove: "Re: [OMPI devel] openmpi-1.5.5rc1: 2nd gmake dependence (mostly VT)"</a>
<li><strong>Reply:</strong> <a href="10190.php">Paul H. Hargrove: "Re: [OMPI devel] openmpi-1.5.5rc1: 2nd gmake dependence (mostly VT)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Dec 20, 2011 at 8:28 PM, Larry Baker &lt;baker_at_[hidden]&gt; wrote:
<br>
<span class="quotelev2">&gt;&gt; I am pretty sure a literal &quot;rm -rf&quot; should be fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not necessarily. &#160;I'm not at work. &#160;But I think either -f or -r might not be legal on all Unix's (Tru64 Unix? &#160;AIX?).
</span><br>
<p>I used to code on AIX daily, and I am pretty sure that &quot;rm -rf&quot; works on AIX:
<br>
<p><a href="http://publib.boulder.ibm.com/infocenter/aix/v6r1/index.jsp?topic=%2Fcom.ibm.aix.cmds%2Fdoc%2Faixcmds4%2Frm.htm">http://publib.boulder.ibm.com/infocenter/aix/v6r1/index.jsp?topic=%2Fcom.ibm.aix.cmds%2Fdoc%2Faixcmds4%2Frm.htm</a>
<br>
<p>I have not worked on Tru64 for many years, but according to the
<br>
manpage, -r &amp; -f are supported:
<br>
<p><a href="http://h30097.www3.hp.com/docs/base_doc/DOCUMENTATION/V51_HTML/MAN/MAN1/0320____.HTM">http://h30097.www3.hp.com/docs/base_doc/DOCUMENTATION/V51_HTML/MAN/MAN1/0320____.HTM</a>
<br>
<p>Rayson
<br>
<p>=================================
<br>
Open Grid Scheduler / Grid Engine
<br>
<a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
<br>
<p>Scalable Grid Engine Support Program
<br>
<a href="http://www.scalablelogic.com/">http://www.scalablelogic.com/</a>
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Larry Baker
</span><br>
<span class="quotelev1">&gt; US Geological Survey
</span><br>
<span class="quotelev1">&gt; 650-329-5608
</span><br>
<span class="quotelev1">&gt; baker_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 20, 2011, at 5:19 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For the first time I tried &quot;make clean&quot; on FreeBSD and found /another/ GNU-vs-Berkeley Make problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem is use of $(RM) in several Makefile.am's (see below for list).
</span><br>
<span class="quotelev2">&gt;&gt; The onlt non-VT instance (ompi_info/Makefile.am) occurs in openmpi-1.4.5rc1 as well.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $(RM) is a predefined variable in GNU Make, not provided by Berkeley Make (or by Automake for that matter).
</span><br>
<span class="quotelev2">&gt;&gt; I am pretty sure a literal &quot;rm -rf&quot; should be fine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ find openmpi-1.5.5rc1 -name Makefile.am | xargs grep -w RM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.5.5rc1/ompi/tools/ompi_info/Makefile.am: &#160; &#160; &#160;test -z &quot;$(OMPI_CXX_TEMPLATE_REPOSITORY)&quot; || $(RM) -rf $(OMPI_CXX_TEMPLATE_REPOSITORY)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.5.5rc1/ompi/contrib/vt/vt/extlib/otf/tests/hello/Makefile.am: $(RM) *.otf *.def *.events *.marker *.otf.z *.def.z *.events.z *.marker.z
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.5.5rc1/ompi/contrib/vt/vt/extlib/otf/tests/generic_streams-mpi/Makefile.am: &#160; $(RM) *.otf *.def *.events *.marker *.otf.z *.def.z *.events.z *.marker.z
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.5.5rc1/ompi/contrib/vt/vt/extlib/otf/tests/generic_streams/Makefile.am: &#160; &#160; &#160; $(RM) *.otf *.def *.events *.marker *.otf.z *.def.z *.events.z *.marker.z
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.5.5rc1/ompi/contrib/vt/vt/extlib/otf/tests/progress/Makefile.am: &#160; &#160; &#160;$(RM) *.otf *.def *.events *.marker *.otf.z *.def.z *.events.z *.marker.z
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; HPC Research Department &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory &#160; &#160; Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><p><p><pre>
-- 
Rayson
==================================================
Open Grid Scheduler - The Official Open Source Grid Engine
<a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10189.php">Paul H. Hargrove: "Re: [OMPI devel] openmpi-1.5.5rc1: 2nd gmake dependence (mostly VT)"</a>
<li><strong>Previous message:</strong> <a href="10187.php">Larry Baker: "Re: [OMPI devel] openmpi-1.5.5rc1: 2nd gmake dependence (mostly VT)"</a>
<li><strong>In reply to:</strong> <a href="10187.php">Larry Baker: "Re: [OMPI devel] openmpi-1.5.5rc1: 2nd gmake dependence (mostly VT)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10190.php">Paul H. Hargrove: "Re: [OMPI devel] openmpi-1.5.5rc1: 2nd gmake dependence (mostly VT)"</a>
<li><strong>Reply:</strong> <a href="10190.php">Paul H. Hargrove: "Re: [OMPI devel] openmpi-1.5.5rc1: 2nd gmake dependence (mostly VT)"</a>
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
