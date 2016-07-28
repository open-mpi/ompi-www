<?
$subject_val = "Re: [OMPI devel] 1.7.4rc1 build failure: another OpenBSD-5";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 20 06:41:58 2013" -->
<!-- isoreceived="20131220114158" -->
<!-- sent="Fri, 20 Dec 2013 11:41:33 +0000" -->
<!-- isosent="20131220114133" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc1 build failure: another OpenBSD-5" -->
<!-- id="B6C3C741-A55E-4C6D-A870-1C06BE5E588F_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA160oXE0WaacVOF_p==DwWeADiDE99QbsqEvpvObVgiqSA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc1 build failure: another OpenBSD-5<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-20 06:41:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13523.php">Jeff Squyres (jsquyres): "[OMPI devel] rpath issues (re: svn:open-mpi r30005 - trunk/config)"</a>
<li><strong>Previous message:</strong> <a href="13521.php">Paul Hargrove: "[OMPI devel] 1.7.4rc1 build failure: another OpenBSD-5"</a>
<li><strong>In reply to:</strong> <a href="13521.php">Paul Hargrove: "[OMPI devel] 1.7.4rc1 build failure: another OpenBSD-5"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed and CMR'ed:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/4012">https://svn.open-mpi.org/trac/ompi/ticket/4012</a>
<br>
<p><p>On Dec 20, 2013, at 12:27 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Manually #ifdef'ing out the RLIMIT_AS code which lead to my previous failure on OpenBSD-5 allows me to reach the (sigh) *next* problem:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Making all in mpi/cxx
</span><br>
<span class="quotelev1">&gt;   CXX      mpicxx.lo
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7.4rc2forpaul-openbsd5-amd64/openmpi-1.7.4rc2forpaul/ompi/mpi/cxx/mpicxx.cc:120:21: error: macro &quot;MAX&quot; requires 2 arguments, but only 1 given
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7.4rc2forpaul-openbsd5-amd64/openmpi-1.7.4rc2forpaul/ompi/mpi/cxx/mpicxx.cc:121:21: error: macro &quot;MIN&quot; requires 2 arguments, but only 1 given
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think all that is needed is addition of
</span><br>
<span class="quotelev1">&gt;   #undef MAX
</span><br>
<span class="quotelev1">&gt;   #undef MIN
</span><br>
<span class="quotelev1">&gt; suitably early in this file.
</span><br>
<span class="quotelev1">&gt; At least that was sufficient to allow my build to complete.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13523.php">Jeff Squyres (jsquyres): "[OMPI devel] rpath issues (re: svn:open-mpi r30005 - trunk/config)"</a>
<li><strong>Previous message:</strong> <a href="13521.php">Paul Hargrove: "[OMPI devel] 1.7.4rc1 build failure: another OpenBSD-5"</a>
<li><strong>In reply to:</strong> <a href="13521.php">Paul Hargrove: "[OMPI devel] 1.7.4rc1 build failure: another OpenBSD-5"</a>
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
