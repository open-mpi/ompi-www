<?
$subject_val = "Re: [OMPI devel] hwloc and pmi";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 10 11:53:54 2014" -->
<!-- isoreceived="20140710155354" -->
<!-- sent="Thu, 10 Jul 2014 09:53:53 -0600" -->
<!-- isosent="20140710155353" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] hwloc and pmi" -->
<!-- id="20140710155353.GN64418_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="78F98EDF-590D-4438-A5F2-2261574A358E_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] hwloc and pmi<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-10 11:53:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15100.php">Ralph Castain: "Re: [OMPI devel] RFC: Move the Open MPI communication infrastructure in OPAL"</a>
<li><strong>Previous message:</strong> <a href="15098.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32166 - in trunk: ompi/mca/coll/fca	ompi/mca/coll/hcoll ompi/mca/mtl/mxm ompi/tools/ompi_info	opal/mca/base opal/runtime"</a>
<li><strong>In reply to:</strong> <a href="15096.php">Ralph Castain: "Re: [OMPI devel] hwloc and pmi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15110.php">Mike Dubman: "Re: [OMPI devel] hwloc and pmi"</a>
<li><strong>Reply:</strong> <a href="15110.php">Mike Dubman: "Re: [OMPI devel] hwloc and pmi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nope, just added a missing file to the tarball.
<br>
<p>-Nathan
<br>
<p>On Thu, Jul 10, 2014 at 06:54:19AM -0700, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt;    IIRC, I thought I saw a change to that makefile.am flow thru yesterday?
</span><br>
<span class="quotelev1">&gt;    Could be there was an error in it
</span><br>
<span class="quotelev1">&gt;    On Jul 10, 2014, at 5:26 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;    wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Shouldn't be - PMI should be linking against the internal hwloc. 
</span><br>
<span class="quotelev1">&gt;      I'm AFK and can't look at this. Have a look at other components that use
</span><br>
<span class="quotelev1">&gt;      hwloc and copy their header file setup and make file.am setup. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Sent from my phone. No type good. 
</span><br>
<span class="quotelev1">&gt;      On Jul 10, 2014, at 8:22 AM, &quot;Mike Dubman&quot; &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;      wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Hi guys,
</span><br>
<span class="quotelev1">&gt;        jenkins node failing on this.
</span><br>
<span class="quotelev1">&gt;        is hwloc-devel now required to be available as part of distro?
</span><br>
<span class="quotelev1">&gt;        Thanks
</span><br>
<span class="quotelev1">&gt;        M
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  15:14:11 make[3]: Leaving directory `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/opal'
</span><br>
<span class="quotelev1">&gt;  15:14:11 make[2]: Leaving directory `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/opal'
</span><br>
<span class="quotelev1">&gt;  15:14:11 Making install in mca/common/pmi
</span><br>
<span class="quotelev1">&gt;  15:14:11 make[2]: Entering directory `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/opal/mca/common/pmi'
</span><br>
<span class="quotelev1">&gt;  15:14:11   CC       common_pmi.lo
</span><br>
<span class="quotelev1">&gt;  15:14:11   CCLD     libmca_common_pmi.la
</span><br>
<span class="quotelev1">&gt;  15:14:11 /usr/bin/ld: cannot find -lhwloc
</span><br>
<span class="quotelev1">&gt;  15:14:11 collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt;  15:14:11 make[2]: *** [libmca_common_pmi.la] Error 1
</span><br>
<span class="quotelev1">&gt;  15:14:11 make[2]: Leaving directory `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/opal/mca/common/pmi'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        _______________________________________________
</span><br>
<span class="quotelev1">&gt;        devel mailing list
</span><br>
<span class="quotelev1">&gt;        devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;        Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;        Link to this post:
</span><br>
<span class="quotelev1">&gt;        <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15090.php">http://www.open-mpi.org/community/lists/devel/2014/07/15090.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      _______________________________________________
</span><br>
<span class="quotelev1">&gt;      devel mailing list
</span><br>
<span class="quotelev1">&gt;      devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;      Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;      Link to this post:
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15091.php">http://www.open-mpi.org/community/lists/devel/2014/07/15091.php</a>
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15096.php">http://www.open-mpi.org/community/lists/devel/2014/07/15096.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15099/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15100.php">Ralph Castain: "Re: [OMPI devel] RFC: Move the Open MPI communication infrastructure in OPAL"</a>
<li><strong>Previous message:</strong> <a href="15098.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32166 - in trunk: ompi/mca/coll/fca	ompi/mca/coll/hcoll ompi/mca/mtl/mxm ompi/tools/ompi_info	opal/mca/base opal/runtime"</a>
<li><strong>In reply to:</strong> <a href="15096.php">Ralph Castain: "Re: [OMPI devel] hwloc and pmi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15110.php">Mike Dubman: "Re: [OMPI devel] hwloc and pmi"</a>
<li><strong>Reply:</strong> <a href="15110.php">Mike Dubman: "Re: [OMPI devel] hwloc and pmi"</a>
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
