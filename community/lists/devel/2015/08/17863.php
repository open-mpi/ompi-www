<?
$subject_val = "[OMPI devel] ppc atomics on master";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 26 04:10:08 2015" -->
<!-- isoreceived="20150826081008" -->
<!-- sent="Wed, 26 Aug 2015 01:10:04 -0700" -->
<!-- isosent="20150826081004" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] ppc atomics on master" -->
<!-- id="CAAvDA160Eo2=HG00tvOWY6hZLsVi=GBHj=fzYgiAaKRFmXc_gQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] ppc atomics on master<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-26 04:10:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17864.php">Paul Hargrove: "Re: [OMPI devel] Master build failures w/ Studio 12.4 on Linux w/ -m32 [w/ patch]"</a>
<li><strong>Previous message:</strong> <a href="17862.php">Ralph Castain: "Re: [OMPI devel] mca_mtl_psm and java"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For Nathan, I presume:
<br>
<p>XLC doesn't like the recently-added &quot;ll&quot; inline atomics:
<br>
<p>&quot;/gpfs-biou/phh1/OMPI/openmpi-master-linux-ppc64-xlc-11.1/openmpi-dev-2371-gea935df/opal/include/opal/sys/powerpc/atomic.h&quot;,
<br>
line 157.27: 1506-276 (S) Syntax error: possible missing string literal?
<br>
&quot;/gpfs-biou/phh1/OMPI/openmpi-master-linux-ppc64-xlc-11.1/openmpi-dev-2371-gea935df/opal/include/opal/sys/powerpc/atomic.h&quot;,
<br>
line 246.27: 1506-276 (S) Syntax error: possible missing string literal?
<br>
<p>It is complaining about the final &quot;:&quot; not being followed by a list of
<br>
clobbers.
<br>
Should be trivial to fix by removing the final colon.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17863/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17864.php">Paul Hargrove: "Re: [OMPI devel] Master build failures w/ Studio 12.4 on Linux w/ -m32 [w/ patch]"</a>
<li><strong>Previous message:</strong> <a href="17862.php">Ralph Castain: "Re: [OMPI devel] mca_mtl_psm and java"</a>
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
