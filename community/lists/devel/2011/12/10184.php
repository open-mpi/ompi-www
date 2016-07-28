<?
$subject_val = "[OMPI devel] openmpi-1.5.5rc1: 2nd gmake dependence (mostly VT)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 20 20:19:49 2011" -->
<!-- isoreceived="20111221011949" -->
<!-- sent="Tue, 20 Dec 2011 17:19:24 -0800" -->
<!-- isosent="20111221011924" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] openmpi-1.5.5rc1: 2nd gmake dependence (mostly VT)" -->
<!-- id="4EF1341C.6060204_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] openmpi-1.5.5rc1: 2nd gmake dependence (mostly VT)<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-20 20:19:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10185.php">Paul H. Hargrove: "Re: [OMPI devel] missing file when running autogen - ALSO in 1.4.5rc1"</a>
<li><strong>Previous message:</strong> <a href="10183.php">Ralph Castain: "Re: [OMPI devel] missing file when running autogen - ALSO in 1.4.5rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10187.php">Larry Baker: "Re: [OMPI devel] openmpi-1.5.5rc1: 2nd gmake dependence (mostly VT)"</a>
<li><strong>Reply:</strong> <a href="10187.php">Larry Baker: "Re: [OMPI devel] openmpi-1.5.5rc1: 2nd gmake dependence (mostly VT)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For the first time I tried &quot;make clean&quot; on FreeBSD and found /another/ 
<br>
GNU-vs-Berkeley Make problem.
<br>
<p>The problem is use of $(RM) in several Makefile.am's (see below for list).
<br>
The onlt non-VT instance (ompi_info/Makefile.am) occurs in 
<br>
openmpi-1.4.5rc1 as well.
<br>
<p>$(RM) is a predefined variable in GNU Make, not provided by Berkeley 
<br>
Make (or by Automake for that matter).
<br>
I am pretty sure a literal &quot;rm -rf&quot; should be fine.
<br>
<p>-Paul
<br>
<p><span class="quotelev1">&gt; $ find openmpi-1.5.5rc1 -name Makefile.am | xargs grep -w RM
</span><br>
<span class="quotelev1">&gt; openmpi-1.5.5rc1/ompi/tools/ompi_info/Makefile.am:      test -z 
</span><br>
<span class="quotelev1">&gt; &quot;$(OMPI_CXX_TEMPLATE_REPOSITORY)&quot; || $(RM) -rf 
</span><br>
<span class="quotelev1">&gt; $(OMPI_CXX_TEMPLATE_REPOSITORY)
</span><br>
<span class="quotelev1">&gt; openmpi-1.5.5rc1/ompi/contrib/vt/vt/extlib/otf/tests/hello/Makefile.am: $(RM) 
</span><br>
<span class="quotelev1">&gt; *.otf *.def *.events *.marker *.otf.z *.def.z *.events.z *.marker.z
</span><br>
<span class="quotelev1">&gt; openmpi-1.5.5rc1/ompi/contrib/vt/vt/extlib/otf/tests/generic_streams-mpi/Makefile.am:   
</span><br>
<span class="quotelev1">&gt; $(RM) *.otf *.def *.events *.marker *.otf.z *.def.z *.events.z *.marker.z
</span><br>
<span class="quotelev1">&gt; openmpi-1.5.5rc1/ompi/contrib/vt/vt/extlib/otf/tests/generic_streams/Makefile.am:       
</span><br>
<span class="quotelev1">&gt; $(RM) *.otf *.def *.events *.marker *.otf.z *.def.z *.events.z *.marker.z
</span><br>
<span class="quotelev1">&gt; openmpi-1.5.5rc1/ompi/contrib/vt/vt/extlib/otf/tests/progress/Makefile.am:      
</span><br>
<span class="quotelev1">&gt; $(RM) *.otf *.def *.events *.marker *.otf.z *.def.z *.events.z *.marker.z
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
<li><strong>Next message:</strong> <a href="10185.php">Paul H. Hargrove: "Re: [OMPI devel] missing file when running autogen - ALSO in 1.4.5rc1"</a>
<li><strong>Previous message:</strong> <a href="10183.php">Ralph Castain: "Re: [OMPI devel] missing file when running autogen - ALSO in 1.4.5rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10187.php">Larry Baker: "Re: [OMPI devel] openmpi-1.5.5rc1: 2nd gmake dependence (mostly VT)"</a>
<li><strong>Reply:</strong> <a href="10187.php">Larry Baker: "Re: [OMPI devel] openmpi-1.5.5rc1: 2nd gmake dependence (mostly VT)"</a>
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
