<?
$subject_val = "Re: [OMPI devel] openmpi-1.5.5rc1: 2nd gmake dependence (mostly VT)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 20 20:41:17 2011" -->
<!-- isoreceived="20111221014117" -->
<!-- sent="Tue, 20 Dec 2011 17:40:51 -0800" -->
<!-- isosent="20111221014051" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.5.5rc1: 2nd gmake dependence (mostly VT)" -->
<!-- id="4EF13923.2030603_at_lbl.gov" -->
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
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-20 20:40:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10190.php">Paul H. Hargrove: "Re: [OMPI devel] openmpi-1.5.5rc1: 2nd gmake dependence (mostly VT)"</a>
<li><strong>Previous message:</strong> <a href="10188.php">Rayson Ho: "Re: [OMPI devel] openmpi-1.5.5rc1: 2nd gmake dependence (mostly VT)"</a>
<li><strong>In reply to:</strong> <a href="10187.php">Larry Baker: "Re: [OMPI devel] openmpi-1.5.5rc1: 2nd gmake dependence (mostly VT)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK, I'll concede the &quot;-r&quot; which should not be required in this case anyway.
<br>
However, if &quot;rm -f&quot; doesn't work, then we have 169 additional problems 
<br>
to fix ;-)
<br>
<span class="quotelev1">&gt; $ find openmpi-1.5.5rc1 -name Makefile.am | xargs grep 'rm -f' | wc -l
</span><br>
<span class="quotelev1">&gt;     169
</span><br>
<p>-Paul
<br>
<p>On 12/20/2011 5:28 PM, Larry Baker wrote:
<br>
<span class="quotelev2">&gt;&gt; I am pretty sure a literal &quot;rm -rf&quot; should be fine.
</span><br>
<span class="quotelev1">&gt; Not necessarily.  I'm not at work.  But I think either -f or -r might not be legal on all Unix's (Tru64 Unix?  AIX?).
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.5.5rc1/ompi/tools/ompi_info/Makefile.am:      test -z &quot;$(OMPI_CXX_TEMPLATE_REPOSITORY)&quot; || $(RM) -rf $(OMPI_CXX_TEMPLATE_REPOSITORY)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.5.5rc1/ompi/contrib/vt/vt/extlib/otf/tests/hello/Makefile.am: $(RM) *.otf *.def *.events *.marker *.otf.z *.def.z *.events.z *.marker.z
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.5.5rc1/ompi/contrib/vt/vt/extlib/otf/tests/generic_streams-mpi/Makefile.am:   $(RM) *.otf *.def *.events *.marker *.otf.z *.def.z *.events.z *.marker.z
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.5.5rc1/ompi/contrib/vt/vt/extlib/otf/tests/generic_streams/Makefile.am:       $(RM) *.otf *.def *.events *.marker *.otf.z *.def.z *.events.z *.marker.z
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.5.5rc1/ompi/contrib/vt/vt/extlib/otf/tests/progress/Makefile.am:      $(RM) *.otf *.def *.events *.marker *.otf.z *.def.z *.events.z *.marker.z
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="10190.php">Paul H. Hargrove: "Re: [OMPI devel] openmpi-1.5.5rc1: 2nd gmake dependence (mostly VT)"</a>
<li><strong>Previous message:</strong> <a href="10188.php">Rayson Ho: "Re: [OMPI devel] openmpi-1.5.5rc1: 2nd gmake dependence (mostly VT)"</a>
<li><strong>In reply to:</strong> <a href="10187.php">Larry Baker: "Re: [OMPI devel] openmpi-1.5.5rc1: 2nd gmake dependence (mostly VT)"</a>
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
