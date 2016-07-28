<?
$subject_val = "Re: [OMPI devel] hwloc and pmi";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 10 09:54:48 2014" -->
<!-- isoreceived="20140710135448" -->
<!-- sent="Thu, 10 Jul 2014 06:54:19 -0700" -->
<!-- isosent="20140710135419" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] hwloc and pmi" -->
<!-- id="78F98EDF-590D-4438-A5F2-2261574A358E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="ACC3E4EE-09AE-471E-9BB0-D8A5CABC3D7D_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-10 09:54:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15097.php">Mike Dubman: "[OMPI devel] openmpi.spec"</a>
<li><strong>Previous message:</strong> <a href="15095.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Shared library version numbers for 1.8.2"</a>
<li><strong>In reply to:</strong> <a href="15091.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hwloc and pmi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15099.php">Nathan Hjelm: "Re: [OMPI devel] hwloc and pmi"</a>
<li><strong>Reply:</strong> <a href="15099.php">Nathan Hjelm: "Re: [OMPI devel] hwloc and pmi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
IIRC, I thought I saw a change to that makefile.am flow thru yesterday? Could be there was an error in it
<br>
<p>On Jul 10, 2014, at 5:26 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Shouldn't be - PMI should be linking against the internal hwloc. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm AFK and can't look at this. Have a look at other components that use hwloc and copy their header file setup and make file.am setup. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sent from my phone. No type good. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 10, 2014, at 8:22 AM, &quot;Mike Dubman&quot; &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi guys,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; jenkins node failing on this.
</span><br>
<span class="quotelev2">&gt;&gt; is hwloc-devel now required to be available as part of distro?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; M
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 15:14:11 make[3]: Leaving directory `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/opal'
</span><br>
<span class="quotelev2">&gt;&gt; 15:14:11 make[2]: Leaving directory `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/opal'
</span><br>
<span class="quotelev2">&gt;&gt; 15:14:11 Making install in mca/common/pmi
</span><br>
<span class="quotelev2">&gt;&gt; 15:14:11 make[2]: Entering directory `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/opal/mca/common/pmi'
</span><br>
<span class="quotelev2">&gt;&gt; 15:14:11   CC       common_pmi.lo
</span><br>
<span class="quotelev2">&gt;&gt; 15:14:11   CCLD     libmca_common_pmi.la
</span><br>
<span class="quotelev2">&gt;&gt; 15:14:11 /usr/bin/ld: cannot find -lhwloc
</span><br>
<span class="quotelev2">&gt;&gt; 15:14:11 collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt; 15:14:11 make[2]: *** [libmca_common_pmi.la] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; 15:14:11 make[2]: Leaving directory `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/opal/mca/common/pmi'
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15090.php">http://www.open-mpi.org/community/lists/devel/2014/07/15090.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15091.php">http://www.open-mpi.org/community/lists/devel/2014/07/15091.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15096/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15097.php">Mike Dubman: "[OMPI devel] openmpi.spec"</a>
<li><strong>Previous message:</strong> <a href="15095.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Shared library version numbers for 1.8.2"</a>
<li><strong>In reply to:</strong> <a href="15091.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hwloc and pmi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15099.php">Nathan Hjelm: "Re: [OMPI devel] hwloc and pmi"</a>
<li><strong>Reply:</strong> <a href="15099.php">Nathan Hjelm: "Re: [OMPI devel] hwloc and pmi"</a>
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
