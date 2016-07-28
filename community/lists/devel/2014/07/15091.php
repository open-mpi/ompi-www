<?
$subject_val = "Re: [OMPI devel] hwloc and pmi";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 10 08:26:40 2014" -->
<!-- isoreceived="20140710122640" -->
<!-- sent="Thu, 10 Jul 2014 12:26:38 +0000" -->
<!-- isosent="20140710122638" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] hwloc and pmi" -->
<!-- id="ACC3E4EE-09AE-471E-9BB0-D8A5CABC3D7D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAO1KybfAkEk4s5vbKa5OHn7+_nsH9xW7OOZ_sCSLJjS6Nofqg_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-10 08:26:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15092.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk and fortran errors"</a>
<li><strong>Previous message:</strong> <a href="15090.php">Mike Dubman: "[OMPI devel] hwloc and pmi"</a>
<li><strong>In reply to:</strong> <a href="15090.php">Mike Dubman: "[OMPI devel] hwloc and pmi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15096.php">Ralph Castain: "Re: [OMPI devel] hwloc and pmi"</a>
<li><strong>Reply:</strong> <a href="15096.php">Ralph Castain: "Re: [OMPI devel] hwloc and pmi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Shouldn't be - PMI should be linking against the internal hwloc.
<br>
<p>I'm AFK and can't look at this. Have a look at other components that use hwloc and copy their header file setup and make file.am setup.
<br>
<p>Sent from my phone. No type good.
<br>
<p>On Jul 10, 2014, at 8:22 AM, &quot;Mike Dubman&quot; &lt;miked_at_[hidden]&lt;mailto:miked_at_[hidden]&gt;&gt; wrote:
<br>
<p><p>Hi guys,
<br>
<p>jenkins node failing on this.
<br>
is hwloc-devel now required to be available as part of distro?
<br>
<p>Thanks
<br>
M
<br>
<p><p>15:14:11 make[3]: Leaving directory `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/opal'
<br>
15:14:11 make[2]: Leaving directory `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/opal'
<br>
15:14:11 Making install in mca/common/pmi
<br>
15:14:11 make[2]: Entering directory `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/opal/mca/common/pmi'
<br>
15:14:11   CC       common_pmi.lo
<br>
15:14:11   CCLD     libmca_common_pmi.la&lt;<a href="http://libmca_common_pmi.la">http://libmca_common_pmi.la</a>&gt;
<br>
15:14:11 /usr/bin/ld: cannot find -lhwloc
<br>
15:14:11 collect2: ld returned 1 exit status
<br>
15:14:11 make[2]: *** [libmca_common_pmi.la&lt;<a href="http://libmca_common_pmi.la">http://libmca_common_pmi.la</a>&gt;] Error 1
<br>
15:14:11 make[2]: Leaving directory `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/opal/mca/common/pmi'
<br>
<p><p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15090.php">http://www.open-mpi.org/community/lists/devel/2014/07/15090.php</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15091/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15092.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk and fortran errors"</a>
<li><strong>Previous message:</strong> <a href="15090.php">Mike Dubman: "[OMPI devel] hwloc and pmi"</a>
<li><strong>In reply to:</strong> <a href="15090.php">Mike Dubman: "[OMPI devel] hwloc and pmi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15096.php">Ralph Castain: "Re: [OMPI devel] hwloc and pmi"</a>
<li><strong>Reply:</strong> <a href="15096.php">Ralph Castain: "Re: [OMPI devel] hwloc and pmi"</a>
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
