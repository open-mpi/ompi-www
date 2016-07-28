<?
$subject_val = "[OMPI devel] Solaris/SOS build failure in trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 17 13:50:07 2012" -->
<!-- isoreceived="20120217185007" -->
<!-- sent="Fri, 17 Feb 2012 10:49:58 -0800" -->
<!-- isosent="20120217184958" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] Solaris/SOS build failure in trunk" -->
<!-- id="4F3EA156.2070103_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Solaris/SOS build failure in trunk<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-17 13:49:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10484.php">Paul H. Hargrove: "[OMPI devel] excessive warnings on some BSDs [w/ PATCH]"</a>
<li><strong>Previous message:</strong> <a href="10482.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10490.php">Paul Hargrove: "Re: [OMPI devel] Solaris/SOS build failure in trunk"</a>
<li><strong>Reply:</strong> <a href="10490.php">Paul Hargrove: "Re: [OMPI devel] Solaris/SOS build failure in trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Building last night's trunk tarball (1.7a1r25944) On Solaris10/SPARC w/ 
<br>
Solaris Studio compilers if failing in &quot;make check&quot;.
<br>
This same problem is presenr with the 12.2 and 12.3 compilers and both 
<br>
v8plus and v9 ABIs:
<br>
<p><span class="quotelev1">&gt; Making check in util
</span><br>
<span class="quotelev1">&gt; make  opal_bit_ops opal_path_nfs  opal_sos
</span><br>
<span class="quotelev1">&gt;   CC     opal_bit_ops.o
</span><br>
<span class="quotelev1">&gt;   CCLD   opal_bit_ops
</span><br>
<span class="quotelev1">&gt;   CC     opal_path_nfs.o
</span><br>
<span class="quotelev1">&gt;   CCLD   opal_path_nfs
</span><br>
<span class="quotelev1">&gt;   CC     opal_sos.o
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/OMPI/openmpi-trunk-solaris10-sparcT2-ss12u2-v9//openmpi-trunk/test/util/opal_sos.c&quot;, 
</span><br>
<span class="quotelev1">&gt; line 90: undefined symbol: OPAL_SOS_FUNCTION
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/OMPI/openmpi-trunk-solaris10-sparcT2-ss12u2-v9//openmpi-trunk/test/util/opal_sos.c&quot;, 
</span><br>
<span class="quotelev1">&gt; line 90: warning: improper pointer/integer combination: arg #3
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/OMPI/openmpi-trunk-solaris10-sparcT2-ss12u2-v9//openmpi-trunk/test/util/opal_sos.c&quot;, 
</span><br>
<span class="quotelev1">&gt; line 109: warning: improper pointer/integer combination: arg #3
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/OMPI/openmpi-trunk-solaris10-sparcT2-ss12u2-v9//openmpi-trunk/test/util/opal_sos.c&quot;, 
</span><br>
<span class="quotelev1">&gt; line 129: warning: improper pointer/integer combination: arg #3
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/OMPI/openmpi-trunk-solaris10-sparcT2-ss12u2-v9//openmpi-trunk/test/util/opal_sos.c&quot;, 
</span><br>
<span class="quotelev1">&gt; line 144: warning: improper pointer/integer combination: arg #3
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/OMPI/openmpi-trunk-solaris10-sparcT2-ss12u2-v9//openmpi-trunk/test/util/opal_sos.c&quot;, 
</span><br>
<span class="quotelev1">&gt; line 153: warning: improper pointer/integer combination: arg #3
</span><br>
<span class="quotelev1">&gt; cc: acomp failed for 
</span><br>
<span class="quotelev1">&gt; /home/hargrove/OMPI/openmpi-trunk-solaris10-sparcT2-ss12u2-v9//openmpi-trunk/test/util/opal_sos.c
</span><br>
<p>Let me know which bits are needed (config.log, opal_config.h, etc) and 
<br>
I'll gladly send them (but figured the entire list didn't want to see them).
<br>
<p>-Paul
<br>
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
<li><strong>Next message:</strong> <a href="10484.php">Paul H. Hargrove: "[OMPI devel] excessive warnings on some BSDs [w/ PATCH]"</a>
<li><strong>Previous message:</strong> <a href="10482.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10490.php">Paul Hargrove: "Re: [OMPI devel] Solaris/SOS build failure in trunk"</a>
<li><strong>Reply:</strong> <a href="10490.php">Paul Hargrove: "Re: [OMPI devel] Solaris/SOS build failure in trunk"</a>
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
