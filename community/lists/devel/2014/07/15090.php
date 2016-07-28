<?
$subject_val = "[OMPI devel] hwloc and pmi";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 10 08:22:48 2014" -->
<!-- isoreceived="20140710122248" -->
<!-- sent="Thu, 10 Jul 2014 15:22:45 +0300" -->
<!-- isosent="20140710122245" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="[OMPI devel] hwloc and pmi" -->
<!-- id="CAAO1KybfAkEk4s5vbKa5OHn7+_nsH9xW7OOZ_sCSLJjS6Nofqg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] hwloc and pmi<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-10 08:22:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15091.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hwloc and pmi"</a>
<li><strong>Previous message:</strong> <a href="15089.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk and fortran errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15091.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hwloc and pmi"</a>
<li><strong>Reply:</strong> <a href="15091.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hwloc and pmi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi guys,
<br>
<p>jenkins node failing on this.
<br>
is hwloc-devel now required to be available as part of distro?
<br>
<p>Thanks
<br>
M
<br>
<p>*15:14:11* make[3]: Leaving directory
<br>
`/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/opal'*15:14:11*
<br>
make[2]: Leaving directory
<br>
`/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/opal'*15:14:11*
<br>
Making install in mca/common/pmi*15:14:11* make[2]: Entering directory
<br>
`/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/opal/mca/common/pmi'*15:14:11*
<br>
&nbsp;&nbsp;CC       common_pmi.lo*15:14:11*   CCLD
<br>
libmca_common_pmi.la*15:14:11* /usr/bin/ld: cannot find
<br>
-lhwloc*15:14:11* collect2: ld returned 1 exit status*15:14:11*
<br>
make[2]: *** [libmca_common_pmi.la] Error 1*15:14:11* make[2]: Leaving
<br>
directory `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/opal/mca/common/pmi'
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15090/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15091.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hwloc and pmi"</a>
<li><strong>Previous message:</strong> <a href="15089.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk and fortran errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15091.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hwloc and pmi"</a>
<li><strong>Reply:</strong> <a href="15091.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hwloc and pmi"</a>
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
