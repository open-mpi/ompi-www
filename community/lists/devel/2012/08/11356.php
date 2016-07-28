<?
$subject_val = "[OMPI devel] MPI_THREAD_MULTIPLE testing on trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  1 09:44:45 2012" -->
<!-- isoreceived="20120801134445" -->
<!-- sent="Wed, 1 Aug 2012 23:14:43 +0930" -->
<!-- isosent="20120801134443" -->
<!-- name="Christopher Yeoh" -->
<!-- email="cyeoh_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_THREAD_MULTIPLE testing on trunk" -->
<!-- id="20120801231443.26028670_at_Gantu" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk<br>
<strong>From:</strong> Christopher Yeoh (<em>cyeoh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-01 09:44:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11357.php">Jeff Squyres: "[OMPI devel] openib: Error posting send"</a>
<li><strong>Previous message:</strong> <a href="11355.php">Edgar Gabriel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26934 - trunk/ompi/mca/io/ompio"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11359.php">Jeff Squyres: "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
<li><strong>Reply:</strong> <a href="11359.php">Jeff Squyres: "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I was wondering if anyone else recently had tried to run trunk
<br>
configured with --enable-mpi-thread-multiple and an MPI program that
<br>
passed MPI_THREAD_MULTIPLE to MPI_Init_thread on a machine using the
<br>
openib btl? 
<br>
<p>I'm seeing even very basic programs hang. If it is working for you,
<br>
what architecture are you running on? (may help me debug what is going
<br>
on with my setup). In contrast, 1.6 on the same machines work fine for
<br>
me (well as fine as MPI_THREAD_MULTIPLE has ever worked anyway ;-) 
<br>
<p>Regards,
<br>
<p>Chris
<br>
<pre>
-- 
cyeoh_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11357.php">Jeff Squyres: "[OMPI devel] openib: Error posting send"</a>
<li><strong>Previous message:</strong> <a href="11355.php">Edgar Gabriel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26934 - trunk/ompi/mca/io/ompio"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11359.php">Jeff Squyres: "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
<li><strong>Reply:</strong> <a href="11359.php">Jeff Squyres: "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
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
