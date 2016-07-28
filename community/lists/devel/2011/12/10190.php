<?
$subject_val = "Re: [OMPI devel] openmpi-1.5.5rc1: 2nd gmake dependence (mostly VT)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 20 20:48:08 2011" -->
<!-- isoreceived="20111221014808" -->
<!-- sent="Tue, 20 Dec 2011 17:47:43 -0800" -->
<!-- isosent="20111221014743" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.5.5rc1: 2nd gmake dependence (mostly VT)" -->
<!-- id="4EF13ABF.7090604_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAHwLALP5TFjYjo1vpoTskZkXJCixQSNyZqGFYP298D0vpAdqmg_at_mail.gmail.com" -->
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
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-20 20:47:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10191.php">Paul H. Hargrove: "[OMPI devel] autogen.sh generates broken configure on FreeBSD-8.2"</a>
<li><strong>Previous message:</strong> <a href="10189.php">Paul H. Hargrove: "Re: [OMPI devel] openmpi-1.5.5rc1: 2nd gmake dependence (mostly VT)"</a>
<li><strong>In reply to:</strong> <a href="10188.php">Rayson Ho: "Re: [OMPI devel] openmpi-1.5.5rc1: 2nd gmake dependence (mostly VT)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10189.php">Paul H. Hargrove: "Re: [OMPI devel] openmpi-1.5.5rc1: 2nd gmake dependence (mostly VT)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Quoting from the the autoconf docs at
<br>
<a href="http://www.gnu.org/s/hello/manual/autoconf/Limitations-of-Usual-Tools.html#Limitations-of-Usual-Tools">http://www.gnu.org/s/hello/manual/autoconf/Limitations-of-Usual-Tools.html#Limitations-of-Usual-Tools</a>
<br>
<p><span class="quotelev1">&gt; rm
</span><br>
<span class="quotelev1">&gt;          The -f and -r options are portable.
</span><br>
<p><p>-Paul
<br>
<p>On 12/20/2011 5:40 PM, Rayson Ho wrote:
<br>
<span class="quotelev1">&gt; On Tue, Dec 20, 2011 at 8:28 PM, Larry Baker&lt;baker_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am pretty sure a literal &quot;rm -rf&quot; should be fine.
</span><br>
<span class="quotelev2">&gt;&gt; Not necessarily.  I'm not at work.  But I think either -f or -r might not be legal on all Unix's (Tru64 Unix?  AIX?).
</span><br>
<span class="quotelev1">&gt; I used to code on AIX daily, and I am pretty sure that &quot;rm -rf&quot; works on AIX:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://publib.boulder.ibm.com/infocenter/aix/v6r1/index.jsp?topic=%2Fcom.ibm.aix.cmds%2Fdoc%2Faixcmds4%2Frm.htm">http://publib.boulder.ibm.com/infocenter/aix/v6r1/index.jsp?topic=%2Fcom.ibm.aix.cmds%2Fdoc%2Faixcmds4%2Frm.htm</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have not worked on Tru64 for many years, but according to the
</span><br>
<span class="quotelev1">&gt; manpage, -r&amp;  -f are supported:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://h30097.www3.hp.com/docs/base_doc/DOCUMENTATION/V51_HTML/MAN/MAN1/0320____.HTM">http://h30097.www3.hp.com/docs/base_doc/DOCUMENTATION/V51_HTML/MAN/MAN1/0320____.HTM</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rayson
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =================================
</span><br>
<span class="quotelev1">&gt; Open Grid Scheduler / Grid Engine
</span><br>
<span class="quotelev1">&gt; <a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scalable Grid Engine Support Program
</span><br>
<span class="quotelev1">&gt; <a href="http://www.scalablelogic.com/">http://www.scalablelogic.com/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Larry Baker
</span><br>
<span class="quotelev2">&gt;&gt; US Geological Survey
</span><br>
<span class="quotelev2">&gt;&gt; 650-329-5608
</span><br>
<span class="quotelev2">&gt;&gt; baker_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 20, 2011, at 5:19 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For the first time I tried &quot;make clean&quot; on FreeBSD and found /another/ GNU-vs-Berkeley Make problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The problem is use of $(RM) in several Makefile.am's (see below for list).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The onlt non-VT instance (ompi_info/Makefile.am) occurs in openmpi-1.4.5rc1 as well.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $(RM) is a predefined variable in GNU Make, not provided by Berkeley Make (or by Automake for that matter).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am pretty sure a literal &quot;rm -rf&quot; should be fine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ find openmpi-1.5.5rc1 -name Makefile.am | xargs grep -w RM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; openmpi-1.5.5rc1/ompi/tools/ompi_info/Makefile.am:      test -z &quot;$(OMPI_CXX_TEMPLATE_REPOSITORY)&quot; || $(RM) -rf $(OMPI_CXX_TEMPLATE_REPOSITORY)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; openmpi-1.5.5rc1/ompi/contrib/vt/vt/extlib/otf/tests/hello/Makefile.am: $(RM) *.otf *.def *.events *.marker *.otf.z *.def.z *.events.z *.marker.z
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; openmpi-1.5.5rc1/ompi/contrib/vt/vt/extlib/otf/tests/generic_streams-mpi/Makefile.am:   $(RM) *.otf *.def *.events *.marker *.otf.z *.def.z *.events.z *.marker.z
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; openmpi-1.5.5rc1/ompi/contrib/vt/vt/extlib/otf/tests/generic_streams/Makefile.am:       $(RM) *.otf *.def *.events *.marker *.otf.z *.def.z *.events.z *.marker.z
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; openmpi-1.5.5rc1/ompi/contrib/vt/vt/extlib/otf/tests/progress/Makefile.am:      $(RM) *.otf *.def *.events *.marker *.otf.z *.def.z *.events.z *.marker.z
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><pre>
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
<li><strong>Next message:</strong> <a href="10191.php">Paul H. Hargrove: "[OMPI devel] autogen.sh generates broken configure on FreeBSD-8.2"</a>
<li><strong>Previous message:</strong> <a href="10189.php">Paul H. Hargrove: "Re: [OMPI devel] openmpi-1.5.5rc1: 2nd gmake dependence (mostly VT)"</a>
<li><strong>In reply to:</strong> <a href="10188.php">Rayson Ho: "Re: [OMPI devel] openmpi-1.5.5rc1: 2nd gmake dependence (mostly VT)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10189.php">Paul H. Hargrove: "Re: [OMPI devel] openmpi-1.5.5rc1: 2nd gmake dependence (mostly VT)"</a>
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
