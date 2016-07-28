<?
$subject_val = "[OMPI devel] fail in vt";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 12 01:32:02 2014" -->
<!-- isoreceived="20140212063202" -->
<!-- sent="Wed, 12 Feb 2014 08:31:59 +0200" -->
<!-- isosent="20140212063159" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="[OMPI devel] fail in vt" -->
<!-- id="CAAO1Kyb1+Gn_bxZtSa9WG8HcD+BqL97yj-m4wD3kLT6xW_A8ZA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] fail in vt<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-12 01:31:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14110.php">Bert Wesarg: "Re: [OMPI devel] fail when linking against libmpi.so"</a>
<li><strong>Previous message:</strong> <a href="14108.php">Paul Hargrove: "Re: [OMPI devel] v1.7.4 REGRESSION: build failure w/ old OFED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14110.php">Bert Wesarg: "Re: [OMPI devel] fail when linking against libmpi.so"</a>
<li><strong>Reply:</strong> <a href="14110.php">Bert Wesarg: "Re: [OMPI devel] fail when linking against libmpi.so"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
Following changes caused failure:
<br>
<p><p>&nbsp;&nbsp;&nbsp;1. Fixes #4239: Move r30642 to v1.7 branch (purge stale session dirs at
<br>
&nbsp;&nbsp;&nbsp;startup) (detail&lt;<a href="http://hpc-master.lab.mtl.com:8080/job/hpc-ompi-shmem/2122/label=hpc-test-node/changes#detail0">http://hpc-master.lab.mtl.com:8080/job/hpc-ompi-shmem/2122/label=hpc-test-node/changes#detail0</a>&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/ gitblit&lt;<a href="http://bgate.mellanox.com:8080/commit?r=ompi-vendor.git&amp;h=26041db636e24f8fe3d7e2f997be29b27ce3b393">http://bgate.mellanox.com:8080/commit?r=ompi-vendor.git&amp;h=26041db636e24f8fe3d7e2f997be29b27ce3b393</a>&gt;
<br>
&nbsp;&nbsp;&nbsp;)
<br>
&nbsp;&nbsp;&nbsp;2. Minor cleanups
<br>
(detail&lt;<a href="http://hpc-master.lab.mtl.com:8080/job/hpc-ompi-shmem/2122/label=hpc-test-node/changes#detail1">http://hpc-master.lab.mtl.com:8080/job/hpc-ompi-shmem/2122/label=hpc-test-node/changes#detail1</a>&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/ gitblit&lt;<a href="http://bgate.mellanox.com:8080/commit?r=ompi-vendor.git&amp;h=4220612289be922431e1bf0afc8d291bca893440">http://bgate.mellanox.com:8080/commit?r=ompi-vendor.git&amp;h=4220612289be922431e1bf0afc8d291bca893440</a>&gt;
<br>
&nbsp;&nbsp;&nbsp;)
<br>
&nbsp;&nbsp;&nbsp;3. Fixes #4053: Move r30123, 30288, 30476, 30626, 30652, r30668 to v1.7
<br>
&nbsp;&nbsp;&nbsp;branch (vader fixes)
<br>
(detail&lt;<a href="http://hpc-master.lab.mtl.com:8080/job/hpc-ompi-shmem/2122/label=hpc-test-node/changes#detail2">http://hpc-master.lab.mtl.com:8080/job/hpc-ompi-shmem/2122/label=hpc-test-node/changes#detail2</a>&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/ gitblit&lt;<a href="http://bgate.mellanox.com:8080/commit?r=ompi-vendor.git&amp;h=f1a92526778eb253098da0cf93c584de8b5f28f2">http://bgate.mellanox.com:8080/commit?r=ompi-vendor.git&amp;h=f1a92526778eb253098da0cf93c584de8b5f28f2</a>&gt;
<br>
&nbsp;&nbsp;&nbsp;)
<br>
&nbsp;&nbsp;&nbsp;4. Fixes #4242: Move r30645 to v1.7 branch (add a plm component for
<br>
&nbsp;&nbsp;&nbsp;local-only operation)
<br>
(detail&lt;<a href="http://hpc-master.lab.mtl.com:8080/job/hpc-ompi-shmem/2122/label=hpc-test-node/changes#detail3">http://hpc-master.lab.mtl.com:8080/job/hpc-ompi-shmem/2122/label=hpc-test-node/changes#detail3</a>&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/ gitblit&lt;<a href="http://bgate.mellanox.com:8080/commit?r=ompi-vendor.git&amp;h=2f2dd6dc4e26c6e482f9746599362803ee956c0f">http://bgate.mellanox.com:8080/commit?r=ompi-vendor.git&amp;h=2f2dd6dc4e26c6e482f9746599362803ee956c0f</a>&gt;
<br>
&nbsp;&nbsp;&nbsp;)
<br>
<p><p>failure:
<br>
<p>*03:03:35* make[8]: Entering directory
<br>
`/scrap/jenkins/scrap/workspace/hpc-ompi-shmem-2/label/hpc-test-node/ompi/contrib/vt/vt/extlib/otf/tools/otfmerge/mpi'*03:03:35*
<br>
&nbsp;&nbsp;CC       otfmerge_mpi-handler.o*03:03:35*   CC
<br>
otfmerge_mpi-otfmerge.o*03:03:35*   CCLD     otfmerge-mpi*03:03:36*
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem-2/label/hpc-test-node/ompi/contrib/vt/vt/../../../.libs/libmpi.so:
<br>
undefined reference to `opal_shmem_sizeof_shmem_ds'*03:03:36*
<br>
collect2: ld returned 1 exit status*03:03:36* make[8]: ***
<br>
[otfmerge-mpi] Error 1*03:03:36* make[8]: Leaving directory
<br>
`/scrap/jenkins/scrap/workspace/hpc-ompi-shmem-2/label/hpc-test-node/ompi/contrib/vt/vt/extlib/otf/tools/otfmerge/mpi'
<br>
<p>*M*
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14109/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14110.php">Bert Wesarg: "Re: [OMPI devel] fail when linking against libmpi.so"</a>
<li><strong>Previous message:</strong> <a href="14108.php">Paul Hargrove: "Re: [OMPI devel] v1.7.4 REGRESSION: build failure w/ old OFED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14110.php">Bert Wesarg: "Re: [OMPI devel] fail when linking against libmpi.so"</a>
<li><strong>Reply:</strong> <a href="14110.php">Bert Wesarg: "Re: [OMPI devel] fail when linking against libmpi.so"</a>
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
