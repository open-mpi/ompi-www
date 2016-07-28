<?
$subject_val = "Re: [OMPI devel] fail when linking against libmpi.so";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 13 01:27:33 2014" -->
<!-- isoreceived="20140213062733" -->
<!-- sent="Thu, 13 Feb 2014 08:27:32 +0200" -->
<!-- isosent="20140213062732" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] fail when linking against libmpi.so" -->
<!-- id="CAAO1KybHTkBDp2kOqZmix6cBvJ6nbsgv_=5zMt4eOTUqB-xsLg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0854DDB0-10C2-47F3-A3E9-54E134B9C05E_at_cisco.com" -->
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
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-13 01:27:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14136.php">Marco Atzeri: "Re: [OMPI devel] 1.7.5 status"</a>
<li><strong>Previous message:</strong> <a href="14134.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.5 status"</a>
<li><strong>In reply to:</strong> <a href="14129.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] fail when linking against libmpi.so"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
yes, not it is fine
<br>
Thanks!
<br>
<p><p>On Wed, Feb 12, 2014 at 8:37 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Mike -- this should be fixed.  Has Jenkins been re-run yet?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 12, 2014, at 9:30 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;  wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I can't  reproduce this regardless - since you are using a git mirror,
</span><br>
<span class="quotelev1">&gt; are you sure you don't have a problem over there?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 11, 2014, at 11:05 PM, Bert Wesarg &lt;Bert.Wesarg_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On 02/12/2014 07:31 AM, Mike Dubman wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Following changes caused failure:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   1. Fixes #4239: Move r30642 to v1.7 branch (purge stale session dirs
</span><br>
<span class="quotelev1">&gt; at
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   startup) (detail&lt;
</span><br>
<span class="quotelev1">&gt; <a href="http://hpc-master.lab.mtl.com:8080/job/hpc-ompi-shmem/2122/label=hpc-test-node/changes#detail0">http://hpc-master.lab.mtl.com:8080/job/hpc-ompi-shmem/2122/label=hpc-test-node/changes#detail0</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    / gitblit&lt;
</span><br>
<span class="quotelev1">&gt; <a href="http://bgate.mellanox.com:8080/commit?r=ompi-vendor.git&amp;h=26041db636e24f8fe3d7e2f997be29b27ce3b393">http://bgate.mellanox.com:8080/commit?r=ompi-vendor.git&amp;h=26041db636e24f8fe3d7e2f997be29b27ce3b393</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   )
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   2. Minor cleanups
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (detail&lt;
</span><br>
<span class="quotelev1">&gt; <a href="http://hpc-master.lab.mtl.com:8080/job/hpc-ompi-shmem/2122/label=hpc-test-node/changes#detail1">http://hpc-master.lab.mtl.com:8080/job/hpc-ompi-shmem/2122/label=hpc-test-node/changes#detail1</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    / gitblit&lt;
</span><br>
<span class="quotelev1">&gt; <a href="http://bgate.mellanox.com:8080/commit?r=ompi-vendor.git&amp;h=4220612289be922431e1bf0afc8d291bca893440">http://bgate.mellanox.com:8080/commit?r=ompi-vendor.git&amp;h=4220612289be922431e1bf0afc8d291bca893440</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   )
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   3. Fixes #4053: Move r30123, 30288, 30476, 30626, 30652, r30668 to
</span><br>
<span class="quotelev1">&gt; v1.7
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   branch (vader fixes)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (detail&lt;
</span><br>
<span class="quotelev1">&gt; <a href="http://hpc-master.lab.mtl.com:8080/job/hpc-ompi-shmem/2122/label=hpc-test-node/changes#detail2">http://hpc-master.lab.mtl.com:8080/job/hpc-ompi-shmem/2122/label=hpc-test-node/changes#detail2</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    / gitblit&lt;
</span><br>
<span class="quotelev1">&gt; <a href="http://bgate.mellanox.com:8080/commit?r=ompi-vendor.git&amp;h=f1a92526778eb253098da0cf93c584de8b5f28f2">http://bgate.mellanox.com:8080/commit?r=ompi-vendor.git&amp;h=f1a92526778eb253098da0cf93c584de8b5f28f2</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   )
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   4. Fixes #4242: Move r30645 to v1.7 branch (add a plm component for
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   local-only operation)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (detail&lt;
</span><br>
<span class="quotelev1">&gt; <a href="http://hpc-master.lab.mtl.com:8080/job/hpc-ompi-shmem/2122/label=hpc-test-node/changes#detail3">http://hpc-master.lab.mtl.com:8080/job/hpc-ompi-shmem/2122/label=hpc-test-node/changes#detail3</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    / gitblit&lt;
</span><br>
<span class="quotelev1">&gt; <a href="http://bgate.mellanox.com:8080/commit?r=ompi-vendor.git&amp;h=2f2dd6dc4e26c6e482f9746599362803ee956c0f">http://bgate.mellanox.com:8080/commit?r=ompi-vendor.git&amp;h=2f2dd6dc4e26c6e482f9746599362803ee956c0f</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   )
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; failure:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; *03:03:35* make[8]: Entering directory
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem-2/label/hpc-test-node/ompi/contrib/vt/vt/extlib/otf/tools/otfmerge/mpi'*03:03:35*
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  CC       otfmerge_mpi-handler.o*03:03:35*   CC
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; otfmerge_mpi-otfmerge.o*03:03:35*   CCLD     otfmerge-mpi*03:03:36*
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; /scrap/jenkins/scrap/workspace/hpc-ompi-shmem-2/label/hpc-test-node/ompi/contrib/vt/vt/../../../.libs/libmpi.so:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; undefined reference to `opal_shmem_sizeof_shmem_ds'*03:03:36*
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; collect2: ld returned 1 exit status*03:03:36* make[8]: ***
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [otfmerge-mpi] Error 1*03:03:36* make[8]: Leaving directory
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem-2/label/hpc-test-node/ompi/contrib/vt/vt/extlib/otf/tools/otfmerge/mpi'
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and again, this is not a VT error. It just happened that otfmerge-mpi
</span><br>
<span class="quotelev1">&gt; is the first binary which tries to link against the just built libmpi.so
</span><br>
<span class="quotelev1">&gt; and fails. All other binaries which links against libmpi.so will fail too.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Bert
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; *M*
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Dipl.-Inf. Bert Wesarg
</span><br>
<span class="quotelev3">&gt; &gt;&gt; wiss. Mitarbeiter
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Technische Universit&#228;t Dresden
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Zentrum f&#252;r Informationsdienste und Hochleistungsrechnen (ZIH)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 01062 Dresden
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Tel.: +49 (351) 463-42451
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Fax: +49 (351) 463-37773
</span><br>
<span class="quotelev3">&gt; &gt;&gt; E-Mail: Bert.Wesarg_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14135/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14136.php">Marco Atzeri: "Re: [OMPI devel] 1.7.5 status"</a>
<li><strong>Previous message:</strong> <a href="14134.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.5 status"</a>
<li><strong>In reply to:</strong> <a href="14129.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] fail when linking against libmpi.so"</a>
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
