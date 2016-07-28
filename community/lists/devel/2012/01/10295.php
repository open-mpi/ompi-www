<?
$subject_val = "[OMPI devel] 1.4.5rc4 may still require GNU Make";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 16:27:17 2012" -->
<!-- isoreceived="20120131212717" -->
<!-- sent="Tue, 31 Jan 2012 13:26:58 -0800" -->
<!-- isosent="20120131212658" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.4.5rc4 may still require GNU Make" -->
<!-- id="4F285CA2.6000808_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="52AB6CAA-1AA1-4742-A3C0-2B349CDEB7DA_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.4.5rc4 may still require GNU Make<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-31 16:26:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10296.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="10294.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc4 is out"</a>
<li><strong>In reply to:</strong> <a href="10289.php">Jeff Squyres: "[OMPI devel] 1.4.5rc4 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10297.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc4 may still require GNU Make"</a>
<li><strong>Reply:</strong> <a href="10297.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc4 may still require GNU Make"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry to do this, but I've got another one:
<br>
<p>I was looking over my reports against 1.5.5rc1 and came across:
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2011/12/10184.php">http://www.open-mpi.org/community/lists/devel/2011/12/10184.php</a>
<br>
In which &quot;make clean&quot; can fail on systems (mostly BSD) where make != gmake.
<br>
<p>The issue is that $(RM) is defined by GNU Make but not other make versions.
<br>
While the instances I reported in VT for 1.5.5rc1 are not present in 
<br>
1.4.5rc4, the ompi_info one is:
<br>
<span class="quotelev1">&gt; $ find openmpi-1.4.5rc4 -name Makefile.am | xargs grep -w RM
</span><br>
<span class="quotelev1">&gt; openmpi-1.4.5rc4/ompi/tools/ompi_info/Makefile.am:      test -z 
</span><br>
<span class="quotelev1">&gt; &quot;$(OMPI_CXX_TEMPLATE_REPOSITORY)&quot; || $(RM) -rf 
</span><br>
<span class="quotelev1">&gt; $(OMPI_CXX_TEMPLATE_REPOSITORY)
</span><br>
Note that this will only be a problem if OMPI_CXX_TEMPLATE_REPOSITORY is 
<br>
non-empty, which doesn't appear to be the case on the few BSD systems I 
<br>
examined just now.
<br>
<p>I think the fix is just &quot;$(RM)&quot; -&gt; &quot;rm&quot;, since bare &quot;rm&quot; is used pretty 
<br>
widely in other Makefile.am's.
<br>
<p>I plan to add &quot;make clean&quot; to my testing criteria for the next RC that 
<br>
comes my way.
<br>
<p>-Paul
<br>
<p><p>On 1/31/2012 11:21 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Hot on the heels of rc3, rc4 is out:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The main differences are the 8 issues that Paul Hargrove mentioned:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Make v1.4 configure fail on OS X 10.3 and earlier
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fix opal/util/path.c for Linux with old compilers
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; README updates for the Sun compilers
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; README updates noting systems that are no longer supported
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fix assembly generation code on BSD in v1.4
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
<li><strong>Next message:</strong> <a href="10296.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="10294.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc4 is out"</a>
<li><strong>In reply to:</strong> <a href="10289.php">Jeff Squyres: "[OMPI devel] 1.4.5rc4 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10297.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc4 may still require GNU Make"</a>
<li><strong>Reply:</strong> <a href="10297.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc4 may still require GNU Make"</a>
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
