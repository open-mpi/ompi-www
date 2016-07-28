<?
$subject_val = "Re: [OMPI devel] fail when linking against libmpi.so";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 12 09:31:05 2014" -->
<!-- isoreceived="20140212143105" -->
<!-- sent="Wed, 12 Feb 2014 06:30:57 -0800" -->
<!-- isosent="20140212143057" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] fail when linking against libmpi.so" -->
<!-- id="48DA0F89-5F1F-418A-A9AA-57C2B5056773_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="52FB1D41.20509_at_tu-dresden.de" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-12 09:30:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14121.php">Adrian Reber: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<li><strong>Previous message:</strong> <a href="14119.php">Ralph Castain: "Re: [OMPI devel] SLURM affinity accounting in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="14110.php">Bert Wesarg: "Re: [OMPI devel] fail when linking against libmpi.so"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14129.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] fail when linking against libmpi.so"</a>
<li><strong>Reply:</strong> <a href="14129.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] fail when linking against libmpi.so"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can't  reproduce this regardless - since you are using a git mirror, are you sure you don't have a problem over there?
<br>
<p><p>On Feb 11, 2014, at 11:05 PM, Bert Wesarg &lt;Bert.Wesarg_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 02/12/2014 07:31 AM, Mike Dubman wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; Following changes caused failure:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    1. Fixes #4239: Move r30642 to v1.7 branch (purge stale session dirs at
</span><br>
<span class="quotelev2">&gt;&gt;    startup) (detail&lt;<a href="http://hpc-master.lab.mtl.com:8080/job/hpc-ompi-shmem/2122/label=hpc-test-node/changes#detail0">http://hpc-master.lab.mtl.com:8080/job/hpc-ompi-shmem/2122/label=hpc-test-node/changes#detail0</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     / gitblit&lt;<a href="http://bgate.mellanox.com:8080/commit?r=ompi-vendor.git&amp;h=26041db636e24f8fe3d7e2f997be29b27ce3b393">http://bgate.mellanox.com:8080/commit?r=ompi-vendor.git&amp;h=26041db636e24f8fe3d7e2f997be29b27ce3b393</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    )
</span><br>
<span class="quotelev2">&gt;&gt;    2. Minor cleanups
</span><br>
<span class="quotelev2">&gt;&gt; (detail&lt;<a href="http://hpc-master.lab.mtl.com:8080/job/hpc-ompi-shmem/2122/label=hpc-test-node/changes#detail1">http://hpc-master.lab.mtl.com:8080/job/hpc-ompi-shmem/2122/label=hpc-test-node/changes#detail1</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     / gitblit&lt;<a href="http://bgate.mellanox.com:8080/commit?r=ompi-vendor.git&amp;h=4220612289be922431e1bf0afc8d291bca893440">http://bgate.mellanox.com:8080/commit?r=ompi-vendor.git&amp;h=4220612289be922431e1bf0afc8d291bca893440</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    )
</span><br>
<span class="quotelev2">&gt;&gt;    3. Fixes #4053: Move r30123, 30288, 30476, 30626, 30652, r30668 to v1.7
</span><br>
<span class="quotelev2">&gt;&gt;    branch (vader fixes)
</span><br>
<span class="quotelev2">&gt;&gt; (detail&lt;<a href="http://hpc-master.lab.mtl.com:8080/job/hpc-ompi-shmem/2122/label=hpc-test-node/changes#detail2">http://hpc-master.lab.mtl.com:8080/job/hpc-ompi-shmem/2122/label=hpc-test-node/changes#detail2</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     / gitblit&lt;<a href="http://bgate.mellanox.com:8080/commit?r=ompi-vendor.git&amp;h=f1a92526778eb253098da0cf93c584de8b5f28f2">http://bgate.mellanox.com:8080/commit?r=ompi-vendor.git&amp;h=f1a92526778eb253098da0cf93c584de8b5f28f2</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    )
</span><br>
<span class="quotelev2">&gt;&gt;    4. Fixes #4242: Move r30645 to v1.7 branch (add a plm component for
</span><br>
<span class="quotelev2">&gt;&gt;    local-only operation)
</span><br>
<span class="quotelev2">&gt;&gt; (detail&lt;<a href="http://hpc-master.lab.mtl.com:8080/job/hpc-ompi-shmem/2122/label=hpc-test-node/changes#detail3">http://hpc-master.lab.mtl.com:8080/job/hpc-ompi-shmem/2122/label=hpc-test-node/changes#detail3</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     / gitblit&lt;<a href="http://bgate.mellanox.com:8080/commit?r=ompi-vendor.git&amp;h=2f2dd6dc4e26c6e482f9746599362803ee956c0f">http://bgate.mellanox.com:8080/commit?r=ompi-vendor.git&amp;h=2f2dd6dc4e26c6e482f9746599362803ee956c0f</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    )
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; failure:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; *03:03:35* make[8]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt; `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem-2/label/hpc-test-node/ompi/contrib/vt/vt/extlib/otf/tools/otfmerge/mpi'*03:03:35*
</span><br>
<span class="quotelev2">&gt;&gt;   CC       otfmerge_mpi-handler.o*03:03:35*   CC
</span><br>
<span class="quotelev2">&gt;&gt; otfmerge_mpi-otfmerge.o*03:03:35*   CCLD     otfmerge-mpi*03:03:36*
</span><br>
<span class="quotelev2">&gt;&gt; /scrap/jenkins/scrap/workspace/hpc-ompi-shmem-2/label/hpc-test-node/ompi/contrib/vt/vt/../../../.libs/libmpi.so:
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `opal_shmem_sizeof_shmem_ds'*03:03:36*
</span><br>
<span class="quotelev2">&gt;&gt; collect2: ld returned 1 exit status*03:03:36* make[8]: ***
</span><br>
<span class="quotelev2">&gt;&gt; [otfmerge-mpi] Error 1*03:03:36* make[8]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem-2/label/hpc-test-node/ompi/contrib/vt/vt/extlib/otf/tools/otfmerge/mpi'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and again, this is not a VT error. It just happened that otfmerge-mpi is the first binary which tries to link against the just built libmpi.so and fails. All other binaries which links against libmpi.so will fail too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Bert
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; *M*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dipl.-Inf. Bert Wesarg
</span><br>
<span class="quotelev1">&gt; wiss. Mitarbeiter
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Technische Universit&#228;t Dresden
</span><br>
<span class="quotelev1">&gt; Zentrum f&#252;r Informationsdienste und Hochleistungsrechnen (ZIH)
</span><br>
<span class="quotelev1">&gt; 01062 Dresden
</span><br>
<span class="quotelev1">&gt; Tel.: +49 (351) 463-42451
</span><br>
<span class="quotelev1">&gt; Fax: +49 (351) 463-37773
</span><br>
<span class="quotelev1">&gt; E-Mail: Bert.Wesarg_at_[hidden]
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14121.php">Adrian Reber: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<li><strong>Previous message:</strong> <a href="14119.php">Ralph Castain: "Re: [OMPI devel] SLURM affinity accounting in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="14110.php">Bert Wesarg: "Re: [OMPI devel] fail when linking against libmpi.so"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14129.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] fail when linking against libmpi.so"</a>
<li><strong>Reply:</strong> <a href="14129.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] fail when linking against libmpi.so"</a>
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
