<?
$subject_val = "Re: [OMPI devel] Solaris/SOS build failure in trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 18 07:39:36 2012" -->
<!-- isoreceived="20120218123936" -->
<!-- sent="Sat, 18 Feb 2012 04:39:31 -0800" -->
<!-- isosent="20120218123931" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Solaris/SOS build failure in trunk" -->
<!-- id="CAAvDA16T-D3Lqm=mg33r751X8XXx4esfwExk0mndVM7Obhigpg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F3EA156.2070103_at_lbl.gov" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-18 07:39:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10491.php">Paul H. Hargrove: "[OMPI devel] flex warning from flex-2.5.4"</a>
<li><strong>Previous message:</strong> <a href="10489.php">Dmitri Gribenko: "Re: [OMPI devel] Building otfcompress with binutils-gold fails"</a>
<li><strong>In reply to:</strong> <a href="10483.php">Paul H. Hargrove: "[OMPI devel] Solaris/SOS build failure in trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10539.php">Jeffrey Squyres: "Re: [OMPI devel] Solaris/SOS build failure in trunk"</a>
<li><strong>Reply:</strong> <a href="10539.php">Jeffrey Squyres: "Re: [OMPI devel] Solaris/SOS build failure in trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Same has been seen on Solaris11/x86-64 w/ the Studio 12.3 compiler.
<br>
However, a gcc build on the same system was fine.
<br>
<p>-Paul
<br>
<p>On Fri, Feb 17, 2012 at 10:49 AM, Paul H. Hargrove &lt;PHHargrove_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Building last night's trunk tarball (1.7a1r25944) On Solaris10/SPARC w/
</span><br>
<span class="quotelev1">&gt; Solaris Studio compilers if failing in &quot;make check&quot;.
</span><br>
<span class="quotelev1">&gt; This same problem is presenr with the 12.2 and 12.3 compilers and both
</span><br>
<span class="quotelev1">&gt; v8plus and v9 ABIs:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Making check in util
</span><br>
<span class="quotelev2">&gt;&gt; make  opal_bit_ops opal_path_nfs  opal_sos
</span><br>
<span class="quotelev2">&gt;&gt;  CC     opal_bit_ops.o
</span><br>
<span class="quotelev2">&gt;&gt;  CCLD   opal_bit_ops
</span><br>
<span class="quotelev2">&gt;&gt;  CC     opal_path_nfs.o
</span><br>
<span class="quotelev2">&gt;&gt;  CCLD   opal_path_nfs
</span><br>
<span class="quotelev2">&gt;&gt;  CC     opal_sos.o
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/home/hargrove/OMPI/openmpi-**trunk-solaris10-sparcT2-**
</span><br>
<span class="quotelev2">&gt;&gt; ss12u2-v9//openmpi-trunk/test/**util/opal_sos.c&quot;, line 90: undefined
</span><br>
<span class="quotelev2">&gt;&gt; symbol: OPAL_SOS_FUNCTION
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/home/hargrove/OMPI/openmpi-**trunk-solaris10-sparcT2-**
</span><br>
<span class="quotelev2">&gt;&gt; ss12u2-v9//openmpi-trunk/test/**util/opal_sos.c&quot;, line 90: warning:
</span><br>
<span class="quotelev2">&gt;&gt; improper pointer/integer combination: arg #3
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/home/hargrove/OMPI/openmpi-**trunk-solaris10-sparcT2-**
</span><br>
<span class="quotelev2">&gt;&gt; ss12u2-v9//openmpi-trunk/test/**util/opal_sos.c&quot;, line 109: warning:
</span><br>
<span class="quotelev2">&gt;&gt; improper pointer/integer combination: arg #3
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/home/hargrove/OMPI/openmpi-**trunk-solaris10-sparcT2-**
</span><br>
<span class="quotelev2">&gt;&gt; ss12u2-v9//openmpi-trunk/test/**util/opal_sos.c&quot;, line 129: warning:
</span><br>
<span class="quotelev2">&gt;&gt; improper pointer/integer combination: arg #3
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/home/hargrove/OMPI/openmpi-**trunk-solaris10-sparcT2-**
</span><br>
<span class="quotelev2">&gt;&gt; ss12u2-v9//openmpi-trunk/test/**util/opal_sos.c&quot;, line 144: warning:
</span><br>
<span class="quotelev2">&gt;&gt; improper pointer/integer combination: arg #3
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/home/hargrove/OMPI/openmpi-**trunk-solaris10-sparcT2-**
</span><br>
<span class="quotelev2">&gt;&gt; ss12u2-v9//openmpi-trunk/test/**util/opal_sos.c&quot;, line 153: warning:
</span><br>
<span class="quotelev2">&gt;&gt; improper pointer/integer combination: arg #3
</span><br>
<span class="quotelev2">&gt;&gt; cc: acomp failed for /home/hargrove/OMPI/openmpi-**
</span><br>
<span class="quotelev2">&gt;&gt; trunk-solaris10-sparcT2-**ss12u2-v9//openmpi-trunk/test/**util/opal_sos.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me know which bits are needed (config.log, opal_config.h, etc) and
</span><br>
<span class="quotelev1">&gt; I'll gladly send them (but figured the entire list didn't want to see them).
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
<span class="quotelev1">&gt; ______________________________**_________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/**mailman/listinfo.cgi/devel<http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/**mailman/listinfo.cgi/devel<http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10490/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10491.php">Paul H. Hargrove: "[OMPI devel] flex warning from flex-2.5.4"</a>
<li><strong>Previous message:</strong> <a href="10489.php">Dmitri Gribenko: "Re: [OMPI devel] Building otfcompress with binutils-gold fails"</a>
<li><strong>In reply to:</strong> <a href="10483.php">Paul H. Hargrove: "[OMPI devel] Solaris/SOS build failure in trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10539.php">Jeffrey Squyres: "Re: [OMPI devel] Solaris/SOS build failure in trunk"</a>
<li><strong>Reply:</strong> <a href="10539.php">Jeffrey Squyres: "Re: [OMPI devel] Solaris/SOS build failure in trunk"</a>
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
