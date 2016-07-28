<?
$subject_val = "Re: [OMPI devel] Solaris/SOS build failure in trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 21 08:19:28 2012" -->
<!-- isoreceived="20120221131928" -->
<!-- sent="Tue, 21 Feb 2012 08:19:20 -0500" -->
<!-- isosent="20120221131920" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Solaris/SOS build failure in trunk" -->
<!-- id="619800BE-53FF-4EC4-9B62-0050591FA938_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA16T-D3Lqm=mg33r751X8XXx4esfwExk0mndVM7Obhigpg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Solaris/SOS build failure in trunk<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-21 08:19:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10540.php">Jeffrey Squyres: "Re: [OMPI devel] excessive warnings on some BSDs [w/ PATCH]"</a>
<li><strong>Previous message:</strong> <a href="10538.php">Jeffrey Squyres: "Re: [OMPI devel] non-portable code in examples/Makefile"</a>
<li><strong>In reply to:</strong> <a href="10490.php">Paul Hargrove: "Re: [OMPI devel] Solaris/SOS build failure in trunk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Should be fixed on the trunk in r25982.
<br>
<p>On Feb 18, 2012, at 7:39 AM, Paul Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; Same has been seen on Solaris11/x86-64 w/ the Studio 12.3 compiler.
</span><br>
<span class="quotelev1">&gt; However, a gcc build on the same system was fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Feb 17, 2012 at 10:49 AM, Paul H. Hargrove &lt;PHHargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Building last night's trunk tarball (1.7a1r25944) On Solaris10/SPARC w/ Solaris Studio compilers if failing in &quot;make check&quot;.
</span><br>
<span class="quotelev1">&gt; This same problem is presenr with the 12.2 and 12.3 compilers and both v8plus and v9 ABIs:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Making check in util
</span><br>
<span class="quotelev1">&gt; make  opal_bit_ops opal_path_nfs  opal_sos
</span><br>
<span class="quotelev1">&gt;  CC     opal_bit_ops.o
</span><br>
<span class="quotelev1">&gt;  CCLD   opal_bit_ops
</span><br>
<span class="quotelev1">&gt;  CC     opal_path_nfs.o
</span><br>
<span class="quotelev1">&gt;  CCLD   opal_path_nfs
</span><br>
<span class="quotelev1">&gt;  CC     opal_sos.o
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/OMPI/openmpi-trunk-solaris10-sparcT2-ss12u2-v9//openmpi-trunk/test/util/opal_sos.c&quot;, line 90: undefined symbol: OPAL_SOS_FUNCTION
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/OMPI/openmpi-trunk-solaris10-sparcT2-ss12u2-v9//openmpi-trunk/test/util/opal_sos.c&quot;, line 90: warning: improper pointer/integer combination: arg #3
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/OMPI/openmpi-trunk-solaris10-sparcT2-ss12u2-v9//openmpi-trunk/test/util/opal_sos.c&quot;, line 109: warning: improper pointer/integer combination: arg #3
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/OMPI/openmpi-trunk-solaris10-sparcT2-ss12u2-v9//openmpi-trunk/test/util/opal_sos.c&quot;, line 129: warning: improper pointer/integer combination: arg #3
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/OMPI/openmpi-trunk-solaris10-sparcT2-ss12u2-v9//openmpi-trunk/test/util/opal_sos.c&quot;, line 144: warning: improper pointer/integer combination: arg #3
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/OMPI/openmpi-trunk-solaris10-sparcT2-ss12u2-v9//openmpi-trunk/test/util/opal_sos.c&quot;, line 153: warning: improper pointer/integer combination: arg #3
</span><br>
<span class="quotelev1">&gt; cc: acomp failed for /home/hargrove/OMPI/openmpi-trunk-solaris10-sparcT2-ss12u2-v9//openmpi-trunk/test/util/opal_sos.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let me know which bits are needed (config.log, opal_config.h, etc) and I'll gladly send them (but figured the entire list didn't want to see them).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352
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
<li><strong>Next message:</strong> <a href="10540.php">Jeffrey Squyres: "Re: [OMPI devel] excessive warnings on some BSDs [w/ PATCH]"</a>
<li><strong>Previous message:</strong> <a href="10538.php">Jeffrey Squyres: "Re: [OMPI devel] non-portable code in examples/Makefile"</a>
<li><strong>In reply to:</strong> <a href="10490.php">Paul Hargrove: "Re: [OMPI devel] Solaris/SOS build failure in trunk"</a>
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
