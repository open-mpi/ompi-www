<?
$subject_val = "Re: [OMPI devel] fail when linking against libmpi.so";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 12 02:05:41 2014" -->
<!-- isoreceived="20140212070541" -->
<!-- sent="Wed, 12 Feb 2014 08:05:37 +0100" -->
<!-- isosent="20140212070537" -->
<!-- name="Bert Wesarg" -->
<!-- email="Bert.Wesarg_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] fail when linking against libmpi.so" -->
<!-- id="52FB1D41.20509_at_tu-dresden.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAO1Kyb1+Gn_bxZtSa9WG8HcD+BqL97yj-m4wD3kLT6xW_A8ZA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] fail when linking against libmpi.so<br>
<strong>From:</strong> Bert Wesarg (<em>Bert.Wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-12 02:05:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14111.php">Paul Kapinos: "Re: [OMPI devel] v1.7.4, mpiexec &quot;exit 1&quot; and no other warning - behaviour changed to previous versions"</a>
<li><strong>Previous message:</strong> <a href="14109.php">Mike Dubman: "[OMPI devel] fail in vt"</a>
<li><strong>In reply to:</strong> <a href="14109.php">Mike Dubman: "[OMPI devel] fail in vt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14120.php">Ralph Castain: "Re: [OMPI devel] fail when linking against libmpi.so"</a>
<li><strong>Reply:</strong> <a href="14120.php">Ralph Castain: "Re: [OMPI devel] fail when linking against libmpi.so"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 02/12/2014 07:31 AM, Mike Dubman wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; Following changes caused failure:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     1. Fixes #4239: Move r30642 to v1.7 branch (purge stale session dirs at
</span><br>
<span class="quotelev1">&gt;     startup) (detail&lt;<a href="http://hpc-master.lab.mtl.com:8080/job/hpc-ompi-shmem/2122/label=hpc-test-node/changes#detail0">http://hpc-master.lab.mtl.com:8080/job/hpc-ompi-shmem/2122/label=hpc-test-node/changes#detail0</a>&gt;
</span><br>
<span class="quotelev1">&gt;      / gitblit&lt;<a href="http://bgate.mellanox.com:8080/commit?r=ompi-vendor.git&amp;h=26041db636e24f8fe3d7e2f997be29b27ce3b393">http://bgate.mellanox.com:8080/commit?r=ompi-vendor.git&amp;h=26041db636e24f8fe3d7e2f997be29b27ce3b393</a>&gt;
</span><br>
<span class="quotelev1">&gt;     )
</span><br>
<span class="quotelev1">&gt;     2. Minor cleanups
</span><br>
<span class="quotelev1">&gt; (detail&lt;<a href="http://hpc-master.lab.mtl.com:8080/job/hpc-ompi-shmem/2122/label=hpc-test-node/changes#detail1">http://hpc-master.lab.mtl.com:8080/job/hpc-ompi-shmem/2122/label=hpc-test-node/changes#detail1</a>&gt;
</span><br>
<span class="quotelev1">&gt;      / gitblit&lt;<a href="http://bgate.mellanox.com:8080/commit?r=ompi-vendor.git&amp;h=4220612289be922431e1bf0afc8d291bca893440">http://bgate.mellanox.com:8080/commit?r=ompi-vendor.git&amp;h=4220612289be922431e1bf0afc8d291bca893440</a>&gt;
</span><br>
<span class="quotelev1">&gt;     )
</span><br>
<span class="quotelev1">&gt;     3. Fixes #4053: Move r30123, 30288, 30476, 30626, 30652, r30668 to v1.7
</span><br>
<span class="quotelev1">&gt;     branch (vader fixes)
</span><br>
<span class="quotelev1">&gt; (detail&lt;<a href="http://hpc-master.lab.mtl.com:8080/job/hpc-ompi-shmem/2122/label=hpc-test-node/changes#detail2">http://hpc-master.lab.mtl.com:8080/job/hpc-ompi-shmem/2122/label=hpc-test-node/changes#detail2</a>&gt;
</span><br>
<span class="quotelev1">&gt;      / gitblit&lt;<a href="http://bgate.mellanox.com:8080/commit?r=ompi-vendor.git&amp;h=f1a92526778eb253098da0cf93c584de8b5f28f2">http://bgate.mellanox.com:8080/commit?r=ompi-vendor.git&amp;h=f1a92526778eb253098da0cf93c584de8b5f28f2</a>&gt;
</span><br>
<span class="quotelev1">&gt;     )
</span><br>
<span class="quotelev1">&gt;     4. Fixes #4242: Move r30645 to v1.7 branch (add a plm component for
</span><br>
<span class="quotelev1">&gt;     local-only operation)
</span><br>
<span class="quotelev1">&gt; (detail&lt;<a href="http://hpc-master.lab.mtl.com:8080/job/hpc-ompi-shmem/2122/label=hpc-test-node/changes#detail3">http://hpc-master.lab.mtl.com:8080/job/hpc-ompi-shmem/2122/label=hpc-test-node/changes#detail3</a>&gt;
</span><br>
<span class="quotelev1">&gt;      / gitblit&lt;<a href="http://bgate.mellanox.com:8080/commit?r=ompi-vendor.git&amp;h=2f2dd6dc4e26c6e482f9746599362803ee956c0f">http://bgate.mellanox.com:8080/commit?r=ompi-vendor.git&amp;h=2f2dd6dc4e26c6e482f9746599362803ee956c0f</a>&gt;
</span><br>
<span class="quotelev1">&gt;     )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; failure:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *03:03:35* make[8]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem-2/label/hpc-test-node/ompi/contrib/vt/vt/extlib/otf/tools/otfmerge/mpi'*03:03:35*
</span><br>
<span class="quotelev1">&gt;    CC       otfmerge_mpi-handler.o*03:03:35*   CC
</span><br>
<span class="quotelev1">&gt; otfmerge_mpi-otfmerge.o*03:03:35*   CCLD     otfmerge-mpi*03:03:36*
</span><br>
<span class="quotelev1">&gt; /scrap/jenkins/scrap/workspace/hpc-ompi-shmem-2/label/hpc-test-node/ompi/contrib/vt/vt/../../../.libs/libmpi.so:
</span><br>
<span class="quotelev1">&gt; undefined reference to `opal_shmem_sizeof_shmem_ds'*03:03:36*
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status*03:03:36* make[8]: ***
</span><br>
<span class="quotelev1">&gt; [otfmerge-mpi] Error 1*03:03:36* make[8]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem-2/label/hpc-test-node/ompi/contrib/vt/vt/extlib/otf/tools/otfmerge/mpi'
</span><br>
<p>and again, this is not a VT error. It just happened that otfmerge-mpi is 
<br>
the first binary which tries to link against the just built libmpi.so 
<br>
and fails. All other binaries which links against libmpi.so will fail too.
<br>
<p>Thanks.
<br>
<p>Bert
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *M*
</span><br>
<p><pre>
-- 
Dipl.-Inf. Bert Wesarg
wiss. Mitarbeiter
Technische Universit&#228;t Dresden
Zentrum f&#252;r Informationsdienste und Hochleistungsrechnen (ZIH)
01062 Dresden
Tel.: +49 (351) 463-42451
Fax: +49 (351) 463-37773
E-Mail: Bert.Wesarg_at_[hidden]

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14110/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14111.php">Paul Kapinos: "Re: [OMPI devel] v1.7.4, mpiexec &quot;exit 1&quot; and no other warning - behaviour changed to previous versions"</a>
<li><strong>Previous message:</strong> <a href="14109.php">Mike Dubman: "[OMPI devel] fail in vt"</a>
<li><strong>In reply to:</strong> <a href="14109.php">Mike Dubman: "[OMPI devel] fail in vt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14120.php">Ralph Castain: "Re: [OMPI devel] fail when linking against libmpi.so"</a>
<li><strong>Reply:</strong> <a href="14120.php">Ralph Castain: "Re: [OMPI devel] fail when linking against libmpi.so"</a>
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
