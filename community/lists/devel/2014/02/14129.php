<?
$subject_val = "Re: [OMPI devel] fail when linking against libmpi.so";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 12 13:37:29 2014" -->
<!-- isoreceived="20140212183729" -->
<!-- sent="Wed, 12 Feb 2014 18:37:25 +0000" -->
<!-- isosent="20140212183725" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] fail when linking against libmpi.so" -->
<!-- id="0854DDB0-10C2-47F3-A3E9-54E134B9C05E_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="48DA0F89-5F1F-418A-A9AA-57C2B5056773_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-12 13:37:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14130.php">Adrian Reber: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<li><strong>Previous message:</strong> <a href="14128.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<li><strong>In reply to:</strong> <a href="14120.php">Ralph Castain: "Re: [OMPI devel] fail when linking against libmpi.so"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14135.php">Mike Dubman: "Re: [OMPI devel] fail when linking against libmpi.so"</a>
<li><strong>Reply:</strong> <a href="14135.php">Mike Dubman: "Re: [OMPI devel] fail when linking against libmpi.so"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mike -- this should be fixed.  Has Jenkins been re-run yet?
<br>
<p><p>On Feb 12, 2014, at 9:30 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
&nbsp;wrote:
<br>
<p><span class="quotelev1">&gt; I can't  reproduce this regardless - since you are using a git mirror, are you sure you don't have a problem over there?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 11, 2014, at 11:05 PM, Bert Wesarg &lt;Bert.Wesarg_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 02/12/2014 07:31 AM, Mike Dubman wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Following changes caused failure:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   1. Fixes #4239: Move r30642 to v1.7 branch (purge stale session dirs at
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   startup) (detail&lt;<a href="http://hpc-master.lab.mtl.com:8080/job/hpc-ompi-shmem/2122/label=hpc-test-node/changes#detail0">http://hpc-master.lab.mtl.com:8080/job/hpc-ompi-shmem/2122/label=hpc-test-node/changes#detail0</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    / gitblit&lt;<a href="http://bgate.mellanox.com:8080/commit?r=ompi-vendor.git&amp;h=26041db636e24f8fe3d7e2f997be29b27ce3b393">http://bgate.mellanox.com:8080/commit?r=ompi-vendor.git&amp;h=26041db636e24f8fe3d7e2f997be29b27ce3b393</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   2. Minor cleanups
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (detail&lt;<a href="http://hpc-master.lab.mtl.com:8080/job/hpc-ompi-shmem/2122/label=hpc-test-node/changes#detail1">http://hpc-master.lab.mtl.com:8080/job/hpc-ompi-shmem/2122/label=hpc-test-node/changes#detail1</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    / gitblit&lt;<a href="http://bgate.mellanox.com:8080/commit?r=ompi-vendor.git&amp;h=4220612289be922431e1bf0afc8d291bca893440">http://bgate.mellanox.com:8080/commit?r=ompi-vendor.git&amp;h=4220612289be922431e1bf0afc8d291bca893440</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   3. Fixes #4053: Move r30123, 30288, 30476, 30626, 30652, r30668 to v1.7
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   branch (vader fixes)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (detail&lt;<a href="http://hpc-master.lab.mtl.com:8080/job/hpc-ompi-shmem/2122/label=hpc-test-node/changes#detail2">http://hpc-master.lab.mtl.com:8080/job/hpc-ompi-shmem/2122/label=hpc-test-node/changes#detail2</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    / gitblit&lt;<a href="http://bgate.mellanox.com:8080/commit?r=ompi-vendor.git&amp;h=f1a92526778eb253098da0cf93c584de8b5f28f2">http://bgate.mellanox.com:8080/commit?r=ompi-vendor.git&amp;h=f1a92526778eb253098da0cf93c584de8b5f28f2</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   4. Fixes #4242: Move r30645 to v1.7 branch (add a plm component for
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   local-only operation)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (detail&lt;<a href="http://hpc-master.lab.mtl.com:8080/job/hpc-ompi-shmem/2122/label=hpc-test-node/changes#detail3">http://hpc-master.lab.mtl.com:8080/job/hpc-ompi-shmem/2122/label=hpc-test-node/changes#detail3</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    / gitblit&lt;<a href="http://bgate.mellanox.com:8080/commit?r=ompi-vendor.git&amp;h=2f2dd6dc4e26c6e482f9746599362803ee956c0f">http://bgate.mellanox.com:8080/commit?r=ompi-vendor.git&amp;h=2f2dd6dc4e26c6e482f9746599362803ee956c0f</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   )
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failure:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *03:03:35* make[8]: Entering directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem-2/label/hpc-test-node/ompi/contrib/vt/vt/extlib/otf/tools/otfmerge/mpi'*03:03:35*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  CC       otfmerge_mpi-handler.o*03:03:35*   CC
</span><br>
<span class="quotelev3">&gt;&gt;&gt; otfmerge_mpi-otfmerge.o*03:03:35*   CCLD     otfmerge-mpi*03:03:36*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /scrap/jenkins/scrap/workspace/hpc-ompi-shmem-2/label/hpc-test-node/ompi/contrib/vt/vt/../../../.libs/libmpi.so:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; undefined reference to `opal_shmem_sizeof_shmem_ds'*03:03:36*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; collect2: ld returned 1 exit status*03:03:36* make[8]: ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [otfmerge-mpi] Error 1*03:03:36* make[8]: Leaving directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem-2/label/hpc-test-node/ompi/contrib/vt/vt/extlib/otf/tools/otfmerge/mpi'
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and again, this is not a VT error. It just happened that otfmerge-mpi is the first binary which tries to link against the just built libmpi.so and fails. All other binaries which links against libmpi.so will fail too.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Bert
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *M*
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Dipl.-Inf. Bert Wesarg
</span><br>
<span class="quotelev2">&gt;&gt; wiss. Mitarbeiter
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Technische Universit&#228;t Dresden
</span><br>
<span class="quotelev2">&gt;&gt; Zentrum f&#252;r Informationsdienste und Hochleistungsrechnen (ZIH)
</span><br>
<span class="quotelev2">&gt;&gt; 01062 Dresden
</span><br>
<span class="quotelev2">&gt;&gt; Tel.: +49 (351) 463-42451
</span><br>
<span class="quotelev2">&gt;&gt; Fax: +49 (351) 463-37773
</span><br>
<span class="quotelev2">&gt;&gt; E-Mail: Bert.Wesarg_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="14130.php">Adrian Reber: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<li><strong>Previous message:</strong> <a href="14128.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<li><strong>In reply to:</strong> <a href="14120.php">Ralph Castain: "Re: [OMPI devel] fail when linking against libmpi.so"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14135.php">Mike Dubman: "Re: [OMPI devel] fail when linking against libmpi.so"</a>
<li><strong>Reply:</strong> <a href="14135.php">Mike Dubman: "Re: [OMPI devel] fail when linking against libmpi.so"</a>
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
