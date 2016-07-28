<?
$subject_val = "[OMPI devel] openib: Error posting send";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  1 12:50:12 2012" -->
<!-- isoreceived="20120801165012" -->
<!-- sent="Wed, 1 Aug 2012 12:50:06 -0400" -->
<!-- isosent="20120801165006" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] openib: Error posting send" -->
<!-- id="F53FF3E6-C437-44A1-A615-045D722E8B59_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] openib: Error posting send<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-01 12:50:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11358.php">Jeff Squyres: "Re: [OMPI devel] Defect from ticket #3079 still present in 1.6.1rc1"</a>
<li><strong>Previous message:</strong> <a href="11356.php">Christopher Yeoh: "[OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On the SVN trunk HEAD, when I run the following across 30 servers (at ppn=1):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca btl openib,self $hostfile $HOME/svn/ompi-tests/intel_tests/src/MPI_Iprobe_tag_c
<br>
<p>I get oodles of the following error messages:
<br>
<p>[svbu-mpi010][[21194,1],7][btl_openib_endpoint.c:689:mca_btl_openib_endpoint_connected] Error posting send
<br>
<p>But the test still finishes, claiming that it passed.
<br>
<p>What's going on here?
<br>
<p>I posted <a href="https://svn.open-mpi.org/trac/ompi/ticket/3202">https://svn.open-mpi.org/trac/ompi/ticket/3202</a> about this, too.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11358.php">Jeff Squyres: "Re: [OMPI devel] Defect from ticket #3079 still present in 1.6.1rc1"</a>
<li><strong>Previous message:</strong> <a href="11356.php">Christopher Yeoh: "[OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
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
